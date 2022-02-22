<title>SiempreColgados - FMGG</title>
<h1 style="text-align: center">Cuota de {{$fecha_emision}}</h1>
<p>Cuota creada para pagar {{$concepto}}</p>
<hr>
<table border="1px">
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
            {{$importe}}
        </td>
        <td>
            {{$importeiva}}
        </td>
        <td>
            @if($pagada==0)No @else Si @endif
        </td>
    </tr>
</table>
<hr>
<br>
<pre>Notas: {{$notas}}
</pre>

<sub>
    SiempreColgados - FMGG
</sub>