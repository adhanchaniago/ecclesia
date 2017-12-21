
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
                                <img class="img-responsive center-block" src="<?php echo base_url(); ?>assets/foto/<?php echo $article_catalog["foto"]; ?>" alt="blog-item1">
                                <div class="blog-heading">
                                    <h3 class="text-capitalize">Judul : <?php echo $article_catalog["title"]; ?></h3>
                                  <!--   <span class="date">may 24,2015</span>
                                    <span>12 comments</span> -->
                                </div>
                                <p>
                                     Keterangan : <?php echo word_limiter($article_catalog["description"],30); ?>
                                </p>

                                <a href="<?php echo base_url(); ?>tentang/detail/<?php echo strtolower(str_replace(' ','-',preg_replace("/[^a-zA-Z0-9\s]/", "", $article_catalog['id_catalog']).'-'.$article_catalog['title'])); ?>" class="text-capitalize ">
                                    read more
                                    <span><i class="fa fa-angle-double-right"></i> </span>
                                </a>          
                            </article> <!-- /.blog-item -->
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
                            <!-- begin tab-widget -->
                            <div class="tab-widget">
                                <h4>Tab Widget</h4>
                                <div  class="nav-tabs-default">
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#popular" data-toggle="tab">
                                                <div class="tab-widget-title">All Post</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#recent" data-toggle="tab">
                                                <div class="tab-widget-title">Recent Post</div>
                                            </a>
                                        </li>
                                    </ul> <!-- end of nav-tabs -->
                                    <style>
                                    #popular {
                                        width: 200px;
                                        height: 300px;
                                        overflow: scroll;
                                    }
                                    </style>     
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="popular">
                                                  <?php
                                        foreach($article as $article){
                                         ?>
                                   
                                            <div class="popular-post">
                                                <img src="<?php echo base_url(); ?>assets/foto/<?php echo $article["foto"];?>" class="img-responsive center-block" alt="<?php echo $article["title"];?>">
                                                <h5 class="post-widget-heading"><a href="<?php echo base_url(); ?>article/detail/<?php echo strtolower(str_replace(' ','-',preg_replace("/[^a-zA-Z0-9\s]/", "", $article['id_article']).'-'.$article['title'])); ?>"><?php echo $article["title"];?> <span><i class="fa fa-angle-double-right"></i> </span></a></h5>
                                            </div>
                                              <?php } ?>
                                        </div>    


                                        <div class="tab-pane" id="recent">
                                           <?php
                                        foreach($article_recent as $recent){
                                         ?>
                                            <div class="recent-post">
                                                <img src="<?php echo base_url(); ?>assets/foto/<?php echo $recent["foto"];?>" class="img-responsive center-block" alt="<?php echo $recent["title"];?>">
                                                <h5 class="post-widget-heading"><a href="<?php echo base_url(); ?>article/detail/<?php echo strtolower(str_replace(' ','-',preg_replace("/[^a-zA-Z0-9\s]/", "", $recent['id_article']).'-'.$recent['title'])); ?>"><?php echo $recent["title"];?></a></h5>
                                                <p>
                                                    <?php echo word_limiter($recent["description"],5);?>
                                                     <a href="<?php echo base_url(); ?>article/detail/<?php echo strtolower(str_replace(' ','-',preg_replace("/[^a-zA-Z0-9\s]/", "", $recent['id_article']).'-'.$recent['title'])); ?>" class="text-capitalize ">
                                                        read more
                                                        <span><i class="fa fa-angle-double-right"></i> </span>
                                                    </a>   
                                                </p>
                                            </div>
                                           <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- /.tab-widget -->

                            <!-- begin tag-widget -->
                            <div class="tag-widget">
                                <h4>All Article</h4>
                                <?php
                                        foreach($article_recent as $recents){
                                         ?>
                                         <div class="tags">
                                   <a href="<?php echo base_url(); ?>article/detail/<?php echo strtolower(str_replace(' ','-',preg_replace("/[^a-zA-Z0-9\s]/", "", $recents['id_article']).'-'.$recents['title'])); ?>"><?php echo $recents["title"]; ?></a>
                                </div>
                                <?php } ?>
                            </div> <!-- /.tag-widget -->


                            <!-- begin archieve-widget  -->
                            <div class="archive-widget">
                                <h4>Archives</h4>
                                <ul class="archives">
                                   <?php
                                        foreach($article_by_month as $archive){
                                         ?>
                                    <li>
                                        <a href="<?php echo base_url(); ?>article/archive/<?php echo $archive["bulannya"]."/".$archive["tahunnya"]; ?>">
                    <i class="fa fa-angle-double-right pr-10">
                    </i>
                   <?php 
                    $bulan = $archive["bulannya"]."-".$archive["tahunnya"]; 
                   echo $bulan; ?>
                  </a>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div> <!-- /.archieve-widget -->
                        </aside>
                        <!-- end sidebar -->

                    </div>
                </div>
            </section>