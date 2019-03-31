<div class="container">
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
                                <input type="radio" name="member" onclick="individualOnly()">
                                Individual
                              </label>
                                <label class="radio">
                                <input type="radio" name="member" onclick="businessOnly()">
                                Non-Individual (Fund, Corp, etc.)
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
                                <input class="input " type="text" name="name">
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
                                    <input class="input" name="telephone" type="tel" placeholder="778-555-5555">
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
                                <input class="input " name="email" type="email">
                            </p>
                            <i><p class="help">City</p></i>
                        </div>
                        <div class="field is-narrow">
                            <div class="control">
                                <div class="select is-fullwidth">
                                    <select>
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
                                <input class="input " name="email" type="email">
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
                                <input class="input" name="address" type="tel">
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">Email </label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control">
                                <input class="input" name="email" type="email" placeholder="West 57th Street and, most likely, Henry Hudson Parkway, Manhattan, New New York, United States">
                            </div>
                        </div>
                    </div>
                </div>

            <fieldset disabled="disabled" id="people_fieldset">
                <div class="field is-horizontal" id="sin_num" style="margin-bottom: 4px;">
                    <div class="field-label is-normal">
                        <label class="label">Social Insurance Number</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control">
                                <input class="input" name="SIN" type="text" placeholder="759 678 873">
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>

            <fieldset disabled="disabled" id="business_fieldset">
                <div class="field is-horizontal" id="name_of_authorized_signatory">
                    <div class="field-label is-normal">
                        <label class="label">Name of Authorized Signatory</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                        <p class="control is-expanded has-icons-left">
                            <input class="input" type="text" placeholder="fname">
                            <span class="icon is-small is-left">
                            <i class="fas fa-user"></i>
                            </span>
                        </p>
                        </div>
                        <div class="field">
                        <p class="control is-expanded has-icons-left has-icons-right">
                            <input class="input" type="" placeholder="lname" value="">
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

                <div class="field is-horizontal" id="official_capacity_or_title_of_authorized_signatory">
                    <div class="field-label is-normal">
                        <label class="label">Official Capacity or Title of Authorized Signatory</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                        <p class="control is-expanded has-icons-left">
                            <input class="input" type="text" placeholder="">
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
                                <input class="input" name="SIN" type="text" placeholder="">
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
                                    <input class="input is-large" name="salary" type="tel" placeholder="531999">
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
                                <div class="content" style="margin-bottom: 10px;">
                                    <br>
                                    <label class="checkbox">
                                        <input type="checkbox">
                                        An individual whose net income before taxes exceeded $200,000 in each of the two most recent calendar years or whose net income before taxes combined with that of a spouse exceeded $300,000 in each of the two most recent calendar years and who, in either case, reasonably expects to exceed that net income level in the current calendar year;
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox">
                                        An individual, who, either alone or with a spouse, has net assets of at least $5,000,000
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox">
                                        An individual who, either alone or with a spouse, beneficially owns financial assets having an aggregate realizable value that, before taxes but net of any related liabilities, exceeds $1,000,000
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox">
                                        An individual who beneficially owns financial assets having an aggregate realizable value that, before taxes but net of any related liabilities, exceeds $5,000,000
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox">
                                        An individual registered under the securities legislation of a jurisdiction of Canada, as a representative of a person registered under the securities legislation of a jurisdiction of Canada as an adviser or dealer
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox">
                                        An individual formerly registered under the securities legislation of a jurisdiction of Canada, other than an individual formerly registered solely as a representative of a limited market dealer under one or both of the Securities Act (Ontario) or the Securities Act (Newfoundland and Labrador)
                                    </label>
                                </div>
                                <br>
                                <h4 class="title is-4">The Subscriber acknowledges that the Issuer is relying upon the Subscriber's disclosure herein. In the event the Subscriber's accredited investor status changes prior to the date on which a certificate representing any of the Units is issued, the Subscriber agrees to immediately notify the Issuer of such change.</h2>
                                <br>
                                <h5 class="subtitle is-5">Initial (put in the writing box afterwards)</h5>
                                <br><br>
    
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
    
                <div class="tile is-ancestor">
                    <div class="tile is-parent">
                        <div class="tile">
                            <article class="tile is-child box">
                                <section class="hero is-dark is-bold">
                                    <h1 class="title" style="text-align: center;">Acknowledgement</h1>
                                </section>
                                <p>The undersigned (the “Subscriber”) hereby acknowledges that the Issuer is undertaking an offering
                                    of Class A limited partnership units (“Class A Units”) and Class B limited partnership units
                                    (“Class B Units”) at the NAV per Class A Unit and the NAV per Class B unit; and hereby tenders
                                    to the Issuer this subscription offer which, upon acceptance by the Issuer, will constitute
                                    an agreement of the Subscriber to subscribe for, take up, purchase and pay for and, on the
                                    part of the Issuer, to issue and sell to the Subscriber the number of Units set out below
                                    on the terms and subject to the conditions set out in this Agreement.</p>
                                <br>
                                <h5 class="subtitle is-5">By signing here, you acknowledge that you have read and agree to the terms presented in the Subscription Agreement as outlined below<span class="has-text-danger">*</span></h5>
                                <br>
                                <h1>Put signature thing here</h1>
                                <div class="content">
                                    <ol class="is-upper-roman">
                                        <li> Interpretation</li>
                                        <ol class="is-lower-roman">
                                            <li>In this Agreement, unless the context otherwise requires:</li>
                                            <br> “1933 Act” means the United States Securities Act of 1933, as amended;
                                            <br><br> “Accredited Investor” has the same meaning ascribed to that term in NI 45-106;
                                            <br><br> “Acts” means the Securities Acts (together with the regulations and rules
                                            made thereunder and all policy statements, blanket orders, notices, directions and
                                            rulings issued or adopted by a Securities Commission, all as amended) of each province
                                            of Canada in which Units are sold;
                                            <br><br> “Affiliate” means:
                                            <br>
                                            <b>(1)</b> a corporation, partnership, trust or other entity controlling or under
                                            common control with the General Partner or a director or officer of the General Partner;
                                            or
                                            <b>(2)</b> a corporation, partnership, trust or other entity controlling or under
                                            common control with the General Partner or a director or officer of the General Partner;
                                            or
                                            <br><br> “Capital Contributions” has the meaning ascribed thereto in the Partnership
                                            Agreement; and herein refers to the Subscription Proceeds contributed by the Subscriber
                                            to the Issuer from time to time, including that amount contributed as of the time
                                            of subscription together with amounts contributed following the date of this Agreement,
                                            for the purposes set forth herein and to a maximum amount equal to the Subscriber’s
                                            Maximum Capital Contribution;
                                            <br><br> “Class A Limited Partners” means all the holders of Class A Units;
                                            <br><br> “Class A Units” mean class A units in the capital of the Issuer, having
                                            the rights and restrictions as set forth herein;
                                            <br><br> “Class B Limited Partners” means all the holders of Class B Units;
                                            <br><br> “Class B Units” mean class B units in the capital of the Issuer, having
                                            the rights and restrictions as set forth herein;
                                            <br><br> “Closing” means the day the Subscriber’s Units are issued to the Subscriber;
                                            <br><br> “Commissions” means the provincial securities commission or other regulatory
                                            authority in each province of Canada in which Units are sold;
                                            <br><br> “Expenses” means all expenses that the Partnership is obligated to pay or
                                            reimburse to the General Partner or for the General Partner to allocate under Section
                                            6.09 of the Partnership Agreement;
                                            <br><br> “GAAP” means generally accepted accounting principles, as applicable to
                                            the Issuer;
                                            <br><br> “General Partner” means Cypress Hills Finance Corp., the general partner
                                            of the Issuer;
                                            <br><br> “Limited Partner” means the Initial Limited Partner and each person who
                                            is subsequently accepted as a Limited Partner or who is accepted as a successor of
                                            any such person, registered as the holder of a Unit;
                                            <br><br> “Manager” means the company engaged by the General Partner to oversee the
                                            Issuer’s investment business;
                                            <br><br> “NAV” means the net asset value as calculated at the end of each calendar
                                            month using an appropriate accounting and valuation methodology as decided by the
                                            Manager.
                                            <br><br> “NI 45-106” means National Instrument 45-106, Prospectus Exemptions adopted
                                            by the Commissions;
                                            <br><br> “Offering” means the offering of the Units by the Issuer;
                                            <br><br> “Parties” or “Party” means the Subscriber, the Issuer or both, as the context
                                            requires;
                                            <br><br> “Partnership Agreement” means that agreement of limited partnership or amendment
                                            and restatement thereof among the General Partner, the initial Limited Partner thereto,
                                            and each person who subsequently becomes a Limited Partner of the Issuer; which agreement
                                            governs the business and affairs of the Issuer;
                                            <br><br> “Percentage Interest” means at any time, (i) for all classes of Units together
                                            the percentage that the Capital Contribution attributable to a particular class of
                                            Units is of the Capital Contribution attributable to all outstanding Units of the
                                            Issuer; and (ii) for each class of Units separately the the percentage that the Capital
                                            Contribution attributable to a Limited Partner is of the Capital Contribution attributable
                                            to all outstanding Units of that class held by all Limited Partners;
                                            <br><br> “Regulation S” means Regulation S promulgated under the 1933 Act;
                                            <br><br> “Subscriber” has the meaning ascribed to it on the cover page;
                                            <br><br> “Subscriber’s Maximum Capital Contribution” means the total Subscription
                                            Proceeds agreed to be paid by the Subscriber to the Issuer for the Units subscribed
                                            for hereunder, to be paid over time and from time to time, equal to the number of
                                            Units subscribed for hereunder multiplied by the NAV per Unit;
                                            <br><br> “Subscriber’s Units” means those Units which the Subscriber has agreed to
                                            purchase under this Agreement;
                                            <br><br> “Subscription Proceeds” means the total gross proceeds from the sale of
                                            Units under the Offering;
                                            <br><br> “United States” means the United States of America, its territories and
                                            possessions, any state of the United States and the District of Columbia;
                                            <br><br> “Units” mean (i) the Class A Units and Class B Units being sold under the
                                            Offering, or (ii) collectively all outstanding limited partnership units of the Issuer,
                                            of all classes, from time to time; as the context requires;
                                            <br><br> “U.S. Person” has the meaning ascribed to it in Regulation S. Without limiting
                                            the foregoing, but for greater clarity in this Agreement, a U.S. Person includes,
                                            subject to the exclusions set forth in Regulation S, (i) any natural person resident
                                            in the United States, (ii) any partnership or corporation organized or incorporated
                                            under the laws of the United States, (iii) any estate or trust of which any executor,
                                            administrator or trustee is a U.S. Person, (iv) any discretionary account or similar
                                            account (other than an estate or trust) held by a dealer or other fiduciary organized,
                                            incorporated, or (if an individual) resident in the United States, and (v) any partnership
                                            or corporation organized or incorporated under the laws of any non-U.S. jurisdiction
                                            which is formed by a U.S. Person principally for the purpose of investing in securities
                                            not registered under the 1933 Act.
    
                                            <br><br>
                                            <li>Time is of the essence of this Agreement and will be calculated in accordance with
                                                the provisions of the Interpretation Act (British Columbia).</li>
                                            <br><br>
                                            <li>This Agreement is to be read with all changes in gender or number as required by
                                                the context.</li>
                                            <br><br>
                                            <li>The headings in this Agreement are for convenience of reference only and do not affect
                                                the interpretation of this Agreement.</li>
                                            <br><br>
                                            <li>Unless otherwise indicated, all dollar amounts referred to in this Agreement are
                                                in lawful currency of Canada.</li>
                                            <br><br>
                                            <li>This Agreement is governed by, subject to and interpreted in accordance with the
                                                laws prevailing in the Province of British Columbia and the federal laws of Canada
                                                applicable therein, and the courts of the Province of British Columbia will have
                                                the exclusive jurisdiction over any dispute arising in connection with this Agreement.
                                            </li>
                                            <br><br>
                                        </ol>
                                        <li>THE SECURITIES</li>
                                        <br>
                                        <ol class="is-lower-roman">
                                            <li>The Subscription Proceeds from the sale of all Units will be used by the Issuer for
                                                the ownership and exploitation of goods and assets, the provision of services,
                                                and the making and holding of investments of every nature, type and kind, and
                                                all ancillary business activities related thereto, all to be carried on with
                                                a view to earning a profit. In particular, the Partnership will co-originate
                                                a managed portfolio of debt obligations backed by consumer and small and medium
                                                size business loans, receivables and leases and distressed consumer loans through
                                                a co-origination partnership with specialty lenders and originators including
                                                Affiliates. The Partnership’s Business may be conducted separately for each Class
                                                of Units, such that the returns of each Class reflect the performance of a discrete
                                                portfolio. 2.2 The Subscriber acknowledges that upon the purchase of Units, it
                                                will become a party to the Partnership Agreement and be bound by the terms thereof.
                                                2.3 The General Partner may retain from the Subscription Proceeds, or from net
                                                income earned by the Issuer, sufficient funds to pay for expected or actual Expenses.
                                            </li>
    
    
                                        </ol>
    
                                        <li>REPRESENTATIONS, WARRANTIES, COVENANTS AND ACKNOWLEDGEMENTS OF THE SUBSCRIBER</li>
                                        <ol class="is-lower-roman">
                                            <li>The Subscriber acknowledges, represents, warrants and covenants to and with the Issuer
                                                that, as at the date stated on the signature page above and at the Closing:</li>
                                            <br> &nbsp;
                                            <b>(a)</b> no prospectus has been filed by the Issuer with any of the Commissions
                                            in connection with the issuance of the Units, such issuance is exempted from the
                                            prospectus requirements of the Acts, and that: (i) the Subscriber is restricted from
                                            using most of the civil remedies available under the Acts; (ii) the Subscriber may
                                            not receive information that would otherwise be required to be provided to it under
                                            the Acts; and (iii) the Issuer is relieved from certain obligations that would otherwise
                                            apply under the Acts;
                                            <br> &nbsp;
                                            <b>(b)</b> the Subscriber confirms and acknowledges that:
                                            <br> &nbsp;&nbsp;&nbsp;&nbsp;(i) no securities commission or similar regulatory authority
                                            has reviewed or passed on the merits of the Units;
                                            <br> &nbsp;&nbsp;&nbsp;&nbsp;(ii) there is no government or other insurance covering
                                            the Units;
                                            <br> &nbsp;&nbsp;&nbsp;&nbsp;(iii) there are risks associated with purchase of the
                                            Units;
                                            <br> &nbsp;&nbsp;&nbsp;&nbsp;(iv) there are restrictions on the Subscriber’s ability
                                            to resell the Units and it is the responsibility of the Subscriber to find out what
                                            those restrictions are and to comply with them before selling them; and
                                            <br> &nbsp;&nbsp;&nbsp;&nbsp;(v) the Issuer has advised the Subscriber that the Issuer
                                            is relying on an exemption from the requirements to provide the Subscriber with a
                                            prospectus and to sell securities through a person registered to sell securities
                                            under the Acts and, as a consequence of acquiring Units pursuant to this exemption,
                                            certain protections, rights and remedies provided by the Acts, including statutory
                                            rights of rescission or damages, will not be available to the Subscriber;
                                            <br> &nbsp;
                                            <b>(c)</b> the Subscriber is purchasing the Subscriber’s Units as principal for its
                                            own account and not for the benefit of any other person or is deemed under the Acts
                                            to be purchasing the Subscriber’s Units as principal, and in either case is purchasing
                                            the Subscriber’s Units for investment only and not with a view to the resale or distribution
                                            of all or any of the Subscriber’s Units;
                                            <br> &nbsp;
                                            <b>(d)</b> the Subscriber certifies that it is resident in the jurisdiction(s) set
                                            out on the first page of this Agreement;
                                            <br> &nbsp;
                                            <b>(e)</b> the Subscriber is resident in Canada, and is acquiring Units pursuant
                                            to one of the following criteria:
                                            <br> &nbsp;&nbsp;&nbsp;&nbsp;(i) is not an individual and is purchasing sufficient
                                            Units so that the aggregate acquisition cost is not less than $150,000 and the Subscriber
                                            has not been created or used solely to purchase or hold the Units; or
                                            <br> &nbsp;&nbsp;&nbsp;&nbsp;(ii) is eligible to purchase under the accredited investor
                                            exemption pursuant to section 2.3 of NI 45-106 and has completed the Issuer’s accredited
                                            investor certificate attached hereto as Appendix I and, if applicable, the risk acknowledgement
                                            form (Form 45-106F9) attached hereto as Appendix IA;
                                            <br> &nbsp;
                                            <b>(f)</b> the Subscriber is not a “non-Canadian” within the meaning of the Investment
                                            Canada Act (Canada);
                                            <br> &nbsp;
                                            <b>(g)</b> the Subscriber knows the aims and objectives of the Issuer and has been
                                            advised of the nature of its activity;
                                            <br> &nbsp;
                                            <b>(h)</b> the Subscriber acknowledges and agrees that: (i) the offer to purchase
                                            the Subscriber’s Units was not made to the Subscriber when the Subscriber was in
                                            the United States, and at the time the Subscriber’s subscription for Units was delivered
                                            to the Issuer, the Subscriber was outside the United States; (ii) the Subscriber
                                            is not and will not be purchasing the Subscriber’s Units for the account or benefit
                                            of any U.S. Person or person in the United States; (iii) the current structure of
                                            this transaction and all transactions and activities contemplated hereunder is not
                                            a scheme to avoid the registration requirements of the 1933 Act; and (iv) the Subscriber
                                            has no intention to distribute either directly or indirectly any of the Units in
                                            the United States, except in compliance with the 1933 Act;
                                            <br> &nbsp;
                                            <b>(i)</b> no person has made to the Subscriber any written or oral representations:
                                            <br> &nbsp;&nbsp;&nbsp;&nbsp;(i) that any person will resell or repurchase any of
                                            the Units;
                                            <br> &nbsp;&nbsp;&nbsp;&nbsp;(ii) that any person will refund the purchase price
                                            of any of the Units;
                                            <br> &nbsp;&nbsp;&nbsp;&nbsp;(iii) as to the future price or value of any of the
                                            Units; or
                                            <br> &nbsp;&nbsp;&nbsp;&nbsp;(iv) that any of the Units will be listed and posted
                                            for trading on a stock exchange or that application has been made to list and post
                                            any of the Units for trading on a stock exchange;
                                            <br> &nbsp;
                                            <b>(j)</b> the offer made by this subscription is irrevocable and requires acceptance
                                            by the Issuer;
                                            <br> &nbsp;
                                            <b>(k)</b> the Issuer will have the right to accept this subscription offer in whole
                                            or in part and the acceptance of this subscription offer will be conditional upon
                                            the sale of Units to the Subscriber being exempt from the prospectus and registration
                                            requirements under applicable relevant securities legislation; if less than all of
                                            the subscription offer is accepted, the rejected portion of the Subscription Proceeds
                                            will be returned, without interest or deduction;
                                            <br> &nbsp;
                                            <b>(l)</b> the Subscriber has the legal capacity and competence to enter into and
                                            execute this Agreement and to take all actions required pursuant hereto and, if an
                                            individual is of full age of majority, and if the Subscriber is a corporation it
                                            is duly incorporated and validly subsisting under the laws of its jurisdiction of
                                            incorporation, and all necessary approvals by its directors, shareholders and others
                                            have been given to authorize the execution of this Agreement on behalf of the Subscriber;
                                            <br> &nbsp;
                                            <b>(m)</b> the entering into of this Agreement and the transactions contemplated
                                            hereby will not result in the violation of any of the terms and provisions of any
                                            law applicable to, or the constating documents of, the Subscriber or of any agreement,
                                            written or oral, to which the Subscriber may be a party or by which it is or may
                                            be bound;
                                            <br> &nbsp;
                                            <b>(n)</b> this Agreement has been duly executed and delivered by the Subscriber
                                            and constitutes a legal, valid and binding obligation of the Subscriber enforceable
                                            against the Subscriber, subject to applicable bankruptcy, insolvency, reorganization
                                            and other laws of general application limiting the enforcement of creditors’ rights
                                            generally and the fact that specific performance is an equitable remedy available
                                            in the discretion of a court;
                                            <br> &nbsp;
                                            <b>(o)</b> the Subscriber has been advised to consult its own legal advisors in connection
                                            with the execution, delivery and performance by it of this Agreement and the completion
                                            of the transactions contemplated hereby;
                                            <br> &nbsp;
                                            <b>(p)</b> the Subscriber has been advised to consult its own financial advisors
                                            and obtain income tax advice with respect to this subscription. No investment advice
                                            was sought by the Subscriber from the Issuer, nor was any such advice given by the
                                            Issuer or any of its officers, directors, agents or representatives;
                                            <br> &nbsp;
                                            <b>(q)</b> the Subscriber has such knowledge in financial and business affairs, or
                                            has consulted with its financial advisors, as to be capable of evaluating the merits
                                            and risks of its investment, and the Subscriber is able to bear the economic risk
                                            of loss of its investment;
                                            <br> &nbsp;
                                            <b>(r)</b> if required by applicable securities legislation, policy or order or by
                                            any Commission or other regulatory authority, the Subscriber will execute, deliver,
                                            file and otherwise assist the Issuer in filing, such reports, undertakings and other
                                            documents with respect to the issue of the Units as may be required;
                                            <br> &nbsp;
                                            <b>(s)</b> the Subscriber has not purchased Units as a result of any form of general
                                            solicitation or general advertising, including advertisements, articles, notices
                                            or other communication published in any newspaper, magazine or similar media or broadcast
                                            over radio, television or internet or any seminar or meeting whose attendees have
                                            been invited by general solicitation or general advertising;
                                            <br> &nbsp;
                                            <b>(t)</b> the Subscriber acknowledges that fees and commissions may be paid by the
                                            Issuer in connection with the purchase and sale of the Units, payable in cash (from
                                            the Subscription Proceeds) or securities of the Issuer;
                                            <br> &nbsp;
                                            <b>(u)</b> the Subscriber agrees that the above representations, warranties, covenants
                                            and acknowledgements in this subsection will be true and correct both as of the execution
                                            of this subsc5ription and as of the day of Closing.
                                            <br>
    
                                            <li>The Subscriber agrees that the Subscriber’s representations, warranties, covenants
                                                and acknowledgements made in this Agreement will be true and correct both as
                                                of the execution of this subscription and as of the Closing Date. The foregoing
                                                representations, warranties, covenants and acknowledgements will survive the
                                                Closing and are made by the Subscriber with the intent that they be relied upon
                                                by the Issuer in determining its suitability as a purchaser of Units, and the
                                                Subscriber agrees and covenants to indemnify the Issuer and its directors, officers,
                                                employees, agents, advisers and shareholders from and against all losses, claims,
                                                costs, expenses and damages or liabilities which they may suffer or incur as
                                                a result of reliance thereon. The Subscriber undertakes to notify the Issuer
                                                immediately of any change in any representation, warranty or other information
                                                relating to the Subscriber set forth herein which takes place prior to the Closing.
                                            </li>
                                        </ol>
                                        <br>
                                        <li>REPRESENTATIONS, WARRANTIES AND COVENANTS OF THE ISSUER</li>
                                        <ol class="is-lower-roman">
                                            <li>The Issuer represents, warrants and covenants that, as of the date given above and
                                                at the Closing:</li>
                                            <br>
                                            <b>(a)</b> the Issuer is a valid and subsisting limited partnership formed and in
                                            good standing under the laws of the Province of British Columbia;
                                            <br>
                                            <b>(b)</b> the Issuer has complied and will comply fully with the requirements of
                                            all applicable corporate and securities laws and administrative policies and directions,
                                            including, without limitation, the Acts and the Partnership Act (British Columbia)
                                            in relation to the issue and trading of its securities and in all matters relating
                                            to the Offering;
                                            <br>
                                            <b>(c)</b> there is not presently, and will not be until the closing of the Offering,
                                            any adverse material change, as defined in the Acts, relating to the Issuer or change
                                            in any material fact, as defined in the Acts, relating to any of the Units which
                                            has not been or will not be fully disclosed;
                                            <br>
                                            <b>(d)</b> the issue and sale of the Units by the Issuer does not and will not conflict
                                            with, and does not and will not result in a breach of, any of the terms of the Issuer’s
                                            constating documents or any agreement or instrument to which the Issuer is a party
                                            or by which it is bound;
                                            <br>
                                            <b>(e)</b> the Issuer is not a party to any actions, suits or proceedings which could
                                            materially affect its business or financial condition, and to the best of the Issuer’s
                                            knowledge no such actions, suits or proceedings are contemplated or have been threatened;
                                            <br>
                                            <b>(f)</b> this Agreement has been or will be by the Closing, duly authorized by
                                            all necessary corporate action on the part of the Issuer, and the Issuer has or will
                                            have by the Closing full corporate power and authority to undertake the Offering;
                                            <br>
                                            <b>(g)</b> the Issuer is not in default of any of the requirements of the Securities
                                            Act (British Columbia) or any of the administrative policies or notices of the applicable
                                            regulatory authorities;
                                            <br>
                                            <b>(h)</b> no order ceasing or suspending trading in securities of the Issuer nor
                                            prohibiting the sale of such securities has been issued to and is outstanding against
                                            the Issuer, the General Partner or its directors, officers or promoters or against
                                            any other companies that have common directors, officers or promoters and no investigations
                                            or proceedings for such purposes are pending or threatened;
                                            <br>
                                            <b>(i)</b> the Issuer will within the required time, file with the Commissions, any
                                            documents, reports and information, in the required form, required to be filed by
                                            applicable securities laws in connection with this offering, together with any applicable
                                            filing fees and other materials; and
                                            <br>
                                            <b>(j)</b> no person has any right, agreement or option, present or future, contingent
                                            or absolute, or any right capable of becoming such a right, agreement or option,
                                            for the issue or allotment of any unissued Units in the capital of the Issuer, or
                                            any other security convertible into or exchangeable for any such Units, or to require
                                            the Issuer to purchase, redeem or otherwise acquire any of the issued and outstanding
                                            Units in its capital.
                                            <br><br>
                                            <li>The representations and warranties contained in this section will survive the Closing
                                                for a period of one year.</li>
    
    
                                        </ol>
    
                                        <ol class="is-upper-roman">
                                            <br>
                                            <li>CLOSING</li>
                                            <ol class="is-lower-roman">
                                                <li>Closings will occur from time to time at the discretion of the General Partner;
                                                    provided that if a Closing does not occur on or before 30 days following
                                                    receipt by the Issuer of this Subscription, or such later date as agreed
                                                    to by the Issuer and the Subscriber, this Agreement will terminate and the
                                                    Subscription Proceeds will be returned to the Subscriber without interest
                                                    or deduction. If the Subscriber’s representations and warranties are not
                                                    true as of the Closing, or it fails to comply with its covenants through
                                                    to the Closing, the Issuer may reject this subscription, notwithstanding
                                                    any prior acceptance thereof, in which case such Subscriber’s subscription
                                                    proceeds will be returned without interest or deduction.</li>
                                                <br>
                                                <li>Upon execution of this Agreement, the Subscriber will deliver to the Issuer:
                                                    (a) this subscription form, duly executed; (b) a certified cheque, wire transfer
                                                    or bank draft for the total price of the Subscriber’s Units made payable
                                                    to the Issuer; and (c) such Appendices as are applicable to the Subscriber.</li>
                                                <br>
                                                <li>At Closing, the Issuer will hold on behalf of the Subscriber the certificates
                                                    representing the Subscriber’s Units, registered in the manner stipulated
                                                    by the Subscriber.</li>
    
                                            </ol>
                                        </ol>
    
                                        <br>
    
                                        <ol class="is-upper-roman">
                                            <li>RESALE RESTRICTIONS</li>
                                            <ol class="is-lower-roman">
                                                <li>The Subscriber understands and acknowledges that the Units will be subject to
                                                    resale restrictions under the Acts, expiring four months and a day from the
                                                    date the Issuer becomes a reporting issuer in any jurisdiction of Canada;
                                                    the terms of which will be endorsed on the certificates representing the
                                                    Units.</li>
                                                <br>
                                                <li>The Subscriber agrees to comply with such resale restrictions; and further acknowledges
                                                    that:</li>
                                                <br> &nbsp;&nbsp;&nbsp;&nbsp;(i) the Issuer is not a reporting issuer in any
                                                jurisdiction, and has no intention of becoming a reporting issuer;
                                                <br> &nbsp;&nbsp;&nbsp;&nbsp;(ii) the Subscriber has been advised to consult
                                                its own independent legal advisor with respect to the applicable resale restrictions;
                                                and
                                                <br> &nbsp;&nbsp;&nbsp;&nbsp;(iii) the Subscriber is solely responsible for complying
                                                with such restrictions and the Issuer is not responsible for ensuring compliance
                                                by the Subscriber with the applicable resale restrictions.
                                            </ol>
                                        </ol>
                                        <br><br>
                                        <ol class="is-upper-roman">
                                            <li>PROCEEDS OF CRIME (MONEY LAUNDERING) AND TERRORIST FINANCING ACT</li>
                                            <br>
                                            <ol class="is-lower-roman">
                                                <li>The Subscriber represents and warrants that the funds representing the Subscription
                                                    Price, which will be advanced by the Subscriber to the Issuer hereunder,
                                                    will not represent proceeds of crime for the purposes of the Proceeds of
                                                    Crime (Money Laundering) and Terrorist Financing Act (Canada) (the “PCMLTFA”)
                                                    and the Subscriber acknowledges that the Issuer may in the future be required
                                                    by law to disclose the Subscriber’s name and other information relating to
                                                    this Subscription Agreement and the Subscriber’s subscription hereunder,
                                                    on a confidential basis, pursuant to the PCMLTFA. To the best of its knowledge
                                                    (a) none of the subscription funds to be provided by the Subscriber (i) have
                                                    been or will be derived from or related to any activity that is deemed criminal
                                                    under the law of Canada, the United States, or any other jurisdiction, or
                                                    (ii) are being tendered on behalf of a person or entity who has not been
                                                    identified to the Subscriber, and (b) it shall promptly notify the Issuer
                                                    if the Subscriber discovers that any of such representations ceases to be
                                                    true, and to provide the Issuer with appropriate information in connection
                                                    therewith.</li>
                                                <br>
                                            </ol>
                                        </ol>
    
                                        <ol class="is-upper-roman">
                                            <li>POWER OF ATTORNEY</li>
                                            <br>
                                            <ol class="is-lower-roman">
                                                <li>Power of Attorney</li>
                                                <br> Each Subscriber irrevocably makes, constitutes and appoints the General
                                                Partner or its successors under the term of this Agreement, as his true and lawful
                                                attorney and agent (“Attorney”), with full power and authority in his name, place
                                                and stead for his use and benefit, to make, execute, swear to, acknowledge, deliver,
                                                record and file, on his behalf and on behalf of the Partnership, the following:
                                                <br> &nbsp;&nbsp;
                                                <b>(a)</b> execute (whether under seal or otherwise), swear to, acknowledge,
                                                deliver and record or file as and where required any and all of the following:
                                                <br> &nbsp;&nbsp;&nbsp;&nbsp;(i) this Agreement, the Certificate and any amendments
                                                to the Certificate required under the Act, and any other instrument required
                                                to form, qualify, continue and keep in good standing the Partnership as a limited
                                                partnership or otherwise to comply with the laws of any jurisdiction in which
                                                the Partnership may carry on business or own or have property in order to maintain
                                                the limited liability of the Limited Partners and to comply with the applicable
                                                laws of such jurisdiction;
                                                <br> &nbsp;&nbsp;&nbsp;&nbsp;(ii) any instruments, declarations and certificates,
                                                including amendments to the Certificate, necessary to reflect any amendment to
                                                this Agreement;
                                                <br> &nbsp;&nbsp;&nbsp;&nbsp;(iii) a certificate evidencing the termination of
                                                the Partnership and the other instruments or documents as may be deemed necessary
                                                or desirable by the General Partner upon the termination of the Business of the
                                                Partnership;
                                                <br> &nbsp;&nbsp;&nbsp;&nbsp;(iv) all conveyances, agreements and other instruments
                                                necessary or desirable to reflect the dissolution and termination of the Partnership
                                                including cancellation of any certificates or declarations and the execution
                                                of any elections under the Income Tax Act (Canada) as the same may be amended
                                                or re-enacted from time to time, and any analogous provincial legislation;
                                                <br> &nbsp;&nbsp;
                                                <b>(b)</b> execute, deliver and file with any governmental body or instrumentality
                                                thereof of the Government of Canada or a Province, any documents necessary to
                                                be filed with any governmental body, agency or authority in connection with the
                                                Business, property, assets and undertaking of the Partnership;
                                                <br> &nbsp;&nbsp;
                                                <b>(c)</b> execute, deliver and file any document on behalf of and in the name
                                                of the Partnership as may be necessary to give effect to the Business of the
                                                Partnership;
                                                <br> &nbsp;&nbsp;
                                                <b>(d)</b> execute and deliver transfer forms and such other documents and instruments
                                                on behalf of and in the name of the Limited Partner as may be necessary to give
                                                effect to the assignment, redemption or transfer of a Unit;
                                                <br> &nbsp;&nbsp;
                                                <b>(e)</b> execute, deliver and file all elections, determinations or designations
                                                under the Income Tax Act (Canada) or any other taxation or other legislation
                                                or laws of like import of Canada or of any provinces or any jurisdictions in
                                                respect of the affairs of the Partnership or of a Partner’s interest in the Partnership;
                                                <br> &nbsp;&nbsp;
                                                <b>(f)</b> execute and deliver all such other documents or instruments on behalf
                                                of and in the name of the Partnership and the Limited Partners or any of them
                                                as may be deemed necessary or desirable by the General Partner to carry out fully
                                                the provisions of a Subscription, this Agreement or any other material contract
                                                in accordance with its terms;
                                                <br> &nbsp;&nbsp;
                                                <b>(g)</b> amend this Agreement, and execute and deliver all such amendments,
                                                documents or instruments on behalf of and in the name of the Partnership and
                                                the Limited Partners as may be deemed necessary or desirable by the General Partner
                                                to amend this Agreement in accordance with its terms; and
                                                <br> &nbsp;&nbsp;
                                                <b>(h)</b> execute, deliver and file all such documents or instruments or behalf
                                                of and in the name of the Partnership and the Limited Partners or any of them
                                                as may be deemed necessary or desirable by the General Partner to dissolve, liquidate
                                                or terminate the Partnership as a limited partnership.
                                                <br><br> To evidence the foregoing, each Limited Partner, in executing a Subscription
                                                Form and/or a Transfer Form shall execute or confirm a Power of Attorney containing
                                                the powers set forth above.
                                                <br><br>
                                                <li>Irrevocability</li>
                                                <br><br> The grant of authority contained in Section 0 and the Power of Attorney:
                                                <br><br> &nbsp;&nbsp;
                                                <b>(a)</b> shall be coupled with an interest therein and shall be irrevocable
                                                and shall survive the death or incapacity of the Limited Partner granting the
                                                power;
                                                <br> &nbsp;&nbsp;
                                                <b>(b)</b> may be exercised by the General Partner on behalf of each Limited
                                                Partner executing any instrument with a single signature as attorney and agent
                                                for all of them;
                                                <br> &nbsp;&nbsp;
                                                <b>(c)</b> shall survive the delivery of an assignment by a Limited Partner of
                                                the whole or any portion of his Unit; and
                                                <br> &nbsp;&nbsp;
                                                <b>(d)</b> shall extend to and shall be binding upon the heirs, executors, administrators,
                                                legal personal representative, successors and assigns of a Limited Partner.
                                                <br><br> Each Limited Partner shall be bound by the Attorney when he is acting
                                                in good faith pursuant to the Power of Attorney and authority and each Limited
                                                Partner waives the defenses which may be available to him, to contest, negate
                                                or disaffirm the action of the Attorney taken in good faith in accordance with
                                                the terms of the Power of Attorney and authority.
                                            </ol>
                                        </ol>
                                        <ol class="is-upper-roman">
                                            <li>MISCELLANEOUS</li>
                                            <ol class="is-lower-roman">
                                                <br>
                                                <li>The Subscriber hereby authorizes the Issuer to correct any errors in, or complete
                                                    any minor information missing from this Agreement and any Appendix which
                                                    has been executed by the Subscriber and delivered to the Issuer.</li>
                                                <br>
                                                <li>The Subscriber agrees to be bound and governed by all the terms and conditions
                                                    contained in the Partnership Agreement, accepts the benefits contained therein,
                                                    and ratifies the Partnership Agreement.</li>
                                                <br>
                                                <li>This Agreement enures to the benefit of and is binding upon the Parties and,
                                                    as the case may be, their respective heirs, executors, administrators and,
                                                    successors.</li>
                                                <br>
                                                <li>A Party will give all notices or other written communications to the other Party
                                                    by hand, delivery, registered mail addressed to such other Party’s respective
                                                    address which is noted on the cover page of this Agreement, or by facsimile
                                                    transmission, electronic mail, or other similar form of electronic communication.</li>
                                                <li>This Agreement may be executed in counterparts, each of which when delivered
                                                    will be deemed to be an original and all of which together will constitute
                                                    one and the same document and the Issuer will be entitled to rely on delivery
                                                    by facsimile machine of an executed copy of this subscription, and acceptance
                                                    by the Issuer of such facsimile copy will be equally effective to create
                                                    a valid and binding agreement between the Subscriber and the Issuer as if
                                                    the Issuer had accepted the subscription originally executed by the Subscriber.</li>
                                                <br>
                                            </ol>
    
                                        </ol>
    
                                </div>
                            </article>
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
    
    <script defer>
        function individualOnly() {
            document.getElementById("business_fieldset").disabled = true;
            document.getElementById("people_fieldset").disabled = false;

        }

        function businessOnly() {
            document.getElementById("people_fieldset").disabled = true;
            document.getElementById("business_fieldset").disabled = false;

        }
    </script>