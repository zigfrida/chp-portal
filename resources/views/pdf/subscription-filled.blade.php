<?php
    $user = DB::table('form_users')->where('user_id', 2)->get();
    
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">

    
<link href="{{ URL::asset('css/subfilled.css') }}" rel="stylesheet" type="text/css" >
    

    
<div class="container">
        {{-- <div lass="container greeting_msg" style="width: 70%" id="greeting_msg">
            <div class="box has-background-white-bis has-text-centered">
                <h3 class="subtitle is-3">You're almost there!</h3>
                <p class="subtitle is-5">These are the final set of forms. Please read them carefully!</p>
                <p><i>The 'Registration' & 'Delivery Instructions' sections are <strong>optional!</strong></i> Please contact CHP if you are unclear as to whether it should be filled out.</p>
            </div>
        </div> --}}
        <section class="section">
            <div class="container has-background-white-bis">
                <div class="has-text-centered">

                
                    <h5 class="title is-5 is-uppercase is-bold">These securities will not be registered under the United States Securities Act of 1933, as amended, and may not be resold in the United States or to a U.S. person</h5>
                    <br><br><br>
                    <h2 class="title is-2 has-text-success is-uppercase is-bold">CHP Master I <br> Limited Partnership</h2>
                    <br>
                    <h3 class="title is-3 is-uppercase">Subscription Agreement</h3>
                    <br>
                    <h4 class="title is-4 is-uppercase" style="text-decoration: underline;">Class A & B Units</h4>
                    <h6 class="title is-6 has-text-danger">(Canadian Investors)</h6>
                    <br><br><br>
                    <h5 class="title is-6 is-uppercase is-bold" style="text-decoration: underline;">Instructions</h5>
                </div>
                <br>
                <h6 class="title is-6">To All Subscribers:</h6>
                <div class="content">
                    <ol type="1">
                        <li>Complete and sign pages 1 and 2 of the Subscription Agreement.</li>
                        <li>Complete, date and sign the <span class="has-text-weight-bold">NI 45-106 Accredited Investor Certificate - Appendix I</span> and, if indicated in the category selected in Appendix I, the <span class="has-text-weight-bold">Form 45-106F9 for Individual Accredited Investorys (Risk Acknowledgement Form).</span></li>
                        <li>Return a completed Subscription Agreement, Appendix I, together with the subscription proceeds (by way of certified cheque, bank draft or wire transfer (see <span class="has-text-weight-bold">Appendix II</span> for the Partnership's wire transfer details).</li>
                    </ol>
                </div>
    
            {{-- new page --}}
    
                <br><br>
                <br><br>
                <br><br>
                <br><br>
                <br><br>
                <br><br>
                <hr>
    
                <div class="has-text-centered">
                    <h4 class="title is-4 is-uppercase">Subscription Agreement</h4>
                </div>
                <p>To:&nbsp;&nbsp;&nbsp;CHP Master I Limited Partnership (the "Issuer")</p>
                <p>The undersigned (the "Subscriber") hereby acknowledges that the Issuer is undertaking an offering of Class
                    A limited partnership units ("Class A Units") and Class B limited partnership units ("Class B Units") at the
                    NAV per Class A Unit and the NAV per Class B unit; and hereby tenders to the Issuer this subscription
                    offer which, upon acceptance by the Issuer, will constitute an agreement of the Subscriber to subscribe for,
                    take up, purchase and pay for and, on the part of the Issuer, to issue and sell to the Subscriber the number of 
                    Units set out below on the terms and subject to the conditions set out in this Agreement.
                </p>

                <div class="has-text-centered black-border">
                    <span class="has-text-weight-bold">Class A Capital Contribution, at the NAV per unit</span> = $____________
                    <br>
                    <span class="has-text-weight-bold">Class B Capital Contribution, at the NAV per unit</span> = $____________
                    <br>
                </div>

                <span class="has-text-weight-bold">DATED</span> this ______ day of _____________, 2019
                <br><br>

<div class="row-form">
  <div class="column">
  
        <span class="user-data">Mark nguyen </span>
  		<div class="column-row">
        	______________________________
            <div><i class="signinput">name</i></div>
            
        </div>
    
        <span class="user-data">Capital signature </span>
        <div class="column-row">
        	by:____________________________
            <div><i class="signinput">signature</i></div>
        </div>
        <span class="user-data">Capital signature </span>
        <div class="column-row">
        	______________________________
			<div><i class="signinput">name</i></div>
        </div>
        <span class="user-data">Capital signature </span>
        <div class="column-row">
        	______________________________
			<div><i class="signinput">name</i></div>
        </div>
  
  </div>
  <div class="column">
        <span class="user-data">Capital signature </span>
   		<div class="column-row">
  	     	______________________________
			<div><i class="signinput">name</i></div>
        </div>

        <span class="user-data">Capital signature </span>
        <div class="column-row">
        	______________________________
			<div><i class="signinput">name</i></div>
        </div>

        <span class="user-data">Capital signature </span>
        <div class="column-row">
        	______________________________
			<div><i class="signinput">name</i></div>
        </div>

        <span class="user-data">Capital signature </span>
        <div class="column-row">        
        	______________________________
			<div><i class="signinput">name</i></div>
        </div>
        <span class="user-data telephone">Capital </span>
        <div class="column-row telephone">
        	______________________________
			<div><i class="signinput">name</i></div>
        </div>

  
  </div>
</div>

    
            <br><br><br>
    
            @if ($errors->any())
                <div class="notification is-warning">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>*{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/{{ $user[0]->user_id }}/portfolio/form2" method="post">
                @csrf
    
    
                <div class="field is-horizontal" id="name_of_authorized_signatory">
                    <div class="field-label is-normal">
                        <label class="label">Registration Instructions</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                        <p class="control is-expanded has-icons-left">
                            <input class="input" type="text" name="signatory_first_name" value="">
                            <span class="icon is-small is-left">
                            <i class="fas fa-user"></i>
                            </span>
                        </p>
                        <i><p class="help">Name</p></i>
                        </div>
                        <div class="field">
                        <p class="control is-expanded has-icons-left t">
                            <input class="input" type="text" name="signatory_last_name" value="">
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
                                <input class="input"name="city" type="text" value="">
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
                                <input class="input" name="city" type="text" value="">
                            </p>
                            <i><p class="help">Contact name</p></i>
                        </div>
                        <div class="field">
                            <p class="control">
                                <input class="input" name="city" type="tel" value="">
                            </p>
                            <i><p class="help">Telephone Number</p></i>
                        </div>
                        <div class="field">
                            <p class="control is-expanded ">
                                <input class="input " name="city" type="text" value="">
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
                                <input class="input " name="city" type="text" value="">
                            </p>
                            <i><p class="help">Address</p></i>
                        </div>
                    </div>
                </div>
    
    
    
                <hr>
            
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
                                    Submit
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </div>