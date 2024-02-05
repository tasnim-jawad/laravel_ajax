<form action="/post/{{$post->id}}" onsubmit="update_post({{$post->id}})" method="POST">
    @csrf
    <div>
        <label for="">title</label>
        <input type="text" name="title" class="form-control" value="{{$post->title}}">
    </div>
    <div>
        <label for="">body</label>
        {{-- <input type="text" name="body" class="form-control"> --}}
        <textarea name="body" id="body" class="form-control" cols="30" rows="10">{{$post->body}}</textarea>
    </div>
    <button class="btn btn-sm btn-primary mt-2">submit</button>
</form>
