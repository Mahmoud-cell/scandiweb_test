<?php include_once 'Control.php' ?>
<?php
abstract class MainProduct extends Control
{

	abstract public function check_empty($n, $a);
}

class Validation extends MainProduct
{

	public function check_empty($data, $fields)
	{
		$msg = null;
		foreach ($fields as $value) {
			if (empty($data[$value])) {
				$msg .= "$value field empty <br />";
			}
		}
		return $msg;
	}
}

?>