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
        <div class="reverse-stripe">
            <?php
            $a = new Area('Services Middle');
            $a->display($c);
        ?>
        </div class="reverse-stripe">
        <div><?php
            $a = new Area('Services Right');
            $a->display($c);
        ?>
        </div>
    </div>
   </section>
   <div class="border"></div>
   <section class="sizzle">
    <div class="container">
        <?php
            $a = new Area('Sizzle Reel');
            $a->display($c);
        ?>
    </div>
   </section>
   <section class="services">
    <?php
            $a = new Area('Studio header');
            $a->display($c);
        ?>
    <div class="container">
        <div>
            <?php
            $a = new Area('Studio Services Left');
            $a->display($c);
        ?></div>
        <div class="reverse-stripe">
            <?php
            $a = new Area('Studio Services Right');
            $a->display($c);
        ?>
        </div>
    </div>
   </section>
   <div class="border"></div>

   <div class="container">
       <section class="clients">
            <div>
                <img src="<?php echo $this->getThemePath(); ?>/images/specialty/video/studio-1.png" alt="Studio Shot 1">
            </div>
            <div>
                <img src="<?php echo $this->getThemePath(); ?>/images/specialty/video/studio-4.png" alt="Studio Shot 4">
            </div>
            <div>
                <img src="<?php echo $this->getThemePath(); ?>/images/specialty/video/studio-5.png" alt="Studio Shot 5">
            </div>
        </section>
   </div>

   <div class="container">
    <?php
        $a = new Area('Featured Work');
        $a->display($c);
    ?>
    <section class="video-section">
        <div>
            <a data-lity href="https://vimeo.com/475845858">
                 <i class="fas fa-play-circle"></i>
                <img src="<?php echo $this->getThemePath(); ?>/images/video-thumbs/otsego-now.png" alt="Otsego Now">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>OtsegoNow<br />Economic Development</h3>
                    <p>Click Here to Play</p>
                </div>
            </a>
        </div>
        <div>
            <a data-lity href="https://vimeo.com/277886100">
                 <i class="fas fa-play-circle"></i>
                <img src="<?php echo $this->getThemePath(); ?>/images/video-thumbs/st-peters.png" alt="St. Peter's">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>St. Peter's Health</h3>
                    <p>Click Here to Play</p>
                </div>
            </a>
        </div>
         <div>
            <a data-lity href="https://vimeo.com/530917720">
                 <i class="fas fa-play-circle"></i>
                <img src="<?php echo $this->getThemePath(); ?>/images/video-thumbs/albany-airport.png" alt="Albany Airport">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>Albany Airport</h3>
                    <p>Click Here to Play</p>
                </div>
            </a>
        </div>
        <div>
            <a data-lity href="https://vimeo.com/332074883">
                 <i class="fas fa-play-circle"></i>
                <img src="<?php echo $this->getThemePath(); ?>/images/video-thumbs/herkimer.png" alt="Herkimer">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>Herkimer College</h3>
                    <p>Click Here to Play</p>
                </div>
            </a>
        </div>
        <div>
            <a data-lity href="https://vimeo.com/87637683">
                 <i class="fas fa-play-circle"></i>
                <img src="<?php echo $this->getThemePath(); ?>/images/video-thumbs/ualbany.png" alt="University at Albany Higher Education">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>University at Albany<br />Higher Education</h3>
                    <p>Click Here to Play</p>
                </div>
            </a>
        </div>
        <div>
            <a data-lity href="https://vimeo.com/322035627">
                 <i class="fas fa-play-circle"></i>
                <img src="<?php echo $this->getThemePath(); ?>/images/video-thumbs/sunmark.png" alt="Sunmark Testimonials">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>Sunmark<br />Financial Services</h3>
                    <p>Click Here to Play</p>
                </div>
            </a>
        </div>
        <div>
            <a data-lity href="https://vimeo.com/manage/285565814">
                 <i class="fas fa-play-circle"></i>
                <img src="<?php echo $this->getThemePath(); ?>/images/video-thumbs/brooks.png" alt="Brooks BBQ">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>Brooks BBQ<br />Commercial Services</h3>
                    <p>Click Here to Play</p>
                </div>
            </a>
        </div>
        <div>
            <a data-lity href="https://vimeo.com/21171327">
                 <i class="fas fa-play-circle"></i>
                <img src="<?php echo $this->getThemePath(); ?>/images/video-thumbs/eni.png" alt="ENI">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>ENI<br />Human Resources</h3>
                    <p>Click Here to Play</p>
                </div>
            </a>
        </div>
        <div>
            <a data-lity href="https://vimeo.com/manage/36553956">
                 <i class="fas fa-play-circle"></i>
                <img src="<?php echo $this->getThemePath(); ?>/images/video-thumbs/endicott.png" alt="Endicott">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>Endicott Interconnect Manufacturing</h3>
                    <p>Click Here to Play</p>
                </div>
            </a>
        </div>
        <div>
            <a data-lity href="https://vimeo.com/manage/147352137">
                <i class="fas fa-play-circle"></i>
                <img src="<?php echo $this->getThemePath(); ?>/images/video-thumbs/cooperstown.png" alt="Cooperstown">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>Cooperstown All Star Village</h3>
                    <p>Click Here to Play</p>
                </div>
            </a>
        </div>
       <!--<div>
            <a data-lity href="https://vimeo.com/200995267">
                <i class="fas fa-play-circle"></i>
                <img src="<?php echo $this->getThemePath(); ?>/images/video-thumbs/bfairdirectcare.png" alt="B Fair Direct Care">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>#bFair2DirectCare</h3>
                    <p>Click Here to Play</p>
                </div>
            </a>
        </div> -->
        <div>
            <a data-lity href="https://vimeo.com/142750575">
                 <i class="fas fa-play-circle"></i>
                <img src="<?php echo $this->getThemePath(); ?>/images/video-thumbs/itmatterstome.png" alt="It Matters to Me">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>It Matters to Me</h3>
                    <p>Click Here to Play</p>
                </div>
            </a>
        </div>
        <div>
            <a data-lity href="https://vimeo.com/268978063">
                 <i class="fas fa-play-circle"></i>
                <img src="<?php echo $this->getThemePath(); ?>/images/video-thumbs/kennedy.png" alt="KCC">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>Kennedy Children's Center</h3>
                    <p>Click Here to Play</p>
                </div>
            </a>
        </div>
    </section>
    </div>
    
    <section class="county-fair">
        <div class="container">
            <?php
                $a = new Area('County Fair Description');
                $a->display($c);
            ?>
            <div class="awards">
                <div>
                    <img src="<?php echo $this->getThemePath(); ?>/images/specialty/video/medal-1.png" alt="NYC Independent Film Festival" />
                </div>
                <div>
                   <img src="<?php echo $this->getThemePath(); ?>/images/specialty/video/medal-2.png" alt="Catskill Mountains Film Festival" />
                </div>
                <div>
                    <img src="<?php echo $this->getThemePath(); ?>/images/specialty/video/medal-3.png" alt="Cocoa Beach Film Festival" />
                </div>
                <div>
                    <a href="https://www.amazon.com/gp/video/detail/B07DQ5QKBK/ref=atv_dp_share_cu_r">
                        <img src="<?php echo $this->getThemePath(); ?>/images/specialty/video/prime-logo.png" alt="Amazon Prime" />
                    </a>
                </div>
            </div>
        </div>
    </section>
       
   </div>
</div>

</div>

<?php $this->inc('elements/footer.php'); ?>

