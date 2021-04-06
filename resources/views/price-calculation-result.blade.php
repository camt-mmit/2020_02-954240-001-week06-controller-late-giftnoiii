@extends ('layouts.main')

@section('title', 'calculation result')

@section('content')
<table>
    <tr>
        <td> Member Type :: </td> <td> {{ $memberType }}  </td> 
    </tr>
    <tr>
        <td> Price :: </td> <td> {{ number_format($price,2) }}  </td>
    </tr>
    <tr>
        <td> discount :: </td> <td> {{ number_format($discount ,2) }}</td> 
    </tr>
    <tr>
        <td> discount cost :: </td> <td> {{ number_format($discountCost ,2) }}</td> 
    </tr>
    <tr>
        <td> Net price:: </td> <td> {{ number_format($netPrice ,2) }}</td> 
    </tr>
</table>
@endsection