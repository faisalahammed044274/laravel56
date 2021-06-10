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

        // raw process
        //    $image = $_FILES['blog_image'];
        //     print_r($image);
        //     exit();

        // framework process
        $image = $request->file('blog_image');
        $imageName = $image->getClientOriginalName();
        $directory = 'blog-image/';
        $image->move($directory, $imageName);

        return 'success';
    }

}
