     <section class="intro bg-light-gray">
                    <div class="container">
                        <div class="row">
                            <?php foreach($catalog_detail as $catalog_detail){ ?>
                            <div class="col-md-5">
                                <img src="<?php echo base_url(); ?>assets/foto/<?php echo $catalog_detail["foto"];?>" weight="300" height="500" class="img-responsive center-block" alt="HOMBINGFISH">
                            </div>

                            <div class="col-md-7">
                                <div class="intro-description">
                                    <h2>Judul : <?php echo $catalog_detail["title"]; ?></h2>
                                    <p>
                                        Keterangan : <?php echo $catalog_detail["description"]; ?>.
                                    </p>

                                    
                                     <!-- /purchase button -->
                                </div> <!-- end of /.intro-description -->
                            </div>
                            <?php }?>
                        </div>
                    </div>
                     <!-- end of /.container -->
                </section> 
                <!--  end of intro section -->


                <!--  begin feature section  -->
