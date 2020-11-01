@extends('template')

@section('title')
	Lista książek
@endsection

@section('content')
<div class="container">
<h2> Add a book</h2>

    <form action="{{ action('BookController@store')}}" method="POST" role="form">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />

      <div class="form-group">
        <label for="name">Title</label>
        <input type="text" class="form-control" name="name" />
      </div>

      <div class="form-group">
        <label for="name">Year of publication</label>
        <input type="text" class="form-control" name="year" />
      </div>


      <div class="form-group">
        <label for="name">Publication place</label>
        <input type="text" class="form-control" name="publication_place" />
      </div>


      <div class="form-group">
        <label for="name">Pages</label>
        <input type="text" class="form-control" name="pages" />
      </div>

      <div class="form-group">
        <label for="name"> Price $  </label>
        <input type="text" class="form-control" name="price" />
      </div>

      <div class="form-group">
        <label for="name"> Author </label>
        <select type ="text" class="form-control" name="author_id[]" multiple>
            @foreach ($authors as $author)
            <option value="{{ $author -> id}}" > {{$author -> lastname}} {{$author-> firstname}} </option>
            @endforeach
        </select>
        
      </div>

      <input type="submit" value="Dodaj" class="btn btn-primary"/>
    </form>
</div>
@endsection('content')
