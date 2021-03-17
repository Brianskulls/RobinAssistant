<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Robin Assistant</title>

        <!-- Stylesheet -->
        <link href="{{ url('/css/app.css') }}" rel="stylesheet">
        <link href="{{ url('/css/normalize.css') }}" rel="stylesheet">

        <!-- CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet">

    </head>
    <body class="antialiased">
        {{-- Section 1 --}}
        <div class="section1">
            <div class="section1-logo">
                <div class="dropdown">
                    <img id="flag" class="dropbtn" src="../images/english-flag.svg" alt="">
                    <div class="dropdown-content">
                        <p id="english" class="first-dropdown">English</p>
                        <p id="dutch">Dutch</p>
                        <p id="spanish">Spanish</p>
                        <p id="german">German</p>
                        <p id="russian" class="last-dropdown">Russian</p>
                    </div>
                </div>
                <img class="robin-logo" src="../images/main-logo.svg" alt="Robin Assistant logo">
            </div>
            <div class="section1-body text-white">
                <h1>Robin assistant service, your daily assistant</h1>
                <p class="text-header-medium">Robin Assistant is a new assistive software solution for people with special needs and their carers
                    in performing everyday activities. It is used for different types of brain conditions: autism
                    spectrum, Down syndrome, Alzheimer’s disease and various forms of dementia, and other sorts of
                    brain injuries.</p>
            </div>
            <div class="section1-bottom text-white">
                <div class="section1-buttoncontainer">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}">Dashboard</a>
                        @else
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Sign up!</a>
                            @endif
                            <a class="button-set-padding" href="{{ route('login') }}">Login</a>
                        @endauth
                    @endif
                </div>
                <img src="../images/main-scroll.svg" class="heartAnimation">
            </div>
        </div>
        {{-- NavBar --}}
        <div id="navbar">
            <div class="navbar-left">
                <a href="#what-link"><p>What is Robin Assistant</p></a>
                <a href="#benefits-link"><p>Benefits</p></a>
                <a href="#work-link"><p>How does it work</p></a>
                <a href="#price-link"><p>Prices</p></a>
            </div>
            <div class="navbar-right">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="nav-login">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="nav-login">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="nav-signup">Sign me up</a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
        {{-- Section 2--}}
        <div id="what-link" class="section2">
            <div class="section2-image"></div>
            <div class="section2-body">
                <h2 class="text-pink">What is Robin Service?</h2>
                <p class="section2-textpadding">Robin is an assistive software solution that allows carers to set up
                    and plan daily activities for the ones they are taking care of. Robin will then assist the
                    individual in performing these activities by providing step-by-step guidance, using images, text
                    and audio instructions.</p>
                <div class="section2-responsive-image"></div>
                <p class="section2-textpadding">During the XI Autism-Europe International Congress 2016 in Edinburgh,
                    one small booth surprised many of the attendees. It was Robin officially presenting for the first
                    time, showcasing its interface and fresh design which was developed together with Mediacollege
                    Amsterdam. </p>
                <p>The Robin team was very happy to have been met with overwhelmingly positive reactions, advice, and
                    support from people with autism, their family members and carers, therapists, and autism
                    specialists. All of them provided their feedback, opinions, new ideas, and many other very useful
                    contributions. Everyone shared our goal of creating a service that fully caters to the needs of
                    people with special needs, helping them to have a better quality of life.</p>
            </div>
        </div>
        {{-- Section 3--}}
        <div id="benefits-link" class="section3">
            <div class="section3-left">
                <h2 class="text-pink">Benefits</h2>
                <p>Robin has several benefits to make your daily life as comfortable as possible. What are the benefits
                    of Robin Assistent and why should you use it?</p>
            </div>
            <div class="section3-right">
                <div class="timeline">
                    <div class="container right">
                        <div class="content">
                            <h2>Independence</h2>
                            <p>Robin has several benefits to make your daily life as comfortable as possible. What are
                                the benefits of Robin Assistent and why should you use it?</p>
                        </div>
                    </div>
                    <div class="container left">
                        <div class="content">
                            <h2>Daily routines</h2>
                            <p>Robin has several benefits to make your daily life as comfortable as possible. What are
                                the benefits of Robin Assistent and why should you use it?</p>
                        </div>
                    </div>
                    <div class="container right">
                        <div class="content">
                            <h2>Dashboard management</h2>
                            <p>Robin has several benefits to make your daily life as comfortable as possible. What are
                                the benefits of Robin Assistent and why should you use it?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Section 4--}}
        <div class="section4">
            <img src="../images/section4-image.svg">
            <div class="section4-body">
                <div class="section4-topbubble text-green">
                    <div class="section4-innertopbubble">
                        <p>Did we already convince you?</p>
                        <p>Get Robin Assistant today and start helping others.</p>
                    </div>
                </div>
                <a href="{{ route('register') }}"><div class="section4-bottombubble text-white">
                    <div class="section4-innerbottombubble">
                        <p>Yes, Sign me up!</p>
                    </div>
                </div></a>
            </div>
        </div>
        {{-- Section 5--}}
        <div id="work-link" class="section5">
            <h2 class="text-pink">How does it work?</h2>
            <p>The service consists of two parts: the online dashboard for the carers and the mobile app for the person
                that requires special care.</p>
        </div>
        {{-- Section 6--}}
        <div id="price-link" class="section6">
            <div class="section6-headertext">
                <h2 class="text-green">Pricing</h2>
            </div>
            <div class="cardcontainer">
                <a href="{{ route('register') }}">
                    <div class="card">
                        <h3 class="text-green">Family plan</h3>
                        <div class="grid-right-price text-white">
                            <p>Free</p>
                        </div>
                        <p class="grid-jump">I am related to a person with a mental disorder and I would like to use Robin Assistant!</p>
                        <p class="text-green grid-swap-color">Up to 5 items</p>
                        <p class="grid-right grid-swap-color">Sign up <i class="fas fa-arrow-right"></i></p>
                    </div>
                </a>
                <a href="{{ route('register') }}"><div class="card">
                    <h3 class="text-green">Individual basic</h3>
                    <div class="grid-right-price text-white">
                        <p class="price-small">€50,-</p>
                        <p class="text-small">a Month</p>
                    </div>
                    <p class="grid-jump">I am a professional who would like to use your Robinassistant! </p>
                    <p class="text-green grid-swap-color">Up to 50 Items</p>
                    <p class="grid-right grid-swap-color">Sign up <i class="fas fa-arrow-right"></i></p>
                    </div></a>
                <a href="{{ route('register') }}"><div class="card">
                    <h3 class="text-green">Individual bais+</h3>
                    <div class="grid-right-price text-white">
                        <p class="price-small">€80,-</p>
                        <p class="text-small">a Month</p>
                    </div>
                    <p class="grid-jump">I am a professional and I would like to use all your items!</p>
                    <p class="text-green grid-swap-color">Unlimited items</p>
                    <p class="grid-right grid-swap-color">Sign up <i class="fas fa-arrow-right"></i></p>
                        </div></a>
                <a href="{{ route('register') }}"><div class="card">
                    <h3 class="text-green">Organisation basic</h3>
                    <div class="grid-right-price text-white">
                        <p class="price-small">€200,-</p>
                        <p class="text-small">a Month</p>
                    </div>
                    <p class="grid-jump">I am a organization and I would like to use Robinassistant!</p>
                    <p class="text-green grid-swap-color">Up to 35 professionals </p>
                    <p class="grid-right grid-swap-color">Sign up <i class="fas fa-arrow-right"></i></p>
                    </div></a>
                <a href="{{ route('register') }}"><div class="card">
                    <h3 class="text-green">Organization basic+</h3>
                    <div class="grid-right-price text-white">
                        <p class="price-small">€350,-</p>
                        <p class="text-small">a Month</p>
                    </div>
                    <p class="grid-jump">I am a bigger organisation and I would like to use Robin Assistant</p>
                    <p class="text-green grid-swap-color">Up to 75 professionals</p>
                    <p class="grid-right grid-swap-color">Sign up <i class="fas fa-arrow-right"></i></p>
                    </div></a>
                <a href="#form-link"><div class="card">
                    <h3 class="text-green">Custom plan</h3>
                    <div class="grid-right-price text-white">
                        <p>- - -</p>
                    </div>
                    <p class="grid-jump grid-swap-color">I would like to get in touch to talk about a custom plan.</p>
                    <p class="grid-jump grid-right grid-swap-color">Go to form <i class="fas fa-arrow-right"></i></p>
                </div></a>
            </div>
        </div>
        {{-- Section 7--}}
        <div id="form-link" class="section7 text-white">
            <div class="section7-inner">
                <div class="section7-left">
                    <h2>Contact us!</h2>
                    <p class="contact-padding">Do you have any questions or would you like to contact us to discuss about your custom plan?</p>
                    <p class="contact-padding">Please contact:</p>
                    <div class="contact-padding">
                        <p>Bemika Software</p>
                        <p>Contactweg 36</p>
                        <p>2131JA, Amsterdam</p>
                    </div>
                    <p class="contact-maxwidth">Or fill in the form and we will contact you as soon as possible!</p>
                </div>
                <div class="section7-right">
                    <form action="" method="">
                        @csrf
                        <div class="form-fields">
                            <div class="form-left">
                                <div class="form-section form-small">
                                    <input type="text" name="Company" placeholder="Company">
                                </div>
                                <div class="form-section form-small">
                                    <input type="text" name="Name" placeholder="Name" required>
                                </div>
                                <div class="form-section form-small">
                                    <input type="email" name="Email" placeholder="Email" required>
                                </div>
                                <div class="form-section form-small">
                                    <input type="text" name="website" placeholder="Website">
                                </div>
                            </div>
                            <div class="form-right">
                                <div class="form-section form-big">
                                    <textarea style="resize:none" name="Description" placeholder="Description" required></textarea>
                                </div>
                            </div>
                        </div>
                        <input class="send-button" type="submit" name="send" value="Send">
                    </form>
                </div>
            </div>
        </div>
{{--         Section 8--}}
        <div class="section8">
            <div class="section8-headertext">
                <h2 class="text-white">Partners</h2>
            </div>
            <div class="slider-container">
                <div class="slider">
                    <div class="slide-track">
                        <div class="slide">
                            <a href="https://theflyingdutchmen.com/" target="_blank"><img src="../images/partner1.png"></a>
                        </div>
                        <div class="slide">
                            <a href="http://www.markwerner.nl/" target="_blank"><img src="../images/partner2.png"></a>
                        </div>
                        <div class="slide">
                            <a href="https://brightbabes.nl/" target="_blank"><img src="../images/partner3.png"></a>
                        </div>
                        <div class="slide">
                            <a href="https://foxiko.com/" target="_blank"><img src="../images/partner4.svg"></a>
                        </div>
                        <div class="slide">
                            <a href="https://www.ma-web.nl/nieuws/studenten-helpen-mensen-met-autisme/" target="_blank"><img src="../images/partner5.svg"></a>
                        </div>
                        <div class="slide">
                            <a href="http://autizam.org.rs/" target="_blank"><img src="../images/partner6.png"></a>
                        </div>
                        <div class="slide">
                            <a href="https://www.communicatieinnovatie.nl/" target="_blank"><img src="../images/partner7.png"></a>
                        </div>
                        <div class="slide">
                            <a href="https://theflyingdutchmen.com/" target="_blank"><img src="../images/partner1.png"></a>
                        </div>
                        <div class="slide">
                            <a href="http://www.markwerner.nl/" target="_blank"><img src="../images/partner2.png"></a>
                        </div>
                        <div class="slide">
                            <a href="https://brightbabes.nl/" target="_blank"><img src="../images/partner3.png"></a>
                        </div>
                        <div class="slide">
                            <a href="https://foxiko.com/" target="_blank"><img src="../images/partner4.svg"></a>
                        </div>
                        <div class="slide">
                            <a href="https://www.ma-web.nl/nieuws/studenten-helpen-mensen-met-autisme/" target="_blank"><img src="../images/partner5.svg"></a>
                        </div>
                        <div class="slide">
                            <a href="http://autizam.org.rs/" target="_blank"><img src="../images/partner6.png"></a>
                        </div>
                        <div class="slide">
                            <a href="https://www.communicatieinnovatie.nl/" target="_blank"><img src="../images/partner7.png"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer text-white">
                <div class="policy">
                    <a class="clickable">Privacy policy</a>
                    <a class="clickable">Cookies</a>
                    <a class="clickable">Disclaimer</a>
                </div>
                <div class="brand">
                    <p>&#169; 2021 Robinassist.me  – Site by Loudmouth</p>
                </div>
            </div>
        </div>
        <script src="{{ url('/js/app.js') }}"></script>
    </body>
</html>
