<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Post extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'			 => [
			'type'			 => 'INT',
			'constraint'	 => 11,
			'insigned'		 => TRUE,
			'auto_increment' => TRUE
			],
			'title' 		=> [
			'type' 			=> 'Varchar',
			'constraint'	=> '255',
			],
			'content'		=> [
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
