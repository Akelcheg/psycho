<?php

use yii\db\Schema;
use yii\db\Migration;

class m160310_101814_quiz extends Migration {
    public function up() {
        $this->createTable('quiz', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . ' NOT NULL',
            'description' => Schema::TYPE_TEXT . ' NOT NULL',
            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'created_at' => 'timestamp'
        ]);
    }

    public function down() {
        $this->dropTable('quiz');

    }

}
