
<div id="foot"
     <footer>
         <div class="row">
        <div class="col-sm-6 col-md-3" >
            <ul class="ulfooter">
                <li><a href="<?php echo get_permalink(get_page_by_path('homepage')); ?>">Home</a></li>
                <li><a href="<?php echo get_permalink(get_page_by_path('unternehmen')); ?>">Unternehmen</a></li>
                <li><a href="<?php echo get_permalink(get_page_by_path('kontakt')); ?>">Kontakt</a></li>
                <li><a href="<?php echo get_permalink(get_page_by_path('karriere')); ?>">Karriere</a></li>
                <li><a href="<?php echo get_permalink(get_page_by_path('referenzen/kunden')); ?>">Kunden</a></li>
                <li><a href="<?php echo get_permalink(get_page_by_path('referenzen/partner')); ?>">Partner</a></li>

            </ul>
            <br>
        </div>
        <div class="col-sm-6 col-md-3">
            <ul class="ulfooter">
                <li><a href="<?php echo get_permalink(get_page_by_path('leistungen/dienstleistungen')); ?>">Dienstleistungen</a></li>
                <li><a href="<?php echo get_permalink(get_page_by_path('leistungen/consulting')); ?>">Consulting</a></li>
                <li><a href="<?php echo get_permalink(get_page_by_path('leistungen/outputmanagement')); ?>">Output Management</a></li>
                <li><a href="<?php echo get_permalink(get_page_by_path('leistungen/softwareengineering')); ?>">Software Engineering</a></li>
                <li><a href="<?php echo get_permalink(get_page_by_path('leistungen/infrastruktur')); ?>">IT-Infrastruktur</a></li>
            </ul>
            <br><br>
        </div>     
        <div class="col-sm-6 col-md-3">
            <div class="row">
            <ul class="ulfooter2">
                <li><a href="mailto:service@it-power.org"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/reply.png" alt="BILD" width="50" height="50" class="alignnone size-thumbnail "></a></li>		 	 
                <li><a href="tel:+494614873434"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/dialup2.png" alt="BILD" width="50" height="50" class="alignnone size-thumbnail "></a></li>		 	 
            </ul>
            </div>
            <div class="row">
            <ul class="ulfooter2"> 	 	 	 
                <li><a href="tel:+494614873434">Tel.: +49 (0)461 487-3434</a></li><br>
                <li><a href="mailto:service@it-power.org">service@it-power.org</a></li>
            </ul>
            </div>
            <br>
        </div>


        <div class="col-sm-6 col-md-3">
            <div class="row">
            <ul class="ulfooter2">
                <li> <a href="http://www.facebook.com/ITPowerGmbh" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/fb.png" alt="facebook" width="50" height="50" class="alignnone size-thumbnail" /></a></li>
                <li> <a href="http://twitter.com/itpower_org" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/twit.png" alt="twitter" width="50" height="50" class="alignnone size-thumbnail" /></a></li>
                <li> <a href="http://www.xing.com/companies/it-powergmbh" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/xing.png" alt="xing" width="50" height="50" class="alignnone size-thumbnail" /></a></li>
            </ul>
            </div>

            <div class="row">
            <ul class="ulfooter2">
                <li><a href="<?php echo get_permalink(get_page_by_path('impressum')); ?>">Impressum</a></li><br>
                <li>&copy; IT-Power GmbH <?php echo date("Y") ?></li>

            </ul>
            </div>
            <br>
        </div></div>
    </footer>
</div>
</div> 

<?php

// javascript functions for the frontend 
function add_this_script_footer() {
    ?>

        <!-- Piwik -->
    <script type="text/javascript">
      var _paq = _paq || [];
    {jQuery(options)}
      _paq.push(['trackPageView']);
      _paq.push(['enableLinkTracking']);
      (function() {
        var u=(("https:" === document.location.protocol) ? "https" : "http") + "://localhost/piwik/";
        _paq.push(['setTrackerUrl', u+'piwik.php']);
        _paq.push(['setSiteId', 1]);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0]; g.type='text/javascript';
        g.defer=true; g.async=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
      })();  
    </script>
    <script type="text/javascript">
    // insert pictures with backstretch 
        jQuery(document).ready(function(jQuery) {

            jQuery('.carousel').carousel({
                interval: 3000, cycle: true, pause: "hover"
            });

            jQuery('#changer').on('mouseenter', function() {
                    jQuery(this).find('.nonhoverpic').hide();
                    jQuery(this).find('.hoverpic').show();
            });
            jQuery('#changer').on('mouseleave', function() {
                    jQuery('.hoverpic').hide();
                    jQuery('.nonhoverpic').show();
            });
            
            jQuery('.nonhoverpic').on('mouseenter', function() {
                jQuery(this).hide();
                jQuery(this).next('.hoverpic').show();
            });
            jQuery('.hoverpic').on('mouseleave', function() {
                jQuery('.hoverpic').hide();
                jQuery('.nonhoverpic').show();
            });
            
            //jQuery('#sidebar').stickyMojo({footerID: '#foot', contentID: '#posts'});


            jQuery(".schiff").backstretch("<?php echo get_stylesheet_directory_uri(); ?>/assets/img/schiff2.jpg");

            jQuery(".kurs").backstretch("<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kurs.png");

            jQuery(".ship").backstretch("<?php echo get_stylesheet_directory_uri(); ?>/assets/img/ship.jpg");

            jQuery(".ice").backstretch("<?php echo get_stylesheet_directory_uri(); ?>/assets/img/ice.jpg");

            jQuery(".eis").backstretch("<?php echo get_stylesheet_directory_uri(); ?>/assets/img/eis.jpg");

            jQuery(".water2").backstretch("<?php echo get_stylesheet_directory_uri(); ?>/assets/img/water2.jpg");
            
            jQuery(".water").backstretch("<?php echo get_stylesheet_directory_uri(); ?>/assets/img/water.jpg");
            
            jQuery(".news").backstretch("<?php echo get_stylesheet_directory_uri(); ?>/assets/img/news.jpg");

            jQuery(".work").backstretch("<?php echo get_stylesheet_directory_uri(); ?>/assets/img/work.jpg");

            jQuery(".cabos").backstretch("<?php echo get_stylesheet_directory_uri(); ?>/assets/img/cabos.jpg");

            jQuery(".gras").backstretch("<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gras.jpg");

            jQuery(".pust").backstretch("<?php echo get_stylesheet_directory_uri(); ?>/assets/img/pust.jpg");

            jQuery(".boat").backstretch("<?php echo get_stylesheet_directory_uri(); ?>/assets/img/boat.jpg");
            
            jQuery(".beach").backstretch("<?php echo get_stylesheet_directory_uri(); ?>/assets/img/beach.jpg");
            
            jQuery(".mill").backstretch("<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mill.png");
            
            jQuery(".hamburg").backstretch("<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hamburg.jpg");
            
            jQuery(".solar").backstretch("<?php echo get_stylesheet_directory_uri(); ?>/assets/img/solar.jpg");
            
            jQuery(".mainpic").backstretch("<?php echo get_stylesheet_directory_uri(); ?>/assets/img/main.jpg");
            
            jQuery(".meer").backstretch("<?php echo get_stylesheet_directory_uri(); ?>/assets/img/meer.jpg");

        });
        jQuery(function() {
            var totalHeight = 0;
            jQuery("#posts > div").each(function() {
                totalHeight += jQuery(this).height();
            });
            jQuery('#posts').css('height', totalHeight + 50);
        });


        jQuery(function($) {
            var delay = 300;
            var active;
            jQuery('.expand').on('mouseenter', function(event) {

                if (jQuery(window).width() > 765) {
                    // hide all other sub menus
                    jQuery(this).siblings(this).find('ul').hide();
                    jQuery(this).addClass('hover');
                    // show sub nav
                    jQuery('#subnav').css('height', '36');
                    jQuery('.navbar').css('height', '86');
                    jQuery(this).children('.children').show();

                }
            });

            jQuery('.expand').on('mouseleave', function(event) {
                if (jQuery(window).width() > 765) {

                    jQuery('.expand').removeClass('hover');
                    jQuery('#subnav').css('height', '4');
                    jQuery('.navbar').css('height', '50');
                    jQuery(this).children('.children').hide();
                }
            });


        });



    // load fonts
        WebFont.load({
            google: {
                families: ['Quicksand', 'Lato', 'Roboto', 'Quattrocento Sans']
            }
        });
        
        if(jQuery("#intro").height() > jQuery(window).height()) {
            jQuery("#intro").css('height', jQuery("#intro").height());
        }
        else {
            jQuery("#intro").css('height', jQuery(window).height());
        }
        
        jQuery(function(){
            setInterval(function(){
                //jQuery('#ticker li:first').slideUp( function () { jQuery(this).appendTo(jQuery('#ticker')).slideDown(); });
                jQuery('#ticker li:first').animate({'opacity':0}, 200, function () { jQuery(this).appendTo(jQuery('#ticker')).css('opacity', 1);});
        }, 5000);
        });

    </script>
    <?php
}

add_action('wp_footer', 'add_this_script_footer', 20);

wp_footer();
?>


</body>
</html>