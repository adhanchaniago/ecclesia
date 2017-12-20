                              <?php
                                foreach($page as $page){
                                 ?>
                                 <?php if($page["description"] == null){ 
                                    echo '<section id="blog" class="container">
                              <div class="row">
                              </br>
                                  <div class="alert alert-danger">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                            <i class="fa fa-ban-circle"></i><strong><p align="center"><strong>UNDER CONSTRUCTION</strong></p></strong> 
                                     </div>
                              </div>
                          </section>';
                            ?>
                        <?php 
                             }
                             else{
                              ?>
               <section id="blog" class="container">
                 <div class="row">
                     <aside class="col-sm-4 col-sm-push-8">
                      <div class="widget categories">
                    <h3>Article</h3>
                    <ul class="arrow">
                    <?php foreach($all_article as $all_article){  ?>
                        <li> <a href="<?php echo base_url(); ?>article/detail/<?php echo $all_article['id_article']; ?>">      
                                  <?php echo $all_article["title"]; ?></a></li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="widget categories">
                    <h3>Popular Post</h3>
                    <ul class="arrow">
                     <?php foreach($latest_article as $all_article){  ?>
                        <li> <a href="<?php echo base_url(); ?>article/detail/<?php echo $all_article['id_article']; ?>">      
                                  <?php echo $all_article["title"]; ?></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </aside>        
            <div class="col-sm-8 col-sm-pull-4">
                <div class="blog">
                    <div class="blog-item">
                        <?php if($page["foto"] != null)
                                {
                                   ?>
                        <img src="<?php echo base_url(); ?>assets/foto/<?php echo $page["foto"]; ?>" height="400" width="100%" alt="" />
                       <?php } 
                                        else
                                            { 
                                                ?>
                                                <?php
                                            } 
                                        ?>
                        <div class="blog-content">
                           <h3><?php echo $page["title"]; ?></h3>
                            <div class="entry-meta">
                                <span><i class="icon-user"></i> <a href="#">Admin</a></span>
                                <span><i class="icon-repeat"></i> <a href="#"><?php echo $page["counter"]; ?></a></span>
                                <span><i class="icon-calendar"></i> <?php echo $page["date_post"]; ?></span>
                             </div>
                            <p><?php echo $page["description"]; ?></p>
                        </div>
                    </div>
                    <?php } ?>
              <?php } ?>
                </div>
            </div>
        </div>
    </section>