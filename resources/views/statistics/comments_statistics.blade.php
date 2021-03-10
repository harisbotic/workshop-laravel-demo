@extends('statistics.general_statistics')

@section('sadrzaj-statistike')
  @foreach($komentari as $komentar)
    <button class="btn btn-light">
      {{ $komentar["text"] }}
    </button>
  @endforeach
@endsection