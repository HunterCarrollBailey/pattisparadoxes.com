@extends('layout')
@section('main')
    <main class="form-signin text-center">

        <div style="height: 57.6vh;" class="container mt-4">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <form action="/includes/login.inc.php" method="POST">
                        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

                        <div class="form-floating mb-2">
                            <input type="email" class="form-control" id="email" name="username" placeholder="name@example.com" autocomplete="off">
                            <label for="email">Email address</label>
                        </div>
                        <div class="form-floating mb-2">
                            <input type="password" class="form-control" id="loginPassword" name="password" placeholder="Password" autocomplete="off">
                            <label for="loginPassword">Password</label>
                        </div>
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                        <p class="mt-2">Don't have an account? <a href="/signup" class="text-primary">Create An Account</a></p>
                        <p class="mt-5 mb-3 text-muted">© 2021</p>
                    </form>
                </div>
            </div>
        </div>

    </main>
@endsection
