<?php
include("includes/header.inc");
echo '<H3 align=center>Risultati della ricerca</H3>';

print'<TABLE align=center cellpadding=5 cellspacing=0 width="85%">
	<tr>
	 <td>
<div id="cse-search-results"></div>
<script type="text/javascript">
  var googleSearchIframeName = "cse-search-results";
  var googleSearchFormName = "cse-search-box";
  var googleSearchFrameWidth = 800;
  var googleSearchDomain = "www.google.it";
  var googleSearchPath = "/cse";
</script>
<script type="text/javascript" src="http://www.google.com/afsonline/show_afs_search.js"></script> 
	 </td>
	</tr></TABLE>';
include("includes/footer.inc");
?>
