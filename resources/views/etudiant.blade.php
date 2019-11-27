@extends('layouts.app')

@section('content')
<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="title m-b-md ">
            Etidiant 
        </div>
        <div>
            @if(count($etu) > 1)
                @foreach($etu as $et)
                    <h3> {{$et->FName}} </h3>
        </div>
    </div>
</div>
@endsection
