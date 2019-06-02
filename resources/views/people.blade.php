<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cypress Hills Partners</title>
    <link rel="shortcut icon" href="../images/fav_icon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-- Bulma Version 0.7.4-->
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.7.4/css/bulma.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/bulma-modal-fx/dist/css/modal-fx.min.css" />
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
	
    <style type="text/css">
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
    </style>
</head>

<body style="background-color: #a38560;background-image: linear-gradient(315deg, #a38560 0%, #e0d4ae 74%);">
    <section class="hero is-fullheight is-default is-bold">
        <div class="hero-head">
            <nav class="navbar">
                <div class="container">
                    <div class="navbar-brand">
                        <figure class="image" style="margin-top: 20px">
                            <a href="/"><img src="{{url('/images/logo.png')}}" alt="Cypress Hills Partners"></a>
                        </figure>
                        <span class="navbar-burger burger" data-target="navbarMenu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </div>
                    <div id="navbarMenu" class="navbar-menu">
                        <div class="navbar-end">
                            <div class="tabs is-right">
                                <ul>
                                    <li class="is-active"><a href="/">Home</a></li>
                                    <li><a href="/about">About</a></li>
                                    <li><a href="/people"><b>People</b></a></li>
                                    <li><a href="/originate">Originate</a></li>
                                    <li><a href="/specialty-lending">Specialty Lending</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

		{{-- modal stuff --}}

		<section class="container">
			<div class="columns features">
				<div class="column is-4">
				<div class="card is-shady">
					<div class="card-image">
					<figure class="image is-4by3">
						<img src="{{url('/images/kelly_klatik.jpg')}}" alt="Placeholder image">
					</figure>
					</div>
					<div class="card-content">
					<div class="content">
						<h4>Kelly Klatik</h4>
						<p>Kelly Klatik was born and raised in Saskatchewan, Canada. Kelly is a Managing Partner at Cypress Hills, which he co-founded in 2014. He oversees the firm’s origination and operational activities. He also manages the co-origination process with institutional investors.</p>
						<span class="button is-warning modal-button" data-target="modal-card1">+</span>
					</div>
					</div>
				</div>
				</div>
				<div class="column is-4">
				<div class="card is-shady">
					<div class="card-image">
					<figure class="image is-4by3">
						<img src="{{url('/images/dean_theman.jpg')}}" alt="Placeholder image">
					</figure>
					</div>
					<div class="card-content">
					<div class="content">
						<h4>Dean Linden</h4>
						<p>Dean Linden has over 20 years of experience as a financier and business development professional. He has spearheaded the financing and development of Companies in Consumer Finance, Biotech, Healthcare, Media, Entertainment and Natural Resource sectors.</p>
						<span class="button is-warning modal-button" data-target="modal-card2">Modal Card</span>
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
						<p>Marshall House has 25 years of accounting and finance experience in senior management positions in large public and private companies.</p>
						<br><br><br>
						<span class="button is-warning modal-button" data-target="modal-card3">Modal Card</span>
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
							<img src="{{url('/images/alli_radiuk.jpeg')}}" alt="Placeholder image">
						</figure>
						</div>
						<div class="card-content">
						<div class="content">
							<h4>Alli Radiuk</h4>
							<p>Ms. Radiuk holds a Bachelor of Commerce degree with a specialization in Finance from the University of British Columbia. She previously held various positions at Toronto-Dominion Bank in the Underwriting Division where she employed her knowledge and expertise in underwriting secured consumer loans.</p>
							<span class="button is-warning modal-button" data-target="modal-card4">Modal Card</span>
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
							<p>Anthony has over 25 years of experience in the corporate finance and communications industry. His diverse skill set uniquely positions him to understand and work with a variety of businesses and ventures from law to technology to digital media. Anthony has worked in both the private and public sectors.</p>
							<span class="button is-warning modal-button" data-target="modal-card5">Modal Card</span>
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
							<p>
								Kevin is strategically involved in accounting and analytics for CHP.
								He was previously an Associate Advisor with RBC Dominion Securities where he employed his knowledge and
								expertise in portfolio modeling and financial planning, and was a recipient of the 2017 RBC Performance Award.
							</p>
							<br>
							<span class="button is-warning modal-button" data-target="modal-card6">Modal Card</span>
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
					<img src="{{url('/images/kelly_klatik.jpg')}}" alt="Placeholder image">
					</figure>
				</div>
				<div class="card-content">
					<div class="content">
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
					<img src="{{url('/images/dean_theman.jpg')}}" alt="Placeholder image">
					</figure>
				</div>
				<div class="card-content">
					<div class="content">
							He began his career in 1988 as the General Manager of the Single A affiliate of the Toronto Blue Jays.	​  
							Dean's attention quickly turned to Capital Markets and Finance when he arrived in Vancouver in the early nineties.
							He joined ID Biomedical in 1997 and in 2005 it was sold to Global Pharma giant Glaxo SmithKline for $1.7B.
							Dean went on to become a founding shareholder and important visionary in the early stage development of both CRH Medical and Falco Resources.
							Linden has had the good fortune to work with some of the most experienced professionals at both Director and Management levels.
							Cypress Hills Partners is the culmination of a business career that has spanned three decades and allows Dean to apply his expertise and focus on the things he does the best.				</div>
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
						Marshall has been an integral part of developing Cypress Hills’ processes and internal controls in using his extensive
						knowledge and understanding of the CHP loan portfolios and their respective cashflows, allowing for timely and accurate
						reporting from the origination partners and to the CHP fund investors. Marshall’s attention to detail, excellent problem solving skills and strong work ethic have been vital to the success of Cypress Hills.  ​
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
						<figure class="image is-4by3">
							<img src="{{url('/images/alli_radiuk.jpeg')}}" alt="Placeholder image">
						</figure>
					</div>
					<div class="card-content">
						<div class="content">
							She has acted as a Strategic Consultant focused on Business Development and Corporate Finance in both the Technology and Entertainment industries prior to joining Cypress Hills Partners. Alli has been strategically involved in building multi-million dollar financing structures and assisting in the management of various funds.  Alli brings a unique skill set from her experience in the financial sector and business operations											
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
							Anthony has worked in both the private and public sectors. He has been a provincial and national representative on national and international committees and projects.    

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
						Kevin worked with one of the largest Wealth Management teams in Western Canada, providing key business operation and portfolio management functions.
						Kevin received a Bachelor of Commerce in Accounting from the University of British Columbia in 2014 and earned the Chartered Financial Analyst (CFA) designation in 2018.
					</div>
				</div>
				</div>
				<!-- end content -->
			</div>
			<button class="modal-close is-large" aria-label="close"></button>
		</div>


	</section>
	<br>
	<div class="hero-foot">
		<div class="container">
			<div class="tabs is-centered">
				<ul>
					<li><a>LinkedIn</a></li>
					<li>
						<a href="https://www.google.com/maps/place/1080+Mainland+St,+Vancouver,+BC+V6B+2T4/@49.2756006,-123.1225802,17z/data=!3m1!4b1!4m5!3m4!1s0x548673d65a82a923:0x19c1da5918a84be7!8m2!3d49.2755971!4d-123.1203915">
							<figure>
								<img class="image is-48x48" src="{{url('/images/google_maps.svg')}}">
							</figure>
						</a>
					</li>
					<li><a>Umm</a></li>
				</ul>
			</div>
		</div>
	</div>
	<script src="https://unpkg.com/bulma-modal-fx/dist/js/modal-fx.min.js"></script>
</body>

</html>