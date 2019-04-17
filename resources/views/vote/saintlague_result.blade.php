@extends('layouts.app')

@section('content')

<h1>Hasil Perhitungan Saint Lague</h1>
<table class="table table-dark">
    <thead>
        <tr>
            <th>Partai</th>
            @for ($i = 1; $i < 11; $i++)
                <th>Kursi {{ $i  }}</th> 
            @endfor
            <th>Total Kursi</th>
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