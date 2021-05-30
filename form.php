<?php include('form_process.php'); ?>
<link rel="stylesheet" type="text/css" href="aa.css">
<div class="container">  
  <form id="contact" action="<?=$_SERVER['PHP_SELF']; ?>" method="post">
    <h3>Quick Contact</h3>
    <h4>Contact us today, and get reply with in 24 hours!</h4>
    <fieldset>
      <input placeholder="Your name" type="name" tabindex="1" name="name" required autofocus>
      <span class="error"><?=$name_error ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="email" tabindex="2" name="email" required>
       <span class="error"><?=$email_error ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number" type="phone" tabindex="3" name="phone" required>
      
    </fieldset>
    <fieldset>
      <input placeholder="Your Web Site starts with http://" type="url" tabindex="4" name="url" required >
       
    </fieldset>
    <fieldset>
      <textarea placeholder="Type your Message Here...." tabindex="5" type="text" name="message" required ></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
 
  
</div>