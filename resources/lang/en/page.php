<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Generic Language Lines
    |--------------------------------------------------------------------------
    |
    */
    'generic' => [
        'moreInfo'                  => 'More info',
        /**
         * Form Buttons
         */
        'confirmBtn'                => 'Confirm',
        'cancelBtn'                 => 'Cancel',
        //Required form fields
        'tip-required'              => 'required field',
        /**
         * Toastr notifications messages
         */
        'toastr-create-success'     => 'created successfully.',
        'toastr-update-success'     => 'updated successfully.',
        'toastr-delete-success'     => 'deleted successfully.',
        /**
         * User actions
         */
        'action-crud'               => 'CRUD',
        'action-show-update-delete' => 'Consult/Edit/Delete',
        'action-create-edit-delete' => 'Create/Edit/Delete',
        'action-show-edit'          => 'Consult/Edit',
    ],
    /*
    |--------------------------------------------------------------------------
    | Links Language Lines
    |--------------------------------------------------------------------------
    |
    */
    'link' => [
        'home'                  => 'Return to: Home',
        'users-menu'             => 'Return to: User Menu',
        'user-index'            => 'Return to: List of users',
        'management-menu'       => 'Return to: Management Menu',
        'company-menu'          => 'Return to: Company Menu',
        'company-index'         => 'Return to: List of companies',
        'company_types-index'   => 'Return to: List of business relationships',
        'department-index'      => 'Return to: List of departments',
        'my-profile'            => 'Return to: My Profile',
    ],
    /*
    |--------------------------------------------------------------------------
    | User Menu Language Lines
    |--------------------------------------------------------------------------
    |
    */
    'users-menu' => [
        'card-title'        => 'Users',
        'registered-users'  => 'Registered Users',
        'registered-roles'  => 'User Roles',
    ],
    /*
    |--------------------------------------------------------------------------
    | Users Language Lines
    |--------------------------------------------------------------------------
    */
    'users' => [
        /**
         * Users Cards Title
         */
        'index-title'       => 'Users',
        'show-title'        => 'User Details',
        'edit-title'        => 'Edit User data',
        'delete-title'      => 'Delete User',
        /**
         * Users Table
         */
        'th-name'           => 'Name',
        'th-email'          => 'Email',
        'th-phone'          => 'Phone',
        'th-department'     => 'Department',
        'th-management'     => 'User management',
        /**
         * Tooltip - User Table Page
         */
        'tip-index'         => 'List of registered users',
        /**
         * Tooltip - Management User Buttons
         */
        'tip-show-btn'      => 'Show User Details',
        'tip-edit-btn'      => 'Update User Data',
        'tip-delete-btn'    => 'Delete User',
        /**
         * User Tooltip - User Edit Page
         */
        'tip-edit'         => 'Form to update user profile data',
        /**
         * Users Form Label
         */
        'label-name'        => 'Name',
        'label-email'       => 'Email',
        'label-phone'       => 'Phone',
        'label-role'        => 'User Role',
        'label-company'     => 'Company',
        'label-department'  => 'Department',
        /**
         * Users Update Form Placeholder
         */
        'text-name'         => 'Update User full name',
        'text-email'        => 'Update User email',
        'text-phone'        => 'Update User phone',
        'text-role'         => 'Update User role',
        'text-company'      => 'Update User company',
        'text-department'   => 'Update User department',
        /**
         * User Tooltip - Update User
         */
        'tip-edit'          => 'Form to update user data',
        /**
         * User Profile Cards Title
         */
        'index-profile-title'   => 'My Profile',
        'edit-profile-title'    => 'Update my profile',
        /**
         * User Tooltip - Update My Profile
         */
        'tip-edit-profile-btn'  => 'Update my profile data',
        'tip-edit-profile'      => 'Form to update my profile data',
    ],
    /*
    |--------------------------------------------------------------------------
    | User Roles Language Lines
    |--------------------------------------------------------------------------
    |
    */
    'roles' => [
        /**
         * User Roles card title
         */
        'index-title'       => 'User Roles',
        /**
         * User Roles Table
         */
        'th-action'         => 'User Action',
        'th-admin'          => 'Administrator',
        'th-collaborator'   => 'Collaborator',
        /**
         * User Roles Tooltip - Roles Table Page
         */
        'tip-index'         => 'List of actions and user role permissions',
        /**
         * User Roles Actions
         */
        //Users (Consult/Edit/Delete)
        'action-users'          => 'users',
        //Companies (CRUD)
        'action-companies'      => 'companies',
        //Companies (Create/Edit/Delete)
        'action-company_types'  => 'business relationships',
        //Departments (Create/Edit/Delete)
        'action-departments'    => 'departments',
        //Profile (Show/Edit)
        'action-profile'        => 'my profile data',
    ],
    /*
    |--------------------------------------------------------------------------
    | Management Menu Language Lines
    |--------------------------------------------------------------------------
    |
    */
    'management-menu' => [
        'index-title'               => 'Management',
        'registered-companies'      => 'Registered Companies',
        'registered-departments'    => 'Registered Departments',
    ],
    /*
    |--------------------------------------------------------------------------
    | Management Menu Language Lines
    |--------------------------------------------------------------------------
    |
    */
    /*
    |--------------------------------------------------------------------------
    | Companies Language Lines
    |--------------------------------------------------------------------------
    |
    */
    /*
    |--------------------------------------------------------------------------
    | Company Types Language Lines
    |--------------------------------------------------------------------------
    |
    */
    'company-types' => [
        /**
         * Company Types Cards Title
         */
        'index-title'       => 'Business Relationships',
        'create-title'      => 'Register Business Relationship',
        'edit-title'        => 'Edit Business Relationship data',
        'delete-title'      => 'Delete Business Relationship',
        /**
         * Tooltip - Company Types Table Page
         */
        'tip-index'         => 'List of registered business relationships',
        /**
         * Add Company Type Button
         */
        'add-title'         => 'Business Relationship',
        'tip-add'           => 'Register business relationship',
        /**
         * Company Types Table Header/Footer
         */
        'th-name'           => 'Name',
        'th-description'    => 'Description',
        'th-management'     => 'B.Relationship management',
        /**
         * Tooltip - Management Company Types Buttons
         */
        'tip-edit-btn'      => 'Update Business Relationship Data',
        'tip-delete-btn'    => 'Delete Business Relationship',
        /**
         * Tooltip - Company Type Create Page
         */
        'tip-create'        => 'Form to create business relationship',
        /**
         * Tooltip - Company Type Edit Page
         */
        'tip-edit'          => 'Form to update business relationship',
        /**
         * Tooltip - Department Delete Modal
         */
        'tip-delete'        => 'Companies with this business relationship (to be deleted) will have an undefined business relationship',
        /**
         * Company Type Form Label/Placeholder
         */
        //label
        'label-name'        => 'Name',
        'label-description' => 'Description',
        //placeholder create
        'text-create-name'         => 'Insert Business Relationship name',
        'text-create-description'  => 'Insert Business Relationship description',
        //placeholder update
        'text-update-name'          => 'Update Business Relationship name',
        'text-update-description'   => 'Update Business Relationship description',
        /**
         * Notifications Message Success
         */
        'toastr-title' => 'Business relationship:'
    ],
    /*
    |--------------------------------------------------------------------------
    | Departments Language Lines
    |--------------------------------------------------------------------------
    |
    */
    'departments' => [
        /**
         * Departments Cards Title
         */
        'index-title'       => 'Departments',
        'create-title'      => 'Register Department',
        'edit-title'        => 'Edit Department data',
        'delete-title'      => 'Delete Department',
        /**
         * Tooltip - Departments Table Page
         */
        'tip-index'         => 'List of registered departments',
        /**
         * Add Department Button
         */
        'add-title'         => 'Department',
        'tip-add'           => 'Register department',
        /**
         * Departments Table Header/Footer
         */
        'th-name'           => 'Name',
        'th-management'     => 'Department management',
        /**
         * Tooltip - Management Department Buttons
         */
        'tip-edit-btn'      => 'Update Department Data',
        'tip-delete-btn'    => 'Delete Department',
        /**
         * Tooltip - Department Create Page
         */
        'tip-create'         => 'Form to create department',
        /**
         * Tooltip - Department Edit Page
         */
        'tip-edit'         => 'Form to update department name',
        /**
         * Tooltip - Department Delete Modal
         */
        'tip-delete'        => 'Users of this department (to be deleted) will have an undefined department',
        /**
         * Department Form Label/Placeholder
         */
        //label
        'label-name'        => 'Name',
        //placeholder
        'text-create-name'         => 'Department name',
        'text-update-name'         => 'Update Department name',
        /**
         * Notifications Message Success
         */
        'toastr-title' => 'Department:'
    ]
];