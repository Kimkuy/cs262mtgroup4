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
                /* Centers horizontally and vertically */
                height: 100vh;
                /* 100% of the viewport height */
                margin-left: 50px;
                /* Removes default browser margins */
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
                background-image: url(https://esportsfc.org.kh/wp-content/uploads/2026/04/MPL-Cambodia1-1200x652.jpg);
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
        <section class="bde-section-1755-105 bde-section" id="national-training-centre" >
            <div class="section-background-overlay"></div>
            <div class="section-container">
                <div class="bde-div-1755-106 bde-div is-animated" data-entrance="slideUp" style="">
                    <div class="bde-div-1755-107 bde-div">
                        <div class="bde-div-1755-108 bde-div">
                            <div class="bde-text-1755-109 bde-text">
                                Powering Team Cambodia esports
                            </div>
                            <div class="bde-icon-1755-110 bde-icon">
                                <div class="bde-icon-icon breakdance-icon-atom">
                                    <svg fill="none" height="16" viewbox="0 0 61 16" width="61"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1 7C0.447715 7 4.82823e-08 7.44772 0 8C-4.82823e-08 8.55228 0.447715 9 1 9L1 7ZM60.7071 8.70711C61.0976 8.31659 61.0976 7.68342 60.7071 7.2929L54.3431 0.928937C53.9526 0.538412 53.3195 0.538412 52.9289 0.928937C52.5384 1.31946 52.5384 1.95263 52.9289 2.34315L58.5858 8.00001L52.9289 13.6569C52.5384 14.0474 52.5384 14.6805 52.9289 15.0711C53.3195 15.4616 53.9526 15.4616 54.3431 15.0711L60.7071 8.70711ZM1 9L60 9.00001L60 7.00001L1 7L1 9Z"
                                            fill="#E0B13D"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <h2 class="bde-heading-1755-111 bde-heading">
                            MPL Cambodia
                        </h2>
                    </div>
                    <div class="bde-text-1755-112 bde-text">
                        The league features top-tier Cambodian esports teams competing for a championship title, substantial
                        prize pools, and the opportunity to represent the country at global and regional MLBB tournaments.
                    </div>
                    <div class="screen-container">
                        <!-- Replace the URL below with your own image path -->
                        <img src="https://cdn.kiripost.com/static/images/image_A6o1S8f.2e16d0ba.fill-960x540.png"
                            alt="Centered Display">
                    </div>
                </div>
            </div>
        </section>
        <section id="T1" class="bde-section-1755-117 bde-section" id="major-games">
            <div class="section-container">
                <div class="bde-columns-1755-118 bde-columns">
                    <div class="bde-column-1755-119 bde-column">
                        <div class="bde-image-1755-120 bde-image is-before" data-entrance="slideDown" style="">
                            <figure class="breakdance-image breakdance-image--665">
                                <div class="breakdance-image-container">
                                    <div class="breakdance-image-clip">
                                        <img class="breakdance-image-object" height="1190"
                                            sizes="(max-width: 1108px) 100vw, 1108px"
                                            src="https://scontent.fpnh10-1.fna.fbcdn.net/v/t39.30808-6/714244389_1515921879986297_6507300137938043858_n.jpg?stp=dst-jpg_tt6&cstp=mx1638x2048&ctp=s640x640&_nc_cat=108&ccb=1-7&_nc_sid=127cfc&_nc_ohc=O6GXAgrw82kQ7kNvwFUGiBP&_nc_oc=Adra07a-1Pl5ZFDCoyYBXhcOAqE7OIou0BxF8aFFK5TGRZqKjqND7oJVkCqqwt2xJho&_nc_zt=23&_nc_ht=scontent.fpnh10-1.fna&_nc_gid=y36w8n1Z0wfj-5QitUxC9w&_nc_ss=7b289&oh=00_Af-OX2__EH0jGHcaOvVTWQQ19WZaBbAyqeTCyj1XvrB88g&oe=6A303296"
                                            width="1108" />
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    <div class="bde-column-1755-121 bde-column is-before" data-entrance="slideUp" style="">
                        <div class="bde-div-1755-122 bde-div">
                            <div class="bde-text-1755-123 bde-text">
                                National representation and participation
                            </div>
                            <div class="bde-icon-1755-124 bde-icon">
                                <div class="bde-icon-icon breakdance-icon-atom">
                                    <svg fill="none" height="16" viewbox="0 0 61 16" width="61"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1 7C0.447715 7 4.82823e-08 7.44772 0 8C-4.82823e-08 8.55228 0.447715 9 1 9L1 7ZM60.7071 8.70711C61.0976 8.31659 61.0976 7.68342 60.7071 7.2929L54.3431 0.928937C53.9526 0.538412 53.3195 0.538412 52.9289 0.928937C52.5384 1.31946 52.5384 1.95263 52.9289 2.34315L58.5858 8.00001L52.9289 13.6569C52.5384 14.0474 52.5384 14.6805 52.9289 15.0711C53.3195 15.4616 53.9526 15.4616 54.3431 15.0711L60.7071 8.70711ZM1 9L60 9.00001L60 7.00001L1 7L1 9Z"
                                            fill="#E0B13D"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <h2 class="bde-heading-1755-125 bde-heading">
                            angkor warrior
                        </h2>
                        <div class="bde-rich-text-1755-323 bde-rich-text breakdance-rich-text-styles">
                            <p>The <strong>E-Sports Federation of Cambodia</strong> manages both men's and women's national
                                rosters. The teams consist of the country's top talents, often drawn from the strongest
                                teams in the domestic MPL (Mobile Legends Professional League) Cambodia.<br><br>
                                <strong><a href="https://www.facebook.com/angkorwarriorsofficial/" rel="noopener"
                                        target="_blank">The Angkor Warriors (AW)</a></strong>, which The Angkor Warriors
                                represent Cambodia in major regional and global events, including the SEA Games and the IESF
                                World Esports Championships. The squads have gained international recognition, famously
                                capturing multiple silver medals for Cambodia on the global stage.
                            </p>
                        </div>
                        <div class="bde-fancy-divider-1755-322 bde-fancy-divider">
                            <div class="bde-fancy-divider__wrapper">
                                <div class="bde-fancy-divider__separator"></div>
                            </div>
                        </div>
                        <div class="bde-grid-1755-319 bde-grid">
                            <div class="bde-button-1755-320 bde-button">
                                <a class="breakdance-link button-atom button-atom--text bde-button__button" data-type="url"
                                    href="https://liquipedia.net/mobilelegends/Southeast_Asian_Games/2023/Men"
                                    target="_blank">
                                    <span class="button-atom__text">32nd SEA Games (2023)</span>
                                    <span class="button-atom__icon-wrapper">
                                        <svg class="un-arrow-icon" height="32" viewbox="0 0 32 32" width="32"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g fill="none" stroke-linejoin="round" stroke-miterlimit="10"
                                                stroke-width="1.9">
                                                <circle class="un-arrow-icon_circle" cx="16" cy="16" r="15.12"></circle>
                                                <path class="un-arrow-icon_arrow"
                                                    d="M16.14 9.93L22.21 16l-6.07 6.07M8.23 16h13.98"></path>
                                            </g>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                            <div class="bde-button-1755-343 bde-button">
                                <a class="breakdance-link button-atom button-atom--text bde-button__button" data-type="url"
                                    href="https://www.khmertimeskh.com/501792841/angkor-warriors-reveal-official-mlbb-squad-for-sea-games/"
                                    target="_blank">
                                    <span class="button-atom__text">33rd SEA Games (2025)</span>
                                    <span class="button-atom__icon-wrapper">
                                        <svg class="un-arrow-icon" height="32" viewbox="0 0 32 32" width="32"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g fill="none" stroke-linejoin="round" stroke-miterlimit="10"
                                                stroke-width="1.9">
                                                <circle class="un-arrow-icon_circle" cx="16" cy="16" r="15.12"></circle>
                                                <path class="un-arrow-icon_arrow"
                                                    d="M16.14 9.93L22.21 16l-6.07 6.07M8.23 16h13.98"></path>
                                            </g>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                            <div class="bde-button-1755-321 bde-button">
                                <a class="breakdance-link button-atom button-atom--text bde-button__button" data-type="url"
                                    href="https://www.facebook.com/photo/?fbid=1510821023829716&set=a.769470064631486"
                                    target="_self">
                                    <span class="button-atom__text">20th Asian Games (2026)</span>
                                    <span class="button-atom__icon-wrapper">
                                        <svg class="un-arrow-icon" height="32" viewbox="0 0 32 32" width="32"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g fill="none" stroke-linejoin="round" stroke-miterlimit="10"
                                                stroke-width="1.9">
                                                <circle class="un-arrow-icon_circle" cx="16" cy="16" r="15.12"></circle>
                                                <path class="un-arrow-icon_arrow"
                                                    d="M16.14 9.93L22.21 16l-6.07 6.07M8.23 16h13.98"></path>
                                            </g>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="T2" class="bde-section-1755-127 bde-section" id="achievements">
            <div class="section-container">
                <div class="bde-div-1755-128 bde-div">
                    <div class="bde-div-1755-129 bde-div">
                        <div class="bde-div-1755-130 bde-div">
                            <div class="bde-text-1755-131 bde-text">
                                Achievements
                            </div>
                            <div class="bde-icon-1755-132 bde-icon">
                                <div class="bde-icon-icon breakdance-icon-atom">
                                    <svg fill="none" height="16" viewbox="0 0 61 16" width="61"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1 7C0.447715 7 4.82823e-08 7.44772 0 8C-4.82823e-08 8.55228 0.447715 9 1 9L1 7ZM60.7071 8.70711C61.0976 8.31659 61.0976 7.68342 60.7071 7.2929L54.3431 0.928937C53.9526 0.538412 53.3195 0.538412 52.9289 0.928937C52.5384 1.31946 52.5384 1.95263 52.9289 2.34315L58.5858 8.00001L52.9289 13.6569C52.5384 14.0474 52.5384 14.6805 52.9289 15.0711C53.3195 15.4616 53.9526 15.4616 54.3431 15.0711L60.7071 8.70711ZM1 9L60 9.00001L60 7.00001L1 7L1 9Z"
                                            fill="#E0B13D"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <h1 class="bde-dual-heading-1755-133 bde-dual-heading">
                            <span class="dual-heading--secondary" data-style="secondary">Team</span>
                            <span class="dual-heading--secondary" data-style="secondary">Cambodia</span>
                            <span class="dual-heading--secondary" data-style="secondary">Esports</span>
                        </h1>
                    </div>
                </div>
                <div class="bde-text-1755-134 bde-text is-before" data-entrance="slideUp" style="">
                    Cambodia’s esports athletes made history with our phenomenal breakthrough at the 2023 SEA Games on home
                    soil, a monumental milestone on the regional stage. Since then, EFC Cambodia has continued to build
                    momentum across major international competitions and has shown the ability to step up under pressure
                    when it matters most. <br><br>

                    The journey is made tougher by competing in a region with established esports powerhouses, where margins
                    are tight and every series demands composure, preparation, and constant improvement. Despite intense
                    rivalries and setbacks, our athletes keep pushing forward with resilience, teamwork, and discipline.
                </div>
                <div class="bde-advanced-tabs-1755-135 bde-advanced-tabs is-before" data-entrance="slideUp" style="">
                    <select aria-label="Content tabs" class="bde-tabs__select js-tab-select">
                        <option data-value="1" selected="selected" value="tab-bde-advanced-tabs-1755-135-1">
                            30th Southeast Asian Games
                        </option>
                        <option data-value="2" value="tab-bde-advanced-tabs-1755-135-2">
                            Global Esports Games 2021
                        </option>
                        <option data-value="3" value="tab-bde-advanced-tabs-1755-135-3">
                            Commonwealth Esports Championship 2022
                        </option>
                        <option data-value="4" value="tab-bde-advanced-tabs-1755-135-4">
                            Global Esports Games 2022
                        </option>
                        <option data-value="5" value="tab-bde-advanced-tabs-1755-135-5">
                            31st Southeast Asian Games
                        </option>
                        <option data-value="6" value="tab-bde-advanced-tabs-1755-135-6">
                            32nd Southeast Asian Games
                        </option>
                        <option data-value="7" value="tab-bde-advanced-tabs-1755-135-7">
                            SEA Esports Nations Cup 2026
                        </option>
                    </select>
                    <div
                        class="bde-tabs__tabslist-container bde-tabs__tabslist-container--dropdown is-vertical js-tabs-container">
                        <div aria-label="Content tabs" aria-orientation="vertical"
                            class="bde-tabs__tabslist bde-tabs__tabslist--tabs js-tablist"
                            data-tabs-id="bde-advanced-tabs-1755-135" role="tablist">
                            <button aria-controls="tab-panel-bde-advanced-tabs-1755-135-1" aria-selected="true"
                                class="bde-tabs__tab js-tab is-active" data-value="1" id="tab-bde-advanced-tabs-1755-135-1"
                                role="tab">
                                <span class="bde-tabs__tab-title">30th Southeast Asian Games</span>
                            </button>
                            <button aria-controls="tab-panel-bde-advanced-tabs-1755-135-2" aria-selected="false"
                                class="bde-tabs__tab js-tab" data-value="2" id="tab-bde-advanced-tabs-1755-135-2" role="tab"
                                tabindex="-1">
                                <span class="bde-tabs__tab-title">Global Esports Games 2021</span>
                            </button>
                            <button aria-controls="tab-panel-bde-advanced-tabs-1755-135-3" aria-selected="false"
                                class="bde-tabs__tab js-tab" data-value="3" id="tab-bde-advanced-tabs-1755-135-3" role="tab"
                                tabindex="-1">
                                <span class="bde-tabs__tab-title">Commonwealth Esports Championship 2022</span>
                            </button>
                            <button aria-controls="tab-panel-bde-advanced-tabs-1755-135-4" aria-selected="false"
                                class="bde-tabs__tab js-tab" data-value="4" id="tab-bde-advanced-tabs-1755-135-4" role="tab"
                                tabindex="-1">
                                <span class="bde-tabs__tab-title">Global Esports Games 2022</span>
                            </button>
                            <button aria-controls="tab-panel-bde-advanced-tabs-1755-135-5" aria-selected="false"
                                class="bde-tabs__tab js-tab" data-value="5" id="tab-bde-advanced-tabs-1755-135-5" role="tab"
                                tabindex="-1">
                                <span class="bde-tabs__tab-title">31st Southeast Asian Games</span>
                            </button>
                            <button aria-controls="tab-panel-bde-advanced-tabs-1755-135-6" aria-selected="false"
                                class="bde-tabs__tab js-tab" data-value="6" id="tab-bde-advanced-tabs-1755-135-6" role="tab"
                                tabindex="-1">
                                <span class="bde-tabs__tab-title">32nd Southeast Asian Games</span>
                            </button>
                            <button aria-controls="tab-panel-bde-advanced-tabs-1755-135-7" aria-selected="false"
                                class="bde-tabs__tab js-tab" data-value="7" id="tab-bde-advanced-tabs-1755-135-7" role="tab"
                                tabindex="-1">
                                <span class="bde-tabs__tab-title">SEA Esports Nations Cup 2026</span>
                            </button>
                        </div>
                    </div>
                    <div class="bde-tabs-content-container">
                        <div class="bde-advanced-tabs-content-1755-136 bde-advanced-tabs-content">
                            <div aria-labelledby="tab-bde-advanced-tabs-1755-135-1"
                                class="bde-tabs__panel js-panel is-active" id="tab-panel-bde-advanced-tabs-1755-135-1"
                                role="tabpanel" tabindex="0">
                                <div class="bde-tabs__panel-content">
                                    <img class="bde-image2-1755-137 bde-image2" loading="lazy"
                                        sizes="(max-width: 150px) 100vw, 150px"
                                        src="https://esports.org.sg/wp-content/uploads/2026/01/30th-sea-games.webp" />
                                    <h6 class="bde-heading-1755-138 bde-heading">
                                        30th Southeast Asian Games
                                    </h6>
                                    <div class="bde-div-1755-139 bde-div">
                                        <div class="bde-columns-1755-140 bde-columns">
                                            <div class="bde-column-1755-141 bde-column">
                                                <div class="bde-simple-counter-1755-142 bde-simple-counter">
                                                    <div class="bde-simple-counter__wrapper">
                                                        <p class="bde-simple-counter__number bde-h6">
                                                            <span class="bde-simple-counter__prefix"></span>
                                                            <span>0</span>
                                                            <span class="bde-simple-counter__suffix"></span>
                                                        </p>
                                                        <div class="bde-simple-counter__title">🥇 Gold</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bde-column-1755-143 bde-column">
                                                <div class="bde-simple-counter-1755-144 bde-simple-counter">
                                                    <div class="bde-simple-counter__wrapper">
                                                        <p class="bde-simple-counter__number bde-h6">
                                                            <span class="bde-simple-counter__prefix"></span>
                                                            <span>0</span>
                                                            <span class="bde-simple-counter__suffix"></span>
                                                        </p>
                                                        <div class="bde-simple-counter__title">🥈 Silver</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bde-column-1755-145 bde-column">
                                                <div class="bde-simple-counter-1755-146 bde-simple-counter">
                                                    <div class="bde-simple-counter__wrapper">
                                                        <p class="bde-simple-counter__number bde-h6">
                                                            <span class="bde-simple-counter__prefix"></span>
                                                            <span>0</span>
                                                            <span class="bde-simple-counter__suffix"></span>
                                                        </p>
                                                        <div class="bde-simple-counter__title">🥉 Bronze</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bde-advanced-tabs-content-1755-147 bde-advanced-tabs-content">
                            <div aria-labelledby="tab-bde-advanced-tabs-1755-135-2" class="bde-tabs__panel js-panel"
                                id="tab-panel-bde-advanced-tabs-1755-135-2" role="tabpanel" tabindex="0">
                                <div class="bde-tabs__panel-content">
                                    <img class="bde-image2-1755-148 bde-image2" loading="lazy"
                                        sizes="(max-width: 150px) 100vw, 150px"
                                        src="https://esports.org.sg/wp-content/uploads/2026/01/geg-2021.webp" />
                                    <h6 class="bde-heading-1755-149 bde-heading">
                                        Global Esports Games 2021
                                    </h6>
                                    <div class="bde-div-1755-150 bde-div">
                                        <div class="bde-columns-1755-151 bde-columns">
                                            <div class="bde-column-1755-152 bde-column">
                                                <div class="bde-simple-counter-1755-153 bde-simple-counter">
                                                    <div class="bde-simple-counter__wrapper">
                                                        <p class="bde-simple-counter__number bde-h6">
                                                            <span class="bde-simple-counter__prefix"></span>
                                                            <span>0</span>
                                                            <span class="bde-simple-counter__suffix"></span>
                                                        </p>
                                                        <div class="bde-simple-counter__title">🥇 Gold</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bde-column-1755-154 bde-column">
                                                <div class="bde-simple-counter-1755-155 bde-simple-counter">
                                                    <div class="bde-simple-counter__wrapper">
                                                        <p class="bde-simple-counter__number bde-h6">
                                                            <span class="bde-simple-counter__prefix"></span>
                                                            <span>0</span>
                                                            <span class="bde-simple-counter__suffix"></span>
                                                        </p>
                                                        <div class="bde-simple-counter__title">🥈 Silver</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bde-column-1755-156 bde-column">
                                                <div class="bde-simple-counter-1755-157 bde-simple-counter">
                                                    <div class="bde-simple-counter__wrapper">
                                                        <p class="bde-simple-counter__number bde-h6">
                                                            <span class="bde-simple-counter__prefix"></span>
                                                            <span>0</span>
                                                            <span class="bde-simple-counter__suffix"></span>
                                                        </p>
                                                        <div class="bde-simple-counter__title">🥉 Bronze</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bde-advanced-tabs-content-1755-158 bde-advanced-tabs-content">
                            <div aria-labelledby="tab-bde-advanced-tabs-1755-135-3" class="bde-tabs__panel js-panel"
                                id="tab-panel-bde-advanced-tabs-1755-135-3" role="tabpanel" tabindex="0">
                                <div class="bde-tabs__panel-content">
                                    <img class="bde-image2-1755-159 bde-image2" loading="lazy"
                                        sizes="(max-width: 150px) 100vw, 150px"
                                        src="https://esports.org.sg/wp-content/uploads/2026/01/commonwealth-esports-championships.webp" />
                                    <h6 class="bde-heading-1755-160 bde-heading">
                                        Commonwealth Esports Championship 2022
                                    </h6>
                                    <div class="bde-div-1755-161 bde-div">
                                        <div class="bde-columns-1755-162 bde-columns">
                                            <div class="bde-column-1755-163 bde-column">
                                                <div class="bde-simple-counter-1755-164 bde-simple-counter">
                                                    <div class="bde-simple-counter__wrapper">
                                                        <p class="bde-simple-counter__number bde-h6">
                                                            <span class="bde-simple-counter__prefix"></span>
                                                            <span>0</span>
                                                            <span class="bde-simple-counter__suffix"></span>
                                                        </p>
                                                        <div class="bde-simple-counter__title">🥇 Gold</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bde-column-1755-165 bde-column">
                                                <div class="bde-simple-counter-1755-166 bde-simple-counter">
                                                    <div class="bde-simple-counter__wrapper">
                                                        <p class="bde-simple-counter__number bde-h6">
                                                            <span class="bde-simple-counter__prefix"></span>
                                                            <span>0</span>
                                                            <span class="bde-simple-counter__suffix"></span>
                                                        </p>
                                                        <div class="bde-simple-counter__title">🥈 Silver</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bde-column-1755-167 bde-column">
                                                <div class="bde-simple-counter-1755-168 bde-simple-counter">
                                                    <div class="bde-simple-counter__wrapper">
                                                        <p class="bde-simple-counter__number bde-h6">
                                                            <span class="bde-simple-counter__prefix"></span>
                                                            <span>0</span>
                                                            <span class="bde-simple-counter__suffix"></span>
                                                        </p>
                                                        <div class="bde-simple-counter__title">🥉 Bronze</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bde-advanced-tabs-content-1755-169 bde-advanced-tabs-content">
                            <div aria-labelledby="tab-bde-advanced-tabs-1755-135-4" class="bde-tabs__panel js-panel"
                                id="tab-panel-bde-advanced-tabs-1755-135-4" role="tabpanel" tabindex="0">
                                <div class="bde-tabs__panel-content">
                                    <img class="bde-image2-1755-170 bde-image2" loading="lazy"
                                        sizes="(max-width: 150px) 100vw, 150px"
                                        src="https://esports.org.sg/wp-content/uploads/2026/01/geg-202.webp" />
                                    <h6 class="bde-heading-1755-171 bde-heading">
                                        31st Southeast Asian Games
                                    </h6>
                                    <div class="bde-div-1755-172 bde-div">
                                        <div class="bde-columns-1755-173 bde-columns">
                                            <div class="bde-column-1755-174 bde-column">
                                                <div class="bde-simple-counter-1755-175 bde-simple-counter">
                                                    <div class="bde-simple-counter__wrapper">
                                                        <p class="bde-simple-counter__number bde-h6">
                                                            <span class="bde-simple-counter__prefix"></span>
                                                            <span>0</span>
                                                            <span class="bde-simple-counter__suffix"></span>
                                                        </p>
                                                        <div class="bde-simple-counter__title">🥇 Gold</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bde-column-1755-176 bde-column">
                                                <div class="bde-simple-counter-1755-177 bde-simple-counter">
                                                    <div class="bde-simple-counter__wrapper">
                                                        <p class="bde-simple-counter__number bde-h6">
                                                            <span class="bde-simple-counter__prefix"></span>
                                                            <span>0</span>
                                                            <span class="bde-simple-counter__suffix"></span>
                                                        </p>
                                                        <div class="bde-simple-counter__title">🥈 Silver</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bde-column-1755-178 bde-column">
                                                <div class="bde-simple-counter-1755-179 bde-simple-counter">
                                                    <div class="bde-simple-counter__wrapper">
                                                        <p class="bde-simple-counter__number bde-h6">
                                                            <span class="bde-simple-counter__prefix"></span>
                                                            <span>0</span>
                                                            <span class="bde-simple-counter__suffix"></span>
                                                        </p>
                                                        <div class="bde-simple-counter__title">🥉 Bronze</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bde-advanced-tabs-content-1755-180 bde-advanced-tabs-content">
                            <div aria-labelledby="tab-bde-advanced-tabs-1755-135-5" class="bde-tabs__panel js-panel"
                                id="tab-panel-bde-advanced-tabs-1755-135-5" role="tabpanel" tabindex="0">
                                <div class="bde-tabs__panel-content">
                                    <img class="bde-image2-1755-181 bde-image2" loading="lazy"
                                        sizes="(max-width: 150px) 100vw, 150px"
                                        src="https://esports.org.sg/wp-content/uploads/2026/01/31st-sea-games.webp" />
                                    <h6 class="bde-heading-1755-182 bde-heading">
                                        31st Southeast Asian Games
                                    </h6>
                                    <div class="bde-div-1755-183 bde-div">
                                        <div class="bde-columns-1755-184 bde-columns">
                                            <div class="bde-column-1755-185 bde-column">
                                                <div class="bde-simple-counter-1755-186 bde-simple-counter">
                                                    <div class="bde-simple-counter__wrapper">
                                                        <p class="bde-simple-counter__number bde-h6">
                                                            <span class="bde-simple-counter__prefix"></span>
                                                            <span>0</span>
                                                            <span class="bde-simple-counter__suffix"></span>
                                                        </p>
                                                        <div class="bde-simple-counter__title">🥇 Gold</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bde-column-1755-187 bde-column">
                                                <div class="bde-simple-counter-1755-188 bde-simple-counter">
                                                    <div class="bde-simple-counter__wrapper">
                                                        <p class="bde-simple-counter__number bde-h6">
                                                            <span class="bde-simple-counter__prefix"></span>
                                                            <span>0</span>
                                                            <span class="bde-simple-counter__suffix"></span>
                                                        </p>
                                                        <div class="bde-simple-counter__title">🥈 Silver</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bde-column-1755-189 bde-column">
                                                <div class="bde-simple-counter-1755-190 bde-simple-counter">
                                                    <div class="bde-simple-counter__wrapper">
                                                        <p class="bde-simple-counter__number bde-h6">
                                                            <span class="bde-simple-counter__prefix"></span>
                                                            <span>0</span>
                                                            <span class="bde-simple-counter__suffix"></span>
                                                        </p>
                                                        <div class="bde-simple-counter__title">🥉 Bronze</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bde-advanced-tabs-content-1755-191 bde-advanced-tabs-content">
                            <div aria-labelledby="tab-bde-advanced-tabs-1755-135-6" class="bde-tabs__panel js-panel"
                                id="tab-panel-bde-advanced-tabs-1755-135-6" role="tabpanel" tabindex="0">
                                <div class="bde-tabs__panel-content">
                                    <img class="bde-image2-1755-192 bde-image2" loading="lazy"
                                        sizes="(max-width: 150px) 100vw, 150px"
                                        src="https://esports.org.sg/wp-content/uploads/2026/01/32nd-sea-games.webp" />
                                    <h6 class="bde-heading-1755-193 bde-heading">
                                        32nd southeast asian games
                                    </h6>
                                    <div class="bde-div-1755-194 bde-div">
                                        <div class="bde-columns-1755-195 bde-columns">
                                            <div class="bde-column-1755-196 bde-column">
                                                <div class="bde-simple-counter-1755-197 bde-simple-counter">
                                                    <div class="bde-simple-counter__wrapper">
                                                        <p class="bde-simple-counter__number bde-h6">
                                                            <span class="bde-simple-counter__prefix"></span>
                                                            <span>3</span>
                                                            <span class="bde-simple-counter__suffix"></span>
                                                        </p>
                                                        <div class="bde-simple-counter__title">🥇 Gold</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bde-column-1755-198 bde-column">
                                                <div class="bde-simple-counter-1755-199 bde-simple-counter">
                                                    <div class="bde-simple-counter__wrapper">
                                                        <p class="bde-simple-counter__number bde-h6">
                                                            <span class="bde-simple-counter__prefix"></span>
                                                            <span>1</span>
                                                            <span class="bde-simple-counter__suffix"></span>
                                                        </p>
                                                        <div class="bde-simple-counter__title">🥈 Silver</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bde-column-1755-200 bde-column">
                                                <div class="bde-simple-counter-1755-201 bde-simple-counter">
                                                    <div class="bde-simple-counter__wrapper">
                                                        <p class="bde-simple-counter__number bde-h6">
                                                            <span class="bde-simple-counter__prefix"></span>
                                                            <span>1</span>
                                                            <span class="bde-simple-counter__suffix"></span>
                                                        </p>
                                                        <div class="bde-simple-counter__title">🥉 Bronze</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bde-advanced-tabs-content-1755-344 bde-advanced-tabs-content">
                            <div aria-labelledby="tab-bde-advanced-tabs-1755-135-7" class="bde-tabs__panel js-panel"
                                id="tab-panel-bde-advanced-tabs-1755-135-7" role="tabpanel" tabindex="0">
                                <div class="bde-tabs__panel-content">
                                    <img alt="SEA Esports Nations Cup 2026" class="bde-image2-1755-345 bde-image2"
                                        loading="lazy" sizes="(max-width: 2084px) 100vw, 2084px"
                                        src="https://esports.org.sg/wp-content/uploads/2026/05/SNEC_LOGO_LOGO_FULL_V_RBG-BLACK.webp"
                                        srcset="https://esports.org.sg/wp-content/uploads/2026/05/SNEC_LOGO_LOGO_FULL_V_RBG-BLACK.webp 2084w, https://esports.org.sg/wp-content/uploads/2026/05/SNEC_LOGO_LOGO_FULL_V_RBG-BLACK-300x300.webp 300w, https://esports.org.sg/wp-content/uploads/2026/05/SNEC_LOGO_LOGO_FULL_V_RBG-BLACK-1024x1024.webp 1024w, https://esports.org.sg/wp-content/uploads/2026/05/SNEC_LOGO_LOGO_FULL_V_RBG-BLACK-150x150.webp 150w, https://esports.org.sg/wp-content/uploads/2026/05/SNEC_LOGO_LOGO_FULL_V_RBG-BLACK-768x768.webp 768w, https://esports.org.sg/wp-content/uploads/2026/05/SNEC_LOGO_LOGO_FULL_V_RBG-BLACK-500x500.webp 500w, https://esports.org.sg/wp-content/uploads/2026/05/SNEC_LOGO_LOGO_FULL_V_RBG-BLACK-1536x1536.webp 1536w, https://esports.org.sg/wp-content/uploads/2026/05/SNEC_LOGO_LOGO_FULL_V_RBG-BLACK-2048x2048.webp 2048w" />
                                    <h6 class="bde-heading-1755-346 bde-heading">
                                        SEA Esports Nations Cup 2026
                                    </h6>
                                    <div class="bde-div-1755-347 bde-div">
                                        <div class="bde-columns-1755-348 bde-columns">
                                            <div class="bde-column-1755-349 bde-column">
                                                <div class="bde-simple-counter-1755-350 bde-simple-counter">
                                                    <div class="bde-simple-counter__wrapper">
                                                        <p class="bde-simple-counter__number bde-h6">
                                                            <span class="bde-simple-counter__prefix"></span>
                                                            <span>0</span>
                                                            <span class="bde-simple-counter__suffix"></span>
                                                        </p>
                                                        <div class="bde-simple-counter__title">🥇 Gold</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bde-column-1755-351 bde-column">
                                                <div class="bde-simple-counter-1755-352 bde-simple-counter">
                                                    <div class="bde-simple-counter__wrapper">
                                                        <p class="bde-simple-counter__number bde-h6">
                                                            <span class="bde-simple-counter__prefix"></span>
                                                            <span>1</span>
                                                            <span class="bde-simple-counter__suffix"></span>
                                                        </p>
                                                        <div class="bde-simple-counter__title">🥈 Silver</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bde-column-1755-353 bde-column">
                                                <div class="bde-simple-counter-1755-354 bde-simple-counter">
                                                    <div class="bde-simple-counter__wrapper">
                                                        <p class="bde-simple-counter__number bde-h6">
                                                            <span class="bde-simple-counter__prefix"></span>
                                                            <span>0</span>
                                                            <span class="bde-simple-counter__suffix"></span>
                                                        </p>
                                                        <div class="bde-simple-counter__title">🥉 Bronze</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bde-section-1755-202 bde-section">
            <div class="section-container">
                <div class="bde-advancedslider-1755-203 bde-advancedslider">
                    <div class="breakdance-swiper-wrapper" data-swiper-id="203">
                        <div class="swiper swiper-initialized swiper-horizontal swiper-pointer-events">
                            <div aria-live="off" class="swiper-wrapper" id="swiper-wrapper-48423e7a26988860"
                                style="transform: translate3d(-4458px, 0px, 0px); transition-duration: 0ms;">
                                <div aria-label="6 / 6"
                                    class="bde-advancedslide-1755-270 bde-advancedslide swiper-slide swiper-slide"
                                    data-swiper-slide-index="11" role="" style="width: 743px;">
                                    <div class="advanced-slider__slide">
                                        <div class="bde-div-1755-271 bde-div">
                                            <img class="bde-image2-1755-272 bde-image2"
                                                sizes="(max-width: 1920px) 100vw, 1920px"
                                                src="https://static.information.gov.kh/rails/active_storage/representations/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBd2UrQkE9PSIsImV4cCI6bnVsbCwicHVyIjoiYmxvYl9pZCJ9fQ==--812f9c2f36fcc0e821b2167879b7c932bc10d0e7/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCam9MY21WemFYcGxTU0lOTVRNMU1IZzVNREFHT2daRlZBPT0iLCJleHAiOm51bGwsInB1ciI6InZhcmlhdGlvbiJ9fQ==--30b79c7f7567bd0a04d6c485cf8a2bbc24e21d2f/2a.jpg" />
                                            <div class="bde-div-1755-273 bde-div">
                                                <div class="bde-text-1755-274 bde-text">
                                                    Sao Rithchesda
                                                </div>
                                                <div class="bde-text-1755-275 bde-text">
                                                    Gold Medallist, Attack Online 2 (Individual format), 32nd
                                                    Southeast Asian Games
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div aria-label="1 / 6" class="bde-advancedslide-1755-210 bde-advancedslide swiper-slide"
                                    data-swiper-slide-index="0" role="" style="width: 743px;">
                                    <div class="advanced-slider__slide">
                                        <div class="bde-div-1755-211 bde-div">
                                            <img class="bde-image2-1755-206 bde-image2"
                                                sizes="(max-width: 1920px) 100vw, 1920px"
                                                src="https://moi-static.sgp1.cdn.digitaloceanspaces.com/uploads/post/feature_image/103846/feature.jpg">
                                            <div class="bde-div-1755-213 bde-div">
                                                <div class="bde-text-1755-208 bde-text">
                                                    Tea Sophanal, Bol Visal, Sao Rithchesda, Sron Chanthoeun, Ouk Sotha, Mao
                                                    Straboth, and Chea Sokpich
                                                </div>
                                                <div class="bde-text-1755-209 bde-text">
                                                    Gold Medal: Attack Online 2 (Team format), 32nd
                                                    Southeast Asian Games
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div aria-label="2 / 6" class="bde-advancedslide-1755-324 bde-advancedslide swiper-slide"
                                    data-swiper-slide-index="1" role="" style="width: 743px;">
                                    <div class="advanced-slider__slide">
                                        <div class="bde-div-1755-325 bde-div">
                                            <img class="bde-image2-1755-326 bde-image2"
                                                sizes="(max-width: 1920px) 100vw, 1920px"
                                                src="https://static.gosugamers.net/19/83/7c/2a59c8268015426a4af870f7bfbfa9ccf82417b20d9329d599ea7d4c41.jpg?w=1600">
                                            <div class="bde-div-1755-327 bde-div">
                                                <div class="bde-text-1755-328 bde-text">
                                                    Tra "SkyNin" Chhany.
                                                </div>
                                                <div class="bde-text-1755-329 bde-text">
                                                    Gold Medal: PUBG Mobile (Individual format), 32nd
                                                    Southeast Asian Games
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div aria-label="3 / 6" class="bde-advancedslide-1755-216 bde-advancedslide swiper-slide"
                                    data-swiper-slide-index="2" role="" style="width: 743px;">
                                    <div class="advanced-slider__slide">
                                        <div class="bde-div-1755-217 bde-div">
                                            <img class="bde-image2-1755-218 bde-image2"
                                                sizes="(max-width: 1920px) 100vw, 1920px"
                                                src="https://scontent.fpnh10-1.fna.fbcdn.net/v/t39.30808-6/480336362_1188152356038892_6111265040594083862_n.jpg?stp=dst-jpg_tt6&cstp=mx1440x1440&ctp=s1440x1440&_nc_cat=111&ccb=1-7&_nc_sid=833d8c&_nc_eui2=AeFrsEc_wxNYAHcyPnvP1ops6igF9F2VtcvqKAX0XZW1y_pGCkDaLgzv_ImKbT_MZRRL8muEow5QtNzKspgwnyxS&_nc_ohc=DtNUe-uig5UQ7kNvwH7-_lm&_nc_oc=AdoijpDLgKL4EZapPeriCAEiMeC47VAhpNjGDujl5wCYD5R2ccMoQflAYkr1eLGj8Jk&_nc_zt=23&_nc_ht=scontent.fpnh10-1.fna&_nc_gid=KLwaJSEZHbKE914HQwffqg&_nc_ss=7b2a8&oh=00_Af94KFAyzJc4WRbjQFMEbaoAezyk-_bSZqj7Qr8baKoeag&oe=6A3047D4">
                                            <div class="bde-div-1755-219 bde-div">
                                                <div class="bde-text-1755-220 bde-text">
                                                    Sron Chanthoeun.
                                                </div>
                                                <div class="bde-text-1755-221 bde-text">
                                                    Silver Medal: Attack Online 2 (Individual format) 32nd
                                                    Southeast Asian Games
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div aria-label="4 / 6" class="bde-advancedslide-1755-222 bde-advancedslide swiper-slide"
                                    data-swiper-slide-index="3" role="" style="width: 743px;">
                                    <div class="advanced-slider__slide">
                                        <div class="bde-div-1755-223 bde-div">
                                            <img class="bde-image2-1755-224 bde-image2"
                                                sizes="(max-width: 1920px) 100vw, 1920px"
                                                src="https://cdn.oneesports.gg/wp-content/uploads/2023/05/MLBB_32ndSEAGames_Cambodia-1024x576.webp">
                                            <div class="bde-div-1755-225 bde-div">
                                                <div class="bde-text-1755-226 bde-text">
                                                    Cheang Piseth, Khoun Amey, Kosal Piseth, Nhem Chandavan, Pich Sopheak,
                                                    Sok Roth, and Ty Oudom.
                                                </div>
                                                <div class="bde-text-1755-227 bde-text">
                                                    Bronze Medal: Mobile Legends: Bang Bang (Men's Team), 32nd
                                                    Southeast Asian Games
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div aria-label="5 / 6"
                                    class="bde-advancedslide-1755-228 bde-advancedslide swiper-slide swiper-slide-prev"
                                    data-swiper-slide-index="4" role="" style="width: 743px;">
                                    <div class="advanced-slider__slide">
                                        <div class="bde-div-1755-229 bde-div">
                                            <img class="bde-image2-1755-230 bde-image2"
                                                sizes="(max-width: 1920px) 100vw, 1920px"
                                                src="https://scontent.fpnh10-1.fna.fbcdn.net/v/t39.30808-6/690635731_1489466085965210_5845038377708281248_n.jpg?stp=dst-jpg_tt6&cstp=mx1638x2048&ctp=s1638x2048&_nc_cat=109&ccb=1-7&_nc_sid=833d8c&_nc_eui2=AeGTQJLDTHXH7XYPxUD59pUAXpCR93nD_8xekJH3ecP_zCjbX9Agqlat7rKxKkV-A9BNtvUOSOS55AxNWJPHxzCJ&_nc_ohc=lzV0elknIDgQ7kNvwHUdgif&_nc_oc=AdoZ7Cf7VZkQQUjmJTTlAoBV9CpqzfDt-OZi8wG3xU3o8jZxg-twRBxbjt6zRPudqAc&_nc_zt=23&_nc_ht=scontent.fpnh10-1.fna&_nc_gid=FAlXr6LvtjngVI8CO31KtQ&_nc_ss=7b2a8&oh=00_Af-xc8YmhiZ0tizpRF1J46kwCNN8nLFUeedZRt5ErnBE8g&oe=6A30615B">
                                            <div class="bde-div-1755-231 bde-div">
                                                <div class="bde-text-1755-232 bde-text">
                                                    Tek Daravan & Yun Chanpisal
                                                </div>
                                                <div class="bde-text-1755-233 bde-text">
                                                    Silver Medal: PUBG Mobile (Duo format), SEA Esports Nations Cup 2026
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div aria-label="1 / 6"
                                    class="bde-advancedslide-1755-210 bde-advancedslide swiper-slide swiper-slide-duplicate"
                                    data-swiper-slide-index="0" role="" style="width: 743px;">
                                    <div class="advanced-slider__slide">
                                        <div class="bde-div-1755-211 bde-div">
                                            <img class="bde-image2-1755-206 bde-image2"
                                                sizes="(max-width: 1920px) 100vw, 1920px"
                                                src="https://static.information.gov.kh/rails/active_storage/representations/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBd2UrQkE9PSIsImV4cCI6bnVsbCwicHVyIjoiYmxvYl9pZCJ9fQ==--812f9c2f36fcc0e821b2167879b7c932bc10d0e7/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCam9MY21WemFYcGxTU0lOTVRNMU1IZzVNREFHT2daRlZBPT0iLCJleHAiOm51bGwsInB1ciI6InZhcmlhdGlvbiJ9fQ==--30b79c7f7567bd0a04d6c485cf8a2bbc24e21d2f/2a.jpg" />
                                            <div class="bde-div-1755-213 bde-div">
                                                <div class="bde-text-1755-208 bde-text">
                                                    Sao Rithchesda
                                                </div>
                                                <div class="bde-text-1755-209 bde-text">
                                                    Gold Medallist, Attack Online 2 (Individual format), 32nd
                                                    Southeast Asian Games
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span aria-atomic="true" aria-live="assertive" class="swiper-notification"></span>
                        </div>
                    </div>
                </div>
                <div class="bde-back-to-top-1755-303 bde-back-to-top bde-back-to-top--icon is-sticky">
                    <button aria-label="Back to top"
                        class="bde-back-to-top__button bde-back-to-top__button--icon bde-back-to-top__button--show-always bde-back-to-top__button--animation-fade is-sticky bde-back-to-top__button--autohide js-ee-back-to-top is-top"
                        tabindex="0">
                        <div class="bde-back-to-top__icon-wrap">
                            <svg viewbox="0 0 384 512"
                                xmlns="http://www.w3.org/2000/svg"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path
                                    d="M214.6 57.4L192 34.7 169.4 57.4l-144 144L2.7 224 48 269.2l22.6-22.6L160 157.2V448v32h64V448 157.2l89.4 89.4L336 269.2 381.3 224l-22.6-22.6-144-144z">
                                </path>
                            </svg>
                        </div>
                    </button>
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