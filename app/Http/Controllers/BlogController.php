<?php

namespace App\Http\Controllers;

use App\Blog;
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

        $blog = new Blog();
        $blog->category_id = $request->category_id;
        $blog->blog_title = $request->blog_title;
        $blog->blog_short_description = $request->blog_short_description;
        $blog->blog_long_description = $request->blog_long_description;
        $blog->blog_image = $directory . $imageName;
        $blog->publication_status = $request->publication_status;
        $blog->save();

        return redirect('/blog/add-blog')->with('message', 'Blog info created successfully');
    }

}
