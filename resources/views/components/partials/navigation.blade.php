<ul>
    <li><a class="{{ request()->routeIs('home') ? 'text-green-400' : 'text-gray-700'}}" href="{{ route('home') }}">Home</a></li>
    <li><a class="{{ request()->routeIs('posts.*') ? 'text-green-400' : 'text-gray-700' }}" href="{{ route('posts.index') }}">Blog</a></li>
    <li><a class="{{ request()->routeIs('about') ? 'text-green-400' : 'text-gray-700' }}" href="{{ route('about') }}">Nosotros</a></li>
    <li><a class="{{ request()->routeIs('contact') ? 'text-green-400' : 'text-gray-700' }}" href="{{ route('contact') }}">Contacto</a></li>
</ul>
