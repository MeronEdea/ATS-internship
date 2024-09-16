<div class="card">
    <div class="card-body">
        <h5 class="font-weight-bold">Terminal {{ $terminalNumber }}</h5>
        <div class="row">
            @foreach($drivers as $index => $driver)
                <div class="col-md-2 mb-2">
                    @if($index === 0)
                        <a href="#" class="btn btn-dark btn-block d-flex align-items-center justify-content-center">{{ $driver }}</a>
                    @elseif(in_array($driver, $newDrivers))
                        <a href="#" class="btn btn-secondary btn-block d-flex align-items-center justify-content-center">{{ $driver }}</a>
                    @else
                        <a href="#" class="btn btn-normal btn-block d-flex align-items-center justify-content-center">{{ $driver }}</a>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</div>
