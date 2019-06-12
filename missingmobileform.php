<?php include('header.php');?> 
 <!-- RD Google Map-->
     <!--  <section class="section section-fluid">
       <div class="col-md-12">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.373389502573!2d72.82998921426682!3d19.13512615508524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b623a1a896df%3A0xd87c76a6ff9e4914!2sRudralife!5e0!3m2!1sen!2sus!4v1475329620030" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>      
      </div>
      </section> -->

      <!-- Contact information-->
    

      <!-- Contact Form-->
      <section class="section section-sm section-last bg-default text-left">
        <div class="container">
       
          <form method="post" enctype="multipart/form-data" action="missingmobile-insert.php">
            <div class="row row-14 gutters-14">
              <div class="col-md-4">
                <div class="form-wrap">
                  <input class="form-input" id="contact-your-name-2" type="text" name="name" data-constraints="@Required">
                  <label class="form-label" for="contact-your-name-2">Your Full Name</label>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-wrap">
                  <input class="form-input" id="contact-your-name-2" type="text" name="dob" data-constraints="@Required">
                  <label class="form-label" for="contact-your-name-2"> DOB</label>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-wrap">
                  <input class="form-input" id="contact-your-name-2" type="text" name="gender" data-constraints="@Required">
                  <label class="form-label" for="contact-your-name-2">Gender</label>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-wrap">
                  <input class="form-input" id="contact-your-name-2" type="text" name="mobno" data-constraints="@Required">
                  <label class="form-label" for="contact-your-name-2">Alternate Mob No</label>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-wrap">
                  <input class="form-input" id="contact-your-name-2" type="text" name="address" data-constraints="@Required">
                  <label class="form-label" for="contact-your-name-2">Address</label>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-wrap">
                  <input class="form-input" id="contact-your-name-2" type="text" name="city" data-constraints="@Required">
                  <label class="form-label" for="contact-your-name-2">city</label>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-wrap">
                  <input class="form-input" id="contact-your-name-2" type="text" name="pincode" data-constraints="@Required">
                  <label class="form-label" for="contact-your-name-2">pincode</label>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-wrap">
                  <input class="form-input" id="contact-your-name-2" type="text" name="poo" data-constraints="@Required">
                  <label class="form-label" for="contact-your-name-2">Place Of Occurrence</label>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-wrap">
                  <input class="form-input" id="contact-your-name-2" type="text" name="state" data-constraints="@Required">
                  <label class="form-label" for="contact-your-name-2">State</label>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-wrap">
                  <input class="form-input" id="contact-your-name-2" type="text" name="company" data-constraints="@Required">
                  <label class="form-label" for="contact-your-name-2">Company</label>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-wrap">
                  <input class="form-input" id="contact-your-name-2" type="text" name="modelno" data-constraints="@Required">
                  <label class="form-label" for="contact-your-name-2">Model no</label>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-wrap">
                  <input class="form-input" id="contact-your-name-2" type="text" name="imeino" data-constraints="@Required">
                  <label class="form-label" for="contact-your-name-2">IMEI no</label>
                </div>
              </div>
              
              <!-- <div class="col-md-4">
                <div class="form-wrap">
                  <input class="form-input" id="contact-phone-2" type="text" name="phone" data-constraints="@Numeric">
                  <label class="form-label" for="contact-phone-2">Phone</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-wrap">
                  <label class="form-label" for="contact-message-2">Message</label>
                  <textarea class="form-input textarea-lg" id="contact-message-2" name="message" data-constraints="@Required"></textarea>
                </div>
              </div>
               <div class="col-md-4">
                <div class="form-wrap">
                  <input class="form-input" id="contact-your-name-2" type="text" name="name" data-constraints="@Required">
                  <label class="form-label" for="contact-your-name-2">District</label>
                </div>
              </div>
 -->


<!-- <div class="col-12">
                <div class="form-wrap">
<lable align="right">Image:</lable>  <br>                          
                            <input type="file" name="image" id="profile-img" required/><br>
                                    <img src="" id="profile-img-tag" width="100px" />

                                    <script type="text/javascript">
                                        function readURL(input) {
                                            if (input.files && input.files[0]) {
                                                var reader = new FileReader();
                                                
                                                reader.onload = function (e) {
                                                    $('#profile-img-tag').attr('src', e.target.result);
                                                }
                                                reader.readAsDataURL(input.files[0]);
                                            }
                                        }
                                        $("#profile-img").change(function(){
                                            readURL(this);
                                        });
                                    </script><br>
</div>
</div>


 -->


            </div>
            <button class="button button-primary button-pipaluk" name="register" type="submit">Submit</button>
          </form>
        </div>
      </section>
<?php include('footer.php');?>      