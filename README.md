# PHP MVC framework

Questo progetto è un fork per gli studenti del Marconi, fork del progetto di [daveh](https://github.com/daveh/php-mvc).

## Istruzioni
Le istruzioni di seguito sono per far funzionare il progetto sul server della scuola. Per indicazioni generiche, far riferimento direttamente al repository del progetto di daveh.
1. Fare un fork di questo progetto (è un progetto template)
2. Clonarlo nella cartella del proprio utente sul server della scuola
3. Da terminale, lanciare `composer update`
4. Rinominare i file `.htaccess.rename` in `.htaccess` e modificarlo sostituendo al suo interno `nomeutente` con il vostro nome utente con il quale avete fatto l'accesso
5. Eseguire la stessa operazione del punto precedente anche con il file `public/.htaccess`
6. Se tutto è andato a buon fine, dovreste vedere il vostro sito live accedendo direttamente alla cartella del progetto sul server della scuola
7. Creare rotte, controllers, viste e modelli in base alle esigenze

### Connessione al database
Rispetto al progetto originale, che usava PDO, qui usiamo mysqli per connetterci al database.

Per impostare i parametri di configurazione per la connessione al db, rinominare `App/Config.php.rename` in `App/Config.php` e modificare le variabili al suo interno.

Per fare delle prove, è presente un file `create_users.sql` per creare una tabella di esempio che funziona con il codice del progetto.
