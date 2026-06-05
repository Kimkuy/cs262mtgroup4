@extends('layout')
@section('content')

<style>
    /* ── Hero Banner ── */
    .about-hero {
        position: relative;
        background: linear-gradient(135deg, #0f172a 0%, #1e293b 60%, #1a0a0e 100%);
        padding: 80px 0 60px;
        overflow: hidden;
    }
    .about-hero::before {
        content: '';
        position: absolute;
        top: 0; left: 0;
        width: 100%; height: 100%;
        background-image: url('https://ih1.redbubble.net/image.2678650286.8580/st,small,507x507-pad,600x600,f8f8f8.jpg');
        background-size: contain;
        background-position: right center;
        background-repeat: no-repeat;
        opacity: 0.07;
        pointer-events: none;
    }
    .about-hero .section-container {
        position: relative;
        z-index: 2;
        max-width: 1100px;
        margin: 0 auto;
        padding: 0 32px;
    }
    .about-hero__eyebrow {
        color: #b90216;
        font-size: 0.8rem;
        font-weight: 700;
        letter-spacing: 3px;
        text-transform: uppercase;
        margin-bottom: 8px;
    }
    .about-hero__sub {
        color: #94a3b8;
        font-size: 1rem;
        font-weight: 600;
        letter-spacing: 2px;
        text-transform: uppercase;
        margin-bottom: 16px;
    }
    .about-hero h1 {
        font-size: clamp(2.2rem, 5vw, 3.6rem);
        font-weight: 900;
        line-height: 1.1;
        color: #ffffff;
        text-transform: uppercase;
        margin: 0 0 24px;
    }
    .about-hero h1 span { color: #b90216; }

    /* ── Section wrapper ── */
    .about-section {
        max-width: 1100px;
        margin: 0 auto;
        padding: 72px 32px;
    }

    /* ── Who We Are ── */
    .about-who {
        background: #ffffff;
        border-bottom: 1px solid #e5e7eb;
    }
    .about-who__grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 64px;
        align-items: start;
    }
    .about-who__eyebrow {
        color: #b90216;
        font-size: 0.75rem;
        font-weight: 700;
        letter-spacing: 3px;
        text-transform: uppercase;
        margin-bottom: 10px;
    }
    .about-who h2 {
        font-size: clamp(1.6rem, 3vw, 2.2rem);
        font-weight: 900;
        color: #0f172a;
        line-height: 1.2;
        margin: 0 0 20px;
        text-transform: uppercase;
    }
    .about-who p {
        color: #4b5563;
        line-height: 1.8;
        font-size: 1rem;
        margin-bottom: 16px;
    }
    .about-who__cta {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: #b90216;
        color: #fff;
        font-weight: 700;
        font-size: 0.9rem;
        padding: 12px 24px;
        border-radius: 6px;
        text-decoration: none;
        margin-top: 8px;
        transition: background 0.2s;
    }
    .about-who__cta:hover { background: #8f0111; color: #fff; }
    .about-who__image {
        width: 100%;
        border-radius: 12px;
        object-fit: cover;
        display: block;
        max-height: 420px;
        box-shadow: 0 12px 40px rgba(0,0,0,0.12);
    }

    /* ── Mission ── */
    .about-mission {
        background: #f8fafc;
        border-bottom: 1px solid #e5e7eb;
    }
    .about-mission__grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 64px;
        align-items: center;
    }
    .about-mission__image {
        width: 100%;
        border-radius: 12px;
        object-fit: cover;
        display: block;
        max-height: 380px;
        box-shadow: 0 12px 40px rgba(0,0,0,0.10);
        order: 1;
    }
    .about-mission__text { order: 2; }
    .about-mission h2 {
        font-size: clamp(1.6rem, 3vw, 2.2rem);
        font-weight: 900;
        color: #0f172a;
        text-transform: uppercase;
        line-height: 1.2;
        margin: 0 0 20px;
    }
    .about-mission p {
        color: #4b5563;
        line-height: 1.8;
        font-size: 1rem;
        margin-bottom: 14px;
    }

    /* ── Committee ── */
    .about-committee {
        background: #0f172a;
        border-bottom: 1px solid #1e293b;
    }
    .about-committee__eyebrow {
        color: #b90216;
        font-size: 0.75rem;
        font-weight: 700;
        letter-spacing: 3px;
        text-transform: uppercase;
        margin-bottom: 8px;
    }
    .about-committee h2 {
        font-size: clamp(1.5rem, 3vw, 2rem);
        font-weight: 900;
        color: #ffffff;
        text-transform: uppercase;
        margin: 0 0 48px;
    }
    .about-committee__sub-heading {
        font-size: 0.8rem;
        font-weight: 700;
        color: #94a3b8;
        letter-spacing: 3px;
        text-transform: uppercase;
        margin-bottom: 28px;
        padding-bottom: 12px;
        border-bottom: 1px solid #1e293b;
    }
    .about-committee__grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
        gap: 28px;
        margin-bottom: 56px;
    }
    .about-committee__card {
        text-align: center;
    }
    .about-committee__card img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        object-fit: cover;
        border: 3px solid #1e293b;
        margin: 0 auto 12px;
        display: block;
        background: #1e293b;
    }
    .about-committee__card .card-name {
        font-weight: 700;
        color: #f1f5f9;
        font-size: 0.95rem;
        margin-bottom: 4px;
    }
    .about-committee__card .card-role {
        color: #64748b;
        font-size: 0.82rem;
        margin-bottom: 8px;
    }
    .about-committee__card a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 28px;
        height: 28px;
        border-radius: 50%;
        background: #1e293b;
        transition: background 0.2s;
    }
    .about-committee__card a:hover { background: #b90216; }
    .about-committee__card a svg { fill: #94a3b8; width: 14px; height: 14px; }
    .about-committee__card a:hover svg { fill: #fff; }

    /* ── Policies ── */
    .about-policies {
        background: #ffffff;
        border-bottom: 1px solid #e5e7eb;
    }
    .about-policies__eyebrow {
        color: #b90216;
        font-size: 0.75rem;
        font-weight: 700;
        letter-spacing: 3px;
        text-transform: uppercase;
        margin-bottom: 8px;
    }
    .about-policies h2 {
        font-size: clamp(1.5rem, 3vw, 2rem);
        font-weight: 900;
        color: #0f172a;
        text-transform: uppercase;
        margin: 0 0 40px;
    }
    .about-policies__list {
        display: flex;
        flex-direction: column;
        gap: 12px;
        max-width: 640px;
    }
    .about-policies__item {
        display: flex;
        align-items: center;
        gap: 14px;
        background: #f8fafc;
        border: 1px solid #e5e7eb;
        border-radius: 8px;
        padding: 16px 20px;
        text-decoration: none;
        transition: border-color 0.2s, background 0.2s;
    }
    .about-policies__item:hover {
        border-color: #b90216;
        background: #fff5f6;
    }
    .about-policies__item svg { flex-shrink: 0; color: #b90216; }
    .about-policies__item span {
        color: #0f172a;
        font-weight: 600;
        font-size: 0.95rem;
    }

    /* ── Footer ── */
    .about-footer {
        background: #0f172a;
    }
    .about-footer .section-container {
        max-width: 1100px;
        margin: 0 auto;
        padding: 28px 32px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 16px;
    }
    .about-footer__copy {
        color: #64748b;
        font-size: 0.875rem;
    }
    .about-footer__icons { display: flex; gap: 12px; }
    .about-footer__icons a {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 32px; height: 32px;
        border-radius: 50%;
        background: #1e293b;
        transition: background 0.2s;
    }
    .about-footer__icons a:hover { background: #b90216; }
    .about-footer__icons svg { fill: #94a3b8; width: 15px; height: 15px; }
    .about-footer__icons a:hover svg { fill: #fff; }

    /* ── Responsive ── */
    @media (max-width: 768px) {
        .about-who__grid,
        .about-mission__grid { grid-template-columns: 1fr; gap: 32px; }
        .about-mission__image { order: 0; }
        .about-committee__grid { grid-template-columns: repeat(auto-fill, minmax(140px, 1fr)); }
        .about-footer .section-container { flex-direction: column; align-items: flex-start; }
    }

    /* ── Entrance animation ── */
    .is-before { opacity: 0; transform: translateY(24px); transition: opacity 0.6s ease, transform 0.6s ease; }
    .is-before.is-visible { opacity: 1; transform: translateY(0); }
</style>

<!-- ══════════════════════════════
     HERO BANNER
══════════════════════════════ -->
<section class="about-hero">
    <div class="section-container">
        <p class="about-hero__eyebrow">// E-sport Federation Cambodia //</p>
        <p class="about-hero__sub">About EFC</p>
        <h1>Who We Are &amp;<br><span>Our Mission</span></h1>
    </div>
</section>

<!-- ══════════════════════════════
     WHO WE ARE
══════════════════════════════ -->
<section class="about-who">
    <div class="about-section is-before">
        <div class="about-who__grid">
            <div>
                <p class="about-who__eyebrow">// who we are //</p>
                <h2>From ranked queues to<br>the national crest.</h2>
                <p>
                    The <strong>E-sport Federation Cambodia (EFC)</strong> is the recognised national governing body for esports in Cambodia and a member of the <strong>National Olympic Committee of Cambodia (NOCC)</strong>. Founded in 2014, EFC is mandated to promote and develop esports domestically while supporting high-performance Cambodian athletes at regional and international competitions.
                </p>
                <p>
                    As the national federation, EFC oversees player selection, training structures, and codes of conduct for all Team Cambodia esports athletes — ensuring that those who wear the flag meet both performance and professionalism standards.
                </p>
                <p>
                    EFC is a proud member of the <strong>International Esports Federation (IESF)</strong>, the <strong>Asian Electronic Sports Federation (AESF)</strong>, and the <a href="https://www.globalesports.org/" style="color:#b90216;font-weight:600;">Global Esports Federation (GEF)</a>.
                </p>
                <a href="#" class="about-who__cta">
                    EFC Constitution
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/>
                    </svg>
                </a>
            </div>
            <div>
                <img
                    class="about-who__image"
                    src="https://esportsfc.org.kh/wp-content/uploads/2026/05/MPL-Cambodia-season-101.jpg"
                    alt="EFC Cambodia team at competition"
                    onerror="this.src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSoFCdWwG2xWtJAGkuXd0Mq7IWz1SJOhO497g&s'"
                >
            </div>
        </div>
    </div>
</section>

<!-- ══════════════════════════════
     BEYOND THE GAME
══════════════════════════════ -->
<section class="about-mission">
    <div class="about-section is-before">
        <div class="about-mission__grid">
            <img
                class="about-mission__image"
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRFXoQGh447CBHZllDGAA82b1wMbtyK6Z5IrQ&s"
                alt="Cambodia Esports national team"
                onerror="this.src='https://ih1.redbubble.net/image.2678650286.8580/st,small,507x507-pad,600x600,f8f8f8.jpg'"
            >
            <div class="about-mission__text">
                <h2>Beyond the game:<br>Cambodia's esports mission.</h2>
                <p>
                    EFC coordinates national team selections, appoints coaches and team managers, and sends Cambodian esports athletes to major events such as the <strong>Southeast Asian Games</strong>, <strong>Asian Games</strong>, and other international federation world championships and regional tournaments.
                </p>
                <p>
                    Beyond sending teams, EFC works with event organisers, publishers, and government-linked partners to align participation with long-term performance plans, athlete welfare, and integrity requirements such as anti-doping and match-fixing safeguards.
                </p>
                <p>
                    EFC also engages local clubs, event partners, and schools to build pathways for aspiring players — from open qualifiers and national leagues through to national squad trials.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ══════════════════════════════
     EXECUTIVE COMMITTEE
══════════════════════════════ -->
<section class="about-committee">
    <div class="about-section is-before">
        <p class="about-committee__eyebrow">// Our People //</p>
        <h2>Executive Committee</h2>

        <p class="about-committee__sub-heading">Leadership</p>
        <div class="about-committee__grid">

            <!-- Card: President -->
            <div class="about-committee__card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSoFCdWwG2xWtJAGkuXd0Mq7IWz1SJOhO497g&s" alt="EFC President">
                <p class="card-name">Lun Samedy</p>
                <p class="card-role">President</p>
                <a href="https://www.linkedin.com/in/lun-samedy-a8ba1716a/" target="_blank" aria-label="LinkedIn">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="-4 -2 32 32"><path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"/></svg>
                </a>
            </div>

            <!-- Card: Vice President -->
            <div class="about-committee__card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSoFCdWwG2xWtJAGkuXd0Mq7IWz1SJOhO497g&s" alt="Vice President">
                <p class="card-name">Vice President</p>
                <p class="card-role">Vice President</p>
                <a href="#" target="_blank" aria-label="LinkedIn">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="-4 -2 32 32"><path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"/></svg>
                </a>
            </div>

            <!-- Card: Secretary -->
            <div class="about-committee__card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSoFCdWwG2xWtJAGkuXd0Mq7IWz1SJOhO497g&s" alt="Secretary">
                <p class="card-name">Secretary</p>
                <p class="card-role">Secretary</p>
                <a href="#" target="_blank" aria-label="LinkedIn">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="-4 -2 32 32"><path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"/></svg>
                </a>
            </div>

            <!-- Card: Treasurer -->
            <div class="about-committee__card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSoFCdWwG2xWtJAGkuXd0Mq7IWz1SJOhO497g&s" alt="Treasurer">
                <p class="card-name">Treasurer</p>
                <p class="card-role">Treasurer</p>
                <a href="#" target="_blank" aria-label="LinkedIn">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="-4 -2 32 32"><path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"/></svg>
                </a>
            </div>

            <!-- Card: Committee Member 1 -->
            <div class="about-committee__card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSoFCdWwG2xWtJAGkuXd0Mq7IWz1SJOhO497g&s" alt="Committee Member">
                <p class="card-name">Committee Member</p>
                <p class="card-role">Executive Committee</p>
                <a href="#" target="_blank" aria-label="LinkedIn">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="-4 -2 32 32"><path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"/></svg>
                </a>
            </div>

            <!-- Card: Committee Member 2 -->
            <div class="about-committee__card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSoFCdWwG2xWtJAGkuXd0Mq7IWz1SJOhO497g&s" alt="Committee Member">
                <p class="card-name">Committee Member</p>
                <p class="card-role">Executive Committee</p>
                <a href="#" target="_blank" aria-label="LinkedIn">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="-4 -2 32 32"><path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"/></svg>
                </a>
            </div>

        </div>

        <p class="about-committee__sub-heading">Secretariat</p>
        <div class="about-committee__grid">

            <div class="about-committee__card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSoFCdWwG2xWtJAGkuXd0Mq7IWz1SJOhO497g&s" alt="Secretary General">
                <p class="card-name">Secretary General</p>
                <p class="card-role">Secretary General</p>
                <a href="#" target="_blank" aria-label="LinkedIn">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="-4 -2 32 32"><path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"/></svg>
                </a>
            </div>

            <div class="about-committee__card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSoFCdWwG2xWtJAGkuXd0Mq7IWz1SJOhO497g&s" alt="Programme Manager">
                <p class="card-name">Programme Manager</p>
                <p class="card-role">Programme Manager</p>
                <a href="#" target="_blank" aria-label="LinkedIn">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="-4 -2 32 32"><path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"/></svg>
                </a>
            </div>

        </div>
    </div>
</section>

<!-- ══════════════════════════════
     POLICIES & HANDBOOK
══════════════════════════════ -->
<section class="about-policies">
    <div class="about-section is-before">
        <p class="about-policies__eyebrow">// Play fair. Play safe. Play for Cambodia. //</p>
        <h2>Policies &amp; Handbook</h2>
        <div class="about-policies__list">

            <a href="#" class="about-policies__item" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                <span>Safe Sport Policy</span>
            </a>

            <a href="#" class="about-policies__item" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                <span>Safe Sport Online Reporting Form</span>
            </a>

            <a href="#" class="about-policies__item" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                <span>Response and Resolution Process</span>
            </a>

            <a href="#" class="about-policies__item" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                <span>Contact EFC's Safe Sport Officer</span>
            </a>

            <a href="#" class="about-policies__item" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                <span>Anti-Doping Statement</span>
            </a>

        </div>
    </div>
</section>

<!-- ══════════════════════════════
     FOOTER
══════════════════════════════ -->
<footer class="about-footer">
    <div class="section-container">
        <span class="about-footer__copy">© 2026 E-sport Federation Cambodia. All rights reserved.</span>
        <div class="about-footer__icons">
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

<!-- ══════════════════════════════
     Scroll entrance animation
══════════════════════════════ -->
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