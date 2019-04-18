<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>E-Inventaris </title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href={{asset('assets/modules/bootstrap/css/bootstrap.min.css')}}>
    <link rel="stylesheet" href={{asset('assets/modules/fontawesome/css/all.min.css')}}>

    <!-- CSS Libraries -->
    <link rel="stylesheet" href={{asset('assets/modules/bootstrap-daterangepicker/daterangepicker.css')}}>

    <link rel="stylesheet" href={{asset('assets/modules/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')}}>

    <link rel="stylesheet" href={{asset('assets/modules/select2/dist/css/select2.min.css')}}>

    <link rel="stylesheet" href={{asset('assets/modules/jquery-selectric/selectric.css')}}>

    <link rel="stylesheet" href={{asset('assets/modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}}>

    <link rel="stylesheet" href={{asset('assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')}}>

    <!-- Template CSS -->
    <link rel="stylesheet" href={{asset('assets/css/style.css')}}>

    <link rel="stylesheet" href={{asset('assets/css/components.css')}}>

    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
</head>
<!-- /END GA -->

<body>

<!--        Ini Navbar Kanan Profil-->
@include('navbars')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Blank Page</h1>
        </div>

        <div class="section-body">
{{--            @yield('main')--}}
        </div>
    </section>
{{--    @yield('footer')--}}
</div>


<!-- General JS Scripts -->


<script src={{asset('assets/modules/popper.js')}}></script>
<script src={{asset('assets/modules/tooltip.js')}}></script>
<script src={{asset('assets/modules/bootstrap/js/bootstrap.min.js')}}></script>
<script src={{asset('assets/modules/popper.js')}}></script>
<script src={{asset('assets/modules/nicescroll/jquery.nicescroll.min.js')}}></script>

<script src={{asset('assets/modules/moment.min.js')}}></script>

<script src={{asset('assets/js/stisla.js')}}></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.js" integrity="sha256-btup0J8ailzC2SIkxIm9kZnW4IlDDKihhohGVN7Nfns=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js" integrity="sha256-ghmTf7XUDqNyD7VnAcX1W0YqD3exkHQZCy0VJCxcrq8=" crossorigin="anonymous"></script>

<!-- JS Libraies -->

<script src={{asset('assets/modules/cleave-js/dist/cleave.min.js')}}></script>

<script src={{asset('assets/modules/cleave-js/dist/addons/cleave-phone.us.js')}}></script>

<script src={{asset('assets/modules/jquery-pwstrength/jquery.pwstrength.min.js')}}></script>

<script src={{asset('assets/modules/bootstrap-daterangepicker/daterangepicker.js')}}></script>

<script src={{asset('assets/modules/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}></script>

<script src={{asset('assets/modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}></script>

<script src={{asset('assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}}></script>

<script src={{asset('assets/modules/select2/dist/js/select2.full.min.js')}}></script>

<script src={{asset('assets/modules/jquery-selectric/jquery.selectric.min.js')}}></script>


<!-- Page Specific JS File -->
<script src={{asset('assets/js/page/forms-advanced-forms.js')}}></script>



<!-- Template JS File -->
<script src=></script>{{asset('assets/js/scripts.js')}}

<script src={{asset('assets/js/custom.js')}}></script>

</body>
</html>