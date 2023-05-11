<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com/3.3.0"></script>
    <link rel="stylesheet" href="../assets/css/cards.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/accueil.css">

    <link rel="stylesheet" href="assets/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
	<link rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
</head>

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

<body class="bg-primary">

<!-- This is an example component -->
<div class="hidden sticky top-0 z-50 md:w-full relative md:block">
    
    <nav class="bg-primary">
    <div class="container mx-auto flex flex-wrap items-center justify-between w-fit md:container flex justify-center w-fit min-w-full">
      <a href="#"><img class="md:hidden w-4/12 ml-6" src="../assets/images/logowithoutback.png"></a>
        <button data-collapse-toggle="mobile-menu" type="button" class="md:hidden mr-3 text-gray-400 hover:text-blanc focus:outline-none focus:ring-2 focus:ring-blue-300 rounded-lg inline-flex items-center justify-center" aria-controls="mobile-menu-2" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
        <div class="hidden md:block w-full" id="mobile-menu">
        <ul class="flex-col items-center justify-around md:flex-row flex md:space-x-8 mt-4 md:mt-0 md:text-sm md:font-medium">
            <li class="w-full md:w-auto">
            <a href="#" class="flex items-center md: ensavoirplus " aria-current="page">Articles</a>
            </li>
            <li class="w-full md:w-auto">
                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center text-blanc font-medium w-full md: ensavoirplus">Présentations <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
                <!-- Dropdown menu -->
                <div id="dropdownNavbar" class="hidden bg-white text-base z-10 list-none divide-y divide-gray-100 rounded shadow my-4 w-44">
                    <ul class="" aria-labelledby="dropdownLargeButton">
                    <li>
                        <a href="#" class="bg-primary text-blanc hover:bg-blanc hover:text-primary block px-4 py-2">Nos compétences</a>
                    </li>
                    <li>
                        <a href="#" class="bg-primary text-blanc hover:bg-blanc hover:text-primary block px-4 py-2">Notre équipe</a>
                    </li>
                    </ul>
                </div>
            </li>
            <li class="hidden md:block w-2/12">
           <a href="#"><img class="w-4/6" src="../assets/images/logowithoutback.png"></a>
            </li>
            <li class="w-full md:w-auto">
            <a href="#" class="font-medium text-blanc md: ensavoirplus">Réalisations</a>
            </li>
            <li class="w-full md:w-auto">
            <a href="#contacternous" class="font-medium text-blanc md: ensavoirplus">Contact</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
</div>


<div class="flex w-full md:hidden" id="nav">
    <a href="article.php" class="button active">
        <i class="fa-solid fa-house"></i> 
    </a>
    <a href="#" class="button">
        <i class="fa-solid fa-envelope"></i>
    </a>
    <a href="#" class="button">
        <i class="fa-solid fa-newspaper"></i>
    </a>
    <button type="button" class="button" data-dropdown-toggle="dropupPhone">
        <i class="fa-solid fa-bars"></i>
    </button>
	<div id="dropupPhone" class="hidden bg-white text-base z-10 list-none divide-y divide-gray-100 rounded shadow my-4 w-44">
    <ul class="py-1 bg-primary" aria-labelledby="dropdownLargeButton">
        <li>
            <a href="#" class="text-blanc bg-primary block px-4 py-2">Réalisation</a>
        </li>
        <li>
            <a href="#" class="text-blanc bg-primary block px-4 py-2">Présentation</a>
        </li>
    </ul>
</div>

</div>

    <main class="h-full overflow-hidden flex items-center justify-center" style="background: #141414;">
        <div class="space-y-5 w-9/12">

            <div class="overflow-hidden rounded-xl border border-[#171717] bg-[#141414]-50 p-1 mt-6">
                <ul class="flex items-center gap-2 text-sm font-medium ">
                    <li class="flex-1">
                        <a href="#all-section"
                            class="text-gray-700 relative flex items-center justify-center gap-2 rounded-lg bg-[#141414] px-3 py-2 shadow hover:bg-[#171717] hover:text-gray-500">
                            Tous</a>
                    </li>
                    <li class="flex-1">
                        <a href="#dev-section"
                            class="text-gray-700 relative flex items-center justify-center gap-2 rounded-lg bg-[#141414] px-3 py-2 shadow hover:bg-[#171717] hover:text-gray-500">
                            Pôle développement</a>
                    </li>
                    <li class="flex-1">
                        <a href="#design-section"
                            class="text-gray-700 relative flex items-center justify-center gap-2 rounded-lg bg-[#141414] px-3 py-2 shadow hover:bg-[#171717] hover:text-gray-500">
                            Pôle design
                        </a>
                    </li>
                    <li class="flex-1">
                        <a href="#ref-section"
                            class="text-gray-700 relative flex items-center justify-center gap-2 rounded-lg bg-[#141414] px-3 py-2 shadow hover:bg-[#171717] hover:text-gray-500">
                            Pôle référencement</a>
                    </li>
                </ul>

                <div id="all-section" class="mt-4">
                    <div id="cards" style="margin: auto;">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-image">
                                    <img src="../assets/images/articles/AI.jpg" alt="" width="250px">
                                </div>
                                <div class="card-info-wrapper">
                                    <div class="card-info">
                                        <div class="card-info-title">
                                            <h3 class="category_article">Pôle développement</h3>
                                            <h4>Les enjeux de la cybersécurité pour la création d'un site web ou web
                                                mobile</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <div class="card-image">
                                    <img src="../assets/images/articles/gaming.jpg " alt="" width="250px">
                                </div>
                                <div class="card-info-wrapper">
                                    <div class="card-info">
                                        <div class="card-info-title">
                                            <h3 class="category_article">Pôle développement</h3>
                                            <h4>Le développement de jeux vidéo : une industrie en constante évolution
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <div class="card-image">
                                    <img src="../assets/images/articles/web_design.jpeg" alt="" width="250px">
                                </div>
                                <div class="card-info-wrapper">
                                    <div class="card-info">
                                        <div class="card-info-title">
                                            <h3 class="category_article">Pôle design</h3>
                                            <h4>Le maquettage : l'étape cruciale de la conception de sites web et web
                                                mobile</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <div class="card-image">
                                    <img src="../assets/images/articles/concept-cybersecurite-ordinateur-gros-plan.jpg"
                                        alt="" width="250px">
                                </div>
                                <div class="card-info-wrapper">
                                    <div class="card-info">
                                        <div class="card-info-title">
                                            <h3 class="category_article">Pôle référencement</h3>
                                            <h4> L'importance du référencement dans la stratégie de marketing numérique
                                                d'un site web</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <div class="card-image">
                                    <img src="../assets/images/articles/dev.jpg" alt="" width="250px">
                                </div>
                                <div class="card-info-wrapper">
                                    <div class="card-info">
                                        <div class="card-info-title">
                                            <h3 class="category_article">Pôle design</h3>
                                            <h4>Les tendances récentes en web design : Couleurs audacieuses,
                                                typographies imposantes et expériences centrées sur l'utilisateur</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <div class="card-image">
                                    <img src="../assets/images/articles/framework.jpg" alt="" width="250px">
                                </div>
                                <div class="card-info-wrapper">
                                    <div class="card-info">
                                        <i class="fa-duotone fa-otter"></i>
                                        <div class="card-info-title">
                                            <h3 class="category_article">Pôle développement</h3>
                                            <h4>Blabla</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="dev-section" class="mt-4" style="display: none;">
                <div id="cards" style="margin: auto;">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-image">
                                    <img src="../assets/images/articles/AI.jpg" alt="" width="250px">
                                </div>
                                <div class="card-info-wrapper">
                                    <div class="card-info">
                                        <div class="card-info-title">
                                            <h3 class="category_article">Pôle développement</h3>
                                            <h4>Les enjeux de la cybersécurité pour la création d'un site web ou web
                                                mobile</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <div class="card-image">
                                    <img src="../assets/images/articles/gaming.jpg " alt="" width="250px">
                                </div>
                                <div class="card-info-wrapper">
                                    <div class="card-info">
                                        <div class="card-info-title">
                                            <h3 class="category_article">Pôle développement</h3>
                                            <h4>Le développement de jeux vidéo : une industrie en constante évolution
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                        
                        <div class="card">
                            <div class="card-content">
                                <div class="card-image">
                                    <img src="../assets/images/articles/dev.jpg" alt="" width="250px">
                                </div>
                                <div class="card-info-wrapper">
                                    <div class="card-info">
                                        <div class="card-info-title">
                                            <h3 class="category_article">Pôle design</h3>
                                            <h4>Les tendances récentes en web design : Couleurs audacieuses,
                                                typographies imposantes et expériences centrées sur l'utilisateur</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <div class="card-image">
                                    <img src="../assets/images/articles/framework.jpg" alt="" width="250px">
                                </div>
                                <div class="card-info-wrapper">
                                    <div class="card-info">
                                        <i class="fa-duotone fa-otter"></i>
                                        <div class="card-info-title">
                                            <h3 class="category_article">Pôle développement</h3>
                                            <h4>Blabla</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

                <div id="design-section" class="mt-4" style="display: none;">
                    <div id="cards" style="margin: auto;">
                        
                        <div class="card">
                            <div class="card-content">
                                <div class="card-image">
                                    <img src="../assets/images/articles/gaming.jpg " alt="" width="250px">
                                </div>
                                <div class="card-info-wrapper">
                                    <div class="card-info">
                                        <div class="card-info-title">
                                            <h3 class="category_article">Pôle développement</h3>
                                            <h4>Le développement de jeux vidéo : une industrie en constante évolution
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <div class="card-image">
                                    <img src="../assets/images/articles/web_design.jpeg" alt="" width="250px">
                                </div>
                                <div class="card-info-wrapper">
                                    <div class="card-info">
                                        <div class="card-info-title">
                                            <h3 class="category_article">Pôle design</h3>
                                            <h4>Le maquettage : l'étape cruciale de la conception de sites web et web
                                                mobile</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <div class="card-image">
                                    <img src="../assets/images/articles/concept-cybersecurite-ordinateur-gros-plan.jpg"
                                        alt="" width="250px">
                                </div>
                                <div class="card-info-wrapper">
                                    <div class="card-info">
                                        <div class="card-info-title">
                                            <h3 class="category_article">Pôle référencement</h3>
                                            <h4> L'importance du référencement dans la stratégie de marketing numérique
                                                d'un site web</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <div class="card-image">
                                    <img src="../assets/images/articles/dev.jpg" alt="" width="250px">
                                </div>
                                <div class="card-info-wrapper">
                                    <div class="card-info">
                                        <div class="card-info-title">
                                            <h3 class="category_article">Pôle design</h3>
                                            <h4>Les tendances récentes en web design : Couleurs audacieuses,
                                                typographies imposantes et expériences centrées sur l'utilisateur</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                </div>
               

                <div id="ref-section" class="mt-4" style="display: none;">
                    <div id="cards" style="margin: auto;">
                        
                        <div class="card">
                            <div class="card-content">
                                <div class="card-image">
                                    <img src="../assets/images/articles/web_design.jpeg" alt="" width="250px">
                                </div>
                                <div class="card-info-wrapper">
                                    <div class="card-info">
                                        <div class="card-info-title">
                                            <h3 class="category_article">Pôle design</h3>
                                            <h4>Le maquettage : l'étape cruciale de la conception de sites web et web
                                                mobile</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <div class="card-image">
                                    <img src="../assets/images/articles/concept-cybersecurite-ordinateur-gros-plan.jpg"
                                        alt="" width="250px">
                                </div>
                                <div class="card-info-wrapper">
                                    <div class="card-info">
                                        <div class="card-info-title">
                                            <h3 class="category_article">Pôle référencement</h3>
                                            <h4> L'importance du référencement dans la stratégie de marketing numérique
                                                d'un site web</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <div class="card-image">
                                    <img src="../assets/images/articles/dev.jpg" alt="" width="250px">
                                </div>
                                <div class="card-info-wrapper">
                                    <div class="card-info">
                                        <div class="card-info-title">
                                            <h3 class="category_article">Pôle design</h3>
                                            <h4>Les tendances récentes en web design : Couleurs audacieuses,
                                                typographies imposantes et expériences centrées sur l'utilisateur</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                </div>
            

            </div>
        </div>
    </main>


    <script src="../assets/js/cards.js"></script>
    <script src="../assets/js/tabs.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
    <script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>

</body>

</html>