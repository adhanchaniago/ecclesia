 <section class="blog-content">
                <div class="container">
                    <div class="row">
                        <main class="col-md-9" style="display: block;">
                          <?php
                                foreach($profil as $profil){
                                 ?>
                            <article class="blog-item">
                                <img weight="300" width="100%" src="<?php echo base_url(); ?>assets/foto/<?php echo $profil["foto"]; ?>">
                                <div class="blog-heading">
                                    <h3 class="text-capitalize"><?php echo $profil["title"]; ?></h3>
                                </div>  
                                <p>
                                   <?php echo $profil["description"]; ?>
                                </p>

                              
                               
                            </article>
                             
                               
                             <?php } ?> 
                        </main>

                        <aside class="col-md-3">

                         <div class="archive-widget">
                                <h4>Article</h4>
                                <ul class="archives">
                                    <?php
                                foreach($article as $link){
                                 ?><li><a href="<?php echo base_url(); ?>article/detail/<?php echo $link['id_article']; ?>" title="<?php echo $link["title"];?>"><?php echo $link["title"];?></a></li>
                                  <?php } ?>
                                   
                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>
            </section>