!function(e){var r={};function o(t){if(r[t])return r[t].exports;var i=r[t]={i:t,l:!1,exports:{}};return e[t].call(i.exports,i,i.exports,o),i.l=!0,i.exports}o.m=e,o.c=r,o.d=function(e,r,t){o.o(e,r)||Object.defineProperty(e,r,{configurable:!1,enumerable:!0,get:t})},o.n=function(e){var r=e&&e.__esModule?function(){return e.default}:function(){return e};return o.d(r,"a",r),r},o.o=function(e,r){return Object.prototype.hasOwnProperty.call(e,r)},o.p="",o(o.s=267)}({267:function(e,r,o){"use strict";o(268),o(269),o(270),(0,BBLogic.api.addRuleTypeCategory)("browser",{label:(0,BBLogic.i18n.__)("Browser")})},268:function(e,r,o){"use strict";var t=BBLogic.api,i=t.addRuleType,n=t.getFormPreset;i("browser/cookie",{label:(0,BBLogic.i18n.__)("Cookie"),category:"browser",form:n("key-value")})},269:function(e,r,o){"use strict";var t=BBLogic.api,i=t.addRuleType,n=t.getFormPreset;i("browser/referer",{label:(0,BBLogic.i18n.__)("Referer"),category:"browser",form:n("string")})},270:function(e,r,o){"use strict";var t=BBLogic.api,i=t.addRuleType,n=t.getFormPreset;i("browser/url-variable",{label:(0,BBLogic.i18n.__)("URL Variable"),category:"browser",form:n("key-value")})}});