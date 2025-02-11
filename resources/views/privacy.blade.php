<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BrandStage</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/icon/favicon-32x32.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <!-- Font Awesome for social icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: system-ui, -apple-system, sans-serif;
        }

        root {
            --primary-color: #ffcd86;
            --hover-color: #ffcd86;
        }

        body {    
            background: #fcf8f1;
        }
        
        p {
            margin-top: 0;
        }

        img {
            max-width: 100%;
            vertical-align: middle;
            display: inline-block;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.5rem 4rem;
            /* padding: 3.5rem 4rem; */
            position: relative;
            /* background-color: rgba(0, 0, 0, 0); */
            background-color: #333;
            z-index: 10;
        }

        .logo-text {
            color: #f5f5f5;
            font-size: 25px;
            font-weight: 300;
        }

        .logo {
            width: 59px;
            flex: 0 auto;
            max-width: 100%;
            display: inline-block;
        }

        .brand-2 {
            height: 100%;
            align-items: center;
            display: flex;
        }

        .w-nav-brand {
            float: left;
            color: #333;
            text-decoration: none;
            position: relative;
        }

        .nav-links {
            display: flex;
            /* gap: 2rem; */
            height: 100%;
            justify-content: flex-end;
            align-items: center;
            font-size: 15px;
        }
        

        .w-nav-menu {
            float: right;
            position: relative;
        }

        .nav-links a {
            text-decoration: none;
            /* color: #333; */
            color: #f5f5f5;
        }

        .nav-link {
            color: var(--black);
            font-family: museo-sans, sans-serif;
            font-size: 18px;
            font-weight: 300;
        }

        .w-nav-link {
            vertical-align: top;
            color: #222;
            text-align: left;
            margin-left: auto;
            margin-right: auto;
            padding: 20px;
            text-decoration: none;
            display: inline-block;
            position: relative;
        }

        .sign-in {
            border: 2px solid #f5f5f5;
            padding: 0.7rem 1.8rem;
            border-radius: 100px;
        }

        .sign-in.outline:hover {
            border-style: none;
            border-color: #ffcd86;
        }
        
        .sign-in:hover {
            color: #333;
            background-color: #ffcd86;
        }

        .legal-section {
        padding: 4rem 1rem;
        /* background-color: #; */
        min-height: 100vh;
    }

    .privacy__container {
        max-width: 800px;
        margin: 0 auto;
    }

   .privacy__container h1 {
        font-family: system-ui, -apple-system, sans-serif;
        font-size: 2rem;
        font-weight: 600;
        color: #111;
        margin-bottom: 2rem;
        text-align: center;
    }

    .privacy__tabs {
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        overflow: hidden;
    }

    .privacy__tabs input[type="radio"] {
        display: none;
    }

    .privacy__tabs-nav {
        display: flex;
        position: relative;
        background: #f1f3f5;
        padding: 0.5rem;
        gap: 0.5rem;
    }

    .privacy__tab-label {
        flex: 1;
        padding: 1rem;
        text-align: center;
        cursor: pointer;
        font-family: system-ui, -apple-system, sans-serif;
        font-weight: 500;
        color: #666;
        border-radius: 8px;
        transition: all 0.3s ease;
        position: relative;
        z-index: 1;
    }

    .privacy__tab-indicator {
        position: absolute;
        height: calc(100% - 1rem);
        width: calc(50% - 0.75rem);
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        left: 0.5rem;
        top: 0.5rem;
        transition: transform 0.3s ease;
    }

    #privacy:checked ~ .privacy__tabs-nav .privacy__tab-indicator {
        transform: translateX(calc(100% + 0.5rem));
    }

    #terms:checked ~ .privacy__tabs-nav label[for="terms"],
    #privacy:checked ~ .privacy__tabs-nav label[for="privacy"] {
        color: #111;
    }

    .privacy__tabs-content {
        padding: 2rem;
        background: #fff;
    }

    .privacy__tab-panel {
        display: none;
    }

    #terms:checked ~ .privacy__tabs-content #terms-panel,
    #privacy:checked ~ .privacy__tabs-content #privacy-panel {
        display: block;
        animation: fadeIn 0.3s ease;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(5px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .privacy__tab-panel h2 {
        font-family: system-ui, -apple-system, sans-serif;
        font-size: 1.75rem;
        font-weight: 600;
        color: #111;
        margin-bottom: 2rem;
    }

    .privacy__terms-section {
        margin-bottom: 2rem;
    }

    .privacy__terms-section h3 {
        font-family: system-ui, -apple-system, sans-serif;
        font-size: 1.25rem;
        font-weight: 600;
        color: #111;
        margin-bottom: 1rem;
    }

    .privacy__terms-section p {
        font-family: system-ui, -apple-system, sans-serif;
        font-size: 1rem;
        line-height: 1.6;
        color: #444;
        margin-bottom: 1rem;
    }

    /* Responsive Design */
    @media (max-width: 640px) {
        .legal-section {
            padding: 2rem 1rem;
        }

        h1 {
            font-size: 1.5rem;
        }

        .privacy__tabs-content {
            padding: 1.5rem;
        }

        h2 {
            font-size: 1.5rem;
        }

        h3 {
            font-size: 1.125rem;
        }

        .privacy__tab-label {
            padding: 0.75rem;
            font-size: 0.875rem;
        }
    }


    .footer {
        background-color: #1a1a1a;
        color: white;
        padding: 0 0 2rem 0;
        font-family: system-ui, -apple-system, sans-serif;
    }

    /* Newsletter Section */
    .newsletter {
        background-color: #222;
        padding: 4rem 2rem;
        text-align: center;
    }

    .newsletter-content {
        max-width: 800px;
        margin: 0 auto;
    }

    .newsletter h2 {
        font-size: 1.8rem;
        margin-bottom: 1rem;
        position: relative;
        display: inline-block;
        font-weight: 500;
    }

    .newsletter h2::before {
        content: '';
        position: absolute;
        top: -1rem;
        left: 50%;
        transform: translateX(-50%);
        width: 50px;
        height: 2px;
        background-color: white;
    }

    .newsletter p {
        font-size: 1.2rem;
        margin-bottom: 1rem;
        color: #f5f5f5;
        margin-top: 2rem;
    }

    .subscribe-form {
        display: flex;
        max-width: 600px;
        margin: 0 auto;
        gap: 0;
    }

    .subscribe-form input {
        flex: 1;
        padding: 1rem;
        border: none;
        border-radius: 4px 0 0 4px;
        font-size: 1rem;
    }

    .subscribe-form button {
        padding: 1rem 2rem;
        background-color: #ffd700;
        border: none;
        border-radius: 0 4px 4px 0;
        color: black;
        font-weight: bold;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .subscribe-form button:hover {
        background-color: #ffed4a;
    }

    /* Main Footer Content */
    .footer-content {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 2rem;
        padding: 4rem 2rem;
        max-width: 1200px;
        margin: 0 auto;
    }

    .footer-section h3 {
        color: white;
        margin-bottom: 1.5rem;
        font-size: 1.2rem;
    }

    .footer-section ul {
        list-style: none;
        padding: 0;
    }

    .footer-section ul li {
        margin-bottom: 0.8rem;
    }

    .footer-section ul a {
        color: #999;
        text-decoration: none;
        transition: color 0.3s;
    }

    .footer-section ul a:hover {
        color: white;
    }

    /* Social Icons */
    .social-icons {
        display: flex;
        gap: 1rem;
        margin-top: 1rem;
    }

    .social-icons a {
        color: white;
        text-decoration: none;
        font-size: 1.5rem;
    }

    /* Copyright */
    .copyright {
        text-align: center;
        padding-top: 2rem;
        border-top: 1px solid #333;
        margin-top: 2rem;
        color: #666;
    }

    @media (max-width: 1200px) {
        .feature-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 640px) {
        .feature-grid {
            grid-template-columns: 1fr;
        }

        .features {
            padding: 3rem 1rem;
        }

        .feature-item {
            text-align: center;
            align-items: center;
        }
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .footer-content {
            grid-template-columns: repeat(2, 1fr);
        }

        .subscribe-form {
            flex-direction: column;
        }

        .subscribe-form input {
            border-radius: 4px;
            margin-bottom: 1rem;
        }

        .subscribe-form button {
            border-radius: 4px;
        }
    }

    @media (max-width: 480px) {
        .footer-content {
            grid-template-columns: 1fr;
        }

        .newsletter h2 {
            font-size: 2rem;
        }

        .newsletter p {
            font-size: 1rem;
        }
    }
    </style>
</head>
<body>
    <nav class="navbar">
    <a href="{{ url('home') }}" class="brand-2 w-nav-brand">
        <span class="logo-text">{{ $navbarSection[0] == null ? 'BrandStage' : $navbarSection[0]->logo_text }}</span>
        </a>
        <div class="nav-links w-nav-menu">
            @if(count($navbarNavLink) == 0)
            <a href="{{ url('brands') }}" class="nav-link w-nav-link">Brands</a>
            <a href="{{ url('findSpace') }}" class="nav-link w-nav-link">Spaces</a>
            <a href="{{ url('insights') }}" class="nav-link w-nav-link">Insights</a>
            <a href="" class="nav-link w-nav-link">FAQ</a>
            <a href="{{ url('about') }}" class="nav-link w-nav-link">About Us</a>
            <a href="#" class="nav-link w-nav-link">Find My Spaces</a>
            <a href="{{ url('privacy') }}" class="nav-link w-nav-link">TOS/Privacy</a>
            @else 
                @foreach($navbarNavLink as $index => $data)
                    <a href="{{ $data->navlink_link }}" class="nav-link w-nav-link">{{ $data->navlink_title }}</a>
                @endforeach
            @endif

            <!-- <a href="{{ $navbarSection[0] == null ? '#' : $navbarSection[0]->signin_link }}" class="sign-in outline">{{ $navbarSection[0] == null ? 'Sign In' : $navbarSection[0]->signin_title }}</a> -->
        </div>
    </nav>
   
    <section class="legal-section">
        <div class="privacy__container">
            <h1>Terms and Conditions / Privacy Policy</h1>
            
            <div class="privacy__tabs">
                <input type="radio" id="terms" name="tabs" checked>
                <input type="radio" id="privacy" name="tabs">
                
                <nav class="privacy__tabs-nav">
                    <label for="terms" class="privacy__tab-label">Terms & Conditions</label>
                    <label for="privacy" class="privacy__tab-label">Privacy Policy</label>
                    <div class="privacy__tab-indicator"></div>
                </nav>

                <div class="privacy__tabs-content">
                    <!-- Terms & Conditions Content -->
                    <!-- <section class="privacy__terms-section">
                            <h3>1. Acceptance of Terms</h3>
                            <p>By accessing and using our service, you agree to these Terms & Conditions. If you do not agree, please do not use our platform.</p>
                        </section>

                        <section class="privacy__terms-section">
                            <h3>2. User Accounts</h3>
                            <p>Users are responsible for maintaining the confidentiality of their account credentials and for all activities that occur under their account.</p>
                        </section>

                        <section class="privacy__terms-section">
                            <h3>3. Service Usage</h3>
                            <p>Our services must be used in accordance with applicable laws and regulations. Any misuse may result in immediate termination of access.</p>
                        </section> -->
                    <div class="privacy__tab-panel" id="terms-panel">
                        <h2>Terms & Conditions</h2>
                        
                        @foreach ($dataTerms as $index => $data)
                            <section class="privacy__terms-section">
                                <h3>{{ $loop->iteration }}. {{ $data->list_heading }}</h3>
                                <p>{!! html_entity_decode($data->list_description) !!}</p>
                            </section>
                        @endforeach
                    </div>

                    <!-- Privacy Policy Content -->
                    <div class="privacy__tab-panel" id="privacy-panel">
                        <h2>Privacy Policy</h2>
                        <!-- <section class="privacy__terms-section">
                            <h3>1. Information Collection</h3>
                            <p>We collect information that you provide directly to us, including but not limited to personal information, usage data, and communication preferences.</p>
                        </section>

                        <section class="privacy__terms-section">
                            <h3>2. Data Usage</h3>
                            <p>Your data is used to provide and improve our services, communicate with you, and ensure platform security.</p>
                        </section>

                        <section class="privacy__terms-section">
                            <h3>3. Data Protection</h3>
                            <p>We implement appropriate security measures to protect your personal information from unauthorized access or disclosure.</p>
                        </section> -->

                        @foreach ($dataPrivacy as $index => $data)
                            <section class="privacy__terms-section">
                                <h3>{{ $loop->iteration }}. {{ $data->list_heading }}</h3>
                                <p>{!! html_entity_decode($data->list_description) !!}</p>
                            </section>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <footer class="footer">
        <!-- Newsletter Section -->
        <!-- <div class="newsletter">
            <div class="newsletter-content">
                <h2>Newsletter</h2>
                <p>Stay In The Loop. Get the latest resources, updates and discounts to your inbox</p>
                <form class="subscribe-form">
                    <input type="email" placeholder="Enter your email address" required>
                    <button type="submit">Subscribe</button>
                </form>
            </div>
        </div> -->

        <!-- Main Footer Content -->
        <div class="footer-content">
            <!-- Brand Section -->
            <div class="footer-section">
                <h3>BrandStage</h3>
                <div class="social-icons">
                    <!-- <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                    <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" aria-label="Email"><i class="far fa-envelope"></i></a> -->
                </div>
            </div>

            <!-- Company Section -->
            <div class="footer-section">
                <h3>Company Information</h3>
                <ul>
                    <li><a href="{{url('about')}}">About Us</a></li>
                    <li><a href="{{url('about')}}">Contact</a></li>
                </ul>
            </div>

            <!-- Services Section -->
            <div class="footer-section">
                <h3>Services</h3>
                <ul>
                    <li><a href="{{url('brands')}}">For Brands</a></li>
                    <li><a href="{{url('findSpace')}}">For Spaces</a></li>
                </ul>
            </div>

            <!-- Resources Section -->
            <div class="footer-section">
                <h3>Resources</h3>
                <ul>
                    <li><a href="{{url('insights')}}">Insights</a></li>
                </ul>
            </div>

            <!-- Legal Section -->
            <div class="footer-section">
                <h3>Legal</h3>
                <ul>
                    <li><a href="{{url('privacy')}}">Privacy Policy </a></li>
                    <li><a href="{{url('privacy')}}">Terms of Service </a></li>
                </ul>
            </div>
        </div>

        <!-- Copyright -->
        <!-- <div class="copyright">
            <p>© 2024 BrandStage. All rights reserved.</p>
        </div> -->
    </footer>
    

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
    
    </script>
</body>
</html>