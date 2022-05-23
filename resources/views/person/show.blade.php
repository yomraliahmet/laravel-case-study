@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Person ID: ') . ($person->id ?? "")   }}</div>

                <div class="card-body">

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="{{ route("persons.index") }}">{{ __('Persons ') }}</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Show</li>
                        </ol>
                    </nav>

                    @include('flash-message')

                    <table class="table table-bordered">
                        <tbody>
                                <tr>
                                    <th scope="row">ID</th>
                                    <td>{{ $person->id }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Name</th>
                                    <td>{{ $person->name }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Birthday</th>
                                    <td>{{ $person->birthday }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Gender</th>
                                    <td>{{ ucfirst($person->gender) }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Post Code</th>
                                    <td>{{ $person->address->post_code ?? "" }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Country</th>
                                    <td>{{ $person->address->country_name ?? "" }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">City</th>
                                    <td>{{ $person->address->city_name ?? "" }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Address</th>
                                    <td>{{ $person->address->address ?? "" }}</td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
