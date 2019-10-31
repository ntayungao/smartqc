<?php
/*
*	Template Name: Profile
*	Template Post Type: page
**/
get_header();
?>

<div class="bg-color">
    <h2 class="header-profile py-2">Profile</h2>
</div>
<div class="bg-color-g d-flex justify-content-center">
    <div class="bg-color-w">
        <img src="<?php echo get_theme_file_uri('/assets/img/avatar.png') ?>" class="profile-avatar" />
        <div class="d-flex flex-row justify-content-evenly">
            <div class="d-flex flex-column">
                <label class="mr-1 mt-2">Name</label>
                <label class="mr-1">Email</label>
            </div>
            <div class="d-flex flex-column">
                <label class="ml-1 mt-2">Marcus Aurelious</label>
                <label class="ml-1">marcus.aurelious@gmail.com</label>
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

