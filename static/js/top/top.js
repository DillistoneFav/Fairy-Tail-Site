/*!
 * core-js@2.6.9 (MIT)
 *   url: git+https://github.com/zloirock/core-js.git
 *
 *   Copyright (c) 2014-2019 Denis Pushkarev
 *
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *   of this software and associated documentation files (the "Software"), to deal
 *   in the Software without restriction, including without limitation the rights
 *   to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *   copies of the Software, and to permit persons to whom the Software is
 *   furnished to do so, subject to the following conditions:
 *
 *   The above copyright notice and this permission notice shall be included in
 *   all copies or substantial portions of the Software.
 *
 *   THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *   IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *   FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *   AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *   LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *   OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 *   THE SOFTWARE.
 *
 *
 *
 * babel-runtime@6.26.0 (MIT)
 *   author: Sebastian McKenzie
 *   url: https://github.com/babel/babel/tree/master/packages/babel-runtime
 *
 *
 */
!function(t){var e={};function n(i){if(e[i])return e[i].exports;var r=e[i]={i:i,l:!1,exports:{}};return t[i].call(r.exports,r,r.exports,n),r.l=!0,r.exports}n.m=t,n.c=e,n.d=function(t,e,i){n.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:i})},n.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},n.t=function(t,e){if(1&e&&(t=n(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var i=Object.create(null);if(n.r(i),Object.defineProperty(i,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var r in t)n.d(i,r,function(e){return t[e]}.bind(null,r));return i},n.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return n.d(e,"a",e),e},n.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},n.p="",n(n.s=14)}([function(t,e){var n=t.exports={version:"2.6.9"};"number"==typeof __e&&(__e=n)},function(t,e,n){t.exports=!n(6)((function(){return 7!=Object.defineProperty({},"a",{get:function(){return 7}}).a}))},function(t,e,n){"use strict";e.__esModule=!0,e.default=function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}},function(t,e,n){"use strict";e.__esModule=!0;var i=function(t){return t&&t.__esModule?t:{default:t}}(n(41));e.default=function(){function t(t,e){for(var n=0;n<e.length;n++){var r=e[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),(0,i.default)(t,r.key,r)}}return function(e,n,i){return n&&t(e.prototype,n),i&&t(e,i),e}}()},function(t,e){var n=t.exports="undefined"!=typeof window&&window.Math==Math?window:"undefined"!=typeof self&&self.Math==Math?self:Function("return this")();"number"==typeof __g&&(__g=n)},function(t,e){t.exports=function(t){return"object"==typeof t?null!==t:"function"==typeof t}},function(t,e){t.exports=function(t){try{return!!t()}catch(t){return!0}}},function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var i=o(n(2)),r=o(n(3));function o(t){return t&&t.__esModule?t:{default:t}}var u=function(){function t(){throw(0,i.default)(this,t),new Error("this class is static")}return(0,r.default)(t,null,[{key:"init",value:function(){if(this.initialized)return!1;this.initialized=!0,jQuery.easing.easeInOutQuart=function(t,e,n,i,r){return(e/=r/2)<1?i/2*e*e*e*e+n:-i/2*((e-=2)*e*e*e-2)+n},this.$scrollObj=$("body, html"),this.registEvents()}},{key:"scrollTo",value:function(t,e,n){var i=this;if(this.isScrolling)return!1;var r=n||this.DEFAULT_SCROLL_DURATION;this.callbackEvent=e||null,this.isScrolling=!0,$("body, html").stop().animate({scrollTop:t},r,"swing",(function(){-1!==i.ua.indexOf("ipod")&&-1!==i.ua.indexOf("iphone")&&-1!==i.ua.indexOf("android")||i.scrollEnd()})),-1===this.ua.indexOf("ipod")&&-1===this.ua.indexOf("iphone")&&-1===this.ua.indexOf("android")||setTimeout((function(){i.scrollEnd()}),r)}},{key:"scrollEnd",value:function(){this.isScrolling=!1,$(window).trigger("scroll"),this.callbackEvent&&(this.callbackEvent(),this.callbackEvent=null)}},{key:"registEvents",value:function(){var t=this;window.addEventListener("scroll",(function(){t.scrollTop=window.pageYOffset,t.scrollLeft=window.pageXOffset}),!1),window.addEventListener("resize",(function(){t.updateScrollTrigger(),t.updateDocumentHeight()}),!1),this.updateScrollTrigger()}},{key:"updateDocumentHeight",value:function(){this.documentHeight=document.documentElement.scrollHeight||document.body.scrollHeight}},{key:"updateScrollTrigger",value:function(){this.scrollTrigger=$(window).width()<768?$(window).height()/3*2:$(window).height()/4*3}}]),t}();u.ua=navigator.userAgent.toLowerCase(),u.$scrollObj="",u.initialized=!1,u.scrollTop=0,u.scrollLeft=0,u.documentHeight=document.documentElement.scrollHeight||document.body.scrollHeight,u.isScrolling=!1,u.scrollTrigger=0,u.DEFAULT_SCROLL_DURATION=600,e.default=u},function(t,e){t.exports=function(t){if(null==t)throw TypeError("Can't call method on  "+t);return t}},function(t,e){var n={}.hasOwnProperty;t.exports=function(t,e){return n.call(t,e)}},function(t,e,n){var i=n(22),r=n(8);t.exports=function(t){return i(r(t))}},function(t,e){var n=Math.ceil,i=Math.floor;t.exports=function(t){return isNaN(t=+t)?0:(t>0?i:n)(t)}},function(t,e,n){var i=n(4),r=n(0),o=n(33),u=n(35),s=n(9),a=function(t,e,n){var c,l,f,d=t&a.F,h=t&a.G,p=t&a.S,v=t&a.P,y=t&a.B,g=t&a.W,b=h?r:r[e]||(r[e]={}),m=b.prototype,S=h?i:p?i[e]:(i[e]||{}).prototype;for(c in h&&(n=e),n)(l=!d&&S&&void 0!==S[c])&&s(b,c)||(f=l?S[c]:n[c],b[c]=h&&"function"!=typeof S[c]?n[c]:y&&l?o(f,i):g&&S[c]==f?function(t){var e=function(e,n,i){if(this instanceof t){switch(arguments.length){case 0:return new t;case 1:return new t(e);case 2:return new t(e,n)}return new t(e,n,i)}return t.apply(this,arguments)};return e.prototype=t.prototype,e}(f):v&&"function"==typeof f?o(Function.call,f):f,v&&((b.virtual||(b.virtual={}))[c]=f,t&a.R&&m&&!m[c]&&u(m,c,f)))};a.F=1,a.G=2,a.S=4,a.P=8,a.B=16,a.W=32,a.U=64,a.R=128,t.exports=a},function(t,e,n){var i=n(36),r=n(37),o=n(39),u=Object.defineProperty;e.f=n(1)?Object.defineProperty:function(t,e,n){if(i(t),e=o(e,!0),i(n),r)try{return u(t,e,n)}catch(t){}if("get"in n||"set"in n)throw TypeError("Accessors not supported!");return"value"in n&&(t[e]=n.value),t}},function(t,e,n){"use strict";(function(t){return t&&t.__esModule?t:{default:t}})(n(15)).default.init()},function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var i=c(n(16)),r=c(n(2)),o=c(n(3)),u=c(n(44)),s=c(n(7)),a=c(n(45));function c(t){return t&&t.__esModule?t:{default:t}}var l=function(){function t(){throw(0,r.default)(this,t),new Error("this class is static")}return(0,o.default)(t,null,[{key:"init",value:function(){var t=this;if(this.initialized)return!1;this.initialized=!0,s.default.init(),$(".bg-video").YTPlayer(),u.default.setCallback((function(){var e=0;location.hash&&(t.hash=location.hash,$(t.hash).length>0&&(e=$(t.hash).offset().top)),s.default.scrollTo(e,(function(){u.default.hide(),t.registEvents(),t.start()}),100)})),u.default.init()}},{key:"start",value:function(){a.default.init(document.querySelectorAll(".js-section-anime"));for(var t=DEVICE.isPc?.05:.1,e=DEVICE.isPc?.005:.01,n=document.querySelectorAll(".battle-wrapper .slide-area"),i=0;i<n.length;i++)this.battleSlides[i]={obj:n[i],moveVal:t+i*e,posX:Math.floor(100*Math.random())};n=document.querySelectorAll(".story-wrapper .slide-area");for(var r=0;r<n.length;r++)this.storySlides[r]={obj:n[r],moveVal:t+r*e,posX:Math.floor(100*Math.random())};for(var o=document.querySelectorAll(".section-border"),u=0;u<o.length;u++)u%2==0?o[u].classList.add("border-reverse"):o[u].classList.add("border-straight");document.querySelector(".bnr-area").classList.add("anime"),this.updateh2BorderPos(),"ja"!==document.body.id&&"tw"!==document.body.id&&"kr"!==document.body.id||(this.moveSectionSlide(),"ja"===document.body.id&&(document.querySelector(".song-area").classList.add("anime"),this.topMainAnimation()))}},{key:"topMainAnimation",value:function(){document.querySelector(".main-adomi").classList.add("anime"),document.querySelector(".main-alice").classList.add("anime"),document.querySelector(".main-overlay").classList.add("anime"),document.querySelector(".left-chara").classList.add("anime"),document.querySelector(".right-chara").classList.add("anime"),document.querySelector(".main-bg-inner").classList.add("anime"),document.querySelector("header").classList.add("anime"),document.querySelector(".text.catch.sp").classList.add("anime"),document.querySelector(".main-inner h1").classList.add("anime")}},{key:"moveSectionSlide",value:function(){for(var t=0;t<(0,i.default)(this.battleSlides).length;t++){this.battleSlides[t].posX+=this.battleSlides[t].moveVal,this.battleSlides[t].posX>=100&&(this.battleSlides[t].posX=-10);var e=this.battleSlides[t].posX-100;this.battleSlides[t].obj.style.transform="translate3d("+this.battleSlides[t].posX+"vw, 0, 0) translate3d("+e+"%, 0, 0)"}for(var n=0;n<(0,i.default)(this.storySlides).length;n++){this.storySlides[n].posX+=this.storySlides[n].moveVal,this.storySlides[n].posX>=100&&(this.storySlides[n].posX=-10);var r=this.storySlides[n].posX-100;this.storySlides[n].obj.style.transform="translate3d("+this.storySlides[n].posX+"vw, 0, 0) translate3d("+r+"%, 0, 0)"}window.requestAnimationFrame(this.moveSectionSlide.bind(this))}},{key:"updateh2BorderPos",value:function(){if(this.bgPos+=.5,"ja"===document.body.id){var t=document.querySelector(".battle .h2 h2");t.style.backgroundPosition="-"+this.bgPos+"px -"+this.bgPos+"px, "+this.bgPos+"px 0px",(t=document.querySelector(".story .h2 h2")).style.backgroundPosition="-"+this.bgPos+"px -"+this.bgPos+"px, "+this.bgPos+"px 0px",document.querySelector("#loading h1").style.backgroundPosition="-"+this.bgPos+"px -"+this.bgPos+"px, "+this.bgPos+"px 0px"}document.querySelector(".battle .btn-inner p").style.backgroundPosition=50*this.bgPos+"px",document.querySelector(".story .btn-inner p").style.backgroundPosition=50*this.bgPos+"px",window.requestAnimationFrame(this.updateh2BorderPos.bind(this))}},{key:"registEvents",value:function(){document.querySelector(".select-btn").addEventListener("click",(function(){document.querySelector(".select-language").classList.toggle("open")}),!1),$(document).bind("cbox_open",(function(){a.default.isActive=!1})),$(document).bind("cbox_closed",(function(){a.default.isActive=!0}))}}]),t}();l.initialized=!1,l.battleSlides={},l.storySlides={},l.bgPos=0,e.default=l},function(t,e,n){t.exports={default:n(17),__esModule:!0}},function(t,e,n){n(18),t.exports=n(0).Object.keys},function(t,e,n){var i=n(19),r=n(20);n(32)("keys",(function(){return function(t){return r(i(t))}}))},function(t,e,n){var i=n(8);t.exports=function(t){return Object(i(t))}},function(t,e,n){var i=n(21),r=n(31);t.exports=Object.keys||function(t){return i(t,r)}},function(t,e,n){var i=n(9),r=n(10),o=n(24)(!1),u=n(27)("IE_PROTO");t.exports=function(t,e){var n,s=r(t),a=0,c=[];for(n in s)n!=u&&i(s,n)&&c.push(n);for(;e.length>a;)i(s,n=e[a++])&&(~o(c,n)||c.push(n));return c}},function(t,e,n){var i=n(23);t.exports=Object("z").propertyIsEnumerable(0)?Object:function(t){return"String"==i(t)?t.split(""):Object(t)}},function(t,e){var n={}.toString;t.exports=function(t){return n.call(t).slice(8,-1)}},function(t,e,n){var i=n(10),r=n(25),o=n(26);t.exports=function(t){return function(e,n,u){var s,a=i(e),c=r(a.length),l=o(u,c);if(t&&n!=n){for(;c>l;)if((s=a[l++])!=s)return!0}else for(;c>l;l++)if((t||l in a)&&a[l]===n)return t||l||0;return!t&&-1}}},function(t,e,n){var i=n(11),r=Math.min;t.exports=function(t){return t>0?r(i(t),9007199254740991):0}},function(t,e,n){var i=n(11),r=Math.max,o=Math.min;t.exports=function(t,e){return(t=i(t))<0?r(t+e,0):o(t,e)}},function(t,e,n){var i=n(28)("keys"),r=n(30);t.exports=function(t){return i[t]||(i[t]=r(t))}},function(t,e,n){var i=n(0),r=n(4),o=r["__core-js_shared__"]||(r["__core-js_shared__"]={});(t.exports=function(t,e){return o[t]||(o[t]=void 0!==e?e:{})})("versions",[]).push({version:i.version,mode:n(29)?"pure":"global",copyright:"© 2019 Denis Pushkarev (zloirock.ru)"})},function(t,e){t.exports=!0},function(t,e){var n=0,i=Math.random();t.exports=function(t){return"Symbol(".concat(void 0===t?"":t,")_",(++n+i).toString(36))}},function(t,e){t.exports="constructor,hasOwnProperty,isPrototypeOf,propertyIsEnumerable,toLocaleString,toString,valueOf".split(",")},function(t,e,n){var i=n(12),r=n(0),o=n(6);t.exports=function(t,e){var n=(r.Object||{})[t]||Object[t],u={};u[t]=e(n),i(i.S+i.F*o((function(){n(1)})),"Object",u)}},function(t,e,n){var i=n(34);t.exports=function(t,e,n){if(i(t),void 0===e)return t;switch(n){case 1:return function(n){return t.call(e,n)};case 2:return function(n,i){return t.call(e,n,i)};case 3:return function(n,i,r){return t.call(e,n,i,r)}}return function(){return t.apply(e,arguments)}}},function(t,e){t.exports=function(t){if("function"!=typeof t)throw TypeError(t+" is not a function!");return t}},function(t,e,n){var i=n(13),r=n(40);t.exports=n(1)?function(t,e,n){return i.f(t,e,r(1,n))}:function(t,e,n){return t[e]=n,t}},function(t,e,n){var i=n(5);t.exports=function(t){if(!i(t))throw TypeError(t+" is not an object!");return t}},function(t,e,n){t.exports=!n(1)&&!n(6)((function(){return 7!=Object.defineProperty(n(38)("div"),"a",{get:function(){return 7}}).a}))},function(t,e,n){var i=n(5),r=n(4).document,o=i(r)&&i(r.createElement);t.exports=function(t){return o?r.createElement(t):{}}},function(t,e,n){var i=n(5);t.exports=function(t,e){if(!i(t))return t;var n,r;if(e&&"function"==typeof(n=t.toString)&&!i(r=n.call(t)))return r;if("function"==typeof(n=t.valueOf)&&!i(r=n.call(t)))return r;if(!e&&"function"==typeof(n=t.toString)&&!i(r=n.call(t)))return r;throw TypeError("Can't convert object to primitive value")}},function(t,e){t.exports=function(t,e){return{enumerable:!(1&t),configurable:!(2&t),writable:!(4&t),value:e}}},function(t,e,n){t.exports={default:n(42),__esModule:!0}},function(t,e,n){n(43);var i=n(0).Object;t.exports=function(t,e,n){return i.defineProperty(t,e,n)}},function(t,e,n){var i=n(12);i(i.S+i.F*!n(1),"Object",{defineProperty:n(13).f})},function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var i=o(n(2)),r=o(n(3));function o(t){return t&&t.__esModule?t:{default:t}}o(n(7));var u=function(){function t(){(0,i.default)(this,t)}return(0,r.default)(t,null,[{key:"init",value:function(){this.registEvents()}},{key:"registEvents",value:function(){var t=this;window.addEventListener("load",(function(){t.callbackEvent?(t.callbackEvent(),t.callbackEvent=null):t.target.classList.add("hide")}),!1)}},{key:"setCallback",value:function(t){this.callbackEvent=t||null}},{key:"hide",value:function(){this.target&&this.target.classList.add("hide")}}]),t}();u.target=document.querySelectorAll("#loading")[0],e.default=u},function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var i=u(n(2)),r=u(n(3)),o=u(n(7));function u(t){return t&&t.__esModule?t:{default:t}}var s=function(){function t(){throw(0,i.default)(this,t),new Error("this class is static")}return(0,r.default)(t,null,[{key:"init",value:function(t){if(this.initialized)return!1;if(this.initialized=!0,this.initListAnimation(),t)for(var e=0;e<t.length;e++)this.addTarget(t[e]);this.regiseEvents()}},{key:"initListAnimation",value:function(){for(var t=document.querySelectorAll(".list-anime"),e=0;e<t.length;e++)for(var n=t[e].querySelectorAll("li"),i=0;i<n.length;i++)n[i].style.transitionDelay=300+80*i+"ms"}},{key:"regiseEvents",value:function(){var t=this;window.addEventListener("scroll",(function(){t.checkSectionEvents()}),!1),window.addEventListener("resize",(function(){t.checkSectionEvents()}),!1)}},{key:"removeEvents",value:function(){$(window).on("off")}},{key:"addTarget",value:function(t){this.target.push(t)}},{key:"checkSectionEvents",value:function(){if(this.isActive)for(var t=0;t<this.target.length;t++){var e=this.target[t];e.classList.contains("anime")||(o.default.scrollTop>=o.default.scrollTop+e.getBoundingClientRect().top-o.default.scrollTrigger&&e.classList.add("anime"),o.default.scrollTop>=document.body.scrollHeight-window.innerHeight-100&&e.classList.add("anime"))}}}]),t}();s.target=[],s.isActive=!0,s.initialized=!1,e.default=s}]);