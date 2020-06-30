@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Administration</div>

                <div class="card-body">


                    <table class="table table-striped">
                        <thead class="bg-info" style="color: white;">
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Email</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)

                            <tr>
                                <th scope="row"> {{$user->id}}</th>
                                <td> {{$user->name}}</td>
                                <td> {{$user->email}}</td>
                                <td>
                                    <a href="{{route ('admin.users.create',$user->id)}}"> <button type="button"
                                            class="btn btn-success">ajouter</button></a>
                                    <a href="{{route ('admin.users.destroy',$user->id)}}"><button type="button"
                                            class="btn btn-danger">supprimer</button></a>
                                </td>
                            </tr>

                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection