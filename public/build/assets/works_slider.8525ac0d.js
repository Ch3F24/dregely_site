import{_ as R,c as v,a as L,w as P,b as y,F as E,r as B,o as w,d as F,e as j,f as h,g as q,t as N,h as A}from"./_plugin-vue_export-helper.e80772d1.js";import{a as O}from"./index.83bc9570.js";import{P as T,N as U,S as D,a as W,L as V}from"./lazyload.esm.4c3b04d8.js";function $(i){let{swiper:e,extendParams:u}=i;u({grid:{rows:1,fill:"column"}});let l,c,_;const k=t=>{const{slidesPerView:s}=e.params,{rows:r,fill:m}=e.params.grid;c=l/r,_=Math.floor(t/r),Math.floor(t/r)===t/r?l=t:l=Math.ceil(t/r)*r,s!=="auto"&&m==="row"&&(l=Math.max(l,s*r))},z=(t,s,r,m)=>{const{slidesPerGroup:d,spaceBetween:S}=e.params,{rows:n,fill:g}=e.params.grid;let f,o,a;if(g==="row"&&d>1){const x=Math.floor(t/(d*n)),M=t-n*d*x,I=x===0?d:Math.min(Math.ceil((r-x*n*d)/n),d);a=Math.floor(M/I),o=M-a*I+x*d,f=o+a*l/n,s.css({"-webkit-order":f,order:f})}else g==="column"?(o=Math.floor(t/n),a=t-o*n,(o>_||o===_&&a===n-1)&&(a+=1,a>=n&&(a=0,o+=1))):(a=Math.floor(t/c),o=t-a*c);s.css(m("margin-top"),a!==0?S&&`${S}px`:"")},p=(t,s,r)=>{const{spaceBetween:m,centeredSlides:d,roundLengths:S}=e.params,{rows:n}=e.params.grid;if(e.virtualSize=(t+m)*l,e.virtualSize=Math.ceil(e.virtualSize/n)-m,e.$wrapperEl.css({[r("width")]:`${e.virtualSize+m}px`}),d){s.splice(0,s.length);const g=[];for(let f=0;f<s.length;f+=1){let o=s[f];S&&(o=Math.floor(o)),s[f]<e.virtualSize+s[0]&&g.push(o)}s.push(...g)}};e.grid={initSlides:k,updateSlide:z,updateWrapperSize:p}}let b;const G={name:"slider.vue",data(){return{slides:[],modules:[T,U,$],currentIndex:0,lang:"",loaded:!1}},props:{action:{type:String},route:{type:String}},components:{Swiper:D,SwiperSlide:W},mounted(){this.loadSlides().then(()=>{b=new V({elements_selector:".lazy",class_loaded:"lazy-loaded"}),b.update()}),this.lang=document.documentElement.lang},methods:{initParentLinks(){document.querySelectorAll(".gallery-parent").forEach(e=>{let u=this;e.addEventListener("click",function(){u.loaded=!1,console.log(e.dataset.link),u.loadSlides(e.dataset.link).then(()=>{b=new V({elements_selector:".lazy",class_loaded:"lazy-loaded"}),b.update(),u.loaded=!0})})})},loadSlides(i=this.action){return O.get(i).then(e=>{this.slides=e.data.data,this.loaded=!0}).catch(e=>{console.log(e)})},resize(i,e=[]){const u=Object.keys(e).map(l=>encodeURIComponent(l)+"="+encodeURIComponent(e[l])).join("&");return i.src+"&"+u},getRoute(i){return this.route.replace(/[{].*[}]/,i)}}},H={key:0,class:"h-full pb-4 relative flex-1 slider-container"},J=["href","title"],K={class:"w-full flex-1 overflow-hidden"},Q=["data-bg"],X={class:"text-left mt-4"},Y={key:0},Z={key:1,class:"relative h-14 min-h-[10%]"},ee=h("div",{class:"swiper-pagination"},null,-1),te=h("div",{class:"swiper-button-next"},null,-1),se=h("div",{class:"swiper-button-prev"},null,-1),oe=[ee,te,se];function le(i,e,u,l,c,_){const k=B("swiper-slide"),z=B("swiper");return w(),v(E,null,[c.slides?(w(),v("div",H,[L(z,{cssMode:!0,modules:c.modules,slidesPerView:1,spaceBetween:30,navigation:{enabled:!0,nextEl:".swiper-button-next",prevEl:".swiper-button-prev"},pagination:{clickable:!0,enabled:!0,type:"bullets",el:".swiper-pagination"},breakpoints:{768:{slidesPerView:4,grid:{rows:2}}},class:"work-slider h-full w-full"},{default:P(()=>[c.loaded?(w(!0),v(E,{key:0},F(c.slides,p=>(w(),j(k,{class:"flex-row h-80 lg:h-full w-full"},{default:P(()=>[h("a",{href:_.getRoute(p.slug),class:"w-full h-full z-10 swiper-no-swiping flex flex-col",title:p.title},[h("div",K,[h("div",{class:"h-full w-full bg-cover bg-no-repeat bg-center hover:scale-110 transition-transform bg-dgrey lazy","data-bg":p.cover},null,8,Q)]),h("p",X,[q(N(p.title)+" ",1),p.year?(w(),v("span",Y,"- "+N(p.year),1)):y("",!0)])],8,J)]),_:2},1024))),256)):y("",!0)]),_:1},8,["modules","navigation","pagination"])])):y("",!0),c.slides?(w(),v("div",Z,oe)):y("",!0)],64)}const re=R(G,[["render",le]]),C=A({});C.component("grid-slider",re);C.mount("#app");
