  <?php

          // Query to get brands
        $args = array(
            'post_type' => 'jobs',
            'posts_per_page' => 5,
        );
        $q = new WP_Query($args);

        ?>
  <!-- job section -->

  <section class="job_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <h2>
          Recommended jobs <br>
          <span>
            15000+ Job Available For you
          </span>
        </h2>
      </div>
      <div class="handler_btn-box" id="myTab" role="tablist">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active " id="jb-1-tab" data-toggle="tab" href="#jb-1" role="tab" aria-controls="jb-1" aria-selected="true"> Full Time</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " id="jb-2-tab" data-toggle="tab" href="#jb-2" role="tab" aria-controls="jb-2" aria-selected="false">Part time</a>
          </li>
        </ul>

      </div>
      <div class="tab-content" id="myTabContent">
        <div class="job_board tab-pane fade show active" id="jb-1" role="tabpanel" aria-labelledby="jb-1-tab">
          <div class="content-box">
            <div class="content layout_padding2-top">
              <?php if($q->have_posts()){ ?>
                <?php while($q->have_posts()){ $q->the_post(); ?>
                  <div class="box">
                    <h3>
                      <?php the_title(); ?>
                    </h3>
                    <a href="<?php echo esc_url(get_permalink( get_the_ID() ));?>">
                      Apply Now
                    </a>
                  </div>
                  <?php } ?>
                <?php }?>
            </div>
            <div class="btn-box">
              <a href="">
                See More
              </a>
            </div>
          </div>
        </div>
        <?php         
        // Reset post data
        wp_reset_postdata(); ?>
      </div>
    </div>
  </section>

  <!-- end job section -->