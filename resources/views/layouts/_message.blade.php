@if (Session::has('message'))
    <div class="alert alert-info" role="alert">
        {{ Session::get('message') }}&emsp;
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">
                <i class="now-ui-icons ui-1_simple-remove"></i>
            </span>
        </button>
    </div>
@endif

@if (Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}&emsp;
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">
                <i class="now-ui-icons ui-1_simple-remove"></i>
            </span>
        </button>
    </div>
@endif

@if (Session::has('danger'))
    <div class="alert alert-danger" role="alert">
        {{ Session::get('danger') }}&emsp;
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">
                <i class="now-ui-icons ui-1_simple-remove"></i>
            </span>
        </button>
    </div>
@endif