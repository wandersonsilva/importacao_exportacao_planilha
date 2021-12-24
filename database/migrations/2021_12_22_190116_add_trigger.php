<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Cria a Função F_INSERE_IMPORTACAO
        DB::unprepared('
        CREATE OR REPLACE FUNCTION F_INSERE_IMPORTACAO() RETURNS TRIGGER AS $T_NUMERA_IMPORTACAO$
            BEGIN
                if(OLD.NUMERO_IMPORTACAO IS NULL)
                    THEN UPDATE bulk
                    SET numero_importacao = 1;			
                END IF;
                RETURN NEW;
            END;
            $T_NUMERA_IMPORTACAO$ LANGUAGE PLPGSQL;
        ');
        
        //Cria a Trigger T_NUMERA_IMPORTACAO
        DB::unprepared('
            CREATE OR REPLACE TRIGGER T_NUMERA_IMPORTACAO AFTER
            INSERT ON BULK
            FOR EACH ROW EXECUTE FUNCTION F_INSERE_IMPORTACAO()
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Exclui a Trigger   
        DB::unprepared('        
            DROP TRIGGER T_NUMERA_IMPORTACAO ON BULK
        ');

        // Exclui a Função
        DB::unprepared('                    
            DROP FUNCTION F_INSERE_IMPORTACAO()
        ');

    }
}
