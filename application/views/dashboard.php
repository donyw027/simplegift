 <div class="row">

 <?php 
    $p_bulan=date('M');
    $p_bulann=date('m');
    $p_tahun=date('Y');
    $p_hari=date('d');
 ?>


     <?php
        $role = $this->session->userdata('login_session')['role'];
        $yang_login = $this->session->userdata('login_session')['nama'];
        ?>
     <div class="col-xl-12 ">
         <div class="card shadow mb-4">
             <!-- Card Header - Dropdown -->
             <div class="card-header bg-success py-3 d-flex flex-row align-items-center justify-content-between">
                 <h3 class="m-0 font-weight-bold text-white">Selamat datang <font style="color:yellow;"><?= $yang_login ?></font> <br> di Sistem My Simple Gift </h3>
             </div>
             <!-- Card Body -->

         </div>
     </div>
     <div class="col-xl-6 col-6 mb-4">
                               <div class="card border-left-warning shadow h-100 py-2">
             <div class="card-body">
                 <div class="row no-gutters align-items-center">
                     <div class="col mr-2">
                         <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Order</div>
                         <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$order ?></div>
                     </div>
                     <div class="col-auto">
                         <i class="fas fa-folder fa-2x text-gray-300"></i>
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
                         <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Master Alat & Bahan</div>
                         <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$stok ?></div>
                     </div>
                     <div class="col-auto">
                         <i class="fas fa-folder fa-2x text-gray-300"></i>
                     </div>
                 </div>
             </div>
         </div>
     </div>


   

    


    

     <div class="col-xl-4 col-6 mb-4">
         <div class="card border-left-success shadow h-100 py-2">
             <div class="card-body">
                 <div class="row no-gutters align-items-center">
                     <div class="col mr-2">
                         <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pemasukan Bulan Ini</div>
                         <?php date_default_timezone_set("Asia/Jakarta"); ?>

                         <div class="h5 mb-0 font-weight-bold text-gray-800">
                         <?="Rp. " . number_format($pemasukan_bulanan,0,',','.'); ?>

                         </div>
                     </div>
                     <div class="col-auto">
                         <i class="fas fa-calendar fa-2x text-gray-300"></i>
                     </div>
                 </div>
             </div>
         </div>
     </div>


     <div class="col-xl-4 col-6 mb-4">
         <div class="card border-left-danger shadow h-100 py-2">
             <div class="card-body">
                 <div class="row no-gutters align-items-center">
                     <div class="col mr-2">
                         <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Pengeluaran Bulan Ini</div>
                         <div class="h5 mb-0 font-weight-bold text-gray-800">
                        
                         <?="Rp. " . number_format($pengeluaran_bulanan,0,',','.'); ?></div>
                     </div>
                     <div class="col-auto">
                         <i class="fas fa-user-plus fa-2x text-gray-300"></i>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <div class="col-xl-4 col-6 mb-4">
         <div class="card border-left-primary shadow h-100 py-2">
             <div class="card-body">
                 <div class="row no-gutters align-items-center">
                     <div class="col mr-2">
                         <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Laba Rugi Bulan ini</div>
                         <div class="h5 mb-0 font-weight-bold text-gray-800">
                        
                         <?php 
                            if ($Labarugi_bulanan<0) { ?>
                                <font color="red"> <?="Rp. " . number_format($Labarugi_bulanan,0,',','.'); ?></font>
                            <?php }else {?>
                                <font color="green"> <?="Rp. " . number_format($Labarugi_bulanan,0,',','.'); ?></font>
                            <?php } ?>
                         
                        </div>
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
     <div class="col-xl-4 col-6 mb-4">
         <div class="card border-left-success shadow h-100 py-2">
             <div class="card-body">
                 <div class="row no-gutters align-items-center">
                     <div class="col mr-2">
                         <div class="text-xs font-weight-bold text-success text-uppercase mb-1"> Total Pemasukan Keseluruhan</div>
                         <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?="Rp. " . number_format($total_pemasukan,0,',','.'); ?>
                            </div>
                     </div>
                     <div class="col-auto">
                         <i class="fas fa-user-plus fa-2x text-gray-300"></i>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <div class="col-xl-4 col-6 mb-4">
         <div class="card border-left-danger shadow h-100 py-2">
             <div class="card-body">
                 <div class="row no-gutters align-items-center">
                     <div class="col mr-2">
                         <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Total Pengeluaran Keseluruhan</div>
                         <div class="h5 mb-0 font-weight-bold text-gray-800">

                         <?="Rp. " . number_format($total_pengeluaran,0,',','.'); ?>
                         </div>
                     </div>
                     <div class="col-auto">
                         <i class="fas fa-user-plus fa-2x text-gray-300"></i>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <div class="col-xl-4 col-6 mb-4">
         <div class="card border-left-primary shadow h-100 py-2">
             <div class="card-body">
                 <div class="row no-gutters align-items-center">
                     <div class="col mr-2">
                         <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Laba & Rugi Keseluruhan</div>
                         <div class="h5 mb-0 font-weight-bold text-gray-800">
                         <?php 
                            if ($Labarugi_total<0) { ?>
                                <font color="red"> <?="Rp. " . number_format($Labarugi_total,0,',','.'); ?></font>
                            <?php }else {?>
                                <font color="green"> <?="Rp. " . number_format($Labarugi_total,0,',','.'); ?></font>
                            <?php } ?>
                         
                         
                         </div>
                     </div>
                     <div class="col-auto">
                         <i class="fas fa-user-plus fa-2x text-gray-300"></i>
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