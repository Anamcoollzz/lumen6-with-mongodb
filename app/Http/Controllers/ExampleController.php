<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * @OA\Get(
     *      path="/example",
     *      tags={"Example"},
     *      @OA\Parameter(in="query", required=false, name="data_count", @OA\Schema(type="int"), description="total data"),
     *      @OA\Parameter(in="query", required=false, name="order_by", @OA\Schema(type="string"), description="latest or oldest"),
     *      @OA\Parameter(in="query", required=false, name="query", @OA\Schema(type="string"), description="search query"),
     *      @OA\Response(
     *          response=200,
     *          description="success",
     *          @OA\JsonContent(
     *              @OA\Property(property="message", type="string", example="Example data successfully loaded"),
     *              @OA\Property(property="data", ref="#/components/schemas/ExamplePagination"),
     *          )
     *      )
     * )
     */
    public function index()
    {

    }

    /**
     * @OA\Post(
     *      path="/example",
     *      tags={"Example"},
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(ref="#/components/schemas/ExampleRequest")
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="success",
     *          @OA\JsonContent(
     *              @OA\Property(property="message", type="string"),
     *              @OA\Property(property="data", ref="#/components/schemas/ExampleModel"),
     *          )
     *      )
     * )
     */
    public function store(Request $request)
    {

    }

    /**
     * @OA\Put(
     *      path="/example/{_id}",
     *      tags={"Example"},
     *      @OA\Parameter(in="path", required=true, name="_id", @OA\Schema(type="string"), description="example id"),
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(ref="#/components/schemas/ExampleRequest")
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="success",
     *          @OA\JsonContent(
     *              @OA\Property(property="message", type="string", example="Master template successfully updated"),
     *              @OA\Property(property="data", ref="#/components/schemas/ExampleModel"),
     *          )
     *      )
     * )
     */

    public function update(Request $request, $id)
    {

    }

    /**
     * @OA\Get(
     *      path="/example/{_id}",
     *      tags={"Example"},
     *      @OA\Parameter(in="path", required=true, name="_id", @OA\Schema(type="string"), description="example id"),
     *      @OA\Response(
     *          response=200,
     *          description="success",
     *          @OA\JsonContent(
     *              @OA\Property(property="message", type="string", example="Example data successfully loaded"),
     *              @OA\Property(property="data", ref="#/components/schemas/ExampleModel"),
     *          )
     *      )
     * )
     */

    public function show($id)
    {

    }

    /**
     * @OA\Delete(
     *      path="/example/{_id}",
     *      tags={"Example"},
     *      @OA\Parameter(in="path", required=true, name="_id", @OA\Schema(type="string"), description="example id"),
     *      @OA\Response(
     *          response=200,
     *          description="success",
     *          @OA\JsonContent(
     *              @OA\Property(property="message", type="string", example="Example data successfully removed"),
     *          )
     *      )
     * )
     */

    public function destroy($id)
    {

    }
}
