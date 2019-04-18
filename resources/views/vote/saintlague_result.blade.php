@extends('layouts.app')

@section('content')
<div class="container">
    <h4>Hasil Perhitungan Saint Lague</h4>

    <table class="table table-dark table-striped table-hover table-responsive-lg">
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
            <th>
            @foreach ($winners as $winner)
                <td>
                {{ strtoupper($winner) }}
                </td>
            @endforeach
            <th>

            @foreach ($parties as $party)
            <tr>
                {{-- @if (round(($party['total_votes']/$total_votes)) > 0.4)
                    <th>
                        {{ strtoupper($party['name']) }} - 
                        {{ round(($party['total_votes']/$total_votes) * 100) }} %
                    </th>
                    @foreach ($party['vote'] as $result)
                    <td>
                        {{ round($result) }} 
                    </td>
                    @endforeach
                    <td>
                        {{ $party['seat'] }}
                    </td>
                @endif --}}

                <th>
                    {{ strtoupper($party['name']) }} - 
                    {{ round(($party['total_votes']/$total_votes) * 100) }} %
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
</div>


@endsection