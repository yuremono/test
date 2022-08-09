$(function(){

  
  
  let $html = $('html')
  let $body = $("body");
  let $cont = $(".l-contents");
  let scrL = $(window).scrollLeft();
  let $pbar = $(".l-frame__progress_bar");
  let lw = $('.large').width();
  let lnum = $('.large').length;
  let winW = $(window).width();
    
  function conmov(){
    $(".l-contents").mousewheel(function(eo, delta, deltaX, deltaY) {
      $(".l-contents").offset(function(index,posObj){
        let myObj = new Object();
        let msl = lw * lnum - winW + 3;
        myObj.top = 0;
        myObj.left = posObj.left - deltaX + deltaY ;
        
        if ( myObj.left < -msl){ 
          myObj.left = -msl 
        } else if (myObj.left > 0){
          myObj.left = 0
        }
        $pbar.css({
            width: 10 + myObj.left / -msl * 90 + '%'
        });
        return myObj;
      })
    });
  };
  conmov();


  // var startX = null;
	// 	var endX = null;
	// 	window.addEventListener('load', function(){
	// 		// スワイプ／フリック
	// 		document.getElementById("content1").addEventListener('touchmove', logSwipe);
	// 		// タッチ開始
	// 		document.getElementById("content1").addEventListener('touchstart', logSwipeStart);
	// 		// タッチ終了
	// 		document.getElementById("content1").addEventListener('touchend', logSwipeEnd);
	// 	});
	// 	function logSwipeStart(event) {
	// 		event.preventDefault();
	// 		startX = event.touches[0].pageX;
	// 		startY = event.touches[0].pageY;
	// 	}
	// 	function logSwipe(event) {
	// 		event.preventDefault();
	// 		endX = event.touches[0].pageX;
	// 		endY = event.touches[0].pageY;
	// 	}
    
	// 	function logSwipeEnd(event) {
	// 		event.preventDefault();
  //     const amountX = (startX - endX);
  //     const amountY = (startY - endY);

	// 		if( amountX > 100 || amountY > 100 ) {
	// 			console.log(amountX);
	// 			console.log("左向き");
  //       var offset = $('.contents').offset();
  //       console.log(offset);
  //       $(".contents").offset(function(index,posObj){
  //         let myObj = new Object();
  //         let msl = lw * lnum - winW + 3;
  //         myObj.top = 0;
  //         myObj.left = posObj.left - lw ;
          
  //         if ( myObj.left < -msl){ 
  //           myObj.left = -msl 
  //         } else if (myObj.left > 0){
  //           myObj.left = 0
  //         }
  //         return myObj;
  //       })
  //     } else if( amountX < -100 || amountY < -100) {
	// 			console.log(amountX);
  //       console.log("右向き");
  //       var offset = $('.contents').offset();
  //       console.log(offset);
  //       $(".contents").offset(function(index,posObj){
  //         let myObj = new Object();
  //         let msl = lw * lnum - winW + 3;
  //         myObj.top = 0;
  //         myObj.left = posObj.left + lw ;
  //         if ( myObj.left < -msl){ 
  //           myObj.left = -msl 
  //         } else if (myObj.left > 0){
  //           myObj.left = 0
  //         }
  //         return myObj;
  //       })
	// 		} 
  //     else {
  //       console.log(amountX);
	// 		}
	// 	}



  $('.p-top-records').hover(function() {
    $(".l-contents").off();
    console.log(1);
  },function() {
    conmov();
    console.log(2);
  });

  // トグル
  $('.p-top-records__item').on('click', function(){
    $(this).next().toggleClass('open');
    let rtot = $(this).offset().top;
    if ($(".p-top-records__text.open").length == 0) {
      $('.p-top-records')
      // .delay(300)
      .queue(function(){
        $(this).removeClass('open')
        $(this).scrollTop(0)
        .dequeue();
      });
    } else {
      $('.p-top-records').addClass('open');
    }
    if($(this).next().hasClass('open')){
      $('.p-top-records').delay(600).queue(function(){
        $(this).scrollTop($('.p-top-records').scrollTop() + rtot - 20)
        .dequeue();
      });
    };
  });
  
    // $(document).on('touchend','.records__list__title',function(){
    //   $(this).next().toggleClass('open');
    //   let rtot = $(this).offset().top;
    //   if ($(".records__list__text.open").length == 0) {
    //     $('.records')
    //     // .delay(300)
    //     .queue(function(){
    //       $(this).removeClass('open')
    //       $(this).scrollTop(0)
    //       .dequeue();
    //     });
    //   } else {
    //     $('.records').addClass('open');
    //   }
    //   if($(this).next().hasClass('open')){
    //     $('.records').delay(600).queue(function(){
    //       $(this).scrollTop($('.records').scrollTop() + rtot - 20)
    //       .dequeue();
    //     });
    //   };
    // });

  // オブザーバー 着火点となる要素
  const headings = document.querySelectorAll('.inview');
  const options = {
    // rootMargin: "0px  0px 0px",
    threshold: buildThresholdList()
  };
  // 実行するよ
  const observer = new IntersectionObserver(showElements, options);
  // 各 .heading に到達したら発動。複数あるから forEach 使うよ。
  headings.forEach(heading => {
    observer.observe(heading);
  });
  // threshold の設定
  function buildThresholdList() {
    let thresholds = [];
    let numSteps = 20;
    for (let i = 1; i <= numSteps; i++) {
      let ratio = i / numSteps;
      thresholds.push(ratio);
    }
    return thresholds;
  }
  // 要素が表示されたら実行する動作
  function showElements(entries){
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        let ratio = Math.round(entry.intersectionRatio * 100);

        entry.target.style.opacity = `${ratio / 100}`;
        entry.target.style.transform = `translateY(${-25 + ratio / 4}%)`;
      }
    });
  }
  
  
  
}); //おおわく

// gsap.registerPlugin(ScrollTrigger);

// gsap.to('.about__title', { //アニメーションしたい要素を指定
//   x: 800, //横に800px動かす
//   scrollTrigger: {
//     trigger: '.about__title',//アニメーションが始まるトリガーとなる要素
//     start: 'left left', //アニメーションが始まる位置を指定
//     markers: true,
//     horizontal: true,

//   }
// });
// gasp
// .to('.about__title',{
//   x: '70vw',
//   rotation: 360,
//   duration: 3,
  
//   scrollTrigger: {
//     trigger: '.about__title',
//     start: 'left left',
//     end: 'right left',
//     toggleActions: 'play pause resume reset',
//     // toggleActions:
//     //   event: onEnter onLeave onEnterBack onLeaveBack
//     //   default: play none none none
//     markers: true,
//     id: 'box',
//   }
// })
  // $(window).on('load resize', function() {
  // });


// const custom_anime = gsap.timeline({
//   scrollTrigger: {  
//       trigger: left,
//     // end: "+=11000", 
//        scrub: .5, //スクロール量に応じて動かす
//     pin: true, 
//     }
// });
// custom_anime
// gasp
// .to('.about__title',{
//   x: '70vw',
//   rotation: 360,
//   duration: 3,
  
//   scrollTrigger: {
//     trigger: '.about__title',
//     start: 'left left',
//     end: 'right left',
//     toggleActions: 'play pause resume reset',
//     // toggleActions:
//     //   event: onEnter onLeave onEnterBack onLeaveBack
//     //   default: play none none none
//     markers: true,
//     id: 'box',
//   }
// })
// .to(pbar, {
//   width: (scr + winW) / conW * 100 + '%',
//   // if (scr = 0) {$('html').css('overflow', 'hidden');},
//   // xPercent: 100 * ( num - 2 ),  ease: "none",
// }, "<");

// let sections = gsap.utils.toArray(".large");

// gsap.to(sections, {
//   xPercent: -100 * (sections.length - 1),
//   ease: "none",
//   scrollTrigger: {
//     trigger: ".contents",
//     start: "top top",

//     pin: true,
//     scrub: 1,
//     // snap: 1 / (sections.length - 1),
//     snap: { //キリの良い位置へ移動させる
//       snapTo: 1 / ( sections.length - 1 ),
//       duration: 0.1,
//     },
//     // base vertical scrolling on how wide the container is so it feels more natural.
//     end: "+=1500",
//   }
// });


  // transformの使えるanimate2
  // $.fn.animate2 = function (properties, duration, ease) {
  //   ease = ease || 'ease';
  //   var $this = this;
  //   var cssOrig = { transition: $this.css('transition') };
  //   return $this.queue(next => {
  //       properties['transition'] = 'all ' + duration + 'ms ' + ease;
  //       $this.css(properties);
  //       setTimeout(function () {
  //           $this.css(cssOrig);
  //           next();
  //       }, duration);
  //   });
  // };

  //コンテンツの横サイズ
  // var $cont = $('.contents');
  // var contW = $('.small').outerWidth(true) * $('.small').length
  //         + $('.large').outerWidth(true) * $('.large').length;
  // $cont.css('width', contW);
  // //スクロールスピード
  
  

// スクロールをキーに処理を開始
// $(window).scroll(function () {
//   // トップからのスクロール量を取得  
//   let scroll = $(this).scrollTop();
//       $(body).scrollLeft($(body).scrollLeft() * speed);

//   // id="scroll"の要素に取得したスクロール量を表示させる
//   $('.about__text').text("トップからのスクロール量：" + scroll);
// });

  
  //マウスホイールで横移動


  // $(window).mousewheel(function(event, mov) {
  //   //ie firefox
  //   $(this).scrollLeft($(this).scrollLeft() - mov * speed);
  //   //webkit
  //   // $('body').scrollLeft($('body').scrollLeft() - mov * speed);
  //   return false;   //縦スクロール不可
  // });

  // $('.mature__link').each(function () {
  //   var $win = $(window),
  //       // $winH = $win.height(),
  //       $winW = $win.width(),
  //       $connect = $(this),
  //       // position = $connect.offset().top,
  //       position = $connect.offset().left,
  //       current = 0,
  //       scroll;
  //   $win.on('load scroll', function () {
  //     // scroll = $win.scrollTop();
  //     scroll = $win.scrollLeft();

  
  

// $('.progress_bar').css({
//   width:(scroll + $winW) / contW * 100 + '%'
//   });
//     // current = (1 - (position - scroll) / $winH) * 2 * 50;
//     // current = (1 - (position - scroll * 40 ) / $winW) * 1 ;
//     current = ( scroll / $winW) * 100 ;
//     if (current > 19.9) { current = 20; }
//     // if (scroll > position - $winH) {
//     if (scroll > position - $winW) {
//       $connect.css({top: current / 2 + 10 + '%'});
//       // $connect.css({left: current * 2 + '%'});
//       // $connect.css({transform: 'translateX(-50%) rotate(' + (current - 20) + 'deg)'});
//     }
//   });
// });

