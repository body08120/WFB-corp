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
              clifford: "#da373d",
              primary: "#1D1D1F",
            },
          },
        },
      };
    </script>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css"
      rel="stylesheet"
    />

    <link href="css/sequence-theme.two-up.css" rel="stylesheet" media="all" />
  </head>
  <body>
    <!--nav bar section-->
    <div class="h-16 w-full bg-primary sticky top-0 z-50">
      <div class="w-full h-full flex justify-around items-center">
          <div
              class="flex h-full items-center  ">
              <div class="mx-4 text-white"><a href="">Opcion</a></div>
            </div>
            <div class=" h-8 w-px bg-gray-300"></div>
          <div class="flex h-full items-center  ">
              <div class="mx-4 text-white"><a href="">Opcion</a></div>
            </div>
            <div class=" h-8 w-px bg-gray-300"></div>
          <div class="flex h-full items-center  ">
              <div class="mx-4 text-white"><a href=""><img class="rounded-xl" src="images/logo_WFB_cut.png" alt="Logo WFB corp"></a></div>
            </div>
            <div class=" h-8 w-px bg-gray-300"></div>
          <div class="flex h-full items-center  ">
              <div class="mx-4 text-white"><a href="">Opcion</a></div>
            </div>
            <div class=" h-8 w-px bg-gray-300"></div>
          <div class="flex h-full  items-center ">
              <div class="mx-4 text-white"><a href="">Opcion</a></div>
          </div>
      </div>
  </div>
    <!--fin nav bar section-->

    <!--header section-->
    <div class="h-[400px] flex bg-primary lg:h-[600px]">
      <div
        class="flex items-center text-center lg:text-left px-8 md:px-12 lg:w-1/2"
      >
        <div>
          <h2 class="text-3xl font-semibold text-gray-800 md:text-4xl">
            Build Your New <span class="text-indigo-600">Idea</span>
          </h2>
          <p class="mt-2 text-sm text-gray-500 md:text-base">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis
            commodi cum cupiditate ducimus, fugit harum id necessitatibus odio
            quam quasi, quibusdam rem tempora voluptates. Cumque debitis
            dignissimos id quam vel!
          </p>
          <div class="flex justify-center lg:justify-start mt-6">
            <a
              class="px-4 py-3 bg-gray-900 text-gray-200 text-xs font-semibold rounded hover:bg-gray-800"
              href="#"
              >Get Started</a
            >
            <a
              class="mx-4 px-4 py-3 bg-gray-300 text-gray-900 text-xs font-semibold rounded hover:bg-gray-400"
              href="#"
              >Learn More</a
            >
          </div>
        </div>
      </div>
      <div
        class="hidden lg:block lg:w-1/2"
        style="clip-path: polygon(10% 0, 100% 0%, 100% 100%, 0 100%)"
      >
        <div
          class="h-full object-cover"
          style="
            background-image: url(https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1352&q=80);
          "
        >
          <div class="h-full bg-black opacity-25"></div>
        </div>
      </div>
    </div>

    <!--fin header-->

    <!--section presentation-->
    <div id="sequence" class="seq">
      <div class="seq-nav">
        <ul role="navigation" aria-label="Pagination" class="seq-pagination">
          <li>
            <a href="#step1" rel="step1"
              ><span class="numeral">1</span
              ><span class="seq-tooltip">Pôle développement</span></a
            >
          </li>
          <!--
            -->
          <li>
            <a href="#step2" rel="step2"
              ><span class="numeral">2</span
              ><span class="seq-tooltip">Pôle référencement</span></a
            >
          </li>
          <!--
            -->
          <li>
            <a href="#step3" rel="step3"
              ><span class="numeral">3</span
              ><span class="seq-tooltip">Pôle graphique</span></a
            >
          </li>
        </ul>

        <button class="seq-next seq-swipe" type="button" aria-label="Next">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="20"
            height="21.5"
            viewBox="30.4 23.7 20 21.5"
            enable-background="new 30.4 23.7 20 21.5"
            role="img"
            aria-labelledby="title-swipe-icon"
          >
            <title id="title-swipe-icon">Swipe</title>
            <path
              d="M33 23.7c-.1 0-.3.1-.4.2l-2.1 2.1c-.2.2-.2.6 0 .9l2.1 2.1c.2.2.6.2.9 0s.2-.6 0-.9l-1.1-1.1h5.2c.3 0 .6-.3.6-.6s-.3-.6-.6-.6h-5.2l1.1-1.1c.2-.2.3-.6 0-.9-.1-.1-.2-.1-.5-.1zm14.6 0c-.3 0-.6.3-.6.7 0 .1.1.3.2.4l1.1 1.1h-5.2c-.3 0-.6.3-.6.6s.2.5.6.5h5.2l-1.1 1.1c-.2.2-.2.6 0 .9s.6.2.9 0l2.1-2.1c.2-.2.2-.6 0-.9l-2.1-2.1c-.2-.2-.3-.2-.5-.2zm-7.3 1.3c-.8 0-1.4.6-1.4 1.4v8.8c-.5-.6-1.1-1.3-1.6-1.6-.3-.2-.7-.4-1.1-.4-.7 0-1.2.5-1.3 1.2-.1.8.4 1.6.8 2.2l1.5 2.4 1.2 1.9c.6 1 .7 1.8.7 2.9v1.2c0 .1.1.2.2.2h8.2c.1 0 .2-.1.2-.2.1-.8.2-1.6.4-2.4.7-2 1.3-3.9 1.3-6.4v-4c0-.8-.6-1.4-1.4-1.4-.4 0-.7.1-1.2.6 0-.8-.6-1.4-1.4-1.4-.5 0-.9.2-1.2.6-.1-.7-.7-1.2-1.4-1.2-.5 0-.9.2-1.2.6v-3.5c.2-.8-.5-1.5-1.3-1.5z"
            />
          </svg>
        </button>
      </div>

      <button class="seq-next-button seq-next" type="button" aria-label="Next">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="60"
          height="60"
          viewBox="16.1 -0.7 60 60"
          enable-background="new 16.1 -0.7 60 60"
          role="img"
          aria-labelledby="title-down-arrow"
        >
          <title id="title-down-arrow">Précedent/Suivant</title>
          <path d="M46.407 1.399l27.435 27.435-28.213 28.213-27.435-27.435z" />
          <path
            fill="#fff"
            d="M46.1 59.3l-30-30 30-30 30 30-30 30zm-22.9-30l22.9 22.9 22.9-22.9-22.9-22.9-22.9 22.9zM39.278 23.872l11.031 11.031-4.172 4.172-11.031-11.031zM57.172 28.079l-11.031 11.031-4.172-4.172 11.031-11.031z"
          />
        </svg>
      </button>

      <div class="seq-screen">
        <ul class="seq-canvas">
          <li class="step1 seq-in">
            <div data-seq class="seq-feature seq-half">
              <div
                class="relative"
                style="background-image: url(images/step1.png)"
              >
                <!-- This image is hidden via CSS and is only here for accessibility. The image shown is actually a background-image set via an inline style above -->
                <img
                  src="images/step1.png"
                  alt="Un gros plan de feuilles de fougère verte"
                />
              </div>
            </div>
            <div data-seq class="seq-content seq-half seq-valign">
              <!--section-->
              <div>
                <h2 class="px-2">
                  <span class="uppercase tracking-widest"
                    >Pôle développement</span
                  >

                  <hr />
                  <span class="text-2xl"
                    >Notre méthode au centre du processus de développement de
                    notre division.</span
                  >
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
                  <!-- UNE CARD -->
                  <div
                    class="max-w-sm bg-primary border border-gray-700 rounded-lg shadow hidden xl:block"
                  >
                    <a href="#">
                      <img
                        class="rounded-t-lg"
                        src="images/image-1.jpg"
                        alt=""
                      />
                    </a>
                    <div class="p-5">
                      <a href="#">
                        <h5
                          class="mb-2 text-lg font-bold tracking-tight text-white"
                        >
                          Noteworthy technology acquisitions 2021
                        </h5>
                      </a>
                      <p class="mb-3 font-normal text-sm text-gray-400">
                        Here are the biggest enterprise technology acquisitions
                        of 2021 so far, in reverse chronological order.
                      </p>
                      <a
                        href="#"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-[#70163C] rounded-lg hover:bg-[#8C7287] focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                      >
                        Découvrir
                        <svg
                          aria-hidden="true"
                          class="w-4 h-4 ml-2 -mr-1"
                          fill="currentColor"
                          viewBox="0 0 20 20"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"
                          ></path>
                        </svg>
                      </a>
                    </div>
                  </div>
                  <!-- FIN CARD -->

                  <!-- UNE CARD -->
                  <div
                    class="max-w-sm bg-primary border border-gray-700 rounded-lg shadow"
                  >
                    <a href="#">
                      <img
                        class="rounded-t-lg"
                        src="images/image-1.jpg"
                        alt=""
                      />
                    </a>
                    <div class="p-5">
                      <a href="#">
                        <h5
                          class="mb-2 text-lg font-bold tracking-tight text-white"
                        >
                          Noteworthy technology acquisitions 2021
                        </h5>
                      </a>
                      <p class="mb-3 font-normal text-sm text-gray-400">
                        Here are the biggest enterprise technology acquisitions
                        of 2021 so far, in reverse chronological order.
                      </p>
                      <a
                        href="#"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-[#70163C] rounded-lg hover:bg-[#8C7287] focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                      >
                        Découvrir
                        <svg
                          aria-hidden="true"
                          class="w-4 h-4 ml-2 -mr-1"
                          fill="currentColor"
                          viewBox="0 0 20 20"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"
                          ></path>
                        </svg>
                      </a>
                    </div>
                  </div>
                  <!-- FIN CARD -->
                </div>
                <!--fin section-->

                <a
                  class="seq-button rounded-[3px]"
                  href="http://sequencejs.com/"
                  target="_blank"
                  >VOIR PLUS</a
                >
              </div>
              <!--fin section-->
            </div>
          </li>

          <li class="step2">
            <div data-seq class="seq-feature seq-half seq-half-right">
              <div style="background-image: url(images/step2.png)">
                <!-- This image is hidden via CSS and is only here for accessibility. The image shown is actually a background-image set via an inline style above -->
                <img
                  src="images/step2.png"
                  alt="Concentré sur une seule feuille d’automne suspendue à une fine branche. Plus de feuilles apparaissent floues en arrière-plan"
                />
              </div>
            </div>
            <div data-seq class="seq-content seq-half seq-half-left seq-valign">
              <!--section-->
              <div>
                <h2 class="px-2">
                  <span class="uppercase tracking-widest"
                    >Expert en référencement</span
                  >

                  <hr />
                  <span class="text-2xl"
                    >Le positionnement, la visibilité et le suivi sont des
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
                  <!-- UNE CARD -->
                  <div
                    class="max-w-sm bg-primary border border-gray-700 rounded-lg shadow hidden xl:block"
                  >
                    <a href="#">
                      <img
                        class="rounded-t-lg"
                        src="images/image-1.jpg"
                        alt=""
                      />
                    </a>
                    <div class="p-5">
                      <a href="#">
                        <h5
                          class="mb-2 text-lg font-bold tracking-tight text-white"
                        >
                          Noteworthy technology acquisitions 2021
                        </h5>
                      </a>
                      <p class="mb-3 font-normal text-sm text-gray-400">
                        Here are the biggest enterprise technology acquisitions
                        of 2021 so far, in reverse chronological order.
                      </p>
                      <a
                        href="#"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-[#70163C] rounded-lg hover:bg-[#8C7287] focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                      >
                        Découvrir
                        <svg
                          aria-hidden="true"
                          class="w-4 h-4 ml-2 -mr-1"
                          fill="currentColor"
                          viewBox="0 0 20 20"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"
                          ></path>
                        </svg>
                      </a>
                    </div>
                  </div>
                  <!-- FIN CARD -->

                  <!-- UNE CARD -->
                  <div
                    class="max-w-sm bg-primary border border-gray-700 rounded-lg shadow"
                  >
                    <a href="#">
                      <img
                        class="rounded-t-lg"
                        src="images/image-1.jpg"
                        alt=""
                      />
                    </a>
                    <div class="p-5">
                      <a href="#">
                        <h5
                          class="mb-2 text-lg font-bold tracking-tight text-white"
                        >
                          Noteworthy technology acquisitions 2021
                        </h5>
                      </a>
                      <p class="mb-3 font-normal text-sm text-gray-400">
                        Here are the biggest enterprise technology acquisitions
                        of 2021 so far, in reverse chronological order.
                      </p>
                      <a
                        href="#"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-[#70163C] rounded-lg hover:bg-[#8C7287] focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                      >
                        Découvrir
                        <svg
                          aria-hidden="true"
                          class="w-4 h-4 ml-2 -mr-1"
                          fill="currentColor"
                          viewBox="0 0 20 20"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"
                          ></path>
                        </svg>
                      </a>
                    </div>
                  </div>
                  <!-- FIN CARD -->
                </div>
                <!--fin section-->

                <a
                  class="seq-button rounded-[3px]"
                  href="http://sequencejs.com/"
                  target="_blank"
                  >VOIR PLUS</a
                >
              </div>
              <!--fin section-->
            </div>
          </li>

          <li class="step3">
            <div data-seq class="seq-feature seq-half seq-half-right">
              <div style="background-image: url(images/step3.png)">
                <!-- This image is hidden via CSS and is only here for accessibility. The image shown is actually a background-image set via an inline style above -->
                <img
                  src="images/step3.png"
                  alt="Un gros plan de plusieurs fleurs violettes avec des centres jaunes. Quelques gouttes de pluie s’assoient sur les pettels"
                />
              </div>
            </div>
            <div data-seq class="seq-content seq-half seq-half-left seq-valign">
              <!--section-->
              <div>
                <h2 class="px-2">
                  <span class="uppercase tracking-widest">Pôle graphique</span>

                  <hr />
                  <span class="text-2xl"
                    >La créativité, le graphisme et l'esthétique sont les
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
                  <!-- UNE CARD -->
                  <div
                    class="max-w-sm bg-primary border border-gray-700 rounded-lg shadow hidden xl:block"
                  >
                    <a href="#">
                      <img
                        class="rounded-t-lg"
                        src="images/image-1.jpg"
                        alt=""
                      />
                    </a>
                    <div class="p-5">
                      <a href="#">
                        <h5
                          class="mb-2 text-lg font-bold tracking-tight text-white"
                        >
                          Noteworthy technology acquisitions 2021
                        </h5>
                      </a>
                      <p class="mb-3 font-normal text-sm text-gray-400">
                        Here are the biggest enterprise technology acquisitions
                        of 2021 so far, in reverse chronological order.
                      </p>
                      <a
                        href="#"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-[#70163C] rounded-lg hover:bg-[#8C7287] focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                      >
                        Découvrir
                        <svg
                          aria-hidden="true"
                          class="w-4 h-4 ml-2 -mr-1"
                          fill="currentColor"
                          viewBox="0 0 20 20"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"
                          ></path>
                        </svg>
                      </a>
                    </div>
                  </div>
                  <!-- FIN CARD -->

                  <!-- UNE CARD -->
                  <div
                    class="max-w-sm bg-primary border border-gray-700 rounded-lg shadow"
                  >
                    <a href="#">
                      <img
                        class="rounded-t-lg"
                        src="images/image-1.jpg"
                        alt=""
                      />
                    </a>
                    <div class="p-5">
                      <a href="#">
                        <h5
                          class="mb-2 text-lg font-bold tracking-tight text-white"
                        >
                          Noteworthy technology acquisitions 2021
                        </h5>
                      </a>
                      <p class="mb-3 font-normal text-sm text-gray-400">
                        Here are the biggest enterprise technology acquisitions
                        of 2021 so far, in reverse chronological order.
                      </p>
                      <a
                        href="#"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-[#70163C] rounded-lg hover:bg-[#8C7287] focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                      >
                        Découvrir
                        <svg
                          aria-hidden="true"
                          class="w-4 h-4 ml-2 -mr-1"
                          fill="currentColor"
                          viewBox="0 0 20 20"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"
                          ></path>
                        </svg>
                      </a>
                    </div>
                  </div>
                  <!-- FIN CARD -->
                </div>
                <!--fin section-->

                <a
                  class="seq-button rounded-[3px]"
                  href="http://sequencejs.com/"
                  target="_blank"
                  >VOIR PLUS</a
                >
              </div>
              <!--fin section-->
            </div>
          </li>
        </ul>
      </div>
    </div>
    <!--fin section presentation-->

    <!-- ESPACE FOOTER -->
    <footer class="bg-white dark:bg-gray-900">
      <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="md:flex md:justify-between">
          <div class="mb-6 md:mb-0">
            <a href="https://flowbite.com/" class="flex items-center">
              <img
                src="https://flowbite.com/docs/images/logo.svg"
                class="h-8 mr-3"
                alt="FlowBite Logo"
              />
              <span
                class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"
                >Flowbite</span
              >
            </a>
          </div>
          <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
            <div>
              <h2
                class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white"
              >
                Ressources
              </h2>
              <ul class="text-gray-600 dark:text-gray-400 font-medium">
                <li class="mb-4">
                  <a href="https://flowbite.com/" class="hover:underline"
                    >Flowbite</a
                  >
                </li>
                <li>
                  <a href="https://tailwindcss.com/" class="hover:underline"
                    >Tailwind CSS</a
                  >
                </li>
              </ul>
            </div>
            <div>
              <h2
                class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white"
              >
                Suivez-nous
              </h2>
              <ul class="text-gray-600 dark:text-gray-400 font-medium">
                <li class="mb-4">
                  <a
                    href="https://github.com/themesberg/flowbite"
                    class="hover:underline"
                    >Github</a
                  >
                </li>
                <li>
                  <a
                    href="https://discord.gg/4eeurUVvTy"
                    class="hover:underline"
                    >Discord</a
                  >
                </li>
              </ul>
            </div>
            <div>
              <h2
                class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white"
              >
                Mentions légales
              </h2>
              <ul class="text-gray-600 dark:text-gray-400 font-medium">
                <li class="mb-4">
                  <a href="#" class="hover:underline"
                    >Politique de confidentialité
                  </a>
                </li>
                <li>
                  <a href="#" class="hover:underline"
                    >Termes &amp; conditions</a
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
        <hr
          class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8"
        />
        <div class="sm:flex sm:items-center sm:justify-between">
          <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400"
            >© 2023
            <a href="https://flowbite.com/" class="hover:underline"
              >WFB Corporation™</a
            >. Tous droits réservés.
          </span>
          <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
            <a
              href="#"
              class="text-gray-500 hover:text-gray-900 dark:hover:text-white"
            >
              <svg
                class="w-5 h-5"
                fill="currentColor"
                viewBox="0 0 24 24"
                aria-hidden="true"
              >
                <path
                  fill-rule="evenodd"
                  d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                  clip-rule="evenodd"
                />
              </svg>
              <span class="sr-only">Facebook page</span>
            </a>
            <a
              href="#"
              class="text-gray-500 hover:text-gray-900 dark:hover:text-white"
            >
              <svg
                class="w-5 h-5"
                fill="currentColor"
                viewBox="0 0 24 24"
                aria-hidden="true"
              >
                <path
                  fill-rule="evenodd"
                  d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                  clip-rule="evenodd"
                />
              </svg>
              <span class="sr-only">Instagram page</span>
            </a>
            <a
              href="#"
              class="text-gray-500 hover:text-gray-900 dark:hover:text-white"
            >
              <svg
                class="w-5 h-5"
                fill="currentColor"
                viewBox="0 0 24 24"
                aria-hidden="true"
              >
                <path
                  d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"
                />
              </svg>
              <span class="sr-only">Twitter page</span>
            </a>
            <a
              href="#"
              class="text-gray-500 hover:text-gray-900 dark:hover:text-white"
            >
              <svg
                class="w-5 h-5"
                fill="currentColor"
                viewBox="0 0 24 24"
                aria-hidden="true"
              >
                <path
                  fill-rule="evenodd"
                  d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                  clip-rule="evenodd"
                />
              </svg>
              <span class="sr-only">GitHub account</span>
            </a>
            <a
              href="#"
              class="text-gray-500 hover:text-gray-900 dark:hover:text-white"
            >
              <svg
                class="w-5 h-5"
                fill="currentColor"
                viewBox="0 0 24 24"
                aria-hidden="true"
              >
                <path
                  fill-rule="evenodd"
                  d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                  clip-rule="evenodd"
                />
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
    <script src="scripts/imagesloaded.pkgd.min.js"></script>
    <script src="scripts/hammer.min.js"></script>
    <script src="scripts/sequence.min.js"></script>
    <script src="scripts/sequence-theme.two-up.js"></script>
  </body>
</html>