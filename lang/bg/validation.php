<?php

return [
    'accepted'             => 'Трябва да приемете :attribute.',
    'accepted_if'          => 'Полето :attribute трябва да е прието, когато :other е :value.',
    'active_url'           => 'Полето :attribute не е валиден URL адрес.',
    'after'                => 'Полето :attribute трябва да бъде дата след :date.',
    'after_or_equal'       => 'Полето :attribute трябва да бъде дата след или равна на :date.',
    'alpha'                => 'Полето :attribute трябва да съдържа само букви.',
    'alpha_dash'           => 'Полето :attribute трябва да съдържа само букви, цифри, долна черта и тире.',
    'alpha_num'            => 'Полето :attribute трябва да съдържа само букви и цифри.',
    'array'                => 'Полето :attribute трябва да бъде масив.',
    'before'               => 'Полето :attribute трябва да бъде дата преди :date.',
    'before_or_equal'      => 'Полето :attribute трябва да бъде дата преди или равна на :date.',
    'between'              => [
        'array'   => 'Полето :attribute трябва да има между :min - :max елемента.',
        'file'    => 'Полето :attribute трябва да бъде между :min и :max килобайта.',
        'numeric' => 'Полето :attribute трябва да бъде между :min и :max.',
        'string'  => 'Полето :attribute трябва да бъде между :min и :max знака.',
    ],
    'boolean'              => 'Полето :attribute трябва да съдържа Да или Не',
    'confirmed'            => 'Полето :attribute не е потвърдено.',
    'current_password'     => 'Паролата е неправилна.',
    'date'                 => 'Полето :attribute не е валидна дата.',
    'date_equals'          => ':Attribute трябва да бъде дата, еднаква с :date.',
    'date_format'          => 'Полето :attribute не е във формат :format.',
    'declined'             => 'The :attribute must be declined.',
    'declined_if'          => 'The :attribute must be declined when :other is :value.',
    'different'            => 'Полетата :attribute и :other трябва да са различни.',
    'digits'               => 'Полето :attribute трябва да има :digits цифри.',
    'digits_between'       => 'Полето :attribute трябва да има между :min и :max цифри.',
    'dimensions'           => 'Невалидни размери за снимка :attribute.',
    'distinct'             => 'Данните в полето :attribute се дублират.',
    'doesnt_start_with'    => 'The :attribute may not start with one of the following: :values.',
    'email'                => 'Полето :attribute е в невалиден формат.',
    'ends_with'            => ':Attribute трябва да завършва с една от следните стойности: :values.',
    'enum'                 => 'The selected :attribute is invalid.',
    'exists'               => 'Избранато поле :attribute вече съществува.',
    'file'                 => 'Полето :attribute трябва да бъде файл.',
    'filled'               => 'Полето :attribute е задължително.',
    'gt'                   => [
        'array'   => ':Attribute трябва да разполага с повече от :value елемента.',
        'file'    => ':Attribute трябва да бъде по-голяма от :value килобайта.',
        'numeric' => ':Attribute трябва да бъде по-голяма от :value.',
        'string'  => ':Attribute трябва да бъде по-голяма от :value знака.',
    ],
    'gte'                  => [
        'array'   => ':Attribute трябва да разполага с :value елемента или повече.',
        'file'    => ':Attribute трябва да бъде по-голяма от или равна на :value килобайта.',
        'numeric' => ':Attribute трябва да бъде по-голяма от или равна на :value.',
        'string'  => ':Attribute трябва да бъде по-голяма от или равна на :value знака.',
    ],
    'image'                => 'Полето :attribute трябва да бъде изображение.',
    'in'                   => 'Избраното поле :attribute е невалидно.',
    'in_array'             => 'Полето :attribute не съществува в :other.',
    'integer'              => 'Полето :attribute трябва да бъде цяло число.',
    'ip'                   => 'Полето :attribute трябва да бъде IP адрес.',
    'ipv4'                 => 'Полето :attribute трябва да бъде IPv4 адрес.',
    'ipv6'                 => 'Полето :attribute трябва да бъде IPv6 адрес.',
    'json'                 => 'Полето :attribute трябва да бъде JSON низ.',
    'lt'                   => [
        'array'   => ':Attribute трябва да разполага с по-малко от :value елемента.',
        'file'    => ':Attribute трябва да бъде по-малка от :value килобайта.',
        'numeric' => ':Attribute трябва да бъде по-малка от :value.',
        'string'  => ':Attribute трябва да бъде по-малка от :value знака.',
    ],
    'lte'                  => [
        'array'   => ':Attribute не трябва да разполага с повече от :value елемента.',
        'file'    => ':Attribute трябва да бъде по-малка от или равна на :value килобайта.',
        'numeric' => ':Attribute трябва да бъде по-малка от или равна на :value.',
        'string'  => ':Attribute трябва да бъде по-малка от или равна на :value знака.',
    ],
    'mac_address'          => 'The :attribute must be a valid MAC address.',
    'max'                  => [
        'array'   => 'Полето :attribute трябва да има по-малко от :max елемента.',
        'file'    => 'Полето :attribute трябва да бъде по-малко от :max килобайта.',
        'numeric' => 'Полето :attribute трябва да бъде по-малко от :max.',
        'string'  => 'Полето :attribute трябва да бъде по-малко от :max знака.',
    ],
    'mimes'                => 'Полето :attribute трябва да бъде файл от тип: :values.',
    'mimetypes'            => 'Полето :attribute трябва да бъде файл от тип: :values.',
    'min'                  => [
        'array'   => 'Полето :attribute трябва има минимум :min елемента.',
        'file'    => 'Полето :attribute трябва да бъде минимум :min килобайта.',
        'numeric' => 'Полето :attribute трябва да бъде минимум :min.',
        'string'  => 'Полето :attribute трябва да бъде минимум :min знака.',
    ],
    'multiple_of'          => 'Числото :attribute трябва да бъде кратно на :value',
    'not_in'               => 'Избраното поле :attribute е невалидно.',
    'not_regex'            => 'Форматът на :attribute е невалиден.',
    'numeric'              => 'Полето :attribute трябва да бъде число.',
    'password'             => [
        'letters'       => 'The :attribute must contain at least one letter.',
        'mixed'         => 'The :attribute must contain at least one uppercase and one lowercase letter.',
        'numbers'       => 'The :attribute must contain at least one number.',
        'symbols'       => 'The :attribute must contain at least one symbol.',
        'uncompromised' => 'The given :attribute has appeared in a data leak. Please choose a different :attribute.',
    ],
    'present'              => 'Полето :attribute трябва да съествува.',
    'prohibited'           => 'Поле :attribute е забранено.',
    'prohibited_if'        => 'Полето :attribute е забранено, когато :other е равно на :value.',
    'prohibited_unless'    => 'Полето :attribute е забранено, освен ако :other не е в :values.',
    'prohibits'            => 'Полето :attribute изключва наличието на :other.',
    'regex'                => 'Полето :attribute е в невалиден формат.',
    'required'             => 'Полето :attribute е задължително.',
    'required_array_keys'  => 'The :attribute field must contain entries for: :values.',
    'required_if'          => 'Полето :attribute се изисква, когато :other е :value.',
    'required_unless'      => 'Полето :attribute се изисква, освен ако :other не е в :values.',
    'required_with'        => 'Полето :attribute се изисква, когато :values има стойност.',
    'required_with_all'    => 'Полето :attribute е задължително, когато :values имат стойност.',
    'required_without'     => 'Полето :attribute се изисква, когато :values няма стойност.',
    'required_without_all' => 'Полето :attribute се изисква, когато никое от полетата :values няма стойност.',
    'same'                 => 'Полетата :attribute и :other трябва да съвпадат.',
    'size'                 => [
        'array'   => 'Полето :attribute трябва да има :size елемента.',
        'file'    => 'Полето :attribute трябва да бъде :size килобайта.',
        'numeric' => 'Полето :attribute трябва да бъде :size.',
        'string'  => 'Полето :attribute трябва да бъде :size знака.',
    ],
    'starts_with'          => ':Attribute трябва да започва с едно от следните: :values.',
    'string'               => 'Полето :attribute трябва да бъде знаков низ.',
    'timezone'             => 'Полето :attribute трябва да съдържа валидна часова зона.',
    'unique'               => 'Полето :attribute вече съществува.',
    'uploaded'             => 'Неуспешно качване на :attribute.',
    'url'                  => 'Полето :attribute е в невалиден формат.',
    'uuid'                 => ':Attribute трябва да бъде валиден UUID.',
];