$(function(){
   // .mobile_nav
   var $dropButton = $('.m_hamburger').find('a'),
      $dropBar = $dropButton.find('span'),
      $mobileNav = $('#mobile_nav');

      $dropButton.removeAttr('href');
      $dropButton.click(function(){
         $mobileNav.toggleClass('open');
         if($mobileNav.hasClass('open')){
            $(this).addClass('active');
            $mobileNav.animate({left:0},300,'linear');
            $(this).find('span').css({background:'#000'});
         }else{
            $(this).removeClass('active');
            $mobileNav.animate({left:-300},300,'linear');
            $(this).find('span').css({background:'#fff'});
         }
      });
   
   

   // footer ()
   $('#footer h3').click(function(){
      $(this).next().slideToggle();
      $(this).parent().siblings().children('ul').slideUp();
   });

   

   // visual slide
   var slideWrap = $('#visual'),
      slideGroup = slideWrap.find('.frame_area'),
      slide = slideGroup.find('li'),
      slideCount = slide.length,
      indicator = slideWrap.find('.indicator'),
      indicatorHtml = '',
      currentIndex = 0,
      auto;

   slide.each(function(e){
      $(this).css({left:e * 100 + '%'});
      
      indicatorHtml += '<a href="#none" title="">'+(e+1)+'</a>';
      $('.indicator').html(indicatorHtml);
   });

   indicator.find('a').eq(0).addClass('active');
   function goToSlide(index){
      slideGroup.animate({left : index * -100 + '%'},500,'linear');
      currentIndex = index;
         
      indicator.find('a').removeClass('active').eq(index).addClass('active');
      
   }

   indicator.find('a').click(function(i){
      i.preventDefault();
      var cli = $(this).index();
      goToSlide(cli);
   });
   
   function startSlide(){
      auto = setInterval(function(){
         var nextSlide = (currentIndex+1) % slideCount;
         goToSlide(nextSlide);
      },7000);
   }
   startSlide();
   function stopSlide(){
      clearInterval(auto);
   }

   slideGroup.mouseenter(function(){
      stopSlide();
   }).mouseleave(function(){
      startSlide();
   });

   // productBtn
   var product = $('#product'),
      productBtn = product.find('.product_btn'),
      productBtnInn = productBtn.find('a');

   productBtn.click(function(){
      product.toggleClass('open');
      if(product.hasClass('open')){
         productBtnInn.addClass('active');
      }else{ 
         productBtnInn.removeClass('active');
      }
   });

   // pro_sel:tap
   var tapAnchor  = $('.sellec_btn p'),
      tapPanelWrap = $('.sellection .sel'),
      tapPanel = tapPanelWrap.find('ul');

   tapPanel.each(function(i){
      $(this).css({left:i*100+'%'});
   });

   tapAnchor.click(function(e){
      e.preventDefault();
      tapAnchor.removeClass('active');
      $(this).addClass('active');

      var tapAnchorIndex = $(this).index();

      tapSlide(tapAnchorIndex);
   });
   function tapSlide(i){
      tapPanelWrap.animate({left:i*(-100)+'%'});
   }
   tapAnchor.eq(0).trigger('click');// tapAnchor 첫번째 객체

   var excuted = false;

   // pro_col
   var productColumn = $('#pro_col'),
      slideColumn = productColumn.find('ul'),
      proIndicator = productColumn.find('.pro_indicator p'),
      proNav = productColumn.find('.arrow'),
      proNavA = proNav.find('a'),
      current = 0;

   proSlide(0);
   function proSlide(i){
      slideColumn.animate({left:i*-100+'%'});
      proIndicator.removeClass('active').eq(i).addClass('active');
      current = i;
      upDateNav();
   }

   function upDateNav(){
      var proPrev = proNav.find('.prev'),
         proNext = proNav.find('.next');
      
      if(current == 0){
         proPrev.addClass('disable');
      }else{
         proPrev.removeClass('disable');
      }

      if(current == 1){
         proNext.addClass('disable');
      }else{
         proNext.removeClass('disable');
      }
   }

   proNav.find('.prev').click(function(){
      proSlide(current -1);
   });
   proNav.find('.next').click(function(){
      proSlide(current +1);
   });
   upDateNav();

   // window.scroll
   $(window).scroll(function(){
      var experience = $('#experience'),
         experienceOffset = experience.offset().top - 200;
         experienceDesc = experience.find('.desc'),
         
         logo = $('h1');

         // headerScroll
         if($(window).scrollTop()> 30){
            $('nav').addClass('active');
            logo.find('img').attr('src','img/fa.SVG');

            $('#headerInfo').slideUp(300);
         }else{
            $('nav').removeClass('active');
            logo.find('img').attr('src','img/logo.SVG');

            $('#headerInfo').slideDown(300);
         }

         if(!excuted){
            if($(this).scrollTop() > experienceOffset){
               $({percent : 55}).animate({percent : 50},{
                  duration:2000,
                  progress:function(){
                     var now = this.percent;
                     experienceDesc.css({top: now+'%',opacity:1});
                  }
               });
               excuted = true;
            }//if
         }// excuted if
   });

   // responsive
   var headerInfo = $('#headerInfo');
   $(window).resize(function(){
      if($(this).width()<=1024){
         headerInfo.css({display:'none'});
      }else{
         headerInfo.css({display:'block'});
      }
   });

});