@extends('layouts.app')

@section('content')

<h1>Saint Lague Result</h1>
<table class="table table-dark">
    <thead>
        <tr>
            <th>Partai</th>
            @for ($i = 0; $i < 10; $i++)
                <th>/ {{ 2 * $i + 1 }}</th> 
            @endfor
            <th>Total Suara</th>
        </tr>
    </thead>

    
    <tbody>     
        @foreach ($parties as $party)
        <tr>
            <th>
                {{ $party['name'] }}
            </th>
            @foreach ($party['vote'] as $result)
            <td>
                {{ round($result) }}
            </td>
            @endforeach
            <td>
                {{ $party['seat'] }}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>



@endsection