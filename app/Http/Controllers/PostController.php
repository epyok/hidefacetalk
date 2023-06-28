<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function createPost(Request $request)
    {
        Post::insert([
            'post_detail' => $request->post_detail,
            'post_type' => $request->post_type,
            'user_id' => Auth::user()->id,
            'created_at' => date("Y-m-d h:i:s"),
            'updated_at' => date("Y-m-d h:i:s"),
        ]);

        return back()->with('success', 'บันทึกข้อมูลเรียบร้อยแล้ว');
    }

    
}
