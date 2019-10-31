<?php

get_header();
?>

<div class="bg-color py-5">
    <div class="at pt-5">
        <h1 class="lheader py-5">SMART QC</h1>
        <div class="py-5">
            <h5 class="sheader">Paying Online Has</h5>
            <h5 class="sheader">Never Been Easy</h5>
        </div>
    </div>
    <div class="pb-5">
        <div class="d-flex flex-row justify-content-evenly">
            <a href="<?php echo site_url('/signup');?>"><button type="button" class="btn btn-success btn-radius">Sign Up</button></a>
            <a href="<?php echo site_url('/login');?>"><button type="button" class="btn btn-success btn-radius">Sign In</button></a>
        </div>
    </div>
</div>

<?php
get_footer();

