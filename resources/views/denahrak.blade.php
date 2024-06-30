<!-- denahrak.blade.php -->
@extends('template')

@section('custom-css')

@endsection

@section('title', 'Denah Rak Warehouse')

@section('content')
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Denah Rak Warehouse</h6>
            <hr>
        </div>
        <div class="form-container" style="max-width: 100%; padding: 0px; background-color: #46b4f0; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 0px;">
            <div class="form-header" style="text-align: center; margin-bottom: 5px; margin-top: 10px;">
                <h2 style="color: #333333; font-size: 15px; font-weight: bold;">LAYOUT WAREHOUSE RAW MATERIAL</h2>
            </div>
        </div>
        <body>
            <div class="compass-container" align=" right">
                <img src="/template/img/Compas.png" alt="Compass Image" width="100" height="100">
            </div>
            <div class="warehouse">
                <div class="room" id="room1">AREA SUBSTORE (WIRE) PRODUKSI</div>
                <div class="room" id="room2">AREA SUB MATERIAL & STATIONARY</div>
                <div class="room" id="room3">AREA TRANSIT A 28 Pallet</div>
                <div class="room" id="room4">INCOMING</div>
                <div class="room" id="room5">QC INCOMING </div>
                <div class="room" id="room6">AREA CNC PRODUKSI </div>
                <div class="room" id="room7">LOKET 1</div>
                <div class="room" id="room8">Accessoris</div>
                <div class="room" id="room9"> Loket 2</div>
                <div class="room" id="room10"> Area Kanban</div>
                <a href="/denahrak">
                    <div class="room" id="room11"> RAK A (WIRE)</div>
                </a>
                <div class="room" id="room12"> RAK KANBAN</div>
                <a href="/denahrak">
                    <div class="room" id="room13"> RAK A (WIRE)</div>
                </a>
                <a href="/denahrak">
                    <div class="room" id="room14"> RAK B (WIRE)</div>
                </a>
                <a href="/denahrak">
                    <div class="room" id="room15"> RAK B (ACCESSORIS)</div>
                </a>
                <a href="/denahrak">
                    <div class="room" id="room16"> RAK C (WIRE)</div>
                </a>
                <div class="room" id="room17"> RAK AH-Switch</div>
                <div class="room" id="room18"> KASIR</div>
                <a href="/denahrak">
                    <div class="room" id="room19"> RAK C (ASSY)</div>
                </a>
                <div class="room" id="room20"> RAK D (TERMINAL)</div>
                <div class="room" id="room21"> RAK D ( PART SUB ASSY)</div>
                <div class="room" id="room22">AREA WIRE BATTERAY CABLE 12 Pallet</div>
                <div class="room" id="room23"> RAK E (TERMINAL)</div>
                <div class="room" id="room24"> RAK E (PART SUB ASSY)</div>
                <div class="room" id="room25"> RAK P (BC)</div>
                <div class="room" id="room26"> RAK E (PART)</div>
                <div class="room" id="room27"> RAK F (TERMINAL)</div>
                <div class="room" id="room28"> RAK F (PART SUB ASSY)</div>
                <div class="room" id="room29"> RAK G (SUB ASSY)</div>
                <div class="room" id="room30"> RAK G (PART SUB.ASSY)</div>
                <div class="room" id="room31"> AREA TRANSIT B</div>
                <div class="room" id="room32"> PARKIR FORKLIFT</div>
                <div class="room" id="room33"> RAK H (CS/IS)</div>
                <div class="room" id="room34"> RAK H (SUB ASSY)</div>
                <div class="room" id="room35"> RAK H (PART SUB ASSY)</div>
                <div class="room" id="room36">AREA CS/IS</div>
                <div class="room" id="room37"> AREA TRANSIT GOEI</div>
                <div class="room" id="room38"> RAK I(MATERIAL DEADSTOCK)</div>
                <div class="room" id="room39"> RAK TUBE L</div>
                <div class="room" id="room40"> RAK TAPPING J</div>
                <div class="room" id="room41"> AREA CHARGING</div>
                <div class="room" id="room42"> GERBANG A</div>
                <div class="room" id="room43"> GERBANG B</div>
                <div class="room" id="room44"> ADMIN INCOMING</div>
                <div class="room" id="room45"> AREA SPAREPART</div>
                <div class="room" id="room46"> CUTTING VT</div>
                <div class="room" id="room47">Timbangan</div>
            </div>
            <hr>
        </body>
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">Informasi</h6>
                </div>
                <div class="card-body">
                    <div class="info-item" style="color: black; display: flex; justify-content: space-between;">
                        <b>Rak:</b> <span id="rak-info"></span>
                    </div>
                    <div class="info-item" style="color: black; display: flex; justify-content: space-between;">
                        <b>Total Volume:</b> <span id="total-volume"></span>
                    </div>
                    <div class="info-item" style="color: black; display: flex; justify-content: space-between;">
                        <b>Total Terpakai:</b> <span id="total-terpakai"></span>
                    </div>
                    <div class="info-item" style="color: black; display: flex; justify-content: space-between;">
                        <b>Total Sisa:</b> <span id="total-sisa"></span>
                    </div>
                </div>
            </div>
        </div>        
    </div>
</div>
@endsection


@section('custom-js')
    <script>
        
    </script>
@endsection