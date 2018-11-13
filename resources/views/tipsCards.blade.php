<div class="col-md-12">
    <div class="card-group">
        @foreach ($tips as $tipsItem)
            <div class="card">
                    <!-- Styles -->
                    <!-- SEO -->
                    <!-- Identificacion de vinculos rotos en urls -->
                    <!-- Usar el atributo alt en las imagenes-->
                    <!-- Definicion de url cortos-->
                    <!-- Sitio optimizado para mobile-->
                    <!-- Eliminacion de contenido duplicado-->
                <a href="/tips/{{$tipsItem->id}}">
                    <img class="card-img-top" src="{{$tipsItem->image_url}}" alt="{{$tipsItem->image_alt}}"
                         title="{{$tipsItem->image_title}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$tipsItem->title}} </h5>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>