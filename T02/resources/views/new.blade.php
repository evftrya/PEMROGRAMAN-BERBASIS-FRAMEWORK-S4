@extends('layouts.template')

@section('image')
{{$foto}}
@endsection

@section('namaHero')
{{$nama}}
@endsection

@section('slogan')
{{$theSlogan}}
@endsection

@section('content')
    <form method="POST" action="{{$what}}">
        @csrf
        @method($put)
        <!-- untuk menlindungi dari eksploitasi -->
        <div>
            <label for="">Status*</label>
            <input type="text" name="status" value="{{$istatus}}">
        </div>
        <div>
            <label for="">Name*</label>
            <input type="text" name="name" value="{{$inama}}">
        </div>
        <div>
            <label for="">Short Quotes*</label>
            <input type="text" name="slogan" value="{{$islogan}}">
        </div>
        <div>
            <label for="">Link Image</label>
            <input type="text" name="image" value="{{$ifoto}}">
        </div>
        <input type="submit" value ="Save">
        
        
    </form>
@endsection


