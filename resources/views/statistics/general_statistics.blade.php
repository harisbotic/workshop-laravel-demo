@extends('layouts.app')
@section('content')
<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">
      <a href="{{ url('statistika/korisnici') }}"><span class="badge">Korisnika: {{ count($korisnici) }}</span></a>
      <a href="{{ url('statistika/kategorije') }}"><span class="badge">Kategorija: {{ count($kategorije) }}</span></a>
      <a href="{{ url('statistika/komentari') }}"><span class="badge">Komentari: {{ count($komentari) }}</span></a>
    </div>
    <div class="panel-body">
      @yield('sadrzaj-statistike')
    </div>
  </div>
</div>
@endsection
