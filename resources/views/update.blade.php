@extends('layout.base')

@section('title', 'addseries')

@section('content')
  <h1>update one series</h1>
  <form class="" action="/updateserieaction" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $serie->id }}">
    <input required placeholder="Title" type="text" name="title" value="{{ $serie->title }}">
    <input required placeholder="0000" type="number" name="publication_year" value="{{ $serie->publication_year }}">
    <select class="" name="actors">
      @foreach($actors as $actor)
        @if ($actor->id == $serie->actors[0]->id)
          <option selected value="{{$actor->id}}">{{$actor->completeName()}}</option>
        @else
          <option value="{{$actor->id}}">{{$actor->completeName()}}</option>
        @endif;
      @endforeach
    </select>
    <select class="" name="genres">
      @foreach($genres as $genre)
      <option value="{{$genre->id}}">{{$genre->name}}</option>
      @endforeach
    </select>
    <input type="submit" name="" value="Insert">
  </form>
@endsection
