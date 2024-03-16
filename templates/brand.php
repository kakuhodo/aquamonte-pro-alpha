<?php

$hh = is_front_page() ? 'h1' : 'div';
$logo_handle = 'templates/logo';

echo <<< EOD
<$hh id="brand"><a class="triumph" href="/">

EOD;

if (file_exists(get_stylesheet_directory() . "/$logo_handle.php")) {
    get_template_part($logo_handle);
} else {
    bloginfo('name');
}

echo <<< EOD
</a></$hh><!--//#brand-->
EOD;
