<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
	xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:import href="../utilities/master.xsl"/>

<xsl:template match="data">
	<xsl:apply-templates select="greeting-entry/entry"/>
</xsl:template>

<xsl:template match="greeting-entry/entry">
	<div id="greeting-entry" class="content">
		<h2><xsl:value-of select="greeting-title"/></h2>
		<ul class="meta">

			<li class="date">
				<xsl:call-template name="format-date">
					<xsl:with-param name="date" select="date"/>
					<xsl:with-param name="format" select="'x M Y'"/>
				</xsl:call-template>
			</li>

			<li class="language"><xsl:value-of select="language"/></li>

		</ul>
		<xsl:copy-of select="greeting-content/node()"/>
	</div>
</xsl:template>

</xsl:stylesheet>