<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retail Worth Sharing</title>
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
            font-size: 15px;
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

    
    .space__hero {
        background-color: #ffffff;
        overflow: hidden;
        width: 100%;
    }

    .space__hero-content {
        display: grid;
        grid-template-columns: 1fr 1fr;
        align-items: center;
        min-height: 100vh;
    }

    .space__hero-text {
        padding: 4rem;
        max-width: 600px;
        justify-self: end;
    }

    .space__hero-text h1 {
        font-family: system-ui, -apple-system, sans-serif;
        font-size: 3.5rem;
        font-weight: 600;
        line-height: 1.2;
        color: #111;
        margin-bottom: 1.5rem;
    }

    .space__hero-text p {
        font-family: system-ui, -apple-system, sans-serif;
        font-size: 1.125rem;
        line-height: 1.6;
        color: #555;
        margin-bottom: 2rem;
    }

    .space__cta-button {
        background-color: #8a2be2;
        color: white;
        border: none;
        padding: 1rem 2rem;
        font-size: 1rem;
        font-weight: 600;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .space__cta-button:hover {
        background-color: #7a1cd1;
    }

    .space__hero-image {
        height: 100%;
        overflow: hidden;
    }

    .space__app-screenshot {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* Responsive Design */
    @media (max-width: 1024px) {
        .space__hero-text h1 {
            font-size: 3rem;
        }
        .space__hero-text {
            padding: 3rem;
        }
    }

    @media (max-width: 768px) {
        .space__hero-content {
            grid-template-columns: 1fr;
            min-height: auto;
        }

        .space__hero-text {
            padding: 3rem 1.5rem;
            max-width: 100%;
            justify-self: center;
            text-align: center;
        }

        .space__hero-text h1 {
            font-size: 2.5rem;
        }

        .space__hero-image {
            height: 50vh;
            width: 100%;
        }
    }

    @media (max-width: 480px) {
        .space__hero-text h1 {
            font-size: 2rem;
        }

        .space__hero-text p {
            font-size: 1rem;
        }

        .space__hero-image {
            height: 40vh;
        }
    }

    .space__partner-features {
        padding: 5rem 2rem;
        background-color: #ffffff;
    }

    .space__container {
        max-width: 1200px;
        margin: 0 auto;
    }

    .space__section-header {
        text-align: center;
        margin-bottom: 4rem;
    }

    .space__section-header h2 {
        font-family: system-ui, -apple-system, sans-serif;
        font-size: 2.5rem;
        font-weight: 600;
        color: #111;
        margin-bottom: 1.5rem;
    }

    .space__section-description {
        max-width: 700px;
        margin: 0 auto;
    }

    .space__section-description p {
        font-family: system-ui, -apple-system, sans-serif;
        font-size: 1.125rem;
        line-height: 1.6;
        color: #555;
        margin-bottom: 0.5rem;
    }

    .space__features-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 3rem;
    }

    .space__feature {
        text-align: center;
    }

    .space__feature-icon {
        width: 64px;
        height: 64px;
        background-color: #f5f5f5;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1.5rem;
    }

    .space__feature-icon svg {
        width: 28px;
        height: 28px;
        color: #333;
    }

    .space__feature-icon img {
        width: 35px;
        height: 28px;
        color: #333;
    }

    .space__feature h3 {
        font-family: system-ui, -apple-system, sans-serif;
        font-size: 1.25rem;
        font-weight: 600;
        color: #111;
        margin-bottom: 1rem;
    }

    .space__feature p {
        font-family: system-ui, -apple-system, sans-serif;
        font-size: 1rem;
        line-height: 1.5;
        color: #555;
    }

    .space-learn__hero {
        min-height: 100vh;
        background-color: #ffffff;
        overflow: hidden;
    }

    .space-learn__hero-content {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 4rem;
        max-width: 1400px;
        margin: 0 auto;
        padding: 2rem;
        min-height: 100vh;
        align-items: center;
    }

    .space-learn__hero-text {
        padding-right: 2rem;
    }

    .space-learn__hero-text h1 {
        font-family: system-ui, -apple-system, sans-serif;
        font-size: 4rem;
        font-weight: 800;
        line-height: 1.1;
        margin-bottom: 2rem;
        color: #000;
    }

    .space-learn__hero-text p {
        font-family: system-ui, -apple-system, sans-serif;
        font-size: 1.25rem;
        line-height: 1.6;
        color: #333;
        margin-bottom: 2.5rem;
        max-width: 600px;
    }

    .space-learn__cta-button {
        display: inline-block;
        background-color: #000;
        color: #fff;
        padding: 1rem 2rem;
        font-size: 1.125rem;
        font-weight: 500;
        text-decoration: none;
        border-radius: 4px;
        transition: background-color 0.3s ease;
    }

    .space-learn__cta-button:hover {
        background-color: #333;
    }

    .space-learn__hero-image {
        position: relative;
        width: 100%;
        height: 100%;
        min-height: 600px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .space-learn__gradient-bg {
        position: absolute;
        top: -20%;
        right: -20%;
        width: 140%;
        height: 140%;
        background: linear-gradient(
            45deg,
            rgba(64, 164, 255, 0.3),
            rgba(128, 204, 255, 0.3),
            rgba(200, 230, 255, 0.3)
        );
        filter: blur(60px);
        border-radius: 50%;
        z-index: 1;
    }

    .space-learn__platform-preview {
        position: relative;
        z-index: 2;
        width: 100%;
        height: auto;
        max-width: 800px;
        border-radius: 8px;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        margin: 0 auto;
    }

    /* Responsive Design */
    @media (max-width: 1200px) {
        .space-learn__hero-text h1 {
            font-size: 3.5rem;
        }
    }

    @media (max-width: 992px) {
        .space-learn__hero-content {
            grid-template-columns: 1fr;
            gap: 2rem;
            padding: 4rem 2rem;
        }

        .space-learn__hero-text {
            padding-right: 0;
            text-align: center;
        }

        .space-learn__hero-text p {
            margin: 0 auto 2.5rem;
        }

        .space-learn__hero-image {
            min-height: 400px;
            order: -1;
        }

        .space-learn__gradient-bg {
            top: -10%;
            right: -10%;
            width: 120%;
            height: 120%;
        }
    }

    @media (max-width: 640px) {
        .space-learn__hero-text h1 {
            font-size: 2.5rem;
        }

        .space-learn__hero-text p {
            font-size: 1.125rem;
        }

        .space-learn__hero-content {
            padding: 2rem 1rem;
        }
    }

    /* Responsive Design */
    @media (max-width: 1024px) {
        .space__features-grid {
            gap: 2rem;
        }
    }

    @media (max-width: 768px) {
        .space__features-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .space__section-header h2 {
            font-size: 2rem;
        }
    }

    @media (max-width: 480px) {
        .space__features-grid {
            grid-template-columns: 1fr;
        }

        .space__partner-features {
            padding: 3rem 1rem;
        }

        .space__section-header {
            margin-bottom: 3rem;
        }

        .space__section-description p {
            font-size: 1rem;
        }
    }


    .space__cta-section {
        padding: 6rem 2rem;
        text-align: center;
        max-width: 800px;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 2rem;
    }

    .space__chevron {
        margin-bottom: 1rem;
        animation: space__bounce 2s infinite;
    }

    @keyframes space__bounce {
        0%, 20%, 50%, 80%, 100% {
            transform: translateY(0);
        }
        40% {
            transform: translateY(-10px);
        }
        60% {
            transform: translateY(-5px);
        }
    }

    .space__cta-section h2 {
        font-family: system-ui, -apple-system, sans-serif;
        font-size: 2.5rem;
        font-weight: 500;
        line-height: 1.3;
        color: #333;
        margin: 0;
    }

    .space__cta-button {
        background-color: #8A2BE2;
        color: white;
        border: none;
        padding: 1rem 2rem;
        font-size: 1rem;
        font-weight: 600;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .space__cta-button:hover {
        background-color: #7a1cd1;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .space__cta-section {
            padding: 4rem 1.5rem;
        }

        .space__cta-section h2 {
            font-size: 2rem;
        }
    }

    @media (max-width: 480px) {
        .space__cta-section h2 {
            font-size: 1.75rem;
        }

        .space__cta-button {
            padding: 0.875rem 1.75rem;
            font-size: 0.875rem;
        }
    }


    .space-faq__section {
        padding: 4rem 1rem;
        background-color: #fff;
    }

    .space-faq__container {
        max-width: 800px;
        margin: 0 auto;
    }

    .space-faq__container h1 {
        text-align: center;
        font-family: system-ui, -apple-system, sans-serif;
        font-size: 2rem;
        font-weight: 600;
        margin-bottom: 1rem;
        color: #111;
    }

    .space-faq__description {
        text-align: center;
        font-family: system-ui, -apple-system, sans-serif;
        font-size: 1rem;
        line-height: 1.6;
        color: #555;
        margin-bottom: 3rem;
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
    }

    .space-faq__accordion {
        display: flex;
        flex-direction: column;
        gap: 1px;
        background-color: #f5f5f5;
        border-radius: 8px;
        overflow: hidden;
    }

    .space-faq__accordion-item {
        background-color: #fff;
    }

    .space-faq__accordion-header {
        width: 100%;
        padding: 1.5rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border: none;
        background: none;
        cursor: pointer;
        text-align: left;
        font-family: system-ui, -apple-system, sans-serif;
        font-size: 1rem;
        color: #111;
        transition: background-color 0.3s ease;
    }

    .space-faq__accordion-header:hover {
        background-color: #f9f9f9;
    }

    .space-faq__chevron {
        transition: transform 0.3s ease;
    }

    .space-faq__accordion-item.active .space-faq__chevron {
        transform: rotate(180deg);
    }

    .space-faq__accordion-content {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease-out;
        background-color: #fff;
    }

    .space-faq__accordion-content p {
        padding: 0 1.5rem 1.5rem;
        margin: 0;
        font-family: system-ui, -apple-system, sans-serif;
        font-size: 1rem;
        line-height: 1.6;
        color: #555;
    }

    .space-faq__accordion-item.active .space-faq__accordion-content {
        max-height: 200px;
    }

    @media (max-width: 640px) {
        .space-faq__section {
            padding: 3rem 1rem;
        }

        h1 {
            font-size: 1.75rem;
        }

        .space-faq__accordion-header {
            padding: 1.25rem;
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

    <section class="space__hero">
        <div class="space__hero-content">
            <div class="space__hero-text">
                <h1>
                    @if($dataSpaceHero[0] == null)
                    Grow your business with The Vendry
                    @else
                    {!! html_entity_decode($dataSpaceHero[0]->heading)!!}
                    @endif
                    <!-- {{ $dataSpaceHero[0]->heading ?? "Grow your business with The Vendry" }} -->
                </h1>
                <p>
                    @if($dataSpaceHero[0] == null)
                    Showcase your offerings and portfolio of previous work, get your name in front of the brands and companies you want to reach, and respond to leads and inquiries with our simple, powerful tools. All for free!
                    @else
                    {!! html_entity_decode($dataSpaceHero[0]->description)!!}
                    @endif
                

                    <!-- {{ $dataSpaceHero[0]->description ??  "Showcase your offerings and portfolio of previous work, get your name in front of the brands and companies you want to reach, and respond to leads and inquiries with our simple, powerful tools. All for free!"}} -->
                </p>
                <a href="{{ $dataSpaceHero[0]->button_link ?? '#' }}">
                    <button class="space__cta-button">{{ $dataSpaceHero[0]->button_title ?? "ADD YOUR BUSINESS"}} </button>
                </a>
            </div>
            <div class="space__hero-image">
                @if(count($dataSpaceHero) == 0)
                <img src=" https://thevendry.com/cdn-cgi/image/width=3840,quality=75,fit=contain,metadata=none,format=auto/https%3A%2F%2Fs3.amazonaws.com%2Fstatic.thevendry.co%2Fproducts%2Fadvertising%2Fbanner-rect.jpeg" alt="The Vendry mobile app interface" class="space__app-screenshot">
                @else
                @foreach($dataSpaceHero as $data)
                <img src="{{ $data->getFirstMedia('hero_image')->getUrl()}}" alt="The Vendry mobile app interface" class="space__app-screenshot">
                @endforeach
                @endif
            </div>
        </div>
    </section>

    <section class="space__partner-features">
        <div class="space__container">
            <header class="space__section-header">
                <h2>
                    @if($dataSpaceSecondSectionHeading[0] == null)
                    Reasons to partner with MultiCo
                    @else
                    {!! html_entity_decode($dataSpaceSecondSectionHeading[0]->heading)!!}
                    @endif
                    <!-- {{ $dataSpaceSecondSectionHeading[0]->heading ?? "Reasons to partner with MultiCo" }} -->
                </h2>
                <div class="space__section-description">

                    <p>
                    @if($dataSpaceSecondSectionHeading[0] == null)
                    MultiCo is a unique concept offering our members venues to work and meet.
                    @else
                    {!! html_entity_decode($dataSpaceSecondSectionHeading[0]->description)!!}
                    @endif
                    
                        <!-- {{ $dataSpaceSecondSectionHeading[0]->description ?? "MultiCo is a unique concept offering our members venues to work and meet."}} -->
                    </p>
                    <!-- <p>Our membership is growing so we want perfect venues for our members to work and spend money.</p> -->
                </div>
            </header>

            <div class="space__features-grid">

                @if(count($dataSpaceSecondSectionIcon) == 0)
                <!-- Feature 1 -->
                <div class="space__feature">
                    <div class="space__feature-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"/>
                            <polyline points="12 6 12 12 16 14"/>
                        </svg>
                    </div>
                    <h3>Increase traffic to your venue</h3>
                    <p>Increased traffic to your under-utilised space during non-peak hours.</p>
                </div>

                <!-- Feature 2 -->
                <div class="space__feature">
                    <div class="space__feature-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"/>
                            <path d="M16 8h-6a2 2 0 100 4h4a2 2 0 110 4H8"/>
                        </svg>
                    </div>
                    <h3>Opportunity to upsell</h3>
                    <p>MultiCo provides you with great leads for expanding your client base.</p>
                </div>

                <!-- Feature 3 -->
                <div class="space__feature">
                    <div class="space__feature-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/>
                            <circle cx="9" cy="7" r="4"/>
                            <path d="M23 21v-2a4 4 0 00-3-3.87"/>
                            <path d="M16 3.13a4 4 0 010 7.75"/>
                        </svg>
                    </div>
                    <h3>Build customer loyalty</h3>
                    <p>Our members regularly return to the same place, bringing with them clients and other colleagues.</p>
                </div>

                <!-- Feature 4 -->
                <div class="space__feature">
                    <div class="space__feature-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="3" y="3" width="18" height="18" rx="2"/>
                            <path d="M3 9h18"/>
                        </svg>
                    </div>
                    <h3>Free advertising</h3>
                    <p>We will advertise your brand across our extensive network.</p>
                </div>

                <!-- Feature 5 -->
                <div class="space__feature">
                    <div class="space__feature-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"/>
                            <path d="M8 14s1.5 2 4 2 4-2 4-2"/>
                            <line x1="9" y1="9" x2="9.01" y2="9"/>
                            <line x1="15" y1="9" x2="15.01" y2="9"/>
                        </svg>
                    </div>
                    <h3>Higher average spend</h3>
                    <p>Our members generally spend more than usual standard customers, bringing you additional revenue.</p>
                </div>

                <!-- Feature 6 -->
                <div class="space__feature">
                    <div class="space__feature-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 2L11 13"/>
                            <path d="M22 2l-7 20-4-9-9-4 20-7z"/>
                        </svg>
                    </div>
                    <h3>Free marketing</h3>
                    <p>We can help manage your marketing content. You decide which content you would like to promote, and we push it on our channels and through media partners.</p>
                </div>
                @else
                 @foreach($dataSpaceSecondSectionIcon as $index => $data)
                 <div class="space__feature">
                    <div class="space__feature-icon">
                        <img src="{{ $data->getFirstMedia('icon_image')->getUrl() }}" alt="">
                    </div>
                    <h3>
                    {!! html_entity_decode($data->heading)!!}

                        <!-- {{ $data->heading }} -->

                    </h3>
                    <p>
                    {!! html_entity_decode($data->description)!!}

                        <!-- {{ $data->description }} -->
                    </p>
                </div>
                 @endforeach
                @endif
            </div>
        </div>
    </section>

    <section class="space-learn__hero">
        <div class="space-learn__hero-content">
            <div class="space-learn__hero-text">
                <h1>
                    @if($dataSpaceThirdSection[0] == null)
                    The world's art collectors, all in one place
                    @else
                    {!! html_entity_decode($dataSpaceThirdSection[0]->heading)!!}
                    @endif
                    

                    <!-- {{ $dataSpaceThirdSection[0]->heading ?? "The world's art collectors, all in one place"}} -->
                </h1>
                <p>
                    @if($dataSpaceThirdSection[0] == null)
                    Across the globe, 3 million+ art enthusiasts use Artsy to discover and buy art with confidence and ease. From New York to Seoul, a collective of 5 million social media followers engage with Artsy's editorial, curatorial, and social content.
                    @else
                    {!! html_entity_decode($dataSpaceThirdSection[0]->description)!!}
                    @endif
                    
                    <!-- {{ $dataSpaceThirdSection[0]->description ?? "Across the globe, 3 million+ art enthusiasts use Artsy to discover and buy art with confidence and ease. From New York to Seoul, a collective of 5 million social media followers engage with Artsy's editorial, curatorial, and social content." }} -->
                </p>
                <a href="{{ $dataSpaceThirdSection[0]->button_link ?? '#'}}" class="space-learn__cta-button">{{ $dataSpaceThirdSection[0]->button_title ?? "Learn More"}}</a>
            </div>
            <div class="space-learn__hero-image">
                <!-- <div class="space-learn__gradient-bg"></div> -->
                @if(count($dataSpaceThirdSection) == 0)
                <img src="https://partners.artsy.net/wp-content/uploads/2024/04/01-1-568x426.png" alt="Artsy platform interface showing gallery exhibitions" class="space-learn__platform-preview">
                @else
                @foreach($dataSpaceThirdSection as $data)
                <img src="{{$data->getFirstMedia('hero_image')->getUrl()}}" alt="Artsy platform interface showing gallery exhibitions" class="space-learn__platform-preview">
                @endforeach
                @endif
                
            </div>
        </div>
    </section>

    <section class="space__cta-section">
        <div class="space__chevron">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6 9L12 15L18 9" stroke="#8A2BE2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
        <h2>
        @if($dataSpaceFourthSection[0] == null)
        Grow your business with The Vendry.
                    @else
                    {!! html_entity_decode($dataSpaceFourthSection[0]->heading)!!}
                    @endif
        
            <!-- {{ $dataSpaceFourthSection[0]->heading ?? "Grow your business with The Vendry." }} -->
        </h2>
        <a href="{{ $dataSpaceFourthSection[0]->button_link ?? 'https://forms.gle/yaJ4mNeDPuxnMsgo9' }}">
            <button class="space__cta-button">{{ $dataSpaceFourthSection[0]->button_title ?? "ADD YOUR BUSSINES"}}</button>
        </a>
    </section>


    <section class="space-faq__section">
            <div class="space-faq__container">
                <h1>
                @if($dataSpaceFifthSectionHeading[0] == null)
                SHOP FAQS
                    @else
                    {!! html_entity_decode($dataSpaceFifthSectionHeading[0]->heading)!!}
                    @endif
                

                <!-- {{ $dataSpaceFifthSectionHeading[0]->heading ?? "SHOP FAQS"}} -->

                </h1>
                <p class="space-faq__description">
                    @if($dataSpaceFifthSectionHeading[0] == null)
                    Find answers to our most frequently asked questions below. If you can't find what you're looking for please contact us and we'll get in touch within 24 hours.
                    @else
                    {!! html_entity_decode($dataSpaceFifthSectionHeading[0]->description)!!}
                    @endif
                    
                    <!-- {{ $dataSpaceFifthSectionHeading[0]->description ?? "Find answers to our most frequently asked questions below. If you can't find what you're looking for please contact us and we'll get in touch within 24 hours."}} -->
                </p>

                <div class="space-faq__accordion">
                    @if(count($dataSpaceFifthSectionFAQ) == 0)
                    <div class="space-faq__accordion-item">
                        <button class="space-faq__accordion-header">
                            <span>WHEN WILL MY ORDER SHIP?</span>
                            <svg class="space-faq__chevron" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <div class="space-faq__accordion-content">
                            <p>Orders typically ship within 1-2 business days. Once shipped, you'll receive a tracking number via email.</p>
                        </div>
                    </div>

                    <div class="space-faq__accordion-item">
                        <button class="space-faq__accordion-header">
                            <span>DO YOU SHIP INTERNATIONALLY?</span>
                            <svg class="space-faq__chevron" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <div class="space-faq__accordion-content">
                            <p>Yes, we ship worldwide! International shipping rates vary by location and will be calculated at checkout.</p>
                        </div>
                    </div>

                    <div class="space-faq__accordion-item">
                        <button class="space-faq__accordion-header">
                            <span>HOW DO POSTERS SHIP?</span>
                            <svg class="space-faq__chevron" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <div class="space-faq__accordion-content">
                            <p>Posters are carefully rolled in protective tubes to ensure they arrive in perfect condition.</p>
                        </div>
                    </div>

                    <div class="space-faq__accordion-item">
                        <button class="space-faq__accordion-header">
                            <span>DO YOU ACCEPT RETURNS OR EXCHANGES?</span>
                            <svg class="space-faq__chevron" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <div class="space-faq__accordion-content">
                            <p>We accept returns within 30 days of delivery. Items must be unused and in original packaging.</p>
                        </div>
                    </div>

                    <div class="space-faq__accordion-item">
                        <button class="space-faq__accordion-header">
                            <span>WHERE'S MY REFUND?</span>
                            <svg class="space-faq__chevron" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <div class="space-faq__accordion-content">
                            <p>Refunds are processed within 5-7 business days after we receive your return.</p>
                        </div>
                    </div>
                    @else
                        @foreach($dataSpaceFifthSectionFAQ as $index => $sixth) 
                        <div class="space-faq__accordion-item">
                            <button class="space-faq__accordion-header">
                                <span>
                                {!! html_entity_decode($sixth->question) !!}
                                    
                                <!-- {{ $sixth->question }} -->

                                </span>
                                <svg class="space-faq__chevron" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            <div class="space-faq__accordion-content">
                                <p>
                                {!! html_entity_decode($sixth->answer) !!}
                                    
                                <!-- {{ $sixth->answer }} -->
                                    
                                </p>
                            </div>
                        </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </section>


    
    <footer class="footer">
        <!-- Newsletter Section -->
        <div class="newsletter">
            <div class="newsletter-content">
                <h2>Newsletter</h2>
                <p>Stay In The Loop. Get the latest resources, updates and discounts to your inbox</p>
                <form class="subscribe-form">
                    <input type="email" placeholder="Enter your email address" required>
                    <button type="submit">Subscribe</button>
                </form>
            </div>
        </div>

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
                    <li><a href="#">Contact</a></li>
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
        <div class="copyright">
            <p>© 2024 BrandStage. All rights reserved.</p>
        </div>
    </footer>
    

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const slider = document.querySelector('.slider');
        const slides = document.querySelectorAll('.slide');
        const dots = document.querySelectorAll('.dot');
        let currentSlide = 0;
        let slideInterval;

        // Function to move to a specific slide
        function goToSlide(index) {
            currentSlide = index;
            slider.style.transform = `translateX(-${currentSlide * 100}%)`;
            
            // Update dots
            dots.forEach(dot => dot.classList.remove('active'));
            dots[currentSlide].classList.add('active');
        }

        // Set up click events for dots
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                goToSlide(index);
                resetInterval();
            });
        });

        // Auto advance slides
        function startSlideShow() {
            slideInterval = setInterval(() => {
                currentSlide = (currentSlide + 1) % slides.length;
                goToSlide(currentSlide);
            }, 5000);
        }

        // Reset interval when manually changing slides
        function resetInterval() {
            clearInterval(slideInterval);
            startSlideShow();
        }

        // Start the slideshow
        startSlideShow();

        const spaceFaqAccordionItems = document.querySelectorAll('.space-faq__accordion-item');

        spaceFaqAccordionItems.forEach(item => {
            const header = item.querySelector('.space-faq__accordion-header');
            
            header.addEventListener('click', () => {
                const currentlyActive = document.querySelector('.space-faq__accordion-item.active');
                
                if(currentlyActive && currentlyActive !== item) {
                    currentlyActive.classList.remove('active');
                }
                
                item.classList.toggle('active');
            });
        });
    </script>
</body>
</html>