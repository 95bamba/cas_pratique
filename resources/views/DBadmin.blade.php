<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>adminDash</title>
    <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
    <link rel="stylesheet" href="../assets/css/styles.min.css" />
   <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">

</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="./index.html" class="text-nowrap logo-img">
                        <h1 class=" alert alert-dark">L'HB</h1>
                        <!-- <img src="../assets/images/logos/dark-logo.svg" width="180" alt="" /> -->
                    </a>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav scroll-sidebar alert alert-dark" data-simplebar="">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Home</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="./index.html" aria-expanded="false">
                                <span>
                                    <i class="ti ti-layout-dashboard"></i>
                                </span>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <!-- <h1 id='hb'>  <span class="hide-menu">L'HB</span></h1> -->
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="mesclient" aria-expanded="false">
                                <span>
                                    <i class="ti ti-article"></i>
                                </span>
                                <span class="hide-menu">gerer les clients</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="mestable" aria-expanded="false">
                                <span>
                                    <i class="ti ti-article"></i>
                                </span>
                                <span class="hide-menu">gerer les tables</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="meschambre" aria-expanded="false">
                                <span>
                                    <i class="ti ti-alert-circle"></i>
                                </span>
                                <span class="hide-menu">gerer les chambres</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="mesreservation" aria-expanded="false">
                                <span>
                                    <i class="ti ti-cards"></i>
                                </span>
                                <span class="hide-menu">gerer les reservations des chambres</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="./ui-forms.html" aria-expanded="false">
                                <span>
                                    <i class="ti ti-file-description"></i>
                                </span>
                                <span class="hide-menu">gerer la restauration</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="./ui-typography.html" aria-expanded="false">
                                <span>
                                    <i class="ti ti-typography"></i>
                                </span>
                                <span class="hide-menu">gerer la facture</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">AUTH</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="./authentication-login.html" aria-expanded="false">
                                <span>
                                    <i class="ti ti-login"></i>
                                </span>
                                <span class="hide-menu">Login</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('register') }}">
                                <span>
                                    <i class="ti ti-user-plus"></i>
                                </span>
                                <span class="hide-menu">inscription</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">EXTRA</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="./icon-tabler.html" aria-expanded="false">
                                <span>
                                    <i class="ti ti-mood-happy"></i>
                                </span>
                                <span class="hide-menu">Icons</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="./sample-page.html" aria-expanded="false">
                                <span>
                                    <i class="ti ti-aperture"></i>
                                </span>
                                <span class="hide-menu">Sample Page</span>
                            </a>
                        </li>
                    </ul>
                    <div class="unlimited-access hide-menu bg-light-primary position-relative mb-7 mt-5 rounded">
                        <div class="d-flex">
                            <div class="unlimited-access-title me-3">
                                <h6 class="fw-semibold fs-4 mb-6 text-dark w-85">Upgrade to pro</h6>
                                <a href="https://adminmart.com/product/modernize-bootstrap-5-admin-template/"
                                    target="_blank" class="btn btn-primary fs-2 fw-semibold lh-sm">Buy Pro</a>
                            </div>
                            <div class="unlimited-access-img">
                                <img src="../assets/images/backgrounds/rocket.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light alert alert-dark">
                    <ul class="navbar-nav">
                        <li class="nav-item d-block d-xl-none">
                            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse"
                                href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                                <i class="ti ti-bell-ringing"></i>
                                <div class="notification bg-primary rounded-circle"></div>
                            </a>
                        </li>
                    </ul>
                    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                            <a href="https://adminmart.com/product/modernize-free-bootstrap-admin-dashboard/"
                                target="_blank" class="btn btn-primary">Download Free</a>
                            <li class="nav-item dropdown">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="../assets/images/profile/user-1.jpg" alt="" width="35" height="35"
                                        class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                    aria-labelledby="drop2">
                                    <div class="message-body">
                                        <a href="javascript:void(0)"
                                            class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-user fs-6"></i>
                                            <p class="mb-0 fs-3">Mon Profile</p>
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-mail fs-6"></i>
                                            <p class="mb-0 fs-3">My Account</p>
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-list-check fs-6"></i>
                                            <p class="mb-0 fs-3">My Task</p>
                                        </a>
                                        <a href="{{ route('logout') }}"
                                            class="btn btn-outline-primary mx-3 mt-2 d-block">Deconnexion</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!--  Header End -->
            <div class="container">
                <!--  Row 1 -->
                <div class="row">
                    <div class="col-lg-12 d-flex align-items-strech">
                        <div class="card w-100">
                            <div class="card-body">
                                <div class="d-sm-flex d-block align-items-center justify-content-between mb-9 table-responsive">
                                    <div class="mb-3 mb-sm-0">
                                        <br><br><br><br><br><br><br>
                                        <h5 class="card-title fw-semibold">vue d'ensemble</h5>
                                    </div>
                                    <div>
                                        <select class="form-select">
                                            <option value="1">March 2023</option>
                                            <option value="2">April 2023</option>
                                            <option value="3">May 2023</option>
                                            <option value="4">June 2023</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="chart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                    </div>
                    <div class="col-lg-12">
                    </div>
                    <div class="row">
                        <div class="col-lg-4 d-flex align-items-stretch">
                            <div class="card w-100">
                                <div class="card-body p-4">
                                    <div class="mb-4">
                                        <h5 class="card-title fw-semibold">MerveilleDigitalTech</h5>
                                    </div>
                                    <a href="javascript:void(0)"><img src="../assets/images/products/mdt.jpg"
                                     class="card-img-top rounded-0" alt="..."></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 d-flex align-items-stretch">
                            <div class="card w-100">
                                <div class="card-body p-4">
                                    <h5 class="card-title fw-semibold mb-4">Mes reservations</h5>
                                    <div class="table-responsive">
                                        <table class="table text-nowrap mb-0 align-middle">

                                            </tr>
                                            <th id='t'>ID</th>
                                            <th id='t' scope="col">RESERVATION</th>
                                            <th id='t' scope="col">CLIENT</th>
                                            <th id='t' scope="col">CHAMBRE</th>
                                            <th id='t' scope="col">DEBUT</th>
                                            <th id='t' scope="col">FIN</th>
                                            <th id='t' scope="col">HEURE</th>
                                            <th id='t' scope="col">TELEPHONE</th>
                                            <th id='t' scope="col">EMAIL</th>
                                            <th id='t' scope="col">ACTION </th>
                                            </tr>
                                            <tbody>


                                                @foreach($mesreservation as $mesreservation)


                                                <tr>
                                                    <td id="">{{$mesreservation->id}} </td>
                                                    <td>{{$mesreservation->nom}} {{$mesreservation->id}} </td>
                                                    <td>{{$mesreservation->client}} </td>
                                                    <td>{{$mesreservation->chambre}} </td>
                                                    <td>{{$mesreservation->datedeb}} </td>
                                                    <td>{{$mesreservation->datefin}} </td>
                                                    <td>{{$mesreservation->heur}} </td>
                                                    <td>{{$mesreservation->phone}} </td>
                                                    <td>{{$mesreservation->email}} </td>
                                                    <td>
            <a href="#" class="btn btn-danger" onclick="if(confirm('voullez vous vraiment supprimer cette reservation?')) {document.getElementById('form-{{$mesreservation->id}}').submit()}"><span class="ti-trash"></span></a>               
            </td>
            <td>
            <a href="#" class="btn btn-success" onclick="if(confirm('voullez vous vraiment supprimer cette reservation?')) {document.getElementById('form-{{$mesreservation->id}}').submit()}"><span class="ti-download"></span></a>               
            </td>
            <td>
            <a href="#" class="btn btn-primary" onclick="if(confirm('voullez vous vraiment supprimer cette reservation?')) {document.getElementById('form-{{$mesreservation->id}}').submit()}"><span class="ti-pencil-alt"></span></a>               
            </td>
                                                </tr>

                                                <form id="form-{{$mesreservation->id}}"
                                                    action="{{route('supprimerres',['reservation'=>$mesreservation->id ])}}"
                                                    method="post">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="delete">
                                                </form>
                                                @endforeach


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-xl-3">
                            <div class="card overflow-hidden rounded-2">
                                <div class="position-relative">
                                    <a href="javascript:void(0)"><img src="../assets/images/products/s4.jpg"
                                            class="card-img-top rounded-0" alt="..."></a>
                                    <a href="javascript:void(0)"
                                        class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3"
                                        data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i
                                            class="ti ti-basket fs-4"></i></a>
                                </div>
                                <div class="card-body pt-3 p-4">
                                    <h6 class="fw-semibold fs-4">Boat Headphone</h6>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h6 class="fw-semibold fs-4 mb-0">7000FCF <span
                                                class="ms-2 fw-normal text-muted fs-3"><del>10000FCF</del></span></h6>
                                        <ul class="list-unstyled d-flex align-items-center mb-0">
                                            <li><a class="me-1" href="javascript:void(0)"><i
                                                        class="ti ti-star text-warning"></i></a></li>
                                            <li><a class="me-1" href="javascript:void(0)"><i
                                                        class="ti ti-star text-warning"></i></a></li>
                                            <li><a class="me-1" href="javascript:void(0)"><i
                                                        class="ti ti-star text-warning"></i></a></li>
                                            <li><a class="me-1" href="javascript:void(0)"><i
                                                        class="ti ti-star text-warning"></i></a></li>
                                            <li><a class="" href="javascript:void(0)"><i
                                                        class="ti ti-star text-warning"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="card overflow-hidden rounded-2">
                                <div class="position-relative">
                                    <a href="javascript:void(0)"><img src="../assets/images/products/s5.jpg"
                                            class="card-img-top rounded-0" alt="..."></a>
                                    <a href="javascript:void(0)"
                                        class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3"
                                        data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i
                                            class="ti ti-basket fs-4"></i></a>
                                </div>
                                <div class="card-body pt-3 p-4">
                                    <h6 class="fw-semibold fs-4">MacBook Air Pro</h6>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h6 class="fw-semibold fs-4 mb-0">160000FCF <span
                                                class="ms-2 fw-normal text-muted fs-3"><del>200000FCF</del></span></h6>
                                        <ul class="list-unstyled d-flex align-items-center mb-0">
                                            <li><a class="me-1" href="javascript:void(0)"><i
                                                        class="ti ti-star text-warning"></i></a></li>
                                            <li><a class="me-1" href="javascript:void(0)"><i
                                                        class="ti ti-star text-warning"></i></a></li>
                                            <li><a class="me-1" href="javascript:void(0)"><i
                                                        class="ti ti-star text-warning"></i></a></li>
                                            <li><a class="me-1" href="javascript:void(0)"><i
                                                        class="ti ti-star text-warning"></i></a></li>
                                            <li><a class="" href="javascript:void(0)"><i
                                                        class="ti ti-star text-warning"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="card overflow-hidden rounded-2">
                                <div class="position-relative">
                                    <a href="javascript:void(0)"><img src="../assets/images/products/s7.jpg"
                                            class="card-img-top rounded-0" alt="..."></a>
                                    <a href="javascript:void(0)"
                                        class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3"
                                        data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i
                                            class="ti ti-basket fs-4"></i></a>
                                </div>
                                <div class="card-body pt-3 p-4">
                                    <h6 class="fw-semibold fs-4">Red Valvet Dress</h6>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h6 class="fw-semibold fs-4 mb-0">14000FCF<span
                                                class="ms-2 fw-normal text-muted fs-3"><del>15000FCF</del></span></h6>
                                        <ul class="list-unstyled d-flex align-items-center mb-0">
                                            <li><a class="me-1" href="javascript:void(0)"><i
                                                        class="ti ti-star text-warning"></i></a></li>
                                            <li><a class="me-1" href="javascript:void(0)"><i
                                                        class="ti ti-star text-warning"></i></a></li>
                                            <li><a class="me-1" href="javascript:void(0)"><i
                                                        class="ti ti-star text-warning"></i></a></li>
                                            <li><a class="me-1" href="javascript:void(0)"><i
                                                        class="ti ti-star text-warning"></i></a></li>
                                            <li><a class="" href="javascript:void(0)"><i
                                                        class="ti ti-star text-warning"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="card overflow-hidden rounded-2">
                                <div class="position-relative">
                                    <a href="javascript:void(0)"><img src="../assets/images/products/s11.jpg"
                                            class="card-img-top rounded-0" alt="..."></a>
                                    <a href="javascript:void(0)"
                                        class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3"
                                        data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i
                                            class="ti ti-basket fs-4"></i></a>
                                </div>
                                <div class="card-body pt-3 p-4">
                                    <h6 class="fw-semibold fs-4">Cute Soft Teddybear</h6>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h6 class="fw-semibold fs-4 mb-0">30000FCF <span
                                                class="ms-2 fw-normal text-muted fs-3"><del>40000FCF</del></span></h6>
                                        <ul class="list-unstyled d-flex align-items-center mb-0">
                                            <li><a class="me-1" href="javascript:void(0)"><i
                                                        class="ti ti-star text-warning"></i></a></li>
                                            <li><a class="me-1" href="javascript:void(0)"><i
                                                        class="ti ti-star text-warning"></i></a></li>
                                            <li><a class="me-1" href="javascript:void(0)"><i
                                                        class="ti ti-star text-warning"></i></a></li>
                                            <li><a class="me-1" href="javascript:void(0)"><i
                                                        class="ti ti-star text-warning"></i></a></li>
                                            <li><a class="" href="javascript:void(0)"><i
                                                        class="ti ti-star text-warning"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="py-6 px-6 text-center">
                        <p class="mb-0 fs-4">Design and Developed by <a href="https://adminmart.com/" target="_blank"
                                class="pe-1 text-primary text-decoration-underline">Alioune Sidibe</a>  <a
                                href="https://themewagon.com">MerveilleDigitalTech</a></p>
                    </div>
                </div>
            </div>
        </div>
        <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
        <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/js/sidebarmenu.js"></script>
        <script src="../assets/js/app.min.js"></script>
        <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
        <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
        <script src="../assets/js/dashboard.js"></script>
</body>

</html>