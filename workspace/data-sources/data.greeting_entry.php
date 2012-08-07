<?php

	require_once(TOOLKIT . '/class.datasource.php');

	Class datasourcegreeting_entry extends SectionDatasource{

		public $dsParamROOTELEMENT = 'greeting-entry';
		public $dsParamORDER = 'desc';
		public $dsParamPAGINATERESULTS = 'yes';
		public $dsParamLIMIT = '1';
		public $dsParamSTARTPAGE = '1';
		public $dsParamREDIRECTONEMPTY = 'yes';
		public $dsParamREQUIREDPARAM = '$title';
		public $dsParamSORT = 'system:id';
		public $dsParamASSOCIATEDENTRYCOUNTS = 'no';
		

		public $dsParamFILTERS = array(
				'1' => '{$title}',
		);
		

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
				'name' => 'Greeting Entry',
				'author' => array(
					'name' => 'Ad Min',
					'website' => 'http://symphony-hello.local',
					'email' => 'admin@example.com'),
				'version' => 'Symphony 2.3',
				'release-date' => '2012-08-06T16:23:17+00:00'
			);
		}

		public function getSource(){
			return '1';
		}

		public function allowEditorToParse(){
			return true;
		}

	}
