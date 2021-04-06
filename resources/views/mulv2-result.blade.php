@extends('layouts.main')

@section('title', $title)

@section('content')
@parent

<table>
<tbody>
    @for($row = $myrow; $row <= 12; $row++)
        <tr>
          @for($col = $mycol; $col <= $num; $col++)

            @if ($row === 0)

              @if ($col === 1)
                <td style="border:0;padding:10px;"></td>
              @else
                <td style="border:1px solid black;padding:10px;color:#fff;background-color:#998;"> {{ $col }} </td>
              @endif

            @else

              @if ($col === 1)
                <td style="border:1px solid black;padding:10px;color:#fff;background-color:#998;"> {{ $col * $row }} </td>
              @else
                <td style="border:1px solid black;padding:10px;"> {{ $col * $row }} </td>
              @endif

            @endif

          @endfor
        </tr>
    @endfor
</tbody>
</table>

@endsection