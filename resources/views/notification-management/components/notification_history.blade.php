<div class="card h-100 notification-card">
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h5 class="font-weight-bold">Notification History</h5>
            <div class="d-flex align-items-center">
                <label class="me-2 mb-0">Filter by:</label>
                <select class="form-select">
                    <option>All</option>
                    <option>Unread</option>
                    <option>Read</option>
                </select>
            </div>
        </div>
        @foreach($notifications as $notification)
        <div class="d-flex align-items-start mb-4">
            <div class="me-3">
                <img class="notification-image">
            </div>
            <div>
                <div class="text-muted small notification-date">{{ $notification['date'] }}</div>
                <h6 class="fw-bold mb-1">{{ $notification['title'] }}</h6>
                <div class="text-muted small">
                    <i class="bi bi-clock"></i> {{ $notification['duration'] }} Min. To Read
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
