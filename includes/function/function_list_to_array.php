<?php

	// Convert values of an array to a list "quoted" by the character specified as the second $quote parameter.
  	// This function allows us to convert arrays of data (of type string) into MySQL query parameters
	// This way we can pass an array of values, rather than typing them out ourselves and typing quotes around them.

	/**
	* array_to_list() - converts an array to a list with ease
	* @param bool $return  - decide if the data should be echo or returned
	* @param bool $ar      - the array to be used to convert tto a list
	* @param string $quote - the delimiter of each array field
	*/
	function array_to_list($return = 0, $ar, $quote="`") {

		$l = "";
		if (is_array($ar)) { 
			$ac = count($ar);
			if ($ac>0)

				for ($i=0; $i<$ac; $i++) {
					$l .= $quote.$ar[$i];
					if ($i + 1 < $ac)
						$l .= "$quote,";
					else
						$l .= "$quote";
				}

				$html .= $l;
		}

		return false;

	}
