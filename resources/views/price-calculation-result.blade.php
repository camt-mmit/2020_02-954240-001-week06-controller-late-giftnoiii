@extends('layouts.main')
@section('title', $title)

@section('content')
@parent

<p>
    <b> Member Type :: </b> {{ $memberType }} </br>
    <b> Price :: </b> {{ $price }} </br>
    <b> Discount :: </b> {{ $discount }} </br>
    <b> Discount Cost :: </b> {{ $discountCost }} </br>
    <b> Net Price :: </b> {{ $netPrice }} </br>
</p>

@endsection