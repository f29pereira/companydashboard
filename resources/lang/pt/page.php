<?php

return  [
    /*
    |--------------------------------------------------------------------------
    | Generic - Language Lines (pt)
    |--------------------------------------------------------------------------
    |
    */
    'generic' => [
        'language'                  => 'Idioma',
        'moreInfo'                  => 'Mais informações',
        /**
         * Form Buttons
         */
        'confirmBtn'                => 'Confirmar',
        'cancelBtn'                 => 'Cancelar',
        //Required form fields
        'tip-required'              => 'campo obrigatório',
        /**
         * Toastr notifications messages
         */
        'toastr-create-success'     => '- registado com sucesso.',
        'toastr-update-success'     => '- dados atualizados com sucesso.',
        'toastr-delete-success'     => '- eliminado com sucesso.',
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
    | Page titles - Language Lines (pt)
    |--------------------------------------------------------------------------
    |
    */
    'titles' => [
        //User Menu
        'users-menu'            => 'Dashboard - Menu Utilizador',
        //Users
        'users-index'           => 'Dashboard - Lista Utilizadores',
        'users-show'            => 'Dashboard - Detalhes Utilizador',
        'users-edit'            => 'Dashboard - Editar Utilizador',
        //Users
        'user_profile-index'    => 'Dashboard - Meu Perfil',
        'user_profile-edit'     => 'Dashboard - Editar Meu Perfil',
        'user_profile_pic-edit' => 'Dashboard - Editar Foto Perfil',
        //Roles
        'roles-index'           => 'Dashboard - Lista Roles Utilizador',
        //Management
        'management-menu'       => 'Dashboard - Menu Gestão',
        //Company Menu
        'company-menu'          => 'Dashboard - Menu Empresas',
        'companies-edit-main'   => 'Dashboard - Editar Empresa',
        //Companies
        'companies-index'       => 'Dashboard - Lista Empresas',
        'companies-create'      => 'Dashboard - Registar Empresa',
        'companies-show'        => 'Dashboard - Detalhes Empresa',
        'companies-edit'        => 'Dashboard - Editar Empresa',
        //Company Types
        'company_types-index'   => 'Dashboard - Lista R.Negócio',
        'company_types-create'  => 'Dashboard - Registar R.Negócio',
        'company_types-edit'    => 'Dashboard - Editar R.Negócio',
        //Departments
        'departments-index'     => 'Dashboard - Lista Departamentos',
        'departments-create'    => 'Dashboard - Registar Departamento',
        'departments-edit'      => 'Dashboard - Editar Departamento',
        'user-department-index' => 'Dashboard - Meu Departamento',
        //Nonconformities/Occurrences Menu
        'ncs_occurrences-menu'  => 'Dashboard - NCs/Ocorrências Menu',
        //Occurrences
        'occurrences-index'     => 'Dashboard - Lista de Ocorrências',
        'occurrences-create'    => 'Dashboard - Enviar Ocorrência',
        'occurrences-show'      => 'Dashboard - Detalhes Ocorrência',
        'occurrences-edit'      => 'Dashboard - Editar Ocorrência',
        //Occurrences - Auth
        'auth-oc-menu'      => 'Dashboard - Minhas Ocorrências',
        'auth-oc-index'         => 'Dashboard - Lista de Ocorrências',
        //Nonconformities
        'ncs-index'             => 'Dashboard - Lista Não Conformidades',
        'ncs-create'            => 'Dashboard - Registar NC',
        'ncs-show'              => 'Dashboard - Detalhes NC',
        'ncs-edit'              => 'Dashboard - Editar NC',
    ],
    /*
    |--------------------------------------------------------------------------
    | Links to Pages - Language Lines (pt)
    |--------------------------------------------------------------------------
    |
    */
    'link' => [
        //Home
        'home'                  => 'Voltar para: Home',
        //Users
        'users-menu'            => 'Voltar para: Menu Utilizador',
        'user-index'            => 'Voltar para: Lista Utilizadores',
        //Auth User Profile
        'my-profile'            => 'Voltar para: Meu Perfil',
        //Management Menu
        'management-menu'       => 'Voltar para: Menu Gestão',
        //Company
        'company-menu'          => 'Voltar para: Menu Empresas',
        'company-index'         => 'Voltar para: Lista Empresas',
        //Company Types
        'company_types-index'   => 'Voltar para: Lista Relações de Negócio',
        //Department
        'department-index'      => 'Voltar para: Lista Departamentos',
        //Nonconformities and Occurrences Menu
        'ncs-occurrences-menu'  => 'Voltar para: Menu NCs/Ocorrências',
        //Auth - Occurrences Menu
        'auth-occurrence-menu'  =>  'Voltar para: Minhas Ocorrências',
        //Occurrences
        'occurrence-index'      => 'Voltar para: Lista Ocorrências',
    ],
    /*
    |--------------------------------------------------------------------------
    | Home - Language Lines (pt)
    |--------------------------------------------------------------------------
    |
    */
    'home' => [
        'card-title'        => 'Home',
        'welcome-msg'       => 'Seja bem vindo,',
    ],
    /*
    |--------------------------------------------------------------------------
    | User Menu - Language Lines (pt)
    |--------------------------------------------------------------------------
    |
    */
    'users-menu' => [
        'card-title'        => 'Menu de Utilizadores',
        'registered-users'  => 'Utilizadores registados',
        'registered-roles'  => 'Roles Utilizador',
    ],
    /*
    |--------------------------------------------------------------------------
    | User Roles - Language Lines (pt)
    |--------------------------------------------------------------------------
    |
    */
    'roles' => [
        /**
         * User Roles card title
         */
        'index-title'       => 'Roles de Utilizador',
        /**
         * User Roles Table
         */
        'th-action'         => 'Ação Utilizador',
        'th-admin'          => 'Administrator',
        'th-collaborator'   => 'Colaborador',
        /**
         * User Roles Tooltip - Roles Table Page
         */
        'tip-index'         => 'Lista de ações do utilizador/permissões roles de utilizador',
        /**
         * User Roles Actions
         */
        //Users (Consult/Edit/Delete)
        'action-users'          => 'Utilizadores',
        //Companies (CRUD)
        'action-companies'      => 'Empresas',
        //Companies (Create/Edit/Delete)
        'action-company_types'  => 'Relações de Negócio',
        //Departments (Create/Edit/Delete)
        'action-departments'    => 'Departamentos',
        //Profile (Show/Edit)
        'action-profile'        => 'Dados do meu perfil',
    ],
    /*
    |--------------------------------------------------------------------------
    | Management Menu - Language Lines (pt)
    |--------------------------------------------------------------------------
    |
    */
    'management-menu' => [
        'index-title'               => 'Menu de Gestão',
        'registered-companies'      => 'Empresas registadas',
        'registered-departments'    => 'Departamentos registados',
        'registered-occurrences'    => 'Ocorrências registadas',
    ],
    /*
    |--------------------------------------------------------------------------
    | Company Menu - Language Lines (pt)
    |-------------------------------------------------------------------------
    |
    */
    'company-menu' => [
        'index-title'               => 'Menu de Empresas',
        'registered-companies'      => 'Empresas registadas',
        'registered-company_types'  => 'Relações de Negócio registadas',
        /**
         * Tooltip - Company Menu Page
         */
        'tip-index'                 => 'Menu Empresas',
    ],
    /*
    |--------------------------------------------------------------------------
    | Companies - Language Lines (pt)
    |--------------------------------------------------------------------------
    |
    */
    'companies' => [
        /**
         * Company Cards Title
         */
        'index-title'               => 'Empresas',
        'create-title'              => 'Registar empresa',
        'show-title'                => 'Detalhes empresa',
        'edit-title'                => 'Editar dados empresa',
        'delete-title'              => 'Eliminar empresa',
        /**
         * Tooltip - Company Table Page
         */
        'tip-index'                 => 'Lista de empresas registadas com r.negócio com',
        /**
         * Add Company Button
         */
        'add-title'                 => 'Empresa',
        'tip-add'                   => 'Registar empresa',
        /**
         * Company Table Header/Footer
         */
        'th-name'                   => 'Nome',
        'th-type'                   => 'R.Negócio com',
        'th-sector'                 => 'Sector de atividade',
        'th-website'                => 'Website',
        'th-management'             => 'Gestão - Empresa',
        /**
         * Tooltip - Management Company Buttons
         */
        'tip-show-btn'              => 'Mostrar Detalhes - Empresa',
        'tip-edit-btn'              => 'Atualizar dados - Empresa',
        'tip-delete-btn'            => 'Eliminar - Empresa',
        /**
         * Tooltip - Company Create Page
         */
        'tip-create'                => 'Formulário para registar uma nova Empresa',
        /**
         * Tooltip - Company Edit Page
         */
        'tip-edit'                  => 'Formulário para atualizar dados Empresa',
        /**
         * Tooltip - Department Delete Modal
         */
        'tip-delete'                => 'A empresa selecionada vai ser eliminada',
        /**
         * Company Form Label/Placeholder
         */
        //label
        'label-name'                => 'Nome',
        'label-description'         => 'Descrição',
        'label-sector'              => 'Sector de Atividade',
        'label-phone'               => 'Telefone',
        'label-headquarters'        => 'Sede',
        'label-website'             => 'Website',
        'label-type'                => 'R.Negócio com',
        //placeholder create
        'text-create-name'          => 'Inserir nome da empresa',
        'text-create-description'   => 'Inserir descrição da empresa',
        'text-create-sector'        => 'Inserir sector de atividade da empresa',
        'text-create-phone'         => 'Inserir telefone da empresa',
        'text-create-headquarters'  => 'Inserir sede da empresa',
        'text-create-website'       => 'Inserir website da empresa',
        'text-create-type'          => 'Escolher Relação de Negócio:',
        //placeholder update
        'text-update-name'          => 'Atualizar nome da empresa',
        'text-update-description'   => 'Atualizar descrição da empresa',
        'text-update-sector'        => 'Atualizar sector de atividade da empresa',
        'text-update-phone'         => 'Atualizar telefone da empresa',
        'text-update-headquarters'  => 'Atualizar sede da empresa',
        'text-update-website'       => 'Atualizar website da empresa',
        /**
         * Notifications Message
         */
        'toastr-title'              => 'Empresa:'
    ],
    /*
    |--------------------------------------------------------------------------
    | Company Types - Language Lines (pt)
    |--------------------------------------------------------------------------
    |
    */
    'company-types' => [
        /**
         * Company Types Cards Title
         */
        'index-title'               => 'Relações de Negócio',
        'create-title'              => 'Registar Relação de Negócio',
        'edit-title'                => 'Editar dados Relação de Negócio',
        'delete-title'              => 'Eliminar Relação de Negócio',
        /**
         * Tooltip - Company Types Table Page
         */
        'tip-index'                 => 'Lista de Relações de Negócio registadas',
        /**
         * Add Company Type Button
         */
        'add-title'                 => 'R.Negócio',
        'tip-add'                   => 'Registar Relação de Negócio',
        /**
         * Company Types Table Header/Footer
         */
        'th-name'                   => 'Nome',
        'th-description'            => 'Descrição',
        'th-management'             => 'Gestão - R.Negócio',
        /**
         * Tooltip - Management Company Types Buttons
         */
        'tip-edit-btn'              => 'Atualizar dados - R.Negócio',
        'tip-delete-btn'            => 'Eliminar - R.Negócio',
        /**
         * Tooltip - Company Type Create Page
         */
        'tip-create'                => 'Formulário para registar - relação de negócio',
        /**
         * Tooltip - Company Type Edit Page
         */
        'tip-edit'                  => 'Formulário para atualizar dados - relação de negócio',
        /**
         * Tooltip - Department Delete Modal
         */
        'tip-delete'                => 'Empresas com esta r.negócio (a ser eliminada) terão uma r.negócio indefinida',
        /**
         * Company Type Form Label/Placeholder
         */
        //label
        'label-name'                => 'Nome',
        'label-description'         => 'Descrição',
        //placeholder create
        'text-create-name'          => 'Inserir nome da r.negócio',
        'text-create-description'   => 'Inserir descrição da r.negócio',
        //placeholder update
        'text-update-name'          => 'Atualizar nome da r.negócio',
        'text-update-description'   => 'Atualizar descrição da r.negócio',
        /**
         * Notifications Message
         */
        'toastr-title'              => 'Relação de Negócio:',
    ],
    /*
    |--------------------------------------------------------------------------
    | Departments - Language Lines (pt)
    |--------------------------------------------------------------------------
    |
    */
    'departments' => [
        /**
         * Departments Cards Title
         */
        'index-title'       => 'Departamentos',
        'create-title'      => 'Registar Departamento',
        'edit-title'        => 'Editar dados Departamento',
        'delete-title'      => 'Eliminar Departamento',
        /**
         * Tooltip - Departments Table Page
         */
        'tip-index'         => 'Lista de Departamentos registados',
        /**
         * Add Department Button
         */
        'add-title'         => 'Departamento',
        'tip-add'           => 'Registar Departamento',
        /**
         * Departments Table Header/Footer
         */
        'th-name'           => 'Nome',
        'th-management'     => 'Gestão - Departamento',
        /**
         * Tooltip - Management Department Buttons
         */
        'tip-edit-btn'      => 'Atualizar dados - Departamento',
        'tip-delete-btn'    => 'Eliminar - Departamento',
        /**
         * Tooltip - Department Create Page
         */
        'tip-create'        => 'Formulário para registar - Departamento',
        /**
         * Tooltip - Department Edit Page
         */
        'tip-edit'          => 'Formulário para atualizar dados - Departamento',
        /**
         * Tooltip - Department Delete Modal
         */
        'tip-delete'        => 'Utilizadores com este departamento (a ser eliminado) terão uma departamento indefinido',
        /**
         * Department Form Label/Placeholder
         */
        //label
        'label-name'        => 'Nome',
        //placeholder
        'text-create-name'  => 'Inserir nome do departamento',
        'text-update-name'  => 'Atualizar nome do departamento',
        /**
         * Notifications Message
         */
        'toastr-title'      => 'Departamento:'
    ]

];
