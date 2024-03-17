"use strict";(globalThis.webpackChunkoxyprops=globalThis.webpackChunkoxyprops||[]).push([[3208],{6033:(e,t,l)=>{l.d(t,{Z:()=>c});var a=l(9307);const c=({type:e="",children:t})=>{let l;return l="flexcolumn"===e?"FkAMNE0uF3x8UTwaHiF3":"",(0,a.createElement)("article",{className:"gwhUj0ye5s01QeyYbexY "+l},t)}},3208:(e,t,l)=>{l.r(t),l.d(t,{default:()=>W});var a=l(9307),c=l(5736),r=l(9250),o=l(3625),n=l(9522),s=l(9678),h=l(5072),m=l(8893);var i=l(9196),u=l(5609),d=l(6033);const g={TITLE:(0,c.__)("Color Schemes","oxyprops"),LOCK_LAB:(0,c.__)("Lock the framework in a single color scheme","oxyprops"),LOCK_HLP:(0,c.__)("If you choose to lock the framework in a single color scheme, you will deactivate light & dark modes responsiveness. All your dark mode specific props will be set to the light version. Unlock to get back to light & dark modes support.","oxyprops"),SCH_TITLE:(0,c.__)("Schemes to load","oxyprops")},$=()=>{const e=(0,i.useContext)(n.Z),t=(0,i.useContext)(s.Z);return(0,a.createElement)(a.Fragment,null,(0,a.createElement)(d.Z,null,(0,a.createElement)("h3",null,g.LOCK_LAB),(0,a.createElement)(u.ToggleControl,{checked:e?.settings.theme.lock_mode,onChange:()=>{t({type:"toggleThemeLockMode"})}}),(0,a.createElement)("p",null,g.LOCK_HLP)),!e?.settings.theme.lock_mode&&(0,a.createElement)(d.Z,null,(0,a.createElement)("div",{className:"TIwIQfIPCaxfjOCXFkfe"},(0,a.createElement)("h3",null,g.SCH_TITLE),(0,a.createElement)("div",{className:"cQYod4OJVW_uLne5UI2D"},(0,a.createElement)(u.CheckboxControl,{label:"Light",checked:e?.settings.theme.load_light,onChange:()=>{t({type:"toggleThemeLoadLight"})}}),(0,a.createElement)(u.CheckboxControl,{label:"Dark",checked:e?.settings.theme.load_dark,onChange:()=>{t({type:"toggleThemeLoadDark"})}}),(0,a.createElement)(u.CheckboxControl,{label:"Dim",checked:e?.settings.theme.load_dim,onChange:()=>{t({type:"toggleThemeLoadDim"})}}),(0,a.createElement)(u.CheckboxControl,{label:"Colorful Light",checked:e?.settings.theme.load_colorful_light,onChange:()=>{t({type:"toggleThemeLoadColorfulLight"})}}),(0,a.createElement)(u.CheckboxControl,{label:"Colorful Dark",checked:e?.settings.theme.load_colorful_dark,onChange:()=>{t({type:"toggleThemeLoadColorfulDark"})}})))))},E="w_zVUiN9wywo7nrevRTT",p="jIXo4nZhtlhK_aAw1rlc",_="UimeSlhpPx0dJZHdGDpA",f="u4Zj4KUzlfvQH0kZhGQJ",C="LUMfTIkM8eArz6bebSuT",b="OHjixweZ0iPu7XyatoKw",v="o8tftn5ulVZDXpwvZgkI",k="cc0SUNd1R4eJ9Rmoh_0t",x="iDmUkmXxH4U8DRJW3utl";var w=l(9653);var S=l(5325);const A=({color:e,logicalColor:t,action:l})=>{const c=(0,a.useContext)(n.Z),r=(0,a.useContext)(s.Z);return(0,a.createElement)(u.ButtonGroup,{className:"jT5UBTjaeFHC5XNiAC_Q"},S.TE.map((o=>(0,a.createElement)(a.Fragment,null,(0,a.createElement)(u.Button,{onClick:()=>{r({type:l,value:o})},variant:o===c?.settings.theme[e]?"primary":"secondary",className:"Qh42i6Yq3sKu4lOtcZ3Q"},(0,a.createElement)("span",null,o===c?.settings.colors[t]?.weight?o+" ★":o))))))},y=({logicalColor:e})=>{const t=(0,a.useContext)(n.Z);return(0,a.createElement)(a.Fragment,null,(0,a.createElement)("div",{className:"XlzbKcEAQOlDC4OZhaV4"},S.TE.map((l=>(0,a.createElement)("div",{className:"NDgSPPQUrX_QcQquVYwM",style:{backgroundColor:`hsl(${t?.settings.colors[e]?.swatch[l]?.h+" "+t?.settings.colors[e]?.swatch[l]?.s+" "+t?.settings.colors[e]?.swatch[l]?.l})`}})))))};var N=l(6767),P=l(6776);const Z="ugaQ6ttuyJPC_2w9szi7",L=({logical:e,mode:t,color:l})=>{const c=(0,a.useContext)(n.Z),r=c?.settings.theme,o=r[l],s=r[`surface1_${t}`],h=r[`surface2_${t}`],m=r[`surface3_${t}`],i=r[`surface4_${t}`],d=c?.settings.colors.canvas.swatch,g=d[s],$=d[h],E=d[m],p=d[i],_=c?.settings.colors[e].swatch,f=_[o],C=new w.Z("hsl",[g?.h,g?.s.replaceAll("%",""),g?.l.replaceAll("%","")]),b=new w.Z("hsl",[$?.h,$?.s.replaceAll("%",""),$?.l.replaceAll("%","")]),v=new w.Z("hsl",[E?.h,E?.s.replaceAll("%",""),E?.l.replaceAll("%","")]),k=new w.Z("hsl",[p?.h,p?.s.replaceAll("%",""),p?.l.replaceAll("%","")]),x=new w.Z("hsl",[f?.h,f?.s.replaceAll("%",""),f?.l.replaceAll("%","")]),S=C?.contrastAPCA(x),A=b?.contrastAPCA(x),y=v?.contrastAPCA(x),N=k?.contrastAPCA(x),P=x?.contrastWCAG21(C),L=x?.contrastWCAG21(b),O=x?.contrastWCAG21(v),M=x?.contrastWCAG21(k),T=Math.round(10*(S+Number.EPSILON))/10,I=Math.round(10*(A+Number.EPSILON))/10,U=Math.round(10*(y+Number.EPSILON))/10,D=Math.round(10*(N+Number.EPSILON))/10,G=Math.round(10*(P+Number.EPSILON))/10,R=Math.round(10*(L+Number.EPSILON))/10,Q=Math.round(10*(O+Number.EPSILON))/10,B=Math.round(10*(M+Number.EPSILON))/10;return(0,a.createElement)(u.PanelRow,{className:""},(0,a.createElement)("table",{style:{inlineSize:"100%",captionSide:"bottom"}},(0,a.createElement)("caption",null,"Contrast Ratios"),(0,a.createElement)("thead",null,(0,a.createElement)("tr",null,(0,a.createElement)("th",{scope:"column"}),(0,a.createElement)("th",{scope:"column",className:Z},"Surface 1"),(0,a.createElement)("th",{scope:"column",className:Z},"Surface 2"),(0,a.createElement)("th",{scope:"column",className:Z},"Surface 3"),(0,a.createElement)("th",{scope:"column",className:Z},"Surface 4"))),(0,a.createElement)("tbody",null,(0,a.createElement)("tr",null,(0,a.createElement)("th",{scope:"row"},"APCA"),(0,a.createElement)("td",{style:{background:`hsl(${g?.h}, ${g?.s}, ${g?.l})`,color:`hsl(${f?.h}, ${f?.s}, ${f?.l})`,textAlign:"center"}},T),(0,a.createElement)("td",{style:{background:`hsl(${$?.h}, ${$?.s}, ${$?.l})`,color:`hsl(${f?.h}, ${f?.s}, ${f?.l})`,textAlign:"center"}},I),(0,a.createElement)("td",{style:{background:`hsl(${E?.h}, ${E?.s}, ${E?.l})`,color:`hsl(${f?.h}, ${f?.s}, ${f?.l})`,textAlign:"center"}},U),(0,a.createElement)("td",{style:{background:`hsl(${p?.h}, ${p?.s}, ${p?.l})`,color:`hsl(${f?.h}, ${f?.s}, ${f?.l})`,textAlign:"center"}},D)),(0,a.createElement)("tr",null,(0,a.createElement)("th",{scope:"row"},"WCAG 2.1"),(0,a.createElement)("td",{style:{background:`hsl(${g?.h}, ${g?.s}, ${g?.l})`,color:`hsl(${f?.h}, ${f?.s}, ${f?.l})`,textAlign:"center"}},G),(0,a.createElement)("td",{style:{background:`hsl(${$?.h}, ${$?.s}, ${$?.l})`,color:`hsl(${f?.h}, ${f?.s}, ${f?.l})`,textAlign:"center"}},R),(0,a.createElement)("td",{style:{background:`hsl(${E?.h}, ${E?.s}, ${E?.l})`,color:`hsl(${f?.h}, ${f?.s}, ${f?.l})`,textAlign:"center"}},Q),(0,a.createElement)("td",{style:{background:`hsl(${p?.h}, ${p?.s}, ${p?.l})`,color:`hsl(${f?.h}, ${f?.s}, ${f?.l})`,textAlign:"center"}},B)))))},O={TITLE:(0,c.__)("Details of your","oxyprops"),light:(0,c.__)("Light","oxyprops"),dark:(0,c.__)("Dark","oxyprops"),dim:(0,c.__)("dim (reduced contrast) mode","oxyprops"),colorful_light:(0,c.__)("colorful light mode (brand replaces canvas)","oxyprops"),colorful_dark:(0,c.__)("colorful dark mode (brand replaces canvas)","oxyprops"),MODE:(0,c.__)("mode","oxyprops")},M=({logical:e,mode:t})=>{const l=(0,N.ZP)((0,N.fZ)(t)),c=(0,a.useContext)(n.Z),r=(0,a.useContext)(s.Z),h=(0,P.Lf)(),[m,i]=(0,o.C)(((t,l)=>{if("labUpdate"===l.type){t.reference.lab.l=l.value.l,t.reference.lab.a=l.value.a,t.reference.lab.b=l.value.b;let n=(a=(c=l.value.l,o=P.Yb.reduce((function(e,t){return Math.abs(t-c)<Math.abs(e-c)?t:e})),P.Yb.indexOf(o)),P.Yb[a]),s=h.rows.map((e=>null==e.weight?{target:-1,weight:e.weight}:{target:e.target,weight:e.weight}));t.reference.weight=s.filter((e=>e.target===n))[0].weight,r({type:"setReference",logicalColor:e,value:t.reference.weight,hex:l.hex})}var a,c,o}),{reference:{lab:{l:0,a:0,b:0},weight:void 0},color:{apcaSurface1:0,apcaSurface2:0,apcaSurface3:0,apcaSurface4:0,wcagSurface1:0,wcagSurface2:0,wcagSurface3:0,wcagSurface4:0},colorHover:{apcaSurface1:0,apcaSurface2:0,apcaSurface3:0,apcaSurface4:0,wcagSurface1:0,wcagSurface2:0,wcagSurface3:0,wcagSurface4:0}}),[d,g]=(0,a.useState)(!1);return(0,a.useEffect)((()=>{const t=new w.Z(c?.settings.colors[e].hex);i({type:"labUpdate",value:t.lab,hex:t.toString({format:"hex"})})}),[c?.settings.colors[e].hex]),(0,a.createElement)(u.PanelBody,{title:O.TITLE+" "+O[t]+" "+O.MODE,className:k,icon:"admin-settings",initialOpen:!1,buttonProps:{className:x}},(0,a.createElement)(u.PanelRow,{className:`${C} ${b} ${v}`},(0,a.createElement)(u.ToggleControl,{label:"Hide A11Y checks",checked:d,onChange:()=>g(!d)}),(0,a.createElement)("h4",null,(0,N.ZP)(e)),(0,a.createElement)(A,{logicalColor:e,action:`${"links"===e?"link":e}${l}`,color:`${"links"===e?"link":e}_${t}`}),(0,a.createElement)(y,{logicalColor:e}),!d&&(0,a.createElement)(L,{logical:e,mode:t,color:`${"links"===e?"link":e}_${t}`})),(0,a.createElement)(u.PanelRow,{className:`${C} ${b} ${v}`},(0,a.createElement)("h4",null,(0,N.ZP)(e)," Hover"),(0,a.createElement)(A,{logicalColor:e,action:`${"links"===e?"link":e}${l}Hover`,color:`${"links"===e?"link":e}_${t}_hover`}),(0,a.createElement)(y,{logicalColor:e}),!d&&(0,a.createElement)(L,{logical:e,mode:t,color:`${"links"===e?"link":e}_${t}_hover`})))},T="leZOKhE6TL1GPAOP1X8P",I=({logicalColor:e,noTransparencies:t=!1})=>{const l=(0,a.useContext)(n.Z),c=l?.settings.colors[e],[r,o]=(0,a.useState)("800");return(0,a.createElement)("div",{className:"QQ9N_FymVaDZ04z2AsfY"},S.TE.map((e=>(0,a.createElement)("div",{onMouseEnter:e=>{const t=e.target;o(t.innerText)},className:T,style:t?{backgroundColor:`hsl(${c.swatch[e]?.h+" "+c.swatch[e]?.s+" "+c.swatch[e]?.l})`}:{backgroundColor:`hsl(${c.swatch[e].h+" "+c.swatch[e]?.s+" "+c.swatch[e]?.l})`,cursor:"s-resize"}},(0,a.createElement)("span",null,e===c.weight?e+" ★":e)))),!t&&S.eO.map((e=>(0,a.createElement)("div",{className:T,style:{backgroundColor:`hsl(${c.swatch[r]?.h+" "+c.swatch[r]?.s+" "+c.swatch[r]?.l} / ${e}%)`}},e,"%"))))};var U=l(8491);(0,c.__)("Pick from the framework default palette or define a custom color by clicking on the color band.","oxyprops");const D=({logical:e})=>{const t=(0,N.ZP)(e),l=(0,a.useContext)(n.Z),r=(0,a.useContext)(s.Z);return(0,a.createElement)(d.Z,null,(0,a.createElement)("h3",null,t),(0,a.createElement)("div",{className:E},(0,a.createElement)(u.SlotFillProvider,null,(0,a.createElement)(u.ColorPalette,{className:_,colors:S.Md,value:l?.settings?.colors[e]?.hex,onChange:e=>{((e,t)=>{const l=S.ZP.filter((e=>e.color===t))[0]?.name?S.ZP.filter((e=>e.color===t))[0]?.name:"custom";r({type:e,name:l,hex:t})})(`set${t}`,e)},clearable:!1}),(0,a.createElement)(u.Popover.Slot,null))),(0,a.createElement)("div",{className:`${E} ${p}`},(0,a.createElement)("p",null,(0,c.__)("The reference color is weight ","oxyprops")+l?.settings.colors[e].weight+" and is marked with a ⭐️."),(0,a.createElement)(I,{logicalColor:e})),(0,a.createElement)(u.Panel,{header:`${t} ${(0,c.__)("color schemes definition","oxyprops")}`,className:f},(0,a.createElement)(M,{logical:e,mode:"light"}),!l?.settings.theme.lock_mode&&l?.settings.theme.load_dark&&(0,a.createElement)(M,{logical:e,mode:"dark"}),!l?.settings.theme.lock_mode&&l?.settings.theme.load_dim&&(0,a.createElement)(M,{logical:e,mode:"dim"}),!l?.settings.theme.lock_mode&&l?.settings.theme.load_colorful_light&&(0,a.createElement)(M,{logical:e,mode:"colorful_light"}),!l?.settings.theme.lock_mode&&l?.settings.theme.load_colorful_dark&&(0,a.createElement)(M,{logical:e,mode:"colorful_dark"})),(0,a.createElement)(U.Z,null))},G=({logical:e,mode:t,color:l})=>{const c=(0,a.useContext)(n.Z),r=c?.settings.theme,o=r[l],s=r[`text1_${t}`],h=r[`text2_${t}`],m=r[`brand_${t}`],i=r[`brand_${t}_hover`],d=r[`accent_${t}`],g=r[`accent_${t}_hover`],$=r[`link_${t}`],E=r[`link_${t}_hover`],p=r[`visited_${t}`],_=r[`visited_${t}_hover`],f=c?.settings.colors.canvas.swatch,C=f[s],b=f[h],v=c?.settings.colors.brand.swatch,k=v[m],x=v[i],S=c?.settings.colors.accent.swatch;console.log(S);const A=S[d],y=S[g];console.log(A,y);const N=c?.settings.colors.links.swatch,P=N[$],L=N[E],O=c?.settings.colors.visited.swatch,M=O[p],T=O[_],I=f[o],U=new w.Z("hsl",[C?.h,C?.s.replaceAll("%",""),C?.l.replaceAll("%","")]),D=new w.Z("hsl",[b?.h,b?.s.replaceAll("%",""),b?.l.replaceAll("%","")]),G=new w.Z("hsl",[k?.h,k?.s.replaceAll("%",""),k?.l.replaceAll("%","")]),R=new w.Z("hsl",[x?.h,x?.s.replaceAll("%",""),x?.l.replaceAll("%","")]),Q=new w.Z("hsl",[A?.h,A?.s.replaceAll("%",""),A?.l.replaceAll("%","")]),B=new w.Z("hsl",[y?.h,y?.s.replaceAll("%",""),y?.l.replaceAll("%","")]),Y=new w.Z("hsl",[P?.h,P?.s.replaceAll("%",""),P?.l.replaceAll("%","")]),H=new w.Z("hsl",[L?.h,L?.s.replaceAll("%",""),L?.l.replaceAll("%","")]),W=new w.Z("hsl",[M?.h,M?.s.replaceAll("%",""),M?.l.replaceAll("%","")]),F=new w.Z("hsl",[T?.h,T?.s.replaceAll("%",""),T?.l.replaceAll("%","")]),V=new w.Z("hsl",[I?.h,I?.s.replaceAll("%",""),I?.l.replaceAll("%","")]),K=V?.contrastAPCA(U),j=V?.contrastAPCA(D),q=V?.contrastAPCA(G),z=V?.contrastAPCA(R),J=V?.contrastAPCA(Q),X=V?.contrastAPCA(B),ee=V?.contrastAPCA(Y),te=V?.contrastAPCA(H),le=V?.contrastAPCA(W),ae=V?.contrastAPCA(F),ce=V?.contrastWCAG21(U),re=V?.contrastWCAG21(D),oe=V?.contrastWCAG21(G),ne=V?.contrastWCAG21(R),se=V?.contrastWCAG21(Q),he=V?.contrastWCAG21(B),me=V?.contrastWCAG21(Y),ie=V?.contrastWCAG21(H),ue=V?.contrastWCAG21(W),de=V?.contrastWCAG21(F),ge=Math.round(10*(K+Number.EPSILON))/10,$e=Math.round(10*(j+Number.EPSILON))/10,Ee=Math.round(10*(q+Number.EPSILON))/10,pe=Math.round(10*(z+Number.EPSILON))/10,_e=Math.round(10*(J+Number.EPSILON))/10,fe=Math.round(10*(X+Number.EPSILON))/10,Ce=Math.round(10*(ee+Number.EPSILON))/10,be=Math.round(10*(te+Number.EPSILON))/10,ve=Math.round(10*(le+Number.EPSILON))/10,ke=Math.round(10*(ae+Number.EPSILON))/10,xe=Math.round(10*(ce+Number.EPSILON))/10,we=Math.round(10*(re+Number.EPSILON))/10,Se=Math.round(10*(oe+Number.EPSILON))/10,Ae=Math.round(10*(ne+Number.EPSILON))/10,ye=Math.round(10*(se+Number.EPSILON))/10,Ne=Math.round(10*(he+Number.EPSILON))/10,Pe=Math.round(10*(me+Number.EPSILON))/10,Ze=Math.round(10*(ie+Number.EPSILON))/10,Le=Math.round(10*(ue+Number.EPSILON))/10,Oe=Math.round(10*(de+Number.EPSILON))/10;return(0,a.createElement)(u.PanelRow,{className:""},(0,a.createElement)("table",{style:{inlineSize:"100%",captionSide:"bottom"}},(0,a.createElement)("caption",null,"Contrast Ratios"),(0,a.createElement)("thead",null,(0,a.createElement)("tr",null,(0,a.createElement)("th",{scope:"column"}),(0,a.createElement)("th",{scope:"column",className:Z},"Text 1"),(0,a.createElement)("th",{scope:"column",className:Z},"Text 2"),(0,a.createElement)("th",{scope:"column",className:Z},"Brand"),(0,a.createElement)("th",{scope:"column",className:Z},"B hover"),(0,a.createElement)("th",{scope:"column",className:Z},"Accent"),(0,a.createElement)("th",{scope:"column",className:Z},"A hover"),(0,a.createElement)("th",{scope:"column",className:Z},"Link"),(0,a.createElement)("th",{scope:"column",className:Z},"L hover"),(0,a.createElement)("th",{scope:"column",className:Z},"Visited"),(0,a.createElement)("th",{scope:"column",className:Z},"V hover"))),(0,a.createElement)("tbody",null,(0,a.createElement)("tr",null,(0,a.createElement)("th",{scope:"row"},"APCA"),(0,a.createElement)("td",{style:{background:`hsl(${I?.h}, ${I?.s}, ${I?.l})`,color:`hsl(${C?.h}, ${C?.s}, ${C?.l})`,textAlign:"center"}},ge),(0,a.createElement)("td",{style:{background:`hsl(${I?.h}, ${I?.s}, ${I?.l})`,color:`hsl(${b?.h}, ${b?.s}, ${b?.l})`,textAlign:"center"}},$e),(0,a.createElement)("td",{style:{background:`hsl(${I?.h}, ${I?.s}, ${I?.l})`,color:`hsl(${k?.h}, ${k?.s}, ${k?.l})`,textAlign:"center"}},Ee),(0,a.createElement)("td",{style:{background:`hsl(${I?.h}, ${I?.s}, ${I?.l})`,color:`hsl(${x?.h}, ${x?.s}, ${x?.l})`,textAlign:"center"}},pe),(0,a.createElement)("td",{style:{background:`hsl(${I?.h}, ${I?.s}, ${I?.l})`,color:`hsl(${A?.h}, ${A?.s}, ${A?.l})`,textAlign:"center"}},_e),(0,a.createElement)("td",{style:{background:`hsl(${I?.h}, ${I?.s}, ${I?.l})`,color:`hsl(${y?.h}, ${y?.s}, ${y?.l})`,textAlign:"center"}},fe),(0,a.createElement)("td",{style:{background:`hsl(${I?.h}, ${I?.s}, ${I?.l})`,color:`hsl(${P?.h}, ${P?.s}, ${P?.l})`,textAlign:"center"}},Ce),(0,a.createElement)("td",{style:{background:`hsl(${I?.h}, ${I?.s}, ${I?.l})`,color:`hsl(${L?.h}, ${L?.s}, ${L?.l})`,textAlign:"center"}},be),(0,a.createElement)("td",{style:{background:`hsl(${I?.h}, ${I?.s}, ${I?.l})`,color:`hsl(${M?.h}, ${M?.s}, ${M?.l})`,textAlign:"center"}},ve),(0,a.createElement)("td",{style:{background:`hsl(${I?.h}, ${I?.s}, ${I?.l})`,color:`hsl(${T?.h}, ${T?.s}, ${T?.l})`,textAlign:"center"}},ke)),(0,a.createElement)("tr",null,(0,a.createElement)("th",{scope:"row"},"WCAG 2.1"),(0,a.createElement)("td",{style:{background:`hsl(${I?.h}, ${I?.s}, ${I?.l})`,color:`hsl(${C?.h}, ${C?.s}, ${C?.l})`,textAlign:"center"}},xe),(0,a.createElement)("td",{style:{background:`hsl(${I?.h}, ${I?.s}, ${I?.l})`,color:`hsl(${b?.h}, ${b?.s}, ${b?.l})`,textAlign:"center"}},we),(0,a.createElement)("td",{style:{background:`hsl(${I?.h}, ${I?.s}, ${I?.l})`,color:`hsl(${k?.h}, ${k?.s}, ${k?.l})`,textAlign:"center"}},Se),(0,a.createElement)("td",{style:{background:`hsl(${I?.h}, ${I?.s}, ${I?.l})`,color:`hsl(${x?.h}, ${x?.s}, ${x?.l})`,textAlign:"center"}},Ae),(0,a.createElement)("td",{style:{background:`hsl(${I?.h}, ${I?.s}, ${I?.l})`,color:`hsl(${A?.h}, ${A?.s}, ${A?.l})`,textAlign:"center"}},ye),(0,a.createElement)("td",{style:{background:`hsl(${I?.h}, ${I?.s}, ${I?.l})`,color:`hsl(${y?.h}, ${y?.s}, ${y?.l})`,textAlign:"center"}},Ne),(0,a.createElement)("td",{style:{background:`hsl(${I?.h}, ${I?.s}, ${I?.l})`,color:`hsl(${P?.h}, ${P?.s}, ${P?.l})`,textAlign:"center"}},Pe),(0,a.createElement)("td",{style:{background:`hsl(${I?.h}, ${I?.s}, ${I?.l})`,color:`hsl(${L?.h}, ${L?.s}, ${L?.l})`,textAlign:"center"}},Ze),(0,a.createElement)("td",{style:{background:`hsl(${I?.h}, ${I?.s}, ${I?.l})`,color:`hsl(${M?.h}, ${M?.s}, ${M?.l})`,textAlign:"center"}},Le),(0,a.createElement)("td",{style:{background:`hsl(${I?.h}, ${I?.s}, ${I?.l})`,color:`hsl(${T?.h}, ${T?.s}, ${T?.l})`,textAlign:"center"}},Oe)))))},R={TITLE:(0,c.__)("Details of your","oxyprops"),light:(0,c.__)("Light","oxyprops"),dark:(0,c.__)("Dark","oxyprops"),dim:(0,c.__)("dim (reduced contrast) mode","oxyprops"),colorful_light:(0,c.__)("colorful light mode (brand replaces canvas)","oxyprops"),colorful_dark:(0,c.__)("colorful dark mode (brand replaces canvas)","oxyprops"),MODE:(0,c.__)("mode","oxyprops")},Q=({mode:e})=>{const t=(0,a.useContext)(n.Z),l=(0,a.useContext)(s.Z),r=(0,N.ZP)((0,N.fZ)(e)),h=(0,P.Lf)(),[m,i]=(0,o.C)(((e,t)=>{if("labUpdate"===t.type){e.reference.lab.l=t.value.l,e.reference.lab.a=t.value.a,e.reference.lab.b=t.value.b;let o=(a=(c=t.value.l,r=P.Yb.reduce((function(e,t){return Math.abs(t-c)<Math.abs(e-c)?t:e})),P.Yb.indexOf(r)),P.Yb[a]),n=h.rows.map((e=>null==e.weight?{target:-1,weight:e.weight}:{target:e.target,weight:e.weight}));e.reference.weight=n.filter((e=>e.target===o))[0].weight,l({type:"setReference",logicalColor:"canvas",value:e.reference.weight,hex:t.hex})}var a,c,r}),{reference:{lab:{l:0,a:0,b:0},weight:void 0},color:{apcaSurface1:0,apcaSurface2:0,apcaSurface3:0,apcaSurface4:0,wcagSurface1:0,wcagSurface2:0,wcagSurface3:0,wcagSurface4:0},colorHover:{apcaSurface1:0,apcaSurface2:0,apcaSurface3:0,apcaSurface4:0,wcagSurface1:0,wcagSurface2:0,wcagSurface3:0,wcagSurface4:0}}),[d,g]=(0,a.useState)(!1);return(0,a.useEffect)((()=>{const e=new w.Z(t?.settings.colors.canvas.hex);i({type:"labUpdate",value:e.lab,hex:e.toString({format:"hex"})})}),[t?.settings.colors.canvas.hex]),(0,a.createElement)(u.PanelBody,{title:R.TITLE+" "+R[e]+" "+R.MODE,className:k,icon:"admin-settings",initialOpen:!1,buttonProps:{className:x}},(0,a.createElement)(u.PanelRow,{className:`${C} ${b} ${v}`},(0,a.createElement)(u.ToggleControl,{label:"Hide A11Y checks",checked:d,onChange:()=>g(!d)}),(0,a.createElement)("h4",null,"Surface 1"),(0,a.createElement)(A,{logicalColor:"canvas",action:`surface1${r}`,color:`surface1_${e}`}),(0,a.createElement)(y,{logicalColor:"canvas"}),!d&&(0,a.createElement)(G,{logical:"canvas",mode:e,color:`surface1_${e}`})),(0,a.createElement)(u.PanelRow,{className:`${C} ${b} ${v}`},(0,a.createElement)("h4",null,"Surface 2"),(0,a.createElement)(A,{logicalColor:"canvas",action:`surface2${r}`,color:`surface2_${e}`}),(0,a.createElement)(y,{logicalColor:"canvas"}),!d&&(0,a.createElement)(G,{logical:"canvas",mode:e,color:`surface2_${e}`})),(0,a.createElement)(u.PanelRow,{className:`${C} ${b} ${v}`},(0,a.createElement)("h4",null,"Surface 3"),(0,a.createElement)(A,{logicalColor:"canvas",action:`surface3${r}`,color:`surface3_${e}`}),(0,a.createElement)(y,{logicalColor:"canvas"}),!d&&(0,a.createElement)(G,{logical:"canvas",mode:e,color:`surface3_${e}`})),(0,a.createElement)(u.PanelRow,{className:`${C} ${b} ${v}`},(0,a.createElement)("h4",null,"Surface 4"),(0,a.createElement)(A,{logicalColor:"canvas",action:`surface4${r}`,color:`surface4_${e}`}),(0,a.createElement)(y,{logicalColor:"canvas"}),!d&&(0,a.createElement)(G,{logical:"canvas",mode:e,color:`surface4_${e}`})),(0,a.createElement)(u.PanelRow,{className:`${C} ${b} ${v}`},(0,a.createElement)("h4",null,"Text 1"),(0,a.createElement)(A,{logicalColor:"canvas",action:`text1${r}`,color:`text1_${e}`}),(0,a.createElement)(y,{logicalColor:"canvas"}),!d&&(0,a.createElement)(L,{logical:"canvas",mode:e,color:`text1_${e}`})),(0,a.createElement)(u.PanelRow,{className:`${C} ${b} ${v}`},(0,a.createElement)("h4",null,"Text 2"),(0,a.createElement)(A,{logicalColor:"canvas",action:`text2${r}`,color:`text2_${e}`}),(0,a.createElement)(y,{logicalColor:"canvas"}),!d&&(0,a.createElement)(L,{logical:"canvas",mode:e,color:`text2_${e}`})),(0,a.createElement)(u.PanelRow,{className:`${C} ${b} ${v}`},(0,a.createElement)("h4",null,"Scrollbars"),(0,a.createElement)(A,{logicalColor:"canvas",action:`scrollbar${r}`,color:`scrollbar_${e}`}),(0,a.createElement)(y,{logicalColor:"canvas"})),(0,a.createElement)(u.PanelRow,{className:`${C} ${b} ${v}`},(0,a.createElement)("h4",null,"Shadows"),(0,a.createElement)(A,{logicalColor:"canvas",action:`shadowColor${r}`,color:`shadow_color_${e}`}),(0,a.createElement)(y,{logicalColor:"canvas"}),(0,a.createElement)(u.RangeControl,{onChange:e=>{l({type:`shadowStrength${r}`,value:e})},help:(0,c.__)("Define your shadow strength from 0 to 100%","oxyprops")+".",currentInput:parseInt(t?.settings?.theme[`shadow_strength_${e}`]),initialPosition:parseInt(t?.settings?.theme[`shadow_strength_${e}`]),color:"var(--o-brand)",trackColor:"var(--o-links)",railColor:"var(--o-surface-4)",min:0,max:100,step:1,className:"bK9ilqkvBhi2aAgSDj4C"})))},B=((0,c.__)("Pick from the framework default palette or define a custom color by clicking on the color band.","oxyprops"),({logical:e})=>{const t=(0,N.ZP)(e),l=(0,a.useContext)(n.Z),r=(0,a.useContext)(s.Z);return(0,a.createElement)(d.Z,null,(0,a.createElement)("h3",null,t),(0,a.createElement)("div",{className:E},(0,a.createElement)(u.SlotFillProvider,null,(0,a.createElement)(u.ColorPalette,{className:_,style:{marginBottom:"calc(28px + 12px)"},colors:S.Gm,value:l?.settings.colors.canvas.hex,onChange:e=>{((e,t)=>{const l=S.ZP.filter((e=>e.color===t))[0]?.name?S.ZP.filter((e=>e.color===t))[0]?.name:"custom";r({type:e,name:l,hex:t})})(`set${t}`,e)},clearable:!1}),(0,a.createElement)(u.Popover.Slot,null))),(0,a.createElement)("div",{className:`${E} ${p}`},(0,a.createElement)("p",null,(0,c.__)("The reference color is weight ","oxyprops")+l?.settings.colors[e].weight+" and is marked with a ⭐️."),(0,a.createElement)(I,{logicalColor:e})),(0,a.createElement)(u.Panel,{header:`${t} ${(0,c.__)("color schemes definition","oxyprops")}`,className:f},(0,a.createElement)(Q,{mode:"light"}),!l?.settings.theme.lock_mode&&l?.settings.theme.load_dark&&(0,a.createElement)(Q,{mode:"dark"}),!l?.settings.theme.lock_mode&&l?.settings.theme.load_dim&&(0,a.createElement)(Q,{mode:"dim"}),!l?.settings.theme.lock_mode&&l?.settings.theme.load_colorful_light&&(0,a.createElement)(Q,{mode:"colorful_light"}),!l?.settings.theme.lock_mode&&l?.settings.theme.load_colorful_dark&&(0,a.createElement)(Q,{mode:"colorful_dark"})),(0,a.createElement)(U.Z,null))});var Y=l(322),H=l(9747);const W=()=>{const e=(0,a.useContext)(n.Z),t=(0,a.useContext)(s.Z),l=(0,r.s0)(),[i,u]=(0,o.C)(((e,t)=>{switch(t.type){case"shadeCanvas":e.isSelectedCanvasShade=t.value;break;case"shadeBrand":e.isSelectedBrandShade=t.value;break;case"shadeAccent":e.isSelectedAccentShade=t.value;break;case"shadeLinks":e.isSelectedLinksShade=t.value;break;case"shadeVisited":e.isSelectedVisitedShade=t.value}}),{isSelectedCanvasShade:"800",isSelectedBrandShade:"800",isSelectedAccentShade:"800",isSelectedLinksShade:"800",isSelectedVisitedShade:"800"});return(0,a.useEffect)((()=>{e?.isFetching||e?.licenseStatus.is_valid||(t({type:"flashMessage",value:(0,c.__)("You must activate your license before accessing this page.","oxyprops"),color:"danger"}),l("/"))}),[e?.isFetching]),e?.isFetching?(0,a.createElement)("div",{className:"oxyprops-loader-container"},(0,a.createElement)(m.Z,null)):(0,a.createElement)(h.Z,{title:(0,c.__)("Colors","oxyprops")},(0,a.createElement)(Y.Z,{title:(0,c.__)("Color Schemes","oxyprops")},(0,a.createElement)(H.Z,{type:"flexCards2"},(0,a.createElement)($,null)),(0,a.createElement)(U.Z,null)),(0,a.createElement)(Y.Z,{title:(0,c.__)("Logical Colors","oxyprops")},(0,a.createElement)(H.Z,{type:"flexCards2"},(0,a.createElement)(B,{logical:"canvas"}),["brand","accent","links","visited"].map((e=>(0,a.createElement)(D,{key:e,logical:e}))))))}},8799:(e,t,l)=>{l.d(t,{Z:()=>c});var a=l(9307);const c=({tag:e="div",type:t="inner",invert:l=!1,children:c})=>{let r;r="outer"===t?"qFCanvbigfa9Y9ijoKMM":"mczq3_JqAY21VjjCU2d8";const o=`${e}`;return(0,a.createElement)(o,{className:`${r} ${l?"o-invert":""}`},c)}},9747:(e,t,l)=>{l.d(t,{Z:()=>c});var a=l(9307);const c=({type:e,children:t})=>{let l;switch(e){case"leftSidebar":l="JxUlD7V7R9564M6L4CLo";break;case"flexCards2":l="ekcEvG5QJYM7hKOicrHQ";break;case"flexCards3":l="mMGiJuvw83eQmuORiNsk";break;case"flexCards4":l="sNlxoySUPnru6IUm_vxS";break;case"flexCards3Stretch":l="uKogy5yuyhGjyqdx8LQv";break;default:l="EgmOT3mZ2ba10GQU9bBA"}return(0,a.createElement)("div",{className:l},t)}},8893:(e,t,l)=>{l.d(t,{Z:()=>c});var a=l(9307);const c=()=>(0,a.createElement)("div",{className:"dots-loading"},(0,a.createElement)("div",null))},5072:(e,t,l)=>{l.d(t,{Z:()=>r});var a=l(9307),c=l(8799);const r=({title:e,children:t})=>((0,a.useEffect)((()=>{document.title=`${e} » OxyProps`,window.scrollTo(0,0)}),[e]),(0,a.createElement)(c.Z,{type:"outer",tag:"main"},t))},8491:(e,t,l)=>{l.d(t,{Z:()=>s});var a=l(9307),c=l(5736),r=l(5609),o=l(9522),n=l(9678);const s=()=>{const e=(0,a.useContext)(o.Z),t=(0,a.useContext)(n.Z);return(0,a.createElement)(r.Button,{className:"oxyprops-action-button "+(1>e?.countUpdateSettings?"":"active"),variant:1<=e?.countUpdateSettings?"primary":"secondary",onClick:()=>{t({type:"save"})},disabled:e?.isSaving,icon:(0,a.createElement)("svg",{xmlns:"http://www.w3.org/2000/svg",width:"1em",height:"1em",preserveAspectRatio:"xMidYMid meet",viewBox:"0 0 24 24"},(0,a.createElement)("path",{fill:"currentColor",d:"M3 21V3h14l4 4v14Zm9-3q1.25 0 2.125-.875T15 15q0-1.25-.875-2.125T12 12q-1.25 0-2.125.875T9 15q0 1.25.875 2.125T12 18Zm-6-8h9V6H6Z"}))},e?.isSaving&&(0,a.createElement)(a.Fragment,null,(0,a.createElement)(r.Spinner,null)," ",(0,c.__)("Saving")),!e?.isSaving&&1>e?.countUpdateSettings&&(0,c.__)("Save Settings"),!e?.isSaving&&1<=e?.countUpdateSettings&&(0,c.__)("Changes Detected - Save"))}},322:(e,t,l)=>{l.d(t,{Z:()=>r});var a=l(9307),c=l(8799);const r=({title:e,invert:t,children:l})=>(0,a.createElement)(c.Z,{type:"outer",tag:"section",invert:t},(0,a.createElement)(c.Z,{type:"inner",tag:"div"},e&&(0,a.createElement)("h2",null,e),l))},6767:(e,t,l)=>{l.d(t,{ZP:()=>c,fZ:()=>a}),l(6776);const a=e=>e.replace(/([-_][a-z])/gi,(e=>e.toUpperCase().replace("-","").replace("_",""))),c=e=>"string"!=typeof e||0===e.length?"":"text-basic"===e?"Basic Text":"omenubar"===e?"Menu Bar":"oicon"===e?"OP Icon":"bricksprops-light-dark-toggle"===e?"Light/Dark":"oschemesswitcher"===e?"All Schemes":e.charAt(0).toUpperCase()+e.slice(1)}}]);