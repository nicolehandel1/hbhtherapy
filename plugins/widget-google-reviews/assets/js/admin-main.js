var $jscomp=$jscomp||{};$jscomp.scope={};$jscomp.findInternal=function(a,c,b){a instanceof String&&(a=String(a));for(var d=a.length,e=0;e<d;e++){var f=a[e];if(c.call(b,f,e,a))return{i:e,v:f}}return{i:-1,v:void 0}};$jscomp.ASSUME_ES5=!1;$jscomp.ASSUME_NO_NATIVE_MAP=!1;$jscomp.ASSUME_NO_NATIVE_SET=!1;$jscomp.defineProperty=$jscomp.ASSUME_ES5||"function"==typeof Object.defineProperties?Object.defineProperty:function(a,c,b){a!=Array.prototype&&a!=Object.prototype&&(a[c]=b.value)};
$jscomp.getGlobal=function(a){return"undefined"!=typeof window&&window===a?a:"undefined"!=typeof global&&null!=global?global:a};$jscomp.global=$jscomp.getGlobal(this);$jscomp.polyfill=function(a,c,b,d){if(c){b=$jscomp.global;a=a.split(".");for(d=0;d<a.length-1;d++){var e=a[d];e in b||(b[e]={});b=b[e]}a=a[a.length-1];d=b[a];c=c(d);c!=d&&null!=c&&$jscomp.defineProperty(b,a,{configurable:!0,writable:!0,value:c})}};
$jscomp.polyfill("Array.prototype.find",function(a){return a?a:function(a,b){return $jscomp.findInternal(this,a,b).v}},"es6","es3");
jQuery(document).ready(function(a){a(".grw-admin-page a.nav-tab").on("click",function(b){var c=a(this),d=c.attr("href");a(d).show().siblings(".tab-content").hide();c.addClass("nav-tab-active").siblings().removeClass("nav-tab-active");b.preventDefault()});if(a("#grw-overview-rating").length){var c=function(b,c){var h={action:"grw_overview_ajax"};b&&(h.place_id=b);jQuery.post({url:ajaxurl,type:"POST",dataType:"json",data:h,success:function(h){var l=1<h.places.length?h.places.find(function(a){return a.id==
b}):h.places[0];l||(window.location.href=GRW_VARS.builderUrl);d.html('<div class="wp-gr wpac"><div style=" margin:0 0 6px!important;font-size:15px!important">'+l.name+'</div><div><span class="wp-google-rating">'+h.rating+'</span><span class="wp-google-stars">'+grw_stars(h.rating,"#e7711b",20)+'</span></div><div class="wp-google-powered">Based on '+h.review_count+' reviews</div><div class="wp-google-powered">Last updated: '+(l.updated?'<span class="wp-google-time" data-time="'+parseInt(parseInt(l.updated)/
1E3)+'"></span>':"")+"</div></div>");var q="";a.each(h.reviews,function(a,b){q+=grw_review(b)});e.html('<div class="wp-gr wpac"><div class="wp-google-reviews">'+q+"</div></div>");_rplg_timeago(document.querySelectorAll(".wpac [data-time]"));_rplg_read_more();a(".wp-review-hide",e).unbind("click").click(function(){grw_review_hide(a(this));return!1});var k={};for(l=0;l<h.stats.length;l++){var r=h.stats[l],n=r.google_place_id;k[n]=k[n]||[];k[n].push({time:parseInt(r.time),rating:parseFloat(r.rating),
review_count:parseInt(r.review_count)})}l=parseInt((h.stats[0].time-h.stats[h.stats.length-1].time)/2592E3);n=4<l?6:l||1;l={};for(var t=new Date,u=0;u<n;u++){r=new Date(t.getFullYear(),t.getMonth()-u,1);var v=(new Date(t.getFullYear(),t.getMonth()+1-u,0)).getTime(),w=r.toLocaleString("default",{month:"short"});l[w]=l[w]||{};for(g in k){var x=0,y=k[g];do{r=y[x++];var z=1E3*r.time;l[w][g]=l[w][g]||{};l[w][g].count=parseInt(r.review_count)}while(z>v&&x<y.length)}}r=[];k=[];n=[];t={};for(m in l){u=0;
for(p in l[m])u+=l[m][p].count,v=h.places.find(function(a){return a.id==p}),t[v.name]=t[v.name]||{},t[v.name].data=t[v.name].data||[],t[v.name].data.unshift(l[m][p].count);r.unshift(m);k.unshift(u)}for(tt in t)n.push({name:tt,data:t[tt].data});l={series:[{name:"Reviews",data:k}],chart:{height:350,type:"bar"},plotOptions:{bar:{dataLabels:{position:"top"}}},dataLabels:{enabled:!0,offsetY:-20,style:{fontSize:"12px",colors:["#304758"]}},tooltip:{enabled:!0,intersect:!1,custom:function(){return""}},xaxis:{categories:r,
axisBorder:{show:!1},axisTicks:{show:!1},tooltip:{enabled:!0}},yaxis:{axisBorder:{show:!1},axisTicks:{show:!1}},title:{text:"Monthly reviews count",align:"center",style:{color:"#444"}}};f?f.updateSeries([{name:"Reviews",data:k}]):(f=new ApexCharts(document.querySelector("#chart"),l),f.render());c&&c(h)}})},b=a("#grw-overview-places"),d=a("#grw-overview-rating"),e=a("#grw-overview-reviews"),f=null,h=document.createElement("span");h.style.display="none";h.innerHTML=grw_svg();document.body.appendChild(h);
b.change(function(){c(this.value)});c(0,function(c){a.each(c.places,function(c,d){b.append(a("<option>",{value:d.id,text:d.name}))})})}});
function grw_svg(){return'<svg><defs><g id="rp-star" width="17" height="17"><path d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z"></path></g><g id="rp-star-half" width="17" height="17"><path d="M1250 957l257-250-356-52-66-10-30-60-159-322v963l59 31 318 168-60-355-12-66zm452-262l-363 354 86 500q5 33-6 51.5t-34 18.5q-17 0-40-12l-449-236-449 236q-23 12-40 12-23 0-34-18.5t-6-51.5l86-500-364-354q-32-32-23-59.5t54-34.5l502-73 225-455q20-41 49-41 28 0 49 41l225 455 502 73q45 7 54 34.5t-24 59.5z"></path></g><g id="rp-star-o" width="17" height="17"><path d="M1201 1004l306-297-422-62-189-382-189 382-422 62 306 297-73 421 378-199 377 199zm527-357q0 22-26 48l-363 354 86 500q1 7 1 20 0 50-41 50-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z" fill="#ccc"></path></g><g id="rp-logo-g" height="44" width="44" fill="none" fill-rule="evenodd"><path d="M482.56 261.36c0-16.73-1.5-32.83-4.29-48.27H256v91.29h127.01c-5.47 29.5-22.1 54.49-47.09 71.23v59.21h76.27c44.63-41.09 70.37-101.59 70.37-173.46z" fill="#4285f4"></path><path d="M256 492c63.72 0 117.14-21.13 156.19-57.18l-76.27-59.21c-21.13 14.16-48.17 22.53-79.92 22.53-61.47 0-113.49-41.51-132.05-97.3H45.1v61.15c38.83 77.13 118.64 130.01 210.9 130.01z" fill="#34a853"></path><path d="M123.95 300.84c-4.72-14.16-7.4-29.29-7.4-44.84s2.68-30.68 7.4-44.84V150.01H45.1C29.12 181.87 20 217.92 20 256c0 38.08 9.12 74.13 25.1 105.99l78.85-61.15z" fill="#fbbc05"></path><path d="M256 113.86c34.65 0 65.76 11.91 90.22 35.29l67.69-67.69C373.03 43.39 319.61 20 256 20c-92.25 0-172.07 52.89-210.9 130.01l78.85 61.15c18.56-55.78 70.59-97.3 132.05-97.3z" fill="#ea4335"></path><path d="M20 20h472v472H20V20z"></path></g></defs></svg>'}
function grw_stars(a,c,b){for(var d="",e=1;6>e;e++){var f=a-e;d=0<=f?d+grw_star("",c,b):-1<f&&0>f?-.75>f?d+grw_star("-o","#ccc",b):-.25<f?d+grw_star("",c,b):d+grw_star("-half",c,b):d+grw_star("-o","#ccc",b)}return d}function grw_star(a,c,b){return'<span class="wp-star"><svg viewBox="0 0 1792 1792" width="'+b+'" height="'+b+'"><use xlink:href="#rp-star'+a+'" fill="'+c+'"/></svg></span>'}
function grw_review(a){return'<div class="wp-google-review'+(""==a.hide?"":" wp-review-hidden")+'"><div class="wp-google-right"><a href="'+a.author_url+'" class="wp-google-name" target="_blank" rel="nofollow noopener">'+a.author_name+'</a><div class="wp-google-time" data-time="'+a.time+'"></div><div class="wp-google-feedback"><span class="wp-google-stars">'+grw_stars(a.rating,"#e7711b",16)+'</span><span class="wp-google-text">'+grw_trimtext(a.text,50)+'</span></div><a href="#" class="wp-review-hide" data-id="'+
a.id+'">'+(""==a.hide?"Hide":"Show")+" review</a></div></div>"}function grw_trimtext(a,c){if(c&&a&&a.length>c){var b=a.substring(0,c).indexOf(" ")+1;if(1>b||c-b>c/2)b=c;var d=c="";0<b&&(c=a.substring(0,b-1),d=a.substring(b-1,a.length));return c+(d?'<span>... </span><span class="wp-more">'+d+'</span><span class="wp-more-toggle">read more</span>':"")}return a}
var GRW_HTML_CONTENT='<div class="grw-builder-platforms grw-builder-inside"><div class="grw-toggle grw-builder-connect grw-connect-google">Connect Google</div><div class="grw-connect-google-inside" style="display:none"><div class="grw-builder-option"><input type="text" class="grw-connect-id" value="" placeholder="Place ID" /><span class="grw-quest grw-toggle" title="Click to help">?</span><div class="grw-quest-help">The standard way to find your Google Place ID is to go to <a href="https://developers.google.com/places/place-id" target="_blank">https://developers.google.com/places/place-id</a> and search for your company name.<br><br>But sometimes it may not work, in this case please see <a href="'+GRW_VARS.supportUrl+
'&grw_tab=fig#place_id" target="_blank">how to find any Google Place ID</a>.</div></div><div class="grw-builder-option"><select class="grw-connect-lang"><option value="" selected="selected">Choose language if required</option><option value="ar">Arabic</option><option value="bg">Bulgarian</option><option value="bn">Bengali</option><option value="ca">Catalan</option><option value="cs">Czech</option><option value="da">Danish</option><option value="de">German</option><option value="el">Greek</option><option value="en">English</option><option value="es">Spanish</option><option value="eu">Basque</option><option value="eu">Basque</option><option value="fa">Farsi</option><option value="fi">Finnish</option><option value="fil">Filipino</option><option value="fr">French</option><option value="gl">Galician</option><option value="gu">Gujarati</option><option value="hi">Hindi</option><option value="hr">Croatian</option><option value="hu">Hungarian</option><option value="id">Indonesian</option><option value="it">Italian</option><option value="iw">Hebrew</option><option value="ja">Japanese</option><option value="kn">Kannada</option><option value="ko">Korean</option><option value="lt">Lithuanian</option><option value="lv">Latvian</option><option value="ml">Malayalam</option><option value="mr">Marathi</option><option value="nl">Dutch</option><option value="no">Norwegian</option><option value="pl">Polish</option><option value="pt">Portuguese</option><option value="pt-BR">Portuguese (Brazil)</option><option value="pt-PT">Portuguese (Portugal)</option><option value="ro">Romanian</option><option value="ru">Russian</option><option value="sk">Slovak</option><option value="sl">Slovenian</option><option value="sr">Serbian</option><option value="sv">Swedish</option><option value="ta">Tamil</option><option value="te">Telugu</option><option value="th">Thai</option><option value="tl">Tagalog</option><option value="tr">Turkish</option><option value="uk">Ukrainian</option><option value="vi">Vietnamese</option><option value="zh">Chinese (Simplified)</option><option value="zh-Hant">Chinese (Traditional)</option></select></div><div class="grw-builder-option"><button class="grw-connect-btn">Connect Google</button><small class="grw-connect-error"></small></div></div><div class="grw-connections"></div></div><div class="grw-connect-options"><div class="grw-builder-inside"><div class="grw-builder-option">Layout<select id="view_mode" name="view_mode"><option value="slider" selected="selected">Slider</option><option value="list">List</option></select></div></div><div class="grw-builder-top grw-toggle">Common Options</div><div class="grw-builder-inside" style="display:none"><div class="grw-builder-option">Pagination<input type="text" name="pagination" value=""></div><div class="grw-builder-option">Maximum characters before \'read more\' link<input type="text" name="text_size" value=""></div><div class="grw-builder-option"><label><input type="checkbox" name="hide_based_on" value="">Hide \'Based on ... reviews\'</label></div><div class="grw-builder-option"><label><input type="checkbox" name="hide_writereview" value="">Hide \'review us on G\' button</label></div><div class="grw-builder-option"><label><input type="checkbox" name="header_hide_social" value="">Hide rating header, leave only reviews</label></div><div class="grw-builder-option"><label><input type="checkbox" name="hide_reviews" value="">Hide reviews, leave only rating header</label></div></div><div class="grw-builder-top grw-toggle">Slider Options</div><div class="grw-builder-inside" style="display:none"><div class="grw-builder-option">Speed in second<input type="text" name="slider_speed" value="" placeholder="Default: 5"></div><div class="grw-builder-option">Text height<input type="text" name="slider_text_height" value="" placeholder="Default: 100px"></div><div class="grw-builder-option"><label><input type="checkbox" name="slider_hide_border" value="">Hide background</label></div><div class="grw-builder-option"><label><input type="checkbox" name="slider_hide_prevnext" value="">Hide prev & next buttons</label></div><div class="grw-builder-option"><label><input type="checkbox" name="slider_hide_dots" value="">Hide dots</label></div></div><div class="grw-builder-top grw-toggle">Style Options</div><div class="grw-builder-inside" style="display:none"><div class="grw-builder-option">Container max-width<input type="text" name="max_width" value="" placeholder="for instance: 300px"></div><div class="grw-builder-option">Container max-height<input type="text" name="max_height" value="" placeholder="for instance: 500px"></div><div class="grw-builder-option"><label><input type="checkbox" name="centered" value="">Place by center (only if max-width is set)</label></div><div class="grw-builder-option"><label><input type="checkbox" name="dark_theme">Dark background</label></div></div><div class="grw-builder-top grw-toggle">Advance Options</div><div class="grw-builder-inside" style="display:none"><div class="grw-builder-option"><label><input type="checkbox" name="lazy_load_img" checked>Lazy load images</label></div><div class="grw-builder-option"><label><input type="checkbox" name="google_def_rev_link">Use default Google reviews link</label><span class="grw-quest grw-quest-top grw-toggle" title="Click to help">?</span><div class="grw-quest-help" style="display:none;">If the direct link to all reviews <b>https://search.google.com/local/reviews?placeid=&lt;PLACE_ID&gt;</b> does not work with your Google place (leads to 404), please use this option to use the default reviews link to Google map.</div></div><div class="grw-builder-option"><label><input type="checkbox" name="open_link" checked>Open links in new Window</label></div><div class="grw-builder-option"><label><input type="checkbox" name="nofollow_link" checked>Use no follow links</label></div><div class="grw-builder-option">Reviewer avatar size<select name="reviewer_avatar_size"><option value="56" selected="selected">Small: 56px</option><option value="128">Medium: 128px</option><option value="256">Large: 256px</option></select></div><div class="grw-builder-option">Cache data<select name="cache"><option value="1">1 Hour</option><option value="3">3 Hours</option><option value="6">6 Hours</option><option value="12" selected="selected">12 Hours</option><option value="24">1 Day</option><option value="48">2 Days</option><option value="168">1 Week</option><option value="">Disable (NOT recommended)</option></select></div><div class="grw-builder-option">Reviews limit<input type="text" name="reviews_limit" value=""></div></div></div>';
function grw_builder_init(a,c){var b=document.querySelector(c.el);if(b){b.innerHTML=GRW_HTML_CONTENT;var d=b.querySelector(".grw-connect-google-inside"),e=b.querySelector(".grw-connect-id");c.conns?grw_deserialize_connections(a,b,c.conns,c.opts):(d.style="",e.focus());grw_connection(a,d,"google",c.authcode);a('.grw-connect-options input[type="text"],.grw-connect-options textarea').keyup(function(){grw_serialize_connections()});a('.grw-connect-options input[type="checkbox"],.grw-connect-options select').change(function(){grw_serialize_connections()});
a(".grw-toggle",b).unbind("click").click(function(){a(this).toggleClass("toggled");a(this).next().slideToggle()});a(".grw-toggle.grw-connect-google").click(function(){e.focus()});a(".grw-connections").sortable&&(a(".grw-connections").sortable({stop:function(a,b){grw_serialize_connections()}}),a(".grw-connections").disableSelection());a(".wp-review-hide").click(function(){grw_review_hide(a(this));return!1});a("#grw_save").click(function(){grw_feed_save_ajax();return!1})}}
function grw_feed_save_ajax(a){if(!window.grw_title.value)return window.grw_title.focus(),!1;window.grw_save.innerText="Auto save, wait";window.grw_save.disabled=!0;jQuery.post(ajaxurl,{post_id:window.grw_post_id.value,title:window.grw_title.value,content:document.getElementById("grw-builder-connection").value,action:"grw_feed_save_ajax",grw_nonce:jQuery("#grw_nonce").val()},function(a){for(var b=document.querySelectorAll(".wp-gr"),c=0;c<b.length;c++)b[c].parentNode.removeChild(b[c]);window.grw_collection_preview.innerHTML=
a;jQuery(".wp-review-hide").unbind("click").click(function(){grw_review_hide(jQuery(this));return!1});window.grw_post_id.value||(a=document.querySelector(".wp-gr").getAttribute("data-id"),window.grw_post_id.value=a,window.location.href=window.location.href+"&grw_feed_id="+a);window.grw_save.innerText="Save & Refresh";window.grw_save.disabled=!1})}
function grw_feed_save(){if(!window.grw_title.value)return window.grw_title.focus(),!1;var a=document.getElementById("grw-builder-connection").value;if(a&&(a=JSON.parse(a))&&a.connections&&a.connections.length)return!0;alert("Please click 'CONNECT GOOGLE' and connect your Google reviews then save this widget");return!1}
function grw_review_hide(a){jQuery.post(GRW_VARS.handlerUrl+"&cf_action=grw_hide_review",{id:a.attr("data-id"),feed_id:jQuery('input[name="grw_feed[post_id]"]').val(),grw_wpnonce:jQuery("#grw_nonce").val()},function(c){var b=a.parent().parent();c.hide?(a.text("show review"),b.addClass("wp-review-hidden")):(a.text("hide review"),b.removeClass("wp-review-hidden"))},"json")}
function grw_connection(a,c,b,d){var e=c.querySelector(".grw-connect-btn");a(e).click(function(){var f=c.querySelector(".grw-connect-id");if(!f.value)return f.focus(),!1;f="yelp"==b?/.+\/biz\/(.*?)(\?|\/|$)/.exec(f.value)[1]:f.value;var h=c.querySelector(".grw-connect-lang").value;e.innerHTML="Please wait...";e.disabled=!0;grw_connect_ajax(a,c,{id:f,lang:h},b,d,1);return!1})}
function grw_connect_ajax(a,c,b,d,e,f){var h=c.querySelector(".grw-connect-btn"),k=GRW_VARS.handlerUrl+"&cf_action=grw_connect_"+d+"&v="+(new Date).getTime();a.post(k,{id:decodeURIComponent(b.id),lang:b.lang,grw_wpnonce:a("#grw_nonce").val()},function(k){console.log("grw_connect_debug:",k);h.innerHTML="Connect "+(d.charAt(0).toUpperCase()+d.slice(1));h.disabled=!1;var n=c.querySelector(".grw-connect-error");if("success"==k.status)n.innerHTML="",grw_connection_add(a,c,{id:k.result.id,lang:b.lang,name:k.result.name,
photo:k.result.photo,refresh:!0,platform:d,props:{default_photo:k.result.photo}}),grw_serialize_connections();else switch(k.result.error_message){case "usage_limit":a("#dialog").dialog({width:"50%",maxWidth:"600px"});break;case "bot_check":if(1<f)break;grw_popup("https://gpaw.widgetpack.com/botcheck?authcode="+e,640,480,function(){grw_connect_ajax(a,c,b,d,e,f+1)});break;default:0<=k.result.error_message.indexOf("The provided Place ID is no longer valid")?n.innerHTML='It seems Google place which you are trying to connect does not have a physical address (it\'s virtual or service area), unfortunately, Google Places API does not support such locations, it\'s a limitation of Google, not the plugin.<br><br>However, you can try to connect your Google reviews in our new cloud service <a href="https://trust.reviews" target="_blank">Trust.Reviews</a> and show it on your WordPress site through universal <b>HTML/JavaScript</b> code.':
n.innerHTML="<b>Error</b>: "+k.result.error_message}},"json")}
function grw_connection_add(a,c,b,d){c="grw-"+b.platform+"-"+b.id.replace(/\//g,"");null!=b.lang&&(c+=b.lang);var e=a("#"+c);e.length||(e=a('<div class="grw-connection"></div>')[0],e.id=c,void 0!=b.lang&&e.setAttribute("data-lang",b.lang),e.setAttribute("data-platform",b.platform),e.innerHTML=grw_connection_render(b,d),a(".grw-connections")[0].appendChild(e),jQuery(".grw-toggle",e).unbind("click").click(function(){jQuery(this).toggleClass("toggled");jQuery(this).next().slideToggle()}),jQuery(".grw-connect-photo-change",
e).on("click",function(a){a.preventDefault();grw_upload_photo(e,void 0,function(){grw_serialize_connections()});return!1}),jQuery(".grw-connect-photo-default",e).on("click",function(a){grw_change_photo(e,b.props.default_photo);grw_serialize_connections();return!1}),a('input[type="text"]',e).keyup(function(){grw_serialize_connections()}),a('input[type="checkbox"]',e).click(function(){grw_serialize_connections()}),a(".grw-connect-delete",e).click(function(){if(confirm("Are you sure to delete this business?")){if(!GRW_VARS.wordpress){var b=
e.querySelector('input[name="id"]').value;window.connections_delete.value+=window.connections_delete.value?","+b:b}a(e).remove();grw_serialize_connections()}return!1}))}
function grw_connection_render(a,c){var b=a.name;a.lang&&(b+=" ("+a.lang+")");a.photo=a.photo||"data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7";var d=document.createElement("option");d.value="google"==a.platform&&a.props&&a.props.place_id?a.props.place_id:a.id;d.text=grw_capitalize(a.platform)+": "+a.name;c='<div class="grw-toggle grw-builder-connect grw-connect-business"><input type="checkbox" class="grw-connect-select" onclick="event.stopPropagation();" '+(c?"checked":
"")+" /> "+b+(a.address?" ("+a.address+")":"")+'</div><div style="display:none">';b=a.props;d="";for(prop in b)"platform"!=prop&&Object.prototype.hasOwnProperty.call(b,prop)&&(d+='<input type="hidden" name="'+prop+'" value="'+b[prop]+'" class="grw-connect-prop" readonly />');return c+d+'<input type="hidden" name="id" value="'+a.id+'" readonly />'+(a.address?'<input type="hidden" name="address" value="'+a.address+'" readonly />':"")+(a.access_token?'<input type="hidden" name="access_token" value="'+
a.access_token+'" readonly />':"")+'<div class="grw-builder-option"><img src="'+a.photo+'" alt="'+a.name+'" class="grw-connect-photo"><a href="#" class="grw-connect-photo-change">Change</a><a href="#" class="grw-connect-photo-default">Default</a><input type="hidden" name="photo" class="grw-connect-photo-hidden" value="'+a.photo+'" tabindex="2"/><input type="file" tabindex="-1" accept="image/*" onchange="grw_upload_image(this.parentNode, this.files)" style="display:none!important"></div><div class="grw-builder-option"><input type="text" name="name" value="'+
a.name+'" /></div>'+(void 0!=a.website?'<div class="grw-builder-option"><input type="text" name="website" value="'+a.website+'" /></div>':"")+(void 0!=a.lang?'<div class="grw-builder-option"><input type="text" name="lang" value="'+a.lang+'" placeholder="Default language (English)" readonly /></div>':"")+(void 0!=a.review_count?'<div class="grw-builder-option"><input type="text" name="review_count" value="'+a.review_count+'" placeholder="Total number of reviews" /><span class="grw-quest grw-toggle" title="Click to help">?</span><div class="grw-quest-help">Google return only 5 most helpful reviews and does not return information about total number of reviews and you can type here it manually.</div></div>':
"")+(void 0!=a.refresh?'<div class="grw-builder-option"><label><input type="checkbox" name="refresh" '+(a.refresh?"checked":"")+'> Refresh reviews</label><span class="grw-quest grw-quest-top grw-toggle" title="Click to help">?</span><div class="grw-quest-help">'+("google"==a.platform?"The plugin uses the Google Places API to get your reviews. <b>The API only returns the 5 most helpful reviews (it's a limitation of Google, not the plugin)</b>. This option calls the Places API once in 24 hours (to keep the plugin's free and avoid a Google Billing) to check for a new reviews and if there are, adds to the plugin. Thus slowly building up a database of reviews.<br><br>Also if you see the new reviews on Google map, but after some time it's not added to the plugin, it means that Google does not include these reviews to the API and the plugin can't get this.<br><br>If you need to show <b>all reviews</b>, please use <a href=\"https://richplugins.com/business-reviews-bundle-wordpress-plugin\" target=\"_blank\">the Business plugin</a> which uses a Google My Business API without API key and billing.":
"")+("yelp"==a.platform?"The plugin uses the Yelp API to get your reviews. <b>The API only returns the 3 most helpful reviews without sorting possibility.</b> When Yelp changes the 3 most helpful the plugin will automatically add the new one to your database. Thus slowly building up a database of reviews.":"")+"</div></div>":"")+'<div class="grw-builder-option"><button class="grw-connect-delete">Delete business</button></div></div>'}
function grw_serialize_connections(){var a=[],c=document.querySelectorAll(".grw-connection");for(q in c)if(Object.prototype.hasOwnProperty.call(c,q)){var b=c[q].querySelector(".grw-connect-select");if(!b||grw_is_hidden(b)||b.checked){var d={};b=c[q].getAttribute("data-lang");var e=c[q].getAttribute("data-platform"),f=c[q].querySelectorAll("input");void 0!=b&&(d.lang=b);for(var h in f)if(Object.prototype.hasOwnProperty.call(f,h)){b=f[h];var k=b.getAttribute("name");k&&("grw-connect-prop"==b.className?
(d.props=d.props||{},d.props[k]=b.value):d[k]="checkbox"==b.type?b.checked:b.value)}d.platform=e;a.push(d)}}c={};var q=document.querySelector(".grw-connect-options").querySelectorAll("input[name],select,textarea");for(var n in q)Object.prototype.hasOwnProperty.call(q,n)&&(b=q[n],k=b.getAttribute("name"),"checkbox"==b.type?c[k]=b.checked:void 0!=b.value&&(c[k]="textarea"==b.type||"word_filter"==k||"word_exclude"==k?encodeURIComponent(b.value):b.value));GRW_VARS.wordpress?document.getElementById("grw-builder-connection").value=
JSON.stringify({connections:a,options:c}):(document.getElementById("grw-builder-connections").value=JSON.stringify(a),document.getElementById("grw-builder-options").value=JSON.stringify(c));a.length&&(a=a[0],window.grw_title.value||(window.grw_title.value=a.name),grw_feed_save_ajax())}
function grw_deserialize_connections(a,c,b,d){if(GRW_VARS.wordpress)if(d=b.options,Array.isArray(b.connections))b=b.connections;else{var e=[];if(Array.isArray(b.google)){for(var f=0;f<b.google.length;f++)b.google[f].platform="google";e=e.concat(b.google)}if(Array.isArray(b.facebook)){for(f=0;f<b.facebook.length;f++)b.facebook[f].platform="facebook";e=e.concat(b.facebook)}if(Array.isArray(b.yelp)){for(f=0;f<b.yelp.length;f++)b.yelp[f].platform="yelp";e=e.concat(b.yelp)}b=e}else b=JSON.parse(b),d=JSON.parse(d);
for(e=0;e<b.length;e++)grw_connection_add(a,c.querySelector(".grw-builder-platforms"),b[e],!0);for(var h in d)Object.prototype.hasOwnProperty.call(d,h)&&(a=c.querySelector('input[name="'+h+'"],select[name="'+h+'"],textarea[name="'+h+'"]'))&&(b=a.getAttribute("name"),"boolean"===typeof d[h]?a.checked=d[h]:(a.value="textarea"==a.type||"word_filter"==b||"word_exclude"==b?decodeURIComponent(d[h]):d[h],-1<h.indexOf("_photo")&&a.value&&(a.parentNode.querySelector("img").src=a.value)))}
function grw_upload_photo(a,c,b){if(GRW_VARS.wordpress)c||(c=wp.media.frames.file_frame=wp.media({title:jQuery(this).data("uploader_title"),button:{text:jQuery(this).data("uploader_button_text")},multiple:!1}),c.on("select",function(){var d=c.state().get("selection").first().toJSON();grw_change_photo(a,d.url);b&&b(d.url)})),c.open();else return a.querySelector('input[type="file"]').click(),!1}
function grw_upload_image(a,c){for(var b=new FormData,d=0,e;e=c[d];++d)b.append("file",e);var f=this;this.xhr||(this.xhr=new XMLHttpRequest);this.xhr.open("POST","https://media.cackle.me/upload2",!0);this.xhr.onload=function(b){4===f.xhr.readyState&&200===f.xhr.status&&0<f.xhr.responseText.length&&grw_change_photo(a,"https://media.cackle.me/"+f.xhr.responseText)};this.xhr.send(b)}
function grw_change_photo(a,c){var b=jQuery(".grw-connect-photo-hidden",a);a=jQuery(".grw-connect-photo",a);b.val(c);a.attr("src",c);a.show();grw_serialize_connections()}function grw_popup(a,c,b,d){function e(){k&&0==k.closed?setTimeout(e,100):d()}var f=f||screen.height/2-b/2,h=h||screen.width/2-c/2,k=window.open(a,"","location=1,status=1,resizable=yes,width="+c+",height="+b+",top="+f+",left="+h);setTimeout(e,100)}
function grw_randstr(a){for(var c="",b=0;b<a;b++)c+="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789".charAt(Math.floor(62*Math.random()));return c}function grw_is_hidden(a){return null===a.offsetParent}function grw_capitalize(a){return a.charAt(0).toUpperCase()+a.slice(1)};