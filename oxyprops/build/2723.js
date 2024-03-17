"use strict";(globalThis.webpackChunkoxyprops=globalThis.webpackChunkoxyprops||[]).push([[2723,4285],{4285:(t,o,e)=>{e.r(o),e.d(o,{addElementsFromEmmetAbbreviation:()=>I,getOxygenElementName:()=>c});const C=["address","article","aside","blockquote","dd","details","dialog","div","dl","dt","fieldset","figure","footer","form","header","hgroup","hr","input","li","main","menu","nav","ol","pre","summary","ul"],g=["abbr","address","b","bdi","bdo","big","cite","code","del","dfn","em","i","ins","kbd","label","legend","mark","p","q","rp","rt","ruby","s","samp","small","span","strike","strong","sub","sup","time","u","var","wbr"],I=function(t){var o=0,e=t.target;try{const t=document.querySelector("#ct-artificial-viewport")?.contentWindow;var I=t?.parseEmmetAbbreviation(e.value)}catch(t){0<=t.message.toLowerCase().indexOf("unexpected character")?$scope.iframeScope.showNoticeModal('<div>Unexpected character in abbreviation. Spaces are not allowed. <a target="_blank" href="https://docs.emmet.io/cheat-sheet/">Click here</a> for examples of valid abbreviations</div>'):$scope.iframeScope.showNoticeModal("<div>"+t.message.replace(/(?:\r\n|\r|\n)/g,"<br>")+"</div>")}I&&I.children&&(function t(o,e){for(var C in o)if(o.hasOwnProperty(C)){var g=o[C],I=$scope.iframeScope.getOxygenElementName(g.name);if("oxy_header"==I&&g.children&&g.children.length){$scope.iframeScope.showNoticeModal("<div>Sorry, Header Builder doesn't support children elements to be added via Emmet</div>"),e=!0;break}if(["ct_slide","oxy_shape_divider","oxy_header_row","oxy_header_left","oxy_header_center","oxy_header_right","ct_span","oxy_tab","oxy_tab_content","oxy_dynamic_list"].includes(I)){$scope.iframeScope.showNoticeModal("<div>"+g.name+" is not allowed to be used in Emmet</div>"),e=!0;break}if(!I){$scope.iframeScope.showNoticeModal("<div>"+g.name+" is not an Oxygen element</div>"),e=!0;break}g.children&&g.children.length&&(e=t(g.children,e))}return e}(I.children,!1)||(function t(e){for(var I in e)if(e.hasOwnProperty(I)){var c=e[I],i=$scope.iframeScope.getOxygenElementName(c.name);if(i){if($scope.iframeScope.$digest(),o=$scope.iframeScope.addComponent(i),void 0!==c.attributes)for(var I in c.attributes)if(c.attributes.hasOwnProperty(I)){var A=c.attributes[I],a=A.value[0];"id"==A.name?($scope.iframeScope.component.options[$scope.iframeScope.component.active.id].selector=a,$scope.iframeScope.setOption($scope.iframeScope.component.active.id,$scope.iframeScope.component.active.name,"selector")):"class"==A.name?$scope.iframeScope.validateClassName(a)&&$scope.iframeScope.addClassToComponent($scope.iframeScope.component.active.id,a):$scope.addCustomAttribute(A.name,a)}if("ct_headline"==i&&0<=["h2","h3","h4","h5","h6"].indexOf(c.name)&&($scope.iframeScope.setOptionModel("tag",c.name),$scope.iframeScope.$digest(),$scope.iframeScope.changeTag()),"ct_div_block"==i&&0<=C.indexOf(c.name)&&($scope.iframeScope.setOptionModel("tag",c.name),$scope.iframeScope.$digest(),$scope.iframeScope.changeTag()),"ct_text_block"==i&&0<=g.indexOf(c.name)&&($scope.iframeScope.setOptionModel("tag",c.name),$scope.iframeScope.$digest(),$scope.iframeScope.changeTag()),"ct_slider"!=i||c.children&&0!=c.children.length||$scope.iframeScope.waitOxygenTree((function(){$scope.iframeScope.addComponent("ct_slide",!1,!0),$scope.iframeScope.addComponent("ct_slide",!1,!0),$scope.iframeScope.addComponent("ct_slide",!1,!0)})),"oxy_header"==i)var L=s((function(){$scope.iframeScope.waitOxygenTree((function(){$scope.iframeScope.addComponent("oxy_header_row")})),s.cancel(L)}),0,!1);void 0!==c.value&&$scope.iframeScope.setOptionModel("ct_content",c.value[0]),$scope.iframeScope.findComponentItem($scope.iframeScope.componentsTree.children,$scope.iframeScope.component.active.id,$scope.iframeScope.getComponentItem).options.nicename=`<${c.name}> ${i}`,c.children&&c.children.length&&t(c.children),$scope.iframeScope.activateComponent($scope.iframeScope.component.active.parent.id)}}}(I.children),$scope.iframeScope.activateComponent(o),$scope.switchActionTab("componentBrowser"),$scope.emmetInputFocus=!0))},c=function(t){if(void 0!==$scope.iframeScope.niceNames[t])return t;t=t.replace("-"," ");var o=Object.keys($scope.iframeScope.niceNames);for(var e in o)if(o.hasOwnProperty(e)){var I=o[e],c=$scope.iframeScope.niceNames[I];if(t.toLowerCase()==c.toLowerCase())return I}var i=[{tagName:"ct_link_text",aliases:["a","link"]},{tagName:"ct_div_block",aliases:C},{tagName:"ct_headline",aliases:["h","h1","h2","h3","h4","h5","h6"]},{tagName:"ct_image",aliases:["img"]},{tagName:"ct_text_block",aliases:g}];for(var e in i)if(i.hasOwnProperty(e)){var A=i[e];if(-1<A.aliases.indexOf(t))return A.tagName}return!1}},2723:(t,o,e)=>{e.r(o);var C=e(4078),g=e(4285),I=e(6334);const c=()=>{const t=atob("aHRtbCB7CgogICAgLyogVGhpcyBzdHlsZXNoZWV0IGFsbG93cyB5b3UgdG8gY3VzdG9taXplIHlvdXIgY29sb3Igc2NoZW1lcy4KICAgICAgIEZvciBlYWNoIHNjaGVtZSAobGlnaHQgLyBkYXJrIC8gZGltIC8gY29sb3JmdWwgbGlnaHQgLyBjb2xvcmZ1bCBkYXJrKSwKICAgICAgIHlvdSBjYW4gcmVkZWZpbmUgYSBjdXN0b20gY29sb3IgZm9yIGVhY2ggb2YgdGhlIGxvZ2ljYWwgY29sb3JzLgogICAgICAgWW91IGNhbiB1c2UgYW55IENTUyB2YWxpZCBjb2xvciBzeW50YXggKGhzbCAvIHJnYiAvIGhleC4uLikuCiAgICAgICBGb3IgaHNoIHNwZWNpZmljIHByb3BzLCBlbnRlciB0aGUgSCBTIEwgdmFsdWVzIHdpdGggbm8gc2VwYXJhdG9yLgogIAogICAgICAgRm9yIGV4YW1wbGUsIHlvdSBjYW4gcmVkZWZpbmUgeW91ciBicmFuZCBjb2xvciBmb3IgbGlnaHQgYW5kIGRhcmsgbW9kZSBsaWtlIHRoaXMgOgogIAogICAgICAgLS1vLWJyYW5kLWxpZ2h0OiAjMDAwMEJCOwogICAgICAgLS1vLWJyYW5kLWRhcms6IHJnYigxMzYsMTM2LDI1NSk7CiAgCiAgICAgICBhbmQgdGhlaXIgaHNsIHZlcnNpb25zIDoKICAgICAgIC0tby1icmFuZC1saWdodC1oc2w6IDI0MCAxMDAlIDM2LjclOwogICAgICAgLS1vLWJyYW5kLWRhcmstaHNsOiAyNDAgMTAwJSA3Ni43JTsKICAKICAgICAgIFJlYWR5ID8gU2ltcGx5IHVuY29tbWVudCB0aGUgbGluZXMgeW91IHdhbnQgdG8gcmVkZWZpbmUgYW5kIHNldCB5b3VyIGN1c3RvbSB2YWx1ZXMuCiAgICAqLwogICAgICAKICAgIC8qIFJlZGVmaW5lIHlvdXIgbWFpbiBCYWNrZ3JvdW5kIGNvbG9yIGhlcmUuIFVzZSBhIGxvZ2ljYWwgY29sb3IgZm9yIGxpZ2h0IC8gZGFyayByZXNwb25zaXZlbmVzcyAqLwogICAgICAvKgogICAgICBiYWNrZ3JvdW5kLWNvbG9yOiB2YXIoLS1vLXN1cmZhY2UtMSk7CiAgICAgICovCiAgCiAgICAgIC8qIGxpZ2h0ICovCiAgCiAgICAgIC8qCiAgICAgIC0tby1icmFuZC1saWdodDogdmFyKC0tby1icmFuZC00MDApOwogICAgICAtLW8tYnJhbmQtbGlnaHQtaHNsOiB2YXIoLS1vLWJyYW5kLTQwMC1oc2wpOwogICAgICAtLW8tYnJhbmQtaG92ZXItbGlnaHQ6IHZhcigtLW8tYnJhbmQtNjAwKTsKICAgICAgLS1vLWFjY2VudC1saWdodDogdmFyKC0tby1hY2NlbnQtMjAwKTsKICAgICAgLS1vLWFjY2VudC1saWdodC1oc2w6IHZhcigtLW8tYWNjZW50LTIwMC1oc2wpOwogICAgICAtLW8tYWNjZW50LWhvdmVyLWxpZ2h0OiB2YXIoLS1vLWFjY2VudC00MDApOwogICAgICAtLW8tbGlua3MtbGlnaHQ6IHZhcigtLW8tbGlua3MtNTAwKTsKICAgICAgLS1vLWxpbmtzLWxpZ2h0LWhzbDogdmFyKC0tby1saW5rcy01MDAtaHNsKTsKICAgICAgLS1vLWxpbmtzLWhvdmVyLWxpZ2h0OiB2YXIoLS1vLWxpbmtzLTcwMCk7CiAgICAgIC0tby12aXNpdGVkLWxpZ2h0OiB2YXIoLS1vLXZpc2l0ZWQtNDAwKTsKICAgICAgLS1vLXZpc2l0ZWQtbGlnaHQtaHNsOiB2YXIoLS1vLXZpc2l0ZWQtNDAwLWhzbCk7CiAgICAgIC0tby12aXNpdGVkLWhvdmVyLWxpZ2h0OiB2YXIoLS1vLXZpc2l0ZWQtNjAwKTsKICAgICAgLS1vLXRleHQtMS1saWdodDogdmFyKC0tby1jYW52YXMtOTAwKTsKICAgICAgLS1vLXRleHQtMi1saWdodDogdmFyKC0tby1jYW52YXMtNzAwKTsKICAgICAgLS1vLXN1cmZhY2UtMS1saWdodDogdmFyKC0tby1jYW52YXMtMDE1KTsKICAgICAgLS1vLXN1cmZhY2UtMi1saWdodDogdmFyKC0tby1jYW52YXMtMDI1KTsKICAgICAgLS1vLXN1cmZhY2UtMy1saWdodDogdmFyKC0tby1jYW52YXMtMDUwKTsKICAgICAgLS1vLXN1cmZhY2UtNC1saWdodDogdmFyKC0tby1jYW52YXMtMDc1KTsKICAgICAgLS1vLXNoYWRvdy1jb2xvci1saWdodDogdmFyKC0tby1jYW52YXMtOTAwLWhzbCk7CiAgICAgIC0tby1zaGFkb3ctc3RyZW5ndGgtbGlnaHQ6IDIlOwogICAgICAtLW8tc2Nyb2xsYmFyLWNvbG9yLWxpZ2h0OiB2YXIoLS1vLWNhbnZhcy00MDApOwogICAgICAqLwogIAogICAgICAvKiBkYXJrICovCiAgICAgIC8qCiAgICAgIC0tby1icmFuZC1kYXJrOiB2YXIoLS1vLWJyYW5kLTEwMCk7CiAgICAgIC0tby1icmFuZC1kYXJrLWhzbDogdmFyKC0tby1icmFuZC0xMDAtaHNsKTsKICAgICAgLS1vLWJyYW5kLWhvdmVyLWRhcms6IHZhcigtLW8tYnJhbmQtMDc1KTsKICAgICAgLS1vLWFjY2VudC1kYXJrOiB2YXIoLS1vLWFjY2VudC0wODUpOwogICAgICAtLW8tYWNjZW50LWRhcmstaHNsOiB2YXIoLS1vLWFjY2VudC0wODUtaHNsKTsKICAgICAgLS1vLWFjY2VudC1ob3Zlci1kYXJrOiB2YXIoLS1vLWFjY2VudC0wNTApOwogICAgICAtLW8tbGlua3MtZGFyazogdmFyKC0tby1saW5rcy0wODUpOwogICAgICAtLW8tbGlua3MtZGFyay1oc2w6IHZhcigtLW8tbGlua3MtMDg1LWhzbCk7CiAgICAgIC0tby1saW5rcy1ob3Zlci1kYXJrOiB2YXIoLS1vLWxpbmtzLTA1MCk7CiAgICAgIC0tby12aXNpdGVkLWRhcms6IHZhcigtLW8tdmlzaXRlZC0wODUpOwogICAgICAtLW8tdmlzaXRlZC1kYXJrLWhzbDogdmFyKC0tby12aXNpdGVkLTA4NS1oc2wpOwogICAgICAtLW8tdmlzaXRlZC1ob3Zlci1kYXJrOiB2YXIoLS1vLXZpc2l0ZWQtMDUwKTsKICAgICAgLS1vLXRleHQtMS1kYXJrOiB2YXIoLS1vLWNhbnZhcy0wMTUpOwogICAgICAtLW8tdGV4dC0yLWRhcms6IHZhcigtLW8tY2FudmFzLTAyNSk7CiAgICAgIC0tby1zdXJmYWNlLTEtZGFyazogdmFyKC0tby1jYW52YXMtOTAwKTsKICAgICAgLS1vLXN1cmZhY2UtMi1kYXJrOiB2YXIoLS1vLWNhbnZhcy04MDApOwogICAgICAtLW8tc3VyZmFjZS0zLWRhcms6IHZhcigtLW8tY2FudmFzLTcwMCk7CiAgICAgIC0tby1zdXJmYWNlLTQtZGFyazogdmFyKC0tby1jYW52YXMtNjAwKTsKICAgICAgLS1vLXNoYWRvdy1jb2xvci1kYXJrOiB2YXIoLS1vLWNhbnZhcy0xMDAwLWhzbCk7CiAgICAgIC0tby1zaGFkb3ctc3RyZW5ndGgtZGFyazogMjUlOwogICAgICAtLW8tc2Nyb2xsYmFyLWNvbG9yLWRhcms6IHZhcigtLW8tY2FudmFzLTcwMCk7CiAgICAgICovCiAgCiAgICAgIC8qIGRpbSAmIGRpbSBpbnZlcnQgKi8KICAgICAgLyoKICAgICAgLS1vLWJyYW5kLWRpbTogdmFyKC0tby1icmFuZC00MDApOwogICAgICAtLW8tYnJhbmQtZGltLWhzbDogdmFyKC0tby1icmFuZC00MDAtaHNsKTsKICAgICAgLS1vLWJyYW5kLWhvdmVyLWRpbTogdmFyKC0tby1icmFuZC0yMDApOwogICAgICAtLW8tYWNjZW50LWRpbTogdmFyKC0tby1hY2NlbnQtNDAwKTsKICAgICAgLS1vLWFjY2VudC1kaW0taHNsOiB2YXIoLS1vLWFjY2VudC00MDAtaHNsKTsKICAgICAgLS1vLWFjY2VudC1ob3Zlci1kaW06IHZhcigtLW8tYWNjZW50LTIwMCk7CiAgICAgIC0tby1saW5rcy1kaW06IHZhcigtLW8tbGlua3MtNDAwKTsKICAgICAgLS1vLWxpbmtzLWRpbS1oc2w6IHZhcigtLW8tbGlua3MtNDAwLWhzbCk7CiAgICAgIC0tby1saW5rcy1ob3Zlci1kaW06IHZhcigtLW8tbGlua3MtMjAwKTsKICAgICAgLS1vLXZpc2l0ZWQtZGltOiB2YXIoLS1vLXZpc2l0ZWQtNDAwKTsKICAgICAgLS1vLXZpc2l0ZWQtZGltLWhzbDogdmFyKC0tby12aXNpdGVkLTQwMC1oc2wpOwogICAgICAtLW8tdmlzaXRlZC1ob3Zlci1kaW06IHZhcigtLW8tdmlzaXRlZC0yMDApOwogICAgICAtLW8tdGV4dC0xLWRpbTogdmFyKC0tby1jYW52YXMtMzAwMDApOwogICAgICAtLW8tdGV4dC0yLWRpbTogdmFyKC0tby1jYW52YXMtNDAwMDApOwogICAgICAtLW8tc3VyZmFjZS0xLWRpbTogdmFyKC0tby1jYW52YXMtODAwMDApOwogICAgICAtLW8tc3VyZmFjZS0yLWRpbTogdmFyKC0tby1jYW52YXMtNzAwMDApOwogICAgICAtLW8tc3VyZmFjZS0zLWRpbTogdmFyKC0tby1jYW52YXMtNjAwMDApOwogICAgICAtLW8tc3VyZmFjZS00LWRpbTogdmFyKC0tby1jYW52YXMtNTAwMDApOwogICAgICAtLW8tc2hhZG93LWNvbG9yLWRpbTogdmFyKC0tby1jYW52YXMtOTAwMDAtaHNsKTsKICAgICAgLS1vLXNoYWRvdy1zdHJlbmd0aC1kaW06IDMwJTsKICAgICAgLS1vLXNjcm9sbGJhci1jb2xvci1kaW06IHZhcigtLW8tY2FudmFzLTYwMDAwKTsKICAKICAgICAgLS1vLWJyYW5kLWludmVydC1kaW06IHZhcigtLW8tYnJhbmQtNjAwKTsKICAgICAgLS1vLWJyYW5kLWludmVydC1kaW0taHNsOiB2YXIoLS1vLWJyYW5kLTYwMC1oc2wpOwogICAgICAtLW8tYnJhbmQtaG92ZXItaW52ZXJ0LWRpbTogdmFyKC0tby1icmFuZC00MDApOwogICAgICAtLW8tYWNjZW50LWludmVydC1kaW06IHZhcigtLW8tYWNjZW50LTYwMCk7CiAgICAgIC0tby1hY2NlbnQtaW52ZXJ0LWRpbS1oc2w6IHZhcigtLW8tYWNjZW50LTYwMC1oc2wpOwogICAgICAtLW8tYWNjZW50LWhvdmVyLWludmVydC1kaW06IHZhcigtLW8tYWNjZW50LTQwMCk7CiAgICAgIC0tby1saW5rcy1pbnZlcnQtZGltOiB2YXIoLS1vLWxpbmtzLTYwMCk7CiAgICAgIC0tby1saW5rcy1pbnZlcnQtZGltLWhzbDogdmFyKC0tby1saW5rcy02MDAtaHNsKTsKICAgICAgLS1vLWxpbmtzLWhvdmVyLWludmVydC1kaW06IHZhcigtLW8tbGlua3MtODAwKTsKICAgICAgLS1vLXZpc2l0ZWQtaW52ZXJ0LWRpbTogdmFyKC0tby12aXNpdGVkLTYwMCk7CiAgICAgIC0tby12aXNpdGVkLWludmVydC1kaW0taHNsOiB2YXIoLS1vLXZpc2l0ZWQtNjAwLWhzbCk7CiAgICAgIC0tby12aXNpdGVkLWhvdmVyLWludmVydC1kaW06IHZhcigtLW8tdmlzaXRlZC04MDApOwogICAgICAtLW8tdGV4dC0xLWludmVydC1kaW06IHZhcigtLW8tY2FudmFzLTcwMCk7CiAgICAgIC0tby10ZXh0LTItaW52ZXJ0LWRpbTogdmFyKC0tby1jYW52YXMtNjAwKTsKICAgICAgLS1vLXN1cmZhY2UtMS1pbnZlcnQtZGltOiB2YXIoLS1vLWNhbnZhcy0yMDApOwogICAgICAtLW8tc3VyZmFjZS0yLWludmVydC1kaW06IHZhcigtLW8tY2FudmFzLTMwMCk7CiAgICAgIC0tby1zdXJmYWNlLTMtaW52ZXJ0LWRpbTogdmFyKC0tby1jYW52YXMtNDAwKTsKICAgICAgLS1vLXN1cmZhY2UtNC1pbnZlcnQtZGltOiB2YXIoLS1vLWNhbnZhcy01MDApOwogICAgICAtLW8tc2hhZG93LWNvbG9yLWludmVydC1kaW06IHZhcigtLW8tY2FudmFzLTkwMC1oc2wpOwogICAgICAtLW8tc2hhZG93LXN0cmVuZ3RoLWludmVydC1kaW06IDE1JTsKICAgICAgLS1vLXNjcm9sbGJhci1jb2xvci1pbnZlcnQtZGltOiB2YXIoLS1vLWNhbnZhcy00MDApOwogICAgICAvKgogIAogICAgICAvKiBjb2xvcmZ1bCBsaWdodCAqLwogICAgICAvKgogICAgICAtLW8tYnJhbmQtY29sb3JmdWwtbGlnaHQ6IHZhcigtLW8tYnJhbmQtNjAwKTsKICAgICAgLS1vLWJyYW5kLWNvbG9yZnVsLWxpZ2h0LWhzbDogdmFyKC0tby1icmFuZC02MDAtaHNsKTsKICAgICAgLS1vLWJyYW5kLWhvdmVyLWNvbG9yZnVsLWxpZ2h0OiB2YXIoLS1vLWJyYW5kLTQwMCk7CiAgICAgIC0tby1hY2NlbnQtY29sb3JmdWwtbGlnaHQ6IHZhcigtLW8tYWNjZW50LTYwMCk7CiAgICAgIC0tby1hY2NlbnQtY29sb3JmdWwtbGlnaHQtaHNsOiB2YXIoLS1vLWFjY2VudC02MDAtaHNsKTsKICAgICAgLS1vLWFjY2VudC1ob3Zlci1jb2xvcmZ1bC1saWdodDogdmFyKC0tby1hY2NlbnQtNDAwKTsKICAgICAgLS1vLWxpbmtzLWNvbG9yZnVsLWxpZ2h0OiB2YXIoLS1vLWxpbmtzLTYwMCk7CiAgICAgIC0tby1saW5rcy1jb2xvcmZ1bC1saWdodC1oc2w6IHZhcigtLW8tbGlua3MtNjAwLWhzbCk7CiAgICAgIC0tby1saW5rcy1ob3Zlci1jb2xvcmZ1bC1saWdodDogdmFyKC0tby1saW5rcy04MDApOwogICAgICAtLW8tdmlzaXRlZC1jb2xvcmZ1bC1saWdodDogdmFyKC0tby12aXNpdGVkLTYwMCk7CiAgICAgIC0tby12aXNpdGVkLWNvbG9yZnVsLWxpZ2h0LWhzbDogdmFyKC0tby12aXNpdGVkLTYwMC1oc2wpOwogICAgICAtLW8tdmlzaXRlZC1ob3Zlci1jb2xvcmZ1bC1saWdodDogdmFyKC0tby12aXNpdGVkLTgwMCk7CiAgICAgIC0tby10ZXh0LTEtY29sb3JmdWwtbGlnaHQ6IHZhcigtLW8tYnJhbmQtOTAwKTsKICAgICAgLS1vLXRleHQtMi1jb2xvcmZ1bC1saWdodDogdmFyKC0tby1icmFuZC03MDApOwogICAgICAtLW8tc3VyZmFjZS0xLWNvbG9yZnVsLWxpZ2h0OiB2YXIoLS1vLWJyYW5kLTAxNSk7CiAgICAgIC0tby1zdXJmYWNlLTItY29sb3JmdWwtbGlnaHQ6IHZhcigtLW8tYnJhbmQtMTAwKTsKICAgICAgLS1vLXN1cmZhY2UtMy1jb2xvcmZ1bC1saWdodDogdmFyKC0tby1icmFuZC0yMDApOwogICAgICAtLW8tc3VyZmFjZS00LWNvbG9yZnVsLWxpZ2h0OiB2YXIoLS1vLWJyYW5kLTMwMCk7CiAgICAgIC0tby1zaGFkb3ctY29sb3ItY29sb3JmdWwtbGlnaHQ6IHZhcigtLW8tYnJhbmQtMTAwMC1oc2wpOwogICAgICAtLW8tc2hhZG93LXN0cmVuZ3RoLWNvbG9yZnVsLWxpZ2h0OiAyJTsKICAgICAgLS1vLXNjcm9sbGJhci1jb2xvci1jb2xvcmZ1bC1saWdodDogdmFyKC0tby1icmFuZC00MDApOwogICAgICAqLwogIAogICAgICAvKiBjb2xvcmZ1bCBkYXJrICovCiAgICAgIC8qCiAgICAgIC0tby1icmFuZC1jb2xvcmZ1bDogdmFyKC0tby1icmFuZC0zMDApOwogICAgICAtLW8tYnJhbmQtY29sb3JmdWwtaHNsOiB2YXIoLS1vLWJyYW5kLTMwMC1oc2wpOwogICAgICAtLW8tYnJhbmQtaG92ZXItY29sb3JmdWw6IHZhcigtLW8tYnJhbmQtMTAwKTsKICAgICAgLS1vLWFjY2VudC1jb2xvcmZ1bDogdmFyKC0tby1hY2NlbnQtMzAwKTsKICAgICAgLS1vLWFjY2VudC1jb2xvcmZ1bC1oc2w6IHZhcigtLW8tYWNjZW50LTMwMC1oc2wpOwogICAgICAtLW8tYWNjZW50LWhvdmVyLWNvbG9yZnVsOiB2YXIoLS1vLWFjY2VudC0xMDApOwogICAgICAtLW8tbGlua3MtY29sb3JmdWw6IHZhcigtLW8tbGlua3MtMzAwKTsKICAgICAgLS1vLWxpbmtzLWNvbG9yZnVsLWhzbDogdmFyKC0tby1saW5rcy0zMDAtaHNsKTsKICAgICAgLS1vLWxpbmtzLWhvdmVyLWNvbG9yZnVsOiB2YXIoLS1vLWxpbmtzLTEwMCk7CiAgICAgIC0tby12aXNpdGVkLWNvbG9yZnVsOiB2YXIoLS1vLXZpc2l0ZWQtMzAwKTsKICAgICAgLS1vLXZpc2l0ZWQtY29sb3JmdWwtaHNsOiB2YXIoLS1vLXZpc2l0ZWQtMzAwLWhzbCk7CiAgICAgIC0tby12aXNpdGVkLWhvdmVyLWNvbG9yZnVsOiB2YXIoLS1vLXZpc2l0ZWQtMTAwKTsKICAgICAgLS1vLXRleHQtMS1jb2xvcmZ1bDogdmFyKC0tby1icmFuZC0wMDApOwogICAgICAtLW8tdGV4dC0yLWNvbG9yZnVsOiB2YXIoLS1vLWJyYW5kLTIwMCk7CiAgICAgIC0tby1zdXJmYWNlLTEtY29sb3JmdWw6IHZhcigtLW8tYnJhbmQtOTAwKTsKICAgICAgLS1vLXN1cmZhY2UtMi1jb2xvcmZ1bDogdmFyKC0tby1icmFuZC04MDApOwogICAgICAtLW8tc3VyZmFjZS0zLWNvbG9yZnVsOiB2YXIoLS1vLWJyYW5kLTcwMCk7CiAgICAgIC0tby1zdXJmYWNlLTQtY29sb3JmdWw6IHZhcigtLW8tYnJhbmQtNjAwKTsKICAgICAgLS1vLXNoYWRvdy1jb2xvci1jb2xvcmZ1bDogdmFyKC0tby1jYW52YXMtMTAwMC1oc2wpOwogICAgICAtLW8tc2hhZG93LXN0cmVuZ3RoLWNvbG9yZnVsOiA1JTsKICAgICAgLS1vLXNjcm9sbGJhci1jb2xvci1jb2xvcmZ1bDogdmFyKC0tby1icmFuZC04MDApOwogICAgICAqLwogICAgfQ==");"undefined"!=typeof $scope&&void 0!==$scope.iframeScope&&void 0!==$scope.iframeScope.webSafeFonts?(oxyProps.registerOxyPropsFonts(),oxyProps.addToggle(),oxyProps.initTooltips(),"1"==OP_SETTINGS.colors&&oxyProps.registerOxyPropsColors(),"1"==OP_SETTINGS.stylesheet&&oxyProps.addCustomStyleSheet(!0,"OxyProps"),"1"==OP_SETTINGS.stylesheet&&oxyProps.addCustomStyleSheet(!1,"OxyPropsTheme","OxyProps",t),document.addEventListener("mouseup",(t=>{if(2===t.buttons||2===t.button)return;if(!(0,I.IsContent)(t))return;if(window.getSelection().getRangeAt(0).startOffset===window.getSelection().getRangeAt(0).endOffset)return;oxyProps.inputItem=window.getSelection().anchorNode;const o="#oxyprops-add-structure-tags-context-menu";document.querySelector(o)||(window.oxyProps.storage.selectionRange={start:window.getSelection().getRangeAt(0).startOffset,end:window.getSelection().getRangeAt(0).endOffset},window.oxyProps.storage.tagsMenuInstance=new C.default("oxygen"),window.oxyProps.storage.tagsMenu=document.querySelector(o),window.oxyProps.storage.tagsMenu.style.top=t.clientY-5+"px",window.oxyProps.storage.tagsMenu.style.left=t.clientX-5+"px")})),$scope.iframeScope.getOxygenElementName=g.getOxygenElementName,$scope.iframeScope.addElementsFromEmmetAbbreviation=g.addElementsFromEmmetAbbreviation,console.log("OxyProps features in Oxygen editor are active, enjoy!")):setTimeout(c,250)},i=()=>{window.parent===window.top&&(console.log("Waiting for Oxygen to load..."),c(),document.removeEventListener("oxypropsLoaded",i))};document.addEventListener("oxypropsLoaded",i)}}]);