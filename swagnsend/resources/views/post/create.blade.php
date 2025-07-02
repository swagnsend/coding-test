@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto p-6 bg-white rounded-xl shadow mt-6">
    <h2 class="text-2xl font-bold mb-4 text-indigo-700">Create New Post</h2>
    <form action="{{ route('posts.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label class="block font-medium">Title</label>
            <input type="text" name="title" class="w-full border rounded px-3 py-2" required>
        </div>
        <div>
            <label class="block font-medium">Author</label>
            <input type="text" name="autor" class="w-full border rounded px-3 py-2" required>
        </div>
        <div>
            <label class="block font-medium">Content</label>
            <textarea name="post" class="w-full border rounded px-3 py-2" rows="4" required></textarea>
        </div>
        <button type="submit"
                class="bg-indigo-600 text-white px-4 py-2 rounded shadow hover:bg-indigo-800 transition">
            Create
        </button>
        <a href="{{ route('posts.index') }}" class="ml-3 text-gray-500 hover:underline">Cancel</a>
    </form>
</div>
@endsection

