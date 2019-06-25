<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">

<style type="text/css" media="all">

    * {
        box-sizing: border-box;
    }

    .black-border {
        border: 1.5px black solid;
        margin: 20px 40px 25px 40px;
        padding-top : 15px;
        padding-bottom : 15px;
    }

    .subscription-date {
        border: 1.5px black solid;
        margin: 20px 25px 25px 25px;
        padding-top : 15px;
        padding-bottom : 15px;
        text-align :center;
    }

    .column-row {
        margin-left : 18px;
        margin-bottom : 25px;
        margin-top : -35px;
    
    }

    .signinput {
        font-size:12px;
    }

    /* Create three equal columns that floats next to each other */
    .column {
    float: left;
    width: 50%;
    padding: 10px;
    height: 215px; /* Should be find better way */
    }

    /* Clear floats after the columns */
    .row-form:after {
    content: "";
    display: table;
    clear: both;
    }

    .row-form {
        position: relative;
        top: -15px;
    }

    .user-data {
        position: relative;
        left: 21px;
        top: 26px;
    }

    .indent {
        position: relative;
        left:30px;
    }

    /* .page-break {
        page-break-after: always;
    } */

    .darkenrow {
        background-color: darkgrey;
        color:white;
    }
        
    .signature-image{
        position: relative;
        top: 75px;
    }

    /* My turn! */
    .page-break {
        page-break-after: always;
    }
    .underline {
        border-bottom: 1px solid black;
    }

    /* td img { max-width: none; width: 100% } */
</style>

{{-- TODO: make .signinput into something more readable --}}
<div class="container">

    <section class="section">
        <div class="container has-text-black">
                <div class="has-text-centered">
                    <h5 class="title is-5 is-uppercase is-bold">These securities will not be registered under the United States Securities Act of 1933, as amended, and may not be resold in the United States or to a U.S. person</h5>
                    <br><br><br>
                    <h2 class="title is-2 has-text-success is-uppercase is-bold">CHP Master I <br> Limited Partnership</h2>
                    <br>
                    <br>
                    <h3 class="title is-3 is-uppercase">Subscription Agreement</h3>
                    <br>
                    <h4 class="title is-4 is-uppercase" style="text-decoration: underline;">Class A & B Units</h4>
                    <h6 class="title is-6 has-text-danger">(Canadian Investors)</h6>
                    <br><br><br>
                    <h5 class="title is-6 is-uppercase is-bold" style="text-decoration: underline;">Instructions</h5>
                </div>
                <br>
                <h6 class="title is-6">To All Subscribers: </h6>
                
                <div class="content">
                    <ol type="1">
                        <li>Complete and sign pages 1 and 2 of the Subscription Agreement.</li>
                        <li>Complete, date and sign the <span class="has-text-weight-bold">NI 45-106 Accredited Investor Certificate - Appendix I</span> and, if indicated in the category selected in Appendix I, the <span class="has-text-weight-bold">Form 45-106F9 for Individual Accredited Investorys (Risk Acknowledgement Form).</span></li>
                        <li>Return a completed Subscription Agreement, Appendix I, together with the subscription proceeds (by way of certified cheque, bank draft or wire transfer (see <span class="has-text-weight-bold">Appendix II</span> for the Partnership's wire transfer details).</li>
                    </ol>
                </div>

                
            {{-- new page --}}
            <div class="page-break"></div>
            <br><br>
            <div class="has-text-centered">
                <h4 class="title is-4 is-uppercase">Subscription Agreement</h4>
            </div>
            
            <p>To:&nbsp;&nbsp;&nbsp;<span class="has-text-weight-bold">CHP Master I Limited Partnership</span> (the "Issuer")</p>
            <p>The undersigned (the "Subscriber") hereby acknowledges that the Issuer is undertaking an offering of Class
                A limited partnership units ("Class A Units") and Class B limited partnership units ("Class B Units") at the
                NAV per Class A Unit and the NAV per Class B unit; and hereby tenders to the Issuer this subscription
                offer which, upon acceptance by the Issuer, will constitute an agreement of the Subscriber to subscribe for,
                take up, purchase and pay for and, on the part of the Issuer, to issue and sell to the Subscriber the number of 
                Units set out below on the terms and subject to the conditions set out in this Agreement.
            </p>
            @if($user[0]->clientType === 'individual')
                <div class="has-text-centered black-border">
                    <span class="">Class A Capital Contribution, at the NAV per unit</span> = $<u>{{ $user[0]->total_investment }}</u>
                </div>
            @elseif($user[0]->clientType === 'business')
                <div class="has-text-centered black-border">
                    <span class="has-text-weight-bold">Class B Capital Contribution, at the NAV per unit</span> = $<u>{{ $user[0]->total_investment }}</u>
                    <br>
                </div>
            @endif
            
            <div class="shrinker">
                <span class="has-text-weight-bold">DATED</span> <u>{{ $user[0]->signed_year1 }}</u>.
                <br><br><br>
                <div class="row-form">
                    <div class="column"> 
                        <div class="column-row">
                            <div class="underline">&nbsp;&nbsp;{{ $user[0]->subscriber_name }}</div>
                            <div><i class="signinput">(Name of Subscriber - please print)</i></div>
                        </div>
                        <br>
                        <div class="column-row">
                            <div class="underline">&nbsp;&nbsp;by:{{ $user[0]->official_capacity_or_title_of_authorized_signatory }}</div>
                            <div><i class="signinput">(Official Capacity or Title - please print)</i></div>
                        </div>
                        <br>
                        <div class="column-row">
                            <div class="underline">&nbsp;&nbsp;<img src="{{ $user[0]->sub_signature }}" alt="Form signature" height="50" width="87"></div>
                            <div><i class="signinput">Authorized Signature</i></div>
                        </div>
                        <br>
                        <div class="column-row">
                            <div class="underline">&nbsp;&nbsp;{{ $user[0]->name }}</div>
                            <div><i class="">Name</i></div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="column-row">
                            <div class="underline">&nbsp;&nbsp;{{ $user[0]->street }}</div>
                            <div><i class="signinput">Subscriber's Address</i></div>
                        </div>
                        <br>
                        <div class="column-row">        
                            <div class="underline">&nbsp;&nbsp;{{ $user[0]->email }}</div>
                            <div><i class="signinput">(Email)</i></div>
                        </div>
                        <br><br>
                        <div class="column-row">
                            <div class="underline">&nbsp;&nbsp; </div>
                            <div><i class="signinput">(Facsimile Number)</i></div>
                        </div>
                        <br>
                        <div class="column-row telephone">
                            <div class="underline">&nbsp;&nbsp;{{ $user[0]->phone }}</div>
                            <div><i class="signinput">Telephone</i></div>
                        </div>  
                    </div>
                </div>
            </div>

<br>
<style>
.shrinker {
    /* zoom: 0.3; */
    /* -moz-transform: scale(0.3);
    /* -moz-transform-origin: 0 0; */
    -webkit-transform: scale(0.9);
    -moz-transform: scale(0.9);
    -ms-transform: scale(0.9);
    transform: scale(0.9);
}
</style>

@if($user[0]->registration_name != '')
    <div class="row-form shrinker">
        <div class="column">
            <h3><u> Registration Instructions </u></h3>
            <br><br>
            <div class="column-row">
                <div class="underline">&nbsp;&nbsp;{{ $user[0]->registration_name }}</div>
                <div><i class="signinput">Name</i></div>
            </div>
            <br>
            <div class="column-row">
                <div class="underline">&nbsp;&nbsp;{{ $user[0]->registration_account_reference }} </div>
                
                <div><i class="signinput">Account reference, if applicable</i></div>
            </div>
            <br>
            <div class="column-row">
                <div class="underline">&nbsp;&nbsp;{{ $user[0]->registration_address }}</div>
                
                <div><i class="signinput">Address</i></div>
            </div>
        </div>
        <div class="column">
            <h3><u>Delivery Instructions</u></h3>
            <br><br>
            <div class="column-row">
                <div class="underline">&nbsp;&nbsp;{{ $user[0]->delivery_account_reference }}</div>     
                <div><i class="signinput">Account reference, if applicable</i></div>
            </div>
            <br>
            <div class="column-row">
                <div class="underline">&nbsp;&nbsp;{{ $user[0]->delivery_contact }}</div>
                <div><i class="signinput">Contact Name</i></div>
            </div>
            <br>
            <div class="column-row">
                <div class="underline">&nbsp;&nbsp;{{ $user[0]->delivery_address }}</div>
                <div><i class="signinput">Address</i></div>
            </div>
            <br>
            <div class="column-row">        
                <div class="underline">&nbsp;&nbsp;{{ $user[0]->delivery_telephone }}</div>
                <div><i class="signinput">Telephone Number</i></div>
            </div>
        </div>
    </div>
@endif
<br>
{{-- new page --}}
<div class="page-break"></div>
<div class="subscription-date">
    <p>This subscription is accepted by the Issuer this _______ day of ________________, 20__</p>
    <br>
    <p class="has-text-weight-bold">CHP Master I Limited Partnership</p>
    <br>
    <p>By its General Partner - Cypress Hills Finance Corp.:</p>
    
    <br><br>
    _______________________________________
    <br>
    <div><p class="is-italic is-size-7">Authorized Signature</p></div>
</div>

<br>
<br>
<!-- -->
<div class="content" style="overflow-y: scroll;">
        <ol type="1">
            <li><b>Interpretation</b></li>
            <ol class="is-upper-roman">
                <li>In this Agreement, unless the context otherwise requires:</li>
                <br> “<b>1933 Act</b>” means the United States <i>Securities Act of 1933</i>, as amended;
                <br><br> “<b>Accredited Investor</b>” has the same meaning ascribed to that term in NI 45-106;
                <br><br> “<b>Acts</b>” means the Securities Acts (together with the regulations and rules
                made thereunder and all policy statements, blanket orders, notices, directions and
                rulings issued or adopted by a Securities Commission, all as amended) of each province
                of Canada in which Units are sold;
                <br><br> “<b>Affiliate</b>” means:
                <br>
                <b>(1)</b> a corporation, partnership, trust or other entity controlling or under
                common control with the General Partner or a director or officer of the General Partner;
                or
                <b>(2)</b> a corporation, partnership, trust or other entity controlling or under
                common control with the General Partner or a director or officer of the General Partner;
                or
                <br><br> “<b>Capital Contributions</b>” has the meaning ascribed thereto in the Partnership
                Agreement; and herein refers to the Subscription Proceeds contributed by the Subscriber
                to the Issuer from time to time, including that amount contributed as of the time
                of subscription together with amounts contributed following the date of this Agreement,
                for the purposes set forth herein and to a maximum amount equal to the Subscriber’s
                Maximum Capital Contribution;
                <br><br> “<b>Class A Limited Partners</b>” means all the holders of Class A Units;
                <br><br> “<b>Class A Units</b>” mean class A units in the capital of the Issuer, having
                the rights and restrictions as set forth herein;
                <br><br> “<b>Class B Limited Partners</b>” means all the holders of Class B Units;
                <br><br> “<b>Class B Units</b>” mean class B units in the capital of the Issuer, having
                the rights and restrictions as set forth herein;
                <br><br> “<b>Closing</b>” means the day the Subscriber’s Units are issued to the Subscriber;
                <br><br> “<b>Commissions</b>” means the provincial securities commission or other regulatory
                authority in each province of Canada in which Units are sold;
                <br><br> “<b>Expenses</b>” means all expenses that the Partnership is obligated to pay or
                reimburse to the General Partner or for the General Partner to allocate under Section
                6.09 of the Partnership Agreement;
                <br><br> “<b>GAAP</b>” means generally accepted accounting principles, as applicable to
                the Issuer;
                <br><br> “<b>General Partner</b>” means Cypress Hills Finance Corp., the general partner
                of the Issuer;
                <br><br> “<b>Limited Partner</b>” means the Initial Limited Partner and each person who
                is subsequently accepted as a Limited Partner or who is accepted as a successor of
                any such person, registered as the holder of a Unit;
                <br><br> “<b>Manager</b>” means the company engaged by the General Partner to oversee the
                Issuer’s investment business;
                <br><br> “<b>NAV</b>” means the net asset value as calculated at the end of each calendar
                month using an appropriate accounting and valuation methodology as decided by the
                Manager.
                <br><br> “<b>NI 45-106</b>” means National Instrument 45-106, <i>Prospectus Exemptions</i> adopted
                by the Commissions;
                <br><br> “<b>Offering</b>” means the offering of the Units by the Issuer;
                <br><br> “<b>Parties</b>” or “<b>Party</b>” means the Subscriber, the Issuer or both, as the context
                requires;
                <br><br> “<b>Partnership Agreement</b>” means that agreement of limited partnership or amendment
                and restatement thereof among the General Partner, the initial Limited Partner thereto,
                and each person who subsequently becomes a Limited Partner of the Issuer; which agreement
                governs the business and affairs of the Issuer;
                <br><br> “<b>Percentage Interest</b>” means at any time, (i) for all classes of Units together
                the percentage that the Capital Contribution attributable to a particular class of
                Units is of the Capital Contribution attributable to all outstanding Units of the
                Issuer; and (ii) for each class of Units separately the the percentage that the Capital
                Contribution attributable to a Limited Partner is of the Capital Contribution attributable
                to all outstanding Units of that class held by all Limited Partners;
                <br><br> “<b>Regulation S</b>” means Regulation S promulgated under the 1933 Act;
                <br><br> “<b>Subscriber</b>” has the meaning ascribed to it on the cover page;
                <br><br> “<b>Subscriber’s Maximum Capital Contribution</b>” means the total Subscription
                Proceeds agreed to be paid by the Subscriber to the Issuer for the Units subscribed
                for hereunder, to be paid over time and from time to time, equal to the number of
                Units subscribed for hereunder multiplied by the NAV per Unit;
                <br><br> “<b>Subscriber’s Units</b>” means those Units which the Subscriber has agreed to
                purchase under this Agreement;
                <br><br> “<b>Subscription Proceeds</b>” means the total gross proceeds from the sale of
                Units under the Offering;
                <br><br> “<b>United States</b>” means the United States of America, its territories and
                possessions, any state of the United States and the District of Columbia;
                <br><br> “<b>Units</b>” mean (i) the Class A Units and Class B Units being sold under the
                Offering, or (ii) collectively all outstanding limited partnership units of the Issuer,
                of all classes, from time to time; as the context requires;
                <br><br> “<b>U.S. Person</b>” has the meaning ascribed to it in Regulation S. Without limiting
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
                    the provisions of the <i>Interpretation Act</i> (British Columbia).</li>
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
            <li><b>THE SECURITIES</b></li>
            <br>
            <ol class="is-upper-roman">
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

            <li><b>REPRESENTATIONS, WARRANTIES, COVENANTS AND ACKNOWLEDGEMENTS OF THE SUBSCRIBER</b></li>
            <ol class="is-upper-roman">
                <li>The Subscriber acknowledges, represents, warrants and covenants to and with the Issuer
                    that, as at the date stated on the signature page above and at the Closing:</li>
                <br> &nbsp;
                <b>(a)</b> no prospectus has been filed by the Issuer with any of the Commissions
                in connection with the issuance of the Units, such issuance is exempted from the
                prospectus requirements of the Acts, and that: 
                <br>&nbsp;&nbsp;&nbsp;&nbsp;(i) the Subscriber is restricted from
                using most of the civil remedies available under the Acts; 
                <br>&nbsp;&nbsp;&nbsp;&nbsp;(ii) the Subscriber may
                not receive information that would otherwise be required to be provided to it under
                the Acts; and 
                <br>&nbsp;&nbsp;&nbsp;&nbsp;(iii) the Issuer is relieved from certain obligations that would otherwise
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
                of this subscription and as of the day of Closing.
                <br>
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
            <li><b>REPRESENTATIONS, WARRANTIES AND COVENANTS OF THE ISSUER</b></li>
            <ol class="is-upper-roman">
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
            <br>
            <li><b>CLOSING</b></li>
            <ol class="is-upper-roman">
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
                    <br> &nbsp;&nbsp;&nbsp;&nbsp;(a) this subscription form, duly executed; 
                    <br> &nbsp;&nbsp;&nbsp;&nbsp;(b) a certified cheque, wire transfer
                    or bank draft for the total price of the Subscriber’s Units made payable
                    to the Issuer; and 
                    <br> &nbsp;&nbsp;&nbsp;&nbsp;(c) such Appendices as are applicable to the Subscriber.</li>
                <br>
                <li>At Closing, the Issuer will hold on behalf of the Subscriber the certificates
                    representing the Subscriber’s Units, registered in the manner stipulated
                    by the Subscriber.</li>
            </ol>

            <br>

            <li><b>RESALE RESTRICTIONS</b></li>
            <ol class="is-upper-roman">
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
            <br><br>

            <li><b>PROCEEDS OF CRIME (MONEY LAUNDERING) AND TERRORIST FINANCING ACT</b></li>
            <br>
            <ol class="is-upper-roman">
                <li>The Subscriber represents and warrants that the funds representing the Subscription
                    Price, which will be advanced by the Subscriber to the Issuer hereunder,
                    will not represent proceeds of crime for the purposes of the <i>Proceeds of
                    Crime (Money Laundering) and Terrorist Financing Act </i>(Canada) (the “PCMLTFA”)
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

            <li><b>POWER OF ATTORNEY</b></li>
            <br>
            <ol class="is-upper-roman">
                <li><b>Power of Attorney</b></li>
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
                <li><b>Irrevocability</b></li>
                <br> The grant of authority contained in Section 0 and the Power of Attorney:
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
            <br>
            <li><b>MISCELLANEOUS</b></li>
            <ol class="is-upper-roman">
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
        </div>
        <!-- Appendix -->

        <div class="content">
                <div class="has-text-centered">
                    <h3 class="is-uppercase has-text-weight-bold title">Appendix I</h3>
                    <br>    
                    <h2 class="is-uppercase has-text-weight-bold has-text-link is-3">ACCREDITED INVESTOR CERTIFICATE</h2>
                    <h6 class="title is-6">(National Instrument 45-106 and Securities Act(Ontario))</h6>
                </div>
                Capitalized terms not specifically defined in this certificate have the meaning ascribed to them in the Agreement to which this certificate is attached.
                <br>
                In connection with the execution of the Agreement to which this appendix is attached, the Subscriber represents, warrants and certifies to the Issuer that <span class="has-text-weight-bold">(please initial the applicable categories)</span> the Subscriber is:
                <br><br>



                @if($user[0]->clientType === 'individual')
                    <span class="has-text-weight-bold">(Categories Applicable to Individuals Only)</span>
                    <br>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>a)</td>
                                <td>
                                    @if($user[0]->ind_ck1 == 1)
                                    {{-- <div class="">&nbsp;&nbsp;<img src="{{ $user[0]->form_signature }}" alt="Form signature" style="max-width:none;"></div> --}}
                                    <div style="background-image: url({{ $user[0]->form_signature }});background-size='500px 500px;'"></div>
                                    @endif
                                </td>
                                <td>an individual whose net income before taxes exceeded $200,000 in each of the two most recent calendar years or whose net income before taxes combined with that of a spouse exceeded $300,000 in each of the two most recent calendar years and who, in either case, reasonably expects to exceed that net income level in the current calendar year. <span class="has-text-weight-bold">[Note: subscribers who qualify under this category must also complete Appendix IA.]</span></td>
                            </tr>
                            
                            <tr>
                                <td>b)</td>
                                <td>
                                    @if($user[0]->ind_ck1 == 1)
                                    <div class="">&nbsp;&nbsp;<img src="{{ $user[0]->form_signature }}" alt="Form signature"></div>
                                    @endif
                                </td>
                                <td>an individual, who, either alone or with a spouse, has net assets of at least $5,000,000. <span class="has-text-weight-bold">[Note: subscribers who qualify under this category must also complete Appendix IA.]</span></td>
                            </tr>

                            <tr>
                                <td>c)</td>
                                <td>
                                    @if ($user[0]->ind_ck3 == 1)
                                    <div class="">&nbsp;&nbsp;<img src="{{ $user[0]->form_signature }}" alt="Form signature" height="100" width="150"></div>
                                    @endif
                                </td>
                                <td>an individual who, either alone or with a spouse, beneficially owns financial assets having an aggregate realizable value that, before taxes but net of any related liabilities, exceeds $1,000,000. <span class="has-text-weight-bold">[Note: subscribers who qualify under this category must also complete Appendix IA.]</span></td>
                            </tr>

                            <tr>
                                <td>d)</td>
                                <td>
                                    @if($user[0]->ind_ck4 == 1)
                                    <div class="">&nbsp;&nbsp;<img src="{{ $user[0]->form_signature }}" alt="Form signature" height="100" width="150"></div>
                                    @endif
                                </td>
                                <td>an individual who beneficially owns financial assets having an aggregate realizable value that, before taxes but net of any related liabilities, exceeds $5,000,000.</td>
                            </tr>

                            <tr>
                                <td>e)</td>
                                <td>
                                    @if($user[0]->ind_ck5 == 1)
                                    <div class="">&nbsp;&nbsp;<img src="{{ $user[0]->form_signature }}" alt="Form signature" height="100" width="150"></div>
                                    @endif
                                </td>
                                <td>an individual registered under the securities legislation of a jurisdiction of Canada, as a representative of a person registered under the securities legislation of a jurisdiction of Canada as an adviser or dealer.</td>
                            </tr>

                            <tr>
                                <td>f)</td>
                                <td>
                                    @if($user[0]->ind_ck6 == 1)
                                    <div class="">&nbsp;&nbsp;<img src="{{ $user[0]->form_signature }}" alt="Form signature" height="100" width="150"></div>
                                    @endif
                                </td>
                                <td>an individual formerly registered under the securities legislation of a jurisdiction of Canada, other than an individual formerly registered solely as a representative of a limited market dealer under one or both of the Securities Act (Ontario) or the Securities Act (Newfoundland and Labrador),</td>
                            </tr>
                        </tbody>
                    </table>

                @elseif($user[0]->clientType === 'business')
                    <span class="has-text-weight-bold">(Categories Applicable to Individuals and Non-Individuals)</span>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>a)</td>
                                <td>
                                    @if($user[0]->bus_ck1 == 1)
                                    <div class="">&nbsp;&nbsp;<img src="{{ $user[0]->form_signature }}" alt="Form signature" height="100" width="150"></div>
                                    @endif
                                </td>
                                <td>except in Ontario, a Person registered under the securities legislation of a jurisdiction of Canada as an adviser or dealer.</td>
                            </tr>
                            
                            <tr>
                                <td>b)</td>
                                <td>
                                    @if($user[0]->bus_ck2 == 1)
                                    <div class="">&nbsp;&nbsp;<img src="{{ $user[0]->form_signature }}" alt="Form signature" height="100" width="150"></div>
                                    @endif
                                </td>                            
                                <td>except in Ontario, a pension fund that is regulated by either the Office of the Superintendent of Financial Institutions (Canada) or a pension commission or similar regulatory authority of a jurisdiction of Canada.</td>
                            </tr>

                            <tr>
                                <td>c)</td>
                                <td>                            
                                    @if($user[0]->bus_ck3 == 1)
                                    <div class="">&nbsp;&nbsp;<img src="{{ $user[0]->form_signature }}" alt="Form signature" height="100" width="150"></div>
                                    @endif
                                </td>
                                <td>a Person, other than an individual or investment fund, that has net assets of at least $5,000,000 as shown on its most recently prepared financial statements.</td>
                            </tr>

                            <tr>
                                <td>d)</td>
                                <td>
                                    @if($user[0]->bus_ck4 == 1)
                                    <div class="">&nbsp;&nbsp;<img src="{{ $user[0]->form_signature }}" alt="Form signature" height="100" width="150"></div>
                                    @endif
                                </td>
                                <td>an investment fund that distributes or has distributed securities under a prospectus in a jurisdiction of Canada for which the regulator or, in Québec, the securities regulatory authority, has issued a receipt.</td>
                            </tr>

                            <tr>
                                <td>e)</td>
                                <td>
                                    @if($user[0]->bus_ck5 == 1)
                                    <div class="">&nbsp;&nbsp;<img src="{{ $user[0]->form_signature }}" alt="Form signature" height="100" width="150"></div>
                                    @endif
                                </td>
                                <td>a person acting on behalf of a fully managed account managed by that person if that person is registered or authorized to carry on business as an adviser or the equivalent under the securities legislation of a jurisdiction of Canada or a foreign jurisdiction.</td>
                            </tr>

                            <tr>
                                <td>f)</td>
                                <td>
                                    @if($user[0]->bus_ck6 == 1)
                                    <div class="">&nbsp;&nbsp;<img src="{{ $user[0]->form_signature }}" alt="Form signature" height="100" width="150"></div>
                                    @endif
                                </td>
                                <td>a registered charity under the Income Tax Act (Canada) that, in regard to the trade, has obtained advice from an eligibility adviser or an adviser registered under the securities legislation of the jurisdiction of the registered charity to provide advice on the securities being traded.</td>
                            </tr>

                            <tr>
                                <td>g)</td>
                                <td>
                                    @if($user[0]->bus_ck7 == 1)
                                    <div class="">&nbsp;&nbsp;<img src="{{ $user[0]->form_signature }}" alt="Form signature" height="100" width="150"></div>
                                    @endif
                                </td>
                                <td>a person in respect of which all of the owners of interests, direct, indirect, or beneficial, except the voting securities required by law to be owned by directors, are persons that are accredited investors.</td>
                            </tr>

                            <tr>
                                <td>h)</td>
                                <td>
                                    @if($user[0]->bus_ck8 == 1)
                                    <div class="">&nbsp;&nbsp;<img src="{{ $user[0]->form_signature }}" alt="Form signature" height="100" width="150"></div>
                                    @endif
                                </td>
                                <td>an investment fund that is advised by a person registered as an adviser or a person that is exempt from registration as an adviser.</td>
                            </tr>

                            <tr>
                                <td>i)</td>
                                <td>
                                    @if($user[0]->bus_ck9 == 1)
                                    <div class="">&nbsp;&nbsp;<img src="{{ $user[0]->form_signature }}" alt="Form signature" height="100" width="150"></div>
                                    @endif
                                </td>
                                <td>a person that is recognized or designated by the securities regulatory authority or, except in Ontario and Québec, the regulator as an accredited investor.</td>
                            </tr>

                            <tr>
                                <td>j)</td>
                                <td>
                                    @if($user[0]->bus_ck10 == 1)
                                    <div class="">&nbsp;&nbsp;<img src="{{ $user[0]->form_signature }}" alt="Form signature" height="100" width="150"></div>
                                    @endif
                                </td>
                                <td>a trust established by an accredited investor for the benefit of the accredited investor’s family members of which a majority of the trustees are accredited investors and all of the beneficiaries are the accredited investor’s spouse, a former spouse of the accredited investor or a parent, grandparent, brother, sister, child or grandchild of that accredited investor, of that accredited investor’s spouse or of that accredited investor’s former spouse.</td>
                            </tr>
                        </tbody>
                    </table>
                @endif
<br>
            <p class="is-uppercase">Definitions</p>
            For the purposes of this certificate, the following definitions apply: <br>

            <div class="indent">
            <span class="has-text-weight-bold">“financial assets”</span> means cash, securities, or a contract of insurance, a deposit or an evidence of a deposit that is not a security for the purposes of securities legislation;
            </div><br>

            <div class="indent">
            <span class="has-text-weight-bold">"investment fund”</span> has the same meaning as in National Instrument 81-106;
            </div><br>

            <div class="indent">
            <span class="has-text-weight-bold">“person”</span> includes (i) an individual (ii) a corporation (iii) a partnership, trust, fund, association, syndicate, organization or other organized group of persons, whether incorporated or not, and (iv) an individual or other person in that person’s capacity as a trustee, executor, administrator or personal or other legal representative;

            </div>
            <div class="indent">
            <span class="has-text-weight-bold">“related liabilities”</span> means (i) liabilities incurred or assumed for the purpose of financing the acquisition or ownership of financial assets, or (ii) liabilities that are secured by financial assets;
            </div>
<br>
The Subscriber acknowledges that the Issuer is relying upon the Subscriber's disclosure herein. In the event the Subscriber's accredited investor status changes prior to the date on which a certificate representing any of the Units is issued, the Subscriber agrees to immediately notify the Issuer of such change.
<br>
<br>

    <span class="is-uppercase has-text-weight-bold">IN WITNESS WHEREOF</span>, the undersigned has executed this certificate as of <u>{{ $user[0]->signed_year1 }}</u>
</div>


<span class="has-text-weight-bold">DATED</span> <u>{{ $user[0]->signed_year1 }}</u>.
<br><br><br>
@if($user[0]->clientType == 'business')
<div class="row-form">
    <div class="column">
        <b> If a Corporation, Partnership or Other Entity: </b> 
        <br><br>
            <div class="column-row">
                <br>
                <div class="underline">&nbsp;&nbsp;{{ $user[0]->subscriber_name }} </div>
                <div><i class="signinput">Name of Entity</i></div>
            </div>
            <br>
            <div class="column-row">
                <div class="underline">&nbsp;&nbsp;{{ $user[0]->clientType }} </div>
                <div><i class="signinput">Type of Entity</i></div>
            </div>
            <br><br>
            
            <div class="column-row">
                <br>
                <div class="underline">&nbsp;&nbsp;<img src="{{ $user[0]->sub_signature }}" alt="Sub signature" height="60" width="90"> </div>
                <div><i class="signinput">Signature of Person Signing</i></div>
            </div>
            <br>
    
    </div>
        <div class="column">
            <b>If an Individual </b>
                <br><br>
              
                <div class="column-row">
                <div class="underline">&nbsp;&nbsp;<div>
                <div><i class="signinput">Signature</i></div>
              </div>
      
              <br>
              <div class="column-row">
                  <div class="underline">&nbsp;&nbsp;</div>
                  <div><i class="signinput">Print or Type Name</i></div>
              </div>
              <br>
            </div>
    </div>

@else
    <div class="row-form">
        <div class="column">
            <b> If a Corporation, Partnership or Other Entity: </b> 
            <br><br>
            <div class="column-row">
                <br>
                <div class="underline">&nbsp;&nbsp;</div>
                <div><i class="signinput">Name of Entity</i></div>
            </div>
            <br>
            <div class="column-row">
                <div class="underline">&nbsp;&nbsp;</div>
                <div><i class="signinput">Type of Entity</i></div>
            </div>
            <br>
            <div class="column-row">
                <div class="underline">&nbsp;&nbsp;</div>
                <div><i class="signinput">Signature of Person Signing</i></div>
            </div>
        </div>
        <div class="column">
            <b>If an Individual </b>
            <br><br>
            <div class="column-row">
                <br>
                <div class="underline">&nbsp;&nbsp;<img src="{{$user[0]->sub_signature}}" alt="Sub signature" height="30" width="90"></div>
                <div><i class="signinput">Signature</i></div>
            </div>
            <br>
            <div class="column-row">
                <div class="underline">&nbsp;&nbsp;{{$user[0]->name}} </div>
                <div><i class="signinput">Print or Type Name</i></div>
            </div>
        </div>
    </div>

@endif


<div class="page-break"></div>

<div class="has-text-centered">
        <p class="title is-3 is-spaced">Appendix IA</p>
        <p class="subtitle is-5">Form 45-106F9</p>
    
        <br>
        <h4 class="subtitle is-4">FORM FOR INDIVIDUAL ACCREDITED INVESTORS</h4>
        <br>
        <h5 class="subtitle is-5 has-text-weight-bold">WARNING!</h5>
        <h6 class="subtitle is-6 has-text-weight-bold">This investment is risky. Don't invest unless you can afford to lose all the money you pay for this investment</h6>            
</div>

<div class="content">
    <div>   
        <span class="has-text-weight-bold">SECTION 1 TO BE COMPLETED BY THE ISSUER OR SELLING SECURITY HOLDER</span>     
                <table class="table is-bordered">
                    
                        <tr class="darkenrow">
                            <td><span class="has-text-weight-bold">1. About your investment</span></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Type of securities: <span class="has-text-weight-bold">Class A and B Limited Partnership Units</span></td>
                            <td>Issuer: <span class="has-text-weight-bold">CHP Master I Limited Partnership</span></td>
                        </tr>
                        <tr class="darkenrow">
                            <td><span class="has-text-weight-bold">Purchased from: The Issuer</span></td>
                            <td></td>
                        </tr>
                         <tr>
                            <td>SECTIONS 2 TO 4 TO BE COMPLETED BY THE PURCHASER</td>
                            <td></td>
                        </tr>
                        <tr class="darkenrow">
                           <td>
                               <div class="">
                                    <span class="has-text-weight-bold">2. Risk acknowledgement</span>
                                </div>
                            </td>

                            <td></td>
                        </tr>
                        <tr>
                            <td>This is risky. Initial that you understand that: </td>
                            <td><span class="has-text-weight-bold">Your initials</span></td>
                        </tr>
                        <tr>
                            <td><span class="has-text-weight-bold">Risk of loss</span> - You could lose your entire investment of {{ $user[0]->total_investment }} </td>
                            <td>
                                @if($user[0]->ind_ck1 == 1)
                                <div class="">&nbsp;&nbsp;<img src="{{ $user[0]->form_signature }}" alt="Form signature" height="auto" min-width="150"></div>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td><span class="has-text-weight-bold">Liquidity risk</span> – You may not be able to sell your investment quickly – or at all.</td>
                            <td>
                                @if($user[0]->ind_ck1 == 1)
                                <div class="">&nbsp;&nbsp;<img src="{{ $user[0]->form_signature }}" alt="Form signature" height="100" width="150"></div>
                                @endif
                            </td>
                        </tr>   
                        <tr>
                            <td><span class="has-text-weight-bold">Lack of information</span> – You may receive little or no information about your investment.</td>
                            <td>
                                @if($user[0]->ind_ck1 == 1)
                                <div class="">&nbsp;&nbsp;<img src="{{ $user[0]->form_signature }}" alt="Form signature" height="100" width="150"></div>
                                @endif
                            </td>
                       </tr>
                        <tr>
                            <td><span class="has-text-weight-bold">Lack of advice</span> – You will not receive advice from the salesperson about whether this investment is suitable for you unless the salesperson is registered. The salesperson is the person who meets with, or provides information to, you about making this investment. To check whether the salesperson is registered, go to www.aretheyregistered.ca.</td>
                            <td>
                                @if($user[0]->ind_ck1 == 1)
                                <div class="">&nbsp;&nbsp;<img src="{{ $user[0]->form_signature }}" alt="Form signature" height="10" width="10"></div>
                                @endif
                            </td>
                        </tr>
                        <tr class="darkenrow">
                            <td><div class="">
                                <span class="has-text-weight-bold">3. Accredited investor status</span>
                            </div></td>
                            <td><span class="has-text-weight-bold">Your initials</span></td>
                        </tr>
                        <tr>
                            <td> - Your net income before taxes was more than $200,000 in each of the 2 most recent calendar years, and you expect it to be more than $200,000 in the current calendar year. (You can find your net income before taxes on your personal income tax return.)</td>
                            {{-- <td>{{$user[0]->risk_ck5}}</td> --}}
                        </tr>
                        
                        <tr>
                            <td> - Your net income before taxes combined with your spouse’s was more than $300,000 in each of the 2 most recent calendar years, and you expect your combined net income before taxes to be more than $300,000 in the current calendar year.</td>
                             {{-- <td>{{$user[0]->risk_ck6}}</td> --}}
                        </tr>
                            
                        <tr>
                            <td> - Either alone or with your spouse, you own more than $1 million in cash and securities, after subtracting any debt related to the cash and securities.</td>
                            {{-- <td>{{$user[0]->risk_ck7}}</td> --}}
                        </tr>
                        <tr>
                             <td> - Either alone or with your spouse, you have net assets worth more than $5 million. (Your net assets are your total assets (including real estate) minus your total debt.)</td>
                             {{-- <td>{{$user[0]->risk_chk8}}</td> --}}
                        </tr>
                            
                        <tr class="darkenrow">
                             <td>
                                  <div class="">
                                    <span class="has-text-weight-bold">4. Your name and signature</span>
                                 </div>
                             </td>
                             <td></td>
                        </tr>
                
                        <tr>
                             <td>By signing this form, you confirm that you have read this form and you understand the risks of making this investment as identified in this form.</td>
                             <td>First and last name: {{ $user[0]->subscriber_name }}</td>
                        </tr>
                        <tr>
                              <td>
                                   Signature: <img src="{{$user[0]->sub_signature}}" alt="Sub signature" height="50" width="80"> 
                               </td>
                               <td>
                                    Date: {{ $user[0]->signed_year1 }}
                                </td>
                        </tr>
            
                    </tbody>
            
                </table>
            </div>
            <br>

            <div class="has-background-white-bis">
                <p class="has-text-weight-bold">For more information about this investment</p>
                <br>
                CHP Master I Limited Partnership <br>
                409 - 1080 Mainland St., Vancouver, BC. V6B 2T4 Attention: Kelly Klatik <br>
                (604) 687-0755 <br> 
                kelly@klatik.com <br>
                <br>
                <h6 class="subtitle is-6">For more information about prospectus exemptions, contact your local securities regulator. You can find contact information at www.securities-administrators.ca.</h6>
            </div>
        </div>
        <br>

        <div class="page-break"></div>
        <br>
        <p class="has-text-weight-bold">Form instructions:</p>
        <p>1. This form does not mandate the use of a specific font size or style but the font must be legible.</p>
        <p>2. The information in sections 1, 5 and 6 must be completed before the purchaser completes and signs the form.</p>
        <p>3. The purchaser must sign this form. Each of the purchaser and the issuer or selling security holder must receive a copy of this form signed by the purchaser. The issuer or selling security holder is required to keep a copy of this form for 8 years after the distribution.</p>

        <div class="page-break"></div>
        <br><br><br>
        <div class="has-text-centered">
            <h3 class="subtitle is-3">APPENDIX II</h3>
            <br>
            <h3 class="subtitle is-3">BANK WIRE TRANSFER INSTRUCTIONS</h3>
        </div>

        <br>
        <h4 class="subtitle is-4">For Canadian Funds:</h3>
        <p>Bank Address:</p>
        <p>Bank of Montreal</p>
        <p>595 Burrard Street</p>
        <p>Vancouver, B.C. V7X 1L7</p>
        <p>Transit #: 00040</p>
        <p>Institution #: 001</p>
        <p>Account #: 1883997 - CDN</p>
        
        <br>

        <p class="has-text-weight-bold">Account Name: Cypress Hills Finance Corp.</p>
        <p>Swiftcode: BOFMCAM2</p>

        <br>

        <p class="has-text-weight-bold">Beneficiary Address:</p>
        <p>212 – 1080 Mainland Street,</p>
        <p>Vancouver, BC</p>
        <p>V6B 2T4</p>

        <br>

        <p>Reference: <span class="has-text-danger">CHP Master I Limited Partnership</span> </p>




        </section>
    </div>