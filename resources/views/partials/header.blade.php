<header>
    {{-- Top-header --}}
    <div class="top-header">
        <div class="container">
            <span>
                Dc power<i class="fas fa-trademark"></i>
                visa<i class="far fa-registered"></i>
            </span>
            <span>
                Additional dc sites
                <i class="fas fa-sort-down arrow"></i>
            </span>
        </div>
    </div>

    {{-- Bottom-header --}}
    <div class="bottom-header">
        <div class="container position">
            <div class="logo">
                <img src="{{asset('images/dc-logo.png')}}" alt="">
            </div>
            <div>
                <ul>
                    <li>
                        Characters
                    </li>
                    <li>
                        <a href="{{ route('homepage') }}" 
                        class="{{ Request::route()->getName() === 'homepage' ? 'active' : '' }}">
                            Comics
                        </a>
                    </li>
                    <li>
                        Movies
                    </li>
                    <li>
                        Tv
                    </li>
                    <li>
                        Games
                    </li>
                    <li>
                        Collectibles
                    </li>
                    <li>
                        Videos
                    </li>
                    <li>
                        Fans
                    </li>
                    <li>
                        News
                    </li>
                    <li>
                        Shop
                        <i class="fas fa-sort-down arrow"></i>
                    </li>
                </ul>
            </div>
            <div>
                <input type="text" placeholder="Search">
                <i class="fas fa-search search"></i>
            </div>
        </div>
    </div>

    <div class="jumbotron">
        <img src="{{asset('images/jumbotron.jpg')}}" alt="">
    </div>
</header>