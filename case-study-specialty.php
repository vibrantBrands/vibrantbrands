<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php $this->inc('elements/header.php'); ?>

<div class="internal-hero-image">
    <?php
         $a = new Area('Hero Image');
         $a->display($c);
   ?>
</div>
<div class="container specialties">
    <h1>Credit Unions</h1>
    <p>Vibrant incorporates new technologies and media into credit union marketing strategies. We are the experts in helping credit unions expand into new markets, grow membership and increase loan utilization. With creative, targeted messaging and the right media mix, we achieve your growth and marketing goals with a higher ROI. Our agency strongly believes in the credit union movement (Vibrant has no banking clients), and we frequently speak on innovative credit union marketing at industry conferences across the U.S. We take great pride in assisting our clients in building awareness of the value and importance of credit unions.</p>
    <section class="clients">
        <div>
            <a href="/case-studies/sfcu">
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
            <a href="<?php echo $this->getThemePath(); ?>/images/screenshots/LIAFCU.html" data-lity data-lity-desc="Solutions">
                <img src="<?php echo $this->getThemePath(); ?>/images/case-studies/thumbnails/LIAFCU.jpg" alt="Solutions">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>Long Island Alliance Federal Credit Union</h3>
                    <p class="cta-prompt">View the story<i class="fas fa-arrow-right"></i></p>
                </div>
            </a>
        </div>
        <div>
            <a href="<?php echo $this->getThemePath(); ?>/images/screenshots/parks-heritage.html" data-lity data-lity-desc="Parks Heritage">
                <img src="<?php echo $this->getThemePath(); ?>/images/case-studies/thumbnails/parks.png" alt="Parks Heritage">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>Parks Heritage</h3>
                    <p class="cta-prompt">View the story<i class="fas fa-arrow-right"></i></p>
                </div>
            </a>
        </div>
        <div>
            <a href="<?php echo $this->getThemePath(); ?>/images/screenshots/northern.html" data-lity data-lity-desc="Northern">
                <img src="<?php echo $this->getThemePath(); ?>/images/case-studies/thumbnails/northern-thumb.png" alt="Northern FCU">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>Northern</h3>
                    <p class="cta-prompt">View the story<i class="fas fa-arrow-right"></i></p>
                </div>
            </a>
        </div>
    </section>
</div>

<?php $this->inc('elements/footer_noaddress.php'); ?>

