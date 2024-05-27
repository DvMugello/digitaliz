<!DOCTYPE html>
<html lang="en">

<head>
  @include("../partials.head")
  <title>Sign Up | Dash Ui - Bootstrap 5 Admin Dashboard Template</title>
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
            <form action="/register" method="post">
                @csrf
              <!-- Name -->
              <div class="mb-3">
                <label for="name" class="form-label">Name</label>

                <input type="text" id="name" class="form-control @error('name')is-invalid
                @enderror" name="name" placeholder="Name" required autofocus value="{{ old('name') }}">
              </div>
              {{-- Username --}}
              <div class="mb-3">
                <label for="username" class="form-label">Username</label>

                <input type="text" id="username" class="form-control @error('username')is-invalid
                @enderror" name="username" placeholder="Username" required autofocus value="{{ old('username') }}">
              </div>
              <!-- Email -->
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" class="form-control @error('email')is-invalid
                @enderror" name="email" placeholder="Email address here" required value="{{ old('email') }}">
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
              </div>
              <!-- Password -->
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" class="form-control @error('password')is-invalid
                @enderror" name="password" placeholder="**************" required value="{{ old('password') }}">
                @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
              </div>
              <!-- Password -->
              {{-- <div class="mb-3">
                <label for="confirm-password" class="form-label">Confirm
                    Password</label>
                <input type="password" id="confirm-password" class="form-control" name="password" placeholder="**************" required="">
              </div> --}}
              <div>
                <!-- Button -->
                <div class="d-grid">
                  <button type="submit" class="btn btn-primary">
                    Create Account
                  </button>
                </div>

                <div class="d-md-flex justify-content-between mt-4">
                  <div class="mb-2 mb-md-0">
                    <a href="/Login" class="fs-5">Already
                        member? Login </a>
                  </div>
                  {{-- <div>
                    <a href="forget-password.html" class="text-inherit
                        fs-5">Forgot your password?</a>
                  </div> --}}

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
