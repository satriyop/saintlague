@extends('layouts.app')

@section('content')
<h1>Saint Lague Result</h1>
<table class="table table-dark">
    <thead>
        <tr>
            <th>Partai</th>
            <th>Jumlah Suara</th>
            <th>/1</th>
            <th>/3</th>
            <th>/5</th>
            <th>/7</th>
            <th>/9</th>
            <th>/11</th>
            <th>/13</th>
            <th>/15</th>
            <th>/17</th>
            <th>/19</th>
            <th>Jumlah Kursi</th>

        </tr>
    </thead>

    <tbody>
        <tr>
            <th>PKB</th>
            <td>{{ $pkb }}</td>
            @for ($i = 0; $i < 10; $i++)
                <td>{{ round(intval($pkb) / (2 * $i + 1)) }}</td>
            @endfor
        </tr>

        <tr>
            <th>Gerindra</th>
            <td>{{ $gerindra }}</td>
            @for ($i = 0; $i < 10; $i++)
                <td>{{ round(intval($gerindra) /(2 * $i + 1)) }}</td>
            @endfor
        </tr>

        <tr>
            <th>PDIP</th>
            <td>{{ $pdip }}</td>
            @for ($i = 0; $i < 10; $i++)
            <td>{{ round(intval($pdip) / (2 * $i + 1)) }}</td>
            @endfor
        </tr>

        <tr>
            <th>Golkar</th>
            <td>{{ $golkar }}</td>
            @for ($i = 0; $i < 10; $i++)
            <td>{{ round(intval($golkar) / (2 * $i + 1)) }}</td>
            @endfor
        </tr>

        <tr>
            <th>Nasdem</th>
            <td>{{ $nasdem }}</td>
            @for ($i = 0; $i < 10; $i++)
            <td>{{ round(intval($nasdem) / (2 * $i + 1)) }}</td>
            @endfor
        </tr>

        <tr>
            <th>Garuda</th>
            <td>{{ $garuda }}</td>
            @for ($i = 0; $i < 10; $i++)
            <td>{{ round(intval($garuda) / (2 * $i + 1)) }}</td>
            @endfor
        </tr>

        <tr>
            <th>Partai Berkarya</th>
            <td>{{ $berkarya }}</td>
            @for ($i = 0; $i < 10; $i++)
            <td>{{ round(intval($berkarya) / (2 * $i + 1)) }}</td>
            @endfor
        </tr>

        <tr>
            <th>PKS</th>
            <td>{{ $pks }}</td>
            @for ($i = 0; $i < 10; $i++)
            <td>{{ round(intval($pks) / (2 * $i + 1)) }}</td>
            @endfor
        </tr>
        <tr>
            <th>Perindo</th>
            <td>{{ $perindo }}</td>
            @for ($i = 0; $i < 10; $i++)
            <td>{{ round(intval($perindo) / (2 * $i + 1)) }}</td>
            @endfor
        </tr>
        <tr>
            <th>PPP</th>
            <td>{{ $ppp}}</td>
            @for ($i = 0; $i < 10; $i++)
            <td>{{ round(intval($ppp) / (2 * $i + 1)) }}</td>
            @endfor
        </tr>
        <tr>
            <th>PSI</th>
            <td>{{ $psi }}</td>
            @for ($i = 0; $i < 10; $i++)
            <td>{{ round(intval($psi) / (2 * $i + 1)) }}</td>
            @endfor
        </tr>
        <tr>
            <th>PAN</th>
            <td>{{ $pan }}</td>
            @for ($i = 0; $i < 10; $i++)
            <td>{{ round(intval($pan) / (2 * $i + 1)) }}</td>
            @endfor
        </tr>
        <tr>
            <th>HANURA</th>
            <td>{{ $hanura }}</td>
            @for ($i = 0; $i < 10; $i++)
            <td>{{ round(intval($hanura) / (2 * $i + 1)) }}</td>
        @endfor
        </tr>
        <tr>
            <th>Partai Demokrat</th>
            <td>{{ $demokrat }}</td>
            @for ($i = 0; $i < 10; $i++)
            <td>{{ round(intval($demokrat) / (2 * $i + 1)) }}</td>
            @endfor
        </tr>
        <tr>
            <th>PBB</th>
            <td>{{ $pbb }}</td>
            @for ($i = 0; $i < 10; $i++)
            <td>{{ round(intval($pbb) / (2 * $i + 1)) }}</td>
            @endfor
        </tr>
        <tr>
            <th>PKPI</th>
            <td>{{ $pkpi }}</td>
            @for ($i = 0; $i < 10; $i++)
            <td>{{ round(intval($pkpi) / (2 * $i + 1)) }}</td>
            @endfor
        </tr>
    </tbody>
</table>

<h2>Seat Count</h2>
@endsection