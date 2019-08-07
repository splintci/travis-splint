<?php
declare(strict_types=1);
if (!defined('BASEPATH')) exit('No direct script access allowed');
class TEST_Uri extends CI_URI {
	public function uri_string() {
		return get_instance()->config->item("st_uri_string") ?? $this->uri_string;
	}
	public function set_uri_string(string $uri_string):void {
		$this->uri_string = $uri_string;
	}
}