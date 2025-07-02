@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto p-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-indigo-700">All Posts</h1>
        <a href="{{ route('posts.create') }}"
           class="bg-indigo-600 text-white px-4 py-2 rounded shadow hover:bg-indigo-800 transition">
           + New Post
        </a>
    </div>
    <table class="min-w-full bg-white rounded-lg shadow">
        <thead class="bg-indigo-50">
            <tr>
                <th class="p-3">Title</th>
                <th class="p-3">Author</th>
                <th class="p-3">Actions</th>
            </tr>
        </thead>
        <tbody>
        @forelse($posts as $post)
            <tr class="border-t">
                <td class="p-3">{{ $post->title }}</td>
                <td class="p-3">{{ $post->autor }}</td>
                <td class="p-3 flex gap-2">
                    <a href="{{ route('posts.show', $post) }}"
                       class="text-blue-600 hover:underline">View</a>
                    <a href="{{ route('posts.edit', $post) }}"
                       class="text-yellow-600 hover:underline">Edit</a>
                    <form action="{{ route('posts.destroy', $post) }}" method="POST" onsubmit="return confirm('Delete?')" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:underline">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="3" class="text-center p-4 text-gray-400">No posts found.</td></tr>
        @endforelse
        </tbody>
    </table>
</div>

@if($posts->count())
    <div class="max-w-7xl mx-auto px-4 py-10">
        <h2 class="text-2xl font-bold mb-6 text-indigo-800">All Posts</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($posts as $post)
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition duration-200 flex flex-col">
                <div class="p-6 flex-1 flex flex-col">
                    <h2 class="text-xl font-bold text-indigo-700 mb-2 truncate">{{ $post->title }}</h2>
                    <p class="text-gray-500 text-sm mb-3">by {{ $post->autor }} <span class="text-gray-300">|</span>
                        <span class="text-gray-400">{{ $post->created_at ? $post->created_at->format('M d, Y') : '' }}</span>
                    </p>
                    <p class="text-gray-700 mb-4 flex-1">{{ \Illuminate\Support\Str::limit($post->post, 100) }}</p>
                    <div class="flex items-center gap-3 mt-auto">
                        <a href="{{ route('posts.show', $post) }}" class="bg-indigo-100 text-indigo-700 px-4 py-2 rounded font-semibold hover:bg-indigo-200 transition">
                            Read More
                        </a>
                        <a href="{{ route('posts.edit', $post) }}" class="bg-yellow-100 text-yellow-700 px-4 py-2 rounded font-semibold hover:bg-yellow-200 transition">
                            Edit
                        </a>
                        <form action="{{ route('posts.destroy', $post) }}" method="POST" onsubmit="return confirm('Are you sure?')" class="inline">
                            @csrf @method('DELETE')
                            <button type="submit" class="bg-red-100 text-red-700 px-4 py-2 rounded font-semibold hover:bg-red-200 transition">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        @if(method_exists($posts, 'links'))
        <div class="flex justify-center mt-10">
            {{ $posts->links('pagination::tailwind') }}
        </div>
        @endif
    </div>
@endif

@endsection
