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
            <input class="input" type="text" placeholder="Jane Doe">
        </div>
    </div>

    <div class="field">
        <label class="label">Address</label>
        <div class="control">
            <input class="input" type="text" placeholder="">
        </div>
    </div>

    <div class="field is-grouped is-grouped-multiline">
        {{-- <label class="label">City</label> --}}
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

    <div class="field">
        <label class="label">Email</label>
        <div class="control has-icons-left has-icons-right">
            <input class="input" type="email" placeholder="Email input">
            <span class="icon is-small is-left">
            <i class="fas fa-envelope"></i>
          </span>
            <span class="icon is-small is-right">
            <i class="fas fa-exclamation-triangle"></i>
          </span>
        </div>
    </div>

    <div class="field">
        <label class="label">Subject</label>
        <div class="control">
            <div class="select">
                <select>
              <option>Select dropdown</option>
              <option>With options</option>
            </select>
            </div>
        </div>
    </div>

    <div class="field">
        <label class="label">Message</label>
        <div class="control">
            <textarea class="textarea" placeholder="Textarea"></textarea>
        </div>
    </div>

    <div class="field">
        <div class="control">
            <label class="checkbox">
            <input type="checkbox">
            I agree to the <a href="#">terms and conditions</a>
          </label>
        </div>
    </div>

    <div class="field">
        <div class="control">
            <label class="radio">
            <input type="radio" name="question">
            Yes
          </label>
            <label class="radio">
            <input type="radio" name="question">
            No
          </label>
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
</section>