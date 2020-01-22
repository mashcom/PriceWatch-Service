@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <h2 class="text-center">OAuth Clients</h2>
                <div class="card">
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <table class="table table-striped table-sm">
                            <thead>
                            <tr>
                                <td class="font-weight-bold">Name</td>
                                <td class="font-weight-bold">Secret</td>
                                <td class="font-weight-bold">Personal Access Client</td>
                                <td class="font-weight-bold">Password Client</td>
                                <td class="font-weight-bold">Revoked</td>
                                <td class="font-weight-bold">Created</td>
                                <td></td>
                            </tr>
                            </thead>
                            @foreach($oauth_clients as $oauth)
                                <tr>
                                    <td>{{$oauth->name}}</td>
                                    <td>{{$oauth->secret}}</td>
                                    <td>{{$oauth->personal_access_client}}</td>
                                    <td>{{$oauth->password_client}}</td>
                                    <td>{{$oauth->revoked}}</td>
                                    <td>{{$oauth->created_at}}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
