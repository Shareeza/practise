@extends('layouts.main')

@section('title')
My Product list
@endsection

@section('navbar')
@parent
| this my Product nav

@endsection

@section('content')
    @if($errors->any())
        @foreach($errors->all() as $error)
            <li> {{ $error }}</li>
        @endforeach
    @endif

<h1>Add cd</h1>
<form action="{{ url('index/send') }}">
    {{ csrf_field() }}
    First Name: <input type="text" name="fname" value="{{ Request::old('fname') }}"><br />
    Last Name: <input type="text" name="lname" value="{{ Request::old('lname') }}"><br />
    Postal Code: <input type="text" name="postal" value="{{ Request::old('postal') }}"><br />
	Phone Number: <input type="text" name="pnum" value="{{ Request::old('pnum') }}"><br />
    Email: <input type="text" name="email" value="{{ Request::old('email') }}"><br />
	
    <input type="submit" value="Submit" />
</form>
@endsection