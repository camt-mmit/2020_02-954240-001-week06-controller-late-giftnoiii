@extends ('layouts.main')

@section('title', 'Area result')

@section('content')
<table>
    <tr>
        <td> Type :: </td> <td> {{ $type }}  </td> 
    </tr>
    <tr>
        <td> Width :: </td> <td> {{ number_format($width,2) }}  </td>
    </tr>
    <tr>
        <td> Height :: </td> <td> {{ number_format($height ,2) }}</td> 
    </tr>
    <tr>
        <td> Area:: </td> <td> {{ number_format($area ,2) }}</td> 
    </tr>
</table>
@endsection