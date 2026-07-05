# Blog

![PHP](https://img.shields.io/badge/PHP-Web%20Application-777BB4?logo=php&logoColor=white)
![Stato](https://img.shields.io/badge/Stato-Progetto%20scolastico-orange)
![Anno](https://img.shields.io/badge/Anno-2024-lightgrey)
![Frontend](https://img.shields.io/badge/Frontend-HTML%20%2B%20CSS-blue)

**Blog** è un progetto scolastico realizzato nel **2024**: una web application in **PHP** per la gestione di articoli con autenticazione utente e operazioni CRUD sui post.

L’applicazione consente di visualizzare l’elenco dei post, accedere al dettaglio, creare nuovi contenuti, modificarli ed eliminarli, con gestione della sessione utente (login/logout).

---

## Indice

- [Descrizione](#descrizione)
- [Funzionalità](#funzionalità)
- [Struttura del progetto](#struttura-del-progetto)
- [Architettura](#architettura)
- [Tecnologie utilizzate](#tecnologie-utilizzate)
- [Flusso utente](#flusso-utente)
- [Configurazione](#configurazione)
- [Esecuzione del progetto](#esecuzione-del-progetto)
- [Note sul progetto](#note-sul-progetto)
- [Possibili miglioramenti futuri](#possibili-miglioramenti-futuri)
- [Autore](#autore)
- [Licenza](#licenza)

---

## Descrizione

L’obiettivo del progetto è implementare un blog dinamico con backend PHP e persistenza dati su database, includendo:

- autenticazione amministrativa;
- gestione completa dei post (creazione, modifica, eliminazione);
- visualizzazione homepage con contenuti;
- pagina di dettaglio per singolo articolo.

Il progetto è organizzato in file PHP funzionali, con componenti condivisi per header/footer, risorse statiche (CSS/img) e script SQL di supporto nel folder `db/`.

---

## Funzionalità

Il sistema permette di svolgere le principali operazioni di un blog:

- visualizzazione elenco post (`index.php`);
- visualizzazione dettaglio articolo (`dettaglio_post.php`);
- login utente (`login.php` + `auth.php`);
- logout (`logout.php`);
- creazione nuovo post (`nuovo_post.php` + `aggiungi_post_db.php`);
- modifica post esistente (`modifica_post.php`);
- eliminazione post (`elimina_post.php`);
- schermata dedicata gestione modifica/elimina (`modifica_elimina.php`);
- utilizzo di layout condiviso (`header.html`, `footer.html`);
- configurazione connessione DB (`variabili_connessione.php`).

---

## Struttura del progetto

```text
Blog/
│
├── index.php
├── dettaglio_post.php
├── nuovo_post.php
├── aggiungi_post_db.php
├── modifica_post.php
├── elimina_post.php
├── modifica_elimina.php
│
├── login.php
├── auth.php
├── logout.php
│
├── variabili_connessione.php
├── header.html
├── footer.html
│
├── css/
├── img/
├── db/
│
├── .gitattributes
└── .metadata/
```

---

## Architettura

Il progetto segue una separazione semplice e didattica tra pagine, logica di autenticazione, operazioni dati e risorse statiche.

### Area pubblica

- `index.php`: pagina principale del blog;
- `dettaglio_post.php`: dettaglio del singolo contenuto.

### Area autenticazione

- `login.php`: form/interfaccia login;
- `auth.php`: verifica credenziali e gestione accesso;
- `logout.php`: chiusura sessione.

### Area gestione contenuti (CRUD)

- `nuovo_post.php`: form creazione post;
- `aggiungi_post_db.php`: inserimento post nel database;
- `modifica_post.php`: aggiornamento contenuto;
- `elimina_post.php`: rimozione post;
- `modifica_elimina.php`: pagina di gestione operazioni.

### Componenti condivisi

- `header.html` e `footer.html`: layout riutilizzabile;
- `css/`: stile grafico;
- `img/`: immagini del progetto;
- `db/`: risorse SQL/database;
- `variabili_connessione.php`: parametri connessione DB.

---

## Tecnologie utilizzate

- **PHP** (logica backend e rendering dinamico)
- **CSS** (presentazione)
- **HTML** (struttura UI)
- Database relazionale tramite connessione configurata da file PHP

Composizione linguaggi repository:

- PHP: **65.5%**
- CSS: **32.6%**
- HTML: **1.9%**

---

## Flusso utente

Un flusso tipico dell’applicazione:

1. accesso alla homepage con elenco post;
2. apertura dettaglio di un articolo;
3. login amministratore;
4. creazione nuovo post oppure modifica/eliminazione post esistente;
5. logout e ritorno alla navigazione pubblica.

---

## Configurazione

La connessione al database è gestita da:

- `variabili_connessione.php`

Prima dell’avvio in locale:

- impostare host, username, password e nome database corretti;
- verificare eventuali script SQL presenti nella cartella `db/`.

---

## Esecuzione del progetto

Il progetto può essere eseguito in ambiente PHP locale (XAMPP/WAMP/MAMP o equivalente).

### Avvio rapido (PHP built-in server)

Dalla root del progetto:

```bash
php -S localhost:8000
```

Poi aprire:

```text
http://localhost:8000/index.php
```

---

## Note sul progetto

Questo repository contiene un **progetto scolastico del 2024**, realizzato con finalità didattiche per esercitarsi su:

- sviluppo web lato server in PHP;
- autenticazione e sessioni;
- operazioni CRUD su database;
- composizione layout con componenti riutilizzabili;
- organizzazione risorse frontend.

---

## Possibili miglioramenti futuri

- migrazione verso architettura MVC più strutturata;
- validazioni server/client più robuste;
- protezioni CSRF e hardening sicurezza login;
- paginazione e ricerca post;
- upload immagini associato ai post;
- gestione ruoli (admin/editor);
- test automatici e pipeline CI.

---

## Autore

Progetto realizzato da **Samuel Ulivi**.

---

## Licenza

Questo progetto è stato sviluppato per scopi scolastici e didattici.
