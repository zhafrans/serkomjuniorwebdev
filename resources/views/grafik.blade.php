@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h2 class="text-center">Grafik Jumlah Pendaftar</h2>
        <canvas id="myChart"></canvas>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var labels = {!! json_encode($labels) !!};
            var totals = {!! json_encode($totals) !!};
    
            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Jumlah Pendaftar',
                        data: totals,
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                precision: 0, // Menetapkan jumlah digit desimal ke 0
                                callback: function (value, index, values) {
                                    return value.toLocaleString(); // Menampilkan angka tanpa koma
                                }
                            }
                        }
                    }
                }
            });
        });
    </script>
@endsection
