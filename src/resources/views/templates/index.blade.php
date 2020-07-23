@extends('layouts.app')

@section('content')
    <div id="app" class="pt-3">
        <h1 class="mb-3 text-center">{{ $page->heading }}</h1>
        <Calculator></Calculator>
    </div>
@endsection
