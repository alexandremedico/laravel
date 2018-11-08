@extends('layout.base')

@section('title', 'addseries')

@section('content')
  <h1>update one series</h1>
  <form class="" action="/updateserieaction" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $serie->id }}">
    <input required placeholder="Title" type="text" name="title" value="{{ $serie->title }}">
    <input required placeholder="0000" type="number" name="publication_year" value="{{ $serie->publication_year }}">
    <select multiple class="" name="actors[]">
      @foreach($actors as $actor)
      <option value="{{$actor->id}}"
        @foreach ($serie->actors as $serieactor)
        @if ($serieactor->id == $actor->id)
        selected
        @endif
        @endforeach
      >{{ $actor->completeName() }}</option>
      @endforeach
    </select>
    <select multiple class="" name="genres[]">
      @foreach($genres as $genre)
      <option value="{{$genre->id}}"
        @foreach ($serie->genres as $genreactor)
        @if ($genreactor->id == $genre->id)
        selected
        @endif
        @endforeach
      >{{ $genre->name }}</option>
      @endforeach
    </select>
    <input type="submit" name="" value="Insert">
  </form>
@endsection
