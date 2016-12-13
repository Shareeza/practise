@extends('layouts.main')

@section('title')
    My Product list
@endsection

@section('navbar')
    @parent
     | this my Product nav

@endsection

@section('content')
    <h1>Products List</h1>
	


    <ul>
	Product Name: Product Description:   Price:<br>
	{{$fname}} {{$lname}}
            <li>
			</li>
        
    </ul>
	@endsection
