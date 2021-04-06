@extends ('layouts.main')

@section('title', 'Area form')

@section('content')
<form action="{{ route ('area-result') }}" method="post">
@csrf
<table align-text = "center">
    <tr> 
        <td> type :: <input type= "radio"  name="type" value = "1" required> Rectangle 
                     <input type= "radio"  name="type" value = "0.5" required> Triangle <td> 
                     
                           
    </tr>
    <tr> 
        <td> width :: <input type = "text" name = "width" required> </td>
    </tr>
    <tr> 
        <td> height :: <input type = "text" name = "height" required> </td>
    </tr>
    <tr>
    <td>
    <button type ="submit">Submit</button>
    </td>
    </tr>
</table>
</form>
@endsection
