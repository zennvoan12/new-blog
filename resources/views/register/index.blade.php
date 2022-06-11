@extends('layouts.main')

@section('container')
    <main class="main-content mt-0">
        <section>
            <div class="page-header-xl ">
                <div class="container min-vh-100">
                    <div class="row">
                        <div
                            class="col-lg-8  d-xl-flex d-none h-100  my-auto pe-0  my-auto px-13 py-5 mx-2  position-absolute top-0 start-0 text-center justify-content-center flex-column">
                            <div class="position-relative bg-gradient-primary h-100  m-xl-5 p-5 border-radius-lg d-inline-flex flex-column justify-content-md-start"
                                style="background-image: url('{{ asset('assets/images/illustrations/illustration-matt-stevens-feature.jpg') }}'); background-size:cover; ">
                            </div>
                        </div>
                        <div
                            class="position-absolute top-50 end-3 translate-middle-y  col-xxl-1 col-xxl-2 col-xxl-3 d-xxl-flex flex-xxl-column ">
                            <div class="card card-plain">
                                <div class="card-header">
                                    <h4 class="font-weight-bolder text-center">Sign Up</h4>
                                    <p class="mb-0 text-center">Enter your email and password to register</p>
                                </div>
                                <div class="card-body ">
                                    <form role="form" action="/register" method="post">
                                        @csrf
                                        <div class="input-group input-group-outline  mb-3">

                                            <input type="text" placeholder="Name" name="name" id="name"
                                                value="{{ old('name') }}"
                                                class="form-control @error('name') is-invalid @enderror" required>
                                                <label for="name"></label>
                                            @error('name')
                                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror

                                        </div>
                                        <div class="input-group input-group-outline mb-3">

                                            <input type="username" placeholder="Username" name="username" id="username"
                                                value="{{ old('username') }}"
                                                class="form-control @error('username') is-invalid @enderror" required>
                                                <label for="username"></label>
                                            @error('username')
                                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror

                                        </div>
                                        <div class="input-group input-group-outline mb-3">

                                            <input type="email" placeholder="Email" name="email" id="email"
                                                value=" {{ old('email') }}"
                                                class="form-control @error('email') is-invalid @enderror" required>
                                                <label for="email"></label>
                                            @error('email')
                                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror

                                        </div>
                                        <div class="input-group input-group-outline mb-3">

                                            <input type="password" placeholder="Password" name="password" id="password"
                                                class="form-control @error('password') is-invalid @enderror" required>
                                                <label for="password"></label>
                                            @error('password')
                                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror

                                        </div>
                                        {{-- <div class="form-check form-check-info text-start ps-0">
                                            <input class="form-check-input" name  type="checkbox" value="remember_token" id="flexCheckDefault"
                                                checked>
                                            <label class="form-check-label" for="flexCheckDefault">
                                                I agree the <a href="javascript:;"
                                                    class="text-dark font-weight-bolder">Terms and Conditions</a>
                                            </label>
                                        </div> --}}

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-lg bg-gradient-dark btn-lg w-100 mt-4 mb-0"
                                                type="submit">Sign
                                                Up</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-2 text-sm mx-auto">
                                        Already have an account?
                                        <a href="/login" class="text-dark text-gradient font-weight-bold">Sign in</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
