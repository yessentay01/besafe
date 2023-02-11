@extends('layouts.main')

@section('content')
    <style>
        .title{
            font-size: 18px;
            font-weight: 600;
            padding-top: 30px;
        }
    </style>
    <div class="w-100 h-screen">
        <div class="container p-3 mx-auto">
            <h1 class="title text-white text-center text-xxl ">Profile</h1>
            <img src="{{$user['profile_photo_path']}}" alt="{{$user['name']}}" class="rounded-full h-20 w-20 object-cover mx-auto mt-5">
            <div class="col-span-6 sm:col-span-4 mt-6">
                <label class="block font-medium text-sm text-gray-400" for="name">
                    <span>Name</span>
                </label>
                <input class=" rounded-md shadow-sm bg-gray-800 border-gray-500 text-white mt-1 block w-full" id="name" type="text"  value="{{$user['name']}}" autocomplete="name">
                <div class="mt-2" style="display: none;">
                    <p class="text-sm text-red-600"></p>
                </div>
            </div>
            <div class="col-span-6 sm:col-span-4 mt-6">
                <label class="block font-medium text-sm text-gray-400" for="name">
                    <span>Email</span>
                </label>
                <input class=" rounded-md shadow-sm bg-gray-800 border-gray-500 text-white mt-1 block w-full" id="email" type="email" autocomplete="email"  value="{{$user['email']}}" readonly>
                <div class="mt-2" style="display: none;">
                    <p class="text-sm text-red-600"></p>
                </div>
            </div>
            <div class="col-span-6 sm:col-span-4 mt-6">
                <a href="#" class="inline-flex items-center justify-center px-4 py-2  border border-gray-300 rounded-md font-semibold text-xs  uppercase tracking-widest shadow-sm  disabled:opacity-25 transition bg-gray-600 border-gray-600 text-white mt-2 mr-2">Save</a>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"  class=" inline-flex items-center justify-center px-4 py-2  border border-gray-300 rounded-md font-semibold text-xs  uppercase tracking-widest shadow-sm  disabled:opacity-25 transition bg-gray-600 border-gray-600 text-white mt-2 mr-2">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    </div>


@endsection
