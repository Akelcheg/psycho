<?php

use yii\db\Schema;
use yii\db\Migration;

class m160204_115733_article extends Migration
{
    public function up() {
        $this->createTable('article', [
            'id' => Schema::TYPE_PK,
            'psychologist_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'is_owner' => Schema::TYPE_INTEGER . ' NOT NULL',
            'source' => Schema::TYPE_STRING,
            'title' => Schema::TYPE_STRING . ' NOT NULL',
            'text' => Schema::TYPE_TEXT . ' NOT NULL',
            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'created_at' => 'timestamp'
        ]);
    }

    public function down() {
        $this->dropTable('article');

    }
}
