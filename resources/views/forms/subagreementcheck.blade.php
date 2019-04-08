
<div class="container">
        <div class="notification">
            <h1 class="has-text-centered is-size-3">Could you check if {{ $user[0]->subscriber_name }}'s details are in order?</h1>
            <h1 class="has-text-centered is-size-5">Recall, these fields were optional.</h1>
            <br>
            
        @if ($user[0]->clientType == "individual")
            <form action="/{{ $user[0]->user_id }}/portfolio/form2" method="post">
                @method('PATCH')
                @csrf
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
                <div class="field-label is-normal">
                    <label class="label">&nbsp;</label>
                </div>
                <div class="field-body">
                    <div class="field">
                        <p class="control is-expanded ">
                            <input class="input"name="registration_address" type="text" value="{{ $user[0]->delivery_address }}">
                        </p>
                        <i><p class="help">Address</p></i>
                    </div>
                </div>
            </div>

            <div class="field is-horizontal">
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