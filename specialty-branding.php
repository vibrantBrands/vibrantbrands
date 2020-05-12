<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php $this->inc('elements/header.php'); ?>

<div class="specialty-wrapper">

<div class="internal-hero-image">
    <?php
         $a = new Area('Hero Image');
         $a->display($c);
   ?>
</div>
<div class="container">
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
        <div class="reverse-stripe"><?php
            $a = new Area('Services Right');
            $a->display($c);
        ?></div>
    </div>
   </section>
   <div class="border"></div>
   <section class="process branding-process">
    <div class="container">
        <div>
            <?php
                $a = new Area('Brand Launch Formula');
                $a->display($c);
            ?>
        </div>
        <div>
            <?php
                $a = new Area('Marketing Post Launch');
                $a->display($c);
            ?>
        </div>
        <div>
            <?php
                $a = new Area('Process & Team');
                $a->display($c);
            ?>
        </div>
        <div>
            <?php
                $a = new Area('Another Cool Benefit');
                $a->display($c);
            ?>
        </div>
        
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
                <a href="<?php echo $this->getThemePath(); ?>/images/specialty/branding/festival-trees-brochure.jpg" data-lity data-lity-desc="Festival of Trees">
                    <img src="<?php echo $this->getThemePath(); ?>/images/specialty/branding/festival-of-trees.png" alt="Festival of Trees">
                    <div class="info">
                        <div class="info-bg"></div>
                        <h3>Festival of Trees</h3>
                        <!-- <p class="cta-prompt">View the story<i class="fas fa-arrow-right"></i></p>  -->
                    </div>
                </a>
            </div>
            <div>
                 <a href="<?php echo $this->getThemePath(); ?>/images/specialty/branding/cfds.pdf" data-lity data-lity-desc="CFDS">
                    <img src="<?php echo $this->getThemePath(); ?>/images/specialty/branding/we.png" alt="CFDS">
                    <div class="info">
                        <div class="info-bg"></div>
                        <h3>CFDS</h3>
                    </div>
                </a>
            </div>
            <div>
                <a href="<?php echo $this->getThemePath(); ?>/images/specialty/branding/lake-george-flyer.pdf" data-lity data-lity-desc="Lake George Flyer">
                    <img src="<?php echo $this->getThemePath(); ?>/images/specialty/branding/lake-george.png" alt="Lake George">
                    <div class="info">
                        <div class="info-bg"></div>
                        <h3>Lake George</h3>
                    </div>
                </a>
            </div>
            <div>
                 <a href="<?php echo $this->getThemePath(); ?>/images/specialty/branding/nepa-bus-wrap.jpg" data-lity data-lity-desc="NEPA Bus Wrap">
                    <img src="<?php echo $this->getThemePath(); ?>/images/specialty/branding/nepa.png" alt="NEPA">
                    <div class="info">
                        <div class="info-bg"></div>
                        <h3>NEPA</h3>
                    </div>
                </a>
            </div>
            <div>
                <a href="<?php echo $this->getThemePath(); ?>/images/specialty/branding/good-vibes.png" data-lity data-lity-desc="Sunmark Bus Wrap">
                    <img src="<?php echo $this->getThemePath(); ?>/images/specialty/branding/good-vibes.png" alt="Sunmark Good Vibes">
                    <div class="info">
                        <div class="info-bg"></div>
                        <h3>Sunmark Good Vibes</h3>
                    </div>
                </a>
            </div>
            <div>
                <a href="<?php echo $this->getThemePath(); ?>/images/specialty/branding/st-johns-flyer.pdf" data-lity data-lity-desc="St. John's Flyer">
                    <img src="<?php echo $this->getThemePath(); ?>/images/specialty/branding/stethoscope.png" alt="Stethoscope">
                    <div class="info">
                        <div class="info-bg"></div>
                        <h3>Stethoscope</h3>
                    </div>
                </a>
            </div>
            <div>
                <a href="<?php echo $this->getThemePath(); ?>/images/specialty/branding/taste.png" data-lity data-lity-desc="Taste of Beverwyck Flyer">
                    <img src="<?php echo $this->getThemePath(); ?>/images/specialty/branding/taste.png" alt="Taste of Beverwyck">
                    <div class="info">
                        <div class="info-bg"></div>
                        <h3>Taste of Beverwyck</h3>
                    </div>
                </a>
            </div>
            <div>
                <a href="<?php echo $this->getThemePath(); ?>/images/specialty/branding/glen-at-hiland.pdf" data-lity data-lity-desc="Hiland Meadows">
                    <img src="<?php echo $this->getThemePath(); ?>/images/specialty/branding/hiland.png" alt="Glen at Hiland Meadows">
                    <div class="info">
                        <div class="info-bg"></div>
                        <h3>Glen at Hiland Meadows</h3>
                    </div>
                </a>
            </div>
            <div>
                <a href="<?php echo $this->getThemePath(); ?>/images/specialty/branding/518-card.pdf" data-lity data-lity-desc="#518 Gives">
                    <img src="<?php echo $this->getThemePath(); ?>/images/specialty/branding/518-gives.png" alt="518 Gives">
                    <div class="info">
                        <div class="info-bg"></div>
                        <h3>#518Gives</h3>
                    </div>
                </a>
            </div>
            <div>
                <a href="<?php echo $this->getThemePath(); ?>/images/specialty/branding/belvedere-wallpaper.jpg" data-lity data-lity-desc="Belvedere">
                    <img src="<?php echo $this->getThemePath(); ?>/images/specialty/branding/belvedere.png" alt="Belvedere">
                    <div class="info">
                        <div class="info-bg"></div>
                        <h3>Belvedere</h3>
                    </div>
                </a>
            </div>
            <div>
                <a href="<?php echo $this->getThemePath(); ?>/images/specialty/branding/reliant.png" data-lity data-lity-desc="Reliant">
                    <img src="<?php echo $this->getThemePath(); ?>/images/specialty/branding/reliant.png" alt="Reliant">
                    <div class="info">
                        <div class="info-bg"></div>
                        <h3>Reliant</h3>
                    </div>
                </a>
            </div>
            <div>
                <a href="<?php echo $this->getThemePath(); ?>/images/specialty/branding/sfcu-poster.jpg" data-lity data-lity-desc="SFCU">
                    <img src="<?php echo $this->getThemePath(); ?>/images/specialty/branding/sfcu.png" alt="SFCU">
                    <div class="info">
                        <div class="info-bg"></div>
                        <h3>SFCU</h3>
                    </div>
                </a>
            </div>
        </section>
    </div>

    <section class="company-description">
        <div class="container">
            <div>
                <h2>What Our<br />Clients Say...</h2>
            </div>
            <div class="quotes">
                <p> "Vibrant’s work is more than just distinct projects like our website and marketing materials — it helped us resonate with the community and deliver our mission of honoring life,
                giving care and bringing comfort."<br />
                <span>Donna Branca,
                Director of Marketing & Public Relations,
                United Hospice of Rockland</span>
                </p>
                <p>"We’ve been providing services to the community for over 75 years. Vibrant helped us reinforce our brand through focusing on our mission, and broadcast our message in a modern way, leading to amazing new opportunities for the future."<br />
                <span>Greg Sorrentino,
                President/Chief Executive Officer,
                Center for Disability Services</span>
                </p>
                <p>"Our community is one-of-a-kind. Vibrant helped us find and create a unique voice, so that people know how special our services really are. We have been able to reach more people than ever before and truly build our awareness."<br />
                <span>Paul Landers,
                President & CEO,
                Pathfinder Village</span></p>
                <p>"Vibrant finds creative ways to showcase what’s great about our credit union. With their support, we can focus on what we do best--serving our members."<br />
                <span>Mark Filbert,
            President/CEO,
        NE PA Federal Credit Union</span></p>
                <p>"With Vibrant, we’re not doing what everyone else is doing. We're separating ourselves from the pack and growing."<br />
                <span>Carole Wands Vice President Marketing Sunmark FCU</span></p>
                <p>"With Vibrant’s help, we have been successful growing our programs and services. We have helped bring the gift of hospice to more people in more areas."
                    <span>Rob Puglisi, Director of Marketing and Communications,
                Community Hospice</span>
                </p>
                                <p>"Working with Vibrant has helped Belvedere develop our
                brand as a premiere provider of health services. Vibrant always
                over-delivers and provides insights into marketing and positioning that we didn’t even know we should be paying attention to."<br />
                <span>John McCooey and Jen Barnett,
                Belvedere Health Care</span></p>
                <p>"Our working relationship with Vibrant has armed us with
                tools to spread awareness about FCA’s services to the
                vulnerable members of our community who are in need.
                Thanks to Vibrant, FCA has an overall
                broader impact."<br />
                <span>Jeffrey Reynolds,
                President and Chief Executive Officer,
                Family and Children’s Association</span></p>
                <p>"Vibrant has helped build our brand through creative
                marketing and we have grown to provide more services to
                more members in more areas."<br />
                <span>Keith May,
                V.P. Marketing,
                SFCU</span>
                </p>
            </div>
        </div>       
    </section>
       
   </div>
</div>

</div>

<?php $this->inc('elements/footer.php'); ?>

