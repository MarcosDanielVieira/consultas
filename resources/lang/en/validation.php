<?php

return [

    /*
    |------------------------------------------------- -------------------------
    | Linhas de idioma de validação
    |------------------------------------------------- -------------------------
    |
    | As seguintes linhas de idioma contêm as mensagens de erro padrão usadas por
    | a classe validadora. Algumas dessas regras têm várias versões, como
    | como as regras de tamanho. Sinta-se à vontade para ajustar cada uma dessas mensagens aqui.
    |
    */

    'accepted'          => 'O :attribute deve ser aceito.',
    'active_url'        => 'O :attribute não é um URL válido.',
    'after'             => 'O :attribute deve ser uma data posterior a :date.',
    'after_or_equal'    => 'O :attribute deve ser uma data posterior ou igual a :date.',
    'alpha'             => 'O :attribute só pode conter letras.',
    'alpha_dash'        => 'O :attribute só pode conter letras, números, hífens e sublinhados.',
    'alpha_num'         => 'O :attribute só pode conter letras e números.',
    'array'             => 'O :attribute deve ser um array.',
    'before'            => 'O :attribute deve ser uma data anterior a :date.',
    'before_or_equal'   => 'O :attribute deve ser uma data anterior ou igual a :date.',
    'between'           => [
        'numeric'       => 'O :attribute deve estar entre :min e :max.',
        'file'          => 'O :attribute deve estar entre :min e :max kilobytes.',
        'string'        => 'O :attribute deve estar entre :min e :max caracteres.',
        'array'         => 'O :attribute deve ter entre :min e :max itens.',
    ],
    'boolean'           => 'O :attribute deve ser verdadeiro ou falso.',
    'confirmed'         => 'A confirmação :attribute não corresponde.',
    'date'              => 'O :attribute não é uma data válida.',
    'date_equals'       => 'O :attribute deve ser uma data igual a :date.',
    'date_format'       => 'O :attribute não corresponde ao formato :format.',
    'different'         => 'O :attribute and :other must be different.',
    'digits'            => 'O :attribute must be :digits digits.',
    'digits_between'    => 'O :attribute deve estar entre :min e :max digits.',
    'dimensions'        => 'O :attribute has invalid image dimensions.',
    'distinct'          => 'O campo :attribute tem um valor duplicado.',
    'email'             => 'O :attribute deve ser um endereço de e-mail válido.',
    'ends_with'         => 'O :attribute must end with one of the following: :values.',
    'exists'            => 'O :attribute selecionado é inválido.',
    'file'              => 'O :attribute must be a file.',
    'filled'            => 'O :attribute field must have a value.',
    'gt'                => [
        'numeric'       => 'O :attribute must be greater than :value.',
        'file'          => 'O :attribute must be greater than :value kilobytes.',
        'string'        => 'O :attribute must be greater than :value caracteres.',
        'array'         => 'O :attribute must have more than :value items.',
    ],
    'gte'               => [
        'numeric'       => 'O :attribute must be greater than or equal :value.',
        'file'          => 'O :attribute must be greater than or equal :value kilobytes.',
        'string'        => 'O :attribute must be greater than or equal :value caracteres.',
        'array'         => 'O :attribute must have :value items or more.',
    ],
    'image'             => 'O :attribute must be an image.',
    'in'                => 'The selected :attribute is invalid.',
    'in_array'          => 'O :attribute field does not exist in :other.',
    'integer'           => 'O :attribute deve ser um número inteiro.',
    'ip'                => 'O :attribute must be a valid IP address.',
    'ipv4'              => 'O :attribute must be a valid IPv4 address.',
    'ipv6'              => 'O :attribute must be a valid IPv6 address.',
    'json'              => 'O :attribute must be a valid JSON string.',
    'lt'                => [
        'numeric'       => 'O :attribute must be less than :value.',
        'file'          => 'O :attribute must be less than :value kilobytes.',
        'string'        => 'O :attribute must be less than :value caracteres.',
        'array'         => 'O :attribute must have less than :value items.',
    ],
    'lte'               => [
        'numeric'       => 'O :attribute deve ser menor ou igual a :value.',
        'file'          => 'O :attribute deve ser menor ou igual a :value kilobytes.',
        'string'        => 'O :attribute deve ser menor ou igual a :value caracteres.',
        'array'         => 'O :attribute não deve ter mais que :value items.',
    ],
    'max'               => [
        'numeric'       => 'O :attribute não pode ser maior que :max.',
        'file'          => 'O :attribute não pode ser maior que :max kilobytes.',
        'string'        => 'O :attribute não pode ser maior que :max caracteres.',
        'array'         => 'O :attribute may not have more than :max items.',
    ],
    'mimes'             => 'O :attribute must be a file of type: :values.',
    'mimetypes'         => 'O :attribute must be a file of type: :values.',
    'min'               => [
        'numeric'       => 'O :attribute deve ser pelo menos :min.',
        'file'          => 'O :attribute deve ser pelo menos :min kilobytes.',
        'string'        => 'O :attribute deve ser pelo menos :min caracteres.',
        'array'         => 'O :attribute must have at least :min items.',
    ],
    'multiple_of'       => 'O :attribute must be a multiple of :value',
    'not_in'            => 'The selected :attribute is invalid.',
    'not_regex'         => 'O :attribute format is invalid.',
    'numeric'           => 'O :attribute deve ser um número.',
    'password'          => 'A senha está incorreta.',
    'present'           => 'O :attribute field must be present.',
    'regex'             => 'O :attribute format is invalid.',
    'required'          => 'O :attribute é obrigatório.',
    'required_if'       => 'O :attribute field is required when :other is :value.',
    'required_unless'   => 'O :attribute field is required unless :other is in :values.',
    'required_with'     => 'O :attribute field is required when :values is present.',
    'required_with_all' => 'O :attribute field is required when :values are present.',
    'required_without'  => 'O :attribute field is required when :values is not present.',
    'required_without_all'  => 'O :attribute field is required when none of :values are present.',
    'same'                  => 'O :attribute and :other must match.',
    'size'                  => [
        'numeric'           => 'O :attribute must be :size.',
        'file'              => 'O :attribute must be :size kilobytes.',
        'string'            => 'O :attribute must be :size caracteres.',
        'array'             => 'O :attribute must contain :size items.',
    ],
    'starts_with'           => 'O :attribute must start with one of the following: :values.',
    'string'                => 'O :attribute deve ser uma string.',
    'timezone'              => 'O :attribute must be a valid zone.',
    'unique'                => 'O :attribute já foi usado.',
    'uploaded'              => 'O :attribute failed to upload.',
    'url'                   => 'O :attribute format is invalid.',
    'uuid'                  => 'O :attribute deve ser um UUID válido.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom'                => [
        'attribute-name'    => [
            'rule-name'     => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
