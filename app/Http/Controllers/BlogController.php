<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function addBlog()
    {
        return view('admin.blog.add-blog', [
            'categories' => Category::where('publication_status', 1)->get(),
        ]);
    }

    public function manageBlog()
    {
        return view('admin.blog.manage-blog');
    }

    public function newBlog(Request $request)
    {
        return $request->all();
    }

}
