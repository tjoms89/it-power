<?php 
/*! © 2014 by IT-Power GmbH (http://www.it-power.org); All rights reserved */

/**
 * Kunden
 *
 * @author Thomas Kleinert <thomas.kleinert@it-power.org>
 * @since 12/24/2014
 * @version @===version===@
 */
get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div id="intro-small" class="kurs">
            <div class="row">
                <div class="background5">
                    <h1> Unsere Kunden sind auf Erfolgskurs</h1>
                </div>
            </div>
        </div>
        </div>
        <div id="kunde">
            <div class="row">
                <div class="col-md-4">
                    <br>
                    <div id="picture" class="user"></div>
                    <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/deerberg.png" width="370" height="200" class="alignnone size-thumbnail " /></a>
                    <br>
                </div>
                <div class="col-md-8">
                    <br><br><br>
                    <h2>Deerberg</h2>
                    Mit einem leistungsstarken Partner wie der IT-Power an unserer Seite ist das Projekt “Intranet“ mit den Parametern time, budget und quality zu einem echten Erfolg geworden!« 
                    <br><br>
                    <b>- Gesche Busch, Abteilungsleiterin Kundenservicecenter</b>
                    <br><br>
                                        <a href="<?php echo get_permalink(get_page_by_path('referenzen/kunden/deerberg')); ?>"> <p style="text-align: center; text-decoration: none;"> > mehr lesen  </p> </a>

                    <br>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <br>
                    <div id="picture" class="user"></div>
                    <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/vodafone.jpg" width="300" height="200" class="alignnone size-thumbnail " /></a>
                    <br>
                </div>
                <div class="col-md-8">
                    <br><br><br>
                    <h2>Vodafone</h2>
                    »Ich habe die IT-Power als kompetenten Partner kennengelernt. Projekte sind professionell besetzt und werden in-time sowie in-budget realisiert. Ein Lieferant wie er einem Kunden gefällt.«
                    <br><br>
                    <b>
                        - Peter Plank, Leiter Finanzen Region Nord</b>                         
                    <br><br>
                </div>
            </div>
           
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <br><br><br>
                    <div id="picture" class="user"></div>
                    <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/conergos.jpg" width="220" height="60" class="alignnone size-thumbnail " /></a>
                    <br>
                </div>
                <div class="col-md-8">
                    <br>
                    <h2>Conergos</h2>
                    <p>»Wir schätzen die Mitarbeiter der IT-Power GmbH seit vielen Jahren als kompetente Partner für die Formularentwicklung sowohl im StreamServe Umfeld sowie bei der Betreuung und Umsetzung komplexer Output-Management-Lösungen im Umfeld der Verbrauchsabrechnung mit SAP IS-U. Die Unterstützung der Outputprozesse in der IT-Landschaft für mehrere Energieversorger wird seit Jahren begleitet und gemeinsam stetig verbessert. Die IT-Power überzeugt durch lösungsorientierte Arbeitsweise und kooperative Zusammenarbeit.«</p>
                    <br><br>
                    <b>- Axel Falge, Leiter Technologie
                    </b>                     
                    <br><br>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <br>
                    <div id="picture" class="user"></div>
                    <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bilfinger.png" width="400" height="150" class="alignnone size-thumbnail " /></a>
                    <br><br>
                </div>
                <div class="col-md-8">
                    <br>
                    <h2>Bilfinger GreyLogix</h2>
                    <p>»Eine zuverlässige Datenkommunikation ist in unserem Unternehmen sehr wichtig. Unsere Kunden kommen aus aller Welt und unsere Standorte befinden sich in ganz Europa. Mit dem Glasfaseranschluss und Internet-Access von IT-Power kommunizieren wir sicher und zuverlässig.«</p>
                    <br><br>
                    <b>- Lars Malter, Managing Director
                    </b>                     
                    <br><br>
                </div>
            </div>
                        
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <br>
                    <div id="picture" class="user"></div>
                    <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mpibp.jpg" width="300" height="200" class="alignnone size-thumbnail " /></a>
                    <br>
                </div>
                <div class="col-md-8">
                    <br><br><br>
                    <h2>Max-Planck-Institut für Biophysik</h2>
                    <br><br>
                    <b></b>                     
                    <br><br>
                </div>
            </div>
            <hr>   
           <div class="row">
                <div class="col-md-4">
                    <br>
                    <div id="picture" class="user"></div>
                    <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/FUBerlin.jpg" width="600" height="160" class="alignnone size-thumbnail " /></a>
                    <br>
                </div>
                <div class="col-md-8">
                    <br><br><br>
                    <h2>Freie Universität Berlin</h2>
                    <br><br>
                    <b></b>                     
                    <br><br>
                </div>
            </div>
            

        </div>


    <?php
    endwhile;
else:
    ?>
    <p><?php _e('Keine Neuigkeiten'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
