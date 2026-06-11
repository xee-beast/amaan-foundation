@extends('layouts.app')

@section('content')
<div class="page-wrapper">
    @include('home.sections.banner')
    @include('home.sections.our-programs')
    @include('home.sections.events')
    @include('home.sections.vision-mission')
    @include('home.sections.take-action-slider')
</div>
@endsection
