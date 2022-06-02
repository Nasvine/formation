<h1>Mes posts</h1>


<table style="border: 1px;">
    <thead>
        <tr>
        <th>ID</th>
        <th>TITLE</th>
        <th>CONTENT</th>
        <th>AFFICHER UN POST</th>
        </tr>
    </thead>
    <tbody>
    @foreach($posts as $post)
        <tr>
        <p><td>{{$post->id}}</td></p>
        <p><td>{{$post->title}}</td></p>
        <p><td>{{$post->content}}</td></p>
        <p><td><a href="{{route('posts.show', $post)}}">Afficher</a></td></p>
        <p><td><a href="{{route('posts.edit', $post)}}">Editer</a></td></p>

        <p><td><form action="{{route('posts.destroy', $post)}}" method="post">
            @csrf

            @method('DELETE')

            <input type="submit" value="x Supprimer"> 
        </form></td></p>
        </tr>
    </tbody>
</table>

@endforeach