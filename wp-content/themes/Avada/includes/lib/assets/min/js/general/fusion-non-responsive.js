jQuery(window).on("load",function(){var o,s;o=["col-sm-0","col-sm-1","col-sm-2","col-sm-3","col-sm-4","col-sm-5","col-sm-6","col-sm-7","col-sm-8","col-sm-9","col-sm-10","col-sm-11","col-sm-12"],jQuery(".col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12").each(function(){for(s=0;s<o.length;s++)-1!==jQuery(this).attr("class").indexOf(o[s])&&jQuery(this).addClass("col-xs-"+s)})});