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
<style>
</style>

<footer class="footer">
    <div class="container">
        <div class="row" style="position:relative;">

            <div class="col-lg-4 col-md-4">
                <div class="footer-contacts">
                    <div class="footer-heni-logo"><img src="<?php echo $logo ?>"></div>
                    <div class="address-display"><?php echo $address ?></div>
                    <div class="tel-number">Tel: <a href="tel:<?php echo $phone_number?>"><?php echo $phone_number ?></a></div>
                    <div class="email-address">Email: <a href="mailto:<?php echo $email ?>"><?php echo $email ?></a></div>
                </div>
            </div><!-- col-lg-4  logo, address, phone, email -->

            <div class="col-lg-8 col-md-8">
                <div class="footer-menus">
                    <div class="row">

                        <div class="col-lg-4">
                            <ul id="menu-footer-menu-1" class="footer-menu">
                                <?php
                                    foreach ($menus as $menu){
                                       ?>
                                        <li id="menu-item" class="menu-item menu-item-type-post_type menu-item-object-page menu-item"><a href="<?php echo $menu['menu_url'] ?>"><?php echo $menu['menu_name'] ?></a></li>
                                        <?php
                                    }
                                ?>
                            </ul>
                        </div><!-- .menu -->

                        <div class="col-lg-8">
                            <ul id="menu-footer-menu-2" class="footer-menu"><li id="menu-item-448" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-448"><a href="https://heni.com/careers/">Careers</a></li>
                                   <?php
                                        foreach ($menus_2 as $menu){ ?>
                                        <li id="menu-item" class="menu-item menu-item-type-post_type menu-item-object-page menu-item"><a href="<?php echo $menu['menu_url'] ?>"><?php echo $menu['menu_name'] ?></a></li>
                                 <?php   }
                                ?>
                            </ul>
                        </div><!-- .menu2 -->

                    </div>
                </div>
            </div> <!-- MENUS  col-lg-8 -->

            <div class="social-media ">
                <div class="link tw">
                    <?php
                    foreach ($footer_socials as $social){
                        ?>
                        <a style="margin-right: 35px;" target="_blank" href="<?php echo $social['social_url'] ?>">
                            <img src="<?php echo wp_get_attachment_image_url($social['social_icon']) ?>">
                        </a>
                    <?php
                    }
                    ?>
                </div>
            </div><!-- .social-media -->

        </div><!-- top ROW -->


        <div class="row">
            <div class="col-lg-12">
                <div class="heni-footer">© <?php echo $footer_name; echo  date("Y"); ?></div>
            </div>
        </div><!-- .row -->

    </div><!-- .CONTAINER -->
</footer>