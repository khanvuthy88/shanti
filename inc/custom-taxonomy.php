<?php 

add_action( 'init', 'create_book_level_tax' );

function create_book_level_tax() {
    register_taxonomy(
        'book_level',
        'post',
        array(
            'label' => __( 'Level' ),
            'public' => true,
            'rewrite' => false,
            'hierarchical' => false,
        )
    );
}

add_action( 'init', 'create_book_author_tax' );

function create_book_author_tax() {
    register_taxonomy(
        'book_author',
        'post',
        array(
            'label' => __( 'Author' ),
            'public' => true,
            'rewrite' => false,
            'hierarchical' => false,
        )
    );
}

add_action( 'init', 'create_private_illustrator_tax' );

function create_private_illustrator_tax() {
    register_taxonomy(
        'illustrator',
        'post',
        array(
            'label' => __( 'អ្នកគូររូប' ),
            'public' => true,
            'rewrite' => false,
            'hierarchical' => false,
        )
    );
}

add_action( 'init', 'create_book_publisher_tax' );

function create_book_publisher_tax() {
    register_taxonomy(
        'book_publisher',
        'post',
        array(
            'label' => __( 'អ្នកបោះពុម្ពផ្សាយ' ),
            'public' => true,
            'rewrite' => false,
            'hierarchical' => false,
        )
    );
}
?>