<div>
    <form action="upload" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" >
        <button>Upload</button>
    </form>
</div>
