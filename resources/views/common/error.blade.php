@if (count($errors) > 0)
    <div class="alert alert-danger" role="alert">
        <div class="container text-left">
            @foreach ($errors->all() as $error)
                <i class="fa fa-exclamation-triangle"></i> {{ $error }}<br>
            @endforeach
        </div>
    </div>
@endif