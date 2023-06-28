<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Post;

class ApiController extends Controller
{
    public function __construct()
    {
    }

    public function apiPost(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'data' => 'required|array',
            'data.*.post_detail' => 'required',
            'data.*.post_type' => 'required',
            // Add more fields as needed
        ]);

        $dataToInsert = [];

        foreach ($validatedData['data'] as $val) {
            $dataToInsert[] =  Post::insert([
                'post_detail' => $val['post_detail'],
                'post_type' => $val['post_type'],
                'created_at' => date("Y-m-d h:i:s"),
                'updated_at' => date("Y-m-d h:i:s"),
                // Add other fields as needed
            ]);
        }


        // Return a response indicating success or failure
        /* ตัวอย่าง array
                {
                "data": [
                    {
                    "post_detail": "value1",
                    "post_type": "value2"
                    },
                    {
                    "post_detail": "value3",
                    "post_type": "value4"
                    }
                        ]
                }
        */
        return response()->json(['message' => 'Data inserted successfully']);
    }
}
