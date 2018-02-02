@extends('search') 
@section('content')
<div class="results" id="results" style="margin-top:40px;">
<div class="card-header">
    <ul class="nav nav-pills" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" role="tab" data-toggle="tab" href="#Overview">Overview</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" role="tab" data-toggle="tab" href="#Specs">Specifications</a>
        </li>
    </ul>
</div>
<div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="Overview">
        <img class="card-img-bottom" src="{{$url}}"> 
            <div class="card-body"> 
                <h5 class="card-title">{{$phonename}}</h5> 
                <p  class="card-text"> {{$overview}} </p>
            </div>
    </div>
    <div role="tabpanel" class="tab-pane" id="Specs">
        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Operating System: {{$os}}
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Memory: {{$ram}}
                </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Camera: {{$camera}}
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Display: {{$display}}
            </li>
        </ul>
    </div>
    </div>
        
</div>



@endsection
