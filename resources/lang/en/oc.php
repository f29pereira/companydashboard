<?php

return  [
    /*
    |--------------------------------------------------------------------------
    | Occurrences Menu - Language Lines (en)
    |--------------------------------------------------------------------------
    */
    'menu' => [
        'card-title'            =>  'Occurrences Menu',
    ],

    /*
    |--------------------------------------------------------------------------
    | Occurrences Index - Language Lines (en)
    |--------------------------------------------------------------------------
    */
    'index-title'               =>  'Occurrences',
    'tip-index'                 =>  'List of registered occurrences',

    //Table
    'th-title'                  => 'Title',
    'th-company'                => 'Company',
    'th-user'                   => 'Sended By',
    'th-resolution'             => 'Resolution State',
    'th-management'             => 'Occurrence management',

    //Tooltips - management Buttons
    'tip-show-btn'              => 'Show Occurrence Details',
    'tip-edit-btn'              => 'Update Occurrence data',
    'tip-delete-btn'            => 'Delete Occurrence',

    //Add Occurrence Button
    'add-title'                 => 'Occurrence',
    'tip-add'                   => 'Send occurrence',

    /*
    |--------------------------------------------------------------------------
    | Occurrences Delete - Language Lines (en)
    |--------------------------------------------------------------------------
    */
    'delete-title'              =>  'Delete Occurrence',

    //Tooltip
    'tip-delete'                => 'The selected occurrence will be deleted',

    //Toastr - Delete Notification Message
    'toastr-delete-sucess'      =>  'Occurrence sucessfully deleted.',

    /*
    |--------------------------------------------------------------------------
    | Occurrences Create - Language Lines (en)
    |--------------------------------------------------------------------------
    */
    'create-title'              =>  'Send Occurrence',
    'tip-create'                =>  'Form to send an occurrence',

    //Form Create label
    'label-title'               =>  'Title',
    'label-description'         =>  'Description',
    'label-company'             =>  'Is a client occurrence?',

    //Form Create placeholder
    'text-create-title'         =>  'Insert Occurrence Title',
    'text-create-description'   =>  'Insert Occurrence Description',
    'text-create-company'       =>  'Select Company:',

    //Toastr - Create Notification Message
    'toastr-update-sucess'      =>  'Occurrence sucessfully sended.',

    /*
    |--------------------------------------------------------------------------
    | Occurrences Show - Language Lines (en)
    |--------------------------------------------------------------------------
    */
    'show-title'                =>  'Occurrence Details',

    //Occurrence Details
    'show-occurrence_title'     =>  'Title',
    'show-description'          =>  'Description',
    'show-user'                 =>  'Sended By',
    'show-created_at'           =>  'Send Date',
    'show-state'                =>  'Resolution State',
    'show-client'               =>  'Company',

    /*
    |--------------------------------------------------------------------------
    | Occurrences Edit - Language Lines (en)
    |--------------------------------------------------------------------------
    */
    'edit-title'                =>  'Edit Occurrence',
    'tip-edit'                  =>  'Form to update an occurrence',

    //Form Edit placeholder
    'text-edit-title'           =>  'Update Occurrence Title',
    'text-edit-description'     =>  'Update Occurrence Description',

    //Toastr - Update Notification Message
    'toastr-update-sucess'      =>  'Occurrence sucessfully updated.',

    /*
    |--------------------------------------------------------------------------
    | Occurrences Auth User - Language Lines (en)
    |--------------------------------------------------------------------------
    */
    'auth-menu' => [
        'card-title'            =>  'Sent Occurrences',
        'registered-not_solved' =>  'Sent Occurrences - not solved',
        'registered-solving'    =>  'Sent Occurrences - getting solved',
        'registered-solved'     =>  'Sent Occurrences - solved',
    ]
];
