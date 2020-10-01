<?php
	/*
	 * Конфигурация Гео IP [по умолчанию]
	 */
	class ConfigClass {
		//public $GetContentsPath = 'http://ip-api.com/php/';		## Путь к ресурсу для проверки IP (http://freegeoip.net/xml/88.206.110.251
		public $GetContentsPath = 'http://ip-ap	i.com/json/';		## Путь к ресурсу для проверки IP (http://freegeoip.net/xml/88.206.110.251)
		public $MaxExecutionTime = 1000;						## Время выполнения сценария
		public $PrivacyPolicy = 'Victor Markelov';				## Политика конфиденциальности (Privacy Policy)
		public $Title = 'IP Check';								## Заголовк страницы
		public $TitleHeader = 'IP Check';						## Заголовок
		public $template = 'template';							## Каталог с шаблонами
		public $charset = 'windows-1251';						## Кодировка по умолчанию
		public $lang = 'ru';									## Язык (language)
	}
?>