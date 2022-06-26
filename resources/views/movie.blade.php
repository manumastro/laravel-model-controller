@extends('layouts.main')

@section('title', 'Movies')

@section('content')
  <h1>Movie</h1>

  {{-- @dump($movies) --}}

  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Original_Title</th>
        <th scope="col">Nationality</th>
        <th scope="col">Date</th>
        <th scope="col">Vote</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($movies as $movie)
        <tr>
          <th scope="row">{{ $movie->id }}</th>
          <td>{{ $movie->title }}</td>
          <td>{{ $movie->original_title }}</td>
          <td>{{ $movie->nationality }}</td>
          <td>{{ $movie->date }}</td>
          <td>{{ $movie->vote }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection

