@extends('layouts.app')
@section('title')
    Dashboard | NEW TECH GROUP
    @stop

@section('content')
<div class="container"  style="margin-bottom: 70px; margin-top: 80px">
    <div class="row">
        <div class="col-md-12">
            @if(Session('info')) <div class="alert alert-success"><span class="glyphicon glyphicon-ok-circle"></span> {{Session('info')}}</div> @endif
            <div class="panel panel-default">
                <div class="panel-heading"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</div>

                <div class="panel-body">

                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>FirstName</th>
                                <th>LastName</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Course</th>
                                <th>Location</th>
                                <th>Registration Date</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            @foreach($stds as $std)
                                <tr>
                                    <td>{{$std->first_name}}</td>
                                    <td>{{$std->last_name}}</td>
                                    <td>{{$std->first_name}} {{$std->last_name}}</td>
                                    <td>{{$std->email}}</td>
                                    <td>{{$std->phone_number}}</td>
                                    <td>{{$std->course}}</td>
                                    <td>{{$std->location}}</td>
                                    <td>{{date('d/m/Y h:i A', strtotime($std->created_at))}}</td>
                                    <td><a href="{{route('remove_student',['id'=>$std->id])}}"><span class="glyphicon glyphicon-trash text-danger"></span></a></td>
                                </tr>
                                @endforeach
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
