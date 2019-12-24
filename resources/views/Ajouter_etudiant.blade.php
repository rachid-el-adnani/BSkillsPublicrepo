@extends('layouts.app')

@section('content')
<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="title m-b-md ">
            Ajouter l'étudiant :
            <br>
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li> {{$error}} </li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(\Session::has('success'))
                <div class="alert alert-success">
                    <p> {{\Session::get('success')}} </p>
                </div>
            @endif
        </div>
    </div>
    <br>
    <div>
        <div class="row justify-content-center">
            <form action=" {{url('etudiant')}} " method="post" >
                <div class="form-group">
                    <input type="text" name="first_name" id="" class="form-control" placeholder="Entrer le Prenom :">
                </div>
                <div class="form-group">
                    <input type="text" name="last_name" id="" class="form-control" placeholder="Entrer le Nom :">
                </div>
                <div class="form-group">
                    <input type="text" name="age" id="" class="form-control" placeholder="Entrer l'age :">
                </div>
                <div class="form-group">
                    <input type="text" name="nomParent" id="" class="form-control" placeholder="Entrer le nom du parent :">
                </div>
                <div class="form-group">
                    <input type="text" name="numParnet" id="" class="form-control" placeholder="Entrer le numero du parent :">
                </div>
                <div class="form-group">
                    <input type="submit" value="Ajouter!" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
