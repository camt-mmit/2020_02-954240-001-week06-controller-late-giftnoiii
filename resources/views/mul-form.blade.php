@extends('layouts.main')

@section('title', $title)
@section('content')
@parent

<form action="{{ route('mul-result') }}" method="POST">
@csrf
 
  <div>N ::
    <select name="num" require>
    @for($n = 2; $n <= 12; $n++)
      <option value="{{ $n }}">{{ $n }}</option>
    @endfor
    </select>
  </div></br>

  <button type="submit">Submit</button>

</form>

@endsection