@extends('admin.master')
@section('pagetitle')
    Edit Category
@endsection

@section('body')
    <div class="row shadow mb-5 bg-white rounded">
        <div class="card col-md-12">
            <form action="{{ route('update-category') }}" method="post" class="form-horizontal">
                @csrf
                <div class="form-group">
                    <br>
                    <label class="control-label col-md-3">Category Name</label>
                    <div class="col-md-9">
                        <input type="text" name="category_name" value="{{ $category->category_name }}"
                            class="form-control" />
                        <input type="hidden" name="id" value="{{ $category->id }}" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Category Description</label>
                    <div class="col-md-9">
                        <textarea class="form-control" name="category_description" id="" cols="30"
                            rows="10">{{ $category->category_description }}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Publication Status</label>
                    <div class="col-md-9 radio">
                        <label><input type="radio" {{ $category->publication_status == 1 ? 'checked' : ' ' }}
                                name="publication_status" value="1" /> Published</label>
                        <label><input type="radio" {{ $category->publication_status == 0 ? 'checked' : ' ' }}
                                name="publication_status" value="0" /> Unpublished</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-9">
                        <input type="submit" name="btn" class="btn btn-success btn-block" value="Update Category Info">
                    </div>
                    <br>
                </div>
            </form>
        </div>
    </div>


@endsection
