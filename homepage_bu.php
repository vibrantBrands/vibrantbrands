<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php $this->inc('elements/header.php'); ?>

<section class="hero-video">
        <div class="textbox">
            <h1>Let's Spark Something Incredible</h1>
            <h2>Connect your brand with your audience</h2>
        </div>
        <div class="video-container">
            <div style="padding:75% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/542268588?badge=0autopause=0&amp;autoplay=1&amp;muted=1&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="VB_Header.mp4"></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
            <!-- <video muted autoplay>
                <source src="<?php echo $this->getThemePath(); ?>/video/VB_Header.mp4" type="video/mp4"> Your browser does not support the video tag.
            </video>  -->
        </div>
</section>


<div class="container">
    <section class="services">
        <?php
            $a = new Area('Header Text');
            $a->display($c);
        ?>  
        <div class="icons">
            <div>
                <a href="/services/brand-development">
                    <img src="<?php echo $this->getThemePath(); ?>/images/icons/BD.png" alt="Brand Development" />
                    <p>Brand Development</p>
                </a>
            </div>
            <div>
                <a href="/services/digital-advertising">
                    <img src="<?php echo $this->getThemePath(); ?>/images/icons/DA.png" alt="Digital Advertising" />
                    <p>Digital Advertising</p>
                </a>
            </div>
            <div>
                <a href="/services/website-development">
                    <img src="<?php echo $this->getThemePath(); ?>/images/icons/WD.png" alt="Website Development" />
                    <p>Website Development</p>
                </a>
            </div>
            <div>
                <a href="/video">
                    <img src="<?php echo $this->getThemePath(); ?>/images/icons/VP.png" alt="Video Production" />
                    <p>Video Production</p>
                </a>
            </div>
            <div>
                    <img src="<?php echo $this->getThemePath(); ?>/images/icons/SM.png" alt="Social Media" />
                    <p>Social Media</p>
            </div>
            <div>
                    <img src="<?php echo $this->getThemePath(); ?>/images/icons/CW.png" alt="Content Writing" />
                    <p>Content Writing</p>
            </div>
        </div>
    </section>
</div>

    <section class="company-description">
        <div class="container">
            <?php
                $a = new Area('Company Description Text');
                $a->display($c);
            ?>  
        </div>       
    </section>

<div class="container">
    <?php
        $a = new Area('Case Studies Text');
        $a->display($c);
    ?>  

    <section class="clients">
        <div>
            <a href="/featured-work/sunmark">
                <img src="<?php echo $this->getThemePath(); ?>/images/case-studies/thumbnails/sunmark_thumbnail.png" alt="Sunmark Case Study">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>Sunmark</h3>
                    <p>"With Vibrant, we’re separating ourselves from the pack and growing."</p>
                    <p class="cta-prompt">View the story<i class="fas fa-arrow-right"></i></p>
                </div>
            </a>
        </div>
        <div>
            <a href="/featured-work/cfds">
                <img src="<?php echo $this->getThemePath(); ?>/images/case-studies/thumbnails/cfds-hmpg-img-grid3.png" alt="CDFS Case Study">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>Center for Disability Services</h3>
                    <p>"Vibrant helped us broadcast our message in a modern way, leading to amazing new opportunities for the future."</p>
                    <p class="cta-prompt">View the story<i class="fas fa-arrow-right"></i></p>
                </div>
            </a>
        </div>
         <div>
            <a href="/featured-work/albany-airport">
                <img src="<?php echo $this->getThemePath(); ?>/images/case-studies/albany-airport.png" alt="Albany Airport">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>Albany Airport</h3>
                    <p>The Vibrant team helped the airport take off, with a new look and messaging that aligns with convenience, safety, and innovation.</p>
                    <p class="cta-prompt">View the story<i class="fas fa-arrow-right"></i></p>
                </div>
            </a>
        </div>
        <div>
            <a href="/featured-work/belvedere">
                <img src="<?php echo $this->getThemePath(); ?>/images/case-studies/thumbnails/belvedere-hmpg-img-grid.png" alt="Belvedere Case Study">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>Belvedere Health Services</h3>
                    <p>"Vibrant always provides insights into marketing and positioning that we didn’t even know we should be paying attention to."</p>
                    <p class="cta-prompt">View the story<i class="fas fa-arrow-right"></i></p>
                </div>
            </a>
        </div>
         <div>
            <a data-lity href="https://vimeo.com/475845858">
                <img src="<?php echo $this->getThemePath(); ?>/images/video-thumbs/otsego-now.png" alt="Otsego Now">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>OtsegoNow<br />Economic Development</h3>
                    <p>Click Here to Play</p>
                </div>
            </a>
        </div>
    	<div>
            <a href="/featured-work/united-hospice-rockland">
        		<img src="<?php echo $this->getThemePath(); ?>/images/case-studies/thumbnails/uhr_thumbnail.png" alt="United Hospice Of Rockland Case Study">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>United Hospice of Rockland</h3>
                    <p>"Vibrant’s work helped us resonate with the community and deliver our mission"</p>
                    <p class="cta-prompt">View the story<i class="fas fa-arrow-right"></i></p>
                </div>
            </a>
    	</div>
    	<div>
            <a href="/featured-work/fca-case-study">
        		<img src="<?php echo $this->getThemePath(); ?>/images/case-studies/thumbnails/fca-hmpg-img-grid.png" alt="Fca Case Study">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>FCA</h3>
                    <p>"Thanks to Vibrant, FCA has an overall broader impact."</p>
                    <p class="cta-prompt">View the story<i class="fas fa-arrow-right"></i></p>
                </div>
            </a>
    	</div>
        <div>
            <a href="/featured-work/st-peters-health-partners">
                <img src="<?php echo $this->getThemePath(); ?>/images/video-thumbs/st-peters.png" alt="St. Peter's">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>St. Peter's Health</h3>
                    <p>"Vibrant has proven a versatile partner able to meet our needs and help our marketing team deliver effective solutions."</p>
                </div>
            </a>
        </div>
    	<div>
            <a href="/featured-work/ne-pa">
        		<img src="<?php echo $this->getThemePath(); ?>/images/case-studies/thumbnails/Vibrant_nepa-thumbs_mcl082019.jpeg" alt="NEPA Case Study">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>NE PA</h3>
                    <p>"With their support, we can focus on what we do best—serving our members."</p>
                    <p class="cta-prompt">View the story<i class="fas fa-arrow-right"></i></p>
                </div>
            </a>
    	</div>
    	<div>
            <a href="/featured-work/sfcu-case-study">
                <img src="<?php echo $this->getThemePath(); ?>/images/case-studies/thumbnails/sfcu_thumbnail.png" alt="Sfcu Case Study">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>sfcu</h3>
                    <p>"Vibrant has helped build our brand. We have grown to provide more services to more members in more areas."</p>
                    <p class="cta-prompt">View the story<i class="fas fa-arrow-right"></i></p>
                </div>
            </a>
        </div>
        <div>
            <a href="/featured-work/pathfinder">
                <img src="<?php echo $this->getThemePath(); ?>/images/case-studies/thumbnails/Vibrant_pathfinder-thumbs_mcl082019.jpeg" alt="Pathfinder Case Study">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>Pathfinder Village</h3>
                    <p>"We have been able to reach more people than ever before and truly build our awareness."</p>
                    <p class="cta-prompt">View the story<i class="fas fa-arrow-right"></i></p>
                </div>
            </a>
        </div>
    	<div>
            <h2>We're saving this spot for you.</h2>
            <p class="save-text">Create an accurate and consistent voice that resonates with your audience.  <a href="/contact">Contact</a> or call us today: <a href="tel:8559462773">(855) 946-2773</a></p>
    	</div>
    </section>

     <section class="latest-news">
        <h1>Latest News</h1>
            <div class="container">
      <?php  
      $pl = new PageList();
      $pl->filterByCollectionTypeHandle('blog_post');
      $pl->sortByDisplayOrder('alpha_asc'); // Sort alphebetically
      $counter = 0;
     
      $pages = $pl->get(); 
      
      
      // Display Page Name and Description
      foreach ($pages as $page){  ?>

        <?php
            $counter++;
            $url = $page->getCollectionLink();
        ?>

        <div>
            <h2>
                <?php   
                    echo $page->getCollectionName();
                ?> 
            </h2>
            <div class="blog-date">
                <small><?php 
                $datePublic = $page->getCollectionDatePublicObject()->format('j F, Y');
                echo $datePublic ?></small>
            </div>
    
                <?php   
                    echo $page->getCollectionDescription();
                ?>

                <p class="read-more-link"><a href='<?php echo h($url) ?>'>Read more</a></p>
            </p>
        </div>

        <?php if ($counter == 3) {
            break;
        } ?>

        <?php } ?>
            
        </div>
    </section>
     <div class="video" >
        <?php
            $a = new Area('About Us Video');
            $a->display($c);
        ?>  
    </div> 
</div>


<?php $this->inc('elements/footer.php'); ?>
