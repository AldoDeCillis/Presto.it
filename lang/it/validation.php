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

    'accepted' => 'Il campo :attribute deve essere accettato.',
    'accepted_if' => 'Il campo :attribute deve essere accettato quando :other è :value.',
    'active_url' => 'Il campo :attribute deve essere un URL valido.',
    'after' => 'Il campo :attributo deve essere una data successiva a :data.',
    'after_or_equal' => 'Il campo :attribute deve essere una data successiva o uguale a :date.',
    'alpha' => 'Il campo :attribute deve contenere solo lettere.',
    'alpha_dash' => 'Il campo :attribute deve contenere solo lettere, numeri, trattini e trattini bassi.',
    'alpha_num' => 'Il campo :attribute deve contenere solo lettere e numeri.',
    'array' => 'Il campo :attribute deve essere un array.',
    'ascii' => 'Il campo :attribute deve contenere solo caratteri alfanumerici e simboli a singolo byte.',
    'before' => 'Il campo :attribute deve essere una data prima di :date.',
    'before_or_equal' => 'Il campo :attribute deve essere una data precedente o uguale a :date.',
    'between' => [
        'array' => 'Il campo :attribute deve avere elementi compresi tra :min e :max.',
        'file' => 'Il campo :attributo deve essere compreso tra :min e :max kilobyte.',
        'numeric' => 'Il campo :attributo deve essere compreso tra :min e :max.',
        'string' => 'Il campo :attribute deve essere compreso tra :min e :max caratteri.',
    ],
    'boolean' => 'Il campo :attribute deve essere vero o falso.',
    'confirmed' => 'La conferma del campo :attribute non corrisponde.',
    'current_password' => 'La password non è corretta.',
    'date' => 'Il campo :attribute deve essere una data valida.',
    'date_equals' => 'Il campo :attribute deve essere una data uguale a :date.',
    'date_format' => 'Il campo :attribute deve corrispondere al formato :format.',
    'decimal' => 'Il campo :attributo deve avere :decimale.',
    'declined' => 'Il campo :attribute deve essere declinato.',
    'declined_if' => 'Il campo :attributo deve essere rifiutato quando :altro è :valore.',
    'different' => 'I campi :attributo e :altro devono essere diversi.',
    'digits' => 'Il campo :attributo deve essere :cifre cifre.',
    'digits_between' => 'Il campo :attributo deve essere compreso tra :min e :max cifre.',
    'dimensions' => 'Il campo :attribute ha dimensioni dell\'immagine non valide.',
    'distinct' => 'Il campo :attribute ha un valore duplicato.',
    'doesnt_end_with' => 'Il campo :attribute non deve terminare con uno dei seguenti elementi: :values.',
    'doesnt_start_with' => 'Il campo :attribute non deve iniziare con uno dei seguenti valori: :values.',
    'email' => 'Il campo :attribute deve essere un indirizzo e-mail valido.',
    'ends_with' => 'Il campo :attribute deve terminare con uno dei seguenti valori: :values.',
    'enum' => 'L\'attributo :selezionato non è valido.',
    'exists' => 'L\'attributo :selezionato non è valido.',
    'file' => 'Il campo :attribute deve essere un file.',
    'filled' => 'Il campo :attributo deve avere un valore.',
    'gt' => [
        'array' => 'Il campo :attributo deve avere più di :valore.',
        'file' => 'Il campo :attributo deve essere maggiore di :valore kilobyte.',
        'numeric' => 'Il campo :attribute deve essere maggiore di :value.',
        'string' => 'Il campo :attribute deve essere maggiore di :value caratteri.',
    ],
    'gte' => [
        'array' => 'Il campo :attributo deve avere almeno :valore elementi.',
        'file' => 'Il campo :attributo deve essere maggiore o uguale a :valore kilobyte.',
        'numeric' => 'Il campo :attribute deve essere maggiore o uguale a :value.',
        'string' => 'Il campo :attribute deve essere maggiore o uguale a :value caratteri.',
    ],
    'image' => 'Il campo :attributo deve essere un\'immagine.',
    'in' => 'L\'attributo :selezionato non è valido.',
    'in_array' => 'Il campo :attributo deve esistere in :altro.',
    'integer' => 'Il campo :attributo deve essere un numero intero.',
    'ip' => 'Il campo :attributo deve essere un indirizzo IP valido.',
    'ipv4' => 'Il campo :attributo deve essere un indirizzo IPv4 valido.',
    'ipv6' => 'Il campo :attribute deve essere un indirizzo IPv6 valido.',
    'json' => 'Il campo :attribute deve essere una stringa JSON valida.',
    'lowercase' => 'Il campo :attribute deve essere minuscolo.',
    'lt' => [
        'array' => 'Il campo :attribute deve avere meno di :value items.',
        'file' => 'Il campo :attribute deve essere inferiore a :value kilobyte.',
        'numeric' => 'Il campo :attribute deve essere inferiore a :value.',
        'string' => 'Il campo :attribute deve essere inferiore a :value caratteri.',
    ],
    'lte' => [
        'array' => 'Il campo :attributo non deve avere più di :valore elementi.',
        'file' => 'Il campo :attributo deve essere inferiore o uguale a :valore kilobyte.',
        'numeric' => 'Il campo :attributo deve essere inferiore o uguale a :value.',
        'string' => 'Il campo :attribute deve essere inferiore o uguale a :value caratteri.',
    ],
    'mac_address' => 'Il campo :attribute deve essere un indirizzo MAC valido.',
    'max' => [
        'array' => 'Il campo :attribute non deve avere più di :max elementi.',
        'file' => 'Il campo :attribute non deve essere maggiore di :max kilobyte.',
        'numeric' => 'Il campo :attribute non deve essere maggiore di :max.',
        'string' => 'Il campo :attribute non deve essere maggiore di :max caratteri.',
    ],
    'max_digits' => 'Il campo :attributo non deve avere più di :max cifre.',
    'mimes' => 'Il campo :attributo deve essere un file di tipo :values.',
    'mimetypes' => 'Il campo :attributo deve essere un file di tipo: :values.',
    'min' => [
        'array' => 'Il campo :attributo deve avere almeno :min elementi.',
        'file' => 'Il campo :attributo deve avere almeno :min kilobyte.',
        'numeric' => 'Il campo :attributo deve essere almeno :min.',
        'string' => 'Il campo :attribute deve avere almeno :min caratteri.',
    ],
    'min_digits' => 'Il campo :attributo deve avere almeno :min cifre.',
    'missing' => 'Il campo :attributo deve essere mancante.',
    'missing_if' => 'Il campo :attributo deve essere mancante quando :altro è :valore.',
    'missing_unless' => 'Il campo :attributo deve mancare se :altro è :valore.',
    'missing_with' => 'Il campo :attribute deve mancare quando :values è presente.',
    'missing_with_all' => 'Il campo :attribute deve mancare quando :values è presente.',
    'multiple_of' => 'Il campo :attributo deve essere un multiplo di :valore.',
    'not_in' => 'L\'attributo :selezionato non è valido.',
    'not_regex' => 'Il formato del campo :attributo non è valido.',
    'numeric' => 'Il campo :attributo deve essere un numero.',
    'password' => [
        'letters' => 'Il campo :attributo deve contenere almeno una lettera.',
        'mixed' => 'Il campo :attribute deve contenere almeno una lettera maiuscola e una minuscola.',
        'numbers' => 'Il campo :attribute deve contenere almeno un numero.',
        'symbols' => 'Il campo :attribute deve contenere almeno un simbolo.',
        'uncompromised' => 'L\'attributo :dato è apparso in una fuga di dati. Si prega di scegliere un diversot :attribute.',
    ],
    'present' => 'Il campo :attribute deve essere presente.',
    'prohibited' => 'Il campo :attribute è vietato.',
    'prohibited_if' => 'Il campo :attribute è proibito quando :other è :value.',
    'prohibited_unless' => 'Il campo :attribute è proibito a meno che :other non sia in :values.',
    'prohibits' => 'Il campo :attributo vieta la presenza di :altro.',
    'regex' => 'Il formato del campo :attribute non è valido.',
    'required' => 'Il campo :attribute è obbligatorio.',
    'required_array_keys' => 'Il campo :attribute deve contenere voci per: :values.',
    'required_if' => 'Il campo :attribute è obbligatorio quando :other è :value.',
    'required_if_accepted' => 'Il campo :attributo è obbligatorio quando :altro è accettato.',
    'required_unless' => 'Il campo :attribute è obbligatorio a meno che :other non sia in :values.',
    'required_with' => 'Il campo :attribute è richiesto quando :values è presente.',
    'required_with_all' => 'Il campo :attribute è richiesto quando è presente :values.',
    'required_without' => 'Il campo :attribute è richiesto quando :values non è presente.',
    'required_without_all' => 'Il campo :attribute è richiesto quando nessuno dei :values è presente.',
    'same' => 'Il campo :attributo deve corrispondere a :altro.',
    'size' => [
        'array' => 'Il campo :attribute deve contenere elementi di :size.',
        'file' => 'Il campo :attributo deve essere :size kilobyte.',
        'numeric' => 'Il campo :attributo deve essere :size.',
        'string' => 'Il campo :attributo deve essere :size caratteri.',
    ],
    'starts_with' => 'Il campo :attribute deve iniziare con uno dei seguenti elementi: :values.',
    'string' => 'Il campo :attributo deve essere una stringa.',
    'timezone' => 'Il campo :attributo deve essere un fuso orario valido.',
    'unique' => 'L\'attributo :è già stato preso.',
    'uploaded' => 'Il caricamento dell\'attributo :non è riuscito.',
    'uppercase' => 'Il campo :attributo deve essere maiuscolo.',
    'url' => 'Il campo :attribute deve essere un URL valido.',
    'ulid' => 'Il campo :attributo deve essere un ULID valido.',
    'uuid' => 'Il campo :attributo deve essere un UUID valido.',

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
