
        <meta charset="UTF-8">
        <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
        <link rel="stylesheet" href="/css/sidebar2.css">
        <!-- Boxicons CDN Link -->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bxl-c-plus-plus icon'></i>
            <div class="logo_name">Codingers</div>
            <i class='bx bx-menu' id="btn" ></i>
        </div>

    @if(auth()->guest() || !auth()->user()->is_admin)
        <ul class="nav-list">
            <li>
                <i class='bx bx-search' ></i>
                <input type="text" placeholder="Search...">
                <span class="tooltip">Search</span>
            </li>
            <li>
                <a href="/dashboard">
                    <i class='bx bx-home-alt' ></i>
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="/dashboard/posts">
                    <i class='bx bx-folder' ></i>
                    <span class="links_name">My Post</span>
                </a>
                <span class="tooltip">My Post</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-cog' ></i>
                    <span class="links_name">Setting</span>
                </a>
                <span class="tooltip">Setting</span>
            </li>
            <li>
                <a href="/">
                    <i class='bx bx-left-arrow-alt'></i>
                    <span class="links_name">Back to home</span>
                </a>
                <span class="tooltip">Back to home</span>
            </li>
        </ul>
    @else
    @can('admin')
        <ul class="nav-list">
            <li>
                <i class='bx bx-search' ></i>
                <input type="text" placeholder="Search...">
                <span class="tooltip">Search</span>
            </li>
            <li>
                <a href="/dashboard">
                    <i class='bx bx-home-alt' ></i>
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="/dashboard/users">
                    <i class='bx bx-user' ></i>
                    <span class="links_name">Users</span>
                </a>
                <span class="tooltip">Users</span>
            </li>
            <li>
                <a href="/dashboard/categories">
                    <i class='bx bx-category'></i>
                    <span class="links_name">Category</span>
                </a>
                <span class="tooltip">Category</span>
            </li>
            <li>
                <a href="/dashboard/posts">
                    <i class='bx bx-data' ></i>
                    <span class="links_name">All post</span>
                </a>
                <span class="tooltip">All post</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-cog' ></i>
                    <span class="links_name">Setting</span>
                </a>
                <span class="tooltip">Setting</span>
            </li>
            <li>
                <a href="/">
                    <i class='bx bx-left-arrow-alt'></i>
                    <span class="links_name">Back to home</span>
                </a>
                <span class="tooltip">Back to home</span>
            </li>
            {{-- <li>
                <a href="#">
                    <i class='bx bx-chat' ></i>
                    <span class="links_name">Messages</span>
                </a>
                <span class="tooltip">Messages</span>
            </li> --}}
            {{-- <li>
                <a href="#">
                    <i class='bx bx-pie-chart-alt-2' ></i>
                    <span class="links_name">Analytics</span>
                </a>
                <span class="tooltip">Analytics</span>
            </li> --}}
        </ul>
    @endcan
    @endif

        <div class="bottom-content">
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
        </div>
        <li class="profile">
            <div class="profile-details">
                <a href="/about">
                    <img src="/img/blog.png" alt="profileImg">
                    <div class="name_job">
                        <div class="name">{{ auth()->user()->name }}</div>
                        <div class="job">Web designer</div>
                    </div>
                </a>
            </div>
            <form action="/logout" method="post">
                @csrf
                <button type="submit"><i class='bx bx-log-out' id="log_out" ></i></button>
                <span class="tooltip">Logout</span>
            </form>
        </li>
    </div>
    <section class="home-section">
        <div class="text">@yield('main-box')</div>
        {{-- <div class="sisa"></div> --}}
    </section>

    <script>
    let sidebar = document.querySelector(".sidebar");
    let closeBtn = document.querySelector("#btn");
    let searchBtn = document.querySelector(".bx-search");

    closeBtn.addEventListener("click", ()=>{
        sidebar.classList.toggle("open");
        menuBtnChange();//calling the function(optional)
    });

    searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
        sidebar.classList.toggle("open");
        menuBtnChange(); //calling the function(optional)
    });

    // following are the code to change sidebar button(optional)
    function menuBtnChange() {
    if(sidebar.classList.contains("open")){
        closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
    }else {
        closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
    }
    }


    const body = document.querySelector('body'),
        modeSwitch = body.querySelector(".toggle-switch"),
        modeText = body.querySelector(".mode-text");


modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");

    if(body.classList.contains("dark")){
        modeText.innerText = "Light mode";

    }else{
        modeText.innerText = "Dark mode";

    }
});
    </script>

