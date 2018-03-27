<?php // Afiliados RVC

function new_contactmethods( $contactmethods ) {
  $contactmethods['facebook'] = 'Facebook'; // Add Facebook
  $contactmethods['twitter'] = 'Twitter'; // Add Twitter
  $contactmethods['linkedin'] = 'Linkedin'; // Add Linkedin
  $contactmethods['gplus'] = 'Google+'; // Add Google +
  unset($contactmethods['yim']); // Remove Yahoo IM
  unset($contactmethods['aim']); // Remove AIM
  unset($contactmethods['jabber']); // Remove Jabber

return $contactmethods;
}
add_filter('user_contactmethods','new_contactmethods',10,1);
