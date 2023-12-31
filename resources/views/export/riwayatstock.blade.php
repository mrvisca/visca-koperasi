<table class="table table-striped">
    <thead>
        <tr>
            <th colspan="9" style="background-color: yellow; text-align:center; font-size: 30px; height: 50px; font-weight:50;"><b>Riwayat Stock Produk</b></th>
        </tr>
        <tr>
            <th style="width: 200px; text-align:center; height: 40px;"><b>ID</b></th>
            <th style="width: 200px; text-align:center"><b>Nama Produk</b></th>
            <th style="width: 200px; text-align:center"><b>Stock</b></th>
            <th style="width: 200px; text-align:center"><b>Sisa Stock</b></th>
            <th style="width: 200px; text-align:center"><b>Unit</b></th>
            <th style="width: 200px; text-align:center"><b>Tipe</b></th>
            <th style="width: 200px; text-align:center"><b>Harga Rata-Rata</b></th>
            <th style="width: 200px; text-align:center"><b>Keterangan</b></th>
            <th style="width: 200px; text-align:center"><b>Dibuat oleh</b></th>
        </tr>
        <tr>
            <th style="text-align: center; background-color:#3c8dbc; color:white">1</th>
            <th style="text-align: center; background-color:#3c8dbc; color:white">2</th>
            <th style="text-align: center; background-color:#3c8dbc; color:white">3</th>
            <th style="text-align: center; background-color:#3c8dbc; color:white">4</th>
            <th style="text-align: center; background-color:#3c8dbc; color:white">5</th>
            <th style="text-align: center; background-color:#3c8dbc; color:white">6</th>
            <th style="text-align: center; background-color:#3c8dbc; color:white">7</th>
            <th style="text-align: center; background-color:#3c8dbc; color:white">8</th>
            <th style="text-align: center; background-color:#3c8dbc; color:white">9</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $d)
        <tr>
            <td style="text-align:left;"> {{ $d['id'] }} </td>
            <td style="text-align:left;"> {{ $d['product_name'] }} </td>
            <td style="text-align:left;"> {{ $d['stock_transaksi'] }} </td>
            <td style="text-align:left;">{{ $d['stock'] }} </td>
            <td style="text-align:left;">{{ $d['unit_name'] }} </td>
            <td style="text-align:left;">{{ $d['tipe'] }} </td>
            <td style="text-align:left;">{{ $d['average'] }} </td>
            <td style="text-align:left;">{{ $d['keterangan']}} </td>
            <td style="text-align:left;">{{ $d['user']}} </td>
        </tr>
        @endforeach
    </tbody>
</table>
