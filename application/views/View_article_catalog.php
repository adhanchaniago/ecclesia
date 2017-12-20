 <section class="blog-content">
                <div class="container">
                    <div class="row">
                        <main class="col-md-9" style="display: block;">
                          <?php
                                if(empty($article_catalog))
                                    {
                                     echo " <div class='alert alert-danger'>
                                        <button type='button' class='close' data-dismiss='alert'>&times;</button>
                                     <i class='fa fa-ban-circle'></i><strong><p align='center'>KONTENT BELUM TERSEDIA.</p></strong> 
                               </div>";
                            }else{ ?><?php
                                foreach($article_catalog as $article_catalog){
                                 ?>
                            <article class="blog-item">
                                <img weight="300" width="100%" src="<?php echo base_url(); ?>assets/foto/<?php echo $article_catalog["foto"]; ?>">
                                <div class="blog-heading">
                                    <h3 class="text-capitalize">Judul : <?php echo $article_catalog["title"]; ?></h3>

                                </div>  
                                <p>
                                  Keterangan : <?php echo word_limiter($article_catalog["description"],30); ?>
                                </p>

                              
                               <a href="<?php echo base_url(); ?>catalog/detail/<?php echo strtolower(str_replace(' ','-',preg_replace("/[^a-zA-Z0-9\s]/", "", $article_catalog['id_catalog']).'-'.$article_catalog['title'])); ?>" class="text-capitalize ">
                                    read more
                                    <span><i class="fa fa-angle-double-right"></i> </span>
                                </a>                         
                            </article>
                              <?php }} ?> 
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