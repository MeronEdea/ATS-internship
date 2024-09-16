<div class="container my-5 driver-container-personal-info">
    <div class="row p-4 bg-white bg-white-custom">
        <form action="#" method="POST" class="w-100">
            @csrf 
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-4">
                        <h5 class="font-weight-bold">Personal Info</h5>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" name="full_name" class="form-control" placeholder="Driver Full Name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="phone" name="phonenumber" class="form-control" required placeholder="Phone Number">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-4">
                        <h5 class="font-weight-bold">Vehicle Information</h5>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" name="side_number" class="form-control" required placeholder="Side Number">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" name="plate_number" class="form-control" required placeholder="Plate Number">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 mb-4">
                <h5 class="font-weight-bold">Personal Info</h5>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <div class="form-group form-floating-select">
                        <select name="company" class="form-control" required>
                            <option value="comfort">Comfort</option>
                        </select>
                        <label for="company">Select Company</label>
                    </div>
                </div>
                <div class="form-group col-md-3">
                    <div class="form-floating-select">
                        <select name="group" class="form-control" required>
                            <option value="c-3548">C-3548</option>
                        </select>
                        <label for="group">Select Group</label>
                    </div>
                </div>
            </div>

            <div class="form-group mt-3">
                <button type="submit" class="btn btn-warning">
                    Add Driver
                </button>
            </div>
        </form>
    </div>
</div>