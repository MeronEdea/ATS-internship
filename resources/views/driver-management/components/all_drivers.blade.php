<div class="driver-schedule-container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="schedule-header">All Drivers</h2>
        <div class="input-group search-bar">
            <button class="input-group-text" id="search-addon">
                <i class="fas fa-search"></i>
            </button>
            <input type="text" class="form-control" placeholder="Search...">
        </div>
        <div class="input-group filter-bar">
            <div class="input-group-prepend">Filter by:</div>
            <select class="form-select">
                <option>Recent</option>
            </select>
        </div>
    </div>
    
    <table class="table table-hover custom-table">
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Phone Number</th>
                <th>Side Number</th>
                <th>Plate Number</th>
                <th>Company</th>
                <th>Group</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($drivers as $driver)
                <tr>
                    <td>{{ $driver['full_name'] }}</td>
                    <td>{{ $driver['phone_number'] }}</td>
                    <td>{{ $driver['side_number'] }}</td>
                    <td>{{ $driver['plate_number'] }}</td>
                    <td>{{ $driver['company'] }}</td>
                    <td>{{ $driver['group'] }}</td>
                    <td><a href="#" class="text-danger">Delete</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-between pagination-container">
        <span class="pagination-info">
            Showing data 1 to 8 of 2K entries
        </span>
        <nav class="pagination-center">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#"><</a></li>
                <li class="page-item"><a class="page-link active-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><span class="pagination-dots">...</span></li>
                <li class="page-item"><a class="page-link" href="#">40</a></li>
                <li class="page-item"><a class="page-link" href="#">></a></li>
            </ul>
        </nav>
    </div>    
</div>