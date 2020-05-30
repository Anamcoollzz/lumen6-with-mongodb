<?php

namespace App\Services;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Http\Request;

class LogService {

    private $host;
    private $userId;

    public function __construct()
    {
        $this->host = config('log.host', 'localhost:8001');
        $this->userId = null;
    }

    private function exec(array $json)
    {
        try {
            $client = new Client();
            $response = $client->request('POST', $this->host.'/batch', [
                'json'  => $json,
                'headers'       => [
                    'Accept'    => 'application/json'
                ]
            ]);
            $contents = $response->getBody()->getContents();
            if($contents){
                return json_decode($contents, true);
            }
            return json_decode([]);
        } catch (ClientException $e) {
            if ($e->hasResponse()) {
                $response = $e->getResponse();
                $responseBodyAsString = $response->getBody()->getContents();
                return json_decode($responseBodyAsString, true);
            }
            return null;
        }
    }

    public function setUserId($userId)
    {
        $this->userid = $userId;
        return $this;
    }

    public function saveBatch(array $logData)
    {
        return $this->exec([
            'logs'  => $logData
        ]);
    }

    public function saveFromRequest(Request $request, String $table)
    {
        $logData = [];
        foreach($request->all() as $key => $log){
            $logData[] = [
                'user_id'   => $this->userId,
                'action'    => 'create',
                'table'     => $table,
                'deskripsi' => $key,
                'before'    => null,
                'after'     => $log,
            ];
        }
        return $this->saveBatch($logData);
    }

    public function updateFromRequest(Request $request, String $table, $model)
    {
        $logData = [];
        foreach($request->all() as $key => $log){
            $logData[] = [
                'user_id'   => $this->userId,
                'action'    => 'update',
                'table'     => $table,
                'deskripsi' => $key,
                'before'    => $model[$key],
                'after'     => $log,
            ];
        }
        return $this->saveBatch($logData);
    }

    public function saveForDeleted($model, $table)
    {
        return $this->exec([
            'logs' => [
                [

                'user_id'   => $this->userId,
                'action'    => 'delete',
                'table'     => $table,
                'deskripsi' => $table,
                'before'    => $model,
                'after'     => null,
                ]
            ]
        ]);
    }

}
