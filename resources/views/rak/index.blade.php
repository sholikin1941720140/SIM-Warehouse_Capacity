@extends('template')

@section('custom-css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">

    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script defer src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script defer src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
@endsection

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Manajemen Kapasitas Rak</h6>
    </div>
    <div class="card-body">
        <div class="row mb-2 d-flex justify-content-end mr-auto mt-2">
            <div class="ml-auto">
              <a href="{{ route('kapsrak.create') }}" class="btn btn-success">
                <i class="fas fa-plus"></i>
                Tambah Data
              </a>
            </div>
          </div>
        <hr>
        <table class="table table-bordered border-primary" id="example2">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Kode</th>
                    <th>Alamat</th>
                    <th>Panjang</th>
                    <th>Lebar</th>
                    <th>Tinggi</th>
                    <th>Tinggi Atas</th>
                    <th>Tinggi Total</th>
                    <th>Volume</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($data as $key => $value)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $value->kode }}</td>
                    <td>{{ $value->alamat }}</td>
                    <td>{{ $value->panjang }}</td>
                    <td>{{ $value->lebar }}</td>
                    <td>{{ $value->tinggi }}</td>
                    <td>{{ $value->tinggi_atas }}</td>
                    <td>{{ $value->tinggi_total }}</td>                    
                    <td>{{ number_format($value->volume, 0, ",", ".") }}</td>
                    <td>
                    <div class="btn-group float-center mr-2">
                        <a href="{{ route('kapsmaterial.edit', $value->alamat) }}" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit fa-xs"></i>
                        </a>
                        &nbsp;
                        <form action="{{ route('kapsmaterial.destroy', $value->alamat) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger btn-sm ondelete">
                            <i class="fas fa-trash-alt fa-xs"></i>
                        </button>
                        </form>
                    </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('custom-js')
    <script>
        $(document).ready(function() {
            $('#example2').DataTable();
        });
    </script>
@endsection