@extends('layouts.layout')

@section('title')
    Edit Akun
@endsection

@section('main-content')

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Edit Akun</h1>
            </div>

            <div class="row justify-content-center">
            <form class="user" method="post" action="{{url('registrationProcess')}}">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control form-control-user" id="exampleFirstName" name="firstName"
                               placeholder="First Name">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user" id="exampleLastName" name="lastName"
                               placeholder="Last Name">
                    </div>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control form-control-user" id="exampleInputEmail" name="email"
                           placeholder="Email Address">
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="password" class="form-control form-control-user" name="password"
                               id="exampleInputPassword" placeholder="Password">
                    </div>
                    <div class="col-sm-6">
                        <input type="password" class="form-control form-control-user" name="repeatPassword"
                               id="exampleRepeatPassword" placeholder="Repeat Password">
                    </div>
                </div>
                <br>
                <button href="login.blade.php" class="btn btn-primary btn-user btn-block ">
                    Register Account
                </button>
                <br>
                <hr>
            </form>
            </div>
        </div>
    </div>

@endsection
