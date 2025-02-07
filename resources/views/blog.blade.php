<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retail Worth Sharing</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <!-- Font Awesome for social icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('admin/vendors/toastify/toastify.css') }}">
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

        a {
            text-decoration: inherit;
            color: inherit;
        }

        article {
            display: block;
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

    .section-blog-post-header.has-padding {
        padding-bottom: 6rem;
        width: 100%;
        overflow: hidden;
    }
    .page-padding {
    padding-left: 2.5rem;
    padding-right: 2.5rem;
    padding-top: 2rem;
    }

    .w-container {
    max-width: 940px;
    margin-left: auto;
    margin-right: auto;
    }

    .w-container::before, .w-container::after {
    content: " ";
    grid-area: 1/1/2/2;
    display: table;
    }
    
    .container-large {
    width: 100%;
    max-width: 90rem;
    margin-left: auto;
    margin-right: auto;
    }

    .container-medium, .container-small, .container-large {
    margin-right: auto !important;
    margin-left: auto !important;
    }

    .grid_component {
    flex-flow: wrap;
    justify-content: center;
    align-items: stretch;
    margin: -1rem;
    display: flex;
    overflow: visible;
    }

    .grid_component {
    -ms-overflow-style: none;
    scrollbar-width: none;
    }

    .grid_component.is-home-hero {
    justify-content: flex-start;
    align-items: stretch;
    }

    .grid_item {
    width: 33.3333%;
    height: auto;
    padding: 1rem;
    }

    .grid_item.is-home-hero-image {
    flex: 1;
    align-items: center;
    width: auto;
    display: flex;
    position: relative;
    }

    .is-blog-hero {
    align-self: center;
    width: 50%;
    }

    .grid_item.is-50-percent {
    width: 50%;
    }

    .header-breadcrumb_component {
        color: #333;
        justify-content: flex-start;
        align-items: center;
        margin-left: -.675rem;
        display: flex;
    }

    .header-breadcrumb-link {
    color: #333;
    background-color: #fce8e800;
    border-radius: .75rem;
    padding: .25rem .675rem;
    font-weight: 700;
    transition: color .2s,background-color .2s;
    }

    .margin-xxsmall {
    margin: .25rem;
    }

    .margin-horizontal {
    margin-top: 0;
    margin-bottom: 0;
    }

    .w-embed::before, .w-embed::after {
    content: " ";
    grid-area: 1/1/2/2;
    display: table;
    }

    .w-embed::after {
    clear: both;
    }

    svg:not(:root) {
    overflow: hidden;
    }

    .margin-large {
    margin: 3rem;
    }

    .margin-vertical {
    margin-left: 0;
    margin-right: 0;
    }

    .text-size-xhuge {
    font-size: 4rem;
    text-wrap: balance;
    line-height: 1.1;
    }

    .text-size-normal {
    font-size: 1rem;
    }

    .text-weight-medium {
    font-weight: 500;
    }

    .w-layout-vflex {
    flex-direction: column;
    align-items: flex-start;
    display: flex;
    }

    .blog-subtitle_author {
    flex-flow: row;
    display: inline-block;
    }

    .w-inline-block {
    max-width: 100%;
    display: inline-block;
    }

    .blog-subtitle-avatar {
    object-fit: cover;
    border-radius: 50%;
    width: 1.5rem;
    height: 1.5rem;
    margin-right: .5rem;
    transition: box-shadow .2s;
    }

    .display-inline {
    display: inline;
    }

    .hover-opacity {
    transition: opacity .2s;
    }

    .image_component {
    width: 100%;
    padding-top: 66.66%;
    position: relative;
    overflow: hidden;
    }

    .image_component.is-16by9-2-2 {
    aspect-ratio: 16/9;
    padding-top: 0%;
    overflow: hidden;
    }

    .image_asset {
    object-fit: cover;
    width: 100%;
    height: 100%;
    position: absolute;
    inset: 0%;
    }

    .section-blog-post-content{
        display: block;
    }

    .padding-huge {
    padding: 6rem;
    }

    .padding-bottom {
    padding-top: 0;
    padding-left: 0;
    padding-right: 0;
    }

    .blog-content_grid {
    grid-column-gap: 8rem;
    grid-row-gap: 8rem;
    flex-flow: row;
    justify-content: space-between;
    align-items: flex-start;
    width: 100%;
    display: flex;
    }

    .blog-content_text {
    max-width: 100rem;
    }

    .rich-text-element {
    color: #333;
    font-size: 1.125rem;
    line-height: 2rem;
    }

    .w-richtext > :first-child {
    margin-top: 0;
    }

    .rich-text-element p {
    color: #333;
    margin-bottom: 1.5rem;
    font-size: 1.25rem;
    }

    .rich-text-element ol {
        margin-left: 50px;
        margin-bottom: 1.5rem;
    }

    .rich-text-element h1,h2,h3,h4,h5,h6 {
        margin-bottom: 1rem;
    }

    .rich-text-element figure {
        margin-bottom: 1.5rem;
    }

    .margin-xlarge {
    margin: 4rem;
    }

    .margin-top {
    margin-bottom: 0;
    margin-left: 0;
    margin-right: 0;
    }

    .blog-author_component {
    grid-column-gap: 1rem;
    grid-row-gap: 1rem;
    justify-content: flex-start;
    align-items: flex-start;
    display: flex;
    }

    .blog-author_image {
    border-radius: 50%;
    flex: none;
    width: 3rem;
    height: 3rem;
    transition: box-shadow .2s;
    position: relative;
    overflow: hidden;
    }

    .author_content-wrapper {
    flex-direction: column;
    justify-content: flex-start;
    align-items: flex-start;
    max-width: 100%;
    display: flex;
    }

    .text-size-large {
    font-size: 1.5rem;
    text-wrap: balance;
    }

    .text-weight-medium {
    font-weight: 500;
    }

    .flex-center {
    justify-content: center;
    align-items: center;
    display: flex;
    }

    .text-style-muted.is-50-percent {
    opacity: .5;
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

    <div id="blog-konten">
        <header class="section-blog-post-header has-padding">
            <div class="page-padding">
                <div class="container-large w-container">
                    <div class="grid_component is-home-hero">
                        <div class="grid_item is-blog-hero is-50-percent is-tablet-100">
                            <div class="header-breadcrumb_component">
                                <a href="#" class="header-breadcrumb-link">Blog</a>
                                <div class="margin-horizontal margin-xxsmall w-embed">
                                    <svg width="8" height="10" viewBox="0 0 8 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.86665 5.38991L2.41711 9.83945C2.31008 9.94648 2.18011 10 2.0272 10C1.8743 10 1.74433 9.94648 1.63729 9.83945L1.1327 9.33486C1.02567 9.22783 0.964509 9.09786 0.949219 8.94495C0.949219 8.79205 1.00274 8.66208 1.10977 8.55505L4.66482 5L1.10977 1.44495C1.00274 1.33792 0.949219 1.20795 0.949219 1.05505C0.964509 0.902141 1.02567 0.772171 1.1327 0.665138L1.63729 0.16055C1.74433 0.0535168 1.8743 0 2.0272 0C2.18011 0 2.31008 0.0535168 2.41711 0.16055L6.86665 4.61009C6.98897 4.71713 7.05014 4.8471 7.05014 5C7.05014 5.1529 6.98897 5.28287 6.86665 5.38991Z"
                                        fill="currentColor"></path>
                                    </svg>
                                </div>
                                <a href="#" class="header-breadcrumb-link">Facilitation</a>
                            </div>
                            <div class="margin-vertical margin-large">
                                <h1 class="text-size-xhuge">
                                    Tools for consulting workshops: Run your next session with Mural
                                </h1>
                            </div>
                            <div class="text-size-normal text-weight-medium">
                                <div class="w-layout-vflex blog-subtitle_author">
                                    <a href="#" class="w-inline-block">
                                        <img class="blog-subtitle-avatar" sizes="100vw" src="https://cdn.prod.website-files.com/63062129119620a44791a2eb/67462cf9d655077dd65aef28_T024JF7B3-U07QZV9EJ4Q-baa2eca98356-512.webp" alt="">
                                    </a>
                                    <a href="#" class="display-inline hover-opacity">Brett Laili</a>
                                </div>
                                <div class="w-layout-vflex display-inline mobile-display-block">
                                    <div class="display-inline mobile-display-none">  •  </div>
                                    <div class="display-inline">Updated:</div>
                                    <div class="display-inline">January 6, 2025</div>
                                    <div class="display-inline mobile-display-none">  •  </div>
                                    <div class="display-inline">5</div>
                                    <div class="display-inline"> min read</div>
                                </div>
                            </div>
                        </div>
                        <div class="grid_item is-home-hero-image">
                            <div class="image_component is-16by9-2-2">
                                <img class="image_asset" sizes="(max-width: 479px) 93vw, (max-width: 767px) 96vw, (max-width: 991px) 92vw, 45vw" src="https://cdn.prod.website-files.com/63062129119620a44791a2eb/675c93aac3723a841b23246b_Tools_for_consulting_workshops-Blog-Hero-1440x810_2x.webp" alt="Abstract illustration of people participating in a virtual workshop">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section class="section-blog-post-content">
            <div class="page-padding">
                <div class="container-large w-container">
                    <div class="w-layout-vflex padding-bottom padding-huge">
                        <div class="blog-content_grid">
                            <div class="blog-content_text">
                                <article class="rich-text-element w-richtext">
                                    <p>
                                    You want the best for your clients‌ — ‌that’s probably why you got into consulting in the first place. The best way to set your clients up for success is by running a 
                                    
                                    <strong>flawless consulting workshop</strong>
                                    . The
                                    <strong>consultancy workshop</strong>
                                    is where you work with your client to identify problems and implement solutions for their business. It’s the culmination of all your hard work and research. That’s why having strong 
                                    <strong>consulting workshop methods</strong>
                                    matters. 
                                    </p>
                                    <p>
                                    We’ve helped consultants connect with clients and facilitate decision making with the 
                                    <a href="https://www.mural.co/blog/collaboration-tools-consultants">Top 12 Collaboration Tools for Consultants</a>
                                    . We’ll help you add the best tools to your consulting toolbox. These tools will help you run perfect consulting workshops that can help your client get results, whether you’re running a workshop for planning, brainstorming, team training, or anything else.
                                    </p>
                                </article>
                                <div class="margin-top margin-xlarge">
                                    <div class="blog-author_component">
                                        <a class="blog-author_image w-inline-block" href="https://www.mural.co/profile/brett-lalli">
                                            <img class="image_asset" src="https://cdn.prod.website-files.com/63062129119620a44791a2eb/67462cf9d655077dd65aef28_T024JF7B3-U07QZV9EJ4Q-baa2eca98356-512.webp" alt="">
                                        </a>
                                        <div class="author_content-wrapper">
                                            <a href="" class="text-size-large text-weight-medium hover-opacity">Brett Lalli</a>
                                            <div class="text-size-normal">
                                            Brett is a freelance blogger and editor at Mural. Her approach to writing (and life) is one of continuous learning, insatiable curiosity, idealism, free-flowing iced coffee, and deep connection with teams, people, ideas, art, and nature.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="margin-top margin-large flex-center">
                                    <div class="text-style-muted is-50-percent">Published on </div>
                                    <div class="text-style-muted is-50-percent">January 6, 2025</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('admin/vendors/toastify/toastify.js') }}"></script>
    <script src="{{ asset('admin/js/app.js') }}"></script>
    <script>
        function getSlugFromUrl() {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get('slug');
        }
        document.addEventListener('DOMContentLoaded', function() {
            const slugName = getSlugFromUrl();
           
            loadContent(slugName);

        });

        function loadContent(slug) {
            let blogContent = $("#blog-konten").empty();
            var baseUrl = window.location.origin;
            const url = `${baseUrl}/api/v1/getBlog/${slug}`;

            ajaxData(url, 'GET', [], function(resp) {
                const date = new Date(resp.data.created_at);
                const options = { year: 'numeric', month: 'long', day: 'numeric' };
                
                let kontenItem = `
                    <header class="section-blog-post-header has-padding">
                        <div class="page-padding">
                            <div class="container-large w-container">
                                <div class="grid_component is-home-hero">
                                    <div class="grid_item is-blog-hero is-50-percent is-tablet-100">
                                        <div class="header-breadcrumb_component">
                                            <a href="{{ url('insights') }}" class="header-breadcrumb-link">Blog</a>
                                            <div class="margin-horizontal margin-xxsmall w-embed">
                                                <svg width="8" height="10" viewBox="0 0 8 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6.86665 5.38991L2.41711 9.83945C2.31008 9.94648 2.18011 10 2.0272 10C1.8743 10 1.74433 9.94648 1.63729 9.83945L1.1327 9.33486C1.02567 9.22783 0.964509 9.09786 0.949219 8.94495C0.949219 8.79205 1.00274 8.66208 1.10977 8.55505L4.66482 5L1.10977 1.44495C1.00274 1.33792 0.949219 1.20795 0.949219 1.05505C0.964509 0.902141 1.02567 0.772171 1.1327 0.665138L1.63729 0.16055C1.74433 0.0535168 1.8743 0 2.0272 0C2.18011 0 2.31008 0.0535168 2.41711 0.16055L6.86665 4.61009C6.98897 4.71713 7.05014 4.8471 7.05014 5C7.05014 5.1529 6.98897 5.28287 6.86665 5.38991Z"
                                                    fill="currentColor"></path>
                                                </svg>
                                            </div>
                                            <a href="#" class="header-breadcrumb-link">${resp.data.blog_slug}</a>
                                        </div>
                                        <div class="margin-vertical margin-large">
                                            <h1 class="text-size-xhuge">
                                                ${resp.data.title}
                                            </h1>
                                        </div>
                                        <div class="text-size-normal text-weight-medium">
                                            <div class="w-layout-vflex blog-subtitle_author">
                                                <a href="#" class="w-inline-block">
                                                    <img class="blog-subtitle-avatar" sizes="100vw" src="https://cdn.prod.website-files.com/63062129119620a44791a2eb/67462cf9d655077dd65aef28_T024JF7B3-U07QZV9EJ4Q-baa2eca98356-512.webp" alt="">
                                                </a>
                                                <a href="#" class="display-inline hover-opacity">${resp.data.published_by}</a>
                                            </div>
                                            <div class="w-layout-vflex display-inline mobile-display-block">
                                                <div class="display-inline mobile-display-none">  •  </div>
                                                <div class="display-inline">Updated:</div>
                                                <div class="display-inline">${date.toLocaleDateString('en-US', options)}</div>
                                                <div class="display-inline mobile-display-none">  •  </div>
                                                <div class="display-inline">5</div>
                                                <div class="display-inline"> min read</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid_item is-home-hero-image">
                                        <div class="image_component is-16by9-2-2">
                                            <img class="image_asset" sizes="(max-width: 479px) 93vw, (max-width: 767px) 96vw, (max-width: 991px) 92vw, 45vw" src="${resp.data.blog_image[0].url}" alt="Abstract illustration of people participating in a virtual workshop">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>

                    <section class="section-blog-post-content">
                        <div class="page-padding">
                            <div class="container-large w-container">
                                <div class="w-layout-vflex padding-bottom padding-huge">
                                    <div class="blog-content_grid">
                                        <div class="blog-content_text">
                                            <article class="rich-text-element w-richtext">
                                                ${resp.data.description}
                                            </article>
                                            <div class="margin-top margin-xlarge">
                                                <div class="blog-author_component">
                                                    <a class="blog-author_image w-inline-block" href="https://www.mural.co/profile/brett-lalli">
                                                        <img class="image_asset" src="https://cdn.prod.website-files.com/63062129119620a44791a2eb/67462cf9d655077dd65aef28_T024JF7B3-U07QZV9EJ4Q-baa2eca98356-512.webp" alt="">
                                                    </a>
                                                    <div class="author_content-wrapper">
                                                        <a href="" class="text-size-large text-weight-medium hover-opacity">${resp.data.published_by}</a>
                                                        <div class="text-size-normal">
                                                        Brett is a freelance blogger and editor at Mural. Her approach to writing (and life) is one of continuous learning, insatiable curiosity, idealism, free-flowing iced coffee, and deep connection with teams, people, ideas, art, and nature.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="margin-top margin-large flex-center">
                                                <div class="text-style-muted is-50-percent">Published on </div>
                                                <div class="text-style-muted is-50-percent">${date.toLocaleDateString('en-US', options)}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                `;

                blogContent.append(kontenItem);
            });
        }
    </script>
</body>
</html>