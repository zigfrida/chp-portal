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

    <script type="text/javascript" src="{{ URL::asset('js/dropState.js') }}" defer></script>

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
                                            @if ($country === "Canada")
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
                                            @endif

                                            @if ($country == "United States")
                                                <option @if($province === "Alabama") selected @endif>Alabama</option>
                                                <option @if($province === "Alaska") selected @endif>Alaska</option>
                                                <option @if($province === "Arizona") selected @endif>Arizona</option>
                                                <option @if($province === "Arkansas") selected @endif>Arkansas</option>
                                                <option @if($province === "California") selected @endif>California</option>
                                                <option @if($province === "Colorado") selected @endif>Colorado</option>
                                                <option @if($province === "Connecticut") selected @endif>Connecticut</option>
                                                <option @if($province === "Delaware") selected @endif>Delaware</option>
                                                <option @if($province === "District Of Columbia") selected @endif>District Of Columbia</option>
                                                <option @if($province === "Florida") selected @endif>Florida</option>
                                                <option @if($province === "Georgia") selected @endif>Georgia</option>
                                                <option @if($province === "Hawaii") selected @endif>Hawaii</option>
                                                <option @if($province === "Idaho") selected @endif>Idaho</option>
                                                <option @if($province === "Illinois") selected @endif>Illinois</option>
                                                <option @if($province === "Indiana") selected @endif>Indiana</option>
                                                <option @if($province === "Iowa") selected @endif>Iowa</option>
                                                <option @if($province === "Kansas") selected @endif>Kansas</option>
                                                <option @if($province === "Kentucky") selected @endif>Kentucky</option>
                                                <option @if($province === "Louisiana") selected @endif>Louisiana</option>
                                                <option @if($province === "Maine") selected @endif>Maine</option>
                                                <option @if($province === "Maryland") selected @endif>Maryland</option>
                                                <option @if($province === "Massachusetts") selected @endif>Massachusetts</option>
                                                <option @if($province === "Michigan") selected @endif>Michigan</option>
                                                <option @if($province === "Minnesota") selected @endif>Minnesota</option>
                                                <option @if($province === "Mississippi") selected @endif>Mississippi</option>
                                                <option @if($province === "Missouri") selected @endif>Missouri</option>
                                                <option @if($province === "Montana") selected @endif>Montana</option>
                                                <option @if($province === "Nebraska") selected @endif>Nebraska</option>
                                                <option @if($province === "Nevada") selected @endif>Nevada</option>
                                                <option @if($province === "New Hampshire") selected @endif>New Hampshire</option>
                                                <option @if($province === "New Jersey") selected @endif>New Jersey</option>
                                                <option @if($province === "New Mexico") selected @endif>New Mexico</option>
                                                <option @if($province === "New York") selected @endif>New York</option>
                                                <option @if($province === "North Carolina") selected @endif>North Carolina</option>
                                                <option @if($province === "North Dakota") selected @endif>North Dakota</option>
                                                <option @if($province === "Ohio") selected @endif>Ohio</option>
                                                <option @if($province === "Oklahoma") selected @endif>Oklahoma</option>
                                                <option @if($province === "Oregon") selected @endif>Oregon</option>
                                                <option @if($province === "Pennsylvania") selected @endif>Pennsylvania</option>
                                                <option @if($province === "Rhode Island") selected @endif>Rhode Island</option>
                                                <option @if($province === "South Carolina") selected @endif>South Carolina</option>
                                                <option @if($province === "South Dakota") selected @endif>South Dakota</option>
                                                <option @if($province === "Tennessee") selected @endif>Tennessee</option>
                                                <option @if($province === "Texas") selected @endif>Texas</option>
                                                <option @if($province === "Utah") selected @endif>Utah</option>
                                                <option @if($province === "Vermont") selected @endif>Vermont</option>
                                                <option @if($province === "Virginia") selected @endif>Virginia</option>
                                                <option @if($province === "Washington") selected @endif>Washington</option>
                                                <option @if($province === "West Virginia") selected @endif>West Virginia</option>
                                                <option @if($province === "Wisconsin") selected @endif>Wisconsin</option>
                                                <option @if($province === "Wyoming") selected @endif>Wyoming</option>

                                            @else
                                                <option>British Columbia</option>
                                                <option>Alberta</option>
                                                <option>Ontario</option>
                                                <option>Manitoba</option>
                                                <option>New Brunswick</option>
                                                <option>Ontario</option>
                                                <option>Newfoundland and Labrador</option>
                                                <option>Northwest Territories</option>
                                                <option>Nova Scotia</option>
                                                <option>Nunavut</option>
                                                <option>Prince Edward Island</option>
                                                <option>Quebec</option>
                                                <option>Saskatchewan</option>
                                                <option>Yukon</option>
                                            @endif
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
                                                <select name="country" id="country" onchange="window.setOptions()">
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
        {{-- checkboxes: not sure if everyone sb able to edit it --}}
        <section class="section">
            <form action="/{{ $user[0]->user_id }}/edit_profile_checkboxes" method="post">
                @method('PATCH')
                @csrf
                {{ dd($user[0]->clientType == "individual"); }}
                @if($user[0]->clientType == "individual")
                    <div class="field">
                        <div class="content" style="margin-bottom: 10px;" id="people_checkboxes" >
                            <br>
                            <div class="control">
                                <label class="checkbox">
                                    <input type="checkbox" name="ind_ck1" id="risk_ck1">
                                    An individual whose net income before taxes exceeded $200,000 in each of the two most recent calendar years or whose net income before taxes combined with that of a spouse exceeded $300,000 in each of the two most recent calendar years and who, in either case, reasonably expects to exceed that net income level in the current calendar year;
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox"  name="ind_ck2" id="risk_ck2">
                                    An individual, who, either alone or with a spouse, has net assets of at least $5,000,000
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox"  name="ind_ck3" id="risk_ck3">
                                    An individual who, either alone or with a spouse, beneficially owns financial assets having an aggregate realizable value that, before taxes but net of any related liabilities, exceeds $1,000,000
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox"  name="ind_ck4" >
                                    An individual who beneficially owns financial assets having an aggregate realizable value that, before taxes but net of any related liabilities, exceeds $5,000,000
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox"  name="ind_ck5" >
                                    An individual registered under the securities legislation of a jurisdiction of Canada, as a representative of a person registered under the securities legislation of a jurisdiction of Canada as an adviser or dealer
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox"  name="ind_ck6" >
                                    An individual formerly registered under the securities legislation of a jurisdiction of Canada, other than an individual formerly registered solely as a representative of a limited market dealer under one or both of the Securities Act (Ontario) or the Securities Act (Newfoundland and Labrador)
                                </label>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="field">
                        <div class="control">
                            <div class="content" style="margin-bottom: 10px;" id="business_checkboxes">
                                <br>
                                <label class="checkbox">
                                    <input type="checkbox" name="bus_ck1">
                                    Except in Ontario, a Person registered under the securities legislation of a jurisdiction of Canada as an adviser or dealer
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" name="bus_ck2">
                                    Except in Ontario, a pension fund that is regulated by either the Office of the Superintendent of Financial Institutions (Canada) or a pension commission or similar regulatory authority of a jurisdiction of Canada
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" 
                                    name="bus_ck3">
                                    A Person, other than an individual or investment fund, that has net assets of at least $5,000,000 as shown on its most recently prepared financial statements
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" name="bus_ck4">
                                    An investment fund that distributes or has distributed securities under a prospectus in a jurisdiction of Canada for which the regulator or, in Québec, the securities regulatory authority, has issued a receipt
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" name="bus_ck5">
                                    A person acting on behalf of a fully managed account managed by that person if that person is registered or authorized to carry on business as an adviser or the equivalent under the securities legislation of a jurisdiction of Canada or a foreign jurisdiction
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" name="bus_ck6">
                                    A registered charity under the Income Tax Act (Canada) that, in regard to the trade, has obtained advice from an eligibility adviser or an adviser registered under the securities legislation of the jurisdiction of the registered charity to provide advice on the securities being traded
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" name="bus_ck7">
                                    A person in respect of which all of the owners of interests, direct, indirect, or beneficial, except the voting securities required by law to be owned by directors, are persons that are accredited investors
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" name="bus_ck8">
                                    An investment fund that is advised by a person registered as an adviser or a person that is exempt from registration as an adviser 
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" name="bus_ck9">
                                    A person that is recognized or designated by the securities regulatory authority or, except in Ontario and Québec, the regulator as an accredited investor           
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" name="bus_ck10">
                                    A trust established by an accredited investor for the benefit of the accredited investor’s family members of which a majority of the trustees are accredited investors and all of the beneficiaries are the accredited investor’s spouse, a former spouse of the accredited investor or a parent, grandparent, brother, sister, child or grandchild of that accredited investor, of that accredited investor’s spouse or of that accredited investor’s former spouse
                                </label>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="field is-horizontal">
                    <div class="field-label">
                        <!-- Left empty for spacing -->
                    </div>
                    <div class="field-body">
                        <div class="field is-grouped is-grouped-right">
                            <div class="control">
                                <button class="button is-warning" type="submit">
                                    Save
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>


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
