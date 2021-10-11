<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pengguna extends Migration
{
    public function up()
    {
        $this->forge->addFlied([
            'id'=> [
                'type'               => 'INT', 'constrain' => 4,
                'unsigned'           => true, 
                'auto_increment'     => true 
            ],
            'nama' => [
                'type'               =>'VARCHAR', 'constrain' => 50,
                'null'               => false 
            ],
            'password' => [
                'type'               =>'VARCHAR', 'constrain' => 32,
            ]  
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('Pengguna');
    }

    public function down()
    {
        $this->forge->dropTable('Pengguna');
    }
}
