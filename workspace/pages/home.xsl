<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
	xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
	xmlns:atom="http://www.w3.org/2005/Atom">

<xsl:import href="../utilities/master.xsl"/>

<xsl:template match="data">
	<ul id="greetings-list" class="content">
		<xsl:apply-templates select="greetings/entry"/>
	</ul>
	<div id="tweets-list">
		<h3><del>Gr</del>Tweetings</h3>
		<ul>
			<xsl:apply-templates select="tweetings//atom:entry"/>
		</ul>
	</div>
</xsl:template>

<xsl:template match="greetings/entry">
	<li>
		<h3><a href="{$root}/greetings/{greeting-title/@handle}"><xsl:value-of select="greeting-title"/></a></h3>
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
	</li>
</xsl:template>

<xsl:template match="tweetings//atom:entry">
	<li>
		<p><xsl:value-of select="atom:content" disable-output-escaping="yes"/></p>
		<p class="meta">
			<a href="{atom:author/atom:uri}"><xsl:value-of select="substring-before(atom:author/atom:name, ' (')" /></a>
			<xsl:text> </xsl:text>
			<xsl:call-template name="format-date">
				<xsl:with-param name="date" select="substring-before(atom:published, 'T')"/>
				<xsl:with-param name="format" select="'x M Y'"/>
			</xsl:call-template>
		</p>
	</li>
</xsl:template>

</xsl:stylesheet>