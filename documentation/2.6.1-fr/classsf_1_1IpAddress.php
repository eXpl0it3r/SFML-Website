<?php
    $version = '2.6.1'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'sf::IpAddress Class Reference'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header-fr.php');
?>
<!-- Generated by Doxygen 1.9.8 -->
<script type="text/javascript">
/* @license magnet:?xt=urn:btih:d3d9a9a6595521f9666a5e94cc830dab83b65699&amp;dn=expat.txt MIT */
var searchBox = new SearchBox("searchBox", "search/",'.php');
/* @license-end */
</script>
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="topics.php"><span>Topics</span></a></li>
      <li><a href="namespaces.php"><span>Namespaces</span></a></li>
      <li class="current"><a href="annotated.php"><span>Classes</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
      <li>
        <div id="MSearchBox" class="MSearchBoxInactive">
        <span class="left">
          <span id="MSearchSelect"                onmouseover="return searchBox.OnSearchSelectShow()"                onmouseout="return searchBox.OnSearchSelectHide()">&#160;</span>
          <input type="text" id="MSearchField" value="" placeholder="Search" accesskey="S"
               onfocus="searchBox.OnSearchFieldFocus(true)" 
               onblur="searchBox.OnSearchFieldFocus(false)" 
               onkeyup="searchBox.OnSearchFieldChange(event)"/>
          </span><span class="right">
            <a id="MSearchClose" href="javascript:searchBox.CloseResultsWindow()"><img id="MSearchCloseImg" border="0" src="search/close.svg" alt=""/></a>
          </span>
        </div>
      </li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="annotated.php"><span>Class&#160;List</span></a></li>
      <li><a href="classes.php"><span>Class&#160;Index</span></a></li>
      <li><a href="hierarchy.php"><span>Class&#160;Hierarchy</span></a></li>
      <li><a href="functions.php"><span>Class&#160;Members</span></a></li>
    </ul>
  </div>
<!-- window showing the filter options -->
<div id="MSearchSelectWindow"
     onmouseover="return searchBox.OnSearchSelectShow()"
     onmouseout="return searchBox.OnSearchSelectHide()"
     onkeydown="return searchBox.OnSearchSelectKey(event)">
</div>

<!-- iframe showing the search results (closed by default) -->
<div id="MSearchResultsWindow">
<div id="MSearchResults">
<div class="SRPage">
<div id="SRIndex">
<div id="SRResults"></div>
<div class="SRStatus" id="Loading">Loading...</div>
<div class="SRStatus" id="Searching">Searching...</div>
<div class="SRStatus" id="NoMatches">No Matches</div>
</div>
</div>
</div>
</div>

<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1IpAddress.php">IpAddress</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-methods">Public Member Functions</a> &#124;
<a href="#pub-static-methods">Static Public Member Functions</a> &#124;
<a href="#pub-static-attribs">Static Public Attributes</a> &#124;
<a href="#friends">Friends</a> &#124;
<a href="classsf_1_1IpAddress-members.php">List of all members</a>  </div>
  <div class="headertitle"><div class="title">sf::IpAddress Class Reference<div class="ingroups"><a class="el" href="group__network.php">Network module</a></div></div></div>
</div><!--header-->
<div class="contents">

<p>Encapsulate an IPv4 network address.  
 <a href="classsf_1_1IpAddress.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="IpAddress_8hpp_source.php">SFML/Network/IpAddress.hpp</a>&gt;</code></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a id="pub-methods" name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:af32a0574baa0f46e48deb2d83ca7658b" id="r_af32a0574baa0f46e48deb2d83ca7658b"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1IpAddress.php#af32a0574baa0f46e48deb2d83ca7658b">IpAddress</a> ()</td></tr>
<tr class="memdesc:af32a0574baa0f46e48deb2d83ca7658b"><td class="mdescLeft">&#160;</td><td class="mdescRight">Default constructor.  <br /></td></tr>
<tr class="separator:af32a0574baa0f46e48deb2d83ca7658b"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a656b7445ab04cabaa7398685bc09c3f7" id="r_a656b7445ab04cabaa7398685bc09c3f7"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1IpAddress.php#a656b7445ab04cabaa7398685bc09c3f7">IpAddress</a> (const std::string &amp;address)</td></tr>
<tr class="memdesc:a656b7445ab04cabaa7398685bc09c3f7"><td class="mdescLeft">&#160;</td><td class="mdescRight">Construct the address from a string.  <br /></td></tr>
<tr class="separator:a656b7445ab04cabaa7398685bc09c3f7"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a92f2a9be74334a61b96c2fc79fe6eb78" id="r_a92f2a9be74334a61b96c2fc79fe6eb78"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1IpAddress.php#a92f2a9be74334a61b96c2fc79fe6eb78">IpAddress</a> (const char *address)</td></tr>
<tr class="memdesc:a92f2a9be74334a61b96c2fc79fe6eb78"><td class="mdescLeft">&#160;</td><td class="mdescRight">Construct the address from a string.  <br /></td></tr>
<tr class="separator:a92f2a9be74334a61b96c2fc79fe6eb78"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a1d289dcb9ce7a64c600c6f84cba88cc6" id="r_a1d289dcb9ce7a64c600c6f84cba88cc6"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1IpAddress.php#a1d289dcb9ce7a64c600c6f84cba88cc6">IpAddress</a> (Uint8 byte0, Uint8 byte1, Uint8 byte2, Uint8 byte3)</td></tr>
<tr class="memdesc:a1d289dcb9ce7a64c600c6f84cba88cc6"><td class="mdescLeft">&#160;</td><td class="mdescRight">Construct the address from 4 bytes.  <br /></td></tr>
<tr class="separator:a1d289dcb9ce7a64c600c6f84cba88cc6"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a8ed34ba3a40d70eb9f09ac5ae779a162" id="r_a8ed34ba3a40d70eb9f09ac5ae779a162"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1IpAddress.php#a8ed34ba3a40d70eb9f09ac5ae779a162">IpAddress</a> (Uint32 address)</td></tr>
<tr class="memdesc:a8ed34ba3a40d70eb9f09ac5ae779a162"><td class="mdescLeft">&#160;</td><td class="mdescRight">Construct the address from a 32-bits integer.  <br /></td></tr>
<tr class="separator:a8ed34ba3a40d70eb9f09ac5ae779a162"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a88507954142d7fc2176cce7f36422340" id="r_a88507954142d7fc2176cce7f36422340"><td class="memItemLeft" align="right" valign="top">std::string&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1IpAddress.php#a88507954142d7fc2176cce7f36422340">toString</a> () const</td></tr>
<tr class="memdesc:a88507954142d7fc2176cce7f36422340"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get a string representation of the address.  <br /></td></tr>
<tr class="separator:a88507954142d7fc2176cce7f36422340"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ae7911c5ea9562f9602c3e29cd54b15e9" id="r_ae7911c5ea9562f9602c3e29cd54b15e9"><td class="memItemLeft" align="right" valign="top">Uint32&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1IpAddress.php#ae7911c5ea9562f9602c3e29cd54b15e9">toInteger</a> () const</td></tr>
<tr class="memdesc:ae7911c5ea9562f9602c3e29cd54b15e9"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get an integer representation of the address.  <br /></td></tr>
<tr class="separator:ae7911c5ea9562f9602c3e29cd54b15e9"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a id="pub-static-methods" name="pub-static-methods"></a>
Static Public Member Functions</h2></td></tr>
<tr class="memitem:a4c31622ad87edca48adbb8e8ed00ee4a" id="r_a4c31622ad87edca48adbb8e8ed00ee4a"><td class="memItemLeft" align="right" valign="top">static <a class="el" href="classsf_1_1IpAddress.php">IpAddress</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1IpAddress.php#a4c31622ad87edca48adbb8e8ed00ee4a">getLocalAddress</a> ()</td></tr>
<tr class="memdesc:a4c31622ad87edca48adbb8e8ed00ee4a"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the computer's local address.  <br /></td></tr>
<tr class="separator:a4c31622ad87edca48adbb8e8ed00ee4a"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a5c5cbf67e4aacf23c24f2ad991df4c55" id="r_a5c5cbf67e4aacf23c24f2ad991df4c55"><td class="memItemLeft" align="right" valign="top">static <a class="el" href="classsf_1_1IpAddress.php">IpAddress</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1IpAddress.php#a5c5cbf67e4aacf23c24f2ad991df4c55">getPublicAddress</a> (<a class="el" href="classsf_1_1Time.php">Time</a> timeout=<a class="el" href="classsf_1_1Time.php#a8db127b632fa8da21550e7282af11fa0">Time::Zero</a>)</td></tr>
<tr class="memdesc:a5c5cbf67e4aacf23c24f2ad991df4c55"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the computer's public address.  <br /></td></tr>
<tr class="separator:a5c5cbf67e4aacf23c24f2ad991df4c55"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a id="pub-static-attribs" name="pub-static-attribs"></a>
Static Public Attributes</h2></td></tr>
<tr class="memitem:a4619b4abbe3c8fef056e7299db967404" id="r_a4619b4abbe3c8fef056e7299db967404"><td class="memItemLeft" align="right" valign="top">static const <a class="el" href="classsf_1_1IpAddress.php">IpAddress</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1IpAddress.php#a4619b4abbe3c8fef056e7299db967404">None</a></td></tr>
<tr class="memdesc:a4619b4abbe3c8fef056e7299db967404"><td class="mdescLeft">&#160;</td><td class="mdescRight">Value representing an empty/invalid address.  <br /></td></tr>
<tr class="separator:a4619b4abbe3c8fef056e7299db967404"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a3dbc10b0dc6804cc69e29342f7406907" id="r_a3dbc10b0dc6804cc69e29342f7406907"><td class="memItemLeft" align="right" valign="top">static const <a class="el" href="classsf_1_1IpAddress.php">IpAddress</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1IpAddress.php#a3dbc10b0dc6804cc69e29342f7406907">Any</a></td></tr>
<tr class="memdesc:a3dbc10b0dc6804cc69e29342f7406907"><td class="mdescLeft">&#160;</td><td class="mdescRight">Value representing any address (0.0.0.0)  <br /></td></tr>
<tr class="separator:a3dbc10b0dc6804cc69e29342f7406907"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a594d3a8e2559f8fa8ab0a96fa597333b" id="r_a594d3a8e2559f8fa8ab0a96fa597333b"><td class="memItemLeft" align="right" valign="top">static const <a class="el" href="classsf_1_1IpAddress.php">IpAddress</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1IpAddress.php#a594d3a8e2559f8fa8ab0a96fa597333b">LocalHost</a></td></tr>
<tr class="memdesc:a594d3a8e2559f8fa8ab0a96fa597333b"><td class="mdescLeft">&#160;</td><td class="mdescRight">The "localhost" address (for connecting a computer to itself locally)  <br /></td></tr>
<tr class="separator:a594d3a8e2559f8fa8ab0a96fa597333b"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aa93d1d57b65d243f2baf804b6035465c" id="r_aa93d1d57b65d243f2baf804b6035465c"><td class="memItemLeft" align="right" valign="top">static const <a class="el" href="classsf_1_1IpAddress.php">IpAddress</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1IpAddress.php#aa93d1d57b65d243f2baf804b6035465c">Broadcast</a></td></tr>
<tr class="memdesc:aa93d1d57b65d243f2baf804b6035465c"><td class="mdescLeft">&#160;</td><td class="mdescRight">The "broadcast" address (for sending UDP messages to everyone on a local network)  <br /></td></tr>
<tr class="separator:aa93d1d57b65d243f2baf804b6035465c"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a id="friends" name="friends"></a>
Friends</h2></td></tr>
<tr class="memitem:a4886da3f195b8c30d415a94a7009fdd7" id="r_a4886da3f195b8c30d415a94a7009fdd7"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1IpAddress.php#a4886da3f195b8c30d415a94a7009fdd7">operator&lt;</a> (const <a class="el" href="classsf_1_1IpAddress.php">IpAddress</a> &amp;left, const <a class="el" href="classsf_1_1IpAddress.php">IpAddress</a> &amp;right)</td></tr>
<tr class="memdesc:a4886da3f195b8c30d415a94a7009fdd7"><td class="mdescLeft">&#160;</td><td class="mdescRight">Overload of &lt; operator to compare two IP addresses.  <br /></td></tr>
<tr class="separator:a4886da3f195b8c30d415a94a7009fdd7"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>Encapsulate an IPv4 network address. </p>
<p><a class="el" href="classsf_1_1IpAddress.php" title="Encapsulate an IPv4 network address.">sf::IpAddress</a> is a utility class for manipulating network addresses.</p>
<p>It provides a set a implicit constructors and conversion functions to easily build or transform an IP address from/to various representations.</p>
<p>Usage example: </p><div class="fragment"><div class="line"><a class="code hl_class" href="classsf_1_1IpAddress.php">sf::IpAddress</a> a0;                                     <span class="comment">// an invalid address</span></div>
<div class="line"><a class="code hl_class" href="classsf_1_1IpAddress.php">sf::IpAddress</a> a1 = <a class="code hl_variable" href="classsf_1_1IpAddress.php#a4619b4abbe3c8fef056e7299db967404">sf::IpAddress::None</a>;               <span class="comment">// an invalid address (same as a0)</span></div>
<div class="line"><a class="code hl_class" href="classsf_1_1IpAddress.php">sf::IpAddress</a> a2(<span class="stringliteral">&quot;127.0.0.1&quot;</span>);                        <span class="comment">// the local host address</span></div>
<div class="line"><a class="code hl_class" href="classsf_1_1IpAddress.php">sf::IpAddress</a> a3 = <a class="code hl_variable" href="classsf_1_1IpAddress.php#aa93d1d57b65d243f2baf804b6035465c">sf::IpAddress::Broadcast</a>;          <span class="comment">// the broadcast address</span></div>
<div class="line"><a class="code hl_class" href="classsf_1_1IpAddress.php">sf::IpAddress</a> a4(192, 168, 1, 56);                    <span class="comment">// a local address</span></div>
<div class="line"><a class="code hl_class" href="classsf_1_1IpAddress.php">sf::IpAddress</a> a5(<span class="stringliteral">&quot;my_computer&quot;</span>);                      <span class="comment">// a local address created from a network name</span></div>
<div class="line"><a class="code hl_class" href="classsf_1_1IpAddress.php">sf::IpAddress</a> a6(<span class="stringliteral">&quot;89.54.1.169&quot;</span>);                      <span class="comment">// a distant address</span></div>
<div class="line"><a class="code hl_class" href="classsf_1_1IpAddress.php">sf::IpAddress</a> a7(<span class="stringliteral">&quot;www.google.com&quot;</span>);                   <span class="comment">// a distant address created from a network name</span></div>
<div class="line"><a class="code hl_class" href="classsf_1_1IpAddress.php">sf::IpAddress</a> a8 = <a class="code hl_function" href="classsf_1_1IpAddress.php#a4c31622ad87edca48adbb8e8ed00ee4a">sf::IpAddress::getLocalAddress</a>();  <span class="comment">// my address on the local network</span></div>
<div class="line"><a class="code hl_class" href="classsf_1_1IpAddress.php">sf::IpAddress</a> a9 = <a class="code hl_function" href="classsf_1_1IpAddress.php#a5c5cbf67e4aacf23c24f2ad991df4c55">sf::IpAddress::getPublicAddress</a>(); <span class="comment">// my address on the internet</span></div>
<div class="ttc" id="aclasssf_1_1IpAddress_php"><div class="ttname"><a href="classsf_1_1IpAddress.php">sf::IpAddress</a></div><div class="ttdoc">Encapsulate an IPv4 network address.</div><div class="ttdef"><b>Definition</b> <a href="IpAddress_8hpp_source.php#l00044">IpAddress.hpp:45</a></div></div>
<div class="ttc" id="aclasssf_1_1IpAddress_php_a4619b4abbe3c8fef056e7299db967404"><div class="ttname"><a href="classsf_1_1IpAddress.php#a4619b4abbe3c8fef056e7299db967404">sf::IpAddress::None</a></div><div class="ttdeci">static const IpAddress None</div><div class="ttdoc">Value representing an empty/invalid address.</div><div class="ttdef"><b>Definition</b> <a href="IpAddress_8hpp_source.php#l00184">IpAddress.hpp:184</a></div></div>
<div class="ttc" id="aclasssf_1_1IpAddress_php_a4c31622ad87edca48adbb8e8ed00ee4a"><div class="ttname"><a href="classsf_1_1IpAddress.php#a4c31622ad87edca48adbb8e8ed00ee4a">sf::IpAddress::getLocalAddress</a></div><div class="ttdeci">static IpAddress getLocalAddress()</div><div class="ttdoc">Get the computer's local address.</div></div>
<div class="ttc" id="aclasssf_1_1IpAddress_php_a5c5cbf67e4aacf23c24f2ad991df4c55"><div class="ttname"><a href="classsf_1_1IpAddress.php#a5c5cbf67e4aacf23c24f2ad991df4c55">sf::IpAddress::getPublicAddress</a></div><div class="ttdeci">static IpAddress getPublicAddress(Time timeout=Time::Zero)</div><div class="ttdoc">Get the computer's public address.</div></div>
<div class="ttc" id="aclasssf_1_1IpAddress_php_aa93d1d57b65d243f2baf804b6035465c"><div class="ttname"><a href="classsf_1_1IpAddress.php#aa93d1d57b65d243f2baf804b6035465c">sf::IpAddress::Broadcast</a></div><div class="ttdeci">static const IpAddress Broadcast</div><div class="ttdoc">The &quot;broadcast&quot; address (for sending UDP messages to everyone on a local network)</div><div class="ttdef"><b>Definition</b> <a href="IpAddress_8hpp_source.php#l00187">IpAddress.hpp:187</a></div></div>
</div><!-- fragment --><p>Note that <a class="el" href="classsf_1_1IpAddress.php" title="Encapsulate an IPv4 network address.">sf::IpAddress</a> currently doesn't support IPv6 nor other types of network addresses. </p>

<p class="definition">Definition at line <a class="el" href="IpAddress_8hpp_source.php#l00044">44</a> of file <a class="el" href="IpAddress_8hpp_source.php">IpAddress.hpp</a>.</p>
</div><h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a id="af32a0574baa0f46e48deb2d83ca7658b" name="af32a0574baa0f46e48deb2d83ca7658b"></a>
<h2 class="memtitle"><span class="permalink"><a href="#af32a0574baa0f46e48deb2d83ca7658b">&#9670;&#160;</a></span>IpAddress() <span class="overload">[1/5]</span></h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::IpAddress::IpAddress </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Default constructor. </p>
<p>This constructor creates an empty (invalid) address </p>

</div>
</div>
<a id="a656b7445ab04cabaa7398685bc09c3f7" name="a656b7445ab04cabaa7398685bc09c3f7"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a656b7445ab04cabaa7398685bc09c3f7">&#9670;&#160;</a></span>IpAddress() <span class="overload">[2/5]</span></h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::IpAddress::IpAddress </td>
          <td>(</td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>address</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Construct the address from a string. </p>
<p>Here <em>address</em> can be either a decimal address (ex: "192.168.1.56") or a network name (ex: "localhost").</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">address</td><td>IP address or network name </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a id="a92f2a9be74334a61b96c2fc79fe6eb78" name="a92f2a9be74334a61b96c2fc79fe6eb78"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a92f2a9be74334a61b96c2fc79fe6eb78">&#9670;&#160;</a></span>IpAddress() <span class="overload">[3/5]</span></h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::IpAddress::IpAddress </td>
          <td>(</td>
          <td class="paramtype">const char *&#160;</td>
          <td class="paramname"><em>address</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Construct the address from a string. </p>
<p>Here <em>address</em> can be either a decimal address (ex: "192.168.1.56") or a network name (ex: "localhost"). This is equivalent to the constructor taking a std::string parameter, it is defined for convenience so that the implicit conversions from literal strings to <a class="el" href="classsf_1_1IpAddress.php" title="Encapsulate an IPv4 network address.">IpAddress</a> work.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">address</td><td>IP address or network name </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a id="a1d289dcb9ce7a64c600c6f84cba88cc6" name="a1d289dcb9ce7a64c600c6f84cba88cc6"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a1d289dcb9ce7a64c600c6f84cba88cc6">&#9670;&#160;</a></span>IpAddress() <span class="overload">[4/5]</span></h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::IpAddress::IpAddress </td>
          <td>(</td>
          <td class="paramtype">Uint8&#160;</td>
          <td class="paramname"><em>byte0</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">Uint8&#160;</td>
          <td class="paramname"><em>byte1</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">Uint8&#160;</td>
          <td class="paramname"><em>byte2</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">Uint8&#160;</td>
          <td class="paramname"><em>byte3</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Construct the address from 4 bytes. </p>
<p>Calling IpAddress(a, b, c, d) is equivalent to calling <a class="el" href="classsf_1_1IpAddress.php" title="Encapsulate an IPv4 network address.">IpAddress</a>("a.b.c.d"), but safer as it doesn't have to parse a string to get the address components.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">byte0</td><td>First byte of the address </td></tr>
    <tr><td class="paramname">byte1</td><td>Second byte of the address </td></tr>
    <tr><td class="paramname">byte2</td><td>Third byte of the address </td></tr>
    <tr><td class="paramname">byte3</td><td>Fourth byte of the address </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a id="a8ed34ba3a40d70eb9f09ac5ae779a162" name="a8ed34ba3a40d70eb9f09ac5ae779a162"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a8ed34ba3a40d70eb9f09ac5ae779a162">&#9670;&#160;</a></span>IpAddress() <span class="overload">[5/5]</span></h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">sf::IpAddress::IpAddress </td>
          <td>(</td>
          <td class="paramtype">Uint32&#160;</td>
          <td class="paramname"><em>address</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">explicit</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Construct the address from a 32-bits integer. </p>
<p>This constructor uses the internal representation of the address directly. It should be used for optimization purposes, and only if you got that representation from <a class="el" href="classsf_1_1IpAddress.php#ae7911c5ea9562f9602c3e29cd54b15e9" title="Get an integer representation of the address.">IpAddress::toInteger()</a>.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">address</td><td>4 bytes of the address packed into a 32-bits integer</td></tr>
  </table>
  </dd>
</dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1IpAddress.php#ae7911c5ea9562f9602c3e29cd54b15e9" title="Get an integer representation of the address.">toInteger</a> </dd></dl>

</div>
</div>
<h2 class="groupheader">Member Function Documentation</h2>
<a id="a4c31622ad87edca48adbb8e8ed00ee4a" name="a4c31622ad87edca48adbb8e8ed00ee4a"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a4c31622ad87edca48adbb8e8ed00ee4a">&#9670;&#160;</a></span>getLocalAddress()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static <a class="el" href="classsf_1_1IpAddress.php">IpAddress</a> sf::IpAddress::getLocalAddress </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Get the computer's local address. </p>
<p>The local address is the address of the computer from the LAN point of view, i.e. something like 192.168.1.56. It is meaningful only for communications over the local network. Unlike getPublicAddress, this function is fast and may be used safely anywhere.</p>
<dl class="section return"><dt>Returns</dt><dd>Local IP address of the computer</dd></dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1IpAddress.php#a5c5cbf67e4aacf23c24f2ad991df4c55" title="Get the computer&#39;s public address.">getPublicAddress</a> </dd></dl>

</div>
</div>
<a id="a5c5cbf67e4aacf23c24f2ad991df4c55" name="a5c5cbf67e4aacf23c24f2ad991df4c55"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a5c5cbf67e4aacf23c24f2ad991df4c55">&#9670;&#160;</a></span>getPublicAddress()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static <a class="el" href="classsf_1_1IpAddress.php">IpAddress</a> sf::IpAddress::getPublicAddress </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="classsf_1_1Time.php">Time</a>&#160;</td>
          <td class="paramname"><em>timeout</em> = <code><a class="el" href="classsf_1_1Time.php#a8db127b632fa8da21550e7282af11fa0">Time::Zero</a></code></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Get the computer's public address. </p>
<p>The public address is the address of the computer from the internet point of view, i.e. something like 89.54.1.169. It is necessary for communications over the world wide web. The only way to get a public address is to ask it to a distant website; as a consequence, this function depends on both your network connection and the server, and may be very slow. You should use it as few as possible. Because this function depends on the network connection and on a distant server, you may use a time limit if you don't want your program to be possibly stuck waiting in case there is a problem; this limit is deactivated by default.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">timeout</td><td>Maximum time to wait</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Public IP address of the computer</dd></dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1IpAddress.php#a4c31622ad87edca48adbb8e8ed00ee4a" title="Get the computer&#39;s local address.">getLocalAddress</a> </dd></dl>

</div>
</div>
<a id="ae7911c5ea9562f9602c3e29cd54b15e9" name="ae7911c5ea9562f9602c3e29cd54b15e9"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ae7911c5ea9562f9602c3e29cd54b15e9">&#9670;&#160;</a></span>toInteger()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">Uint32 sf::IpAddress::toInteger </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Get an integer representation of the address. </p>
<p>The returned number is the internal representation of the address, and should be used for optimization purposes only (like sending the address through a socket). The integer produced by this function can then be converted back to a <a class="el" href="classsf_1_1IpAddress.php" title="Encapsulate an IPv4 network address.">sf::IpAddress</a> with the proper constructor.</p>
<dl class="section return"><dt>Returns</dt><dd>32-bits unsigned integer representation of the address</dd></dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1IpAddress.php#a88507954142d7fc2176cce7f36422340" title="Get a string representation of the address.">toString</a> </dd></dl>

</div>
</div>
<a id="a88507954142d7fc2176cce7f36422340" name="a88507954142d7fc2176cce7f36422340"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a88507954142d7fc2176cce7f36422340">&#9670;&#160;</a></span>toString()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">std::string sf::IpAddress::toString </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Get a string representation of the address. </p>
<p>The returned string is the decimal representation of the IP address (like "192.168.1.56"), even if it was constructed from a host name.</p>
<dl class="section return"><dt>Returns</dt><dd><a class="el" href="classsf_1_1String.php" title="Utility string class that automatically handles conversions between types and encodings.">String</a> representation of the address</dd></dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1IpAddress.php#ae7911c5ea9562f9602c3e29cd54b15e9" title="Get an integer representation of the address.">toInteger</a> </dd></dl>

</div>
</div>
<h2 class="groupheader">Friends And Related Symbol Documentation</h2>
<a id="a4886da3f195b8c30d415a94a7009fdd7" name="a4886da3f195b8c30d415a94a7009fdd7"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a4886da3f195b8c30d415a94a7009fdd7">&#9670;&#160;</a></span>operator&lt;</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">bool operator&lt; </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="classsf_1_1IpAddress.php">IpAddress</a> &amp;&#160;</td>
          <td class="paramname"><em>left</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const <a class="el" href="classsf_1_1IpAddress.php">IpAddress</a> &amp;&#160;</td>
          <td class="paramname"><em>right</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">friend</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Overload of &lt; operator to compare two IP addresses. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">left</td><td>Left operand (a IP address) </td></tr>
    <tr><td class="paramname">right</td><td>Right operand (a IP address)</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>True if <em>left</em> is lesser than <em>right</em> </dd></dl>

</div>
</div>
<h2 class="groupheader">Member Data Documentation</h2>
<a id="a3dbc10b0dc6804cc69e29342f7406907" name="a3dbc10b0dc6804cc69e29342f7406907"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a3dbc10b0dc6804cc69e29342f7406907">&#9670;&#160;</a></span>Any</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">const <a class="el" href="classsf_1_1IpAddress.php">IpAddress</a> sf::IpAddress::Any</td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Value representing any address (0.0.0.0) </p>

<p class="definition">Definition at line <a class="el" href="IpAddress_8hpp_source.php#l00185">185</a> of file <a class="el" href="IpAddress_8hpp_source.php">IpAddress.hpp</a>.</p>

</div>
</div>
<a id="aa93d1d57b65d243f2baf804b6035465c" name="aa93d1d57b65d243f2baf804b6035465c"></a>
<h2 class="memtitle"><span class="permalink"><a href="#aa93d1d57b65d243f2baf804b6035465c">&#9670;&#160;</a></span>Broadcast</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">const <a class="el" href="classsf_1_1IpAddress.php">IpAddress</a> sf::IpAddress::Broadcast</td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>The "broadcast" address (for sending UDP messages to everyone on a local network) </p>

<p class="definition">Definition at line <a class="el" href="IpAddress_8hpp_source.php#l00187">187</a> of file <a class="el" href="IpAddress_8hpp_source.php">IpAddress.hpp</a>.</p>

</div>
</div>
<a id="a594d3a8e2559f8fa8ab0a96fa597333b" name="a594d3a8e2559f8fa8ab0a96fa597333b"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a594d3a8e2559f8fa8ab0a96fa597333b">&#9670;&#160;</a></span>LocalHost</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">const <a class="el" href="classsf_1_1IpAddress.php">IpAddress</a> sf::IpAddress::LocalHost</td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>The "localhost" address (for connecting a computer to itself locally) </p>

<p class="definition">Definition at line <a class="el" href="IpAddress_8hpp_source.php#l00186">186</a> of file <a class="el" href="IpAddress_8hpp_source.php">IpAddress.hpp</a>.</p>

</div>
</div>
<a id="a4619b4abbe3c8fef056e7299db967404" name="a4619b4abbe3c8fef056e7299db967404"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a4619b4abbe3c8fef056e7299db967404">&#9670;&#160;</a></span>None</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">const <a class="el" href="classsf_1_1IpAddress.php">IpAddress</a> sf::IpAddress::None</td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Value representing an empty/invalid address. </p>

<p class="definition">Definition at line <a class="el" href="IpAddress_8hpp_source.php#l00184">184</a> of file <a class="el" href="IpAddress_8hpp_source.php">IpAddress.hpp</a>.</p>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="IpAddress_8hpp_source.php">IpAddress.hpp</a></li>
</ul>
</div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
