@extends ('layouts.main')

@section('title', 'calculation form')

@section('content')
<form action="{{ route ('price-calculation-result') }}" method="post">
@csrf
<label>
Price :: <input type = "text" name = "price">
Membertype 

              @foreach($memberTypes as $code => $memberType)
                 <option value="{{ $code }}">{{ $memberType['name'] }}</option>
              @endforeach
</select>
<button type ="submit">Submit</button>
</label>
</form>
@endsection
