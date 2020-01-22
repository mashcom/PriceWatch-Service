@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <h2 class="text-center">Clients</h2>
                <div class="card">
                    <div class="card-header">
                        Organisations
                        <a href="{{url('client/create')}}" class="btn btn-primary font-weight-bold float-right">New Client</a>
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
                                <td class="font-weight-bold">Users</td>
                                <td class="font-weight-bold">UID</td>
                                <td class="font-weight-bold">Created</td>
                                <td></td>
                            </tr>
                            </thead>
                            @foreach($organisations as $org)
                                <tr>

                                    <td>{{$org->name}}</td>
                                    <td><label class="badge badge-<?php if($org->status=='active'){echo "success";}else{echo "danger";}; ?>">{{$org->status}}</label></td>
                                    <td><?php echo \App\User::whereOrganisationId($org->id)->count(); ?></td>
                                    <td>{{$org->id}}</td>
                                    <td>{{$org->created_at}}</td>

                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
