@extends('layouts.layout')

@section('title')
    Promo
@endsection

@section('main-content')

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Promo</h1>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Provider</th>
                            <th>Expired At</th>
                            <th>Tools</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

@endsection
