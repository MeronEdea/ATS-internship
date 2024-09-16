<div class="card">
    <div class="card-body">
        <div class="graph">
            <canvas id="totalTripsGraph"></canvas>
        </div>
        <div class="trip-summary">
            <h5>{{ $title }}</h5>
            <p><span class="text-success font-weight-bold">(+{{ $tripDifference }})</span> than last week<p>
            <div class="trip-categories">
                <div class="category">
                    <div class="category-header">
                        <i class="fas fa-taxi"></i>
                        <h6 class="category-title">Comfort</h6>
                    </div>
                    <span class="category-number">{{ $comfortTrips }}</span>
                    <div class="small-bar">
                        <div class="bar-fill" style="width: {{ ($comfortTrips / $maxTrips) * 100 }}%;"></div>
                    </div>
                </div>
                <div class="category">
                    <div class="category-header">
                        <i class="fas fa-car-side"></i>
                        <h6 class="category-title">Grey</h6>
                    </div>
                    <span class="category-number">{{ $greyTrips }}</span>
                    <div class="small-bar">
                        <div class="bar-fill" style="width: {{ ($greyTrips / $maxTrips) * 100 }}%;"></div>
                    </div>
                </div>
                <div class="category">
                    <div class="category-header">
                        <i class="fas fa-bus-alt"></i>
                        <h6 class="category-title">Bole</h6>
                    </div>
                    <span class="category-number">{{ $boleTrips }}</span>
                    <div class="small-bar">
                        <div class="bar-fill" style="width: {{ ($boleTrips / $maxTrips) * 100 }}%;"></div>
                    </div>
                </div>
                <div class="category">
                    <div class="category-header">
                        <i class="fas fa-tachometer-alt"></i>
                        <h6 class="category-title">Meter</h6>
                    </div>
                    <span class="category-number">{{ $meterTrips }}</span>
                    <div class="small-bar">
                        <div class="bar-fill" style="width: {{ ($meterTrips / $maxTrips) * 100 }}%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('assets/js/chart.js')}}"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> --}}
<script>
    var tripLabels = @json($tripData['labels']);
    var tripCounts = @json($tripData['data']);

    var ctx = document.getElementById('totalTripsGraph').getContext('2d');

    var totalTripsChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: tripLabels,
            datasets: [{
                label: 'Trips',
                data: tripCounts,
                backgroundColor: '#FFFFFF',
                borderRadius: 7,
                barThickness: 10
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            layout: {
                padding: {
                    top: 20,
                    right: 20,
                    bottom: 20,
                    left: 20
                }
            },
            scales: {
                x: {
                    display: false,
                    grid: {
                        display: false, 
                    },
                    ticks: {
                        display: false
                    }
                },
                y: {
                    beginAtZero: true,
                    grid: {
                        display: false, 
                    },
                    ticks: {
                        color: '#FFFFFF',
                        stepSize: 100
                    }
                }
            },
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    enabled: true
                }
            },
            barPercentage: 0.6,
            categoryPercentage: 0.5
        }
    });
</script>
