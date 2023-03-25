{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}

@extends('layout.admin-app')
@section('content')
    <div class=" d-flex admin-super-container ">
        <div class="container admin-container ">
            <h1>Admin Dashboard</h1>
            <h2 class="mt-4 ">You're Logged In!</h2>
        </div>
    </div>
@endsection
