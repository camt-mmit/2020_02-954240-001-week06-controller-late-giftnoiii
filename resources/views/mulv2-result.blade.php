@extends('layouts.main')

@section('title', 'Multiplecation-V2 Table Result')

@if(in_array('left',$check) && in_array('top',$check))
    <table border="1" width="50%" align="center" >
        <th> </th>
        @for($k=2 ; $k <= $num ; $k++)
        <th>{{$a}}</th>
        @endfor
    
        @for($i = 1 ; $i <= 12; $i++)
        <tr>
            <th>{{$i}}</th>
            @for($j = 2; $j <= $num ; $j++)
            <td align="center">{{$result = $i * $j }} </td>
            @endfor
        </tr>
        @endfor
    </table>

    @elseif(in_array('top',$check))
    <p>
    <table border="1" width="28%" align="center">
    @for($i=1 ; 1 <= 12 ; $i++)
        <tr><th>{{$i}}</th>
        @for ($j = 2 ; $j <= $num ; $j++)
                <td align="center">{{ $result = $i * $j }}</td>
        @endfor
            </tr>
    @endfor
    </table>
    </p>

    @elseif(in_array('left',$check))
    <p>
        <table border="1" width="28% " align="center">
        @for($j = 2 ; $j <= $num ; $j++)
            <tr><th>{{$i}}</th>
            @for($i=1 ; 1 <= 12 ; $i++)
                <td align="center">{{ $result = $i * $j }}</td>
        @endfor
            </tr>
    @endfor
    </table>
    </p>

    @elseif(empty($check))
    <p> 
        <table border="1" width="28% " align="center">
        @for($i=1 ; 1 <= 12 ; $i++)
            <tr>
            @for($j = 2 ; $j <= $num ; $j++)
                <td align="center">{{ $result = $i * $j }}</td>
        @endfor
            </tr>
    @endfor
    </table>
    </p>
    @endif
    @endsection