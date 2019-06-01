@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>

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

                        <div class="form-group row">
                            <label for="mobile_phone" class="col-md-4 col-form-label text-md-right">{{ __('Mobile Phone') }}</label>

                            <div class="col-md-6">
                                <input id="phone_mobile" type="tel" class="form-control{{ $errors->has('phone_mobile') ? ' is-invalid' : '' }}" name="phone_mobile" value="{{ $phone_mobile ?? old('phone_mobile') }}" required autofocus>

                                @if ($errors->has('phone_mobile'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone_mobile') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="container shrinker">
        <section class="section">
            <div class="container">
                <div class="has-text-centered">
                    <h1 class="title is-3"><span class="decor">Set</span> <span class="le-decor">Password</span></h1>
                </div>            
            </div><br>
            <div class="has-text-centered">
                <p>When changing your password, a verification code will be sent at your mobile phone.</p>
            </div><br>
            {{-- <form action="/{{ $user[0]->user_id }}/edit_profile/verifyCode" method="POST" id="code_validation"> --}}
            <form action="/verifyCode" method="POST" id="code_validation">
                @csrf 

                <div class="field is-horizontal">
                    <div class="field-label">
                        <!-- Left empty for spacing -->
                    </div>
                    <div class="field-body">
                        <div class="field is-grouped is-grouped-right">
                            <div class="control">
                                <button class="button is-warning" type="button" id="SendCode">Save</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="verification_form">
                    <div id="verification_form_container"><br>
                        <div id="code_verification"><br>
                            <div class="has-text-centered">
                                <h1 class="title"><span class="decor">User Verification</span></h1>
                            </div><br>
                            <p class="is-medium">For your password to be set, please enter the verification code that was sent to your contact number.</p><br>
                            <div class="form-popup" id="myForm">
                                <div class="field is-horizontal">
                                    <div class="field-label is-normal">
                                        <label class="label">Verification Code</label>
                                    </div>
                                    <div class="field-body">
                                        <div class="field is-narrow">
                                            <div class="control">
                                                <div class="field">
                                                    <p class="control has-icons-left">
                                                        <input class="input" type="number" name="code" placeholder="Code" maxlength="4" required>
                                                        <span class="icon is-small is-left">
                                                        <i class="fas fa-lock"></i>
                                                        </span>
                                                    </p>
                                                </div>
                                                <i><p class="help">4 Digits Verification Code</p></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="field is-horizontal">
                                    <div class="field-label"></div>
                                    <div class="field-body">
                                        <div class="field is-grouped is-grouped-right">
                                            <div class="control">
                                                <button class="button is-warning" type="submit" id="VerifyCode">Submit</button>
                                                <button class="button is-light" type="button" onclick="hideVerificationForm()">Back</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </form>
        </section>
    </div>



@endsection

@section('set-password')


@endsection
