@extends('layouts.admin-master')

@section('list-clients')
<ul>
        <h2 class="subtitle is-3">Class A</h2>
        <div class="columns is-multiline">
            @foreach ($clientsA as $cA)
                <div class="column is-one-quarter">
                    Name: {{ $cA->name  }} <br>
                    Email: {{ $cA->email }} <br>
                    <a href="/{{ $cA->id }}/portfolio">Portfolio</a>
                    <hr>
                </div>
            @endforeach
        </div>

        <hr>
        
        <h2 class="subtitle is-3">Class B</h2>
        <div class="columns is-multiline">
            @foreach ($clientsB as $cB)
            <div class="column is-one-quarter">
                Name: {{ $cB->name  }} <br>
                Email: {{ $cB->email }} <br>
                <a href="/{{ $cB->id }}/portfolio">Portfolio</a>
                <hr>
            </div>
        @endforeach
        </div>
    </ul>
@endsection


@section('new-client-ayy')

<form action="/admin" method="post">
    @csrf
    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label">Full Name</label>
        </div>
        <div class="field-body">
            <div class="field">
                <p class="control is-expanded has-icons-left">
                    <input class="input " type="text" name="name" placeholder="Francisco Wagner">
                    <span class="icon is-small is-left">
                        <i class="fas fa-user"></i>
                    </span>
                </p>
            </div>
        </div>
    </div>

    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label">Contact</label>
        </div>
            <div class="field-body">
                <div class="field is-expanded">
                    <div class="field has-addons">
                        <p class="control">
                        <a class="button is-static">
                            +1
                        </a>
                        </p>
                        <p class="control is-expanded">
                        <input class="input" name="telephone" type="tel" placeholder="778-555-5555">
                        </p>
                    </div>
            </div>

            <div class="field">
                <p class="control is-expanded has-icons-left has-icons-right">
                    <input class="input " name="email" type="email" placeholder="ameriichinose@yabai.jp">
                    <span class="icon is-small is-left">
                        <i class="fas fa-envelope"></i>
                    </span>
                    <span class="icon is-small is-right">
                        <i class="fas fa-check"></i>
                    </span>
                </p>
                <i><p class="help">confirmation email will be sent to the client's email</p></i>
            </div>
        </div>
    </div>

    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label">Address </label>
        </div>
        <div class="field-body">
            <div class="field">
                <div class="control">
                    <input class="input" name="address" type="text" placeholder="West 57th Street and, most likely, Henry Hudson Parkway, Manhattan, New New York, United States">
                </div>
            </div>
        </div>
    </div>

    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label">Investor Class</label>
        </div>
        <div class="field-body">
            <div class="field is-narrow">
                <div class="control">
                    <div class="select is-fullwidth">
                    <select name="class">
                        <option>A</option>
                        <option>B</option>
                    </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="field is-horizontal">
        <div class="field-label"><label class="label" style="padding-top:7px">Annual Income </label></div>
            <div class="field-body">
                <div class="field is-expanded">
                    <div class="field has-addons">
                        <p class="control">
                        <a class="button is-static">
                            $
                        </a>
                        </p>
                        <p class="control is-expanded">
                        <input class="input" name="salary" type="tel" placeholder="531999">
                        </p>
                    </div>
                <p class="help"></p>
            </div>
        </div>
    </div>

    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label">SIN</label>
        </div>
        <div class="field-body">
            <div class="field">
            <div class="control">
                <input class="input" name="SIN" type="text" placeholder="759 678 873">
            </div>
            <p class="help is-danger">
                Don't mess this up
            </p>
            </div>
        </div>
    </div>

    <div class="field is-horizontal">
        <div class="field-label">
            <!-- Left empty for spacing -->
        </div>
        <div class="field-body">
            {{-- group might make you think it's more than one item but we need it to align btn right
                 even though the 'group' consists of merely 1 --}}
            <div class="field is-grouped is-grouped-right">
                <div class="control">
                    <button class="button is-warning">
                        <span class="icon is-medium">
                            <i class="fas fa-user-plus"></i>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
    
@endsection









{{-- old one, keeping for legacy purposes (copy some code over in the future), but not using it --}}
@section('new-client')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="/register2">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{-- {{ __('Register') }} --}}
                                Register
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
