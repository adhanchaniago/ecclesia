 <section class="blog-content">
                <div class="container">
                    <div class="row">
                        <main class="col-md-9" style="display: block;">
                          <?php
                                foreach($article_detail as $article_detail){
                                 ?>
                            <article class="blog-item">
                                <img weight="300" width="100%" src="<?php echo base_url(); ?>assets/foto/<?php echo $article_detail["foto"]; ?>">
                                <div class="blog-heading">
                                    <h3 class="text-capitalize"><?php echo $article_detail["title"]; ?></h3>
                                    <span class="date"><?php echo $article_detail["date_post"]; ?></span>
                                    <span><?php echo $article_detail["author"]; ?></span>
                                </div>  
                                <p>
                                   <?php echo $article_detail["description"]; ?>
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