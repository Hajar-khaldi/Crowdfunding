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

    'accepted'             => 'Le :attribute doit être accepté.',
    'active_url'           => 'Le :attribute n\'est pas une URL valide.',
    'after'                => 'Le :attribute doit être une date après :date.',
    'alpha'                => 'Le :attribute ne peut contenir que des lettres.',
    'alpha_dash'           => 'Le :attribute ne peut contenir que des lettres, chiffres et tirets.',
    "ascii_only"           => "Le :attribute ne peut contenir que des lettres, chiffres et tirets.",
    'alpha_num'            => 'Le :attribute ne peut contenir que des lettres and numbers.',
    'array'                => 'Le :attribute doit être un tableau.',
    'before'               => 'Le :attribute doit être une date avant :date.',
    'between'              => [
        'numeric' => 'Le :attribute Doit être entre :min et :max.',
        'file'    => 'Le :attribute Doit être entre :min et :max kilooctets.',
        'string'  => 'Le :attribute Doit être entre :min et :max caractères.',
        'array'   => 'Le :attribute must have between :min et :max articles.',
    ],
    'boolean'              => 'Le :attribute champ doit être vrai ou faux.',
    'confirmed'            => 'Le :attribute cla confirmation ne correspond pas.',
    'date'                 => 'Le :attribute Ce n\'est pas une date valide.',
    'date_format'          => 'Le :attribute ne correspond pas au format :format.',
    'different'            => 'Le :attribute et :other doit être différent.',
    'digits'               => 'Le :attribute doit être :digits chiffres.',
    'digits_between'       => 'Le :attribute Doit être entre :min et :max chiffres.',
    'dimensions'           => 'Le :attribute a des dimensions d\'image non valides.',
    'distinct'             => 'Le :attribute le champ a une valeur en double.',
    'email'                => 'Le :attribute Doit être une adresse e-mail valide.',
    'exists'               => 'La sélection :attribute est invalide.',
    'file'                 => 'Le :attribute doit être un fichier.',
    'filled'               => 'Le :attribute Champ requis.',
    'image'                => 'Le :attribute doit être une image.',
    'in'                   => 'La sélection :attribute est invalide.',
    'in_array'             => 'Le :attributele champ n\'existe pas dans :other.',
    'integer'              => 'Le :attribute doit être un entier.',
    'ip'                   => 'Le :attribute doit être une adresse IP valide.',
    'json'                 => 'Le :attribute doit être une chaîne JSON valide.',
    'max'                  => [
        'numeric' => 'Le :attribute ne peut être supérieur à :max.',
        'file'    => 'Le :attribute ne peut être supérieur à :max kilooctets.',
        'string'  => 'Le :attribute ne peut être supérieur à :max caractères.',
        'array'   => 'Le :attribute ne peut pas avoir plus de :max articles.',
    ],
    'mimes'                => 'Le :attribute doit être un fichier de type: :values.',
    'min'                  => [
        'numeric' => 'Le :attribute doit être au moins :min.',
        'file'    => 'Le :attribute doit être au moins :min kilooctets.',
        'string'  => 'Le :attribute doit être au moins :min caractères.',
        'array'   => 'Le :attribute must have at least :min articles.',
    ],
    'not_in'               => 'La sélection :attribute est invalide.',
    'numeric'              => 'Le :attribute must be a number.',
    'present'              => 'Le :attribute field must be present.',
    'regex'                => 'Le :attribute format est invalide.',
    'required'             => 'Le :attribute field is required.',
    'required_if'          => 'Le :attribute field is required when :other is :value.',
    'required_unless'      => 'Le :attribute field is required unless :other is in :values.',
    'required_with'        => 'Le :attribute field is required when :values is present.',
    'required_with_all'    => 'Le :attribute field is required when :values is present.',
    'required_without'     => 'Le :attribute field is required when :values is not present.',
    'required_without_all' => 'Le :attribute field is required when none of :values are present.',
    'same'                 => 'Le :attribute and :other must match.',
    'size'                 => [
        'numeric' => 'Le :attribute must be :size.',
        'file'    => 'Le :attribute must be :size kilooctets.',
        'string'  => 'Le :attribute must be :size caractères.',
        'array'   => 'Le :attribute must contain :size articles.',
    ],
    'string'               => 'Le :attribute must be a string.',
    'timezone'             => 'Le :attribute must be a valid zone.',
    'unique'               => 'Le :attribute has already been taken.',
    'url'                  => 'Le :attribute format est invalide.',
    "letters"              => "The username must contain at least one letter or number",
    "account_not_confirmed" => "Your account is not confirmed, please check your email",
	"user_suspended"        => "Your account has been suspended, please contact us if an error",

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
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
      'agree_gdpr' => 'box I agree with the processing of personal data',
    ],

];
