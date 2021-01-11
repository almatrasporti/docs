---
title: Analisi dei requisiti
description: Analisi dei requisiti
extends: _layouts.documentation
section: content
---

# Analisi dei requisiti

In questa sezione viene illustrata una generica analisi dei requisiti per il sistema Almatrasporti.

## Introduzione

AlmaTrasporti è un’azienda specializzata in trasporti e logistica, ha diverse sedi sul territorio italiano ed estero
ed un buon fatturato annuo. Di recente ha deciso di investire nelle nuove tecnologie, in particolare afferenti
agli ambiti IoT e Big Data & AI. Obiettivo dell’azienda è quello di efficientare i consumi della propria flotta di
autovetture acquisendo conoscenza dai dati per poi prendere decisioni consapevoli e mirate al risparmio.

Il primo passo dell’investimento che l’azienda ha effettuato è stato quello di acquistare una serie di centraline
intelligenti da installare sulle proprie vetture, in grado di rilevare i seguenti parametri:

- `VinVehicle`: identificativo del veicolo
- `Timestamp`: timestamp di emissione dell’evento
- `Driver`: matricola conducente
- `Odometer`: distanza in metri coperta dal veicolo
- `LifeConsumption`: consumo carburante in millilitri
- `Position.lon`: longitudine
- `Position.lat`: latitudine
- `Position.altitude`: altitudine (sopra il livello del mare)
- `Position.heading`: direzione
- `Position.speed`: velocità in km/h
- `Position.satellites`: numero di satelliti usati per la triangolazione

Il Sistema che si intende realizzare deve permettere la raccolta e l'elaborazione dei dati dalle centraline installate
sui veicoli, al fine di supportare le decisioni in ottica di risparmio consumi. Inoltre deve permettere di effettuare il
tracking in tempo reale dei veicoli della flotta.

## Sistema proposto

### Requisiti funzionali
Il sistema deve realizzare le seguenti funzionalità:

- Effettuare la raccolta dati dai veicoli;
- Effettuare lo storage dei dati per la successiva elaborazione sia in tempo reale che in modalità batch;
- Implementare tecniche di IA/ML per effettuare predizioni dei consumi sulla base delle serie storiche dei consumi.

### Requisiti non funzionali
Ulteriori requisiti che devono essere soddisfatti dal sistema sono i seguenti:

**Affidabilità**:

- garanzia di corretta trasmissione dei messaggi nella medesima sequenza in cui sono stati ricevuti;
- rimozione eventuali messaggi duplicati prima dell'elaborazione;
- tolleranza ai malfunzionamenti (se una parte del sistema viene meno, il normale funzionamento deve riprendere al 
  suo ripristino) ;
- possibilità di effettuare nuovamente il playback dei messaggi in caso di perdita dati, secondo il modello di _Event 
  Projection_ e _CQRS_.
  
**Performance**:

- possibilità scalare le performance aumentando il numero di risorse/servizi.
- esecuzione di alcune elaborazioni in modalità real-time o near real-time.

**Implementazione**:

- Utilizzo, ove possibile, di sistemi a container, Infrastructure as Code ed altre prassi DevOpsSec.
- Realizzazione mediante microservizi al fine di ottenere il massimo disaccoppiamento fra le componenti del Sistema.

**Interfaccia**:

- Interrogazione del sistema mediante interfaccia web.


### Modello del sistema

**Scenari**


### Glossario