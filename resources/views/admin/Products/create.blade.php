@extends('layouts.admin')

@section('content')
    <div class="container py-4">
        {{-- Error check --}}
        <div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $err)
                            <li>{{ $err }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="row">
            <div class="col">
                <form action="{{ route('admin.products.store') }}" method="post">
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" value="{{ old('title') }}" name="title" class="form-control"
                            id="title">
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" class="form-control" id="description" rows="3">{{ old('description') }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="imgPath" class="form-label">Url Immagine</label>
                        <input type="text" name="imgPath" class="form-control" id="imgPath"
                            value="{{ old('imgPath') }}">
                        @error('imgPath')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        @foreach ($tags as $i => $tag)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="tags[]" value="{{ $tag->id }}" id="tags{{$i}}">
                                <label class="form-check-label" for="tags{{$i}}">
                                    {{ $tag->name }}
                                </label>
                            </div>
                        @endforeach
                    </div>

                    <div class="mb-3">
                        <label for="link_to_project" class="form-label">Link to Project</label>
                        <input type="url" name="link_to_project" class="form-control" id="link_to_project"
                            value="{{ old('link_to_project') }}">
                        @error('link_to_project')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <button type="submit" class="btn btn-warning">
                            Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
