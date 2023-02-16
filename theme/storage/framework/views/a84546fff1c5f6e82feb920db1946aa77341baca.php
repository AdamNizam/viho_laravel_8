<header class="main-nav">
    <div class="sidebar-user text-center">
        <a class="setting-primary" href="javascript:void(0)"><i data-feather="settings"></i></a><img class="img-90 rounded-circle" src="<?php echo e(asset('assets/images/dashboard/1.png')); ?>" alt="" />
        <div class="badge-bottom"><span class="badge badge-primary">New</span></div>
        <a href="user-profile"> <h6 class="mt-3 f-14 f-w-600">Survior</h6></a>
        <p class="mb-0 font-roboto">Pendataan PMKS Anak Yatim</p>
     </div>
    <nav>
        <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6>Dashboard</h6>
                        </div>
                    </li>
                    <li>
                        <a class="nav-link menu-title link-nav <?php echo e(prefixActive('/dashboard')); ?>" href="<?php echo e(route('/')); ?>"><i data-feather="home"></i><span>Dashboard</span></a>
                        
                    </li>

                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6>Form Data PMKS</h6>
                        </div>
                    </li>
                    <li>
                        <a class="nav-link menu-title link-nav <?php echo e(routeActive('sample-page')); ?>" href="<?php echo e(route('Tambah/Data/PMKS')); ?>"><i data-feather="file"></i><span>Tambah Data</span></a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav <?php echo e(routeActive('internationalization')); ?>" href="<?php echo e(route('Data/PMKS')); ?>"><i data-feather="aperture"></i><span>Data PMKS</span></a>
                    </li>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>
<?php /**PATH C:\Users\USER\Downloads\AdamNizamPKL\Viho-Laravel-8\theme\resources\views/layouts/admin/partials/sidebar.blade.php ENDPATH**/ ?>