@extends('layout.admin-app')
@section('content')

<div class="d-flex templates-create-super-container">
    <div class="container templates-create">
        <form method="POST" action="{{route('templates.update',$templates->id)}}" enctype="multipart/form-data">

            @csrf
            @method('PUT')
            
            <div class=row>
                <div class="col-md-12 col-sm-12">
                    <div class="form-group">
                        <label for="image">Image Upload</label>
                        <input name="image" type="file" value="{{old('image',$templates->image)}}" class="form-control" id="imageUpload" >
                        @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class=row>

                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="name_x"> Name x-coordinates </label>
                        <input name="name_x" value="{{old('name_x',$templates->name_x)}}" type="number" class="form-control" id="name_x" >
                        @error('name_x')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="name_y">Name y-coordinates </label>
                        <input name="name_y" type="number" value="{{old('name_y',$templates->name_y)}}"class="form-control" id="name_y" >
                        @error('name_y')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

            </div>

            <div class=row>

                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="position_x">Position x-coordinates </label>
                        <input name="position_x" value="{{old('position_x',$templates->position_x)}}" type="number" class="form-control" id="position_x" >
                        @error('position_x')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="position_y">Position y-coordinates </label>
                        <input name="position_y" value="{{old('position_y',$templates->position_y)}}" type="number" class="form-control" id="position_y" placeholder="Enter y-coordinates for Position">
                        @error('position_y')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

            </div>

            <div class=row>

                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="event_x">Event x-coordinates </label>
                        <input name="event_x" type="number" value="{{old('event_x',$templates->event_x)}}" class="form-control" id="event_x" >
                        @error('event_x')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="event_y">Event y-coordinates </label>
                        <input name="event_y" type="number" value="{{old('event_y',$templates->event_y)}}" class="form-control" id="event_y" >
                        @error('event_y')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

            </div>

            <div class=row>

                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="date_x">Date x-coordinates</label>
                        <input name="date_x" type="number" value="{{old('date_x',$templates->date_x)}}" class="form-control" id="date_x" >
                        @error('date_x')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="date_y">Date y-coordinates</label>
                        <input name="date_y" type="number" value="{{old('date_y',$templates->date_y)}}" class="form-control" id="date_y" >
                        @error('date_y')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

            </div>

            <div class="d-flex justify-content-center">
                <button type="submit" class="btn">Edit</button>
            </div>

            </form>
    </div>
</div>

@endsection