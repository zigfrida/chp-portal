<div class="container">
    <h1 class="title is-2 ">Formstack stuff</h1>
    <section class="section">
        <form action="/admin" method="post">
            @csrf
            <div class="field is-horizontal">
                    <div class="field-label">
                      <label class="label">Type of Investor</label>
                    </div>
                    <div class="field-body">
                      <div class="field is-narrow">
                        <div class="control">
                          <label class="radio">
                            <input type="radio" name="member" onclick="hideCrap()">
                            Individual
                          </label>
                          <label class="radio">
                            <input type="radio" name="member" onclick="hideCrap2()">
                            Non-Individual (Fund, Corp, etc.)
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>

            
            <div class="field is-horizontal" >
                <div class="field-label is-normal" >
                    <label class="label">Full Name</label>
                </div>
                <div class="field-body">
                    <div class="field" >
                        <p class="control is-expanded has-icons-left" >
                            <input class="input " type="text" name="name" placeholder="Francisco Wagner" >
                            <span class="icon is-small is-left" >
                            <i class="fas fa-user" ></i>
                        </span>
                        </p>
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
                    </div>
                </div>
            </div>

            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">Investor Class</label>
                </div>
                <div class="field-body">
                    <div class="field is-narrow">
                        <div class="control">
                            <div class="select is-fullwidth">
                                <select name="class">
                                <option>A</option>
                                <option>B</option>
                            </select>
                            </div>
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
                                <input class="input" name="salary" type="tel" placeholder="531999">
                            </p>
                        </div>
                        <p class="help"></p>
                    </div>
                </div>
            </div>

            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">SIN</label>
                </div>
                <div class="field-body">
                    <div class="field">
                        <div class="control">
                            <input class="input" name="SIN" type="text" placeholder="759 678 873">
                        </div>
                        <p class="help is-danger">
                            Don't mess this up
                        </p>
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
                                <span class="icon is-medium">
                                    <i class="fas fa-user-plus"></i>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
</div>
</div>

<script>
 
    function hideCrap2() {
        let x = document.getElementsByClassName("non-human");
        console.log(x);
    }


</script>
{{--
<div class="field is-horizontal">
    <div class="field-label is-normal">
        <label class="label">From</label>
    </div>
    <div class="field-body">
        <div class="field">
            <p class="control is-expanded has-icons-left">
                <input class="input" type="text" placeholder="Name">
                <span class="icon is-small is-left">
                <i class="fas fa-user"></i>
              </span>
            </p>
        </div>
        <div class="field">
            <p class="control is-expanded has-icons-left has-icons-right">
                <input class="input is-success" type="email" placeholder="Email" value="alex@smith.com">
                <span class="icon is-small is-left">
                <i class="fas fa-envelope"></i>
              </span>
                <span class="icon is-small is-right">
                <i class="fas fa-check"></i>
              </span>
            </p>
        </div>
    </div>
</div>

<div class="field is-horizontal">
    <div class="field-label"></div>
    <div class="field-body">
        <div class="field is-expanded">
            <div class="field has-addons">
                <p class="control">
                    <a class="button is-static">
                  CA$
                </a>
                </p>
                <p class="control is-expanded">
                    <input class="input" type="tel" placeholder="Your phone number">
                </p>
            </div>
            <p class="help">Do not enter the first zero</p>
        </div>
    </div>
</div>

<div class="field is-horizontal">
    <div class="field-label is-normal">
        <label class="label">Province</label>
    </div>
    <div class="field-body">
        <div class="field is-narrow">
            <div class="control">
                <div class="select is-fullwidth">
                    <select>
                    <option>Province</option>
                    <option>British Columbia</option>
                    <option>Manitoba</option>
                    <option>Nova Scotia</option>
                    <option>Alberta</option>
                    <option>Nunavut</option>
                    <option>Ontario</option>
                    <option>Yukon</option>
                </select>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="field is-horizontal">
    <div class="field-label">
        <label class="label">Already a member?</label>
    </div>
    <div class="field-body">
        <div class="field is-narrow">
            <div class="control">
                <label class="radio">
                <input type="radio" name="member">
                Yes
              </label>
                <label class="radio">
                <input type="radio" name="member">
                No
              </label>
            </div>
        </div>
    </div>
</div>

<div class="field is-horizontal">
    <div class="field-label is-normal">
        <label class="label">Subject</label>
    </div>
    <div class="field-body">
        <div class="field">
            <div class="control">
                <input class="input is-danger" type="text" placeholder="e.g. Partnership opportunity">
            </div>
            <p class="help is-danger">
                This field is required
            </p>
        </div>
    </div>
</div>

<div class="field is-horizontal">
    <div class="field-label is-normal">
        <label class="label">Question</label>
    </div>
    <div class="field-body">
        <div class="field">
            <div class="control">
                <textarea class="textarea" placeholder="Explain how we can help you"></textarea>
            </div>
        </div>
    </div>
</div>

<div class="field is-horizontal">
    <div class="field-label">
        <!-- Left empty for spacing -->
    </div>
    <div class="field-body">
        <div class="field">
            <div class="control">
                <button class="button is-primary">
                Send message
              </button>
            </div>
        </div>
    </div>
</div>


<section class="section make-small">
    <div class="field">
        <label class="label">
            Type of Investor
        </label>
        <div class="control">
            <label class="radio">
                <input type="radio" name="question">
                Individual
            </label>
            <label class="radio">
                <input type="radio" name="question">
                Non-Individual (Fund, Corp, etc)
            </label>
        </div>
    </div>

    <div class="field">
        <label class="label">Name of Subscriber (Individual or Entity)</label>
        <div class="control">
            <input class="input" type="text">
        </div>
    </div>

    <div class="field">
        <label class="label">Address</label>
        <div class="control">
            <input class="input" type="text" placeholder="Street Name">
        </div>
    </div>

    <div class="field is-grouped is-grouped-multiline">
        {{-- <label class="label">City</label> --}} {{--
        <div class="control is-expanded">
            <input class="input" type="text" placeholder="City" value="">
        </div>

        <div class="control">
            <input class="input" type="text" placeholder="Postal Code" value="">
        </div>

        <div class="control">
            <div class="select">
                <select>
                  <option>Province</option>
                  <option>British Columbia</option>
                  <option>Manitoba</option>
                  <option>Nova Scotia</option>
                  <option>Alberta</option>
                  <option>Nunavut</option>
                  <option>Ontario</option>
                  <option>Yukon</option>
                </select>
            </div>
        </div>
    </div>

    <div class="field">
        <label class="label">Phone</label>
        <div class="control">
            <input class="input" type="text" placeholder="">
        </div>
    </div>




    <div class="field is-grouped">
        <div class="control">
            <button class="button is-link">Submit</button>
        </div>
        <div class="control">
            <button class="button is-text">Cancel</button>
        </div>
    </div>
</section> --}}

<br>