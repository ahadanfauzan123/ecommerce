<nav id="navbar" class="fixed z-50 h-[90px] w-[90vw] px-6 mx-[5vw] flex items-center justify-between mt-4 rounded-xl">
    <h1 class="text-2xl font-semibold">nge<span class="text-purple-400">vent</span></h1>
    {{-- list --}}
    <div class="flex items-center justify-between space-x-8">
        <h3 class="font-semibold text-md hover:text-purple-400 duration-200"><a href="">home</a></h3>
        <h3 class="font-semibold text-md hover:text-purple-400 duration-200"><a href="">about</a></h3>
        <h3 class="font-semibold text-md hover:text-purple-400 duration-200"><a href="">upcoming event</a></h3>
        <h3 class="font-semibold text-md hover:text-purple-400 duration-200"><a href="">contact</a></h3>
    </div>
    <div class="flex items-center justify-end space-x-5">
        <div><i class="bi bi-cart text-2xl"></i></div>

    <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class=" focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center" type="button">
        <i class="bi bi-list text-2xl"></i>
    </button>

    <!-- Dropdown menu -->
    <div id="dropdown" class="z-50 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
          <li>
            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
          </li>
          <li>
            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
          </li>
          <li>
            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
          </li>
          <li>
            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
          </li>
        </ul>
    </div>

    </div>

</nav>
<style>
    #myDropdown {
        display: none
    }
    nav {
        color: white;
    }
</style>
<script>
    document.addEventListener('scroll', function() {
            var navbar = document.getElementById('navbar');
                if (window.scrollY > 50) {
                    navbar.style.backgroundColor = '#ffff'; // Ganti dengan warna latar belakang yang diinginkan
                    if (window.scrollY === 0) {
                        turnBack()
                    } else {
                        navbar.classList.add("text-gray-600")
                    }
                } else {
                    navbar.style.backgroundColor = 'transparent';
                }
                function turnBack() {
                    navbar.classList.add("text-white")
                }
    }, 1000);
</script>
