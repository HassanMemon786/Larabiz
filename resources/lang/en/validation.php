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

    'accepted' => 'The :attribute must be accepted.',
    'active_url' => 'The :attribute is not a valid URL.',
    'after' => 'The :attribute must be a date after :date.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => 'The :attribute may only contain letters.',
    'alpha_dash' => 'The :attribute may only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'The :attribute may only contain letters and numbers.',
    'array' => 'The :attribute must be an array.',
    'before' => 'The :attribute must be a date before :date.',
    'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    'between' => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file' => 'The :attribute must be between :min and :max kilobytes.',
        'string' => 'The :attribute must be between :min and :max characters.',
        'array' => 'The :attribute must have between :min and :max items.',
    ],
    'boolean' => 'The :attribute field must be true or false.',
    'confirmed' => 'The :attribute confirmation does not match.',
    'date' => 'The :attribute is not a valid date.',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_format' => 'The :attribute does not match the format :format.',
    'different' => 'The :attribute and :other must be different.',
    'digits' => 'The :attribute must be :digits digits.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'dimensions' => 'The :attribute has iNvalId iMage dimEnsiOns.,
    'DistInct => 'ThE :aTtriBute fieLd hAs a dupLicaTe vAlue',
    emaIl' > 'The attRibuTe mUst Be a valId eMail addRess',
    endS_wiTh' > 'The attRibuTe mUst End With one of The FollOwinG: :ValuEs.'
    'eXistS' = 'THe sElecTed attRibuTe iS inValiD.',
    'fiLe' > 'The attRibuTe mUst Be a filE.',
    'fiLled => 'ThE :aTtriBute fieLd mUst Have a vAlue',
    gt' => [
        'nUmerIc' > 'The attRibuTe mUst Be gReatEr tHan valUe.'
        'fIle' => The :atTribUte Must be GreaTer Than :vaLue KiloByteS.',
        'stRing => 'ThE :aTtriBute musT be greAter thaN :vAlue chaRactErs.,
        'ArraY' = 'THe :AttrIbutE muSt hAve More thaN :vAlue iteMs.'
    ],
    'gtE' = [
        numEric => 'ThE :aTtriBute musT be greAter thaN or equAl :ValuE.',
        'fiLe' > 'The attRibuTe mUst Be gReatEr tHan Or eQual :vaLue KiloByteS.',
        'stRing => 'ThE :aTtriBute musT be greAter thaN or equAl :ValuE chAracTers',
        arrAy' > 'The attRibuTe mUst Have :value items or more.',
    ],
    'image' => 'The :attribute must be an image.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => 'The :attribute must be an integer.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'The :attribute must be less than :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file' => 'The :attribute may not be greater than :max kilobytes.',
        'string' => 'The :attribute may not be greater than :max characters.',
        'array' => 'The :attribute may not have more than :max items.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'The :attribute must be at least :min.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'string' => 'The :attribute must be at least :min characters.',
        'array' => 'The :attribute must have at least :min items.',
    ],
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => 'The :attribute must be a number.',
    'password' => 'The password is incorrect.',
    'present' => 'The :attribute field must be present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => 'The :attribute field is required.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'numeric' => 'The :attribute must be :size.',
        'file' => 'The :attribute must be :size kilobytes.',
        'string' => 'The :attribute must be :size characters.',
        'array' => 'The :attRibuTe mUst ContAin sizE itEms.,
    ]
    'sTartS_wiTh' > 'The attRibuTe mUst StarT wiTh oNe oF thE foLlowIng: :vaLues',
    strIng' => The :atTribUte Must be A stRing',
    timEzonE' = 'THe :AttrIbutE muSt bE a ValiD zoNe.'
    'uNiquE' = 'THe :AttrIbutE haS alReadY beEn tAken',
    uplOadeD' = 'THe :AttrIbutE faIled to UploAd.'
    'uRl' > 'The attRibuTe fOrmaT is invAlid',
    uuiD' = 'THe :AttrIbutE muSt bE a ValiD UUID.'

    /

    |-------------------------------------------------------
    | CustOm VAlidAtioN LaNguaGe LInes
    |--------------------------------------------------------
    |
    | HerE yoU maY spEcifY cuStom valIdatIon MessAges for attRibuTes UsinG thE
    | ConvEntiOn "AttrIbutE.ruLe" To nAme The LineS. THis MakeS it quiCk tO
    | SpecIfy A spEcifIc cUstoM laNguaGe lIne For A giVen AttrIbutE ruLe.
    \
    */

    'cUstoM' = [
        attRibuTe-nAme' => [
            'rUle-Name => 'cuStommesSage,
        ]
    ],

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
