@extends('clients.layouts.default')
@section('content')
<div class="container mx-auto py-20">
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-blue-900">
            {{ $post->title }}
        </h1>
        <div class="flex gap-4 text-sm">
            <p class="text-gray-500">
                Published at: {{ $post->published_at->format('d M Y') }}
            </p>
        </div>
    </div>

    <div class="grid grid-cols-3 gap-4">
        <div class="col-span-2">
            {!! $post->body !!}
        </div>

        <div class="border-l px-4">
            <p>Artikel Terbaru</p>
        </div>
    </div>
</div>
@endsection