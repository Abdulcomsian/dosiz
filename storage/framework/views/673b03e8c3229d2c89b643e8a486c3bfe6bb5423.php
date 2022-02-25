<?php $__env->startSection('content'); ?>
<section id="productBanner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <img src="<?php echo e(asset('assets/img/user/productBanner.png')); ?>" alt="">
            </div>
        </div>
    </div>
</section>
<section id="productCatalogue">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
                <h2>קולקציית הפרימיום שלנו</h2>
            </div>
        </div>
        <div class="tabDiv">
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-pills">
                        <li class="active"><a data-toggle="pill" href="#home">כל המוצרים</a></li>
                        <li><a data-toggle="pill" href="#menu1">םידימצ</a></li>
                        <li><a data-toggle="pill" href="#menu2">תוארשרש</a></li>
                        <li><a data-toggle="pill" href="#menu3">תועבט</a></li>
                        <li><a data-toggle="pill" href="#menu4">םירזיבא</a></li>
                        <li><a data-toggle="pill" href="#menu5">תונתמ</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="tabContent">
            <div class="row">
                <div class="col-12">
                    <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">
                            <h3>HOME</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div id="menu1" class="tab-pane fade">
                            <h3>Menu 1</h3>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <div id="menu2" class="tab-pane fade">
                            <h3>Menu 2</h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                        </div>
                        <div id="menu3" class="tab-pane fade">
                            <h3>Menu 3</h3>
                            <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/Development/Web/Laravel/dosiz/resources/views/user/product/productCatalogue.blade.php ENDPATH**/ ?>