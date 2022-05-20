<x-admin-layout title="Dashboard">
    <!-- Page Content  -->
    <div id="content-page" class="content-page">
        <div class="container-fluid">
           <div class="row">
              <div class="col-md-6 col-lg-3">
                 <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-body">
                       <div class="d-flex align-items-center">
                          <div class="rounded-circle iq-card-icon bg-primary"><i class="ri-user-line"></i></div>
                          <div class="text-left ml-3">                                 
                             <h2 class="mb-0"><span class="counter">{{$TotalUser}}</span></h2>
                             <h5 class="">Users</h5>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="col-md-6 col-lg-3">
                 <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-body">
                       <div class="d-flex align-items-center">
                          <div class="rounded-circle iq-card-icon bg-info"><i class="ri-radar-line"></i></div>
                          <div class="text-left ml-3">                                 
                             <h2 class="mb-0"><span class="counter">{{$AllBooking}}</span></h2>
                             <h5 class="">Request Room</h5>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="col-sm-12">
                 <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-header d-flex justify-content-between">
                       <div class="iq-header-title">
                          <h4 class="card-title">Daftar Ruangan</h4>
                       </div>
                    </div>
                    <div class="iq-card-body">
                       <div class="table-responsive">
                          <table class="table mb-0 table-borderless">
                             <thead>
                                <tr>
                                   <th scope="col">Ruangan</th>
                                   <th scope="col">Date</th>
                                   <th scope="col">Invoice</th>
                                   <th scope="col">Amount</th>
                                   <th scope="col">Status</th>
                                   <th scope="col">Action</th>
                                </tr>
                             </thead>
                             <tbody>
                              <tr>
                                 <td>GD 923</td>
                                 <td>18/10/2019</td>
                                 <td>20156</td>
                                 <td>$1500</td>
                                 <td><div class="badge badge-pill badge-success">Ready</div></td>
                                 <td>Copy</td>
                              </tr>
                              <tr>
                                 <td>GD 925</td>
                                 <td>26/10/2019</td>
                                 <td>7859</td>
                                 <td>$2000</td>
                                 <td><div class="badge badge-pill badge-success">Ready</div></td>
                                 <td>Send Email</td>
                              </tr>
                              <tr>
                                 <td>GD 928</td>
                                 <td>18/11/2019</td>
                                 <td>6396</td>
                                 <td>$2500</td>
                                 <td><div class="badge badge-pill badge-danger">Sedang digunakan</div></td>
                                 <td>Before Due</td>
                              </tr>
                              <tr>
                                 <td>GD 513</td>
                                 <td>14/12/2019</td>
                                 <td>7854</td>
                                 <td>$5000</td>
                                 <td><div class="badge badge-pill badge-success">Ready</div></td>
                                 <td>Copy</td>
                              </tr>
                              <tr>
                                 <td>GD 516</td>
                                 <td>24/12/2019</td>
                                 <td>568569</td>
                                 <td>$10000</td>
                                 <td><div class="badge badge-pill badge-success">Ready</div></td>
                                 <td>Send Email</td>
                              </tr>
                              <tr>
                                 <td>GD 525</td>
                                 <td>24/12/2019</td>
                                 <td>568569</td>
                                 <td>$10000</td>
                                 <td><div class="badge badge-pill badge-success">Ready</div></td>
                                 <td>Send Email</td>
                              </tr>
                              <tr>
                                 <td>GD 527</td>
                                 <td>24/12/2019</td>
                                 <td>568569</td>
                                 <td>$10000</td>
                                 <td><div class="badge badge-pill badge-success">Ready</div></td>
                                 <td>Send Email</td>
                              </tr>
                              <tr>
                                 <td>GD 711</td>
                                 <td>24/12/2019</td>
                                 <td>568569</td>
                                 <td>$10000</td>
                                 <td><div class="badge badge-pill badge-success">Ready</div></td>
                                 <td>Send Email</td>
                              </tr>
                              <tr>
                                 <td>GD 712</td>
                                 <td>24/12/2019</td>
                                 <td>568569</td>
                                 <td>$10000</td>
                                 <td><div class="badge badge-pill badge-success">Ready</div></td>
                                 <td>Send Email</td>
                              </tr>
                              <tr>
                                 <td>GD 714</td>
                                 <td>24/12/2019</td>
                                 <td>568569</td>
                                 <td>$10000</td>
                                 <td><div class="badge badge-pill badge-success">Ready</div></td>
                                 <td>Send Email</td>
                              </tr>
                              <tr>
                                 <td>GD 714</td>
                                 <td>24/12/2019</td>
                                 <td>568569</td>
                                 <td>$10000</td>
                                 <td><div class="badge badge-pill badge-success">Ready</div></td>
                                 <td>Send Email</td>
                              </tr>
                              <tr>
                                 <td>GD 721</td>
                                 <td>24/12/2019</td>
                                 <td>568569</td>
                                 <td>$10000</td>
                                 <td><div class="badge badge-pill badge-success">Ready</div></td>
                                 <td>Send Email</td>
                              </tr>
                              <tr>
                                 <td>GD 723</td>
                                 <td>24/12/2019</td>
                                 <td>568569</td>
                                 <td>$10000</td>
                                 <td><div class="badge badge-pill badge-success">Ready</div></td>
                                 <td>Send Email</td>
                              </tr>
                              <tr>
                                 <td>GD 726</td>
                                 <td>24/12/2019</td>
                                 <td>568569</td>
                                 <td>$10000</td>
                                 <td><div class="badge badge-pill badge-success">Ready</div></td>
                                 <td>Send Email</td>
                              </tr>
                             </tbody>
                          </table>
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
              Copyright 2020 <a href="#">Buchungsklasse</a> All Rights Reserved.
           </div>
        </div>
     </div>
  </footer>
</x-admin-layout>