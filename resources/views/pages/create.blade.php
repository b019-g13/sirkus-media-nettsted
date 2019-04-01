
@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Legg til ny Page</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('pages.index') }}"> Tilbake </a>
        </div>
    </div>
</div>
   
<form action="{{ route('pages.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
             @csrf
                <strong>Tittel:</strong>
                <input type="text" name="title" value="{{old('title', (isset($page->title)? $page->title : null))}}" required class="form-control" placeholder="Tittel">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Bilde ID:</strong>
                <select name="image_id"  class="form-control" >
                    <option></option>
                    @foreach($images as $image)
                    <option value="{{$image->id}}" {{old('image_id', $image->id)}}? selected> {{$image->url}} </option>
                    @endforeach
                </select>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary"> Opprett </button>
        </div>
    </div>
   
</form>
@endsection
