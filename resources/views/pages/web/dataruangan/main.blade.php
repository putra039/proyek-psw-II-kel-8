<x-web-layout title="Request List">
    <div id="content-page" class="content-page">
        <div class="container-fluid">
           <div class="row">
              <div class="col-sm-12">
                 <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                       <div class="iq-header-title">
                          <h4 class="card-title">Data Ruangan</h4>
                       </div>
                    </div>
                    <div class="iq-card-body">
                       <div class="table-responsive">
                          <table class="data-tables table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th width="">No</th>
                                    <th width="">Nama</th>
                                    <th width="">Prodi</th>
                                    <th width="">NIM</th>
                                    <th width="">Ruangan</th>
                                    <th width="">Tanggal</th>
                                    <th width="">Jam Mulai</th>
                                    <th width="">Jam Selesai</th>
                                    <th width="">Description</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach($listrequest as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->user->name}}</td>
                                    <td>{{$item->user->prodi}}</td>
                                    <td>{{$item->user->nim}}</td>
                                    <td>{{$item->gd}}</td>
                                    <td>{{$item->tanggal}}</td>
                                    <td>{{$item->jam_mulai}}</td>
                                    <td>{{$item->jam_selesai}}</td>
                                    <td>{{$item->keterangan}}</td>
                                 </tr>
                              @endforeach    
                              </tbody>
                        </table>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
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
</x-web-layout>