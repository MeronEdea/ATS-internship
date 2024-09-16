<div class="card">
    <div class="card-body">
        <h5 class="font-weight-bold">Incoming Orders</h5>
        <form method="POST" action="{{ route('assign-order.store') }}">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" id="fullName" placeholder="Full Name">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" id="passengers" placeholder="Number of Passengers">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="destination" placeholder="Destination">
            </div>
            <div class="form-group">
                <div class="form-floating-select">
                    <select name="terminal" class="form-control" required>
                        <option value="terminal1">Terminal 1</option>
                        <option value="terminal2">Terminal 2</option>
                    </select>
                    <label for="group">Select Terminal</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form-floating-select">
                    <select name="driver" class="form-control" required>
                        @foreach($newDrivers as $driver)
                            <option value="{{ $driver }}">{{ $driver }}</option>
                        @endforeach
                    </select>
                    <label for="group">Driver List</label>
                </div>
            </div>
            <div class="form-group mt-3">
                <button type="submit" class="btn btn-warning">
                    Assign order
                </button>
            </div>
        </form>
    </div>
</div>
