<?php
function glavas_post_types()
{
    // Program post type - dobijamo novo dugme u wp adminu (optics)
    register_post_type('optics', array(
        'show_in_rest' => true, // da li zelimo da se ovi postovi prikazuju u wp adminu
        'supports' => array('title', 'editor', 'excerpt'), // opcije koje ce biti dostupne u wp adminu
        'rewrite' => array('slug' => 'optics'), //ovo je slug u url-u za ovaj post type
        'has_archive' => true, // ovo je da li zelimo da se ovi postovi prikazuju u arhivi
        'public' => true, // ovo je da li zelimo da se ovi postovi prikazuju u wp adminu
        'labels' => array( // ovo su naslovi u wp adminu
            'name' => 'Optics', //ovo je naslov u wp adminu
            'add_new_item' => 'Add New Optics', // ovo je naslov u wp adminu za dodavanje novog posta
            'edit_item' => 'Edit Optics', // ovo je naslov u wp adminu za editovanje posta
            'all_items' => 'All Optics', // ovo je naslov u wp adminu za prikaz svih postova
            'singular_name' => 'Optics' // ovo je naslov u wp adminu za jedan post
        ),
        'menu_icon' => 'dashicons-location-alt', // ovo je ikonica u wp adminu
    ));

}
add_action('init', 'glavas_post_types');

?>