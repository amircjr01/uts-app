<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UTS-APP PENJUALAN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Data Penjualan Barang</h1>

        <div class="container">
            <h3>Tambah Data Penjualan Barang</h3>
            <form method="POST" action="/add">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="id_penjualan" class="form-label">ID Penjualan</label>
                            <input type="text" name="id" class="form-control" id="id">
                        </div>
                        <div class="mb-3">
                            <label for="nama_barang" class="form-label">Nama Barang</label>
                            <input type="text" name="nama_barang" class="form-control" id="nama_barang">
                        </div>
                        <div class="mb-3">
                            <label for="pelanggan" class="form-label">Pelanggan</label>
                            <input type="text" name="pelanggan" class="form-control" id="pelanggan">
                        </div>
                        <div class="mb-3">
                            <label for="harga_satuan" class="form-label">Harga Satuan</label>
                            <input type="number" name="harga_satuan" class="form-control" id="harga_satuan">
                        </div>
                    </div>
                    <div class="col-md-6">                    
                        <div class="mb-3">
                            <label for="tgl_penjualan" class="form-label">Tanggal Penjualan</label>
                            <input type="date" name="tanggal_penjualan" class="form-control" id="tanggal_penjualan">
                        </div>
                        <div class="mb-3">
                            <label for="tgl_penjualan" class="form-label">Jumlah Barang</label>
                            <input type="number" name="jumlah" class="form-control" id="jumlah">
                        </div>
                        
                    </div>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>            
            </form>
        </div>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Id Barang</th>
                    <th>Nama Barang</th>
                    <th>Tanggal Penjualan</th>
                    <th>Pelanggan</th>
                    <th>Jumlah</th>
                    <th>Harga Satuan</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach($penjualan as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->nama_barang}}</td>
                            <td>{{$item->tanggal_penjualan}}</td>
                            <td>{{$item->pelanggan}}</td>
                            <td>{{$item->jumlah}}</td>
                            <td>{{$item->harga_satuan}}</td>
                            <td>{{$item->total}}</td>                            
                        </tr>
                @endforeach
                @if($penjualan->count()==0)
                    <tr>
                        <td colspan="7" class="text-center">Tidak ada data</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>