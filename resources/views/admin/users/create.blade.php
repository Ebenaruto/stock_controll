@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                {{-- <div class="card-body">
                    <form action="{{route('admin.users.store')}}" method="post">
                {{ csrf_field() }}
                <h1>Enregistrer une actualite</h1> <br>


                <div class="form-row">
                    <input type="text" name="name">
                    <label>Nom</label>
                </div>

                <div class="form-row">
                    <input type="email" name="email">
                    <label>Email</label>
                </div>

                <div class="form-row">
                    <input type="password" name="password">
                    <label>Password</label>
                </div>



                <div class="form-check">
                    <input type="checkbox" name="roles">
                    <label>Role</label>
                </div>



                <button type="submit" class="btn btn-primary">Update</button>
                </form>

            </div>
        </div> --}}

        <div class="card-header"></div>
        <div class="card-body">
            <form action="{{route('admin.users.store')}}" method="post">
                {{ csrf_field() }}
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control " name="name" value="" required
                            autocomplete="name" autofocus>

                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control " name="email" value="" required
                            autocomplete="email">

                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control " name="password" required
                            autocomplete="new-password">

                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm
                        Password</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            required autocomplete="new-password">
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            Enregistrer
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
@endsection