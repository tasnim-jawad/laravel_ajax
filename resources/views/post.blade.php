<table class="table table-striped table-bordered">
    <thead>
        <th>srl</th>
        <th>title</th>
        <th>body</th>
    </thead>
    <tbody>
        @foreach ($posts as $key => $post)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $post->title }}</td>
                <td>{!! $post->body !!}</td>
                <td>
                    <a href="#" onclick="show_data({{$post->id}})">show</a>
                    <a href="#" onclick="show_edit_form({{$post->id}})">edit</a>
                    <a href="#" onclick="delete_post({{$post->id}})">delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>



