@extends('layouts.master')
@push('styles')
    <style>

    </style>
@endpush
@section('section')
    <div class="chart-cont">
        <div class="row">
            <div class="col-md-6">
                <div class="w-100 h-80 bg-black">
                    <label for="barChart" class="text-white d-block ms-2">Visitors By Platform</label>
                    <canvas id="barChart" height="300px"></canvas>
                </div>
            </div>
            <div class="col-md-6">
                <div class="w-100 h-80 bg-black">
                    <label for="pieChart" class="text-white d-block ms-2">Optimization Level</label>
                    <canvas id="pieChart" height="300px"></canvas>
                </div>
            </div>
            <div class="col-md-12 mt-2">
                <div class="w-100 h-70 bg-black">
                    <label for="lineChart" class="text-white d-block ms-2">Visitors x Time</label>
                    <canvas id="lineChart" height="120px"></canvas>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        const data = {
            labels: ['January', 'February', 'March', 'April', 'May', 'June'],
            datasets: [{
                label: 'Visitors x Time',
                data: [65, 59, 80, 81, 56, 55, 40],
                fill: false,
                borderColor: '#06F4CB',
                tension: 0.1
            }]
        };

        const barChart = new Chart(
            document.getElementById('barChart'), {
                type: 'bar',
                data: {
                    labels: [@foreach($social_apps as $name),'{{ $name->social_media }}'@endforeach],
                    datasets: [{
                        label: '',
                        data: [@foreach($social_count as $count),'{{ $count }}'@endforeach],
                        backgroundColor: [
                            '#07f5cb',
                            '#07f5cb',
                            '#07f5cb',
                            '#07f5cb',
                            '#07f5cb'
                        ],
                        borderColor: [
                            '#07f5cb',
                            '#07f5cb',
                            '#07f5cb',
                            '#07f5cb',
                            '#07f5cb'
                        ],
                        borderWidth: 1,
                        borderRadius: 10,
                        borderSkipped: false,
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                color: '#D3D3D320'
                            },
                        }
                    },
                    plugins: {
                        legend: {
                            labels: {
                                boxWidth: 0
                            }
                        }
                    }
                },
                plugins: [custom_canvas_background_color]

            }
        );

        const lineChart = new Chart(
            document.getElementById('lineChart'), {
                type: 'line',
                data: data,
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                color: '#D3D3D320'
                            },
                        }
                    },
                    plugins: {
                        legend: {
                            labels: {
                                boxWidth: 0
                            }
                        }
                    }
                }
            }
        );

        var ctx = document.getElementById("pieChart").getContext('2d');
        var pieChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['optimization level', ],
                datasets: [{
                    label: '# of Votes',
                    data: [85, 15],
                    backgroundColor: [
                        '#07f5cb',
                        '#000'
                    ],
                    borderColor: [
                        '#07f5cb',
                        '#000'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                plugins: {
                    legend: {
                        labels: {
                            boxWidth: 0
                        }
                    },
                    tooltip: {
                        enabled: false,
                    },
                    datalabels: {
                        formatter: (value, context) => {
                            console.log(context)
                            const datapoints = context.chart.data.datasets[0].data
                            let totalPercentage = datapoints.reduce((total, datapoint) => total + datapoint)
                            // console.log((value / totalPercentage * 100).toFixed(1))
                            return (value / totalPercentage * 100).toFixed(1) + '%'
                        }
                    }
                }
            },
            plugins: [ChartDataLabels]
        });
    </script>
@endpush
