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
                            <input type="text" name="full_name" class="form-control" placeholder="Admin Full Name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="phone" name="phonenumber" class="form-control" required placeholder="Phone Number">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-6">
                        <h5 class="font-weight-bold">Role</h5>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <div class="form-group form-floating-select">
                                <select name="role" class="form-control" required>
                                    <option value="order_manager">Order Manager</option>
                                </select>
                                <label for="role">Select Role</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="mb-6">
                        <h5 class="font-weight-bold">Password</h5>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="password" name="password" class="form-control password" required placeholder="Password" >
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <a class="font-weight-bold" href="#">Generate Password</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group mt-3">
                <button type="submit" class="btn btn-warning">
                    Add Admin
                </button>
            </div>
        </form>
    </div>
</div>