<x-layout>
    
    <div class="container-fluid">
        <div class="row py-5 justify-content-center align-items-center text-center">
            <div class="col-12">
                <h1 class="display-1">Risultati della ricerca "<span class="fst-italic">{{$query}}</span>"</h1>
            </div>
        </div>
        <div class="row justify-content-center align-items-center py-5">
            @forelse ($articles as $article)
            <div class="col-12 col-md-3">
                
                <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
                    <img src="https://picsum.photos/400/400" class="img-fluid" />
                    <a href="{{route("article.show",compact("article"))}}">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </a>
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $article->title }}</h5>
                    <p class="card-text fst-italic">{{ $article->price }} €</p>
                    <p class="card-text fst-italic">{{ $article->category->name }}</p>
                    <a href="{{route("article.show",compact("article"))}}" class="button-card py-2 px-3 rounded-pill" data-mdb-ripple-init>Info</a>
                </div>
            </div>
            @empty
            <div class="col-12">
                <h3 class="text-center">Nessun articolo corrisponde alla tua ricerca</h3>
            </div>
            @endforelse
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div>{{$articles->links()}}</div>
    </div>
</x-layout>