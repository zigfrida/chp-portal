<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cypress Hills Partners</title>
    <link rel="shortcut icon" href="../images/fav_icon.png" type="image/x-icon">
    <link rel="shortcut icon" href="/images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <!-- Bulma Version 0.7.4-->
    {{-- <link rel="stylesheet" href="https://unpkg.com/bulma@0.7.4/css/bulma.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/bulma-modal-fx/dist/css/modal-fx.min.css" /> --}}
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
    
    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Neuton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Maitree&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    {{-- <link rel="stylesheet" href="{{ asset('css/about/main_style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about/fancybox.css') }}">
	<link rel="stylesheet" href="{{ asset('css/about/site_membership.css') }}">
	<link rel="stylesheet" href="{{ asset('css/about/sites.css') }}">
	<link rel="stylesheet" href="{{ asset('css/about/social-icons.css') }}"> --}}

    <link rel="stylesheet" type="text/css" href="/css/home.css">
    <link rel="stylesheet" type="text/css" href="/css/footer.css">

    <div id="nav-container">
        <a id="nav-logo" class="scroll" href="#home"><img alt="chp-logo" src="/images/cypresshills-black-yellow.png"></a>
        <a id="icon" onclick="open_nav()"><i class="fa fa-bars"></i></a>
        <div class="topnav" id="myTopnav">
            @if (auth()->user())
                @if (auth()->user()->userType() == 'admin')
                    <a class="no-scroll" id="log-in" href="{{ url('/admin') }}" class="button">Admin Portal</a>
                @elseif (auth()->user()->userType() == 'standard')
                    <a class="no-scroll" id="log-in" href="{{ url('/' . auth()->user()->id . '/portfolio') }}" class="button">My Portfolio</a>
                @elseif (auth()->user()->userType()== 'ghost')
                    <a class="no-scroll" id="log-in" href="https://google.com" class="button">Exclusive Portal</a>
                @endif
            @else
                <a class="no-scroll" id="log-in" href="{{ url('/login') }}">Login</a>
            @endif

            {{-- <a class="no-scroll" id="log-in" href="/login">Log In</a> --}}

            <a class="scroll" href="#contact-us">Contact Us</a>
            <a class="scroll" href="#spec-lend">Specialty Lending</a>
            <a class="scroll" href="#originate">Originate</a>
            <a class="no-scroll" href="/people">People</a>
            <a class="scroll" href="#about">About</a>
            <a class="scroll" href="#home">Home</a>
        </div>
    </div>

</head>

<body>
    <article onclick="close_nav()">

        <div id="home">
            <h1 id="home-text"><span id="oppt"><b>Opportunity</b></span> on a Road Less Traveled.</h1>
            <p id="home-icons"><span>Originate</span>&#xB7;<span>Innovate</span>&#xB7;<span>Accelerate</span></p>
            <a class="scroll" href="#about" id="learn_more"><b>LEARN MORE</b></a>
        </div>

        <div id="about">
            <h1>About</h1>
            <div id="about-content">
                <h2>Welcome</h2>
                <h3>A little about ourselves</h3>
                <p>​​Cypress Hills Partners is a boutique alternative merchant banking firm based out of Vancouver. The company specializes in the origination of private equity, specialty private debt, and other uniquely structured products. The firm was founded by Kelly Klatik and Dean Linden and is currently dedicated to the fast growing specialty lending and origination marketplace on a global basis.</p><br>
                <p>Cypress Hills is adept in leveraging technology and financial structuring experience to accelerate the growth of specialty lending platforms and service providers creating a differentiated market advantage.</p><br>
                <p>Direct privately negotiated investments may include consumer loans, small and medium sized enterprise (SME) loans, advances against corporate trade receivables, senior secured loans, regulatory capital, and mezzanine debt.</p><br>
                <p>Indirect investments may include investments in platforms through the provision of credit facilities, equity or other instruments.</p>
            </div>

        </div>

        <div id="people">
            <h1>People build <i><b>Opportunities</b></i></h1>
            <h3><a href="/people">Meet the Team</a></h3>
        </div>

        <div id="quote1">
            <div id="quote-column1">
                <span id="quote-mark">&#10077;</span>
                <h1 id="quote-main">"Imagination is More Important than Knowledge"</h1>
                <h3 id="quote-legend">Albert Einstein</h3>
            </div>
        </div>

        <div id="originate">
            <h1>Originate</h1>
            <br>
            <button class="collapsible">Originate</button>
            <div class="collapsible_content">
                <p>Our  objective is to accelerate the growth of specialty lending platforms and service providers using our advanced structuring knowledge.</p>
            </div>
            <button class="collapsible">Scope of Target Lenders</button>
            <div class="collapsible_content">
                <p>We believe there is optimal risk reward opportunities in Specialty Lenders with loan books less than $50 million that have developed out their primary infrastructure and established proven credit underwriting strategies.</p>
            </div>
            <button class="collapsible">Balance Sheet Lender</button>
            <div class="collapsible_content">
                <p>Majority of Specialty Lenders fall into this category where all of their loan originations are financed off of their own balance sheet. Their balance sheet will normally be stacked between a senior secured loan, subordinated debt, and then equity.</p>
            </div>
            <button class="collapsible">Marketplace Lenders</button>
            <div class="collapsible_content">
                <p>This category is growing rapidly which includes Lending Club as the poster child to this peer to peer lending area. Marketplace Lenders act primarily as a service provider to the loan resulting in the loan being underwritten off balance sheet to third party institutional investor(s).</p>
            </div>
            <button class="collapsible">Hybrid Lenders</button>
            <div class="collapsible_content">
                <p>Hybrid Lenders will borrow the strengths of both a Balance Sheet Lending strategy and a Marketplace Lending strategy where they will originate loans on their balance sheet but will also use Marketplace lending facilities to sell off a portion of their loans.</p>
            </div>
            <button class="collapsible">Funding Strategy</button>
            <div class="collapsible_content" style="border-bottom: 1px solid #cdb723;">
                <p>Our funding efforts are supported by both internally managed merchant banking funds and co-investment partners which includes other institutional and family office funds.</p>
            </div>

        </div>

        <div id="spec-lend">
            <h1>Specialty Lending</h1>
            <div id="spec-lend-content">
                <h2>What is Speciality Lending?</h2>
                <p>Specialty Lending is filling the lending void left by banks. The tightening of banking regulations has prompted banks to reassess their business models, regulatory capital and liquidity requirements, and the risk profile of the loans made by them. This has resulted in a 44 reduction of the amount of debt that banks are making available to both business and consumer borrowers. Recent regulations such as Dodd-Frank and Basel III have also increased the minimum capital requirements applicable to a bank’s balance sheet. Another factor in the decline of bank lending is the decades-long trend of consolidation of community banks. Community banks have been shown to be more likely to make small business loans than the larger institutional banks, but the number of community banks continues to fall with less than 7,000 today in the United States, down from over 14,000 in the mid-1980s.</p><br>
                <p>To the extent that traditional banks are lending, their lending model includes certain inefficiencies that make the cost of borrowing greater. A decision to extend credit to an individual or business is often not a binary decision made solely on the creditworthiness of the counterparty. Banks typically make decisions to extend credit based on a variety of exogenous factors which often results in a lack of credit risk-based pricing for the borrower. As well as having to be cognisant of their capital adequacy and liquidity requirements, banks typically operate on a large fixed cost basis, including personnel, branch infrastructure and administration. These costs can also be a factor in the interest rates offered to their customers. All of these factors combine to result in the lending rates being offered by banks as opposed to analysing the true creditworthiness of borrowers.</p><br>
                <p>​In light of all of the above and the continuing demand for credit in a recovering global economy, we believe that the opportunities for alternative lending sources, including Specialty Lending Platforms, to increase their share of the overall lending market will continue to become available. Further, Specialty Lending Platforms are optimally positioned to take advantage of these opportunities, not least due to their significant access to online credit data. Additionally, the process of disintermediation of lending away from the traditional banking model remains in its early stages resulting, we believe, in significant opportunities for investors going forward.</p>
            </div>
        </div>

        <div id="contact-us">
            <div id="contact-us-container">
                <h1>Contact Us</h1>
                    <!--Contact Us input fields-->
                    <div class="contact-col" id="contact-us-column1">
                        <form id="form-832043679925255988">
                            <p id="text-required"><span class="asterx">*</span>Indicates required field</p>
                            Name<span class="asterx">*</span><br>
                            <input type="text" placeholder="First Name" name="first_name" style="margin-right: 5px;"><input type="text" placeholder="Last Name" name="last_name"><br>
                            Email<span class="asterx">*</span><br>
                            <input type="text" placeholder="Email" name="email" style="width:100%"><br>
                            Comment<span class="asterx">*</span><br>
                            <textarea type="text" placeholder="Leave your comment here" name="comment"></textarea><br>

                            <div style="text-align:left; margin-top:10px; margin-bottom:10px;">
                                <button type="submit"><b>Submit</b></button>
                            </div>
                        </form>
                    </div>
                    <!--Location information and Map-->
                    <div class="contact-col" id="contact-us-column2">
                        <h2>EMAIL ADDRESS</h2>
                        <div><p class="contact-info">info@cypresshillspartners.com</p></div>

                        <h2>TELEPHONE NUMBER</h2>
                        <div><p class="contact-info">+1 604-732-5840</p></div>

                        <h2>ADDRESS</h2>
                        <div><p class="contact-info">212 - 1080 Mainland Street<br/>Vancouver, BC V6B 2T4</p></div>

                        <div id="map-container">
                            <iframe allowtransparency="true" frameborder="0" scrolling="no" style="width: 100%; height: 220px; margin-top: 10px; margin-bottom: 15px;" src="//www.weebly.com/weebly/apps/generateMap.php?map=google&elementid=226950502769000951&ineditor=0&control=3&width=auto&height=250px&overviewmap=0&scalecontrol=0&typecontrol=0&zoom=15&long=-123.12018660000001&lat=49.2755314&domain=www&point=1&align=1&reseller=false"></iframe>
                        </div>
                    </div>
                    <div class="clearfix"></div>
            </div>
        </div>
    
    </article>
</body>

<footer>
    <div class="footer">
        <div class="contain" id="footer-row">
            <!--SUBSCRIBE SECTION REMOVED-->
            {{-- <div class="col" id="footer-column1">
                <h1>Subscribe</h1>
                <form>
                    <p>Subscribe to receive exclusive features and newsletters.</p>
                    <input type="email" placeholder="Email" style="width:100%"><br>
                    <button type="submit"><b>Submit</b></button>
                </form>
            </div> --}}

            <div class="col" id="footer-column2">
                <div>
                    <div id="footer-column-column1">
                        <ul>
                            <li><a class="scroll" href="#home">Home</a></li>
                            <li><a class="scroll" href="#about">About</a></li>
                            <li><a href="/people">People</a></li>
                        </ul>
                    </div>
                    <div id="footer-column-column2">
                        <ul>
                            <li><a class="scroll" href="#originate">Originate</a></li>
                            <li><a class="scroll" href="#spec-lend">Specialty Lending</a></li>
                            <li><a class="scroll" href="#contact-us">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col" id="footer-column1">
                <div id="rede-icons">
                    <ul>
                        <li>
                            <a href="https://twitter.com/cypresshillsptn">
                                <figure>
                                    <img class="image is-48x48" src="{{url('/images/twitter.svg')}}">
                                </figure>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.google.com/maps/place/1080+Mainland+St,+Vancouver,+BC+V6B+2T4/@49.2756006,-123.1225802,17z/data=!3m1!4b1!4m5!3m4!1s0x548673d65a82a923:0x19c1da5918a84be7!8m2!3d49.2755971!4d-123.1203915">
                                <figure>
                                    <img class="image is-48x48" src="{{url('/images/google_maps.svg')}}">
                                </figure>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/company/cypress-hills-partners/about/">
                                <figure>
                                    <img class="image is-48x48" src="{{url('/images/linkedin.svg')}}">
                                </figure>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</footer>

<script type="text/javascript" src="{{ URL::asset('js/homePage.js') }}"></script>
</html>