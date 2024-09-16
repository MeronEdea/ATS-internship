<div class="container my-5 driver-container-personal-info">
    <div class="row p-4 bg-white bg-white-custom">
        <form action="#" method="POST" class="w-100">
            @csrf 
            <div class="row">
                <div class="col-12">
                    <div class="mb-4">
                        <h5 class="font-weight-bold">Price</h5>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <input type="text" name="starting_price" class="form-control" placeholder="Starting Price" required>
                        </div>
                        <div class="form-group col-md-3">
                            <input type="text" name="price_per_km" class="form-control" required placeholder="Price per kilometer">
                        </div>
                        <div class="form-group col-md-3">
                            <input type="text" name="commission_per_trip" class="form-control" required placeholder="Commision per trip">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group mt-3">
                <button type="submit" class="btn btn-warning">
                    Update
                </button>
            </div>
        </form>
    </div>
</div>
