@extends('master')
@section("content")
<div class="container  custom-login" style="margin-top: 100px; margin-bottom:100px;">
    <div class="row  justify-content-center">
        <div class="col-sm-4 col-sm-offset-4">
            <form method="POST" action="register">
                @csrf
                <!-- Username input -->
                <div class="form-outline mb-4">
                    <input type="text" id="form1Example1" name="name" class="form-control" />
                    <label class="form-label" for="form1Example1">Username</label>
                </div>
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="email" id="form1Example1" name="email" class="form-control" />
                    <label class="form-label" for="form1Example1">Email address</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input type="password" id="form1Example2" class="form-control" name="password" />
                    <label class="form-label" for="form1Example2">Password</label>
                </div>



                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block">Register</button>
            </form>
        </div>
    </div>
</div>
@endsection
<!-- <form method="POST" action="login">
                <div class="mb-3">
                    @csrf
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form> -->