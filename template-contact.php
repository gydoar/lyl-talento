<?php
/**
 * Contact
 *
   Template Name:  Contact Page
 *
 * @file           template-contact.php
 * @package        StanleyWP 
 * @author         Brad Williams & Carlos Alvarez 
 * @copyright      2014 Gents Themes
 * @license        license.txt
 * @version        Release: 3.0.3
 * @link           http://codex.wordpress.org/Theme_Development#Pages_.28page.php.29
 * @since          available since Release 1.0
 */
   ?>

   <?php
   if(isset($_POST['submitted'])) {
    if(trim($_POST['contactName']) === '') {
        $nameError = 'Por favor ingrese su nombre.';
        $hasError = true;
    } else {
        $name = trim($_POST['contactName']);
    }

    if(trim($_POST['email']) === '')  {
        $emailError = 'Por favor ingrese su email.';
        $hasError = true;
    } else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['email']))) {
        $emailError = 'Dirreción de email invalida.';
        $hasError = true;
    } else {
        $email = trim($_POST['email']);
    }

     if(trim($_POST['telefono']) === '') {
        $telError = 'Por favor ingrese su teléfono.';
        $hasError = true;
    } else {
        $telefono = trim($_POST['telefono']);
    }

    if(trim($_POST['comments']) === '') {
        $commentError = 'Por favor ingresa un mensaje.';
        $hasError = true;
    } else {
        if(function_exists('stripslashes')) {
            $comments = stripslashes(trim($_POST['comments']));
        } else {
            $comments = trim($_POST['comments']);
        }
    }

    if(!isset($hasError)) {
        $emailTo = get_option('tz_email');
        if (!isset($emailTo) || ($emailTo == '') ){
            $emailTo = get_option('admin_email');
        }
        $subject = '[Contacto axemos] From '.$name;
        $body = "Nombre: $name \n\nEmail: $email \n\nTeléfino: $telefono \n\nComments: $comments";
        $headers = 'From: '.$name.' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

        wp_mail($emailTo, $subject, $body, $headers);
        $emailSent = true;
    }

} ?>

<?php get_header(); ?>

   <article class="container page">
        
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <h2><img width="16px" src="<?php bloginfo('template_url' ); ?>/img/vineta1.png" alt=""> <?php the_title(); ?></h2>

        <?php endwhile; else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>


        <section class="post-entry">
            <br>
            <div style="max-width:700px;margin:0 auto;"class="row">    
            <div class="six columns">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui illum autem, facere asperiores quibusdam delectus omnis sunt dicta eligendi veritatis beatae ducimus ex pariatur tempore culpa debitis, repellat et eum.

            </div>
            <div class="six columns">

             <?php if(isset($emailSent) && $emailSent == true) { ?>
             <div class="alert alert-success">
                <p>Gracias, su mensaje ha sido bien recibido.</p>
            </div>
            <?php } else { ?>

            <?php if(isset($hasError) || isset($captchaError)) { ?>
            <div class="alert alert-danger alert-dismissable">
                <a class="close" data-dismiss="alert">×</a>
                <h4 class="alert-heading">Disculpe, existen algunos errores.</h4>
                <p class="error">Por favor inténtalo de nuevo!<p>
                </div>
                <?php } ?>

                <form action="<?php the_permalink(); ?>" id="contactForm" method="post">
                    <fieldset>
                        <div class="form-group">

                            <input class="form-control" type="text" name="contactName" id="contactName" value="" placeholder="Nombre" />
                            <span class="input-icon fui-check-inverted"></span>
                            <?php if(isset($nameError)) { ?>
                            <p><span class="error"><?=$nameError;?></span></p>
                            <?php } ?>
                             <br>

                        </div>
                        <div class="form-group">

                            <input class="form-control" type="text" name="email" id="email" value="" placeholder="Email" />
                            <span class="input-icon fui-check-inverted"></span>
                            <?php if(isset($emailError)) { ?>
                            <p><span class="error"><?=$emailError;?></span></p>
                            <?php } ?>

                             <br>
                        </div>
                        <div class="form-group">

                            <input class="form-control" type="text" name="telefono" id="telefono" value="" placeholder="Teléfono" />
                            <span class="input-icon fui-check-inverted"></span>
                            <?php if(isset($telError)) { ?>
                            <p><span class="error"><?=$telError;?></span></p>
                            <?php } ?>

                             <br>
                        </div>
                        <div class="form-group">

                            <textarea class="form-control" name="comments" id="commentsText" rows="100" cols="10" placeholder="Mensaje"></textarea>
                            <?php if(isset($commentError)) { ?>
                            <p><span class="error"><?=$commentError;?></span></p>
                            <?php } ?>
                             <br>
                        </div>
                        <div class="form-actions">
                            <button style="float:right;"type="submit" class="btn btn-success button-primary">Enviar</button>
                        </div>
                        <input type="hidden" name="submitted" id="submitted" value="true" />
                    </fieldset>
                </form>
                <?php } ?>

                </div>
        </div><!-- /row -->

            </section><!-- end of .post-entry -->


    </article>



<?php get_footer(); ?>