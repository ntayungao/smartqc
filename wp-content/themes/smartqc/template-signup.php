<?php
/*
*	Template Name: Sign Up
*	Template Post Type: page
**/
get_header();
?>

<div class="bg-color py-4">
  <img src="<?php echo get_theme_file_uri('/assets/img/logo.png') ?>" class="index-logo" />
  <form class="at py-3">
  <div class="form-group py-2">
      <label for="exampleInputName2" class="login-label">Full Name</label>
      <input type="text" class="form-control form-login ml-5" id="exampleInputName2" placeholder="Enter Name">
    </div>
    <div class="form-group py-2">
      <label for="exampleInputEmail2" class="login-label">Email address</label>
      <input type="email" class="form-control form-login ml-5" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="Enter Email">
    </div>
    <div class="form-group py-2">
      <label for="exampleInputPassword2" class="login-label">Password</label>
      <input type="password" class="form-control form-login ml-5" id="exampleInputPassword2" placeholder="Password">
    </div>
    <div class="form-group form-check py-2">
      <input type="checkbox" class="form-check-input ml-5" id="exampleCheck2">
      <label class="form-check-label login-label form-login" for="exampleCheck2">Remember me</label>
    </div>
    <a href="<?php echo site_url('/profile');?>"><button type="submit" class="btn btn-danger btnd-radius mb-2">Submit</button></a>
  </form>
</div>

<?php
get_footer();

