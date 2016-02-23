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
        DB::unprepared('
        CREATE TRIGGER tr_Update_Mensalidade_Apos_Pagamento AFTER INSERT ON `pagamento` FOR EACH ROW
        BEGIN
         UPDATE mensalidade SET mes_status="Pago" WHERE id=NEW.pag_mes_id;
        END
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        DB::unprepared('DROP TRIGGER `tr_User_Default_Member_Role`');
    }
}
