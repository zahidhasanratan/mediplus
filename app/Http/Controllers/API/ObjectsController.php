<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\News;
use App\Objects;
use App\Others;
use Illuminate\Http\Request;

class ObjectsController extends Controller
{
    public function object1()
    {
        // Fetch the object with id = 1, ordered by id in ascending order
        $objects = Objects::orderBy('id', 'ASC')
            ->where('id', 1)
            ->get();

        return response()->json($objects);  // Return the filtered data as JSON
    }

    public function object2()
    {
        // Fetch the object with id = 1, ordered by id in ascending order
        $objects = Objects::orderBy('id', 'ASC')
            ->where('id', 2)
            ->get();

        return response()->json($objects);  // Return the filtered data as JSON
    }
    public function object3()
    {
        // Fetch the object with id = 1, ordered by id in ascending order
        $objects = Others::orderBy('id', 'ASC')
            ->where('id', 2)
            ->get();

        return response()->json($objects);  // Return the filtered data as JSON
    }


}
