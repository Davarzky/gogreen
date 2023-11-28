<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Contact extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id"=> [
                "type"=> "int",
                "auto_increment" => true,
            ],
            "name"=> [
                "type" => "varchar",
                "constraint" => 50,
                "null" => true,
            ],
            "email"=> [
                "type"=> "varchar",
                "constraint" => 50,
                "null" => true,

            ],
            "subject" => [
                "type" => "varchar",
                "constraint" => "255",
                "null" => true,
        
            ],
            "message"=> [
                "type" => "text",
                "null" => true
            ],
        ]);
        $this->forge->addKey("id", true);
        $this->forge->createTable("Contact");
    }

    public function down()
    {
        $this->forge->dropTable("Contact");
    }
}
