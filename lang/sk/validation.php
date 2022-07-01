<?php

return [
    'accepted'             => ':Attribute musí byť akceptovaný.',
    'accepted_if'          => ':Attribute musí byť akceptované ak :other je :value.',
    'active_url'           => ':Attribute má neplatnú URL adresu.',
    'after'                => ':Attribute musí byť dátum po :date.',
    'after_or_equal'       => ':Attribute musí byť dátum po alebo presne :date.',
    'alpha'                => ':Attribute môže obsahovať len písmená.',
    'alpha_dash'           => ':Attribute môže obsahovať len písmená, čísla a pomlčky.',
    'alpha_num'            => ':Attribute môže obsahovať len písmená, čísla.',
    'array'                => ':Attribute musí byť pole.',
    'before'               => ':Attribute musí byť dátum pred :date.',
    'before_or_equal'      => ':Attribute musí byť dátum pred alebo presne :date.',
    'between'              => [
        'array'   => ':Attribute musí mať rozsah :min - :max prvkov.',
        'file'    => ':Attribute musí mať rozsah :min - :max kilobajtov.',
        'numeric' => ':Attribute musí mať rozsah :min - :max.',
        'string'  => ':Attribute musí mať rozsah :min - :max znakov.',
    ],
    'boolean'              => ':Attribute musí byť pravda alebo nepravda.',
    'confirmed'            => ':Attribute konfirmácia sa nezhoduje.',
    'current_password'     => 'Heslo je nesprávne.',
    'date'                 => ':Attribute má neplatný dátum.',
    'date_equals'          => ':Attribute musí byť dátum rovnajúci sa :date.',
    'date_format'          => ':Attribute sa nezhoduje s formátom :format.',
    'declined'             => ':Attribute musí byť zamietnuté.',
    'declined_if'          => ':Attribute musí byť zamietnuté ak :other je :value.',
    'different'            => ':Attribute a :other musia byť odlišné.',
    'digits'               => ':Attribute musí mať :digits číslic.',
    'digits_between'       => ':Attribute musí mať rozsah :min až :max číslic.',
    'dimensions'           => ':Attribute má neplatné rozmery obrázku.',
    'distinct'             => ':Attribute je duplicitný.',
    'doesnt_start_with'    => 'The :attribute may not start with one of the following: :values.',
    'email'                => ':Attribute má neplatný formát.',
    'ends_with'            => ':Attribute musí obsahovať jednú z týchto hodnôt: :values.',
    'enum'                 => 'The selected :attribute is invalid.',
    'exists'               => 'označený :attribute je neplatný.',
    'file'                 => ':Attribute musí byť súbor.',
    'filled'               => ':Attribute je požadované.',
    'gt'                   => [
        'array'   => ':Attribute musí mať viac prvkov ako :value.',
        'file'    => ':Attribute musí mať viac kilobajtov ako :value.',
        'numeric' => 'Hodnota :attribute musí byť väčšia ako :value.',
        'string'  => ':Attribute musí mať viac znakov ako :value.',
    ],
    'gte'                  => [
        'array'   => ':Attribute musí mať rovnaký alebo väčší počet prvkov ako :value.',
        'file'    => ':Attribute musí mať rovnaký alebo väčší počet kilobajtov ako :value.',
        'numeric' => 'Hodnota :attribute musí byť väčšia alebo rovná ako :value.',
        'string'  => ':Attribute musí mať rovnaký alebo väčší počet znakov ako :value.',
    ],
    'image'                => ':Attribute musí byť obrázok.',
    'in'                   => 'označený :attribute je neplatný.',
    'in_array'             => ':Attribute sa nenachádza v :other.',
    'integer'              => ':Attribute musí byť celé číslo.',
    'ip'                   => ':Attribute musí byť platná IP adresa.',
    'ipv4'                 => ':Attribute musí byť platná IPv4 adresa.',
    'ipv6'                 => ':Attribute musí byť platná IPv6 adresa.',
    'json'                 => ':Attribute musí byť platný JSON reťazec.',
    'lt'                   => [
        'array'   => ':Attribute musí mať menej prvkov ako :value.',
        'file'    => ':Attribute musí mať menej kilobajtov ako :value.',
        'numeric' => 'Hodnota :attribute musí byť menšia ako :value.',
        'string'  => ':Attribute musí mať menej znakov ako :value.',
    ],
    'lte'                  => [
        'array'   => ':Attribute musí mať rovnaký alebo menší počet prvkov ako :value.',
        'file'    => ':Attribute musí mať rovnaký alebo menší počet kilobajtov ako :value.',
        'numeric' => 'Hodnota :attribute musí byť menšia alebo rovná ako :value.',
        'string'  => ':Attribute musí mať rovnaký alebo menší počet znakov ako :value.',
    ],
    'mac_address'          => 'The :attribute must be a valid MAC address.',
    'max'                  => [
        'array'   => ':Attribute nemôže mať viac ako :max prvkov.',
        'file'    => ':Attribute nemôže byť väčší ako :max kilobajtov.',
        'numeric' => ':Attribute nemôže byť väčší ako :max.',
        'string'  => ':Attribute nemôže byť väčší ako :max znakov.',
    ],
    'mimes'                => ':Attribute musí byť súbor s koncovkou: :values.',
    'mimetypes'            => ':Attribute musí byť súbor s koncovkou: :values.',
    'min'                  => [
        'array'   => ':Attribute musí mať aspoň :min prvkov.',
        'file'    => ':Attribute musí mať aspoň :min kilobajtov.',
        'numeric' => ':Attribute musí mať aspoň :min.',
        'string'  => ':Attribute musí mať aspoň :min znakov.',
    ],
    'multiple_of'          => ':Attribute musí byť násobkom :value',
    'not_in'               => 'označený :attribute je neplatný.',
    'not_regex'            => ':Attribute má neplatný formát.',
    'numeric'              => ':Attribute musí byť číslo.',
    'password'             => [
        'letters'       => 'The :attribute must contain at least one letter.',
        'mixed'         => 'The :attribute must contain at least one uppercase and one lowercase letter.',
        'numbers'       => 'The :attribute must contain at least one number.',
        'symbols'       => 'The :attribute must contain at least one symbol.',
        'uncompromised' => 'The given :attribute has appeared in a data leak. Please choose a different :attribute.',
    ],
    'present'              => ':Attribute musí byť odoslaný.',
    'prohibited'           => ':Attribute je zakázané.',
    'prohibited_if'        => ':Attribute je zakázané, keď je :other :value.',
    'prohibited_unless'    => ':Attribute je zakázané, pokiaľ :other nie je v :values.',
    'prohibits'            => ':Attribute zakazuje, aby bolo :other povolené.',
    'regex'                => ':Attribute má neplatný formát.',
    'required'             => ':Attribute je požadované.',
    'required_array_keys'  => 'The :attribute field must contain entries for: :values.',
    'required_if'          => ':Attribute je požadované keď :other je :value.',
    'required_unless'      => ':Attribute je požadované, okrem prípadu keď :other je v :values.',
    'required_with'        => ':Attribute je požadované keď :values je prítomné.',
    'required_with_all'    => ':Attribute je požadované ak :values je nastavené.',
    'required_without'     => ':Attribute je požadované keď :values nie je prítomné.',
    'required_without_all' => ':Attribute je požadované ak žiadne z :values nie je nastavené.',
    'same'                 => ':Attribute a :other sa musia zhodovať.',
    'size'                 => [
        'array'   => ':Attribute musí obsahovať :size prvkov.',
        'file'    => ':Attribute musí mať :size kilobajtov.',
        'numeric' => ':Attribute musí byť :size.',
        'string'  => ':Attribute musí mať :size znakov.',
    ],
    'starts_with'          => ':Attribute musí začínať niektorou z hodnôt: :values',
    'string'               => ':Attribute musí byť reťazec znakov.',
    'timezone'             => ':Attribute musí byť platné časové pásmo.',
    'unique'               => ':Attribute už existuje.',
    'uploaded'             => 'Nepodarilo sa nahrať :attribute.',
    'url'                  => ':Attribute musí mať formát URL.',
    'uuid'                 => ':Attribute musí byť platné UUID.',
];
