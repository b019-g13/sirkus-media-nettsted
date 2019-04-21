@extends('layouts.app')
@section('content')
    <h1>Legg til ny komponent</h1>

    <a href="{{ route('components.index') }}" class="button">
        @icon('arrow-left')
        <span>Tilbake</span>
    </a>

    <form id="form-components" action="{{ route('components.store') }}" method="POST">
        @csrf
        @include('components.form-fields')

        <div class="form-group">
            <button type="submit" class="button-success">
                <span>Opprett</span>
                @icon('save')
            </button>
        </div>
    </form>

    <script src="{{ asset('js/component.js') }}" defer></script>
@endsection
