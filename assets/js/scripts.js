!function(e){"use strict";if(e(window).on("load",function(){e("body").addClass("page-loaded")}),e("body").on("click",".nav-btn",function(o){return e(o.currentTarget).toggleClass("active"),e(".nav-menu").toggleClass("active"),e("body").toggleClass("no-scroll"),!1}),e(window).on("resize.myTemplate",function(){e("body")[e(this).width()<=767?"addClass":"removeClass"]("isMobile")}).trigger("resize.myTemplate"),e("body").on("click",".dropdown>a",function(o){if(e("body.isMobile")[0]){var t=e(o.currentTarget).parents("li"),s=t.hasClass("dropdown-active");return e(".dropdown-active").removeClass("dropdown-active").children("ul").slideUp("slow"),s||(t.addClass("dropdown-active"),t.children("ul").slideDown("slow")),!1}}),e("body").on("mouseenter",".dropdown",function(o){if(!e("body.isMobile")[0]){var t=e(o.currentTarget);t[0].timeOutMenu&&clearTimeout(t[0].timeOutMenu),t.addClass("active")}}).on("mouseleave",".dropdown",function(o){if(!e("body.isMobile")[0]){var t=e(o.currentTarget);t[0].timeOutMenu=setTimeout(function(){t.removeClass("active")},500)}}),e(".accordion__header").click(function(o){o.preventDefault();var t=e(this).hasClass("is-active");e(this).parent(".accordion").find("> *").removeClass("is-active"),1!=t&&(e(this).addClass("is-active"),e(this).next(".accordion__body").addClass("is-active"))}),e(".scene")[0]&&e(".scene").each(function(e,o){new Parallax(o)}),e(window).on("scroll.myTemplat",function(){e(window).scrollTop()>500?e(".to-top").addClass("active"):e(".to-top").removeClass("active")}).trigger("scroll.myTemplat"),e("body").on("click",".to-top",function(o){return e("html, body").animate({scrollTop:0},400),!1}),e(document).ready(function(){e(window).scroll(function(){e(".bottomMenu").each(function(o){var t=e(this).position().top+e(this).outerHeight();e(window).scrollTop()+e(window).height()>t&&e(this).animate({opacity:"1"},500)})})}),e(document).scroll(function(){e(this).scrollTop()>200?e(".bottomManu").fadeIn():e(".bottomManu").fadeOut()}),e(".rx-lazy")[0]&&e(".rx-lazy").rxLazy(),e("#contactform")[0]&&e("body").on("submit","#contactform",function(){var o=e(this).attr("action"),t=e("#message"),s=e("#submit");return t.slideUp(750,function(){t.hide(),s.attr("disabled","disabled"),e.post(o,{name:e("#name").val(),email:e("#email").val(),comments:e("#comments").val()},function(o){document.getElementById("message").innerHTML=o,t.slideDown("slow"),s.removeAttr("disabled"),null!=o.match("success")&&e("#contactform").slideDown("slow")})}),!1}),e(".crossfit-slider")[0]&&e(".crossfit-slider").slick({infinite:!0,slidesToShow:1,slidesToScroll:1,dots:!0,arrows:!0,speed:800,fade:!0,pauseOnHover:!1,cssEase:"ease-in-out",cssEase:"cubic-bezier(0.7, 0, 0.3, 1)",touchThreshold:100,nextArrow:'<span class="slick-arrow-next"><svg width="21" height="35" viewBox="0 0 21 35" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M19.321 15.7709C20.2315 16.6814 20.2316 18.1578 19.321 19.0683L4.48254 33.907C3.57198 34.8176 2.09566 34.8176 1.18508 33.907C0.27451 32.9964 0.2745 31.5201 1.18506 30.6095L14.3748 17.4196L1.18489 4.2299C0.274316 3.31934 0.274306 1.84302 1.18487 0.932447C2.09543 0.0218749 3.57175 0.0218652 4.48232 0.932426L19.321 15.7709Z" /></svg></span>',prevArrow:'<span class="slick-arrow-prev"><svg width="20" height="35" viewBox="0 0 20 35" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M0.682939 19.0686C-0.227635 18.158 -0.227644 16.6817 0.682916 15.7711L15.5214 0.932499C16.4319 0.0219266 17.9083 0.0219115 18.8188 0.932476C19.7294 1.84304 19.7294 3.31936 18.8188 4.22993L5.62911 17.4198L18.819 30.6096C19.7296 31.5201 19.7296 32.9965 18.819 33.907C17.9085 34.8176 16.4322 34.8176 15.5216 33.9071L0.682939 19.0686Z"/></svg></span>',appendArrows:e(".slider-navigation-cover"),appendDots:e(".slider-navigation-cover"),responsive:[{breakpoint:768,settings:{dots:!1,arrows:!1}}]}),e(".fitness-slider")[0]&&e(".fitness-slider").slick({infinite:!0,slidesToShow:1,slidesToScroll:1,dots:!0,arrows:!0,speed:800,fade:!0,pauseOnHover:!1,cssEase:"ease-in-out",cssEase:"cubic-bezier(0.7, 0, 0.3, 1)",touchThreshold:100,nextArrow:'<span class="slick-arrow-next"><svg width="21" height="35" viewBox="0 0 21 35" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M19.321 15.7709C20.2315 16.6814 20.2316 18.1578 19.321 19.0683L4.48254 33.907C3.57198 34.8176 2.09566 34.8176 1.18508 33.907C0.27451 32.9964 0.2745 31.5201 1.18506 30.6095L14.3748 17.4196L1.18489 4.2299C0.274316 3.31934 0.274306 1.84302 1.18487 0.932447C2.09543 0.0218749 3.57175 0.0218652 4.48232 0.932426L19.321 15.7709Z" /></svg></span>',prevArrow:'<span class="slick-arrow-prev"><svg width="20" height="35" viewBox="0 0 20 35" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M0.682939 19.0686C-0.227635 18.158 -0.227644 16.6817 0.682916 15.7711L15.5214 0.932499C16.4319 0.0219266 17.9083 0.0219115 18.8188 0.932476C19.7294 1.84304 19.7294 3.31936 18.8188 4.22993L5.62911 17.4198L18.819 30.6096C19.7296 31.5201 19.7296 32.9965 18.819 33.907C17.9085 34.8176 16.4322 34.8176 15.5216 33.9071L0.682939 19.0686Z"/></svg></span>',appendArrows:e(".slider-navigation-cover"),appendDots:e(".slider-navigation-cover"),responsive:[{breakpoint:768,settings:{dots:!1,arrows:!1}}]}),e(".testimonials-slider")[0]&&e(".testimonials-slider").slick({slidesToShow:1,slidesToScroll:1,arrows:!1,dots:!0,speed:800,fade:!0,touchThreshold:200,cssEase:"cubic-bezier(0.7, 0, 0.3, 1)",autoplay:!0,autoplaySpeed:4500}),e(".best-trainer-slider")[0]&&e(".best-trainer-slider").slick({slidesToShow:5,slidesToScroll:1,arrows:!1,dots:!1,speed:800,touchThreshold:200,cssEase:"cubic-bezier(0.7, 0, 0.3, 1)",autoplay:!0,autoplaySpeed:4500,responsive:[{breakpoint:992,settings:{slidesToShow:4}},{breakpoint:768,settings:{slidesToShow:3}},{breakpoint:481,settings:{slidesToShow:2,slidesToScroll:1}}]}),e(".clients-cover")[0]&&e(".clients-cover").slick({infinite:!0,slidesToShow:6,slidesToScroll:1,arrows:!1,speed:800,touchThreshold:200,cssEase:"cubic-bezier(0.7, 0, 0.3, 1)",autoplay:!0,autoplaySpeed:4500,responsive:[{breakpoint:576,settings:{slidesToShow:3,slidesToScroll:3}}]}),e(".counter-animate.counter-active")[0]&&e(window).on("scroll",function(){var o=e(this).scrollTop(),t=e(this).height();e(".counter-animate.counter-active").each(function(){var s=e(this);if(s.offset().top<o+100+t/2&&s.hasClass("counter-active")){e(".about-info-col .number").each(function(){var o=1,t=e(this).data("number"),s=2e3/t,i=e(this),r=setInterval(function(){o<=t?i.html(o):clearInterval(r),o++},s)}),s.removeClass("counter-active")}})}),e("body").on("click",".btn-sidebar",function(){return e(".sidebar .widgets").toggle("ease"),!1}),e("#clockdiv")[0]){!function(e,o){var t=document.getElementById(e),s=t.querySelector(".days"),i=t.querySelector(".hours"),r=t.querySelector(".minutes"),l=t.querySelector(".seconds");function n(){var e=function(e){var o=Date.parse(e)-Date.parse(new Date),t=Math.floor(o/1e3%60),s=Math.floor(o/1e3/60%60),i=Math.floor(o/36e5%24);return{total:o,days:Math.floor(o/864e5),hours:i,minutes:s,seconds:t}}(o);s.innerHTML=e.days,i.innerHTML=("0"+e.hours).slice(-2),r.innerHTML=("0"+e.minutes).slice(-2),l.innerHTML=("0"+e.seconds).slice(-2),e.total<=0&&clearInterval(a)}n();var a=setInterval(n,1e3)}("clockdiv",new Date(Date.parse(new Date)+1296e6))}if(e(".grid-gallery")[0]){var o=e(".grid-gallery").isotope({itemSelector:".gallery-item",percentPosition:!0,masonry:{columnWidth:".grid-sizer"}});function t(){o.isotope()}e(window).on("load",t).on("resize",t)}if(e("[data-fancybox]")[0]&&e("[data-fancybox]").fancybox({loop:!0,infobar:!1,transitionEffect:"tube",buttons:["close"]}),e(".google-map")[0]){s={zoom:11,center:new google.maps.LatLng(40.6501038,-73.9495823),mapTypeControl:!1,fullscreenControl:!1,scalecontrol:!1,zoomControl:!1,streetViewControl:!1,rotateControl:!1,styles:[{featureType:"all",elementType:"labels.text.fill",stylers:[{saturation:36},{color:"#000000"},{lightness:40}]},{featureType:"all",elementType:"labels.text.stroke",stylers:[{visibility:"on"},{color:"#000000"},{lightness:16}]},{featureType:"all",elementType:"labels.icon",stylers:[{visibility:"off"}]},{featureType:"administrative",elementType:"geometry.fill",stylers:[{color:"#000000"},{lightness:20}]},{featureType:"administrative",elementType:"geometry.stroke",stylers:[{color:"#000000"},{lightness:17},{weight:1.2}]},{featureType:"landscape",elementType:"geometry",stylers:[{color:"#000000"},{lightness:20}]},{featureType:"poi",elementType:"geometry",stylers:[{color:"#000000"},{lightness:21}]},{featureType:"road.highway",elementType:"geometry.fill",stylers:[{color:"#000000"},{lightness:17}]},{featureType:"road.highway",elementType:"geometry.stroke",stylers:[{color:"#000000"},{lightness:29},{weight:.2}]},{featureType:"road.arterial",elementType:"geometry",stylers:[{color:"#000000"},{lightness:18}]},{featureType:"road.local",elementType:"geometry",stylers:[{color:"#000000"},{lightness:16}]},{featureType:"transit",elementType:"geometry",stylers:[{color:"#000000"},{lightness:19}]},{featureType:"water",elementType:"geometry",stylers:[{color:"#000000"},{lightness:17}]}]},i=document.getElementById("map"),r=new google.maps.Map(i,s),new google.maps.Marker({position:new google.maps.LatLng(40.6401038,-73.9495823),map:r,icon:"assets/img/map-point.png"})}var s,i,r}(jQuery);