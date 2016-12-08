<?php
/*
Template Name: Página de Comentários
*/
get_header(); ?>
   <div id="comments">
<?php /* Correr algumas verificações para robots artigos protegidos com password */ ?>
<?php
 $req = get_option('require_name_email'); // Verifica se os campos são obrigatórios.
 if ( 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']) )
  die ( 'Please do not load this page directly. Thanks!' );
 if ( ! empty($post->post_password) ) :
  if ( $_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password ) :
?>
    <div class="nopassword"><?php _e('This post is password protected. Enter the password to view any comments.', 'Serve Engenharia') ?></div>
   </div><!- .comments ->
<?php
  return;
 endif;
endif;
?>
 
<?php /* Verificar se há comentários e fazer coisas! */ ?>
<?php if ( have_comments() ) : ?>
 
<?php /* Contar o número de comentários e trackbacks (ou pings) */
$ping_count = $comment_count = 0;

foreach ( $comments as $comment )
 get_comment_type() == "comment" ? ++$comment_count : ++$ping_count;
?>
 
<?php /* Se existire comentários, mostrar os comentários */ ?>
<?php if ( have_comments() ) : ?>
    <div id="comments-list" class="comments">
     <h3><?php printf($comment_count > 1 ? __('<span>%d</span> Comments', 'serve') : __('<span>One</span> Comment', 'serve'), $comment_count) ?></h3>
 
<?php /* Se existirem comentários suficientes, construir a paginação de comentários  */ ?>
<?php $total_pages = get_comment_pages_count(); if ( $total_pages > 1 ) : ?>
  <nav aria-label="Page navigation">
    <ul class="pagination">
      <?php paginate_comments_links( array('prev_text' => '<span aria-hidden="true">&laquo;</span>', 'next_text' => '<span aria-hidden="true">&raquo;</span>', 'before' => '<li>') ); ?>
    </ul>
  </nav> <!- #comments-nav-above ->
<?php endif; ?>    
 
<?php /* Uma lista ordenada de comentários, custom_comments(), in functions.php   */ ?>
     <ol>
<?php wp_list_comments('type=comment&callback=custom_comments'); ?>
     </ol>
 
<?php /* Se existirem comentários suficientes, construir a navegação */ ?>
<?php $total_pages = get_comment_pages_count(); if ( $total_pages > 1 ) : ?>
      <nav aria-label="Page navigation">
        <ul class="pagination">
          <?php paginate_comments_links( array('prev_text' => '<span aria-hidden="true">&laquo;</span>', 'next_text' => '<span aria-hidden="true">&raquo;</span>', 'before' => '<li>') ); ?>
        </ul>
      </nav><!- #comments-nav-below ->
<?php endif; ?>    
 
    </div><!- #comments-list .comments ->
 
<?php endif; /* if ( $comment_count ) */ ?>
 
<?php /* Se existirem trackbacks(pings), mostrar os trackbacks  */ ?>
<?php if ( ! empty($comments_by_type['pings']) ) : ?>
 
    <div id="trackbacks-list" class="comments">
     <h3><?php printf($ping_count > 1 ? __('<span>%d</span> Trackbacks', 'Serve') : __('<span>One</span> Trackback', 'Serve'), $ping_count) ?></h3>
 
<?php /* Uma lista ordenada de trackbacks, custom_pings(), in functions.php   */ ?>
     <ol>
<?php wp_list_comments('type=pings&callback=custom_pings'); ?>
     </ol>    
 
    </div><!- #trackbacks-list .comments ->  
 
<?php endif /* if ( $ping_count ) */ ?>
<?php endif /* if ( $comments ) */ ?>
 
<?php /* Se os comentários estiverem ligados, criar o formulário de resposta */ ?>
<?php if ( 'open' == $post->comment_status ) : ?>
    <div id="respond">
        <h3><?php comment_form_title( __('Post a Comment', 'Serve'), __('Post a Reply to %s', 'your-theme') ); ?></h3>
 
        <div id="cancel-comment-reply"><?php cancel_comment_reply_link() ?></div>
 
<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
     <p id="login-req"><?php printf(__('You must be <a href="%s" title="Log in">logged in</a> to post a comment.', 'Serve'),
     get_option('siteurl') . '/wp-login.php?redirect_to=' . get_permalink() ) ?></p>
 
<?php else : ?>
     <div class="formcontainer">
 
      <form id="commentform" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post">
 
<?php if ( $user_ID ) : ?>
       <p id="login"><?php printf(__('<span class="loggedin">Logged in as <a href="%1$s" title="Logged in as %2$s">%2$s</a>.</span> <span class="logout"><a href="%3$s" title="Log out of this account">Log out?</a></span>', 'Serve'),
        get_option('siteurl') . '/wp-admin/profile.php',
        wp_specialchars($user_identity, true),
        wp_logout_url(get_permalink()) ) ?></p>
 
<?php else : ?>
 
       <p id="comment-notes"><?php _e('Your email is <em>never</em> published nor shared.', 'your-theme') ?> <?php if ($req) _e('Required fields are marked <span class="required">*</span>', 'Serve') ?></p>
 
              <div id="form-section-author" class="form-section">
        <div class="form-label"><?php if ($req) _e('<span class="required">*</span>', 'Serve') ?></div>
        <div class="form-input"><input id="author" name="author" type="text" value="<?php echo $comment_author ?>" size="30" maxlength="20" tabindex="3" placeholder="<?php _e('Name', 'Serve') ?>" /></div>
              </div><!- #form-section-author .form-section ->
 
              <div id="form-section-email" class="form-section">
        <div class="form-label"><?php if ($req) _e('<span class="required">*</span>', 'Serve') ?></div>
        <div class="form-input"><input id="email" name="email" type="text" value="<?php echo $comment_author_email ?>" size="30" maxlength="50" tabindex="4" placeholder="<?php _e('Email', 'Serve') ?>" /></div>
              </div><!- #form-section-email .form-section ->
 
              <div id="form-section-url" class="form-section">
        <div class="form-input"><input id="url" name="url" type="text" value="<?php echo $comment_author_url ?>" size="30" maxlength="50" tabindex="5" placeholder="<?php _e('Website', 'Serve') ?>" /></div>
              </div><!- #form-section-url .form-section ->
 
<?php endif /* if ( $user_ID ) */ ?>
 
              <div id="form-section-comment" class="form-section">
        <div class="form-textarea"><textarea id="comment" name="comment" cols="45" rows="8" tabindex="6" placeholder="<?php _e('Comment', 'Serve') ?>" ></textarea></div>
              </div><!-- #form-section-comment .form-section -->
 
              <div id="form-allowed-tags" class="form-section">
               <p><span><?php _e('You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes:', 'Serve') ?></span> <code><?php echo allowed_tags(); ?></code></p>
              </div>
 
<?php do_action('comment_form', $post->ID); ?>
 
       <div class="form-submit"><button><?php _e('Post Comment', 'Serve') ?></button><input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" /></div>
 
<?php comment_id_fields(); ?>  
 
<?php /* O código termina aqui. Está feito. Vamos encerrá-lo. */ ?>  
 
      </form><!- #commentform ->
     </div><!- .formcontainer ->
<?php endif /* if ( get_option('comment_registration') && !$user_ID ) */ ?>
    </div><!- #respond ->
<?php endif /* if ( 'open' == $post->comment_status ) */ ?>
   </div><!- #comments ->