{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
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


@extends('layout.user-app')
@section('content')

<section class="templates-title mt-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <div class="row">
                    <h3 class="font-weight-bold part1">Certificate</h3><h3 class="font-weight-bold part2">Templates</h3>
                </div>
            </div>
            <div class="col-sm-7">
                <p class="template-description text-justify">Don't waste time making certificate from scratch. Choose from 
                    one of CertiGen's pre-designed templates that are easy to create. Browse our selection of 
                    certificate templates below to find one that matches your needs.</p>
            </div>
        </div>
    </div>
</section>

<section class="templates">
    <div class="container">

        <div class="row">
            @foreach ( $templates as $i=>$template  )

            <div class="col-lg-3 col-md-3 col-sm-12 col-10 d-block m-auto">
                <div class="card ">
                    <a href="{{route('certificatedetails.create',['template_id' => $template->id])}}"><img src="{{asset('images/'.$template->image)}}" class="card-img "></a>
                </div>      
            </div>
            @endforeach
        </div>

</section>

<section class="blank">
    <div class="container">
        <h1 class="text-white">abcd</h1>
    </div>
</section>

@endsection
