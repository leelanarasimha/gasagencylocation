@extends('app')
@section('content')
<div class="row">
    <div class="col-md-12">
    <div><a href="{{url('consumers')}}">Back to Consumers</a></div>
    <div>ConsumerId: {{$consumer->consumerid}}</div>
    <div>Name: {{$consumer->name}}</div>
    <div>Address: {{$consumer->address}}</div>
    <div class="my-4">
        {!! Form::open(array('url' => 'consumers/updateaddress/'.$consumer->consumerid)) !!}
            {!! Form::label('address', 'Address') !!}
            {!! Form::text('address', $consumer->address, ['class' => 'form-control', 'placeholder' => 'Address']) !!}
            <div class="my-3">
                <a href="#" class="btn btn-primary mapshow">Show In Map</a>
                {!! Form::submit('Update Adress', ['class' => 'btn btn-success']) !!}
            </div>

        {!! Form::close() !!}

    </div>
    <div id="map"></div>

    </div>
</div>


<script>

var map;
var geocoder;
var marker;

function intializeMap(position) {
    geocoder = new google.maps.Geocoder();
    var uluru = {lat: 79, lng: 21};

    map = new google.maps.Map(
    document.getElementById('map'), {zoom: 17, center: uluru});


    var address = document.getElementById('address').value;
    showAddress(address);

}

function showAddress(address) {
    geocoder.geocode({'address': address}, function(results, status) {
          if (status === 'OK') {
            map.setCenter(results[0].geometry.location);
             marker = new google.maps.Marker({
              map: map,
              position: results[0].geometry.location
            });

            map.addListener('click', function(e) {
                console.log(e);
        placeMarkerAndPanTo(e.latLng);
            });

          } else {
            alert('Geocode was not successful for the following reason: ' + status);
          }
        });
    }



            function placeMarkerAndPanTo(latLng) {
                marker.setMap(null);
                 marker = new google.maps.Marker({
                    position: latLng,
                    map: map
                });

                geocodePosition(latLng);
            }

    function geocodePosition(pos) {
            console.log(pos);
  geocoder.geocode({
    latLng: pos
  }, function(responses) {
    $('#address').val(responses[0].formatted_address);
  });
}




$(document).ready(function() {


    $('.mapshow').click(function(e){
        e.preventDefault();
        var address = $('#address').val();
        console.log(address);
        showAddress(address);
    })
});
</script>
@endsection
