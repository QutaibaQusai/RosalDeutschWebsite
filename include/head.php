<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> <?= $page_title ?> - فنستا</title>
    <link rel="shortcut icon" href="../assets/images/germany.png" type="image/x-icon">

    <link href="../assets/vendors/aos-master/dist/aos.css" rel="stylesheet">
    <link href="../assets/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-sm fixed-top">
        <div class="container-fluid ">
            <a class="navbar-brand logo-title" href="../Home/">فنستا</a>
            <button class="navbar-toggler " type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon "></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar" dir="rtl">
                <ul class="navbar-nav navbar-links d-flex align-items-center">
                    <li class="nav-item registerWithUsHref">
                        <!-- <a class="nav-link"
                            href="https://api.whatsapp.com/send?phone=0791869276&text=مرحبا عندي سوال"
                            target="_blank">سجل معنا</a> -->

                             <a class="nav-link"
                            href="../Signup/index.php"
                      
                            target="_blank">سجل معنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../FreeContent/">مساعدات مجانية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Students_experiences/">تجارب طلابنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Courses/">الدورات</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            كتبنا
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Das falsche Buch</a></li>
                            <li><a class="dropdown-item" href="#">Deutsch hasst dich auch</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Contact_us/">تواصل معنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Login/">تسجيل دخول</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</header>
