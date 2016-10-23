<?php

namespace WebBake\Controller;

use App\Controller\AppController;

use Cake\Datasource\ConnectionManager;

use Bake\Shell\Task\ModelTask;

use Cake\Core\Configure;


class BakeController extends AppController
{


	public function index(){




	}



	public function bake(){

	}

	

	public function getModels(){

		$this->autoRender = false;

		$modelTask = new ModelTask();

		$modelTask->connection = 'default'; 

		$tables = Array();

		foreach ($modelTask->listUnskipped() as $table) {
			
			$tables[] = $this->to_camel_case($table);

		}

		echo json_encode($tables);

	}

	public function generate(){


		$this->autoRender = false;

		$data = $this->request->data;

		/**
		 * model
		 * controller
		 * template
		 * plugin
		 * @var [type]
		 */
		$type = $data['type'];

		/**
		 * name for the option type
		 * @var [type]
		 */
		$name = $data['name'];
		
		$output = "";

		$serverPath = APP;

		$serverPath = str_replace("\\","/",$serverPath);

		$serverPath = str_replace("src/","",$serverPath);

		$serverPath = $serverPath. "bin/cake bake ";

		exec($serverPath . $type . " " . $name." 2>&1", $out);


		foreach ($out as $o) {
			
			$output .= $o . "\n";
		}

		echo json_encode(Array('res'=>$output));

	}


	/**
	 * Translates a string with underscores
	 * into camel case (e.g. first_name -> firstName)
	 *
	 * @param string $str String in underscore format
	 * @param bool $capitalise_first_char If true, capitalise the first char in $str
	 * @return string $str translated into camel caps
	 */
	function to_camel_case($str, $capitalise_first_char = true) {
	  if($capitalise_first_char) {
	    $str[0] = strtoupper($str[0]);
	  }
	  $func = create_function('$c', 'return strtoupper($c[1]);');
	  return preg_replace_callback('/_([a-z])/', $func, $str);
	}



}
