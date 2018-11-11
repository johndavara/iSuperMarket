<div class="row justify-content-center">
    <div class="col-md-8">
        <h3>Comentarios</h3>
        <form method="POST" action="{{ route('commentRecipe') }}">
            @csrf
            <div class="form-group">
                <textarea name="comment" id="comment" class="form-control" placeholder="Comente aquí"></textarea>
            </div>
            <div class="form-group">
                <input name="id_categ" id="id_categ" type="hidden" value={{$category->id}}></input>
            </div>
            <div class="form-group">
                <input name="id_post" id="id_post" type="hidden" value={{$recipe->id}}></input>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
            <hr>
        </form>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-md-8">
        @foreach ($comments as $comment)
            <p>{{$comment->comment}}</p>
            <hr>
        @endforeach
    </div>
</div>