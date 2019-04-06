<?php $user = DB::table('form_users')->where('user_id', 2)->get();?>

<style>
* {
  box-sizing: border-box;
}


/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 20%;
  padding: 10px;
  margin-top:5px;
  margin-bottom:5px;
  height: 10px; /* Should be removed. Only for demonstration */
}

.column2 {
  float: left;
  width: 70%;
  padding: 10px;
  border:1px black dotted;
  margin-top:5px;
  margin-bottom:5px;
  height: 10px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

.initials{
    border:1px black dotted;
    width:100%;
    height:100;
}

</style>
<div class="container">

        @if ($errors->any())
            <div class="notification is-warning">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>*{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
       

        {{-- Added --}}

    <img src="https://www.cypresshillspartners.com/uploads/5/9/5/6/59561431/cypresshills-black-yellow.png" >

    <fieldset disabled="disabled" id="people_fieldset">
            <div class="field is-horizontal" id="sin_num" style="margin-bottom: 4px;">
                <div class="field-label is-normal">
                    <label class="label">Social Insurance Number</label>
                </div>
                <div class="field-body">
                    <div class="field">
                        <div class="control">
                            <input class="input {{ $errors->has('sin') ? 'is-danger' : '' }}" name="sin" type="text" value="{{ old('sin') ? old('sin') : '' }}">
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
      <form action="/{{ $user[0]->id }}/portfolio/form1" method="post">
            @csrf

            {{-- <div class="field is-horizontal"> --}}
                {{-- <div class="field-label"> --}}
                    <div class="row">
                        <div class="column">
                            <label class="label">Type of Investor</label>
                        </div>
                    
                {{-- </div> --}}
                {{-- <div class="field-body"> --}}
                    {{-- <div class="field is-narrow">
                        <div class="control"> --}}
                        <div class="column2">
                            <label class="radio">
                            <input value="individual" type="radio" name="clientType" onclick="individualOnly()">
                            Individual
                            </label>
                            <label class="radio">
                            <input value="business" type="radio" name="clientType" onclick="businessOnly()">
                            Non-Individual (Fund, Corp, etc.)
                            </label>
                        </div>

                    </div>
                        {{-- </div>
                    </div> --}}
                {{-- </div> --}}
            {{-- </div> --}}

            {{-- <div class="field is-horizontal"> --}}
                {{-- <div class="field-label is-normal"> --}}
                    <div class="row">
                        <div class="column">
                              <label class="label">Name of Subscriber</label>
                        </div> 
                        <div>
                            <div class="column2">
                            
                            </div>

                        </div>
                            
                    </div>
                {{-- </div> --}}
                {{-- <div class="field-body">
                    <div class="field">
                        <p class="control is-expanded has-icons-left">
                            <input class="input {{ $errors->has('subscriber_name') ? 'is-danger' : '' }}" type="text" name="subscriber_name" value="{{ old('subscriber_name') ? old('subscriber_name') : '' }}">
                            <span class="icon is-small is-left">
                            <i class="fas fa-user" ></i>
                        </span>
                        </p>
                        <i><p class="help">(Individual or Entity)</p></i>
                    </div>
                </div> --}}
            </div>

            {{-- <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">Address</label>
                </div> --}}
                <div class="row">
                    <div class="column">
                          <label class="label">Address</label>
                    </div> 
                    <div class="column2">
                        
                    </div>
                    <i>Street name</i>
                </div>


                {{-- <div class="field-body">
                    <div class="field is-expanded">
                        <div class="field">
                            <p class="control is-expanded">
                                <input class="input {{ $errors->has('street') ? 'is-danger' : '' }}" name="street" type="tel" value="{{ old('street') ? old('street') : '' }}">
                            </p>
                        </div>
                        <i><p class="help">Street Name</p></i>
                    </div>
                </div>
            </div> --}}



            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">&nbsp;</label>
                </div>
                <div class="field-body">
                    <div class="field">
                        <p class="control is-expanded ">
                            <input class="input {{ $errors->has('city') ? 'is-danger' : '' }}"name="city" type="text" value="{{ old('city') ? old('city') : '' }}">
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
                            <input class="input {{  $errors->has('postal_code') ? 'is-danger' : '' }}" name="postal_code" type="text" value="{{ old('postal_code') ? old('postal_code') : '' }}">
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
                                    <option value="Canada">Canada</option>
                                    <option value="United States">United States</option>
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
                            <input class="input {{ $errors->has('phone') ? 'is-danger' : '' }}" name="phone" type="tel" value="{{ old('phone') ? old('phone') : '' }}">
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
                            <input class="input {{ $errors->has('email') ? 'is-danger' : '' }}" name="email" type="email" value="{{ old('email') ? old('email') : '' }}">
                        </div>
                    </div>
                </div>
            </div>




        <fieldset disabled="disabled" id="business_fieldset">
            <div class="field is-horizontal" id="name_of_authorized_signatory">
                <div class="field-label is-normal">
                    <label class="label">Name of Authorized Signatory</label>
                </div>
                <div class="field-body">
                    <div class="field">
                    <p class="control is-expanded has-icons-left">
                        <input class="input {{ $errors->has('signatory_first_name') ? 'is-danger' : '' }}" type="text" name="signatory_first_name" value="{{ old('signatory_first_name') ? old('signatory_first_name') : '' }}">
                        <span class="icon is-small is-left">
                        <i class="fas fa-user"></i>
                        </span>
                    </p>
                    <i><p class="help">First Name</p></i>
                    </div>
                    <div class="field">
                    <p class="control is-expanded has-icons-left t">
                        <input class="input {{ $errors->has('signatory_last_name') ? 'is-danger' : '' }}" type="text" name="signatory_last_name" value="{{ old('signatory_last_name') ? old('signatory_last_name') : '' }}">
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
                        <input class="input {{ $errors->has('official_capacity_or_title_of_authorized_signatory') ? 'is-danger' : '' }}" type="text" name="official_capacity_or_title_of_authorized_signatory" value="{{ old('official_capacity_or_title_of_authorized_signatory') ? old('official_capacity_or_title_of_authorized_signatory') : '' }}">
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
                            <input class="input {{ $errors->has('business_number') ? 'is-danger' : '' }}" name="business_number" type="text" value="{{ old('business_number') ? old('business_number') : '' }}">
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
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
                                <input class="input is-large {{ $errors->has('total_investment') ? 'is-danger' : '' }}" name="total_investment" type="tel" value="{{ old('total_investment') ? old('total_investment') : '' }}">
                            </p>
                        </div>
                        <p class="help"></p>
                    </div>
                </div>
            </div>

            <hr>
            <br>

            <br>
            <div class="tile is-ancestor">
                <div class="tile is-parent">
                    <div class="tile">
                        <article class="tile is-child box">
                            <section class="hero is-dark is-bold">
                                <h1 class="title" style="text-align: center;">Accredited Investor Certificate</h1>
                            </section>
                            <div class="content" style="margin-bottom: 10px;" id="people_checkboxes" >
                                <br><br>
                                <label class="checkbox">
                                    <input name="ind_ck1" type="checkbox">
                                    An individual whose net income before taxes exceeded $200,000 in each of the two most recent calendar years or whose net income before taxes combined with that of a spouse exceeded $300,000 in each of the two most recent calendar years and who, in either case, reasonably expects to exceed that net income level in the current calendar year;
                                </label>
                                <br><br>
                                <label class="checkbox">
                                    <input type="checkbox"  name="ind_ck2" >
                                    An individual, who, either alone or with a spouse, has net assets of at least $5,000,000
                                </label>
                                <br><br>
                                <label class="checkbox">
                                    <input type="checkbox"  name="ind_ck3" >
                                    An individual who, either alone or with a spouse, beneficially owns financial assets having an aggregate realizable value that, before taxes but net of any related liabilities, exceeds $1,000,000
                                </label>
                                <br><br>
                                <label class="checkbox">
                                    <input type="checkbox"  name="ind_ck4" >
                                    An individual who beneficially owns financial assets having an aggregate realizable value that, before taxes but net of any related liabilities, exceeds $5,000,000
                                </label>
                                <br><br>
                                <label class="checkbox">
                                    <input type="checkbox"  name="ind_ck5" >
                                    An individual registered under the securities legislation of a jurisdiction of Canada, as a representative of a person registered under the securities legislation of a jurisdiction of Canada as an adviser or dealer
                                </label>
                                <br><br>
                                <label class="checkbox">
                                    <input type="checkbox"  name="ind_ck6" >
                                    An individual formerly registered under the securities legislation of a jurisdiction of Canada, other than an individual formerly registered solely as a representative of a limited market dealer under one or both of the Securities Act (Ontario) or the Securities Act (Newfoundland and Labrador)
                                </label>
                            </div>
                            <div class="content" style="margin-bottom: 10px;" id="business_checkboxes">
                                    <br>
                                    <label class="checkbox">
                                        <input type="checkbox" name="bus_ck1">
                                        Except in Ontario, a Person registered under the securities legislation of a jurisdiction of Canada as an adviser or dealer
                                    </label>
                                    <br><br>
                                    <label class="checkbox">
                                        <input type="checkbox" name="bus_ck2">
                                        Except in Ontario, a pension fund that is regulated by either the Office of the Superintendent of Financial Institutions (Canada) or a pension commission or similar regulatory authority of a jurisdiction of Canada
                                    </label>
                                    <br><br>
                                    <label class="checkbox">
                                        <input type="checkbox" 
                                        name="bus_ck3">
                                        A Person, other than an individual or investment fund, that has net assets of at least $5,000,000 as shown on its most recently prepared financial statements
                                    </label>
                                    <br><br>
                                    <label class="checkbox">
                                        <input type="checkbox" name="bus_ck4">
                                        An investment fund that distributes or has distributed securities under a prospectus in a jurisdiction of Canada for which the regulator or, in Québec, the securities regulatory authority, has issued a receipt
                                    </label>
                                    <br><br>
                                    <label class="checkbox">
                                        <input type="checkbox" name="bus_ck5">
                                        A person acting on behalf of a fully managed account managed by that person if that person is registered or authorized to carry on business as an adviser or the equivalent under the securities legislation of a jurisdiction of Canada or a foreign jurisdiction
                                    </label>
                                    <br><br>
                                    <label class="checkbox">
                                        <input type="checkbox" name="bus_ck6">
                                        A registered charity under the Income Tax Act (Canada) that, in regard to the trade, has obtained advice from an eligibility adviser or an adviser registered under the securities legislation of the jurisdiction of the registered charity to provide advice on the securities being traded
                                    </label>
                                    <br><br>
                                    <label class="checkbox">
                                        <input type="checkbox" name="bus_ck7">
                                        A person in respect of which all of the owners of interests, direct, indirect, or beneficial, except the voting securities required by law to be owned by directors, are persons that are accredited investors
                                    </label>
                                    <br><br>
                                    <label class="checkbox">
                                        <input type="checkbox" name="bus_ck8">
                                        An investment fund that is advised by a person registered as an adviser or a person that is exempt from registration as an adviser 
                                    </label>
                                    <br><br>
                                    <label class="checkbox">
                                        <input type="checkbox" name="bus_ck9">
                                        A person that is recognized or designated by the securities regulatory authority or, except in Ontario and Québec, the regulator as an accredited investor           
                                    </label>
                                    <br><br>
                                    <label class="checkbox">
                                        <input type="checkbox" name="bus_ck10">
                                        A trust established by an accredited investor for the benefit of the accredited investor’s family members of which a majority of the trustees are accredited investors and all of the beneficiaries are the accredited investor’s spouse, a former spouse of the accredited investor or a parent, grandparent, brother, sister, child or grandchild of that accredited investor, of that accredited investor’s spouse or of that accredited investor’s former spouse
                                    </label>
                                </div>

                            <br>
                            <br>
                            <h4 class="title is-4">The Subscriber acknowledges that the Issuer is relying upon the Subscriber's disclosure herein. In the event the Subscriber's accredited investor status changes prior to the date on which a certificate representing any of the Units is issued, the Subscriber agrees to immediately notify the Issuer of such change.</h2>
                            <br>
                            <h5 class="subtitle is-5">Initial (put in the writing box afterwards)</h5>
                            <br><br>

                            <div class="initials">


                            </div>

                        </article>
                    </div>
                </div>
            </div>
            <br><br><br>
            <div class="tile is-ancestor">
                    <div class="tile is-parent">
                        <div class="tile">
                            <article class="tile is-child box">
                                <section class="hero is-dark is-bold">
                                    <h1 class="title" style="text-align: center;">Form for Individual Accredited Investors</h1>
                                </section>
                                <br>
                                <div class="content" style="margin-bottom: 10px;">
                                    <br>
                                    <h5 class="subtitle is-5">Risk Acknowledgement:</h5>
                                    This investment is risky. By signing this form, you understand that:
                                    <br>
                                    <ol type="1">
                                        <li><b>Risk of loss</b> - You could lose your entire investment.</li>
                                        <li><b>Liquidity risk</b> – You may not be able to sell your investment quickly – or at all.</li>
                                        <li><b>Lack of information</b> – You may receive little or no information about your investment.</li>
                                        <li><b>Lack of advice</b> – You will not receive advice from the salesperson about whether this investment is suitable for you unless the salesperson is registered. The salesperson is the person who meets with, or provides information to, you about making this investment. To check whether the salesperson is registered, go to www.aretheyregistered.ca.</li>
                                    </ol>
                                    <br>
                                    By clicking here, you confirm that you have read this form and you understand the risks of making this investment as identified in this form<span class="has-text-danger">*</span>
                                    <br><br>
                                    <label class="checkbox">
                                        <input type="checkbox">
                                        <i>An individual whose net income before taxes exceeded $200,000 in each of the two most recent calendar years or whose net income before taxes combined with that of a spouse exceeded $300,000 in each of the two most recent calendar years and who, in either case, reasonably expects to exceed that net income level in the current calendar year;</i>
                                    </label>
                                </div>
                                <br>
                            </article>
                        </div>
                    </div>
                </div>
            <br><br><br>

            <hr>
<div>
