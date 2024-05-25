<!DOCTYPE html>
<html lang="en">

<head>
  @include("../partials.head")
  <title>Sign In | Dash Ui - Bootstrap 5 Admin Dashboard Template</title>
</head>

<body>
  <!-- container -->
  <div class="container d-flex flex-column">
    <div class="row align-items-center justify-content-center g-0
        min-vh-100">
      <div class="col-12 col-md-8 col-lg-6 col-xxl-4 py-8 py-xl-0">
        <!-- Card -->
        <div class="card smooth-shadow-md">
          <!-- Card body -->
          <div class="card-body p-6">
            <div class="mb-4">
              <a href="/"><img src="../images/brand/logo/logo-primary.svg" class="mb-2" alt=""></a>
              <p class="mb-6">Please enter your user information.</p>
            </div>
            <!-- Form -->
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <form action="/Login" method="POST">
                @csrf
              <!-- Username -->
              <div class="mb-3">
                <label for="email" class="form-label">email</label>
                <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email address here" required autofocus>
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
              </div>
              <!-- Password -->
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" class="form-control  @error('password') is-invalid @enderror" name="password" id="password" placeholder="**************" required>
                @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
              </div>
              <div>
                <!-- Button -->
                <div class="d-grid">
                  <button type="submit" class="btn btn-primary">Sign
                    in</button>
                </div>

                <div class="d-md-flex justify-content-between mt-4">
                  <div class="mb-2 mb-md-0">
                    <a href="/register" class="fs-5">Create An
                        Account </a>
                  </div>
                  <div>
                    <a href="forget-password.html" class="text-inherit
                        fs-5">Forgot your password?</a>
                  </div>

                </div>
              </div>


            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Scripts -->
  @include("../partials.scripts")
</body>

</html>
