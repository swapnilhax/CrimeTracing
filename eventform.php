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
          
         <form method="post" enctype="multipart/form-data" action="event-insert.php">
            <div class="row row-14 gutters-14">
              <div class="col-md-4">
                <div class="form-wrap">
                  <input class="form-input" id="contact-your-name-2" type="text" name="e_name" data-constraints="@Required">
                  <label class="form-label" for="contact-your-name-2">event Name</label>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-wrap">
                  <input class="form-input" id="contact-your-name-2" type="text" name="e_organiser" data-constraints="@Required">
                  <label class="form-label" for="contact-your-name-2">oraganiser Name</label>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-wrap">
                  <input class="form-input" id="contact-your-name-2" type="text" name="e_location" data-constraints="@Required">
                  <label class="form-label" for="contact-your-name-2">Location</label>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-wrap">
                  <input class="form-input" id="contact-your-name-2" type="text" name="e_date" data-constraints="@Required">
                  <label class="form-label" for="contact-your-name-2">date</label>
                </div>
              </div>
<div class="col-md-4">
                <div class="form-wrap">
                  <input class="form-input" id="contact-your-name-2" type="text" name="e_time" data-constraints="@Required">
                  <label class="form-label" for="contact-your-name-2">Time</label>
                </div>
              </div>
              <!-- <div class="col-md-4">
                <div class="form-wrap">
                  <input class="form-input" id="contact-email-2" type="email" name="email" data-constraints="@Email @Required">
                  <label class="form-label" for="contact-email-2">E-mail</label>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-wrap">
                  <input class="form-input" id="contact-phone-2" type="text" name="phone" data-constraints="@Numeric">
                  <label class="form-label" for="contact-phone-2">Phone</label>
                </div>
              </div> -->
              <div class="col-12">
                <div class="form-wrap">
                  <label class="form-label" for="contact-message-2">Discription</label>
                  <textarea class="form-input textarea-lg" id="contact-message-2" name="e_discription" data-constraints="@Required"></textarea>
                </div>
              </div>
               <div class="col-md-4">
                <div class="form-wrap">
                  <input class="form-input" id="contact-your-name-2" type="text" name="e_district" data-constraints="@Required">
                  <label class="form-label" for="contact-your-name-2">District</label>
                </div>
              </div>



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
</div> -->





            </div>
            <button class="button button-primary button-pipaluk" name="register" type="submit">Submit</button>
          </form>
        </div>
      </section>
<?php include('footer.php');?>      