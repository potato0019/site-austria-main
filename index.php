<?php require __DIR__ . '/includes/header.php'; ?>

<style>
  /* Rolagem horizontal da linha do tempo por toque no mobile */
  #timeline-scroll {
    -webkit-overflow-scrolling: touch;
    overscroll-behavior-x: contain;
    touch-action: pan-x;
    scrollbar-width: none;
  }
  #timeline-scroll::-webkit-scrollbar { display: none; }
  @media (max-width: 767px) {
    #timeline-scroll {
      display: block;
      width: 100%;
      max-width: 100%;
      overflow-x: scroll !important;
      overflow-y: hidden;
      scroll-behavior: smooth;
    }
    #timeline-scroll > div {
      display: flex;
      width: max-content;
      min-width: max-content;
    }
  }
</style>


<main class="overflow-hidden">

  <!-- HERO -->
  <section id="inicio" class="hero-image relative flex min-h-[680px] h-[100svh] max-h-[1000px] items-end overflow-hidden bg-cover bg-center px-5 pb-16 pt-28 sm:px-6 md:pb-28">

    <div class="absolute inset-0 bg-gradient-to-t from-night via-transparent to-black/20"></div>

    <div class="relative mx-auto w-full max-w-[1440px]">

      <p class="mb-5 flex items-center gap-3 text-[9px] font-bold uppercase tracking-[.25em] text-white/75 sm:text-[10px] sm:tracking-[.38em]">
        <span class="h-px w-10 bg-aus"></span>
        Europa Central · Desde 976
      </p>

      <h1 class="max-w-5xl text-[clamp(2.8rem,12vw,11rem)] font-black uppercase leading-[.94] tracking-[-.075em] sm:text-[clamp(3.5rem,12vw,11rem)]">
        Descubra<br>
        <span class="text-white/75">a Áustria.</span>
      </h1>

      <div class="mt-7 flex flex-col gap-6 sm:mt-10 sm:gap-8 md:flex-row md:items-end md:justify-between">

        <p class="max-w-md font-serif text-base italic leading-relaxed text-white/80 sm:text-lg md:text-xl">
          Entre montanhas, palácios e lendas: uma viagem pela cultura e pela história de um país fascinante.
        </p>

        <a href="#identidade" class="group inline-flex min-h-12 w-fit items-center gap-6 border border-white/60 px-5 py-3.5 text-[10px] font-bold uppercase tracking-[.18em] transition hover:bg-white hover:text-night sm:gap-8 sm:px-6 sm:py-4">
          Explore o país
          <span class="text-lg transition group-hover:translate-x-1">↘</span>
        </a>

      </div>
    </div>

    <div class="absolute right-7 top-1/2 hidden -translate-y-1/2 [writing-mode:vertical-rl] text-[9px] uppercase tracking-[.35em] text-white/60 md:block">
      Viena · Alpes · História
    </div>

    <div class="absolute bottom-8 right-8 hidden text-right text-[9px] uppercase tracking-[.2em] text-white/50 md:block">
      01 / 05
    </div>

  </section>



<!-- IDENTIDADE -->
<section id="identidade" class="bg-paper py-16 text-night sm:py-20 md:py-32">

    <div class="mx-auto grid max-w-[1440px] gap-10 px-5 sm:px-6 md:grid-cols-12 md:gap-14 md:px-10">

        <!-- LADO ESQUERDO -->
        <div class="md:col-span-5 reveal">

            <p class="mb-5 text-[10px] font-bold uppercase tracking-[.32em] text-aus">
                01 — Identidade
            </p>

            <h2 class="text-[clamp(2.35rem,8vw,4.5rem)] font-black uppercase leading-[.92] tracking-[-.06em] md:text-7xl">
                Muito além<br>
                da paisagem.
            </h2>

            <p class="mt-8 max-w-md font-serif text-lg italic leading-relaxed text-night/65">
                A Áustria reúne símbolos, tradições e expressões culturais que atravessaram séculos e continuam presentes no cotidiano do país.
            </p>

            <!-- FOTOGRAFIA DO CÉU E DOS ALPES -->
            <div class="identity-image mt-8 min-h-[250px] rounded-sm bg-cover bg-center sm:mt-12 sm:min-h-[310px] md:min-h-[420px]"></div>

        </div>


        <!-- LADO DIREITO: TÓPICOS -->
        <div class="md:col-span-7 md:pt-20">

            <div class="border-t border-night/20">

                
                    <article class="reveal grid grid-cols-[32px_minmax(0,1fr)] gap-4 border-b border-night/20 px-2 py-6 transition hover:bg-black/[.025] md:grid-cols-[55px_1fr_1.5fr] md:items-center md:gap-6">

                        <!-- NUMERAÇÃO -->
                        <span class="text-[10px] font-bold tracking-[.15em] text-aus">
                            01                        </span>

                        <!-- TÍTULO -->
                        <h3 class="text-sm font-black uppercase tracking-[.08em]">
                            Bandeira                        </h3>

                        <!-- DESCRIÇÃO -->
                        <p class="col-start-2 min-w-0 text-sm leading-relaxed text-night/65 md:col-auto">
                            Três faixas horizontais: vermelha, branca e vermelha. É uma das bandeiras mais antigas ainda em uso.                        </p>

                    </article>

                
                    <article class="reveal grid grid-cols-[32px_minmax(0,1fr)] gap-4 border-b border-night/20 px-2 py-6 transition hover:bg-black/[.025] md:grid-cols-[55px_1fr_1.5fr] md:items-center md:gap-6">

                        <!-- NUMERAÇÃO -->
                        <span class="text-[10px] font-bold tracking-[.15em] text-aus">
                            02                        </span>

                        <!-- TÍTULO -->
                        <h3 class="text-sm font-black uppercase tracking-[.08em]">
                            Cores                        </h3>

                        <!-- DESCRIÇÃO -->
                        <p class="col-start-2 min-w-0 text-sm leading-relaxed text-night/65 md:col-auto">
                            Vermelho e branco da bandeira; verde, azul e tons terrosos lembram os Alpes, os lagos e as cidades históricas.                        </p>

                    </article>

                
                    <article class="reveal grid grid-cols-[32px_minmax(0,1fr)] gap-4 border-b border-night/20 px-2 py-6 transition hover:bg-black/[.025] md:grid-cols-[55px_1fr_1.5fr] md:items-center md:gap-6">

                        <!-- NUMERAÇÃO -->
                        <span class="text-[10px] font-bold tracking-[.15em] text-aus">
                            03                        </span>

                        <!-- TÍTULO -->
                        <h3 class="text-sm font-black uppercase tracking-[.08em]">
                            Águia federal                        </h3>

                        <!-- DESCRIÇÃO -->
                        <p class="col-start-2 min-w-0 text-sm leading-relaxed text-night/65 md:col-auto">
                            Símbolo do brasão da Áustria. Representa a república e a soberania do país.                        </p>

                    </article>

                
                    <article class="reveal grid grid-cols-[32px_minmax(0,1fr)] gap-4 border-b border-night/20 px-2 py-6 transition hover:bg-black/[.025] md:grid-cols-[55px_1fr_1.5fr] md:items-center md:gap-6">

                        <!-- NUMERAÇÃO -->
                        <span class="text-[10px] font-bold tracking-[.15em] text-aus">
                            04                        </span>

                        <!-- TÍTULO -->
                        <h3 class="text-sm font-black uppercase tracking-[.08em]">
                            Alpes                        </h3>

                        <!-- DESCRIÇÃO -->
                        <p class="col-start-2 min-w-0 text-sm leading-relaxed text-night/65 md:col-auto">
                            Ocupam boa parte do território e são o elemento mais reconhecido da paisagem austríaca.                        </p>

                    </article>

                
                    <article class="reveal grid grid-cols-[32px_minmax(0,1fr)] gap-4 border-b border-night/20 px-2 py-6 transition hover:bg-black/[.025] md:grid-cols-[55px_1fr_1.5fr] md:items-center md:gap-6">

                        <!-- NUMERAÇÃO -->
                        <span class="text-[10px] font-bold tracking-[.15em] text-aus">
                            05                        </span>

                        <!-- TÍTULO -->
                        <h3 class="text-sm font-black uppercase tracking-[.08em]">
                            Música clássica                        </h3>

                        <!-- DESCRIÇÃO -->
                        <p class="col-start-2 min-w-0 text-sm leading-relaxed text-night/65 md:col-auto">
                            Mozart, Haydn e Schubert ajudam a associar a Áustria à música.                        </p>

                    </article>

                
                    <article class="reveal grid grid-cols-[32px_minmax(0,1fr)] gap-4 border-b border-night/20 px-2 py-6 transition hover:bg-black/[.025] md:grid-cols-[55px_1fr_1.5fr] md:items-center md:gap-6">

                        <!-- NUMERAÇÃO -->
                        <span class="text-[10px] font-bold tracking-[.15em] text-aus">
                            06                        </span>

                        <!-- TÍTULO -->
                        <h3 class="text-sm font-black uppercase tracking-[.08em]">
                            Arquitetura                        </h3>

                        <!-- DESCRIÇÃO -->
                        <p class="col-start-2 min-w-0 text-sm leading-relaxed text-night/65 md:col-auto">
                            Palácios, edifícios barrocos e construções históricas, especialmente em Viena.                        </p>

                    </article>

                
                    <article class="reveal grid grid-cols-[32px_minmax(0,1fr)] gap-4 border-b border-night/20 px-2 py-6 transition hover:bg-black/[.025] md:grid-cols-[55px_1fr_1.5fr] md:items-center md:gap-6">

                        <!-- NUMERAÇÃO -->
                        <span class="text-[10px] font-bold tracking-[.15em] text-aus">
                            07                        </span>

                        <!-- TÍTULO -->
                        <h3 class="text-sm font-black uppercase tracking-[.08em]">
                            Cafés vienenses                        </h3>

                        <!-- DESCRIÇÃO -->
                        <p class="col-start-2 min-w-0 text-sm leading-relaxed text-night/65 md:col-auto">
                            Lugares de encontro, leitura e conversa, parte da vida cultural da capital.                        </p>

                    </article>

                
            </div>

        </div>

    </div>

</section>



  <!-- LENDAS -->
 
<!-- FOLCLORE -->
<section id="lendas" class="relative overflow-hidden bg-[#21191A] py-24 md:py-32">

    <div class="legend-image absolute inset-y-0 right-0 hidden w-[42%] bg-cover bg-center opacity-25 lg:block"></div>

    <div class="relative mx-auto max-w-[1440px] px-5 sm:px-6 md:px-10">

        <!-- CABEÇALHO -->
        <div class="reveal max-w-3xl">

            <p class="mb-5 text-[10px] font-bold uppercase tracking-[.32em] text-[#F0787F]">
                02 — Folclore
            </p>

            <h2 class="text-[clamp(2.35rem,8vw,4.5rem)] font-black uppercase leading-[.92] tracking-[-.06em] md:text-7xl">
                Histórias que<br>
                não se esquecem.
            </h2>

            <p class="mt-7 max-w-lg font-serif text-lg italic text-white/65">
                Criaturas misteriosas, aparições e personagens que fazem parte do imaginário popular austríaco.
            </p>

        </div>


        <!-- CARDS -->
        <div class="mt-10 grid gap-3 sm:mt-16 sm:grid-cols-2 lg:grid-cols-3">

            
                <button
                    type="button"
                    data-open-legend
                    data-title="Krampus"
                    data-type="Criatura folclórica"
                    data-location="Região dos Alpes"
                    data-text="O Krampus é uma criatura lendária do folclore alpino. Com chifres, pelos escuros e aparência assustadora, ele acompanha São Nicolau nas tradições de dezembro. Enquanto São Nicolau recompensa as crianças que se comportaram bem, o Krampus representa o lado assustador dessa tradição."
                    data-image="assets/img/krampus.png"
                    class="group flex min-h-[230px] w-full flex-col border border-white/15 bg-white/[.035] p-5 text-left transition duration-300 hover:-translate-y-1 hover:border-white/45 hover:bg-white/[.08] sm:min-h-[270px] sm:p-7"
                >

                    <div class="flex items-center justify-between">

                        <span class="text-[9px] font-bold uppercase tracking-[.2em] text-[#F0787F]">
                            Criatura folclórica                        </span>

                        <span class="text-xs text-white/35">
                            01                        </span>

                    </div>

                    <h3 class="mt-10 text-3xl font-black uppercase tracking-[-.04em]">
                        Krampus                    </h3>

                    <p class="mt-2 text-[10px] uppercase tracking-[.14em] text-white/45">
                        Região dos Alpes                    </p>

                    <div class="mt-auto flex items-center justify-between border-t border-white/15 pt-5 text-[10px] font-bold uppercase tracking-[.2em] text-white/80">

                        <span>Conheça a história</span>

                        <span class="text-xl transition group-hover:translate-x-1">
                            ↗
                        </span>

                    </div>

                </button>

            
                <button
                    type="button"
                    data-open-legend
                    data-title="A Dama Branca"
                    data-type="Lenda misteriosa"
                    data-location="Castelos austríacos"
                    data-text="A Dama Branca aparece em histórias e tradições de castelos da Europa Central. Sua figura é frequentemente associada a aparições misteriosas, antigas famílias nobres e acontecimentos sobrenaturais."
                    data-image="assets/img/damabranca.jpg"
                    class="group flex min-h-[230px] w-full flex-col border border-white/15 bg-white/[.035] p-5 text-left transition duration-300 hover:-translate-y-1 hover:border-white/45 hover:bg-white/[.08] sm:min-h-[270px] sm:p-7"
                >

                    <div class="flex items-center justify-between">

                        <span class="text-[9px] font-bold uppercase tracking-[.2em] text-[#F0787F]">
                            Lenda misteriosa                        </span>

                        <span class="text-xs text-white/35">
                            02                        </span>

                    </div>

                    <h3 class="mt-10 text-3xl font-black uppercase tracking-[-.04em]">
                        A Dama Branca                    </h3>

                    <p class="mt-2 text-[10px] uppercase tracking-[.14em] text-white/45">
                        Castelos austríacos                    </p>

                    <div class="mt-auto flex items-center justify-between border-t border-white/15 pt-5 text-[10px] font-bold uppercase tracking-[.2em] text-white/80">

                        <span>Conheça a história</span>

                        <span class="text-xl transition group-hover:translate-x-1">
                            ↗
                        </span>

                    </div>

                </button>

            
                <button
                    type="button"
                    data-open-legend
                    data-title="Perchten"
                    data-type="Tradição alpina"
                    data-location="Região alpina austríaca"
                    data-text="Os Perchten são personagens mascarados das tradições de inverno dos Alpes. Com máscaras elaboradas e roupas assustadoras, participam de desfiles que simbolizam a expulsão dos espíritos do inverno."
                    data-image="assets/img/bichofeio.jpg"
                    class="group flex min-h-[230px] w-full flex-col border border-white/15 bg-white/[.035] p-5 text-left transition duration-300 hover:-translate-y-1 hover:border-white/45 hover:bg-white/[.08] sm:min-h-[270px] sm:p-7"
                >

                    <div class="flex items-center justify-between">

                        <span class="text-[9px] font-bold uppercase tracking-[.2em] text-[#F0787F]">
                            Tradição alpina                        </span>

                        <span class="text-xs text-white/35">
                            03                        </span>

                    </div>

                    <h3 class="mt-10 text-3xl font-black uppercase tracking-[-.04em]">
                        Perchten                    </h3>

                    <p class="mt-2 text-[10px] uppercase tracking-[.14em] text-white/45">
                        Região alpina austríaca                    </p>

                    <div class="mt-auto flex items-center justify-between border-t border-white/15 pt-5 text-[10px] font-bold uppercase tracking-[.2em] text-white/80">

                        <span>Conheça a história</span>

                        <span class="text-xl transition group-hover:translate-x-1">
                            ↗
                        </span>

                    </div>

                </button>

            
        </div>

        <p class="reveal mt-14 max-w-2xl font-serif text-2xl italic text-white/75 md:text-3xl">
            “Você teria coragem de encontrar o Krampus em uma noite de inverno?”
        </p>

    </div>

</section>


<!-- JANELA DAS LENDAS -->
<div
    id="legend-modal"
    class="fixed inset-0 z-[100] hidden items-center justify-center bg-black/85 p-4 backdrop-blur-sm"
    role="dialog"
    aria-modal="true"
    aria-labelledby="legend-modal-title"
>

    <div class="relative max-h-[92dvh] w-full max-w-5xl overflow-y-auto overscroll-contain bg-[#F1EDE7] text-[#21191A] shadow-2xl">

        <!-- BOTÃO FECHAR -->
        <button
            type="button"
            id="close-legend"
            aria-label="Fechar janela"
            class="absolute right-4 top-4 z-20 flex h-10 w-10 items-center justify-center bg-black/60 text-2xl text-white transition hover:bg-black"
        >
            ×
        </button>

        <div class="grid grid-cols-1 md:grid-cols-2">

            <!-- FOTOGRAFIA -->
            <div class="min-h-[190px] max-h-[32dvh] bg-[#21191A] sm:min-h-[250px] md:max-h-none md:min-h-[540px]">

                <img
                    id="legend-modal-image"
                    src=""
                    alt=""
                    class="h-full min-h-[190px] max-h-[32dvh] w-full object-cover sm:min-h-[250px] md:max-h-none md:min-h-[540px]"
                >

            </div>


            <!-- CONTEÚDO -->
            <div class="flex flex-col justify-center p-5 sm:p-8 md:p-12">

                <p
                    id="legend-modal-type"
                    class="text-[10px] font-bold uppercase tracking-[.3em] text-[#C52D3A]"
                ></p>

                <h2
                    id="legend-modal-title"
                    class="mt-5 text-4xl font-black uppercase leading-[.95] tracking-[-.05em] md:text-5xl"
                ></h2>

                <p
                    id="legend-modal-location"
                    class="mt-4 text-[10px] font-bold uppercase tracking-[.18em] text-black/45"
                ></p>

                <div class="my-8 h-px w-full bg-black/15"></div>

                <p
                    id="legend-modal-text"
                    class="font-serif text-lg leading-relaxed text-black/75"
                ></p>

                <button
                    type="button"
                    id="close-legend-bottom"
                    class="mt-7 min-h-12 w-fit border border-black/30 px-6 py-3 text-[10px] font-bold uppercase tracking-[.2em] transition hover:bg-black hover:text-white sm:mt-10 sm:px-7 sm:py-4"
                >
                    Voltar às lendas
                </button>

            </div>

        </div>

    </div>

</div>


<!-- JAVASCRIPT DAS LENDAS -->
<script>
document.addEventListener('DOMContentLoaded', function () {

    const modal = document.getElementById('legend-modal');

    const image = document.getElementById('legend-modal-image');
    const title = document.getElementById('legend-modal-title');
    const type = document.getElementById('legend-modal-type');
    const location = document.getElementById('legend-modal-location');
    const description = document.getElementById('legend-modal-text');

    const closeButton = document.getElementById('close-legend');
    const closeBottom = document.getElementById('close-legend-bottom');

    let previousFocus = null;

    function openLegend(button) {

        previousFocus = button;

        title.textContent = button.dataset.title;
        type.textContent = button.dataset.type;
        location.textContent = button.dataset.location;
        description.textContent = button.dataset.text;

        image.src = button.dataset.image;
        image.alt = button.dataset.title;

        modal.classList.remove('hidden');
        modal.classList.add('flex');

        document.body.style.overflow = 'hidden';

        closeButton.focus();

    }

    function closeLegend() {

        modal.classList.add('hidden');
        modal.classList.remove('flex');

        document.body.style.overflow = '';

        image.src = '';

        if (previousFocus) {
            previousFocus.focus();
        }

    }

    document.querySelectorAll('[data-open-legend]').forEach(button => {

        button.addEventListener('click', function () {
            openLegend(this);
        });

    });

    closeButton.addEventListener('click', closeLegend);

    closeBottom.addEventListener('click', closeLegend);

    modal.addEventListener('click', function (event) {

        if (event.target === modal) {
            closeLegend();
        }

    });

    document.addEventListener('keydown', function (event) {

        if (event.key === 'Escape' && !modal.classList.contains('hidden')) {
            closeLegend();
        }

    });

});
</script>


  <!-- CÁPSULA DO TEMPO -->
  <section id="capsula" class="bg-[#E7E1D8] py-16 text-night sm:py-20 md:py-32">

    <div class="mx-auto max-w-[1440px] px-5 sm:px-6 md:px-10">

      <div class="reveal flex flex-col justify-between gap-8 md:flex-row md:items-end">

        <div>

          <p class="mb-5 text-[10px] font-bold uppercase tracking-[.32em] text-aus">
            03 — Linha do tempo
          </p>

          <h2 class="text-[clamp(2.35rem,8vw,4.5rem)] font-black uppercase leading-[.92] tracking-[-.06em] md:text-7xl">
            Séculos em<br>
            movimento.
          </h2>

        </div>

        <p class="max-w-sm font-serif text-lg italic leading-relaxed text-night/60">
          Selecione uma data e descubra os acontecimentos que ajudaram a formar a Áustria de hoje.
        </p>

      </div>


      <div id="timeline-scroll" class="mt-10 -mx-5 w-full max-w-full overflow-x-scroll overscroll-x-contain touch-pan-x snap-x snap-mandatory px-5 pb-4 sm:mx-0 sm:mt-16 sm:px-0 md:snap-none">

        <div class="flex w-max min-w-full border-y border-night/20 py-3">

          
            <button
              data-year="976"
              data-era="Império"
              data-text="A região aparece como a Marca Oriental, ligada ao Sacro Império Romano-Germânico."
              aria-pressed="true"
              class="year-button min-w-[100px] snap-start border-r border-night/15 px-4 py-4 text-left text-lg font-black transition hover:bg-aus hover:text-white sm:min-w-[112px] sm:px-5 sm:py-5 sm:text-xl md:min-w-[130px]"
            >

              <span class="block text-[9px] font-bold uppercase tracking-[.18em] opacity-60">
                Império              </span>

              976
            </button>

          
            <button
              data-year="1278"
              data-era="Império"
              data-text="A dinastia dos Habsburgo começa a governar os territórios austríacos."
              aria-pressed="false"
              class="year-button min-w-[100px] snap-start border-r border-night/15 px-4 py-4 text-left text-lg font-black transition hover:bg-aus hover:text-white sm:min-w-[112px] sm:px-5 sm:py-5 sm:text-xl md:min-w-[130px]"
            >

              <span class="block text-[9px] font-bold uppercase tracking-[.18em] opacity-60">
                Império              </span>

              1278
            </button>

          
            <button
              data-year="1526"
              data-era="Império"
              data-text="Os Habsburgo passam a governar também a Boêmia e a Hungria, ampliando sua influência na Europa Central."
              aria-pressed="false"
              class="year-button min-w-[100px] snap-start border-r border-night/15 px-4 py-4 text-left text-lg font-black transition hover:bg-aus hover:text-white sm:min-w-[112px] sm:px-5 sm:py-5 sm:text-xl md:min-w-[130px]"
            >

              <span class="block text-[9px] font-bold uppercase tracking-[.18em] opacity-60">
                Império              </span>

              1526
            </button>

          
            <button
              data-year="1804"
              data-era="Império"
              data-text="É proclamado o Império Austríaco."
              aria-pressed="false"
              class="year-button min-w-[100px] snap-start border-r border-night/15 px-4 py-4 text-left text-lg font-black transition hover:bg-aus hover:text-white sm:min-w-[112px] sm:px-5 sm:py-5 sm:text-xl md:min-w-[130px]"
            >

              <span class="block text-[9px] font-bold uppercase tracking-[.18em] opacity-60">
                Império              </span>

              1804
            </button>

          
            <button
              data-year="1867"
              data-era="Império"
              data-text="Forma-se a Monarquia Austro-Húngara, reunindo diversos povos e territórios sob uma mesma monarquia."
              aria-pressed="false"
              class="year-button min-w-[100px] snap-start border-r border-night/15 px-4 py-4 text-left text-lg font-black transition hover:bg-aus hover:text-white sm:min-w-[112px] sm:px-5 sm:py-5 sm:text-xl md:min-w-[130px]"
            >

              <span class="block text-[9px] font-bold uppercase tracking-[.18em] opacity-60">
                Império              </span>

              1867
            </button>

          
            <button
              data-year="1918"
              data-era="República"
              data-text="Com o fim da Primeira Guerra e da monarquia, nasce a República da Áustria."
              aria-pressed="false"
              class="year-button min-w-[100px] snap-start border-r border-night/15 px-4 py-4 text-left text-lg font-black transition hover:bg-aus hover:text-white sm:min-w-[112px] sm:px-5 sm:py-5 sm:text-xl md:min-w-[130px]"
            >

              <span class="block text-[9px] font-bold uppercase tracking-[.18em] opacity-60">
                República              </span>

              1918
            </button>

          
            <button
              data-year="1938"
              data-era="Guerra"
              data-text="A Áustria é anexada pela Alemanha nazista, no episódio conhecido como Anschluss."
              aria-pressed="false"
              class="year-button min-w-[100px] snap-start border-r border-night/15 px-4 py-4 text-left text-lg font-black transition hover:bg-aus hover:text-white sm:min-w-[112px] sm:px-5 sm:py-5 sm:text-xl md:min-w-[130px]"
            >

              <span class="block text-[9px] font-bold uppercase tracking-[.18em] opacity-60">
                Guerra              </span>

              1938
            </button>

          
            <button
              data-year="1945"
              data-era="Guerra"
              data-text="Termina a Segunda Guerra Mundial e a Áustria volta a ser estabelecida como república."
              aria-pressed="false"
              class="year-button min-w-[100px] snap-start border-r border-night/15 px-4 py-4 text-left text-lg font-black transition hover:bg-aus hover:text-white sm:min-w-[112px] sm:px-5 sm:py-5 sm:text-xl md:min-w-[130px]"
            >

              <span class="block text-[9px] font-bold uppercase tracking-[.18em] opacity-60">
                Guerra              </span>

              1945
            </button>

          
            <button
              data-year="1955"
              data-era="Contemporânea"
              data-text="O Tratado do Estado Austríaco restaura sua independência e o país declara neutralidade permanente."
              aria-pressed="false"
              class="year-button min-w-[100px] snap-start border-r border-night/15 px-4 py-4 text-left text-lg font-black transition hover:bg-aus hover:text-white sm:min-w-[112px] sm:px-5 sm:py-5 sm:text-xl md:min-w-[130px]"
            >

              <span class="block text-[9px] font-bold uppercase tracking-[.18em] opacity-60">
                Contemporânea              </span>

              1955
            </button>

          
            <button
              data-year="1995"
              data-era="Contemporânea"
              data-text="A Áustria entra na União Europeia."
              aria-pressed="false"
              class="year-button min-w-[100px] snap-start border-r border-night/15 px-4 py-4 text-left text-lg font-black transition hover:bg-aus hover:text-white sm:min-w-[112px] sm:px-5 sm:py-5 sm:text-xl md:min-w-[130px]"
            >

              <span class="block text-[9px] font-bold uppercase tracking-[.18em] opacity-60">
                Contemporânea              </span>

              1995
            </button>

          
        </div>

      </div>


      <div id="tl-card" class="reveal grid gap-6 border-b border-night/20 py-10 md:grid-cols-[.7fr_2fr] md:py-14">

        <div>

          <span class="text-[10px] font-bold uppercase tracking-[.25em] text-aus">
            Império          </span>

          <h3 class="mt-2 text-6xl font-black tracking-[-.06em] md:text-8xl">
            976          </h3>

        </div>

        <p class="max-w-2xl self-end font-serif text-xl leading-relaxed text-night/70 md:text-2xl">
          A região aparece como a Marca Oriental, ligada ao Sacro Império Romano-Germânico.        </p>

      </div>

    </div>

  </section>


  <!-- VIENA -->
  <section id="viena" class="vienna-image relative min-h-[680px] bg-cover bg-center py-16 sm:py-20 md:min-h-[720px] md:py-32">

    <div class="absolute inset-0 bg-night/35"></div>

    <div class="relative mx-auto max-w-[1440px] px-5 sm:px-6 md:px-10">

      <div class="reveal max-w-3xl">

        <p class="mb-5 text-[10px] font-bold uppercase tracking-[.32em] text-[#F0787F]">
          04 — A capital
        </p>

        <h2 class="text-[clamp(2.35rem,8vw,4.5rem)] font-black uppercase leading-[.92] tracking-[-.06em] md:text-7xl">
          Viena através<br>
          do tempo.
        </h2>

        <p class="mt-7 max-w-lg font-serif text-lg italic text-white/75">
          De um acampamento romano a uma das capitais culturais mais conhecidas da Europa.
        </p>

      </div>


      <div class="reveal mt-10 grid gap-7 border-t border-white/30 pt-7 sm:mt-16 sm:gap-8 sm:pt-8 md:grid-cols-12">

        <div class="-mx-5 flex snap-x gap-2 overflow-x-auto px-5 pb-3 sm:mx-0 sm:px-0 md:col-span-4 md:flex-col md:overflow-visible">

          
            <button
              data-viena="Época romana"
              data-text="Existia ali Vindobona, um acampamento militar romano."
              aria-pressed="true"
              class="vienna-tab min-h-11 shrink-0 snap-start whitespace-nowrap border border-white/35 px-4 py-3 text-left text-[9px] font-bold uppercase tracking-[.12em] transition hover:bg-white hover:text-night sm:px-5 sm:py-4 sm:text-[10px] sm:tracking-[.15em] bg-white text-night"
            >
              Época romana            </button>

          
            <button
              data-viena="Idade Média"
              data-text="Viena cresceu como cidade comercial e residência de governantes."
              aria-pressed="false"
              class="vienna-tab min-h-11 shrink-0 snap-start whitespace-nowrap border border-white/35 px-4 py-3 text-left text-[9px] font-bold uppercase tracking-[.12em] transition hover:bg-white hover:text-night sm:px-5 sm:py-4 sm:text-[10px] sm:tracking-[.15em] "
            >
              Idade Média            </button>

          
            <button
              data-viena="Império dos Habsburgo"
              data-text="Tornou-se um importante centro político e cultural da Europa."
              aria-pressed="false"
              class="vienna-tab min-h-11 shrink-0 snap-start whitespace-nowrap border border-white/35 px-4 py-3 text-left text-[9px] font-bold uppercase tracking-[.12em] transition hover:bg-white hover:text-night sm:px-5 sm:py-4 sm:text-[10px] sm:tracking-[.15em] "
            >
              Império dos Habsburgo            </button>

          
            <button
              data-viena="Século XIX"
              data-text="A construção da avenida Ringstrasse mudou a aparência da cidade, com grandes edifícios, museus e instituições."
              aria-pressed="false"
              class="vienna-tab min-h-11 shrink-0 snap-start whitespace-nowrap border border-white/35 px-4 py-3 text-left text-[9px] font-bold uppercase tracking-[.12em] transition hover:bg-white hover:text-night sm:px-5 sm:py-4 sm:text-[10px] sm:tracking-[.15em] "
            >
              Século XIX            </button>

          
            <button
              data-viena="1918"
              data-text="Após a queda do Império Austro-Húngaro, Viena passou a ser a capital da República da Áustria."
              aria-pressed="false"
              class="vienna-tab min-h-11 shrink-0 snap-start whitespace-nowrap border border-white/35 px-4 py-3 text-left text-[9px] font-bold uppercase tracking-[.12em] transition hover:bg-white hover:text-night sm:px-5 sm:py-4 sm:text-[10px] sm:tracking-[.15em] "
            >
              1918            </button>

          
            <button
              data-viena="1938–1945"
              data-text="A Áustria foi anexada pela Alemanha nazista e Viena sofreu os efeitos da Segunda Guerra."
              aria-pressed="false"
              class="vienna-tab min-h-11 shrink-0 snap-start whitespace-nowrap border border-white/35 px-4 py-3 text-left text-[9px] font-bold uppercase tracking-[.12em] transition hover:bg-white hover:text-night sm:px-5 sm:py-4 sm:text-[10px] sm:tracking-[.15em] "
            >
              1938–1945            </button>

          
            <button
              data-viena="Pós-guerra"
              data-text="A cidade foi reconstruída e ocupada pelas potências aliadas até 1955."
              aria-pressed="false"
              class="vienna-tab min-h-11 shrink-0 snap-start whitespace-nowrap border border-white/35 px-4 py-3 text-left text-[9px] font-bold uppercase tracking-[.12em] transition hover:bg-white hover:text-night sm:px-5 sm:py-4 sm:text-[10px] sm:tracking-[.15em] "
            >
              Pós-guerra            </button>

          
            <button
              data-viena="Viena atual"
              data-text="Conhecida por seus edifícios históricos, transporte público, espaços culturais e qualidade de vida."
              aria-pressed="false"
              class="vienna-tab min-h-11 shrink-0 snap-start whitespace-nowrap border border-white/35 px-4 py-3 text-left text-[9px] font-bold uppercase tracking-[.12em] transition hover:bg-white hover:text-night sm:px-5 sm:py-4 sm:text-[10px] sm:tracking-[.15em] "
            >
              Viena atual            </button>

          
        </div>


        <div class="md:col-span-8 md:pl-10">

          <span class="text-[10px] uppercase tracking-[.25em] text-white/55">
            Uma cidade em transformação
          </span>

          <h3 id="v-title" class="mt-5 text-4xl font-black uppercase tracking-[-.04em] md:text-6xl">
            Época romana          </h3>

          <p id="v-text" class="mt-6 max-w-2xl font-serif text-xl leading-relaxed text-white/80">
            Existia ali Vindobona, um acampamento militar romano.          </p>

          <p class="mt-12 border-l-2 border-aus pl-5 font-serif text-lg italic text-white/70">
            Como você imagina que Viena estará daqui a 100 anos?
          </p>

        </div>

      </div>

    </div>

  </section>


<!-- CURIOSIDADES -->
<section id="curiosidades" class="bg-paper py-16 text-night sm:py-20 md:py-32">

    <div class="mx-auto max-w-[1440px] px-5 sm:px-6 md:px-10">

        <div class="reveal flex flex-col justify-between gap-6 md:flex-row md:items-end">

            <div>
                <p class="mb-5 text-[10px] font-bold uppercase tracking-[.32em] text-aus">
                    05 — Para descobrir
                </p>

                <h2 class="text-[clamp(2.35rem,8vw,4.5rem)] font-black uppercase leading-[.92] tracking-[-.06em] md:text-7xl">
                    Pequenos<br>
                    grandes fatos.
                </h2>
            </div>

            <p class="max-w-sm font-serif text-lg italic text-night/60">
                Detalhes que revelam um pouco mais da personalidade austríaca.
            </p>

        </div>

        <div class="mt-10 grid gap-3 sm:mt-14 sm:gap-4 md:grid-cols-3">

            
            
                <article class="reveal group relative min-h-[320px] overflow-hidden bg-night sm:min-h-[360px] md:min-h-[380px]">

                    <img
                        src="assets/img/musica-austria.jpg"
                        alt="Música na Áustria"
                        loading="lazy"
                        class="absolute inset-0 h-full w-full object-cover transition duration-700 group-hover:scale-110"
                    >

                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/10 to-black/20"></div>

                    <div class="absolute inset-0 flex flex-col justify-between p-7 text-white">

                        <div class="flex justify-between">
                            <span class="text-[10px] font-bold tracking-[.2em] text-white">
                                01                            </span>

                            <span class="text-2xl opacity-80">
                                ↗
                            </span>
                        </div>

                        <div>
                            <h3 class="text-3xl font-black uppercase tracking-[-.04em]">
                                Música                            </h3>

                            <p class="mt-3 max-w-sm text-sm leading-relaxed text-white/80">
                                Mozart, Haydn e Schubert fazem da Áustria um símbolo da música clássica.                            </p>
                        </div>

                    </div>

                </article>

            
                <article class="reveal group relative min-h-[320px] overflow-hidden bg-night sm:min-h-[360px] md:min-h-[380px]">

                    <img
                        src="./assets/img/palacio.jpg"
                        alt="Cidades na Áustria"
                        loading="lazy"
                        class="absolute inset-0 h-full w-full object-cover transition duration-700 group-hover:scale-110"
                    >

                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/10 to-black/20"></div>

                    <div class="absolute inset-0 flex flex-col justify-between p-7 text-white">

                        <div class="flex justify-between">
                            <span class="text-[10px] font-bold tracking-[.2em] text-white">
                                02                            </span>

                            <span class="text-2xl opacity-80">
                                ↗
                            </span>
                        </div>

                        <div>
                            <h3 class="text-3xl font-black uppercase tracking-[-.04em]">
                                Cidades                            </h3>

                            <p class="mt-3 max-w-sm text-sm leading-relaxed text-white/80">
                                Viena concentra palácios barrocos, museus e a avenida Ringstrasse.                            </p>
                        </div>

                    </div>

                </article>

            
                <article class="reveal group relative min-h-[320px] overflow-hidden bg-night sm:min-h-[360px] md:min-h-[380px]">

                    <img
                        src="./assets/img/images.jpg"
                        alt="Tradições na Áustria"
                        loading="lazy"
                        class="absolute inset-0 h-full w-full object-cover transition duration-700 group-hover:scale-110"
                    >

                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/10 to-black/20"></div>

                    <div class="absolute inset-0 flex flex-col justify-between p-7 text-white">

                        <div class="flex justify-between">
                            <span class="text-[10px] font-bold tracking-[.2em] text-white">
                                03                            </span>

                            <span class="text-2xl opacity-80">
                                ↗
                            </span>
                        </div>

                        <div>
                            <h3 class="text-3xl font-black uppercase tracking-[-.04em]">
                                Tradições                            </h3>

                            <p class="mt-3 max-w-sm text-sm leading-relaxed text-white/80">
                                Do Krampus aos Perchten, o inverno alpino tem festas marcantes.                            </p>
                        </div>

                    </div>

                </article>

            
        </div>

    </div>

</section>


</main>


<script>
(() => {
  const header = document.getElementById('site-header');
  const burger = document.getElementById('burger');
  const mobile = document.getElementById('mobile');

  const updateHeader = () => header.classList.toggle('nav-scrolled', window.scrollY > 30);
  updateHeader();
  window.addEventListener('scroll', updateHeader, { passive: true });

  burger?.addEventListener('click', () => {
    const opened = !mobile.classList.contains('hidden');
    mobile.classList.toggle('hidden');
    burger.setAttribute('aria-expanded', String(!opened));
    burger.setAttribute('aria-label', opened ? 'Abrir menu' : 'Fechar menu');
    burger.textContent = opened ? '☰' : '×';
  });

  mobile?.querySelectorAll('a').forEach(link => link.addEventListener('click', () => {
    mobile.classList.add('hidden');
    burger.setAttribute('aria-expanded', 'false');
    burger.textContent = '☰';
  }));

  document.querySelectorAll('[data-legend]').forEach(button => {
    button.addEventListener('click', () => {
      const detail = button.parentElement.querySelector('.detail');
      const isHidden = detail.classList.toggle('hidden');
      button.querySelector('span').textContent = isHidden ? 'Conheça a história' : 'Fechar história';
      button.querySelector('span:last-child').textContent = isHidden ? '+' : '−';
    });
  });

  // Garante que o trilho da linha do tempo acompanhe o gesto do dedo no mobile.
  const timelineScroller = document.getElementById('timeline-scroll');
  if (timelineScroller) {
    let touchStartX = 0;
    let scrollStartX = 0;

    timelineScroller.addEventListener('touchstart', event => {
      if (!event.touches.length) return;
      touchStartX = event.touches[0].pageX;
      scrollStartX = timelineScroller.scrollLeft;
    }, { passive: true });

    timelineScroller.addEventListener('touchmove', event => {
      if (!event.touches.length) return;
      timelineScroller.scrollLeft = scrollStartX - (event.touches[0].pageX - touchStartX);
    }, { passive: true });
  }

  const yearButtons = [...document.querySelectorAll('[data-year]')];
  const timelineCard = document.getElementById('tl-card');
  yearButtons.forEach(button => button.addEventListener('click', () => {
    yearButtons.forEach(item => item.setAttribute('aria-pressed', 'false'));
    button.setAttribute('aria-pressed', 'true');
    timelineCard.querySelector('span').textContent = button.dataset.era;
    timelineCard.querySelector('h3').textContent = button.dataset.year;
    timelineCard.querySelector('p').textContent = button.dataset.text;
  }));

  const viennaButtons = [...document.querySelectorAll('[data-viena]')];
  viennaButtons.forEach(button => button.addEventListener('click', () => {
    viennaButtons.forEach(item => {
      item.classList.remove('bg-white', 'text-night');
      item.setAttribute('aria-pressed', 'false');
    });
    button.classList.add('bg-white', 'text-night');
    button.setAttribute('aria-pressed', 'true');
    document.getElementById('v-title').textContent = button.dataset.viena;
    document.getElementById('v-text').textContent = button.dataset.text;
  }));

  const revealItems = document.querySelectorAll('.reveal');
  if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12 });
    revealItems.forEach(item => observer.observe(item));
  } else {
    revealItems.forEach(item => item.classList.add('is-visible'));
  }
})();
</script>
</body>
</html>

<?php require __DIR__ . '/includes/footer.php'; ?>