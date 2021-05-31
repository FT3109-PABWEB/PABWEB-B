<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use phpDocumentor\Reflection\PseudoTypes\True_;

class Post extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'				=> [
				'type'			=> 'INT',
				'constraint'	=> 11,
				'unsigned'		=> TRUE,
				'auto_increment' => TRUE
			],
			'tittle'			=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> '255',
			],
			'content'			=> [
				'type'			=> 'TEXT'
			],
		]);
		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('posts');
	}

	public function down()
	{
		//
	}
}
