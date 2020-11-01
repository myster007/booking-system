@extends('template')

@section('title')
	Lista książek
@endsection

@section('content')
<div class="container">
<h2> Add a loans</h2>

<form action="{{ action('LoanController@store')}}" method="POST" role="form">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
      <div class="form-group">
        <label for="name">Title of book</label>
        <select type="text" class="form-control" name="book_id">
          @foreach ($books as $book)
            <option value="{{ $book->id }}">{{ $book->name }}</option>
          @endforeach
        </select>
      </div>

      <div class="form-group">
        <label for="name">Client data</label>
        <input type="text" class="form-control" name="client" />
      </div>

      <div class="form-group">
        <label for="name">Date of loan</label>
        <input type="text" class="form-control" name="loaned_on" />
      </div>


      <div class="form-group">
        <label for="name">Expected return</label>
        <input type="text" class="form-control" name="estimated_on" />
      </div>


      <input type="submit" value="Add" class="btn btn-primary"/>
    </form>
</div>
@endsection('content')
