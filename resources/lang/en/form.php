<?php

return[
    /*
    |--------------------------------------------------------------------------
    | Form Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the messages for the existing forms
    |
    */
    'generic' => [
        'requiredField' => 'required field',
        'confirmBtn'    => 'Confirm',
        'cancelBtn'     => 'Cancel'
    ],

    /**
     * Users Form
     */
    'user' => [
        //Name
        'name_label'                => 'Name',
        'name_placeholder'          => 'User Full Name',
        //Email
        'email_label'               => 'Email',
        'email_placeholder'         => 'User Email',
        //Phone
        'phone_label'               => 'Phone',
        'phone_placeholder'         => 'User Phone',
        //Role
        'role_label'                => 'User Role',
        'role_placeholder'          => 'User Role',
        //Company
        'company_label'             => 'Company',
        'company_placeholder'       => 'User Company',
        //Department
        'department_label'          => 'Department',
        'department_placeholder'    => 'User Department',
    ],

    /**
     * Companies Form
     */
    'company' => [
        //Name
        'company_name_label' => 'Name',
        'company_name_placeholder' => 'Company Name',
        //Description
        'company_description_label' => 'Description',
        //Sector
        'sector_label' => 'Activity Sector',
        'sector_placeholder' => 'Company Activity Sector',
        //Phone
        'company_phone_label' => 'Phone',
        'company_phone_placeholder' => 'Company Phone',
        //Headquarters
        'headquarters_label' => 'Location',
        'headquarters_placeholder' => 'Company Location',
        //Website
        'website_label' => 'Website',
        'website_placeholder' => 'Company Website',
        //Company Types
        'company_types_id_label' => 'Business relationship with',
        'company_types_id_placeholder' => 'Choose a type of business relationship:',
    ],

    /**
     * Department Form
     */
    'department' => [
        //Name
        'department_name_label' => 'Name',
        'department_name_placeholder' => 'Department Name',
    ],

    /**
     * Company Type Form
     */
    'company_types' => [
        //Name
        'type_name_label' => 'Name',
        'type_name_placeholder' => 'Business relationship name',
        //Description
        'type_description_label' => 'Description',
        'type_description_placeholder' => 'Business relationship description'
    ]
];
