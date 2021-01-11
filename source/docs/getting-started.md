---
title: Getting-started
description: Getting Started
extends: _layouts.documentation
section: content
---

# Ecosistema
Almatrasporti è un ecosistema integrato composto da servizi proprietari e tools esterni, alcuni dei quali possono essere
installati tramite container docker.

## Requisiti

Per il corretto funzionamento, Almatrasporti necessità di un sistema (Linux, Mac o Windows) con le seguenti dipendenze 
installate:

- [Kafka + Zookeeper](/docs/getting-started/infrastructure) (istanze singole o multiple), file docker compose incluso
- Server MongoDB
- Server Redis
- PHP 7.3+
- Python 3.8+
- Java 8 Runtime
  

> Nota: questi sono gli strumenti consigliati, ma non si esclude che possano essere sufficienti configurazioni 
> alternative e/o versioni differenti dei software elencati.


## Tool proprietari
Per il corretto funzionamento è necessario inoltre includere i seguenti strumenti proprietari:

- Servizi Java proprietari ([Injector](/docs/microservices/injector), [ETL_L1](/docs/microservices/etl_l1), [ETL_L2](/docs/microservices/etl_l2), [ETL_L3](/docs/microservices/etl_l3), [PredictionService](/docs/microservices/predictor))
- [Dashboard Webapp](/docs/web-dashboard)
- Notebook Jupyter per l'[analisi dei dati](/docs/deep-learning-model/analysis) e per la [generazione del modello di predizione](/docs/deep-learning-model/model-building)