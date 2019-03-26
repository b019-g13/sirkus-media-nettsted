@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Rediger lokasjon </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('menu_locations.index') }}"> Tilbake </a>
            </div>
        </div>
    </div>
  
    <form action="{{ route('menu_locations.update', $menu_location->id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    @csrf
                    <strong> Navn : </strong>
                    <input type="text" name="name" value="{{old('name', (isset($menu_location->name)? $menu_location->name : null))}}" required class="form-control" placeholder="Navn">
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary"> Oppdater </button>
            </div>
        </div>

    </form>
@endsection
