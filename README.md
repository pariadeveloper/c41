# test-mid-level-2023 ENG

Test for the recruitment of Mid-level Developers

## The Task

This test involves the creation of both frontend and backend code snippets.

### Frontend
We provide you with a **_index.html_** file with the html structure already created. You have to create the **JS** code that implements these 3 features:

- **Loading item list from backend** <br>
For the list UI use https://getbootstrap.com/docs/5.0/components/list-group/ and it must be placed in the **UL _#the-list_**. The header of the list has already been implemented in the provided html, use it as a reference for the parameters to display. Each item must also have a remove from list button.

- **Adding an item to the list** <br>
The element to be added must be sent to the backend which will save it. Subsequently, upon completion of the save, the list of elements must be reloaded from the backend.

- **Removing an item from the list** <br>
Just like the add functionality, the removal has to be done calling the backend, and then the list has to be reloaded.

All 3 features must be implemented as an **AJAX** call with _jQuery_.
    
### Backends
For the backend you have to implement the php files needed for the frontend **AJAX** calls to work. The data exchange must take place in **_JSON_** format.
We provide you with a **_database.sql_** file that you must use to import the structure and precompiled data into your database.

To implement the features you must create a php class that implements the methods necessary for the operation of the calls and must extend the **controller** class. You will also need to implement the database connection class (**_dbconnection.php_** file) using the **PDO** libraries. This class is already instantiated by the controller class. Is preferred to store the db authentication data (user, password, db_name) in an xml file.
To generate the value of the _uuid_ field you need to use the **_generateUUID_** static method of the **utility** static class.

**ATTENTION:** the database expects logical removal of items, so be careful while implementing the data removal and loading features.

## How to send us your completed test
You can upload the source code to your _GitHub_ and share the link to the repository with us. Be careful to make the repository **public**, otherwise we won't be able to view the code.



# test-mid-level-2023 ITA

Test per l'assunzione di Sviluppatori Mid-level

## Il Task

Questo test prevede la creazione di snippets di codice sia frontend che backend.

### Frontend
Ti forniamo un file **_index.html_** con la struttura html già creata. Tu dovrai creare il codice **JS** che implementa queste 3 funzionalità:

- **Caricamento della lista degli elementi dal backend** <br>
Per la UI della lista usa https://getbootstrap.com/docs/5.0/components/list-group/ e deve essere posizionata nel'**UL _#the-list_**. L'header della lista è già stato implementato nell'html fornito, usalo come reference per i paramentri da mostrare. Ogni elemento deve avere anche un bottone di rimozione dalla lista.

- **Aggiunta di un elemento alla lista** <br>
L'elemento da aggiungere deve essere mandato al backend che provvederà a salvarlo. Successivamente, al completamento del salvataggio, bisogna ricaricare la lista degli elementi dal backend.

- **Rimozione di un elemento dalla lista** <br>
Esattamente come la funzionalità di aggiunta, la rimozione deve essere fatta dal backend, e successivamente bisogna ricaricare la lista.

Tutte e 3 le funzionalità devono essere implementate come una chiamata **AJAX** di _jQuery_.
    
### Backend
Per il backend devi implementare i file php necessari per il funzionamento delle chiamate **AJAX** del frontend. Lo scambio di dati deve avvenire in formato **_JSON_**.
Ti forniamo un file **_database.sql_** che devi usare per importare nel tuo database la struttura ed i dati precompilati.

Per implementare le funzionalità devi creare una classe php che implementa i metodi necessari al funzionamento delle chiamate e deve estendere la classe **controller**. Dovrai implementare anche la classe di connessione al database (file **_dbconnection.php_**) usando le librerie **PDO**. Questa classe viene già istanziata dalla classe controller. E' preferibile memorizzare i dati di autenticazione del db (user, password, db_name) in un file xml.
Per generare il valore del campo _uuid_ devi usare il metodo statico **_generateUUID_** della classe statica **utility**.

**N.B.:** il database prevede la rimozione logica degli elementi, quindi fa attenzione mentre implementi le funzionalità di rimozione ed caricamento dati.

## Come inviarci il test completato
Puoi caricare il codice sorgente sul tuo _GitHub_ e condividere con noi il link al repository. Fai attenzione a rendere il repository **pubblico**, altrimenti non potremo visionare il codice.
#   c 4 1  
 