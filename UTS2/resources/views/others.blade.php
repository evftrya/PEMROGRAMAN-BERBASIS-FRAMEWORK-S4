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
@if($pjg>0)
    @foreach ($others as $hero)
    <a id="theDetil" href="{{ route('Detail',['status'=>$hero['status']])}}">
        <p id='detil' >{{$hero['status']}}</p>
    </a>
    <a id="theDetilEdit" href="{{ route('Edit',['id'=>$hero['id']])}}" >
        <p id='detiledit' hidden=true>{{$hero['status']}}</p>
    </a>
    <a id="theDetilDelete" href="{{ route('Delete',['id'=>$hero['id']])}}">
        <p id='detildelete' hidden=true>{{$hero['status']}}</p>
    </a>
    
    @endforeach
@else
    <p>Belum ada hero lain</p>
@endif

    <div class="edit-button">
        <button>
            <span class="edit-icon">&#9998</span>
        </button>
    </div>
    <div class="delete-button">
        <button>
        <span class="delete-icon">&#128465</span>
        </button>
    </div>
    <script src="/assets/js/others.js"></script>
@endsection




