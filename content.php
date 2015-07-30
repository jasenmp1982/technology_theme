<section class="content-section">
    
    <div class="container">
        
        <div class="row">
           
            <div class="col-lg-12">

                <article id="post-<?php the_ID(); ?> " <?php post_class(); ?> >
                
                    <?php

                        if ( get_option('twitter_url') ) {

                            echo 'hello world';

                        }

                    ?>

                    <?php the_content(); ?>

                </article>

            </div>
            <!-- /Col 12 -->

        </div>
        <!-- /Row -->
        
    </div>
    <!-- /Container --> 

</section>
<!-- /Content Section -->
