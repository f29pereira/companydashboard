<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation - Language Lines (pt)
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */
    'accepted'          => '',
    'accepted_if'       => '',
    'active_url'        => '',
    'after'             => '',
    'after_or_equal'    => '',
    'alpha'             => '',
    'alpha_dash'        => '',
    'alpha_num'         => '',
    'array'             => '',
    'before'            => '',
    'before_or_equal'   => '',
    'between' => [
        'numeric'   => '',
        'file'      => '',
        'string'    => '',
        'array'     => '',
    ],
    'boolean'           => '',
    'confirmed'         => '',
    'current_password'  => 'A password está incorreta.',
    'date'              => '',
    'date_equals'       => '',
    'date_format'       => '',
    'declined'          => '',
    'declined_if'       => '',
    'different'         => '',
    'digits'            => '',
    'digits_between'    => '',
    'dimensions'        => '',
    'distinct'          => '',
    'email'             => 'O campo de :attribute deve ser um endereço de email válido.',
    'ends_with'         => '',
    'exists'            => '',
    'file'              => 'O :attribute deve ser um ficheiro.',
    'filled'            => '',
    'gt' => [
        'numeric'   => '',
        'file'      => '',
        'string'    => '',
        'array'     => '',
    ],
    'gte' => [
        'numeric'   => '',
        'file'      => '',
        'string'    => '',
        'array'     => '',
    ],
    'image'             => '',
    'in'                => '',
    'in_array'          => '',
    'integer'           => '',
    'ip'                => '',
    'ipv4'              => '',
    'ipv6'              => '',
    'json'              => '',
    'lt' => [
        'numeric'   => '',
        'file'      => '',
        'string'    => '',
        'array'     => '',
    ],
    'lte' => [
        'numeric'   => '',
        'file'      => '',
        'string'    => '',
        'array'     => '',
    ],
    'max' => [
        'numeric'   => '',
        'file'      => '',
        'string'    => 'O :attribute não deve ser maior que :max caracteres.',
        'array'     => '',
    ],
    'mimes'             => 'O :attribute deve ser um ficheiro do tipo: :values.',
    'mimetypes'         => 'O :attribute deve ser um ficheiro do tipo: :values.',
    'min' => [
        'numeric'   => '',
        'file'      => '',
        'string'    => 'O :attribute deve ser pelo menos :min caracteres.',
        'array'     => '',
    ],
    'multiple_of'       => '',
    'not_in'            => '',
    'not_regex'         => '',
    'numeric'           => '',
    'password'          => 'A password está incorreta.',
    'present'           => '',
    'prohibited'        => '',
    'prohibited_if'     => '',
    'prohibited_unless' => '',
    'prohibits'         => '',
    'regex'             => '',
    'required'          => 'O campo :attribute é obrigatório.',
    'required_if'       => '',
    'required_unless'   => '',
    'required_with'     => '',
    'required_with_all' => '',
    'required_without'  => '',
    'required_without_all' => '',
    'same'              => '',
    'size' => [
        'numeric'   => '',
        'file'      => '',
        'string'    => '',
        'array'     => '',
    ],
    'starts_with'       => '',
    'string'            => 'O :attribute deve ser uma string.',
    'timezone'          => '',
    'unique'            => 'O :attribute já se econtra atribuído.',
    'uploaded'          => '',
    'url'               => 'O :attribute tem que ser uma URL válida.',
    'uuid'              => '',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation - Language Lines (pt)
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */
    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
        //Company Types
        'type_name'=>[
            'unique'    => 'Este nome de r.negócio já está a ser utilizado.'
        ],
        //Department
        'department_name' => [
            'unique'    => 'Este nome de departamento já está a ser utilizado.'
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes (pt)
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */
    'attributes' => [
        //Users
        'first_name'            => 'nome',
        'last_name'             => 'sobrenome',
        'phone'                 => 'telefone',
        'profession'            => 'cargo',
        'department_id'         => 'departamento',
        //Company
        'company_name'          => 'nome',
        'sector'                => 'setor de atividade',
        'company_phone'         => 'telefone',
        'headquarters'          => 'sede',
        'company_types_id'      => 'r.negócio',
        'company_description'   => 'descrição',
        //Company Types
        'type_name'             => 'nome',
        'type_description'      => 'descrição',
        //Department
        'department_name'       => 'nome do departamento',
        //Occurrences
        'oc_title'              => 'título',
        'oc_description'        => 'descrição',
    ],
];
