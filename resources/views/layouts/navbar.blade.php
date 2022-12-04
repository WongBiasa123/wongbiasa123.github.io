
    <meta charset="UTF-8">
    {{-- --CSS-- --}}
    <link rel="stylesheet" href="/css/navbar2.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <nav>
        <div class="navbar">
            <i class='bx bx-menu'></i>
            <div class="logo"><a href="#">BELAJAR BARENG</a></div>
            <div class="nav-links">
                <div class="sidebar-logo">
                <span class="logo-name">BELAJAR BARENG</span>
                <i class='bx bx-x' ></i>
                </div>
                <ul class="links">
                    <li><a class="{{ Request::is('/') ? 'active' : '' }}" href="/">HOME</a></li>
                    <li>
                        <a class="{{ Request::is('mapel*') ? 'active' : '' }}" href="/posts">Materi</a>
                        <i class='bx bxs-chevron-down htmlcss-arrow arrow  '></i>
                        <ul class="htmlCss-sub-menu sub-menu">

                            <li><a href="/mapels/mapel-informatika">Informatika</a></li>
                            <li><a href="/mapels/mapel-jaringan-dasar">Jaringan Dasar</a></li>
                            <li><a href="/mapels/mapel-perakitan-komputer">Perakitan Komputer</a></li>

                            {{-- <li class="more">
                                <span><a href="#">More</a>
                                <i class='bx bxs-chevron-right arrow more-arrow'></i>
                                </span>
                                <ul class="more-sub-menu sub-menu">
                                    <li><a href="#">Neumorphism</a></li>
                                    <li><a href="#">Pre-loader</a></li>
                                    <li><a href="#">Glassmorphism</a></li>
                                </ul>
                            </li> --}}
                        </ul>
                    </li>
                    {{-- <li>
                        <a href="#">JAVASCRIPT</a>
                        <i class='bx bxs-chevron-down js-arrow arrow '></i>
                        <ul class="js-sub-menu sub-menu">
                            <li><a href="#">Dynamic Clock</a></li>
                            <li><a href="#">Form Validation</a></li>
                            <li><a href="#">Card Slider</a></li>
                            <li><a href="#">Complete Website</a></li>
                        </ul>
                    </li> --}}
                    <li><a class="{{ Request::is('about') ? 'active' : '' }}" href="/about">ABOUT US</a></li>
                    <li><a class="{{ Request::is('contact') ? 'active' : '' }}" href="/contact">CONTACT US</a></li>
                </ul>
            </div>
            {{-- <div class="bottom-content">
                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
            </div> --}}
            <div class="search-box">
                <i class='bx bx-search'></i>
                <div class="input-box">
                    <input type="text" placeholder="Search...">
                </div>
            </div>
        </div>
    </nav>
<script src="/js/navbar2.js"></script>
{{-- <script>
    const body = document.querySelector('body'),
        modeSwitch = body.querySelector(".sun-moon"),



    modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");

    // if(body.classList.contains("dark")){
    //     modeText.innerText = "Light mode";

    // }else{
    //     modeText.innerText = "Dark mode";

    // }
});
</script> --}}

