<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:output method="text" encoding="UTF-8" indent="yes" />

<xsl:template match="/">
    <xsl:text>INSERT INTO nombre values&#10;</xsl:text>
    
        <xsl:for-each select="xml/data/Archivo">
        <xsl:text>(&#10;</xsl:text>
        <xsl:value-of select="title" />
            <xsl:text>'</xsl:text> <xsl:value-of select="Id" /> <xsl:text>'</xsl:text>,
            <xsl:text>'</xsl:text> <xsl:value-of select="substring-before(Nombre,'.')" /> <xsl:text>'</xsl:text>
        <xsl:text>)</xsl:text>
        <xsl:if test="position() != last()">
                    <xsl:text>,</xsl:text>
                </xsl:if>
        </xsl:for-each>    
</xsl:template>

</xsl:stylesheet>