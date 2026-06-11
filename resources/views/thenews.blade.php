@extends('layout')
@section('content')

<head>
    <link rel="stylesheet" href="{{ asset('/css/thenews.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thenews - E-sport Federation Cambodia</title>

    <meta name="robots" content="max-snippet:-1,max-image-preview:large,max-video-preview:-1">
    <link rel="canonical" href="https://esports.org.sg/newsroom/">
    <meta name="description" content="Stay updated with SGEA’s latest news, media releases and announcements on Singapore esports, competitions, initiatives and partnerships.">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_GB">
    <meta property="og:site_name" content="Singapore Esports Association">
    <meta property="og:title" content="Newsroom">
    <meta property="og:description" content="Stay updated with SGEA’s latest news, media releases and announcements on Singapore esports, competitions, initiatives and partnerships.">
    <meta property="og:url" content="https://esports.org.sg/newsroom/">
    <meta property="og:image" content="https://esports.org.sg/wp-content/uploads/2019/10/cropped-SGEA-LOGO-FINAL.png">
    <meta property="og:image:width" content="512">
    <meta property="og:image:height" content="512">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Newsroom">
    <meta name="twitter:description" content="Stay updated with SGEA’s latest news, media releases and announcements on Singapore esports, competitions, initiatives and partnerships.">
    <meta name="twitter:image" content="https://esports.org.sg/wp-content/uploads/2019/10/cropped-SGEA-LOGO-FINAL.png">

    <link rel="dns-prefetch" href="//esports.org.sg">
    <link rel="dns-prefetch" href="//www.googletagmanager.com">
    <link rel="icon" href="https://esports.org.sg/wp-content/uploads/2019/10/cropped-SGEA-LOGO-FINAL-32x32.png" sizes="32x32">
    <link rel="icon" href="https://esports.org.sg/wp-content/uploads/2019/10/cropped-SGEA-LOGO-FINAL-192x192.png" sizes="192x192">
    <link rel="apple-touch-icon" href="https://esports.org.sg/wp-content/uploads/2019/10/cropped-SGEA-LOGO-FINAL-180x180.png">
    <meta name="msapplication-TileImage" content="https://esports.org.sg/wp-content/uploads/2019/10/cropped-SGEA-LOGO-FINAL-270x270.png">

    <link rel="stylesheet" type="text/css" href="//esports.org.sg/wp-content/cache/wpfc-minified/7yzoad36/2bcon.css" media="all">
    <link rel="stylesheet" type="text/css" href="//esports.org.sg/wp-content/cache/wpfc-minified/kd9zwxab/2enhr.css" media="all">
    
    <style id="wp-img-auto-sizes-contain-inline-css">
        img:is([sizes=auto i],[sizes^="auto," i]){contain-intrinsic-size:3000px 1500px}
    </style>
    <style id="wp-block-paragraph-inline-css">
        .is-small-text{font-size:.875em}.is-regular-text{font-size:1em}.is-large-text{font-size:2.25em}.is-larger-text{font-size:3em}
        .has-drop-cap:not(:focus):first-letter{float:left;font-size:8.4em;font-style:normal;font-weight:100;line-height:.68;margin:.05em .1em 0 0;text-transform:uppercase}
        body.rtl .has-drop-cap:not(:focus):first-letter{float:none;margin-left:.1em}p.has-drop-cap.has-background{overflow:hidden}
        :root :where(p.has-background){padding:1.25em 2.375em}:where(p.has-text-color:not(.has-link-color)) a{color:inherit}
        p.has-text-align-left[style*="writing-mode:vertical-lr"],p.has-text-align-right[style*="writing-mode:vertical-rl"]{rotate:180deg}
    </style>
    <style id="wp-block-heading-inline-css">
        h1:where(.wp-block-heading).has-background,h2:where(.wp-block-heading).has-background,h3:where(.wp-block-heading).has-background,h4:where(.wp-block-heading).has-background,h5:where(.wp-block-heading).has-background,h6:where(.wp-block-heading).has-background{padding:1.25em 2.375em}
        h1.has-text-align-left[style*=writing-mode]:where([style*=vertical-lr]),h1.has-text-align-right[style*=writing-mode]:where([style*=vertical-rl]),h2.has-text-align-left[style*=writing-mode]:where([style*=vertical-lr]),h2.has-text-align-right[style*=writing-mode]:where([style*=vertical-rl]),h3.has-text-align-left[style*=writing-mode]:where([style*=vertical-lr]),h3.has-text-align-right[style*=writing-mode]:where([style*=vertical-rl]),h4.has-text-align-left[style*=writing-mode]:where([style*=vertical-lr]),h4.has-text-align-right[style*=writing-mode]:where([style*=vertical-rl]),h5.has-text-align-left[style*=writing-mode]:where([style*=vertical-lr]),h5.has-text-align-right[style*=writing-mode]:where([style*=vertical-rl]),h6.has-text-align-left[style*=writing-mode]:where([style*=vertical-lr]),h6.has-text-align-right[style*=writing-mode]:where([style*=vertical-rl]){rotate:180deg}
    </style>
    <style id="wp-block-list-inline-css">
        ol,ul{box-sizing:border-box}:root :where(.wp-block-list.has-background){padding:1.25em 2.375em}
    </style>
    <style id="mec-dynamic-skin-vars">
        :root,::before,::after {
            --mec-color-skin: #e4002b;
            --mec-color-skin-rgba-1: rgba(228,0,43,.25);
            --mec-color-skin-rgba-2: rgba(228,0,43,.5);
            --mec-color-skin-rgba-3: rgba(228,0,43,.75);
            --mec-color-skin-rgba-4: rgba(228,0,43,.11);
            --mec-container-normal-width: 1196px;
            --mec-container-large-width: 1690px;
            --mec-fes-main-color: #40d9f1;
            --mec-fes-main-color-rgba-1: rgba(64, 217, 241, 0.12);
            --mec-fes-main-color-rgba-2: rgba(64, 217, 241, 0.23);
            --mec-fes-main-color-rgba-3: rgba(64, 217, 241, 0.03);
            --mec-fes-main-color-rgba-4: rgba(64, 217, 241, 0.3);
            --mec-fes-main-color-rgba-5: rgb(64 217 241 / 7%);
            --mec-fes-main-color-rgba-6: rgba(64, 217, 241, 0.2);
        }
    </style>
    <style>
        .bde-loop-grid.ee-posts-grid {
            display: grid !important;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)) !important;
            gap: 16px !important;
        }
        .bde-loop-item.ee-post {
            padding: 12px !important;
            font-size: 14px !important;
            background: #fff;
            border-radius: 6px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }
        .bde-loop-item__image.ee-post-image {
            height: 160px !important;
            overflow: hidden !important;
            border-radius: 4px !important;
        }
        .bde-loop-item__image.ee-post-image img {
            height: 100% !important;
            width: 100% !important;
            object-fit: cover !important;
        }
        .ee-post-wrap {
            padding-top: 10px !important;
        }
        .ee-post-title {
            font-size: 15px !important;
            line-height: 1.3 !important;
            margin: 0 0 6px 0 !important;
            font-weight: 700 !important;
        }
        .bde-loop-item__post-meta.ee-post-meta {
            font-size: 11px !important;
            margin-bottom: 8px !important;
            color: #777 !important;
        }
        .bde-loop-item__content.ee-post-content {
            font-size: 12.5px !important;
            line-height: 1.4 !important;
            color: #444 !important;
            margin-bottom: 12px !important;
        }
        .bde-loop-item__button.ee-post-button {
            padding: 6px 14px !important;
            font-size: 11.5px !important;
            height: auto !important;
            line-height: 1 !important;
            display: inline-block !important;
            width: max-content !important;
        }
    </style>
    
    
    <link rel="preload" as="image" href="https://esports.org.sg/wp-content/uploads/2026/01/particle-light-hero.webp" fetchpriority="high">
    <link rel="preload" as="image" href="https://esports.org.sg/wp-content/uploads/2026/01/lionhead-hero.webp" fetchpriority="high">
</head>

<body class="wp-singular page-template-default page page-id-1766 wp-theme-breakdance-zero breakdance mec-theme-breakdance-zero">

    <svg class="breakdance-global-gradients-sprite" aria-hidden="true">
        <linearGradient x1="0.5" y1="1" x2="0.5" y2="0" id="bde-palette-test-3f7f26dc-ddc1-4240-b5e3-db28e988651c-gradient-10">
            <stop stop-opacity="1" stop-color="#efefef" offset="0.015384615384615385"></stop>
            <stop stop-opacity="1" stop-color="#ffffff" offset="1"></stop>
        </linearGradient>
    </svg>

    <section class="bde-section-1766-100 bde-section">
        <div class="section-background-overlay"></div>
        <div class="section-container">
            <div class="bde-div-1766-101 bde-div">
                <div class="bde-text-1766-102 bde-text">// E-sport Federation Cambodia //</div>
                <div class="bde-icon-1766-103 bde-icon">
                    <div class="bde-icon-icon breakdance-icon-atom">
                        <svg xmlns="http://www.w3.org/2000/svg" width="61" height="16" viewBox="0 0 61 16" fill="none">
                            <path d="M1 7C0.447715 7 4.82823e-08 7.44772 0 8C-4.82823e-08 8.55228 0.447715 9 1 9L1 7ZM60.7071 8.70711C61.0976 8.31659 61.0976 7.68342 60.7071 7.2929L54.3431 0.928937C53.9526 0.538412 53.3195 0.538412 52.9289 0.928937C52.5384 1.31946 52.5384 1.95263 52.9289 2.34315L58.5858 8.00001L52.9289 13.6569C52.5384 14.0474 52.5384 14.6805 52.9289 15.0711C53.3195 15.4616 53.9526 15.4616 54.3431 15.0711L60.7071 8.70711ZM1 9L60 9.00001L60 7.00001L1 7L1 9Z" fill="#E0B13D"></path>
                        </svg>
                    </div>
                </div>
            </div>
            <h2 class="bde-heading-1766-104 bde-heading">Thenews</h2>
        </div>
    </section>

    <section id="news-archive" class="bde-section posts-section">
        <div class="section-container">
            <div class="bde-div-1766-106 bde-div">
                <div class="bde-div-1766-107 bde-div">
                    <div class="bde-text-1766-108 bde-text">updates, press releases, announcements</div>
                    <div class="bde-icon-1766-109 bde-icon">
                        <div class="bde-icon-icon breakdance-icon-atom">
                            <svg xmlns="http://www.w3.org/2000/svg" width="61" height="16" viewBox="0 0 61 16" fill="none">
                                <path d="M1 7C0.447715 7 4.82823e-08 7.44772 0 8C-4.82823e-08 8.55228 0.447715 9 1 9L1 7ZM60.7071 8.70711C61.0976 8.31659 61.0976 7.68342 60.7071 7.2929L54.3431 0.928937C53.9526 0.538412 53.3195 0.538412 52.9289 0.928937C52.5384 1.31946 52.5384 1.95263 52.9289 2.34315L58.5858 8.00001L52.9289 13.6569C52.5384 14.0474 52.5384 14.6805 52.9289 15.0711C53.3195 15.4616 53.9526 15.4616 54.3431 15.0711L60.7071 8.70711ZM1 9L60 9.00001L60 7.00001L1 7L1 9Z" fill="#E0B13D"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <h2 class="bde-heading-1766-110 bde-heading">latest news</h2>
                <div class="bde-loop bde-loop-grid ee-posts ee-posts-grid bde-loop-isotope ee-posts-isotope" style="position: relative;">
                    
                    @if(isset($posts) && count($posts) > 0)
                        @foreach($posts as $post)
                            <article class="bde-loop-item ee-post" data-filters="{{ $post->category_id ?? 'all' }}">
                                <a class="bde-loop-item__image-link ee-post-image-link" href="/posts/{{ $post->slug ?? $post->id }}" tabindex="-1">
                                    <div class="bde-loop-item__image ee-post-image">
                                        <img width="1200" height="628" src="{{ $post->image ? asset('storage/' . $post->image) : 'https://esports.org.sg/wp-content/uploads/2026/05/Asian-Games-Qualifiers-PR-Banner.webp' }}" class="attachment-full size-full wp-post-image" alt="{{ $post->title }}" decoding="async">
                                    </div>
                                </a>
                                
                                <div class="bde-loop-item__wrap ee-post-wrap">
                                    <h3 class="ee-post-title">
                                        <a class="bde-loop-item__title-link ee-post-title-link" href="/posts/{{ $post->slug ?? $post->id }}">{{ $post->title }}</a>
                                    </h3>
                                    
                                    <div class="bde-loop-item__post-meta ee-post-meta">
                                        <span class="bde-loop-item__meta-item bde-loop-item__meta-author ee-post-meta-author ee-post-meta-item">
                                            {{ $post->user->name ?? 'Author' }}
                                        </span>
                                        <span class="bde-loop-item__meta-date bde-loop-item__meta-item ee-post-meta-date ee-post-meta-item">
                                            {{ $post->created_at ? $post->created_at->format('M d, Y') : 'Date' }}
                                        </span>
                                    </div>
                                    
                                    <div class="bde-loop-item__content ee-post-content">
                                        {{ Str::limit($post->content ?? $post->body, 120, '...') }}
                                    </div>
                                    
                                    <a class="breakdance-link button-atom button-atom--primary bde-loop-item__button ee-post-button" href="/posts/{{ $post->slug ?? $post->id }}">
                                        <span class="button-atom__text">Read more</span>
                                    </a>
                                </div>
                            </article>
                        @endforeach
                    @else
                        <div class="no-posts-message" style="grid-column: 1/-1; text-align: center; color: #888; padding: 40px 0;">
                            <p>No news updates found.</p>
                        </div>
                    @endif

                </div>
            </div>
        </div>
            </div>
        </div>
        <div class="section-container">
            <div class="bde-post-list-1766-113 bde-post-list">
                <div class="bde-isotope-filter-bar">
                    <div class="bde-tabs">
                        <div class="bde-tabs__tabslist-container bde-tabs__tabslist-container--scrollable is-horizontal js-tabs-container">
                            <div class="bde-tabs__tabslist bde-tabs__tabslist--default js-tablist" role="tablist" aria-label="Content tabs" aria-orientation="horizontal" data-tabs-id="isotope">
                                <button role="tab" aria-selected="true" class="bde-tabs__tab js-tab is-active" aria-controls="tab-panel-isotope-all" id="tab-isotope-all" data-value="all">
                                    <span class="bde-tabs__tab-title">All</span>
                                </button>
                                <button role="tab" aria-selected="false" class="bde-tabs__tab js-tab" aria-controls="tab-panel-isotope-1" id="tab-isotope-1" data-value="108">
                                    <span class="bde-tabs__tab-title">20th Asian Games</span>
                                </button>
                                <button role="tab" aria-selected="false" class="bde-tabs__tab js-tab" aria-controls="tab-panel-isotope-2" id="tab-isotope-2" data-value="3">
                                    <span class="bde-tabs__tab-title">Press Releases</span>
                                </button>
                                <button role="tab" aria-selected="false" class="bde-tabs__tab js-tab" aria-controls="tab-panel-isotope-3" id="tab-isotope-3" data-value="103">
                                    <span class="bde-tabs__tab-title">SEA Nations Cup</span>
                                </button>
                                <button role="tab" aria-selected="false" class="bde-tabs__tab js-tab" aria-controls="tab-panel-isotope-4" id="tab-isotope-4" data-value="99">
                                    <span class="bde-tabs__tab-title">Interview</span>
                                </button>
                                <button role="tab" aria-selected="false" class="bde-tabs__tab js-tab" aria-controls="tab-panel-isotope-5" id="tab-isotope-5" data-value="5">
                                    <span class="bde-tabs__tab-title">Announcements</span>
                                </button>
                                <button role="tab" aria-selected="false" class="bde-tabs__tab js-tab" aria-controls="tab-panel-isotope-6" id="tab-isotope-6" data-value="51">
                                    <span class="bde-tabs__tab-title">33rd SEA Games</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bde-loop-bottom bde-loop-grid ee-posts ee-posts-grid bde-loop-isotope-bottom ee-posts-isotope" style="position: relative;">
                 @foreach($newsArticles as $article)
        <article class="bde-loop-item ee-post" data-filters="{{ $article->filters }}">
            <a class="bde-loop-item__image-link ee-post-image-link" href="{{ $article->url }}" tabindex="-1">
                <div class="bde-loop-item__image ee-post-image">
                    <img width="1200" height="628" 
                         src="{{ $article->image_path }}" 
                         class="attachment-full size-full wp-post-image" 
                         alt="{{ $article->title }}" 
                         decoding="async">
                </div>
            </a>
            <div class="bde-loop-item__wrap ee-post-wrap">
                <h3 class="ee-post-title">
                    <a class="bde-loop-item__title-link ee-post-title-link" href="{{ $article->url }}">
                        {{ $article->title }}
                    </a>
                </h3>
                <div class="bde-loop-item__post-meta ee-post-meta">
                    <span class="bde-loop-item__meta-item bde-loop-item__meta-author ee-post-meta-author ee-post-meta-item">
                        {{ $article->author }}
                    </span>
                    <span class="bde-loop-item__meta-date bde-loop-item__meta-item ee-post-meta-date ee-post-meta-item">
                        {{ \Carbon\Carbon::parse($article->published_date)->format('F d, Y') }}
                    </span>
                </div>
                <div class="bde-loop-item__content ee-post-content">
                    {{ $article->content }}
                </div>
                <a class="breakdance-link button-atom button-atom--primary bde-loop-item__button ee-post-button" href="{{ $article->url }}">
                    <span class="button-atom__text">Read more</span>
                </a>
            </div>
        </article>
    @endforeach   
                    
                
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
                                    <a class="breakdance-link bde-social-icons__icon-wrapper bde-social-icons__icon-facebook" href="https://www.facebook.com/efckhmer/" target="_self" data-type="url" aria-label="facebook">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 24 24">
                                            <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path>
                                        </svg>
                                    </a>
                                    <a class="breakdance-link bde-social-icons__icon-wrapper bde-social-icons__icon-instagram" href="https://www.instagram.com/mplkh.official/" target="_self" data-type="url" aria-label="instagram">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 24 24">
                                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"></path>
                                        </svg>
                                    </a>
                                    <a class="breakdance-link bde-social-icons__icon-wrapper bde-social-icons__icon-linkedin" href="https://www.linkedin.com/in/lun-samedy-a8ba1716a/?isSelfProfile=false" target="_self" data-type="url" aria-label="linkedin">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="-4 -2 32 32">
                                            <path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"></path>
                                        </svg>
                                    </a>
                                    <a class="breakdance-link bde-social-icons__icon-wrapper bde-social-icons__icon-youtube" href="https://www.youtube.com/@Exprez.Esports" target="_blank" aria-label="youtube">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 24 24">
                                            <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

</body>
<script src="{{ asset('js/thenews.js') }}"></script>
@endsection
