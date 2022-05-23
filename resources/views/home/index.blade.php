@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Home') }}</div>

                <div class="card-body">

                    <table class="table table-bordered mb-5">
                        <thead>
                            <tr class="table-success">
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Birthday</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Address</th>
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
