<?php
	/*
	 * ������������ ��� IP [�� ���������]
	 */
	class ConfigClass {
		//public $GetContentsPath = 'http://ip-api.com/php/';		## ���� � ������� ��� �������� IP (http://freegeoip.net/xml/88.206.110.251
		public $GetContentsPath = 'http://ip-ap	i.com/json/';		## ���� � ������� ��� �������� IP (http://freegeoip.net/xml/88.206.110.251)
		public $MaxExecutionTime = 1000;						## ����� ���������� ��������
		public $PrivacyPolicy = 'Victor Markelov';				## �������� ������������������ (Privacy Policy)
		public $Title = 'IP Check';								## �������� ��������
		public $TitleHeader = 'IP Check';						## ���������
		public $template = 'template';							## ������� � ���������
		public $charset = 'windows-1251';						## ��������� �� ���������
		public $lang = 'ru';									## ���� (language)
	}
?>