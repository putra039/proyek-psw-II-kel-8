<x-web-layout title="Booking">
    <div id="content-page" class="content-page">
        <div class="container-fluid">
           <div class="row">
              <div class="col-sm-12">
                 <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                       <div class="iq-header-title">
                          <h4 class="card-title">Request</h4>
                       </div>
                       <div class="iq-card-header-toolbar d-flex align-items-center">
                          <a href="{{route('booking.create')}}" class="btn btn-primary">Add New Request Room</a>
                       </div>
                    </div>
                    <div class="iq-card-body">
                       <div class="table-responsive">
                          <table class="data-tables table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Ruangan</th>
                                    <th>Tanggal</th>
                                    <th>Jam Mulai</th>
                                    <th>Jam Selesai</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach($AllBooking as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->gd}}</td>
                                    <td>{{$item->tanggal}}</td>
                                    <td>{{$item->jam_mulai}}</td>
                                    <td>{{$item->jam_selesai}}</td>
                                    <td>{{$item->keterangan}}</td>
                                    <td><div class="badge badge-pill badge-success">{{$item->status}}</div></td>
                                    <td>
                                       {{-- <div class="flex align-items-center list-user-action"> --}}
                                          <form action="{{route('booking.edit', $item->id)}}" method="PATCH">
                                             @csrf
                                             <button type="submit" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="ri-pencil-line"></i></button>
                                          </form>
                                         {{-- <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="{{route('booking.edit',$item->id)}}"><i class="ri-pencil-line"></i></a> --}}
                                         {{-- <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="{{route('booking.destroy',$item->id)}}"><i class="ri-delete-bin-line"></i></a> --}}
                                         <form action="{{route('booking.destroy', $item->id)}}" method="POST">
                                          @csrf
                                          @method('DELETE')
                                          <button type="submit" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="ri-delete-bin-line"></i></button>
                                         </form>
                                      {{-- </div> --}}
                                    </td>
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