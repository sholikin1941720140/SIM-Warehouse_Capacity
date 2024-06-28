@extends('template')

@section('content')
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="card cardint">
                        <div class="card-body p-3">
                            <h5 class="">Warehouse Capacity</h5>
                            <div class="mt-3">
                                <div class="d-flex align-items-center justify-content-center" style="vertical-align: middle;">
                                    <canvas id="warehouseCapacityChart" style="min-height: 330px; max-height:100%; height: auto;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card cardint">
                        <div class="card-body p-3">
                            <h5 class="">Calendar</h5>
                            <div id="calendar"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fullcalendar/core"></script>
<script src="https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Chart.js code (existing code)

        // FullCalendar initialization
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            plugins: ['dayGrid'],
            events: [
                // Your events data here, you can retrieve from Laravel or hardcode for testing
                {
                    title: 'Event 1',
                    start: '2024-06-28',
                    end: '2024-06-30'
                },
                {
                    title: 'Event 2',
                    start: '2024-07-01',
                    end: '2024-07-03'
                }
                // Add more events as needed
            ]
        });
        calendar.render();
    });
</script>
@endsection
