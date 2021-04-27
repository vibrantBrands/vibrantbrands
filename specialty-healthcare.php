<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php $this->inc('elements/header.php'); ?>

<div class="specialty-wrapper video">

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
        <div>
            <?php
            $a = new Area('Services Left');
            $a->display($c);
        ?></div>
        <div class="reverse-stripe"><?php
            $a = new Area('Services Right');
            $a->display($c);
        ?>
        </div>
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
   <div class="border"></div>

   <div class="container">
    <?php
        $a = new Area('Featured Work');
        $a->display($c);
    ?>
    </div>
    <div class="container">
    <section class="video-section">
        <div>
            <a href="/featured-work/fca-case-study">
                <img src="<?php echo $this->getThemePath(); ?>/images/case-studies/thumbnails/fca-hmpg-img-grid.png" alt="Fca Case Study">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>FCA</h3>
                    <p>"Thanks to Vibrant, FCA has an overall broader impact."</p>
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
                </div>
            </a>
        </div>
        <div>
            <a href="/featured-work/united-hospice-rockland">
                <img src="<?php echo $this->getThemePath(); ?>/images/case-studies/thumbnails/uhr_thumbnail.png" alt="United Hospice Of Rockland Case Study">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>United Hospice</h3>
                    <p>"Vibrant’s work helped us resonate with the community and deliver our mission"</p>
                </div>
            </a>
        </div>
        <div>
            <a href="/featured-work/cfds">
                <img src="<?php echo $this->getThemePath(); ?>/images/case-studies/thumbnails/Vibrant_cfds-thumbs_mcl082019.jpeg" alt="CDFS Case Study">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>Center for Disability Services</h3>
                    <p>"Vibrant helped us broadcast our message in a modern way, leading to amazing new opportunities for the future."</p>
                </div>
            </a>
        </div>
        <div>
            <a href="/featured-work/belvedere">
                <img src="<?php echo $this->getThemePath(); ?>/images/case-studies/thumbnails/belvedere-hmpg-img-grid.png" alt="Belvedere">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>Belvedere</h3>
                </div>
            </a>
        </div>
        <!-- 
        <div>
            <a href="<?php echo $this->getThemePath(); ?>/images/specialty/healthcare/sjh.pdf" data-lity data-lity-desc="St. John's Episcopal Hospital">
                <img src="<?php echo $this->getThemePath(); ?>/images/specialty/healthcare/deputy-grand-marshall.png" alt="Deputy Grand Marshall">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>St. John's Episcopal Hospital</h3>
                </div>
            </a>
        </div>
        <div>
             <a href="<?php echo $this->getThemePath(); ?>/images/specialty/healthcare/eddy.pdf" data-lity data-lity-desc="Glen Eddy">
                <img src="<?php echo $this->getThemePath(); ?>/images/specialty/healthcare/the-glen.png" alt="Glen Eddy">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>Glen Eddy</h3>
                </div>
            </a>
        </div>
        <div>
            <a href="<?php echo $this->getThemePath(); ?>/images/specialty/healthcare/sunnyview-brochure.pdf" data-lity data-lity-desc="Sunnyview">
                <img src="<?php echo $this->getThemePath(); ?>/images/specialty/healthcare/sunnyview.png" alt="Sunnyview">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>Sunnyview</h3>
                </div>
            </a>
        </div>
        <div>
             <a href="<?php echo $this->getThemePath(); ?>/images/specialty/healthcare/beverwyck.pdf" data-lity data-lity-desc="Beverwyck">
                <img src="<?php echo $this->getThemePath(); ?>/images/specialty/healthcare/taste-of-beverwyck.png" alt="Taste of Beverwyck">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>Taste of Beverwyck</h3>
                </div>
            </a>
        </div>
        <div>
            <a href="<?php echo $this->getThemePath(); ?>/images/specialty/healthcare/glen-eddy-card.pdf" data-lity data-lity-desc="Beverwyck">
                <img src="<?php echo $this->getThemePath(); ?>/images/specialty/healthcare/glen-eddy.png" alt="Glen Eddy">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>Glen Eddy</h3>
                </div>
            </a>
        </div>
        <div>
            <a href="<?php echo $this->getThemePath(); ?>/images/specialty/healthcare/st-johns-mailer.pdf" data-lity data-lity-desc="St. John's">
                <img src="<?php echo $this->getThemePath(); ?>/images/specialty/healthcare/st-johns.png" alt="Deputy Grand Marshall">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>St. John's</h3>
                    <p>Mailer</p>
                </div>
            </a>
        </div>
        <div>
            <a href="<?php echo $this->getThemePath(); ?>/images/specialty/healthcare/belvedere-home-care.png" data-lity data-lity-desc="Belvedere">
                <img src="<?php echo $this->getThemePath(); ?>/images/specialty/healthcare/belvedere-home-care.png" alt="Belvedere Home Care">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>Belvedere Home Care</h3>

                </div>
            </a>
        </div>
        <div>
             <a href="<?php echo $this->getThemePath(); ?>/images/specialty/healthcare/sj-flyer.pdf" data-lity data-lity-desc="St. John's">
                <img src="<?php echo $this->getThemePath(); ?>/images/specialty/healthcare/primay-care-patients.png" alt="St. John's">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>St. John's Card</h3>
                </div>
            </a>
        </div> -->
    </section>
    </div>

    <div class="border"></div>

    <section class="cu-logos" data-aos="fade-up">
        <div class="container">
             <?php
              $fs = FileSet::getByName('Healthcare Logos');
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
                United Hospice</span>
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
            </div>
        </div>       
    </section>
    
   </div>
</div>

</div>

<?php $this->inc('elements/footer.php'); ?>

