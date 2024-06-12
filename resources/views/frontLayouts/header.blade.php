<header class="bg-black text-white py-4 px-8 flex justify-between items-center">
    <div class="text-2xl font-bold text-yellow-500">
        Carat Gallery
    </div>
    <nav class="hidden md:flex space-x-8">
        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-yellow-500' : 'hover:text-yellow-500' }}">HOME</a>
        <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'text-yellow-500' : 'hover:text-yellow-500' }}">ABOUT</a>
        <a href="{{ route('gallery') }}" class="{{ request()->routeIs('gallery') ? 'text-yellow-500' : 'hover:text-yellow-500' }}">CARAT GALLERY CLUB</a>
        <a href="{{ route('collection') }}" class="{{ request()->routeIs('collection') ? 'text-yellow-500' : 'hover:text-yellow-500' }}">COLLECTION</a>
        <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'text-yellow-500' : 'hover:text-yellow-500' }}">CONTACT</a>
    </nav>
    <a href="#"
       class="hidden md:inline-block bg-yellow-500 text-black px-4 py-2 rounded-full hover:bg-yellow-600 transition duration-300">
        Get A Quote
    </a>
    <button id="menu-toggle" class="md:hidden text-yellow-500 focus:outline-none">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
             xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
    </button>
</header>
<nav id="mobile-menu" class="hidden md:hidden bg-black text-white space-y-4 px-8 py-4">
    <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-yellow-500' : 'hover:text-yellow-500' }}">HOME</a>
    <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'text-yellow-500' : 'hover:text-yellow-500' }}">ABOUT</a>
    <a href="{{ route('gallery') }}" class="{{ request()->routeIs('gallery') ? 'text-yellow-500' : 'hover:text-yellow-500' }}">CARAT GALLERY CLUB</a>
    <a href="{{ route('collection') }}" class="{{ request()->routeIs('collection') ? 'text-yellow-500' : 'hover:text-yellow-500' }}">COLLECTION</a>
    <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'text-yellow-500' : 'hover:text-yellow-500' }}">CONTACT</a>
    <a href="#" class="block bg-yellow-500 text-black px-4 py-2 rounded-full hover:bg-yellow-600 transition duration-300">
        Get A Quote
    </a>
</nav>
