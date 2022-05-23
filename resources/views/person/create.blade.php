@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Person Create ') }}</div>

                <div class="card-body">

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="{{ route("persons.index") }}">{{ __('Persons ') }}</a></li>
                          <li class="breadcrumb-item active" aria-current="page">New Person</li>
                        </ol>
                    </nav>

                    @include('flash-message')

                    <form method="POST" action="{{ route("persons.store") }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-2 col-form-label text-md-start fw-bold">{{ __('Name') }}</label>
                            <div class="col-md-4">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="birthday" class="col-md-2 col-form-label text-md-start fw-bold">{{ __('Birthday') }}</label>
                            <div class="col-md-4">
                                <input id="birthday" type="date" class="form-control @error('birthday') is-invalid @enderror" name="birthday" value="{{ old('birthday') }}" required autocomplete="birthday">
                                @error('birthday')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="gender" class="col-md-2 col-form-label text-md-start fw-bold">{{ __('Gender') }}</label>
                            <div class="col-md-4">
                                <select id="gender" name="gender"  class="form-select @error('gender') is-invalid @enderror">
                                    <option selected>Choose..</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>

                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="post_code" class="col-md-2 col-form-label text-md-start fw-bold">{{ __('Post Code') }}</label>
                            <div class="col-md-4">
                                <input id="post_code" type="text" class="form-control @error('post_code') is-invalid @enderror" name="post_code" value="{{ old('post_code') }}" required autocomplete="post_code">
                                @error('post_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="city_name" class="col-md-2 col-form-label text-md-start fw-bold">{{ __('City') }}</label>
                            <div class="col-md-4">
                                <input id="city_name" type="text" class="form-control @error('city_name') is-invalid @enderror" name="city_name" value="{{ old('city_name') }}" required autocomplete="city_name">
                                @error('city_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="country_name" class="col-md-2 col-form-label text-md-start fw-bold">{{ __('Country') }}</label>
                            <div class="col-md-4">
                                <input id="country_name" type="text" class="form-control @error('country_name') is-invalid @enderror" name="country_name" value="{{ old('country_name') }}" required autocomplete="country_name">
                                @error('country_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="address" class="col-md-2 col-form-label text-md-start fw-bold">{{ __('Address') }}</label>
                            <div class="col-md-4">
                                <textarea id="address" class="form-control @error('address') is-invalid @enderror" name="address">{{ old('address') }}</textarea>
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-2">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
