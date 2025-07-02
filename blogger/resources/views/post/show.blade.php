
@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto mt-10">
    <div class="bg-white rounded-2xl shadow-xl p-8">
        <h1 class="text-3xl font-extrabold text-indigo-800 mb-2">{{ $post->title }}</h1>
        <div class="flex items-center gap-3 mb-6">
            <div class="w-10 h-10 bg-indigo-100 rounded-full flex items-center justify-center text-indigo-700 font-bold">
                {{ strtoupper(substr($post->autor, 0, 1)) }}
            </div>
            <span class="text-gray-500 text-sm">by {{ $post->autor }}</span>
            <span class="text-gray-300 px-2">|</span>
            <span class="text-gray-400 text-xs">
                {{ $post->created_at ? $post->created_at->format('M d, Y H:i') : '' }}
            </span>
        </div>
        <div class="prose max-w-none text-gray-700 mb-6">
            {{ $post->post }}
        </div>
        <div class="flex gap-3 mt-6">
            <a href="{{ route('posts.index') }}" class="bg-gray-100 text-gray-700 px-4 py-2 rounded shadow hover:bg-gray-200 transition">Back</a>
            <a href="{{ route('posts.edit', $post) }}" class="bg-yellow-400 text-white px-4 py-2 rounded shadow hover:bg-yellow-500 transition">Edit</a>
            <form action="{{ route('posts.destroy', $post) }}" method="POST" onsubmit="return confirm('Are you sure to delete?')" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded shadow hover:bg-red-600 transition">Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection
