<?php
/**
 * @package		OpenCart
 * @author		Daniel Kerr
 * @copyright	Copyright (c) 2005 - 2017, OpenCart, Ltd. (https://www.opencart.com/)
 * @license		https://opensource.org/licenses/GPL-3.0
 * @link		https://www.opencart.com
*/

/**
* Request class
*/
class Request {
	public $get = array();
	public $post = array();
	public $cookie = array();
	public $files = array();
	public $server = array();
	
	/**
	 * Constructor
 	*/
	public function __construct() {
		$this->get = $this->clean($_GET);
		$this->post = $this->clean($_POST);
		$this->request = $this->clean($_REQUEST);
		$this->cookie = $this->clean($_COOKIE);
		$this->files = $this->clean($_FILES);
		$this->server = $this->clean($_SERVER);
	}
	
	/**
     * 
	 * @param	array	$data
	 *
     * @return	array
     */
	public function clean($data) {
		if (is_array($data)) {
			foreach ($data as $key => $value) {
				unset($data[$key]);

				$data[$this->clean($key)] = $this->clean($value);
			}
			
			//Enochs code to trim white spaces from emails in the textbox
			$this->arrayMapRecursive('trim', $data);
		} else {
		    //Enoch Code to trim whitespace, added only the trim method below. I met others there
			$data = htmlspecialchars(trim($data), ENT_COMPAT, 'UTF-8');
		}

		return $data;
	}
	
	//ENoch Code to trim whitespace from email, I kept the function below
	protected function arrayMapRecursive(callable $func, array $array) {
        return filter_var($array, \FILTER_CALLBACK, ['options' => $func]);
    }
}