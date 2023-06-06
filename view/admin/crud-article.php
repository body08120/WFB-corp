<!doctype html>

<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="../../assets/css/crud-article.css">
  <script src="script.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css"  rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>

</head>
<script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#1D1D1F',
            secondary: '#2b2b2f',
            third: '#505056',
            card: '#1C242A',
            blanc: '#F1F5F2',
            rose: '#8c7284',
            grenat: '#70163c',
          }
        }
      }
    }
  </script>

<body>

<?php include('../includes/navbar.php')?>

<div class="m-auto w-fit mt-24 mb-16 lg:mb-24 button-crud">
    <button class="tab-button glow-effect m-2" data-glow-offset="true" data-table="tab-users">
    <p class="hidden md:block">Users</p><p class="md:hidden"><i class="fa-solid fa-user" style="color: #ffffff;"></i></p>
    <svg class="glow-container">
        <rect pathLength="100" stroke-linecap="round" class="glow-blur"></rect>
        <rect pathLength="100" stroke-linecap="round" class="glow-line"></rect>
    </svg>
    </button>
    <button class="tab-button glow-effect m-2" data-glow-offset="true" data-table="tab-articles">
    <p class="hidden md:block">Articles</p><p class="md:hidden"><i class="fa-solid fa-newspaper text-white"></i></p>
    <svg class="glow-container">
        <rect pathLength="100" stroke-linecap="round" class="glow-blur"></rect>
        <rect pathLength="100" stroke-linecap="round" class="glow-line"></rect>
    </svg>
    </button>
    <button class="tab-button glow-effect m-2" data-glow-offset="true" data-table="tab-project">
    <p class="hidden md:block">Realisation</p><p class="md:hidden"><i class="fa-solid fa-paintbrush" style="color: #ffffff;"></i></p>
    <svg class="glow-container">
        <rect pathLength="100" stroke-linecap="round" class="glow-blur"></rect>
        <rect pathLength="100" stroke-linecap="round" class="glow-line"></rect>
    </svg>
    </button>
    <button class="tab-button glow-effect m-2" data-glow-offset="true" data-table="tab-commentaire">
    <p class="hidden md:block">Commentaire</p><p class="md:hidden"><i class="fa-solid fa-comment" style="color: #ffffff;"></i></p>
    <svg class="glow-container">
        <rect pathLength="100" stroke-linecap="round" class="glow-blur"></rect>
        <rect pathLength="100" stroke-linecap="round" class="glow-line"></rect>
    </svg>
    </button>
    <button class="tab-button glow-effect m-2" data-glow-offset="true" data-table="tab-faq">
    <p class="hidden md:block">F.A.Q</p><p class="md:hidden"><i class="fa-solid fa-question" style="color: #ffffff;"></i></p>
    <svg class="glow-container">
        <rect pathLength="100" stroke-linecap="round" class="glow-blur"></rect>
        <rect pathLength="100" stroke-linecap="round" class="glow-line"></rect>
    </svg>
    </button>
    <button class="tab-button glow-effect m-2" data-glow-offset="true" data-table="tab-contact">
    <p class="hidden md:block">Contact</p><p class="md:hidden"><i class="fa-solid fa-envelope text-white"></i></p>
    <svg class="glow-container">
        <rect pathLength="100" stroke-linecap="round" class="glow-blur"></rect>
        <rect pathLength="100" stroke-linecap="round" class="glow-line"></rect>
    </svg>
    </button>
</div>

<div class="tab-content active gradient-border w-full md:w-11/12 md:m-auto" id="tab-users">

<div class="w-full relative overflow-x-auto shadow-md sm:rounded-lg">
    <div class="pb-4 bg-primary dark:bg-gray-900">
        <label for="table-search" class="sr-only">Search</label>
        <div class="flex relative p-4">
            <div class="absolute inset-y-0 left-0 flex items-center pl-7 pointer-events-none">
            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
            </svg>
        </div>
        <input type="text" id="table-search" class="block p-2 pl-10 pr-8 text-sm text-third rounded-lg w-80 bg-secondary focus:ring-grenat focus:border-grenat" placeholder="Search for items">
        <button><i class="fa-solid fa-circle-plus absolute top-5 right-8 md:right-20 flex text-2xl" style="color: #33d17a;" data-modal-toggle="modalusers"></i></button>
    </div>
</div>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-blanc uppercase bg-secondary dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nom
                </th>
                <th scope="col" class="px-6 py-3">
                    Prénom
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Role
                </th>
                <th scope="col" class="px-6 py-3">
                    Id User
                </th>
                <th scope="col" class="px-6 py-3">
                    Poste 
                </th>
                <th scope="col" class="px-6 py-3">
                    Description 
                </th>
                <th scope="col" class="px-6 py-3">
                    Facebook
                </th>
                <th scope="col" class="px-6 py-3">
                    Twitter
                </th>
                <th scope="col" class="px-6 py-3">
                    Linkedin
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-primary text-blanc">
                <th scope="row" class="px-6 py-4 font-medium">
                    jufez
                </th>
                <td class="px-6 py-4">
                    Silver
                </td>
                <td class="px-6 py-4">
                    Laptop
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
                <td class="px-6 py-4 md:text-center">
                    <a href="#" class="mr-6 font-medium text-blue-600 dark:text-blue-500 hover:underline">Modifier</a>
                    <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Supprimer</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<nav aria-label="Pagination" class="flex items-center text-blanc p-4">
  <a href="#" class="p-2 mr-4 rounded hover:bg-blanc hover:text-primary">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
    </svg>
  </a>
  <a href="#" class="px-4 py-2 rounded hover:bg-blanc hover:text-primary"> 1 </a>
  <a href="#" class="px-4 py-2 rounded hover:bg-blanc hover:text-primary"> 2 </a>
  <a href="#" class="px-4 py-2 rounded hover:bg-blanc hover:text-primary"> 3 </a>
  <a href="#" class="px-4 py-2 rounded hover:bg-blanc hover:text-primary"> ... </a>
  <a href="#" class="px-4 py-2 rounded hover:bg-blanc hover:text-primary"> 9 </a>
  <a href="#" class="p-2 ml-4 rounded hover:bg-blanc hover:text-primary">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
    </svg>
  </a>
</nav>
</div>


<div id="modalusers" tabindex="-1" aria-hidden="true" class="hidden overflow-y-scroll overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative p-4 bg-modal rounded-lg shadow dark:bg-gray-800 sm:p-5">
            <!-- Modal header -->
            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                <h3 class="text-lg font-semibold text-blanc dark:text-white">
                    Ajouter un article 
                </h3>
                <button type="button" class="text-red-500 bg-transparent hover:text-red-700 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="modalusers">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form action="formulaireaddreal.php" method="POST">
                <div class="grid gap-4 mb-4 sm:grid-cols-2">
                    <div>
                        <label for="nomuser" class="block mb-2 text-sm font-medium text-blanc dark:text-white">Nom</label>
                        <input type="text" name="nomuser" id="nomuser" class="bg-gray-50 border border-gray-300 text-primary text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                    </div>
                    <div>
                        <label for="prenomuser" class="block mb-2 text-sm font-medium text-blanc dark:text-white">Prénom</label>
                        <input type="text" name="prenomuser" id="prenomuser" class="bg-gray-50 border border-gray-300 text-primary text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                    </div>
                    <div>
                        <label for="emailuser" class="block mb-2 text-sm font-medium text-blanc dark:text-white">Email</label>
                        <input type="text" name="emailuser" id="emailuser" class="bg-gray-50 border border-gray-300 text-primary text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                    </div>
                    <div>
                        <label for="roleuser" class="block mb-2 text-sm font-medium text-blanc dark:text-white">Role</label>
                        <input type="text" name="roleuser" id="roleuser" class="bg-gray-50 border border-gray-300 text-primary text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                    </div>
                    <div>
                        <label for="iduser" class="block mb-2 text-sm font-medium text-blanc dark:text-white">Id User</label>
                        <input type="text" name="iduser" id="iduser" class="bg-gray-50 border border-gray-300 text-primary text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                    </div>
                    <div>
                        <label for="posteuser" class="block mb-2 text-sm font-medium text-blanc dark:text-white">Poste</label>
                        <input type="text" name="posteuser" id="posteuser" class="bg-gray-50 border border-gray-300 text-primary text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                    </div>
                    <div>
                        <label for="descuser" class="block mb-2 text-sm font-medium text-blanc dark:text-white">Description</label>
                        <textarea name="descuser" id="descuser" rows="2" class="bg-gray-50 border border-gray-300 text-primary text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required=""></textarea> 
                    </div>
                    <div>
                        <label for="facebookuser" class="block mb-2 text-sm font-medium text-blanc dark:text-white">Facebook</label>
                        <input type="text" name="facebookuser" id="facebookuser" class="bg-gray-50 border border-gray-300 text-primary text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                    </div>
                    <div>
                        <label for="twitteruser" class="block mb-2 text-sm font-medium text-blanc dark:text-white">Twitter</label>
                        <input type="text" name="twitteruser" id="twitteruser" class="bg-gray-50 border border-gray-300 text-primary text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                    </div>
                    <div>
                        <label for="linkedinuser" class="block mb-2 text-sm font-medium text-blanc dark:text-white">Linkedin</label>
                        <input type="text" name="linkedinuser" id="linkedinuser" class="bg-gray-50 border border-gray-300 text-primary text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                    </div>
                </div>
                <button type="submit" class="text-white inline-flex items-center bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    Confirmer
                </button>
            </form>
        </div>
    </div>
</div>


<div class="tab-content gradient-border w-full md:w-11/12 md:m-auto" id="tab-articles">

<div class="w-full relative overflow-x-auto shadow-md sm:rounded-lg">
    <div class="pb-4 bg-primary dark:bg-gray-900">
        <label for="table-search" class="sr-only">Search</label>
        <div class="flex relative p-4">
            <div class="absolute inset-y-0 left-0 flex items-center pl-7 pointer-events-none">
            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
            </svg>
        </div>
        <input type="text" id="table-search" class="block p-2 pl-10 pr-8 text-sm text-third rounded-lg w-80 bg-secondary focus:ring-grenat focus:border-grenat" placeholder="Search for items">
        <button><i class="fa-solid fa-circle-plus absolute top-5 right-8 md:right-20 flex text-2xl" style="color: #33d17a;" data-modal-toggle="modalarticles"></i></button>
    </div>
    </div>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-blanc uppercase bg-secondary dark:bg-gray-700 dark:text-gray-400">
            <tr>

                <th scope="col" class="px-6 py-3">
                    Titre
                </th>
                <th scope="col" class="px-6 py-3">
                    Enoncer
                </th>
                <th scope="col" class="px-6 py-3">
                    Intro
                </th>
                <th scope="col" class="px-6 py-3">
                    p1
                </th>
                <th scope="col" class="px-6 py-3">
                    p2
                </th>
                <th scope="col" class="px-6 py-3">
                    p3
                </th>
                <th scope="col" class="px-6 py-3">
                    Conclusion
                </th>
                <th scope="col" class="px-6 py-3">
                    Id User
                </th>
                <th scope="col" class="px-6 py-3">
                    Catégorie
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-primary text-blanc">

                <th scope="row" class="px-6 py-4 font-medium">
                    Apple MacBook Pro 17"
                </th>
                <td class="px-6 py-4">
                    Silver
                </td>
                <td class="px-6 py-4">
                    Laptop
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
                <td class="px-6 py-4 md:text-center">
                    <a href="#" class="font-medium mr-6 text-blue-600 dark:text-blue-500 hover:underline">Modifier</a>
                    <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Supprimer</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<nav aria-label="Pagination" class="flex items-center text-blanc p-4">
  <a href="#" class="p-2 mr-4 rounded hover:bg-blanc hover:text-primary">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
    </svg>
  </a>
  <a href="#" class="px-4 py-2 rounded hover:bg-blanc hover:text-primary"> 1 </a>
  <a href="#" class="px-4 py-2 rounded hover:bg-blanc hover:text-primary"> 2 </a>
  <a href="#" class="px-4 py-2 rounded hover:bg-blanc hover:text-primary"> 3 </a>
  <a href="#" class="px-4 py-2 rounded hover:bg-blanc hover:text-primary"> ... </a>
  <a href="#" class="px-4 py-2 rounded hover:bg-blanc hover:text-primary"> 9 </a>
  <a href="#" class="p-2 ml-4 rounded hover:bg-blanc hover:text-primary">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
    </svg>
  </a>
</nav>
</div>


<div id="modalarticles" tabindex="-1" aria-hidden="true" class="hidden overflow-y-scroll overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative p-4 bg-modal rounded-lg shadow dark:bg-gray-800 sm:p-5">
            <!-- Modal header -->
            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                <h3 class="text-lg font-semibold text-blanc dark:text-white">
                    Ajouter un article 
                </h3>
                <button type="button" class="text-red-500 bg-transparent hover:text-red-700 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="modalarticles">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form action="formulaireaddreal.php" method="POST">
                <div class="grid gap-4 mb-4 sm:grid-cols-2">
                    <div>
                        <label for="titre" class="block mb-2 text-sm font-medium text-blanc dark:text-white">Titre</label>
                        <input type="text" name="titre" id="titre" class="bg-gray-50 border border-gray-300 text-primary text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                    </div>
                    <div>
                        <label for="enoncer" class="block mb-2 text-sm font-medium text-blanc dark:text-white">Enoncer</label>
                        <textarea name="enoncer" id="enoncer" rows="2" class="bg-gray-50 border border-gray-300 text-primary text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required=""></textarea> 
                    </div>
                    <div>
                        <label for="imageartice" class="block mb-2 text-sm font-medium text-blanc dark:text-white">Image</label>
                        <input type="file" name="imagearticle" id="imagearticle" class="bg-gray-50 border border-gray-300 text-primary text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="" required="">
                    </div>
                    <div>
                        <label for="intro" class="block mb-2 text-sm font-medium text-blanc dark:text-white">Intro</label>
                        <textarea name="intro" id="intro" rows="2" class="bg-gray-50 border border-gray-300 text-primary text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required=""></textarea> 
                    </div>
                    <div>
                        <label for="p1" class="block mb-2 text-sm font-medium text-blanc dark:text-white">Partie 1 </label>
                        <textarea name="p1" id="p1" rows="4" class="bg-gray-50 border border-gray-300 text-primary text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"></textarea> 
                    </div>
                    <div>
                        <label for="p2" class="block mb-2 text-sm font-medium text-blanc dark:text-white">Partie 2 </label>
                        <textarea name="p2" id="p2" rows="4" class="bg-gray-50 border border-gray-300 text-primary text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"></textarea> 
                    </div>
                    <div>
                        <label for="p3" class="block mb-2 text-sm font-medium text-blanc dark:text-white">Partie 3 </label>
                        <textarea name="p3" id="p3" rows="4" class="bg-gray-50 border border-gray-300 text-primary text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"></textarea> 
                    </div>
                    <div class="sm:col-span-2">
                        <label for="conclusion" class="block mb-2 text-sm font-medium text-blanc dark:text-white">Conclusion</label>
                        <textarea name="conclusion" id="conclusion" rows="2" class="block p-2.5 w-full text-sm text-primary bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"></textarea>                    
                    </div>
                </div>
                <button type="submit" class="text-white inline-flex items-center bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    Confirmer
                </button>
            </form>
        </div>
    </div>
</div>

<div class="tab-content gradient-border w-full md:w-11/12 md:m-auto" id="tab-project">

<div class="w-full relative overflow-x-auto shadow-md sm:rounded-lg">
    <div class="pb-4 bg-primary dark:bg-gray-900">
        <label for="table-search" class="sr-only">Search</label>
        <div class="flex relative p-4">
            <div class="absolute inset-y-0 left-0 flex items-center pl-7 pointer-events-none">
            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
            </svg>
        </div>
        <input type="text" id="table-search" class="block p-2 pl-10 pr-8 text-sm text-third rounded-lg w-80 bg-secondary focus:ring-grenat focus:border-grenat" placeholder="Search for items">
        <button><i class="fa-solid fa-circle-plus absolute top-5 right-8 md:right-20 flex text-2xl" style="color: #33d17a;" data-modal-toggle="modalproject"></i></button>
    </div>
</div>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-blanc uppercase bg-secondary dark:bg-gray-700 dark:text-gray-400">
            <tr>

                <th scope="col" class="px-6 py-3">
                    Id Réalisation
                </th>
                <th scope="col" class="px-6 py-3">
                    Titre
                </th>
                <th scope="col" class="px-6 py-3">
                    Image
                </th>
                <th scope="col" class="px-6 py-3">
                    Id Catégorie
                </th>
                <th scope="col" class="px-6 py-3">
                    Id User
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-primary text-blanc">

                <th scope="row" class="px-6 py-4 font-medium">
                    jufez
                </th>
                <td class="px-6 py-4">
                    Silver
                </td>
                <td class="px-6 py-4">
                    Laptop
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
                <td class="px-6 py-4 md:text-center">
                    <a href="#" class="mr-6 font-medium text-blue-600 dark:text-blue-500 hover:underline">Modifier</a>
                    <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Supprimer</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<nav aria-label="Pagination" class="flex items-center text-blanc p-4">
  <a href="#" class="p-2 mr-4 rounded hover:bg-blanc hover:text-primary">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
    </svg>
  </a>
  <a href="#" class="px-4 py-2 rounded hover:bg-blanc hover:text-primary"> 1 </a>
  <a href="#" class="px-4 py-2 rounded hover:bg-blanc hover:text-primary"> 2 </a>
  <a href="#" class="px-4 py-2 rounded hover:bg-blanc hover:text-primary"> 3 </a>
  <a href="#" class="px-4 py-2 rounded hover:bg-blanc hover:text-primary"> ... </a>
  <a href="#" class="px-4 py-2 rounded hover:bg-blanc hover:text-primary"> 9 </a>
  <a href="#" class="p-2 ml-4 rounded hover:bg-blanc hover:text-primary">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
    </svg>
  </a>
</nav>
</div>


<div id="modalproject" tabindex="-1" aria-hidden="true" class="hidden overflow-y-scroll overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative p-4 bg-modal rounded-lg shadow dark:bg-gray-800 sm:p-5">
            <!-- Modal header -->
            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                <h3 class="text-lg font-semibold text-blanc dark:text-white">
                    Ajouter un article 
                </h3>
                <button type="button" class="text-red-500 bg-transparent hover:text-red-700 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="modalproject">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form action="formulaireaddreal.php" method="POST">
                <div class="grid gap-4 mb-4 sm:grid-cols-2">
                    <div>
                        <label for="titrereal" class="block mb-2 text-sm font-medium text-blanc dark:text-white">Titre</label>
                        <input type="text" name="titrereal" id="titrereal" class="bg-gray-50 border border-gray-300 text-primary text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                    </div>
                    <div>
                        <label for="imagereal" class="block mb-2 text-sm font-medium text-blanc dark:text-white">Image</label>
                        <input type="file" name="imagereal" id="imagereal" class="bg-gray-50 border border-gray-300 text-primary text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="" required="">
                    </div>
                </div>
                <button type="submit" class="text-white inline-flex items-center bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    Confirmer
                </button>
            </form>
        </div>
    </div>
</div>

<div class="tab-content gradient-border w-full md:w-11/12 md:m-auto" id="tab-commentaire">

<div class="w-full relative overflow-x-auto shadow-md sm:rounded-lg">
    <div class="pb-4 bg-primary dark:bg-gray-900">
        <label for="table-search" class="sr-only">Search</label>
        <div class="flex relative p-4">
            <div class="absolute inset-y-0 left-0 flex items-center pl-7 pointer-events-none">
            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
            </svg>
        </div>
        <input type="text" id="table-commentaire" class="block p-2 pl-10 pr-8 text-sm text-third rounded-lg w-80 bg-secondary focus:ring-grenat focus:border-grenat" placeholder="Search for items">
        <button><i class="fa-solid fa-circle-plus absolute top-5 right-8 md:right-20 flex text-2xl" style="color: #33d17a;" data-modal-toggle="modalcommentaire"></i></button>
    </div>
</div>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-blanc uppercase bg-secondary dark:bg-gray-700 dark:text-gray-400">
            <tr>

                <th scope="col" class="px-6 py-3">
                    Id Commentaire
                </th>
                <th scope="col" class="px-6 py-3">
                    Nom
                </th>
                <th scope="col" class="px-6 py-3">
                    Image
                </th>
                <th scope="col" class="px-6 py-3">
                    Commentaire
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-primary text-blanc">

                <th scope="row" class="px-6 py-4 font-medium">
                    jufez
                </th>
                <td class="px-6 py-4">
                    Silver
                </td>
                <td class="px-6 py-4">
                    Laptop
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
                <td class="px-6 py-4 md:text-center">
                    <a href="#" class="mr-6 font-medium text-blue-600 dark:text-blue-500 hover:underline">Modifier</a>
                    <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Supprimer</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<nav aria-label="Pagination" class="flex items-center text-blanc p-4">
  <a href="#" class="p-2 mr-4 rounded hover:bg-blanc hover:text-primary">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
    </svg>
  </a>
  <a href="#" class="px-4 py-2 rounded hover:bg-blanc hover:text-primary"> 1 </a>
  <a href="#" class="px-4 py-2 rounded hover:bg-blanc hover:text-primary"> 2 </a>
  <a href="#" class="px-4 py-2 rounded hover:bg-blanc hover:text-primary"> 3 </a>
  <a href="#" class="px-4 py-2 rounded hover:bg-blanc hover:text-primary"> ... </a>
  <a href="#" class="px-4 py-2 rounded hover:bg-blanc hover:text-primary"> 9 </a>
  <a href="#" class="p-2 ml-4 rounded hover:bg-blanc hover:text-primary">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
    </svg>
  </a>
</nav>
</div>


<div id="modalcommentaire" tabindex="-1" aria-hidden="true" class="hidden overflow-y-scroll overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative p-4 bg-modal rounded-lg shadow dark:bg-gray-800 sm:p-5">
            <!-- Modal header -->
            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                <h3 class="text-lg font-semibold text-blanc dark:text-white">
                    Ajouter un article 
                </h3>
                <button type="button" class="text-red-500 bg-transparent hover:text-red-700 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="modalcommentaire">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form action="formulaireaddreal.php" method="POST">
                <div class="grid gap-4 mb-4 sm:grid-cols-2">
                    <div>
                        <label for="nomcomms" class="block mb-2 text-sm font-medium text-blanc dark:text-white">Nom</label>
                        <input type="text" name="nomcomms" id="nomcomms" class="bg-gray-50 border border-gray-300 text-primary text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                    </div>
                    <div>
                        <label for="imagecomms" class="block mb-2 text-sm font-medium text-blanc dark:text-white">Image</label>
                        <input type="file" name="imagecomms" id="imagecomms" class="bg-gray-50 border border-gray-300 text-primary text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                    </div>
                    <div>
                        <label for="textcomms" class="block mb-2 text-sm font-medium text-blanc dark:text-white">Commentaire</label>
                        <textarea name="textcommms" id="textcomms" rows="2" class="bg-gray-50 border border-gray-300 text-primary text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required=""></textarea> 
                    </div>
                </div>
                <button type="submit" class="text-white inline-flex items-center bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    Confirmer
                </button>
            </form>
        </div>
    </div>
</div>

<div class="tab-content gradient-border w-full md:w-11/12 md:m-auto" id="tab-faq">

<div class="w-full relative overflow-x-auto shadow-md sm:rounded-lg">
    <div class="pb-4 bg-primary dark:bg-gray-900">
        <label for="table-search" class="sr-only">Search</label>
        <div class="flex relative p-4">
            <div class="absolute inset-y-0 left-0 flex items-center pl-7 pointer-events-none">
            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
            </svg>
        </div>
        <input type="text" id="table-faq" class="block p-2 pl-10 pr-8 text-sm text-third rounded-lg w-80 bg-secondary focus:ring-grenat focus:border-grenat" placeholder="Search for items">
        <button><i class="fa-solid fa-circle-plus absolute top-5 right-8 md:right-20 flex text-2xl" style="color: #33d17a;" data-modal-toggle="modalfaq"></i></button>
    </div>
</div>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-blanc uppercase bg-secondary dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Id Faq
                </th>
                <th scope="col" class="px-6 py-3">
                    Question
                </th>
                <th scope="col" class="px-6 py-3">
                    Réponse
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-primary text-blanc">

                <th scope="row" class="px-6 py-4 font-medium">
                    jufez
                </th>
                <td class="px-6 py-4">
                    Silver
                </td>
                <td class="px-6 py-4">
                    Laptop
                </td>
                <td class="px-6 py-4 md:text-center">
                    <a href="#" class="mr-6 font-medium text-blue-600 dark:text-blue-500 hover:underline">Modifier</a>
                    <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Supprimer</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<nav aria-label="Pagination" class="flex items-center text-blanc p-4">
  <a href="#" class="p-2 mr-4 rounded hover:bg-blanc hover:text-primary">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
    </svg>
  </a>
  <a href="#" class="px-4 py-2 rounded hover:bg-blanc hover:text-primary"> 1 </a>
  <a href="#" class="px-4 py-2 rounded hover:bg-blanc hover:text-primary"> 2 </a>
  <a href="#" class="px-4 py-2 rounded hover:bg-blanc hover:text-primary"> 3 </a>
  <a href="#" class="px-4 py-2 rounded hover:bg-blanc hover:text-primary"> ... </a>
  <a href="#" class="px-4 py-2 rounded hover:bg-blanc hover:text-primary"> 9 </a>
  <a href="#" class="p-2 ml-4 rounded hover:bg-blanc hover:text-primary">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
    </svg>
  </a>
</nav>
</div>


<div id="modalfaq" tabindex="-1" aria-hidden="true" class="hidden overflow-y-scroll overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative p-4 bg-modal rounded-lg shadow dark:bg-gray-800 sm:p-5">
            <!-- Modal header -->
            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                <h3 class="text-lg font-semibold text-blanc dark:text-white">
                    Ajouter un article 
                </h3>
                <button type="button" class="text-red-500 bg-transparent hover:text-red-700 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="modalfaq">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form action="formulaireaddreal.php" method="POST">
                <div class="grid gap-4 mb-4 sm:grid-cols-2">
                    <div>
                        <label for="question" class="block mb-2 text-sm font-medium text-blanc dark:text-white">Question</label>
                        <input type="text" name="question" id="question" class="bg-gray-50 border border-gray-300 text-primary text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                    </div>
                    <div>
                        <label for="textquestion" class="block mb-2 text-sm font-medium text-blanc dark:text-white">Commentaire</label>
                        <textarea name="textquestion" id="textquestion" rows="4" class="bg-gray-50 border border-gray-300 text-primary text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required=""></textarea> 
                    </div>
                </div>
                <button type="submit" class="text-white inline-flex items-center bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    Confirmer
                </button>
            </form>
        </div>
    </div>
</div>

<div class="tab-content gradient-border w-full md:w-11/12 md:m-auto" id="tab-contact">

<div class="w-full relative overflow-x-auto shadow-md sm:rounded-lg">
    <div class="pb-4 bg-primary dark:bg-gray-900">
        <label for="table-search" class="sr-only">Search</label>
        <div class="flex relative p-4">
            <div class="absolute inset-y-0 left-0 flex items-center pl-7 pointer-events-none">
            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
            </svg>
        </div>
        <input type="text" id="table-search" class="block p-2 pl-10 pr-8 text-sm text-third rounded-lg w-80 bg-secondary focus:ring-grenat focus:border-grenat" placeholder="Search for items">
    </div>
    </div>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-blanc uppercase bg-secondary dark:bg-gray-700 dark:text-gray-400">
            <tr>

                <th scope="col" class="px-6 py-3">
                    Nom
                </th>
                <th scope="col" class="px-6 py-3">
                    Prénom
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Motif
                </th>
                <th scope="col" class="px-6 py-3">
                    Message
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-primary text-blanc">

                <th scope="row" class="px-6 py-4 font-medium">
                    Apple MacBook Pro 17"
                </th>
                <td class="px-6 py-4">
                    Silver
                </td>
                <td class="px-6 py-4">
                    Laptop
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
                <td class="px-6 py-4 md:text-center">
                    <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Supprimer</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<nav aria-label="Pagination" class="flex items-center text-blanc p-4">
  <a href="#" class="p-2 mr-4 rounded hover:bg-blanc hover:text-primary">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
    </svg>
  </a>
  <a href="#" class="px-4 py-2 rounded hover:bg-blanc hover:text-primary"> 1 </a>
  <a href="#" class="px-4 py-2 rounded hover:bg-blanc hover:text-primary"> 2 </a>
  <a href="#" class="px-4 py-2 rounded hover:bg-blanc hover:text-primary"> 3 </a>
  <a href="#" class="px-4 py-2 rounded hover:bg-blanc hover:text-primary"> ... </a>
  <a href="#" class="px-4 py-2 rounded hover:bg-blanc hover:text-primary"> 9 </a>
  <a href="#" class="p-2 ml-4 rounded hover:bg-blanc hover:text-primary">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
    </svg>
  </a>
</nav>
</div>

<footer class="footerprim pl-4 pr-4 md:ml-0 md:mr-0">
  <div class="mx-auto w-full lg:py-8 xl:px-52">
    <div class="md:flex md:justify-between">
      <div class="mb-6 md:mb-0">
        <a href="https://flowbite.com/" class="flex items-center">
          <img src="../../assets/images/logo.png" class="h-16 mr-3" alt="WFB CORP Logo" />
        </a>
      </div>
      <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
        <div>
          <h2 class="mb-6 text-sm font-semibold text-blanc uppercase text-center">
            Ressources
          </h2>
          <ul class="text-gray-500 font-medium">
            <li class="mb-4 text-center">
              <a href="https://flowbite.com/" class="hover:underline hover:text-grenat">Flowbite</a>

            </li>
            <li class="text-center">
              <a href="https://tailwindcss.com/" class="hover:underline hover:text-grenat">Tailwind CSS</a>
            </li>
          </ul>
        </div>
        <div>
          <h2 class="mb-6 text-sm font-semibold text-blanc uppercase text-center">
            Suivez-nous
          </h2>
          <ul class="text-gray-500 font-medium">
            <li class="mb-4 text-center">
              <a href="https://github.com/themesberg/flowbite" class="hover:underline hover:text-grenat">Github</a>

            </li>
            <li class="text-center">
              <a href="https://discord.gg/4eeurUVvTy" class="hover:underline hover:text-grenat">Discord</a>
            </li>
          </ul>
        </div>
        <div>
          <h2 class="mb-6 text-sm font-semibold text-blanc uppercase text-center">
            Mentions légales
          </h2>
          <ul class="text-gray-500 font-medium">
            <li class="mb-4 text-center">
              <a href="#" class="hover:underline hover:text-grenat">Politique de confidentialité

              </a>
            </li>
            <li class="text-center">
              <a href="#" class="hover:underline hover:text-grenat">Termes &amp; conditions</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <hr class="my-6 border-blanc sm:mx-auto lg:my-8" />
    <div class="sm:flex sm:items-center sm:justify-between">
      <span class="text-sm text-gray-500 sm:text-center ">© 2023
        <a href="https://flowbite.com/" class="hover:underline hover:text-grenat">WFB Corporation™</a>. Tous droits
        réservés.
      </span>
      <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
        <a href="#" class="text-rose hover:text-grenat">

          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path fill-rule="evenodd"
              d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
              clip-rule="evenodd" />
          </svg>
          <span class="sr-only">Facebook page</span>
        </a>
        <a href="#" class="text-rose hover:text-grenat">

          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path fill-rule="evenodd"
              d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
              clip-rule="evenodd" />
          </svg>
          <span class="sr-only">Instagram page</span>
        </a>
        <a href="#" class="text-rose hover:text-grenat">

          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path
              d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
          </svg>
          <span class="sr-only">Twitter page</span>
        </a>
        <a href="#" class="text-rose hover:text-grenat">

          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path fill-rule="evenodd"
              d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
              clip-rule="evenodd" />
          </svg>
          <span class="sr-only">GitHub account</span>
        </a>
        <a href="#" class="text-rose hover:text-grenat">
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

        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

<script>

var colors = new Array(
  [62,35,255],
  [60,255,60],
  [255,35,98],
  [45,175,230],
  [255,0,255],
  [255,128,0]);

var step = 0;
//color table indices for: 
// current color left
// next color left
// current color right
// next color right
var colorIndices = [0,1,2,3];

//transition speed
var gradientSpeed = 0.002;

function updateGradient()
{
  
  if ( $===undefined ) return;
  
var c0_0 = colors[colorIndices[0]];
var c0_1 = colors[colorIndices[1]];
var c1_0 = colors[colorIndices[2]];
var c1_1 = colors[colorIndices[3]];

var istep = 1 - step;
var r1 = Math.round(istep * c0_0[0] + step * c0_1[0]);
var g1 = Math.round(istep * c0_0[1] + step * c0_1[1]);
var b1 = Math.round(istep * c0_0[2] + step * c0_1[2]);
var color1 = "rgb("+r1+","+g1+","+b1+")";

var r2 = Math.round(istep * c1_0[0] + step * c1_1[0]);
var g2 = Math.round(istep * c1_0[1] + step * c1_1[1]);
var b2 = Math.round(istep * c1_0[2] + step * c1_1[2]);
var color2 = "rgb("+r2+","+g2+","+b2+")";

 $('#gradient').css({
   background: "-webkit-gradient(linear, left top, right top, from("+color1+"), to("+color2+"))"}).css({
    background: "-moz-linear-gradient(left, "+color1+" 0%, "+color2+" 100%)"});
  
  step += gradientSpeed;
  if ( step >= 1 )
  {
    step %= 1;
    colorIndices[0] = colorIndices[1];
    colorIndices[2] = colorIndices[3];
    
    //pick two new target color indices
    //do not pick the same as the current one
    colorIndices[1] = ( colorIndices[1] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;
    colorIndices[3] = ( colorIndices[3] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;
    
  }
}

setInterval(updateGradient,10);
</script>

<script>

(function setGlowEffectRx() {
  const glowEffects = document.querySelectorAll(".glow-effect");

  glowEffects.forEach((glowEffect) => {
    const glowLines = glowEffect.querySelectorAll("rect");
    const rx = getComputedStyle(glowEffect).borderRadius;

    glowLines.forEach((line) => {
      line.setAttribute("rx", rx);
    });
  });
})();


</script>


<script>
  $(document).ready(function() {
    $('.tab-button').click(function() {
      var target = $(this).data('table');
      $('.tab-content').removeClass('active');
      $('#' + target).addClass('active');
    });
  });
</script>

</body>

</html>