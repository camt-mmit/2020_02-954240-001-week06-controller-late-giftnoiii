@extends('layouts.main')

@section('title', 'Multiple Table Result')

@section('content')
<body>
    <table border= "2" > 
    @for ($i=1; $i <= 12 ; $i++ ) 
    <tr> 
            @for ($j = 2 ; $j <= $value ; $j++ ) 
             <td> {{ $i * $j }}  </td>
            @endfor  
            </tr>
    @endfor
    </table>
        
</body>
    
 
@endsection