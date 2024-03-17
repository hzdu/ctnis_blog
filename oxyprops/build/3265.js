"use strict";(globalThis.webpackChunkoxyprops=globalThis.webpackChunkoxyprops||[]).push([[3265],{3265:(t,a,e)=>{e.r(a),e.d(a,{Stripe:()=>n});const n={content:[{id:"nylxmq",name:"div",parent:0,children:["jgxfun"],settings:{},label:"App Container"},{id:"jgxfun",name:"section",parent:"nylxmq",children:["vftlrf","iwjymh","znekxm","fmobpk"],settings:{_cssGlobalClasses:["oxyprops-o-pad-bl-7","oxyprops-o-relative","oxyprops-o-isolate"]}},{id:"vftlrf",name:"bricksprops-light-dark-toggle",parent:"jgxfun",children:[],settings:{toggleSize:"var(--o-size-fluid-2)",_cssGlobalClasses:["oxyprops-o-absolute"],_top:"var(--o-size-fluid-2)",_right:"var(--o-size-fluid-2)",toggleColor:{raw:"var(--o-surface-3)"},toggleHoverColor:{raw:"var(--o-surface-4)"}},themeStyles:[]},{id:"iwjymh",name:"container",parent:"jgxfun",children:["xmkpho","gcfqru","rdegvm"],settings:{_cssGlobalClasses:["oxyprops-o-relative"]}},{id:"xmkpho",name:"heading",parent:"iwjymh",children:[],settings:{text:"Financial infrastructure of the internet",tag:"h1",_typography:{"font-size":"var(--o-fluid-font-6)","line-height":"var(--o-font-lineheight-0)",color:{raw:"var(--o-surface-2)"}},_widthMax:"10ch",_cssGlobalClasses:["oxyprops-o-absolute"],_zIndex:"-1",_opacity:"0.3"}},{id:"gcfqru",name:"heading",parent:"iwjymh",children:[],settings:{text:"Financial infrastructure of the internet",tag:"h1",_typography:{"font-size":"var(--o-fluid-font-6)","line-height":"var(--o-font-lineheight-0)",color:{raw:"var(--o-text-2)"}},_widthMax:"10ch",_cssGlobalClasses:["oxyprops-o-absolute"],_zIndex:"var(--o-layer-2)",_opacity:"1",_cssCustom:"#blend-heading {\n  mix-blend-mode : color-burn;\n}",_cssId:"blend-heading",_attributes:[{id:"krplwo",name:"aria-hidden",value:"true"}]}},{id:"rdegvm",name:"heading",parent:"iwjymh",children:[],settings:{text:"Financial infrastructure of the internet",tag:"h1",_typography:{"font-size":"var(--o-fluid-font-6)","line-height":"var(--o-font-lineheight-0)",color:{raw:"var(--o-text-2)"}},_widthMax:"10ch",_cssGlobalClasses:["oxyprops-o-absolute"],_zIndex:"var(--o-layer-2)",_opacity:"0.3",_attributes:[{id:"krplwo",name:"aria-hidden",value:"true"}]}},{id:"znekxm",name:"div",parent:"jgxfun",children:[],settings:{tag:"custom",customTag:"canvas",_cssGlobalClasses:["oxyprops-o-absolute","tisfch"],_width:"100%",_height:"50vh",_background:{color:{raw:"var(--o-brand)"}},_zIndex:"-1",_cssCustom:"#canv {\n\tclip-path: polygon(0 0, 100% 0, 100% 33%, 0 100%);\n}",_attributes:[{id:"mskfpn",name:"width",value:"60"},{id:"fstndv",name:"height",value:"50"},{id:"ynepyc",name:"red",value:"0.9"},{id:"scqlqj",name:"green",value:"0.8"},{id:"mgodfo",name:"blue",value:"1"},{id:"xrlhfp",name:"variable-part",value:"0.25"},{id:"rimljo",name:"dark-ratio",value:"0.45"}],_cssId:"canv"},label:"Canvas"},{id:"fmobpk",name:"code",parent:"jgxfun",children:[],settings:{code:'<script>\n  \n  const gradientCanvas = document.getElementById("canv");\n  const blendHeading = document.getElementById("blend-heading");\n  \n  const canvasContext = gradientCanvas.getContext("2d");\n  \n  const canvasWidth = gradientCanvas.getAttribute("width");\n  const canvasHeight = gradientCanvas.getAttribute("height");\n  const redRatio = gradientCanvas.getAttribute("red");\n  const greenRatio = gradientCanvas.getAttribute("green");\n  const blueRatio = gradientCanvas.getAttribute("blue");\n  const variablePart = gradientCanvas.getAttribute("variable-part");\n  const darkRatio = gradientCanvas.getAttribute("dark-ratio");\n  \n  let colorScheme = document.firstElementChild.getAttribute("color-scheme");\n  let actualDarkRatio = colorScheme === "light" ? 1 : darkRatio ;\n  \n  const setColor = (x, y, r, g, b) => {\n  canvasContext.fillStyle = "rgb(" + r + "," + g + "," + b + ")";\n  canvasContext.fillRect(x, y, 1, 1);\n};\n  \n  const redComponent = (x, y, t, actualDarkRatio) => {\n    return (\n    \tMath.floor(256 * (1 - variablePart)* actualDarkRatio * redRatio) +\n      Math.floor(\n        256 * variablePart * actualDarkRatio * redRatio\n        *Math.cos((x*x - y*y) / 300 + t))\n    );\n  }\n  \n  const greenComponent = (x, y, t, actualDarkRatio) => {\n    return (\n    \tMath.floor(256 * (1 - variablePart) * actualDarkRatio * greenRatio) +\n      Math.floor(\n        256 * variablePart * actualDarkRatio * greenRatio\n        *Math.sin(\n          (x*x* Math.cos(t/4) +\n           y*y * Math.sin(t/3)) / 300)\n      )\n    );\n  }\n  \n  const blueComponent = (x, y, t, actualDarkRatio) => {\n    return (\n    \tMath.floor(256 * (1 - variablePart) * actualDarkRatio * blueRatio) +\n      Math.floor(\n        256 * variablePart * actualDarkRatio * blueRatio\n        *Math.sin(\n          5 * Math.sin(t/9) +\n          (x-100) * (x-100) + (y-100) * (y-100)) / 1100)\n    \t);\n  }\n  \n  let t = 0;\n  \n  const generateThatCanvas = () => {\n    for (x = 0; x <= canvasWidth; x++) {\n    \tfor (y = 0; y <= canvasHeight; y++) {\n        setColor(\n          x,\n          y,\n          redComponent(x, y, t, actualDarkRatio),\n          greenComponent(x, y, t, actualDarkRatio),\n          blueComponent(x, y, t, actualDarkRatio)\n        );\n      }\n    }\n    t = t + 0.01;\n    \n    colorScheme = document.firstElementChild.getAttribute("color-scheme");\n\t\t\n    if(colorScheme === "light"){\n      actualDarkRatio = 1;\n      blendHeading.style.mixBlendMode = "color-burn";\n    }else{\n      actualDarkRatio = darkRatio;\n      blendHeading.style.mixBlendMode = "color-dodge";\n    }\n    \n    window.requestAnimationFrame(generateThatCanvas);\n  };\n\n   generateThatCanvas();\n  \n<\/script>',executeCode:!0}}],source:"bricksCopiedElements",sourceUrl:"https://oxyprops.com",version:"1.7",globalClasses:[{id:"oxyprops-o-pad-bl-7",name:"o-pad-bl-7",settings:[]},{id:"oxyprops-o-relative",name:"o-relative",settings:[]},{id:"oxyprops-o-isolate",name:"o-isolate",settings:[]},{id:"oxyprops-o-absolute",name:"o-absolute",settings:[]},{id:"tisfch",name:"o-inset-0",settings:{_gradient:{applyTo:"background",colors:[{id:"crmidc",color:{raw:"var(--o-surface-1)"},stop:"5"},{id:"nymsoy",color:{raw:"transparent"},stop:"50"}],angle:"0"}}}],globalElements:[]}}}]);