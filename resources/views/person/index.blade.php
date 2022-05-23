@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ __('Person') }}

                    <a class="btn btn-sm btn-success p-1 float-end" href="{{ route("persons.create") }}">New Person</a>
                </div>

                <div class="card-body">

                    @include('flash-message')

                    <table class="table table-bordered mb-5">
                        <thead>
                            <tr class="table-success">
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Birthday</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Address</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($persons->count() < 1)
                            <tr>
                                <td colspan="5">
                                    <div class="alert alert-warning p-2" role="alert">
                                        Record not exists!
                                    </div>
                                </td>
                            </tr>
                            @else
                                @foreach($persons as $person)
                                <tr>
                                    <th scope="row">{{ $person->id }}</th>
                                    <td>{{ $person->name }}</td>
                                    <td>{{ $person->birthday }}</td>
                                    <td>{{ ucfirst($person->gender) }}</td>
                                    <td>{{ $person->address->address ?? "" }}</td>
                                    <td class="d-flex">
                                        <a class="btn btn-sm btn-primary m-1" href="{{ route("persons.show", $person->id) }}">Show</a>
                                        <a class="btn btn-sm btn-success m-1" href="{{ route("persons.edit", $person->id) }}">Edit</a>

                                        <form class="m-1" action="{{ route("persons.destroy", $person->id) }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE" />
                                            <button class="btn btn-sm btn-danger">Delete</button>
                                        </form>

                                    </td>
                                </tr>
                                @endforeach
                            @endif

                        </tbody>
                    </table>
                    {{-- Pagination --}}
                    <div class="d-flex justify-content-center">
                        {!! $persons->links() !!}
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
