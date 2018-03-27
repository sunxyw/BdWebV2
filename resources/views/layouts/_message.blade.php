@if (Session::has('message'))
    <div class="alert alert-info" role="alert">
        <div class="container">
            <div class="alert-icon">
                <i class="now-ui-icons travel_info"></i>
            </div>
            <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">
                    <i class="now-ui-icons ui-1_simple-remove"></i>
                </span>
            </button>
        </div>
    </div>
@endif

@if (Session::has('success'))
    <div class="alert alert-success" role="alert">
        <div class="container">
            <div class="alert-icon">
                <i class="now-ui-icons ui-2_like"></i>
            </div>
            <strong>Well done!</strong> You successfully read this important alert message.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">
                    <i class="now-ui-icons ui-1_simple-remove"></i>
                </span>
            </button>
        </div>
    </div>
@endif

@if (Session::has('danger'))
    <div class="alert alert-danger" role="alert">
        <div class="container">
            <div class="alert-icon">
                <i class="now-ui-icons objects_support-17"></i>
            </div>
            <strong>Oh snap!</strong> Change a few things up and try submitting again.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">
                    <i class="now-ui-icons ui-1_simple-remove"></i>
                </span>
            </button>
        </div>
    </div>
@endif