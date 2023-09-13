@extends('index')
@section('titel')
Micro electric
@endsection
@push('css')
    @livewireStyles()
@endpush
@section('content')

@livewire('dashboard')

@endsection
@push('js')
    @livewireScripts()
@endpush