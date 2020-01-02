@extends('app')
@section('content')
{!! Form::open(['url' => 'login/store']) !!}
<div class="row">
    <div class="col-md-12">
        <h3>Login</h3>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    {!! Form::label('email', 'Email or Mobile:') !!}
                    {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email or Mobile']) !!}
                </div>
            </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        {!! Form::label('password', 'Password:') !!}
                        {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        {!! Form::submit('Login', ['class' => 'btn btn-primary']) !!}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <a href="{{ url('register') }}">Register Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}

@endsection
