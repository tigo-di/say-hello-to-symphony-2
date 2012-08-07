<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
	xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:import href="date-time.xsl"/>

<xsl:output method="xml"
	doctype-public="-//W3C//DTD XHTML 1.0 Strict//EN"
	doctype-system="http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"
	omit-xml-declaration="yes"
	encoding="UTF-8"
	indent="yes" />

<xsl:template match="/">
	<html>

		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<title>Hello World!</title>
			<link href="{$workspace}/styles/main.css" rel="stylesheet" type="text/css" />
			<link rel="alternate" href="{$root}/feed" title="Greetings Feed" type="application/rss+xml" />
		</head>

		<body>
			<div id="layout">
				<h1>Symphony Greets the World</h1>
				<h5 id="powered"><a href="http://symphony-cms.com"><span>&#9835;</span>A Symphony Site</a></h5>

				<a href="{$root}/feed" id="feed"><img src="{$workspace}/images/feed-icon-28x28.png" alt="Feed Icon"/></a>
				<xsl:apply-templates select="data/navigation"/>
				<xsl:apply-templates />

			</div>
		</body>

	</html>
</xsl:template>

<xsl:template match="navigation">
	<ul id="nav">
		<xsl:apply-templates select="page[not(types/type = 'hidden')]"/>
	</ul>
</xsl:template>

<xsl:template match="navigation/page">
	<li>
		<a>
			<xsl:choose>
				<xsl:when test="types/type = 'index'">
					<xsl:attribute name="href"><xsl:value-of select="$root"/>/</xsl:attribute>
				</xsl:when>
				<xsl:otherwise>
					<xsl:attribute name="href"><xsl:value-of select="$root"/>/<xsl:value-of select="@handle"/></xsl:attribute>
				</xsl:otherwise>
			</xsl:choose>
			<xsl:if test="@handle = $current-page">
				<xsl:attribute name="class">current</xsl:attribute>
			</xsl:if>
			<xsl:value-of select="name"/>
		</a>
	</li>
</xsl:template>

</xsl:stylesheet>