<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'El campo :attribute debe aceptarse.',
    'accepted_if' => 'El campo :attribute debe aceptarse cuando :other es :value.',
    'active_url' => 'El campo :attribute debe ser una URL válida.',
    'after' => 'El campo :attribute debe ser una fecha posterior a :date.',
    'after_or_equal' => 'El campo :attribute debe ser una fecha posterior o igual a :date.',
    'alpha' => 'El campo :attribute sólo debe contener letras.',
    'alpha_dash' => 'El campo :attribute sólo debe contener letras, números, guiones y guiones bajos.',
    'alpha_num' => 'El campo :attribute sólo debe contener letras y números.',
    'array' => 'El campo :attribute debe ser una matriz.',
    'ascii' => 'El campo :attribute sólo debe contener caracteres alfanuméricos de un byte y símbolos.',
    'before' => 'El campo :attribute debe ser una fecha antes de :date.',
    'before_or_equal' => 'El campo :attribute debe ser una fecha anterior o igual a :date.',
    'between' => [
        'array' => 'El campo :attribute debe tener entre elementos :min y :max.',
        'file' => 'El campo :atributo debe tener entre :min y :max kilobytes.',
        'numeric' => 'El campo :atributo debe tener entre :min y :max.',
        'string' => 'El campo :atributo debe tener entre :min y :max caracteres.',
    ],
    'boolean' => 'El campo :attribute debe ser verdadero o falso.',
    'confirmed' => 'La confirmación del campo :attribute no coincide.',
    'current_password' => 'La contraseña es incorrecta.',
    'date' => 'El campo :attribute debe ser una fecha válida.',
    'date_equals' => 'El campo :attribute debe ser una fecha igual a :date.',
    'date_format' => 'El campo :attribute debe coincidir con el formato :format.',
    'decimal' => 'El campo :attribute debe tener decimales :decimal.',
    'declined' => 'El campo :attribute debe estar declinado.',
    'declined_if' => 'El campo :attribute debe ser declinado cuando :other es :value.',
    'different' => 'El campo :atributo y :otro deben ser diferentes.',
    'digits' => 'El campo :attribute debe ser :digits dígitos.',
    'digits_between' => 'El campo :attribute debe estar entre :min y :max dígitos.',
    'dimensions' => 'El campo :attribute tiene dimensiones de imagen no válidas.',
    'distinct' => 'El campo :attribute tiene un valor duplicado.',
    'doesnt_end_with' => 'El campo :attribute no debe terminar con uno de los elementos siguientes: :values.',
    'doesnt_start_with' => 'El campo :attribute no debe empezar por uno de los siguientes caracteres: :values.',
    'email' => 'El campo :attribute debe ser una dirección de correo electrónico válida.',
    'ends_with' => 'El campo :attribute debe terminar con uno de los siguientes: :values.',
    'enum' => 'El atributo :seleccionado no es válido.',
    'exists' => 'El atributo :seleccionado no es válido.',
    'file' => 'El campo :attribute debe ser un archivo.',
    'filled' => 'El campo :attribute debe tener un valor.',
    'gt' => [
        'array' => 'El campo :atributo debe tener más elementos :value.',
        'file' => 'El campo :atributo debe ser mayor que :valor kilobytes.',
        'numeric' => 'El campo :attribute debe ser mayor que :value.',
        'string' => 'El campo :attribute debe tener más caracteres que :value.',
    ],
    'gte' => [
        'array' => 'El campo :atributo debe tener elementos :value o más.',
        'file' => 'El campo :atributo debe ser mayor o igual que :valor kilobytes.',
        'numeric' => 'El campo :atributo debe ser mayor o igual que :valor.',
        'string' => 'El campo :attribute debe ser mayor o igual que :value caracteres.',
    ],
    'image' => 'El campo :attribute debe ser una imagen.',
    'in' => 'El campo :attribute seleccionado no es válido.',
    'in_array' => 'El campo :attribute debe existir en :other.',
    'integer' => 'El campo :attribute debe ser un número entero.',
    'ip' => 'El campo :attribute debe ser una dirección IP válida.',
    'ipv4' => 'El campo :attribute debe ser una dirección IPv4 válida.',
    'ipv6' => 'El campo :attribute debe ser una dirección IPv6 válida.',
    'json' => 'El campo :attribute debe ser una cadena JSON válida.',
    'lowercase' => 'El campo :attribute debe estar en minúsculas.',
    'lt' => [
        'array' => 'El campo :attribute debe tener menos elementos :value.',
        'file' => 'El campo :attribute debe tener menos de :value kilobytes.',
        'numeric' => 'El campo :attribute debe ser inferior a :value.',
        'string' => 'El campo :attribute debe tener menos caracteres que :value.',
    ],
    'lte' => [
        'array' => 'El campo :atributo no debe tener más elementos que :valor.',
        'file' => 'El campo :atributo debe ser menor o igual que :valor kilobytes.',
        'numeric' => 'El campo :attribute debe ser menor o igual que :value.',
        'string' => 'El campo :attribute debe ser menor o igual que :value caracteres.',
    ],
    'mac_address' => 'El campo :attribute debe ser una dirección MAC válida.',
    'max' => [
        'array' => 'El campo :attribute no debe tener más elementos :max.',
        'file' => 'El campo :attribute no debe tener más de :max kilobytes.',
        'numeric' => 'El campo :attribute no debe ser mayor que :max.',
        'string' => 'El campo :atributo no debe tener más de :max caracteres.',
    ],
    'max_digits' => 'El campo :atributo no debe tener más de :max dígitos.',
    'mimes' => 'El campo :atributo debe ser un archivo de tipo: :values.',
    'mimetypes' => 'El campo :attribute debe ser un archivo de tipo: :values.',
    'min' => [
        'array' => 'El campo :atributo debe tener al menos elementos :min.',
        'file' => 'El campo :atributo debe tener al menos :min kilobytes.',
        'numeric' => 'El campo :attribute debe tener al menos :min.',
        'string' => 'El campo :atributo debe tener al menos :min caracteres.',
    ],
    'min_digits' => 'El campo :atributo debe tener al menos :min dígitos.',
    'missing' => 'El campo :attribute debe faltar.',
    'missing_if' => 'El campo :atributo debe faltar cuando :other es :value.',
    'missing_unless' => 'El campo :atributo debe faltar a menos que :other sea :value.',
    'missing_with' => 'El campo :attribute debe faltar cuando :values está presente.',
    'missing_with_all' => 'El campo :attribute debe faltar cuando :values está presente.',
    'multiple_of' => 'El campo :attribute debe ser múltiplo de :value.',
    'not_in' => 'El atributo :seleccionado no es válido.',
    'not_regex' => 'El formato del campo :attribute no es válido.',
    'numeric' => 'El campo :atributo debe ser un número.',
    'password' => [
        'letters' => 'El campo :atributo debe contener al menos una letra.',
        'mixed' => 'El campo :attribute debe contener al menos una letra mayúscula y una letra minúscula.',
        'numbers' => 'El campo :attribute debe contener al menos un número.',
        'symbols' => 'El campo :attribute debe contener al menos un símbolo.',
        'uncompromised' => 'El atributo :dado ha aparecido en una fuga de datos. Por favor, seleccione una diferenciat :attribute.',
    ],
    'present' => 'El campo :attribute debe estar presente.',
    'prohibited' => 'El campo :attribute está prohibido.',
    'prohibited_if' => 'El campo :attribute está prohibido cuando :other está en :value.',
    'prohibited_unless' => 'El campo :attribute está prohibido a menos que :other esté en :values.',
    'prohibits' => 'El campo :attribute prohíbe la presencia de :other.',
    'regex' => 'El formato del campo :attribute no es válido.',
    'required' => 'El campo :attribute es obligatorio.',
    'required_array_keys' => 'El campo :attribute debe contener entradas para: :values.',
    'required_if' => 'El campo :attribute es obligatorio cuando :other es :value.',
    'required_if_accepted' => 'El campo :attribute es obligatorio cuando se acepta :other.',
    'required_unless' => 'El campo :attribute es obligatorio a menos que :other esté en :values.',
    'required_with' => 'El campo :attribute es obligatorio cuando :values está presente.',
    'required_with_all' => 'El campo :attribute es obligatorio cuando :values está presente.',
    'required_without' => 'El campo :attribute es obligatorio cuando :values no está presente.',
    'required_without_all' => 'El campo :attribute es obligatorio cuando no está presente ninguno de los valores :values.',
    'same' => 'El campo :attribute debe coincidir con :other.',
    'size' => [
        'array' => 'El campo :atributo debe contener elementos :tamaño.',
        'file' => 'El campo :attribute debe ser :size kilobytes.',
        'numeric' => 'El campo :attribute debe ser :size.',
        'string' => 'El campo :atributo debe tener caracteres :size.',
    ],
    'starts_with' => 'El campo :attribute debe comenzar por uno de los siguientes elementos: :values.',
    'string' => 'El campo :attribute debe ser una cadena.',
    'timezone' => 'El campo :attribute debe ser una zona horaria válida.',
    'unique' => 'El campo :attribute ya se ha cargado.',
    'uploaded' => 'No se ha podido cargar el campo :attribute.',
    'uppercase' => 'El campo :attribute debe estar en mayúsculas.',
    'url' => 'El campo :attribute debe ser una URL válida.',
    'ulid' => 'El campo :attribute debe ser un ULID válido.',
    'uuid' => 'El campo :attribute debe ser un UUID válido.',

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

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
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
