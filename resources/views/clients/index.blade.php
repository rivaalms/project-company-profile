@extends('clients.layouts.default')
@section('content')
<div class="grid gap-16">
    <div class="h-[calc(100dvh-72px)] bg-cover flex items-center" style="background-image: url('/images/bookshelfs.jpg')">
        <div class="container mx-auto">
            <div class="max-w-[40%] bg-white p-8 shadow-md rounded-md">
                <div class="space-y-4">
                    <h1 class="text-2xl font-medium">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </h1>

                    <p class="text-gray-600">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad facere ratione quibusdam iusto omnis, quisquam laborum ex facilis libero hic dicta magni natus est, quae totam recusandae ullam rem. Sed?
                    </p>

                    <div class="flex gap-4">
                        <button class="bg-blue-500 hover:bg-blue-600 active:bg-blue-600 px-4 py-2 rounded text-white font-medium outline-none focus:ring-4 focus:ring-blue-300 transition">
                            Lorem
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @foreach($categories as $c)
    <div class="container mx-auto">
        <div class="space-y-4">
            <p class="text-xl">{{$c->name}}</p>

            <div class="grid grid-cols-3 gap-4">
                @foreach($c->posts as $p)
                <div class="p-6 shadow bg-white hover:bg-gray-100 hover:cursor-pointer hover:shadow-md transition">
                    <p class="text-lg font-medium mb-4">
                        {{ $p->title }}
                    </p>
                    <div class="truncate">
                        {!! $p->body !!}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection