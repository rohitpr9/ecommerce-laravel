<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .navbar-dark .nav-item .nav-link {
            color: #fff;
        }

        .navbar-dark .nav-item .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
            border-radius: 0.25rem;
            color: #fff;
        }

        .fa-li {
            position: relative;
            left: 0;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <!-- Container wrapper -->
        <div class="container">
            <!-- Navbar brand -->
            <a class="navbar-brand" href="#"><img id="MDB-logo"
                    src="https://s3.envato.com/files/259174079/657_E-commerce_Word_Doodle_Concept.jpg" alt="MDB Logo"
                    draggable="false" height="30" /></a>

            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left links -->
                <ul class="navbar-nav me-3">
                    <li class="nav-item">
                        <a class="nav-link active d-flex align-items-center" aria-current="page" href="#"><i
                                class="fas fa-bars pe-2"></i>Home</a>
                    </li>
                </ul>
                <!-- Left links -->

                <form class="d-flex align-items-center w-100 form-search">
                    <div class="input-group">
                        <button class="btn btn-light dropdown-toggle shadow-0" type="button" data-mdb-toggle="dropdown"
                            aria-expanded="false" style="padding-bottom: 0.4rem;">
                            All
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark fa-ul">
                            <li>
                                <a class="dropdown-item" href="#"><span class="fa-li pe-2"><i
                                            class="fas fa-search"></i></span>Orders</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"><span class="fa-li pe-2"><i
                                            class="fas fa-film"></i></span>Cart(0)</a>
                            </li>
                            
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"><span class="fa-li pe-2"><i
                                            class="fas fa-search-plus"></i></span>Advanced
                                    search<i class="fas fa-chevron-right ps-2"></i></a>
                            </li>
                        </ul>
                        <input type="search" class="form-control" placeholder="Search" aria-label="Search" />
                    </div>
                    <a href="#!" class="text-white"><i class="fas fa-search ps-3"></i></a>
                </form>

                <ul class="navbar-nav ms-3">
                    <li class="nav-item me-3">
                        <a class="nav-link d-flex align-items-center" href="#!">Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center me-3" href="#!">
                            <i class="fas fa-bookmark pe-2"></i> Cart(0)
                        </a>
                    </li>
                    <li class="nav-item" style="width: 65px;">
                        <a class="nav-link d-flex align-items-center" href="#!">log In</a>
                    </li>
                </ul>
            </div>
            <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
</body>

</html>
