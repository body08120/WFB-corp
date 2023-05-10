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