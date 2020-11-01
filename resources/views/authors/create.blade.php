@extends('template')

@section('title')
	Lista książek
@endsection

@section('content')
<div class="container">
<h2> Add a author</h2>

    <form action="{{ action('AuthorController@store')}}" method="POST" role="form">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />

      <div class="form-group">
        <label for="name">Last name</label>
        <input type="text" class="form-control" name="lastname" />
      </div>

      <div class="form-group">
        <label for="name"> First name</label>
        <input type="text" class="form-control" name="firstname" />
      </div>


      <div class="form-group">
        <label for="name">Birthday</label>
        <input type="text" class="form-control" name="birthday" />
      </div>


      <div class="form-group">
        <label for="name">Genres</label>
        <input type="text" class="form-control" name="genres" />
      </div>


      <input type="submit" value="Dodaj" class="btn btn-primary"/>
    </form>
</div>
@endsection('content')
