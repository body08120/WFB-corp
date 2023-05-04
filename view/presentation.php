<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#1D1D1F',
            card: '#1C242A',
            blanc: '#F1F5F2',
            rose: '#8c7284',
            grenat: '#70163c',
          }
        }
      }
    }
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />

  <link href="assets/css/sequence-theme.two-up.css" rel="stylesheet" media="all" />
</head>

<body class="bg-primary">


  <!--nav bar section-->
  <div class="w-full">
    <nav class="bg-primary">
      <div class="container flex justify-center w-fit min-w-full">
        <a href="#"><img class="md:hidden w-4/12" src="assets/images/logowithoutback.png"></a>

        <button data-collapse-toggle="mobile-menu" type="button"
          class="md:hidden ml-3 text-gray-400 hover:text-blanc focus:outline-none focus:ring-2 focus:ring-blue-300 rounded-lg inline-flex items-center justify-center"
          aria-controls="mobile-menu-2" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
              clip-rule="evenodd"></path>
          </svg>
          <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
              clip-rule="evenodd"></path>
          </svg>
        </button>

        <div class="hidden md:block w-full" id="mobile-menu">
          <ul
            class="flex-col items-center justify-around md:flex-row flex md:space-x-8 mt-4 md:mt-0 md:text-sm md:font-medium">
            <li>
              <a href="#"
                class="flex items-center text-blanc hover:text-primary hover:bg-blanc duration-300 border-b border-gray-100 md:hover:bg-blanc md:border-0 pl-3 pr-4 py-2 md:hover:text-primary md:rounded-lg p-2 mt-1 font-medium md:w-auto"
                aria-current="page">Articles</a>
            </li>
            <li>
              <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                class="flex items-center text-blanc font-medium hover:text-primary hover:bg-blanc border-b border-gray-100 md:hover:bg-blanc md:border-0 pl-3 pr-4 py-2 md:hover:text-primary md:rounded-lg p-2 mt-1 md:font-medium md:w-auto">Présentations
                <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
                </svg></button>
              <!-- Dropdown menu -->
              <div id="dropdownNavbar"
                class="hidden bg-white text-base z-10 list-none divide-y divide-gray-100 rounded shadow my-4 w-44">
                <ul class="py-1" aria-labelledby="dropdownLargeButton">
                  <li>
                    <a href="#" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Dashboard</a>
                  </li>
                  <li>
                    <a href="#" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Settings</a>
                  </li>
                  <li>
                    <a href="#" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Earnings</a>
                  </li>
                </ul>
                <div class="py-1">
                  <a href="#" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Sign out</a>
                </div>
              </div>
            </li>
            <li class="hidden md:block w-2/12">
              <a href="#"><img class="w-4/6" src="assets/images/logowithoutback.png"></a>
            </li>
            <li>
              <a href="#"
                class="font-medium text-white hover:text-primary hover:bg-white border-b border-gray-100 md:hover:bg-white md:border-0 block pl-3 pr-4 py-2 md:hover:text-primary md:rounded-lg p-2 mt-1">Réalisations</a>
            </li>
            <li>
              <a href="#"
                class="font-medium text-white hover:text-primary hover:bg-white border-b border-gray-100 md:hover:bg-white md:border-0 block pl-3 pr-4 py-2 md:hover:text-primary md:rounded-lg p-2 mt-1">Contact</a>
            </li>
          </ul>
        </div>
    </nav>
  </div>


  <!--header section-->
  <div class=" h-[400px] flex bg-primary lg:h-[600px]">
    <div class="flex items-center text-center lg:text-left px-8 md:px-12 lg:w-1/2">
      <div>
        <h2 class="text-3xl font-semibold text-rose md:text-4xl">
        Boostez votre présence en ligne avec  <span class="text-grenat">notre expertise</span>
        </h2>
        <p class="mt-2 text-sm text-gray-500 md:text-base">
        Nous sommes une équipe passionnée et compétente spécialisée dans les domaines du développement, du référencement et du graphisme. Découvrez comment nous pouvons vous aider à atteindre vos objectifs en ligne
        </p>
        <div class="flex justify-center lg:justify-start mt-6">
          <a class="px-4 py-3 bg-grenat text-gray-200 text-xs font-semibold rounded hover:bg-gray-800" href="#">Découvrir</a>
          <a class="mx-4 px-4 py-3 bg-gray-300 text-grenat text-xs font-semibold rounded hover:bg-gray-400"
            href="#">Notre équipe</a>
        </div>
      </div>
    </div>
    <div class="hidden lg:block lg:w-1/2" style="clip-path: polygon(10% 0, 100% 0%, 100% 100%, 0 100%)">
      <div class="h-full object-cover"
        style="background-image: url(https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1352&q=80);">
        <div class="h-full bg-black opacity-25"></div>
      </div>
    </div>
  </div>


  <!--section presentation-->
  <div id="sequence" class="seq">
    <div class="seq-nav">
      <ul role="navigation" aria-label="Pagination" class="seq-pagination">
        <li>
          <a href="#step1" rel="step1"><span class="numeral">1</span><span class="seq-tooltip">Pôle
              développement</span></a>
        </li>
        <!--
            -->
        <li>
          <a href="#step2" rel="step2"><span class="numeral">2</span><span class="seq-tooltip">Pôle
              référencement</span></a>
        </li>
        <!--
            -->
        <li>
          <a href="#step3" rel="step3"><span class="numeral">3</span><span class="seq-tooltip">Pôle
              graphique</span></a>
        </li>
      </ul>

      <button class="seq-next seq-swipe" type="button" aria-label="Next">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21.5" viewBox="30.4 23.7 20 21.5"
          enable-background="new 30.4 23.7 20 21.5" role="img" aria-labelledby="title-swipe-icon">
          <title id="title-swipe-icon">Swipe</title>
          <path
            d="M33 23.7c-.1 0-.3.1-.4.2l-2.1 2.1c-.2.2-.2.6 0 .9l2.1 2.1c.2.2.6.2.9 0s.2-.6 0-.9l-1.1-1.1h5.2c.3 0 .6-.3.6-.6s-.3-.6-.6-.6h-5.2l1.1-1.1c.2-.2.3-.6 0-.9-.1-.1-.2-.1-.5-.1zm14.6 0c-.3 0-.6.3-.6.7 0 .1.1.3.2.4l1.1 1.1h-5.2c-.3 0-.6.3-.6.6s.2.5.6.5h5.2l-1.1 1.1c-.2.2-.2.6 0 .9s.6.2.9 0l2.1-2.1c.2-.2.2-.6 0-.9l-2.1-2.1c-.2-.2-.3-.2-.5-.2zm-7.3 1.3c-.8 0-1.4.6-1.4 1.4v8.8c-.5-.6-1.1-1.3-1.6-1.6-.3-.2-.7-.4-1.1-.4-.7 0-1.2.5-1.3 1.2-.1.8.4 1.6.8 2.2l1.5 2.4 1.2 1.9c.6 1 .7 1.8.7 2.9v1.2c0 .1.1.2.2.2h8.2c.1 0 .2-.1.2-.2.1-.8.2-1.6.4-2.4.7-2 1.3-3.9 1.3-6.4v-4c0-.8-.6-1.4-1.4-1.4-.4 0-.7.1-1.2.6 0-.8-.6-1.4-1.4-1.4-.5 0-.9.2-1.2.6-.1-.7-.7-1.2-1.4-1.2-.5 0-.9.2-1.2.6v-3.5c.2-.8-.5-1.5-1.3-1.5z" />
        </svg>
      </button>
    </div>

    <button class="seq-next-button seq-next" type="button" aria-label="Next">
      <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="16.1 -0.7 60 60"
        enable-background="new 16.1 -0.7 60 60" role="img" aria-labelledby="title-down-arrow">
        <title id="title-down-arrow">Précedent/Suivant</title>
        <path d="M46.407 1.399l27.435 27.435-28.213 28.213-27.435-27.435z" />
        <path fill="#fff"
          d="M46.1 59.3l-30-30 30-30 30 30-30 30zm-22.9-30l22.9 22.9 22.9-22.9-22.9-22.9-22.9 22.9zM39.278 23.872l11.031 11.031-4.172 4.172-11.031-11.031zM57.172 28.079l-11.031 11.031-4.172-4.172 11.031-11.031z" />
      </svg>
    </button>

    <div class="seq-screen">
      <ul class="seq-canvas">
        <li class="step1 seq-in">
          <div data-seq class="seq-feature seq-half">
            <div class="relative" style="background-image: url(assets/images/step1.png)">
              <!-- This image is hidden via CSS and is only here for accessibility. The image shown is actually a background-image set via an inline style above -->
              <img src="assets/images/step1.png" alt="Un gros plan de feuilles de fougère verte" />
            </div>
          </div>
          <div data-seq class="seq-content seq-half seq-valign">
            <!--section-->
            <div>
              <h2 class="px-2">
                <span class="uppercase tracking-widest">Pôle développement</span>

                <hr />
                <span class="text-2xl">Notre méthode au centre du processus de développement de
                  notre division.</span>
              </h2>

              <h3 class="leading-6 text-xl px-4 py-4">
                Pour la conception d'un site internet sur mesure, notre équipe
                met à votre disposition son savoir-faire. Nos experts en
                développement web abordent chaque projet avec une approche
                personnalisée et vous conseillent à chaque étape de la
                création de votre site internet. Vous bénéficiez d'un suivi de
                haute qualité et d'une expertise reconnue, quel que soit le
                type de support que vous choisissez : site internet, boutique
                en ligne, site vitrine, site responsive, etc. Ainsi, nous
                garantissons un rendu efficace, simple et intuitif pour vos
                utilisateurs.
              </h3>

              <!--CARDS DERNIERS ARTICLES-->
              <div class="flex justify-around py-4">

                <!-- UNE CARD1 -->
                <div class="relative max-w-sm border border-gray-700 rounded-lg shadow hidden 2xl:block 2xl:mx-2">
                  <img src="assets/images/image-1.jpg" alt="Image de fond"
                    class="absolute inset-0 w-full h-full object-cover filter blur" style="filter: blur(5px);" />
                  <div class="relative p-5 hover:bg-primary hover:bg-opacity-80">
                    <a href="#">
                      <h5 class="mb-2 text-lg font-bold tracking-tight text-pink-800">
                        Noteworthy technology acquisitions 2021
                      </h5>
                    </a>
                    <p class="mb-3 font-normal text-sm text-blanc">
                      Here are the biggest enterprise technology acquisitions
                      of 2021 so far, in reverse chronological order.
                    </p>
                    <a href="#"
                      class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-[#70163C] rounded-lg hover:bg-[#8C7287] focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                      Découvrir
                      <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                          d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                          clip-rule="evenodd"></path>
                      </svg>
                    </a>
                  </div>
                </div>
                <!-- FIN CARD -->

                <!-- UNE CARD2 -->
                <div class="relative max-w-sm border border-gray-700 rounded-lg shadow lg:hidden 2xl:block 2xl:mx-2">
                  <img src="assets/images/image-1.jpg" alt="Image de fond"
                    class="absolute inset-0 w-full h-full object-cover filter blur" style="filter: blur(5px);" />
                  <div class="relative p-5 hover:bg-[#1D1D1F] hover:opacity-80">
                    <a href="#">
                      <h5 class="mb-2 text-lg font-bold tracking-tight text-pink-800">
                        Noteworthy technology acquisitions 2021
                      </h5>
                    </a>
                    <p class="mb-3 font-normal text-sm text-blanc">
                      Here are the biggest enterprise technology acquisitions
                      of 2021 so far, in reverse chronological order.
                    </p>
                    <a href="#"
                      class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-[#70163C] rounded-lg hover:bg-[#8C7287] focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                      Découvrir
                      <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                          d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                          clip-rule="evenodd"></path>
                      </svg>
                    </a>
                  </div>
                </div>
                <!-- FIN CARD -->
              </div>
              <!--fin section-->

              <a class="seq-button rounded-[3px]" href="http://sequencejs.com/" target="_blank">VOIR PLUS</a>
            </div>
            <!--fin section-->
          </div>
        </li>

        <li class="step2">
          <div data-seq class="seq-feature seq-half seq-half-right">
            <div style="background-image: url(assets/images/step2.png)">
              <!-- This image is hidden via CSS and is only here for accessibility. The image shown is actually a background-image set via an inline style above -->
              <img src="assets/images/step2.png"
                alt="Concentré sur une seule feuille d’automne suspendue à une fine branche. Plus de feuilles apparaissent floues en arrière-plan" />
            </div>
          </div>
          <div data-seq class="seq-content seq-half seq-half-left seq-valign">
            <!--section-->
            <div>
              <h2 class="px-2">
                <span class="uppercase tracking-widest">Expert en référencement</span>

                <hr />
                <span class="text-2xl">Le positionnement, la visibilité et le suivi sont des
                  éléments essentiels pour votre développement.
                </span>
              </h2>

              <h3 class="leading-6 text-xl px-4 py-4">
                Notre équipe est là pour vous aider à augmenter votre
                visibilité sur les moteurs de recherche et les réseaux
                sociaux. De l'optimisation pour les moteurs de recherche (SEO)
                à la mise en place de campagnes Google AdWords (SEA) en
                passant par les médias sociaux, nos spécialistes vous aident à
                attirer un public ciblé et à vous rapprocher de vos futurs
                clients. La performance de vos campagnes digitales est
                étroitement étudiée afin d'ajuster votre stratégie,
                spécifiquement adaptée à votre secteur d'activité.
              </h3>

              <!--CARDS DERNIERS ARTICLES-->
              <div class="flex justify-around py-4">

                <!-- UNE CARD1 -->
                <div class="relative max-w-sm border border-gray-700 rounded-lg shadow hidden 2xl:block 2xl:mx-2">
                  <img src="assets/images/image-1.jpg" alt="Image de fond"
                    class="absolute inset-0 w-full h-full object-cover filter blur" style="filter: blur(5px);" />
                  <div class="relative p-5 hover:bg-primary hover:bg-opacity-80">
                    <a href="#">
                      <h5 class="mb-2 text-lg font-bold tracking-tight text-pink-800">
                        Noteworthy technology acquisitions 2021
                      </h5>
                    </a>
                    <p class="mb-3 font-normal text-sm text-blanc">
                      Here are the biggest enterprise technology acquisitions
                      of 2021 so far, in reverse chronological order.
                    </p>
                    <a href="#"
                      class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-[#70163C] rounded-lg hover:bg-[#8C7287] focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                      Découvrir
                      <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                          d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                          clip-rule="evenodd"></path>
                      </svg>
                    </a>
                  </div>
                </div>
                <!-- FIN CARD -->

                <!-- UNE CARD2 -->
                <div class="relative max-w-sm border border-gray-700 rounded-lg shadow lg:hidden 2xl:block 2xl:mx-2">
                  <img src="assets/images/image-1.jpg" alt="Image de fond"
                    class="absolute inset-0 w-full h-full object-cover filter blur" style="filter: blur(5px);" />
                  <div class="relative p-5 hover:bg-[#1D1D1F] hover:opacity-80">
                    <a href="#">
                      <h5 class="mb-2 text-lg font-bold tracking-tight text-pink-800">
                        Noteworthy technology acquisitions 2021
                      </h5>
                    </a>
                    <p class="mb-3 font-normal text-sm text-blanc">
                      Here are the biggest enterprise technology acquisitions
                      of 2021 so far, in reverse chronological order.
                    </p>
                    <a href="#"
                      class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-[#70163C] rounded-lg hover:bg-[#8C7287] focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                      Découvrir
                      <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                          d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                          clip-rule="evenodd"></path>
                      </svg>
                    </a>
                  </div>
                </div>
                <!-- FIN CARD -->
              </div>
              <!--fin section-->

              <a class="seq-button rounded-[3px]" href="http://sequencejs.com/" target="_blank">VOIR PLUS</a>
            </div>
            <!--fin section-->
          </div>
        </li>

        <li class="step3">
          <div data-seq class="seq-feature seq-half seq-half-right">
            <div style="background-image: url(assets/images/step3.png)">
              <!-- This image is hidden via CSS and is only here for accessibility. The image shown is actually a background-image set via an inline style above -->
              <img src="assets/images/step3.png"
                alt="Un gros plan de plusieurs fleurs violettes avec des centres jaunes. Quelques gouttes de pluie s’assoient sur les pettels" />
            </div>
          </div>
          <div data-seq class="seq-content seq-half seq-half-left seq-valign">
            <!--section-->
            <div>
              <h2 class="px-2">
                <span class="uppercase tracking-widest">Pôle graphique</span>

                <hr />
                <span class="text-2xl">La créativité, le graphisme et l'esthétique sont les
                  principaux axes de notre équipe dédiée au design.
                </span>
              </h2>

              <h3 class="leading-6 text-xl px-4 py-4">
                Que ce soit pour la création d'un nouveau logo, des besoins en
                webdesign ou une refonte complète de votre identité visuelle,
                notre studio graphique apporte ses idées et sa rigueur. Nous
                vous offrons des créations personnalisées et des propositions
                originales. De plus, notre équipe peut également gérer pour
                vous la conception graphique et l'impression de tous vos
                supports de communication, tels que les grands formats, les
                affiches, les flyers, les cartes de visite, et bien d'autres
                encore.
              </h3>

              <!--CARDS DERNIERS ARTICLES-->
              <div class="flex justify-around py-4">

                <!-- UNE CARD1 -->
                <div class="relative max-w-sm border border-gray-700 rounded-lg shadow hidden 2xl:block 2xl:mx-2">
                  <img src="assets/images/image-1.jpg" alt="Image de fond"
                    class="absolute inset-0 w-full h-full object-cover filter blur" style="filter: blur(5px);" />
                  <div class="relative p-5 hover:bg-primary hover:bg-opacity-80">
                    <a href="#">
                      <h5 class="mb-2 text-lg font-bold tracking-tight text-pink-800">
                        Noteworthy technology acquisitions 2021
                      </h5>
                    </a>
                    <p class="mb-3 font-normal text-sm text-blanc">
                      Here are the biggest enterprise technology acquisitions
                      of 2021 so far, in reverse chronological order.
                    </p>
                    <a href="#"
                      class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-[#70163C] rounded-lg hover:bg-[#8C7287] focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                      Découvrir
                      <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                          d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                          clip-rule="evenodd"></path>
                      </svg>
                    </a>
                  </div>
                </div>
                <!-- FIN CARD -->

                <!-- UNE CARD2 -->
                <div class="relative max-w-sm border border-gray-700 rounded-lg shadow lg:hidden 2xl:block 2xl:mx-2">
                  <img src="assets/images/image-1.jpg" alt="Image de fond"
                    class="absolute inset-0 w-full h-full object-cover filter blur" style="filter: blur(5px);" />
                  <div class="relative p-5 hover:bg-[#1D1D1F] hover:opacity-80">
                    <a href="#">
                      <h5 class="mb-2 text-lg font-bold tracking-tight text-pink-800">
                        Noteworthy technology acquisitions 2021
                      </h5>
                    </a>
                    <p class="mb-3 font-normal text-sm text-blanc">
                      Here are the biggest enterprise technology acquisitions
                      of 2021 so far, in reverse chronological order.
                    </p>
                    <a href="#"
                      class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-[#70163C] rounded-lg hover:bg-[#8C7287] focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                      Découvrir
                      <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                          d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                          clip-rule="evenodd"></path>
                      </svg>
                    </a>
                  </div>
                </div>
                <!-- FIN CARD -->
              </div>
              <!--fin section-->

              <a class="seq-button rounded-[3px]" href="http://sequencejs.com/" target="_blank">VOIR PLUS</a>
            </div>
            <!--fin section-->
          </div>
        </li>
      </ul>
    </div>
  </div>


  <!-- section team -->
  <div id="team" class="container my-24 px-6 py-6 mx-auto bg-card rounded">
    <!-- Section: Design Block -->
    <section class="mb-32 text-[#1d1d1f] text-center lg:mb-16">
      <h2 class="text-3xl font-bold mb-12 text-rose uppercase">Notre équipe</h2>

      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-x-6 lg:gap-xl-12">
        <div class="relative block rounded-none-lg shadow-lg bg-white p-6">
          <img class="rounded-lg shadow-lg mb-6 mx-auto" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(9).jpg"
            alt="avatar" style="width: 150px" />
          <h5 class="text-lg font-bold mb-4">Alan Turing</h5>
          <p class="mb-6">Frontend Developer</p>
          <ul class="list-inside flex mx-auto justify-center">
            <a href="#!" class="px-2">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" class="w-4 h-4 text-[#70163c]">
                <path fill="currentColor"
                  d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z" />
              </svg>
            </a>
            <a href="#!" class="px-2">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4 text-[#70163c]">
                <path fill="currentColor"
                  d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" />
              </svg>
            </a>
            <a href="#!" class="px-2">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-4 h-4 text-[#70163c]">
                <path fill="currentColor"
                  d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z" />
              </svg>
            </a>
          </ul>
        </div>
        <div class="relative block rounded-none-lg shadow-lg bg-white p-6">
          <img class="rounded-lg shadow-lg mb-6 mx-auto" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(4).jpg"
            alt="avatar" style="width: 150px" />
          <h5 class="text-lg font-bold mb-4">Veronica Smith</h5>
          <p class="mb-6">Backend Developer</p>
          <ul class="list-inside flex mx-auto justify-center">
            <a href="#!" class="px-2">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" class="w-4 h-4 text-[#70163c]">
                <path fill="currentColor"
                  d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z" />
              </svg>
            </a>
            <a href="#!" class="px-2">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4 text-[#70163c]">
                <path fill="currentColor"
                  d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" />
              </svg>
            </a>
            <a href="#!" class="px-2">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-4 h-4 text-[#70163c]">
                <path fill="currentColor"
                  d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z" />
              </svg>
            </a>
          </ul>
        </div>
        <div class="relative block rounded-none-lg shadow-lg bg-white p-6">
          <img class="rounded-lg shadow-lg mb-6 mx-auto" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(32).jpg"
            alt="avatar" style="width: 150px" />
          <h5 class="text-lg font-bold mb-4">Tom Johnson</h5>
          <p class="mb-6">Digital Marketing Analyst</p>
          <ul class="list-inside flex mx-auto justify-center">
            <a href="#!" class="px-2">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="w-4 h-4 text-[#70163c]">
                <path fill="currentColor"
                  d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" />
              </svg>
            </a>
            <a href="#!" class="px-2">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4 text-[#70163c]">
                <path fill="currentColor"
                  d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" />
              </svg>
            </a>
            <a href="#!" class="px-2">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-4 h-4 text-[#70163c]">
                <path fill="currentColor"
                  d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z" />
              </svg>
            </a>
          </ul>
        </div>
        <div class="relative block rounded-none-lg shadow-lg bg-white p-6">
          <img class="rounded-lg shadow-lg mb-6 mx-auto" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(31).jpg"
            alt="avatar" style="width: 150px" />
          <h5 class="text-lg font-bold mb-4">Emma Lovelace</h5>
          <p class="mb-6">Web Designer</p>
          <ul class="list-inside flex mx-auto justify-center">
            <a href="#!" class="px-2">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4 text-[#70163c]">
                <path fill="currentColor"
                  d="M256 8C119.252 8 8 119.252 8 256s111.252 248 248 248 248-111.252 248-248S392.748 8 256 8zm163.97 114.366c29.503 36.046 47.369 81.957 47.835 131.955-6.984-1.477-77.018-15.682-147.502-6.818-5.752-14.041-11.181-26.393-18.617-41.614 78.321-31.977 113.818-77.482 118.284-83.523zM396.421 97.87c-3.81 5.427-35.697 48.286-111.021 76.519-34.712-63.776-73.185-116.168-79.04-124.008 67.176-16.193 137.966 1.27 190.061 47.489zm-230.48-33.25c5.585 7.659 43.438 60.116 78.537 122.509-99.087 26.313-186.36 25.934-195.834 25.809C62.38 147.205 106.678 92.573 165.941 64.62zM44.17 256.323c0-2.166.043-4.322.108-6.473 9.268.19 111.92 1.513 217.706-30.146 6.064 11.868 11.857 23.915 17.174 35.949-76.599 21.575-146.194 83.527-180.531 142.306C64.794 360.405 44.17 310.73 44.17 256.323zm81.807 167.113c22.127-45.233 82.178-103.622 167.579-132.756 29.74 77.283 42.039 142.053 45.189 160.638-68.112 29.013-150.015 21.053-212.768-27.882zm248.38 8.489c-2.171-12.886-13.446-74.897-41.152-151.033 66.38-10.626 124.7 6.768 131.947 9.055-9.442 58.941-43.273 109.844-90.795 141.978z" />
              </svg>
            </a>
            <a href="#!" class="px-2">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-4 h-4 text-[#70163c]">
                <path fill="currentColor"
                  d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z" />
              </svg>
            </a>
            <a href="#!" class="px-2">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-4 h-4 text-[#70163c]">
                <path fill="currentColor"
                  d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
              </svg>
            </a>
          </ul>
        </div>
      </div>
    </section>
    <!-- Section: Design Block -->
  </div>


  <!-- ESPACE FOOTER -->
  <footer class="bg-white dark:bg-gray-900">
    <div class="mx-auto w-full  p-4 py-6 lg:py-8">
      <div class="md:flex md:justify-between">
        <div class="mb-6 md:mb-0">
          <a href="https://flowbite.com/" class="flex items-center">
            <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 mr-3" alt="FlowBite Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
          </a>
        </div>
        <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
          <div>
            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">
              Ressources
            </h2>
            <ul class="text-gray-600 dark:text-gray-400 font-medium">
              <li class="mb-4">
                <a href="https://flowbite.com/" class="hover:underline">Flowbite</a>
              </li>
              <li>
                <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
              </li>
            </ul>
          </div>
          <div>
            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">
              Suivez-nous
            </h2>
            <ul class="text-gray-600 dark:text-gray-400 font-medium">
              <li class="mb-4">
                <a href="https://github.com/themesberg/flowbite" class="hover:underline">Github</a>
              </li>
              <li>
                <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
              </li>
            </ul>
          </div>
          <div>
            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">
              Mentions légales
            </h2>
            <ul class="text-gray-600 dark:text-gray-400 font-medium">
              <li class="mb-4">
                <a href="#" class="hover:underline">Politique de confidentialité
                </a>
              </li>
              <li>
                <a href="#" class="hover:underline">Termes &amp; conditions</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
      <div class="sm:flex sm:items-center sm:justify-between">
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023
          <a href="https://flowbite.com/" class="hover:underline">WFB Corporation™</a>. Tous droits réservés.
        </span>
        <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
          <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path fill-rule="evenodd"
                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                clip-rule="evenodd" />
            </svg>
            <span class="sr-only">Facebook page</span>
          </a>
          <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path fill-rule="evenodd"
                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                clip-rule="evenodd" />
            </svg>
            <span class="sr-only">Instagram page</span>
          </a>
          <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path
                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
            </svg>
            <span class="sr-only">Twitter page</span>
          </a>
          <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path fill-rule="evenodd"
                d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                clip-rule="evenodd" />
            </svg>
            <span class="sr-only">GitHub account</span>
          </a>
          <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path fill-rule="evenodd"
                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                clip-rule="evenodd" />
            </svg>
            <span class="sr-only">Dribbble account</span>
          </a>
        </div>
      </div>
    </div>
  </footer>



  <!-- flowbite-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

  <!-- slider script-->
  <script src="assets/scripts/imagesloaded.pkgd.min.js"></script>
  <script src="assets/scripts/hammer.min.js"></script>
  <script src="assets/scripts/sequence.min.js"></script>
  <script src="assets/scripts/sequence-theme.two-up.js"></script>
</body>

</html>