@extends('template')

@section('title')
    Booking system
@endsection

@section('content')

<div class="container">
	<table class="table">
	@forelse ($booksList as $book)
		<tr>
			<td> {{$book->name}} </td>
			<td> {{$book->year}} </td>
            <td> {{$book->publication_place}} </td>
            <td> <a href="{{url('/books', [$book->id]) }}"> View </a> </td>
			<td> <a href="{{ url('/books', [$book->id, 'edit']) }}">Edit</a> </td>
            <td> <a href="{{ url('/books', [$book->id, 'delete']) }}">Delete</a> </td>  
            
            
		</tr>
	@empty
		Brak rekordów!
	@endforelse
	</table>


</div>

@endsection('content')