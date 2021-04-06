@extends('layouts.main')

@section('title', $title)

@section('content')
@parent

<p>
    <b> Type :: </b> {{ $type }} </br>
    <b> Width :: </b> {{ $width }} </br>
    <b> Height :: </b> {{ $height }} </br>
    <b> Area :: </b> {{ $area }} </br>
</p>

@endsection