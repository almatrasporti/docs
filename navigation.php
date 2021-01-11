<?php

return [
    'Getting Started' => 'docs/getting-started',
    'Analisi dei requisiti' => 'docs/requirements',
    'Infrastruttura' => 'docs/infrastructure',
    'Microservices' => [
        'url' => 'docs/microservices',
        'children' => [
            'Injector' => 'docs/microservices/injector',
            'ETL Livello 1' => 'docs/microservices/etl_l1',
            'ETL Livello 2' => 'docs/microservices/etl_l2',
            'ETL Livello 3' => 'docs/microservices/etl_l3',
            'Prediction' => 'docs/microservices/prediction',
        ]
    ],
    'Deep learning model' => [
        'url' => 'docs/deep-learning-model',
        'children' => [
            'Analisi dati' => 'docs/deep-learning-model/analysis',
            'Costruzione modello' => 'docs/deep-learning-model/model-building',
        ]
    ],
    'Web dashboard' => 'docs/web-dashboard',
];
