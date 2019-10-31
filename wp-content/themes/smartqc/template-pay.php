<?php
/*
*	Template Name: Pay
*	Template Post Type: page
**/
get_header();
?>

<div class="bg-color">
    <h2 class="header-pay py-2">Pay</h2>
</div>
<div class="d-flex flex-row">
    <div class="left-side">
        <img src="<?php echo get_theme_file_uri('/assets/img/tag-logo.png') ?>" class="index-logos"/>
        <div class="d-flex flex-column mt-4">
            <a href="<?php echo site_url('/pay');?>"><button class="label-arrows mt-2">Wallet</button></a>
            <a href="<?php echo site_url('/home');?>"><button class="label-arrows mt-2">Logout</button></a>
        </div>
    </div>
    <div class="right-side">
        <h1 class="peso-sign">Php</h1>
        <h2 class="peso-amount">1000.00</h2>
        <div class="mt-3">
            <label class="ml-2">Input Amount:</label>
            <input class="form-control amt-pay ml-2" type="integer" placeholder="Amount To Pay">
        </div>
        <div class="dropdown ml-2 mt-3">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Select Payment Method
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Tagcash</a>
                <a class="dropdown-item" href="#">Paymaya</a>
                <a class="dropdown-item" href="#">Gcash</a>
            </div>
        </div>
        <div class="d-flex flex-column mt-4">
            <h3 class="ml-3">Balance</h3>
            <h3 class="ml-3">Php 20.00</h3>
            <button type="button" class="btn btn-danger btn-pay mt-5 ml-3" data-toggle="modal" data-target="#exampleModal">Pay</button>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Marcus Aurelious</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img src="<?php echo get_theme_file_uri('/assets/img/qr.png') ?>" class="qr-imgs"/>
                            <p class="text-qr">Thank You For The Payment! This is your receipt.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-color-gra">
    <div class="d-flex flex-row justify-content-evenly">
        <a href="<?php echo site_url('/profile');?>"><button class="label-arrow mt-2">Profile</button></a>
        <a href="<?php echo site_url('/pay');?>"><button class="label-arrow mt-2">Pay</button></a>
        <a href="<?php echo site_url('/qr');?>"><button class="label-arrow mt-2">QR</button></a>
    </div>
</div>

<?php
get_footer();

