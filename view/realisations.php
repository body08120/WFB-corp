<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com/3.3.0"></script>
    <link rel="stylesheet" href="assets/css/cards.css">
    <link rel="stylesheet" href="assets/css/accueil.css">

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

<?php include_once('includes/navbar.php')?>

</div>

    <main class="h-full overflow-hidden flex items-center justify-center">
        <div class="space-y-5 w-full">

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
                    <div class="cards" style="margin: auto;">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-image w-full">
                                    <img class="w-full" src="assets/images/articles/AI.webp" alt="" >
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
                                <div class="card-image w-full">
                                    <img class="w-full" src="assets/images/articles/gaming.webp" alt="" >
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
                                <div class="card-image w-full">
                                    <img class="w-full" src="assets/images/articles/web_design.webp" alt="" >
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
                                <div class="card-image w-full">
                                    <img class="w-full" src="assets/images/articles/concept-cybersecurite-ordinateur-gros-plan.webp"
                                        alt="" >
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
                                <div class="card-image w-full">
                                    <img class="w-full" src="assets/images/articles/dev.webp" alt="" >
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
                                <div class="card-image w-full">
                                    <img class="w-full" src="assets/images/articles/framework.webp" alt="" >
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
                <div class="cards" style="margin: auto;">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-image w-full">
                                    <img class="w-full" src="assets/images/articles/AI.webp" alt="" >
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
                                <div class="card-image w-full">
                                    <img class="w-full" src="assets/images/articles/gaming.webp" alt="" >
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
                                <div class="card-image w-full">
                                    <img class="w-full" src="assets/images/articles/dev.webp" alt="" >
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
                                <div class="card-image w-full">
                                    <img class="w-full" src="assets/images/articles/framework.webp" alt="" >
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


                <div id="design-section" class="mt-4" style="display: none;">
                <div class="cards" style="margin: auto;">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-image w-full">
                                    <img class="w-full" src="assets/images/articles/AI.webp" alt="" >
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
                                <div class="card-image w-full">
                                    <img class="w-full" src="assets/images/articles/gaming.webp" alt="" >
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
                                <div class="card-image w-full">
                                    <img class="w-full" src="assets/images/articles/dev.webp" alt="" >
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
                                <div class="card-image w-full">
                                    <img class="w-full" src="assets/images/articles/framework.webp" alt="" >
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
               

                <div id="ref-section" class="mt-4" style="display: none;">
                    <div class="cards" style="margin: auto;">
                        
                        <div class="card">
                            <div class="card-content">
                                <div class="card-image w-full">
                                    <img class="w-full" src="assets/images/articles/web_design.webp" alt="" >
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
                                <div class="card-image w-full">
                                    <img class="w-full" src="assets/images/articles/concept-cybersecurite-ordinateur-gros-plan.webp"
                                        alt="" >
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
                                <div class="card-image w-full">
                                    <img class="w-full" src="assets/images/articles/dev.webp" alt="">
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

    <?php include_once('includes/footer.php')?>


    <script src="assets/js/cards.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
    <script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>

</body>

</html>