@extends('clients.app')
@section('layout')

<header class="fixed top-0 inset-x-0 flex flex-col">
    <div class="bg-blue-800">
        <div class="container mx-auto p-4 flex gap-4 text-xs text-white">
            <p>
                0895401998822
            </p>

            <p>
                email@email.com
            </p>
        </div>
    </div>
    <div class="bg-white shadow-md">
        <div class="container mx-auto flex justify-between gap-4 py-6">
            <div class="flex-1">
                <span class="font-bold">
                    Image
                </span>
            </div>
            <div class="flex gap-8">
                <a href="/">
                    Beranda
                </a>
                <a href="/profile">
                    Profil
                </a>
                <a href="#">
                    Kontak
                </a>
            </div>
        </div>
    </div>
</header>

<div class="mt-[121px] min-h-[calc(100dvh-121px-192px)]">
    @yield('content')
</div>

<footer class="bg-blue-800">
    <div class="container mx-auto py-12 text-white">
        <div class="grid gap-4 grid-cols-4">
            <div class="">
                image
            </div>
            <div class="flex flex-col gap-4">
                <p class="font-bold">
                    Tentang Kami
                </p>

                <ul class="list-none space-y-2">
                    <li>Profil</li>
                    <li>Visi, Misi dan Tujuan</li>
                </ul>
            </div>
            <div class="flex flex-col gap-4">
                <p class="font-bold">
                    Layanan
                </p>

                <ul class="list-none space-y-2">
                    <li>Profil</li>
                    <li>Visi, Misi dan Tujuan</li>
                </ul>
            </div>
        </div>
    </div>
</footer>
@endsection