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

        video {
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

        .brands__hero {
            position: relative;
            width: 100%;
            margin: 0 auto;
            padding: 4rem 2rem;
            min-height: 600px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
            background: #333333;
            overflow: hidden;
        }

        .brands__content {
            max-width: 600px;
            position: relative;
        }
        
        .brands__title-star {
            display: flex;
            gap: 30px
        }

        .brands__star {
            width: 100px;
            height: 60px;
            margin-bottom: 2rem;
        }

        .brands__star img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .brands__heading {
            color: #f5f5f5;
            font-size: 3.5rem;
            font-weight: 300;
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }

        .brands__description {
            font-size: 1.25rem;
            color: #e0e0e0;
            margin-bottom: 6rem;
            max-width: 500px;
            line-height: 3;
        }

        .brands__cta-button {
            display: inline-block;
            background: #00d1a0;
            color: #000000;
            padding: 1rem 2rem;
            border-radius: 4px;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.875rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            transition: background-color 0.3s ease;
        }

        .brands__cta-button:hover {
            background: #00e1b0;
        }

        .brands__image-section {
            position: relative;
            z-index: 1;
        }

        .brands__main-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 12px;
        }

        .brands__search-bubble {
            position: absolute;
            padding: 0.75rem 1.25rem;
            border-radius: 100px;
            color: white;
            font-size: 0.875rem;
        }

        .brands__bubble-1 {
            background: #ff7f50;
            top: 10%;
            right: 10%;
        }

        .brands__bubble-2 {
            background: #00b8d4;
            top: 40%;
            right: 5%;
        }

        .brands__bubble-3 {
            background: #ba68c8;
            bottom: 20%;
            left: 10%;
        }

        .brands__corner-pattern {
            position: absolute;
            bottom: -100px;
            right: -100px;
            width: 300px;
            height: 300px;
            z-index: 0;
        }

        .brands__corner-pattern img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        @media (max-width: 1024px) {
            .brands__hero {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .brands__content {
                margin: 0 auto;
            }

            .brands__star {
                margin: 0 auto 2rem;
            }

            .brands__description {
                margin: 0 auto 2rem;
            }

            .brands__image-section {
                margin-top: 2rem;
            }
        }

        @media (max-width: 768px) {
            .brands__heading {
                font-size: 2.5rem;
            }

            .brands__description {
                font-size: 1.125rem;
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
        width: 520px;
        max-width: 150%;
        top: 0%;
        left: 0;
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
    margin-left: 210px;
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
        width: 810px;
        max-width: 660px;
        margin-bottom: 10px;
        margin-left: -30px;
        padding-top: 0;
        font-family: museo-sans, sans-serif;
        font-size: 16px;
        position: relative;
        left: 240px;
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
        margin-left: 210px;
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

        #Brand-Start.w-node-af785f74-462c-d3d2-a2f9-6bb8b1fa7d21-38e12690 {
        grid-area: span 1 / span 2 / span 1 / span 2;
        }

        .for-brands-wrapper {
        margin-left: -80px;
        }

        .for-brands-inside {
        margin-top: 0;
        padding-left: 150px;
        position: relative;
        }

        .side-text {
        position: absolute;
        top: 60px;
        bottom: auto;
        left: 25px;
        right: auto;
        transform: rotate(-90deg);
        }

        .image-21 {
        margin-top: 5px;
        }

        .grid-11 {
        grid-column-gap: 1.5rem;
        grid-row-gap: 1.5rem;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        margin-top: 48px;
        margin-bottom: 24px;
        }

        #w-node-_6908daec-7568-e92c-8359-52ad8c5dcc1d-38e12690, #w-node-_5870cd65-5343-4c7a-fb1d-372d54d8f1e4-38e12690, #w-node-_80f9cdd4-50a3-0965-f8ec-9f3189e617af-38e12690, #w-node-ea7db798-7cc4-ef12-e7c3-c69ac466258f-38e12690, #w-node-f3cd016e-749b-cee0-1e28-1ac3466ef49f-38e12690, #w-node-_53b72004-b2a7-37ca-375f-935586df9876-38e12690, #w-node-_7c12d2d2-7bb4-a8ac-fb45-99132ae575c7-38e12690, #w-node-af5c3ffd-68ff-f11b-1f94-70e3f45b3fe4-38e12690 {
        grid-area: span 1 / span 1 / span 1 / span 1;
        align-self: center;
        justify-self: center;
        }

        .white-circle-icon {
        width: 100px;
        height: 100px;
        min-height: 100px;
        min-width: 100px;
        text-align: center;
        background-color: #fff;
        border-radius: 1000px;
        justify-content: center;
        align-items: center;
        padding: 8px;
        display: flex;
        position: relative;
        }

    ._2nd-section-phones {
        justify-content: space-between;
        align-items: flex-start;
        display: flex;
    }

    .phone-video-wrap.maude-mobile {
    min-height: 590px;
    min-width: 280px;
    }

    .phone-video-wrap {
    width: auto;
    max-height: 541px;
    max-width: 250px;
    min-height: 590px;
    min-width: 280px;
    border-radius: 41px;
    justify-content: center;
    align-items: center;
    display: flex;
    position: relative;
    overflow: hidden;
    }
    

    .image-42 {
    width: 250px;
    height: 480px;
    max-width: 100%;
    min-height: 570px;
    min-width: 250px;
    margin-top: 0;
    margin-left: 0;
    position: absolute;
    bottom: 5px;
    }

    .vide-bg-component.maude {
    max-height: 520px;
    min-height: 490px;
    min-width: 230px;
    top: 15px;
    }

    .vide-bg-component {
    max-height: 525px;
    max-width: 230px;
    min-height: 525px;
    min-width: 230px;
    margin-top: 0;
    margin-left: 0;
    padding-top: 0;
    padding-bottom: 0;
    top: 4px;
    left: 0;
    }

    .w-background-video {
    height: 500px;
    color: #fff;
    position: relative;
    overflow: hidden;
    }

    .w-background-video > video {
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: -100;
    background-position: 50%;
    background-size: cover;
    margin: auto;
    position: absolute;
    top: -100%;
    bottom: -100%;
    left: -100%;
    right: -100%;
    }

    .image-9 {
    flex: none;
    order: 0;
    margin-top: 50px;
    }

    .brands-popup__container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 5rem 2rem;
        }

        .brands-popup__title {
            text-align: center;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 4rem;
            letter-spacing: -0.5px;
        }

        .brands-popup__title::after {
            content: '';
            display: block;
            width: 60px;
            height: 3px;
            background: #ff4d6d;
            margin: 2rem auto 0;
        }

        .brands-popup__services {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 3rem;
            margin-bottom: 4rem;
        }

        .brands-popup__service {
            text-align: center;
        }

        .brands-popup__icon {
            width: 48px;
            height: 48px;
            margin: 0 auto 1.5rem;
        }

        .brands-popup__icon-image {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .brands-popup__service-title {
            font-size: 1rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 1rem;
        }

        .brands-popup__service-description {
            font-size: 0.95rem;
            color: #666;
            max-width: 300px;
            margin: 0 auto;
        }

        .brands-popup__cta-button {
            display: block;
            width: fit-content;
            margin: 3rem auto 0;
            padding: 1rem 2rem;
            border: 2px solid #2a9d8f;
            border-radius: 4px;
            color: #2a9d8f;
            text-decoration: none;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
        }

        .brands-popup__cta-button:hover {
            background: #2a9d8f;
            color: white;
        }

        @media (max-width: 768px) {
            .brands-popup__services {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .brands-popup__service {
                max-width: 400px;
                margin: 0 auto;
            }

            .brands-popup__title {
                font-size: 2rem;
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

    <section class="brands__hero">
        @if(count($brandHero) == 0)
        <div class="brands__content">
                <div class="brands__title-star">
                    <div class="brands__star">
                        <img src="https://s3.amazonaws.com/static.thevendry.co/pro/star.svg" alt="Purple star icon">
                    </div>
                    <div class="brands__title">
                        <h1 class="brands__heading">
                            Discover top venues & vendors together 
                        </h1>
                        <p class="brands__description">
                            With The Vendry Teams, your organization can unlock new tools to search, save, and share venues and vendors for all your events.
                        </p>
                        <a href="#" class="brands__cta-button">
                            Create a team for free
                        </a>
                    </div>
                </div>
            </div>
            <div class="brands__image-section">
               
                <img src="https://thevendry.com/cdn-cgi/image/width=1080,quality=75,fit=contain,metadata=none,format=auto/https%3A%2F%2Fs3.amazonaws.com%2Fstatic.thevendry.co%2Fproducts%2Fteams%2Fjumbo-people.png" alt="Team collaboration" class="brands__main-image">
                
                <!-- <div class="brands__search-bubble brands__bubble-1">Event space in Chicago</div>
                <div class="brands__search-bubble brands__bubble-2">Private dining room in New York</div>
                <div class="brands__search-bubble brands__bubble-3">Meeting space in Austin</div> -->
            </div>
            <div class="brands__corner-pattern">
                <img src="https://s3.amazonaws.com/static.thevendry.co/pro/circles.svg" alt="Decorative pattern">
            </div>
        @else
        @foreach ($brandHero as $index => $brand) 
            <div class="brands__content">
                <div class="brands__title-star">
                    <div class="brands__star">
                        <img src="https://s3.amazonaws.com/static.thevendry.co/pro/star.svg" alt="Purple star icon">
                    </div>
                    <div class="brands__title">
                        <h1 class="brands__heading">
                            @if ( $brand == '' )
                            Discover top venues & vendors together
                            @else 
                            {!! html_entity_decode($brand->heading) !!}
                            <!-- {{ $brand->heading }} -->
                            @endif
                        </h1>
                        <p class="brands__description">
                            @if ( $brand == '' )
                            With The Vendry Teams, your organization can unlock new tools to search, save, and share venues and vendors for all your events.
                            @else 
                            {!! html_entity_decode($brand->description) !!}
                            <!-- {{ $brand->description }} -->
                            @endif
                        </p>
                        <a href="{{ $brand->button_link }}" class="brands__cta-button">
                            @if ( $brand == '' )
                            Create a team for free
                            @else 
                            {{ $brand->button_title }}
                            @endif
                        </a>
                    </div>
                </div>
            </div>
            <div class="brands__image-section">
                @if ( $brand == '' )
                <img src="https://thevendry.com/cdn-cgi/image/width=1080,quality=75,fit=contain,metadata=none,format=auto/https%3A%2F%2Fs3.amazonaws.com%2Fstatic.thevendry.co%2Fproducts%2Fteams%2Fjumbo-people.png" alt="Team collaboration" class="brands__main-image">
                @else 
                <img src="{{ $brand->getFirstMedia('hero_image')->getUrl() }}" alt="Team collaboration" class="brands__main-image">
                @endif
                
                <!-- <div class="brands__search-bubble brands__bubble-1">Event space in Chicago</div>
                <div class="brands__search-bubble brands__bubble-2">Private dining room in New York</div>
                <div class="brands__search-bubble brands__bubble-3">Meeting space in Austin</div> -->
            </div>
            <div class="brands__corner-pattern">
                <img src="https://s3.amazonaws.com/static.thevendry.co/pro/circles.svg" alt="Decorative pattern">
            </div>
        @endforeach
        @endif
    </section>

    <div class="container home w-container">
        <div class="w-layout-grid _1st-grid">
         @if (count($brandSecondSection) == 0) 
         <div class="collage-wrapper home">
                <img class="cups_img new-gif" width="222" src="https://cdn.prod.website-files.com/6070d02b5737f5fd93e1268f/64113b827f602eab28522acf_product_animation_03.gif" alt="">
                <img class="missing_image malin maude new-homepage" width="520" sizes="(max-width: 991px) 100vw, (max-width: 1919px) 41vw, 520px" src="https://cdn.prod.website-files.com/6070d02b5737f5fd93e1268f/63f669efafa11d2ad8166f7b_map.jpg" alt="">
                <img class="image-23 malin new-homepage" width="128" height="134" src="https://cdn.prod.website-files.com/6070d02b5737f5fd93e1268f/63dde80710d0b9c22c34b2fe_25_day_small.png" alt="">
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
                
                <div class="w-layout-grid grid-12">
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
                    
                </div>
                
                <a href="#" class="join large-beta black_outline-2 w-button">
                    learn more  
                </a>
            </div>
        @else
         @foreach ($brandSecondSection as $index => $second) 
            <div class="collage-wrapper home">
                
                <img class="cups_img new-gif" width="222" src="{{ $second->getFirstMedia('first_image')->getUrl() }}" alt="">
                <img class="missing_image malin maude new-homepage" width="520" sizes="(max-width: 991px) 100vw, (max-width: 1919px) 41vw, 520px" src="{{ $second->getFirstMedia('second_image')->getUrl() }}" alt="">
                <img class="image-23 malin new-homepage" width="128" height="134" src="{{ $second->getFirstMedia('third_image')->getUrl() }}" alt="">
            </div>
            <div id="w-node-d7f9fa13-7c3f-6adc-0132-6638a57fd2da-38e12690" class="v-contaner-wrapper mobile">
                
                <h3 class="h3_new meet_retell">
                    {!! html_entity_decode($second->heading_first_text) !!}
                    <!-- {{ $second->heading_first_text ?? "Meet" }} -->
                    <strong>
                    {!! html_entity_decode($second->heading_strong_text) !!}

                        <!-- {{ $second->heading_strong_text ?? "re/tell" }} -->
                    </strong>
                    {!! html_entity_decode($second->heading_second_text) !!}
                    <!-- {{ $second->heading_second_text ?? ".We" }} -->
                    <span class="underline_v">
                    {!! html_entity_decode($second->heading_underlined_first_text) !!}

                        <!-- {{ $second->heading_underlined_first_text ?? "match your brand" }} -->
                    </span>
                    {!! html_entity_decode($second->heading_third_text) !!}
                    <!-- {{ $second->heading_third_text ?? "with" }} -->
                    <span class="underline_v">
                    {!! html_entity_decode($second->heading_underlined_second_text) !!}
                        <!-- {{ $second->heading_underlined_second_text ?? "excess space" }} -->
                    </span>
                    {!! html_entity_decode($second->heading_fourth_text) !!}
                    <!-- {{ $second->heading_fourth_text ?? "inside high traffic retail destinations." }} -->
                    
                </h3>
                

                <p class="paragraph_new _35-bottom-space">
                {!! html_entity_decode($second->description) !!}
                <!-- {{ $second->description ?? "Each space has a built-in community. With just 25 sq/ft your brand can easily scale your retail presence any where that your target customer works, lives, travels, shops, and plays." }} -->
                </p>
                
                <div class="w-layout-grid grid-12">
                    
                    
                    <div id="w-node-cccaf796-1044-6344-7eea-04bb12cad28d-38e12690" class="large-icon-wrapper">
                        <img class="image-44" src="{{ $second->getFirstMedia('icon_image_1')->getUrl() }}" alt="">
                    </div>
                    <div id="w-node-c24386b3-37af-edb2-d424-5f9d82039140-38e12690" class="large-icon-wrapper">
                        <img class="image-45" src="{{ $second->getFirstMedia('icon_image_2')->getUrl() }}" alt="">
                    </div>
                    <div id="w-node-e9f010fe-20db-92db-e7a0-23f8252363e2-38e12690" class="large-icon-wrapper">
                        <img class="image-44" src="{{ $second->getFirstMedia('icon_image_3')->getUrl() }}" alt="">
                    </div>
                    <div id="travel-icon" class="large-icon-wrapper w-node-d62715d0-0629-968a-b88b-4baa38cf75d3-38e12690">
                        <img class="image-44" src="{{ $second->getFirstMedia('icon_image_4')->getUrl() }}" alt="">
                    </div>
                    <div id="w-node-_2c173987-9ce3-7aaa-9192-79788a52490e-38e12690" class="large-icon-wrapper">
                        <img class="image-44" src="{{ $second->getFirstMedia('icon_image_5')->getUrl() }}" alt="">
                    </div>
                    <div id="w-node-_2addf193-6110-d9ab-1980-96a344734884-38e12690" class="large-icon-wrapper">
                        <img class="image-44" src="{{ $second->getFirstMedia('icon_image_6')->getUrl() }}" alt="">
                    </div>
                    <div id="w-node-_2f0121b6-b801-53a5-8f4a-338127d391ad-38e12690" class="large-icon-wrapper">
                        <img class="image-44" src="{{ $second->getFirstMedia('icon_image_7')->getUrl() }}" alt="">
                    </div>
                </div>
                
                <a href="{{ $second->button_link }}" class="join large-beta black_outline-2 w-button">
                    {{ $second->button_title ?? "learn more"}}  
                </a>
                
            </div>
            @endforeach
        @endif
        </div>
        <div class="w-layout-grid _2nd-grid">
            @if(count($brandThirdSection) == 0)
            <div id="Brand-Start" class="title-wrap w-node-af785f74-462c-d3d2-a2f9-6bb8b1fa7d21-38e12690">
                <h3 class="h3_new irl">
                    ALL entrepreneurs deserve the opportunity to connect with customers IRL.
                </h3>
            </div>
            <div class="for-brands-wrapper">
                <div id="Brand-Section" class="for-brands-inside">
                    <div class="side-text">
                        <h3 class="h3_new">
                            <span class="underline_v">For Brands</span>
                        </h3>
                    </div>
                    <img class="image-21" width="100" src="https://cdn.prod.website-files.com/6070d02b5737f5fd93e1268f/6070d02b5737f511ebe126ff_green%20squiggle.png" alt="">
                    <p class="paragraph_new">
                        No leases. No brokers. No hassle. 
                        <br>
                        Upon approval, find spaces that match with your values as a brand. Your brand can plug-in to excess wall, floor, or shelf space, and take advantage of the high foot traffic already in place. 
                    </p>
                    <div class="w-layout-grid grid-11">
                        <div id="w-node-_6908daec-7568-e92c-8359-52ad8c5dcc1d-38e12690" class="white-circle-icon">
                            <img class="white-icon" src="https://cdn.prod.website-files.com/6070d02b5737f5fd93e1268f/62156094c0d8067729e8287c_Locally%20Made.png" alt="">
                        </div>
                        <div id="w-node-_5870cd65-5343-4c7a-fb1d-372d54d8f1e4-38e12690" class="white-circle-icon">
                            <img class="white-icon" src="https://cdn.prod.website-files.com/6070d02b5737f5fd93e1268f/622fb6a53072c37bf7d981e9_Fair-Trade.png" alt="">
                        </div>
                        <div id="w-node-_80f9cdd4-50a3-0965-f8ec-9f3189e617af-38e12690" class="white-circle-icon">
                            <img class="white-icon" src="https://cdn.prod.website-files.com/6070d02b5737f5fd93e1268f/622fb6c2c5147021d1a1899a_Ethical%20Production.png" alt="">
                        </div>
                        <div id="w-node-ea7db798-7cc4-ef12-e7c3-c69ac466258f-38e12690" class="white-circle-icon">
                            <img class="white-icon" src="https://cdn.prod.website-files.com/6070d02b5737f5fd93e1268f/6215607c9372569d6c858d36_Sustainable.png" alt="">
                        </div>
                        <div id="w-node-f3cd016e-749b-cee0-1e28-1ac3466ef49f-38e12690" class="white-circle-icon">
                            <img class="white-icon" src="https://cdn.prod.website-files.com/6070d02b5737f5fd93e1268f/6215609f8fcaf441bab46275_Social%20Justice.png" alt="">
                        </div>
                        <div id="w-node-_53b72004-b2a7-37ca-375f-935586df9876-38e12690" class="white-circle-icon">
                            <img class="white-icon" src="https://cdn.prod.website-files.com/6070d02b5737f5fd93e1268f/621560c0f5656141d0bd28ce_Inclusivity.png" alt="">
                        </div>
                        <div id="w-node-_7c12d2d2-7bb4-a8ac-fb45-99132ae575c7-38e12690" class="white-circle-icon">
                            <img class="white-icon" src="https://cdn.prod.website-files.com/6070d02b5737f5fd93e1268f/6234b2738ef1e30cdf7ee38c_Black-owned.png" alt="">
                        </div>
                        <div id="w-node-af5c3ffd-68ff-f11b-1f94-70e3f45b3fe4-38e12690" class="white-circle-icon">
                            <img class="white-icon" src="https://cdn.prod.website-files.com/6070d02b5737f5fd93e1268f/622fb6e1e9dbb31f698fe286_LGBTQ-owned.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="_2nd-section-phones">
                <div class="phone-video-wrap maude-mobile">
                    <img class="image-42 brands" src="https://cdn.prod.website-files.com/6070d02b5737f5fd93e1268f/622f9d0cd135910555e6252e_Phone_Frame_v3.svg" alt="">
                    <div class="vide-bg-component maude w-background-video w-background-video-atom">
                        <video id="ce14f9ae-1eb1-0284-9d5c-d70f623cdce4-video" muted="" autoplay="" loop="" data-object-fit="cover" style='background-image:url("https://cdn.prod.website-files.com/6070d02b5737f5fd93e1268f/627000e3aa688eb51069ae3a_maude_brand_website_vid-poster-00001.jpg");'>
                            <source src="https://cdn.prod.website-files.com/6070d02b5737f5fd93e1268f/627000e3aa688eb51069ae3a_maude_brand_website_vid-transcode.mp4" data-wf-ignore="true">
                            <source src="https://cdn.prod.website-files.com/6070d02b5737f5fd93e1268f/627000e3aa688eb51069ae3a_maude_brand_website_vid-transcode.webm" data-wf-ignore="true">
                        </video>
                    </div>
                </div>
                <img class="image-9" width="250" src="https://cdn.prod.website-files.com/6070d02b5737f5fd93e1268f/6334cd367d2ae2d0423cee16_Static_Space_Matches_Screen.png" alt="">
            </div>
            @else
            @foreach($brandThirdSection as $index => $third) 
            <div id="Brand-Start" class="title-wrap w-node-af785f74-462c-d3d2-a2f9-6bb8b1fa7d21-38e12690">
                <h3 class="h3_new irl">
                 {!! html_entity_decode($third->heading) !!}
                    <!-- {{ $third->heading }} -->
                </h3>
            </div>
            <div class="for-brands-wrapper">
                <div id="Brand-Section" class="for-brands-inside">
                    <div class="side-text">
                        <h3 class="h3_new">
                            <span class="underline_v">
                            {!! html_entity_decode($third->vertical_text) !!}

                                <!-- {{ $third->vertical_text }} -->
                            </span>
                        </h3>
                    </div>
                    <img class="image-21" width="100" src="https://cdn.prod.website-files.com/6070d02b5737f5fd93e1268f/6070d02b5737f511ebe126ff_green%20squiggle.png" alt="">
                    <p class="paragraph_new">
                    {!! html_entity_decode($third->description) !!}
                        
                     <!-- {{ $third->description }} -->
                    </p>
                    <div class="w-layout-grid grid-11">
                        <div id="w-node-_6908daec-7568-e92c-8359-52ad8c5dcc1d-38e12690" class="white-circle-icon">
                            <img class="white-icon" src="{{ $third->getFirstMedia('icon_image_1')->getUrl() }}" alt="">
                        </div>
                        <div id="w-node-_5870cd65-5343-4c7a-fb1d-372d54d8f1e4-38e12690" class="white-circle-icon">
                            <img class="white-icon" src="{{ $third->getFirstMedia('icon_image_2')->getUrl() }}" alt="">
                        </div>
                        <div id="w-node-_80f9cdd4-50a3-0965-f8ec-9f3189e617af-38e12690" class="white-circle-icon">
                            <img class="white-icon" src="{{ $third->getFirstMedia('icon_image_3')->getUrl() }}" alt="">
                        </div>
                        <div id="w-node-ea7db798-7cc4-ef12-e7c3-c69ac466258f-38e12690" class="white-circle-icon">
                            <img class="white-icon" src="{{ $third->getFirstMedia('icon_image_4')->getUrl() }}" alt="">
                        </div>
                        <div id="w-node-f3cd016e-749b-cee0-1e28-1ac3466ef49f-38e12690" class="white-circle-icon">
                            <img class="white-icon" src="{{ $third->getFirstMedia('icon_image_5')->getUrl() }}" alt="">
                        </div>
                        <div id="w-node-_53b72004-b2a7-37ca-375f-935586df9876-38e12690" class="white-circle-icon">
                            <img class="white-icon" src="{{ $third->getFirstMedia('icon_image_6')->getUrl() }}" alt="">
                        </div>
                        <div id="w-node-_7c12d2d2-7bb4-a8ac-fb45-99132ae575c7-38e12690" class="white-circle-icon">
                            <img class="white-icon" src="{{ $third->getFirstMedia('icon_image_7')->getUrl() }}" alt="">
                        </div>
                        <div id="w-node-af5c3ffd-68ff-f11b-1f94-70e3f45b3fe4-38e12690" class="white-circle-icon">
                            <img class="white-icon" src="{{ $third->getFirstMedia('icon_image_8')->getUrl() }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="_2nd-section-phones">
                <div class="phone-video-wrap maude-mobile">
                    <img class="image-42 brands" src="https://cdn.prod.website-files.com/6070d02b5737f5fd93e1268f/622f9d0cd135910555e6252e_Phone_Frame_v3.svg" alt="">
                    <div class="vide-bg-component maude w-background-video w-background-video-atom">
                        <video id="ce14f9ae-1eb1-0284-9d5c-d70f623cdce4-video" muted="" autoplay="" loop="" data-object-fit="cover" style='background-image:url("https://cdn.prod.website-files.com/6070d02b5737f5fd93e1268f/627000e3aa688eb51069ae3a_maude_brand_website_vid-poster-00001.jpg");'>
                            <source src="{{ $third->getFirstMedia('phone_video')->getUrl() }}" data-wf-ignore="true">
                            <source src="{{ $third->getFirstMedia('phone_video')->getUrl() }}" data-wf-ignore="true">
                        </video>
                    </div>
                </div>
                <img class="image-9" width="250" src="{{ $third->getFirstMedia('phone_image')->getUrl() }}" alt="">
            </div>
            @endforeach
          @endif
        </div>
    </div>

    <div class="brands-popup__container">
        
        <h2 class="brands-popup__title">
            @if($brandsFourthSectionHeadingButton[0] == null)
            SO WHAT EXACTLY DO WE DO?
            @else
            {!! html_entity_decode($brandsFourthSectionHeadingButton[0]->heading) !!}
            @endif
            <!-- {{ $brandsFourthSectionHeadingButton[0]->heading ?? "SO WHAT EXACTLY DO WE DO?"}}  -->
        </h2>
        
        <div class="brands-popup__services">
            @if(count ($brandsFourthSectionIconDescription) == 0)
            <div class="brands-popup__service">
                <div class="brands-popup__icon">
                    <img src="https://static.wixstatic.com/media/4d5cbe_f4abc24f37b3481090fc5610b64c595e~mv2.png/v1/fill/w_114,h_90,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/tv%20icon.png" alt="Chat bubble icon" class="brands-popup__icon-image">
                </div>
                <h3 class="brands-popup__service-title">Idea Generation</h3>
                <p class="brands-popup__service-description">If you have a pop up idea already- great. If not we love to get our wheels turning.</p>
            </div>

            <div class="brands-popup__service">
                <div class="brands-popup__icon">
                    <img src="https://static.wixstatic.com/media/4d5cbe_15f03e0e47154e86b48f87e878076fc0~mv2.png/v1/fill/w_100,h_90,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/microphone%20icon.png" alt="Tools icon" class="brands-popup__icon-image">
                </div>
                <h3 class="brands-popup__service-title">Design & Fabrication</h3>
                <p class="brands-popup__service-description">We have a passion for great design and have the resources to make it happen flawlessly.</p>
            </div>

            <div class="brands-popup__service">
                <div class="brands-popup__icon">
                    <img src="https://static.wixstatic.com/media/4d5cbe_03854467a36d4ffb8f8e937f60c17d4b~mv2.png/v1/fill/w_92,h_100,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/target%20icon.png" alt="Shield icon" class="brands-popup__icon-image">
                </div>
                <h3 class="brands-popup__service-title">Management & Execution</h3>
                <p class="brands-popup__service-description">We handle the myriad elements that go into a pop up shop from permits to insurance. We are here to help make sure the execution exceeds your expectations.</p>
            </div>

            <div class="brands-popup__service">
                <div class="brands-popup__icon">
                    <img src="https://static.wixstatic.com/media/4d5cbe_54ad8d830e8541028bfadbab41ee50dc~mv2.png/v1/fill/w_118,h_120,al_c,lg_1,q_85,enc_avif,quality_auto/lightbulb%20icon.png" alt="Chat bubble icon" class="brands-popup__icon-image">
                </div>
                <h3 class="brands-popup__service-title">Idea Generation</h3>
                <p class="brands-popup__service-description">If you have a pop up idea already- great. If not we love to get our wheels turning.</p>
            </div>

            <div class="brands-popup__service">
                <div class="brands-popup__icon">
                    <img src="https://static.wixstatic.com/media/4d5cbe_b619304cdfc049fc84b756c4ed2f7b4c~mv2.png/v1/fill/w_116,h_80,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/audience%20icon.png" alt="Chat bubble icon" class="brands-popup__icon-image">
                </div>
                <h3 class="brands-popup__service-title">Idea Generation</h3>
                <p class="brands-popup__service-description">If you have a pop up idea already- great. If not we love to get our wheels turning.</p>
            </div>

            <div class="brands-popup__service">
                <div class="brands-popup__icon">
                    <img src="https://static.wixstatic.com/media/4d5cbe_8d009236010547b885eee9c37420372a~mv2.png/v1/fill/w_100,h_90,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/bank%20icon.png" alt="Tools icon" class="brands-popup__icon-image">
                </div>
                <h3 class="brands-popup__service-title">Design & Fabrication</h3>
                <p class="brands-popup__service-description">We have a passion for great design and have the resources to make it happen flawlessly.</p>
            </div>

            <div class="brands-popup__service">
                <div class="brands-popup__icon">
                    <img src="https://static.wixstatic.com/media/4d5cbe_50a84cd3e74c47888d9ffbb50f06f2c9~mv2.png/v1/fill/w_88,h_90,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/clock%20icon.png" alt="Shield icon" class="brands-popup__icon-image">
                </div>
                <h3 class="brands-popup__service-title">Management & Execution</h3>
                <p class="brands-popup__service-description">We handle the myriad elements that go into a pop up shop from permits to insurance. We are here to help make sure the execution exceeds your expectations.</p>
            </div>

            <div class="brands-popup__service">
                <div class="brands-popup__icon">
                    <img src="https://static.wixstatic.com/media/4d5cbe_d60db6caf4374528ac0b525b749c9d6e~mv2.png/v1/fill/w_120,h_102,al_c,lg_1,q_85,enc_avif,quality_auto/diamond%20icon.png" alt="Chat bubble icon" class="brands-popup__icon-image">
                </div>
                <h3 class="brands-popup__service-title">Idea Generation</h3>
                <p class="brands-popup__service-description">If you have a pop up idea already- great. If not we love to get our wheels turning.</p>
            </div>
            @else
                @foreach($brandsFourthSectionIconDescription as $index => $fourth) 
                <div class="brands-popup__service">
                <div class="brands-popup__icon">
                    <img src="{{ $fourth->getFirstMedia('icon_image')->getUrl() }}" alt="Chat bubble icon" class="brands-popup__icon-image">
                </div>
                <h3 class="brands-popup__service-title">
                    {!! html_entity_decode($fourth->heading) !!}
                    <!-- {{ $fourth->heading }} -->
                </h3>
                <p class="brands-popup__service-description">
                {!! html_entity_decode($fourth->description) !!}

                    <!-- {{ $fourth->description }} -->
                </p>
            </div>
                @endforeach
            @endif
        </div>

        <a href="{{ $brandsFourthSectionHeadingButton[0]->button_link ?? '#' }}" class="brands-popup__cta-button">{{ $brandsFourthSectionHeadingButton[0]->button_title ?? "Get a Free Pop Up Quote"}} </a>
    </div>

    <section class="space__cta-section">
        <div class="space__chevron">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6 9L12 15L18 9" stroke="#8A2BE2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
        <h2>
            @if(count($brandsFifthSection) == 0 )
             Grow your business with The Vendry.<br>All for free!
            @else
            {!! html_entity_decode($brandsFifthSection[0]->heading) !!}
             <!-- {{ $brandsFifthSection[0]->heading}} -->
             @endif
        </h2>
        <a href="{{ $brandsFifthSection[0]->button_link ??  'https://forms.gle/yaJ4mNeDPuxnMsgo9 '}} ">
            <button class="space__cta-button">  {{ $brandsFifthSection[0]->button_title ?? "ADD YOUR BUSINESS"}} </button>
        </a>
    </section>

    <section class="space-faq__section">
            <div class="space-faq__container">
                <h1>
                @if($brandsSixthSectionHeadingDescription[0] == null)
                SHOP FAQS
                @else
                {!! html_entity_decode($brandsSixthSectionHeadingDescription[0]->heading) !!}
                @endif
                

                </h1>
                <p class="space-faq__description">
                @if($brandsSixthSectionHeadingDescription[0] == null)
                Find answers to our most frequently asked questions below. If you can't find what you're looking for please contact us and we'll get in touch within 24 hours.
                @else
                {!! html_entity_decode($brandsSixthSectionHeadingDescription[0]->description) !!}
                @endif

                    <!-- {{ $brandsSixthSectionHeadingDescription[0]->description ?? "Find answers to our most frequently asked questions below. If you can't find what you're looking for please contact us and we'll get in touch within 24 hours."}} -->
                </p>

                <div class="space-faq__accordion">
                    @if(count($brandsSixthSectionFAQ) == 0)
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
                        @foreach($brandsSixthSectionFAQ as $index => $sixth) 
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

    <script>
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