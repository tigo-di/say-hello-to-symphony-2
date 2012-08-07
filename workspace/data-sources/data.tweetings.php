<?php

	require_once(TOOLKIT . '/class.datasource.php');

	Class datasourcetweetings extends DynamicXMLDatasource{

		public $dsParamROOTELEMENT = 'tweetings';
		public $dsParamURL = 'http://search.twitter.com/search.atom?q=%23symphonycms';
		public $dsParamXPATH = '/';
		public $dsParamCACHE = '2';
		public $dsParamTIMEOUT = '6';
		

		public $dsParamFILTERS = array(
				'google' => 'http://base.google.com/ns/1.0',
				'openSearch' => 'http://a9.com/-/spec/opensearch/1.1/',
				'twitter' => 'http://api.twitter.com/',
				'georss' => 'http://www.georss.org/georss',
		);
		

		

		public function __construct($env=NULL, $process_params=true){
			parent::__construct($env, $process_params);
			$this->_dependencies = array();
		}

		public function about(){
			return array(
				'name' => 'Tweetings',
				'author' => array(
					'name' => 'Ad Min',
					'website' => 'http://symphony-hello.local',
					'email' => 'admin@example.com'),
				'version' => 'Symphony 2.3',
				'release-date' => '2012-08-06T19:36:07+00:00'
			);
		}

		public function getSource(){
			return 'dynamic_xml';
		}

		public function allowEditorToParse(){
			return true;
		}

	}
