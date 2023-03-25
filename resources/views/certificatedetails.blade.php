@extends('layout.user-app')
@section('content')

<section class="fill-information">
    <div class="container">

        <div class="row ">

            <div class="col-sm-5 info-form">
                <form method="POST" action="{{route('certificatedetails.store',['template_id' => $templates->id])}}" enctype="multipart/form-data">
                    
                    @csrf
                    <div class="form-group">
                        <label for="name"><b>Name</b></label>
                        <input name="name" type="text" class="form-control" id="name" placeholder="Enter full name of the participant">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                

                    <div class="form-group">
                        <label for="position"><b>Position</b></label>
                        <input  name="position" type="text" class="form-control" id="position" placeholder="Enter the position/grade">
                        @error('position')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="event"><b>Event</b></label>
                        <input name="event" required type="text" class="form-control" id="event" placeholder="Enter the event details">
                        @error('event')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="date"><b>Date</b></label>
                        <input name="date" required type="date" class="form-control" id="date" placeholder="Enter the date of the event">
                        @error('date')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    
                    <br>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn">Create</button>
                    </div>
                    
                </form>

            </div>

            <div class="col-sm-7 certificate-image">
                <img class="img-fluid" src="{{asset('images/'.$templates->image)}}">
            </div>

        </div>
            
    </div>
</section>

@endsection