    <form method="POST" action="/{{$what}}">
        @csrf
        <!-- untuk menlindungi dari eksploitasi -->
        @method('put')
        <div>
            <label for="">Status</label>
            <input type="text" name="status" value="{{$istatus}}">
        </div>
        <div>
            <label for="">Name</label>
            <input type="text" name="name" value="{{$inama}}">
        </div>
        <div>
            <label for="">Short Quotes</label>
            <input type="text" name="slogan" value="{{$islogan}}">
        </div>
        <div>
            <label for="">Link Image</label>
            <input type="text" name="image" value="{{$ifoto}}">
        </div>
        <input type="submit">
        
    </form>