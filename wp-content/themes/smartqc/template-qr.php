<?php
/*
*	Template Name: QR
*	Template Post Type: page
**/
get_header();
?>

<div class="bg-color">
    <h2 class="header-qr py-2">QR</h2>
</div>
<div class="qr-bg">
    <img src="<?php echo get_theme_file_uri('/assets/img/qr.png') ?>" class="qr-img"/>
    <div class="qr-message mt-5">
        <p class="text-qr">This is your current receipt in your last transaction.</p>
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


