<?php include('server.php');?>
<!DOCTYPE html>
<html>
	<?php include('templates/header.php'); ?>
	<style>
  <?php include "contact.css" ?>
 </style>
 <div class="head">
   <h1>
     Contact Us
   </h1>
 </div>

	<form action="contactus.php" method="post">
		 <div class="form">
	  <div class="input-group">
	    <label for="name">Your Name</label>
	    <input type="text" id="name" name="visitor_name"  pattern=[A-Z\sa-z]{3,20} required>
	  </div>
	  <div class="input-group">
	    <label for="email">Your E-mail</label>
	    <input type="email" id="email" name="visitor_email"  required>
	  </div>
	  <div class="input-group">
	    <label for="title">Reason For Contacting Us</label>
	    <input type="text" id="title" name="email_title" required  pattern=[A-Za-z0-9\s]{1,40}>
	  </div>
	  <div class="input-group">
	    <label for="message">Write your message</label>
	    <textarea id="message" name="visitor_message"  required></textarea>
	  </div>
	  <button type="submit">Send Message</button>
		</div>
	</form>

	<?php include('templates/footer.php'); ?>

</html>
