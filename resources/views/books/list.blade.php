@extends('template')

@section('title')
    Booking system
@endsection

@section('content')
    <div class="container">
        @forelse ($booksList as $book)
            Tu beda dane ksiazki
        @empty  
            Brak rekordow  
        @endforelse 

</div>

@endsection('content')