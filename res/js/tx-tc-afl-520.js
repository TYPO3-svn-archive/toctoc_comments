function ttc_autoajaxfelogin(e,t){document.getElementById("user").value=e;document.getElementById("pass").value=t;var n=document.getElementById("tx_toctoccomments_pi2_submit");ttc_ajaxfelogin(n)}function successlogin(e,t,n,r,i,s,o,u,a,f,l){if(e["redirect"]){window.location.href=e["redirect"]}else{var c="";if(t==0){jQuery("#formhider-"+n).html(r);jQuery("#formhider-"+n).css("min-height","40px");var h=e["data"].replace("tx_toctoccomments_pi2_formlo","tx_toctoccomments_pi2_formlog");loggedinarr=e["data"].split("Youre logged in");if(loggedinarr.length>1){if(i!==""){jQuery("#"+l).css("display","none");c=h.replace('id="tx-tc-loginform"','id="tx-tc-loginform-2"');c=c.replace("tx_toctoccomments_pi2_formlog","tx_toctoccomments_pi2_formlogout");c=c.replace("Youre logged in.","");tclogincarddec=c;toctoc_comments_refresh(i,s,n);newqrystr=jQuery.param(jQuery(o))+"&"+u+"=1&tx_toctoccomments_pi2[ajax]="+a;if(e["refresh"]!=""){refreshidlist=e["refresh"].split(",");newqrystr=newqrystr.replace("&logintype=login","");newqrystr=newqrystr+"&refreshcontent=refresh";jQuery.ajax({type:"POST",url:f,asych:true,data:newqrystr,success:function(e){for(ix=0;ix<refreshidlist.length;ix++){refreshidlist[ix]=tctrim(refreshidlist[ix]);setAJAXhtml(refreshidlist[ix],e)}}})}}}else{if(i!==""){jQuery("#formhider-"+n).css("opacity","0");jQuery("#formhider-"+n).html(h);toctoc_comments_fadein("formhider-"+n);tt_showloginbind();rebindanswersignup()}}lougoutelem=document.getElementById("tx-tc-loginout");if(lougoutelem){jQuery("#tx-tc-loginout").css("opacity","0");toctoc_comments_fadein("tx-tc-loginout")}}else{h=e["data"];h=e["data"].replace("Youre logged in.","");tclogincarddec=h;if(h==e["data"]){h=h.substr(String('<div class="tx-tc-loginform" id="tx-tc-loginform">').length+6)}jQuery("#tx-tc-loginform").html(h);tt_showloginbind();if(h!=e["data"]){$("#tx-tc-loginform").css("opacity","0");window.setTimeout("toctoc_comments_fadein('tx-tc-loginform');",100);newqrystr=jQuery.param(jQuery(o))+"&"+u+"=1&tx_toctoccomments_pi2[ajax]="+a;if(e["refresh"]!=""){refreshidlist=e["refresh"].split(",");newqrystr=newqrystr.replace("&logintype=login","");newqrystr=newqrystr+"&refreshcontent=refresh";jQuery.ajax({type:"POST",url:f,data:newqrystr,success:function(e){for(ix=0;ix<refreshidlist.length;ix++){refreshidlist[ix]=tctrim(refreshidlist[ix]);setAJAXhtml(refreshidlist[ix],e)}}})}}}jQuery("#tx-tc-loginlogoutinprogress").css("display","none");jQuery("#tx-tc-loginlogoutinprogress").removeClass("tx-tc-blockdisp");jQuery("#tx-tc-loginlogoutinprogress").addClass("tx-tc-nodisp")}}function ttc_ajaxfelogin(e,t,n){var r=e.form.id.substr(0,e.form.id.length-5);var s=document.getElementById(e.form.id);var o=e.form.id;var u=e.form.action;var a=jQuery(e.form).serializeArray();var f=e.name;if(t!=1&&!n){if(document.getElementById("user").value==""){return}if(document.getElementById("pass").value==""){return}}var l="";if(n=="fbLogin"){l="&tx_toctoccomments_pi2[fbLogin]=1"}ttid="";ttrid="";ttcontentid="";commentid="";jQuery("#"+e.form.id).css("opacity","0.6");var c=0;for(i=1;i<10;i++){tr=s.parentNode;if(tr){if(tr.hasAttribute){if(tr.hasAttribute("id")){ttid=tr.getAttribute("id");ttrid=ttid.replace("tx-tc-cts-dp-","");ttcontentidtest=ttid.replace("tx-tc-formsqueezer-","");if(ttcontentidtest!==ttid){commentid=ttcontentidtest;ttcontentidtestarr=ttcontentidtest.split("6g9");ttcontentid=ttcontentidtestarr[0]}if(ttid!==ttrid){c=1}else{ttrid=ttid.replace("tx-tc-form-dp-","");if(ttid!==ttrid){c=1}}if(c===1){break}ttid="";ttrid=""}}s=tr}}var h=0;if(ttrid!==""){var p=ttrid.lastIndexOf("_");var d=ttrid.substr(p+1);var v=d.split("6g9");if(v.length>1){d=v[0];ttrid=ttrid.substr(0,p+1)+d}h=0}else{h=1}var m="";var g=[];tttip("hide");if(t==1){tt_logout(d,ttrid)}else{var y=document.getElementById("tx-tc-loginlogoutinprogress").innerHTML;if(h==0){jQuery("#formhider-"+commentid).html(y);jQuery("#formhider-"+commentid).css("min-height","40px")}jQuery.ajax({type:"POST",url:u,async:false,data:jQuery.param(jQuery(a))+"&"+f+"=1&tx_toctoccomments_pi2[ajax]="+r+l,success:function(e){var t=utf8_decode(tcb64_dec(e));var n=[];var i=t.split("toctoc-data-sep");n["redirect"]=i[0];n["data"]=i[1];n["refresh"]=i[2];successlogin(n,h,commentid,y,ttrid,ttcontentid,a,f,r,u,o)},error:function(e,t,n){var i=utf8_decode(tcb64_dec(e.responseText));var s=[];var l=i.split("toctoc-data-sep");s["redirect"]=l[0];s["data"]=l[1];s["refresh"]=l[2];successlogin(s,h,commentid,y,ttrid,ttcontentid,a,f,r,u,o)}})}return false}function setAJAXhtml(e,t){var n=t.split('id="'+e+'"');if(n.length==2){var r=n[0].split("<");var i=r[r.length-1].split(" ");var s=i[0];var o=n[1].split("</"+s);if(o.length>1){var u=n[1].substr(n[1].split(">")[0].length+1);var a=u.split("</"+s);var f=u.split("<"+s);var l=("<"+s+f[0]).length;var c=a[0].length;var h=0;var p=0;var d="";if(l>c){d=a[0]+"</"+s+">"}else{while(h!=1){if(l>c){h=1}else{while(l<c){d=d+a[p]+"</"+s;l=l+("<"+s+f[p+1]).length;c=c+(a[p+1]+"</"+s).length;p++}d=d+a[p]+"</"+s}}d=d+">"}}else{d="<"+r[r.length-1]+'"'+e+'"'+n[1].split(">")[0]}$("#"+e).html(d)}else{var v=document.getElementById(e);if(v){v.outerHTML=""}}return false}function tt_logout(e,t){var n=0;var r="";if(tclogincarddec!=""){r=tclogincarddec}else{r=utf8_decode(tcb64_dec(tclogincard))}document.body.innerHTML+='<div id="frmtmplogout" class="tx-tc-nodisp">'+r+"</div>";if(t==""){n=1}else{var i=e;var s=t.lastIndexOf("_");var o=e.split("6g9");if(o.length>1){e=o[0];t=t.substr(0,s+1)+e}ttcontentid=e}var u=document.getElementById("tx_toctoccomments_pi2_formlogout_submit");if(n==0){var a=document.getElementById("tx-tc-loginlogoutinprogress-"+i).innerHTML}var f=0;if(n===0){f=parseInt(document.getElementById("cf"+i).offsetHeight)-10-parseInt(document.getElementById("textarea-"+i).offsetHeight);jQuery("#formhider-"+i).html(a);jQuery("#tx-tc-div-submit"+i).css("display","none");jQuery("#formhider-"+i).css("min-height",f+"px")}var l=[];var c=jQuery.param(jQuery(u.form).serializeArray())+"&"+u.name+"=1&tx_toctoccomments_pi2[ajax]=tx_toctoccomments_pi2";var h=u.form.action;var p=u.form.id;tttip("hide");jQuery.ajax({type:"POST",url:h,data:jQuery.param(jQuery(u.form).serializeArray())+"&"+u.name+"=1&tx_toctoccomments_pi2[ajax]=tx_toctoccomments_pi2",success:function(e){var r=utf8_decode(tcb64_dec(e));var s=[];var o=r.split("toctoc-data-sep");s["redirect"]=o[0];s["data"]=o[1];s["refresh"]=o[2];if(s["redirect"]){window.location.href=s["redirect"]}else{htmlforform=s["data"];tclogincarddec=htmlforform;if(n===0){f=parseInt(document.getElementById("formhider-"+i).offsetHeight);jQuery("#"+p).css("display","none");toctoc_comments_refresh(t,ttcontentid,i,1);if(s["refresh"]!=""){l=s["refresh"].split(",");c=c.replace("&logintype=logout","");c=c+"&refreshcontent=refresh";jQuery.ajax({type:"POST",url:h,async:true,data:c,success:function(e){for(ix=0;ix<l.length;ix++){l[ix]=tctrim(l[ix]);setAJAXhtml(l[ix],e)}}})}lougoutelem=document.getElementById("tx-tc-loginout");if(lougoutelem){jQuery("#tx-tc-loginout").css("display","none")}jQuery("#tx-tc-loginlogoutinprogress-"+i).removeClass("tx-tc-blockdisp");jQuery("#tx-tc-loginlogoutinprogress-"+i).addClass("tx-tc-nodisp");jQuery("#tx_toctoccomments_pi2").html(htmlforform)}else{jQuery("#tx-tc-loginform").html(s["data"]);jQuery("#tx-tc-loginform").css("opacity","0");toctoc_comments_fadein("tx-tc-loginform");tt_showloginbind();if(s["refresh"]!=""){l=s["refresh"].split(",");c=c.replace("&logintype=logout","");c=c+"&refreshcontent=refresh";jQuery.ajax({type:"POST",url:h,data:c,success:function(e){for(ix=0;ix<l.length;ix++){l[ix]=tctrim(l[ix]);setAJAXhtml(l[ix],e)}}})}}}}});jQuery("#frmtmplogout").remove;return false}function ttc_ajaxfeforgotpw(e){var t=e.form.id.substr(0,e.form.id.length-5);var n=document.getElementById(e.form.id);var r=e.form.id;var s=e.form.action;var o=jQuery(e.form).serializeArray();var u=e.name;ttid="";ttrid="";ttcontentid="";savefpformhtml=document.getElementById("tx-tc-loginformfp").innerHTML;jQuery("#"+r).css("opacity","0.6");var a=0;for(i=1;i<10;i++){tr=n.parentNode;if(tr){if(tr.hasAttribute){if(tr.hasAttribute("id")){ttid=tr.getAttribute("id");ttrid=ttid.replace("tx-tc-cts-dp-","");ttcontentidtest=ttid.replace("tx-tc-formsqueezer-","");if(ttcontentidtest!==ttid){commentid=ttcontentidtest;ttcontentidtestarr=ttcontentidtest.split("6g9");ttcontentid=ttcontentidtestarr[0]}if(ttid!==ttrid){a=1}else{ttrid=ttid.replace("tx-tc-form-dp-","");if(ttid!==ttrid){a=1}}if(a===1){break}ttid="";ttrid=""}}n=tr}}var f=0;if(ttrid!==""){var l=ttrid.lastIndexOf("_");var c=ttrid.substr(l+1);var h=c.split("6g9");if(h.length>1){c=h[0];ttrid=ttrid.substr(0,l+1)+c}}else{f=1}jQuery.ajax({type:"POST",url:s,data:jQuery.param(jQuery(o))+"&"+u+"=1&tx_toctoccomments_pi2[ajax]="+t,success:function(e){var t=utf8_decode(tcb64_dec(e));var n=[];var i=t.split("toctoc-data-sep");n["redirect"]=i[0];n["data"]=i[1];n["refresh"]=i[2];if(n["redirect"]){window.location.href=n["redirect"]}else{var s="";if(f===0){s=n["data"]}else{s=n["data"]}s=s.replace('class="tx-tc-status-for-felogin"','class="tx-tc-status-for-felogin tx-tc-blockdisp"');s=s.replace('<div class="tx-tc-loginform tx-tc-nodisp" id="tx-tc-loginformfp">',"");s=s.substr(0,s.length-8);jQuery("#tx-tc-loginformfp").html(s);jQuery("#"+r).css("opacity","1");window.setTimeout("rebindloginback()",5500)}}});return false}function rebindloginback(){document.getElementById("tx-tc-loginformfp").innerHTML=savefpformhtml;(function(e){e("#tx-tc-status-for-felogin").removeClass("tx-tc-nodisp");e("#tx-tc-status-for-felogin").addClass("tx-tc-blockdisp");e("#tx_toctoccomments_pi2_form").removeClass("tx-tc-nodisp");e("#tx_toctoccomments_pi2_form").addClass("tx-tc-blockdisp");e("#tx-tc-buttonfornewaccount").removeClass("tx-tc-nodisp");e("#tx-tc-buttonfornewaccount").addClass("tx-tc-blockdisp");e("#tx-tc-loginformfp").addClass("tx-tc-nodisp");e("#tx-tc-loginformfp").removeClass("tx-tc-blockdisp");e(".tx-tc-login-submitfo").on("click",function(){ttc_ajaxfeforgotpw(this)});e("#u_0_0").on("click",function(){fbLogin()});e("#tx-tc-loginformfp .tx-tc-loginbacklink").on("click",function(){e("#tx-tc-status-for-felogin").removeClass("tx-tc-nodisp");e("#tx-tc-status-for-felogin").addClass("tx-tc-blockdisp");e("#tx_toctoccomments_pi2_form").removeClass("tx-tc-nodisp");e("#tx_toctoccomments_pi2_form").addClass("tx-tc-blockdisp");e("#tx-tc-buttonfornewaccount").removeClass("tx-tc-nodisp");e("#tx-tc-buttonfornewaccount").addClass("tx-tc-blockdisp");e("#tx-tc-loginformfp").addClass("tx-tc-nodisp");e("#tx-tc-loginformfp").removeClass("tx-tc-blockdisp")})})(jQuery)}function rebindanswersignup(){(function(e){e("#tx-tc-signonlink").off("click");e("#tx-tc-buttonfornewaccount-bt").off("click");e("#tx-tc-signonlink").on("click",function(){e("#tx-tc-loginformso").addClass("tx-tc-nodisp");e("#tx-tc-loginformso").removeClass("tx-tc-blockdisp");e("#tx-tc-buttonfornewaccount").removeClass("tx-tc-nodisp");e("#tx-tc-buttonfornewaccount").addClass("tx-tc-blockdisp");e("#tx-tc-forgotpw").addClass("tx-tc-blockdisp");e("#tx-tc-forgotpw").removeClass("tx-tc-nodisp")});e("#tx-tc-buttonfornewaccount-bt").on("click",function(){e("#tx-tc-buttonfornewaccount").addClass("tx-tc-nodisp");e("#tx-tc-buttonfornewaccount").removeClass("tx-tc-blockdisp");e("#tx-tc-loginformso").removeClass("tx-tc-nodisp");e("#tx-tc-loginformso").addClass("tx-tc-blockdisp");e("#tx-tc-forgotpw").addClass("tx-tc-nodisp");e("#tx-tc-forgotpw").removeClass("tx-tc-blockdisp")});e("#tx_toctoccomments_pi2_submitso").off("click");e("#tx_toctoccomments_pi2_formso").off("click");e("#tx_toctoccomments_pi2_submitso").on("click",function(){ttc_ajaxfesignup(this)});e("#tx_toctoccomments_pi2_formso").on("submit",false);e("#freecaprefresh").trigger("click")})(jQuery)}function ttc_ajaxfecp(e){var t=e.form.id.substr(0,e.form.id.length-7);var n=document.getElementById(e.form.id);var r=e.form.id;var s=e.form.action;var o=jQuery(e.form).serializeArray();var u=e.name;if(document.getElementById("tx_toctoc_comments_pi2-changepassword1").value==""){return}if(document.getElementById("tx_toctoc_comments_pi2-changepassword2").value==""){return}ttid="";ttrid="";ttcontentid="";jQuery("#"+r).css("opacity","0.6");var a=0;for(i=1;i<10;i++){tr=n.parentNode;if(tr){if(tr.hasAttribute){if(tr.hasAttribute("id")){ttid=tr.getAttribute("id");ttrid=ttid.replace("tx-tc-cts-dp-","");ttcontentidtest=ttid.replace("tx-tc-formsqueezer-","");if(ttcontentidtest!==ttid){commentid=ttcontentidtest;ttcontentidtestarr=ttcontentidtest.split("6g9");ttcontentid=ttcontentidtestarr[0]}if(ttid!==ttrid){a=1}else{ttrid=ttid.replace("tx-tc-form-dp-","");if(ttid!==ttrid){a=1}}if(a===1){break}ttid="";ttrid=""}}n=tr}}var f=0;if(ttrid!==""){var l=ttrid.lastIndexOf("_");var c=ttrid.substr(l+1);var h=c.split("6g9");if(h.length>1){c=h[0];ttrid=ttrid.substr(0,l+1)+c}}else{f=1}tttip("hide");jQuery.ajax({type:"POST",url:s,data:jQuery.param(jQuery(o))+"&"+u+"=1&tx_toctoccomments_pi2[ajax]="+t,success:function(e){var t=utf8_decode(tcb64_dec(e));var n=[];var i=t.split("toctoc-data-sep");n["redirect"]=i[0];n["data"]=i[1];n["refresh"]=i[2];if(n["redirect"]){window.location.href=n["redirect"]}else{var s="";if(f==0){s=n["data"]}else{s=n["data"]}s=s.replace('class="tx-tc-status-for-felogin"','class="tx-tc-status-for-felogin tx-tc-blockdisp"');s=s.replace('<div class="tx-tc-loginform tx-tc-nodisp" id="tx-tc-loginformcp">',"");s=s.substr(0,s.length-8);var o=s.replace("ERROR","");jQuery("#tx_toctoccomments_pi2_cp").html(o);jQuery("#"+r).css("opacity","1");if($("#tx-tc-loginformcp").hasClass("tx-tc-nodisp")){$("#tx-tc-loginformcp").addClass("tx-tc-blockdisp");$("#tx-tc-loginformcp").removeClass("tx-tc-nodisp")}if(o==s){window.setTimeout("rebindcpback(1)",5500)}else{window.setTimeout("rebindcpback(0)",5)}}}});return false}function rebindcpback(e){(function(t){if(e==1){var n="";if(document.getElementById("tx_toctoccomments_pi2_cp")){n="tx_toctoccomments_pi2_cp"}else{n="tx-tc-cpwf"}if(toctoc_comments_fadeout(n)===true){document.getElementById("tx-tc-loginformcp").innerHTML="";t("#tx-tc-loginformcp").addClass("tx-tc-nodisp");t("#tx-tc-loginformcp").removeClass("tx-tc-blockdisp")}}if(e==0){t("#tx-tc-loginformcp").addClass("tx-tc-blockdisp");t("#tx-tc-loginformcp").removeClass("tx-tc-nodisp");t("#tx_toctoccomments_pi2_submitcp").on("click",function(){ttc_ajaxfecp(this)})}})(jQuery)}function ttc_ajaxfesignup(e){var t=e.form.id.substr(0,e.form.id.length-7);var n=document.getElementById(e.form.id);var r=e.form.id;var s=e.form.action;var o=jQuery(e.form).serializeArray();var u=e.name;var a="";var f="";var l=document.getElementById("usersignup");if(l&&l.value!==""){f=l.value}l=document.getElementById("password1");if(l&&l.value!==""){a=l.value}ttid="";ttrid="";ttcontentid="";jQuery("#"+r).css("opacity","0.6");var c=0;for(i=1;i<10;i++){tr=n.parentNode;if(tr){if(tr.hasAttribute){if(tr.hasAttribute("id")){ttid=tr.getAttribute("id");ttrid=ttid.replace("tx-tc-cts-dp-","");ttcontentidtest=ttid.replace("tx-tc-formsqueezer-","");if(ttcontentidtest!==ttid){commentid=ttcontentidtest;ttcontentidtestarr=ttcontentidtest.split("6g9");ttcontentid=ttcontentidtestarr[0]}if(ttid!==ttrid){c=1}else{ttrid=ttid.replace("tx-tc-form-dp-","");if(ttid!==ttrid){c=1}}if(c===1){break}ttid="";ttrid=""}}n=tr}}var h=0;if(ttrid!==""){var p=ttrid.lastIndexOf("_");var d=ttrid.substr(p+1);var v=d.split("6g9");if(v.length>1){d=v[0];ttrid=ttrid.substr(0,p+1)+d}}else{h=1}tttip("hide");jQuery.ajax({type:"POST",url:s,data:jQuery.param(jQuery(o))+"&"+u+"=1&tx_toctoccomments_pi2[ajax]="+t,success:function(e){var t=utf8_decode(tcb64_dec(e));var n=[];var r=t.split("toctoc-data-sep");n["redirect"]=r[0];n["data"]=r[1];n["refresh"]=r[2];if(n["redirect"]){window.location.href=n["redirect"]}else{var i="";if(h===0){i=n["data"]}else{i=n["data"]}i=i.replace('class="tx-tc-status-for-felogin"','class="tx-tc-status-for-felogin tx-tc-blockdisp"');i=i.replace('<div class="tx-tc-loginform tx-tc-nodisp" id="tx-tc-loginformso">',"");i=i.replace('href="#"','id="freecaprefresh" href="#"');i=i.substr(0,i.length-8);if(i.indexOf("SIGNUPANDLOGINOK")>1){window.setTimeout("ttc_autoajaxfelogin('"+f+"', '"+a+"')",20)}else{jQuery("#tx-tc-loginformso").html(i);window.setTimeout("rebindanswersignup()",10);jQuery("#tx-tc-loginformso").css("opacity","0");toctoc_comments_fadein("tx-tc-loginformso")}}}});return false}