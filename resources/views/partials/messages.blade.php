<div class="row">
    <div class="col-md-6 col-md-offset-3">
        @if ($errors->any())
            <div class="row">
                <div class="col-md-12">
                    <ul class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <li>{!!  $error !!}</li>
                        @endforeach
                    </ul>
                </div>

            </div>
        @endif

        @if (Session::has('success_message'))
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success">{!! Session::get('success_message') !!}</div>
                </div>
            </div>
        @endif
        @if (Session::has('error_message'))
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-danger">{!! Session::get('error_message') !!}</div>
                </div>
            </div>
        @endif
        @if (isset($error_message))
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-danger">{!! $error_message !!}</div>
                </div>
            </div>
        @endif
        @if (isset($success_message))
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success">{!! $success_message !!}</div>
                </div>
            </div>
        @endif
    </div>
</div>
