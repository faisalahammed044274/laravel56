@extends('admin.master')
@section('pagetitle')
    Manage Blog
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
                                <th>Blog Title</th>
                                <th>Blog Short Description</th>
                                <th>Blog Image</th>
                                <th>Publication Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($i = 1)
                                @foreach ($blogs as $blog)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $blog->category_name }}</td>
                                        <td>{{ $blog->blog_title }}</td>
                                        <td>{{ $blog->blog_short_description }}</td>
                                        <td><img src="{{ asset($blog->blog_image) }}" alt="" height=100px width=180px ></td>
                                        <td>{{ $blog->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
                                        <td>
                                            <a href="{{ route('edit-blog', ['id' => $blog->id]) }}">Edit</a>
                                            <a href="#" id="{{ $blog->id }}" onclick="
                                                        event.preventDefault();
                                                        var check = confirm('Are you sure to delete this item ??');
                                                        if(check){
                                                            document.getElementById('deleteCategoryForm' + '{{ $blog->id }}').submit();
                                                        } ">Delete</a>
                                            <form id="deleteCategoryForm{{ $blog->id }}"
                                                action="{{ route('delete-category') }}" method="POST">
                                                @csrf
                                                <input type="hidden" value="{{ $blog->id }}" name="id" />
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
