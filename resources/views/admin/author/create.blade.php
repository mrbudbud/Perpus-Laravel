@extends('admin.templates.master')

@section('content')
    <div class="box">
      <div class="boc header">
        <h3 class="box-title">Tambah Data Penulis</h3>
      </div>
      <div class="box-title">
        <form action="{{ route('admin.author.store')}}" method="post">
          @csrf
            <div class="form-grop">
              <label for="">Nama</label>
              <input type="text" class="form-controler" name="name" placeholder="Nama" >
            </div>
            <div class="form-grop">
              <input type="submit" value="Tambah" class="btn btn-primary" placeholder="Nama" >
            </div>
        </form>
      </div>
    </div>
@endsection