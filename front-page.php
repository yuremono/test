<?php get_header(); ?>


<body >
  <div class="l-container">
  
    <div class="l-frame">
      <!-- <img class="yuyu" src="<?php echo get_stylesheet_directory_uri(); ?>/images/frame-yuremono7t.svg"> -->
      <div class="l-frame__img"></div>
      <div class="l-frame__progress-bar"></div>
    </div>
    
    <main class="l-contents" id="content1">
      <section class="p-top-about large" >
        <div class="p-top-about__lower" id="inj">
          <div class="p-top-about__upper">
            
            <div class="p-top-about__title">
              <h2 class="p-top-about__title__inner inview heading" id="heading">introduce</h2>
            </div>
            <p class="p-top-about__text ">アパレル＞音楽＞接客を経験後、</p>
            <p class="p-top-about__text">一念発起してweb制作の
              <span class="p-top-about__text--dib">学習をしています。</span>
            </p>
            <p class=" p-top-about__tools inview">
              <span class="p-top-about__tool">HTML</span><span class="p-top-about__tool">CSS</span><span class="p-top-about__tool">jQuery</span><span class="p-top-about__tool">wordpress</span>
              <span class="p-top-about__tool">illustrator</span><span class="p-top-about__tool">photoshop</span><span class="p-top-about__tool">VScode</span>
            </p>
            
            <p class="p-top-about__text ">を扱います。</p>
            <p class="p-top-about__text">架空サイトと学習記録を
            
            <span class="p-top-about__text--dib">ぜひご覧ください。</span></p>
          </div>
        </div>
      </section>
      
      <section class="p-top-mature large" >
        <a class="p-top-mature__link inview" href="<?php home_url();?>/mature-top">
          <div class="p-top-mature__window">
            <iframe class="p-top-mature__iframe" src="//yuremono.info/mature-top"  scrolling="no"></iframe>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/iphone-12-pro-medium.png" alt="" class="p-top-mature__phone">
          </div>
        </a>
        <div class="p-top-mature__description">
          <h2 class="p-top-mature__title  inview">cafe site</h2>
          <p class="p-top-mature__text">健康志向のカフェバーをコンセプトに、<br>内装を意識した木目の背景と照明、<br>手作業感を意識しました。</p>
          <h3 class=" label p-top-mature__features inview">features</h3>
          <p class="p-top-mature__text">ページをめくるアニメ<br>不揃いのスライダー（swiper使用）<br>menuページでカテゴリタブ切り替え<br>（wpカスタム投稿）</p>
        </div>
      </section>
      <section class="p-top-records large" >
        <h2 class="p-top-records__heading inview">records</h2>

        <ul class="p-top-records__lists">

          

        <?php if(have_posts()):while(have_posts()):the_post(); ?>

          <li class="p-top-records__list">
            <div class="p-top-records__item">
              <span class="p-top-records__title"><?php the_title(); ?></span>
              <time class="p-top-records__date"><?php the_modified_date(); ?></time>
            </div>
            <div class="p-top-records__text">
                <?php the_content(); ?>
            </div>
          </li>
        <?php endwhile; endif; ?>
          

        </ul>
      </section>
    </main><!-- /#contents -->
  
  </div>
  
<?php get_footer(); ?>
      
