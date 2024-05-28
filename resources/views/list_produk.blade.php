<div>
    <table>
        <thead>
            <tr>
                <th>NO</th>
                <th>Nama Produk</th>
                <th>Deskripsi Produk</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($nama as $index => $item)
            <tr>
                <td>{{$index + 1}}</td>
                <td>{{$item}}</td>
                <td>{{$desc[$index]}}</td>
                <td>{{$harga[$index]}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div><h1>Input Produk</h1></div>
<form method="POST" action="{{ route('produk.simpan')}}" >
    @csrf
    <table class="table">
        <tr>
            <td>Nama :</td>
            <td colspan="3"><input type="text" class="form-control" name="nama" id="nama"></td>
        </tr>
        <tr>
            <td>Deskripsi :</td>
            <td colspan="3"><textarea class="form-control" name="deskripsi" id="deskripsi"></textarea></td>
        </tr>
        <tr>
            <td>Harga :</td>
            <td><input type="number" class="form-control" name="harga" id="harga"></td>
            <td></td>
            <td></td>
        </tr>
    </table>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>