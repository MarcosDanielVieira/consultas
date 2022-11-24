<!DOCTYPE html>
<html lang="{{ config('app.locale') }}}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>
        @yield('title') - {{ config('app.name') }}
    </title>

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <link href="{{ asset('img/agenda.svg') }}" rel="shortcut icon" type="image/x-icon" sizes="32x32">
    <link href="{{ asset('img/agenda.svg') }}" rel="apple-touch-icon">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <meta name="theme-color" content="#28052d">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-icons.css') }}">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="#" class="logo d-flex align-items-center">
                <img src="{{ asset('img/agenda.svg') }}">
                <span class="d-none d-lg-block">
                    {{ config('app.name') }}
                </span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                        data-bs-toggle="dropdown">
                        <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>Kevin Anderson</h6>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger btn-block">
                                        <i class="bi bi-box-arrow-right"></i>
                                        <span>Sair do sistema</span>
                                    </button>
                                </form>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#consulta" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-menu-button-wide"></i>
                    <span>Consultas</span>
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="consulta" class="nav-content collapse" data-bs-parent="#sidebar-nav">

                    <li>
                        <a href="{{ route('consulta.index') }}">
                            <i class="bi bi-circle"></i>
                            <span>Listagem</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('consulta.create') }}">
                            <i class="bi bi-circle"></i>
                            <span>Criar</span>
                        </a>
                    </li>

                </ul>
            </li><!-- End Components Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#especialidade" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-menu-button-wide"></i>
                    <span>Especialidades</span>
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="especialidade" class="nav-content collapse" data-bs-parent="#sidebar-nav">

                    <li>
                        <a href="{{ route('especialidade.index') }}">
                            <i class="bi bi-circle"></i>
                            <span>Listagem</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('especialidade.create') }}">
                            <i class="bi bi-circle"></i>
                            <span>Criar</span>
                        </a>
                    </li>

                </ul>
            </li><!-- End Components Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#medico" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-heart"></i>
                    <span>Medicos</span>
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="medico" class="nav-content collapse" data-bs-parent="#sidebar-nav">

                    <li>
                        <a href="{{ route('medico.index') }}">
                            <i class="bi bi-circle"></i>
                            <span>Listagem</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('medico.create') }}">
                            <i class="bi bi-circle"></i>
                            <span>Criar</span>
                        </a>
                    </li>

                </ul>
            </li><!-- End Components Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#paciente" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-people"></i>
                    <span>Pacientes</span>
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="paciente" class="nav-content collapse" data-bs-parent="#sidebar-nav">

                    <li>
                        <a href="{{ route('paciente.index') }}">
                            <i class="bi bi-circle"></i>
                            <span>Listagem</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('paciente.create') }}">
                            <i class="bi bi-circle"></i>
                            <span>Criar</span>
                        </a>
                    </li>

                </ul>
            </li><!-- End Components Nav -->

            <li class="nav-item">

                <form method="POST" id="sair" action="{{ route('logout') }}">
                    @csrf
                    <a class="nav-link text-danger" href="javascript:$('#sair').submit()">
                        <i class="bi bi-box-arrow-right text-danger"></i>
                        <span>Sair do sistema</span>
                    </a>
                </form>

            </li>

        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <section class="section dashboard">

            @yield('content')

        </section>

    </main>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

</body>

<!-- Scripts -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
</script>

<script src="{{ asset('js/jquery.mask.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>

<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.colVis.min.js"></script>

<script>
    $(".table").DataTable({
        language: {
            url: "https://cdn.datatables.net/plug-ins/1.11.4/i18n/pt_br.json",
            searchPlaceholder: "Qualquer informação",
        },
        paging: true,
        lengthChange: false,
        pageLength: 26,
        searching: true,
        ordering: true,
        info: true,
        processing: true,
        autoWidth: false,
        responsive: true,
        dom: "Bfrtip",
        buttons: [{
                extend: 'copyHtml5',
                exportOptions: {
                    columns: [0, ':visible']
                }
            },
            {
                extend: 'excelHtml5',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'print',
            },
            'colvis'
        ]
    });
</script>

</html>
