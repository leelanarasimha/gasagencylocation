@extends('app')
@section('content')
<div class="row">
    <div class="col-md-12">
        <a href="{{url('consumers')}}">Back</a>
        <h3>Consumer Details</h3>
        <table class="table">
            @foreach ($consumer as $item)
            <tr>
                <td>Consumer Id</td>
                <td>{{$item->consumerid}}</td>
            </tr>
            <tr>
                <td>Name</td>
                <td>{{$item->name}}</td>
            </tr>
            <tr>
                <td>Fathers Name</td>
                <td>{{$item->fathersName}}</td>
            </tr>
            <tr>
                <td>Mothers Name</td>
                <td>{{$item->mothersName}}</td>
            </tr>
            <tr>
                <td>Spouse Name</td>
                <td>{{$item->spouseName}}</td>
            </tr>
            <tr>
                <td>House Name</td>
                <td>{{$item->houseNo}}</td>
            </tr>

            <tr>
                <td>House</td>
                <td>{{$item->house}}</td>
            </tr>

            <tr>
                <td>Housing</td>
                <td>{{$item->housing}}</td>
            </tr>

            <tr>
                <td>Street Name</td>
                <td>{{$item->streetName}}</td>
            </tr>

            <tr>
                <td>area</td>
                <td>{{$item->area}}</td>
            </tr>

            <tr>
                <td>city</td>
                <td>{{$item->city}}</td>
            </tr>

            <tr>
                <td>District</td>
                <td>{{$item->district}}</td>
            </tr>

            <tr>
                <td>Pincode</td>
                <td>{{$item->pincode}}</td>
            </tr>

            <tr>
                <td>Ration Card</td>
                <td>{{$item->rationcard}}</td>
            </tr>

            <tr>
                <td> EMail</td>
                <td>{{$item->email}}</td>
            </tr>

            @endforeach

        </table>
    </div>
</div>
@endsection
