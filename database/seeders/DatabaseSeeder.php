<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        DB::table('Azienda')->insert([
            ['ragioneSociale' => 'Eurospin', 'tipologia' => 'Supermercato', 'descrizione' => 'Lorem ipsum', 'via' => 'corso garibaldi', 'numeroCivico' => '2', 'citta' => 'Ancona', 'CAP' => '62014', 'logo' => 'Eurospin.gif', 'mail' => 'euro@libero.it', 'telefono' => '333'],
            ['ragioneSociale' => 'Conad', 'tipologia' => 'Supermercato', 'descrizione' => 'Lorem ipsum', 'via' => 'corso garibaldi', 'numeroCivico' => '3', 'citta' => 'Civitanova Marche', 'CAP' => '62014', 'logo' => 'Conad.gif', 'mail' => 'conad@libero.it', 'telefono' => '333'],
            ['ragioneSociale' => 'Coop', 'tipologia' => 'Supermercato', 'descrizione' => 'Lorem ipsum', 'via' => 'corso garibaldi', 'numeroCivico' => '4', 'citta' => 'Corridonia', 'CAP' => '62014', 'logo' => 'Coop.gif', 'mail' => 'coop@libero.it', 'telefono' => '333'],
            ['ragioneSociale' => 'Lidl', 'tipologia' => 'Supermercato', 'descrizione' => 'Lorem ipsum', 'via' => 'corso garibaldi', 'numeroCivico' => '5', 'citta' => 'Senigallia', 'CAP' => '62014', 'logo' => 'Lidl.gif', 'mail' => 'lidl@libero.it', 'telefono' => '333']
        ]);
        
        $datetimeI = Carbon::create(2023, 6, 16, 0, 0, 0);
        $datetimeF = Carbon::create(2023, 7, 16, 0, 0, 0);
        DB::table('Offerta')->insert([
            ['oggetto' => 'banane', 'descrizione' => 'Sconto su un minimo di spesa di 20 euro', 'modalita' => 'Sconto', 'luogoFruizione' => 'Ancona', 'dataInizio' => $datetimeI->format('Y-m-d H:i:s') , 'dataFine' => $datetimeF->format('Y-m-d H:i:s'), 'percentualeSconto' => 10, 'idAzienda' => 1, 'img' => 'banane.gif'],
            ['oggetto' => 'fragole', 'descrizione' => 'Prendi 3 paghi 2', 'modalita' => '3x2', 'luogoFruizione' => 'Corridonia', 'dataInizio' => $datetimeI->format('Y-m-d H:i:s') , 'dataFine' => $datetimeF->format('Y-m-d H:i:s'), 'percentualeSconto' => 0, 'idAzienda' => 3, 'img' => 'fragole.gif'],
            ['oggetto' => 'carne', 'descrizione' => 'Sconto su un minimo di spesa di 50 euro', 'modalita' => 'Sconto', 'luogoFruizione' => 'Senigallia', 'dataInizio' => $datetimeI->format('Y-m-d H:i:s') , 'dataFine' => $datetimeF->format('Y-m-d H:i:s'), 'percentualeSconto' => 50, 'idAzienda' => 4,'img' => 'carne.gif'],
            ['oggetto' => 'patate', 'descrizione' => 'Sconto senza una spesa minima', 'modalita' => 'Sconto', 'luogoFruizione' => 'Ancona', 'dataInizio' => $datetimeI->format('Y-m-d H:i:s') , 'dataFine' => $datetimeF->format('Y-m-d H:i:s'), 'percentualeSconto' => 10, 'idAzienda' => 1,'img' => 'patate.gif'],
            ['oggetto' => 'gelati', 'descrizione' => 'Prendi 3 paghi 2', 'modalita' => '3x2', 'luogoFruizione' => 'Civitanova Marche', 'dataInizio' => $datetimeI->format('Y-m-d H:i:s') , 'dataFine' => $datetimeF->format('Y-m-d H:i:s'), 'percentualeSconto' => 0, 'idAzienda' => 2,'img' => 'gelati.gif'],
            ['oggetto' => 'legumi', 'descrizione' => 'Prendi 3 paghi 2', 'modalita' => '3x2', 'luogoFruizione' => 'Civitanova Marche', 'dataInizio' => $datetimeI->format('Y-m-d H:i:s') , 'dataFine' => $datetimeF->format('Y-m-d H:i:s'), 'percentualeSconto' => 0, 'idAzienda' => 2,'img' => 'legumi.gif'],
            ['oggetto' => 'salumi', 'descrizione' => 'Sconto su un minimo di spesa di 20 euro', 'modalita' => 'Sconto', 'luogoFruizione' => 'Corridonia', 'dataInizio' => $datetimeI->format('Y-m-d H:i:s') , 'dataFine' => $datetimeF->format('Y-m-d H:i:s'), 'percentualeSconto' => 25, 'idAzienda' => 3,'img' =>'salumi.gif'],
            ['oggetto' => 'pasta', 'descrizione' => 'Sconto senza una spesa minima', 'modalita' => 'Sconto', 'luogoFruizione' => 'Senigallia', 'dataInizio' => $datetimeI->format('Y-m-d H:i:s') , 'dataFine' => $datetimeF->format('Y-m-d H:i:s'), 'percentualeSconto' => 10, 'idAzienda' => 4,'img' => 'pasta.gif']
        ]);
        
        DB::table('OffertaAbbinata')->insert([
            ['descrizione' => 'Lorem ipsum', 'dataInizio' => $datetimeI->format('Y-m-d H:i:s') , 'dataFine' => $datetimeF->format('Y-m-d H:i:s'), 'percentualeScontoAggiuntivo' => 10],
            ['descrizione' => 'Lorem ipsum', 'dataInizio' => $datetimeI->format('Y-m-d H:i:s') , 'dataFine' => $datetimeF->format('Y-m-d H:i:s'), 'percentualeScontoAggiuntivo' => 25],
            ['descrizione' => 'Lorem ipsum', 'dataInizio' => $datetimeI->format('Y-m-d H:i:s') , 'dataFine' => $datetimeF->format('Y-m-d H:i:s'), 'percentualeScontoAggiuntivo' => 18]
        ]);
        
        DB::table('Abbinamenti')->insert([
            ['idOfferta' => 1,'idOffertaAbbinata' => 1],
            ['idOfferta' => 2,'idOffertaAbbinata' => 1],
            ['idOfferta' => 3,'idOffertaAbbinata' => 2],
            ['idOfferta' => 4,'idOffertaAbbinata' => 2],
        ]);
        //livello 1=utente livello 2=staff livello 3=amministratore
        DB::table('Utente')->insert([
            ['nome' => 'sara','cognome' => 'beccerica','genere'=> 'f', 'eta' => '22', 'livello'=>'3','email' => 'sarabeccerica@gmail.com','telefono'=>'+39 333 3333333','username'=>'sarabella', 'password'=>'pwdsara'],
            ['nome' => 'loris','cognome' => 'attili','genere'=> 'm', 'eta' => '21', 'livello'=>'1','email' => 'lorisattili@gmail.com','telefono'=>'+39 333 3333333','username'=>'lorisstupido', 'password'=>'pwdlori'],
            ['nome' => 'rosanna','cognome' => 'dipietro','genere'=> 'f', 'eta' => '24', 'livello'=>'2','email' => 'rosanna@gmail.com','telefono'=>'+39 333 3333333','username'=>'rosamia', 'password'=>'pwdrosa'],
            ['nome' => 'gaia','cognome' => 'flori','genere'=> 'f', 'eta' => '24', 'livello'=>'2','email' => 'gaia@gmail.com','telefono'=>'+39 333 3333333','username'=>'gaiaduci', 'password'=>'pwdgaia'],
            ['nome' => 'mario','cognome' => 'rossi','genere'=> 'm', 'eta' => '24', 'livello'=>'1','email' => 'mario@gmail.com','telefono'=>'+39 333 3333333','username'=>'useruser', 'password'=>'XcjZpl9A'],
            ['nome' => 'luigi','cognome' => 'verdi','genere'=> 'm', 'eta' => '24', 'livello'=>'2','email' => 'luigi@gmail.com','telefono'=>'+39 333 3333333','username'=>'staffstaff', 'password'=>'XcjZpl9A'],
            ['nome' => 'marco','cognome' => 'bianci','genere'=> 'm', 'eta' => '24', 'livello'=>'3','email' => 'marco@gmail.com','telefono'=>'+39 333 3333333','username'=>'adminadmin', 'password'=>'XcjZpl9A'],
            
        ]);
        
        DB::table('StaffAziendale')->insert([
            ['idUtente'=>3,'idAzienda'=>1],
            ['idUtente'=>3,'idAzienda'=>2],
            ['idUtente'=>4,'idAzienda'=>3],
            ['idUtente'=>4,'idAzienda'=>4],
        ]);
    }
}
