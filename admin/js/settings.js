var site_settings = '<div class="ts-button">'
        +'<span class="fa fa-cog"></span>'
    +'</div>'
    +'<div class="ts-body">'
        +'<div class="ts-title">Опции</div>'
        +'<div class="ts-row">'
            +'<label class="check"><input type="checkbox" class="icheckbox" name="st_head_fixed" value="1"/> Фиксированный Header</label>'
        +'</div>'
        +'<div class="ts-row">'
            +'<label class="check"><input type="checkbox" class="icheckbox" name="st_sb_fixed" value="1" checked/> Фиксированный сайдбар</label>'
        +'</div>'
        +'<div class="ts-row">'
            +'<label class="check"><input type="checkbox" class="icheckbox" name="st_sb_scroll" value="1"/> Прокручивание сайдбар</label>'
        +'</div>'
        +'<div class="ts-row">'
            +'<label class="check"><input type="checkbox" class="icheckbox" name="st_sb_right" value="1"/> Сайдбар с права</label>'
        +'</div>'
        +'<div class="ts-row">'
            +'<label class="check"><input type="checkbox" class="icheckbox" name="st_sb_custom" value="1"/> Фиксированная ширина панели</label>'
        +'</div>'
        +'<div class="ts-row">'
            +'<label class="check"><input type="checkbox"  id="st_sb_toggled" class="icheckbox" name="st_sb_toggled" value="1"/> Уменьшенный вид</label>'
        +'</div>'
    +'</div>';
    
var settings_block = document.createElement('div');
    settings_block.className = "theme-settings";
    settings_block.innerHTML = site_settings;
    document.body.appendChild(settings_block);

$(document).ready(function(){
/*
    $.get("assets/settings.html",function(data){        
        $("body").append($(data));
    });*/
    
    /* Default settings */
    var theme_settings = {
        st_head_fixed: 1,
        st_sb_fixed: 1,
        st_sb_scroll: 1,
        st_sb_right: 0,
        st_sb_custom: 1,
        st_sb_toggled: 0
    };
    /* End Default settings */
    
    set_settings(theme_settings,false);    
    
    $(".theme-settings input").on("ifClicked",function(){
        
        var input   = $(this);

        if(input.attr("name") != 'st_layout_boxed'){
                
            if(!input.prop("checked")){
                theme_settings[input.attr("name")] = input.val();
            }else{            
                theme_settings[input.attr("name")] = 0;
            }
            
        }else{
            theme_settings[input.attr("name")] = input.val();
        }

        /* Rules */
        if(input.attr("name") === 'st_sb_fixed'){
            if(theme_settings.st_sb_fixed == 1){
                theme_settings.st_sb_scroll = 1;
            }else{
                theme_settings.st_sb_scroll = 0;
            }
        }
        
        if(input.attr("name") === 'st_sb_scroll'){
            if(theme_settings.st_sb_scroll == 1 && theme_settings.st_layout_boxed == 0){
                theme_settings.st_sb_fixed = 1;
            }else if(theme_settings.st_sb_scroll == 1 && theme_settings.st_layout_boxed == 1){
                theme_settings.st_sb_fixed = -1;
            }else if(theme_settings.st_sb_scroll == 0 && theme_settings.st_layout_boxed == 1){
                theme_settings.st_sb_fixed = -1;
            }else{
                theme_settings.st_sb_fixed = 0;
            }
        }
        
        if(input.attr("name") === 'st_layout_boxed'){
            if(theme_settings.st_layout_boxed == 1){                
                theme_settings.st_head_fixed    = -1;
                theme_settings.st_sb_fixed      = -1;
                theme_settings.st_sb_scroll     = 1;
                
                $("#ts-wallpapers").show();
            }else{
                theme_settings.st_head_fixed    = 0;
                theme_settings.st_sb_fixed      = 1;
                theme_settings.st_sb_scroll     = 1;
                
                $("#ts-wallpapers").hide();
            }
        }
        /* End Rules */
        
        set_settings(theme_settings,input.attr("name"));
    });
    
    /* Change Theme */
    $(".ts-themes a[data-theme]").click(function(){
        $(".ts-themes a[data-theme]").removeClass("active");
        $(this).addClass("active");
        $("#theme").attr("href",$(this).data("theme"));
        return false;
    });
    /* END Change Theme */
    
    /* Open/Hide Settings */
    $(".ts-button").on("click",function(){
        $(".theme-settings").toggleClass("active");
    });
    /* End open/hide settings */
});

function set_settings(theme_settings,option){
    
    /* Start Header Fixed */
    if(theme_settings.st_head_fixed == 1)
        $(".page-container").addClass("page-navigation-top-fixed");
    else
        $(".page-container").removeClass("page-navigation-top-fixed");    
    /* END Header Fixed */
    
    /* Start Sidebar Fixed */
    if(theme_settings.st_sb_fixed == 1){        
        $(".page-sidebar").addClass("page-sidebar-fixed");
    }else
        $(".page-sidebar").removeClass("page-sidebar-fixed");
    /* END Sidebar Fixed */
    
    /* Start Sidebar Fixed */
    if(theme_settings.st_sb_scroll == 1){          
        $(".page-sidebar").addClass("scroll").mCustomScrollbar("update");        
    }else
        $(".page-sidebar").removeClass("scroll").css("height","").mCustomScrollbar("disable",true);
    
    /* END Sidebar Fixed */
    
    /* Start Right Sidebar */
    if(theme_settings.st_sb_right == 1)
        $(".page-container").addClass("page-mode-rtl");
    else
        $(".page-container").removeClass("page-mode-rtl");
    /* END Right Sidebar */
    
    /* Start Custom Sidebar */
    if(theme_settings.st_sb_custom == 1)
        $(".page-sidebar .x-navigation").addClass("x-navigation-custom");
    else
        $(".page-sidebar .x-navigation").removeClass("x-navigation-custom");
    /* END Custom Sidebar */
    
    /* Start Custom Sidebar */
    if(option && option === 'st_sb_toggled'){
        if(theme_settings.st_sb_toggled == 1){
            $(".page-container").addClass("page-navigation-toggled");
            $(".x-navigation-minimize").trigger("click");
        }else{          
            $(".page-container").removeClass("page-navigation-toggled");
            $(".x-navigation-minimize").trigger("click");
        }
    }
    /* END Custom Sidebar */
    
    /* Set states for options */
    if(option === false || option === 'st_layout_boxed' || option === 'st_sb_fixed' || option === 'st_sb_scroll'){        
        for(option in theme_settings){
            set_settings_checkbox(option,theme_settings[option]);
        }
    }
    /* End states for options */
    
    /* Call resize window */
    $(window).resize();
    /* End call resize window */
}

function set_settings_checkbox(name,value){
    
    if(name == 'st_layout_boxed'){    
        
        $(".theme-settings").find("input[name="+name+"]").prop("checked",false).parent("div").removeClass("checked");
        
        var input = $(".theme-settings").find("input[name="+name+"][value="+value+"]");
                
        input.prop("checked",true);
        input.parent("div").addClass("checked");        
        
    }else{
        
        var input = $(".theme-settings").find("input[name="+name+"]");
        
        input.prop("disabled",false);            
        input.parent("div").removeClass("disabled").parent(".check").removeClass("disabled");        
        
        if(value === 1){
            input.prop("checked",true);
            input.parent("div").addClass("checked");
        }
        if(value === 0){
            input.prop("checked",false);            
            input.parent("div").removeClass("checked");            
        }
        if(value === -1){
            input.prop("checked",false);            
            input.parent("div").removeClass("checked");
            input.prop("disabled",true);            
            input.parent("div").addClass("disabled").parent(".check").addClass("disabled");
        }        
                
    }
}