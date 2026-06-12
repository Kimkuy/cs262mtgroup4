@extends('layout')
@section('content')


    <head>
        <link rel="stylesheet" href="{{ asset('/css/team.css') }}">
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <!-- <link rel='stylesheet' href='https://esports.org.sg/wp-content/plugins/breakdance/plugin/themeless/normalize.min.css'> -->
        <style data-fullcalendar=""></style>
        <link href="//esports.org.sg/wp-content/cache/wpfc-minified/7yzoad36/2bcon.css" media="all" rel="stylesheet"
            type="text/css" />
        <title>High Performance - Singapore Esports Association</title>
        <!-- The SEO Framework by Sybre Waaijer -->
        <meta content="max-snippet:-1,max-image-preview:large,max-video-preview:-1" name="robots" />
        <link href="https://esports.org.sg/high-performance/" rel="canonical" />
        <meta
            content="Powering Team Singapore esports with a National Training Centre, transparent selection pathways, and support for major games participation on the world stage."
            name="description" />
        <meta content="website" property="og:type" />
        <meta content="en_GB" property="og:locale" />
        <meta content="Singapore Esports Association" property="og:site_name" />
        <meta content="High Performance" property="og:title" />
        <meta
            content="Powering Team Singapore esports with a National Training Centre, transparent selection pathways, and support for major games participation on the world stage."
            property="og:description" />
        <meta content="https://esports.org.sg/high-performance/" property="og:url" />
        <meta content="https://esports.org.sg/wp-content/uploads/2019/10/cropped-SGEA-LOGO-FINAL.png" property="og:image" />
        <meta content="512" property="og:image:width" />
        <meta content="512" property="og:image:height" />
        <meta content="summary_large_image" name="twitter:card" />
        <meta content="High Performance" name="twitter:title" />
        <meta
            content="Powering Team Singapore esports with a National Training Centre, transparent selection pathways, and support for major games participation on the world stage."
            name="twitter:description" />
        <meta content="https://esports.org.sg/wp-content/uploads/2019/10/cropped-SGEA-LOGO-FINAL.png"
            name="twitter:image" />
        <!-- / The SEO Framework by Sybre Waaijer | 6.41ms meta | 0.58ms boot -->
        <link href="//esports.org.sg" rel="dns-prefetch" />
        <link href="//www.googletagmanager.com" rel="dns-prefetch" />
        <!-- <link rel='stylesheet' id='mec-select2-style-css' href='https://esports.org.sg/wp-content/plugins/modern-events-calendar-lite/assets/packages/select2/select2.min.css?ver=7.33.0' media='all' /> -->
        <!-- <link rel='stylesheet' id='mec-font-icons-css' href='https://esports.org.sg/wp-content/plugins/modern-events-calendar-lite/assets/css/iconfonts.css?ver=7.33.0' media='all' /> -->
        <!-- <link rel='stylesheet' id='mec-frontend-style-css' href='https://esports.org.sg/wp-content/plugins/modern-events-calendar-lite/assets/css/frontend.css?ver=7.33.0' media='all' /> -->
        <!-- <link rel='stylesheet' id='mec-tooltip-style-css' href='https://esports.org.sg/wp-content/plugins/modern-events-calendar-lite/assets/packages/tooltip/tooltip.css?ver=7.33.0' media='all' /> -->
        <!-- <link rel='stylesheet' id='mec-tooltip-shadow-style-css' href='https://esports.org.sg/wp-content/plugins/modern-events-calendar-lite/assets/packages/tooltip/tooltipster-sideTip-shadow.min.css?ver=7.33.0' media='all' /> -->
        <!-- <link rel='stylesheet' id='featherlight-css' href='https://esports.org.sg/wp-content/plugins/modern-events-calendar-lite/assets/packages/featherlight/featherlight.css?ver=7.33.0' media='all' /> -->
        <!-- <link rel='stylesheet' id='mec-lity-style-css' href='https://esports.org.sg/wp-content/plugins/modern-events-calendar-lite/assets/packages/lity/lity.min.css?ver=7.33.0' media='all' /> -->
        <!-- <link rel='stylesheet' id='mec-general-calendar-style-css' href='https://esports.org.sg/wp-content/plugins/modern-events-calendar-lite/assets/css/mec-general-calendar.css?ver=7.33.0' media='all' /> -->
        <script src="//esports.org.sg/wp-content/cache/wpfc-minified/f3jq0f2n/2bcon.js" type="text/javascript"></script>
        <!-- <script id="jquery-core-js" src="https://esports.org.sg/wp-includes/js/jquery/jquery.min.js?ver=3.7.1"></script> -->
        <!-- <script id="jquery-migrate-js" defer='defer' src="https://esports.org.sg/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1"></script> -->
        <!-- Google tag (gtag.js) snippet added by Site Kit -->
        <!-- Google Analytics snippet added by Site Kit -->
        <script async="" defer="defer" id="google_gtagjs-js"
            src="https://www.googletagmanager.com/gtag/js?id=GT-NBB5SGM2"></script>
        <meta content="Site Kit by Google 1.179.0" name="generator" />
        <link href="https://esports.org.sg/wp-content/uploads/2019/10/cropped-SGEA-LOGO-FINAL-32x32.png" rel="icon"
            sizes="32x32" />
        <link href="https://esports.org.sg/wp-content/uploads/2019/10/cropped-SGEA-LOGO-FINAL-192x192.png" rel="icon"
            sizes="192x192" />
        <link href="https://esports.org.sg/wp-content/uploads/2019/10/cropped-SGEA-LOGO-FINAL-180x180.png"
            rel="apple-touch-icon" />
        <meta content="https://esports.org.sg/wp-content/uploads/2019/10/cropped-SGEA-LOGO-FINAL-270x270.png"
            name="msapplication-TileImage" />
        <!-- [HEADER ASSETS] -->
        <!-- <link rel="stylesheet" href="https://esports.org.sg/wp-content/plugins/breakdance/subplugins/breakdance-elements/dependencies-files/awesome-menu@1/awesome-menu.css?bd_ver=2.7.2" /> -->
        <!-- <link rel="stylesheet" href="https://esports.org.sg/wp-content/plugins/breakdance/subplugins/breakdance-elements/dependencies-files/breakdance-fancy-background@1/fancy-background.css?bd_ver=2.7.2" /> -->
        <!-- <link rel="stylesheet" href="https://esports.org.sg/wp-content/plugins/breakdance/plugin/animations/entrance/css/entrance.css?bd_ver=2.7.2" /> -->
        <!-- <link rel="stylesheet" href="https://esports.org.sg/wp-content/plugins/breakdance/subplugins/breakdance-elements/dependencies-files/lite-youtube@0.2/lite-yt-embed.css?bd_ver=2.7.2" /> -->
        <!-- <link rel="stylesheet" href="https://esports.org.sg/wp-content/plugins/breakdance/subplugins/breakdance-elements/dependencies-files/custom-tabs@1/tabs.css?bd_ver=2.7.2" /> -->
        <!-- <link rel="stylesheet" href="https://esports.org.sg/wp-content/plugins/breakdance/subplugins/breakdance-elements/dependencies-files/swiper@8/swiper-bundle.min.css?bd_ver=2.7.2" /> -->
        <!-- <link rel="stylesheet" href="https://esports.org.sg/wp-content/plugins/breakdance/subplugins/breakdance-elements/dependencies-files/swiper@8/breakdance-swiper-preset-defaults.css?bd_ver=2.7.2" /> -->
        <!-- <link rel="stylesheet" href="//esports.org.sg/wp-content/uploads/omgf/omgf-stylesheet-309/omgf-stylesheet-309.css?ver=1771916575" /> -->
        <!-- <link rel="stylesheet" href="https://esports.org.sg/wp-content/uploads/breakdance/css/post-1744-defaults.css?v=e836c0ac12556566186b3e5b11af5d22" /> -->
        <!-- <link rel="stylesheet" href="https://esports.org.sg/wp-content/uploads/breakdance/css/post-1755-defaults.css?v=c75df74e0def4fb763880527bc7b3133" /> -->
        <!-- <link rel="stylesheet" href="https://esports.org.sg/wp-content/uploads/breakdance/css/post-1747-defaults.css?v=747dd4652acc1256892295ab23364953" /> -->
        <!-- <link rel="stylesheet" href="https://esports.org.sg/wp-content/uploads/breakdance/css/global-settings.css?v=ef93b948a9c12c034bd79318bb5de1b4" /> -->
        <!-- <link rel="stylesheet" href="https://esports.org.sg/wp-content/uploads/breakdance/css/post-1744.css?v=023a6818d09a19688b3384132430743b" /> -->
        <!-- <link rel="stylesheet" href="https://esports.org.sg/wp-content/uploads/breakdance/css/post-1755.css?v=b1cc719cd3a600f919af6d557c653461" /> -->
        <!-- <link rel="stylesheet" href="https://esports.org.sg/wp-content/uploads/breakdance/css/post-1747.css?v=3d616e580a0ca41d1aff8d9c563dce67" /> -->
        <link href="//esports.org.sg/wp-content/cache/wpfc-minified/fpd4mjn8/2bcon.css" media="all" rel="stylesheet"
            type="text/css" />
        <!-- [/EOF HEADER ASSETS] -->
        <link as="image" fetchpriority="high"
            href="https://esports.org.sg/wp-content/uploads/2026/01/particle-light-hero.webp" rel="preload" />
        <link as="image" fetchpriority="high" href="https://esports.org.sg/wp-content/uploads/2026/01/lionhead-hero.webp"
            rel="preload" />

        <style>
            /* The container takes up the entire browser screen */
            .screen-container {
                display: grid;
                place-items: center;
                height: 100vh;
                margin-left: 150px;
                background-color: #f0f0f0;
            }

            /* Optional: Ensures the image looks good on mobile screens */
            .screen-container img {
                max-width: 90%;
                height: auto;
            }

            .bde-section-1755-100 .section-container {
                gap: 10px;
                align-items: flex-start;
                text-align: left;
                justify-content: center
            }

            .breakdance .bde-section-1755-100 {
                background-image: url(https://i.ytimg.com/vi/Rh54l01w4uc/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLBGoI6U3yv_nzRP2kTuIf8cp9jkDA);
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center center
            }
        </style>
    </head>

    <body
        class="wp-singular page-template-default page page-id-1755 wp-theme-breakdance-zero breakdance mec-theme-breakdance-zero"
        style="">
        <svg aria-hidden="true" class="breakdance-global-gradients-sprite">
            <lineargradient id="bde-palette-test-3f7f26dc-ddc1-4240-b5e3-db28e988651c-gradient-10" x1="0.5" x2="0.5" y1="1"
                y2="0">
                <stop offset="0.015384615384615385" stop-color="#efefef" stop-opacity="1"></stop>
                <stop offset="1" stop-color="#ffffff" stop-opacity="1"></stop>
            </lineargradient>
        </svg>
        <nav class="bde-header-builder-1744-100 bde-header-builder bde-header-builder--sticky-scroll-slide">
            <span class="breakdance-menu-overlay"></span>
        </nav>
        <section class="bde-section-1755-100 bde-section">
            <div class="section-background-overlay"></div>

            <div class="section-container">
                <div class="bde-div-1755-101 bde-div">
                    <div class="bde-text-1755-102 bde-text">
                        // E-sport Federation Cambodia //
                    </div>
                    <div class="bde-icon-1755-103 bde-icon">
                        <div class="bde-icon-icon breakdance-icon-atom">
                            <svg fill="none" height="16" viewbox="0 0 61 16" width="61" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1 7C0.447715 7 4.82823e-08 7.44772 0 8C-4.82823e-08 8.55228 0.447715 9 1 9L1 7ZM60.7071 8.70711C61.0976 8.31659 61.0976 7.68342 60.7071 7.2929L54.3431 0.928937C53.9526 0.538412 53.3195 0.538412 52.9289 0.928937C52.5384 1.31946 52.5384 1.95263 52.9289 2.34315L58.5858 8.00001L52.9289 13.6569C52.5384 14.0474 52.5384 14.6805 52.9289 15.0711C53.3195 15.4616 53.9526 15.4616 54.3431 15.0711L60.7071 8.70711ZM1 9L60 9.00001L60 7.00001L1 7L1 9Z"
                                    fill="#E0B13D"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <h2 class="bde-heading-1755-104 bde-heading">
                    high performance
                </h2>
            </div>
        </section>
        <section id="members" class="bde-section-1758-105 bde-section">
            <div class="section-container">
                <div class="bde-columns-1758-106 bde-columns">
                    <div class="bde-column-1758-107 bde-column is-animated" data-entrance="slideUp" style="">
                        <div class="bde-div-1758-108 bde-div">
                            <div class="bde-text-1758-109 bde-text">
                                Competiton Of all time
                            </div>
                            <div class="bde-icon-1758-110 bde-icon">
                                <div class="bde-icon-icon breakdance-icon-atom">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="61" height="16" viewBox="0 0 61 16"
                                        fill="none">
                                        <path
                                            d="M1 7C0.447715 7 4.82823e-08 7.44772 0 8C-4.82823e-08 8.55228 0.447715 9 1 9L1 7ZM60.7071 8.70711C61.0976 8.31659 61.0976 7.68342 60.7071 7.2929L54.3431 0.928937C53.9526 0.538412 53.3195 0.538412 52.9289 0.928937C52.5384 1.31946 52.5384 1.95263 52.9289 2.34315L58.5858 8.00001L52.9289 13.6569C52.5384 14.0474 52.5384 14.6805 52.9289 15.0711C53.3195 15.4616 53.9526 15.4616 54.3431 15.0711L60.7071 8.70711ZM1 9L60 9.00001L60 7.00001L1 7L1 9Z"
                                            fill="#E0B13D"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <h2 class="bde-heading-1758-111 bde-heading">
                            All the Tournaments Competition
                        </h2>
                    </div>
                </div>
                <br>
                <div class="bde-grid-1758-112 bde-grid is-animated" data-entrance="slideUp" style="">
                    <a class="bde-container-link-1758-113 bde-container-link breakdance-link"
                        href="https://www.mobilelegends.com/" target="_blank" data-type="url">
                        <img class="bde-image2-1758-114 bde-image2"
                            src="https://upload.wikimedia.org/wikipedia/en/a/a0/Mobile_Legends_Bang_Bang_2025_logo.png"
                            loading="lazy" sizes="(max-width: 150px) 100vw, 150px">
                    </a><a class="bde-container-link-1758-115 bde-container-link breakdance-link"
                        href="https://www.pubgmobile.com/en-US/home.shtml" target="_blank" data-type="url">
                        <img class="bde-image2-1758-116 bde-image2"
                            src="https://static0.xdaimages.com/wordpress/wp-content/uploads/2018/06/pubg.jpg" loading="lazy"
                            sizes="(max-width: 150px) 100vw, 150px">
                    </a><a class="bde-container-link-1758-117 bde-container-link breakdance-link"
                        href="https://www.honorofkings.com/" target="_blank" data-type="url">
                        <img class="bde-image2-1758-118 bde-image2"
                            src="https://upload.wikimedia.org/wikipedia/en/7/7d/Honor_of_Kings_logo.png" loading="lazy"
                            sizes="(max-width: 150px) 100vw, 150px">
                    </a><a class="bde-container-link-1758-119 bde-container-link breakdance-link"
                        href="https://www.leagueoflegends.com/fr-fr/" target="_blank" data-type="url">
                        <img class="bde-image2-1758-120 bde-image2"
                            src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/9eb028de391e65072d06e77f06d0955f66b9fa2c-736x316.png?accountingTag=LoL&auto=format&fit=fill&q=80&w=625"
                            loading="lazy" sizes="(max-width: 150px) 100vw, 150px">
                    </a><a class="bde-container-link-1758-121 bde-container-link breakdance-link"
                        href="https://playvalorant.com/fr-fr/" target="_blank" data-type="url">
                        <img class="bde-image2-1758-122 bde-image2"
                            src="https://upload.wikimedia.org/wikipedia/commons/f/fc/Valorant_logo_-_pink_color_version.svg"
                            loading="lazy" sizes="(max-width: 150px) 100vw, 150px">
                    </a><a class="bde-container-link-1758-123 bde-container-link breakdance-link"
                        href="https://www.playcfl.com/en/" target="_blank" data-type="url">
                        <img class="bde-image2-1758-124 bde-image2"
                            src="https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/4687500/34be6a0dca64984114ef8094a8cb33c9e5fea53f/header.jpg?t=1780721341"
                            loading="lazy" sizes="(max-width: 150px) 100vw, 150px">
                    </a><a class="bde-container-link-1758-125 bde-container-link breakdance-link" href="https://ak2.world/"
                        target="_blank" data-type="url">
                        <img class="bde-image2-1758-126 bde-image2"
                            src="https://cdn2.fptshop.com.vn/unsafe/1920x0/filters:format(webp):quality(75)/ak2_cover_87e9ffc9b6.png"
                            loading="lazy" sizes="(max-width: 150px) 100vw, 150px">
                    </a><a class="bde-container-link-1758-127 bde-container-link breakdance-link"
                        href="https://www.konami.com/efootball/en/" target="_blank" data-type="url">
                        <img class="bde-image2-1758-128 bde-image2"
                            src="https://image.api.playstation.com/vulcan/ap/rnd/202606/0204/64dcf5c59ea2af462ef67d22ff3e2b15c8e485199eb24db9.jpg"
                            loading="lazy" sizes="(max-width: 150px) 100vw, 150px">
                    </a>
                </div>
            </div>
        </section>
        <section class="bde-section-1755-105 bde-section" id="national-training-centre">
            <div class="section-background-overlay"></div>
            <div class="section-container">
                <div class="bde-div-1755-106 bde-div is-animated" data-entrance="slideUp" style="">
                    <div class="bde-div-1755-107 bde-div">
                        <h2 class="bde-heading-1755-111 bde-heading">
                            Mobile Device Competition
                        </h2>
                    </div>
                    <div class="bde-text-1755-112 bde-text">
                        The E-Sports Federation Cambodia (EFC) oversees mobile device and esports competitions across the
                        country,
                        with a strong focus on popular titles like Mobile Legends: Bang Bang (MLBB) and PUBG Mobile.
                    </div>
                    <div class="screen-container">
                        <img src="https://www.khmertimeskh.com/wp-content/uploads/2021/02/wvqwv.jpg" alt="Centered Display">
                    </div>
                    <div class="bde-text-1755-113 bde-text">
                        The E-Sports Federation Cambodia (EFC) hosts major mobile device competitions in the country, most
                        notably for the Mobile Legends: Bang Bang Professional League (MPL Cambodia).
                        In addition, EFC frequently partners with telecommunication companies to host national mobile
                        tournaments featuring games like PUBG Mobile and Total Football.
                    </div>
                    <div>
                        <div>
                            <div>
                                <h2>Mobile Legend Bang Bang</h2>
                                <p>
                                    <strong>Mobile Legends: Bang Bang (MLBB)</strong> officially entered the Cambodian
                                    esports ecosystem with
                                    the launch of the <strong>Mobile Legends: Bang Bang Professional League Cambodia (MPL
                                        KH)</strong> in
                                    August 2021. Moonton established the league with local partners, providing Cambodian
                                    teams a direct qualification pathway to international stages.
                                </p>
                                <p>
                                    The first MPL KH kicked off, featuring squads like Impunity KH, Seeyousoon, Burn Gaming,
                                    and NewBlood. See You Soon won the first-ever MPL KH Championship.
                                </p>
                            </div>
                            <div>
                                <img class="about-who__image"
                                    src="https://cdn.oneesports.gg/wp-content/uploads/2023/11/MLBB_MPLKH_Autumn2023_SeeYouSoon_champion.jpg"
                                    alt="EFC Cambodia team at competition"
                                    onerror="this.src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSoFCdWwG2xWtJAGkuXd0Mq7IWz1SJOhO497g&s'">
                            </div>
                            <br>
                            <div class="bde-grid-1758-112 bde-grid is-animated" data-entrance="slideUp" style="">
                                <a class="bde-container-link-1758-113 bde-container-link breakdance-link"
                                    href="https://liquipedia.net/mobilelegends/See_You_Soon" target="_blank"
                                    data-type="url">
                                    <img class="bde-image2-1758-114 bde-image2"
                                        src="https://cdn.escharts.com/uploads/public/615/af3/7bb/615af37bb35cf454877795."
                                        loading="lazy" sizes="(max-width: 150px) 100vw, 150px">
                                </a><a class="bde-container-link-1758-115 bde-container-link breakdance-link"
                                    href="https://liquipedia.net/mobilelegends/Impunity_KH" target="_blank" data-type="url">
                                    <img class="bde-image2-1758-116 bde-image2"
                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTMgZpBhWhkAqvQRXbZ1cB3GSUFUo93pKxazA&s"
                                        loading="lazy" sizes="(max-width: 150px) 100vw, 150px">
                                </a><a class="bde-container-link-1758-117 bde-container-link breakdance-link"
                                    href="https://liquipedia.net/mobilelegends/Team_Flash_KH" target="_blank"
                                    data-type="url">
                                    <img class="bde-image2-1758-118 bde-image2"
                                        src="https://cdn.escharts.com/uploads/public/615/af3/2c0/615af32c0efb6836079156."
                                        loading="lazy" sizes="(max-width: 150px) 100vw, 150px">
                                </a><a class="bde-container-link-1758-119 bde-container-link breakdance-link"
                                    href="https://escharts.com/teams/mobile-legends/nb" target="_blank" data-type="url">
                                    <img class="bde-image2-1758-120 bde-image2"
                                        src="https://cdn.escharts.com/uploads/public/615/af3/5e0/615af35e0578a104055856."
                                        loading="lazy" sizes="(max-width: 150px) 100vw, 150px">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div>
                            <div>
                                <h2>PlayerUnknown's Battlegrounds (PUBG Mobile)</h2>
                                <p>
                                    The very first official, fully localized <strong>PUBG Mobile</strong> competitive season
                                    for Cambodia was
                                    the <strong>PUBG Mobile Club Open (PMCO)</strong> – Spring Split 2021: Cambodia, which
                                    ran from February
                                    to March 2021. Registration for its Group Stages took place in mid-February 2021,
                                    pitting Cambodian squads against each other in the SEA Wildcard division.
                                </p>
                            </div>
                            <div>
                                <img class="about-who__image"
                                    src="https://scontent.fpnh5-6.fna.fbcdn.net/v/t39.30808-6/683610512_979320807926942_7135147292121523786_n.jpg?stp=dst-jpg_tt6&cstp=mx2048x2022&ctp=s2048x2022&_nc_cat=103&ccb=1-7&_nc_sid=833d8c&_nc_ohc=JUuc53gUI4IQ7kNvwF8nc3g&_nc_oc=AdoqDAHXf1wfIUWVKTv-9N2WSuuEiGNslgGFEb_KZrMmF3Ze79qkTYku3PjSAajSqEo&_nc_zt=23&_nc_ht=scontent.fpnh5-6.fna&_nc_gid=1EZpLkeoGtEMLcKr3lPFZQ&_nc_ss=7b289&oh=00_Af8DjnJ1x1vlsmkjrbsEWtVyh1ZGP5MqZ_nSl1wLGYxzOA&oe=6A30CD4B"
                                    alt="EFC Cambodia team at competition"
                                    onerror="this.src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSoFCdWwG2xWtJAGkuXd0Mq7IWz1SJOhO497g&s'">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="C1" class="bde-section-1755-117 bde-section" id="major-games">
            <div class="section-container">
                <div class="bde-columns-1755-118 bde-columns">
                    <div class="bde-column-1755-119 bde-column">
                        <div class="bde-image-1755-120 bde-image is-before" data-entrance="slideDown" style="">
                            <figure class="breakdance-image breakdance-image--665">
                                <div class="breakdance-image-container">
                                    <div class="breakdance-image-clip">
                                        <img class="breakdance-image-object" height="1190"
                                            sizes="(max-width: 1108px) 100vw, 1108px"
                                            src="https://cdn.kiripost.com/static/images/esport-ak2.width-960.jpg"
                                            width="1108" />
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    <div class="bde-column-1755-121 bde-column is-before" data-entrance="slideUp" style="">
                        <h2 class="bde-heading-1755-125 bde-heading">
                            PC Competition
                        </h2>
                        <div class="bde-rich-text-1755-323 bde-rich-text breakdance-rich-text-styles">
                            <p>The <strong>E-Sports Federation of Cambodia (EFC)</strong> is the governing body for
                                competitive
                                gaming in the country. For PC gaming, Valorant is the most prominent competitive title.
                                While major mobile events dominate the scene, national and regional PC qualifiers take place
                                at local LAN centers like Panda Cybercafe and MCT Esports Cambodia.<br><br>
                                <strong>Valorant</strong> is the most priorities Competition in Cambodia.
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <div>
                            <h2>Valorant</h2>
                            <p>
                                <strong>Valorant</strong> officially launched globally on June 2, 2020, and became instantly
                                playable in
                                Cambodia for PC gamers using <strong>Riot Games'</strong> Southeast Asia servers. The
                                competitive esports
                                scene quickly followed, with major local tournaments like the Cambodia Esports League
                                starting in 2021.
                            </p>
                        </div>
                        <div>
                            <img class="about-who__image"
                                src="https://scontent.fpnh5-4.fna.fbcdn.net/v/t39.30808-6/447843051_122124765170281720_6999580286541516892_n.jpg?stp=dst-jpg_tt6&cstp=mx1210x1210&ctp=s1210x1210&_nc_cat=110&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=dLbSWytIROYQ7kNvwHmbzh5&_nc_oc=Adrz5GJypx3qdX4B2PPdUHtOaaK0bD8NRu68aTLIvzxSU4eY6gVomYprmbDNjOe5Xv8&_nc_zt=23&_nc_ht=scontent.fpnh5-4.fna&_nc_gid=d97hRJV-ayt4onmUMHhsUw&_nc_ss=7b289&oh=00_Af_LVu67NbyuFZAL_Gvw6naHiVyI1nFm9ayCwtvBnxLHsw&oe=6A30BC53"
                                alt="EFC Cambodia team at competition"
                                onerror="this.src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSoFCdWwG2xWtJAGkuXd0Mq7IWz1SJOhO497g&s'">
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section id="C2" class="bde-section-1755-127 bde-section" id="achievements">
            <div class="section-container">
                <div class="bde-div-1755-128 bde-div">
                    <div class="bde-div-1755-129 bde-div">
                        <h1 class="bde-dual-heading-1755-133 bde-dual-heading">
                            <span class="dual-heading--secondary" data-style="secondary">Console</span>
                            <span class="dual-heading--secondary" data-style="secondary">Game</span>
                            <span class="dual-heading--secondary" data-style="secondary">Competition</span>
                        </h1>
                    </div>
                </div>
                <div class="bde-text-1755-134 bde-text is-before" data-entrance="slideUp" style="">
                    The <strong>console game competitions</strong> in Cambodia were pioneered by the Fighting Game Community
                    of
                    Cambodia (FGC Cambodia), which hosts regular local meetups and fighting game brackets for titles like
                    <strong>Fighter 6, Tekken 8, and Super Smash Bros.</strong> <br><br>

                    But Nowadays the Console game that used in for competition that got the player to competing is
                    <strong>E-football</strong>.
                </div>
                <div>
                    <img class="about-who__image"
                        src="https://scontent.fpnh5-2.fna.fbcdn.net/v/t39.30808-6/610906157_1389499382628548_6569657905701769728_n.jpg?stp=dst-jpg_tt6&cstp=mx1638x2048&ctp=s1638x2048&_nc_cat=107&ccb=1-7&_nc_sid=127cfc&_nc_ohc=209v4v1iaxkQ7kNvwFRBzJz&_nc_oc=Adq4PfGRIF2-QBDS7CeXmvOikXsSXJBmSxMnlUKUPI0lrNIEGJdDpFM4KdYQt2v9VH8&_nc_zt=23&_nc_ht=scontent.fpnh5-2.fna&_nc_gid=nYsMc7M6o2XKBZE5dV3D2A&_nc_ss=7b289&oh=00_Af_FEXKvgICIi86Ilf_8hWUfpuxoPEL3R5MWfaFJi8NxVw&oe=6A30D151"
                        alt="EFC Cambodia team at competition"
                        onerror="this.src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSoFCdWwG2xWtJAGkuXd0Mq7IWz1SJOhO497g&s'">
                </div>
            </div>
        </section>
        <footer class="bde-section-1747-100 bde-section">
            <div class="section-container">
                <div class="bde-columns-1747-101 bde-columns">
                    <div class="bde-column-1747-102 bde-column">
                        <div class="bde-text-1747-103 bde-text">
                            © 2026 E-sport Federation Cambodia. All rights reserved.
                        </div>
                    </div>
                    <div class="bde-column-1747-104 bde-column">
                        <div class="bde-div-1747-115 bde-div">
                            <div class="bde-social-icons-1747-105 bde-social-icons">
                                <a aria-label="facebook"
                                    class="breakdance-link bde-social-icons__icon-wrapper bde-social-icons__icon-facebook"
                                    data-type="url" href="https://www.facebook.com/efckhmer/" target="_self">
                                    <svg viewbox="0 0 24 24" width="100%" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z">
                                        </path>
                                    </svg>
                                </a>
                                <a aria-label="instagram"
                                    class="breakdance-link bde-social-icons__icon-wrapper bde-social-icons__icon-instagram"
                                    data-type="url" href="https://www.instagram.com/mplkh.official/" target="_self">
                                    <svg viewbox="0 0 24 24" width="100%" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z">
                                        </path>
                                    </svg>
                                </a>
                                <a aria-label="linkedin"
                                    class="breakdance-link bde-social-icons__icon-wrapper bde-social-icons__icon-linkedin"
                                    data-type="url"
                                    href="https://www.linkedin.com/in/lun-samedy-a8ba1716a/?isSelfProfile=false"
                                    target="_self">
                                    <svg viewbox="-4 -2 32 32" width="100%" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z">
                                        </path>
                                    </svg>
                                </a>
                                <a class="breakdance-link bde-social-icons__icon-wrapper bde-social-icons__icon-youtube"
                                    href="https://www.youtube.com/@Exprez.Esports" target="_blank" aria-label="youtube">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 24 24">
                                        <path
                                            d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script type="speculationrules">
                                                        {"prefetch":[{"source":"document","where":{"and":[{"href_matches":"/*"},{"not":{"href_matches":["/wp-*.php","/wp-admin/*","/wp-content/uploads/*","/wp-content/*","/wp-content/plugins/*","/wp-content/plugins/breakdance/plugin/themeless/themes/breakdance-zero/*","/*\\?(.+)"]}},{"not":{"selector_matches":"a[rel~=\"nofollow\"]"}},{"not":{"selector_matches":".no-prefetch, .no-prefetch a"}}]},"eagerness":"conservative"}]}
                                                        </script>
        <script defer="defer" id="jquery-ui-core-js"
            src="https://esports.org.sg/wp-includes/js/jquery/ui/core.min.js?ver=1.13.3"></script>
        <script defer="defer" id="jquery-ui-datepicker-js"
            src="https://esports.org.sg/wp-includes/js/jquery/ui/datepicker.min.js?ver=1.13.3"></script>
        <script defer="defer" id="mec-typekit-script-js"
            src="https://esports.org.sg/wp-content/plugins/modern-events-calendar-lite/assets/js/jquery.typewatch.js?ver=7.33.0"></script>
        <script defer="defer" id="featherlight-js"
            src="https://esports.org.sg/wp-content/plugins/modern-events-calendar-lite/assets/packages/featherlight/featherlight.js?ver=7.33.0"></script>
        <script defer="defer" id="mec-select2-script-js"
            src="https://esports.org.sg/wp-content/plugins/modern-events-calendar-lite/assets/packages/select2/select2.full.min.js?ver=7.33.0"></script>
        <script defer="defer" id="mec-general-calendar-script-js"
            src="https://esports.org.sg/wp-content/plugins/modern-events-calendar-lite/assets/js/mec-general-calendar.js?ver=7.33.0"></script>
        <script defer="defer" id="mec-tooltip-script-js"
            src="https://esports.org.sg/wp-content/plugins/modern-events-calendar-lite/assets/packages/tooltip/tooltip.js?ver=7.33.0"></script>
        <script defer="defer" id="mec-frontend-script-js"
            src="https://esports.org.sg/wp-content/plugins/modern-events-calendar-lite/assets/js/frontend.js?ver=7.33.0"></script>
        <script defer="defer" id="mec-events-script-js"
            src="https://esports.org.sg/wp-content/plugins/modern-events-calendar-lite/assets/js/events.js?ver=7.33.0"></script>
        <script defer="defer" id="mec-lity-script-js"
            src="https://esports.org.sg/wp-content/plugins/modern-events-calendar-lite/assets/packages/lity/lity.min.js?ver=7.33.0"></script>
        <script defer="defer" id="mec-colorbrightness-script-js"
            src="https://esports.org.sg/wp-content/plugins/modern-events-calendar-lite/assets/packages/colorbrightness/colorbrightness.min.js?ver=7.33.0"></script>
        <script defer="defer" id="mec-owl-carousel-script-js"
            src="https://esports.org.sg/wp-content/plugins/modern-events-calendar-lite/assets/packages/owl-carousel/owl.carousel.min.js?ver=7.33.0"></script>
        <script defer=""
            src="https://esports.org.sg/wp-content/plugins/breakdance/plugin/global-scripts/breakdance-utils.js?bd_ver=2.7.2"></script>
        <script defer=""
            src="https://esports.org.sg/wp-content/plugins/breakdance/subplugins/breakdance-elements/dependencies-files/breakdance-header-builder@1/header-builder.js?bd_ver=2.7.2"></script>
        <script defer=""
            src="https://esports.org.sg/wp-content/plugins/breakdance/subplugins/breakdance-elements/dependencies-files/awesome-menu@1/awesome-menu.js?bd_ver=2.7.2"></script>
        <script defer="" src="https://unpkg.com/gsap@3.12.2/dist/gsap.min.js"></script>
        <script defer="" src="https://unpkg.com/gsap@3.12.2/dist/ScrollTrigger.min.js"></script>
        <script defer=""
            src="https://esports.org.sg/wp-content/plugins/breakdance/subplugins/breakdance-elements/dependencies-files/imagesloaded@4/imagesloaded.pkgd.min.js?bd_ver=2.7.2"></script>
        <script defer=""
            src="https://esports.org.sg/wp-content/plugins/breakdance/plugin/animations/entrance/js/entrance.js?bd_ver=2.7.2"></script>
        <script defer=""
            src="https://esports.org.sg/wp-content/plugins/breakdance/subplugins/breakdance-elements/dependencies-files/lite-youtube@0.2/lite-yt-embed.js?bd_ver=2.7.2"></script>
        <script defer=""
            src="https://esports.org.sg/wp-content/plugins/breakdance/subplugins/breakdance-elements/dependencies-files/lozard@1/lozad.min.js?bd_ver=2.7.2"></script>
        <script defer=""
            src="https://esports.org.sg/wp-content/plugins/breakdance/subplugins/breakdance-elements/dependencies-files/advanced-tabs@1/advanced-tabs.js?bd_ver=2.7.2"></script>
        <script defer=""
            src="https://esports.org.sg/wp-content/plugins/breakdance/subplugins/breakdance-elements/dependencies-files/custom-tabs@1/tabs.js?bd_ver=2.7.2"></script>
        <script defer=""
            src="https://esports.org.sg/wp-content/plugins/breakdance/subplugins/breakdance-elements/dependencies-files/breakdance-counter.js/breakdance-counter.js?bd_ver=2.7.2"></script>
        <script defer=""
            src="https://esports.org.sg/wp-content/plugins/breakdance/subplugins/breakdance-elements/dependencies-files/swiper@8/swiper-bundle.min.js?bd_ver=2.7.2"></script>
        <script defer=""
            src="https://esports.org.sg/wp-content/plugins/breakdance/subplugins/breakdance-elements/dependencies-files/breakdance-swiper/breakdance-swiper.js?bd_ver=2.7.2"></script>
        <script defer=""
            src="https://esports.org.sg/wp-content/plugins/breakdance/subplugins/breakdance-elements/dependencies-files/breakdance-back-to-top@1/breakdance-back-to-top.js?bd_ver=2.7.2"></script>
        <iframe height="1" style="position: absolute; top: 0px; left: 0px; border: none; visibility: hidden;"
            width="1"></iframe>
        <script crossorigin="anonymous"
            data-cf-beacon='{"version":"2024.11.0","token":"5b954d70cafb47e6a3d0e504ac98b639","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}'
            defer=""
            integrity="sha512-57MDmcccJXYtNnH+ZiBwzC4jb2rvgVCEokYN+L/nLlmO8rfYT/gIpW2A569iJ/3b+0UEasghjuZH/ma3wIs/EQ=="
            src="https://static.cloudflareinsights.com/beacon.min.js/v833ccba57c9e4d2798f2e76cebdd09a11778172276447"></script>

        </script>
        <script src="{{ asset('js/team.js') }}"></script>
    </body>

    </html>

@endsection