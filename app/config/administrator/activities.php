<?php

return array(
    /**
     * Model title
     *
     * @type string
     */
    'title' => 'Activities',

    /**
     * The singular name of your model
     *
     * @type string
     */
    'single' => 'activity',

    /**
     * The class name of the Eloquent model that this config represents
     *
     * @type string
     */
    'model' => 'Activity',
    
    'columns' => array(
        'title',
        'body',
        // 'activity_date',
        // 'image_path' => array(
        //     'title' => 'Image Path',
        //     'output' => '<img src="/img-upload/(:value)" height="100">'
        // ),
        // 'price',
        // 'user_id' => array(
        //     'title' => 'User Id',
        //     'relationship' => 'user',
        //     'select' => '(:table).id'
        // ),
        // 'moods' => array(
        //     'title' => 'Moods',
        //     'relationship' => 'mood',
        //     'select' => '(:table).name'
        // ),
        // 'categories' => array(
        //     'title' => 'Categories',
        //     'relationship' => 'category',
        //     'select' => '(:table).name'
        // )
    ),
    'edit_fields' => array(
        'title' => array(
            'title' => 'Title',
        ),
        'body' => array(
            'title' => 'Body'
        ),
        // 'activity_date' => array(
        //     'title' => 'Activity Date',
        //     'type' => 'datetime'
        // ),
        // 'image_path' => array(
        //     'title' => 'Image',
        //     'type' => 'image',
        //     'naming' => 'random',
        //     'location' => '/public/img-upload/',
        // ),
        // 'price' => array(
        //     'title' => 'Price',
        //     'type' => 'integer'
        // ),
        // 'user_id' => array(
        //     'title' => 'User Id',
        //     'type' => 'relationship'
        // ),
        // 'moods' => array(
        //     'title' => 'Moods',
        //     'type' => 'relationship'
        // ),
        // 'categories' => array(
        //     'title' => 'Categories',
        //     'type' => 'relationship'
        // )
    )
    
);