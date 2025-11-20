 <?php include 'header.php';?>
 <style>
.contact-list li {
    display: flex;
    align-items: flex-start;
    margin-bottom: 20px;
}

.contact-list i {
    color: #00918b;
    font-size: 20px;
    border-radius: 50%;
    border: 3px solid #00918b;
    height: 50px;
    width: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 15px;
}

.contact-list p {
    margin: 0;
    line-height: 1.6;
}
 </style>
 <?php include 'navbar.php';?>

 <!-- Title Page -->
 <section class="tf-page-title">
     <div class="container">
         <div class="box-title text-center">
             <h4 class="title">Contact Us</h4>
             <div class="breadcrumb-list">
                 <a class="breadcrumb-item" href="index.html">Home</a>
                 <div class="breadcrumb-item dot"><span></span></div>
                 <div class="breadcrumb-item current">Contact Us</div>
             </div>
         </div>
     </div>
 </section>
 <!-- /Title Page -->

 <!-- Contact -->
 <section class="s-contact flat-spacing-13">
     <div class="container">

         <div class="row my_80">
             <div class="col-lg-6">
                 <div class="content-left">
                     <div class="title fw-medium display-md-2">
                         Contact Us
                     </div>
                     <!-- <p class="sub-title text-main">
                         Have a question? Please contact us using the customer support <br> channels below.
                     </p> -->
                     <ul class="contact-list">
                         <li>
                             <i class="fa-solid fa-building"></i>
                             <div class="content">
                                 <p>
                                     <strong>Head Office Address:</strong><br>
                                     <a class="link" href="#" target="_blank">
                                         Shivam Industries S-11, Arihant Vrindavan Soc, Kasturi Park, <br> Navghar Road,
                                         Bhayander East – Mumbai-Maharashtra Pin-401105.
                                     </a>
                                 </p>
                             </div>
                         </li>

                         <li>
                             <i class="fa-solid fa-location-dot"></i>
                             <div class="content">
                                 <p>
                                     <strong>Branch Office Address:</strong><br>
                                     <a class="link" href="#" target="_blank">
                                         Shivam Industries No A-8, Sector 22, GIDA, Sahjanwa, <br> Gorakhpur, U.P. –
                                         273209
                                     </a>
                                 </p>
                             </div>
                         </li>

                         <li>
                             <i class="fa-solid fa-phone"></i>
                             <div class="content">
                                 <p>
                                     <strong>Contact number:</strong><br>
                                     <a class="link" href="tel:+919820823043">+91 9820 82 3043</a>
                                 </p>
                             </div>
                         </li>

                         <li>
                             <i class="fa-solid fa-phone"></i>
                             <div class="content">
                                 <p>
                                     <strong>Contact number:</strong><br>
                                     <a class="link" href="tel:+919987651501">+91 9987 65 1501</a>
                                 </p>
                             </div>
                         </li>

                         <li>
                             <i class="fa-solid fa-envelope"></i>
                             <div class="content">
                                 <p>
                                     <strong>Email:</strong><br>
                                     <a class="link" href="mailto:sales@shivaminds.com">sales@shivaminds.com</a>
                                 </p>
                             </div>
                         </li>

                         <li>
                             <i class="fa-solid fa-envelope"></i>
                             <div class="content">
                                 <p>
                                     <strong>Email:</strong><br>
                                     <a class="link" href="mailto:chandan@shivaminds.com">chandan@shivaminds.com</a>
                                 </p>
                             </div>
                         </li>
                     </ul>


                     <ul class="tf-social-icon style-large ">
                         <li>
                             <a href="https://www.facebook.com/" class="social-item social-facebook">
                                 <i class="icon icon-fb"></i>
                             </a>
                         </li>
                         <li>
                             <a href="https://www.instagram.com/" class="social-item social-instagram">
                                 <i class="icon icon-instagram"></i>
                             </a>
                         </li>
                         <li>
                             <a href="https://x.com/" class="social-item social-x">
                                 <i class="icon icon-x"></i>
                             </a>
                         </li>
                         <li>
                             <a href="https://www.linkedin.com/" class="social-item social-linkedin"><i
                                     class="fab fa-linkedin-in"></i></a>
                         </li>
                     </ul>
                 </div>
             </div>
             <div class="col-lg-6">
                 <div class="content-right">
                     <div class="title fw-medium display-md-2">
                         Get In Touch
                     </div>
                     <p class="sub-title text-main">
                         Please submit all general enquiries in the contact form below and we look forward to
                         hearing from you soon.
                     </p>
                     <div class="form-contact-wrap">
                         <form method="post" class="form-default" id="contactform"
                             action="https://themesflat.co/html/vineta/contact/contact-process.php">
                             <div class="wrap">
                                 <div class="cols">
                                     <fieldset>
                                         <label for="name">Your name*</label>
                                         <input name="name" id="name" class="radius-8" type="text" required>
                                     </fieldset>
                                     <fieldset>
                                         <label for="email">Your email*</label>
                                         <input name="email" id="email" class="radius-8" type="email" required>
                                     </fieldset>
                                 </div>
                                 <div class="cols">
                                     <fieldset>
                                         <label for="contact">Contact Number*</label>
                                         <input name="contact" id="contact" class="radius-8" type="text" required>
                                     </fieldset>
                                     <fieldset>
                                         <label for="address">Address*</label>
                                         <input name="address" id="address" class="radius-8" type="text" required>
                                     </fieldset>
                                 </div>

                                 <div class="cols">
                                     <fieldset class="textarea">
                                         <label for="message">Message*</label>
                                         <textarea name="message" id="message" required class="radius-8"></textarea>
                                     </fieldset>
                                 </div>
                                 <div class="button-submit send-wrap">
                                     <button class="tf-btn animate-btn" type="submit">
                                         Send
                                     </button>
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
         <div class="wg-map"><iframe
                 src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3765.3804281056555!2d72.85646901103793!3d19.309291544531522!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7cf21727f6e19%3A0x2464d428a395956a!2sShivam%20Industries!5e0!3m2!1sen!2sin!4v1763098179796!5m2!1sen!2sin"
                 class="map" style="border:none;" allowfullscreen="" loading="lazy"
                 referrerpolicy="no-referrer-when-downgrade"></iframe>
         </div>
     </div>
 </section>
 <!-- /Contact -->
 <?php include 'footer.php';?>