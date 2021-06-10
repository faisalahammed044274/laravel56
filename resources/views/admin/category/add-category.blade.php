@extends('admin.master')
@section('pagetitle')
    Add Catagory
@endsection

@section('body')

    <h1 class="text-center text-success">{{ Session::get('message') }}</h1>

    <div class="row shadow mb-5 bg-white rounded">
        <div class="card col-md-12">
            <form action="{{ route('new-category') }}" method="post" class="form-horizontal">
                @csrf
                <div class="form-group">
                    <br>
                    <label class="control-label col-md-3">Category Name</label>
                    <div class="col-md-9">
                        <input type="text" name="category_name" id="" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Category Description</label>
                    <div class="col-md-9">
                        <textarea class="form-control" name="category_description" id="" cols="30" rows="10"></textarea>
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
