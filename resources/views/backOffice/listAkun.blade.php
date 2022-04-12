@extends('layouts.layout')

@section('title')
    Akun
@endsection

@section('main-content')

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Akun</h1>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Email</th>
                            <th>Nama</th>
                            <th>Active Date</th>
                            <th>Tools</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>mark@mail.com</td>
                            <td>Mark Doe</td>
                            <td>04 March 2021</td>
                            <td>
                                <a href="" class="btn btn-danger">
                                    <i class="fas fa-fw fa-trash"></i>
                                </a> ||
                                <a href="{{url('/editAkun')}}" class="btn btn-success">
                                    <i class="fas fa-fw fa-pen"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Tim@mail.com</td>
                            <td>Tim Doe</td>
                            <td>04 June 2021</td>
                            <td>
                                <a href="" class="btn btn-danger">
                                    <i class="fas fa-fw fa-trash"></i>
                                </a> ||
                                <a href="" class="btn btn-success">
                                    <i class="fas fa-fw fa-pen"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Sid@mail.com</td>
                            <td>Sid Doe</td>
                            <td>01 April 2021</td>
                            <td>
                                <a href="" class="btn btn-danger">
                                    <i class="fas fa-fw fa-trash"></i>
                                </a> ||
                                <a href="" class="btn btn-success">
                                    <i class="fas fa-fw fa-pen"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Jane@mail.com</td>
                            <td>Jane Doe</td>
                            <td>10 October 2021</td>
                            <td>
                                <a href="" class="btn btn-danger">
                                    <i class="fas fa-fw fa-trash"></i>
                                </a> ||
                                <a href="" class="btn btn-success">
                                    <i class="fas fa-fw fa-pen"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Matt@mail.com</td>
                            <td>Matt Doe</td>
                            <td>04 March 2021</td>
                            <td>
                                <a href="" class="btn btn-danger">
                                    <i class="fas fa-fw fa-trash"></i>
                                </a> ||
                                <a href="" class="btn btn-success">
                                    <i class="fas fa-fw fa-pen"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
