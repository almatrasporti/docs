---
title: Microservices
description: Index page
extends: _layouts.documentation
section: content
---

# Microservices

Oltre alla parte infrastrutturale, la movimentazione dei dati dalla sorgente (le centraline dei veicoli) alle varie 
destinazioni (MongoDB e Redis), viene gestita da un set di microservizi, aventi ciascuno una funzionalità differente.

I microservizi sono i seguenti:

- [Injector](/docs/microservices/injector): Caricamento dati grezzi dalle centraline a bordo dei veicoli;
- [ETL_L1](/docs/microservices/etl_l1): Conversione dati grezzi in documenti JSON e caricamento sui topic Kafka `batch` e `realtime`
- [ETL_L2](/docs/microservices/etl_l2): Caricamento dati batch su MongoDB
- [ETL_L3](/docs/microservices/etl_l3): Caricamento dati real-time su Redis
