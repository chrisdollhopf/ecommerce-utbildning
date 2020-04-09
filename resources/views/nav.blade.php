<div x-data="{ menu: false }">
  <div class="z-20 absolute w-full shadow-xl">
    <div class="flex justify-between bg-white px-6 md:px-10 lg:pl-20 py-4 md:py-6">
      <div class="font-semibold text-xl sm:text-2xl tracking-tight">
        <a href="#contact"
           class="text-gray-900">Emobile Utbildning</a>
      </div>

      <div class="">
        <button
          class="flex px-3 md:py-2 border-none sm:border sm:rounded text-gray-900 border-gray-900 hover:text-teal-400 hover:border-teal-400"
          x-on:click.prevent="menu = !menu"
          @keydown.escape="menu = false"
        >
          <svg
            class="fill-current h-6 w-6"
            viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg"
          >
            <title>Menu</title>
            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
          </svg>
        </button>

        <ul
          id="menu"
          x-show="menu"
          @click.away="menu = false"
          @scroll.window="menu = false"
          x-transition:enter="transform ease-out duration-100"
          x-transition:enter-start="opacity-0 transform scale-100"
          x-transition:enter-end="opacity-100 transform scale-100"
          x-transition:leave="transition ease-in duration-100"
          x-transition:leave-start="opacity-100 transform scale-100"
          x-transition:leave-end="opacity-0 transform scale-100"
          class="fixed bg-white w-full pt-4 text-right right-0"
        >
          <li class="bg-gray-200 hover:bg-gray-400 py-5 pr-20 hover:text-teal-400">
            <a href="#courses">Kurser</a>
          </li>
          <li class="bg-gray-200 hover:bg-gray-400 py-5 pr-20 hover:text-teal-400">
            <a href="#contact">Kontakta Oss</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>