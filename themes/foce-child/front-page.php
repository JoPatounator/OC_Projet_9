<?php

//get_header();
// Appel du template partiel du header pour mise en place du menu burger
get_template_part('/template-parts/header');
?>

<main id="primary" class="site-main">
    <section class="banner" data-0="transform: translateY(0%);" data-800="transform: translateY(-30%);">
        <!--<section class="banner">-->
        <img src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
        <video id="background-video" autoplay loop muted data-0="transform: translateY(0%);" data-800="transform: translateY(-30%);">
            <!--<video id="background-video" autoplay loop muted>-->
            <source src="<?php echo 'http://koukaki.local/wp-content/uploads/2025/01/StudioKoukaki-videoheadersansson1.mp4'; ?>" type="video/mp4">
        </video>
    </section>

    <section id="story" class="story">
        <!--<h2>L'histoire</h2>-->
        <h2 class="title">
            <span class="mot-1">L'histoire</span>
        </h2>

        <article id="" class="story__article">
            <p><?php echo get_theme_mod('story'); ?></p>
        </article>
        <?php
        $args = array(
            'post_type' => 'characters',
            'posts_per_page' => -1,
            'meta_key'  => '_main_char_field',
            'orderby'   => 'meta_value_num',

        );
        $characters_query = new WP_Query($args);
        ?>
        <article id="characters">
            <?php get_template_part('/template-parts/carrousel'); ?>
        </article>
        <article id="place">
            <div>
                <h3>Le Lieu</h3>
                <p><?php echo get_theme_mod('place'); ?></p>
            </div>
            <div class="nuages">
                <img class="gros-nuage" src="http://koukaki.local/wp-content/uploads/2025/01/big_cloud.png">
                <img class="petit-nuage" src="http://koukaki.local/wp-content/uploads/2025/01/little_cloud.png">
            </div>

        </article>
    </section>


    <section id="studio">
        <!-- <h2>Studio Koukaki</h2> -->

        <h2 class="title">
            <span class="mot-1">Studio</span>
            <span class="mot-2"> Koukaki</span>
        </h2>

        <div>
            <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
            <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
        </div>
    </section>





</main><!-- #main -->

<?php
//Appel du template part "oscars-court-metrage"
get_template_part('/template-parts/oscars-court-metrage', 'none'); // A désactiver lorsque la section "oscars-court-metrage" ne sera plus necessaire
//get_footer();
get_template_part('/template-parts/footer', 'none');
?>