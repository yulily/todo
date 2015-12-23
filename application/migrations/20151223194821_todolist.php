<?php
/**
 * Migration: todolist
 *
 * Created by: Cli for CodeIgniter <https://github.com/kenjis/codeigniter-cli>
 * Created on: 2015/12/23 19:48:21
 */
class Migration_todolist extends CI_Migration {

	public function up()
	{
		// Creating a table
		$this->dbforge->add_field(array(
            'todolist_id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
			'user_id' => array(
                'type' => 'INT',
                'constraint' => 11
			),
			'title' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
                'default' => '無題'
			),
			'description' => array(
				'type' =>'VARCHAR',
				'constraint' => 255
			),
			'start_date' => array(
				'type' => 'DATETIME',
				'null' => TRUE
			),
            'end_date' => array(
                'type' => 'TEXT',
                'null' => TRUE
            ),
            'memo' => array(
                'type' => 'TEXT',
                'null' => TRUE
            ),
            'category_id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'null' => TRUE
            ),
            'tag_list' => array(
                'type' => 'TEXT',
                'null' => TRUE
            )
		));
		$this->dbforge->add_key('todolist_id', TRUE);
		$this->dbforge->create_table('todolist');

//		// Adding a Column to a Table
//		$fields = array(
//			'preferences' => array('type' => 'TEXT')
//		);
//		$this->dbforge->add_column('table_name', $fields);
	}

	public function down()
	{
//		// Dropping a table
//		$this->dbforge->drop_table('blog');

//		// Dropping a Column From a Table
//		$this->dbforge->drop_column('table_name', 'column_to_drop');
	}

}
