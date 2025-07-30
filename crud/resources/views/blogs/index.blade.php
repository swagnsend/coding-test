@extends('blogs.layout')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="pull-left">
                <h2>Blog</h2>
            </div>
            <div class="pull-right">
                
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Title></th>
                        <th>Post</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($blogs as $blog)
                    <tr>
                        <td>{{ $blog->id }}</td>
                        <td>{{ $blog->title }}</td>
                        <td>{{ $blog->post }}</td>
                        <td>
                            <a href="{{ route('blog.edit', $blog->id) }}">Edit</a> |
                            <a href="{{ route('blog.delete', $blog->id) }}">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>                        
        </div>
    </div>