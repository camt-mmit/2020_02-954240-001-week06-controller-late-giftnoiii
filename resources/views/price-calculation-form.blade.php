@extends('layouts.main')
@section('title', $title)

@section('content')
@parent
<form action="{{ route('price-calculation-result') }}" method="POST">
    @csrf
    
    <div>Price :: 
        <input type="number" name="price" step="any" require /> 
    </div></br>
    <div>Member Type :: 
        <select id="member-type" name="memberType" required>
        <option value="">-- Please select --</option>
        @foreach($memberTypes as $code => $memberType)
            <option value="{{ $code }}">{{ $memberType['name'] }}</option>
        @endforeach
        </select>
    </div></br>

    <button type="submit">Submit</button>

</form>
@endsection