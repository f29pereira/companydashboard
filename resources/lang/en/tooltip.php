<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Tooltip Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the messages for the existing tooltips
    |
    */

    /**
     *
     */
    'goTo' => [
        'home'                  => 'Home',
        'user-menu'             => 'User menu',
        'user-index'            => 'List of registered users',
        'management-menu'       => 'Management Menu',
        'company-menu'          => 'Company Menu',
        'company-index'         => 'List of registered companies',
        'company_types-index'   => 'List of registered business relationships',
        'department-index'      => 'List of registered departments',
        'my-profile'            => 'My Profile'
    ],

    /**
     * Users Tooltips
     */
    'users' => [
        'index'                 => '',
        'show-btn'              => '',
        //Edit User
        'edit-btn'              => '',
        'edit'                  => '',
        //Delete User
        'softDelete-btn'        => '',
        'softDelete'            => '',
        'softDelete-question'   => '',
        //User Profile
        'edit-profile-btn'      => '',
        'edit-profile'          => ''
    ],

    /**
     * User Roles Tooltips
     */
    'roles' => [
        'index'                 => '',
        'administrator'         => '',
        'collaborator'          => ''
    ],

    /**
     * Company Types Tooltips
     */
    'company_types' => [
        'index'                  => 'List of registered business relationships',
        //Add Company Type
        'add-company_type'       => 'Business relationship',
        'add-company_type-title' => 'Add Business relationship',
        'create'                 => 'Form to register a new business relationship',
        //Edit Company Type
        'edit-btn'               => 'Update Business relationship Data',
        'edit'                   => 'Form to update business relationship data',
        //Delete Company Type
        'softDelete-btn'         => 'Delete Business relationship',
        'softDelete'             => 'Companies with the associated business relationship will have an undefined business relationship',
        'softDelete-question'    => 'Do you want to delete the selected business relationship?',
    ],

    /**
     * Company Tooltips
     */
    'companies' => [
        'menu'                  => 'Company Menu',
        'edit-main'             => 'Edit Company',
        'index'                 => 'List of registered companies that have a business relationship with',
        //Add Company
        'add-company'           => 'Company',
        'add-company-title'     => 'Add Company',
        'create'                => 'Form to register a new company',
        //Show Company
        'show-btn'              => 'Company Details',
        //Edit Company
        'edit-btn'              => 'Update Company Data',
        'edit'                  => 'Form to update company data',
        //Delete Company Type
        'softDelete-btn'        => 'Delete Company',
        'softDelete-question'   => 'Do you want to delete the selected company?',
    ],
];
