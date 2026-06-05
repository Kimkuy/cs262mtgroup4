@extends('layout')
@section('content')

<style>
    /* ── Hero ── */
    .merch-hero {
        position: relative;
        background: linear-gradient(135deg, #0f172a 0%, #1e293b 60%, #1a0a0e 100%);
        padding: 80px 0 60px;
        overflow: hidden;
    }
    .merch-hero::before {
        content: '';
        position: absolute;
        top: 0; left: 0;
        width: 100%; height: 100%;
        background-image: url('https://ih1.redbubble.net/image.2678650286.8580/st,small,507x507-pad,600x600,f8f8f8.jpg');
        background-size: contain;
        background-position: right center;
        background-repeat: no-repeat;
        opacity: 0.06;
        pointer-events: none;
    }
    .merch-hero .section-container {
        position: relative;
        z-index: 2;
        max-width: 1100px;
        margin: 0 auto;
        padding: 0 32px;
    }
    .merch-hero__eyebrow {
        color: #b90216;
        font-size: 0.8rem;
        font-weight: 700;
        letter-spacing: 3px;
        text-transform: uppercase;
        margin-bottom: 8px;
    }
    .merch-hero__sub {
        color: #94a3b8;
        font-size: 1rem;
        font-weight: 600;
        letter-spacing: 2px;
        text-transform: uppercase;
        margin-bottom: 16px;
    }
    .merch-hero h1 {
        font-size: clamp(2.2rem, 5vw, 3.6rem);
        font-weight: 900;
        line-height: 1.1;
        color: #ffffff;
        text-transform: uppercase;
        margin: 0;
    }
    .merch-hero h1 span { color: #b90216; }

    /* ── Shared section wrapper ── */
    .merch-section {
        max-width: 1100px;
        margin: 0 auto;
        padding: 72px 32px;
    }

    /* ── Intro / collection banner ── */
    .merch-intro {
        background: #ffffff;
        border-bottom: 1px solid #e5e7eb;
    }
    .merch-intro__inner {
        display: grid;
        grid-template-columns: 1fr 2fr;
        gap: 64px;
        align-items: center;
    }
    .merch-intro__logo-wrap {
        background: #f8fafc;
        border: 1px solid #e5e7eb;
        border-radius: 16px;
        padding: 32px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .merch-intro__logo-wrap img {
        max-width: 200px;
        width: 100%;
        display: block;
    }
    .merch-intro__eyebrow {
        color: #b90216;
        font-size: 0.75rem;
        font-weight: 700;
        letter-spacing: 3px;
        text-transform: uppercase;
        margin-bottom: 10px;
    }
    .merch-intro h2 {
        font-size: clamp(1.5rem, 3vw, 2.1rem);
        font-weight: 900;
        color: #0f172a;
        text-transform: uppercase;
        line-height: 1.2;
        margin: 0 0 16px;
    }
    .merch-intro p {
        color: #4b5563;
        line-height: 1.8;
        font-size: 1rem;
        margin-bottom: 24px;
    }
    .merch-intro__cta {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: #b90216;
        color: #fff;
        font-weight: 700;
        font-size: 0.9rem;
        padding: 13px 26px;
        border-radius: 6px;
        text-decoration: none;
        text-transform: uppercase;
        letter-spacing: 1px;
        transition: background 0.2s;
    }
    .merch-intro__cta:hover { background: #8f0111; color: #fff; }

    /* ── Product pill tags ── */
    .merch-tags {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        margin-top: 24px;
    }
    .merch-tags a {
        display: inline-block;
        background: #f1f5f9;
        border: 1px solid #e2e8f0;
        color: #0f172a;
        font-size: 0.85rem;
        font-weight: 600;
        padding: 7px 16px;
        border-radius: 999px;
        text-decoration: none;
        transition: background 0.2s, border-color 0.2s, color 0.2s;
    }
    .merch-tags a:hover {
        background: #b90216;
        border-color: #b90216;
        color: #fff;
    }

    /* ── Product grid ── */
    .merch-grid-section {
        background: #f8fafc;
        border-bottom: 1px solid #e5e7eb;
    }
    .merch-grid-section__eyebrow {
        color: #b90216;
        font-size: 0.75rem;
        font-weight: 700;
        letter-spacing: 3px;
        text-transform: uppercase;
        margin-bottom: 8px;
    }
    .merch-grid-section h2 {
        font-size: clamp(1.5rem, 3vw, 2rem);
        font-weight: 900;
        color: #0f172a;
        text-transform: uppercase;
        margin: 0 0 40px;
    }
    .merch-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
        gap: 28px;
    }
    .merch-card {
        background: #ffffff;
        border: 1px solid #e5e7eb;
        border-radius: 12px;
        overflow: hidden;
        transition: box-shadow 0.25s, transform 0.25s;
        text-decoration: none;
        display: flex;
        flex-direction: column;
    }
    .merch-card:hover {
        box-shadow: 0 12px 32px rgba(185,2,22,0.12);
        transform: translateY(-4px);
    }
    .merch-card__img-wrap {
        position: relative;
        background: #f1f5f9;
        aspect-ratio: 1 / 1;
        overflow: hidden;
    }
    .merch-card__img-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform 0.4s;
    }
    .merch-card:hover .merch-card__img-wrap img {
        transform: scale(1.05);
    }
    .merch-card__badge {
        position: absolute;
        top: 12px; left: 12px;
        background: #b90216;
        color: #fff;
        font-size: 0.7rem;
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: uppercase;
        padding: 4px 10px;
        border-radius: 4px;
    }
    .merch-card__body {
        padding: 16px 18px 20px;
        flex: 1;
        display: flex;
        flex-direction: column;
    }
    .merch-card__name {
        font-weight: 700;
        color: #0f172a;
        font-size: 0.95rem;
        margin-bottom: 6px;
    }
    .merch-card__desc {
        color: #64748b;
        font-size: 0.82rem;
        line-height: 1.5;
        flex: 1;
        margin-bottom: 14px;
    }
    .merch-card__footer {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .merch-card__price {
        font-weight: 900;
        color: #b90216;
        font-size: 1rem;
    }
    .merch-card__btn {
        font-size: 0.78rem;
        font-weight: 700;
        color: #0f172a;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        display: flex;
        align-items: center;
        gap: 4px;
    }
    .merch-card:hover .merch-card__btn { color: #b90216; }

    /* ── How to order ── */
    .merch-how {
        background: #0f172a;
        border-bottom: 1px solid #1e293b;
    }
    .merch-how__eyebrow {
        color: #b90216;
        font-size: 0.75rem;
        font-weight: 700;
        letter-spacing: 3px;
        text-transform: uppercase;
        margin-bottom: 8px;
    }
    .merch-how h2 {
        font-size: clamp(1.5rem, 3vw, 2rem);
        font-weight: 900;
        color: #ffffff;
        text-transform: uppercase;
        margin: 0 0 48px;
    }
    .merch-how__steps {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 32px;
    }
    .merch-how__step {
        text-align: center;
    }
    .merch-how__step-num {
        width: 52px; height: 52px;
        border-radius: 50%;
        background: #b90216;
        color: #fff;
        font-weight: 900;
        font-size: 1.2rem;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 16px;
    }
    .merch-how__step h3 {
        font-weight: 700;
        color: #f1f5f9;
        font-size: 0.95rem;
        margin: 0 0 8px;
        text-transform: uppercase;
    }
    .merch-how__step p {
        color: #64748b;
        font-size: 0.85rem;
        line-height: 1.6;
        margin: 0;
    }

    /* ── Footer ── */
    .merch-footer { background: #0f172a; }
    .merch-footer .section-container {
        max-width: 1100px;
        margin: 0 auto;
        padding: 28px 32px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 16px;
        border-top: 1px solid #1e293b;
    }
    .merch-footer__copy { color: #64748b; font-size: 0.875rem; }
    .merch-footer__icons { display: flex; gap: 12px; }
    .merch-footer__icons a {
        display: flex; align-items: center; justify-content: center;
        width: 32px; height: 32px;
        border-radius: 50%;
        background: #1e293b;
        transition: background 0.2s;
    }
    .merch-footer__icons a:hover { background: #b90216; }
    .merch-footer__icons svg { fill: #94a3b8; width: 15px; height: 15px; }
    .merch-footer__icons a:hover svg { fill: #fff; }

    /* ── Entrance animation ── */
    .is-before { opacity: 0; transform: translateY(24px); transition: opacity 0.6s ease, transform 0.6s ease; }
    .is-before.is-visible { opacity: 1; transform: translateY(0); }

    /* ── Responsive ── */
    @media (max-width: 768px) {
        .merch-intro__inner { grid-template-columns: 1fr; gap: 32px; }
        .merch-footer .section-container { flex-direction: column; align-items: flex-start; }
    }
</style>

<!-- ══════════════════════════════
     HERO
══════════════════════════════ -->
<section class="merch-hero">
    <div class="section-container">
        <p class="merch-hero__eyebrow">// E-sport Federation Cambodia //</p>
        <p class="merch-hero__sub">Gear Up</p>
        <h1>Official<br><span>Merchandise</span></h1>
    </div>
</section>

<!-- ══════════════════════════════
     COLLECTION INTRO
══════════════════════════════ -->
<section class="merch-intro">
    <div class="merch-section is-before">
        <div class="merch-intro__inner">
            <div class="merch-intro__logo-wrap">
                <img
                    src="https://kbcambodia.com/wp-content/uploads/2016/07/cellcard-1.jpg"
                    alt="EFC × VSHOPKH Partner Logo"
                    onerror="this.src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSoFCdWwG2xWtJAGkuXd0Mq7IWz1SJOhO497g&s'"
                >
            </div>
            <div>
                <p class="merch-intro__eyebrow">// merchandise //</p>
                <h2>EFC × VSHOPKH<br>Collection</h2>
                <p>
                    In collaboration with <strong>VSHOPKH</strong>, EFC offers fans official apparel and accessories to support Cambodia's esports athletes — with new items tied to major events and campaigns. Wear the flag. Fuel the future of play.
                </p>
                <a href="https://vshopkh.com/" target="_blank" class="merch-intro__cta">
                    View the EFC Collection
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/>
                    </svg>
                </a>
                <div class="merch-tags">
                    <a href="https://vshopkh.com/" target="_blank">National Jersey</a>
                    <a href="https://vshopkh.com/" target="_blank">Tracksuit Jacket</a>
                    <a href="https://vshopkh.com/" target="_blank">Hoodie</a>
                    <a href="https://vshopkh.com/" target="_blank">Tracksuit Pants</a>
                    <a href="https://vshopkh.com/" target="_blank">Beanie</a>
                    <a href="https://vshopkh.com/" target="_blank">Cap</a>
                    <a href="https://vshopkh.com/" target="_blank">Tote Bag</a>
                    <a href="https://vshopkh.com/" target="_blank">Mousepad</a>
                    <a href="https://vshopkh.com/" target="_blank">Umbrella</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ══════════════════════════════
     PRODUCT GRID
══════════════════════════════ -->
<section class="merch-grid-section">
    <div class="merch-section is-before">
        <p class="merch-grid-section__eyebrow">// shop now //</p>
        <h2>Featured Items</h2>
        <div class="merch-grid">

            <!-- Jersey -->
            <a href="https://vshopkh.com/" target="_blank" class="merch-card">
                <div class="merch-card__img-wrap">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSnn_HfoNiQvRvpLi6xTTMhZ0sb_bZyrDS3SQ&s" alt="National Jersey"
                         onerror="this.src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSoFCdWwG2xWtJAGkuXd0Mq7IWz1SJOhO497g&s'">
                    <span class="merch-card__badge">New</span>
                </div>
                <div class="merch-card__body">
                    <p class="merch-card__name">EFC National Jersey</p>
                    <p class="merch-card__desc">Official Team Cambodia national esports jersey. Wear the flag with pride.</p>
                    <div class="merch-card__footer">
                        <span class="merch-card__price">Shop →</span>
                        <span class="merch-card__btn">View on VSHOPKH
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
                        </span>
                    </div>
                </div>
            </a>

            <!-- Hoodie -->
            <a href="https://vshopkh.com/" target="_blank" class="merch-card">
                <div class="merch-card__img-wrap">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ7AsDxGl7vUmI3b-QUeN5JSUfm857PgiPhBw&s" alt="EFC Hoodie"
                         onerror="this.src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSoFCdWwG2xWtJAGkuXd0Mq7IWz1SJOhO497g&s'">
                </div>
                <div class="merch-card__body">
                    <p class="merch-card__name">EFC Hoodie</p>
                    <p class="merch-card__desc">Premium pullover hoodie featuring the EFC crest. Perfect for tournament days.</p>
                    <div class="merch-card__footer">
                        <span class="merch-card__price">Shop →</span>
                        <span class="merch-card__btn">View on VSHOPKH
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
                        </span>
                    </div>
                </div>
            </a>

            <!-- Tracksuit Jacket -->
            <a href="https://vshopkh.com/" target="_blank" class="merch-card">
                <div class="merch-card__img-wrap">
                    <img src="https://d3h9qea4qy4169.cloudfront.net/600px_PRO_Esports_v3_allmode_205ff692bb.png" alt="Tracksuit Jacket"
                         onerror="this.src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSoFCdWwG2xWtJAGkuXd0Mq7IWz1SJOhO497g&s'">
                    <span class="merch-card__badge">Popular</span>
                </div>
                <div class="merch-card__body">
                    <p class="merch-card__name">EFC Tracksuit Jacket</p>
                    <p class="merch-card__desc">Official tracksuit jacket worn by Team Cambodia esports athletes at major competitions.</p>
                    <div class="merch-card__footer">
                        <span class="merch-card__price">Shop →</span>
                        <span class="merch-card__btn">View on VSHOPKH
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
                        </span>
                    </div>
                </div>
            </a>

            <!-- Cap -->
            <a href="https://vshopkh.com/" target="_blank" class="merch-card">
                <div class="merch-card__img-wrap">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSnriBp97X4lZ_B5jYHi1wkF2kmnUdK3TcO1w&s" alt="EFC Cap"
                         onerror="this.src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSoFCdWwG2xWtJAGkuXd0Mq7IWz1SJOhO497g&s'">
                </div>
                <div class="merch-card__body">
                    <p class="merch-card__name">EFC Cap</p>
                    <p class="merch-card__desc">Structured snapback with embroidered EFC logo. One size fits all.</p>
                    <div class="merch-card__footer">
                        <span class="merch-card__price">Shop →</span>
                        <span class="merch-card__btn">View on VSHOPKH
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
                        </span>
                    </div>
                </div>
            </a>

            <!-- Mousepad -->
            <a href="https://vshopkh.com/" target="_blank" class="merch-card">
                <div class="merch-card__img-wrap">
                    <img src="https://cdn.escharts.com/uploads/public/69d/635/ab5/69d635ab5947e875312605.png" alt="EFC Mousepad"
                         onerror="this.src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSoFCdWwG2xWtJAGkuXd0Mq7IWz1SJOhO497g&s'">
                </div>
                <div class="merch-card__body">
                    <p class="merch-card__name">EFC Mousepad</p>
                    <p class="merch-card__desc">Extended gaming mousepad with EFC branding — smooth surface, non-slip base.</p>
                    <div class="merch-card__footer">
                        <span class="merch-card__price">Shop →</span>
                        <span class="merch-card__btn">View on VSHOPKH
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
                        </span>
                    </div>
                </div>
            </a>

            <!-- Tote Bag -->
            <a href="https://vshopkh.com/" target="_blank" class="merch-card">
                <div class="merch-card__img-wrap">
                    <img src="https://cdn.escharts.com/uploads/public/615/af3/7bb/615af37bb35cf454877795." alt="EFC Tote Bag"
                         onerror="this.src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSoFCdWwG2xWtJAGkuXd0Mq7IWz1SJOhO497g&s'">
                </div>
                <div class="merch-card__body">
                    <p class="merch-card__name">EFC Tote Bag</p>
                    <p class="merch-card__desc">Heavy-duty canvas tote with EFC print. Carry your gear in style.</p>
                    <div class="merch-card__footer">
                        <span class="merch-card__price">Shop →</span>
                        <span class="merch-card__btn">View on VSHOPKH
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
                        </span>
                    </div>
                </div>
            </a>

        </div>
    </div>
</section>

<!-- ══════════════════════════════
     HOW TO ORDER
══════════════════════════════ -->
<section class="merch-how">
    <div class="merch-section is-before">
        <p class="merch-how__eyebrow">// how it works //</p>
        <h2>How to Order</h2>
        <div class="merch-how__steps">
            <div class="merch-how__step">
                <div class="merch-how__step-num">1</div>
                <h3>Browse</h3>
                <p>Explore the full EFC collection on the VSHOPKH store — apparel, accessories, and more.</p>
            </div>
            <div class="merch-how__step">
                <div class="merch-how__step-num">2</div>
                <h3>Select</h3>
                <p>Pick your item, choose your size, and add it to your cart on the VSHOPKH platform.</p>
            </div>
            <div class="merch-how__step">
                <div class="merch-how__step-num">3</div>
                <h3>Checkout</h3>
                <p>Pay securely through VSHOPKH's checkout. Multiple payment methods accepted.</p>
            </div>
            <div class="merch-how__step">
                <div class="merch-how__step-num">4</div>
                <h3>Delivered</h3>
                <p>Your official EFC gear is shipped straight to your door across Cambodia.</p>
            </div>
        </div>
    </div>
</section>

<!-- ══════════════════════════════
     FOOTER
══════════════════════════════ -->
<footer class="merch-footer">
    <div class="section-container">
        <span class="merch-footer__copy">© 2026 E-sport Federation Cambodia. All rights reserved.</span>
        <div class="merch-footer__icons">
            <a href="https://www.facebook.com/efckhmer/" target="_blank" aria-label="Facebook">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/></svg>
            </a>
            <a href="https://www.instagram.com/mplkh.official/" target="_blank" aria-label="Instagram">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
            </a>
            <a href="https://www.linkedin.com/in/lun-samedy-a8ba1716a/" target="_blank" aria-label="LinkedIn">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="-4 -2 32 32"><path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"/></svg>
            </a>
            <a href="https://www.youtube.com/@Exprez.Esports" target="_blank" aria-label="YouTube">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
            </a>
        </div>
    </div>
</footer>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12 });
        document.querySelectorAll('.is-before').forEach(function (el) {
            observer.observe(el);
        });
    });
</script>

@endsection