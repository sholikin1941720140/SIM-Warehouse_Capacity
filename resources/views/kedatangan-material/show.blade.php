@extends('template')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">INCOMING DETAIL</h6>
        <a href="{{ url('/kedatanganmaterial') }}" class="btn btn-sm btn-primary"><i class="fas fa-arrow-circle-left"></i> Kembali</a>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Pesanan</th>
                        <th>Part Number</th>
                        <th>Qty</th>
                        <th>User By</th>
                        <th>Volume Material</th>
                        <th>Luasan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $key => $value)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>
                            <b>Reference: </b> {{ $value->references }}
                            <br>
                            <b>No. PO : </b>{{ $value->no_po }} 
                            <br>
                            <b>No. SJ : </b>{{ $value->no_sj }}
                            <br>
                            <b>Item : </b> {{ $value->item }}
                        </td>
                        <td>
                            <b>Alias : </b>{{ $value->alias }}
                            <br>
                            <b>P/N : </b>{{ $value->pn }}
                        </td>
                        <td>
                            <b>Kedatangan : </b>{{ $value->qty_kedatangan }} 
                            <br>
                            <b>Actual : </b>{{ $value->qty_actual }}
                        </td>
                        <td>{{ $value->user_by }}</td>
                        <td>{{ number_format($value->volume, 4) }}</td>
                        <td>{{ $value->luasan }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
