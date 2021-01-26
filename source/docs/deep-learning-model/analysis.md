---
title: Analisi dati
description: Analisi dei dati dei consumi
extends: _layouts.documentation
section: content
---

# **Analisi descrittiva dei dati dei consumi della flotta veicoli**

<img style="float: left; margin:auto; margin-right: 8px;" src="/assets/img/kaggle_32x32.png"><a href="https://www.kaggle.com/robertogallea/almatrasporti-analisi-descrittiva" target="_blank">https://www.kaggle.com/robertogallea/almatrasporti-analisi-descrittiva</a>

**AlmaTrasporti** è un’azienda specializzata in trasporti e logistica ed ha diverse sedi sul territorio italiano ed estero. Obiettivo dell’azienda è quello di efficientare i consumi della propria flotta di autovetture acquisendo conoscenza dai dati per poi prendere decisioni consapevoli e mirate al risparmio.

Il primo passo dell’investimento che l’azienda ha effettuato è stato quello di acquistare una serie di centraline intelligenti da installare sulle proprie vetture, in grado di rilevare i seguenti parametri:


*   `VinVehicle`: identificativo del veicolo
*   `Timestamp`: timestamp di emissione dell’evento
*   `Driver`: matricola conducente
*   `Odometer`: distanza in metri coperta dal veicolo
*   `LifeConsumption`: consumo carburante in millilitri
*   `Position.lon`: longitudine
*   `Position.lat`: latitudine
*   `Position.altitude`: altitudine (sopra il livello del mare)
*   `Position.heading`: direzione
*   `Position.speed`: velocità in km/h
*   `Position.satellites`: numero di satelliti usati per la triangolazione


La centralina produce dati ad intervalli regolari e li confeziona per inviarli sottoforma di eventi ad una piattaforma di acquisizione dati di proprietà dell’azienda. Per ogni evento è presente un timestamp che indica il momento esatto in cui è stato confezionato il messaggio; il *timestamp* è espresso in secondi secondo lo *standard epoch date*.

Al fine di prevedere i consumi dei veicoloi monitorati, attraverso l’utilizzo di algoritmi di intelligenza artificiale applicati alle
*Time Series*, si utilizzerà il file *dati_elaborati.csv* che contiene 9 delle variabili sopra descritte e due funzioni delle variabili *Odometer* e *LifeConsumption*:


*   `DeltaOdometer`: incremento misura odometro rispetto al *timestamp* precedente in metri
*   `DeltaLifeConsumption`: incremento consumo carburante rispetto al *timestamp* precedente in millilitri

I dati vengono rilevati ogni 30 minuti in un arco temporale di 6 mesi, da Giugno a Dicembre 2020. 

* [1.Importazione delle librerie](#1) <br>
* [2.Caricamento e *preprocessing* dei dati](#2) <br>
* [3.Creazione del nuovo *dataframe*](#3) <br>
* [4.Definizione della funzione *equipartite* ed imputazione dei dati mancanti](#4) <br>
* [5.Distribuzione della variabile *DeltaLifeConsumption*](#5)<br>
* [6.Boxplot della variabile *DeltaLifeConsumption* nelle 24 ore e nei diversi giorni della settimana](#6)<br>
* [7.Medie mobili di ordine k delle variabile *DeltaLifeConsumption*](#7)<br>
* [8.Correlazione lineare fra i veicoli rispetto alla variabile *DeltaLifeConsumption*](#8)<br>
* [9.Conclusioni](#9)<br>