<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    @extends('master') 
    @section('Daftar Barang') 
    @section('content')
    <table class="mt-4 table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>Nama Barang</th>
                <th class="text-danger">Harga</th>
                <th class="text-success">Stok</th>
                <th class="text-warning">Id Supplier</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data_barang as $barang)
            <tr>
                <td>{{$barang->id}}</td>
                <td>{{$barang->nama_barang}}</td>
                <td>{{$barang->harga}}</td>
                <td>{{$barang->stok}}</td>
                <td>{{$barang->id_supplier}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>