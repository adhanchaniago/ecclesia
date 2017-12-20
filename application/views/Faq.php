      <div claas="main-content">
                <div class="container">
                      <section class="g-map">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="google-map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.964231763225!2d98.61506261533721!3d3.5956733973834494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312e58c9c3b93d%3A0x9f6b50cc4962f1f1!2sGereja+Katolik+Maria+Ratu+Pencinta+Damai!5e0!3m2!1sid!2sid!4v1513780271391" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </section> 
                   <section class="contact-address bg-white">
                        <div class="row">

                            <div class="col-md-4 col-xs-12">
                                <div class="address-info">
                                    <div class="row">

                                        <div class="col-md-3 col-xs-3">
                                            <div class="address-info-icon text-center center-block bg-light-gray">
                                                <i class="fa fa-map-marker"></i>
                                            </div> <!-- /.address-info-icon -->
                                        </div>

                                        <div class="col-md-9 col-xs-9 address-info-desc">
                                            <h3>Office Address</h3>
                                            <p>
                                                Jln. Pantai Delapan Ratus Gg. Gereja No. 1  <br/>
                                                Medan ,Indonesia
                                            </p>
                                        </div> <!-- /.address-info-desc -->

                                    </div>
                                </div> <!-- /.address-info -->
                            </div>

                            <div class="col-md-4 col-xs-12">
                                <div class="address-info">
                                    <div class="row">

                                        <div class="col-md-3 col-xs-3">
                                            <div class="address-info-icon text-center center-block bg-light-gray">
                                                <i class="fa fa-phone"></i>
                                            </div> <!-- /.address-info-icon -->
                                        </div>

                                        <div class="col-md-9 col-xs-9 address-info-desc">
                                            <h3>Phone Number</h3>
                                            <p>
                                                Local: 0821 6376 8880  
                                                <br/>
                                                Mobile: 0813 9680 0380
                                            </p>
                                        </div> <!-- /.address-info-desc -->

                                    </div>
                                </div> <!-- /.address-info -->
                            </div>

                            <div class="col-md-4 col-xs-12">
                                <div class="address-info">
                                    <div class="row">

                                        <div class="col-md-3 col-xs-3">
                                            <div class="address-info-icon text-center center-block bg-light-gray">
                                                <i class="fa fa-envelope-o"></i>
                                            </div> <!-- /.address-info-icon -->
                                        </div>

                                        <div class="col-md-9 col-xs-9 address-info-desc">
                                            <h3>Email Address</h3>
                                            <p><font size="2" color="black"><strong><u><i>yayasanpondokinsaniindonesia@</br>gmail.com</i></u></strong></font>
                                            </p>
                                        </div> <!-- /.address-info-desc -->

                                    </div>
                                </div> <!-- /.address-info -->
                            </div>

                        </div>
                    </section> <!-- /.contact-address -->



                    <!-- contact-form -->
                    <section class="contact-form">

                        <!-- call for contact -->
                        <div class="headline text-center">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3">
                                    <h2 class="section-title">Kontak Kami</h2>
                                    <p class="section-sub-title">
                                       Jika ada yang ingin disampaikan ,hubungi kami disini
                                        <br/>kami akan segera menghubungi anda.
                                    </p> <!-- /section-sub-title -->
                                </div>
                            </div>
                        </div> <!-- /.contact-speech -->  <div class="row">
            <div class="col-sm-8">
                <h4>Contact Form</h4>
                <?php echo $this->session->flashdata('message'); ?> 
                <div class="status alert alert-success" style="display: none"></div>
                <form  action="<?php echo site_url("faq/commit");  ?>" method="post" entype="multipart/form-data" role="form">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Name"></br>
                                        <?php echo form_error('name'); ?>
                                    </div>
                            <div class="form-group">
                                 <input type="text" name="email" class="form-control" placeholder="Email"></br>
                                              <?php echo form_error('email'); ?></div>
                                              <div class="form-group">
                                 <input type="text" name="hp" class="form-control" placeholder="Nomor Handphone"></br>
                                              <?php echo form_error('hp'); ?></div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg">Send Message</button>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <textarea rows="8" name="message" class="form-control" placeholder="Message"></textarea>
                                            </br>
                       <?php echo form_error('message'); ?> </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-4">
              
               <h4>List Komentar</h4>
                        <address>
                            <div class="info">
                               <?php foreach($replay_faq as $replay_faq)
                                          {
                                         ?>
                                        <?php if($replay_faq["message_replay"] != null && $replay_faq["status"] !=0 ){  ?>
                                          <div class="media">
                                                <div class="pull-left">
                                                </div>
                                                <div class="media-body">
                                                    <div class="well">
                                                        <div class="media-heading">
                                                            <strong><?php echo $replay_faq["name"]; ?></strong>&nbsp; <small>
                                                            <?php echo $replay_faq["date_sent"]; ?></small>
                                                            
                                                        </div>
                                                        <p><?php echo $replay_faq["message"]; ?></p>
                                                    </div>
                                                </div>
                                            </div><div class="media">
                                                <div class="pull-left">
                                                </div>
                                                <div class="media-body">
                                                    <div class="well">
                                                        <div class="media-heading">
                                                            <strong><i class="icon-user"></i> <?php echo $replay_faq["author"]; ?>  <a><i class="icon-repeat"></i> </a></strong>&nbsp; <small>
                                                            <?php echo $replay_faq["date_replay"]; ?></small>
                                                        </div>
                                                        <p><?php echo $replay_faq["message_replay"]; ?></p>
                                                    </div>
                                                </div>
                                            </div>

                                         <?php }else{ 


                                         echo '<div class="well"> '.$replay_faq["name"].'  '.$replay_faq["date_sent"].'</br>Komentar : '.$replay_faq["message"].'</div>';
                                           } ?>
                                         <?php } ?>
                                            <!--/.media-->
                                      </div>
                            </div>
                        </address>
              </div></div><!--/.col-sm-4-->
               <div id="comments">
            
                            </section><!--/#contact-page-->