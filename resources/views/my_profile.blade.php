@extends('layouts.app')

@section('content')
    <div class="flex items-center">
        <div class="md:w-1/2 md:mx-auto">
            <div class="flex flex-col break-words bg-white border border-1 rounded shadow-lg">

                <div class="font-black bg-gray-200 text-gray-700 py-3 px-6 mb-0">
                    My Profile
                </div>

                <div class="w-full p-6 flex flex-col">
                    <div class="mb-4">Name: {{ $user->name ?? '-' }}</div>
                    <div class="mb-4">Email: {{ $user->email ?? '-' }}</div>
                    <div class="mb-4">Joined: {{ $user->created_at ?? '-' }}</div>
                    <div>
                        <div class="mb-4">Avatar: {{ $user->avatar ?? '-' }}</div>
                        <div class="flex flex-row text-white">
                            <button class="border-1 bg-red p-5 my-2 font-black">Upload From File</button>
                            <button class="border-1 bg-red p-5 m-2 font-black">Upload From URL
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
