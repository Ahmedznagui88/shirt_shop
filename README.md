Quando si avvia un nuovo progetto:

	◦	Npm i bootsrap
	◦	@vite
	◦	Import bootstrap da CSS e JS
	◦	Npm run dev
	◦	Scaffolding
DATABASE
	◦	Avviare il DB da terminale con mysql -u root -p
	◦	Creare un DB 
	◦	Modificare il .ENV su LARAVEL nome database e password
	◦	Avviare TablePlus e nominare un nuovo DB(NOMINARE COME DB MYSQL)
FORTIFY
	◦	Installare i vari pacchetti all’interno della documentazione
	◦	composer require laravel/fortify
	◦	php artisan vendor:publish --provider="Laravel\Fortify\FortifyServiceProvider"
	◦	php artisan migrate
	◦	Dopo questa operazione aggiungere App\Providers\FortifyServiceProvider::class nella sezione config->app-> ed inserirlo nella sezione providers
	◦	Copiare Fortify::loginView(function () {return view('auth.login');}); (idem per REGISTER: quindi cancellare login e scrivere register) nella funzione boot all’interno della cartella Providers->FortifyServiceProvider.php
	◦	RICORDA nel momento in cui si effettua il login all’interno della pagina va modificata la pagina home quindi recarsi in: RouteServiceProvider.php -> nella funzione public const HOME = '/home'
AUTH
	◦	Creare un componente auth
	◦	Creare file login e register.blade.php
	◦	Creare il form per il login e logout collegare le vaie rotte e le viste (vedi lezione recap)
CRUD
	◦	COMANDO UNICO PER LANCIARE IL MODEL, MIGRATION E CONTROLLER
	◦	PHP ARTISAN MAKE:MODEL  (seguito dal nome del DB che si vuole creare) -MCR
	◦	Una volta lanciato il comando compaiono nella sezione MIGRATIONS(SEZIONE DATABASE)
	◦	CREARE le varie tabelle per il DB in questa sezione 
	•	   public function up(): void {
	•	        Schema::create('tshirts', function (Blueprint $table) {
	•	            $table->id();
            		inserire qui dentro le tabelle che formeranno il DB
	•	            $table->timestamps();
	•	        });
	•	    }
	◦	 Istruire il modello: quindi vai inella sezione APP-> MODELS->(seguito dal nome del DB)-> protected $fillable = [all’interno inserire il modello delle tabelle]
Route
	◦	Creare un rotta es:TshirtController  (Convention over configuration)
	◦	Da notare quando si lanciano i comandi del crud questi creeranno dei metodi prestabiliti che serviranno a gestire rotte e database, i metodi sono index, create/store, edit/update, show e delete
	⁃	La funzione CREATE ritorna una vista dove all’interno gestiamo ad esempio un form 
	⁃	la funzione STORE prende i dati dalla request e con il mass assagnment va a creare un nuovo oggetto di class es’book’
	⁃	Quindi lansciare sul terminale il comando php artisan make:request TshirtRequest per creare una request dopo di che nella fusione request si aggiunge il nome es:public function store(TshirtRequest $request)->vai nella request creata precedentemente public function authorize(): bool {return true;}.
	⁃	Sempre nel CREATE ritorna una vista dove all’interno gestiamo ad esempio un form
	- La funzione Show mostra il dettaglio di una risorsa è deve essere sempre parametrica, importante dopo aver creato la rotta (es: book show) nel controller ritornerà una vista aggiungendo compact(‘book’) con all’interno il nome della rotta (es:book).
	-la funzione Edit modifica una risorsa anche quest’ultima dev’essere una rotta parametrica
	-la funzione update modifica una risorsa anche quest’ultima dev’essere una rotta parametrica, nel controller andremo a gestire la request dell’oggetto.




