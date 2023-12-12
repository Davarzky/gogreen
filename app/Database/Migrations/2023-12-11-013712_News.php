<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class News extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id"=> [
                "type"=> "int",
                "auto_increment" => true,
            ],
            "gambar"=> [
                "type" => "varchar",
                "constraint" => 255,
                "null" => true,
            ],
            "name"=> [
                "type"=> "text",
                "null" => true,

            ],
            "caption" => [
                "type" => "text",
                "null" => true,
        
            ],
        ]);
        $this->forge->addKey("id", true);
        $this->forge->createTable("News");
    }

    public function down()
    {
        $this->forge->dropTable("News");
    }
}
