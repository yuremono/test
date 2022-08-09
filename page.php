<?php get_header(); ?>

<div id="container" class="wrapper">
  <main>
    <?php if(have_posts()):while(have_posts()):the_post(); ?>
      <article>
        <h1 class="article-title"></h1>
        <div class="text"><?php the_content(); ?></div>
      </article>
    <?php endwhile;endif; ?>
  </main>
  <div id="topicpath">
    <ol>
      <li><a href="index.html">ホーム</a>&gt;</li>
      <li><?php the_title(); ?></li>
    </ol>
  </div>
  <div id="contents">
    <main id="main">
      <h2 class="main__headline"><?php the_title(); ?></h2>
    <?php if(have_posts()):while(have_posts()):the_post(); ?>

      <article class="about px-2">
        <h3><span>●</span>展覧会の趣旨</h3>
        <div class="about__inner">
          <?php the_post_thumbnail(); ?>

          <p><?php the_content(); ?></p>
        </div>
      </article>
    <?php endwhile;endif; ?>

      <article class="about px-2">
        <h3><span>●</span>日本×写真</h3>
        <div class="about__inner">
        <img src="images/pic_exhibition2.jpg" alt="" class="about__img">
          <p>日常生活ではあまり意識しない景色の中から、美しい四季や日本特有の感覚である侘び寂びが感じられる瞬間を、様々な角度から写しだしています。<br>
          作品を通してお気に入りの風景を見つけたり、日本の景色の美しさを感じてください。<br>また、普段の生活で自分だけの日本の風景を発見し、写真に収める喜びにつながれば幸いです。</p>
        </div>
      </article>
    </main>

  <?php get_sidebar(); ?>
</div>

