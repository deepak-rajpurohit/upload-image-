<div>
    <h1>List of all images</h1>
    <a href="/upload">Upload new image</a>
    <br>

    @foreach($imgData as $img)

    <img style="width: 200px; margin:10px " src="{{url('storage/public/'.$img->path)}}" alt="">
<br>
    @endforeach


</div>
