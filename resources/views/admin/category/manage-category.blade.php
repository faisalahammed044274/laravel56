@extends('admin.master')
@section('pagetitle')
    Manage Catagory
@endsection

@section('body')

    <h1 class="text-center text-success">{{ Session::get('message') }}</h1>


    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Categories</h1>
        <p class="mb-4">Download official <a target="_blank" href="#">Documentation
            </a></p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Example Categories</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>SL No</th>
                                <th>Category Name</th>
                                <th>Category Description</th>
                                <th>Publication Status</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @php($i = 1)
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $category->category_name }}</td>
                                        <td>{{ $category->category_description }}</td>
                                        <td>{{ $category->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
                                        <td>
                                            <a href="{{ route('edit-category', ['id' => $category->id]) }}">Edit</a>
                                            <a href="#" id="{{ $category->id }}" onclick="
                                                        event.preventDefault();
                                                        var check = confirm('Are you sure to delete this item ??');
                                                        if(check){
                                                            document.getElementById('deleteCategoryForm' + '{{ $category->id }}').submit();
                                                        } ">Delete</a>
                                            <form id="deleteCategoryForm{{ $category->id }}"
                                                action="{{ route('delete-category') }}" method="POST">
                                                @csrf
                                                <input type="hidden" value="{{ $category->id }}" name="id" />
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    @endsection
