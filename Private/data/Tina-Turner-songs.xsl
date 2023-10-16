<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform"  xmlns:xlink="http://www.w3.org/1999/xlink"  version="1.0">

<xsl:output method="html"/>

<xsl:template match="CONTENT">

  <xsl:for-each select="ITEM[ID>'00']">

     <xsl:sort select="INDEX" data-type="number" order="ascending"/>

     <div class="ve-song-list"><xsl:value-of select="NAME"/></div>

  </xsl:for-each>

</xsl:template>

</xsl:stylesheet>