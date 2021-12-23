<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Generic - Language Lines (en)
    |--------------------------------------------------------------------------
    |
    */
    'generic' => [
        'language'                  => 'Language',
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
        'toastr-create-success'     => '- created successfully.',
        'toastr-update-success'     => '- data updated successfully.',
        'toastr-delete-success'     => '- deleted successfully.',
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
    | Page titles - Language Lines (en)
    |--------------------------------------------------------------------------
    |
    */
    'titles' => [
        //Home
        'home'                  => 'Dashboard - Home',
        //User Menu
        'users-menu'            => 'Dashboard - User Menu',
        //Users
        'users-index'           => 'Dashboard - User List',
        'users-show'            => 'Dashboard - User Details',
        'users-edit'            => 'Dashboard - Edit User',
        //Users
        'user_profile-index'    => 'Dashboard - My Profile',
        'user_profile-edit'     => 'Dashboard - Edit My Profile',
        'user_profile_pic-edit' => 'Dashboard - Edit Profile Picture',
        //Roles
        'roles-index'           => 'Dashboard - User roles List',
        //Management
        'management-menu'       => 'Dashboard - Management Menu',
        //Company Menu
        'company-menu'          => 'Dashboard - Company Menu',
        'companies-edit-main'   => 'Dashboard - Edit Company',
        //Companies
        'companies-index'       => 'Dashboard - Company List',
        'companies-create'      => 'Dashboard - Register Company',
        'companies-show'        => 'Dashboard - Company Details',
        'companies-edit'        => 'Dashboard - Edit Company',
        //Company Types
        'company_types-index'   => 'Dashboard - B.Relationship List',
        'company_types-create'  => 'Dashboard - Register B.R',
        'company_types-edit'    => 'Dashboard - Edit B.R',
        //Departments
        'departments-index'     => 'Dashboard - Department List',
        'departments-create'    => 'Dashboard - Register Department',
        'departments-edit'      => 'Dashboard - Edit Department',
    ],
    /*
    |--------------------------------------------------------------------------
    | Links to Pages - Language Lines (en)
    |--------------------------------------------------------------------------
    |
    */
    'link' => [
        'home'                  => 'Return to: Home',
        'users-menu'            => 'Return to: User Menu',
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
    | User Menu - Language Lines (en)
    |--------------------------------------------------------------------------
    |
    */
    'users-menu' => [
        'card-title'        => 'Users Menu',
        'registered-users'  => 'Registered Users',
        'registered-roles'  => 'User Roles',
    ],
    /*
    |--------------------------------------------------------------------------
    | Users - Language Lines (en)
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
         * Tooltip - User Delete Modal
         */
        'tip-delete'        => 'The selected user will be deleted',
        /**
         * Users Form Label
         */
        'label-name'        => 'Name',
        'label-first_name'  => 'Name',
        'label-last_name'   => 'Surname',
        'label-email'       => 'Email',
        'label-phone'       => 'Phone',
        'label-profession'  => 'Profession',
        'label-photo'       => 'User Photo',
        'label-role'        => 'User Role',
        'label-company'     => 'Company',
        'label-department'  => 'Department',
        /**
         * Users Update Form Placeholder
         */
        'text-first_name'   => 'Update user name',
        'text-last_name'    => 'Update user surname',
        'text-email'        => 'Update user email',
        'text-phone'        => 'Update user email',
        'text-profession'   => 'Update user profession',
        'text-role'         => 'Update user role',
        'text-company'      => 'Update user company',
        'text-department'   => 'Select department:',
        /**
         * User Tooltip - Update User
         */
        'tip-edit'              => 'Form to update user data',
        /**
         * User Profile Cards Title
         */
        'index-profile-title'   => 'My Profile',
        'edit-profile-pic'      => 'Update my photo',
        'edit-profile-title'    => 'Update my profile',
        //Default User Profile Picture Alt
        'alt-picture-default'   => 'Default User profile photo',
        //User Profile Picture Alt
        'alt-picture'           => 'User profile picture',
        /**
         * User Tooltip - Update My Profile
         */
        'tip-edit-profile-btn'      => 'Update my profile data',
        'tip-edit-profile_pic-btn'  => 'Update my profile photo',
        'tip-edit-profile'          => 'Form to update my profile data',
        'tip-edit-profile_pic'      => 'Form to update my profile photo',
        /**
         * Notifications Message
         */
        'toastr-title'          => 'User:',
        'toastr-user-img'       => 'User photo sucessfully updated.'

    ],
    /*
    |--------------------------------------------------------------------------
    | User Roles - Language Lines (en)
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
        'tip-index'         => 'List of actions/user role permissions',
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
    | Management Menu - Language Lines (en)
    |--------------------------------------------------------------------------
    |
    */
    'management-menu' => [
        'index-title'               => 'Management Menu',
        'registered-companies'      => 'Registered Companies',
        'registered-departments'    => 'Registered Departments',
    ],
    /*
    |--------------------------------------------------------------------------
    | Company Menu - Language Lines (en)
    |-------------------------------------------------------------------------
    |
    */
    'company-menu' => [
        'index-title'               => 'Companies Menu',
        'registered-companies'      => 'Registered Companies',
        'registered-company_types'  => 'Registered Business Relationships',
        /**
         * Tooltip - Company Menu Page
         */
        'tip-index'                 => 'Company Menu',
    ],
    /*
    |--------------------------------------------------------------------------
    | Companies - Language Lines (en)
    |--------------------------------------------------------------------------
    |
    */
    'companies' => [
        /**
         * Company Cards Title
         */
        'index-title'       => 'Companies',
        'create-title'      => 'Register Company',
        'show-title'        => 'Company Details',
        'edit-title'        => 'Edit Company data',
        'delete-title'      => 'Delete Company',
        /**
         * Tooltip - Company Table Page
         */
        'tip-index'         => 'List of registered companies with business relationship with',
        /**
         * Add Company Button
         */
        'add-title'         => 'Company',
        'tip-add'           => 'Register company',
        /**
         * Company Table Header/Footer
         */
        'th-name'           => 'Name',
        'th-type'           => 'B.Relationship with',
        'th-sector'         => 'Activity Sector',
        'th-website'        => 'Website',
        'th-management'     => 'Company management',
        /**
         * Tooltip - Management Company Buttons
         */
        'tip-show-btn'      => 'Show Company Details',
        'tip-edit-btn'      => 'Update Company Data',
        'tip-delete-btn'    => 'Delete Company',
        /**
         * Tooltip - Company Create Page
         */
        'tip-create'        => 'Form to register a new company',
        /**
         * Tooltip - Company Edit Page
         */
        'tip-edit'          => 'Form to update company data',
        /**
         * Tooltip - Department Delete Modal
         */
        'tip-delete'        => 'The selected company will be deleted',
        /**
         * Company Form Label/Placeholder
         */
        //label
        'label-name'                => 'Name',
        'label-description'         => 'Description',
        'label-sector'              => 'Activity Sector',
        'label-phone'               => 'Phone',
        'label-headquarters'        => 'Headquarters',
        'label-website'             => 'Website',
        'label-type'                => 'Business Relationship with',
        //placeholder create
        'text-create-name'          => 'Insert Company name',
        'text-create-description'   => 'Insert Company description',
        'text-create-sector'        => 'Insert Company activity sector',
        'text-create-phone'         => 'Insert Company Phone',
        'text-create-headquarters'  => 'Insert Company Headquaerters',
        'text-create-website'       => 'Insert Company Website',
        'text-create-type'          => 'Select Business Relationship:',
        //placeholder update
        'text-update-name'          => 'Update Company name',
        'text-update-description'   => 'Update Company description',
        'text-update-sector'        => 'Update Company activity sector',
        'text-update-phone'         => 'Update Company phone',
        'text-update-headquarters'  => 'Update Company headquarters',
        'text-update-website'       => 'Update Company website',
        /**
         * Notifications Message
         */
        'toastr-title' => 'Company:'
    ],
    /*
    |--------------------------------------------------------------------------
    | Company Types - Language Lines (en)
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
        'tip-create'        => 'Form to register a new business relationship',
        /**
         * Tooltip - Company Type Edit Page
         */
        'tip-edit'          => 'Form to update business relationship data',
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
         * Notifications Message
         */
        'toastr-title' => 'Business relationship:'
    ],
    /*
    |--------------------------------------------------------------------------
    | Departments - Language Lines (en)
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
        'tip-create'         => 'Form to register a new department',
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
         * Notifications Message
         */
        'toastr-title' => 'Department:'
    ]
];
