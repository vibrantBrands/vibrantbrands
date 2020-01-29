<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php $this->inc('elements/header.php'); ?>

<div class="internal-hero-image">
    <?php
         $a = new Area('Hero Image');
         $a->display($c);
   ?>
</div>
<div class="container specialties digital">
    <div>
        <h2>We are marketing.</h2>
        <p>Digital marketing is a powerful extension of your branding. At Vibrant Brands, we develop marketing strategies that reach the right audience and deliver value every day for our clients. We don’t provide cookie-cutter solutions, simply because you are unique, so your marketing plan should also be unique. It’s why our clients get results — we invest the time in developing marketing strategies that are consistent with branding and provide value.</p>
        <h3>Services Include:</h3>
        <p>Advertising Campaigns, Marketing Plans, Video Production, Marketing Strategy, Marketing Consulting, Brochure Design, Graphic Design, Copywriting</p>
        <small class="click-below">Visit the stories below to learn more.</small>
        <p>
            <i class="fas fa-arrow-down"></i>
        </p>
    </div>
    <section class="clients">
        <div>
            <a href="/case-studies/cfds">
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
            <a href="/case-studies/belvedere">
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
            <a href="/case-studies/united-hospice-rockland">
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
            <a href="/case-studies/fca-case-study">
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
            <a href="/case-studies/pathfinder">
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
           <a href="<?php echo $this->getThemePath(); ?>/images/screenshots/lisefcu.html" data-lity data-lity-desc="lisefcu">
                <img src="<?php echo $this->getThemePath(); ?>/images/screen-thumbs/lisefcu_img-grid_web.png" alt="LISEFCU thumbnail">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>Long Island State Employees FCU</h3>
                    <p>"Vibrant’s team helped us create the best web experience for our members."</p>
                    <p class="cta-prompt">View the story<i class="fas fa-arrow-right"></i></p>
                </div>
            </a>
        </div>
    </section>
</div>

<?php $this->inc('elements/footer.php'); ?>

