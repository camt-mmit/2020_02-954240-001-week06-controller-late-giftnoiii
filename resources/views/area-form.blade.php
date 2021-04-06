@extends('layouts.main')

@section('title', $title)
@section('content')
@parent

<form action="{{ route('area-result') }}" method="POST">
@csrf
 
  <div>Type :: 
    <lable><input type="radio" value="0" name="type" require /> Rectangular</lable>
    <lable><input type="radio" value="1" name="type" require /> Triangle</lable>
  </div></br>

  <div>Width ::
    <input type="number" name="width" step="any" require /> 
  </div></br>

  <div>Height ::
    <input type="number" name="height" step="any" require /> 
  </div></br>

  <button type="submit">Submit</button>
</form>

@endsection