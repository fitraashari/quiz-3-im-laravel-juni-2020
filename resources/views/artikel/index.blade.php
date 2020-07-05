@extends('layouts.master')
@section('content')
<h1 class="h3 mb-2 text-gray-800">Artikel</h1>
<p class="mb-4">Daftar Artikel <a class="btn btn-primary" href="artikel/create">Tambah Data</a></p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>#</th>
            <th>Judul</th>
            <th>Tanggal Dibuat</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>#</th>
            <th>Judul</th>
            <th>Tanggal Dibuat</th>
            <th>Action</th>
          </tr>
        </tfoot>
        <tbody>
          <tr>
            <td>1</td>
            <td>System Architect</td>
            <td>61</td>
            <td>
                <a href="/artikel/detail" class="btn btn-sm btn-primary">Detail</a>
                <a href="/artikel/detail" class="btn btn-sm btn-warning">Edit</a>
                <a href="/artikel/detail" class="btn btn-sm btn-danger">Delete</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
@push('scripts')
{{-- <script src="{{asset('sbadmin2/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('sbadmin2/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script>
    $(document).ready(function() {
  $('#dataTable').DataTable();
});
</script> --}}
<script src="{{asset('sbadmin2/js/swal.min.js')}}"></script>
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush