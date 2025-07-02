@extends('layouts.app')
@section('content')
<div class="max-w-xl mx-auto p-8 bg-white rounded-xl shadow mt-6">
    <h2 class="text-2xl font-bold mb-4">Edit Post</h2>
    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{ old('title', $post->title) }}" class="w-full border rounded px-3 py-2 mb-4" required>
        <input type="text" name="autor" value="{{ old('autor', $post->autor) }}" class="w-full border rounded px-3 py-2 mb-4" required>
        <textarea name="post" class="w-full border rounded px-3 py-2 mb-4" required>{{ old('post', $post->post) }}</textarea>
        <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded">Update</button>
        <a href="{{ route('posts.index') }}" class="ml-4 text-gray-500">Cancel</a>
    </form>
</div>
@endsection
