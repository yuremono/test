<?php get_header(); ?>
<?php
/*
Template Name: mature top
*/
?>
<body>
  <div class="opening__wrapper">
    <div class="opening">
      <div class="fv__stamp">
        <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/img/hand-logo-stamp18.svg" alt="">
      </div>
      <!-- 手描き文字 -->
      <div class="fv__mask">
        <svg class="mask" viewBox="0 0 2960 1440" id="move">
          <defs>
            <mask id="clipMask">
              <path class="st3" d="M973.1,596c0,0,12.2,40.6-4.8,95.4c-11.1,35.9-28.6,134.4-28.6,134.4s118.8-262.4,152.2-245.5
              c33.4,17-34.6,251-34.6,251s114.4-217.7,133.2-210.7c31.3,11.7-30.2,189.3,0,204.7c30.2,15.4,64.7-83.2,86.4-125.7
              c21.7-42.4,87.1-79.3,115.6-51.4c24.4,23.9,0.5,42.4,0.5,42.4s-32.9-45.3-87,22.7c-54.1,68-37.9,105-25.5,114.1
              c16.9,12.2,85.4-114.1,85.4-114.1s27.6,4.8,12.2,40.4c-15.4,35.5-27.6,62,1.1,70.5c28.6,8.5,67.4-103.3,72.6-126.2"/>
              <path class="st2" d="M1489,640.1c12.2-25.5,59.6-115.4,52.2-119.2c-7.4-3.7-48.8,104.2-57.8,131.5c-11.4,34.5-46.4,147.4-17.2,166
              c28.8,18.3,66.8-14.8,99.8-86.1l37.5-57.7c0,0-50.5,119.4-15.4,144.9c33.4-3.7,70.4-140,96.5-131c17.2,6-55.1,101.9-16.4,128.3
              c55.1,37.6,103.5-148.5,109.2-190.9c5.3-39.5,8.8,38.1,36.1,52c24.2,31.6-15.4,82.2-14.8,106.6c0.4,19,4.8,39.2,31.3,29.7
              c26.5-9.5,46.1-49.4,55.9-73.8"/>
              <path class="st2" d="M1926.9,758.9c8.5-5.8,113.6-78.6,73.7-111.9c-31.8-26.5-80.1,37.3-91.2,71.6c-14.3,44-23.3,78.9,4.8,100.1
                c36.1,27.3,112.1-42.1,124.1-76.9"/>
              <path class="st2" d="M1444,656.1c13.8,3.7,111.8,12.2,134.4,2.1"/>
            </mask>
          </defs>
        <image class="masksrc" href="<?php echo get_stylesheet_directory_uri(); ?>/img/hand-logo-mask18.svg" width="100%" height="100%" mask="url(#clipMask)"></image>
        </svg>
      </div>
    </div>
  </div>
  <div id="global-container">
    <!-- ロゴ,本,ナビ -->
    <h1 class="fv__logo">
      <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/img/hand-logo-fix18.svg" alt="">
    </h1>
    <div class="book nav-toggle">
      <button class="book__right"></button>
      <button class="book__left">close</button>
      <button class="book__cover">open</button>
    </div>
    <div class="nav__wrapper ">
      <div class="nav__mask nav-toggle"></div>
      <div class="nav__cover"></div>
      <div class="nav">
        <div class="nav__inner">
          <ul class="nav__items">
            <li class="nav__item">
              <a class="nav-toggle" >Top</a>
            </li>
            <li class="nav__item">
              <a class="nav-toggle" href="#about">About</a>
            </li>
            <li class="nav__item nav__menu">
              <a href="<?php home_url();?>/mature-menu">Menu</a>
              <ul class="nav__menu__items">
                <li><a class="nav__menu__item nav__menu__food nav-toggle" href="<?php home_url();?>/mature-menu#mlf">food</a></li>
                <li><a class="nav__menu__item nav__menu__cafe nav-toggle" href="<?php home_url();?>/mature-menu#mlc">cafe</a></li>
                <li><a class="nav__menu__item nav__menu__bar nav-toggle" href="
                <?php home_url();?>/mature-menu#mlb">bar</a></li>
              </ul>
            </li>
            <li class="nav__item"><a href="<?php home_url();?>/recruit">Recruit</a></li>
            <li class="nav__item">
              <a class="nav-toggle" href="#topics">Topics</a>
            </li>
            <li class="nav__item">
              <a class="nav-toggle" href="#access">Access</a>
            </li>
            <li><span class=" nav__text">cafe bar mature<br>health and organic foods </span></li>
          </ul>
          <ul class="nav__SNS">
            <li><a href="#"><i class="nav__fab fab fa-twitter-square"></i></a></li>
            <li><a href="#"><i class="nav__fab fab fa-instagram-square"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- FV -->
    <div class="fv__bg" id="top">
      <p class="fv__text">cafe bar mature<br>health and organic foods </p>
    </div>
    <div class="fv__bottom">
      <a href="#" class="fv__news">
        <h3>news</h3>
        <time datetime="2021-12-27">2021.12.27</time>
        <p>〇〇〇〇〇〇〇〇にて紹介されました</p>
      </a>
      <span class="fv__bottom__scroll">scroll&nbsp;or&nbsp;&rarr;</span>
    </div>
    <!-- メインコンテンツ -->
    <div class="main scrolled">
      
      <section id="about" class="scrolled">
        <!-- <div class="main__news__wrapper"> -->
          <a href="#" class="fv__news main__news">
            <h3>news</h3>
            <time datetime="2021-12-27">2021.12.27</time>
            <p>〇〇〇〇〇〇〇〇にて紹介されました</p>
          </a>
        <!-- </div> -->
        <h2 class="headline">
          <span class="headline__inner">
            <span class="headline__catch">
              health & organic
            </span>
            <span class="headline__title">About</span>
            <span class="headline__mature">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mature_logo_thinline.svg" alt="">
            </span>
          </span>
        </h2>
        
        <div class="about__paper ap1">
          <p class="">〇〇な日々の中に、心地よい〇〇を。<br>
            CAFE BAR MATUREは〇〇なお客様に寄り添う、〇〇な空間とお食事を提供する〇〇の場所です。<br>
            〇〇や〇〇と語らうランチ、〇〇でゆったり過ごす〇〇。<br>
            〇〇で〇〇な、〇〇を感じられる、あなただけの〇〇をお楽しみください。</p>
          </div>
        <div class="about__paper ap2">
          <p class="">〇〇でも〇〇でもおススメの〇〇料理、分け合える〇〇メニュー、<br>
            デザートも〇〇揃えております。<br>
            CAFE BAR MATURE〇〇の、店主こだわりのメニューをご賞味ください。</p>
          <a href="./html/menu.html" class="ap2__btn">
            view&nbsp;menu&nbsp;page
          </a>
        </div>
        <div class="swiper slide1" data-effect="">
          <div class="swiper-wrapper">
        <?php
          $args = array(
            'posts_per_page' => 5, //記事出力数
            'post_type' => 'menu', //カスタム投稿slag
          );
          $the_query = new WP_Query( $args );
          if ( $the_query->have_posts() ) :
            while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <div class="swiper-slide">
              <img class="swiper-img" 
              <?php post_class(); ?>
              src="<?php echo $cfs->get('img'); ?>" alt="<?php the_title(); ?>">
            </div>

        <?php endwhile; ?> <?php wp_reset_postdata(); endif; ?>

          </div>
        </div>
        <div class="swiper slide2" data-effect="">
          <div class="swiper-wrapper">
            
        <?php
          $args = array(
            'posts_per_page' => 5, 
            'post_type' => 'menu', //カスタム投稿slag
            'offset' => 4,
          );
          $the_query = new WP_Query( $args );
          if ( $the_query->have_posts() ) :
            while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

              <div class="swiper-slide">
                <img class="swiper-img" 
                <?php post_class(); ?>
                src="<?php echo $cfs->get('img'); ?>" alt="<?php the_title(); ?>">
              </div>

        <?php endwhile; ?> <?php wp_reset_postdata(); endif; ?>

            <!-- 別の方法 -->
            <!-- <?php
              $posts = get_posts( array('offset' => 4,) );
              if( $posts ) : foreach( $posts as $post ) : setup_postdata( $post );?>
              <?php  ?>

              <?php  ?>
              <?php endforeach; endif; ?> -->

          </div>
        </div>
      </section>
      <!-- トピックス -->
      <aside class="topics__wrapper" id="topics">
        <ul class="topics" id="topics">
          <li class="topics__inner ">
            <a class="topics__img" href="http://#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/owner-img.jpg" alt=""></a>
            <div class="topics__text">
              <p>才色兼備、健康マニアな</p>
              <p><a class="topics__link" href="http://#">店主のTwitterはこちら</a></p>
            </div>
          </li>
          <li class="topics__inner">
            <a class="topics__img" href="http://#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cafe_2shot2.jpg" alt=""></a>
            <div class="topics__text">
              <p>matureでは一緒に働く</p>
              <p>仲間を募集しています</p>
              <p><a class="topics__link" href="http://#">詳しくはこちら</a></p>
            </div>
          </li>
          <li class="topics__inner">
            <a class="topics__img" href="http://#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/parfait_granola.jpg" alt=""></a>
            <div class="topics__text">
              <p>豊富な栄養素</p>
              <p>現代の主食！</p>
              <p><a class="topics__link" href="http://#">オートミールについて</a></p>
            </div>
          </li>
        </ul>
      </aside>
      <!-- アクセス -->
      <section id="access">
        <h2 class="headline access__headline">
          <span class="headline__inner">
            <span class="headline__catch">
              health & organic
            </span>
            <span class="headline__title">Access</span>
            <span class="headline__mature">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mature_logo_thinline.svg" alt="">
            </span>
          </span>
        </h2>
        <div class="access__inner">
          <div class="map__wrapper">
            <iframe class="map" src="//www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12964.686492905003!2d139.7239663!3d35.6727759!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x886ee3d121dd9006!2z6Z2S5bGx5LiA5LiB55uu6aeF!5e0!3m2!1sja!2sjp!4v1642945679532!5m2!1sja!2sjp"  style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
          <dl class="access__info">
            <dt>address</dt>
            <dd>〒150-XXXX<br>
            東京都港区XXXXXXXXXXXXXXXX<br>
            TEL.03-XXXX-XXXX</dd>
            <dt>opening</dt>
            <dd>10:30～21:00（LO 20:30）</dd>
          </dl>
        </div>
      </section>
      <!-- フッター -->
    <footer class="footer">
      <div class="footer__inner">
        <dl class="footer__info">
          <dt>address</dt>
          <dd>〒150-XXXX<br>
          東京都港区XXXXXXXXXXXXXXXX<br>
          TEL.03-XXXX-XXXX</dd>
          <dt>opening</dt>
          <dd>10:30～21:00（LO 20:30）</dd>
        </dl>
        <a class="footer__pagetop" href="#global-container">
          <span class="footer__pagetop__text">page&nbsp;top</span>
        </a>
        <span class="footer__copyright">Copyright&nbsp;&copy;&nbsp;2021&nbsp;mature&nbsp;All&nbsp;Rights&nbsp;Reserved.</span>
        <ul class="footer__SNS">
          <li><span class="footer__SNS__text">SHARE</span></li>
          <li><a href="#"><i class="footer__fab fab fa-twitter-square"></i></a></li>
          <li><a href="#"><i class="footer__fab fab fa-instagram-square"></i></a></li>
          <li><a href="#"><i class="footer__fab fab fa-line"></i></a></li>

        </ul>
        <div class="footer__logo">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/hand-logo-fix18.svg" alt="">
        </div>
      </div>
    </footer>
    <!-- ロゴの揺らぎ用SVGフィルター -->
    <svg class="filters" xmlns="://www.w3.org/2000/svg" version="1.1">
      <filter id="wavy3">
        <feturbulence x="0" y="0" baseFrequency="0.9" numOctaves="2" seed="1"></feturbulence>
        <feDisplacementMap in="SourceGraphic" scale="5" />
      </filter>  
      <filter id="squiggly-0">
        <feTurbulence type="fractalNoise" id="turbulence" baseFrequency="0.02" numOctaves="1" result="noise" seed="1"/>
        <feDisplacementMap id="displacement" in="SourceGraphic" in2="noise" scale="3" />
      </filter>
      <filter id="squiggly-2">
        <feTurbulence type="fractalNoise" id="turbulence" baseFrequency="0.02" numOctaves="1" result="noise" seed="2"/>
        <feDisplacementMap in="SourceGraphic" in2="noise" scale="3" />
      </filter>
      <filter id="squiggly-3">
        <feTurbulence type="fractalNoise" id="turbulence" baseFrequency="0.02" numOctaves="1" result="noise" seed="3"/>
        <feDisplacementMap in="SourceGraphic" in2="noise" scale="3" />
      </filter>
    </svg>
  </div>
  
</div><?php get_footer(); ?>
