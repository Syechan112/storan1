<nav class="p-4 bgnav" x-data="{ open: false }">
    <div class="container flex flex-col items-center mx-auto">

        <!-- Menu -->
        <ul class="flex-col items-center hidden md:flex md:flex-row md:space-x-10">
            <li><a href="/" class="text-2xl font-bold text-white">Home</a></li>
            <li><a href="/about" class="text-2xl font-bold text-white">About</a></li>
            <li><a href="/contact" class="text-2xl font-bold text-white">Contact us</a></li>
        </ul>

        <!-- Mobile Menu Button -->
        <button @click="open = !open" class="mb-4 text-white md:hidden">
            <!-- Menu Icon -->
            <svg x-show="!open" class="feather feather-chevron-down" fill="none" height=30" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="30px" xmlns="http://www.w3.org/2000/svg"><polyline points="6 9 12 15 18 9"/></svg>
            <!-- Close Icon -->
            <svg x-show="open" class="feather feather-chevron-up" fill="none" height="30" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="30px" xmlns="http://www.w3.org/2000/svg"><polyline points="18 15 12 9 6 15"/></svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div x-show="open"
    x-transition:enter="transition-transform transform opacity-0 scale-95"
    x-transition:enter-start="opacity-0 scale-95"
    x-transition:enter-end="opacity-100 scale-100"
    x-transition:leave="transition-transform transform opacity-100 scale-100"
    x-transition:leave-start="opacity-100 scale-100"
    x-transition:leave-end="opacity-0 scale-95"
    class="p-4 overflow-hidden md:hidden">
    <ul class="flex flex-col items-center space-y-4">
        <li><a href="/" class="text-2xl font-bold text-white">Home</a></li>
        <li><a href="/about" class="text-2xl font-bold text-white">About</a></li>
        <li><a href="/contact" class="text-2xl font-bold text-white">Contact us</a></li>
    </ul>
</div>
</nav>
