
<div class="container">
    <div class="notification">
        <h1 class="has-text-centered">Could you check if {{ $user[0]->subscriber_name }}'s details are in order?</h1>
        <br>
        
    @if ($user[0]->clientType == "individual")
        <form action="/{{ $user[0]->user_id }}/portfolio/" method="post">
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
                            <input class="input {{ $errors->has('subscriber_name') ? 'is-danger' : '' }}" type="text" name="subscriber_name" value="{{ $user[0]->subscriber_name }}">
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
                                <input class="input {{ $errors->has('street') ? 'is-danger' : '' }}" name="street" type="text" value="{{ $user[0]->street }}">
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
                            <input class="input {{ $errors->has('city') ? 'is-danger' : '' }}" name="city" type="text" value="{{ $user[0]->city }}">
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
                                <select id="country" name="country">
                                    <option @if($country === "Canada")selected @endif>Canada</option>
                                    <option @if($country === "United States")selected @endif>United States</option>
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
                            <input class="input {{ $errors->has('phone') ? 'is-danger' : '' }}" name="phone" type="tel" value="{{ $user[0]->phone }}">
                        </div>
                    </div>
                </div>
            </div>

            {{-- Don't need email anymore; we get it from User table --}}
            {{-- <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">Email</label>
                </div>
                <div class="field-body">
                    <div class="field">
                        <div class="control">
                            <input class="input {{ $errors->has('email') ? 'is-danger' : '' }}" name="email" type="email" value="{{ $user[0]->email }}">
                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="field is-horizontal" id="sin_num" style="margin-bottom: 4px;">
                <div class="field-label is-normal">
                    <label class="label">Social Insurance Number</label>
                </div>
                <div class="field-body">
                    <div class="field">
                        <div class="control">
                            <input class="input {{ $errors->has('sin') ? 'is-danger' : '' }}" name="sin" type="text" value="{{ $user[0]->sin }}">
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

            <hr>

            <div class="tile is-ancestor">
                <div class="tile is-parent">
                    <div class="tile">
                        <article class="tile is-child box">
                            <section class="hero is-dark is-bold">
                                <h1 class="title" style="text-align: center;">Accredited Investor Certificate</h1>
                            </section>
                            <div class="content" style="margin-bottom: 10px;">
                                <br>
                                <label class="checkbox">
                                    <input name="ind_ck1" type="checkbox" {{$user[0]->ind_ck1 === 1 ? "checked" : ""}}>
                                    An individual whose net income before taxes exceeded $200,000 in each of the two most recent calendar years or whose net income before taxes combined with that of a spouse exceeded $300,000 in each of the two most recent calendar years and who, in either case, reasonably expects to exceed that net income level in the current calendar year;
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox"  name="ind_ck2" {{$user[0]->ind_ck2 === 1 ? "checked" : ""}}>
                                    An individual, who, either alone or with a spouse, has net assets of at least $5,000,000
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox"  name="ind_ck3" {{$user[0]->ind_ck3 === 1 ? "checked" : ""}}>
                                    An individual who, either alone or with a spouse, beneficially owns financial assets having an aggregate realizable value that, before taxes but net of any related liabilities, exceeds $1,000,000
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox"  name="ind_ck4" {{$user[0]->ind_ck4 === 1 ? "checked" : ""}}>
                                    An individual who beneficially owns financial assets having an aggregate realizable value that, before taxes but net of any related liabilities, exceeds $5,000,000
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox"  name="ind_ck5" {{$user[0]->ind_ck5 === 1 ? "checked" : ""}}>
                                    An individual registered under the securities legislation of a jurisdiction of Canada, as a representative of a person registered under the securities legislation of a jurisdiction of Canada as an adviser or dealer
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox"  name="ind_ck6" {{$user[0]->ind_ck6 === 1 ? "checked" : ""}}>
                                    An individual formerly registered under the securities legislation of a jurisdiction of Canada, other than an individual formerly registered solely as a representative of a limited market dealer under one or both of the Securities Act (Ontario) or the Securities Act (Newfoundland and Labrador)
                                </label>
                            </div>
                        </article>
                    </div>
                </div>
            </div>

            {{-- <div class="field is-horizontal">
                <div class="field-label is-normal is-large">
                    <label class="label is-large">Investor Class</label>
                </div>
                <div class="field-body">
                    <div class="field is-narrow">
                        <div class="control">
                            <div class="select is-fullwidth is-large is-warning">
                                <select name="class">
                                    <option>A</option>
                                    <option>B</option>
                                </select>
                            </div>
                            <i><p class="help">Class</p></i>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="columns">
                <div class="column">
                    <div style="-moz-user-select: none; -webkit-user-select: none; -ms-user-select:none; user-select:none;-o-user-select:none; border:1px dotted black" 
                        unselectable="on"
                        onselectstart="return false;" 
                        onmousedown="return false;">
                        <img src="{{ $signature[0]->form_signature }}" alt="Initials" height="500" width="500">
                    </div>
                    <div class="columns">
                        <div class="column" style="margin-top:5px;">
                            <span class="tag is-white">initials</span>
                        </div>
                    </div>
                </div>
                
                <div class="column">
                    <div style="-moz-user-select: none; -webkit-user-select: none; -ms-user-select:none; user-select:none;-o-user-select:none; border:1px dotted black" 
                        unselectable="on"
                        onselectstart="return false;" 
                        onmousedown="return false;">
                        <img src="{{ $signature[0]->sub_signature }}" alt="Signature" height="500" width="500">
                    </div>
                    <div class="columns">
                        <div class="column" style="margin-top:5px;">
                            <span class="tag is-white">signature</span>
                        </div>
                    </div>
                </div>          
            </div>

            <div class="field is-horizontal">
                <div class="field-label is-normal is-large">
                    <label class="label is-large">Investor Class:</label>
                </div>
                <div class="field-body">
                    <div class="field is-narrow">
                        <div class="control">
                            <div class="select is-fullwidth is-large is-warning">
                                <select name="class">
                                    <option>A</option>
                                    <option>B</option>
                                </select>
                            </div>
                            {{-- <i><p class="help">Class</p></i> --}}
                        </div>
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
                                They sure are!
                            </button>
                        </div>
                    </div>
                </div>
            </div>
    </form>

    @elseif ($user[0]->clientType == "business")
    <form action="/{{ $user[0]->user_id }}/portfolio/" method="post">
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
                        <input checked value="business" type="radio" name="clientType">
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
                        <input class="input {{ $errors->has('subscriber_name') ? 'is-danger' : '' }}" type="text" name="subscriber_name" value="{{ $user[0]->subscriber_name }} ">
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
                            <input class="input {{ $errors->has('street') ? 'is-danger' : '' }}" name="street" type="tel" value="{{ $user[0]->street }}">
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
                        <input class="input {{ $errors->has('city') ? 'is-danger' : '' }}" name="city" type="text" value="{{ $user[0]->city }}">
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
                            <select id="country" name="country">
                                <option @if($country === "Canada")selected @endif>Canada</option>
                                <option @if($country === "United States")selected @endif>United States</option>
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
                        <input class="input {{ $errors->has('phone') ? 'is-danger' : '' }}" name="phone" type="tel" value="{{ $user[0]->phone }}">
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
                        <input class="input {{ $errors->has('email') ? 'is-danger' : '' }}" name="email" type="email" value="{{ $user[0]->email }}">
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
                    <input class="input {{ $errors->has('signatory_first_name') ? 'is-danger' : '' }}" type="text" name="signatory_first_name" value="{{ $user[0]->signatory_first_name }}">
                    <span class="icon is-small is-left">
                    <i class="fas fa-user"></i>
                    </span>
                </p>
                <i><p class="help">First Name</p></i>
                </div>
                <div class="field">
                <p class="control is-expanded has-icons-left t">
                    <input class="input {{ $errors->has('signatory_last_name') ? 'is-danger' : '' }}" type="text" name="signatory_last_name" value="{{ $user[0]->signatory_last_name }}">
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
                    <input class="input {{ $errors->has('official_capacity_or_title_of_authorized_signatory') ? 'is-danger' : '' }}" type="text" name="official_capacity_or_title_of_authorized_signatory" value="{{ $user[0]->official_capacity_or_title_of_authorized_signatory }}">
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


        <div class="tile is-ancestor">
            <div class="tile is-parent">
                <div class="tile">
                    <article class="tile is-child box">
                        <section class="hero is-dark is-bold">
                            <h1 class="title" style="text-align: center;">Accredited Investor Certificate</h1>
                        </section>
                            <div class="content" style="margin-bottom: 10px;" id="business_checkboxes">
                                <br>
                                <label class="checkbox">
                                    <input type="checkbox" name="bus_ck1" {{$user[0]->bus_ck1 === 1 ? "checked" : ""}}>
                                    Except in Ontario, a Person registered under the securities legislation of a jurisdiction of Canada as an adviser or dealer
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" name="bus_ck2" {{$user[0]->bus_ck2 === 1 ? "checked" : ""}}>
                                    Except in Ontario, a pension fund that is regulated by either the Office of the Superintendent of Financial Institutions (Canada) or a pension commission or similar regulatory authority of a jurisdiction of Canada
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" name="bus_ck3" {{$user[0]->bus_ck3 === 1 ? "checked" : ""}}>
                                    A Person, other than an individual or investment fund, that has net assets of at least $5,000,000 as shown on its most recently prepared financial statements
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" name="bus_ck4" {{$user[0]->bus_ck4 === 1 ? "checked" : ""}}>
                                    An investment fund that distributes or has distributed securities under a prospectus in a jurisdiction of Canada for which the regulator or, in Québec, the securities regulatory authority, has issued a receipt
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" name="bus_ck5" {{$user[0]->bus_ck5 === 1 ? "checked" : ""}}>
                                    A person acting on behalf of a fully managed account managed by that person if that person is registered or authorized to carry on business as an adviser or the equivalent under the securities legislation of a jurisdiction of Canada or a foreign jurisdiction
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" name="bus_ck6" {{$user[0]->bus_ck6 === 1 ? "checked" : ""}}>
                                    A registered charity under the Income Tax Act (Canada) that, in regard to the trade, has obtained advice from an eligibility adviser or an adviser registered under the securities legislation of the jurisdiction of the registered charity to provide advice on the securities being traded
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" name="bus_ck7" {{$user[0]->bus_ck7 === 1 ? "checked" : ""}}>
                                    A person in respect of which all of the owners of interests, direct, indirect, or beneficial, except the voting securities required by law to be owned by directors, are persons that are accredited investors
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" name="bus_ck8" {{$user[0]->bus_ck8 === 1 ? "checked" : ""}}>
                                    An investment fund that is advised by a person registered as an adviser or a person that is exempt from registration as an adviser 
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" name="bus_ck9" {{$user[0]->bus_ck9 === 1 ? "checked" : ""}}>
                                    A person that is recognized or designated by the securities regulatory authority or, except in Ontario and Québec, the regulator as an accredited investor           
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" name="bus_ck10" {{$user[0]->bus_ck10 === 1 ? "checked" : ""}}>
                                    A trust established by an accredited investor for the benefit of the accredited investor’s family members of which a majority of the trustees are accredited investors and all of the beneficiaries are the accredited investor’s spouse, a former spouse of the accredited investor or a parent, grandparent, brother, sister, child or grandchild of that accredited investor, of that accredited investor’s spouse or of that accredited investor’s former spouse
                                </label>
                            </div>
                    </article>
                </div>
            </div>
        </div>

        {{-- <div class="field is-horizontal">
            <div class="field-label is-normal is-large">
                <label class="label is-large">Investor Class</label>
            </div>
            <div class="field-body">
                <div class="field is-narrow">
                    <div class="control">
                        <div class="select is-fullwidth is-large is-warning">
                            <select name="class">
                                <option>A</option>
                                <option>B</option>
                            </select>
                        </div>
                        <i><p class="help">Class</p></i>
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="columns">
            <div class="column">
                <div style="-moz-user-select: none; -webkit-user-select: none; -ms-user-select:none; user-select:none;-o-user-select:none; border:1px dotted black" 
                    unselectable="on"
                    onselectstart="return false;" 
                    onmousedown="return false;">
                    <img src="{{ $signature[0]->form_signature }}" alt="Initials" height="500" width="500">
                </div>
                <div class="columns">
                    <div class="column" style="margin-top:5px;">
                        <span class="tag is-white is-pulled-right">initials</span>
                    </div>
                </div>
            </div>
            <div class="column">
                <div style="-moz-user-select: none; -webkit-user-select: none; -ms-user-select:none; user-select:none;-o-user-select:none; border:1px dotted black" 
                    unselectable="on"
                    onselectstart="return false;" 
                    onmousedown="return false;">
                    <img src="{{ $signature[0]->sub_signature }}" alt="Signature" height="500" width="500">
                </div>
                <div class="columns">
                    <div class="column" style="margin-top:5px;">
                        <span class="tag is-white is-pulled-right">signature</span>
                    </div>
                </div>
            </div>          
        </div>

        
        <div class="field is-horizontal">
            <div class="field-label is-normal is-large">
                <label class="label is-large">Investor Class:</label>
            </div>
            <div class="field-body">
                <div class="field is-narrow">
                    <div class="control">
                        <div class="select is-fullwidth is-large is-warning">
                            <select name="class">
                                <option>A</option>
                                <option>B</option>
                            </select>
                        </div>
                        {{-- <i><p class="help">Class</p></i> --}}
                    </div>
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
                            They sure are!
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form> 
    @endif
    </div>
</div>