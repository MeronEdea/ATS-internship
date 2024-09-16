<div class="card">
    <div class="card-body">
        <h5 class="font-weight-bold">Guest Orders</h5>
        <form>
            <div class="form-group">
                <input type="text" class="form-control" id="guestName" placeholder="Guest Name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="enterTime" placeholder="Enter Time">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="destination" placeholder="Destination">
            </div>
            <div class="form-group">
                <div class="form-floating-select">
                    <select name="driver" class="form-control" required>
                        <option value="3452">3452</option>
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
