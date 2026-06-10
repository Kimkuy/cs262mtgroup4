@extends('layout')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/merchandise.css') }}">

<section class="merch-hero">
    <div class="section-container">
        <p class="merch-hero__eyebrow">// E-sport Federation Cambodia //</p>
        <p class="merch-hero__sub">Gear Up</p>
        <h1>Official<br><span>Merchandise</span></h1>
    </div>
</section>

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

<script src="{{ asset('js/merchandise.js') }}"></script>

@endsection