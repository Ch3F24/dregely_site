import{_ as E,c as _,a as R,w as I,b as z,F as P,r as B,o as h,d as F,e as L,f,g as j,t as N,h as O}from"./_plugin-vue_export-helper.e80772d1.js";import{a as T}from"./index.83bc9570.js";import{P as U,N as $,S as q,a as A,L as D}from"./lazyload.esm.4c3b04d8.js";function W(a){let{swiper:e,extendParams:g}=a;g({grid:{rows:1,fill:"column"}});let l,c,v;const b=t=>{const{slidesPerView:s}=e.params,{rows:r,fill:m}=e.params.grid;c=l/r,v=Math.floor(t/r),Math.floor(t/r)===t/r?l=t:l=Math.ceil(t/r)*r,s!=="auto"&&m==="row"&&(l=Math.max(l,s*r))},y=(t,s,r,m)=>{const{slidesPerGroup:d,spaceBetween:S}=e.params,{rows:n,fill:w}=e.params.grid;let p,o,i;if(w==="row"&&d>1){const x=Math.floor(t/(d*n)),M=t-n*d*x,k=x===0?d:Math.min(Math.ceil((r-x*n*d)/n),d);i=Math.floor(M/k),o=M-i*k+x*d,p=o+i*l/n,s.css({"-webkit-order":p,order:p})}else w==="column"?(o=Math.floor(t/n),i=t-o*n,(o>v||o===v&&i===n-1)&&(i+=1,i>=n&&(i=0,o+=1))):(i=Math.floor(t/c),o=t-i*c);s.css(m("margin-top"),i!==0?S&&`${S}px`:"")},u=(t,s,r)=>{const{spaceBetween:m,centeredSlides:d,roundLengths:S}=e.params,{rows:n}=e.params.grid;if(e.virtualSize=(t+m)*l,e.virtualSize=Math.ceil(e.virtualSize/n)-m,e.$wrapperEl.css({[r("width")]:`${e.virtualSize+m}px`}),d){s.splice(0,s.length);const w=[];for(let p=0;p<s.length;p+=1){let o=s[p];S&&(o=Math.floor(o)),s[p]<e.virtualSize+s[0]&&w.push(o)}s.push(...w)}};e.grid={initSlides:b,updateSlide:y,updateWrapperSize:u}}let V;const G={name:"slider.vue",data(){return{slides:[],modules:[U,$,W],currentIndex:0,activeSlide:[],lang:""}},props:{action:{type:String}},components:{Swiper:q,SwiperSlide:A},mounted(){this.loadSlides().then(()=>{V=new D({elements_selector:".lazy",class_loaded:"lazy-loaded"}),V.update()}),this.lang=document.documentElement.lang},methods:{loadSlides(){return T.get(this.action).then(a=>{this.slides=a.data.data,this.activeSlide=a.data.data[0]}).catch(a=>{console.log(a)})},resize(a,e=[]){const g=Object.keys(e).map(l=>encodeURIComponent(l)+"="+encodeURIComponent(e[l])).join("&");return a.src+"&"+g}}},H={key:0,class:"h-full pb-4 relative flex-1 slider-container"},J=["href","title"],K={class:"w-full flex-1 overflow-hidden"},Q=["data-bg"],X={class:"text-left mt-4"},Y={key:0},Z={key:1,class:"relative h-14 min-h-[10%]"},ee=f("div",{class:"swiper-pagination"},null,-1),te=f("div",{class:"swiper-button-next"},null,-1),se=f("div",{class:"swiper-button-prev"},null,-1),oe=[ee,te,se];function le(a,e,g,l,c,v){const b=B("swiper-slide"),y=B("swiper");return h(),_(P,null,[c.slides?(h(),_("div",H,[R(y,{cssMode:!0,modules:c.modules,slidesPerView:1,spaceBetween:30,navigation:{enabled:!0,nextEl:".swiper-button-next",prevEl:".swiper-button-prev"},pagination:{clickable:!0,enabled:!0,type:"bullets",el:".swiper-pagination"},breakpoints:{768:{slidesPerView:4,grid:{rows:2}}},class:"work-slider h-full w-full"},{default:I(()=>[(h(!0),_(P,null,F(c.slides,u=>(h(),L(b,{class:"flex-row h-80 lg:h-full w-full"},{default:I(()=>[f("a",{href:"/"+c.lang+"/work/"+u.slug,class:"w-full h-full z-10 swiper-no-swiping flex flex-col",title:u.title},[f("div",K,[f("div",{class:"h-full w-full bg-cover bg-no-repeat bg-center hover:scale-110 transition-transform bg-dgrey lazy","data-bg":u.cover},null,8,Q)]),f("p",X,[j(N(u.title)+" ",1),u.year?(h(),_("span",Y,"- "+N(u.year),1)):z("",!0)])],8,J)]),_:2},1024))),256))]),_:1},8,["modules","navigation","pagination"])])):z("",!0),c.slides?(h(),_("div",Z,oe)):z("",!0)],64)}const re=E(G,[["render",le]]),C=O({});C.component("grid-slider",re);C.mount("#app");
