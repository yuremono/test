$(function(){
  

  // オープニング手描き文字
  let VA =new Vivus('move', {
    type: 'oneByOne',
    duration: 80,
    forceRender: true,
    animTimingFunction: Vivus.EASE
  });

  let $img = $('.masksrc');
  // パスを取得
  let $img_href = $img.attr('href');
  // src属性を空に
  // $img.attr('href', '');
  $img.attr('href', $img_href);
  // 読み込みを監視
  $img.on('load', function() {
    console.log('読み込み完了しました');
    $img.css('opacity', 1);
    $('.opening').css('animation-name','flipping')
    $('.opening__wrapper').delay(3000).queue(function(){
      $(this).css('z-index', -1)
      .dequeue();
    });
  });
  
  // メニューバー
  let $mla = $('.menu__link__all')
  let $mlf = $('.menu__link__food');
  let $mlc = $('.menu__link__cafe');
  let $mlb = $('.menu__link__bar');
  let $mlline = $('.menu__link__line');
  let $nmb = $('.nav__menu__bar');

  // transformの使えるanimate2
  $.fn.animate2 = function (properties, duration, ease) {
    ease = ease || 'ease';
    var $this = this;
    var cssOrig = { transition: $this.css('transition') };
    return $this.queue(next => {
        properties['transition'] = 'all ' + duration + 'ms ' + ease;
        $this.css(properties);
        setTimeout(function () {
            $this.css(cssOrig);
            next();
        }, duration);
    });
  };
  
  $mla.hover(function() {
    $mlline.addClass('first').removeClass('second third fourth');
  }, function() {
    $mlline.removeClass('first');
  });
  $mlf.hover(function() {
    $mlline.addClass('second').removeClass('first third fourth');
  }, function() {
    $mlline.removeClass('second');
  });
  $mlc.hover(function() {
    $mlline.addClass('third').removeClass('first second fourth');
  }, function() {
    $mlline.removeClass('third');
  });
  $mlb.hover(function() {
    $mlline.addClass('fourth').removeClass('first second third');
  }, function() {
    $mlline.removeClass('fourth');
  });
  //////////// タブクリック
  $mla.on('click', function () {
    $(".food__item").hide().removeClass('current').show().addClass('current');
    $mlline.css('transform','translateX(0%)');
    $('.food__headline__title').hide().html('new menu').fadeIn(500);
  });
  $mlf.on('click', function () {
    $(".food__item").hide().removeClass('current');
    $('.food__item.menu_kind-food_item').show().addClass('current');
    $mlline.css('transform','translateX(100%)');
    $('.food__headline__title').hide().html('food menu').fadeIn(500);
  });
  $mlc.on('click', function () {
    $(".food__item").hide().removeClass('current');
    $('.food__item.menu_kind-cafe_item').show().addClass('current');
    $mlline.css('transform','translateX(200%)');
    $('.food__headline__title').hide().html('cafe menu').fadeIn(500);
  });
  $mlb.on('click', function () {
    $(".food__item").hide().removeClass('current');
    $('.food__item.menu_kind-bar_item').show().addClass('current');
    $mlline.css('transform','translateX(300%)');
    $('.food__headline__title').hide().html('bar menu').fadeIn(500);
  });

  // $nmb.on('click', function () {
  //   console.log(12);

  //   window.location.href = '/mature-top/mature-menu/#food';
  //   console.log(12);
    // // URLのハッシュ部分（id）を取得
    // const urlHash = location.hash;
    // // そのidを持つ要素がなかったら処理を抜ける
    // if (!$(urlHash).length) return;
    // console.log(urlHash);
  
    // // アコーディオンの要素を開く処理
    // $(urlHash).find('.food__item').hide().removeClass('current');
    // $(urlHash).find('.food__item.menu_kind-bar_item').show().addClass('current');
    //   $(urlHash).find('.food__headline__title').hide().html('bar menu').fadeIn(500);
      
  // });

  $(function () {
    // URLのハッシュ部分（id）を取得
    const urlHash = location.hash;
    // そのidを持つ要素がなかったら処理を抜ける
    if (!$(urlHash).length) return;
    // console.log(urlHash);
    // menu__linkが発火処理
    $(urlHash).trigger('click');
    // if (urlHash == '#mlb'){
    //   $mlb.trigger('click');
    // }else if(urlHash == '#mlc'){
    //   $mlc.trigger('click');
    // }else if(urlHash == '#mlf'){
    //   $mlf.trigger('click');
    // };
  });
  
  
  
  // ナビ開閉
  $('.nav-toggle').on('click', function(){
    $('.book').toggleClass('open');
    $('.nav__wrapper').toggleClass('open');
  });

  let fvh = $('.fv__bg').outerHeight();
  let fth = $('.footer').outerHeight();
  let doch = $(document).innerHeight(); //ページ全体の高さ
  let winh = $(window).innerHeight();  //ウィンドウの高さ
  
  $(window).on('load scroll', function(){
    
    let scrT = $(window).scrollTop();

    if (scrT < winh /4 ) {
      //メインビジュアル内にいるので、クラスを外す。
      $('.fv__logo').removeClass('scrolled');
    }else {
      //メインビジュアルより下までスクロールしたので、
      $('.fv__logo').addClass('scrolled');
    }
    if (scrT < winh *0.95 ) {
      $('.book').removeClass('scrolled');
      $('.menu__links').removeClass('scrolled');
    }else {
      $('.book').addClass('scrolled');
      $('.menu__links').addClass('scrolled');
    }
    // 背景操作
    if (scrT < winh) {
      $('.main').removeClass('scrolled');
      // $('.main').removeClass('ended');
      $('#about').removeClass('scrolled');
    }else if (scrT < doch - winh - fth ) {
      $('.main').addClass('scrolled');
      $('.main').removeClass('ended');
      $('#about').addClass('scrolled');
      $('#access').removeClass('ended');
    }else {
      $('.main').addClass('ended');
      $('.main').removeClass('scrolled');
      $('#access').addClass('ended');
    }
    // console.log(doch);
    // console.log(scrT);
  });

  // スワイパー
  let mySwiper1 = new Swiper ('.slide1', {
    slidesPerView: 3,
    speed: 0,
    crossFade: true,
    loop: true,
    //  オンオフ
    autoplay: {delay: 3000,},
  });
  let mySwiper2 = new Swiper ('.slide2', {
    slidesPerView: 1,
    speed: 0,
    crossFade: true,
    loop: true,
    //  オンオフ
    autoplay: {delay: 3000,},
    
    // effect: 'creative',
    // spaceBetween: 50,
    // effect: "fade",
    
    //ページネーション表示の設定
    // pagination: { 
    //   // el: '.swiper-pagination', //ページネーションの要素
    //   type: 'bullets', //ページネーションの種類
    //   clickable: true, //クリックに反応させる
    // },
    
    //ナビゲーションボタン（矢印）表示の設定
    // navigation: { 
    //   nextEl: '.swiper-button-next', //「次へボタン」要素の指定
    //   prevEl: '.swiper-button-prev', //「前へボタン」要素の指定
    // },
    
    // creativeEffect: {
    //   prev: {
    //     // will set `translateZ(-400px)` on previous slides
    //     translate: [0, 0, -400],
    //   },
    //   next: {
    //     // will set `translateX(100%)` on next slides
    //     translate: ['100%', 0, 0],
    //   },
    // },
    //スクロールバー表示の設定
    // scrollbar: { 
    //   el: '.swiper-scrollbar', //要素の指定
    // },

  });
  
  // var lazyloadInstance = new LazyLoad({
  //   elements_selector: "img", 
  //   elements_selector: "iframe",
  // });


  // 手書き
  // const svgPath = document.querySelectorAll('.path');

  // const svgText = anime({
  //   targets: svgPath,
  //   loop: true,
  //   direction: 'alternate',
  //   strokeDashoffset: [anime.setDashoffset, 0],
  //   easing: 'easeInOutSine',
  //   duration: 700,
  //   delay: (el, i) => { return i * 500 }
  // });
// 手書き
});