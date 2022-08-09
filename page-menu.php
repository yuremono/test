<?php get_header(); ?>
<?php
/*
Template Name: mature menu
*/
?>
<body>
  <div class="opening__wrapper">
    <div class="opening">
      <div class="fv__stamp">
        <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/img/hand-logo-stamp18.svg" alt="">
      </div>
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
    <!-- 固定パーツ -->
    <h2 class="fv__logo menu__fv__logo">
      <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/img/hand-logo-fix18.svg" alt="">
    </h2>
    <div class="book menu__book nav-toggle">
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
              <a class="nav-toggle" href="<?php home_url();?>/mature-top">Top</a>
            </li>
            <li class="nav__item">
              <a class="nav-toggle" href="<?php home_url();?>/mature-top#about">About</a>
            </li>
            <li class="nav__item nav__menu">
              <a class="nav-toggle" href="#food">Menu</a>
              <ul class="nav__menu__items">
                <li><a class="nav__menu__item nav__menu__food nav-toggle" href="#food">food</a></li>
                <li><a class="nav__menu__item nav__menu__cafe nav-toggle" href="#food">cafe</a></li>
                <li><a class="nav__menu__item nav__menu__bar nav-toggle" href="#food">bar</a></li>
              </ul>
            </li>
            <li class="nav__item"><a href="<?php home_url();?>/recruit">Recruit</a></li>
            <li class="nav__item">
              <a class="nav-toggle" href="<?php home_url();?>/mature-top#topics">Topics</a>
            </li>
            <li class="nav__item">
              <a class="nav-toggle" href="<?php home_url();?>/mature-top#access">Access</a>
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
    <div class="fv__bg menu__fv__bg">
      <div class="circle__wrapper">
        <div class="fv__circle">
          <div class="fv__img ">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/oats_fruit_yogurt.png" alt="">
          </div>
          <div class="fv__img fv__img--2nd">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/latte_art.png" alt="">
          </div>
          <div class="fv__img fv__img--3rd">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cosmopolitan_cocktail.png" alt="">
          </div>
          <div class="fv__img ">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Pasta_alla_Norma.png" alt="">
          </div>
          
        </div></div>
        <div class="circle__wrapper__over"></div>
        <p class="menu__fv__text fv__text">cafe bar mature<br>health and organic foods </p>
      </div>
    <div class="fv__bottom menu__fv__bottom" id="menu">
      <div class="fv__bottom__inner">
        <h1 class="headline menu__headline">
          <span class="headline__inner menu__headline__inner">
            <span class="headline__catch">
              health & organic
            </span>
            <span class="headline__title menu__headline__title">Menu</span>
            <!-- <span class="headline__mature">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mature_logo_thinline.svg" alt="">
            </span> -->
          </span>
        </h1>
        <!-- タブメニュー -->
        <span class="menu__link__line"></span>
        <ul class="menu__links">
          <li class="menu__link__all"><span>all</span></li>
          <li class="menu__link__food" id="mlf"><span>food menu</span></li>
          <li class="menu__link__cafe" id="mlc"><span>cafe menu</span></li>
          <li class="menu__link__bar" id="mlb"><span>bar menu</span></li>
        </ul>
      </div>
    </div>
    <!-- メインコンテンツ -->
    <div class="main scrolled menu__cont">

      <section id="food">

        <h2 class="headline food__headline">
          <span class="headline__inner food__headline__inner">
            <span class="headline__title food__headline__title">new menu</span>
            <span class="headline__mature">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mature_logo_thinline.svg" alt="">
            </span>
          </span>
        </h2>
        <p class="food__text">
          <span class="food__text__inner">
          〇〇で〇〇なメニューをはじめとした、〇〇のメニューです。<br></span>
          <span class="food__text__inner">
            ※期間中であっても、予告なく販売終了する場合がございます。</span>
        </p>
        <ul class="food__items">
          <!-- <a href="images/image-1.jpg" data-lightbox="image-1" data-title="My caption">Image #1</a> -->
          
          <?php
            $args = array(
              'post_type' => 'menu', //カスタム投稿slag
            );
            $the_query = new WP_Query( $args );
            if ( $the_query->have_posts() ) :
              while ( $the_query->have_posts() ) : $the_query->the_post();
          ?>

          <li <?php post_class('food__item'); ?>>
            <a class="food__link" href="<?php echo $cfs->get('img'); ?>" data-lightbox="image-1" data-title="My caption">
              <img loading="lazy" src="<?php echo $cfs->get('img'); ?>">
            </a>
            <p><?php the_title(); ?></p> <p class="food__item__price">&yen;<?php echo $cfs->get('price'); ?></p>
          </li>

          <?php endwhile; ?> <?php wp_reset_postdata(); endif; ?>
      
          <!-- 他の方法 -->
          <!-- <?php global $post;
            $args = array( 'posts_per_page' => 8 );
            $myposts = get_posts( $args );
            foreach( $myposts as $post ) { setup_postdata($post);  ?>
            <li <?php post_class('food__item'); ?>>
              <a href="" data-lightbox="image-1" data-title="My caption">
                <img src="<?php echo $cfs->get('img'); ?>">
              </a>
              <p><?php the_title(); ?></p> <p class="food__item__price">￥1,000</p>
          </li>
          <?php          }          wp_reset_postdata();?> -->

        </ul>
    
      </section>
      <!-- フッター -->
    </div>
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
  </div>

<?php get_footer(); ?>
