@extends('layouts.main')

@section('title', $title)
@section('content')
@parent

<form action="{{ route('mulv2-result') }}" method="POST">
@csrf
 
  <div>N ::
    <select name="num" require>
    @for($n = 2; $n <= 12; $n++)
      <option value="{{ $n }}">{{ $n }}</option>
    @endfor
    </select>
  </div></br>

  <div>Options ::
    <input name="row" type="checkbox" value="1"> Top Header
    <input name="col" type="checkbox" value="1"> Left Header
  </div></br>

  <button type="submit">Submit</button>

</form>

@endsection