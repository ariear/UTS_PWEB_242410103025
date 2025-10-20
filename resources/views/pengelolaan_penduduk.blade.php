@extends('layouts.app')
@section('content')
<h1>pengelolaan penduduk</h1>
@foreach ($penduduks as $penduduk)
    <p>{{$penduduk['nama']}} - {{$penduduk['tingkat_pendidikan']}}</p>
@endforeach
@endsection