@extends('app')
@section('content')
<div class="row">
    <div class="col-md-12">
        <h3>Update User</h3>
        {!! Form::model($user,['url' => 'users/edit/'.$user->id, 'method' => 'put']) !!}
            <input type="hidden" name="id" value="{{$user->id}}"/>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    {!! Form::label('name', 'Name:') !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    {!! Form::label('email', 'Email:') !!}
                    {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    {!! Form::label('mobile', 'Mobile:') !!}
                    {!! Form::text('mobile', null, ['class' => 'form-control', 'placeholder' => 'Mobile']) !!}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    {!! Form::submit('Register', ['class' => 'btn btn-primary']) !!}
                </div>
            </div>
        </div>


        {!! Form::close() !!}
    </div>
</div>
@endsection
