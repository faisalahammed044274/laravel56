@extends('admin.master')
@section('pagetitle')
    Add Catagory
@endsection

@section('body')

    <h1 class="text-center text-success">{{ Session::get('message') }}</h1>

    <div class="row shadow mb-5 bg-white rounded">
        <div class="card col-md-12">
            <form action="{{ route('new-blog') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="control-label col-md-3">Category Name</label>
                    <div class="col-md-9">
                        <select name="category_id" class="form-control">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Blog Title</label>
                    <div class="col-md-9">
                        <input type="text" name="blog_title" id="" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Blog Short Description</label>
                    <div class="col-md-9">
                        <textarea class="form-control" name="blog_short_description" id="" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Blog Long Description</label>
                    <div class="col-md-9">
                        <textarea class="form-control" name="blog_long_description" id="editor" cols="30"
                            rows="10"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <br>
                    <label class="control-label col-md-3">Blog Image</label>
                    <div class="col-md-9">
                        <input type="file" name="blog_image" id="" accept="image/*" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Publication Status</label>
                    <div class="col-md-9 radio">
                        <label><input type="radio" name="publication_status" value="1" /> Published</label>
                        <label><input type="radio" name="publication_status" value="0" /> Unpublished</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-9">
                        <input type="submit" name="btn" class="btn btn-success btn-block" value="Save Category Info">
                    </div>
                    <br>
                </div>
            </form>
        </div>
    </div>


@endsection
