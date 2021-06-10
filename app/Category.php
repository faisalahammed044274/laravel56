<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['category_name', 'category_description', 'publication_status'];

    public static function saveCategoryInfo($request)
    {
        //querybuilder process without mvc
        // DB::table('categories')->insert([
        //     'category_name' => $request->category_name,
        //     'category_description' => $request->category_description,
        //     'publication_status' => $request->publication_status,
        // ]);

        //eloquent 1 - Eloquent Query

        // $category = new Category();
        // $category->category_name = $request->category_name;
        // $category->category_description = $request->category_description;
        // $category->publication_status = $request->publication_status;
        // $category->save();

        //eloquent 2 - Eloquent Query

        Category::create($request->all());
    }

    public static function updateCategoryInfo($request)
    {
        $category = Category::find($request->id);
        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
        $category->publication_status = $request->publication_status;
        $category->save();
    }

}
