<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addCategory()
    {
        return view('admin.category.add-category');
    }

    public function manageCategory()
    {
        $categories = Category::all();
        return view('admin.category.manage-category', [
            'categories' => category::all(),
        ]);
    }

    public function newCategory(Request $request)
    {
        // Process-1
        Category::saveCategoryInfo($request);

        // Process-2
        // $category = new Category();
        // $category->saveCategoryInfo($request);
        return redirect('/category/manage-category')->with('message', 'Catagory info saved successfully!');

    }

    public function editCategory($id)
    {
        // $category = Category::find($id);
        return view('admin.category.edit-category', [
            // 'category' => $category,
            'category' => Category::find($id),
        ]);
    }

    public function updateCategory(Request $request)
    {
        Category::updateCategoryInfo($request);
        return redirect('/category/manage-category')->with('message', 'Category info successfully Updated ');
    }

    public function deleteCategory(Request $request)
    {
        $category = Category::find($request->id);
        $category->delete();

        return redirect('/category/manage-category')->with('message', 'Category info successfully Deleted');
    }

}
