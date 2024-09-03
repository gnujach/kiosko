import{V as m}from"./index-be1fcf91.js";import{k as u,o,e as l,b as a,u as i,a as t,t as s,g as b,F as d,h as _,Z as x}from"./app-541b8760.js";import{_ as f}from"./Header-92e72704.js";import{_ as g}from"./Breadcrumb-f3ff8266.js";import"./ApplicationLogoSeg-957e9152.js";import"./_plugin-vue_export-helper-c27b6911.js";const h={class:"dark:bg-gray-900 bg-dots-darker bg-gray-100 min-h-screen"},p={class:"w-full p-6 lg:p-8"},v={class:"max-w-7xl mx-auto p-6 lg:p-8"},y={class:"grid grid-flow-row gap-x-2 gap-y-0 bg-white h-auto m-2 rounded-lg items-start content-between min-h-screen space-y-1"},w={class:"flex justify-start my-4 items-center col-span-2 mb-0"},j={class:"text-3xl font-bold uppercase text-blue-700 mb-2"},k={class:"flex justify-start col-span-2 ml-4 h-8 mt-8 mb-2 content-normal items-center"},T={class:"font-semibold text-lg text-blue-900 uppercase italic"},C=t("span",{class:"text-blue-900"},"Objetivo:",-1),V={class:"grid grid-cols-4 grid-flow-row justify-evenly mx-4 gap-4 col-span-2"},D={class:"flex flex-row gap-2 bg-gray-100 rounded-md px-2"},q=t("p",{class:"font-semibold text-lg text-blue-900"}," Costo: ",-1),B={class:"font-semibold text-lg text-blue-900"},M={class:"flex flex-row justify-start"},N=t("p",{class:"font-semibold text-lg text-blue-900"}," Tiempo de Respuesta: ",-1),S={class:"font-semibold text-lg text-blue-900"},$={class:"flex flex-row m-1 col-span-2 bg-gray-100 rounded-md"},F=t("p",{class:"font-semibold text-lg text-blue-900"}," Departamento: ",-1),O={class:"font-semibold text-lg text-blue-900"},Q={class:"grid grid-cols-4 grid-flow-row justify-evenly m-4 gap-4 col-span-2 gap-2"},R={class:"flex flex-row m-1 gap-2 justify-start"},z=t("p",{class:"font-semibold text-lg text-blue-900"}," Dirigido a Ciudadanos: ",-1),E={class:"font-semibold text-lg text-blue-900"},I={class:"flex flex-row m-1 px-2 bg-gray-100 rounded-md"},L=t("p",{class:"font-semibold text-lg text-blue-900"}," Modalidad: ",-1),U={class:"font-semibold text-lg text-blue-900"},Z={class:"flex flex-row m-2 px-2 gap-2"},A=t("p",{class:"font-semibold text-lg text-blue-900"}," Qué recibe el ciudadano: ",-1),G={class:"font-semibold text-lg text-blue-900"},H={class:"flex justify-evenly m-1 col-span-2"},J=t("p",{class:"font-semibold text-lg text-blue-900"}," Requisitos: ",-1),st={__name:"ShowTramite",props:{tramite:Object},setup(e){const r=u(()=>[{label:"Inicio",url:route("home")},{label:"Trámites",url:route("tramites/")},{label:"Mostrar"}]);return(n,K)=>(o(),l(d,null,[a(i(x),{title:"Muestra Trámite"}),t("section",h,[t("div",p,[a(f),t("div",v,[a(g,{items:r.value,class:"w-full"},null,8,["items"]),t("div",y,[t("div",w,[t("div",null,[a(i(m),{value:e.tramite.data.attributes.url_proceso,onChange:n.onDataUrlChange,color:"{light: '#231243', dark:'#f12fefff'}",scale:"6"},null,8,["value","onChange"])]),t("h2",j,s(e.tramite.data.attributes.nombre),1)]),t("div",k,[t("div",null,[t("p",T,[C,b(" "+s(e.tramite.data.attributes.objetivo),1)])])]),t("div",V,[t("div",D,[q,t("p",B," $"+s(e.tramite.data.attributes.costo),1)]),t("div",M,[N,t("p",S,s(e.tramite.data.attributes.plazo_respuesta)+" (días) ",1)]),t("div",$,[F,t("p",O,s(e.tramite.data.departamento.data.attributes.nombre),1)])]),t("div",Q,[t("div",R,[z,t("p",E,s(e.tramite.data.attributes.tipo_usuario),1)]),t("div",I,[L,t("p",U,s(e.tramite.data.attributes.modalidad),1)]),t("div",Z,[A,t("p",G,s(e.tramite.data.attributes.ser_recibido),1)])]),t("div",H,[J,t("ul",null,[(o(!0),l(d,null,_(e.tramite.data.requisitos.requisitos,c=>(o(),l("li",{class:"font-semibold text-lg italic lowercase mx-2 my-2",key:e.tramite.data.id},s(c.data.attributes.nombre),1))),128))])])])])])])],64))}};export{st as default};
