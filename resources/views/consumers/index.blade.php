@extends('app')
@section('content')
<div class="row">
    <div class="col-md-12">
        <h3>Consumers</h3>
        <div>
            {!!Form::open(array('method' => 'get', 'url' => 'consumers'))!!}
            <div class="row">
                <div class="col-md-6">
                    {!! Form::text('search',null, array('class' => 'form-control')) !!}
                </div>
                <div class="col-md-4">
                    {!! Form::submit('search', array('class' => 'btn btn-primary')) !!}
                </div>
            </div>
            {!!Form::close() !!}
        </div>
        <div class="my-4">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ConsumerId</th>
                    <th>Name</th>
                    <th>Action</th>
                    <th>Update</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($consumers as $consumer)
                <tr>
                    <td>{{$consumer->consumerid}}</td>
                    <td>{{$consumer->name}}</td>
                    <td><a href="{{url('consumers/'.$consumer->consumerid)}}">View Details</a></td>
                    <td><a href="{{url('consumers/updateaddress/'.$consumer->consumerid)}}">Update Address</a></td>

                </tr>
                @endforeach

            </tbody>
        </table>

        <div class="row text-center margin-top-10">
            <div class="col-md-12">
                <?php echo $consumers->render(); ?>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection
