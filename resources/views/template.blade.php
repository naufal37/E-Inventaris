<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>{{ucfirst($halaman)}} &mdash; E-Inventaris</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{URL::asset('assets/modules/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/modules/fontawesome/css/all.min.css')}}">

    <!-- General CSS Files End-->


    <!-- CSS Libraries -->
    {{--  Form--}}
    <link rel="stylesheet" href="{{URL::asset('assets/modules/bootstrap-daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/modules/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/modules/select2/dist/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/modules/jquery-selectric/selectric.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')}}">

{{--Form End--}}



<!-- CSS Libraries END -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/components.css')}}">


    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA --></head>

<body>
<div id="app">
    <div class="main-wrapper main-wrapper-1">
<<<<<<< HEAD
    @include('navbars')
=======
        @include('navbars2')
>>>>>>> 647aa7583a5c44254db4d2cf3bf0e8551969dee3
    <!-- Main Content -->
        <div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1>Blank Page</h1>
                </div>
                <div class="section-body">
                    @yield('main')
                </div>
            </section>
        </div>

        {{--        Footer--}}
        <footer class="main-footer">
            <div class="footer-left">
                Copyright &copy; 2018
                <div class="bullet"></div>
                Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
                <div class="bullet"></div>
                Created By <a href="https://github.com/naufal37">Naufal Ahmad Fauzan</a>
            </div>
            <div class="footer-right">

            </div>
        </footer>
    </div>
</div>

<!-- General JS Scripts -->
<script src="{{URL::asset('assets/modules/jquery.min.js')}}"></script>
<script src="{{URL::asset('assets/modules/popper.js')}}"></script>
<script src="{{URL::asset('assets/modules/tooltip.js')}}"></script>
<script src="{{URL::asset('assets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('assets/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
<script src="{{URL::asset('assets/modules/moment.min.js')}}"></script>
<script src="{{URL::asset('assets/js/stisla.js')}}"></script>


<!-- General JS Scripts END-->


<!-- JS Libraies -->
{{--  Form--}}
<script src="{{URL::asset('assets/modules/jquery-pwstrength/jquery.pwstrength.min.js')}}"></script>
<script src="{{URL::asset('assets/modules/cleave-js/dist/cleave.min.js')}}"></script>
<script src="{{URL::asset('assets/modules/jquery-selectric/jquery.selectric.min.js')}}"></script>
<script src="{{URL::asset('assets/modules/select2/dist/js/select2.full.min.js')}}"></script>
<script src="{{URL::asset('assets/modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}"></script>
<script src="{{URL::asset('assets/modules/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>
<script src="{{URL::asset('assets/modules/cleave-js/dist/addons/cleave-phone.us.js')}}"></script>
<script src="{{URL::asset('assets/modules/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<script src="{{URL::asset('assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}}"></script>


{{--  Form End--}}
<!-- JS Libraies END-->


<!-- Page Specific JS File -->
{{--  Form--}}
<script src="{{URL::asset('assets/js/page/forms-advanced-forms.js')}}"></script>
{{--Form End--}}
<!-- Page Specific JS File End-->

<!-- Template JS File -->

<script src="{{URL::asset('assets/js/custom.js')}}"></script>
<script src="{{URL::asset('assets/js/scripts.js')}}"></script>

</body>
</html>