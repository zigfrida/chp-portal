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
    <title>Edit Profile</title>
</head>
<body>
    @include('layouts.partials.header')

    <main class="stick-bot">

        <div class="container">
            <div class="has-text-centered">
                <h1 class="title is-2"><span class="decor">Profile of</span> <span class="le-decor">{{ $user[0]->subscriber_name}}</span></h1>
            </div>            
        </div>

        <div class="container shrinker">

            <section class="section">
                @if ($errors->any())
                    <div class="notification is-warning">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>*{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="/{{ $user[0]->user_id }}/edit_profile" method="post">
                    @method('PATCH')
                    @csrf
                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label class="label">Full Name</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <p class="control is-expanded has-icons-left">
                                    <input class="input" type="text" name="subscriber_name" placeholder="Full Name" value="{{$user[0]->subscriber_name}}" required>
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-user"></i>
                                    </span>
                                </p>
                            </div>
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
                                <i><p class="help">confirmation email will be sent to the client's email</p></i>
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
                                        <input class="input" name="phone" type="tel" placeholder="778-555-5555" value="{{$user[0]->phone}}" required>
                                    </p>
                                </div>
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
                                        <select name="province">
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
                                                <select name="country">
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
                                    <button class="button is-warning" type="submit">Save</button>
                                    <button class="button is-light" type="reset">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </section>
        </div>
        <hr>

    </main>


    @include('layouts.partials.footer')
</body>
</html>
