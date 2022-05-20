<x-web-layout title="User Edit">
    <!-- Page Content  -->
    <div id="content-page" class="content-page">
        <div class="container-fluid">
           <div class="row">
              <div class="col-lg-12">
                 <div class="iq-edit-list-data">
                    <div class="tab-content">
                       <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                          <div class="iq-card">
                             <div class="iq-card-header d-flex justify-content-between">
                                <div class="iq-header-title">
                                   <h4 class="card-title">Personal Information</h4>
                                </div>
                             </div>
                             <div class="iq-card-body">
                                <form>
                                   <div class="form-group row align-items-center">
                                      <div class="col-md-12">
                                         <div class="profile-img-edit">
                                            <img class="profile-pic" src="{{asset('assets/images/user.jpg')}}" alt="profile-pic">
                                            <div class="p-image">
                                               <i class="ri-pencil-line upload-button"></i>
                                               <input class="file-upload" type="file" accept="image/*"/>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                   <div class="iq-card-body">
                                      <form>
                                         <div class="form-group">
                                            <label for="cpass">Current Password:</label>
                                            <input type="Password" class="form-control" id="cpass" value="">
                                         </div>
                                         <div class="form-group">
                                            <label for="npass">New Password:</label>
                                            <input type="Password" class="form-control" id="npass" value="">
                                         </div>
                                         <div class="form-group">
                                            <label for="vpass">Verify Password:</label>
                                            <input type="Password" class="form-control" id="vpass" value="">
                                         </div>
                                         <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                         <button type="reset" class="btn iq-bg-danger">Cancel</button>
                                      </form>
                                   </div>
                                </form>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
  <!-- Wrapper END -->
  <!-- Footer -->
  <footer class="iq-footer">
     <div class="container-fluid">
        <div class="row">
           <div class="col-lg-6">
              <ul class="list-inline mb-0">
                 <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                 <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
              </ul>
           </div>
           <div class="col-lg-6 text-right">
              Copyright 2020 <a href="#">Booksto</a> All Rights Reserved.
           </div>
        </div>
     </div>
  </footer>
</x-web-layout>