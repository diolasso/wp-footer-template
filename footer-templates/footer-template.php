<?php
$logo_url = carbon_get_theme_option('footer_logo_url');
$logo = wp_get_attachment_image_url(carbon_get_theme_option('footer_logo'));
$phone_number = carbon_get_theme_option('footer_phone_number');
$email = carbon_get_theme_option('footer_email');
$address = carbon_get_theme_option('footer_address');
$menus = carbon_get_theme_option('footer_menus'); //in loop with (menu_name and menu_url) fields
$menus_2 = carbon_get_theme_option('footer_menus_2'); //same as above incase more than 2 menus columns
$footer_socials = carbon_get_theme_option('footer_social_links'); //loop with (social_icon and social_url)
$footer_name = carbon_get_theme_option('footer_name'); //usauly company name and copty right info

?>

<footer  class="">
    <div class="site-info">
        <a href="<?php echo $logo_url ?>">
            <img src="<?php echo $logo ?>" class="" />
        </a>
        <?php
        echo $email;
        foreach ($menus as $menu){
            echo $menu['menu_name'];
            echo $menu['menu_url'];
        }
        echo $address;
        ?>
    </div><!-- .site-info -->
</footer><!-- #colophon -->
