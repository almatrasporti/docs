<?php

return [
    'Ecosistema' => 'docs/getting-started',
    'Analisi dei requisiti' => 'docs/requirements',
    'Architettura' => 'docs/architecture',
    'Infrastruttura' => 'docs/infrastructure',
    'Microservices' => [
        'url' => 'docs/microservices',
        'children' => [
            'common' => 'docs/microservices/common',
            'Injector' => 'docs/microservices/injector',
            'ETL Livello 1' => 'docs/microservices/etl_l1',
            'ETL Livello 2' => 'docs/microservices/etl_l2',
            'ETL Livello 3' => 'docs/microservices/etl_l3',
        ]
    ],
    'Deep learning model' => [
        'url' => 'docs/deep-learning-model',
        'children' => [
            'Analisi dati' => 'docs/deep-learning-model/analysis',
            'Costruzione modello' => 'docs/deep-learning-model/model-building',
            'Servizio web Prediction' => 'docs/deep-learning-model/prediction',
        ]
    ],
    'Web dashboard' => 'docs/web-dashboard',
    'Documentazione' => 'docs/documentation',
];
