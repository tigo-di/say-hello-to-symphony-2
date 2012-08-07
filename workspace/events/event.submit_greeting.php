<?php

	require_once(TOOLKIT . '/class.event.php');

	Class eventsubmit_greeting extends SectionEvent{

		public $ROOTELEMENT = 'submit-greeting';

		public $eParamFILTERS = array(
			
		);

		public static function about(){
			return array(
				'name' => 'Submit Greeting',
				'author' => array(
					'name' => 'Ad Min',
					'website' => 'http://symphony-hello.local',
					'email' => 'admin@example.com'),
				'version' => 'Symphony 2.3',
				'release-date' => '2012-08-06T19:04:53+00:00',
				'trigger-condition' => 'action[submit-greeting]'
			);
		}

		public static function getSource(){
			return '1';
		}

		public static function allowEditorToParse(){
			return true;
		}

		public static function documentation(){
			return '
        <h3>Success and Failure XML Examples</h3>
        <p>When saved successfully, the following XML will be returned:</p>
        <pre class="XML"><code>&lt;submit-greeting result="success" type="create | edit">
  &lt;message>Entry [created | edited] successfully.&lt;/message>
&lt;/submit-greeting></code></pre>
        <p>When an error occurs during saving, due to either missing or invalid fields, the following XML will be returned:</p>
        <pre class="XML"><code>&lt;submit-greeting result="error">
  &lt;message>Entry encountered errors when saving.&lt;/message>
  &lt;field-name type="invalid | missing" />
  ...
&lt;/submit-greeting></code></pre>
        <h3>Example Front-end Form Markup</h3>
        <p>This is an example of the form markup you can use on your frontend:</p>
        <pre class="XML"><code>&lt;form method="post" action="" enctype="multipart/form-data">
  &lt;input name="MAX_FILE_SIZE" type="hidden" value="2097152" />
  &lt;label>Greeting Title
    &lt;input name="fields[greeting-title]" type="text" />
  &lt;/label>
  &lt;label>Greeting Content
    &lt;textarea name="fields[greeting-content]" rows="15" cols="50">&lt;/textarea>
  &lt;/label>
  &lt;label>Date
    &lt;input name="fields[date]" type="text" />
  &lt;/label>
  &lt;label>Language
    &lt;select name="fields[language]">
      &lt;option value="Chinese">Chinese&lt;/option>
      &lt;option value="Spanish">Spanish&lt;/option>
      &lt;option value="English">English&lt;/option>
      &lt;option value="Hindi">Hindi&lt;/option>
      &lt;option value="Arabic">Arabic&lt;/option>
      &lt;option value="Bengali">Bengali&lt;/option>
      &lt;option value="Portuguese">Portuguese&lt;/option>
      &lt;option value="Russian">Russian&lt;/option>
      &lt;option value="Japanese">Japanese&lt;/option>
      &lt;option value="German">German&lt;/option>
      &lt;option value="Javanese">Javanese&lt;/option>
      &lt;option value="Punjabi">Punjabi&lt;/option>
      &lt;option value="Wu">Wu&lt;/option>
      &lt;option value="Telugu">Telugu&lt;/option>
      &lt;option value="Vietnamese">Vietnamese&lt;/option>
      &lt;option value="Marathi">Marathi&lt;/option>
      &lt;option value="French">French&lt;/option>
      &lt;option value="Korean">Korean&lt;/option>
      &lt;option value="Tamil">Tamil&lt;/option>
      &lt;option value="Italian">Italian&lt;/option>
    &lt;/select>
  &lt;/label>
  &lt;input name="action[submit-greeting]" type="submit" value="Submit" />
&lt;/form></code></pre>
        <p>To edit an existing entry, include the entry ID value of the entry in the form. This is best as a hidden field like so:</p>
        <pre class="XML"><code>&lt;input name="id" type="hidden" value="23" /></code></pre>
        <p>To redirect to a different location upon a successful save, include the redirect location in the form. This is best as a hidden field like so, where the value is the URL to redirect to:</p>
        <pre class="XML"><code>&lt;input name="redirect" type="hidden" value="http://symphony-hello.local/success/" /></code></pre>';
		}

		public function load(){
			if(isset($_POST['action']['submit-greeting'])) return $this->__trigger();
		}

	}
