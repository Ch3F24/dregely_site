import{_ as L,c as g,a as R,w as P,b as y,F as E,r as B,o as w,d as F,e as j,f as h,g as q,t as N,h as A}from"./_plugin-vue_export-helper.e80772d1.js";import{a as O}from"./index.83bc9570.js";import{P as T,N as U,S as D,a as W,L as V}from"./lazyload.esm.4c3b04d8.js";function $(f){let{swiper:e,extendParams:d}=f;d({grid:{rows:1,fill:"column"}});let l,i,v;const k=t=>{const{slidesPerView:s}=e.params,{rows:n,fill:m}=e.params.grid;i=l/n,v=Math.floor(t/n),Math.floor(t/n)===t/n?l=t:l=Math.ceil(t/n)*n,s!=="auto"&&m==="row"&&(l=Math.max(l,s*n))},z=(t,s,n,m)=>{const{slidesPerGroup:c,spaceBetween:S}=e.params,{rows:r,fill:_}=e.params.grid;let p,o,a;if(_==="row"&&c>1){const x=Math.floor(t/(c*r)),M=t-r*c*x,I=x===0?c:Math.min(Math.ceil((n-x*r*c)/r),c);a=Math.floor(M/I),o=M-a*I+x*c,p=o+a*l/r,s.css({"-webkit-order":p,order:p})}else _==="column"?(o=Math.floor(t/r),a=t-o*r,(o>v||o===v&&a===r-1)&&(a+=1,a>=r&&(a=0,o+=1))):(a=Math.floor(t/i),o=t-a*i);s.css(m("margin-top"),a!==0?S&&`${S}px`:"")},u=(t,s,n)=>{const{spaceBetween:m,centeredSlides:c,roundLengths:S}=e.params,{rows:r}=e.params.grid;if(e.virtualSize=(t+m)*l,e.virtualSize=Math.ceil(e.virtualSize/r)-m,e.$wrapperEl.css({[n("width")]:`${e.virtualSize+m}px`}),c){s.splice(0,s.length);const _=[];for(let p=0;p<s.length;p+=1){let o=s[p];S&&(o=Math.floor(o)),s[p]<e.virtualSize+s[0]&&_.push(o)}s.push(..._)}};e.grid={initSlides:k,updateSlide:z,updateWrapperSize:u}}let b;const G={name:"slider.vue",data(){return{slides:[],modules:[T,U,$],currentIndex:0,lang:"",loaded:!1}},props:{action:{type:String}},components:{Swiper:D,SwiperSlide:W},mounted(){this.loadSlides().then(()=>{b=new V({elements_selector:".lazy",class_loaded:"lazy-loaded"}),b.update()}),this.lang=document.documentElement.lang},methods:{initParentLinks(){document.querySelectorAll(".gallery-parent").forEach(e=>{let d=this;e.addEventListener("click",function(){d.loaded=!1,console.log(e.dataset.link),d.loadSlides(e.dataset.link).then(()=>{b=new V({elements_selector:".lazy",class_loaded:"lazy-loaded"}),b.update(),d.loaded=!0})})})},loadSlides(f=this.action){return O.get(f).then(e=>{this.slides=e.data.data,this.loaded=!0}).catch(e=>{console.log(e)})},resize(f,e=[]){const d=Object.keys(e).map(l=>encodeURIComponent(l)+"="+encodeURIComponent(e[l])).join("&");return f.src+"&"+d}}},H={key:0,class:"h-full pb-4 relative flex-1 slider-container"},J=["href","title"],K={class:"w-full flex-1 overflow-hidden"},Q=["data-bg"],X={class:"text-left mt-4"},Y={key:0},Z={key:1,class:"relative h-14 min-h-[10%]"},ee=h("div",{class:"swiper-pagination"},null,-1),te=h("div",{class:"swiper-button-next"},null,-1),se=h("div",{class:"swiper-button-prev"},null,-1),oe=[ee,te,se];function le(f,e,d,l,i,v){const k=B("swiper-slide"),z=B("swiper");return w(),g(E,null,[i.slides?(w(),g("div",H,[R(z,{cssMode:!0,modules:i.modules,slidesPerView:1,spaceBetween:30,navigation:{enabled:!0,nextEl:".swiper-button-next",prevEl:".swiper-button-prev"},pagination:{clickable:!0,enabled:!0,type:"bullets",el:".swiper-pagination"},breakpoints:{768:{slidesPerView:4,grid:{rows:2}}},class:"work-slider h-full w-full"},{default:P(()=>[i.loaded?(w(!0),g(E,{key:0},F(i.slides,u=>(w(),j(k,{class:"flex-row h-80 lg:h-full w-full"},{default:P(()=>[h("a",{href:"/"+i.lang+"/work/"+u.slug,class:"w-full h-full z-10 swiper-no-swiping flex flex-col",title:u.title},[h("div",K,[h("div",{class:"h-full w-full bg-cover bg-no-repeat bg-center hover:scale-110 transition-transform bg-dgrey lazy","data-bg":u.cover},null,8,Q)]),h("p",X,[q(N(u.title)+" ",1),u.year?(w(),g("span",Y,"- "+N(u.year),1)):y("",!0)])],8,J)]),_:2},1024))),256)):y("",!0)]),_:1},8,["modules","navigation","pagination"])])):y("",!0),i.slides?(w(),g("div",Z,oe)):y("",!0)],64)}const ne=L(G,[["render",le]]),C=A({});C.component("grid-slider",ne);C.mount("#app");
