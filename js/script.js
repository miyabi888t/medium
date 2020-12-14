


    //Q&A アコーディオン
    jQuery(function() {
      jQuery("#acMenu dt").on("click", function() {
        jQuery(this).next().slideToggle();
        jQuery(this).children('.ac-icon').toggleClass('ac-minus');
            });
        });

   //swiper
    new Swiper( '.swiper-container', {
        speed: 400,
        spaceBetween: 22,
        width: 275,
        loop: true,
        loopedSlides: 6,
    pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true,
    },
    breakpoints: {
      768: {
		spaceBetween: 40,
		width: 400,
      }
    }
  });


//drawer
    jQuery(document).ready(function() {
    jQuery('.drawer').drawer();
  });


//トップへ戻るボタン
  jQuery(window).on("scroll", function(jQuery) {
  if (jQuery(this).scrollTop() > 100) {
    jQuery('.floating').show();
  } else {
    jQuery('.floating').hide();
  }
});

jQuery('.floating').click(function () {
  jQuery('body,html').animate({
    scrollTop: 0
  }, 500);
  return false;
});


//セクション移動
jQuery('a[href^="#"]').click(function() {
  // 移動速度を指定（ミリ秒）
  let speed = 300;
  // hrefで指定されたidを取得
  let id = jQuery(this).attr("href");
  // idの値が#のみだったらターゲットをhtmlタグにしてトップへ戻るようにする
  let target = jQuery("#" == id ? "html" : id);
  // ページのトップを基準にターゲットの位置を取得
  let position = jQuery(target).offset().top;
  // ターゲットの位置までspeedの速度で移動
  jQuery("html, body").animate(
    {
      scrollTop: position
    },
    speed
  );
  return false;
});

 
//ドロワー用 きちんとドロワーが閉じるように
jQuery(function (jQuery) {
  jQuery('.drawer-menu-item').on('click', function () {
    if (window.innerWidth <= 768) {
      jQuery('.drawer-toggle').click();
    }
  });
});

