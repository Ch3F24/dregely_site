import"./vue.esm-bundler.e0398ebd.js";import{a as Qe}from"./index.83bc9570.js";import{_ as ze,o as d,b as T,f as g,T as Se,g as R,c as m,d as f,a as r,w as N,x as be,F as X,r as j,t as z,n as Q,y as ie,j as Z,z as $,v as O,l as ee,m as Ze,p as $e,A as te,B as e9,C as t9,s as he,h as o9}from"./_plugin-vue_export-helper.d7009684.js";import{P as l9,N as n9,S as i9,a as a9}from"./navigation.min.38df2bf9.js";const ge=document.body,s9={name:"modal",emits:["close"],props:{open},data(){return{loading:!1}},mounted(){ge.style.overflow="hidden",this.loading=!0},beforeUnmount(){ge.style.overflow="auto"}};function r9(e,a,n,s,i,b){const h=R("vue-easy-lightbox");return d(),T(Se,{to:"body"},[n.open?(d(),T(h,{key:0,visible:n.open,onHide:a[0]||(a[0]=p=>n.open=!1)},null,8,["visible"])):g("",!0)])}const c9=ze(s9,[["render",r9]]);const fe=document.body,d9={name:"slider.vue",props:{route:{type:String,required:!0},slidesPerView:{default:1},withThumb:{default:!1},isImage:{default:!1},dots:{default:!1},exhibition:{default:!1},isVideo:{default:!1}},data(){return{slides:[],modules:[l9,n9],currentIndex:0,thumbnailIndex:0,activeSlide:[],open:!1,icon:"/assets/images/download.svg"}},components:{Swiper:i9,SwiperSlide:a9,Modal:c9},mounted(){this.loadPhotos()},methods:{loadPhotos(){Qe.get(this.route).then(e=>{this.slides=e.data.data,e.data.data&&(this.exhibition?this.activeSlide=e.data.data:this.activeSlide=e.data.data[0])}).catch(e=>{console.log(e)})},genyo(){this.open=!0,this.selectThumbnail(this.thumbnailIndex)},resize(e,a=[]){let n=e.src.split("?"[0])[0];const s=Object.keys(a).map(i=>encodeURIComponent(i)+"="+encodeURIComponent(a[i])).join("&");return n+"?"+s},onHorizontalSlideChange(e){this.thumbnailIndex=0;let a=this;setTimeout(function(){this.exhibition||(a.currentIndex=e.activeIndex,a.activeSlide=a.slides[e.activeIndex])},300)},selectThumbnail(e){this.thumbnailIndex=e;let a=this;setTimeout(function(){const n=document.querySelector(".swiper-slide-active").children[0];n.style.backgroundImage=`url('${a.activeSlide.photos[e].src}')`})},openGallery(){this.isImage&&(this.open?(this.open=!1,fe.style.overflow="auto",this.selectThumbnail(this.thumbnailIndex)):(this.open=!0,fe.style.overflow="hidden",this.selectThumbnail(this.thumbnailIndex)))}}},u9={class:"w-full h-full slide-image"},p9={key:0,controls:"",class:"h-full mx-auto"},v9=["src"],m9=["src"],b9={key:1,class:"space-y-4"},h9={key:0},g9={key:1},f9={key:0},w9={key:1},y9=["href"],_9=["src"],x9=f("span",{class:"ml-4 group-hover:font-medium"},"Cikk let\xF6lt\xE9se",-1),k9={class:"relative md:flex items-center min-h-[10%] md:px-12"},z9={class:"md:w-1/3 flex space-x-4 h-full items-center"},S9=["onClick"],C9={key:0,class:"md:w-1/3 h-full"},M9=f("div",{class:"swiper-pagination"},null,-1),L9=[M9],T9={class:"md:w-1/3 mt-4 md:mt-0"},I9={key:0},D9={key:0,class:"font-medium"},E9={key:1},Y9={key:2},B9={key:3},X9={key:0},O9={key:1},V9=f("div",{class:"swiper-button-next"},null,-1),H9=f("div",{class:"swiper-button-prev"},null,-1);function A9(e,a,n,s,i,b){const h=R("swiper-slide"),p=R("swiper"),S=R("vue-easy-lightbox");return d(),m(X,null,[f("div",{class:be(["relative flex-1 pb-4 max-h-[90%] transition transition-all",{"image-container":n.isImage}]),onClick:a[0]||(a[0]=(...o)=>b.openGallery&&b.openGallery(...o))},[r(p,{onSlideChange:b.onHorizontalSlideChange,modules:i.modules,slidesPerView:1,spaceBetween:30,cssMode:!0,navigation:{enabled:!1,nextEl:".swiper-button-next",prevEl:".swiper-button-prev"},pagination:{clickable:!0,enabled:!1,type:"bullets",el:".swiper-pagination"},breakpoints:{768:{slidesPerView:n.slidesPerView,navigation:{enabled:!0},pagination:{enabled:n.dots}}},centerInsufficientSlides:!0,class:"work-slider h-full"},{default:N(()=>[n.exhibition?(d(!0),m(X,{key:0},j(i.slides.photos,o=>(d(),T(h,{class:"flex-row h-full full-w swiper-no-swiping"},{default:N(()=>[n.isImage&&o.src?(d(),m("div",{key:0,class:"w-full h-full slide-image",style:Q({backgroundImage:"url("+o.src+")"})},null,4)):g("",!0)]),_:2},1024))),256)):n.isVideo?(d(!0),m(X,{key:1},j(i.slides.photos,o=>(d(),T(h,{class:"flex-row h-full full-w swiper-no-swiping"},{default:N(()=>[f("div",u9,[o.substr(o.length-3)==="mp4"?(d(),m("video",p9,[f("source",{src:o,type:"video/mp4"},null,8,v9)])):g("",!0),f("img",{src:o,class:"h-full mx-auto",alt:""},null,8,m9)])]),_:2},1024))),256)):(d(!0),m(X,{key:2},j(i.slides,o=>(d(),T(h,{class:be(["flex-row h-full swiper-no-swiping",{"full-w":n.slidesPerView===1}])},{default:N(()=>[n.isImage&&o.photos?(d(),m("div",{key:0,class:"w-full h-full slide-image swiper-no-swiping",style:Q({backgroundImage:"url("+o.photos[0].src+")"})},null,4)):(d(),m("article",b9,[f("h3",null,[o.title?(d(),m("span",h9,z(o.title),1)):g("",!0),o.year?(d(),m("span",g9," - "+z(o.year),1)):g("",!0)]),o.description?(d(),m("p",f9,z(o.description),1)):g("",!0),o.pdf?(d(),m("div",w9,[f("a",{href:o.pdf,download:"",class:"group"},[f("img",{src:i.icon,width:"40",alt:"Download icon",class:"inline-block"},null,8,_9),x9],8,y9)])):g("",!0)]))]),_:2},1032,["class"]))),256))]),_:1},8,["onSlideChange","modules","navigation","pagination","breakpoints"])],2),f("div",k9,[f("div",z9,[n.withThumb&&i.activeSlide&&i.activeSlide.photos&&i.activeSlide.photos.length>1?(d(!0),m(X,{key:0},j(i.activeSlide.photos,(o,c)=>(d(),m("div",{class:"w-1/3 z-50 cursor-pointer",onClick:y=>b.selectThumbnail(c)},[f("span",{style:Q({backgroundImage:"url("+o.src+")"}),class:"h-0 pt-[100%] block bg-cover bg-no-repeat bg-center"},null,4)],8,S9))),256)):g("",!0)]),n.dots?(d(),m("div",C9,L9)):g("",!0),f("div",T9,[i.activeSlide&&n.isImage?(d(),m("div",I9,[f("p",null,[i.activeSlide.title?(d(),m("span",D9,z(i.activeSlide.title),1)):g("",!0),i.activeSlide.year?(d(),m("span",E9,", "+z(i.activeSlide.year),1)):g("",!0),i.activeSlide.location?(d(),m("span",Y9,", "+z(i.activeSlide.location),1)):g("",!0),i.activeSlide.optional?(d(),m("span",B9,", "+z(i.activeSlide.optional),1)):g("",!0)]),f("p",null,[i.activeSlide.size?(d(),m("span",X9,z(i.activeSlide.size)+" cm",1)):g("",!0),i.activeSlide.print?(d(),m("span",O9,", "+z(i.activeSlide.print),1)):g("",!0)])])):g("",!0)]),V9,H9]),i.open&&n.isImage?(d(),T(S,{key:0,visible:i.open,imgs:b.resize(i.activeSlide.photos[i.thumbnailIndex],{w:3200}),onHide:b.openGallery},null,8,["visible","imgs","onHide"])):g("",!0)],64)}const P9=ze(d9,[["render",A9]]);function I(e,a){a===void 0&&(a={});var n=a.insertAt;if(e&&typeof document<"u"){var s=document.head||document.getElementsByTagName("head")[0],i=document.createElement("style");i.type="text/css",n==="top"&&s.firstChild?s.insertBefore(i,s.firstChild):s.appendChild(i),i.styleSheet?i.styleSheet.cssText=e:i.appendChild(document.createTextNode(e))}}I(".vel-fade-enter-active,.vel-fade-leave-active{-webkit-transition:all .3s ease;transition:all .3s ease}.vel-fade-enter-from,.vel-fade-leave-to{opacity:0}.vel-img-swiper{display:block;position:relative}.vel-modal{background:rgba(0,0,0,.5);bottom:0;left:0;margin:0;position:fixed;right:0;top:0;z-index:9998}.vel-img-wrapper{left:50%;margin:0;position:absolute;top:50%;-webkit-transform:translate(-50% -50%);transform:translate(-50% -50%);-webkit-transition:.3s linear;transition:.3s linear;will-change:transform opacity}.vel-img,.vel-img-wrapper{-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.vel-img{background-color:rgba(0,0,0,.7);-webkit-box-shadow:0 5px 20px 2px rgba(0,0,0,.7);box-shadow:0 5px 20px 2px rgba(0,0,0,.7);display:block;max-height:80vh;max-width:80vw;position:relative;-webkit-transition:-webkit-transform .3s ease-in-out;transition:-webkit-transform .3s ease-in-out;transition:transform .3s ease-in-out;transition:transform .3s ease-in-out,-webkit-transform .3s ease-in-out}@media (max-width:750px){.vel-img{max-height:95vh;max-width:85vw}}.vel-btns-wrapper .btn__close,.vel-btns-wrapper .btn__next,.vel-btns-wrapper .btn__prev{-webkit-tap-highlight-color:transparent;color:#fff;cursor:pointer;font-size:32px;opacity:.6;outline:none;position:absolute;top:50%;-webkit-transform:translateY(-50%);transform:translateY(-50%);-webkit-transition:.15s linear;transition:.15s linear;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.vel-btns-wrapper .btn__close:hover,.vel-btns-wrapper .btn__next:hover,.vel-btns-wrapper .btn__prev:hover{opacity:1}.vel-btns-wrapper .btn__close.disable,.vel-btns-wrapper .btn__close.disable:hover,.vel-btns-wrapper .btn__next.disable,.vel-btns-wrapper .btn__next.disable:hover,.vel-btns-wrapper .btn__prev.disable,.vel-btns-wrapper .btn__prev.disable:hover{cursor:default;opacity:.2}.vel-btns-wrapper .btn__next{right:12px}.vel-btns-wrapper .btn__prev{left:12px}.vel-btns-wrapper .btn__close{right:10px;top:24px}@media (max-width:750px){.vel-btns-wrapper .btn__next,.vel-btns-wrapper .btn__prev{font-size:20px}.vel-btns-wrapper .btn__close{font-size:24px}.vel-btns-wrapper .btn__next{right:4px}.vel-btns-wrapper .btn__prev{left:4px}}.vel-modal.is-rtl .vel-btns-wrapper .btn__next{left:12px;right:auto}.vel-modal.is-rtl .vel-btns-wrapper .btn__prev{left:auto;right:12px}@media (max-width:750px){.vel-modal.is-rtl .vel-btns-wrapper .btn__next{left:4px;right:auto}.vel-modal.is-rtl .vel-btns-wrapper .btn__prev{left:auto;right:4px}}.vel-modal.is-rtl .vel-img-title{direction:rtl}");I('.vel-loading{left:50%;position:absolute;top:50%;-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}.vel-loading .ring{display:inline-block;height:64px;width:64px}.vel-loading .ring:after{-webkit-animation:ring 1.2s linear infinite;animation:ring 1.2s linear infinite;border-color:hsla(0,0%,100%,.7) transparent;border-radius:50%;border-style:solid;border-width:5px;content:" ";display:block;height:46px;margin:1px;width:46px}@-webkit-keyframes ring{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}to{-webkit-transform:rotate(1turn);transform:rotate(1turn)}}@keyframes ring{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}to{-webkit-transform:rotate(1turn);transform:rotate(1turn)}}');I(".vel-on-error{left:50%;position:absolute;top:50%;-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}.vel-on-error .icon{color:#aaa;font-size:80px}");I(".vel-img-title{bottom:60px;color:#ccc;cursor:default;font-size:12px;left:50%;line-height:1;max-width:80%;opacity:.8;overflow:hidden;position:absolute;text-align:center;text-overflow:ellipsis;-webkit-transform:translate(-50%);transform:translate(-50%);-webkit-transition:opacity .15s;transition:opacity .15s;white-space:nowrap}.vel-img-title:hover{opacity:1}");I(".vel-icon{fill:currentColor;height:1em;overflow:hidden;vertical-align:-.15em;width:1em}");I(".vel-toolbar{border-radius:4px;bottom:8px;display:-webkit-box;display:-ms-flexbox;display:flex;left:50%;opacity:.9;overflow:hidden;padding:0;position:absolute;-webkit-transform:translate(-50%);transform:translate(-50%)}.vel-toolbar,.vel-toolbar .toolbar-btn{background-color:#2d2d2d;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.vel-toolbar .toolbar-btn{-ms-flex-negative:0;-webkit-tap-highlight-color:transparent;color:#fff;cursor:pointer;flex-shrink:0;font-size:20px;outline:none;padding:6px 10px}.vel-toolbar .toolbar-btn:active,.vel-toolbar .toolbar-btn:hover{background-color:#3d3d3d}"),function(){if(typeof window<"u"){var e=window,a='<svg><symbol id="icon-rotate-right" viewBox="0 0 1024 1024"><path d="M275.199914 450.496179v20.031994c0.384-38.079988 12.543996-67.423979 36.479989-87.967973 22.431993-20.351994 49.215985-30.55999 80.319975-30.55999 32.06399 0 59.295981 10.175997 81.759974 30.55999 22.815993 20.543994 34.591989 49.887984 35.359989 87.967973v123.935961c-0.768 37.887988-12.543996 67.135979-35.359989 87.679973-22.431993 20.351994-49.695984 30.75199-81.759974 31.10399a120.255962 120.255962 0 0 1-72.991978-24.895992c-21.503993-15.839995-35.359989-38.751988-41.567987-68.735979h60.831981c9.247997 23.007993 27.167992 34.495989 53.759983 34.49599 37.535988-0.384 56.863982-21.407993 57.983982-63.071981v-38.751988c-28.095991 8.863997-54.303983 13.119996-78.623975 12.735996a91.263971 91.263971 0 0 1-68.447979-27.711991c-18.847994-18.303994-28.095991-47.231985-27.711991-86.847973z m62.55998 24.863992c7.103998 24.799992 25.215992 37.343988 54.271983 37.663989 27.103992-0.288 44.703986-11.327996 52.831984-33.11999 3.135999-8.383997 2.655999-29.599991-1.28-38.559988-8.607997-19.615994-25.791992-29.695991-51.551984-30.20799-28.383991 0.576-46.303986 12.639996-53.759983 36.159988a58.719982 58.719982 0 0 0-0.512 28.063991z m390.335878 115.711964v-116.895963c-1.12-41.311987-20.447994-62.335981-57.983981-63.07198-37.727988 0.768-56.959982 21.791993-57.695982 63.07198v116.895963c0.768 41.663987 19.999994 62.68798 57.695982 63.071981 37.535988-0.384 56.863982-21.407993 57.983981-63.071981z m-174.815945 3.391999v-123.935961c0.384-38.079988 12.543996-67.423979 36.479989-87.967973 22.431993-20.351994 49.215985-30.55999 80.319975-30.55999 32.06399 0 59.295981 10.175997 81.759974 30.55999 22.815993 20.543994 34.591989 49.887984 35.359989 87.967973v123.935961c-0.768 37.887988-12.543996 67.135979-35.359989 87.679973-22.431993 20.351994-49.695984 30.75199-81.759974 31.10399-31.10399-0.384-57.887982-10.751997-80.319975-31.10399-23.935993-20.543994-36.127989-49.791984-36.479989-87.679973z m282.559912-479.07185A509.887841 509.887841 0 0 0 511.99984 0.00032C229.215928 0.00032 0 229.216248 0 512.00016s229.215928 511.99984 511.99984 511.99984 511.99984-229.215928 511.99984-511.99984c0-3.743999-0.032-7.455998-0.128-11.167997-1.631999-11.295996-8.159997-27.103992-31.87199-27.103991-27.487991 0-31.67999 21.247993-32.03199 32.06399l0.032 4.127999a30.62399 30.62399 0 0 0 0.16 2.079999H959.9997c0 247.423923-200.575937 447.99986-447.99986 447.99986S63.99998 759.424083 63.99998 512.00016 264.575917 64.0003 511.99984 64.0003a446.079861 446.079861 0 0 1 277.439913 96.22397l-94.91197 91.679971c-25.439992 24.607992-17.439995 44.991986 17.887994 45.599986l188.031942 3.295999a64.31998 64.31998 0 0 0 65.055979-62.84798l3.295999-188.127942C969.407697 15.040315 949.311703 5.792318 923.871711 30.368311l-87.999972 85.023973z" fill="" ></path></symbol><symbol id="icon-rotate-left" viewBox="0 0 1024 1024"><path d="M275.199914 450.496179v20.031994c0.384-38.079988 12.543996-67.423979 36.479989-87.967973 22.431993-20.351994 49.215985-30.55999 80.319975-30.55999 32.06399 0 59.295981 10.175997 81.759974 30.55999 22.815993 20.543994 34.591989 49.887984 35.359989 87.967973v123.935961c-0.768 37.887988-12.543996 67.135979-35.359989 87.679973-22.431993 20.351994-49.695984 30.75199-81.759974 31.10399a120.255962 120.255962 0 0 1-72.991978-24.895992c-21.503993-15.839995-35.359989-38.751988-41.567987-68.735979h60.831981c9.247997 23.007993 27.167992 34.495989 53.759983 34.49599 37.535988-0.384 56.863982-21.407993 57.983982-63.071981v-38.751988c-28.095991 8.863997-54.303983 13.119996-78.623975 12.735996a91.263971 91.263971 0 0 1-68.447979-27.711991c-18.847994-18.303994-28.095991-47.231985-27.711991-86.847973z m62.55998 24.863992c7.103998 24.799992 25.215992 37.343988 54.271983 37.663989 27.103992-0.288 44.703986-11.327996 52.831984-33.11999 3.135999-8.383997 2.655999-29.599991-1.28-38.559988-8.607997-19.615994-25.791992-29.695991-51.551984-30.20799-28.383991 0.576-46.303986 12.639996-53.759983 36.159988a58.719982 58.719982 0 0 0-0.512 28.063991z m390.335878 115.711964v-116.895963c-1.12-41.311987-20.447994-62.335981-57.983981-63.07198-37.727988 0.768-56.959982 21.791993-57.695982 63.07198v116.895963c0.768 41.663987 19.999994 62.68798 57.695982 63.071981 37.535988-0.384 56.863982-21.407993 57.983981-63.071981z m-174.815945 3.391999v-123.935961c0.384-38.079988 12.543996-67.423979 36.479989-87.967973 22.431993-20.351994 49.215985-30.55999 80.319975-30.55999 32.06399 0 59.295981 10.175997 81.759974 30.55999 22.815993 20.543994 34.591989 49.887984 35.359989 87.967973v123.935961c-0.768 37.887988-12.543996 67.135979-35.359989 87.679973-22.431993 20.351994-49.695984 30.75199-81.759974 31.10399-31.10399-0.384-57.887982-10.751997-80.319975-31.10399-23.935993-20.543994-36.127989-49.791984-36.479989-87.679973zM188.159941 115.392284A509.887841 509.887841 0 0 1 511.99984 0.00032c282.783912 0 511.99984 229.215928 511.99984 511.99984s-229.215928 511.99984-511.99984 511.99984S0 794.784072 0 512.00016c0-3.743999 0.032-7.455998 0.128-11.167997 1.631999-11.295996 8.159997-27.103992 31.87199-27.103991 27.487991 0 31.67999 21.247993 32.03199 32.06399L63.99998 509.920161a30.62399 30.62399 0 0 1-0.16 2.079999H63.99998c0 247.423923 200.575937 447.99986 447.99986 447.99986s447.99986-200.575937 447.99986-447.99986S759.423763 64.0003 511.99984 64.0003a446.079861 446.079861 0 0 0-277.439913 96.22397l94.91197 91.679971c25.439992 24.607992 17.439995 44.991986-17.887994 45.599986L123.551961 300.800226a64.31998 64.31998 0 0 1-65.055979-62.84798l-3.295999-188.127942C54.591983 15.040315 74.687977 5.792318 100.127969 30.368311l87.999972 85.023973z" fill="" ></path></symbol><symbol id="icon-resize" viewBox="0 0 1024 1024"><path d="M456.036919 791.8108 270.553461 791.8108 460.818829 601.572038l-39.593763-39.567157L231.314785 751.915162l0.873903-183.953615c0-15.465227-12.515035-27.981285-27.981285-27.981285s-27.981285 12.515035-27.981285 27.981285l0 251.829516c0 8.3072 3.415796 14.975063 8.826016 19.564591 5.082762 5.192256 12.132318 8.416693 19.947308 8.416693l251.036453 0c15.46625 0 27.981285-12.514012 27.981285-27.981285C484.018204 804.325835 471.504192 791.8108 456.036919 791.8108zM838.945819 184.644347c-5.082762-5.191232-12.132318-8.416693-19.947308-8.416693L567.961034 176.227654c-15.46625 0-27.981285 12.515035-27.981285 27.981285 0 15.46625 12.514012 27.981285 27.981285 27.981285l185.483458 0L563.206754 422.427962l39.567157 39.567157 189.910281-189.910281-0.873903 183.953615c0 15.46625 12.514012 27.981285 27.981285 27.981285s27.981285-12.514012 27.981285-27.981285L847.772858 204.208938C847.771835 195.902762 844.356039 189.234899 838.945819 184.644347zM847.771835 64.303538 176.227142 64.303538c-61.809741 0-111.924115 50.115398-111.924115 111.924115l0 671.544693c0 61.809741 50.114374 111.924115 111.924115 111.924115l671.544693 0c61.809741 0 111.924115-50.114374 111.924115-111.924115l0-671.544693C959.69595 114.418936 909.581576 64.303538 847.771835 64.303538zM903.733381 847.772346c0 30.878265-25.056676 55.962569-55.962569 55.962569L176.227142 903.734916c-30.90487 0-55.962569-25.084305-55.962569-55.962569l0-671.544693c0-30.9325 25.056676-55.962569 55.962569-55.962569l671.544693 0c30.90487 0 55.962569 25.03007 55.962569 55.962569L903.734404 847.772346z"  ></path></symbol><symbol id="icon-img-broken" viewBox="0 0 1024 1024"><path d="M810.666667 128H213.333333c-46.933333 0-85.333333 38.4-85.333333 85.333333v597.333334c0 46.933333 38.4 85.333333 85.333333 85.333333h597.333334c46.933333 0 85.333333-38.4 85.333333-85.333333V213.333333c0-46.933333-38.4-85.333333-85.333333-85.333333z m0 682.666667H213.333333v-195.413334l42.24 42.24 170.666667-170.666666 170.666667 170.666666 170.666666-170.24L810.666667 530.346667V810.666667z m0-401.493334l-43.093334-43.093333-170.666666 171.093333-170.666667-170.666666-170.666667 170.666666-42.24-42.666666V213.333333h597.333334v195.84z"  ></path></symbol><symbol id="icon-prev" viewBox="0 0 1024 1024"><path d="M784.652701 955.6957 346.601985 517.644983c-2.822492-2.822492-2.822492-7.902977 0-11.289967l439.179713-439.179713c6.77398-6.77398 10.725469-16.370452 10.725469-25.966924L796.507166 36.692393c0-20.32194-16.370452-36.692393-36.692393-36.692393l-4.515987 0c-9.596472 0-19.192944 3.951488-25.966924 10.725469L250.072767 489.420066c-12.418964 12.418964-12.418964 32.740904 0 45.159868l477.565601 477.565601c7.338479 7.338479 17.499449 11.854465 28.224917 11.854465l0 0c22.015436 0 40.079383-18.063947 40.079383-40.079383l0 0C796.507166 973.759647 791.99118 963.598677 784.652701 955.6957z"  ></path></symbol><symbol id="icon-next" viewBox="0 0 1024 1024"><path d="M246.121279 955.6957l438.050717-438.050717c2.822492-2.822492 2.822492-7.902977 0-11.289967L244.992282 67.175303c-6.77398-6.77398-10.725469-16.370452-10.725469-25.966924L234.266814 36.692393C234.266814 16.370452 250.637266 0 270.959206 0l4.515987 0c9.596472 0 19.192944 3.951488 25.966924 10.725469l478.694598 478.694598c12.418964 12.418964 12.418964 32.740904 0 45.159868l-477.565601 477.565601c-7.338479 7.338479-17.499449 11.854465-28.224917 11.854465l0 0c-22.015436 0-40.079383-18.063947-40.079383-40.079383l0 0C234.266814 973.759647 238.7828 963.598677 246.121279 955.6957z"  ></path></symbol><symbol id="icon-zoomin" viewBox="0 0 1024 1024"><path d="M725.504 652.864c46.4-61.44 71.744-136.448 71.744-218.752C797.248 230.464 632.768 64 430.656 64S64 230.464 64 434.112C64 639.36 228.48 805.76 430.656 805.76c86.656 0 164.48-30.144 227.52-81.088L889.984 960 960 891.264l-234.496-238.4z m-294.848 67.456c-155.776 0-282.624-128.896-282.624-286.208s126.848-286.208 282.624-286.208 282.624 128.896 282.624 286.208-126.912 286.208-282.624 286.208z"  ></path><path d="M235.712 369.92h390.72v127.104H235.712z"  ></path><path d="M367.488 238.144h127.104v390.72H367.488z"  ></path></symbol><symbol id="icon-close" viewBox="0 0 1024 1024"><path d="M570.24 512l259.2 259.2-58.88 58.24L512 570.24l-261.12 261.12-58.24-58.24L453.76 512 194.56 252.8l58.24-58.24L512 453.76l261.12-261.12 58.24 58.24z"  ></path></symbol><symbol id="icon-zoomout" viewBox="0 0 1024 1024"><path d="M725.504 652.864c46.4-61.44 71.744-136.448 71.744-218.752C797.248 230.464 632.768 64 430.656 64S64 230.464 64 434.112C64 639.36 228.48 805.76 430.656 805.76c86.656 0 164.48-30.144 227.52-81.088L889.984 960 960 891.264l-234.496-238.4z m-294.848 67.456c-155.776 0-282.624-128.896-282.624-286.208s126.848-286.208 282.624-286.208 282.624 128.896 282.624 286.208-126.912 286.208-282.624 286.208z"  ></path><path d="M235.712 369.92h390.72v127.104H235.712z"  ></path></symbol></svg>';(function(n){if(document.addEventListener)if(~["complete","loaded","interactive"].indexOf(document.readyState))setTimeout(n,0);else{var s=function(){document.removeEventListener("DOMContentLoaded",s,!1),n()};document.addEventListener("DOMContentLoaded",s,!1)}else document.attachEvent&&(b=n,h=e.document,p=!1,(S=function(){try{h.documentElement.doScroll("left")}catch{return void setTimeout(S,50)}i()})(),h.onreadystatechange=function(){h.readyState=="complete"&&(h.onreadystatechange=null,i())});function i(){p||(p=!0,b())}var b,h,p,S})(function(){var n,s,i,b,h,p;(n=document.createElement("div")).innerHTML=a,a=null,(s=n.getElementsByTagName("svg")[0])&&(s.setAttribute("aria-hidden","true"),s.style.position="absolute",s.style.width=0,s.style.height=0,s.style.overflow="hidden",i=s,(b=document.body).firstChild?(h=i,(p=b.firstChild).parentNode.insertBefore(h,p)):b.appendChild(i))})}}();const k=ie({name:"SvgIcon",props:{type:{type:String,default:""}},setup:e=>()=>r("svg",{class:"vel-icon icon","aria-hidden":"true"},[r("use",{"xlink:href":`#icon-${e.type}`},null)])}),F=typeof window<"u",L=()=>{};let Ce=!1;if(F)try{const e={};Object.defineProperty(e,"passive",{get(){Ce=!0}}),window.addEventListener("test-passive",L,e)}catch{}const we=function(e,a,n){let s=arguments.length>3&&arguments[3]!==void 0&&arguments[3];F&&e.addEventListener(a,n,!!Ce&&{capture:!1,passive:s})},ye=(e,a,n)=>{F&&e.removeEventListener(a,n)},N9=e=>{e.preventDefault()},j9=Object.prototype.toString,ae=e=>a=>j9.call(a).slice(8,-1)===e,Me=e=>!!e&&ae("String")(e);function R9(e){return e!=null}const F9=ie({name:"Toolbar",props:{zoomIn:{type:Function,default:L},zoomOut:{type:Function,default:L},rotateLeft:{type:Function,default:L},rotateRight:{type:Function,default:L},resize:{type:Function,default:L}},setup:e=>()=>r("div",{class:"vel-toolbar"},[r("div",{role:"button","aria-label":"zoom in button",class:"toolbar-btn toolbar-btn__zoomin",onClick:e.zoomIn},[r(k,{type:"zoomin"},null)]),r("div",{role:"button","aria-label":"zoom out button",class:"toolbar-btn toolbar-btn__zoomout",onClick:e.zoomOut},[r(k,{type:"zoomout"},null)]),r("div",{role:"button","aria-label":"resize image button",class:"toolbar-btn toolbar-btn__resize",onClick:e.resize},[r(k,{type:"resize"},null)]),r("div",{role:"button","aria-label":"image rotate left button",class:"toolbar-btn toolbar-btn__rotate",onClick:e.rotateLeft},[r(k,{type:"rotate-left"},null)]),r("div",{role:"button","aria-label":"image rotate right button",class:"toolbar-btn toolbar-btn__rotate",onClick:e.rotateRight},[r(k,{type:"rotate-right"},null)])])}),U9=()=>r("div",{class:"vel-loading"},[r("div",{class:"ring"},null)]),q9=()=>r("div",{class:"vel-on-error"},[r("div",{class:"ring"},null),r(k,{type:"img-broken"},null)]),G9=(e,a)=>{let{slots:n}=a;return r("div",{class:"vel-img-title"},[n.default?n.default():""])},V=F?window:global;let _e=Date.now();function W9(e){const a=Date.now(),n=Math.max(0,16-(a-_e)),s=setTimeout(e,n);return _e=a+n,s}function oe(e){return(V.requestAnimationFrame||W9).call(V,e)}function xe(e){(V.cancelAnimationFrame||V.clearTimeout).call(V,e)}function ke(e,a){const n=e.clientX-a.clientX,s=e.clientY-a.clientY;return Math.sqrt(n*n+s*s)}function le(e){return typeof e=="function"||Object.prototype.toString.call(e)==="[object Object]"&&!e9(e)}function J9(e){return(a=>!!a&&ae("Object")(a))(e)&&Me(e.src)}var ne=ie({name:"VueEasyLightbox",props:{imgs:{type:[Array,String],default:()=>""},visible:{type:Boolean,default:!1},index:{type:Number,default:0},scrollDisabled:{type:Boolean,default:!0},escDisabled:{type:Boolean,default:!1},moveDisabled:{type:Boolean,default:!1},titleDisabled:{type:Boolean,default:!1},maskClosable:{type:Boolean,default:!0},teleport:{type:[String,Object],default:null},swipeTolerance:{type:Number,default:50},loop:{type:Boolean,default:!1},rtl:{type:Boolean,default:!1}},emits:{hide:()=>!0,"on-error":e=>!0,"on-prev":(e,a)=>!0,"on-next":(e,a)=>!0,"on-prev-click":(e,a)=>!0,"on-next-click":(e,a)=>!0,"on-index-change":(e,a)=>!0},setup(e,a){let{emit:n,slots:s}=a;const{imgRef:i,imgState:b,setImgSize:h}=(()=>{const t=Z(),l=$({width:0,height:0,maxScale:1});return{imgRef:t,imgState:l,setImgSize:()=>{if(t.value){const{width:u,height:w,naturalWidth:_}=t.value;l.maxScale=_/u,l.width=u,l.height=w}}}})(),p=Z(0),S=Z(""),o=$({scale:1,lastScale:1,rotateDeg:0,top:0,left:0,initX:0,initY:0,lastX:0,lastY:0,touches:[]}),c=$({loadError:!1,loading:!1,dragging:!1,gesturing:!1,wheeling:!1}),y=O(()=>{return t=e.imgs,ae("Array")(t)?e.imgs.map(l=>typeof l=="string"?{src:l}:J9(l)?l:void 0).filter(R9):Me(e.imgs)?[{src:e.imgs}]:[];var t}),re=O(()=>{var t;return(t=y.value[p.value])===null||t===void 0?void 0:t.src}),ce=O(()=>{var t;return(t=y.value[p.value])===null||t===void 0?void 0:t.title}),Le=O(()=>{var t;return(t=y.value[p.value])===null||t===void 0?void 0:t.alt}),Te=O(()=>({cursor:c.loadError?"default":e.moveDisabled?c.dragging?"grabbing":"grab":"move",top:`calc(50% + ${o.top}px)`,left:`calc(50% + ${o.left}px)`,transition:c.dragging||c.gesturing?"none":"",transform:`translate(-50%, -50%) scale(${o.scale}) rotate(${o.rotateDeg}deg)`})),H=()=>{n("hide")},de=()=>{o.scale=1,o.lastScale=1,o.rotateDeg=0,o.top=0,o.left=0,c.loadError=!1,c.dragging=!1,c.loading=!0},U=(t,l)=>{const u=p.value;de(),p.value=t,y.value[p.value]===y.value[t]&&he(()=>{c.loading=!1}),e.visible&&u!==t&&(l&&l(u,t),n("on-index-change",u,t))},D=()=>{const t=p.value,l=e.loop?(t+1)%y.value.length:t+1;!e.loop&&l>y.value.length-1||U(l,(u,w)=>{n("on-next",u,w),n("on-next-click",u,w)})},E=()=>{const t=p.value;let l=t-1;if(t===0){if(!e.loop)return;l=y.value.length-1}U(l,(u,w)=>{n("on-prev",u,w),n("on-prev-click",u,w)})},ue=t=>{Math.abs(1-t)<.05?t=1:Math.abs(b.maxScale-t)<.05&&(t=b.maxScale),o.lastScale=o.scale,o.scale=t},A=()=>{const t=o.scale+.12;t<3*b.maxScale&&ue(t)},P=()=>{const t=o.scale-(o.scale<.7?.1:.12);t>.1&&ue(t)},Y=()=>{o.rotateDeg-=90},q=()=>{o.rotateDeg+=90},G=()=>{o.scale=1,o.top=0,o.left=0},W=function(){let t=arguments.length>0&&arguments[0]!==void 0?arguments[0]:0;return!e.moveDisabled&&t===0},{onMouseDown:Ie,onMouseMove:De,onMouseUp:Ee}=((t,l,u)=>{let w,_=!1;return{onMouseDown:v=>{t.initX=t.lastX=v.clientX,t.initY=t.lastY=v.clientY,l.dragging=!0,_=!1,v.stopPropagation()},onMouseUp:v=>{u(v.button)&&xe(w),l.dragging=!1,_=!1},onMouseMove:v=>{if(l.dragging)if(u(v.button)){if(_)return;_=!0,w=oe(()=>{const{top:M,left:x,lastY:J,lastX:K}=t;t.top=M-J+v.clientY,t.left=x-K+v.clientX,t.lastX=v.clientX,t.lastY=v.clientY,_=!1})}else t.lastX=v.clientX,t.lastY=v.clientY;v.stopPropagation()}}})(o,c,W),{onTouchStart:Ye,onTouchMove:Be,onTouchEnd:Xe}=((t,l,u,w)=>{let _,v=!1;return{onTouchStart:M=>{const{touches:x}=M;x.length>1?(u.gesturing=!0,l.touches=x):(l.initX=l.lastX=x[0].clientX,l.initY=l.lastY=x[0].clientY,u.dragging=!0),M.stopPropagation()},onTouchMove:M=>{if(v)return;const{touches:x}=M,{lastX:J,lastY:K,left:We,top:Je,scale:Ke}=l;if(!u.gesturing&&u.dragging){if(!x[0])return;const{clientX:B,clientY:C}=x[0];w()?_=oe(()=>{l.lastX=B,l.lastY=C,l.top=Je-K+C,l.left=We-J+B,v=!1}):(l.lastX=B,l.lastY=C)}else u.gesturing&&l.touches.length>1&&x.length>1&&(_=oe(()=>{const B=(ke(l.touches[0],l.touches[1])-ke(x[0],x[1]))/t.width;l.touches=x;const C=Ke-1.3*B;C>.5&&C<1.5*t.maxScale&&(l.scale=C),v=!1}))},onTouchEnd:()=>{xe(_),u.dragging=!1,u.gesturing=!1,v=!1}}})(b,o,c,W),Oe=()=>{o.scale!==b.maxScale?(o.lastScale=o.scale,o.scale=b.maxScale):o.scale=o.lastScale},Ve=t=>{c.loadError||c.gesturing||c.loading||c.dragging||c.wheeling||!e.scrollDisabled||(c.wheeling=!0,setTimeout(()=>{c.wheeling=!1},80),t.deltaY<0?A():P())},pe=t=>{const l=t;e.visible&&(!e.escDisabled&&l.key==="Escape"&&e.visible&&H(),l.key==="ArrowLeft"&&(e.rtl?D():E()),l.key==="ArrowRight"&&(e.rtl?E():D()))},He=()=>{e.maskClosable&&H()},Ae=()=>{h()},Pe=()=>{c.loading=!1},Ne=t=>{c.loading=!1,c.loadError=!0,n("on-error",t)},ve=()=>{e.visible&&h()};ee(()=>e.index,t=>{t<0||t>=y.value.length||U(t)}),ee(()=>c.dragging,(t,l)=>{const u=!t&&l;if(!W()&&u){const w=o.lastX-o.initX,_=o.lastY-o.initY,v=e.swipeTolerance;Math.abs(w)>Math.abs(_)&&(w<-1*v?D():w>v&&E())}}),ee(()=>e.visible,t=>{if(t){de();const l=y.value.length;if(l===0)return p.value=0,c.loading=!1,void he(()=>c.loadError=!0);p.value=e.index>=l?l-1:e.index<0?0:e.index,e.scrollDisabled&&je()}else e.scrollDisabled&&Re()});const je=()=>{document&&(S.value=document.body.style.overflowY,document.body.style.overflowY="hidden")},Re=()=>{document&&(document.body.style.overflowY=S.value)};Ze(()=>{we(document,"keydown",pe),we(window,"resize",ve)}),$e(()=>{ye(document,"keydown",pe),ye(window,"resize",ve)});const Fe=()=>c.loading?s.loading?s.loading({key:"loading"}):r(U9,{key:"img-loading"},null):c.loadError?s.onerror?s.onerror({key:"onerror"}):r(q9,{key:"img-on-error"},null):r("div",{class:"vel-img-wrapper",style:Te.value,key:"img-wrapper"},[r("img",{alt:Le.value,ref:i,draggable:"false",class:"vel-img",src:re.value,onMousedown:Ie,onMouseup:Ee,onMousemove:De,onTouchstart:Ye,onTouchmove:Be,onTouchend:Xe,onLoad:Ae,onDblclick:Oe,onDragstart:t=>{t.preventDefault()}},null)]),Ue=()=>{if(s["prev-btn"])return s["prev-btn"]({prev:E});if(y.value.length<=1)return;const t=!e.loop&&p.value<=0;return r("div",{role:"button","aria-label":"previous image button",class:"btn__prev "+(t?"disable":""),onClick:E},[e.rtl?r(k,{type:"next"},null):r(k,{type:"prev"},null)])},qe=()=>{if(s["next-btn"])return s["next-btn"]({next:D});if(y.value.length<=1)return;const t=!e.loop&&p.value>=y.value.length-1;return r("div",{role:"button","aria-label":"next image button",class:"btn__next "+(t?"disable":""),onClick:D},[e.rtl?r(k,{type:"prev"},null):r(k,{type:"next"},null)])},Ge=()=>{if(ce.value&&!e.titleDisabled&&!c.loading&&!c.loadError)return s.title?s.title():r(G9,null,{default:()=>[ce.value]})},me=()=>{let t;if(e.visible)return r("div",{onTouchmove:N9,class:["vel-modal",e.rtl?"is-rtl":""],onClick:t9(He,["self"]),onWheel:Ve},[r(te,{name:"vel-fade",mode:"out-in"},le(t=Fe())?t:{default:()=>[t]}),r("img",{style:"display:none;",src:re.value,onError:Ne,onLoad:Pe},null),r("div",{class:"vel-btns-wrapper"},[Ue(),qe(),Ge(),s["close-btn"]?s["close-btn"]({close:H}):r("div",{role:"button","aria-label":"close image preview button",class:"btn__close",onClick:H},[r(k,{type:"close"},null)]),s.toolbar?s.toolbar({toolbarMethods:{zoomIn:A,zoomOut:P,rotate:Y,rotateLeft:Y,rotateRight:q,resize:G},zoomIn:A,zoomOut:P,rotate:Y,rotateLeft:Y,rotateRight:q,resize:G}):r(F9,{zoomIn:A,zoomOut:P,resize:G,rotateLeft:Y,rotateRight:q},null)])])};return()=>{let t;if(e.teleport){let l;return r(Se,{to:e.teleport},{default:()=>[r(te,{name:"vel-fade"},le(l=me())?l:{default:()=>[l]})]})}return r(te,{name:"vel-fade"},le(t=me())?t:{default:()=>[t]})}}});const K9=Object.assign(ne,{install:e=>{e.component(ne.name,ne)}}),se=o9({});se.use(K9);se.component("slider",P9);se.mount("#app");
