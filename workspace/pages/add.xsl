<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
	xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:import href="../utilities/master.xsl"/>

<xsl:template match="data">
	<form method="post" action="" enctype="multipart/form-data">
		<input name="MAX_FILE_SIZE" type="hidden" value="5242880" />

		<h2>Leave Your Greeting Here</h2>
		<xsl:apply-templates select="events/submit-greeting"/>

		<label>Greeting Title</label>
		<input name="fields[greeting-title]" type="text" />

		<label>Language</label>
		<select name="fields[language]">
			<option value="Chinese">Chinese</option>
			<option value="Spanish">Spanish</option>
			<option value="English">English</option>
			<option value="Arabic">Arabic</option>
			<option value="Hindi">Hindi</option>
			<option value="Bengali">Bengali</option>
			<option value="Portuguese">Portuguese</option>
			<option value="Russian">Russian</option>
			<option value="Japanese">Japanese</option>
			<option value="German">German</option>
			<option value="Javanese">Javanese</option>
			<option value="Punjabi">Punjabi</option>
			<option value="Wu">Wu</option>
			<option value="Telugu">Telugu</option>
			<option value="Vietnamese">Vietnamese</option>
			<option value="Marathi">Marathi</option>
			<option value="French">French</option>
			<option value="Korean">Korean</option>
			<option value="Tamil">Tamil</option>
			<option value="Italian">Italian</option>
		</select>

		<label>Greeting Content</label>
		<textarea name="fields[greeting-content]" rows="15" cols="50"></textarea>

		<input name="fields[date]" type="hidden" value="{$today} {$current-time}" />

		<input name="action[submit-greeting]" type="submit" id="submit" value="Submit" />
	</form>
</xsl:template>

<xsl:template match="events/submit-greeting">
	<p>
		<xsl:attribute name="class"><xsl:value-of select="@result"/></xsl:attribute>
		<xsl:value-of select="message"/>
	</p>
</xsl:template>

</xsl:stylesheet>