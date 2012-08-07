<?php

	require_once(TOOLKIT . '/class.datasource.php');

	Class datasourcegreetings extends SectionDatasource{

		public $dsParamROOTELEMENT = 'greetings';
		public $dsParamORDER = 'desc';
		public $dsParamPAGINATERESULTS = 'yes';
		public $dsParamLIMIT = '20';
		public $dsParamSTARTPAGE = '1';
		public $dsParamREDIRECTONEMPTY = 'no';
		public $dsParamSORT = 'system:id';
		public $dsParamASSOCIATEDENTRYCOUNTS = 'no';
		

		

		public $dsParamINCLUDEDELEMENTS = array(
				'greeting-title',
				'greeting-content: formatted',
				'date',
				'language'
		);
		

		public function __construct($env=NULL, $process_params=true){
			parent::__construct($env, $process_params);
			$this->_dependencies = array();
		}

		public function about(){
			return array(
				'name' => 'Greetings',
				'author' => array(
					'name' => 'Ad Min',
					'website' => 'http://symphony-hello.local',
					'email' => 'admin@example.com'),
				'version' => 'Symphony 2.3',
				'release-date' => '2012-08-06T16:23:25+00:00'
			);
		}

		public function getSource(){
			return '1';
		}

		public function allowEditorToParse(){
			return true;
		}

	}
