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

        .read-more {
            display: inline-block;
            color: #000;
            text-decoration: none;
            border-bottom: 1px solid #000;
            padding-bottom: 2px;
            margin-top: 1rem;
            font-size: 0.9rem;
        }

        .pagination {
            display: flex;
            align-items: center;
            gap: 1rem;
            justify-content: center;
            padding: 2rem 2rem;
        }

        .pagination-button {
            background: #000000;
            color: #ffffff;
            border: none;
            padding: 0.75rem 1.25rem;
            border-radius: 4px;
            font-size: 0.875rem;
            font-weight: 500;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            transition: background-color 0.2s ease;
        }

        .pagination-button:hover {
            background: #333333;
        }

        .pagination-button:focus {
            outline: 2px solid #000000;
            outline-offset: 2px;
        }

        .pagination-counter {
            font-size: 0.875rem;
            font-weight: 500;
            color: #000000;
            min-width: 3rem;
            text-align: center;
        }

        .arrow {
            display: inline-block;
            width: 16px;
            height: 16px;
            position: relative;
        }

        .arrow-left::before,
        .arrow-right::before {
            content: '';
            position: absolute;
            width: 8px;
            height: 8px;
            border-style: solid;
            border-width: 2px 2px 0 0;
            border-color: currentColor;
            top: 50%;
            left: 50%;
        }

        .arrow-left::before {
            transform: translate(-25%, -50%) rotate(-135deg);
        }

        .arrow-right::before {
            transform: translate(-75%, -50%) rotate(45deg);
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

            <article class="blog-card">
                <img src="https://cdn.prod.website-files.com/63062129119620a44791a2eb/675ca34248f6f76c1acc4a68_crafting_a_business_plan_with_ease_using_mural_hero_image_1440x810_2x_50.webp" alt="Two people working together" class="blog-image">
                <div class="blog-content">
                    <h2 class="blog-title">Easily put together a business plan with Mural</h2>
                    <a href="#" class="read-more">Read more</a>
                </div>
            </article>

            <article class="blog-card">
                <img src="https://cdn.prod.website-files.com/63062129119620a44791a2eb/675ca94ac5425345783c1f00_how_to_build_a_presentation_outline_blog_hero_1440x810_2x_50.webp" alt="Team meeting" class="blog-image">
                <div class="blog-content">
                    <h2 class="blog-title">How to build a presentation outline (with examples)</h2>
                    <a href="#" class="read-more">Read more</a>
                </div>
            </article>

            <article class="blog-card">
                <img src="https://cdn.prod.website-files.com/63062129119620a44791a2eb/6761702d1b1ac69784e28257_talkingmethods_2024_10_mvpepisode_4_bill_johnson_hero_image_1440x810_2x.webp" alt="Community engagement banner" class="blog-image">
                <div class="blog-content">
                    <h2 class="blog-title">Elevating community engagement: Insights from Bill Johnston</h2>
                    <a href="#" class="read-more">Read more</a>
                </div>
            </article>
            
            <article class="blog-card">
                <img src="https://cdn.prod.website-files.com/63062129119620a44791a2eb/675ca34248f6f76c1acc4a68_crafting_a_business_plan_with_ease_using_mural_hero_image_1440x810_2x_50.webp" alt="Two people working together" class="blog-image">
                <div class="blog-content">
                    <h2 class="blog-title">Easily put together a business plan with Mural</h2>
                    <a href="#" class="read-more">Read more</a>
                </div>
            </article>

            <article class="blog-card">
                <img src="https://cdn.prod.website-files.com/63062129119620a44791a2eb/675ca94ac5425345783c1f00_how_to_build_a_presentation_outline_blog_hero_1440x810_2x_50.webp" alt="Team meeting" class="blog-image">
                <div class="blog-content">
                    <h2 class="blog-title">How to build a presentation outline (with examples)</h2>
                    <a href="#" class="read-more">Read more</a>
                </div>
            </article>

            <article class="blog-card">
                <img src="https://cdn.prod.website-files.com/63062129119620a44791a2eb/6761702d1b1ac69784e28257_talkingmethods_2024_10_mvpepisode_4_bill_johnson_hero_image_1440x810_2x.webp" alt="Community engagement banner" class="blog-image">
                <div class="blog-content">
                    <h2 class="blog-title">Elevating community engagement: Insights from Bill Johnston</h2>
                    <a href="#" class="read-more">Read more</a>
                </div>
            </article>

            <article class="blog-card">
                <img src="https://cdn.prod.website-files.com/63062129119620a44791a2eb/675ca34248f6f76c1acc4a68_crafting_a_business_plan_with_ease_using_mural_hero_image_1440x810_2x_50.webp" alt="Two people working together" class="blog-image">
                <div class="blog-content">
                    <h2 class="blog-title">Easily put together a business plan with Mural</h2>
                    <a href="#" class="read-more">Read more</a>
                </div>
            </article>

            <article class="blog-card">
                <img src="https://cdn.prod.website-files.com/63062129119620a44791a2eb/675ca94ac5425345783c1f00_how_to_build_a_presentation_outline_blog_hero_1440x810_2x_50.webp" alt="Team meeting" class="blog-image">
                <div class="blog-content">
                    <h2 class="blog-title">How to build a presentation outline (with examples)</h2>
                    <a href="#" class="read-more">Read more</a>
                </div>
            </article>

            <article class="blog-card">
                <img src="https://cdn.prod.website-files.com/63062129119620a44791a2eb/6761702d1b1ac69784e28257_talkingmethods_2024_10_mvpepisode_4_bill_johnson_hero_image_1440x810_2x.webp" alt="Community engagement banner" class="blog-image">
                <div class="blog-content">
                    <h2 class="blog-title">Elevating community engagement: Insights from Bill Johnston</h2>
                    <a href="#" class="read-more">Read more</a>
                </div>
            </article>

            <article class="blog-card">
                <img src="https://cdn.prod.website-files.com/63062129119620a44791a2eb/675ca34248f6f76c1acc4a68_crafting_a_business_plan_with_ease_using_mural_hero_image_1440x810_2x_50.webp" alt="Two people working together" class="blog-image">
                <div class="blog-content">
                    <h2 class="blog-title">Easily put together a business plan with Mural</h2>
                    <a href="#" class="read-more">Read more</a>
                </div>
            </article>

            <article class="blog-card">
                <img src="https://cdn.prod.website-files.com/63062129119620a44791a2eb/675ca94ac5425345783c1f00_how_to_build_a_presentation_outline_blog_hero_1440x810_2x_50.webp" alt="Team meeting" class="blog-image">
                <div class="blog-content">
                    <h2 class="blog-title">How to build a presentation outline (with examples)</h2>
                    <a href="#" class="read-more">Read more</a>
                </div>
            </article>

            <article class="blog-card">
                <img src="https://cdn.prod.website-files.com/63062129119620a44791a2eb/6761702d1b1ac69784e28257_talkingmethods_2024_10_mvpepisode_4_bill_johnson_hero_image_1440x810_2x.webp" alt="Community engagement banner" class="blog-image">
                <div class="blog-content">
                    <h2 class="blog-title">Elevating community engagement: Insights from Bill Johnston</h2>
                    <a href="#" class="read-more">Read more</a>
                </div>
            </article>

            <article class="blog-card">
                <img src="https://cdn.prod.website-files.com/63062129119620a44791a2eb/675ca34248f6f76c1acc4a68_crafting_a_business_plan_with_ease_using_mural_hero_image_1440x810_2x_50.webp" alt="Two people working together" class="blog-image">
                <div class="blog-content">
                    <h2 class="blog-title">Easily put together a business plan with Mural</h2>
                    <a href="#" class="read-more">Read more</a>
                </div>
            </article>

            <article class="blog-card">
                <img src="https://cdn.prod.website-files.com/63062129119620a44791a2eb/675ca94ac5425345783c1f00_how_to_build_a_presentation_outline_blog_hero_1440x810_2x_50.webp" alt="Team meeting" class="blog-image">
                <div class="blog-content">
                    <h2 class="blog-title">How to build a presentation outline (with examples)</h2>
                    <a href="#" class="read-more">Read more</a>
                </div>
            </article>

            <article class="blog-card">
                <img src="https://cdn.prod.website-files.com/63062129119620a44791a2eb/6761702d1b1ac69784e28257_talkingmethods_2024_10_mvpepisode_4_bill_johnson_hero_image_1440x810_2x.webp" alt="Community engagement banner" class="blog-image">
                <div class="blog-content">
                    <h2 class="blog-title">Elevating community engagement: Insights from Bill Johnston</h2>
                    <a href="#" class="read-more">Read more</a>
                </div>
            </article>

            <article class="blog-card">
                <img src="https://cdn.prod.website-files.com/63062129119620a44791a2eb/675ca34248f6f76c1acc4a68_crafting_a_business_plan_with_ease_using_mural_hero_image_1440x810_2x_50.webp" alt="Two people working together" class="blog-image">
                <div class="blog-content">
                    <h2 class="blog-title">Easily put together a business plan with Mural</h2>
                    <a href="#" class="read-more">Read more</a>
                </div>
            </article>

            <article class="blog-card">
                <img src="https://cdn.prod.website-files.com/63062129119620a44791a2eb/675ca94ac5425345783c1f00_how_to_build_a_presentation_outline_blog_hero_1440x810_2x_50.webp" alt="Team meeting" class="blog-image">
                <div class="blog-content">
                    <h2 class="blog-title">How to build a presentation outline (with examples)</h2>
                    <a href="#" class="read-more">Read more</a>
                </div>
            </article>

            <article class="blog-card">
                <img src="https://cdn.prod.website-files.com/63062129119620a44791a2eb/6761702d1b1ac69784e28257_talkingmethods_2024_10_mvpepisode_4_bill_johnson_hero_image_1440x810_2x.webp" alt="Community engagement banner" class="blog-image">
                <div class="blog-content">
                    <h2 class="blog-title">Elevating community engagement: Insights from Bill Johnston</h2>
                    <a href="#" class="read-more">Read more</a>
                </div>
            </article>

            <article class="blog-card">
                <img src="https://cdn.prod.website-files.com/63062129119620a44791a2eb/675ca34248f6f76c1acc4a68_crafting_a_business_plan_with_ease_using_mural_hero_image_1440x810_2x_50.webp" alt="Two people working together" class="blog-image">
                <div class="blog-content">
                    <h2 class="blog-title">Easily put together a business plan with Mural</h2>
                    <a href="#" class="read-more">Read more</a>
                </div>
            </article>

            <article class="blog-card">
                <img src="https://cdn.prod.website-files.com/63062129119620a44791a2eb/675ca94ac5425345783c1f00_how_to_build_a_presentation_outline_blog_hero_1440x810_2x_50.webp" alt="Team meeting" class="blog-image">
                <div class="blog-content">
                    <h2 class="blog-title">How to build a presentation outline (with examples)</h2>
                    <a href="#" class="read-more">Read more</a>
                </div>
            </article>

            <article class="blog-card">
                <img src="https://cdn.prod.website-files.com/63062129119620a44791a2eb/6761702d1b1ac69784e28257_talkingmethods_2024_10_mvpepisode_4_bill_johnson_hero_image_1440x810_2x.webp" alt="Community engagement banner" class="blog-image">
                <div class="blog-content">
                    <h2 class="blog-title">Elevating community engagement: Insights from Bill Johnston</h2>
                    <a href="#" class="read-more">Read more</a>
                </div>
            </article>

            <article class="blog-card">
                <img src="https://cdn.prod.website-files.com/63062129119620a44791a2eb/675ca34248f6f76c1acc4a68_crafting_a_business_plan_with_ease_using_mural_hero_image_1440x810_2x_50.webp" alt="Two people working together" class="blog-image">
                <div class="blog-content">
                    <h2 class="blog-title">Easily put together a business plan with Mural</h2>
                    <a href="#" class="read-more">Read more</a>
                </div>
            </article>

            <article class="blog-card">
                <img src="https://cdn.prod.website-files.com/63062129119620a44791a2eb/675ca94ac5425345783c1f00_how_to_build_a_presentation_outline_blog_hero_1440x810_2x_50.webp" alt="Team meeting" class="blog-image">
                <div class="blog-content">
                    <h2 class="blog-title">How to build a presentation outline (with examples)</h2>
                    <a href="#" class="read-more">Read more</a>
                </div>
            </article>

            <article class="blog-card">
                <img src="https://cdn.prod.website-files.com/63062129119620a44791a2eb/6761702d1b1ac69784e28257_talkingmethods_2024_10_mvpepisode_4_bill_johnson_hero_image_1440x810_2x.webp" alt="Community engagement banner" class="blog-image">
                <div class="blog-content">
                    <h2 class="blog-title">Elevating community engagement: Insights from Bill Johnston</h2>
                    <a href="#" class="read-more">Read more</a>
                </div>
            </article>
            @else
                @foreach($dataInsight as $index => $data) 
                <article class="blog-card">
                    <img src="{{ $data->getFirstMedia('blog_image')->getUrl() }}" alt="Community engagement banner" class="blog-image">
                    <div class="blog-content">
                        <h2 class="blog-title">{{ $data->title }}</h2>
                        <a href="{{ url('/blog?slug=' . ($data->blog_slug ?? '#')) }}" class="read-more">Read more</a>
                    </div>
                </article>
                @endforeach
            @endif
        </div>
        <nav class="pagination" aria-label="Pagination">
            @if($pagination['current_page'] > 1)
            <a href="{{ request()->fullUrlWithQuery(['page' => $pagination['current_page'] - 1]) }}" class="pagination-button" aria-label="Previous page">
                <span class="arrow arrow-left"></span>
                Prev
            </a>
            @endif
            
            <span class="pagination-counter" aria-label="Page {{ $pagination['current_page'] }} of {{ $pagination['total_pages'] }}">
                {{ $pagination['current_page'] }} / {{ $pagination['total_pages'] }}
            </span>
            
            @if($pagination['has_more_pages'])
            <a href="{{ request()->fullUrlWithQuery(['page' => $pagination['current_page'] + 1]) }}" class="pagination-button" aria-label="Next page">
                Next
                <span class="arrow arrow-right"></span>
            </a>
            @endif
        </nav>
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