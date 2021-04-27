<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php $this->inc('elements/header.php'); ?>

<div class="specialty-wrapper">

<div class="internal-hero-image">
    <?php
         $a = new Area('Hero Image');
         $a->display($c);
   ?>
</div>
<div class="container specialties">
     <?php
         $a = new Area('Descriptive Text');
         $a->display($c);
   ?>
</div>
   <section class="services">
    <div class="container">
        <div><?php
            $a = new Area('Services Left');
            $a->display($c);
        ?></div>
        <div><?php
            $a = new Area('Services Right');
            $a->display($c);
        ?></div>
    </div>
   </section>
   <div class="border"></div>
   <section class="process">
    <div class="container">
        <?php
            $a = new Area('Process Text');
            $a->display($c);
        ?>
    </div>
   </section>
   <section class="featured">
       <div class="container">
           <?php
            $a = new Area('Featured Text');
            $a->display($c);
        ?>
       </div>
   </section>
   <div class="border"></div>
   <div class="container">
        <section class="clients">
        <div>
            <a href="/case-studies/sfcu">
                <img src="<?php echo $this->getThemePath(); ?>/images/case-studies/thumbnails/sunmark_thumbnail.png" alt="SFCU Case Study">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>sfcu</h3>
                    <p>"Vibrant has helped build our brand. We have grown to provide more services to more members in more areas."</p>
                    <p class="cta-prompt">View the story<i class="fas fa-arrow-right"></i></p>
                </div>
            </a>
        </div>
        <div>
            <a href="/case-studies/sunmark">
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
            <a href="/case-studies/ne-pa">
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
            <a href="/featured-work/long-island-alliance">
                <img src="<?php echo $this->getThemePath(); ?>/images/case-studies/thumbnails/LIAFCU.jpg" alt="Solutions">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>Long Island Alliance Federal Credit Union</h3>
                    <p class="cta-prompt">View the story<i class="fas fa-arrow-right"></i></p>
                </div>
            </a>
        </div>
        <div>
            <a href="/featured-work/parks-heritage">
                <img src="<?php echo $this->getThemePath(); ?>/images/case-studies/thumbnails/parks.png" alt="Parks Heritage">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>Parks Heritage</h3>
                    <p class="cta-prompt">View the story<i class="fas fa-arrow-right"></i></p>
                </div>
            </a>
        </div>
         <div>
            <a href="/featured-work/inner-lakes-fcu">
                <img src="<?php echo $this->getThemePath(); ?>/images/case-studies/thumbnails/inner-lake.jpg" alt="Inner Lakes FCU">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>Inner Lakes FCU</h3>
                    <p class="cta-prompt">View the story<i class="fas fa-arrow-right"></i></p>
                </div>
            </a>
        </div>
    </section>
    </div>

    <section class="cu-logos" data-aos="fade-up">
        <div class="container">
             <?php
              $fs = FileSet::getByName('Credit Union Logos');
              $fl = new FileList();
              $fl->filterBySet($fs);
              $fl->sortBy('fsDisplayOrder', 'asc');
              $files = $fl->get();
             
              foreach($files as $f) {
                $imagepath = $f->getRelativePath();
                $description = $f->getDescription(); ?>
                
                <div>
                <?php if($description == ''): ?>
                    <img src='<?php echo $imagepath; ?>' />
                <?php else: ?>
    
                <a href='<?php echo $description; ?>' target='_blank'>
                    <img src='<?php echo $imagepath; ?>' />
                </a>
                <?php endif; ?>
                </div>
          <?php }
        ?>
        </div>
    </section>

    <section class="company-description" data-aos="fade-up">
        <div class="container">
            <div>
                <h2>What Our<br />Clients Say...</h2>
            </div>
            <div class="quotes">
                
                <p>"Vibrant finds creative ways to showcase what’s great about our credit union. With their support, we can focus on what we do best--serving our members."<br />
                <span>Mark Filbert,
            President/CEO,
        NE PA Federal Credit Union</span></p>
                <p>"Vibrant has helped build our brand through creative
                marketing and we have grown to provide more services to
                more members in more areas."<br />
                <span>Keith May
                V.P. Marketing
                SFCU</span>
                </p>
            </div>
        </div>       
    </section>
       
   </div>
</div>

</div>

<?php $this->inc('elements/footer_noaddress.php'); ?>

