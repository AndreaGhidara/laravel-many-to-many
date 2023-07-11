@extends('layouts.admin')

@section('content')
    <div class="container py-4">
        <div class="row">
            <a class="btn btn-primary mb-3" href="{{route("admin.products.create")}}">Crea</a>
        </div>
        <div class="row row-cols-4 g-3 ">
            @foreach ($products as $product)
                <div class="col">
                    <div class="card p-1" style="width: 18rem; min-height: 40rem; max-height: 40rem">
                        <img src="{{$product->imgPath}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{$product->title}}
                            </h5>
                            <p class="card-text">
                                {{$product->description}}
                            </p>
                            <a class="btn btn-primary my-2" href="{{ route("admin.products.show", $product->id) }}">See</a>
                            <a href="{{$product->link_to_project}}" class="btn btn-secondary">Link a caso</a>
                            <a href="{{route('admin.products.edit', $product)}}" class="btn btn-warning">Modifica</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
