<?php
	
PerchSystem::register_feather('Ketterus_Bootstrap');

class PerchFeather_Ketterus_Bootstrap extends PerchFeather
{

	public function get_css($opts, $index, $count)
	{	
		$out = array();

  		$out[] = $this->_single_tag('link', array(
  		        'rel'=>'stylesheet',
  				'href'=>$this->path.'/css/bootstrap.min.css',
  				'type'=>'text/css'
  		));

		return implode("\n\t", $out)."\n";
	}

	public function get_javascript($opts, $index, $count)
	{	
		$out = array();

		if (!$this->component_registered('jquery')) {
			$out[] = $this->_script_tag(array(
			        'src'=>$this->path.'/js/vendor/jquery.min.js',
			));
			$this->register_component('jquery');
		}

		$out[] = $this->_script_tag(array(
		        'src'=>$this->path.'/js/bootstrap.min.js'
		));

		return implode("\n\t", $out)."\n";
	}

}

?>