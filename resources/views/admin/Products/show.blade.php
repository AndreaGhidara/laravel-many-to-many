@extends('layouts.app')

@section('content')
<div class="container my-3">
    
    <div class="row g-4">
        <div class="col">
            <a class="btn btn-primary" href="{{ route("admin.products.index") }}">Torna alla lista prodotti</a>
            {{-- <form action="{{ route('products.destroy', $product) }}" method="post">
                @csrf
                @method('DELETE')
                <input class="btn btn-danger" type="submit" value="Cancella il prodotto">
            </form> --}}
        </div>
    </div>

    <div class="container py-4">
        <div class="row row-cols-4 g-3 ">
                <div class="col">
                    <div class="card p-1" style="width: 18rem; min-height: 40rem; max-height: 40rem">
                        <img src="{{$product->imgPath}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-title">
                                {{$product->title}}
                            </h4>
                            <h5>
                                {{$product->type ? $product->name : "no type"}}
                            </h5>
                            @foreach ($product->tags as $tag)
                                <li> - {{$tag->name}}</li>
                            @endforeach
                            <p class="card-text">
                                {{$product->description}}
                            </p>
                            <a class="btn btn-primary my-2" href="{{ route("admin.products.show", $product->id) }}">See</a>
                            <a href="{{$product->link_to_project}}" class="btn btn-secondary">Link a caso</a>
                            <a href="{{route('admin.products.edit', $product)}}" class="btn btn-warning">Modifica</a>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    

</div>
@endsection
