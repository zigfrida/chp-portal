
<div class="container">
    <div class="notification">
        <h1 class="has-text-centered">Hi admin, could you check if {{ $user[0]->subscriber_name }}'s details are in order?</h1>
        <br>    
    @if ($user[0]->clientType == "individual")
        <form action="/{{ $user[0]->id }}/portfolio/" method="post">
            @method('PATCH')
            @csrf
            <div class="field is-horizontal">
                <div class="field-label">
                    <label class="label">Type of Investor</label>
                </div>
                <div class="field-body">
                    <div class="field is-narrow">
                        <div class="control">
                            <label class="radio">
                            <input checked value="individual" type="radio" name="clientType">
                            Individual
                        </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">Name of Subscriber</label>
                </div>
                <div class="field-body">
                    <div class="field">
                        <p class="control is-expanded has-icons-left">
                            <input class="input {{ $errors->has('subscriber_name') ? 'is-danger' : '' }}" type="text" name="subscriber_name" value="{{  $user[0]->subscriber_name }} ">
                            <span class="icon is-small is-left">
                            <i class="fas fa-user" ></i>
                        </span>
                        </p>
                        <i><p class="help">(Individual or Entity)</p></i>
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
                                <input class="input {{ $errors->has('street') ? 'is-danger' : '' }}" name="street" type="tel" value="{{  $user[0]->street }}">
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
                            <input class="input {{ $errors->has('city') ? 'is-danger' : '' }}"name="city" type="text" value={{ $user[0]->city }}>
                        </p>
                        <i><p class="help">City</p></i>
                    </div>
                    <div class="field is-narrow">
                        <div class="control">
                            <div class="select is-fullwidth">
                                <select name="province">
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
                                </select>
                            </div>
                            <i><p class="help">Province</p></i>
                        </div>
                    </div>

                    <div class="field">
                        <p class="control ">
                            <input class="input {{ $errors->has('postal_code') ? 'is-danger' : '' }}" name="postal_code" type="text" value="{{ $user[0]->postal_code }}">
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
                                <select name="country">
                                    Jan Mayen">Svalbard and Jan Mayen</option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                    <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Timor-leste">Timor-leste</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tokelau">Tokelau</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="United States">United States</option>
                                    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Viet Nam">Viet Nam</option>
                                    <option value="Virgin Islands, British">Virgin Islands, British</option>
                                    <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                    <option value="Wallis and Futuna">Wallis and Futuna</option>
                                    <option value="Western Sahara">Western Sahara</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                </select>
                            </div>
                            <i><p class="help">Country</p></i>
                        </div>
                    </div>
                </div>
            </div>


            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">Phone </label>
                </div>
                <div class="field-body">
                    <div class="field">
                        <div class="control">
                            <input class="input {{ $errors->has('phone') ? 'is-danger' : '' }}" name="phone" type="tel" value="{{  $user[0]->phone }}">
                        </div>
                    </div>
                </div>
            </div>

            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">Email</label>
                </div>
                <div class="field-body">
                    <div class="field">
                        <div class="control">
                            <input class="input {{ $errors->has('email') ? 'is-danger' : '' }}" name="email" type="email" value={{  $user[0]->email }}>
                        </div>
                    </div>
                </div>
            </div>

            <div class="field is-horizontal" id="sin_num" style="margin-bottom: 4px;">
                <div class="field-label is-normal">
                    <label class="label">Social Insurance Number</label>
                </div>
                <div class="field-body">
                    <div class="field">
                        <div class="control">
                            <input class="input {{ $errors->has('sin') ? 'is-danger' : '' }}" name="sin" type="text" value={{  $user[0]->sin }}>
                        </div>
                    </div>
                </div>
            </div>





            <hr>

            <div class="field is-horizontal">
                <div class="field-label is-normal is-large">
                    <label class="label is-large">Total Investment</label>
                </div>
                <div class="field-body">
                    <div class="field is-expanded">
                        <div class="field has-addons">
                            <p class="control">
                                <a class="button is-static is-large">
                                    $CA
                                </a>
                            </p>
                            <p class="control is-expanded">
                                <input class="input is-large {{ $errors->has('official_capacity_or_title_of_authorized_signatory') ? 'is-danger' : '' }}" name="total_investment" type="tel" value="{{  $user[0]->total_investment }}">
                            </p>
                        </div>
                        <p class="help"></p>
                    </div>
                </div>
            </div>

            <div class="field is-horizontal">
                <div class="field-label">
                    <!-- Left empty for spacing -->
                </div>
                <div class="field-body">
                    {{-- group might make you think it's more than one item but we need it to align btn right even though the 'group' consists
                    of merely 1 --}}
                    <div class="field is-grouped is-grouped-right">
                        <div class="control">
                            <button class="button is-warning">
                                Edit
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    @elseif ($user[0]->clientType == "business") show only fields for businesses
    <form action="/{{ $user[0]->id }}/portfolio/" method="post">
        @method('PATCH')
        @csrf
        <div class="field is-horizontal">
            <div class="field-label">
                <label class="label">Type of Investor</label>
            </div>
            <div class="field-body">
                <div class="field is-narrow">
                    <div class="control">
                        <label class="radio">
                        <input checked value="???" type="radio" name="clientType">
                        Business
                    </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Name of Subscriber</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <p class="control is-expanded has-icons-left">
                        <input class="input {{ $errors->has('subscriber_name') ? 'is-danger' : '' }}" type="text" name="subscriber_name" value="{{  $user[0]->subscriber_name }} ">
                        <span class="icon is-small is-left">
                        <i class="fas fa-user" ></i>
                    </span>
                    </p>
                    <i><p class="help">(Individual or Entity)</p></i>
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
                            <input class="input {{ $errors->has('street') ? 'is-danger' : '' }}" name="street" type="tel" value="{{  $user[0]->street }}">
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
                        <input class="input {{ $errors->has('city') ? 'is-danger' : '' }}"name="city" type="text" value={{ $user[0]->city }}>
                    </p>
                    <i><p class="help">City</p></i>
                </div>
                <div class="field is-narrow">
                    <div class="control">
                        <div class="select is-fullwidth">
                            <select name="province">
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
                            </select>
                        </div>
                        <i><p class="help">Province</p></i>
                    </div>
                </div>

                <div class="field">
                    <p class="control ">
                        <input class="input {{ $errors->has('postal_code') ? 'is-danger' : '' }}" name="postal_code" type="text" value="{{ $user[0]->postal_code }}">
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
                            <select name="country">
                                Jan Mayen">Svalbard and Jan Mayen</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Timor-leste">Timor-leste</option>
                                <option value="Togo">Togo</option>
                                <option value="Tokelau">Tokelau</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Viet Nam">Viet Nam</option>
                                <option value="Virgin Islands, British">Virgin Islands, British</option>
                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                <option value="Western Sahara">Western Sahara</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                            </select>
                        </div>
                        <i><p class="help">Country</p></i>
                    </div>
                </div>
            </div>
        </div>


        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Phone </label>
            </div>
            <div class="field-body">
                <div class="field">
                    <div class="control">
                        <input class="input {{ $errors->has('phone') ? 'is-danger' : '' }}" name="phone" type="tel" value="{{  $user[0]->phone }}">
                    </div>
                </div>
            </div>
        </div>

        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Email</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <div class="control">
                        <input class="input {{ $errors->has('email') ? 'is-danger' : '' }}" name="email" type="email" value={{  $user[0]->email }}>
                    </div>
                </div>
            </div>
        </div>

        <div class="field is-horizontal" id="name_of_authorized_signatory">
            <div class="field-label is-normal">
                <label class="label">Name of Authorized Signatory</label>
            </div>
            <div class="field-body">
                <div class="field">
                <p class="control is-expanded has-icons-left">
                    <input class="input {{ $errors->has('signatory_first_name') ? 'is-danger' : '' }}" type="text" name="signatory_first_name" value={{ $user[0]->signatory_first_name }}>
                    <span class="icon is-small is-left">
                    <i class="fas fa-user"></i>
                    </span>
                </p>
                <i><p class="help">First Name</p></i>
                </div>
                <div class="field">
                <p class="control is-expanded has-icons-left t">
                    <input class="input {{ $errors->has('signatory_last_name') ? 'is-danger' : '' }}" type="text" name="signatory_last_name" value={{ $user[0]->signatory_last_name }}>
                    <span class="icon is-small is-left">
                        <i class="fas fa-user"></i>
                    </span>
                </p>
                <i><p class="help">Last Name</p></i>
                </div>
                
            </div>
        </div>

        <div class="field is-horizontal" id="official_capacity_or_title_of_authorized_signatory">
            <div class="field-label is-normal">
                <label class="label">Official Capacity or Title of Authorized Signatory</label>
            </div>
            <div class="field-body">
                <div class="field">
                <p class="control is-expanded has-icons-left">
                    <input class="input {{ $errors->has('official_capacity_or_title_of_authorized_signatory') ? 'is-danger' : '' }}" type="text" name="official_capacity_or_title_of_authorized_signatory" value={{ $user[0]->official_capacity_or_title_of_authorized_signatory }}>
                    <span class="icon is-small is-left">
                    <i class="fas fa-user"></i>
                    </span>
                </p>
                </div>
            </div>
        </div>

        <div class="field is-horizontal" id="business_num">
            <div class="field-label is-normal">
                <label class="label">Business Number</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <div class="control">
                        <input class="input {{ $errors->has('business_number') ? 'is-danger' : '' }}" name="business_number" type="text" value="{{ $user[0]->business_number }}">
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <div class="field is-horizontal">
            <div class="field-label is-normal is-large">
                <label class="label is-large">Total Investment</label>
            </div>
            <div class="field-body">
                <div class="field is-expanded">
                    <div class="field has-addons">
                        <p class="control">
                            <a class="button is-static is-large">
                                $CA
                            </a>
                        </p>
                        <p class="control is-expanded">
                            <input class="input is-large {{ $errors->has('official_capacity_or_title_of_authorized_signatory') ? 'is-danger' : '' }}" name="total_investment" type="tel" value="{{  $user[0]->total_investment }}">
                        </p>
                    </div>
                    <p class="help"></p>
                </div>
            </div>
        </div>

        <div class="field is-horizontal">
            <div class="field-label">
                <!-- Left empty for spacing -->
            </div>
            <div class="field-body">
                {{-- group might make you think it's more than one item but we need it to align btn right even though the 'group' consists
                of merely 1 --}}
                <div class="field is-grouped is-grouped-right">
                    <div class="control">
                        <button class="button is-warning">
                            Edit
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form> 
    @endif
    </div>
</div>