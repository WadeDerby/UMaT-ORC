@extends('layouts.master')
@section('title' , 'Lecturer')

@section('head')
    <link href="{{URL::To('css/welcome.css')}}" rel='stylesheet' type='text/css'>
    <link href="{{URL::to('css/lecturer.css')}}" rel='stylesheet' type='text/css'>
@endsection

@section('logout')
    @if(false)
        <a href="{{URL::to('student/logout')}}">Logout</a>
    @endif
@endsection

@section('content')
    <div class="message-wrapper">
        <h2>Please select the lecturer</h2>


        <form method="post" action="{{URL::to('admin/courses')}}">
            <div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <select name="lecturer" required>
                    @foreach($lecturers as $lecturer)
                        <option value="{{$lecturer->lecturer_id}}">{{$lecturer->full_name}}</option>


                    @endforeach
                </select>

                <input class="button" type="submit" value="Proceed">
            </div>

        </form>
    </div>
@endsection
