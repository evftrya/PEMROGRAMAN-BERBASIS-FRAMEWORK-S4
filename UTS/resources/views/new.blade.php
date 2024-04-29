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
    <form method="POST" action="/newHero" enctype="multipart/form-data">
        @csrf
        @method("post")
        <!-- untuk menlindungi dari eksploitasi -->
        <div>
            <label for="">Status*</label>
            <input type="text" name="status" >
        </div>
        <div>
            <label for="">Name*</label>
            <input type="text" name="name" >
        </div>
        <div>
            <label for="">Nomor Induk Hero*</label>
            <input type="text" name="nip">
        </div>
        <div>
            <label for="">Email*</label>
            <input type="text" name="email">
        </div>
        <div>
            <label for="">Short Quotes*</label>
            <input type="text" name="slogan">
        </div>
        <div>
            <label for="">Spesialis*</label>
            <select name="spesialis" id="spesialis">
                <option value="Pilih">Pilih</option>    
                <option value="Darat">Darat</option>
                <option value="Laut">Laut</option>
            </select>
        </div>
        <div id="forBut">
            <div id="DivButUp">
                <input type="checkbox" onchange="UbahType()" id="UpBut" checked="true">
                <label for="forUp">Upload Foto</label>
            </div>
            
        </div>
        
        <div>
            <label for="" id="LabelImage" >Link Image</label>
            <input type="text" name="image" id="inpImage" value="{{$ifoto}}">
            <input type="file" name="images" id="inpImages" value="{{$ifoto}}" style="display: none;">
            <input type="text" value="" name="check" id="cG">
        </div>
        <input type="submit" value ="Save">
        
        
    </form>
    
    <script src="/assets/js/form.js"></script>
@endsection


