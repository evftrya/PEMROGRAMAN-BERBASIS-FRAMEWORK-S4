@extends('layouts.template')

@section('image')
{{'https://i.pinimg.com/564x/19/47/2a/19472a9e7161d59994ce3282fea67f93.jpg'}}
@endsection

@section('namaHero')
{{'Others'}}
@endsection

@section('slogan')
{{'Blip'}}
@endsection

@section('content')
    @foreach ($others as $hero)
    <a class="theDetil" href="{{ route('Detail',['status'=>$hero['status']])}}"> 
        <p>{{$hero['status']}}</p>
    </a>
    @endforeach
@endsection




