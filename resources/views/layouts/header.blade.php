<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="content">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Everest</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/everestlogo.webp') }}" type="image/png" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="{{ asset('assets/css/oneui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/js/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.css"
        integrity="sha256-jKV9n9bkk/CTP8zbtEtnKaKf+ehRovOYeKoyfthwbC8=" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('assets/js/plugins/flatpickr/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/js/plugins/magnific-popup/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/js/plugins/datatables/dataTables.bootstrap4.css') }}">
    @yield("style")
    <script src="{{asset('assets/js/core/jquery.min.js')}}" ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
 <style>

    .sidebarbg{
        background: #2b2d2f;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to left, #414345, #2b2d2f);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to left, #414345, #2b2d2f); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    }
    .sidebarbg2{
        background: #2b2d2f;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to top, #414345, #2b2d2f);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to top, #414345, #2b2d2f);
    }
    .sidebarbg4 {
    background: #e6c1c1; /* Solid color */
}

</style>
</head>

<body>
