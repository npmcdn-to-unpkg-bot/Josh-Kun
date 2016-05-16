<?php 

if ( $post->post_parent == '6' ) {
  include_once locate_template('page-project.php');  
} else {
  include_once locate_template('page-default.php');  
}

?>