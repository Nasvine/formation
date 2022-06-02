<form action="{{route('posts.store')}}" method="post">
    @csrf
    <label for="">TITLE</label><br>
    <input type="text" name="title" id=""><br>
    
    <label for="">CONTENU</label><br>
    <input type="text" name="content" id=""><br>

    <button type="submit">Envoyer</button>
</form>