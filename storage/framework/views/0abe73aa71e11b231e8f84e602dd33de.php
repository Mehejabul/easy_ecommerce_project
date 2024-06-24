<?php $__env->startSection('css'); ?>
<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin_template/app-assets/vendors/css/vendors.min.css')); ?>">
<link rel="stylesheet" type="text/css"
    href="<?php echo e(asset('admin_template/app-assets/vendors/css/tables/datatable/datatables.min.css')); ?>">
<!-- END: Vendor CSS-->

<!-- BEGIN: Theme CSS-->
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin_template/app-assets/css/bootstrap.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin_template/app-assets/css/bootstrap-extended.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin_template/app-assets/css/colors.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin_template/app-assets/css/components.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin_template/app-assets/css/themes/dark-layout.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin_template/app-assets/css/themes/semi-dark-layout.css')); ?>">
<!-- END: Theme CSS-->

<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css"
    href="<?php echo e(asset('admin_template/app-assets/css/core/menu/menu-types/vertical-menu.css')); ?>">
<!-- END: Page CSS-->

<!-- BEGIN: Custom CSS-->
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin_template/assets/css/style.css')); ?>">
<!-- END: Custom CSS-->
<style>
    a label {
        cursor: pointer;
    }

</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="content-header row">
    <div class="content-header-left col-12 mb-2 mt-1">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <?php if(Session::has('success')): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success: </strong><?php echo e(Session::get('success')); ?>

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php endif; ?>
                <?php if(Session::has('error')): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Success: </strong><?php echo e(Session::get('error')); ?>

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php endif; ?>
                <h5 class="content-header-title float-left pr-1 mb-0">Order Table</h5>
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb p-0 mb-0">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i
                                    class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item ">Order Items
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content-body">
    <section id="basic-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title text-primary">Item List</h5>
                        <div class="heading-elements">
                            
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Product Title</th>
                                            <th>Size</th>
                                            <th>price</th>
                                            <th>Quantity</th>
                                            <th>Total</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if($orderItems): ?>
                                            <?php $__currentLoopData = $orderItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php if($order->product->image): ?>
                                                    <img src="<?php echo e(asset('images/product_image/'.$order->product->image)); ?>" alt="" width="150px">
                                                <?php endif; ?></td>
                                                <td>
                                                    <span class="text-primary"><?php echo e($order->product->title); ?></span> <br> <span class="success">code:</span> <?php echo e($order->product->code); ?>

                                                </td>
                                                <td>
                                                    <?php if($order->variation): ?>
                                                        <?php echo e($order->variation->size); ?>

                                                    <?php endif; ?>
                                                </td>
                                                <td><?php echo e($order->price); ?></td>
                                                <td><?php echo e($order->quantity); ?></td>
                                                <td><?php echo e($order->price*$order->quantity); ?></td>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<!-- BEGIN: Vendor JS-->
<script src="<?php echo e(asset('admin_template/app-assets/vendors/js/vendors.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin_template/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js')); ?>"></script>
<script src="<?php echo e(asset('admin_template/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js')); ?>"></script>
<script src="<?php echo e(asset('admin_template/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js')); ?>"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="<?php echo e(asset('admin_template/app-assets/vendors/js/tables/datatable/datatables.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin_template/app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js')); ?>">
</script>
<script src="<?php echo e(asset('admin_template/app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin_template/app-assets/vendors/js/tables/datatable/buttons.html5.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin_template/app-assets/vendors/js/tables/datatable/buttons.print.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin_template/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin_template/app-assets/vendors/js/tables/datatable/pdfmake.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin_template/app-assets/vendors/js/tables/datatable/vfs_fonts.js')); ?>"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="<?php echo e(asset('admin_template/app-assets/js/core/app-menu.js')); ?>"></script>
<script src="<?php echo e(asset('admin_template/app-assets/js/core/app.js')); ?>"></script>
<script src="<?php echo e(asset('admin_template/app-assets/js/scripts/components.js')); ?>"></script>
<script src="<?php echo e(asset('admin_template/app-assets/js/scripts/footer.js')); ?>"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="<?php echo e(asset('admin_template/app-assets/js/scripts/datatables/datatable.js')); ?>"></script>
<!-- END: Page JS-->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('server.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/zariijsr/abrarmart.com/resources/views/server/order/orderdetails.blade.php ENDPATH**/ ?>