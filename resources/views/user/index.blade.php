@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        Organisations Users
                        <a href="{{url('user/create')}}" class="btn btn-primary font-weight-bold float-right">Add User</a>
                    </div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                            <tr>

                                <td class="font-weight-bold">Name</td>
                                <td class="font-weight-bold">Status</td>
                                <td class="font-weight-bold">Email</td>
                                <td class="font-weight-bold">Role</td>
                                <td class="font-weight-bold">Created</td>
                                <td class="font-weight-bold">Last Updated</td>
                                <td></td>
                            </tr>
                            </thead>
                            @foreach($users as $user)
                                <tr>

                                    <td>{{$user->name}}</td>
                                    <td>{{$user->status}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->role}}</td>
                                    <td>{{$user->created_at}}</td>
                                    <td>{{$user->updated_at}}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
