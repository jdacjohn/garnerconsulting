jQuery(document).ready(function(c){var b,a=false,d,e;c("#link_name").focus();postboxes.add_postbox_toggles("link");c("#category-tabs a").click(function(){var f=c(this).attr("href");c(this).parent().addClass("tabs").siblings("li").removeClass("tabs");c(".tabs-panel").hide();c(f).show();if("#categories-all"==f){deleteUserSetting("cats")}else{setUserSetting("cats","pop")}return false});if(getUserSetting("cats")){c('#category-tabs a[href="#categories-pop"]').click()}b=c("#newcat").one("focus",function(){c(this).val("").removeClass("form-input-tip")});c("#category-add-submit").click(function(){b.focus()});d=function(){if(a){return}a=true;var f=c(this),h=f.is(":checked"),g=f.val().toString();c("#in-link-category-"+g+", #in-popular-category-"+g).attr("checked",h);a=false};e=function(g,f){c(f.what+" response_data",g).each(function(){var h=c(c(this).text());h.find("label").each(function(){var j=c(this),l=j.find("input").val(),m=j.find("input")[0].id,i=c.trim(j.text()),k;c("#"+m).change(d);k=c('<option value="'+parseInt(l,10)+'"></option>').text(i)})})};c("#categorychecklist").wpList({alt:"",what:"link-category",response:"category-ajax-response",addAfter:e});c('a[href="#categories-all"]').click(function(){deleteUserSetting("cats")});c('a[href="#categories-pop"]').click(function(){setUserSetting("cats","pop")});if("pop"==getUserSetting("cats")){c('a[href="#categories-pop"]').click()}c("#category-add-toggle").click(function(){c(this).parents("div:first").toggleClass("wp-hidden-children");c('#category-tabs a[href="#categories-all"]').click();c("#newcategory").focus();return false});c(".categorychecklist :checkbox").change(d).filter(":checked").change()});