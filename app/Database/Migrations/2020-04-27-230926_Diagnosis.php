<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Diagnosis extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			],
			'id_penyakit' => [
				'type' => 'INT',			
			],
			'list_gejala' => [
				'type' => 'VARCHAR',
				'constraint' => 128,
				'null' => FALSE			
			],
			'cf' => [
				'type' => 'FLOAT',
				'null' => TRUE
			],
			'created_at' => [
				'type' => 'datetime',
				'null' => TRUE
			],
			'updated_at' => [
				'type' => 'datetime',
				'null' => TRUE
			],
			'deleted_at' => [
				'type' => 'datetime',
				'null' => TRUE
			]
		]);
		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('Diagnosis');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
		$this->forge->dropTable('Diagnosis');
	}
}
