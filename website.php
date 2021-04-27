<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php $this->inc('elements/header.php'); ?>

<div class="container specialties website">
    <div>
        <?php
            $a = new Area('Content');
            $a->display($c);
        ?> 
        <small class="click-below">Visit the stories below to learn more.</small>
        <p>
            <i class="fas fa-arrow-down"></i>
        </p>
    </div>
   <section class="website-section">  
        <div>
           <a href="<?php echo $this->getThemePath(); ?>/images/screenshots/pathfinder-village.html" data-lity data-lity-desc="Pathfinder Village">
                <img src="<?php echo $this->getThemePath(); ?>/images/screen-thumbs/pv_img-grid_web.png" alt="Pathfinder Village thumbnail">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>Pathfinder Village</h3>
                    <p>"Vibrant helped us create a website that delivers our voice and attracts more people to serve."</p>
                </div>
            </a>
        </div>
        <div>
           <a href="<?php echo $this->getThemePath(); ?>/images/screenshots/cfds.html" data-lity data-lity-desc="CFDS Screenshot">
                <img src="<?php echo $this->getThemePath(); ?>/images/screen-thumbs/cfds_img-grid_web.png" alt="CFDS thumbnail">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>Center for Disability Services</h3>
                    <p>"As a rapidly expanding nonprofit, we were facing the challenges of maintaining brand cohesion. Vibrant’s work included creating a website for the Center that acts as an engaging portal to our supportive services."</p>
                </div>
            </a>
        </div>
        <div>
           <a href="<?php echo $this->getThemePath(); ?>/images/screenshots/hospice-rockland.html" data-lity data-lity-desc="Hospice of Rockland">
                <img src="<?php echo $this->getThemePath(); ?>/images/screen-thumbs/uhr_img-grid_web.png" alt="Hospice of Rockland thumbnail">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>Hospice of Rockland</h3>
                    <p>"Vibrant helped us facilitate the hospice care discussion with families across Rockland County. Now, the care that we provide daily shines on our site and in our message."</p>
                </div>
            </a>
        </div>
        <div>
           <a href="<?php echo $this->getThemePath(); ?>/images/screenshots/licadd.html" data-lity data-lity-desc="LICADD">
                <img src="<?php echo $this->getThemePath(); ?>/images/screen-thumbs/licadd_img-grid_web.png" alt="LICAAD thumbnail">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>Long Island Council on Alcoholism and Drug Dependence</h3>
                    <p>"Vibrant designed a website that simplifies access to our services and provides accurate and engaging information. With Vibrant’s help, we’re leading prevention through education and intervention."</p>
                </div>
            </a>
        </div>
        <div>
           <a href="<?php echo $this->getThemePath(); ?>/images/screenshots/nonotuck.html" data-lity data-lity-desc="Nonotuck">
                <img src="<?php echo $this->getThemePath(); ?>/images/screen-thumbs/nonotuck_img-grid_web.png" alt="nonotuck thumbnail">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>Nonotuck</h3>
                    <p>"Vibrant built a great-looking website, but, more importantly, they helped us deliver our caregiving with love to more people in the communities we serve."</p>
                </div>
            </a>
        </div>
        <div>
           <a href="<?php echo $this->getThemePath(); ?>/images/screenshots/lisefcu.html" data-lity data-lity-desc="lisefcu">
                <img src="<?php echo $this->getThemePath(); ?>/images/case-studies/thumbnails/LIAFCU.jpg" alt="LISEFCU thumbnail">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>Long Island State Employees FCU</h3>
                    <p>"We needed a site that provided the technology our members need, with the personal touch that comes from credit union membership. Vibrant’s team helped us create the best web experience for our members."</p>
                </div>
            </a>
        </div>
        <div>
           <a href="<?php echo $this->getThemePath(); ?>/images/screenshots/one-hope.html" data-lity data-lity-desc="one hope">
                <img src="<?php echo $this->getThemePath(); ?>/images/screen-thumbs/onehope_img-grid_web.png" alt="Placeholder">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>One Hope United</h3>
                    <p>"We needed a website that would help us communicate our vision of ‘for every child and family, life without limits.’ Vibrant’s site delivers information, but also reflects our care for the community."</p>
                </div>
            </a>
        </div>
        <div>
           <a href="<?php echo $this->getThemePath(); ?>/images/screenshots/sfcu.html" data-lity data-lity-desc="SFCU">
                <img src="<?php echo $this->getThemePath(); ?>/images/screen-thumbs/sfcu_img-grid_web.png" alt="LISEFCU thumbnail">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>SFCU</h3>
                    <p>"Vibrant's website helped us solidify our new branding and message to current and future members."</p>
                </div>
            </a>
        </div>
        <div>
           <a href="<?php echo $this->getThemePath(); ?>/images/screenshots/solutions.html" data-lity data-lity-desc="Solutions">
                <img src="<?php echo $this->getThemePath(); ?>/images/screen-thumbs/solutions_img-grid_web.png" alt="Solutions thumbnail">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>Solutions</h3>
                    <p>"Convenience and accuracy are important to our members. Vibrant helped us create a website that makes banking with Solutions Credit Union easier."</p>
                </div>
            </a>
        </div>
    </section>
</div>

<?php $this->inc('elements/footer.php'); ?>

