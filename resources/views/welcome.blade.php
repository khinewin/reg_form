@extends('layouts.app')

@section('title')

    Student Registration | NEW TECH GROUP

    @stop

@section('content')

    <div class="container" style="margin-bottom: 70px; margin-top: 70px">
        <div class="col-md-6 col-md-offset-3">
            @if(Session('info'))<div class="alert alert-success"><span class="glyphicon glyphicon-ok-circle"></span> {{Session('info')}}</div>@endif
            <h2 class="text-center text-success">Web Development Training</h2>
            <h3 class="text-center">Student Registration Form</h3>
            <h5 class="text-center">3# Batch : 5-10-2017</h5>
            <br>
            <div class="col-md-8 col-md-offset-2">
            <form method="post" action="{{route('student_register')}}" role="form">
                <div class="form-group {{$errors->has('first_name') ? 'has-error' : ''}}">
                    @if($errors->has('first_name')) <span class="help-block">{{$errors->first('first_name')}}</span> @endif
                    <label for="first_name" class="control-label">First Name</label>
                    <input type="text" name="first_name" id="first_name" class="form-control" value="{{old('first_name')}}">
                </div>
                <div class="form-group {{$errors->has('last_name') ? 'has-error' : ''}}">
                    @if($errors->has('last_name')) <span class="help-block">{{$errors->first('last_name')}}</span> @endif
                    <label for="last_name" class="control-label">Last Name</label>
                    <input type="text" name="last_name" id="last_name" class="form-control" value="{{old('last_name')}}">
                </div>
                <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
                    @if($errors->has('email')) <span class="help-block">{{$errors->first('email')}}</span> @endif
                    <label for="email" class="control-label">Email Address</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{old('email')}}">
                </div>
                <div class="form-group {{$errors->has('phone_number') ? 'has-error' : ''}}">
                    @if($errors->has('phone_number')) <span class="help-block">{{$errors->first('phone_number')}}</span> @endif
                    <label for="phone_number" class="control-label">Phone Number</label>
                    <input type="tel" name="phone_number" id="phone_number" class="form-control" value="{{old('phone_number')}}">
                </div>
                <div class="form-group {{$errors->has('course') ? 'has-error' : ''}}">
                    @if($errors->has('course')) <span class="help-block">{{$errors->first('course')}}</span> @endif
                    <label for="course" class="control-label">Course</label>
                       <select name="course" id="course" class="form-control">
                           <option value="">--Select Course--</option>
                           <option value="Web Development Foundation">Web Development Foundation</option>
                           <option value="Web Development Advanced">Web Development Advanced</option>
                       </select>
                </div>
                <div class="form-group {{$errors->has('location') ? 'has-error' : ''}}">
                    @if($errors->has('location')) <span class="help-block">{{$errors->first('location')}}</span> @endif
                    <label for="location" class="control-label">Location</label>
                    <br>
                        <label class="radio-inline"><input type="radio" name="location" id="location" value="Mawlamyine">Mawlamyine</label>
                        <label class="radio-inline"><input type="radio" name="location" id="location" value="Thaton">Thaton</label>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Confirm</button>
                </div>
                {{csrf_field()}}
            </form>
            </div>
        </div>
    </div>

    @stop