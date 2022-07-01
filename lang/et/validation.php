<?php

return [
    'accepted'             => ':Attribute tuleb aktsepteerida.',
    'accepted_if'          => 'The :attribute must be accepted when :other is :value.',
    'active_url'           => ':Attribute ei ole kehtiv URL.',
    'after'                => ':Attribute peab olema kuupäev pärast :date.',
    'after_or_equal'       => ':Attribute peab olema kuupäev pärast või samastuma :date.',
    'alpha'                => ':Attribute võib sisaldada vaid tähemärke.',
    'alpha_dash'           => ':Attribute võib sisaldada vaid tähti, numbreid ja kriipse.',
    'alpha_num'            => ':Attribute võib sisaldada vaid tähti ja numbreid.',
    'array'                => ':Attribute peab olema massiiv.',
    'before'               => ':Attribute peab olema kuupäev enne :date.',
    'before_or_equal'      => ':Attribute peab olema kuupäev enne või samastuma :date.',
    'between'              => [
        'array'   => ':Attribute peab olema :min ja :max kirje vahel.',
        'file'    => ':Attribute peab olema :min ja :max kilobaidi vahel.',
        'numeric' => ':Attribute peab olema :min ja :max vahel.',
        'string'  => ':Attribute peab olema :min ja :max tähemärgi vahel.',
    ],
    'boolean'              => ':Attribute väli peab olema tõene või väär.',
    'confirmed'            => ':Attribute kinnitus ei vasta.',
    'current_password'     => 'The password is incorrect.',
    'date'                 => ':Attribute pole kehtiv kuupäev.',
    'date_equals'          => ':Attribute peab olema kuupäev väärtusega :date',
    'date_format'          => ':Attribute ei vasta formaadile :format.',
    'declined'             => 'The :attribute must be declined.',
    'declined_if'          => 'The :attribute must be declined when :other is :value.',
    'different'            => ':Attribute ja :other peavad olema erinevad.',
    'digits'               => ':Attribute peab olema :digits numbrit.',
    'digits_between'       => ':Attribute peab olema :min ja :max numbri vahel.',
    'dimensions'           => ':Attribute on valed pildi suurused.',
    'distinct'             => ':Attribute väljal on topeltväärtus.',
    'doesnt_start_with'    => 'The :attribute may not start with one of the following: :values.',
    'email'                => ':Attribute peab olema kehtiv e-posti aadress.',
    'ends_with'            => ':Attribute peab lõppema ühega järgmistest: :values.',
    'enum'                 => 'The selected :attribute is invalid.',
    'exists'               => 'Valitud :attribute on vigane.',
    'file'                 => ':Attribute peab olema fail.',
    'filled'               => ':Attribute väli on nõutav.',
    'gt'                   => [
        'array'   => ':Attribute peab sisaldama rohkem kui :value üksust',
        'file'    => ':Attribute peab olema suurem kui :value kilobaiti',
        'numeric' => ':Attribute peab olema suurem kui :value',
        'string'  => ':Attribute peab sisaldama rohkem kui :value tähemärki',
    ],
    'gte'                  => [
        'array'   => ':Attribute peab sisaldama vähemalt :value üksust',
        'file'    => ':Attribute peab olema suurem kui :value kilobaiti või sama palju',
        'numeric' => ':Attribute peab olema suurem kui :value või samasugune',
        'string'  => ':Attribute peab sisaldama rohkem kui :value tähemärki või sama palju',
    ],
    'image'                => ':Attribute peab olema pilt.',
    'in'                   => 'Valitud :attribute on vigane.',
    'in_array'             => ':Attribute väli ei eksisteeri :other sees.',
    'integer'              => ':Attribute peab olema täisarv.',
    'ip'                   => ':Attribute peab olema kehtiv IP aadress.',
    'ipv4'                 => ':Attribute peab olema kehtiv IPv4 aadress.',
    'ipv6'                 => ':Attribute peab olema kehtiv IPv6 aadress.',
    'json'                 => ':Attribute peab olema kehtiv JSON string.',
    'lt'                   => [
        'array'   => ':Attribute peab sisaldama vähem kui :value üksust',
        'file'    => ':Attribute peab olema väiksem kui :value kilobaiti',
        'numeric' => ':Attribute peab olema väiksem kui :value',
        'string'  => ':Attribute ei tohi ületada :value tähemärki',
    ],
    'lte'                  => [
        'array'   => ':Attribute ei tohi sisaldada rohkem kui :value üksust',
        'file'    => ':Attribute peab olema väiksem kui :value kilobaiti või sama palju',
        'numeric' => ':Attribute peab olema väiksem kui :value või samasugune',
        'string'  => ':Attribute peab sisaldama vähem või sama palju :value tähemärke',
    ],
    'mac_address'          => 'The :attribute must be a valid MAC address.',
    'max'                  => [
        'array'   => ':Attribute ei tohi sisaldada rohkem kui :max kirjet.',
        'file'    => ':Attribute ei tohi olla suurem kui :max kilobaiti.',
        'numeric' => ':Attribute ei tohi olla suurem kui :max.',
        'string'  => ':Attribute ei tohi olla suurem kui :max tähemärki.',
    ],
    'mimes'                => ':Attribute peab olema :values tüüpi.',
    'mimetypes'            => ':Attribute peab olema :values tüüpi.',
    'min'                  => [
        'array'   => ':Attribute peab olema vähemalt :min kirjet.',
        'file'    => ':Attribute peab olema vähemalt :min kilobaiti.',
        'numeric' => ':Attribute peab olema vähemalt :min.',
        'string'  => ':Attribute peab olema vähemalt :min tähemärki.',
    ],
    'multiple_of'          => ':Attribute peab olema :value Kordne',
    'not_in'               => 'Valitud :attribute on vigane.',
    'not_regex'            => ':Attribute vorming on vale',
    'numeric'              => ':Attribute peab olema number.',
    'password'             => [
        'letters'       => 'The :attribute must contain at least one letter.',
        'mixed'         => 'The :attribute must contain at least one uppercase and one lowercase letter.',
        'numbers'       => 'The :attribute must contain at least one number.',
        'symbols'       => 'The :attribute must contain at least one symbol.',
        'uncompromised' => 'The given :attribute has appeared in a data leak. Please choose a different :attribute.',
    ],
    'present'              => ':Attribute väli peab olema esindatud.',
    'prohibited'           => ':Attribute väli on keelatud.',
    'prohibited_if'        => ':Attribute väli on keelatud, kui :other on :value.',
    'prohibited_unless'    => ':Attribute väli on keelatud, välja arvatud juhul, kui :other on :values.',
    'prohibits'            => 'The :attribute field prohibits :other from being present.',
    'regex'                => ':Attribute vorming on vigane.',
    'required'             => ':Attribute väli on nõutud.',
    'required_array_keys'  => 'The :attribute field must contain entries for: :values.',
    'required_if'          => ':Attribute väli on nõutud, kui :other on :value.',
    'required_unless'      => ':Attribute väli on nõutud, välja arvatud, kui :other on :values.',
    'required_with'        => ':Attribute väli on nõutud, kui :values on esindatud.',
    'required_with_all'    => ':Attribute väli on nõutud, kui :values on esindatud.',
    'required_without'     => ':Attribute väli on nõutud, kui :values ei ole esindatud.',
    'required_without_all' => ':Attribute väli on nõutud, kui ükski :values pole esindatud.',
    'same'                 => ':Attribute ja :other peavad sobima.',
    'size'                 => [
        'array'   => ':Attribute peab sisaldama :size kirjet.',
        'file'    => ':Attribute peab olema :size kilobaiti.',
        'numeric' => ':Attribute peab olema :size.',
        'string'  => ':Attribute peab olema :size tähemärki.',
    ],
    'starts_with'          => ':Attribute peab algama ühega järgmistest: :values',
    'string'               => ':Attribute peab olema string.',
    'timezone'             => ':Attribute peab olema kehtiv tsoon.',
    'unique'               => ':Attribute on juba hõivatud.',
    'uploaded'             => ':Attribute ei õnnestunud laadida.',
    'url'                  => ':Attribute vorming on vigane.',
    'uuid'                 => ':Attribute peab olema õige UUID',
];
