<?
/*
$Id: rss2writer.class.php,v 1.1 2006/07/24 21:14:12 cvsuser Exp $


RSS2Writer a php class to generate in a simple way RSS 2.0 feeds
by Maurizio Giunti (http://www.mauriziogiunti.it)
             	

This software is distributed under the LGPL license:

This library is free software; you can redistribute it and/or
modify it under the terms of the GNU Library General Public
License as published by the Free Software Foundation; either
version 2 of the License, or (at your option) any later version.

This library is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
Library General Public License for more details.

You should have received a copy of the GNU Library General Public
License along with this library; if not, write to the
Free Software Foundation, Inc., 59 Temple Place - Suite 330, Cambridge,
MA 02139, USA.

Although it is in no way required by the GNU Library General
Public License, it is the author's desire that software designed
around this library remain public as per the intent of the GPL.  The
author did not license this software under the GPL but rather the
LGPL so as to give others more freedom in how this software is used. 



*/


class RSS2Item {


  // Mandatory items
  var $title;
  var $link;
  var $description;
  
  // Optional items
  var $author;
  var $category;
  var $comments;
//  var $enclosure;
  var $guid;
  var $pubDate;
//  var $source;
  
  
function RSS2Item($sTitle,$slink,$sDescription) 
{
  $this->title=$sTitle;
  $this->link=$slink;
  $this->description=$sDescription;
  
  $this->author='';
  $this->category='';
  $this->comments='';
  //$this->enclosure='';   not yet supported
  $this->guid='';
  $this->pubDate='';  
  //$this->source=''; not yet supported
}

function setAuthor($sEmail,$sName)
{
  $this->author="$sEmail ($sName)";
}

function setCategory($sCategory)
{
  $this->category=$sCategory;
}

function setComments($sComments)
{
  $this->comments=$sComments;
}

function setGuid($sGuid)
{
  $this->guid=$sGuid;
}

function setPubDate($sPubDate)
{
  $dt=date("D, j M Y H:i:s T",strtotime($sPubDate));
  $this->pubDate=$dt;
}




function getAsString()
{
  $ret='';
  $ret.="<item>\n";
  
  $ret.='<title>'.encodexmlchars($this->title).'</title>'."\n";
  $ret.='<link>'.encodexmlchars($this->link).'</link>'."\n";
  $ret.='<description>'.encodexmlchars($this->description).'</description>'."\n";
  if($this->author!='') {
    $ret.='<author>'.encodexmlchars($this->author).'</author>'."\n";  
  }
  if($this->category!='') {
    $ret.='<category>'.encodexmlchars($this->category).'</category>'."\n";  
  }
  if($this->comments!='') {
    $ret.='<comments>'.encodexmlchars($this->comments).'</comments>'."\n";  
  }
  if($this->guid!='') {
    $ret.='<guid>'.encodexmlchars($this->guid).'</guid>'."\n";  
  }
  if($this->pubDate!='') {
    $ret.='<pubDate>'.encodexmlchars($this->pubDate).'</pubDate>'."\n";  
  }
  
  
  $ret.="</item>\n";
  return $ret;
}


}


class RSS2Writer {


  // Mandatory items
  var $title;
  var $link;
  var $description;

  // Optional items
  var $language;
  var $copyright;
  var $managingEditor;
  var $webMaster;
  var $pubDate;
  var $lastBuildDate;
  var $category;  // Partially supported
  var $generator;
  var $docs;
// var $cloud
  var $ttl='';
  var $image;
//  var $rating='';
//  var $textinput;
//  var $skipHours
//  var $skipDays
  
  // Items list
  var $items;



function RSS2Writer($sTitle,$sLink,$sDescription)
{
  $this->title=$sTitle;;
  $this->link=$sLink;
  $this->description=$sDescription;

  // Optional items
  $this->language='';
  $this->copyright='';
  $this->managingEditor='';
  $this->webMaster='';
  $this->pubDate='';
  $this->lastBuildDate='';
  $this->category='';
  $this->generator='RSS2Writer PHP class by Maurizio Giunti http://www.mauriziogiunti.it';
  $this->docs='';
  $this->ttl='';

  // Reset image and items
  $this->image=array();
  $this->items=array();



}


function setLanguage($sLanguage) 
{ 
  $this->language=$sLanguage;
}

function setCopyright($sCopyright) 
{ 
  $this->copyright=$sCopyright;
}

function setManagingEditor($sEmail,$sName) 
{ 
  $this->managingEditor="$sEmail ($sName)";
}

function setWebMaster($sEmail,$sName) 
{ 
  $this->webMaster="$sEmail ($sName)";
}


function setPubDate($sPubDate)
{
  $dt=date("D, j M Y H:i:s T",strtotime($sPubDate));
  $this->pubDate=$dt;
}

function setLastBuildDate($sLastBuildDate)
{
  $dt=date("D, j M Y H:i:s T",strtotime($sLastBuildDate));
  $this->lastBuildDate=$dt;
}

function setCategory($sCategory)
{
  $this->category=$sCategory;
}

function setGenerator($sGenerator)
{
  $this->generator=$sGenerator;
}

function setDocs($sDocs)
{
  $this->docs=$sDocs;
}

function setTtl($sTtl)
{
  $this->ttl=$sTtl;
}



function setImage($url,$title,$link,$width,$height) 
{
  $img['url']=$url;
  $img['title']=$title;
  $img['link']=$link;
  if($width>0) {
    $img['width']=$width;
  }
  if($height>0) {
    $img['height']=$height;
  }
  $this->image=$img;
}

function addItem($rss2item)
{
  $this->items[]=$rss2item;
}


function getHeaderAsString()
{
  $ret="<?xml version=\"1.0\" encoding=\"iso-8859-1\"?>\n<rss version=\"2.0\">\n<channel>\n";
  $ret.='<title>'.encodexmlchars($this->title).'</title>'."\n";
  $ret.='<link>'.encodexmlchars($this->link).'</link>'."\n";
  $ret.='<description>'.encodexmlchars($this->description).'</description>'."\n";
  if($this->language!='') {
    $ret.='<language>'.encodexmlchars($this->language).'</language>'."\n";  
  }
  if($this->copyright!='') {
    $ret.='<copyright>'.encodexmlchars($this->copyright).'</copyright>'."\n";  
  }

  if($this->managingEditor !='') {
    $ret.='<managingEditor>'.encodexmlchars($this->managingEditor).'</managingEditor>'."\n";  
  }
  if($this->webMaster !='') {
    $ret.='<webMaster>'.encodexmlchars($this->webMaster).'</webMaster>'."\n";  
  }
  if($this->pubDate !='') {
    $ret.='<pubDate>'.encodexmlchars($this->pubDate).'</pubDate>'."\n";  
  }
  if($this->lastBuildDate !='') {
    $ret.='<lastBuildDate>'.encodexmlchars($this->lastBuildDate).'</lastBuildDate>'."\n";  
  }
  if($this->category !='') {
    $ret.='<category>'.encodexmlchars($this->category).'</category>'."\n";  
  }
  if($this->generator !='') {
    $ret.='<generator>'.encodexmlchars($this->generator).'</generator>'."\n";  
  }  
  if($this->docs !='') {
    $ret.='<docs>'.encodexmlchars($this->docs).'</docs>'."\n";  
  }
  if($this->ttl !='') {
    $ret.='<ttl>'.encodexmlchars($this->ttl).'</ttl>'."\n";  
  }
  
  
  // Feed image
  if(count($this->image)>0) {
    $img=$this->image;
    $ret.='<image>'."\n";
    $ret.='<url>'.encodexmlchars($img['url']).'</url>'."\n";  
    $ret.='<title>'.encodexmlchars($img['title']).'</title>'."\n";  
    $ret.='<link>'.encodexmlchars($img['link']).'</link>'."\n";  
    if($img['width']>0) {
      $ret.='<width>'.encodexmlchars($img['width']).'</width>'."\n";  
    }
    if($img['height']>0) {
      $ret.='<height>'.encodexmlchars($img['height']).'</height>'."\n";  
    }
    
    
    $ret.='</image>'."\n";
  }
  
  return $ret;
}

function getFooterAsString()
{
  $ret='';
  $ret.='</channel>'."\n";
  $ret.='</rss>'."\n";
  return $ret;
}

function getAsString()
{
  $ret='';
  $ret.=$this->getHeaderAsString();
  
  // Items
  foreach($this->items as $item) {
    $ret.=$item->getAsString();
  }
  
  $ret.=$this->getFooterAsString();
  
  return $ret;
}



function doPrint()
{
  
  print $this->getHeaderAsString();
  
  // Items
  foreach($this->items as $item) {
     print $item->getAsString();
  }
  
  print $this->getFooterAsString();
}



}

/*
  Common method to encode special XML chars
*/
function encodexmlchars($str)
{
  $str=str_replace('&','&amp;',$str);
  $str=str_replace('<','&lt;',$str);
  $str=str_replace('>','&gt;',$str);
  $str=str_replace('"','&quot;',$str);
  $str=str_replace("'",'&#39;',$str);
  return $str;
}

// Create new feed instance and set some basic data
$rssw=new RSS2Writer('Linux User Group Brescia','http://www.lugbs.linux.it','Eventi del LugBS');
$rssw->setLanguage('it-it');
$rssw->setPubDate(date('Y-m-d H:m:s'));
$rssw->setwebMaster('andrea.gelmini@lugbs.linux.it','Andrea Gelmini');

$feventi = file('../log_eventi.txt');
$c = 0;
while (list ($riga,$evento) = each ($feventi)) {
	if ($c == 5) {break;} else {$c++;}
	$campi = explode("|",$evento);
	$item=new RSS2Item($campi[0],'http://www.lugbs.linux.it/index.php#'.ereg_replace(' ','_',$campi[0]),$campi[1]);
	$rssw->addItem($item);
}

header('Content-type: text/xml');
$rssw->doPrint();
?>
