@extends('dashboard.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb"><br>
        <h1>DASHBOARD ADMIN BUKU</h1>
        <div class="d-flex justify-content-between align-items-center">
            <div class="pull-left mt-2">
                <form action="{{ route('dashboard.index') }}" method="GET" role="search">
                    <div class="input-group mb-3">
                        <input type="text" name="search" class="form-control" placeholder="Cari kode, judul, jenis">
                        <span class="input-group-prepend">
                            <button type="submit" class="btn btn-primary">Cari</button>
                        </span>
                    </div>
                </form>
            </div>
            <div>
                <a class="btn btn-success" href="{{ route('dashboard.create') }}"> Input Buku</a>
            </div>
        </div>
    </div>
</div>


@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>Kode Buku</th>
        <th>Judul</th>
        <th>Pengarang</th>
        <th>Jenis Buku</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($buku as $Buku)
    <tr>

        <td>{{ $Buku->kode_buku }}</td>
        <td>{{ $Buku->judul }}</td>
        <td>{{ $Buku->pengarang }}</td>
        <td>{{ $Buku->jenis_buku }}</td>
        <td>{{ $Buku->harga }}</td>
        <td>{{ $Buku->qty }}</td>
        <td>
            <form action="{{ route('dashboard.destroy',$Buku->kode_buku) }}" method="POST">

                <a class="btn btn-info" href="{{ route('dashboard.show',$Buku->kode_buku) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('dashboard.edit',$Buku->kode_buku) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
<div class="d-flex">
    {!! $buku->links() !!}
</div>
@endsection