<title>SiempreColgados - FMGG</title>
<style>
    td{
        padding:5px;
        text-align: center;
    }
    </style>
<h1 style="text-align: center">Cuota de {{ $fecha_emision }}</h1>
<p>Cuota creada para pagar {{ $concepto }}</p>
<hr>
<table border="1px" style="padding:2px">
    <tr>
        <th>
            Importe
        </th>
        <th>
            Iva inc.
        </th>
        <th>
            Pagado
        </th>
    </tr>
    <tr>
        <td>
            @php
                echo number_format($importe, 2, '.', '');
            @endphp
        </td>
        <td>
            @php
                echo number_format($importeiva, 2, '.', '');
            @endphp
        </td>
        <td>
            @if ($pagada == 0)
                No
            @else
                Si
            @endif
        </td>
    </tr>
</table>
<hr>
<br>
<pre>Notas: {{ $notas }}
</pre>

<sub>
    SiempreColgados - FMGG
</sub>
