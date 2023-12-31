 <!-- Sidebar Start -->
 <aside class="left-sidebar" style="background: rgb(255,255,255); background: linear-gradient(90deg, rgba(255,255,255,1) 0%, rgba(138,151,255,1) 0%, rgba(249,249,249,1) 94%);">
     <!-- Sidebar scroll-->
     <div>
         <div class="brand-logo d-flex align-items-center justify-content-between bg-primary">
             <a href="/dashboard" class="text-nowrap logo-img">
                 <img src="<?= base_url(); ?>/img/logosekolah.png" width="40" alt="" />

             </a>
             <h4 class="text-white">Administrator</h4>
         </div>
         <!-- Sidebar navigation-->
         <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
             <ul id="sidebarnav">
                 <li class="nav-small-cap">
                     <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                     <span class="hide-menu">Home</span>
                 </li>

                 <li class="sidebar-item">
                     <a class="sidebar-link" href="<?= base_url(); ?>dashboard" aria-expanded="false">
                         <span>
                             <i class="ti ti-layout-dashboard"></i>
                         </span>
                         <span class="hide-menu">Dashboard</span>
                     </a>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link" href="<?= base_url(); ?>landing" aria-expanded="false">
                         <span>
                             <i class="ti ti-aperture"></i>
                         </span>
                         <span class="hide-menu">Setting</span>
                     </a>
                 </li>
                 <li class="nav-small-cap">
                     <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                     <span class="hide-menu">Master</span>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link" href="<?= base_url(); ?>siswa" aria-expanded="false">
                         <span>
                             <i class="ti ti-user"></i>
                         </span>
                         <span class="hide-menu">Siswa</span>
                     </a>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link" href="<?= base_url(); ?>kelas" aria-expanded="false">
                         <span>
                             <i class="ti ti-book-2"></i>
                         </span>
                         <span class="hide-menu">Kelas</span>
                     </a>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link" href="<?= base_url(); ?>data-akun" aria-expanded="false">
                         <span>
                             <i class="ti ti-users"></i>
                         </span>
                         <span class="hide-menu">User</span>
                     </a>
                 </li>
                 <!-- <li class="sidebar-item">
              <a class="sidebar-link" href="./ui-card.html" aria-expanded="false">
                <span>
                  <i class="ti ti-cards"></i>
                </span>
                <span class="hide-menu">Card</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./ui-forms.html" aria-expanded="false">
                <span>
                  <i class="ti ti-file-description"></i>
                </span>
                <span class="hide-menu">Forms</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./ui-typography.html" aria-expanded="false">
                <span>
                  <i class="ti ti-typography"></i>
                </span>
                <span class="hide-menu">Typography</span>
              </a>
            </li> -->
                 <li class="nav-small-cap">
                     <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                     <span class="hide-menu">Prestasi</span>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link" href="<?= base_url(); ?>prestasi" aria-expanded="false">
                         <span>
                             <i class="ti ti-device-analytics"></i>
                         </span>
                         <span class="hide-menu">Data Prestasi</span>
                     </a>
                 </li>
                 <li class="nav-small-cap">
                     <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                     <span class="hide-menu">Pelanggaran</span>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link" href="<?= base_url(); ?>kategori" aria-expanded="false">
                         <span>
                             <i class="ti ti-user-minus"></i>
                         </span>
                         <span class="hide-menu">Kategori Pelanggaran</span>
                     </a>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link" href="<?= base_url(); ?>jenis" aria-expanded="false">
                         <span>
                             <i class="ti ti-user-plus"></i>
                         </span>
                         <span class="hide-menu">Jenis Pelanggaran</span>
                     </a>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link" href="<?= base_url(); ?>pelanggaran" aria-expanded="false">
                         <span>
                             <i class="ti ti-user-x"></i>
                         </span>
                         <span class="hide-menu">Data Pelanggaran</span>
                     </a>
                 </li>

                 <li class="nav-small-cap">
                     <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                     <span class="hide-menu">Laporan</span>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link" href="<?= base_url(); ?>laporan/prestasi" aria-expanded="false">
                         <span>
                             <i class="ti ti-file"></i>
                         </span>
                         <span class="hide-menu">Laporan Prestasi</span>
                     </a>
                 </li>
                 <li class="sidebar-item">
                     <a class="sidebar-link" href="<?= base_url(); ?>laporan" aria-expanded="false">
                         <span>
                             <i class="ti ti-files"></i>
                         </span>
                         <span class="hide-menu">Laporan Pelanggaran</span>
                     </a>
                 </li>


             </ul>
         </nav>
         <!-- End Sidebar navigation -->
     </div>
     <!-- End Sidebar scroll-->
 </aside>
 <!--  Sidebar End -->