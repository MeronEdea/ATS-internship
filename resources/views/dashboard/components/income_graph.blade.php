<div class="card">
    <div class="card-body">
        <h5 class="font-weight-bold mb-2">
            Income
            <p><span class="income-span font-weight-bold">(+{{ $incomeDifference }}) more</span> than last month<p>
        </h5>
        <div class="position-relative income-graph" >
            <canvas id="incomeGraph"></canvas>
        </div>
    </div>
</div>

<script src="{{asset('assets/js/chart.js')}}"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> --}}
<script>
    var currentYearIncome = @json($currentYearIncome);
    var lastYearIncome = @json($lastYearIncome);

    var ctx2 = document.getElementById('incomeGraph').getContext('2d');

    var gradientYellow = ctx2.createLinearGradient(0, 0, 0, 300);
    gradientYellow.addColorStop(0, 'rgba(255, 193, 7, 0.5)');
    gradientYellow.addColorStop(1, 'rgba(255, 193, 7, 0)');

    var gradientGray = ctx2.createLinearGradient(0, 0, 0, 300);
    gradientGray.addColorStop(0, 'rgba(45, 55, 72, 0.5)');
    gradientGray.addColorStop(1, 'rgba(45, 55, 72, 0)');

    var incomeChart = new Chart(ctx2, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                label: 'Income this year',
                data: currentYearIncome,
                backgroundColor: gradientYellow,
                borderColor: '#F6CD56',
                fill: true,
                tension: 0.4,
                pointRadius: 0,
                pointHoverRadius: 0
            },
            {
                label: 'Income last year',
                data: lastYearIncome,
                backgroundColor: gradientGray,
                borderColor: '#2D3748',
                fill: true,
                tension: 0.4,
                pointRadius: 0,
                pointHoverRadius: 0
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                x: {
                    grid: {
                        display: false
                    }
                },
                y: {
                    beginAtZero: true,
                    grid: {
                        display: false
                    },
                    ticks: {
                        stepSize: 100,
                        color: '#A0AEC0',
                        font: {
                            family: 'Arial, sans-serif',
                            size: 12
                        }
                    }
                }
            },
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    enabled: true,
                    backgroundColor: '#fff',
                    bodyColor: '#2D3748',
                    borderColor: '#E2E8F0',
                    borderWidth: 1,
                    titleColor: '#2D3748'
                }
            }
        }
    });
</script>
