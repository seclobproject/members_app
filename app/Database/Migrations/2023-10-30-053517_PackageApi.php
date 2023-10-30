<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PackageApi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'BIGINT',
                'constraint' => 255,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'package_name' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'package_amount' => [
                'type' => 'INT',
                'constraint' => '255',
            ],
            // 'description' => [
            //     'type' => 'TEXT'
            // ],
            // 'created_at' => [
            //     'type' => 'TIMESTAMP',
            //     'null' => true
            // ],
            // 'updated_at' => [
            //     'type' => 'TIMESTAMP',
            //     'null' => true
            // ],
            // 'deleted_at' => [
            //     'type' => 'TIMESTAMP',
            //     'null' => true
            // ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('package_tbl');
    }

    public function down()
    {
        $this->forge->dropTable('package_tbl');
    }
}