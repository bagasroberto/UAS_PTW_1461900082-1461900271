
<style>
    #order {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #order td, #order th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #order tr:nth-child(even){background-color: #f2f2f2;}

    #order tr:hover {background-color: #ddd;}

    #order th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #4CAF50;
        color: white;
    }
</style>

<table id="order" width="100%">
    <h3>Laporan Pendapatan Keuangan</h3>
    <thead>
    <tr>
        <td>ID</td>
        <td>Customer</td>
        {{--<td>Address</td>--}}
        <td>Total</td>
        <td>Date</td>
        <td>Status</td>
    </tr>

    </thead>
    @php
    $totals = 0;
    @endphp
    @foreach($orders as $o)
    @php
    $totals += $o->total_price
    @endphp
        <tbody>
        <tr>
            <td>{{ $o->id }}</td>
            <td>{{ $o->receiver }}</td>
            {{--<td>{{ $o->address }}</td>--}}
            <td>Rp. {{ number_format($o->total_price,0) }}</td>
            <td>{{ $o->date }}</td>
            <td>{{ ucwords($o->status) }}</td>
        </tr>
        </tbody>
    @endforeach
    <tr>
        <td></td>
        <td>Total</td>
        {{--<td></td>--}}
            <td>Rp. {{ number_format($totals,0) }}</td>
        <td></td>
        <td></td>
    </tr>
</table>




