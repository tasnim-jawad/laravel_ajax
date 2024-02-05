<form action="/post" onsubmit="store_post()" method="POST">
    @csrf
    <div>
        <label for="">title</label>
        <input type="text" name="title" class="form-control">
    </div>
    <div>
        <label for="">body</label>
        {{-- <input type="text" name="body" class="form-control"> --}}
        <textarea name="body" id="body" class="form-control" cols="30" rows="10"></textarea>
    </div>
    <button class="btn btn-sm btn-primary mt-2">submit</button>
</form>
