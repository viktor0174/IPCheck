<?php
	/*
	 * ����������� �������
	 */
	
	function std_translit($source_text)
	{		
		// ������� ������
		$source_array = array(
		" ", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�",
		"�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�",
		"�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�",
		"�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�"
		);	
		$desc_array = array(
		"_", "yi", "c", "u", "k", "e", "n", "g", "sh", "sch", "z", "h", "", "f", "y", "v", "a", "p",
		"r", "o", "l", "d", "zh", "e", "ya", "ch", "s", "m", "i", "t", "", "b", "yu", "e",
		"yi", "c", "u", "k", "e", "n", "g", "sh", "sch", "z", "h", "", "f", "y", "v", "a", "p",
		"r", "o", "l", "d", "zh", "e", "ya", "ch", "s", "m", "i", "t", "", "b", "yu", "e"
		);
		return str_ireplace($desc_array, $source_array, $source_text);
	}
?>