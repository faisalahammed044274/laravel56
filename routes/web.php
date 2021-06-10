<?php

Route::get('/', [
    'uses' => 'ProjectController@index',
    'as' => '/',
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/category/add-category', 'CategoryController@addCategory')->name('add-category');

Route::get('/category/manage-category', 'CategoryController@manageCategory')->name('manage-category');

Route::post('/category/new-category', 'CategoryController@newCategory')->name('new-category');

Route::get('/category/edit-category/{xxxx}', 'CategoryController@editCategory')->name('edit-category');

Route::post('/category/update-category', 'CategoryController@updateCategory')->name('update-category');

Route::post('/category/delete-category', 'CategoryController@deleteCategory')->name('delete-category');

Route::get('/blog/add-blog', 'BlogController@addBlog')->name('add-blog');

Route::get('/blog/manage-blog', 'BlogController@manageBlog')->name('manage-blog');

Route::post('/blog/new-blog', 'BlogController@newBlog')->name('new-blog');
