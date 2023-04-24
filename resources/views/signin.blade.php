<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" ></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"  ></script>

<style>

.gradient-custom-2 {
/* fallback for old browsers */
background: #fccb90;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
}

@media (min-width: 768px) {
.gradient-form {
height: 100vh !important;
}
}
@media (min-width: 769px) {
.gradient-custom-2 {
border-top-right-radius: .3rem;
border-bottom-right-radius: .3rem;
}
}
    </style>
</head>
<body>

    <section class="h-100 gradient-form " style="background-color: #eeeeee05;">
        <div class="container py-2 h-100 ">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
              <div class="card rounded-3 text-black">
                <div class="row g-0">
                  <div class="col-lg-6">
                    <div class="card-body p-md-5 mx-md-4">

                      <div class="text-center">
                          {{-- <img src="https://play-lh.googleusercontent.com/DTzWtkxfnKwFO3ruybY1SKjJQnLYeuK3KmQmwV5OQ3dULr5iXxeEtzBLceultrKTIUTr" width: 185px; alt="logo" height="50px"> --}}
                        <h4 class="mt-1 mb-5 pb-1">Sign Up</h4>
                      </div>

                      <form>
                        {{-- <p>Please sign up to your account</p> --}}


                        <div class="form-outline mb-4">
                            <label class="form-label" for="form2Example11">Name</label>
                            <input type="email" id="form2Example11" class="form-control"
                            placeholder="Enter your name" />
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="form2Example11">E-Mail</label>
                            <input type="email" id="form2Example11" class="form-control"
                            placeholder="Enter your e-mail address" />
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="form2Example22">Password</label>
                            <input type="password" id="form2Example22" class="form-control" />
                        </div>

                        <div class="text-center pt-1 mb-5 pb-1">
                          <button class="btn btn-primary btn-block fa-lg btn-lg gradient-custom-2 mb-3" type="button">Sign Up
                        </button>
                          {{-- <a class="text-muted" href="#!">Forgot password?</a> --}}
                        </div>

                        <div class="d-flex align-items-center justify-content-center pb-4">
                          <p class="mb-0 me-2">Already have'an account</p>
                          <button type="button" class="btn btn-outline-danger">Sign in</button>
                        </div>

                      </form>

                    </div>
                  </div>
                  <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                      <h4 class="mb-4">We are more than just a company</h4>
                      <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


</body>
</html>
