<?
get_header();
query_posts();
while (have_posts()) {
  the_post();

}

get_footer();
?>
