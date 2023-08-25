@extends('ypanel.layouts.ypanel')
@section('content')
    <div class="row">
        <div class="login-form">
            <h1>Log in to Ypanel admin</h1>
            <form action="">
                <div class="form-control">
                    <label for="username">Username</label>
                    <input type="text">
                </div>
                <div class="form-control">
                    <label for="password">Password</label>
                    <input type="text">
                </div>
                <button>Submit</button>&nbsp;
                <a href="#">Forgot password?</a>
            </form>
            <span>TIP OF THE DAY: If you forget password, reset it using 'Forgot password?' link above.</span>
        </div>
    </div>
@endsection
