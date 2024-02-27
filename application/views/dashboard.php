 <div class="row">


     <?php
        $role = $this->session->userdata('login_session')['role'];
        $yang_login = $this->session->userdata('login_session')['nama'];
        ?>
     <div class="col-xl-12 ">
         <div class="card shadow mb-4">
             <!-- Card Header - Dropdown -->
             <div class="card-header bg-primary py-3 d-flex flex-row align-items-center justify-content-between">
                 <h3 class="m-0 font-weight-bold text-white">Selamat datang <font style="color:yellow;"><?= $yang_login ?></font> <br> di Sistem Informasi Aset </h3>
             </div>
             <!-- Card Body -->

         </div>
     </div>
     <div class="col-xl-4 col-6 mb-4">
         <div class="card border-left-primary shadow h-100 py-2">
             <div class="card-body">
                 <div class="row no-gutters align-items-center">
                     <div class="col mr-2">
                         <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pending Order</div>
                         <div class="h5 mb-0 font-weight-bold text-gray-800">1</div>
                     </div>
                     <div class="col-auto">
                         <i class="fas fa-folder fa-2x text-gray-300"></i>
                     </div>
                 </div>
             </div>
         </div>
     </div>


     <!-- <div class="col-xl-4 col-6 mb-4">
         <div class="card border-left-success shadow h-100 py-2">
             <div class="card-body">
                 <div class="row no-gutters align-items-center">
                     <div class="col mr-2">
                         <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Date</div>
                         <?php date_default_timezone_set("Asia/Jakarta"); ?>

                         <div class="h5 mb-0 font-weight-bold text-gray-800"><?= date('D , d-M-Y | h:i'); ?></div>
                     </div>
                     <div class="col-auto">
                         <i class="fas fa-calendar fa-2x text-gray-300"></i>
                     </div>
                 </div>
             </div>
         </div>
     </div> -->

     <div class="col-xl-4 col-6 mb-4">
         <div class="card border-left-success shadow h-100 py-2">
             <div class="card-body">
                 <div class="row no-gutters align-items-center">
                     <div class="col mr-2">
                         <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pemasukan Bulan Ini</div>
                         <?php date_default_timezone_set("Asia/Jakarta"); ?>

                         <div class="h5 mb-0 font-weight-bold text-gray-800">xxx</div>
                     </div>
                     <div class="col-auto">
                         <i class="fas fa-calendar fa-2x text-gray-300"></i>
                     </div>
                 </div>
             </div>
         </div>
     </div>


     <div class="col-xl-4 col-6 mb-4">
         <div class="card border-left-warning shadow h-100 py-2">
             <div class="card-body">
                 <div class="row no-gutters align-items-center">
                     <div class="col mr-2">
                         <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pengeluaran Bulan Ini</div>
                         <div class="h5 mb-0 font-weight-bold text-gray-800">xxx</div>
                     </div>
                     <div class="col-auto">
                         <i class="fas fa-user-plus fa-2x text-gray-300"></i>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>

 <div class="row">

 

     <!-- Area Chart -->
     <div class="col-xl-6 col-6 mb-4">
         <div class="card border-left-warning shadow h-100 py-2">
             <div class="card-body">
                 <div class="row no-gutters align-items-center">
                     <div class="col mr-2">
                         <div class="text-xs font-weight-bold text-warning text-uppercase mb-1"> Total Pemasukan</div>
                         <div class="h5 mb-0 font-weight-bold text-gray-800">xxx</div>
                     </div>
                     <div class="col-auto">
                         <i class="fas fa-user-plus fa-2x text-gray-300"></i>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <div class="col-xl-6 col-6 mb-4">
         <div class="card border-left-warning shadow h-100 py-2">
             <div class="card-body">
                 <div class="row no-gutters align-items-center">
                     <div class="col mr-2">
                         <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Pengeluaran</div>
                         <div class="h5 mb-0 font-weight-bold text-gray-800">xxx</div>
                     </div>
                     <div class="col-auto">
                         <i class="fas fa-user-plus fa-2x text-gray-300"></i>
                     </div>
                 </div>
             </div>
         </div>
     </div>


    </div>

 
 <div class="row">

 

     <!-- Area Chart -->


     <div class="col-xl-6 col-6 mb-4">
         <div class="card border-left-primary shadow h-100 py-2">
             <div class="card-body">
                 <div class="row no-gutters align-items-center">
                     <div class="col mr-2">
                         <div class="text-xl font-weight-bold text-primary text-uppercase mb-1">Data Pengeluaran</div>

                         <div class="table-responsive">
                             <table class="table" id="dataTable11">
                                 <thead>
                                     <tr>
                                         <th width="30">No.</th>
                                         <th>Tanggal</th>
                                         <th>Jumlah</th>


                                         <!-- <th>Aksi</th> -->
                                     </tr>
                                 </thead>
                                 <tbody>

                                 </tbody>
                             </table>
                         </div>
                     </div>

                 </div>
             </div>
         </div>
     </div>


     <div class="col-xl-6 col-6 mb-4">
         <div class="card border-left-success shadow h-100 py-2">
             <div class="card-body">
                 <div class="row no-gutters align-items-center">
                     <div class="col mr-2">
                         <div class="text-xl font-weight-bold text-primary text-uppercase mb-1">Data Pemasukan</div>

                         <div class="table-responsive">
                             <table class="table" id="dataTable11">
                                 <thead>
                                     <tr>
                                         <th width="30">No.</th>
                                         <th>Tanggal</th>
                                         <th>Jumlah </th>


                                         <!-- <th>Aksi</th> -->
                                     </tr>
                                 </thead>
                                 <tbody>

                                 </tbody>
                             </table>
                         </div>
                     </div>

                 </div>
             </div>
         </div>
     </div>



 </div>


 <!-- </div>
        </div>
    </div>

</div>   -->