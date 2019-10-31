<?php
/*
*	Template Name: Login
*	Template Post Type: page
**/
get_header();
?>

<div class="bg-color py-5">
  <img src="<?php echo get_theme_file_uri('/assets/img/logo.png') ?>" class="index-logo" />
  <form class="at py-4">
    <div class="form-group py-2">
      <label for="exampleInputEmail1" class="login-label">Email address</label>
      <input type="email" class="form-control form-login ml-5" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group py-2">
      <label for="exampleInputPassword1" class="login-label">Password</label>
      <input type="password" class="form-control form-login ml-5" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group form-check py-2">
      <input type="checkbox" class="form-check-input ml-5" id="exampleCheck1">
      <label class="form-check-label login-label form-login" for="exampleCheck1">Remember me</label>
    </div>
    <a href="<?php echo site_url('/profile');?>"><button type="submit" class="btn btn-danger btnd-radius mb-1">Submit</button></a>
    <a href="" class="login-forget">Forgot Password?</a>
  </form>
</div>

<?php
get_footer();

