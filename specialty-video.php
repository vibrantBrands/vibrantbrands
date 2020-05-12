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
            <a data-lity href="https://vimeo.com/200995267">
                <i class="fas fa-play-circle"></i>
                <img src="<?php echo $this->getThemePath(); ?>/images/video-thumbs/bfairdirectcare.png" alt="B Fair Direct Care">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>#bFair2DirectCare</h3>
                    <p>"Vibrant helped us to communicate a sense of urgency about an important topic, while offering a window into the typical day at work for a Direct Support professional."</p>
                </div>
            </a>
        </div>
        <div>
            <a data-lity href="https://vimeo.com/142750575">
                 <i class="fas fa-play-circle"></i>
                <img src="<?php echo $this->getThemePath(); ?>/images/video-thumbs/itmatterstome.png" alt="It Matters to Me">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>It Matters to Me</h3>
                    <p>"Vibrant’s video tells the story of how our Direct Support Professionals enrich the lives of others."</p>
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
                    <p>"Vibrant created a broad and engaging overview video that truly captured the experience of serving our preschool students and their families."</p>
                </div>
            </a>
        </div>
        <div>
            <a data-lity href="https://vimeo.com/188699159">
                 <i class="fas fa-play-circle"></i>
                <img src="<?php echo $this->getThemePath(); ?>/images/video-thumbs/pathfinder.png" alt="Pathfinder Community">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>Pathfinder Community</h3>
                    <p>"We needed an overview video that did more than display our services. Vibrant delivered this through engaging stories and images that show why Pathfinder is a community."</p>
                </div>
            </a>
        </div>
        <div>
            <a data-lity href="https://vimeo.com/338145427">
                 <i class="fas fa-play-circle"></i>
                <img src="<?php echo $this->getThemePath(); ?>/images/video-thumbs/sunmark-goodvibes2.png" alt="Sunmark">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>Sunmark</h3>
                    <p>"Vibrant’s videos showed how membership at Sunmark can make life better, with stories and images that echo and reinforce our branding."</p>
                </div>
            </a>
        </div>
        <div>
            <a data-lity href="https://vimeo.com/233693035">
                 <i class="fas fa-play-circle"></i>
                <img src="<?php echo $this->getThemePath(); ?>/images/video-thumbs/heavenshands.png" alt="Heaven's Hands">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>Heaven's Hands</h3>
                    <p>"Vibrant helped us use video to tell compelling stories, to document the hard work, smiling faces, and greater community inclusion."</p>
                </div>
            </a>
        </div>
        <div>
            <a data-lity href="https://vimeo.com/291110242">
                 <i class="fas fa-play-circle"></i>
                <img src="<?php echo $this->getThemePath(); ?>/images/video-thumbs/greystone.png" alt="Greystone">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>Greystone</h3>
                    <p>"Vibrant produced a video that helped us show how our arts program positively impacts the lives of many through images of joy and accomplishment."</p>
                </div>
            </a>
        </div>
        <div>
            <a data-lity href="https://vimeo.com/286351696">
                 <i class="fas fa-play-circle"></i>
                <img src="<?php echo $this->getThemePath(); ?>/images/video-thumbs/flame.png" alt="FLAME">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>FLAME</h3>
                    <p>"The Flame is all about excitement and joy through music. Vibrant captured that feeling and wove in uplifting band member stories, helping spread hope and inspiration."</p>
                </div>
            </a>
        </div>
        <div>
            <a data-lity href="hhttps://vimeo.com/322035627">
                 <i class="fas fa-play-circle"></i>
                <img src="<?php echo $this->getThemePath(); ?>/images/video-thumbs/sunmark.png" alt="Sunmark Testimonials">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>Sunmark</h3>
                    <p>"Vibrant created a video spot that really drove home our message and branding."</p>
                </div>
            </a>
        </div>
        <div>
            <a data-lity href="https://vimeo.com/332074883">
                 <i class="fas fa-play-circle"></i>
                <img src="<?php echo $this->getThemePath(); ?>/images/video-thumbs/herkimer.png" alt="Herkimer">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>Herkimer</h3>
                    <p>"Vibrant’s video helped us communicate the Herkimer experience to prospective students and their families — Vibrant brought Herkimer to life!"</p>
                </div>
            </a>
        </div>
        <div>
            <a data-lity href="https://vimeo.com/338145577">
                 <i class="fas fa-play-circle"></i>
                <img src="<?php echo $this->getThemePath(); ?>/images/video-thumbs/sunmark-mortgage.png" alt="Sunmark Mortgages">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>Sunmark</h3>
                    <p>"Vibrant added exciting graphical elements to the video, adding depth and information that reinforce the Sunmark difference."</p>
                </div>
            </a>
        </div>
        <div>
            <a data-lity href="https://vimeo.com/281901623">
                <i class="fas fa-play-circle"></i>
                <img src="<?php echo $this->getThemePath(); ?>/images/video-thumbs/pv-clark.png" alt="Pathfinder Village">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>Pathfinder Village</h3>
                    <p>"Vibrant created a family member testimonial video that truly captured the joy of community and independence."</p>
                </div>
            </a>
        </div>
        <div>
            <a data-lity href="https://vimeo.com/239825585">
                 <i class="fas fa-play-circle"></i>
                <img src="<?php echo $this->getThemePath(); ?>/images/video-thumbs/heavenshands-employment.png" alt="Heaven's Hands Employment">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>Heaven's Hands</h3>
                    <p>"We needed to convey that working at Heaven’s Hands is rewarding. Vibrant’s video showed the importance of our employees and how working in this field can be a great choice."</p>
                </div>
            </a>
        </div>
        <div>
            <a data-lity href="https://vimeo.com/337826737">
                 <i class="fas fa-play-circle"></i>
                <img src="<?php echo $this->getThemePath(); ?>/images/video-thumbs/stjohn.png" alt="St. John's Men's Health">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>St. John's Men's Health</h3>
                    <p>"Vibrant helped us deliver a crucial message on the importance of men’s health, and how simple it is to step onto the path to wellness."</p>
                </div>
            </a>
        </div>
        <div>
            <a data-lity href="https://vimeo.com/296469413">
                 <i class="fas fa-play-circle"></i>
                <img src="<?php echo $this->getThemePath(); ?>/images/video-thumbs/UPS.png" alt="Unique People Services">
                <div class="info">
                    <div class="info-bg"></div>
                    <h3>Unique People's Services</h3>
                    <p>"Vibrant’s video helped us highlight the good work of a positive member of a community we serve."</p>
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

