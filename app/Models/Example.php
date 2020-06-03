<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

/**
 * @OA\Schema(
 *      schema="ExampleModel",
 *      description="ExampleModel",
 *      type="object",
 *      title="ExampleModel",
 *      @OA\Property(property="_id", type="string", example="5ed100e5eb9c10255950cce0"),
 *      @OA\Property(property="example", type="string"),
 * )
 */

/**
 * @OA\Schema(
 *      schema="ExampleRequest",
 *      description="ExampleRequest",
 *      type="object",
 *      title="ExampleRequest",
 *      @OA\Property(property="example", type="string"),
 * )
 */

/**
 * @OA\Schema(
 *      schema="ExamplePagination",
 *      description="ExamplePagination",
 *      title="ExamplePagination",
 *      @OA\Property(property="current_page", type="int", example=1),
 *      @OA\Property(property="data", type="array", @OA\Items(ref="#/components/schemas/ExampleModel")),
 *      @OA\Property(property="first_page_url", type="string", example="http://localhost:8000/example?page=1"),
 *      @OA\Property(property="from", type="int", example=1),
 *      @OA\Property(property="last_page", type="int", example=11),
 *      @OA\Property(property="last_page_url", type="string", example="http://localhost:8000/example?page=11"),
 *      @OA\Property(property="next_page_url", type="string", example="http://localhost:8000/example?page=12"),
 *      @OA\Property(property="per_page", type="int", example=15),
 *      @OA\Property(property="prev_page_url", type="int", example=null),
 *      @OA\Property(property="to", type="int", example=15),
 *      @OA\Property(property="total", type="int", example=15),
 * )
 */

class Example extends Model {

    protected $fillable = [

    ];

    protected $hidden = [

    ];

    protected $dates = [

    ];

}
