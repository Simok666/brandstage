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
            /* max-width: 100%; */
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

        .hero {
            position: relative;
            padding : 140px 5% 0;
            min-height: 0;
            background-color: #fcf8f1;
        }

        .container.add-bottom-padding {
            max-width: 1420px;
            margin-bottom: 150px;
        }

        .container {
            z-index: 1;
            max-width: 1280px;
            margin-top: 0;
            position: relative;
        }

        .w-container {
        max-width: 940px;
        margin-left: auto;
        margin-right: auto;
        }

        .image-25 {
        max-width: 100%;
        margin-top: auto;
        margin-bottom: auto;
        position: absolute;
        top: 0%;
        bottom: 0%;
        left: -50px;
        right: auto;
        }

        .grid-9 {
            z-index: 10;
            grid-column-gap: 2rem;
            grid-row-gap: 2rem;
            grid-template-rows: auto;
            grid-template-columns: .75fr 1fr;
            position: relative;
        }

        .w-layout-grid {
        grid-row-gap: 16px;
            grid-column-gap: 16px;
            grid-template-rows: auto auto;
            grid-template-columns: 1fr 1fr;
            grid-auto-columns: 1fr;
            display: grid;
            }

            .banner {
            position: relative;
            width: 100%;
            min-height: 600px;
            background-color: #EEF0FB;
            padding: 2rem;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .content {
            text-align: center;
            max-width: 800px;
            z-index: 2;
            padding: 2rem;
        }

        .greeting {
            color: #0047AB;
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            letter-spacing: 0.05em;
        }

        .headline {
            font-size: 3.5rem;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 2rem;
            color: #1a1a1a;
        }

        .products-left,
        .products-right {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 300px; /* Sesuaikan ukuran jika perlu */
            height: 400px; /* Sesuaikan ukuran jika perlu */
            background-size: contain; /* Menghindari pemotongan gambar */
            background-repeat: no-repeat;
            background-position: center;
        }

        .products-left img,
        .products-right img {
            width: 500px; 
            height: auto; /* Agar proporsi tetap terjaga */
            max-height: 100%;
        }

        .products-left {
            left: -4%;
            /* background-image: url('public/assets/img/img-1'); */
            background-position: left center;
        }

        .products-right {
            right: 10%;
            /* background-image: url('public/assets/img/img-2'); */
            background-position: right center;
        }
        
        .about__container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 4rem 2rem;
        }

        .about__section {
            max-width: 800px;
        }

        .about__heading {
            font-family: Georgia, serif;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            line-height: 1.2;
            color: #000000;
        }

        .about__description {
            font-size: 1.125rem;
            line-height: 1.6;
            color: #2a2a2a;
            max-width: 720px;
        }

        .about__features-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1.5rem;
            max-width: 1200px;
            padding: 4rem 2rem;
            margin: 0 auto;
        }

        .about__feature-card {
            background: white;
            padding: 2rem;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
        }

        .about__feature-card:hover {
            transform: translateY(-5px);
        }

        .about__icon-wrapper {
            width: 80px;
            height: 80px;
            margin: 0 auto 1.5rem;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            margin-top: -60px;
            margin-left: 60px;
        }

        .about__icon {
            width: 40px;
            height: 40px;
            object-fit: contain;
        }

        .about__add-tasks .about__icon-wrapper {
            background: #2ecc71;
        }

        .about__time-boxing .about__icon-wrapper {
            background: #3498db;
        }

        .about__prioritisation .about__icon-wrapper {
            background: #ff69b4;
        }

        .about__video-calls .about__icon-wrapper {
            background: #ff7f50;
        }

        .about__feature-title {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: #1a1a1a;
            padding-top: 40px;
        }

        .about__feature-description {
            font-size: 0.875rem;
            line-height: 1.5;
            color: #666;
        }

        .about-contact__container {
            max-width: 1200px;
            padding : 4rem 2rem;
            margin: 0 auto;
        }

        .about-contact__heading {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 2rem;
        }

        .about-contact__grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
        }

        .about-contact__section {
            background: #f8f8f8;
            padding: 2rem;
            border: 1px solid #333;
        }

        .about-contact__title {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: #000;
        }

        .about-contact__info {
            font-size: 0.9rem;
            color: #4a4a4a;
        }

        .about-contact__info p {
            margin-bottom: 0.5rem;
        }

        .about-contact__email-link {
            color: #ff1493;
            text-decoration: none;
            display: inline-block;
            margin-top: 1rem;
            position: relative;
        }

        .about-contact__email-link:hover {
            text-decoration: underline;
        }

        .about-contact__faq-link {
            color: #0066cc;
            text-decoration: none;
        }

        .about-contact__faq-link:hover {
            text-decoration: underline;
        }

        .about__links-section {
            max-width: 1200px;
            margin: 0 auto;
            padding: 4rem 2rem;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
        }

        .about__link-column {
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1rem;
        }

        .about__column-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: #000;
            margin-bottom: 0.5rem;
        }

        .about__column-description {
            font-size: 0.875rem;
            color: #666;
            margin-bottom: 1rem;
            max-width: 250px;
        }

        .about__link-button {
            display: inline-block;
            text-decoration: none;
            color: #000;
            font-size: 0.875rem;
            padding: 0.5rem 1rem;
            border: 1px solid #000;
            border-radius: 4px;
            transition: all 0.3s ease;
        }

        .about__link-button:hover {
            background: #000;
            color: #fff;
        }

        .w-container {
    max-width: 940px;
    margin-left: auto;
    margin-right: auto;
    }
    
    .container {
    z-index: 1;
    max-width: 1280px;
    margin-top: 0;
    position: relative;
    padding-top: 40px;
    }

    .w-layout-grid {
        grid-row-gap: 16px;
        grid-column-gap: 16px;
        grid-template-rows: auto auto;
        grid-template-columns: 1fr 1fr;
        grid-auto-columns: 1fr;
        display: grid;
        }

    ._1st-grid {
        grid-column-gap: 16px;
        grid-row-gap: 16px;
        grid-template-rows: auto;
        grid-template-columns: 1fr .85fr;
        grid-auto-columns: 1fr;
        /* margin-bottom: 50px; */
        margin-left: 90px;
        margin-right: 0;
        padding-top: 0;
        padding-right: 0;
        display: grid;
    }

    ._2nd-grid {
        grid-column-gap: 50px;
        grid-row-gap: 25px;
        grid-template-rows: auto auto;
        grid-template-columns: 1fr .85fr;
        position: relative;
        top: 50px;
        padding-bottom: 60px;
    }
    
    .collage-wrapper {
    height: 600px;
    justify-content: center;
    align-items: center;
    transition: opacity .2s;
    display: flex;
    position: relative;
    }

    .cups_img.new-gif {
        /* width: 520px;
        max-width: 150%;
        top: 0%;
        left: 0; */

        /* width: 617px;
        max-width: 170%;
        top: 15%;
        left: -30px; */

        width: 500px;
        height: 500px;
        top: 15%;
        left: -30px; 
        object-fit: cover; 
    }

    .cups_img {
  order: 1;
  position: absolute;
  top: -5%;
  bottom: auto;
  left: 230px;
  right: 0%;
}

    .missing_image {
    order: -1;
    position: absolute;
    top: auto;
    bottom: 120px;
    left: -40%;
    right: auto;
    }

    .missing_image.malin {
    max-width: 150%;
    bottom: -60px;
    left: -10%;
    }

    .missing_image.malin.maude {
    order: -1;
    }
    
    .missing_image.malin.maude.new-homepage {
        bottom: 60px;
        left: -30%;
    }

    .image-23 {
    clear: none;
    order: 1;
    transition: opacity .2s;
    position: relative;
    bottom: 100px;
    right: 65px;
    }

    .image-23.malin {
    order: 1;
    bottom: -130px;
    right: -360px;
    }

    .image-23.malin.new-homepage {
        max-width: 100%;
        bottom: 10px;
        right: -250px;
    }

    #w-node-d7f9fa13-7c3f-6adc-0132-6638a57fd2da-38e12690 {
    align-self: center;
    }

    .v-contaner-wrapper {
    margin-left: 0;
    margin-right: 0;
    padding-left: 0;
    padding-right: 0;
    }

    .h3_new {
    color: #151515;
    margin-top: 0;
    margin-bottom: 25px;
    margin-left: 0;
    padding-left: 0;
    font-family: Merriweather, serif;
    font-size: 32px;
    font-weight: 300;
    line-height: 42px;
    transform: translate(0);
    }

    .h3_new.meet_retell {
    max-width: 610px;
    /* margin-left: 210px; */
    }

    .underline_v {
    border-bottom: 12px solid #f9cd87;
    line-height: 10px;
    display: inline-block;
    }

    .paragraph_new {
        max-width: 440px;
        margin-bottom: 10px;
        padding-top: 10px;
        font-family: museo-sans, sans-serif;
        font-size: 16px;
        font-weight: 300;
        line-height: 28px;
    }

    .paragraph_new._35-bottom-space {
        /* width: 810px; */
        max-width: 660px;
        /* margin-bottom: 10px;
        margin-left: -30px; */
        padding-top: 0;
        font-family: museo-sans, sans-serif;
        font-size: 16px;
        position: relative;
        /* left: 240px; */
        }

        .grid-12 {
        max-width: 920px;
        grid-column-gap: 30px;
        grid-row-gap: 30px;
        grid-template-rows: auto;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
        grid-auto-flow: column;
        margin-left: 0;
        margin-right: 0;
        padding-left: 210px;
        padding-right: 0;
        }

        #w-node-cccaf796-1044-6344-7eea-04bb12cad28d-38e12690 {
        grid-area: 1 / 1 / 2 / 2;
        align-self: center;
        justify-self: center;
        }

        ##w-node-c24386b3-37af-edb2-d424-5f9d82039140-38e12690, #w-node-e9f010fe-20db-92db-e7a0-23f8252363e2-38e12690, #travel-icon.w-node-d62715d0-0629-968a-b88b-4baa38cf75d3-38e12690, #w-node-_2c173987-9ce3-7aaa-9192-79788a52490e-38e12690, #w-node-_2addf193-6110-d9ab-1980-96a344734884-38e12690, #w-node-_2f0121b6-b801-53a5-8f4a-338127d391ad-38e12690 {
            grid-area: span 1 / span 1 / span 1 / span 1;
            align-self: center;
            justify-self: center;
        }

        .image-44 {
        max-width: 97%;
        }

        .image-45 {
        max-width: 95%;
        }

        .large-icon-wrapper {
        width: 100px;
        height: 100px;
        max-width: 70px;
        min-height: 100px;
        min-width: 70px;
        justify-content: center;
        align-items: center;
        display: flex;
        position: relative;
        }

        .w-button {
        color: #fff;
        line-height: inherit;
        cursor: pointer;
        background-color: #3898ec;
        border: 0;
        border-radius: 0;
        padding: 9px 15px;
        text-decoration: none;
        display: inline-block;
        }

        .join {
        border: 2px solid #f9f4e8;
        color: #f9f4e8;
        background-color: rgba(0, 0, 0, 0);
        border-radius: 100px;
        padding: 7px 35px;
        font-family: museo-sans, sans-serif;
        font-size: 15px;
        font-weight: 300;
        line-height: 30px;
        transition: border-color .25s, background-color .25s;
        }

        a:active, a:hover {
        outline: 0;
        }

        .join:hover {
        border-color: #ffcd86;
        background-color: #ffcd86;
        }

        .join.large-beta {
        width: 250px;
        height: 60px;
        min-width: 0;
        clear: none;
        border-width: 2px;
        justify-content: center;
        align-items: center;
        padding: 12px 40px;
            padding-top: 12px;
            padding-left: 40px;
        font-size: 18px;
        display: flex;
        position: static;
        }

        .join.large-beta.black_outline-2 {
        width: 250px;
        height: 60px;
        min-width: 250px;
        color: #195b4e;
        -webkit-text-stroke-color: #195b4e;
        object-fit: fill;
        background-color: rgba(0, 0, 0, 0);
        border-color: #195b4e;
        justify-content: center;
        align-items: center;
        margin-top: 50px;
        margin-bottom: 0;
        /* margin-left: 210px; */
        padding-top: 10px;
        padding-left: 40px;
        transition: border-color .25s, background-color .25s;
        display: flex;
        }

        .join.large-beta.black_outline-2:hover {
        color: #f9f4e8;
        background-color: #195b4e;
        border-style: solid;
        border-color: #195b4e;
        }

        .title-wrap {
        margin-left: 0;
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

    <section class="banner">
        @if(count($dataAboutHero) == 0) 
        <div class="products-left">
            <img src="{{ asset('assets/img/image-about-1.png') }}" alt="Products Left">
        </div>
        <div class="content">
            <div class="greeting">HI, WE'RE MABLE</div>
            <h1 class="headline">We power Distributor marketplaces and help Brands reach a mass network of buyers with dropshipping.</h1>
        </div>
        <div class="products-right">
            <img src="{{ asset('assets/img/image-about-2.png') }}" alt="Products Right">
        </div>
        @else
            @foreach($dataAboutHero as $index => $data)
            <div class="products-left">
            <img src="{{ $data->getFirstMedia('left_image')->getUrl() }}" alt="Products Left">
            </div>
            <div class="content">
                <div class="greeting">
                {!! html_entity_decode($data->heading) !!}

                    <!-- {{ $data->heading }} -->
                </div>
                <h1 class="headline">
                {!! html_entity_decode($data->description) !!}

                    <!-- {{ $data->description }} -->
                </h1>
            </div>
            <div class="products-right">
                <img src="{{ $data->getFirstMedia('right_image')->getUrl() }}" alt="Products Right">
            </div>
            @endforeach
        @endif
    </section>

    <div class="container home w-container">
        <div class="w-layout-grid _1st-grid">
        @if (count($dataAboutSecond) == 0) 
         <div class="collage-wrapper home">
                <img class="cups_img new-gif" width="222" src="https://cdn.prod.website-files.com/6070d02b5737f5fd93e1268f/64113b827f602eab28522acf_product_animation_03.gif" alt="">
                <!-- <img class="missing_image malin maude new-homepage" width="520" sizes="(max-width: 991px) 100vw, (max-width: 1919px) 41vw, 520px" src="https://cdn.prod.website-files.com/6070d02b5737f5fd93e1268f/63f669efafa11d2ad8166f7b_map.jpg" alt="">
                <img class="image-23 malin new-homepage" width="128" height="134" src="https://cdn.prod.website-files.com/6070d02b5737f5fd93e1268f/63dde80710d0b9c22c34b2fe_25_day_small.png" alt=""> -->
            </div>
            <div id="w-node-d7f9fa13-7c3f-6adc-0132-6638a57fd2da-38e12690" class="v-contaner-wrapper mobile">
                
                <h3 class="h3_new meet_retell">
                     Meet 
                    <strong>re/tell</strong>
                    .We
                    <span class="underline_v">match your brand</span>
                    with
                    <span class="underline_v">excess space</span>
                    inside high traffic retail destinations.
                    
                </h3>
                

                <p class="paragraph_new _35-bottom-space">
                Each space has a built-in community. With just 25 sq/ft your brand can easily scale your retail presence any where that your target customer works, lives, travels, shops, and plays.
                </p>
                
                <!-- <div class="w-layout-grid grid-12">
                    <div id="w-node-cccaf796-1044-6344-7eea-04bb12cad28d-38e12690" class="large-icon-wrapper">
                        <img class="image-44" src="https://cdn.prod.website-files.com/6070d02b5737f5fd93e1268f/6214196c440ab86126fa3bf1_shopping.png" alt="">
                    </div>
                    <div id="w-node-c24386b3-37af-edb2-d424-5f9d82039140-38e12690" class="large-icon-wrapper">
                        <img class="image-45" src="https://cdn.prod.website-files.com/6070d02b5737f5fd93e1268f/621419575c15ff2d0d1e10c7_eating.png" alt="">
                    </div>
                    <div id="w-node-e9f010fe-20db-92db-e7a0-23f8252363e2-38e12690" class="large-icon-wrapper">
                        <img class="image-44" src="https://cdn.prod.website-files.com/6070d02b5737f5fd93e1268f/64079968f8c499e88d19a214_play_NEW.png" alt="">
                    </div>
                    <div id="travel-icon" class="large-icon-wrapper w-node-d62715d0-0629-968a-b88b-4baa38cf75d3-38e12690">
                        <img class="image-44" src="https://cdn.prod.website-files.com/6070d02b5737f5fd93e1268f/64079959dd87f95007ace409_travel_NEW.png" alt="">
                    </div>
                    <div id="w-node-_2c173987-9ce3-7aaa-9192-79788a52490e-38e12690" class="large-icon-wrapper">
                        <img class="image-44" src="https://cdn.prod.website-files.com/6070d02b5737f5fd93e1268f/62141b6c85bfeeb32ba489cc_well-being.png" alt="">
                    </div>
                    <div id="w-node-_2addf193-6110-d9ab-1980-96a344734884-38e12690" class="large-icon-wrapper">
                        <img class="image-44" src="https://cdn.prod.website-files.com/6070d02b5737f5fd93e1268f/6214197b7b3815365c179a3d_working.png" alt="">
                    </div>
                    <div id="w-node-_2f0121b6-b801-53a5-8f4a-338127d391ad-38e12690" class="large-icon-wrapper">
                        <img class="image-44" src="https://cdn.prod.website-files.com/6070d02b5737f5fd93e1268f/622fb42ba1866f14d4b5ce38_Living_3x.png" alt="">
                    </div>
                    
                </div> -->
                
                <a href="#" class="join large-beta black_outline-2 w-button">
                    learn more  
                </a>
            </div>
        @else
         @foreach ($dataAboutSecond as $index => $second) 
            <div class="collage-wrapper home">
                
                <img class="cups_img new-gif" width="222" src="{{ $second->getFirstMedia('first_image')->getUrl() }}" alt="">
                
            </div>
            <div id="w-node-d7f9fa13-7c3f-6adc-0132-6638a57fd2da-38e12690" class="v-contaner-wrapper mobile">
                
                <h3 class="h3_new meet_retell">
                    {!! html_entity_decode($second->heading_first_text) ?? "Meet" !!}
<!-- 
                    <strong>
                    {!! html_entity_decode($second->heading_strong_text) ?? "re/tell" !!}

    
                    </strong>
                    {!! html_entity_decode($second->heading_second_text) ?? ".We" !!}

            
                    <span class="underline_v">
                    {!! html_entity_decode($second->heading_underlined_first_text) ?? "match your brand" !!}

                       
                    </span>
                    {!! html_entity_decode($second->heading_third_text) ?? "with" !!}

        
                    <span class="underline_v">
                    {!! html_entity_decode($second->heading_underlined_second_text) ?? "excess space" !!}

                      
                    </span>
                    {!! html_entity_decode($second->heading_fourth_text) ?? "inside high traffic retail destinations." !!}

                     -->
                    
                </h3>
                

                <p class="paragraph_new _35-bottom-space">
                {!! html_entity_decode($second->description) ?? "Each space has a built-in community. With just 25 sq/ft your brand can easily scale your retail presence any where that your target customer works, lives, travels, shops, and plays." !!}
                
                
                </p>
                
                
                <a href="{{ $second->button_link }}" class="join large-beta black_outline-2 w-button">
                    {{ $second->button_title ?? "learn more"}}  
                </a>
                
            </div>
            @endforeach
        @endif
        </div>
    </div>


    <div class="about__container">
        <section class="about__section">
            <h2 class="about__heading">
            @if($dataAboutThirdHeading[0] == null)
            Who is Breezy for?
                    @else
                    {!! html_entity_decode($dataAboutThirdHeading[0]->heading)!!}
                    @endif
            

                <!-- {{ $dataAboutThirdHeading[0]->heading ?? "Who is Breezy for?" }} -->
            </h2>
            <p class="about__description">
            @if($dataAboutThirdHeading[0] == null)
            Our customers are a diverse range of partnership managers, marketing managers, CEOs, growth managers and founders who are looking to self-grow their business.
                    @else
                    {!! html_entity_decode($dataAboutThirdHeading[0]->description)!!}
                    @endif
            
                <!-- {{ $dataAboutThirdHeading[0]->description ?? "Our customers are a diverse range of partnership managers, marketing managers, CEOs, growth managers and founders who are looking to self-grow their business." }} -->
            </p>
        </section>
    </div>

    <div class="about__features-grid">
        <!-- @if(count($dataAboutThirdIcon) == 0) -->
        <div class="about__feature-card about__add-tasks">
            <div class="about__icon-wrapper">
                <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/about-us-4-1SxvU9RYn0j4IgJZ0JqU0uMfznAr35.png" alt="" class="about__icon">
            </div>
            <h3 class="about__feature-title">
            @if($dataAboutThirdHeading[0] == null)
            Add Tasks
                    @else
                    {!! html_entity_decode($dataAboutThirdHeading[0]->heading_box_1)!!}
                    @endif
                
            </h3>
            <p class="about__feature-description">
            @if($dataAboutThirdHeading[0] == null)
            Add your tasks for the day & update them. Check them once they're gone.
                    @else
                    {!! html_entity_decode($dataAboutThirdHeading[0]->description_box_1)!!}
                    @endif
                
            </p>
        </div>

        <div class="about__feature-card about__time-boxing">
            <div class="about__icon-wrapper">
                <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/about-us-4-1SxvU9RYn0j4IgJZ0JqU0uMfznAr35.png" alt="" class="about__icon">
            </div>
            <h3 class="about__feature-title">
            @if($dataAboutThirdHeading[0] == null)
            Time Boxing
                    @else
                    {!! html_entity_decode($dataAboutThirdHeading[0]->heading_box_2)!!}
                    @endif
            </h3>
            <p class="about__feature-description">
            @if($dataAboutThirdHeading[0] == null)
            Allocate time for each task for better time management & organization.
                    @else
                    {!! html_entity_decode($dataAboutThirdHeading[0]->description_box_2)!!}
                    @endif
                
            </p>
        </div>

        <div class="about__feature-card about__prioritisation">
            <div class="about__icon-wrapper">
                <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/about-us-4-1SxvU9RYn0j4IgJZ0JqU0uMfznAr35.png" alt="" class="about__icon">
            </div>
            <h3 class="about__feature-title">
            @if($dataAboutThirdHeading[0] == null)
            Prioritisation.
                    @else
                    {!! html_entity_decode($dataAboutThirdHeading[0]->heading_box_3)!!}
                    @endif
                
            </h3>
            <p class="about__feature-description">
            @if($dataAboutThirdHeading[0] == null)
            Prioritise the most important tasks of the day to the top, so you do what needs to be done first..
                    @else
                    {!! html_entity_decode($dataAboutThirdHeading[0]->description_box_3)!!}
                    @endif
                
            </p>
        </div>

        <div class="about__feature-card about__video-calls">
            <div class="about__icon-wrapper">
                <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/about-us-4-1SxvU9RYn0j4IgJZ0JqU0uMfznAr35.png" alt="" class="about__icon">
            </div>
            <h3 class="about__feature-title">
            @if($dataAboutThirdHeading[0] == null)
            Video Calls
                    @else
                    {!! html_entity_decode($dataAboutThirdHeading[0]->heading_box_4)!!}
                    @endif
                
            </h3>
            <p class="about__feature-description">
            @if($dataAboutThirdHeading[0] == null)
            Hop on video calls, present your screen, invite external guests & collaborate with your entire team.
                    @else
                    {!! html_entity_decode($dataAboutThirdHeading[0]->description_box_4)!!}
                    @endif
                
            </p>
        </div>
        <!-- @else
            @foreach($dataAboutThirdIcon as $index => $data)
            <div class="about__feature-card about__video-calls">
                <div class="about__icon-wrapper">
                    <img src="{{ $data->getFirstMedia('icon_image')->getUrl() }}" alt="" class="about__icon">
                </div>
                <h3 class="about__feature-title">
                    {!! html_entity_decode($data->heading) !!}
                </h3>
                <p class="about__feature-description">
                {!! html_entity_decode($data->description) !!}
                </p>
            </div>
            @endforeach -->
        <!-- @endif -->
    </div>

    <div class="about-contact__container">
        <h1 class="about-contact__heading">Contact us</h1>
        
        <div class="about-contact__grid">
            <!-- General Section -->
            @if(count($dataAboutFourthSection) == 0)
            <div class="about-contact__section">
                <h2 class="about-contact__title">General</h2>
                <div class="about-contact__info">
                    <p>For general inquiries and fan mail.</p>
                    <p>Xolo OÜ</p>
                    <p>Reg no: 12844111</p>
                    <p>KMKR no: EE101793070</p>
                    <p>Paju 1a</p>
                    <p>Tartu, Estonia 50603</p>
                    <a href="mailto:info@xolo.io" class="about-contact__email-link">info@xolo.io</a>
                </div>
            </div>

            <!-- Sales Section -->
            <div class="about-contact__section">
                <h2 class="about-contact__title">Sales & Marketing</h2>
                <div class="about-contact__info">
                    <p>Got an offer we can't refuse? Drop us a line. (Please note that we retain the right to refuse any offers offered through this channel.)</p>
                    <a href="mailto:hello@xolo.io" class="about-contact__email-link">hello@xolo.io</a>
                </div>
            </div>

            <!-- Support Section -->
            <div class="about-contact__section">
                <h2 class="about-contact__title">Support</h2>
                <div class="about-contact__info">
                    <p>Got a question that you can't find an answer to in the <a href="#" class="about-contact__faq-link">FAQs</a>? Help is just an email away.</p>
                    <a href="mailto:support@xolo.io" class="about-contact__email-link">support@xolo.io</a>
                </div>
            </div>

            @else
                @foreach($dataAboutFourthSection as $data)
                <div class="about-contact__section">
                    <h2 class="about-contact__title">
                     {!! html_entity_decode($data->heading) !!}

                        <!-- {{ $data->heading }} -->
                    </h2>
                    <div class="about-contact__info">
                        <p>
                        {!! html_entity_decode($data->description) !!}

                            <!-- {{ $data->description }} -->

                        </p>
                        <a href="mailto:support@xolo.io" class="about-contact__email-link">{{ $data->email_text }}</a>
                    </div>
                </div>
                @endforeach
            @endif
        </div>
    </div>

    <!-- <section class="about__links-section">
        <div class="about__link-column">
            <h2 class="about__column-title">Contact us</h2>
            <p class="about__column-description">For all media related queries please contact us below.</p>
            <a href="mailto:press@mural.co" class="about__link-button">press@mural.co</a>
        </div>

        <div class="about__link-column">
            <h2 class="about__column-title">Brand assets</h2>
            <p class="about__column-description">Get our most up to date logos, colors and product images</p>
            <a href="#" class="about__link-button">Download Assets</a>
        </div>

        <div class="about__link-column">
            <h2 class="about__column-title">About us</h2>
            <p class="about__column-description">Discover digital first visual collaboration with Mural.</p>
            <a href="#" class="about__link-button">Learn more</a>
        </div>
    </section> -->

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
    </script>
</body>
</html>