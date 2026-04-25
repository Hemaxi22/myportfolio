<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Hemaxi Rathod | Laravel Developer Portfolio</title>
    <meta name="description" content="Premium portfolio of Hemaxi Rathod, Laravel Developer from Surat with experience in PHP, MySQL, AWS, SEO, and scalable web applications.">
    <meta property="og:title" content="Hemaxi Rathod | Laravel Developer Portfolio">
    <meta property="og:description" content="Explore projects, skills, and experience of Hemaxi Rathod, Laravel and PHP Developer.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('images/og-image.jpg') }}">
    <meta name="robots" content="index,follow">
    <script type="application/ld+json">
        {!! json_encode([
            '@context' => 'https://schema.org',
            '@type' => 'Person',
            'name' => 'Hemaxi Rathod',
            'jobTitle' => 'Laravel Developer',
            'email' => 'hemaxirathod131@gmail.com',
            'telephone' => '+918238342040',
            'address' => [
                '@type' => 'PostalAddress',
                'addressLocality' => 'Surat',
                'addressRegion' => 'Gujarat',
                'addressCountry' => 'India',
            ],
            'url' => url('/'),
            'sameAs' => ['https://www.linkedin.com/in/hemaxi-rathod-ba0048278'],
        ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        :root { color-scheme: dark; }
        html, body { background: #000 !important; }
        .exact-nav-wrap { width: min(1200px, 92vw); margin: 0 auto; display: flex; align-items: center; justify-content: space-between; padding: 16px 0; }
        .exact-logo { font-size: 22px; font-weight: 600; letter-spacing: -0.4px; text-decoration: none; line-height: 1; }
        .exact-logo .name-text { background: linear-gradient(90deg, #7c8cff, #9d86ff, #7dd3fc);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent; }
        .exact-logo .dot-text { color: #fff; }
        .exact-nav-links { display: flex; align-items: center; gap: 28px; }
        .exact-nav-links a { text-decoration: none; color: #d6d9e0; font-size: 15px; font-weight: 500; position: relative; }
        .exact-nav-links a::after { content: ""; position: absolute; left: 0; bottom: -6px; width: 0; height: 2px; background: linear-gradient(90deg,#7c8cff,#a78bfa); transition: width .2s ease; }
        .exact-nav-links a:hover::after { width: 100%; }
        .exact-nav-links a:hover { color: #fff; }
        .exact-resume { border-radius: 6px; background: #fff; color: #000 !important; border: 1px solid #d1d5db; padding: 6px 18px; font-weight: 700 !important; }

        .exact-hero { min-height: calc(100vh - 85px); display: flex; align-items: center; justify-content: center; text-align: center; }
        .exact-badge { margin: 0 auto 24px; width: fit-content; display: inline-flex; align-items: center; gap: 10px; padding: 8px 16px; border-radius: 999px; border: 1px solid rgba(255,255,255,.2); background: rgba(10,15,25,.7); font-size: 13px; }
        .exact-badge-dot { position: relative; width: 10px; height: 10px; border-radius: 999px; background: #22c55e; display: inline-block; }
        .exact-badge-dot::after { content: ""; position: absolute; inset: -5px; border-radius: 999px; border: 1px solid rgba(34,197,94,.45); animation: badgePulse 1.8s infinite; }
        @keyframes badgePulse { 0% { transform: scale(.7); opacity: .85; } 50% { transform: scale(1.2); opacity: .5; } 100% { transform: scale(1.5); opacity: 0; } }
        .exact-hero-title { font-size: clamp(48px, 8vw, 96px); font-weight: 900; line-height: 1.05; letter-spacing: -1px; }
        .exact-hero-name { background: linear-gradient(90deg,#7c8cff,#9d86ff,#7dd3fc); -webkit-background-clip: text; background-clip: text; color: transparent; }
        .exact-hero-subtitle { margin-top: 16px; font-size: clamp(24px, 3vw, 32px); font-weight: 800; color: #fff; }
        .exact-hero-desc { margin: 20px auto 0; max-width: 600px; color: #b7bdcc; font-size: 18px; line-height: 1.6; }
        .exact-hero-cta { margin-top: 30px; display: flex; justify-content: center; gap: 12px; flex-wrap: wrap; }
        .exact-btn { border-radius: 8px; padding: 9px 18px; font-weight: 700; text-decoration: none; font-size: 15px; border: 1px solid transparent; transition: all 0.4s cubic-bezier(0.23, 1, 0.32, 1); }
        .exact-btn:hover { transform: translateY(-4px) scale(1.02); box-shadow: 0 15px 30px rgba(124,140,255,0.2); }
        .exact-btn-primary { background: #fff; color: #000; }
        .exact-btn-gradient { background: linear-gradient(90deg,#6366F1,#8B5CF6); color: #fff; }
        .exact-btn-ghost { border-color: rgba(255,255,255,.25); color: #fff; background: transparent; }

        /* Custom Animations */
        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(0); }
            50% { transform: translateY(-15px) rotate(1deg); }
        }

        @keyframes morph {
            0%, 100% { border-radius: 42% 58% 70% 30% / 45% 45% 55% 55%; transform: translate(0, 0) scale(1); }
            34% { border-radius: 70% 30% 46% 54% / 30% 29% 71% 70%; transform: translate(5vw, 5vh) scale(1.1); }
            50% { transform: translate(3vw, -2vh) scale(1); }
            67% { border-radius: 100% 60% 60% 100% / 100% 100% 60% 60%; transform: translate(-4vw, 3vh) scale(0.9); }
        }

        .hero-bg-blob {
            position: absolute;
            width: 600px;
            height: 600px;
            background: linear-gradient(135deg, rgba(99, 102, 241, 0.12), rgba(168, 85, 247, 0.12));
            filter: blur(100px);
            z-index: -1;
            animation: morph 20s ease-in-out infinite;
        }

        .hero-bg-blob-1 { top: -10%; left: -10%; }
        .hero-bg-blob-2 { bottom: -10%; right: -10%; animation-delay: -7s; }

        /* .exact-badge { animation: float 6s ease-in-out infinite; } */

        .typing-cursor {
            display: inline-block;
            width: 2px;
            height: 0.8em;
            background-color: #8b5cf6;
            margin-left: 2px;
            animation: blink 1s step-end infinite;
            vertical-align: middle;
        }

        @keyframes blink {
            from, to { opacity: 1; }
            50% { opacity: 0; }
        }


        .exact-about-subtitle { color: #aeb5c4; font-size: 16px; font-weight: 500;  margin: 0 auto; }
        .exact-about-grid { margin-top: 28px; display: grid; grid-template-columns: 1fr 1fr; gap: 24px; }
        .exact-about-card { border-radius: 18px; border: 1px solid rgba(255,255,255,.16); background: rgba(255,255,255,.04); padding: 24px; }
        .exact-about-text { color: #d6dae3; line-height: 1.7; }
        .exact-exp-chip { margin-top: 18px; border-radius: 16px; border: 1px solid #9a8eff1c; background: #9a8eff1c; padding: 16px; display: flex; gap: 14px; align-items: flex-start; }
        .exact-exp-num { color: #818bff; font-size: 48px; line-height: 1; font-weight: 800; }
        .exact-exp-meta { color: #eef3f9; line-height: 1.3; }
        .exact-exp-small { margin-top: 6px; font-size: 13px; color: #818bff; }
        .exact-work-title { font-size: 24px; font-weight: 800; margin-bottom: 14px; color: #fff; text-align: left; }
        .exact-work-list { display: grid; gap: 10px; }
        .exact-work-item { display: flex; align-items: center; gap: 10px; border-radius: 12px; border: 1px solid rgba(255,255,255,.14); background: rgba(255,255,255,.04); padding: 14px; color: #e9edf4; }
        .exact-work-item.active { border-color: #818bff; }
        .exact-check { width: 20px; height: 20px; border-radius: 999px; border: 1px solid #818bff; color: #818bff; display: inline-flex; align-items: center; justify-content: center; font-size: 12px; }

        .section-subtitle { text-align: center; margin: 0 auto; max-width: 760px; color: #b8c0ce; }
        .section-title { letter-spacing: -.02em; }
        .skills-grid > article { display: flex; flex-direction: column; }
        .skill-item { border-radius: 12px; border: 1px solid rgba(255,255,255,.12); background: rgba(255,255,255,.03); padding: 14px; text-align: center; color: #e2e8f0; transition: transform .2s ease, border-color .2s ease, background .2s ease; }
        .skill-item:hover { transform: translateY(-4px) scale(1.01); border-color: rgba(139,92,246,.6); background: rgba(139,92,246,.08); }
        .timeline-wrap { max-width: 700px; margin: 28px auto 0; text-align: left; }
        .timeline-track { position: relative; padding-left: 40px; }
        .timeline-track::before { content: ""; position: absolute; left: 12px; top: 0; bottom: 0; width: 2px; background: linear-gradient(180deg, rgba(139,92,246,.95), rgba(34,211,238,.4)); }
        .timeline-dot { position: absolute; left: -35px; top: 45px; width: 14px; height: 14px; border-radius: 999px; border: 2px solid #0a0a0a; background: #8b5cf6; box-shadow: 0 0 0 5px rgba(139,92,246,.25); }
        .exp-card { position: relative; padding: 40px 30px 40px 30px; border: 1px solid rgba(255,255,255,.14); background: linear-gradient(165deg, rgba(255,255,255,.05), rgba(255,255,255,.02)); transition: all 0.4s cubic-bezier(0.23, 1, 0.32, 1); }
        .exp-card:hover { transform: translateY(-8px) scale(1.01); border-color: rgba(139,92,246,.45); box-shadow: 0 20px 40px rgba(0,0,0,0.4); }
        .exp-role-row { display: flex; align-items: center; gap: 15px; }
        .exp-role-title { padding-right: 168px; line-height: 1.30; }
        .exp-role-title-gradient { background: linear-gradient(90deg, #7c8cff, #a78bfa, #7dd3fc); -webkit-background-clip: text; background-clip: text; color: transparent; }
        .exp-company-row { margin-top: 15px; display: flex; align-items: center; gap: 15px; color: #c4b5fd; font-weight: 600; }
        .exp-company-row-white { color: #fff; }
        .exp-company-icon { width: 16px; height: 16px; color: #a78bfa; flex-shrink: 0; }
        .exp-meta-row { margin-top: 8px; display: flex; align-items: center; gap: 8px; color: #cbd5e1; font-size: 14px; }
        .exp-meta-icon { width: 16px; height: 16px; color: #7dd3fc; flex-shrink: 0; }
        .exp-date-badge { position: absolute; right: 16px; top: 32px; border-radius: 9px; border: 1px solid rgba(255,255,255,.24); background: rgba(21,8,20,1); color:rgb(171, 172, 174); font-size: 14px; font-weight: 500; padding: 7px 11px; line-height: 1.2; white-space: nowrap; }
        .exp-points { margin-top: 16px; display: grid; gap: 15px; }
        .exp-point { display: flex; align-items: flex-start; gap: 15px; color: rgb(171, 172, 174); }
        .exp-point-icon { width: 15px; height: 15px; color: #8b5cf6; margin-top: 5px; flex-shrink: 0;  }
        .project-grid { margin-top: 26px; }
        .project-card { text-align: left; border: 1px solid rgba(255,255,255,.14); background: linear-gradient(160deg, rgba(255,255,255,.05), rgba(255,255,255,.02)); transition: transform .2s ease, border-color .2s ease, box-shadow .2s ease; }
        .project-card:hover { transform: translateY(-4px); border-color: rgba(139,92,246,.45); box-shadow: 0 18px 35px rgba(2,6,23,.35); }
        .project-card h3 { text-align: left; }
        .project-title-row { display: flex; align-items: center; gap: 10px; }
        .project-title-icon { width: 20px; height: 20px; color: #a78bfa; flex-shrink: 0; }
        .project-desc { margin-top: 12px; color: rgb(171, 172, 174); line-height: 1.75; font-size: 15px; font-weight: 500; }
        .project-list { margin-top: 14px; }
        .project-point { display: flex; align-items: flex-start; gap: 10px; color: rgb(171, 172, 174); line-height: 1.7; }
        .project-point-icon { width: 15px; height: 15px; color: #8b5cf6; margin-top: 4px; flex-shrink: 0; }
        .project-tech { margin-top: 18px; }
        .project-tech-item { border-radius: 999px; border: 1px solid rgba(167, 139, 250, 0.35); background: rgba(139, 92, 246, 0.14); padding: 6px 12px; font-size: 12px; color: #ddd6fe; font-weight: 600; letter-spacing: .02em; }
        .edu-grid { margin-top: 24px; }
        .edu-card { text-align: left; padding: 22px; }
        .edu-header { display: flex; align-items: flex-start; gap: 12px; }
        .edu-icon { width: 22px; height: 22px; color: #a78bfa; margin-top: 2px; flex-shrink: 0; }
        .edu-school { margin-top: 8px; color: #c4b5fd; font-weight: 600; }
        .edu-time { margin-top: 10px; display: inline-flex; align-items: center; gap: 8px; border-radius: 999px; border: 1px solid rgba(255,255,255,.14); background: rgba(255,255,255,.03); padding: 8px 12px; font-size: 13px; color: #cbd5e1; }
        .edu-time svg { width: 14px; height: 14px; color: #7dd3fc; }
        .contact-center-wrap { max-width: 980px; margin: 30px auto 0; }
        .contact-shell { display: grid; grid-template-columns: 1fr 1.1fr; gap: 0; overflow: hidden; border-radius: 24px; border: 1px solid rgba(255,255,255,.14); box-shadow: 0 22px 44px rgba(2,6,23,.45); }
        .contact-left { padding: 36px 34px; text-align: left; border-right: 1px solid rgba(255,255,255,.1); background: linear-gradient(165deg, rgba(15,23,42,.35), rgba(2,6,23,.05)); }
        .contact-form-wrap { padding: 30px; text-align: left; background: linear-gradient(165deg, rgba(14,22,35,.45), rgba(2,6,23,.1)); }
        .contact-big-title { font-size: clamp(20px, 5vw, 30px); font-weight: 600; line-height: 1.40; color: #fff; letter-spacing: -.02em; }
        .contact-desc { margin-top: 16px; max-width: 460px; color: #b7beca; line-height: 1.8; font-size: 16px; }
        .contact-links { margin-top: 28px; display: flex; flex-direction: column; gap: 0; max-width: 520px; }
        .contact-link-row { display: flex; align-items: center; gap: 18px; color: #d6d9e0; text-decoration: none; padding: 0; transition: opacity .2s ease; }
        .contact-link-row:hover { opacity: .9; }
        .contact-link-icon-wrap { width: 50px; height: 50px; border-radius: 14px; display: inline-flex; align-items: center; justify-content: center; background: rgba(255,255,255,.08); border: 1px solid rgba(255,255,255,.08); box-shadow: inset 0 1px 0 rgba(255,255,255,.03); }
        .contact-link-row svg { width: 28px; height: 28px; color: #cfd8dc; }
        .contact-email-text { font-size: 17px; font-weight: 600; letter-spacing: 0; color: #cfd3d7; line-height: 1.2; }
        .contact-divider { margin: 22px 0; border: 0; border-top: 1px solid rgba(255,255,255,.14); }
        .contact-linkedin-row { width: 72px; }
        .contact-linkedin-row .contact-link-icon-wrap { width: 50px; height: 50px; border-radius: 12px; background: rgba(255,255,255,.06); }
        .contact-linkedin-row svg { width: 26px; height: 26px; color: #9ca3af; }
        @media (max-width: 900px) {
            .exact-nav-wrap { width: 94vw; }
            .exact-about-grid { grid-template-columns: 1fr; }
            .exact-nav-links { display: none; } /* Hide regular links */
            .exact-nav-links.mobile-active { 
                display: flex; 
                flex-direction: column; 
                position: absolute; 
                top: 70px; 
                left: 0; 
                width: 100%; 
                background: rgba(0,0,0,0.95); 
                padding: 30px; 
                border-bottom: 1px solid rgba(255,255,255,0.1);
                backdrop-blur: 20px;
                gap: 20px;
                align-items: center;
                z-index: 100;
            }
            .mobile-menu-toggle { display: block !important; }
            
            .timeline-track { padding-left: 26px; }
            .timeline-track::before { left: 6px; }
            .timeline-dot { left: -25px; }
            .exp-role-title { padding-right: 0; }
            .exp-date-badge { position: static; display: inline-flex; margin-bottom: 10px; }
            .contact-shell { grid-template-columns: 1fr; }
            .contact-left { border-right: 0; border-bottom: 1px solid rgba(255,255,255,.1); padding: 24px; }
            .contact-form-wrap { padding: 24px; }
            .contact-email-text { font-size: 18px; word-break: break-all; }
            .contact-link-icon-wrap { width: 50px; height: 50px; }
            .contact-link-row svg { width: 22px; height: 22px; }
            .contact-linkedin-row { width: 50px; }
            
        }

        @media (max-width: 640px) {
            .exact-hero { padding: 40px 0; min-height: auto; }
            .exact-hero-title { font-size: 42px; }
            .exact-hero-subtitle { font-size: 20px; }
            .exact-hero-desc { font-size: 16px; }
            .exact-hero-cta { width: 100%; }
            .exact-hero-cta .exact-btn { width: fit-content; text-align: center; justify-content: center; }
            .section-wrap { padding: 60px 0; }
            .section-title { font-size: 28px; }
            .exact-about-card { padding: 20px; }
            .exact-exp-num { font-size: 36px; }
            .project-card { padding: 20px; }
            .edu-card { padding: 15px; }
            main{
                padding:20px;
            }
        }

        .mobile-menu-toggle {
            display: none;
            background: none;
            border: 1px solid rgba(255,255,255,0.2);
            padding: 8px;
            border-radius: 8px;
            color: #fff;
            cursor: pointer;
        }

        .section-wrap{
            padding:90px 0;
        }
    </style>
</head>
<body class="premium-bg bg-black text-white selection:bg-violet-500/50">
    <div id="loader" class="fixed inset-0 z-[100] flex items-center justify-center bg-slate-950">
        <div class="h-16 w-16 animate-spin rounded-full border-4 border-violet-400 border-t-transparent"></div>
    </div>
    <div class="cursor-glow"></div>
    <div id="particles"></div>

    <header class="sticky top-0 z-50 border-b border-white/10 backdrop-blur-xl">
        <nav class="exact-nav-wrap">
            <a href="#hero" class="exact-logo">
                <span class="name-text">Hemaxi Rathod</span><span class="dot-text"></span>
            </a>
            <button id="mobile-toggle" class="mobile-menu-toggle" aria-label="Toggle Menu">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg>
            </button>
            <div class="exact-nav-links" id="nav-menu">
                @foreach (['about' => 'About', 'skills' => 'Skills', 'projects' => 'Projects', 'experience' => 'Experience', 'contact' => 'Contact'] as $id => $label)
                    <a href="#{{ $id }}" class="nav-link">{{ $label }}</a>
                @endforeach
                <a href="{{ $resumePath ? asset($resumePath) : '#resume' }}" class="exact-resume" download>Resume</a>
            </div>
        </nav>
    </header>

    <main class="relative z-10 overflow-hidden">
        <section id="hero" class="exact-hero relative mx-auto max-w-5xl px-6 py-20">
            <div class="hero-bg-blob hero-bg-blob-1"></div>
            <div class="hero-bg-blob hero-bg-blob-2"></div>
            
            <div data-aos="fade-up">
                <p class="exact-badge">
                    <span class="exact-badge-dot"></span>
                    Available for new opportunities
                </p>
                <h1 class="exact-hero-title">
                    <span class="text-white">Hi, I'm </span>
                    <span class="exact-hero-name">Hemaxi</span>
                </h1>
                <h2 class="exact-hero-subtitle">
                    <span id="typing-text"></span><span class="typing-cursor"></span>
                </h2>
                <p class="exact-hero-desc">Building scalable APIs and reliable backend systems for modern web applications.</p>

                <div class="exact-hero-cta">
                    <a href="#projects" class="exact-btn exact-btn-primary">View Projects &rarr;</a>
                    <a href="#contact" class="exact-btn exact-btn-gradient">Contact Me</a>
                    <a href="{{ $resumePath ? asset($resumePath) : '#resume' }}" class="exact-btn exact-btn-ghost inline-flex items-center gap-2" download>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                            <polyline points="7 10 12 15 17 10"></polyline>
                            <line x1="12" y1="15" x2="12" y2="3"></line>
                        </svg>
                        Resume
                    </a>
                </div>
            </div>
        </section>

        <section id="about" class="section-wrap" data-aos="fade-up">
            <h2 class="section-title">About Me</h2>
            <p class="exact-about-subtitle">My journey and strengths as a backend developer.</p>
            <div class="exact-about-grid">
                <article class="exact-about-card">
                    <p class="exact-about-text">Passionate backend developer focused on designing structured APIs, secure authentication systems, and efficient database-driven applications in PHP , Laravel.</p>
                    <div class="exact-exp-chip">
                        <p class="exact-exp-num">1</p>
                        <div class="exact-exp-meta">
                            <p>Years of</p>
                            <p>Backend Experience</p>
                            <p class="exact-exp-small">+ Internship Background</p>
                        </div>
                    </div>
                </article>
                <div class="text-left">
                    <h3 class="exact-work-title">Why Work With Me ?</h3>
                    <div class="exact-work-list">
                        @foreach ([
                            'API architecture & integration',
                            'Database design and optimization',
                            'Backend performance improvements',
                            'Authentication & security implementation',
                            'Clean MVC Architecture',
                        ] as $index => $reason)
                            <div class="exact-work-item {{ $index === 0 ? 'active' : '' }}">
                                <span class="exact-check">✓</span>
                                <span>{{ $reason }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <section id="skills" class="section-wrap mt-5   " data-aos="fade-up">
            <h2 class="section-title text-center">Technical Skills</h2>
            <p class="section-subtitle text-sm uppercase tracking-widest text-violet-300">Technologies and tools I work with</p>
            <div class="skills-grid mt-6 grid gap-6 lg:grid-cols-3">
                <article class="glass-card p-5">
                    <h3 class="mb-4 text-lg font-semibold">Backend Technologies</h3>
                    <div class="grid grid-cols-2 gap-3">
                        @foreach ([
                            ['PHP', 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg'],
                            ['Laravel', 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg'],
                            ['Symfony', 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/symfony/symfony-original.svg'],
                            ['REST APIs', 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/postman/postman-original.svg'],
                        ] as [$name, $logo])
                            <div class="skill-item">
                                <img src="{{ $logo }}" alt="{{ $name }} logo" class="mx-auto h-7 w-7 {{ $name === 'Symfony' ? 'rounded bg-white p-1' : '' }}">
                                <p class="mt-2">{{ $name }}</p>
                            </div>
                        @endforeach
                    </div>
                </article>
                <article class="glass-card p-5">
                    <h3 class="mb-4 text-lg font-semibold">Frontend & Database</h3>
                    <div class="grid grid-cols-2 gap-3">
                        @foreach ([
                            ['HTML5', 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg'],
                            ['Bootstrap', 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg'],
                            ['JavaScript', 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg'],
                            ['MySQL', 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg'],
                        ] as [$name, $logo])
                            <div class="skill-item">
                                <img src="{{ $logo }}" alt="{{ $name }} logo" class="mx-auto h-7 w-7">
                                <p class="mt-2">{{ $name }}</p>
                            </div>
                        @endforeach
                    </div>
                </article>
                <article class="glass-card p-5">
                    <h3 class="mb-4 text-lg font-semibold">Tools & Integrations</h3>
                    <div class="grid grid-cols-2 gap-3">
                        @foreach ([
                            ['Git', 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original.svg'],
                            ['Third Party APIs', 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/postman/postman-original.svg'],
                            ['AWS EC2', 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/amazonwebservices/amazonwebservices-original-wordmark.svg'],
                            ['AWS RDS', 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/amazonwebservices/amazonwebservices-original-wordmark.svg'],
                            ['SEO Basics', 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/google/google-original.svg'],
                        ] as [$name, $logo])
                            <div class="skill-item">
                                <img src="{{ $logo }}" alt="{{ $name }} logo" class="mx-auto h-7 w-7 object-contain">
                                <p class="mt-2">{{ $name }}</p>
                            </div>
                        @endforeach
                    </div>
                </article>
            </div>
        </section>

        <section id="experience" class="section-wrap mt-5" data-aos="fade-up">
            <h2 class="section-title text-center">Experience</h2>
            <p class="section-subtitle text-sm uppercase tracking-widest text-violet-300">My professional journey in backend development</p>
            <div class="timeline-wrap">
                <div class="timeline-track space-y-6">
                <div class="exp-card glass-card">
                    <span class="timeline-dot"></span>
                    <span class="exp-date-badge">5 June 2025 - Present</span>
                    <div class="exp-role-row">
                        <h3 class="exp-role-title exp-role-title-gradient text-xl font-semibold">Laravel Developer</h3>
                    </div>
                    <p class="exp-company-row exp-company-row-white">
                        <svg class="exp-company-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <rect x="2" y="7" width="20" height="14" rx="2"></rect>
                            <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                        </svg>
                        <span>Weapplinse Technology</span>
                    </p>
                    <ul class="exp-points mt-5">
                        <li class="exp-point">
                            <svg class="exp-point-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"></path></svg>
                            <span>Developed and maintained Laravel-based web applications.</span>
                        </li>
                        <li class="exp-point">
                            <svg class="exp-point-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"></path></svg>
                            <span>Implemented encrypted database storage for sensitive data.</span>
                        </li>
                        <li class="exp-point">
                            <svg class="exp-point-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"></path></svg>
                            <span>Worked on SEO optimization and AWS services.</span>
                        </li>
                    </ul>
                </div>
                <div class="exp-card glass-card">
                    <span class="timeline-dot !bg-sky-400"></span>
                    <span class="exp-date-badge">1 Jan 2025 - 5 June 2025</span>
                    <div class="exp-role-row">
                        <h3 class="exp-role-title exp-role-title-gradient text-xl font-semibold">Laravel Intern</h3>
                    </div>
                    <p class="exp-company-row exp-company-row-white">
                        <svg class="exp-company-icon !text-sky-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <rect x="2" y="7" width="20" height="14" rx="2"></rect>
                            <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                        </svg>
                        <span>Weapplinse Technology</span>
                    </p>
                    
                    <ul class="exp-points mt-5">
                        <li class="exp-point">
                            <svg class="exp-point-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"></path></svg>
                            <span>Assisted with live project modules and bug fixes.</span>
                        </li>
                        <li class="exp-point">
                            <svg class="exp-point-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"></path></svg>
                            <span>Worked on API integration and database updates.</span>
                        </li>
                        <li class="exp-point">
                            <svg class="exp-point-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"></path></svg>
                            <span>Supported responsive UI and workflow improvements.</span>
                        </li>
                    </ul>
                </div>
            </div>
            </div>
        </section>

        <section id="projects" class="section-wrap mt-5" data-aos="fade-up">
            <h2 class="section-title text-center">Featured Projects</h2>
            <p class="section-subtitle text-sm uppercase tracking-widest text-violet-300">A selection of my backend-focused work</p>
            <div class="project-grid grid gap-6 md:grid-cols-2">
                @foreach ($projects as $project)
                    @php
                        $titleKey = strtolower($project->title ?? '');
                        $customDescription = $project->description;
                        $projectHighlights = [
                            'Implemented feature enhancements and stable module architecture.',
                            'Improved operations, maintainability, and usability.',
                            'Focused on scalable and secure Laravel development patterns.',
                        ];

                        if (str_contains($titleKey, 'nettpage')) {
                            $customDescription = 'NettPage includes a structured main admin panel and a dedicated brand panel for content and business control.';
                            $projectHighlights = [
                                'Built role-based flows for main admin and brand panel users.',
                                'Managed module-level permissions and structured dashboard controls.',
                                'Improved panel usability for faster day-to-day operations.',
                            ];
                        } elseif (str_contains($titleKey, 'weapplinse')) {
                            $customDescription = 'Weapplinse project focused on web design quality and SEO-friendly implementation for better discoverability.';
                            $projectHighlights = [
                                'Improved UI structure with cleaner and responsive layouts.',
                                'Applied SEO best practices for metadata and page structure.',
                                'Optimized performance and readability for better user engagement.',
                            ];
                        } elseif (str_contains($titleKey, 'suttle') || str_contains($titleKey, 'shuttle')) {
                            $customDescription = 'Suttle Service is a route bus management application for handling trips, schedules, and route operations.';
                            $projectHighlights = [
                                'Implemented route and schedule management workflows.',
                                'Designed reliable booking and route tracking modules.',
                                'Streamlined transport operations with admin-focused controls.',
                            ];
                        } elseif (str_contains($titleKey, 'baps') && str_contains($titleKey, 'maint')) {
                            $customDescription = 'BAPS Maintenance app is focused on encrypted data handling and secure AWS-backed operations.';
                            $projectHighlights = [
                                'Managed encrypted database records for sensitive app data.',
                                'Integrated AWS services for secure and stable deployment workflows.',
                                'Handled maintenance features with reliability and data safety in mind.',
                            ];
                        } elseif (str_contains($titleKey, 'inherit')) {
                            $customDescription = 'Inherit is a will-document management platform with PDF integration and dynamic multi-step forms.';
                            $projectHighlights = [
                                'Built dynamic form flow for structured legal document submission.',
                                'Integrated PDF generation and processing for will documents.',
                                'Improved validation and workflow clarity for document accuracy.',
                            ];
                        }
                    @endphp
                    <article class="project-card glass-card p-6">
                        <div class="project-title-row">
                            <svg class="project-title-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <rect x="3" y="4" width="18" height="16" rx="2"></rect>
                                <path d="M8 2v4M16 2v4M3 10h18"></path>
                            </svg>
                            <h3 class="text-xl font-semibold">{{ $project->title }}</h3>
                        </div>
                        <p class="project-desc">{{ $customDescription }}</p>
                        <ul class="project-list space-y-3">
                            @foreach ($projectHighlights as $highlight)
                                <li class="project-point">
                                    <svg class="project-point-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"></path></svg>
                                    <span>{{ $highlight }}</span>
                                </li>
                            @endforeach
                        </ul>
                        <div class="project-tech flex flex-wrap gap-2">
                            @foreach ($project->tech_stack ?? [] as $tech)
                                <span class="project-tech-item">{{ $tech }}</span>
                            @endforeach
                        </div>
                    </article>
                @endforeach
            </div>
        </section>

        <section id="education" class="section-wrap mt-5" data-aos="fade-up">
            <h2 class="section-title text-center">Education</h2>
            <p class="section-subtitle text-sm uppercase tracking-widest text-violet-300">Academic foundation and continuous learning journey</p>
            <div class="edu-grid grid gap-4 md:grid-cols-2">
                <div class="edu-card glass-card">
                    <div class="edu-header">
                        <svg class="edu-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M22 10 12 5 2 10l10 5 10-5Z"></path>
                            <path d="M6 12v5c0 1.7 2.7 3 6 3s6-1.3 6-3v-5"></path>
                        </svg>
                        <h3 class="text-lg font-semibold">Master of Computer Applications (MCA)</h3>
                    </div>
                    <p class="edu-school">Jain University, Bengaluru</p>
                    <p class="edu-time">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"></rect><path d="M16 2v4M8 2v4M3 10h18"></path></svg>
                        <span>Jul 2025 - Present (Expected Jun 2027)</span>
                    </p>
                </div>
                <div class="edu-card glass-card">
                    <div class="edu-header">
                        <svg class="edu-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M22 10 12 5 2 10l10 5 10-5Z"></path>
                            <path d="M6 12v5c0 1.7 2.7 3 6 3s6-1.3 6-3v-5"></path>
                        </svg>
                        <h3 class="text-lg font-semibold">Bachelor of Computer Applications (BCA)</h3>
                    </div>
                    <p class="edu-school">Veer Narmad South Gujarat University, Surat</p>
                    <p class="edu-time">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"></rect><path d="M16 2v4M8 2v4M3 10h18"></path></svg>
                        <span>Jun 2021 - Feb 2025</span>
                    </p>
                </div>
            </div>
        </section>

        <section id="contact" class="section-wrap mt-5" data-aos="fade-up">
            <h2 class="section-title text-center">Get in Touch</h2>
            <p class="section-subtitle text-sm uppercase tracking-widest text-violet-300">Let's connect. I'm open to discussing backend opportunities.</p>
            <div class="contact-center-wrap">
                <div class="contact-shell glass-card">
                    <div class="contact-left">
                        <h3 class="contact-big-title">Let's build<br>something great.</h3>
                        <p class="contact-desc">Looking for a backend developer who understands system architecture? Feel free to reach out.</p>
                    <div class="contact-links">
                        <a href="mailto:hemaxirathod131@gmail.com" class="contact-link-row" aria-label="Send email to Hemaxi Rathod">
                            <span class="contact-link-icon-wrap" aria-hidden="true">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="M4 6h16a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2z"></path>
                                    <path d="m22 8-10 6L2 8"></path>
                                </svg>
                            </span>
                            <span class="contact-email-text">hemaxirathod131@gmail.com</span>
                        </a>
                        <hr class="contact-divider" aria-hidden="true">
                        <a href="https://www.linkedin.com/in/hemaxi-rathod-ba0048278" target="_blank" rel="noopener noreferrer" class="contact-link-row contact-linkedin-row" aria-label="Open LinkedIn profile">
                            <span class="contact-link-icon-wrap" aria-hidden="true">
                                <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <path d="M20.45 20.45h-3.55v-5.57c0-1.33-.03-3.04-1.85-3.04-1.85 0-2.14 1.45-2.14 2.95v5.66H9.36V9h3.41v1.56h.05c.48-.9 1.64-1.85 3.37-1.85 3.6 0 4.27 2.37 4.27 5.46v6.28zM5.34 7.43A2.06 2.06 0 1 1 5.34 3.3a2.06 2.06 0 0 1 0 4.12zM7.12 20.45H3.55V9h3.57v11.45z"></path>
                                </svg>
                            </span>
                        </a>
                    </div>
                    </div>
                <form action="{{ route('contact.store') }}" method="POST" class="contact-form-wrap space-y-4">
                    @csrf
                    <div class="space-y-2">
                        <label for="contact-name" class="text-md  text-slate-300">Your Name</label>
                        <input id="contact-name" name="name" value="{{ old('name') }}" type="text" placeholder="Enter your name" class="form-input-premium" required>
                    </div>
                    <div class="space-y-2">
                        <label for="contact-email" class="text-md text-slate-300">Email Address</label>
                        <input id="contact-email" name="email" value="{{ old('email') }}" type="email" placeholder="Enter your email address" class="form-input-premium" required>
                    </div>
                    <div class="space-y-2">
                        <label for="contact-phone" class="text-md text-slate-300">Phone (Optional)</label>
                        <input id="contact-phone" name="phone" value="{{ old('phone') }}" type="text" placeholder="Enter your phone number" class="form-input-premium">
                    </div>
                    <div class="space-y-2">
                        <label for="contact-subject" class="text-md text-slate-300">Subject</label>
                        <input id="contact-subject" name="subject" value="{{ old('subject') }}" type="text" placeholder="Write a short subject" class="form-input-premium" required>
                    </div>
                    <div class="space-y-2">
                        <label for="contact-message" class="text-md text-slate-300">Message</label>
                        <textarea id="contact-message" name="message" rows="5" placeholder="Tell me about your project or role" class="form-input-premium" required>{{ old('message') }}</textarea>
                    </div>
                    <button type="submit" class="glow-btn flex w-full items-center justify-center gap-2 p-4" style="font-size: 18px;font-weight: 500;">
                        <span>Send Message</span>
                        <svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="m22 2-7 20-4-9-9-4Z"></path>
                            <path d="M22 2 11 13"></path>
                        </svg>
                    </button>
                </form>
                </div>
            </div>
        </section>
    </main>

    <footer class="border-t border-white/10 py-8 text-center text-sm text-slate-300">
        <h3 class="text-lg font-semibold text-white">Hemaxi Rathod</h3>
        <div class="mt-3 flex flex-wrap justify-center gap-4 text-sm">
            <a href="#about" class="nav-link">About</a>
            <a href="#skills" class="nav-link">Skills</a>
            <a href="#projects" class="nav-link">Projects</a>
            <a href="#experience" class="nav-link">Experience</a>
            <a href="#contact" class="nav-link">Contact</a>
        </div>
        <p class="mt-3">© 2026 Hemaxi Rathod — Backend Developer</p>
    </footer>

    <button id="backToTop" class="back-top">Top</button>
</body>
</html>
