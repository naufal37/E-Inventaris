<!DOCTYPE html>
<html lang="en">
<head>
    @include('_partial.flash_message')
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Login &mdash; Stisla</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{URL::asset('assets/modules/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/modules/fontawesome/css/all.min.css')}}">

    <!-- General CSS Files End-->


    <!-- CSS Libraries -->
    {{--  Form--}}
    <link rel="stylesheet" href="{{URL::asset('assets/modules/bootstrap-daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet"
          href="{{URL::asset('assets/modules/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/modules/select2/dist/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/modules/jquery-selectric/selectric.css')}}">
    <link rel="stylesheet"
          href="{{URL::asset('assets/modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}}">
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
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="login-brand">
                        <img src="{{url('assets/img/stisla-fill.svg')}}" alt="logo" width="100"
                             class="shadow-light rounded-circle">
                    </div>

                    <div class="card card-primary">
                        <div class="card-header"><h4>{{__('Login')}}</h4></div>

                        <div class="card-body">
                            <form method="POST" action="{{route('login')}}" class="needs-validation" novalidate="">
                                @csrf
                                <div class="form-group">
                                    <label for="email">{{ __('E-Mail / Nama Pengguna') }}</label>
                                    <input id="email" type="text" class="form-control" name="email" tabindex="1"
                                           required autofocus>
                                    @if($errors->has('email'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('email') }}
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <div class="d-block">
                                        <label for="password" class="control-label">{{ __('Password') }}</label>
                                    </div>
                                    <input id="password" type="password" class="form-control" name="password"
                                           tabindex="2" required>
                                    @if($errors->has('password'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('password') }}
                                        </div>
                                    @endif
                                </div>


                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="simple-footer">
                        Copyright &copy; Stisla 2018
                    </div>
                </div>
            </div>
        </div>
    </section>
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