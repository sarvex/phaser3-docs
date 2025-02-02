<nav class="menu-docs d-flex justify-content-center py-1 mt-3">
    <div class="menu-item mx-2 text-center {{ (request()->routeIs('docs.namespaces', ["version" => Config::get('app.phaser_version')]) OR (Config::get('app.actual_link') === 'namespaces')) ? 'menu-active' : '' }}">
        <a href="{{route('docs.namespaces', ['version' => $version])}}">
            Namespaces
        </a>
    </div>
    <div class="menu-item mx-2 {{ (request()->routeIs('docs.classes', ["version" => Config::get('app.phaser_version')]) OR (Config::get('app.actual_link') === 'classes')) ? 'menu-active' : '' }} text-center">
        <a href="{{route('docs.classes', ['version' => $version])}}">
            Classes
        </a>
    </div>
    <div class="menu-item mx-2 text-center {{ (request()->routeIs('docs.events', ['version' => $version]) OR (Config::get('app.actual_link') === 'events')) ? 'menu-active' : '' }}">
        <a href="{{route('docs.events', ['version' => $version])}}">
            Events
        </a>
    </div>
    <div class="menu-item mx-2 text-center {{ (request()->routeIs('docs.gameobjects', ['version' => $version])) ? 'menu-active' : '' }}">
        <a href="{{route('docs.gameobjects', ['version' => $version])}}">
            Game Objects
        </a>
    </div>
    <div class="menu-item mx-2 text-center {{ (request()->routeIs('docs.physics', ['version' => $version]))  ? 'menu-active' : '' }}">
        <a href="{{route('docs.physics', ['version' => $version])}}">
            Physics
        </a>
    </div>
    <div class="menu-item mx-2 text-center {{ (request()->routeIs('docs.scenes', ['version' => $version]))  ? 'menu-active' : '' }}">
        <a href="{{route('docs.scenes', ['version' => $version])}}">
            Scenes
        </a>
    </div>
    <div class="menu-item mx-2 text-center {{ (request()->routeIs('docs.changelog', ['version' => $version]))  ? 'menu-active' : '' }}">
        <a href="{{route('docs.changelog', ['version' => $version])}}">
            Changelog
        </a>
    </div>
</nav>
