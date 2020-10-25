@extends('admin.templates.master')

@section('content')

    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Data Penulis</h3>
        <a href="{{ route('admin.author.create') }}" class="btn btn-primary my-3">Tambah Data Penulis</a>
      </div>

      <div class="box-body">
        <table id="datatable" class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>Id</th>
              <th>Nama</th>
              <th>Aksi</th>
            </tr>
          </thead>
      </div>
    </div>

@endsection

@push('script')
    <script>
      $(function () {
        $('#datatable').DataTable({
          processing: true,
          serverSide: true,
          ajax: '{{ route('admin.author.data') }}',
          columns: [
            {data : 'DT_RowIndex', orderable: false, searchable: false},
            {data : 'name'},
            {data : 'action'}
          ]
        });
      });
    </script>
@endpush