@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    {{-- <form method="POST" action="{{ route('password.update') }}"> --}}
                    <form method="POST" action="/password/set/verifyCode" id="set_code_validation">
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
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="password" required>

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
                                <input id="password-confirm" type="password" class="form-control" name="confirm_password" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mobile_phone" class="col-md-4 col-form-label text-md-right">{{ __('Mobile Phone') }}</label>

                            <div class="col-md-6">
                                <input id="phone_mobile" type="tel" class="form-control{{ $errors->has('phone_mobile') ? ' is-invalid' : '' }}" name="phone_mobile" value="{{ $phone_mobile ?? old('phone_mobile') }}" pattern="^[1]?\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$" id="phone_mobile" required autofocus>

                                @if ($errors->has('phone_mobile'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone_mobile') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        {{-- <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div> --}}
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="button" id="SendCodeSet" class="btn btn-primary">
                                    Set Password
                                    {{-- {{ __('Reset Password') }} --}}
                                </button>
                            </div>
                        </div>
                        <div id="verification_form" class="modal">
                            <div class="modal-background"></div>
                            <div class="modal-card">
                                <header class="modal-card-head">
                                    <p class="modal-card-title">User Verification</p>
                                    <button class="delete" onclick="hideVerificationForm()" aria-label="close"></button>
                                </header>
                                <section class="modal-card-body">
                                    @csrf
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
                                    </div>
                                </section>
                                <footer class="modal-card-foot">
                                    <button class="button is-warning" type="submit" id="VerifyCode">Submit</button>
                                    <button class="button" onclick="hideVerificationForm()">Cancel</button>
                                </footer>
                            </div>
                        </div>          

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('set-password')


@endsection
