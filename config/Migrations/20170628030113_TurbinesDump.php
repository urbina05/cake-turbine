<?php
use Migrations\AbstractMigration;

class TurbinesDump extends AbstractMigration
{
    public function up()
    {

        $this->table('turbines')
            ->addColumn('model', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('description', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('price', 'decimal', [
                'default' => null,
                'null' => false,
                'precision' => 10,
                'scale' => 2,
                'signed' => false,
            ])
            ->addColumn('created', 'datetime', [
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'limit' => null,
                'null' => false,
            ])
            ->create();
    }

    public function down()
    {
        $this->dropTable('turbines');
    }
}
