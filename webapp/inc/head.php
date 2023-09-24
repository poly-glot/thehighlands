<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>The Highlands</title>

    <link href="/css/design.css" rel="stylesheet" type="text/css"/>

    <meta name="Keywords" content=""/>
    <meta name="Description" content=""/>
    <meta name="robots" content="index, follow"/>

    <script language="javascript" type="text/javascript" src="/js/jquery.js"></script>
    <script language="javascript" type="text/javascript" src="/js/lightbox.js"></script>
    <script language="javascript" type="text/javascript">

        var old_class="";
        var hover_class="";

        jQuery(document).ready(function($)
        {
            var objNavigation=$('ul.navigation li:nth-child(2)')
            if(objNavigation.attr("class")=="active")
            {
                objNavigation.attr("class","active-big");
            }
            var objNavigation=$('ul.navigation li:nth-child(4)')
            if(objNavigation.attr("class")=="active")
            {
                objNavigation.attr("class","active-big");
            }

            $('ul.navigation > li').each(navigation_correct_size);
            $('ul.navigation > li').bind('mouseover', navigation_over);
            $('ul.navigation > li').bind('mouseout',   navigation_out);

            $('a[@rel*=lightbox]').lightBox();

        });


        function navigation_correct_size()
        {
            textSize=$(this).text().length;
            if(textSize>11)
            {
                hover_class="active-big-empty";
                if($(this).attr("class")!="active-big")
                {
                    $(this).addClass(hover_class);
                }
            }

        }

        function navigation_over()
        {
            old_class=$(this).attr("class");
            $(this).attr("class","");

            textSize=$(this).text().length;
            if(textSize>11)
            {
                hover_class="active-big";
            }else{
                hover_class="active";
            }

            $(this).addClass(hover_class);
        }

        function navigation_out()
        {
            $(this).removeClass(hover_class);
            $(this).addClass(old_class);
        }

    </script>
</head>
