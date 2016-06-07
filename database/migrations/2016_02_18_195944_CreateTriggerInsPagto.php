<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTriggerInsPagto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        /*DB::unprepared('
        CREATE TRIGGER tr_Update_Mensalidade_Apos_Pagamento AFTER INSERT ON `pagamento` FOR EACH ROW
        BEGIN
         UPDATE mensalidade SET mes_status="Pago" WHERE id=NEW.pag_mes_id;
        END
        ');*/
        DB::unprepared("
        CREATE OR REPLACE FUNCTION process_mensalidade_pagamento() RETURNS TRIGGER AS \$trg_mes_pagto\$
            BEGIN
                UPDATE mensalidade SET mes_status='Pago' WHERE id=NEW.pag_mes_id;
                RETURN NULL; -- result is ignored since this is an AFTER trigger
            END;
        \$trg_mes_pagto\$ LANGUAGE plpgsql;

        CREATE TRIGGER trg_mes_pagto
        AFTER INSERT ON pagamento
            FOR EACH ROW EXECUTE PROCEDURE process_mensalidade_pagamento();
            ");
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        DB::unprepared('DROP TRIGGER IF EXISTS tr_Update_Mensalidade_Apos_Pagamento');
        //DB::unprepared('DROP TRIGGER `tr_User_Default_Member_Role`');

    }
}
