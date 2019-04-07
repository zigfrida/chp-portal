
<div class="container">
        <div class="notification">
            <h1 class="has-text-centered">Could you check if {{ $user[0]->subscriber_name }}'s details are in order?</h1>
            <br>
            
        @if ($user[0]->clientType == "individual")
            <form action="/{{ $user[0]->user_id }}/portfolio/" method="post">
                @method('PATCH')
                @csrf

                <div class="field is-horizontal" id="name_of_authorized_signatory">
                    <div class="field-label is-normal">
                        <label class="label">DATED</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                        <p class="control is-expanded has-icons-left">
                            <input class="input " type="text" name="signed_day1" value={{ $user[0]->signed_day1 }}>
                            <span class="icon is-small is-left">
                            <i class="fas fa-user"></i>
                            </span>
                        </p>
                        <i><p class="help">day</p></i>
                        </div>
                        <div class="field">
                        <p class="control is-expanded has-icons-left t">
                            <input class="input " type="text" name="signatory_last_name" value={{ $user[0]->signed_month1 }}>
                            <span class="icon is-small is-left">
                                <i class="fas fa-user"></i>
                            </span>
                        </p>
                        <i><p class="help">month</p></i>
                        </div>
                        <div class="field">
                            <p class="control is-expanded has-icons-left t">
                                <input class="input " type="text" name="signatory_last_name" value="{{ $user[0]->signed_year1 }}">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-user"></i>
                                </span>
                            </p>
                            <i><p class="help">year</p></i>
                            </div>
                    </div>
                </div>

            
            <div class="field is-horizontal" id="name_of_authorized_signatory">
                <div class="field-label is-normal">
                    <label class="label">Registration Instructions</label>
                </div>
                <div class="field-body">
                    <div class="field">
                    <p class="control is-expanded has-icons-left">
                        <input class="input" type="text" name="registration_name" value="{{ $user[0]->registration_name }}">
                        <span class="icon is-small is-left">
                        <i class="fas fa-user"></i>
                        </span>
                    </p>
                    <i><p class="help">Name</p></i>
                    </div>
                    <div class="field">
                    <p class="control is-expanded has-icons-left t">
                        <input class="input" type="text" name="registration_account_reference" value="{{ $user[0]->registration_account_reference }}">
                        <span class="icon is-small is-left">
                            <i class="fas fa-user"></i>
                        </span>
                    </p>
                    <i><p class="help">Account reference, if applicable</p></i>
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
                            <input class="input"name="registration_address" type="text" value="{{ $user[0]->registration_address }}">
                        </p>
                        <i><p class="help">Address</p></i>
                    </div>
                </div>
            </div>
        
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">Delivery Instructions</label>
                </div>
                <div class="field-body">
                    <div class="field">
                        <p class="control is-expanded ">
                            <input class="input" name="delivery_contact" type="text" value="">
                        </p>
                        <i><p class="help">Contact name</p></i>
                    </div>
                    <div class="field">
                        <p class="control">
                            <input class="input" name="delivery_telephone" type="tel" value="">
                        </p>
                        <i><p class="help">Telephone Number</p></i>
                    </div>
                    <div class="field">
                        <p class="control is-expanded ">
                            <input class="input " name="delivery_sccount_reference" type="text" value="">
                        </p>
                        <i><p class="help">Account reference, if applicable</p></i>
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
        <br>
        <table>
                <tbody>
                    <tr>
                        <div class="has-text-grey-lighter">
                            <td><span class="has-text-weight-bold is-size-4">2. Risk acknowledgement</span></td>
                        </div>
                    </tr>

                    <tr>
                        <td><span class="has-text-weight-bold">Risk of loss</span></td>
                        <td><input type="text" name="risk_ck1" form="theForm"></td>
                    </tr>
                    <tr>
                        <td><span class="has-text-weight-bold">Liquidity risk</span> .</td>
                        <td><input type="text" name="risk_ck2" form="theForm"></td>
                    </tr>
                    <tr>
                        <td><span class="has-text-weight-bold">Lack of information</span></td>
                        <td><input type="text" name="risk_ck3" form="theForm"></td>
                    </tr>
                    <tr>
                        <td><span class="has-text-weight-bold">Lack of advice</span> </td>
                        <td><input type="text" name="risk_ck4" form="theForm"></td>
                    </tr>


                    <tr>
                        <div class="has-text-grey-lighter">
                            <td><span class="has-text-weight-bold is-size-4">3. Accredited investor status</span></td>
                        </div>
                    </tr>
                    <tr>
                        <td>Your net income before taxes was more than $200,000 in each of the 2 most recent calendar years, and you expect it to be more than $200,000 in the current calendar year. (You can find your net income before taxes on your personal income tax return.)</td>
                        <td><span class="has-text-weight-bold">Your initials</span></td>
                    </tr>
                    <tr>
                        <td>Your net income before taxes combined with your spouse’s was more than $300,000 in each of the 2 most recent calendar years, and you expect your combined net income before taxes to be more than $300,000 in the current calendar year.</td>
                        <td><input type="text" name="risk_ck5" form="theForm"></td>
                    </tr>
                    <tr>
                        <td>Either alone or with your spouse, you own more than $1 million in cash and securities, after subtracting any debt related to the cash and securities.</td>
                        <td><input type="text" name="risk_ck6" form="theForm"></td>
                    </tr>
                    <tr>
                        <td>Either alone or with your spouse, you have net assets worth more than $5 million. (Your net assets are your total assets (including real estate) minus your total debt.)</td>
                        <td><input type="text" name="risk_ck7" form="theForm"></td>
                    </tr>
                </tbody>
            </table> 
        @endif
        </div>
    </div>