@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <h2 class="text-center">Inspections</h2>
                <div class="card">

                    <div class="card-header">
                        Inspections by {{\Illuminate\Support\Facades\Auth::user()->organisation->name}}
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if($inspections->isEmpty())
                            <div class="alert alert-info font-weight-bold">No inspections found!</div>

                        @else
                            <table class="table table-striped">
                                <thead>
                                <tr>

                                    <td class="font-weight-bold">Inspection Date</td>
                                    <td class="font-weight-bold">Inspector</td>
                                    <td class="font-weight-bold">Organisation</td>
                                    <td class="font-weight-bold">Email</td>
                                    <td class="font-weight-bold">Phone</td>
                                    <td></td>
                                </tr>
                                </thead>
                                @foreach($inspections as $inspection)

                                    <?php
                                    $data = collect(json_decode($inspection->content));
                                    $email = $data["email"];
                                    $telephone = $data["telephone"];
                                    $organisation = $data["name"];
                                    ?>
                                    <tr>

                                        <td>{{$inspection->inspection_date}}</td>
                                        <td>{{$inspection->inspector->name}}</td>
                                        <td>{{$organisation}}</td>
                                        <td>{{$email}}</td>
                                        <td>{{$telephone}}</td>
                                        <td>
                                            <a href="{{url('inspection',[$inspection->id])}}"
                                               class="btn btn-sm btn-outline-primary">View</a></td>
                                    </tr>
                                @endforeach
                            </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
