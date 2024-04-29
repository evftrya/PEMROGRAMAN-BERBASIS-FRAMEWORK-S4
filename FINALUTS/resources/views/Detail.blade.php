@extends('layouts.template')

@section('image')
{{$foto}}
@endsection

@section('namaHero')
{{$hero['name']}}
@endsection

@section('slogan')
{{$hero['slogan']}}
@endsection

@section('content')

    <p>Halo nama saya {{$hero['name']}} dengan status {{$hero['status']}} dengaan nomor induk hero {{$hero['nih']}} dan email {{$hero['email']}} dan spesialis {{$hero['spesialis']}}</p>
@endsection


