@extends('layouts.app')

@section('content')
<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="title m-b-md links">
            <a href=" {{ url('/abscence') }} ">Gerer les abscences</a>
            <a href=" {{ url('/payment') }}" >Payment</a>
        </div>
    </div>
</div>
@endsection
