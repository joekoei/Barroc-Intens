@extends('layouts.base')
@include('parts.header')
@livewireStyles
@section('content')
    <body class="db-background-gray">
            <livewire:products-search/>
    @livewireScripts
    </body>
@endsection
