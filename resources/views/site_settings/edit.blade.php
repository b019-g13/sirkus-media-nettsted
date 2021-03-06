@extends('partials.master')

@section('content')
    <header>
        <div class="header-inner">
            <div class="info">
                <h1>
                    @icon('plus-square')
                    <span>Rediger innstillingen: {{ $site_setting->name }}</span>
                </h1>
            </div>
            <div class="actions">
                <a href="{{ route('site_settings.index') }}" class="button button-primary-alt">
                    @icon('arrow-left')
                    <span>Tilbake</span>
                </a>
            </div>
        </div>
    </header>
    <div class="content">
        <div class="content-inner">
            <form id="form-site_setting" action="{{ route('site_settings.update', $site_setting) }}" method="POST">
                @csrf
                @method('patch')
                @include('site_settings.form-fields')
        
                <div class="form-group form-group-submit">
                    <span></span>
                    <button type="submit">
                        <span>Oppdater</span>
                        @icon('save')
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

