<?php

return [
    'accepted'             => ':Attribute depet èssere atzetadu.',
    'accepted_if'          => 'The :attribute must be accepted when :other is :value.',
    'active_url'           => ':Attribute no est un\'URL bàlidu.',
    'after'                => ':Attribute depet èssere una data chi benit a pustis de :date.',
    'after_or_equal'       => 'The :attribute must be a date after or equal to :date.',
    'alpha'                => ':Attribute podet cuntènnere isceti lìteras.',
    'alpha_dash'           => ':Attribute podet cuntènnere isceti lìteras, nùmeros e tratigheddos.',
    'alpha_num'            => ':Attribute podet cuntènnere isceti lìteras e nùmeros.',
    'array'                => ':Attribute depet èssere un\'array.',
    'before'               => ':Attribute depet èssere una data chi benit prima de :date.',
    'before_or_equal'      => 'The :attribute must be a date before or equal to :date.',
    'between'              => [
        'array'   => ':Attribute depet èssere intre :min - :max elementos.',
        'file'    => ':Attribute depet èssere intre :min - :max kilobytes.',
        'numeric' => ':Attribute depet èssere intre :min - :max.',
        'string'  => ':Attribute depet èssere intre :min - :max caràteres.',
    ],
    'boolean'              => 'The :attribute field must be true or false',
    'confirmed'            => 'Su campu de cunfirma pro :attribute non torrat.',
    'current_password'     => 'The password is incorrect.',
    'date'                 => ':Attribute no est una data bàlida.',
    'date_equals'          => 'The :attribute must be a date equal to :date.',
    'date_format'          => ':Attribute non torrat cun su formadu :format.',
    'declined'             => 'The :attribute must be declined.',
    'declined_if'          => 'The :attribute must be declined when :other is :value.',
    'different'            => ':Attribute e :other depent èssere diferentes.',
    'digits'               => ':Attribute depet èssere de :digits tzifras.',
    'digits_between'       => ':Attribute depet èssere intre :min e :max tzifras.',
    'dimensions'           => 'The :attribute has invalid image dimensions.',
    'distinct'             => 'The :attribute field has a duplicate value.',
    'doesnt_start_with'    => 'The :attribute may not start with one of the following: :values.',
    'email'                => ':Attribute no est bàlidu.',
    'ends_with'            => 'The :attribute must end with one of the following: :values.',
    'enum'                 => 'The selected :attribute is invalid.',
    'exists'               => ':Attribute seberadu/a no est bàlidu.',
    'file'                 => 'The :attribute must be a file.',
    'filled'               => ':Attribute est pedidu.',
    'gt'                   => [
        'array'   => 'The :attribute must have more than :value items.',
        'file'    => 'The :attribute must be greater than :value kilobytes.',
        'numeric' => 'The :attribute must be greater than :value.',
        'string'  => 'The :attribute must be greater than :value characters.',
    ],
    'gte'                  => [
        'array'   => 'The :attribute must have :value items or more.',
        'file'    => 'The :attribute must be greater than or equal :value kilobytes.',
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'string'  => 'The :attribute must be greater than or equal :value characters.',
    ],
    'image'                => ':Attribute depet èssere un\'immàgine.',
    'in'                   => ':Attribute seberadu no est bàlidu.',
    'in_array'             => 'The :attribute field does not exist in :other.',
    'integer'              => ':Attribute depet èssere intreu.',
    'ip'                   => ':Attribute depet èssere un\'indiritzu IP bàlidu.',
    'ipv4'                 => 'The :attribute must be a valid IPv4 address.',
    'ipv6'                 => 'The :attribute must be a valid IPv6 address.',
    'json'                 => 'The :attribute must be a valid JSON string.',
    'lt'                   => [
        'array'   => 'The :attribute must have less than :value items.',
        'file'    => 'The :attribute must be less than :value kilobytes.',
        'numeric' => 'The :attribute must be less than :value.',
        'string'  => 'The :attribute must be less than :value characters.',
    ],
    'lte'                  => [
        'array'   => 'The :attribute must not have more than :value items.',
        'file'    => 'The :attribute must be less than or equal :value kilobytes.',
        'numeric' => 'The :attribute must be less than or equal :value.',
        'string'  => 'The :attribute must be less than or equal :value characters.',
    ],
    'mac_address'          => 'The :attribute must be a valid MAC address.',
    'max'                  => [
        'array'   => ':Attribute non podet tènnere prus de :max elementos.',
        'file'    => ':Attribute non depet èssere prus mannu de :max kilobytes.',
        'numeric' => ':Attribute depet èssere prus piticu de :max.',
        'string'  => ':Attribute non podet cuntènnere prus de :max caràteres.',
    ],
    'mimes'                => ':Attribute depet èssere de tipu: :values.',
    'mimetypes'            => ':Attribute depet èssere de tipu: :values.',
    'min'                  => [
        'array'   => ':Attribute depet tènnere a su mancu :min elementos.',
        'file'    => ':Attribute depet èssere prus mannu de :min kilobytes.',
        'numeric' => ':Attribute depet bàlere a su mancu :min.',
        'string'  => ':Attribute depet cuntènnere a su mancu :min caràteres.',
    ],
    'multiple_of'          => 'The :attribute must be a multiple of :value.',
    'not_in'               => 'Su balore seberadu pro :attribute no est bàlidu.',
    'not_regex'            => 'The :attribute format is invalid.',
    'numeric'              => ':Attribute depet èssere unu nùmeru.',
    'password'             => [
        'letters'       => 'The :attribute must contain at least one letter.',
        'mixed'         => 'The :attribute must contain at least one uppercase and one lowercase letter.',
        'numbers'       => 'The :attribute must contain at least one number.',
        'symbols'       => 'The :attribute must contain at least one symbol.',
        'uncompromised' => 'The given :attribute has appeared in a data leak. Please choose a different :attribute.',
    ],
    'present'              => 'The :attribute field must be present.',
    'prohibited'           => 'The :attribute field is prohibited.',
    'prohibited_if'        => 'The :attribute field is prohibited when :other is :value.',
    'prohibited_unless'    => 'The :attribute field is prohibited unless :other is in :values.',
    'prohibits'            => 'The :attribute field prohibits :other from being present.',
    'regex'                => 'Su formadu de su campu :attribute no est bàlidu.',
    'required'             => ':Attribute est pedidu.',
    'required_array_keys'  => 'The :attribute field must contain entries for: :values.',
    'required_if'          => 'Su campu :attribute est pedidu cando :other est :value.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => 'Su campu :attribute est pedidu cando :values est presente.',
    'required_with_all'    => 'Su campu:attribute est pedidu cando :values est presente.',
    'required_without'     => 'Su campu :attribute est pedidu cando :values no est presente.',
    'required_without_all' => 'Su campu :attribute est pedidu cando perunu de :values sunt presentes.',
    'same'                 => ':Attribute e :other depent èssere uguales.',
    'size'                 => [
        'array'   => ':Attribute depet cuntènnere :size elementos.',
        'file'    => ':Attribute depet èssere mannu :size kilobytes.',
        'numeric' => ':Attribute depet bàlere :size.',
        'string'  => ':Attribute depet cuntènnere :size caràteres.',
    ],
    'starts_with'          => 'The :attribute must start with one of the following: :values.',
    'string'               => 'The :attribute must be a string.',
    'timezone'             => ':Attribute depet èssere una zona bàlida.',
    'unique'               => ':Attribute est istadu giai impreadu.',
    'uploaded'             => 'The :attribute failed to upload.',
    'url'                  => ':Attribute depet èssere un\'URL.',
    'uuid'                 => 'The :attribute must be a valid UUID.',
];
