<?php /*! © 2014 by IT-Power GmbH (http://www.it-power.org); All rights reserved */

/**
 * Sofware Template
 *
 * @author Thomas Kleinert <thomas.kleinert@it-power.org>
 * @since 12/24/2014
 * @version @===version===@
 */ ?>
     <?php get_header(); ?>
<?php /*
Template Name: Softwareengineering Template
*/
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div id="intro-small" class="water">
            <div class="row">
                <div class="background5">
                    <h1> Software Engineering</h1>
                </div>

            </div>
            <br><br><br><br>
            <div id="inhalt"></div>
        </div>
<br>
<div id="row">
    <div class="col-md-8">
        <div class="row width1" style="border:2px solid #2d438e;">
            <div class="col-md-6"  style="padding: 10px 0 !important;"> 
    
                    <ul class="content-navigation" >
                        <li id="0"><a href="<?php echo get_permalink(get_page_by_path('leistungen/softwareengineering')); ?>#inhalt">Allgemein</a></li>
                        <li id="1"><a href="<?php echo get_permalink(get_page_by_path('leistungen/softwareengineering/software-architektur')); ?>#inhalt">Software Architektur</a></li>
                        <li id="2"><a href="<?php echo get_permalink(get_page_by_path('leistungen/softwareengineering/open-source')); ?>#inhalt">Open Source Implementierung</a></li>
                    </ul>
            </div>
             <div class="col-md-6"  style="padding: 10px 0 !important;">    
                    <ul class="content-navigation" >
                        <li id="3"><a href="<?php echo get_permalink(get_page_by_path('leistungen/softwareengineering/webentwicklung')); ?>#inhalt">Webentwicklung</a></li>
                        <li id="4"><a href="<?php echo get_permalink(get_page_by_path('leistungen/softwareengineering/inubit')); ?>#inhalt">Kompetenzzentrum Inubit</a></li>
                        <li id="5"><a href="<?php echo get_permalink(get_page_by_path('leistungen/softwareengineering/gamification')); ?>#inhalt">Produktivität durch Gamification</a></li>
                   
                    </ul>
             </div>
        </div>


        <div id="main" class="width1">
            <div class="col-md-12">
                <br>
                    <?php the_content(); ?>
                <br>
                             <br>
                <input id="btntest" type="button" value="drucken" style="height: 25px; border:none;  background-color: #2d438e; color: #FFFFFF;"/>
                <br>
                 <br>
                  <br>
            
            </div></div></div>

    <div class="col-md-1 hidden-sm"></div>
    <div class="col-md-3 hidden-sm">
        <?php get_sidebar("software"); ?>
            </div>
</div>
<br>
<br>
    <?php endwhile;
else: ?>
    <p><?php _e('Tut uns Leid. Die Seite existiert nicht.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
