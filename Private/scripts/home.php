<?php

/**
 * Copyright 2021, 2024 5 Mode
 *
 * This file is part of Xslt-Master.
 *
 * Xslt-Master is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Xslt-Master is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.  
 * 
 * You should have received a copy of the GNU General Public License
 * along with Xslt-Master. If not, see <https://www.gnu.org/licenses/>.
 *
 * fileName.php
 * 
 * Xslt-Master description of the file.
 *
 * @author Daniele Bonini <my25mb@aol.com>
 * @copyrights (c) 2016, 2024 5 Mode
 */

?>

<!DOCTYPE html>
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml">
<head>

  <meta name="viewport" content="width=device-width, initial-scale=1"/>
   
<!--<?PHP echo(APP_LICENSE);?>-->  
  
  <title><?PHP echo(APP_TITLE);?></title>

  <link rel="shortcut icon" href="/favicon.ico" />

  <meta name="description" content="Welcome to Xslt-Master!"/>
  <meta name="keywords" content="Xslt-Master,xsl,generator,on,premise,solution"/>
  <meta name="robots" content="index,follow"/>
  <meta name="author" content="5 Mode"/>
  
  <script src="/js/jquery-3.6.0.min.js" type="text/javascript"></script>
  <script src="/js/common.js" type="text/javascript"></script>  
  <script src="/js/home.js?r=<?PHP echo(time());?>" type="text/javascript"></script>  
    
  <link href="/css/style.css?r=<?PHP echo(time());?>" type="text/css" rel="stylesheet">
  
</head>
  
<body>

 <div id="content">
  
     <br><br>
      Welcome!
      <br><br>
          This time we would like to load dynamically in data coming from multiple data source of type xml/xls.<br><br>
          We would like to create a good skeleton to automatize the update of portals and websites.
      <br><br><br><br>
        
      <div id="cont-singers">
          <span class="list-title">Singers:</span><br><br>
          <div id="singers">&nbsp;</div>
      </div>    
  
      <div id="cont-songs">
          <span class="list-title">Songs:</span><br><br>
          <div id="songs">&nbsp;</div>
      </div>    
     
      <br><br><br><br>     <br><br><br><br>     <br><br><br><br>     <br><br><br><br>     <br><br><br><br>             
              
              
     <div style"clear:both;margin:auto;height:230px;">         
     <br><br><br><br>
           
      We are the bad tech guys behind 5 Mode.
      <br><br><br><br>       
       
       Feedback: <a href="mailto:posta@elettronica.lol">posta@elettronica.lol</a>

     </div>         
                       
 </div> 

 <div id="resources">
     
       <br><br>
           
       <div id="cont-files">
          <span class="list-title">Files (in /Private/data):</span><br><br>
          <div id="files">
               <div><a href="/donwload/Linkin-Park-songs.xml">Linkin-Park-songs.xml</a></div>
               <div><a href="/donwload/Linkin-Park-songs.xsl">Linkin-Park-songs.xsl</a></div>
               <div><a href="/donwload/Tina-Turner-songs.xml">Tina-Turner-songs.xml</a></div>
               <div><a href="/donwload/Tina-Turner-songs.xml">Tina-Turner-songs.xsl</a></div>
               <div><a href="/donwload/singers.xml">singers.xml</a></div>
               <div><a href="/donwload/singers.xml">singers.xsl</a></div>
          </div>
       </div> 
       
<div id="cont-code">
<span class="list-title">Code:</span><br><br>
<div id="cont-precode">
<pre id="code">

function loadXML(divName, resName) {
  const xsltProcessor = new XSLTProcessor();
  // Load the xsl file
  //alert(resName);
  myXMLHTTPRequest = new XMLHttpRequest();
  myXMLHTTPRequest.open("GET", "/xsl?d="+resName, false);
  myXMLHTTPRequest.send(null);
  const xslRef = myXMLHTTPRequest.responseXML;
  xsltProcessor.importStylesheet(xslRef);
  // Load the XML file
  myXMLHTTPRequest = new XMLHttpRequest();
  myXMLHTTPRequest.open("GET", "/xml?d="+resName, false);
  myXMLHTTPRequest.send(null);
  xmlDoc = myXMLHTTPRequest.responseXML;
  const fragment = xsltProcessor.transformToFragment(xmlDoc, document);
  myDOM = fragment;
  $("#"+divName).html(fragment);
}
</pre>    
</div>
</div>
           
 </div> 
  
<div id="footerCont">&nbsp;</div>
<div id="footer">
       <span style="background:#FFFFFF; opacity:0.7;">&nbsp;&nbsp; <a href="dd.html" class="aaa">Disclaimers</a>. A <a href="http://5mode.com" class="aaa">5 Mode</a> project and <a href="http://demo.5mode.com" class="aaa">WYSIWYG</a> system. Some rights reserved.</span>
</div>  

<script>
  
  window.addEventListener("load", function(){
    loadXML("singers", "singers");
  });
  
</script>  
 
</body>
</html>