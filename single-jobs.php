<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/assets/css/form.css' ?>">
<?php $post = get_post(); ?>
</div>
<h1 style="text-align:center;color:#000;"><?= $post->post_title?></h1>
<h4 style="text-align:center;color:#000;">Location : Remotely <br>
Salary : Confidential<br>
Job Type : Part Time</h4>


<div class="container-contact1" style="transform:translateX(20vw);">
<div class="contact1-pic js-tilt" data-tilt="" style="transform: perspective(300px) rotateX(0deg) rotateY(0deg); will-change: transform;">
<img src="<?= get_template_directory_uri().'/assets/images/img-01.webp'?>" alt="IMG">
</div>
<form class="contact1-form validate-form">
<span class="contact1-form-title">
Apply for the job
</span>
<div class="wrap-input1 validate-input" data-validate="Name is required">
<input class="input1" type="text" name="name" placeholder="Name">
<span class="shadow-input1"></span>
</div>
<div class="wrap-input1 validate-input" data-validate="Valid email is required: ex@abc.xyz">
<input class="input1" type="text" name="email" placeholder="Email">
<span class="shadow-input1"></span>
</div>
<div class="wrap-input1 validate-input" data-validate="Subject is required">
<input class="input1" type="text" name="subject" placeholder="Summary">
<span class="shadow-input1"></span>
</div>
<div class="wrap-input1 validate-input" data-validate="Message is required">
<textarea class="input1" name="message" placeholder="Message"></textarea>
<span class="shadow-input1"></span>
</div>
<div class="container-contact1-form-btn">
<button class="contact1-form-btn">
<span>
Send Email
<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
</span>
</button>
</div>
</form>
</div>
<?php get_footer(); ?>