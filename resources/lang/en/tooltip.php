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
        'index'                 => 'List of registered users',
        'show-btn'              => 'User Details',
        //Edit User
        'edit-btn'              => 'Update User Data',
        'edit'                  => 'Form to update user data',
        //Delete User
        'softDelete-btn'        => 'Delete User',
        'softDelete'            => 'The selected user will be deleted',
        'softDelete-question'   => 'Do you want to delete the selected user?',
        //User Profile
        'edit-profile-btn'      => 'Update my profile',
        'edit-profile'          => 'Form to update my profile data'
    ],

    /**
     * User Roles Tooltips
     */
    'roles' => [
        'index'                 => 'Types of user roles and associated permissions',
        'administrator'         => 'Administrator user role',
        'collaborator'          => 'Collaborator user role'
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

    /**
     * Department Tooltips
     */
    'departments' => [
        'index'                 => 'List of registered departments of company',
        //Add Department
        'add-department'        => 'Department',
        'add-department-title'  => 'Add Department',
        'create'                => 'Form to register a new department',
        //Edit Department
        'edit-btn'              => 'Update Department Data',
        'edit'                  => 'Form to update department data',
        //Delete Department
        'softDelete-btn'        => 'Delete Department',
        'softDelete'            => 'Users associated with the selected department will have an undefined department',
        'softDelete-question'   => 'Do you want to delete the selected department ?',
    ]
];
