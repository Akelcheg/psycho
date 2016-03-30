<?php

use yii\db\Schema;
use yii\db\Migration;

class m160204_091446_psychologist_top extends Migration
{
    public function up() {
        $this->createTable('psychologist_top', [
            'id' => Schema::TYPE_PK,
            'psychologist_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'created_at' => 'timestamp'
        ]);
    }

    public function down() {
        $this->dropTable('psychologist_top');

    }
}
