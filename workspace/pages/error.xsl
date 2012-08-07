<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
	xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:import href="../utilities/master.xsl"/>

<xsl:template match="data">
	<div id="error" class="content">
		<h2>Sorry</h2>
		<p>Couldn't find what you were looking for. But have you seen our spiffy <a href="{$root}">home page</a>?</p>
	</div>
</xsl:template>

</xsl:stylesheet>