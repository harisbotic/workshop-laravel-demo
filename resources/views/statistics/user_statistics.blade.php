@extends('statistics.general_statistics')

@section('sadrzaj-statistike')
  @foreach($korisnici as $korisnik)
    <button class="btn btn-light">
      {{ $korisnik["name"] }}
    </button>
  @endforeach
@endsection