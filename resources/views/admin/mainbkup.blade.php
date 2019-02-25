@extends('layouts.admin')

@section('navbar')
<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="/">
        <img src="https://www.cypresshillspartners.com/uploads/5/9/5/6/59561431/cypresshills-black-yellow.png" width="200" height="28">
        </a>

        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
        <a class="navbar-item">
            Who We Are
        </a>

        <a class="navbar-item">
            Facts
        </a>

        <div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link">
            More
            </a>

            <div class="navbar-dropdown">
            <a class="navbar-item">
                People
            </a>
            <hr class="navbar-divider">
            <a class="navbar-item">
                Originate
            </a>
            <a class="navbar-item">
                Speciality Lending
            </a>
            </div>
        </div>
        </div>

        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    <a class="button is-warning">
                        <strong>Sign up</strong>
                    </a>
                    <a class="button is-light">
                        Log in
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
@endsection

@section('signup-email')
<form action="{{ route('register') }}" method="post">
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

            {{-- <div class="field">
                <p class="control is-expanded has-icons-left">
                    <input class="input " type="text" name="lname" placeholder="Brando">
                    <span class="icon is-small is-left">
                        <i class="fas fa-user"></i>
                    </span>
                </p>
            </div> --}}
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
            {{-- <p class="help ">
            One nice line
            </p> --}}
            </div>
        </div>
    </div>

    <div class="field is-horizontal">
    <div class="field-label is-normal">
        <label class="label">Personality Type</label>
    </div>
    <div class="field-body">
        <div class="field is-narrow">
            <div class="control">
                <div class="select is-fullwidth">
                <select>
                    <option>Normal Person</option>
                    <option>Strong Person</option>
                    <option>Super Person</option>
                </select>
                </div>
            </div>
        </div>
    </div>
    </div>
        
    <div class="field is-horizontal">
    <div class="field-label">
        <label class="label">Hair Type?</label>
    </div>
    <div class="field-body">
        <div class="field is-narrow">
        <div class="control">
            <label class="radio">
            <input type="radio" name="member"> {{-- remember to put name attribute here --}}
            Curly
            </label>
            <label class="radio">
            <input type="radio" name="member">
            Bald
            </label>
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
                        <input class="input is-warning" name="salary" type="tel" placeholder="531999">
                        </p>
                    </div>
                <p class="help"></p>
            </div>
        </div>
    </div>

    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label">SSN</label>
        </div>
        <div class="field-body">
            <div class="field">
            <div class="control">
                <input class="input is-warning" name="SIN" type="text" placeholder="759 678 873">
            </div>
            <p class="help is-danger">
                Don't mess this up
            </p>
            </div>
        </div>
    </div>

    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label">Bank Info</label>
        </div>
        <div class="field-body">
            <div class="field">
            <div class="control">
                <input class="input is-warning" name="bankinfo" type="text" placeholder="Super Bank Info">
            </div>
            {{-- <p class="help is-danger">
                This field is required
            </p> --}}
            </div>
        </div>
    </div>
    
    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label">Why you?</label>
        </div>
        <div class="field-body">
            <div class="field">
                <div class="control">
                    <textarea class="textarea is-large" name="sellusprompt" placeholder="Sell yourself to us. Why should we take you on?"></textarea>
                </div>
            </div>
        </div>
    </div>

    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label for="password" class="label">Password</label>
        </div>

        <div class="field-body">
            <div class="field">
            <div class="control">
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} input is-warning" name="password" required>
            </div>
            {{-- <p class="help is-danger">
                This field is required
            </p> --}}
            </div>
        </div>
            

            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
    </div>
        
    <div class="field is-horizontal">
    <div class="field-label">
        <!-- Left empty for spacing -->
    </div>
    <div class="field-body">
        <div class="field">
        <div class="control">
            <button class="button is-large is-warning is-pulled-right" type="submit">
            Make User
            </button>
        </div>
        </div>
    </div>
    </div>
</form>
@endsection