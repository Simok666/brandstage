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

        #w-node-_47afa798-7739-4392-8a89-cca5c4af91ee-38e12690 {
            grid-area: span 1 / span 1 / span 1 / span 1;
            align-self: center;
        }
        .hero-content-wrap {
        text-align: center;
        margin-right: 20px;
        }

        .div-block-5 {
            text-align: right;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-top: 10px;
            margin-right: 0;
            display: flex;
            }

            .h1_new {
            width: auto;
            color: var(--floral-white);
            margin-top: 0;
            margin-bottom: 15px;
            padding-right: 0;
            font-family: Merriweather, serif;
            font-size: 68px;
            font-weight: 300;
            line-height: 60px;
            text-decoration: none;
            position: relative;
            top: auto;
            }

            .h1_new.dark {
              color: #000;
            }

            .h1_new.largeer {
            font-size: 80px;
            line-height: 76px;
            }

            .h1_new.largeer.dark.commerce {
            margin-bottom: 0;
            }

            .h1_new.largeer.dark.commerce.retail {
            padding-bottom: 20px;
            padding-right: 50px;
            font-size: 100px;
            }

            .h1_new.largeer.dark.commerce.worth {
                padding-bottom: 20px;
                padding-left: 100px;
                padding-right: 0;
                font-size: 100px;
            }

            .h1_new.largeer.dark.bottom-margin-36 {
                margin-bottom: 30px;
                padding-left: 50px;
                font-size: 100px;
            }

            .paragraph-3 {
            margin-bottom: 10px;
            margin-left: 0;
            padding-bottom: 40px;
            padding-left: 40px;
            font-family: museo-sans, sans-serif;
            font-size: 22px;
            font-weight: 300;
            line-height: 32px;
            margin-top: 30px;
            }

            #w-node-_0283f4ef-390e-e50f-d879-27a953206bba-38e12690 {
            grid-area: span 1 / span 1 / span 1 / span 1;
            align-self: center;
            justify-self: auto;
            }

            .slider-2 {
                height: auto;
                background-color: rgba(0, 0, 0, 0);
                padding-bottom: 60px;
                font-size: 12px;
            }
            .w-slider {
            height: 300px;
            text-align: center;
            clear: both;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            tap-highlight-color: rgba(0, 0, 0, 0);
            background: #ddd;
                background-color: rgb(221, 221, 221);
            position: relative;
            }

            .w-slider-mask {
                z-index: 1;
                height: 100%;
                white-space: nowrap;
                display: block;
                position: relative;
                left: 0;
                right: 0;
                overflow: hidden;
            }

        .w-slide {
            vertical-align: top;
            width: 100%;
            height: 100%;
            white-space: normal;
            text-align: left;
            display: inline-block;
            position: relative;
        }
        .image-40 {
            display: inline-block;
        }

        .background-circle {
            position: absolute;
            width: 150%;
            height: 150%;
            background: #FFE4C4;
            border-radius: 50%;
            top: -30%;
            left: -25%;
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            display: flex;
            padding: 2rem 4rem;
            height: 100%;
        }

        .hero-text {
            flex: 1;
            padding-top: 4rem;
        }

        .hero-text h1 {
            font-size: 5rem;
            line-height: 1.1;
            margin-bottom: 2rem;
        }

        .hero-text p {
            font-size: 1.25rem;
            max-width: 400px;
            color: #333;
        }

        .swiper {
            flex: 1;
            width: 100%;
            height: 100%;
        }

        .slide-content {
            position: relative;
            width: 100%;
            height: 500px;
        }

        .slide-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 0;
        }

        .badge {
            position: absolute;
            background: white;
            padding: 0.5rem 1rem;
            border-radius: 100px;
            top: 20px;
            right: 20px;
        }

        .price-tag {
            position: absolute;
            bottom: 20px;
            right: 20px;
            background: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 100px;
        }

        .swiper-pagination-bullet {
            width: 12px;
            height: 12px;
            background: #333;
        }

        .slider-container {
            flex: 1;
            /* position: relative; */
            overflow: hidden;
            width: 700px;
        }

        .slider {
            display: flex;
            transition: transform 0.5s ease-in-out;
            height: 520px;
        }

        .slide {
            min-width: 100%;
            position: relative;
        }

        .slide-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .badge {
            position: absolute;
            background: white;
            padding: 0.5rem 1rem;
            border-radius: 100px;
            top: 20px;
            right: 20px;
            font-size: 0.9rem;
        }

        .price-tag {
            position: absolute;
            bottom: 20px;
            right: 20px;
            background: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 100px;
            font-size: 0.9rem;
        }

        .dots {
            position: absolute;
            bottom: -30px;
            left: 75%;
            transform: translateX(-50%);
            display: flex;
            gap: 0.5rem;
        }

        .dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: #333;
            opacity: 0.3;
            cursor: pointer;
            transition: opacity 0.3s;
        }

        .dot.active {
            opacity: 1;
        }

        .features {
        padding: 5rem 2rem;
        max-width: 1400px;
        margin: 0 auto;
    }

    .feature-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 2rem;
    }

    .feature-item {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        gap: 1rem;
    }

    .feature-icon {
        width: 64px;
        height: 64px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 0.5rem;
    }

    .icon {
        width: 3rem;
        height: 3rem;
        object-fit: contain;
    }

    .feature-item h2 {
        font-family: system-ui, -apple-system, sans-serif;
        font-size: 1.5rem;
        font-weight: 500;
        color: #111;
        margin: 0;
    }

    .feature-item p {
        font-family: system-ui, -apple-system, sans-serif;
        font-size: 1rem;
        line-height: 1.5;
        color: #555;
        margin: 0;
    }

    .partnerships {
        padding: 4rem 2rem;
        max-width: 1400px;
        margin: 0 auto;
    }

    .section-title {
        font-family: system-ui, -apple-system, sans-serif;
        font-size: 2rem;
        font-weight: 600;
        color: #111;
        margin-bottom: 2rem;
    }

    .partnership-grid {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 1rem;
    }

    .partnership-card {
        position: relative;
        border-radius: 12px;
        overflow: hidden;
        aspect-ratio: 1;
        cursor: pointer;
        transition: transform 0.3s ease;
    }

    .partnership-card:hover {
        transform: translateY(-5px);
    }

    .card-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .card-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 1.5rem;
        background: linear-gradient(
            to top,
            rgba(0, 0, 0, 0.7),
            rgba(0, 0, 0, 0)
        );
    }

    .card-overlay h3 {
        font-family: system-ui, -apple-system, sans-serif;
        color: white;
        font-size: 1.25rem;
        font-weight: 500;
        margin: 0;
        line-height: 1.3;
    }

    .collections {
        padding: 4rem 2rem;
        max-width: 1400px;
        margin: 0 auto;
    }

    .collections-main_locl-collections-main__content__explore__title__ErX9G {
        font-size: 30px;
        line-height: 37px;
        font-weight: 700;
        color: #252525;
        margin-bottom: 56px;
    }

    .collections-main_locl-collections-main__content__explore__collections__YCKQa {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        gap: 20px;
    }
    
    .collections-main_locl-collections-main__content__explore__box-double__IqGRf {
        flex: 2;
        width: 100%; 
        max-width: 667px; 
        height: 340px; 
    }

    .collections-main_locl-collections-main__content__explore__box-double__IqGRf-2 {
        flex: 4;
    }

    .collections-main_locl-collections-main__content__explore__box__1l8yG {
        width: 320px;
        height: 340px;
        margin-bottom: 30px;
        transition: all .2s;
        -webkit-font-smoothing: subpixel-antialiased;
    }

    .collections-main_locl-collections-main__content__explore__box__content__cLgv_ {
        width: 100%;
        height: 100%;
        border-radius: 3px;
        overflow: hidden;
        box-shadow: 0 2px 6px rgba(0,0,0,.059);
        position: relative;
    }

    .collections-main_locl-collections-main__content__explore__box__image__wZMwT {
        width: 100%;
        object-fit: cover;
        height: 100%;
    }

    .collections-main_locl-collections-main__content__explore__box__info__KKZfx {
        position: absolute;
        top: 9px;
        left: 10px;
        background-color: rgba(0,0,0,.5);
        border-radius: 1px;
        padding: 5px 9px;
        transition: transform .2s,opacity .2s;
    }

    .collections-main_locl-collections-main__content__explore__box__title__ISDOd {
        font-size: 16px;
        line-height: 19px;
        font-weight: 600;
        color: #fff;
        margin: 0;
    }

    .collections-main_locl-collections-main__content__explore__box__caption__ZsUpD {
        position: absolute;
        bottom: 9px;
        left: 10px;
        background-color: rgba(0,0,0,.35);
        border-radius: 1px;
        padding: 5px 9px;
        max-width: 300px;
        transition: transform .2s,opacity .2s;
        }

    .collections-main_locl-collections-main__content__explore__box-double__IqGRf .collections-main_locl-collections-main__content__explore__box__caption__ZsUpD {
        max-width: 650px;
    }

    .collections-main_locl-collections-main__content__explore__box__caption__text___RFmO {
        
        font-size: 14px;
        line-height: 20px;
        font-weight: 500;
        color: #fff;
        margin: 0;
    } 

    .blog-container {
        padding: 4rem 2rem;
            max-width: 1400px;
            margin: 0 auto;
        }

        .blog-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }

        .blog-header h1 {
            font-family: 'Georgia', serif;
            font-size: 2.5rem;
            font-weight: normal;
        }

        .blog-header a {
            color: #000;
            text-decoration: none;
        }

        .blog-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
        }

        .blog-card {
            background: #f5f5f0;
            border-radius: 12px;
            overflow: hidden;
            position: relative;
        }

        .blog-card::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #ff6b6b, #4ecdc4, #45b7d1);
            clip-path: polygon(100% 0, 0 0, 100% 100%);
        }

        .blog-image {
            width: 100%;
            height: 240px;
            object-fit: cover;
        }

        .blog-content {
            padding: 1.5rem;
        }

        .blog-title {
            font-family: 'Georgia', serif;
            font-size: 1.5rem;
            margin-bottom: 1rem;
            font-weight: normal;
            line-height: 1.3;
        }

        .find-space {
        text-decoration: none;
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

        .find-space:hover {
        border-color: #ffcd86;
        background-color: #ffcd86;
        }

        .find-space.large-beta {
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

        .find-space.large-beta.black_outline-2 {
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
        margin-bottom: 0;
        margin-left: 210px;
        padding-top: 10px;
        padding-left: 40px;
        transition: border-color .25s, background-color .25s;
        display: flex;
        }

        .find-space.large-beta.black_outline-2:hover {
        color: #f9f4e8;
        background-color: #195b4e;
        border-style: solid;
        border-color: #195b4e;
        }

        .read-more {
            display: inline-block;
            color: #000;
            text-decoration: none;
            border-bottom: 1px solid #000;
            padding-bottom: 2px;
            margin-top: 1rem;
            font-size: 0.9rem;
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

    <div class="hero">
        
        <div class="container add-bottom-padding w-container">
            <img class="image-25" width="800" sizes="(max-width: 767px) 100vw, 800px" src="https://cdn.prod.website-files.com/6070d02b5737f5fd93e1268f/621fddc4b29d8f8d58c0c0a3_yellow_blob_XL.png" alt="">
            <div class="w-layout-grid grid-9">
                <div id="w-node-_47afa798-7739-4392-8a89-cca5c4af91ee-38e12690" class="hero-content-wrap">
                    <div class="div-block-5">
                        @if($dataHomeHeroHeading[0] == null)
                        <h1 class="h1_new largeer dark commerce retail">
                            Retail
                        </h1>
                        <h1 class="h1_new largeer dark commerce worth">worth<br></h1>
                        <h1 class="h1_new largeer dark bottom-margin-36">sharing</h1>
                        @else
                        <h1 class="h1_new largeer dark commerce retail">
                        {!! html_entity_decode($dataHomeHeroHeading[0]->heading_first) !!}
                        </h1>
                        @endif
                        
                    </div>   
                    @if($dataHomeHeroHeading[0] == null)
                    <p class="paragraph-3">
                    Creating space for connection --
                    <br>
                    where any brand can access retail today.
                    </p>
                    @else
                    <p class="paragraph-3">
                    {!! html_entity_decode($dataHomeHeroHeading[0]->description) !!}

                    </p>
                    @endif

                    <a href="{{ $dataHomeHeroHeading[0]->button_link ?? 'https://forms.gle/CDTL2EAs32W2BG5t5'}} " class="find-space large-beta black_outline-2 w-button">
                    {{ $dataHomeHeroHeading[0]->button_title ?? "Find My Space"}}
                    </a>
                </div>
                <!-- <div class="swiper">
                        
                        <div class="swiper-wrapper">
                           
                            <div class="swiper-slide">
                                <div class="slide-content">
                                    <img src="https://cdn.prod.website-files.com/6070d02b5737f5fd93e1268f/621ec134f2bd35a2faed7a89_slideshow_image_01.jpg" alt="Retail Space" class="slide-image">
                                    
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide-content">
                                    <img src="https://cdn.prod.website-files.com/6070d02b5737f5fd93e1268f/621ec13488959b08f7420fc3_slideshow_image_02.jpg" alt="Retail Space" class="slide-image">
                                    
                                </div>
                            </div>
                        </div>
                       
                        <div class="swiper-pagination"></div>
                </div> -->
                <!-- <div id="w-node-_0283f4ef-390e-e50f-d879-27a953206bba-38e12690" class="div-block-10">
                    <div class="slider-2 w-slider">
                        <div class="w-slider-mask">
                            <div class="w-slide">
                                <img class="image-40" src="https://cdn.prod.website-files.com/6070d02b5737f5fd93e1268f/621ec134f2bd35a2faed7a89_slideshow_image_01.jpg" sizes="(max-width: 1919px) 90vw, 1420px" alt="">
                            </div>
                            <div class="w-slide">
                                <img class="image-40" src="https://cdn.prod.website-files.com/6070d02b5737f5fd93e1268f/621ec13488959b08f7420fc3_slideshow_image_02.jpg" sizes="(max-width: 1919px) 90vw, 1420px" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="w-slider-nav w-slider-nav-invert w-round">
                    <div class="dot">
                        <span class="dot active"></span>
                        <span class="dot"></span>
                    </div>
                </div> -->
                <div class="slider-container">
                    
                <div class="slider">
                    @if(count($dataHomeHeroImageSlider) == 0)
                    <div class="slide">
                        <img src="https://cdn.prod.website-files.com/6070d02b5737f5fd93e1268f/621ec134f2bd35a2faed7a89_slideshow_image_01.jpg" alt="Retail Space" class="slide-image">
                    </div>
                    <div class="slide">
                        <img src="https://cdn.prod.website-files.com/6070d02b5737f5fd93e1268f/621ec13488959b08f7420fc3_slideshow_image_02.jpg" alt="Retail Space" class="slide-image">
                    </div>
                    <div class="slide">
                        <img src="https://cdn.prod.website-files.com/6070d02b5737f5fd93e1268f/621ec13519c141088e29e5b7_slideshow_image_03.jpg" alt="Retail Space" class="slide-image">
                    </div>
                    @else
                        @foreach($dataHomeHeroImageSlider as $index => $data)
                        <div class="slide">
                            <img src="{{ $data->getFirstMedia('image_slider')->getUrl() }}" alt="Retail Space" class="slide-image">
                        </div>
                        @endforeach
                    @endif
                </div>
                <div class="dots">
                @if(count($dataHomeHeroImageSlider) == 0)
                    @for($i = 0; $i < 3; $i++)
                        <span class="dot {{ $i == 0 ? 'active' : '' }}"></span>
                    @endfor
                @else
                    @foreach($dataHomeHeroImageSlider as $index => $data)
                        <span class="dot {{ $index == 0 ? 'active' : '' }}"></span>
                    @endforeach
                @endif
                </div>
            </div>
            </div>
        </div>

        <!-- <div class="background-circle"></div> -->
        
    </div>

    <section class="features">
        <div class="feature-grid">
            @if(count($dataHomeSecondSection) == 0)
            <!-- Feature 1 -->
            <div class="feature-item">
                <div class="feature-icon" >
                    <img src="https://cdn.prod.website-files.com/62e11362da2667ac3d0e6ed5/64f753afff90072868831e44_HMP_Spot_Time.webp" alt="Efficiency icon" class="icon">
                </div>
                <h2>Increase efficiency</h2>
                <p>Speed up daily tasks and improve workflows for better business outcomes.</p>
            </div>

            <!-- Feature 2 -->
            <div class="feature-item">
                <div class="feature-icon" >
                    <img src="https://cdn.prod.website-files.com/62e11362da2667ac3d0e6ed5/64f753af83fa9e9657fb95d6_HMP_Spot_Comunication.webp" alt="Productivity icon" class="icon">
                </div>
                <h2>Empower productivity</h2>
                <p>Get everyone on the same page to get more done in less time.</p>
            </div>

            <!-- Feature 3 -->
            <div class="feature-item">
                <div class="feature-icon" >
                    <img src="https://cdn.prod.website-files.com/62e11362da2667ac3d0e6ed5/64f753afb0e6b4f83fb6cf76_HMP_Spot_Picture.webp" alt="Big picture icon" class="icon">
                </div>
                <h2>Get the big picture</h2>
                <p>Put all the moving parts of your projects in context and say sayonara to silos.</p>
            </div>

            <!-- Feature 4 -->
            <div class="feature-item">
                <div class="feature-icon" >
                    <img src="https://cdn.prod.website-files.com/62e11362da2667ac3d0e6ed5/64f753af93e28478fdc0835d_HMP_Spot_Safe.avif" alt="Security icon" class="icon">
                </div>
                <h2>Stay safe and sound</h2>
                <p>Compliant with GDPR and CCPA regulations to keep your data and employees secure.</p>
            </div>
            @else
            @foreach($dataHomeSecondSection as $index => $data)
            <!-- Feature 1 -->
            <div class="feature-item">
                <div class="feature-icon" >
                    <img src="{{ $data->getFirstMedia('icon_image')->getUrl() }}" alt="Efficiency icon" class="icon">
                </div>
                <h2>{{ $data->heading }}</h2>
                <p>{{ $data->description }}</p>
            </div>
            @endforeach
            @endif
        </div>
    </section>

    <section class="partnerships">
        <h2 class="section-title">{{ $dataHomeThirdHeading[0] == null ? 'Types of partnerships' : $dataHomeThirdHeading[0]->heading }}</h2>
        <div class="partnership-grid">
            @if(count($dataHomeThirdSection) == 0)
            <!-- Product Collabs -->
            <div class="partnership-card">
                <img src="https://cdn.prod.website-files.com/6070d02b5737f5fd93e1268f/63d1c3c68862750bf96317b3_The_Malin_01.jpg" alt="Modern interior space representing product collaborations" class="card-image">
                <div class="card-overlay">
                    <h3>Product<br>Collabs</h3>
                </div>
            </div>

            <!-- Content Collabs -->
            <div class="partnership-card">
                <img src="https://cdn.prod.website-files.com/6070d02b5737f5fd93e1268f/63d1c54be89a971cedb84771_Bash_01.jpg" alt="Sunset over mountains representing content collaborations" class="card-image">
                <div class="card-overlay">
                    <h3>Content<br>Collabs</h3>
                </div>
            </div>

            <!-- Influencer Collabs -->
            <div class="partnership-card">
                <img src="https://cdn.prod.website-files.com/6070d02b5737f5fd93e1268f/63d1c4bcd2fa925fd1f2342d_The_Elk_01.jpg" alt="Minimal workspace setup representing influencer collaborations" class="card-image">
                <div class="card-overlay">
                    <h3>Influencer<br>Collabs</h3>
                </div>
            </div>

            <!-- Experience Collabs -->
            <div class="partnership-card">
                <img src="https://cdn.prod.website-files.com/6070d02b5737f5fd93e1268f/632df57bf93d2a3c3b444694_ModernHaus_Soho.jpg" alt="Wall of plants representing experience collaborations" class="card-image">
                <div class="card-overlay">
                    <h3>Experience<br>Collabs</h3>
                </div>
            </div>

            <!-- Media Collabs -->
            <div class="partnership-card">
                <img src="https://cdn.prod.website-files.com/6070d02b5737f5fd93e1268f/633771e81734857e80ebd70e_Feste.jpg" alt="Photography equipment representing media collaborations" class="card-image">
                <div class="card-overlay">
                    <h3>Media<br>Collabs</h3>
                </div>
            </div>
            @else
                @foreach($dataHomeThirdSection as $index => $data)
                <div class="partnership-card">
                    <img src="{{ $data->getFirstMedia('image_grid')->getUrl() }}" alt="Photography equipment representing media collaborations" class="card-image">
                    <div class="card-overlay">
                        <h3>{{ $data->image_title }}</h3>
                    </div>
                </div>
                @endforeach
            @endif
        </div>
    </section>

    <section class="collections">
        <h1 class="collections-main_locl-collections-main__content__explore__title__ErX9G">{{ $dataHomeFourthHeading[0] == null ? 'Explore Collections' : $dataHomeFourthHeading[0]->heading }}</h1>
        @if(count($homeFourthSection) == 0)
        <div class="collections-main_locl-collections-main__content__explore__collections__YCKQa">
            <div class="collections-main_locl-collections-main__content__explore__box__1l8yG collections-main_locl-collections-main__content__explore__box-double__IqGRf">
                <a href="#">
                    <div class="collections-main_locl-collections-main__content__explore__box__content__cLgv_">
                        <img class="collections-main_locl-collections-main__content__explore__box__image__wZMwT" width="667" height="340" src="https://cdn.prod.website-files.com/6070d02b5737f5fd93e1268f/633771e81734857e80ebd70e_Feste.jpg" alt="">
                        <div class="collections-main_locl-collections-main__content__explore__box__info__KKZfx">
                            <h3 class="collections-main_locl-collections-main__content__explore__box__title__ISDOd">
                                Tube Station
                            </h3>
                        </div>
                        <div class="collections-main_locl-collections-main__content__explore__box__caption__ZsUpD">
                            <h6 class="collections-main_locl-collections-main__content__explore__box__caption__text___RFmO"> Locations for brand activations near tube stations</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="collections-main_locl-collections-main__content__explore__box__1l8yG collections-main_locl-collections-main__content__explore__box-double__IqGRf-2">
                <a href="#">
                    <div class="collections-main_locl-collections-main__content__explore__box__content__cLgv_">
                        <img class="collections-main_locl-collections-main__content__explore__box__image__wZMwT" width ="320" height="340" src="https://cdn.prod.website-files.com/6070d02b5737f5fd93e1268f/632df57bf93d2a3c3b444694_ModernHaus_Soho.jpg" alt="">
                        <div class="collections-main_locl-collections-main__content__explore__box__info__KKZfx">
                            <h3 class="collections-main_locl-collections-main__content__explore__box__title__ISDOd">
                                Hidden Gems
                            </h3>
                        </div>
                        <div class="collections-main_locl-collections-main__content__explore__box__caption__ZsUpD">
                            <h6 class="collections-main_locl-collections-main__content__explore__box__caption__text___RFmO">
                            High-footfall and affordable marketing locations
                            </h6>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="collections-main_locl-collections-main__content__explore__collections__YCKQa">
            <div class="collections-main_locl-collections-main__content__explore__box__1l8yG collections-main_locl-collections-main__content__explore__box-double__IqGRf-2">
                <a href="#">
                    <div class="collections-main_locl-collections-main__content__explore__box__content__cLgv_">
                        <img class="collections-main_locl-collections-main__content__explore__box__image__wZMwT" width ="320" height="340" src="https://cdn.prod.website-files.com/6070d02b5737f5fd93e1268f/632df57bf93d2a3c3b444694_ModernHaus_Soho.jpg" alt="">
                        <div class="collections-main_locl-collections-main__content__explore__box__info__KKZfx">
                            <h3 class="collections-main_locl-collections-main__content__explore__box__title__ISDOd">
                                Hidden Gems
                            </h3>
                        </div>
                        <div class="collections-main_locl-collections-main__content__explore__box__caption__ZsUpD">
                            <h6 class="collections-main_locl-collections-main__content__explore__box__caption__text___RFmO">
                            High-footfall and affordable marketing locations
                            </h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="collections-main_locl-collections-main__content__explore__box__1l8yG collections-main_locl-collections-main__content__explore__box-double__IqGRf">
                <a href="#">
                    <div class="collections-main_locl-collections-main__content__explore__box__content__cLgv_">
                        <img class="collections-main_locl-collections-main__content__explore__box__image__wZMwT" width="667" height="340" src="https://cdn.prod.website-files.com/6070d02b5737f5fd93e1268f/633771e81734857e80ebd70e_Feste.jpg" alt="">
                        <div class="collections-main_locl-collections-main__content__explore__box__info__KKZfx">
                            <h3 class="collections-main_locl-collections-main__content__explore__box__title__ISDOd">
                                Tube Station
                            </h3>
                        </div>
                        <div class="collections-main_locl-collections-main__content__explore__box__caption__ZsUpD">
                            <h6 class="collections-main_locl-collections-main__content__explore__box__caption__text___RFmO"> Locations for brand activations near tube stations</h6>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="collections-main_locl-collections-main__content__explore__collections__YCKQa">
            <div class="collections-main_locl-collections-main__content__explore__box__1l8yG collections-main_locl-collections-main__content__explore__box-double__IqGRf">
                <a href="#">
                    <div class="collections-main_locl-collections-main__content__explore__box__content__cLgv_">
                        <img class="collections-main_locl-collections-main__content__explore__box__image__wZMwT" width="667" height="340" src="https://cdn.prod.website-files.com/6070d02b5737f5fd93e1268f/633771e81734857e80ebd70e_Feste.jpg" alt="">
                        <div class="collections-main_locl-collections-main__content__explore__box__info__KKZfx">
                            <h3 class="collections-main_locl-collections-main__content__explore__box__title__ISDOd">
                                Tube Station
                            </h3>
                        </div>
                        <div class="collections-main_locl-collections-main__content__explore__box__caption__ZsUpD">
                            <h6 class="collections-main_locl-collections-main__content__explore__box__caption__text___RFmO"> Locations for brand activations near tube stations</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="collections-main_locl-collections-main__content__explore__box__1l8yG collections-main_locl-collections-main__content__explore__box-double__IqGRf-2">
                <a href="#">
                    <div class="collections-main_locl-collections-main__content__explore__box__content__cLgv_">
                        <img class="collections-main_locl-collections-main__content__explore__box__image__wZMwT" width ="320" height="340" src="https://cdn.prod.website-files.com/6070d02b5737f5fd93e1268f/632df57bf93d2a3c3b444694_ModernHaus_Soho.jpg" alt="">
                        <div class="collections-main_locl-collections-main__content__explore__box__info__KKZfx">
                            <h3 class="collections-main_locl-collections-main__content__explore__box__title__ISDOd">
                                Hidden Gems
                            </h3>
                        </div>
                        <div class="collections-main_locl-collections-main__content__explore__box__caption__ZsUpD">
                            <h6 class="collections-main_locl-collections-main__content__explore__box__caption__text___RFmO">
                            High-footfall and affordable marketing locations
                            </h6>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="collections-main_locl-collections-main__content__explore__collections__YCKQa">
            <div class="collections-main_locl-collections-main__content__explore__box__1l8yG collections-main_locl-collections-main__content__explore__box-double__IqGRf-2">
                <a href="#">
                    <div class="collections-main_locl-collections-main__content__explore__box__content__cLgv_">
                        <img class="collections-main_locl-collections-main__content__explore__box__image__wZMwT" width ="320" height="340" src="https://cdn.prod.website-files.com/6070d02b5737f5fd93e1268f/632df57bf93d2a3c3b444694_ModernHaus_Soho.jpg" alt="">
                        <div class="collections-main_locl-collections-main__content__explore__box__info__KKZfx">
                            <h3 class="collections-main_locl-collections-main__content__explore__box__title__ISDOd">
                                Hidden Gems
                            </h3>
                        </div>
                        <div class="collections-main_locl-collections-main__content__explore__box__caption__ZsUpD">
                            <h6 class="collections-main_locl-collections-main__content__explore__box__caption__text___RFmO">
                            High-footfall and affordable marketing locations
                            </h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="collections-main_locl-collections-main__content__explore__box__1l8yG collections-main_locl-collections-main__content__explore__box-double__IqGRf-2">
                <a href="#">
                    <div class="collections-main_locl-collections-main__content__explore__box__content__cLgv_">
                        <img class="collections-main_locl-collections-main__content__explore__box__image__wZMwT" width ="320" height="340" src="https://cdn.prod.website-files.com/6070d02b5737f5fd93e1268f/632df57bf93d2a3c3b444694_ModernHaus_Soho.jpg" alt="">
                        <div class="collections-main_locl-collections-main__content__explore__box__info__KKZfx">
                            <h3 class="collections-main_locl-collections-main__content__explore__box__title__ISDOd">
                                Hidden Gems
                            </h3>
                        </div>
                        <div class="collections-main_locl-collections-main__content__explore__box__caption__ZsUpD">
                            <h6 class="collections-main_locl-collections-main__content__explore__box__caption__text___RFmO">
                            High-footfall and affordable marketing locations
                            </h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="collections-main_locl-collections-main__content__explore__box__1l8yG collections-main_locl-collections-main__content__explore__box-double__IqGRf-2">
                <a href="#">
                    <div class="collections-main_locl-collections-main__content__explore__box__content__cLgv_">
                        <img class="collections-main_locl-collections-main__content__explore__box__image__wZMwT" width ="320" height="340" src="https://cdn.prod.website-files.com/6070d02b5737f5fd93e1268f/632df57bf93d2a3c3b444694_ModernHaus_Soho.jpg" alt="">
                        <div class="collections-main_locl-collections-main__content__explore__box__info__KKZfx">
                            <h3 class="collections-main_locl-collections-main__content__explore__box__title__ISDOd">
                                Hidden Gems
                            </h3>
                        </div>
                        <div class="collections-main_locl-collections-main__content__explore__box__caption__ZsUpD">
                            <h6 class="collections-main_locl-collections-main__content__explore__box__caption__text___RFmO">
                            High-footfall and affordable marketing locations
                            </h6>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        @else
        <div class="collections-main_locl-collections-main__content__explore__collections__YCKQa">
            <div class="collections-main_locl-collections-main__content__explore__box__1l8yG collections-main_locl-collections-main__content__explore__box-double__IqGRf-2">
                <a href="#">
                <!-- collections-main_locl-collections-main__content__explore__box__1l8yG collections-main_locl-collections-main__content__explore__box-double__IqGRf-2 -->
                    <div class="collections-main_locl-collections-main__content__explore__box__content__cLgv_">
                        <img class="collections-main_locl-collections-main__content__explore__box__image__wZMwT" width="667" height="340" src="{{ $homeFourthSection[0] == null ? '' : $homeFourthSection[0]->getFirstMedia('blog_image')->getUrl() }}" alt="">
                        <div class="collections-main_locl-collections-main__content__explore__box__info__KKZfx">
                            <h3 class="collections-main_locl-collections-main__content__explore__box__title__ISDOd">
                            {{ $homeFourthSection[0] == null ? 'first title' : $homeFourthSection[0]->first_title }}
                            </h3>
                        </div>
                        <div class="collections-main_locl-collections-main__content__explore__box__caption__ZsUpD">
                            <h6 class="collections-main_locl-collections-main__content__explore__box__caption__text___RFmO">{{ $homeFourthSection[0] == null ? 'second title' : $homeFourthSection[0]->second_title }}</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="collections-main_locl-collections-main__content__explore__box__1l8yG collections-main_locl-collections-main__content__explore__box-double__IqGRf">
                <a href="#">
                    <div class="collections-main_locl-collections-main__content__explore__box__content__cLgv_">
                        <img class="collections-main_locl-collections-main__content__explore__box__image__wZMwT" width ="320" height="340" src="{{ $homeFourthSection[1] == null ? '' : $homeFourthSection[1]->getFirstMedia('blog_image')->getUrl() }}" alt="">
                        <div class="collections-main_locl-collections-main__content__explore__box__info__KKZfx">
                            <h3 class="collections-main_locl-collections-main__content__explore__box__title__ISDOd">
                            {{ $homeFourthSection[1] == null ? 'second title' : $homeFourthSection[1]->first_title }}
                            </h3>
                        </div>
                        <div class="collections-main_locl-collections-main__content__explore__box__caption__ZsUpD">
                            <h6 class="collections-main_locl-collections-main__content__explore__box__caption__text___RFmO">
                            {{ $homeFourthSection[1] == null ? 'second title' : $homeFourthSection[1]->second_title }}
                            </h6>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="collections-main_locl-collections-main__content__explore__collections__YCKQa">
        
            <div class="collections-main_locl-collections-main__content__explore__box__1l8yG collections-main_locl-collections-main__content__explore__box-double__IqGRf">
                <a href="#">
                    <div class="collections-main_locl-collections-main__content__explore__box__content__cLgv_">
                        <img class="collections-main_locl-collections-main__content__explore__box__image__wZMwT" width ="320" height="340" src="{{ $homeFourthSection[2] == null ? '' : $homeFourthSection[2]->getFirstMedia('blog_image')->getUrl() }}" alt="">
                        <div class="collections-main_locl-collections-main__content__explore__box__info__KKZfx">
                            <h3 class="collections-main_locl-collections-main__content__explore__box__title__ISDOd">
                            {{ $homeFourthSection[2] == null ? 'first title' : $homeFourthSection[2]->first_title }}
                            </h3>
                        </div>
                        <div class="collections-main_locl-collections-main__content__explore__box__caption__ZsUpD">
                            <h6 class="collections-main_locl-collections-main__content__explore__box__caption__text___RFmO">
                            {{ $homeFourthSection[2] == null ? 'second title' : $homeFourthSection[2]->second_title }}
                            </h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="collections-main_locl-collections-main__content__explore__box__1l8yG collections-main_locl-collections-main__content__explore__box-double__IqGRf-2">
                <a href="#">
                    <div class="collections-main_locl-collections-main__content__explore__box__content__cLgv_">
                        <img class="collections-main_locl-collections-main__content__explore__box__image__wZMwT" width="667" height="340" src="{{ $homeFourthSection[3] == null ? '' : $homeFourthSection[3]->getFirstMedia('blog_image')->getUrl() }}" alt="">
                        <div class="collections-main_locl-collections-main__content__explore__box__info__KKZfx">
                            <h3 class="collections-main_locl-collections-main__content__explore__box__title__ISDOd">
                            {{ $homeFourthSection[3] == null ? 'first title' : $homeFourthSection[3]->first_title }}
                            </h3>
                        </div>
                        <div class="collections-main_locl-collections-main__content__explore__box__caption__ZsUpD">
                            <h6 class="collections-main_locl-collections-main__content__explore__box__caption__text___RFmO"> {{ $homeFourthSection[3] == null ? 'second title' : $homeFourthSection[3]->second_title }}</h6>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="collections-main_locl-collections-main__content__explore__collections__YCKQa">
            <div class="collections-main_locl-collections-main__content__explore__box__1l8yG collections-main_locl-collections-main__content__explore__box-double__IqGRf-2">
                <a href="#">
                    <div class="collections-main_locl-collections-main__content__explore__box__content__cLgv_">
                        <img class="collections-main_locl-collections-main__content__explore__box__image__wZMwT" width="667" height="340" src=" {{ $homeFourthSection[4] == null ? '' : $homeFourthSection[4]->getFirstMedia('blog_image')->getUrl() }}" alt="">
                        <div class="collections-main_locl-collections-main__content__explore__box__info__KKZfx">
                            <h3 class="collections-main_locl-collections-main__content__explore__box__title__ISDOd">
                            {{ $homeFourthSection[4] == null ? 'first title' : $homeFourthSection[4]->first_title }}
                            </h3>
                        </div>
                        <div class="collections-main_locl-collections-main__content__explore__box__caption__ZsUpD">
                            <h6 class="collections-main_locl-collections-main__content__explore__box__caption__text___RFmO"> {{ $homeFourthSection[4] == null ? 'second title' : $homeFourthSection[4]->second_title }}</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="collections-main_locl-collections-main__content__explore__box__1l8yG collections-main_locl-collections-main__content__explore__box-double__IqGRf">
                <a href="#">
                    <div class="collections-main_locl-collections-main__content__explore__box__content__cLgv_">
                        <img class="collections-main_locl-collections-main__content__explore__box__image__wZMwT" width ="320" height="340" src="{{ $homeFourthSection[5] == null ? '' : $homeFourthSection[5]->getFirstMedia('blog_image')->getUrl() }}" alt="">
                        <div class="collections-main_locl-collections-main__content__explore__box__info__KKZfx">
                            <h3 class="collections-main_locl-collections-main__content__explore__box__title__ISDOd">
                            {{ $homeFourthSection[5] == null ? 'first title' : $homeFourthSection[5]->first_title }}
                            </h3>
                        </div>
                        <div class="collections-main_locl-collections-main__content__explore__box__caption__ZsUpD">
                            <h6 class="collections-main_locl-collections-main__content__explore__box__caption__text___RFmO">
                            {{ $homeFourthSection[5] == null ? 'second title' : $homeFourthSection[5]->second_title }}
                            </h6>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="collections-main_locl-collections-main__content__explore__collections__YCKQa">
            <!-- <div class="collections-main_locl-collections-main__content__explore__box__1l8yG collections-main_locl-collections-main__content__explore__box-double__IqGRf-2">
                <a href="#">
                    <div class="collections-main_locl-collections-main__content__explore__box__content__cLgv_">
                        <img class="collections-main_locl-collections-main__content__explore__box__image__wZMwT" width ="320" height="340" src="{{ $homeFourthSection[6] == null ? '' : $homeFourthSection[6]->getFirstMedia('blog_image')->getUrl() }}" alt="">
                        <div class="collections-main_locl-collections-main__content__explore__box__info__KKZfx">
                            <h3 class="collections-main_locl-collections-main__content__explore__box__title__ISDOd">
                            {{ $homeFourthSection[6] == null ? 'first title' : $homeFourthSection[6]->first_title }}
                            </h3>
                        </div>
                        <div class="collections-main_locl-collections-main__content__explore__box__caption__ZsUpD">
                            <h6 class="collections-main_locl-collections-main__content__explore__box__caption__text___RFmO">
                            {{ $homeFourthSection[6] == null ? 'second title' : $homeFourthSection[6]->second_title }}
                            </h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="collections-main_locl-collections-main__content__explore__box__1l8yG collections-main_locl-collections-main__content__explore__box-double__IqGRf-2">
                <a href="#">
                    <div class="collections-main_locl-collections-main__content__explore__box__content__cLgv_">
                        <img class="collections-main_locl-collections-main__content__explore__box__image__wZMwT" width ="320" height="340" src="{{ $homeFourthSection[7] == null ? '' : $homeFourthSection[7]->getFirstMedia('blog_image')->getUrl() }}" alt="">
                        <div class="collections-main_locl-collections-main__content__explore__box__info__KKZfx">
                            <h3 class="collections-main_locl-collections-main__content__explore__box__title__ISDOd">
                            {{ $homeFourthSection[7] == null ? 'first title' : $homeFourthSection[7]->first_title }}
                            </h3>
                        </div>
                        <div class="collections-main_locl-collections-main__content__explore__box__caption__ZsUpD">
                            <h6 class="collections-main_locl-collections-main__content__explore__box__caption__text___RFmO">
                            {{ $homeFourthSection[7] == null ? 'second title' : $homeFourthSection[7]->second_title }}
                            </h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="collections-main_locl-collections-main__content__explore__box__1l8yG collections-main_locl-collections-main__content__explore__box-double__IqGRf-2">
                <a href="#">
                    <div class="collections-main_locl-collections-main__content__explore__box__content__cLgv_">
                        <img class="collections-main_locl-collections-main__content__explore__box__image__wZMwT" width ="320" height="340" src="{{ $homeFourthSection[8] == null ? '' : $homeFourthSection[8]->getFirstMedia('blog_image')->getUrl() }}" alt="">
                        <div class="collections-main_locl-collections-main__content__explore__box__info__KKZfx">
                            <h3 class="collections-main_locl-collections-main__content__explore__box__title__ISDOd">
                            {{ $homeFourthSection[8] == null ? 'first title' : $homeFourthSection[8]->first_title }}
                            </h3>
                        </div>
                        <div class="collections-main_locl-collections-main__content__explore__box__caption__ZsUpD">
                            <h6 class="collections-main_locl-collections-main__content__explore__box__caption__text___RFmO">
                            {{ $homeFourthSection[8] == null ? 'second title' : $homeFourthSection[8]->second_title }}
                            </h6>
                        </div>
                    </div>
                </a>
            </div> -->
        </div>
        @endif
        
    </section>

    <div class="blog-container">
        <div class="blog-header">
            <h1>Recent posts</h1>
            <a href="#">All posts</a>
        </div>
        
        <div class="blog-grid">
            @if(count($dataInsight) == 0)
            <article class="blog-card">
                <img src="https://cdn.prod.website-files.com/63062129119620a44791a2eb/675a0613f9bf3d20b0b51c83_what_is_adaptive_project_management_blog_hero_image_1440x810.webp" alt="Person with headphones working on laptop" class="blog-image">
                <div class="blog-content">
                    <h2 class="blog-title">What is adaptive project management?</h2>
                    <a href="#" class="read-more">Read more</a>
                </div>
            </article>

            <article class="blog-card">
                <img src="https://cdn.prod.website-files.com/63062129119620a44791a2eb/675c93aac3723a841b23246b_Tools_for_consulting_workshops-Blog-Hero-1440x810_2x.webp" alt="Tools illustration" class="blog-image">
                <div class="blog-content">
                    <h2 class="blog-title">Tools for consulting workshops: Run your next session with Mural</h2>
                    <a href="#" class="read-more">Read more</a>
                </div>
            </article>

            <article class="blog-card">
                <img src="https://cdn.prod.website-files.com/63062129119620a44791a2eb/6761c84f551ae0b06bea7b2f_the_top_10_strategic_analysis_tools_for_businesses_hero_image_1440x810_2x_50.webp" alt="Professional with tablet" class="blog-image">
                <div class="blog-content">
                    <h2 class="blog-title">The top 10 strategic analysis tools for businesses</h2>
                    <a href="#" class="read-more">Read more</a>
                </div>
            </article>
            @else
                @foreach($dataInsight as $index => $data)
                <article class="blog-card">
                    <img src="{{ $data->getFirstMedia('blog_image')->getUrl() }}" alt="Professional with tablet" class="blog-image">
                    <div class="blog-content">
                        <h2 class="blog-title">{{ $data->title }}</h2>
                        <a href="{{ url('/blog?slug=' . ($data->blog_slug ?? '#')) }}" class="read-more">Read more</a>
                    </div>
                </article>
                @endforeach
            @endif
        </div>
    </div>

    
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