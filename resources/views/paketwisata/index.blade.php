@extends('layouts.main')


@section('container')

<table class="table my-5">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Wisata</th>
      <th scope="col">Participant</th>
      <th scope="col">Harga</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Gunung Ciremai Via Memek basah</td>
      <td>5 Orang</td>
      <td>5 Juta kalo Pada Punya Memek</td>
      <td><div><button class="px-2 btn btn-primary">Edit</button> <button class="px-2 btn btn-danger">Hapus</button></div></td>
    </tr>
  </tbody>
</table>

@endsection