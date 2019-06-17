<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cypress Hills Partners</title>
    <link rel="shortcut icon" href="/images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">    
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-- Bulma Version 0.7.4-->
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.7.4/css/bulma.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/bulma-modal-fx/dist/css/modal-fx.min.css" />
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
	
    {{-- <style type="text/css">
        html,
        body {
            font-family: 'Open Sans';
        }

        img {
            padding: 5px;
        }
        
        .tabs li.is-active a {
            border-bottom-color: black;
            color: black;
            opacity: 0;
        }
	</style> --}}
	
	<!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Neuton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Maitree&display=swap" rel="stylesheet">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css" href="/css/home.css">
	
	<div class="hero-head">
        <nav class="navbar">
			<div id="nav-container" style="position:fixed;">
				<a id="nav-logo" href="/"><img alt="chp-logo" src="/images/cypresshills-black-yellow.png"></a>
				<a id="icon" onclick="open_nav()"><i class="fa fa-bars"></i></a>
				<div class="topnav" id="myTopnav">
					@if (auth()->user())
						@if (auth()->user()->userType() == 'admin')
							<a class="no-scroll" id="log-in" href="{{ url('/admin') }}" class="button">Admin Portal</a>
						@elseif (auth()->user()->userType() == 'standard')
							<a class="no-scroll" id="log-in" href="{{ url('/' . auth()->user()->id . '/portfolio') }}" class="button">My Portolio</a>
						@elseif (auth()->user()->userType()== 'ghost')
							<a class="no-scroll" id="log-in" href="https://google.com" class="button">Exclusive Portal</a>
						@endif
					@else
						<a class="no-scroll" id="log-in" href="{{ url('/login') }}">Login</a>
					@endif
					<a href="/#contact-us">Contact Us</a>
					<a href="/#spec-lend">Specialty Lending</a>
					<a href="/#originate">Originate</a>
					<a href="/people">People</a>
					<a href="/#about">About</a>
					<a href="/">Home</a>
				</div>
			</div>
		</nav>
	</div>

</head>

<body style="background-color: #f5f5f5;">
	{{-- style="background-color: #a38560;background-image: linear-gradient(315deg, #a38560 0%, #e0d4ae 74%);" --}}
	<br><br>
	<p class="container-advisors"><span class="title-advisors">Our Team</span></p>

    <section class="hero is-fullheight is-default is-bold">

		{{-- modal stuff --}}

		<section class="container" style="margin-top:60px;">
			<div class="columns features">
				<div class="column is-4">
				<div class="card is-shady">
					<div class="card-image">
					<figure class="image is-4by3">
						<img src="{{url('/images/kelly_klatik1.jpg')}}" alt="Placeholder image">
					</figure>
					</div>
					<div class="card-content">
					<div class="content">
						<h4>Kelly Klatik</h4>
						<p>Managing Partner & Co-Founder</p>
						<span class="button is-warning modal-button" data-target="modal-card1">read more</span>
						<span style="float: right;">
							<a href="https://ca.linkedin.com/in/klatik">
								<figure>
									<img class="image is-24x24" src="{{url('/images/linkedin.svg')}}">
								</figure>
							</a>
						</span>
					</div>
					</div>
				</div>
				</div>
				<div class="column is-4">
				<div class="card is-shady">
					<div class="card-image">
					<figure class="image is-4by3">
						<img src="{{url('/images/dean_linden_photo.jpg')}}" alt="Placeholder image">
					</figure>
					</div>
					<div class="card-content">
					<div class="content">
						<h4>Dean Linden</h4>
						<p>Managing Partner & Co-Founder</p>
						<span class="button is-warning modal-button" data-target="modal-card2">read more</span>
						<span style="float: right;">
							<a href="https://ca.linkedin.com/in/dean-linden-89934233">
								<figure>
									<img class="image is-24x24" src="{{url('/images/linkedin.svg')}}">
								</figure>
							</a>
						</span>
					</div>
					</div>
				</div>
				</div>
				<div class="column is-4">
				<div class="card is-shady">
					<div class="card-image">
					<figure class="image is-4by3">
						<img src="{{url('/images/marshall.jpg')}}" alt="Placeholder image">
					</figure>
					</div>
					<div class="card-content">
					<div class="content">
						<h4>Marshall House</h4>
						<p>Chief Financial Officer</p>
						<span class="button is-warning modal-button" data-target="modal-card3">read more</span>
					</div>
					</div>
				</div>
				</div>
			</div>
		</section>
		  
		
		<section class="container">
			<div class="columns features" style="margin-top:5%;">
				<div class="column is-4">
					<div class="card is-shady">
						<div class="card-image">
						<figure class="image is-4by3">
							<img src="{{url('/images/Alli_Headshot_square.jpg')}}" alt="Placeholder image">
						</figure>
						</div>
						<div class="card-content">
						<div class="content">
							<h4>Alli Radiuk</h4>
							<p>Associate</p>
							<span class="button is-warning modal-button" data-target="modal-card4">read more</span>
							<span style="float: right;">
								<a href="https://www.linkedin.com/in/aradiuk/">
									<figure>
										<img class="image is-24x24" src="{{url('/images/linkedin.svg')}}">
									</figure>
								</a>
							</span>
						</div>
						</div>
					</div>
				</div>
				<div class="column is-4">
					<div class="card is-shady">
						<div class="card-image">
						<figure class="image is-4by3">
							<img src="{{url('/images/anthonyWONG.jpeg')}}" alt="Placeholder image">
						</figure>
						</div>
						<div class="card-content">
						<div class="content">
							<h4>Anthony Wong</h4>
							<p>VP Operations & Corporate Affairs</p>
							<span class="button is-warning modal-button" data-target="modal-card5">read more</span>
						</div>
						</div>
					</div>
				</div>
				<div class="column is-4">
					<div class="card is-shady">
						<div class="card-image">
						<figure class="image is-4by3">
							<img src="{{url('/images/kevinMuffinGuy.jpg')}}" alt="Placeholder image">
						</figure>
						</div>
						<div class="card-content">
						<div class="content">
							<h4>Kevin Hung</h4>
							<p>Fund Accountant</p>
							<span class="button is-warning modal-button" data-target="modal-card6">read more</span>
							<span style="float: right;">
								<a href="https://www.linkedin.com/in/kevinmhung/">
									<figure>
										<img class="image is-24x24" src="{{url('/images/linkedin.svg')}}">
									</figure>
								</a>
							</span>
						</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="container">
			<div class="columns features" style="margin-top:5%;">
				<div class="column is-4">
					<div class="card is-shady">
						<div class="card-image">
						<figure class="image is-4by3">
							<img src="{{url('/images/Brydon_headshot_square.png')}}" alt="Placeholder image">
						</figure>
						</div>
						<div class="card-content">
						<div class="content">
							<h4>Brydon Cotter</h4>
							<p>Business Development</p>
							<span class="button is-warning modal-button" data-target="modal-card10">read more</span>
						</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<hr>
		<p class="container-advisors"><span class="title-advisors">Advisors</span></p>
		
		<section class="container">
			<div class="columns features" style="margin-top:5%;">
				<div class="column is-4">
					<div class="card is-shady">
						<div class="card-image">
							<figure class="image is-4by3">
								<img src="{{url('/images/brent-burgess_orig.jpg')}}" alt="Placeholder image">
							</figure>
						</div>
						<div class="card-content">
							<div class="content">
								<h4>Brent Burgess</h4>
								<p>Advisor</p>
								<span class="button is-warning modal-button" data-target="modal-card7">read more</span>
							</div>
						</div>
					</div>
				</div>
				<div class="column is-4">
					<div class="card is-shady">
						<div class="card-image">
							<figure class="image is-4by3">
								<img src="{{url('/images/person.png')}}" alt="Placeholder image">
							</figure>
						</div>
						<div class="card-content">
							<div class="content">
								<h4>Philip Nanney</h4>
								<p>Advisor</p>
								<span class="button is-warning modal-button" data-target="modal-card8">read more</span>
							</div>
						</div>
					</div>
				</div>
				<div class="column is-4">
					<div class="card is-shady">
						<div class="card-image">
							<figure class="image is-4by3">
								<img src="{{url('/images/person.png')}}" alt="Placeholder image">
							</figure>
						</div>
						<div class="card-content">
							<div class="content">
								<h4>Geoffrey McCord</h4>
								<p>Advisor</p>
								<span class="button is-warning modal-button" data-target="modal-card9">read more</span>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</section>

		{{-- SPONGEBOB: 					--}}
		{{-- 			WHAT TIME IS IT?	--}}
		{{-- PATRICK: 						--}}
		{{-- 			IT'S MODAL TIME 	--}}		
		<div id="modal-card1" class="modal modal-fx-3dSlit">
			<div class="modal-background"></div>
			<div class="modal-content is-tiny">
				<!-- content -->
				<div class="card">
				<div class="card-image">
					<figure class="image is-4by3">
					<img src="{{url('/images/kelly_klatik1.jpg')}}" alt="Placeholder image">
					</figure>
				</div>
				<div class="card-content">
					<div class="content">
						Kelly Klatik was born and raised in Saskatchewan, Canada. Kelly is a Managing Partner at Cypress Hills, which he co-founded in 2014. He oversees the firm’s origination and operational activities. He also manages the co-origination process with institutional investors.

						Kelly serves as a member of the board of directors for Merchant Advance Capital Ltd. and as a board observer with Creditloans Canada Ltd., both origination partner companies of Cypress Hills.

						Kelly has has over 27 years of experience in the investment banking/management and alternative asset sectors. Prior to Cypress Hills, Kelly served for 4 years as CEO and co-founder of an alternative asset/natural resource based company listed on the TSX-V, which harvested one of the oldest paper based historic data sets resulting in the approval of an $800 million build. Before this, Kelly spent over a decade as Director, Investment Banking at M Partners and Vice President of Equity Capital Markets for Investment Planning Counsel, part of the Montreal based Power Financial Group. He successfully executed on numerous transactions and deal flow totaling over $4.0 billion since 2000 primarily in structured financial products and public equity financings weighted towards the Consumer Finance, Commercial Finance, Technology and Natural Resource sectors.

						​Kelly received a Bachelor of Commerce in Accounting from University of Saskatchewan, an MBA from Royal Roads University, and earned the Institute of Corporate Directors designation (ICD.D) from Rotman School of Business.    
					</div>
				</div>
				</div>
				<!-- end content -->
			</div>
			<button class="modal-close is-large" aria-label="close"></button>
		</div>

		<div id="modal-card2" class="modal modal-fx-3dSlit">
			<div class="modal-background"></div>
			<div class="modal-content is-tiny">
				<!-- content -->
				<div class="card">
				<div class="card-image">
					<figure class="image is-4by3">
					<img src="{{url('/images/dean_linden_photo.jpg')}}" alt="Placeholder image">
					</figure>
				</div>
				<div class="card-content">
					<div class="content">
						Dean Linden was born in Saskatchewan and raised in South Eastern Alberta.  Dean is a Managing Partner at Cypress Hills, which he co-founded. He oversees the firm’s family office relationships.
						Dean Linden has over 25 years of experience as a financier and business development professional. He has spearheaded the financing and successful development of Companies in Alternative Finance, Consumer Finance, Biotech, Healthcare, Media, Sports and Entertainment, and Natural Resource sectors.
						Dean began his career in Sports and Entertainment as the General Manager of the Single A affiliate of the Toronto Blue Jays.  After a successful tenure with the Blue Jays, he transitioned into Capital Markets and Finance, when he arrived in Vancouver in the early nineties. He joined ID Biomedical in 1997, and in 2005 it was sold to Global Pharma giant Glaxo SmithKline for $1.7B. Dean went on to become a founding shareholder and important visionary in the early stage development of both CRH Medical, Falco Resources and Luxxfolio Holdings Inc.	
					</div>
				</div>
				<!-- end content -->
			</div>
			<button class="modal-close is-large" aria-label="close"></button>
		</div>

		<div id="modal-card3" class="modal modal-fx-3dSlit">
			<div class="modal-background"></div>
			<div class="modal-content is-tiny">
				<!-- content -->
				<div class="card">
				<div class="card-image">
					<figure class="image is-4by3">
					<img src="{{url('/images/marshall.jpg')}}" alt="Placeholder image">
					</figure>
				</div>
				<div class="card-content">
					<div class="content">
						Marshall House has 25 years of accounting and finance experience in senior management positions in large public and private companies. Marshall has been an integral part of developing Cypress Hills’ processes and internal controls in using his extensive knowledge and understanding of the CHP loan portfolios and their respective cashflows, allowing for timely and accurate reporting from the origination partners and to the CHP fund investors. Marshall’s attention to detail, excellent problem solving skills and strong work ethic have been vital to the success of Cypress Hills.  ​

						Mr. House received a Bachelor of Arts from the University of British Columbia in 1990 and his CPA designation in 2001.​						
					</div>
				</div>
				</div>
				<!-- end content -->
			</div>
			<button class="modal-close is-large" aria-label="close"></button>
		</div>

		<div id="modal-card4" class="modal modal-fx-3dSlit">
			<div class="modal-background"></div>
			<div class="modal-content is-tiny">
				<!-- content -->
				<div class="card">
					<div class="card-image">
						<figure class="image is-4by4">
							<img src="{{url('/images/Alli_Headshot_square.jpg')}}" alt="Placeholder image">
						</figure>
					</div>
					<div class="card-content">
						<div class="content">
							Alli Radiuk holds a Bachelor of Commerce degree with a specialization in Finance from the University of British Columbia.  She previously held various positions at Toronto-Dominion Bank in the Underwriting Division where she employed her knowledge and expertise in underwriting secured consumer loans. She has acted as a Strategic Consultant focused on Business Development and Corporate Finance in both the Technology and Entertainment industries prior to joining Cypress Hills Partners. Alli has been strategically involved in building multi-million dollar financing structures and assisting in the management of various funds.  Alli brings a unique skill set from her experience in the financial sector and business operations.					
						</div>
					</div>
				</div>
				<!-- end content -->
			</div>
			<button class="modal-close is-large" aria-label="close"></button>
		</div>

		<div id="modal-card5" class="modal modal-fx-3dSlit">
			<div class="modal-background"></div>
			<div class="modal-content is-tiny">
				<!-- content -->
				<div class="card">
					<div class="card-image">
						<figure class="image is-4by3">
						<img src="{{url('/images/anthonyWONG.jpeg')}}" alt="Placeholder image">
						</figure>
					</div>
					<div class="card-content">
						<div class="content">
							Anthony is currently the Vice President, Operations and Corporate Affairs for Cypress Hills Partners.
							Anthony has over 25 years of experience in the corporate finance and communications industry including 9 years with the British Columbia Securities Commission and 6 years in private practice . His diverse skill set uniquely positions him to understand and work with a variety of businesses and ventures from law to technology to digital media. He has been a provincial and national representative on national and international committees and projects.
							Anthony serves as a member of the board of directors for Luxxfolio Holdings Inc.
							Anthony studied philosophy and politics for three years in Canada and Great Britain before earning his law degree from the University of British Columbia.				
						</div>
					</div>
				</div>
				<!-- end content -->
			</div>
			<button class="modal-close is-large" aria-label="close"></button>
		</div>


		<div id="modal-card6" class="modal modal-fx-3dSlit">
			<div class="modal-background"></div>
			<div class="modal-content is-tiny">
				<!-- content -->
				<div class="card">
				<div class="card-image">
					<figure class="image is-4by3">
					<img src="{{url('/images/kevinMuffinGuy.jpg')}}" alt="Placeholder image">
					</figure>
				</div>
				<div class="card-content">
					<div class="content">
						Kevin is strategically involved in accounting and analytics for CHP. He was previously an
						Associate Advisor with RBC Dominion Securities where he employed his knowledge and
						expertise in portfolio modeling and financial planning, and was a recipient of the 2017 RBC Performance Award. Kevin worked with one of the largest Wealth Management teams in Western Canada, providing key business operation and portfolio management functions.

						Kevin received a Bachelor of Commerce in Accounting from the University of British Columbia in 2014 and earned the Chartered Financial Analyst (CFA) designation in 2018.
					</div>
				</div>
				</div>
				<!-- end content -->
			</div>
			<button class="modal-close is-large" aria-label="close"></button>
		</div>

		<div id="modal-card7" class="modal modal-fx-3dSlit">
			<div class="modal-background"></div>
			<div class="modal-content is-tiny">
				<!-- content -->
				<div class="card">
				<div class="card-image">
					<figure class="image is-4by3">
					<img src="{{url('/images/brent-burgess_orig.jpg')}}" alt="Placeholder image">
					</figure>
				</div>
				<div class="card-content">
					<div class="content">
						Brent Burgess was born and raised in Saskatchewan, Canada. He cofounded a private credit investment firm, Triangle Capital, which had its IPO in 2007 on the NYSE. He was instrumental in growing the credit portfolio to approximately $1 billion. He served as Triangle’s Chief Investment Officer and on its board of directors until his departure in 2016, when he started Granville Advisers.  Granville provides financial and strategic advice to businesses ranging from large banks and insurance companies to early stage start-up companies.  Brent is also a partner with Sovereign’s Capital and serves on its investment committee.  In addition, he is actively involved with a number of organizations that focus on the integration of leadership, business, and faith, including Regent College in Vancouver, where he is Vice-Chairman of the Board.
					</div>
				</div>
				</div>
				<!-- end content -->
			</div>
			<button class="modal-close is-large" aria-label="close"></button>
		</div>

		<div id="modal-card8" class="modal modal-fx-3dSlit">
				<div class="modal-background"></div>
				<div class="modal-content is-tiny">
					<!-- content -->
					<div class="card">
					<div class="card-image">
						<figure class="image is-4by3">
						<img src="{{url('/images/person.png')}}" alt="Placeholder image">
						</figure>
					</div>
					<div class="card-content">
						<div class="content">
							Philip has spent the last decade evaluating transactions involving ownership transitions, rapidly growing businesses, and misunderstood asset classes, industries and situations. He has worked on buy side transactions totaling in excess of $2 billion. Philip was formerly Vice President at Victory Park Capital Advisors (VPC), a leading financier of specialty lenders globally. At VPC he was responsible for origination, fundamental analysis, execution and management of direct private debt and equity investment, including specialty finance transactions in North America, Latin America, and Europe.

							Philip has an MBA from Kellogg School of Management at Northwestern University and received a Bachelor of Science degree in business administration from the University of North Carolina at Chapel Hill where he graduated with highest distinction.
						</div>
					</div>
					</div>
					<!-- end content -->
				</div>
				<button class="modal-close is-large" aria-label="close"></button>
			</div>

			<div id="modal-card9" class="modal modal-fx-3dSlit">
					<div class="modal-background"></div>
					<div class="modal-content is-tiny">
						<!-- content -->
						<div class="card">
						<div class="card-image">
							<figure class="image is-4by3">
							<img src="{{url('/images/person.png')}}" alt="Placeholder image">
							</figure>
						</div>
						<div class="card-content">
							<div class="content">
								Geoffrey McCord’s professional career spans over 42 years as a top level executive for various financial firms, including 14 years at Connor, Clark and Co., an investment dealer based in Toronto offering a comprehensive array of investment strategies, spanning traditional and alternative asset classes in a variety of quantitative and fundamental styles.  During this time, Geoffrey served as Chief Financial Officer, Senior Vice President and Head of Operations.  He then moved on to IPC where he served in a number of executive positions, including Executive Vice President of IPC Financial Network Inc. and President of IPC Securities Corporation.

								Mr. McCord currently sits as President of Thorn Tree Capital Corporation and privately consults as an independent management consultant.  A seasoned financial professional, he brings several years of related experience to his role as an Advisor with Cypress Hills Partners Inc.

								Mr. McCord has a B.Comm. from Queen’s University, Kingston, Ontario and is a CPA C.A.	
							</div>
						</div>
						</div>
						<!-- end content -->
					</div>
					<button class="modal-close is-large" aria-label="close"></button>
				</div>

				<div id="modal-card10" class="modal modal-fx-3dSlit">
					<div class="modal-background"></div>
					<div class="modal-content is-tiny">
						<!-- content -->
						<div class="card">
						<div class="card-image">
							<figure class="image is-4by4">
							<img src="{{url('/images/Brydon_headshot_square.png')}}" alt="Placeholder image">
							</figure>
						</div>
						<div class="card-content">
							<div class="content">																
								Brydon works as a Business Development professional for Cypress Hills specialized in developing key origination partnerships and funding relationships.  
								​
								Brydon’s capital raising experienced allowed him to venture into the realm of blockchain and fintech, founding ARGV Development, a blockchain focused development company specializing in enterprise-grade solutions used by governments and businesses alike. As a young entrepreneur, Brydon provides innovative approaches and processes to traditional business practices through leveraging his experience, network, and continuing education. 

								Brydon received a Bachelor of Arts in Economics from University of British Columbia (UBC). As a proud former UBC Thunderbird football player, Brydon sits on the board of the Thunderbird Football Association which actively supports UBC's current football program and provides career opportunities for graduating players.
							</div>
						</div>
						</div>
						<!-- end content -->
					</div>
					<button class="modal-close is-large" aria-label="close"></button>
				</div>

	</section>
	<br>

	<script src="https://unpkg.com/bulma-modal-fx/dist/js/modal-fx.min.js"></script>
	<script type="text/javascript" src="{{ URL::asset('js/menu.js') }}"></script>

</body>

<footer>
    <div class="footer">
        <div class="contain" id="footer-row">
            <div class="col" id="footer-column1">
                <h1>Subscribe</h1>
                <form>
                    <p>Subscribe to receive exclusive features and newsletters.</p>
                    <input type="email" placeholder="Email" style="width:100%"><br>
                    <button type="submit"><b>Submit</b></button>
                </form>
            </div>

            <div class="col" id="footer-column2">
                <div>
                    <div id="footer-column-column1">
                        <ul>
                            <li><a href="/#home">Home</a></li>
                            <li><a href="/#about">About</a></li>
                            <li><a href="/people">People</a></li>
                        </ul>
                    </div>
                    <div id="footer-column-column2">
                        <ul>
                            <li><a href="/#originate">Originate</a></li>
                            <li><a href="/#spec-lend">Specialty Lending</a></li>
                            <li><a href="/#contact-us">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
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