<div class="container my-5 container-personal-info">
    <div class="row p-4 bg-white bg-white-custom">
        <div class="col-12 mb-4">
            <h5 class="font-weight-bold">Personal Info</h5>
        </div>
        <form action="#" method="POST" class="w-100">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-3">
                    <input type="text" name="group_name" class="form-control" placeholder="Enter Group Name" required>
                </div>
                <div class="form-group col-md-3">
                    <input type="date" name="date" class="form-control" required onfocus="(this.type='date')" onblur="if(!this.value)this.type='text'" placeholder="Select Date">
                </div>
                <div class="form-group col-md-3">
                    <input type="time" name="start_time" class="form-control" required onfocus="(this.type='time')" onblur="if(!this.value)this.type='text'" placeholder="Starting Time">
                </div>
                <div class="form-group col-md-3">
                    <input type="time" name="end_time" class="form-control" required onfocus="(this.type='time')" onblur="if(!this.value)this.type='text'" placeholder="Ending Time">
                </div>
            </div>
            <div class="form-group mt-3">
                <button type="submit" class="btn btn-warning">
                    Add Schedule
                </button>
            </div>
        </form>
    </div>
</div>
