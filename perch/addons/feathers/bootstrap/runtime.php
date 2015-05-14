<?php
	
PerchSystem::register_feather('Bootstrap');

class PerchFeather_Bootstrap extends PerchFeather
{

	public function get_css($opts, $index, $count)
	{	
		$out = array();

		if (!$this->component_registered('bootstrap')) {
			$out[] = $this->_single_tag('link', array(
					'rel'=>'stylesheet',
					'href'=>$this->path.'/css/bootstrap.min.css',
					'type'=>'text/css'
				));
			$this->register_component('bootstrap');
		}

		return implode("\n\t", $out)."\n";
	}

	public function get_javascript($opts, $index, $count)
	{	
		$out = array();

		if (!$this->component_registered('jquery')) {
			$out[] = $this->_script_tag(array(
					'src'=>'//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js'
				));
			$this->register_component('jquery');
		}

		$out[] = $this->_script_tag(array(
					'src'=>$this->path.'/js/bootstrap.min.js'
				));

		$out[] = $this->_script_tag(array(
					'src'=>$this->path.'/js/ie10-viewport-bug-workaround.js'
				));

		return implode("\n\t", $out)."\n";
	}

}

?>