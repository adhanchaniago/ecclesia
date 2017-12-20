 <section class="blog-content">
                <div class="container">
                    <div class="row">
                        <main class="col-md-9" style="display: block;">
                          <?php
                                foreach($article_category as $article_category){
                                 ?>
                            <article class="blog-item">
                                <img weight="300" width="100%" src="<?php echo base_url(); ?>assets/foto/<?php echo $article_category["foto"]; ?>">
                                <div class="blog-heading">
                                    <h3 class="text-capitalize"><?php echo $article_category["title"]; ?></h3>
                                    <span class="date"><?php echo $article_category["date_post"]; ?></span>
                                    <span><?php echo $article_category["author"]; ?></span>
                                </div>  
                                <p>
                                   <?php echo word_limiter($article_category["description"],30); ?>
                                </p>

                              
                               <a href="<?php echo base_url(); ?>article/detail/<?php echo $article_category['id_article']; ?>" class="text-capitalize ">
                                    read more
                                    <span><i class="fa fa-angle-double-right"></i> </span>
                                </a>                         
                            </article>
                              <?php } ?> 
                               <div class="row">
                                <div class= "col-md-6 col-md-offset-3 text-center">
                                    <ul class="pagination">
                                       <li><?php echo $pagination; ?></li>
                                    </ul> <!-- /.pagination -->
                                </div>
                            </div>
                            
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