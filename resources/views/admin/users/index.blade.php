@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Administration</div>

                <div class="card-body">
                    <a href="{{route ('admin.users.create')}}"> <button type="button"
                            class="btn btn-success float-right">ajouter</button></a>


                    <table class="table table-striped">
                        <thead class="bg-info" style="color: white;">
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Email</th>
                                <th scope="col">Roles</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)

                            <tr>
                                <th scope="row"> {{$user->id}}</th>
                                <td> {{$user->name}}</td>
                                <td> {{$user->email}}</td>
                                <td> {{ implode(', ', $user->roles()->get()->pluck('name')->toArray() )}}</td>
                                <td>
                                    <a href="{{route ('admin.users.edit',$user->id)}}"> <button type="button"
                                            class="btn btn-warning float-left"
                                            style="color: white;">modifier</button></a>
                                    <form action="{{route ('admin.users.destroy',$user->id)}}" method="POST"
                                        class="float-left">
                                        @csrf
                                        {{method_field('DELETE')}}
                                        <button type="submit" class="btn btn-danger ">supprimer</button>
                                    </form>
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