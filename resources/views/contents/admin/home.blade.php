@extends('layouts.app')
@section('content')
    <div class="container" style="padding-top: 6rem">
        <div class="card text-white card-rounded" style="color: #fff; background-color: #b6895b">
            <div class="card-body text-center pt-4">
                <h4 class="card-title">
                    <b><i class="fas fa-check me-1"></i></b> 
                    Selamat Datang Admin, <b>{{ auth()->user()->name }}</b>
                </h4>
                <a href="{{ route('home.index') }}" target="_blank" class="btn btn-lg mt-2" style="color: #fff; background-color:#010101cc">
                    <i class="fas fa-rocket me-2"></i> Lihat Website
                </a>
            </div>
        </div>
    </div>
    <div class="chart-title mt-5 mb-5 text-center">
        <h3>Grafik Pengunjung Website</h3>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header text-center">Kunjungan Website per Hari</div>
                    <div class="card-body">
                        <canvas id="websiteVisitsChart" width="400" height="200"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="card-header">
        <div class="card-body">
            <canvas class="websiteVisitsChart" id="websiteVisitsChart" width="400" height="200"></canvas>
            <div class="col-md-6">
                <canvas class="productVisitsChart" id="productVisitsChart" width="400" height="200"></canvas>
            </div>
        </div>
    </div> --}}

    <script>
        const websiteVisitsByDayData = @json($websiteVisitsByDay);
        const productVisitsByDayData = @json($productVisitsByDay);

        const websiteVisitsChart = new Chart(document.getElementById('websiteVisitsChart'), {
            type: 'line',
            data: {
                labels: websiteVisitsByDayData.map(data => data.visit_date),
                datasets: [{
                    label: 'Website Visitors',
                    data: websiteVisitsByDayData.map(data => data.visits),
                    fill: false,
                    borderColor: 'rgba(182, 137, 91, 1)',
                    borderWidth: 2
                }]
            },
        });

        const productVisitsChart = new Chart(document.getElementById('productVisitsChart'), {
            type: 'line',
            data: {
                labels: productVisitsByDayData.map(data => data.visit_date),
                datasets: [{
                    label: 'Product Visits',
                    data: productVisitsByDayData.map(data => data.visits),
                    fill: false,
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 2
                }]
            },
        });
    </script>
@endsection    

