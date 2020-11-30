<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%categories}}`.
 */
class m201129_080808_create_categories_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%categories}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(64)->notNull()->comment('Наименование'),
            'createdAt' => $this->dateTime()->notNull()->comment('Дата создания'),
            'updatedAt' => $this->dateTime()->comment('Дата изменения')
        ]);

        $this->addColumn('{{%posts}}', 'categoryID',
            $this->integer()->comment('Категория'));
        $this->addForeignKey('fk_posts_categoryId', '{{%posts}}', 'categoryId',
            '{{%categories}}', 'id', 'SET NULL');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_posts_categoryId', '{{%posts}}');
        $this->dropColumn('{{%posts}}', 'categoryID');
        $this->dropTable('{{%categories}}');
    }
}
