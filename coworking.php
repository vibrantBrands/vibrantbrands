<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php $this->inc('elements/header_coworking.php'); ?>

<div class="coworking">
    <section class="hero">
        <div class="container">
            <?php
              $a = new Area('Header Text');
              $a->display($c);
          ?>
        </div>
  </section>

  <section class="content">
      <div class="container">
          <div class="row">
              <img src="<?php echo $this->getThemePath(); ?>/images/cowork/vibrant_coworking1.jpg" alt="Vibrant Coworking Desks" />
              <img src="<?php echo $this->getThemePath(); ?>/images/cowork/vibrant_coworking2.jpg" alt="Vibrant Coworking Desk" />
              <img src="<?php echo $this->getThemePath(); ?>/images/cowork/vibrant_coworking4.jpg" alt="Vibrant Coworking Conference Room" />
              <img src="<?php echo $this->getThemePath(); ?>/images/cowork/vibrant_coworking5.jpg" alt="Vibrant Coworking AV" />
          </div>
          <?php
            $a = new Area('Body Content');
            $a->display($c);
        ?>
      </div>
      <div class="container">
          <div class="row">
              <div>
                  <div><img src="<?php echo $this->getThemePath(); ?>/images/cowork/av.png" alt="Audio Visual" /></div>
                  <p>AV/Podcasting Room & Equipment</p>
              </div>
              <div>
                    <div><img src="<?php echo $this->getThemePath(); ?>/images/cowork/meeting.png" alt="Meeting" /></div>
                  <p>Meeting Room</p>
              </div>
              <div>
                  <div><img src="<?php echo $this->getThemePath(); ?>/images/cowork/24_7.png" alt="24/7" /></div>
                  <p>24/7 Access</p>
              </div>
              <div>
                  <div><img src="<?php echo $this->getThemePath(); ?>/images/cowork/lounge.png" alt="Lounge Area" /></div>
                  <p>Lounge Area</p>
              </div>
              <div>
                  <div><img src="<?php echo $this->getThemePath(); ?>/images/cowork/parking.png" alt="Parking" /></div>
                  <p>Parking</p>
              </div>
          </div>
          <div class="row">
              <div>
                  <div><img src="<?php echo $this->getThemePath(); ?>/images/cowork/outdoor.png" alt="Outdoor" /></div>
                  <p>Outdoor & Picnic Seating</p>
              </div>
              <div>
                    <div><img src="<?php echo $this->getThemePath(); ?>/images/cowork/internet.png" alt="Fast Internet" /></div>
                  <p>Fast Internet</p>
              </div>
              <div>
                  <div><img src="<?php echo $this->getThemePath(); ?>/images/cowork/restaurant.png" alt="Restaurant" /></div>
                  <p>Walk to Restaurants</p>
              </div>
              <div>
                  <div><img src="<?php echo $this->getThemePath(); ?>/images/cowork/post-office.png" alt="Post Office" /></div>
                  <p>100 Yards from Post Office</p>
              </div>
              <div>
                  <div><img src="<?php echo $this->getThemePath(); ?>/images/cowork/business.png" alt="Business Consulting" /></div>
                  <p>Business Consulting</p>
              </div>
          </div>
          <div class="row two-col">
              <div>
                <?php
                    $a = new Area('Video Thumb');
                    $a->display($c);
                ?>å
              </div>
              <div>
                <?php
                    $a = new Area('Google Map');
                    $a->display($c);
                ?>
                  
              </div>
          </div>
          <h1>Affordable State-of-the-Art Work Space</h1>
          <div class="row prices">
              <div>
                  <h2>DEDICATED DESKS</h2>
                  <span>$250/mo</span>
                  <p>(7 spots left)</p>
              </div>
              <div>
                  <h2>FLOATING DESKS</h2>
                  <span>$100/mo</span>
                  <p>(6 spots left)</p>
              </div>
              <div>
                  <div class="book">
                      <a href="https://vibrantcreative.wufoo.com/forms/k3z6qz41wx7ygr/" data-lity>BOOK A TOUR <i class="far fa-arrow-alt-circle-right"></i></a>
                  </div>
              </div>
          </div>
      </div>
  </section>
    

<!-- endin of coworking area -->
</div>

<?php $this->inc('elements/footer.php'); ?>

