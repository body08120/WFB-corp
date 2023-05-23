<style>
  :root {
    --theme-background: 10 10 10;
    --linear-gradient: linear-gradient(to right, rgb(var(--gradient-color-1)), rgb(var(--gradient-color-2)));
  }

  .navbaranim {
    position: relative;
    cursor: pointer;
    font-size: 20px;
    color: #F1F5F2;
  }

  .navbaranim::before {
    content: "";
    background-color: #70163c;
    position: absolute;
    left: 0;
    bottom: -0.3rem;
    height: 3px;
    width: 0;
    transition: 0.3s ease-in-out;
  }

  .navbaranim:hover::before {
    content: "";
    background-color: #70163c;
    position: absolute;
    left: 0;
    bottom: -0.3rem;
    height: 3px;
    width: 100%;
  }

  .navbaranim::after {
    content: "";
    background-color: #70163c;
    position: absolute;
    left: 0;
    bottom: -0;
    height: 3px;
    width: 0;
    transition: 0.3s ease-in-out;
  }

  #nav {
    position: fixed;
    bottom: 0px;
    justify-content: space-around;
    background-color: rgb(var(--theme-background));
    padding: 0.5rem 1rem;
    border-top: 1px solid rgb(255 255 255 / 10%);
  }

  #nav>button {
    padding: 0.5rem 1rem;
    border-radius: 0.25rem;
    position: relative;
  }

  #nav>a {
    padding: 0.5rem 1rem;
    border-radius: 0.25rem;
    position: relative;
  }

  #nav>button.active:after #nav>a.active:after {
    content: "";
    height: 0.25rem;
    width: 1.5rem;
    position: absolute;
    top: -0.5rem;
    left: 50%;
    translate: -50%;
    background: var(--linear-gradient);
    border-bottom-left-radius: 0.25rem;
    border-bottom-right-radius: 0.25rem;
  }

  #nav>button:hover,
  #nav>a:hover,
  #nav>button:focus-visible {
    background-color: rgb(255 255 255 / 10%);
  }

  #nav>button>i {
    width: 1.5rem;
    font-size: 1.1rem;
    text-align: center;
  }

  .navbarstyle {
  background-image: linear-gradient(#1C242A, #1D1D1F);
}
</style>

<div class="hidden sticky top-0 z-50 md:w-full relative md:block">
  <nav class="navbarstyle">

    <div
      class="container mx-auto flex flex-wrap items-center justify-between w-fit md:container flex justify-center w-fit min-w-full">
      <a href="index.php?action="><img class="md:hidden w-4/12 ml-6" src="assets/images/logowithoutback.png"></a>
      <button data-collapse-toggle="mobile-menu" type="button"
        class="md:hidden mr-3 text-gray-400 hover:text-blanc focus:outline-none focus:ring-2 focus:ring-blue-300 rounded-lg inline-flex items-center justify-center"
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
          <li class="w-full md:w-auto">
            <a href="index.php?action=articles" class="flex items-center md: navbaranim "
              aria-current="page">Articles</a>
          </li>
          <li class="w-full md:w-auto">
            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
              class="flex items-center text-blanc font-medium w-full md: navbaranim">Présentations <svg
                class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                  clip-rule="evenodd"></path>
              </svg></button>
            <!-- Dropdown menu -->
            <div id="dropdownNavbar"
              class="hidden bg-white text-base z-10 list-none divide-y divide-gray-100 rounded shadow my-4 w-44">
              <ul class="" aria-labelledby="dropdownLargeButton">
                <li>
                  <a href="index.php?action=presentation#header"
                    class="bg-primary text-blanc hover:bg-blanc hover:text-primary block px-4 py-2">Découvrez-nous</a>
                </li>
                <li>
                  <a href="index.php?action=presentation#team"
                    class="bg-primary text-blanc hover:bg-blanc hover:text-primary block px-4 py-2">Notre équipe</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="hidden md:block w-2/12">
            <a href="index.php?action="><img class="w-4/6" src="assets/images/logowithoutback.png"></a>
          </li>
          <li class="w-full md:w-auto">
            <a href="index.php?action=realisations" class="font-medium text-blanc md: navbaranim">Réalisations</a>
          </li>
          <li class="w-full md:w-auto">
            <a href="index.php?action=accueil#contacternous" class="font-medium text-blanc md: navbaranim">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>

<!--mobile menu navigation-->
<div class="z-[500] flex w-full md:hidden" id="nav">
  <a href="article.php" class="button active">
    <i class="fa-solid fa-house text-white"></i>
  </a>
  <a href="#" class="button">
    <i class="fa-solid fa-envelope text-white"></i>
  </a>
  <a href="#" class="button">
    <i class="fa-solid fa-newspaper text-white"></i>
  </a>
  <button type="button" class="button" data-dropdown-toggle="dropupPhone">
    <i class="fa-solid fa-bars text-white"></i>
  </button>
  <div id="dropupPhone"
    class="hidden bg-white text-base z-10 list-none divide-y divide-gray-100 rounded shadow my-4 w-44">
    <ul class="py-1 bg-primary" aria-labelledby="dropdownLargeButton">
      <li>
        <a href="index.php?action=realisations" class="text-blanc bg-primary block px-4 py-2">Réalisations</a>
      </li>
      <li>
        <a href="index.php?action=presentation" class="text-blanc bg-primary block px-4 py-2">Présentation</a>
      </li>
    </ul>
  </div>

</div>