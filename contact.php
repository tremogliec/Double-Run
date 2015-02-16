<?php include('includes/header.php'); ?>
<div class="contact-gallery sub-banner-img banner-img">
</div>
            <div class="contact-gallery mobile-banner margin-top">
            </div>
<div class="content relative">
    <h1 class="page-title contact">Contact Us</h1>
    <div class="group page-container container">

    <div id="googlemaps" class="contact-container grid-half">
    </div>
        <div class="contact-wrapper grid-half page-content">
            <form action="contact-proc.php" method="post" class="contact-form" name="contact-form">
              <div><label>Name:</label><span class="fa fa-user"></span><input name="Name" type="text" placeholder="John Doe" required></div>
              <div><label>Email:</label><span class="fa fa-envelope"></span><input name="Email" type="email" placeholder="example@gmail.com" required></div>
              <div><label>Phone:</label><span class="fa fa-phone"></span><input name="Phone" type="text" placeholder="xxx-xxx-xxxx"></div>
              <div><label>Fax:</label><span class="fa fa-fax"></span><input name="Fax" type="text" placeholder="xxx-xxx-xxxx"></div>
              <div><label>Address:</label><span class="fa fa-home"></span><input name="Address" type="text" placeholder="123 State Street, Ephrata, PA 17522"></div>
              <div><label>Company:</label><span class="fa fa-building"></span><input name="Email" type="text" placeholder="Double Run Brokerage"></div>
              <div class="text-area"><label>Message:</label><textarea name="Message" placeholder="We look forward to hear from you!" ></textarea></div>
              <div class="captcha"><label>Security:</label><span class="fa fa-lock"></span><input type="text" name="captcha" placeholder="xxxx" /><img class="captcha-img" src="img/captcha.png" alt="Captcha" /></div> 
              <input class="submit" type="submit" name="Submit" value="Submit">
            </form>
        </div>
    </div>
</div>


<?php include('includes/footer.php'); ?>