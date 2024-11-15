@extends('admin.auth.master')
@section('content')

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <script>
            Swal.fire({
                position: "top-end",
                imageUrl: "{{ asset('public/admin/img/close_icon.svg') }}",
                title: "{{ $error }}",
                showConfirmButton: false,
                customClass: "toaset-popup-error",
                timer: 2500
            });
        </script>
    @endforeach
@endif

@if(Session('error'))
<script>
        Swal.fire({
        position: "top-end",
        imageUrl: "{{asset('public/admin/img/close_icon.svg')}}",
        title: "{{ Session::get('error') }}",
        showConfirmButton: false,
        customClass: "toaset-popup-error",
        timer: 2500
    });
</script>
@elseif((Session('message')))
<script>
    Swal.fire({
    position: "top-end",
    imageUrl: "{{asset('public/admin/img/success_icon.svg')}}",
    title: "{{ Session::get('message') }}",
    showConfirmButton: false,
    customClass: "toaset-popup",
    timer: 2500
});
</script>
@endif
<img src="{{ asset('admin/img/bgimage.avif') }}" alt="img" class="login-image" style="display: ;">
        <div class="login-form-wrapper" style="border: 1px solid #e5e6e7;">
        <form action="{{ route('admin.loginprocess') }}" method="POST">
            @csrf
                <div class="login-logo text-center">
                    <img src="{{ asset('admin/img/logo.png') }}" alt="logo" >
                </div>
                <h2 class="text-center">Welcome Back</h2>
                <h3>Login to your account</h3>
                <div class="loginForm">
                    <div class="input_group">
                        <input type="text" name="email" id="email" class="form-control" placeholder="Username">
                    </div>
                    <div class="input_group">
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="forgot-password">
                        <a href="#">Forget Password?</a>
                    </div>
                    <div class="form-action">
                        <input type="submit" value="Login" class="submit-btn">
                    </div>
                </div>
            </form>
        </div>
@endsection



