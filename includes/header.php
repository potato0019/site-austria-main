<!doctype html>
<html lang="pt-BR" class="scroll-smooth">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#171313">
  <meta name="description" content="Descubra a Áustria: cultura, lendas, história e paisagens dos Alpes a Viena.">
  <title>Áustria — Uma viagem pela história</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            aus: '#D92736',
            paper: '#F1EEE8',
            night: '#171313',
            muted: '#A9A29A'
          },
          fontFamily: {
            sans: ['Arial', 'Helvetica Neue', 'sans-serif'],
            serif: ['Georgia', 'serif']
          }
        }
      }
    };
  </script>
  <style>
    :root { color-scheme: dark; }
    * { box-sizing: border-box; }
    body { background:#171313; }
    .hero-image { background-image:linear-gradient(90deg,rgba(12,10,10,.62),rgba(12,10,10,.12)),linear-gradient(0deg,rgba(12,10,10,.42),transparent 48%),url('https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&w=2400&q=90'); }
    .vienna-image { background-image:linear-gradient(90deg,rgba(14,12,12,.78),rgba(14,12,12,.12)),url('https://images.unsplash.com/photo-1516550893923-42d28e5677af?auto=format&fit=crop&w=2000&q=85'); }
    .identity-image { background-image:url('https://images.unsplash.com/photo-1519681393784-d120267933ba?auto=format&fit=crop&w=1400&q=85'); }
    .legend-image { background-image:url('https://images.unsplash.com/photo-1511497584788-876760111969?auto=format&fit=crop&w=1400&q=85'); }
    .reveal { opacity:0; transform:translateY(24px); transition:opacity .7s ease,transform .7s ease; }
    .reveal.is-visible { opacity:1; transform:translateY(0); }
    .nav-scrolled { background:rgba(23,19,19,.92); backdrop-filter:blur(14px); border-bottom:1px solid rgba(255,255,255,.1); }
    .menu-link { position:relative; }
    .menu-link:after { content:"";position:absolute;left:0;bottom:-7px;width:0;height:1px;background:#fff;transition:width .25s; }
    .menu-link:hover:after { width:100%; }
    .year-button[aria-pressed="true"] { background:#D92736;color:#fff; }
    @media (prefers-reduced-motion:reduce) { *,*::before,*::after {animation:none!important;transition:none!important;scroll-behavior:auto!important}.reveal{opacity:1;transform:none} }
  
    html { scroll-padding-top: 5rem; }
    body { overflow-x: hidden; }
    img { max-width: 100%; }
    button, a { -webkit-tap-highlight-color: transparent; }
    :focus-visible { outline: 2px solid #D92736; outline-offset: 3px; }
    #legend-modal { overscroll-behavior: contain; }
    .year-button { scroll-snap-align: start; }
    @media (max-width: 639px) {
      .hero-image { background-position: 56% center; }
      .vienna-image { background-position: 58% center; }
      #legend-modal { padding: .65rem; }
      #legend-modal > div { max-height: 94dvh; }
      .reveal { transform: translateY(14px); }
    }
    @media (prefers-reduced-motion: reduce) {
      html { scroll-behavior: auto; }
    }
  </style>
</head>
<body class="font-sans text-white antialiased selection:bg-aus selection:text-white">
<header id="site-header" class="fixed inset-x-0 top-0 z-50 transition-all duration-300">
  <div class="mx-auto flex h-[76px] max-w-[1440px] items-center justify-between px-5 md:px-10">
    <a href="#inicio" class="text-xs font-black tracking-[.34em]">ÁUSTRIA<span class="text-aus">.</span></a>
    <nav class="hidden items-center gap-7 lg:flex">
              <a class="menu-link text-[10px] font-bold uppercase tracking-[.16em] text-white/80 hover:text-white" href="#identidade">Identidade</a>
              <a class="menu-link text-[10px] font-bold uppercase tracking-[.16em] text-white/80 hover:text-white" href="#lendas">Lendas</a>
              <a class="menu-link text-[10px] font-bold uppercase tracking-[.16em] text-white/80 hover:text-white" href="#capsula">História</a>
              <a class="menu-link text-[10px] font-bold uppercase tracking-[.16em] text-white/80 hover:text-white" href="#viena">Viena</a>
              <a class="menu-link text-[10px] font-bold uppercase tracking-[.16em] text-white/80 hover:text-white" href="#curiosidades">Curiosidades</a>
          </nav>
    <button id="burger" class="flex h-10 w-10 items-center justify-center border border-white/30 text-xl lg:hidden" aria-label="Abrir menu" aria-expanded="false">☰</button>
  </div>
  <nav id="mobile" class="hidden border-t border-white/10 bg-night/95 px-6 pb-6 pt-2 backdrop-blur-xl lg:hidden">
          <a class="block border-b border-white/10 py-4 text-xs font-bold uppercase tracking-[.18em]" href="#identidade">Identidade</a>
          <a class="block border-b border-white/10 py-4 text-xs font-bold uppercase tracking-[.18em]" href="#lendas">Lendas</a>
          <a class="block border-b border-white/10 py-4 text-xs font-bold uppercase tracking-[.18em]" href="#capsula">História</a>
          <a class="block border-b border-white/10 py-4 text-xs font-bold uppercase tracking-[.18em]" href="#viena">Viena</a>
          <a class="block border-b border-white/10 py-4 text-xs font-bold uppercase tracking-[.18em]" href="#curiosidades">Curiosidades</a>
      </nav>
</header>