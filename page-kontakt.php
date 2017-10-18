<?php

  //response generation function

  $response = "";

  //function to generate response
  function my_contact_form_generate_response($type, $message){

    global $response;

    if($type == "success") $response = "<div class='alert alert-success'>{$message}</div>";
    else $response = "<div class='alert alert-danger'>{$message}</div>";

  }

  //response messages
  $missing_content = "Bitte alle Felder ausfüllen.";
  $email_invalid   = "Die E-Mail Adresse ist ungültig.";
  $message_unsent  = "Die Nachricht wurde nicht versandt. Bitte versuch es nochmal.";
  $message_sent    = "Danke! Deine Nachricht wurde versandt.";

  //user posted variables
  $name = $_POST['message_name'];
  $email = $_POST['message_email'];
  $textMessage = $_POST['message_text'];
  $human = $_POST['message_human'];
  
  function wpdocs_set_html_mail_content_type() {
    return 'text/html';
    }

  // Make E-Mail accept HTML Tags
  add_filter( 'wp_mail_content_type', 'wpdocs_set_html_mail_content_type' );

  //php mailer variables
  $to = get_option('admin_email');
  $subject = "Kontakt Anfrage von ".get_bloginfo('name');
  $headers = 'From: '. $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n";
  $message = '<h2>Kontaktanfrage</h2>
          <h3>Name</h3><p>'.$name.'</p>
          <h3>Email Adresse</h3><p>'.$email.'</p>
          <h3>Nachricht</h3><p>'.$textMessage.'</p>
        ';
  


if(filter_has_var(INPUT_POST, 'submit')){
      //validate email
      if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        my_contact_form_generate_response("error", $email_invalid);
      else //email is valid
      {
        //validate presence of name and message
        if(empty($name) || empty($message)){
          my_contact_form_generate_response("error", $missing_content);
        }
        else //ready to go!
        {
          $sent = wp_mail($to, $subject, $message, $headers);
          if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
          else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
        }
      }
}

 // Reset content-type to avoid conflicts -- https://core.trac.wordpress.org/ticket/23578
    remove_filter( 'wp_mail_content_type', 'wpdocs_set_html_mail_content_type' );

?>

<?php get_header(); ?>

<div id="kontakt" class="wrapper">

      <?php while ( have_posts() ) : the_post(); ?>
  
      <h1><?php the_title(); ?></h1>      
      
              <?php echo $response; ?>
      
              <div class="row">
                <div class="col-md-6">
                  <?php the_content(); ?>
                  
                  <div id="social-icons">
                    <a class="facebook" href=" <?php the_field( 'facebook-link' ); ?> " target="_blank"><span></span></a>
                    <a class="pinterest" href=" <?php the_field( 'pinterest-link' ); ?> " target="_blank"><span></span></a>
                    <a class="instagram" href=" <?php the_field( 'instagram-link' ); ?> " target="_blank"><span></span></a>
                  </div>
                </div>
                
                <div class="col-md-6">
                  <div class="form-container">
                    <form action="<?php the_permalink(); ?>" method="post">
                      <label for="name" class="sr-only">Name</label>
                      <input type="text" name="message_name" placeholder="Name:" value="<?php echo esc_attr($_POST['message_name']); ?>">

                      <label for="message_email" class="sr-only">Email</label>
                      <input type="text" name="message_email" placeholder="Email:" value="<?php echo esc_attr($_POST['message_email']); ?>">

                      <label for="message_text" class="sr-only">Botschaft</label>
                      <textarea type="text" name="message_text" placeholder="Botschaft:"><?php echo esc_textarea($_POST['message_text']); ?></textarea>
                      <label for="submit" class="sr-only">Abschicken</label>
                      <input name ="submit" type="submit" class="submit" value="Abschicken">
                    </form>
                  </div>
                </div>
                
              </div>

      <?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>