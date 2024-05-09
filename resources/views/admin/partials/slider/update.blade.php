<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" />
    <title>
        Form Layouts | CORK - Multipurpose Bootstrap Dashboard Template
    </title>
    <link rel="icon" type="image/x-icon" href="{{ asset('cork/html/src/assets/img/favicon.ico') }}" />
    <link href="{{ asset('cork/html/layouts/vertical-light-menu/css/light/loader.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('cork/html/layouts/vertical-light-menu/css/dark/loader.css') }}" rel="stylesheet"
        type="text/css" />
    <script src="{{ asset('cork/html/layouts/vertical-light-menu/loader.js') }}"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet" />
    <link href="{{ asset('cork/html/src/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('cork/html/layouts/vertical-light-menu/css/light/plugins.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('cork/html/layouts/vertical-light-menu/css/dark/plugins.css') }}" rel="stylesheet"
        type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link href="{{ asset('cork/html/src/assets/css/light/scrollspyNav.css" rel="stylesheet') }}" type="text/css" />
    <link href="{{ asset('cork/html/src/assets/css/dark/scrollspyNav.css" rel="stylesheet') }}" type="text/css" />
</head>

<body class="layout-boxed" data-bs-spy="scroll" data-bs-target="#navSection" data-bs-offset="100">
    @include('sweetalert::alert')


    @include('admin.partials.navbar')

    @include('admin.partials.aside')

    @include('sweetalert::alert', ['cdn' => 'https://cdn.jsdelivr.net/npm/sweetalert2@9'])

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('cork/html/src/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('cork/html/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('cork/html/src/plugins/src/mousetrap/mousetrap.min.js') }}"></script>
    <script src="{{ asset('cork/html/layouts/vertical-light-menu/app.js') }}"></script>
    <script src="{{ asset('cork/html/src/plugins/src/highlight/highlight.pack.js') }}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('cork/html/src/assets/js/scrollspyNav.js') }}"></script>
</body>

</html>
