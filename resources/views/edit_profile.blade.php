<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
    <link rel="shortcut icon" href="/images/favicon.ico">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{ asset('/js/codeValidation.js')}}" defer></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Edit Profile</title>

</head>

<body>
    @include('layouts.partials.header')

    <main class="stick-bot">

        <div class="container">
            <div class="has-text-centered">
                <h1 class="title"><span class="decor">Profile of</span> <span class="le-decor">{{ $user[0]->subscriber_name}}</span></h1>
            </div>            
        </div>

        <div class="container shrinker">

            <section class="section">
                <form action="/{{ $user[0]->user_id }}/edit_profile" method="post" name="editProfile">
                    @method('PATCH')
                    @csrf

                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label class="label">Full Name</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <div class="field">
                                    <p class="control is-expanded has-icons-left">
                                        <input class="input" type="text" name="subscriber_name" placeholder="Full Name" value="{{$user[0]->subscriber_name}}" required>
                                        <span class="icon is-small is-left">
                                            <i class="fas fa-user"></i>
                                        </span>
                                        <i><p class="help">Change will be made permanent after Cypress Hills verification.</p></i>
                                    </p>
                                </div>
                            </div>

                            @if(auth()->user()->isAdmin() && $name[0]->name != $user[0]->subscriber_name)

                            <div class="field-label is-normal">
                                <label class="label">Name Change</label>
                            </div>
                            <div class="field">
                                <div class="field">
                                    <p class="control is-expanded has-icons-left">
                                        <input class="input" type="text" name="new_subscriber_name" placeholder="Full Name" value="{{$name[0]->name}}" required>
                                        <span class="icon is-small is-left">
                                            <i class="fas fa-user"></i>
                                        </span>
                                    </p>
                                    <i><p class="help">This name will be updated on all pages of the website.</p></i>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                    
                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label class="label">Email</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <p class="control is-expanded has-icons-left has-icons-right">
                                    <input class="input " name="email" type="email" placeholder="example@email.com" value="{{$user[0]->email}}" required>
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-envelope"></i>
                                    </span>
                                    <span class="icon is-small is-right">
                                        <i class="fas fa-check"></i>
                                    </span>
                                </p>
                                <i><p class="help">This email is used for log-in. Confirmation email will be sent to the this email.</p></i>
                            </div>
                        </div>
                    </div>

                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label class="label">Primary Contact</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <div class="field has-addons">
                                    <p class="control">
                                        <a class="button is-static">
                                            +1
                                        </a>
                                    </p>
                                    <p class="control is-expanded">
                                        <input class="input" id="phone" name="phone" type="tel" value="{{$user[0]->phone}}" pattern="^[1]?\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$" required>
                                    </p>
                                </div>
                                <i><p class="help">Primary Phone Contact</p></i>
                            </div>
                            <div class="field-label is-normal">
                                <label class="label">Mobile Contact</label>
                            </div>
                            <div class="field">
                                <div class="field has-addons">
                                    <p class="control">
                                        <a class="button is-static">
                                            +1
                                        </a>
                                    </p>
                                    <p class="control is-expanded">
                                        <input class="input" id="phone_mobile" name="phone_mobile" type="tel" value="{{$user[0]->phone_mobile}}" pattern="^[1]?\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$" required>
                                    </p>
                                </div>
                                <i><p class="help">The phone number you provide will be used for authentication</p></i>
                            </div>
                        </div>
                    </div>
                    
                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label class="label">Address</label>
                        </div>
                        <div class="field-body">
                            <div class="field is-expanded">
                                <div class="field">
                                    <p class="control is-expanded">
                                        <input class="input" name="street" placeholder="Street Name" value="{{$user[0]->street}}" required>
                                    </p>
                                </div>
                                <i><p class="help">Street Name</p></i>
                            </div>
                        </div>
                    </div>
                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label class="label">&nbsp;</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <p class="control is-expanded ">
                                    <input class="input" name="city" placeholder="City" value="{{$user[0]->city}}" required>
                                </p>
                                <i><p class="help">City</p></i>
                            </div>
                            <div class="field is-narrow">
                                <div class="control">
                                    <div class="select is-fullwidth">
                                        <select id="province" name="province">
                                            <option @if($province === "British Columbia") selected @endif>British Columbia</option>
                                            <option @if($province === "Alberta") selected @endif>Alberta</option>
                                            <option @if($province === "Manitoba") selected @endif>Manitoba</option>
                                            <option @if($province === "New Brunswick") selected @endif>New Brunswick</option>
                                            <option @if($province === "Ontario") selected @endif>Ontario</option>
                                            <option @if($province === "Newfoundland and Labrador") selected @endif>Newfoundland and Labrador</option>
                                            <option @if($province === "Northwest Territories") selected @endif>Northwest Territories</option>
                                            <option @if($province === "Nova Scotia") selected @endif>Nova Scotia</option>
                                            <option @if($province === "Nunavut") selected @endif>Nunavut</option>
                                            <option @if($province === "Prince Edward Island") selected @endif>Prince Edward Island</option>
                                            <option @if($province === "Quebec") selected @endif>Quebec</option>
                                            <option @if($province === "Saskatchewan") selected @endif>Saskatchewan</option>
                                            <option @if($province === "Yukon") selected @endif>Yukon</option>
                                        </select>
                                    </div>
                                    <i><p class="help">Province</p></i>
                                </div>
                            </div>
                            <div class="field">
                                <p class="control">
                                    <input class="input" name="postal_code" placeholder="Postal Code" value="{{$user[0]->postal_code}}" required>
                                </p>
                                <i><p class="help">Postal Code</p></i>
                            </div>
                        </div>
                    </div>

                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label class="label">&nbsp;</label>
                        </div>
                        <div class="field-body">
                            <div class="field is-narrow">
                                <div class="control is-expanded">
                                    <div class="select is-fullwidth">
                                        <p class="control has-icons-left">
                                            <span class="select">
                                                <select name="country" id="country">
                                                    <option @if($country === "Canada")selected @endif>Canada</option>
                                                    <option @if($country === "United States")selected @endif>United States</option>
                                                </select>
                                            </span>
                                            <span class="icon is-small is-left">
                                                    <i class="fas fa-globe"></i>
                                            </span>
                                        </p>
                                    </div>
                                    <i><p class="help">Country</p></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="field is-horizontal">
                        <div class="field-label">
                            <!-- Left empty for spacing -->
                        </div>
                        <div class="field-body">
                            <div class="field is-grouped is-grouped-right">
                                <div class="control">
                                    <button class="button is-warning" type="submit">
                                        @if (auth()->user()->isAdmin() && $user[0]->profile_changed)
                                            Save Changes
                                        @else
                                            Save
                                        @endif
                                    </button>
                                    <button class="button is-light" type="reset">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>

            </section>
        </div>
        <hr>

        @if(auth()->user()->isAdmin())

        <br>
        <div class="has-text-centered">
            <h1 class="title"><span class="decor">Delete</span> <span class="le-decor">{{ $user[0]->subscriber_name }} Account</span></h1>
        </div><br>

        <div class="columns is-mobile is-centered">
            <div class="column is-narrow">
                <div class="control">
                    <button type="button" onclick="deleteUserPopup()" class="button is-danger">Delete Account</button>
                </div><br><br><br>
            </div>
        </div>

        <form action="/{{ $user[0]->user_id }}/edit_profile/deleteAccount" method="POST">
            @csrf
            <div id="deletePopup" class="modal">
                <div class="modal-background"></div>
                <div class="modal-card">
                    <header class="modal-card-head has-text-centered">
                        <p class="modal-card-title">Delete {{ $user[0]->subscriber_name }} Account</p>
                        <button class="delete" type="button" onclick="closeModal()" aria-label="close"></button>
                    </header>
                    <section class="modal-card-body">
                        <p>You are about to delete {{ $user[0]->subscriber_name }} account.</p>
                        <p>Deleting a client's account will disabled them from being able to log in.</p>
                        <p>Their information will still be kept in the database.</p>
                    </section>
                    <footer class="modal-card-foot is-centered">
                        <button type="submit" class="button is-danger">Delete Account</button>
                        <button class="button" type="button" onclick="closeModal()">Cancel</button>
                    </footer>
                </div>
            </div>
        </form>

        @endif

        <!-- Change password -->
        @if(!auth()->user()->isAdmin())
            <div class="container shrinker">
                <section class="section">
                    <div class="container">
                        <div class="has-text-centered">
                            <h1 class="title is-3"><span class="decor">Change</span> <span class="le-decor">Password</span></h1>
                        </div>            
                    </div><br>
                    <div class="has-text-centered">
                        <p>When changing your password, a verification code will be sent at your mobile phone.</p>
                    </div><br>
                    
                    <div class="columns is-mobile is-centered">
                        <div class="column is-narrow is-6">

                            <form action="/{{ $user[0]->user_id }}/edit_profile/verifyCode" method="POST" id="code_validation">
                                @csrf
                                {{-- <div class="field is-horizontal">
                                    <div class="field-label is-normal">
                                        <label class="label">Current Password</label>
                                    </div>
                                    <div class="field-body">
                                        <div class="field is-narrow">
                                            <div class="control is-expanded">
                                                <div class="field">
                                                    <p class="control has-icons-left">
                                                        <input class="input" type="password" placeholder="Current Password" id="current_password" min="6" id="password" required>
                                                        <span class="icon is-small is-left">
                                                        <i class="fas fa-lock"></i>
                                                        </span>
                                                    </p>
                                                </div>
                                                <i><p class="help">Current password used to log in</p></i>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                        
                                <div class="field is-horizontal">
                                    <div class="field-label is-normal">
                                        <label class="label">New Password</label>
                                    </div>
                                    <div class="field-body">
                                        <div class="field is-narrow">
                                            <div class="control is-expanded">
                                                <div class="field">
                                                    <p class="control has-icons-left">
                                                        <input class="input" type="password" placeholder="Password"name="password" id="password" required>
                                                        <span class="icon is-small is-left">
                                                        <i class="fas fa-lock"></i>
                                                        </span>
                                                    </p>
                                                </div>
                                                <i><p class="help">New Password</p></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="field is-horizontal">
                                    <div class="field-label is-normal">
                                        <label class="label">Confirm Password</label>
                                    </div>
                                    <div class="field-body">
                                        <div class="field is-narrow">
                                            <div class="control is-expanded">
                                                <div class="field">
                                                    <p class="control has-icons-left">
                                                        <input class="input" type="password" placeholder="Password"name="confirm_password" id="confirm_password" required>
                                                        <span class="icon is-small is-left">
                                                        <i class="fas fa-lock"></i>
                                                        </span>
                                                    </p>
                                                </div>
                                                <i><p class="help">Re-enter the new password</p></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" id="code_id" name="code_id" value="{{$user[0]->user_id}}">

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


                                <div id="verification_form" class="modal">
                                    <div class="modal-background"></div>
                                    <div class="modal-card">
                                        <header class="modal-card-head">
                                            <p class="modal-card-title">User Verification</p>
                                            <button class="delete" onclick="hideVerificationForm()" aria-label="close" type="button"></button>
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
                                                                        <input class="input" type="number" name="code" placeholder="Code" maxlength="4"required>
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
                                            <button class="button" type="button" onclick="hideVerificationForm()">Cancel</button>
                                        </footer>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </section>

            </div>
        @endif
    </main>

    @include('layouts.partials.footer')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @include('sweet::alert')
</body>
</html>
