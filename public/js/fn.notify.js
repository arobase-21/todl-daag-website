SEMICOLON.Core.getVars.fn.notify=t=>{const e=SEMICOLON.Core;if(e.initFunction({class:"has-plugin-notify",event:"pluginNotifyReady"}),(t=e.getSelector(t)).length<1)return!0;let a=t,r=a.attr("data-notify-position")||"top-right",o=a.attr("data-notify-type"),s=a.attr("data-notify-msg")||"Please set a message!",i=a.attr("data-notify-timeout")||5e3,d=a.attr("data-notify-close")||"true",n=a.attr("data-notify-autohide")||"true",l="toast-"+Math.floor(1e4*Math.random()),b=a.attr("data-notify-trigger")||"self",c=a.attr("data-notify-target"),f="",g,y,m;switch(0<jQuery(c).length&&"self"==b&&(bootstrap.Toast.getOrCreateInstance(jQuery(c).get(0)).hide(),jQuery(c).get(0).addEventListener("hidden.bs.toast",()=>{e.getVars.fn.notify(t)})),o){case"primary":y="text-white bg-primary border-0";break;case"warning":y="text-dark bg-warning border-0";break;case"error":y="text-white bg-danger border-0";break;case"success":y="text-white bg-success border-0";break;case"info":y="bg-info text-dark border-0";break;case"dark":y="text-white bg-dark border-0";break;default:y=""}switch(r){case"top-left":g="top-0 start-0";break;case"top-center":g="top-0 start-50 translate-middle-x";break;case"middle-left":g="top-50 start-0 translate-middle-y";break;case"middle-center":g="top-50 start-50 translate-middle";break;case"middle-right":g="top-50 end-0 translate-middle-y";break;case"bottom-left":g="bottom-0 start-0";break;case"bottom-center":g="bottom-0 start-50 translate-middle-x";break;case"bottom-right":g="bottom-0 end-0";break;default:g="top-0 end-0"}m="info"!=o&&"warning"!=o&&o?"btn-close-white":"","true"==d&&(f='<button type="button" class="btn-close '+m+' btn-sm me-2 mt-2 ms-auto" data-bs-dismiss="toast" aria-label="Close"></button>'),n="true"==n;var u='<div class="position-fixed '+g+' p-3" style="z-index: 999999;"><div id="'+l+'" class="toast p-2 hide '+y+'" role="alert" aria-live="assertive" aria-atomic="true"><div class="d-flex"><div class="toast-body">'+s+"</div>"+f+"</div></div>";"self"!=b||c||(a.attr("data-notify-target","#"+l),jQuery("body").append(u)),[].slice.call(document.querySelectorAll(".toast")).map(t=>new bootstrap.Toast(t)).forEach(t=>{t.hide()});let p=a.attr("data-notify-target"),h=jQuery(p);h.find(".toast-body");return 0<jQuery(p).length&&(new bootstrap.Toast(h.get(0),{delay:Number(i),autohide:n}).show(),"self"==b)&&h.get(0).addEventListener("hidden.bs.toast",()=>{h.parent().remove(),a.get(0).removeAttribute("data-notify-target")}),!1};