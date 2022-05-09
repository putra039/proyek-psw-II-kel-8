<x-auth-layout title="Login">
    <div class="container p-0">
        <div class="row no-gutters height-self-center">
          <div class="col-sm-12 align-self-center page-content rounded">
            <div class="row m-0">
              <div class="col-sm-12 sign-in-page-data">
                  <div class="sign-in-from bg-primary rounded">
                    <div>
                        <center><img src="images/login.png" width="200px"></center>
                      <p class="text-center text-white">Enter your email address and password to access admin panel.</p>
                      <form class="mt-4 form-text">
                          <div class="form-group">
                              <label for="exampleInputEmail1">Name</label>
                              <input type="text" class="form-control mb-0" id="exampleInputEmail1" placeholder="Name">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">NIM</label>
                            <input type="text" class="form-control mb-0" id="exampleInputEmail1" placeholder="Student ID Number">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Prodi</label>
                            <input type="text" class="form-control mb-0" id="exampleInputEmail1" placeholder="Study Program">
                          </div>
                          <div class="form-group">
                              <label for="exampleInputEmail2">Email address</label>
                              <input type="email" class="form-control mb-0" id="exampleInputEmail2" placeholder="Enter email">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Username</label>
                            <input type="text" class="form-control mb-0" id="exampleInputEmail1" placeholder="Username">
                          </div>
                          <div class="form-group">
                              <label for="exampleInputPassword1">Password</label>
                              <input type="password" class="form-control mb-0" id="exampleInputPassword1" placeholder="Password">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Confrim Password</label>
                            <input type="password" class="form-control mb-0" id="exampleInputPassword1" placeholder="Please Confirm Password">
                          </div>
                          <div class="sign-info text-center">
                              <button type="submit" class="btn btn-white d-block w-100 mb-2">Sign Up</button>
                              <span class="text-dark d-inline-block line-height-2">Already Have Account ? <a href="sign-in.html" class="text-white">Log In</a></span>
                          </div>
                      </form>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</x-auth-layout>