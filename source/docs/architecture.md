---
title: Archtiecture
description: System architecture
extends: _layouts.documentation
section: content
---

# Architettura del Sistema

La seguente figura mostra l'Architettura generale del Sistema:

![Architettura del Sistema](/assets/images/sistema-kafka.png)

- **Apache Kafka**: broker per lo scambio di messaggi fra i microservizi;
  
- **Data source**: la sorgente dati usata per la generazione degli eventi (i.e. le centraline a bordo dei veicoli);
  
- **Injector**: microservizio con funzione di hub per la raccolta degli eventi grezzi dal Data Source e l'immissione sul
broker;
  
- **ETL_L1**: microservizio per la lettura dei messaggi grezzi dal broker, li converte in formato JSON e li deposita su altri 
  due differenti topic del broker, uno finalizzato all'elaborazione batch ed uno a quella real-time;
  
- **ETL_L2**: microservizio per la lettura dei documenti json finalizzati all'elaborazione batch, e la successiva 
  scrittura su persistent storage database (MongoDB) secondo due differenti modalità;
  
- **ETL_L3**:  microservizio per la lettura dei documenti json finalizzati all'elaborazione real-time, e la successiva
  scrittura su in-memory database (Redis);
  
- **MongoDB**: server MongoDB per lo storage persistente dei dati;
  
- **Redis**:  server Redis per lo storage in-memory dei dati;
  
- **Machine Learning**: modulo Python per la generazione ed il serving di un modello di machine learning per la 
  predizione dei consumi;  
  
- **Web/mobile application**: applicativo web per la consultazione dei dati ricevuti in tempo reale e per l'ispezione 
  dello stato dei servizi del sistema.  