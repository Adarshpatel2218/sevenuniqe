<!doctype html>
<html lang="en-US">
@php
    $activeClass = 'active';
    $pageTitle = '';
    $path = request()->path();

@endphp

@if (Request::is('admin/dashboard'))
    @php $pageTitle = 'Dashboard'; @endphp
@elseif (preg_match('/^admin\/(.*-resident|resident-.*)/', $path))
    @php $pageTitle = 'Resident'; @endphp
@elseif (preg_match('/^admin\/(.*-complaint|complaint-.*)/', $path))
    @php $pageTitle = 'Complaint'; @endphp
@elseif (preg_match('/^admin\/(.*-document|document-.*)/', $path))
    @php $pageTitle = 'Document'; @endphp
@elseif (preg_match('/^admin\/(.*staff-page|staff.*)/', $path))
    @php $pageTitle = 'Service Facility'; @endphp
@elseif (preg_match('/^admin\/(.*notice-page|notice-page.*)/', $path))
    @php $pageTitle = 'Notices'; @endphp
@elseif (preg_match('/^admin\/(.*announcement-page|announcement-page.*)/', $path))
    @php $pageTitle = 'Announcements'; @endphp
@elseif (preg_match('/^admin\/(.*service-Page|service-Page.*)/', $path))
    @php $pageTitle = 'Setting'; @endphp
@elseif (preg_match('/^admin\/(.*profile-page|profile-page.*)/', $path))
    @php $pageTitle = 'Profile Setting'; @endphp
@endif
<head>
    <title>{{ $pageTitle }}</title>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" href="{{asset('admin/img/fevi.ico?' . time()) }}">
    <link rel="icon" type="image/png" href="{{ asset('admin/img/fevi.ico?' . time()) }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/bootstrap.min.css?' . time()) }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/simple-calendar.css?' . time()) }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/font-awesome.min.css?' . time()) }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/style.css?' . time()) }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="{{ asset('admin/js/jquery-3.6.0.min.js?' . time()) }}"></script>
    <script src="{{ asset('admin/js/bootstrap.bundle.min.js?' . time()) }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- toastr Notifications CSS link -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"/>


    @stack('head-style')
</head>

<body>
    <div class="page-wrapper">
        @if (Auth::guard('admin')->check())
            @include('admin.auth.sidebar')
            @include('admin.auth.header')
            @if(Session::has('message'))
                <script>
                    Swal.fire({
                        position: "top-end",
                        imageUrl: "{{asset('admin/img/success_icon.svg')}}",
                        title: "{{ Session::get('message') }}",
                        showConfirmButton: false,
                        customClass: "toaset-popup",
                        timer: 2500
                    }).then(function() {
                        window.location.reload();
                    });;
                </script>
            @endif
            @if(Session('error'))
                <script>
                        Swal.fire({
                        position: "top-end",
                        imageUrl: "{{asset('admin/img/close_icon.svg')}}",
                        title: "{{ Session::get('error') }}",
                        showConfirmButton: false,
                        customClass: "toaset-popup-error",
                        timer: 2500
                        }).then(function() {
                        window.location.reload();
                    });;
                </script>
            @endif

        @else
            @include('admin.auth.sidebar_guest')
            @include('admin.auth.header_guest')
        @endif

        @yield('content')
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <script src="{{ asset('admin/js/common.js?' . time()) }}"></script>
    <script>
        function showSuccessMessage(message) {
            Swal.fire({
                position: "top-end",
                imageUrl: "{{asset('admin/img/success_icon.svg')}}",
                title: message,
                showConfirmButton: false,
                customClass: "toaset-popup",
                timer: 2500
                        });
            setTimeout(function() {
                location.reload();
            }, 2000);

        }

        function showErrorMessage(message) {
            Swal.fire({
                position: "top-end",
                imageUrl: "{{asset('admin/img/close_icon.svg')}}",
                title: message,
                showConfirmButton: false,
                customClass: "toaset-popup-error",
                timer: 2500
            });
            setTimeout(function() {
                location.reload();
            }, 2000);

        }


    </script>
    @stack('footer-script')
</body>

</html>
