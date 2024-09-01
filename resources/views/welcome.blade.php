<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stylish Sidebar with Dropdown</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Styles -->
    <style>
        /* Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }


        /* Sidebar */
        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            width: 400px;
            height: 100%;
            background-color: #111759;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding-top: 20px;
            transition: width 0.3s;
            border-top-right-radius: 25px;   /* Round the top-right corner */
            border-bottom-right-radius: 25px;
        }

        .sidebar .profile {
            text-align: center;
            padding: 20px 0;
            

        }

        .sidebar .profile img {
            border-radius: 50%;
            width: 120px;
            height: 120px;
        }

        .sidebar .profile h3 {
            margin-top: 20px;
            font-size: 28px;
        }

        .sidebar .profile h5 {
            margin-top: 10px;
            font-size: 20px;
        }

        .sidebar-menu {
            list-style: none;
            padding-left: 0; /* Remove padding */
            flex-grow: 1;
        }

        .sidebar-menu li {
            margin: 15px 15px 0 0;
        }

        .sidebar-menu li a {
            color: white;
            text-decoration: none;
            font-size: 17px;
            display: block;
            padding: 4px 20px;
            transition: background 0.3s;
        }

        .sidebar-menu li a.active,
        .sidebar-menu li a:hover {
            background-color: #bfbfbf;
            color: #111759;
        }
/* 
        .sidebar-menu .collapse-menu {
            padding-left: 20px;
        } */

        .sidebar-footer {
            text-align: center;
            padding: 20px;
            font-size: 12px;
            color: #bfbfbf;
        }

        .sidebar-footer a {
            color: #ffcc00;
            text-decoration: none;
        }

        /* Main Content */
        .main-content {
            margin-left: 250px;
            padding: 20px;
            background-color: #fff;
            height: 100vh;
            transition: margin-left 0.3s;
        }

        .main-content .content {
            justify-content: space-between;
            margin-top: 80px;
            position: absolute;
            color: #1c2643;
        }

        .section-1 .container-1 {
            display: flex;
            justify-content: space-between;
        }

        .section-1 .container-1 .contains-1{
            margin-top: 80px;
            position: absolute;
        }

        .main-content .content h2{
            font-size: 80px;
            color: #1c2643;
            margin-bottom: 20px;
            margin-top: 230px;
            margin-left: 70px;
            font-weight: bold;
        }

        .main-content .content p{
            font-size: 30px;
            color: #1c2643;
            margin-left: 70px;
        }



        .section-1 .container-1 .contains-1 p{
            color: #1c2643;
            line-height: 20px;
        }

        .navbar {
            background-color: white;
            padding: 15px 20px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.3);
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-left: 200px;
            margin-right: 60px;
        }

        .menu-toggle {
            font-size: 24px;
            background: none;
            border: none;
            cursor: pointer;
            outline: none;
            color: #111759;
        }

        .navbar-menu {
            list-style: none;
            display: flex;
            gap: 20px;    
            padding-top: 15px;        
        }

        .navbar-menu li a {
            color: #2c2c2c;
            text-decoration: none;
            font-size: 16px;
            padding: 8px 12px;
            transition: color 0.3s;
        }

        .navbar-menu li a.active,
        .navbar-menu li a:hover {
            color: white;
            background-color: #111759;
            border-radius: 15px;   /* Round the top-right corner */
        }

        .content {
            margin-top: 30px;
            margin-left: 200px;
        }


          /* Footer */
        .footer {
            text-align: center;
        }

        .footer p {
            position: fixed;
            padding: 10px 10px 0px 10px;
            bottom: -20px;
            width: 100%;
            height: 50px;
            background: #111759;
            color: white;
            text-align: center;
        }

        .footer .social-icons a {
            color: #ffcc00;
            font-size: 18px;
            margin: 0 10px;
            transition: color 0.3s;
        }

        .footer .social-icons a:hover {
            color: white;
        }

        .image {
            width: 780px;
            transform: translate(700px, -180px);
            overflow: hidden;
        }

/* Dropdown menu styling */
.sidebar-menu .collapse-menu {
    padding-left: 20px; /* Indent dropdown menu */
}

.sidebar-menu .collapse-menu ul {
    padding-left: 20px; /* Indent dropdown items */
    margin: 0;
}

/* Styling for collapsed menu */
.collapse.list-unstyled {
    padding-left: 40px; /* Adjust padding to indent the dropdown menu */
    margin: 0;
}
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="profile">
            <!-- <img src="https://media.licdn.com/dms/image/v2/D4E03AQELbnm2osO_mQ/profile-displayphoto-shrink_400_400/profile-displayphoto-shrink_400_400/0/1694614904552?e=1730332800&v=beta&t=wJbvyWLJ9WyRH6--VTXiZt-_nzPZcmgyQQCfido67TY" alt="Profile Picture"> -->
            <h3>Naufal Khairul Rizky</h3>
            <h5>5025221127 - PBKK B</h5>
        </div>
        <ul class="sidebar-menu">
        <li>
            <a href="#pertemuan1Submenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pertemuan 1</a>
            <ul class="collapse list-unstyled" id="pertemuan1Submenu">
                <li class="collapse-menu">
                    <a href="pertemuan1/basic">Basic Route</a>
                </li>
                <li class="collapse-menu">
                    <a href="{{ route('param') }}">Routing Parameter</a>
                </li>
                <li class="collapse-menu">
                    <a href="{{ route('error') }}">Fallback Route</a>
                </li>
                <li class="collapse-menu">
                    <a href="{{ route('named') }}">Named Route</a>
                </li>
                <li class="collapse-menu">
                    <a href="{{ route('genap-ganjil') }}">GenapGanjil</a>
                </li>
                <li class="collapse-menu">
                    <a href="{{ route('fibonacci') }}">Fibonacci</a>
                </li>
                <li class="collapse-menu">
                    <a href="{{ route('bilangan-prima') }}">Prima</a>
                </li>    
            
                <li>
                    <a href="#contohRoutingSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Group 1</a>
                    <ul class="collapse list-unstyled" id="contohRoutingSubmenu">
                        <li class="collapse-menu">
                            <a href="{{ route('group1page1') }}">Page 1</a>
                            <a href="{{ route('group1page2') }}">Page 2</a>
                        </li>   
                    </ul>
                </li>
                <li>
                    <a href="#mvcSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Group 2</a>
                    <ul class="collapse list-unstyled" id="mvcSubmenu">
                        <li class="collapse-menu">
                            <a href="{{ route('group2page1') }}">Page 1</a>
                            <a href="{{ route('group2page2') }}">Page 2</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
            <li>
                <a href="#pertemuan2Submenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pertemuan 2</a>
                <ul class="collapse list-unstyled" id="pertemuan2Submenu">
                    <li class="collapse-menu">
                        <a href="#">kjanwkjda</a>
                    </li>
                </ul>
            </li>
            <!-- Add more meetings here -->
        </ul>
        <div class="sidebar-footer">
            <p></p>
            <p></p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="navbar">
            <button class="menu-toggle">
                <span>&#9776;</span>
            </button>
            <ul class="navbar-menu">
                <li><a href="{{ route('home') }}" class="btn-1">Home</a></li>                
                <li><a href="#">About</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <div class="content">
            @if (Request::routeIs('home'))
                <h2>Selamat datang.</h2>
                <p>Ini adalah halaman utama website tugas PBKK.</p>
                <!-- <img src="https://i.pinimg.com/originals/40/48/9a/40489abc86b6b647c69dbe1249fb98b4.jpg" class="image" alt="Iamge"> -->
                
            @endif
            @yield('content')
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <p>Made with 👍 by naufalkr</p>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    @yield('script')
</body>
</html>
