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
    <form method="POST" action="{{route('EditHero',[$id])}}" enctype="multipart/form-data">
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
            <label for="">Nomor Induk Hero*</label>
            <input type="text" name="nih" value="{{$inih}}">
        </div>
        <div>
            <label for="">Email*</label>
            <input type="text" name="email" value="{{$iemail}}">
        </div>
        <div>
            <label for="">Short Quotes*</label>
            <input type="text" name="slogan" value="{{$islogan}}">
        </div>
        <div>
            <label for="">Spesialis*</label>
            <input type="text" id="spes" value="{{$ispesialis}}" style="display:none;">
            <select name="spesialis" id="spesialis">
                <option value="Pilih">Pilih</option>    
                <option value="Darat">Darat</option>
                <option value="Laut">Laut</option>
            </select>
        </div>
        <div id="forubahFoto">
            <div id="ubahFoto">
                <input type="text" name="deffoto" value="{{$ifoto}}" style="display:none;" >
                <input type="checkbox" onchange="Ubahfoto()" id="ubahbut" value="ubah" name="cekUbah">
                <label for="forUp">Ubah Foto</label>
            </div>
        </div>
        
        <div id="imga" style="display: none;">
            <label for="" id="LabelImage" >Image</label>
            <div id="DivButUp">
                <input type="checkbox" onchange="UbahType()" id="UpBut" checked="true">
                <label for="forUp">Uncentang untuk link image</label>
            </div>
            <input type="text" name="image" id="inpImage" value placeholder="masukkan link image">
            <input type="file" name="images" id="inpImages" value style="display: none;" >
            <input type="text" value="" name="check" id="cG">
            <div id="forBut">
        </div>
        </div>
        <input type="submit">
        
    <script src="/assets/js/form.js"></script>
        
    </form>
    <script>
        let dropdown = document.getElementById("spesialis");
        if('{{$ispesialis}}'=='Darat'){
            dropdown.options[1].selected = true;
        }
        else{
            dropdown.options[2].selected = true;
        }
        

    </script>
@endsection


