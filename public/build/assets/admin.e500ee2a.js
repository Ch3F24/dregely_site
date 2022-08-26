import"./vue.esm-bundler.e0398ebd.js";import{a as u}from"./index.83bc9570.js";import{_ as h,c as i,F as f,r as w,f as k,d as e,a0 as m,a1 as p,C as v,o as r,t as c,e as a,a2 as g,a3 as b,h as y}from"./_plugin-vue_export-helper.d7009684.js";const x={name:"BulkUpload",data(){return{form:{row_start:1,row_limit:1,file:""},errors:[],loading:!1}},methods:{send(){if(this.errors=[],!this.form.file)alert("Nincs file kiv\xE1lasztva");else if(this.form.row_start<1||this.form.row_limit<1)alert("Nem megfelel\u0151ek a felt\xF6lteni k\xEDv\xE1nt sorok sz\xE1ma.");else if(this.form.file.type!=="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet")alert("Csak xslx file form\xE1tum t\xF6lthet\u0151 fel");else{this.loading=!0;const o=new FormData;o.append("row_start",this.form.row_start),o.append("row_limit",this.form.row_limit),o.append("file",this.form.file),u.post("/api/admin/bulk-update",o).then(t=>{t.data==="success"?alert("Felt\xF6ltve"):this.errors=t,this.loading=!1}).catch(t=>{console.log(t),this.loading=!1})}},handleFileUpload(){this.form.file="",this.form.file=file.files[0],console.log("selected file",file.files[0])}}},n=o=>(g("data-v-c8d018df"),o=o(),b(),o),F={key:0},B={style:{color:"red"}},U={class:"form-group"},z=n(()=>e("label",{for:"row_start"},[a("Sor kezdete "),e("small",null," (innen kezdi a felt\xF6lt\xE9st)")],-1)),S={class:"form-group"},V=n(()=>e("label",{for:"row_limit"},[a("Limit "),e("small",null," (ha kissebb mint 1 akkor nem t\xF6lt fel!)")],-1)),C={class:"form-group"},N=n(()=>e("label",{for:"file"},"F\xE1jl",-1)),D={key:0,type:"button",class:"form-button process",disabled:""},I=n(()=>e("svg",{class:"animate-spin",xmlns:"http://www.w3.org/2000/svg",fill:"none",viewBox:"0 0 24 24"},[e("circle",{class:"opacity-25",cx:"12",cy:"12",r:"10",stroke:"white","stroke-width":"4"}),e("path",{class:"opacity-75",fill:"#464646",d:"M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"})],-1)),M=a(" Processing... "),A=[I,M],L={key:1,type:"submit",class:"form-button submit"};function T(o,t,E,H,l,d){return r(),i(f,null,[l.errors?(r(),i("div",F,[(r(!0),i(f,null,w(l.errors.data,s=>(r(),i("div",null,[e("h1",null,[e("span",B,c(s.row)+". sor",1),a(" --- "+c(s.errors[0]),1)])]))),256))])):k("",!0),e("form",{onSubmit:t[3]||(t[3]=v((...s)=>d.send&&d.send(...s),["prevent"]))},[e("div",U,[z,m(e("input",{name:"row_start",id:"row_start",type:"number","onUpdate:modelValue":t[0]||(t[0]=s=>l.form.row_start=s)},null,512),[[p,l.form.row_start]])]),e("div",S,[V,m(e("input",{name:"row_limit",id:"row_limit",type:"number","onUpdate:modelValue":t[1]||(t[1]=s=>l.form.row_limit=s)},null,512),[[p,l.form.row_limit]])]),e("div",C,[N,e("input",{ref:"file",name:"file",id:"file",type:"file",onChange:t[2]||(t[2]=s=>d.handleFileUpload())},null,544)]),l.loading?(r(),i("button",D,A)):(r(),i("button",L,"Felt\xF6lt\xE9s"))],32)],64)}const j=h(x,[["render",T],["__scopeId","data-v-c8d018df"]]),_=y({});_.component("bulk-upload",j);_.mount("#app");
