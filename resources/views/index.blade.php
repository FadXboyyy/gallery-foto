<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Index</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;900&display=swap');

        * {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 260px;
            background: #11101d;
            z-index: 100;
            transition: all 0.5s ease;
        }

        .sidebar.close {
            width: 78px;
        }

        .sidebar .logo-details {
            height: 60px;
            width: 100px;
            display: flex;
            align-items: center;
        }

        /* .sidebar .logo-details i {
            font-size: 30px;
            color: #fff;
            height: 50px;
            min-width: 78px;
            text-align: center;
            line-height: 50px;

        } */

        .sidebar .logo-details .logo-name {
            font-size: 22px;
            color: #fff;
            font-weight: 600;
            transition: 0.3 ease;
            transition-delay: 0.1s;
        }

        .sidebar.close .logo-details .logo-name {
            transition-delay: 0s;
            opacity: 0;
            pointer-events: none;
        }

        .sidebar .logo-details .logo-name {
            font-size: 22px;
            color: #fff;
            font-weight: 600;
        }

        .sidebar .nav-links {
            height: 100%;
            padding-top: 30px 0 150px 0;
            overflow: auto;
        }

        .sidebar .nav-links {
            overflow: visible;
        }

        .sidebar .nav-links::-webkits-scrollbar {
            display: none;
        }

        .sidebar .nav-links li {
            position: relative;
            list-style: none;
            transition: all 0.4s ease;

        }

        .sidebar .nav-links li:hover {
            background: #1d1b31;
        }

        .sidebar .nav-links li .icon-link {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .sidebar.close .nav-links li .icon-link {
            display: block;
        }

        .sidebar .nav-links li i {
            height: 50px;
            min-width: 70px;
            text-align: center;
            line-height: 50px;
            color: #fff;
            font-size: 20px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .sidebar .nav-links li.showMenu i.arrow {
            transform: rotate(-180deg);
        }

        .sidebar.close .nav-links i.arrow {
            display: none;
        }

        .sidebar .nav-links li a {
            display: flex;
            align-items: center;
            text-decoration: none;
        }

        .sidebar .nav-links li a .link_name {
            font-size: 18px;
            font-weight: 400;
            color: #fff;
        }

        .sidebar.close .nav-links li a .link_name {
            opacity: 0;
            pointer-events: none;
        }

        .sidebar .nav-links li .sub-menu {
            padding: 6px 6px 14px 80px;
            margin-top: -10px;
            background: #1d1b31;
            display: none;
        }

        .sidebar .nav-links li.showMenu .sub-menu {
            display: block;
        }

        .sidebar .nav-links li .sub-menu a {
            color: #fff;
            font-size: 15px;
            padding: 5px 0;
            white-space: nowrap;
            opacity: 0.6;
            transition: all 0.3 ease;
        }

        .sidebar .nav-links li .sub-menu a:hover {
            opacity: 1;
        }

        .sidebar.close .nav-links li .sub-menu {
            position: absolute;
            left: 100%;
            top: -10;
            margin-top: 0;
            padding: 10px 20px;
            border-radius: 0 6px 6px 0;
            opacity: 0;
            display: block;
            pointer-events: none;
            transition: 0s;

        }

        .sidebar.close .nav-links li:hover .sub-menu {
            top: 0;
            opacity: 1;
            pointer-events: auto;
            transition: all 0.4s ease;
        }

        /* .sidebar .nav-links li .sub-menu .link_name{
     display: none;
}
.sidebar .nav-links li .sub-menu .link_name{
    display: none;
} */
        .sidebar .close .nav-links li .sub-menu .link_name {
            font-size: 18px;
            opacity: 1;
            display: block;
        }

        .sidebar .nav-links li .sub-menu.blank {
            opacity: 1;
            pointer-events: auto;
            padding: 3px 20px 6px 16px;
            opacity: 0;
            pointer-events: none;
        }

        .sidebar .nav-links li:hover .sub-menu.blank {
            top: 50%;
            transform: translateY(-50%);
        }

        .home-section {
            position: relative;
            background-color: #fcfcff;
            height: 100vh;
            left: 260px;
            width: calc(100% - 260px);
            transition: all 0.5s ease;
        }

        .sidebar.close~.home-section {
            left: 78px;
            width: calc(100% - 78px);
        }

        .home-section .home-content {
            height: 60px;
            display: flex;
            align-items: center;
        }

        .home-section .home-content {
            height: 60px;
            display: flex;
            align-items: center;
        }

        .home-section .home-content .bx-menu,
        .home-section .home-content .text {
            color: #11101d;
            font-size: 35px;
            position: fixed;
        }

        .home-section .home-content .bx-menu {
            margin: 0 15px;
            cursor: pointer;
        }

        .home-section .home-content .text {
            font-size: 26px;
            font-weight: 600;
        }

        .content {
            margin-left: 160px;
            padding-right: 30px;
            margin-right: 20px;
            width: calc(100% - 260px);
            transition: all 0.5s ease;
        }

        .sidebar.close~.content {
            margin-left: 78px;
            padding-right: 20px;
            margin-right: 30px;
            transition: all 0.5s ease;
            /* .content{
background-attachment: fixed;
    } */
        }

        /* .footer {

            bottom: 0;
            width: 100%;
            background-color: #343a40;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        } */
    </style>
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
          <img src="{{ asset('fadly.jpg') }}" class="rounded-circle" style="width: 50px; height:50px; " alt="">
            @auth
                       <span class="logo-name" style="text-align: center;">{{ auth()->user()->username }}</span>
            @endauth

        </div>
        <ul class="nav-links">
            <li>
                <a href="/index">
                    <i class='bx bxs-grid-alt'></i>
                    <span class="link_name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="/create">
                    <i class="bi bi-arrow-bar-up"></i>
                    <span class="link_name">Tambah Album</span>
                </a>
            </li>
            <li>
                <a href="/tambahfoto">
                    <i class="bi bi-plus-circle"></i>
                    <span class="link_name">Tambah Foto</span>
                </a>
            </li>
            @auth
                <ul class="navbar-nav ms-auto">
                    <li>
                        <a href="/logout"><i class="bi bi-box-arrow-left"></i> <span class="link_name">LogOut </span></a>
                    </li>
                </ul>
            @else
                <span class="logo-name">{{ Auth::guest() }}</span>
                <ul class="navbar-nav ms-auto">
                    <li>
                        <a href="/login"><i class="bi bi-person-circle"></i> <span class="link_name">Login</span></a>
                    </li>
                </ul>
            @endauth
        </ul>
    </div>
    <section class="home-section">
        <div class="home-content">
            <i class='bx bx-menu'></i>
        </div>
        <div class="content">
            <div class="container">

                <div class="row justify-content-center gx-5">
                    @foreach ($albumData as $items)
                        <div class="card mb-3" style="max-width: 700px; ">
                            <div class="card-body">
                                <div class="row  mb-3">
                                    <div class="col-md-4 col-sm-12">
                                        <div class="text-center">
                                            <img src="{{ asset('images/' . $items->image) }}" class="img-fluid"
                                                alt="...">
                                        </div>
                                    </div>
                                    <div class="col-8">

                                        <h5 class="card-title text-center">{{ $items->nama_album }}</h5>
                                        <p class="card-text text-center">{{ $items->deskripsi }}</p>
                                        <p class="card-text text-center"><small
                                                class="text-body-secondary">{{ $items->tanggal }}</small>
                                        </p>


                                        <div class="card-footer text-center">
                                            <a href="/show/{{ $items->id }}" class="btn btn-success"><i
                                                    class="bi bi-pencil-square"></i></a>
                                            <a href="/destroy/{{ $items->id }}" class="btn btn-danger"><i
                                                    class="bi bi-trash"></i></a>
                                            <a href="{{ route('foto', ['albumId' => $items->id]) }}"
                                                class="btn btn-primary"><i class="bi bi-eye-fill"></i></a>


                                        </div>

                                        {{-- <div class="card-footer1 position-absolute top-0 end-0 ">

                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    {{-- <footer class="footer bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>About Us</h5>
                    <p style="text-align: justify-center;">Ini adalah situs crud album sederhana untuk tugas UKK XII
                        PPLG 2 SMK Muhammadiyah 1 Sukoharjo</p>
                        <a href="https://www.instagram.com/frizkimaulana1?igsh=MTVla2p6ZGN1bGFtMg==" class="btn btn-danger"><i class="bi bi-instagram"></i></a>
                        <a href="https://www.facebook.com/profile.php?id=100053142750314&mibextid=JRoKGi" class="btn btn-primary"><i class="bi bi-facebook"></i></a>
                        <a href="http://wa.me/6288220173105" class="btn btn-success"><i class="bi bi-whatsapp"></i></a>
                        <a href="https://www.linkedin.com/in/fadly-rizki-maulana-3296b52a0?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" class="btn btn-primary"><i class="bi bi-linkedin"></i></a>
                        <a href="https://github.com/FadXboyyy" class="btn btn-secondary"><i class="bi bi-github"></i></a>
                </div>
                <div class="col-md-3">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="/index">Home</a></li>
                        <li><a href="/about">About Me</a></li>
                        <li><a href="#">Services</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Contact Us</h5>
                    <p>Fadly Rizki Maulana, Sukoharjo, Jawa Tengah</p>
                    <p>Email: Fadlyrizkimaulana65@gmail.com</p>
                    <p>Phone: +62882006004251</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>&copy; Fadly. XII PPLG 2. 2024</p>
                </div>
            </div>
        </div>
    </footer> --}}


    <script>
        let arrow = document.querySelectorAll(".arrow");


        for (var i = 0; i < arrow.length; i++) {
            arrow[i].addEventListener("click", (e) => {
                let arrowParent = e.target.parentElement.parentElement;
                arrowParent.classList.toggle("showMenu")
            });
        }

        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".bx-menu");
        console.log(sidebarBtn);
        sidebarBtn.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        @if (Session::has('success'))
            toastr.success("{{ Session::get('success') }}")
        @endif
    </script>


</body>

</html>
