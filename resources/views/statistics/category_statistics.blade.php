@extends('statistics.general_statistics')

@section('sadrzaj-statistike')
  @foreach($kategorije as $kategorija)
    <a href="{{ url('admin/categories/' . $kategorija["id"] . '/edit') }}">
      <button class="btn btn-light">
        {{ $kategorija["name"] }}
      </button>
    </a>
  @endforeach
@endsection