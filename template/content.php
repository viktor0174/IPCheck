<?php

	// Форма программы
	/*
	$content = file_get_contents("template.html");
	echo $content;	*/
	// Начало программы	
	if(isset($_POST['participant'])){
		$time_start=microtime(true);		
		// Загрузка XML длокумента
		$participant = simplexml_load_file($_SERVER['DOCUMENT_ROOT']."/check_data/xml/".$_POST['participant']);
		// Обработка имени файла
		$source_name = preg_replace("/^(.+)\.xml$/i", "$1",  $_POST['participant']);
		// Выводим на экрна, какой файл роверяем		
		echo "Проверяли данные: <b><i>".std_translit($source_name)."</b></i>.xml<br>";
		// Увеличиваем время выполнения 300 секунд
		ini_set('max_execution_time', $config->MaxExecutionTime);
		// Строка
		$str = 0;
		// Создание файла и открытие его
		$source_name = fopen("report/".$source_name.".report", "a+t");
			foreach ($participant->Worksheet->Table->Row as $values){
				$ip = $values->Cell[4]->Data;				
				$query = @unserialize(file_get_contents(''. $config->GetContentsPath .''.$ip));
				if($query && $query['status'] == 'success')
				{
					// Строка данныx
					$string = "".$ip."\tCountry:".$query['country']."\tCity:".$query['city']."\n"; 
					// Записываем в файл данные
					fputs($source_name, $string);
					$str ++;
				}
			}
		// Закрытие файла
		fclose($source_name);
		echo "<br>Записано строк:".$str."";
		// Вывод бенчмарка
		$time_end=microtime(true);
		echo "<br><b>Время выполнения сценария</b>: ".($time_end-$time_start)."";
		echo "<br>ЗАВЕРШЕНО";
	}
	 /*
	$datas = "176.59.212.149|176.226.129.91|78.29.8.185|77.222.109.82|77.222.104.101 ";
	$ipsArrays = explode("|",$datas);
	*/
	
	// $ipsArrayswww = json_decode($config->GetContentsPath.$values);
	/*
	$swww = loadHTMLFile("http://ip-api.com/json/176.226.129.91");
	$ipsArrayswww = json_decode($swww);
	echo $ipsArrayswww;
	*/
	
	
	$url = 'http://ip-api.com/json/176.226.129.91';
	// $data = json_decode(file_get_contents($url));
	
	// echo $data;	
	//	foreach ($ipsArrays as $values){
			// echo var_dump(json_decode($config->GetContentsPath.$values, true));
			
			// echo @simplexml_load_file($config->GetContentsPath.$values);
		
		/*
				$xml_ip_datas = @simplexml_load_file($config->GetContentsPath.$values);
				// Строка данныx
				$strings = "". $xml_ip_datas->IP ."\tCountry:". $xml_ip_datas->CountryName ."\tCity:". $xml_ip_datas->City ."\n"; 
				// Записываем в файл данные
				echo $strings."<br>";
				*/
	//		}
	// http://ip-api.com/php/176.59.212.149
	
	 
	 
	
	if(isset($_POST['Check_result']) 
		&& isset($_POST['Check_data'])
		&& isset($_POST['Check_data_name'])
		&& isset($_POST['select_task'])
	){
		// Задача
		$select_task = $_POST['select_task'];
		// Старт бенчмарка
		$time_start=microtime(true);
		// Увеличиваем время выполнения
		ini_set('max_execution_time', $config->MaxExecutionTime);
		// 
		$data = $_POST['Check_data'];
		// Считываем IP
		$ipsArray = explode("|",$data);
		
		// Построение данных списком
		if($select_task == 'list_data')
		{
			// Строка
			$str = 0; $num = 0;
			foreach ($ipsArray as $values){
				// Строка данныx
				echo $string = $values."<br>" ; 
				$str ++; $num ++;
				if ($str == 150) {
					$str = 0;
					echo $string .= "<p>".$num.") ===========</p>";
				}
			}
		}
	
		// Проверка данных
		if($select_task == 'check_data')
		{
			// Создаем имя файла
			$name = std_translit($_POST['Check_data_name']);
			// Создание файла и открытие его
			$source_name = fopen("report/".$name.".check.report", "a+t");
			//
			foreach ($ipsArray as $values){				
				$xml_ip_data = simplexml_load_file($config->GetContentsPath.$values);
				// Строка данныx
				$string = "". $xml_ip_data->IP ."\tCountry:". $xml_ip_data->CountryName ."\tCity:". $xml_ip_data->City ."\n"; 
				// Записываем в файл данные
				fputs($source_name, $string);
			}
			// Закрытие файла
			fclose($source_name);
		}
		
		// Вывод бенчмарка
		$time_end=microtime(true);
		echo "<br><b>End time</b>: ".($time_end-$time_start)."";
	}
?>