<footer>
    <h1>FOOTER</h1>
    <ul>
        <li><a href="{{ Route('home') }}" class="{{ request()->is('home/*') ? 'active' : '' }}">Home</a></li>
        <li><a href="{{ Route('about') }}" class="{{ request()->is('about') ? 'active' : '' }}">About</a></li>
    </ul>
</footer>
