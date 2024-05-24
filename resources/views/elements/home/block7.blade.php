<section class="">
    <div class="container">
        <div class="row mb-4">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="fs-4 text-decoration-underline">HỆ THỐNG CÁC CƠ SỞ</h2>
                
            </div>
        </div>
        <div class="row  g-3 justify-content-center basis-content">
           @foreach ($basis as $basis)
           <div class="col-lg-4 me-2 ms-2 ">
            <div class="card action-trigger-hover border bg-transparent pb-3">
                <div class="card-body pb-0">
                    <div  class="p-2 mb-3 rounded-pill shadow text-center bg-dark-subtle">
                        <h6 class="text-center pt-2"><span>{{$basis->name}}</span></h6>
                    </div>
                    <div style="font-size: 11px">
                        <p><span class="showroom-table-address" style="font-weight: 700"><i class="fas fa-map-marker-alt"></i> {{$basis->address}}</span>
                         </p>
                         <a href="{{$basis->gg_map}}" class="showroom-table-address"> <p><span class="showroom-table-address" style="font-weight: 700"><i class="fas fa-map"></i> Xem bản đồ đường đi</span>
                         </p></a>
                        <p><span class="showroom-table-address" style="font-weight: 700"><i class="fas fa-phone"></i> tel: {{$basis->phone}}</span>
                         </p>
                         <p><span class="showroom-table-address" style="font-weight: 700"><i class="fas fa-envelope"></i> email: {{$basis->email}}</span>
                         </p>
                         <p><span class="showroom-table-address" style="font-weight: 700"><i class="far fa-clock"></i> Thời gian mở cửa: {{$basis->open_time}}</span>
                         </p>
                    </div>
                </div>
                <!-- Card footer -->

            </div>
        </div>
           @endforeach
            
            
            
          
        </div>
    </div>
   
</section>
