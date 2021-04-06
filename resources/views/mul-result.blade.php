@extends('layouts.main')

@section('title', $title)

@section('content')
@parent

<table>
<tbody>
    @for($row = 1; $row <= 12; $row++)
        <tr>
          @for($col = 2; $col <= $num; $col++)
            <td style="border:1px solid black;padding:10px;"> {{ $col * $row }} </td>
          @endfor
        </tr>
    @endfor
</tbody>
</table>

@endsection