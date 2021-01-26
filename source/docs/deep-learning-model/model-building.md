---
title: Costruzione modello
description: Costruzione del modello di deep learning
extends: _layouts.documentation
section: content
---

# Costruzione e addestramento del modello di previsione dei consumi

<img style="float: left; margin:auto; margin-right: 8px;" src="/assets/img/kaggle_32x32.png"><a href="https://www.kaggle.com/robertogallea/almatrasporti-costruzione-modello/" target="_blank">https://www.kaggle.com/robertogallea/almatrasporti-costruzione-modello/</a>

Questa fase ha lo scopo di costruire un modello basato su reti neurali deep finalizzato alla previsione dei consumi dei veicoli della flotta Almatrasporti.

Lo studio analizza e confronta tre differenti tipologie di modello basate su altrettante architetture, nello specifico:

- Reti RNN (Recurrent Nueral Networks)
- Reti LSTM (Long-short term memory) di tipo stacked
- Rete Autoencoder + LSTM

Prima della fase di definizione dei modelli veri e propri, vengono operate delle operazioni di *data cleaning* e  *data preprocessing*, necessarie per il corretto training dei modelli.

Successivamente i tre modelli vengono definiti, addestrati e valutati singolarmente, mostrandone le misure di performance individuali. Tutti i modelli hanno le seguenti caratteristiche comuni:

- Vengono addestrate su una sequenze `s_t` di campioni in `[t-11, t]`
- Predicono l'uscita del valore a `t+1`
- Implementano uno schema di _EarlyStopping_ per interrompere l'esecuzione del training qualora non vi siano miglioramenti nella misura di validazione negli ultimi 10 passi di training

Successivamente viene condotto un confronto dei tre modelli per valutare se ve ne sia uno migliore in base a considerazioni legate alla lunghezza delle sequenze di input utilizzate.

Infine, viene mostrato come la rete create si sia generalizzata per l'addestramento di serie multivariate.

Il notebook è strutturato come segue:

* [1. Importazione librerie](#1) <br>
* [2. Caricamento e *preprocessing* dei dati](#2) <br>
* [3. Suddivisione dei dati in *training* e *test* *set*](#3) <br>
* [4. Generazione sequenze di input ed output per il training](#4) <br>
* [5. Modello RNN](#5) <br>
* [6. Modello Stacked LSTM](#6) <br>
* [7. Modello Autoencoder LSTM](#7) <br>
* [8. Confronto dei modelli](#8) <br>
* [9. Esportazione dei modelli](#9) <br>
* [10. Benchmarking al variare della lunghezza della sequenza](#10) <br>
* [11. Bonus: rete multivariata](#11) <br>
* [12. Conclusioni](#12) <br>
