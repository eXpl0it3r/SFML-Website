<?php
    $version = '2.6.1'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'sf::Clipboard Class Reference'; // the $ title variable is automatically replaced by doxygen with the page title
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
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1Clipboard.php">Clipboard</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-static-methods">Static Public Member Functions</a> &#124;
<a href="classsf_1_1Clipboard-members.php">List of all members</a>  </div>
  <div class="headertitle"><div class="title">sf::Clipboard Class Reference<div class="ingroups"><a class="el" href="group__window.php">Window module</a></div></div></div>
</div><!--header-->
<div class="contents">

<p>Give access to the system clipboard.  
 <a href="classsf_1_1Clipboard.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="Clipboard_8hpp_source.php">SFML/Window/Clipboard.hpp</a>&gt;</code></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a id="pub-static-methods" name="pub-static-methods"></a>
Static Public Member Functions</h2></td></tr>
<tr class="memitem:a3c385cc2b6d78a3d0cfa29928a7d6eb8" id="r_a3c385cc2b6d78a3d0cfa29928a7d6eb8"><td class="memItemLeft" align="right" valign="top">static <a class="el" href="classsf_1_1String.php">String</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Clipboard.php#a3c385cc2b6d78a3d0cfa29928a7d6eb8">getString</a> ()</td></tr>
<tr class="memdesc:a3c385cc2b6d78a3d0cfa29928a7d6eb8"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the content of the clipboard as string data.  <br /></td></tr>
<tr class="separator:a3c385cc2b6d78a3d0cfa29928a7d6eb8"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a29c597c2165d3ca3a89c17f31ff7413d" id="r_a29c597c2165d3ca3a89c17f31ff7413d"><td class="memItemLeft" align="right" valign="top">static void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Clipboard.php#a29c597c2165d3ca3a89c17f31ff7413d">setString</a> (const <a class="el" href="classsf_1_1String.php">String</a> &amp;text)</td></tr>
<tr class="memdesc:a29c597c2165d3ca3a89c17f31ff7413d"><td class="mdescLeft">&#160;</td><td class="mdescRight">Set the content of the clipboard as string data.  <br /></td></tr>
<tr class="separator:a29c597c2165d3ca3a89c17f31ff7413d"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>Give access to the system clipboard. </p>
<p><a class="el" href="classsf_1_1Clipboard.php" title="Give access to the system clipboard.">sf::Clipboard</a> provides an interface for getting and setting the contents of the system clipboard.</p>
<p>It is important to note that due to limitations on some operating systems, setting the clipboard contents is only guaranteed to work if there is currently an open window for which events are being handled.</p>
<p>Usage example: </p><div class="fragment"><div class="line"><span class="comment">// get the clipboard content as a string</span></div>
<div class="line"><a class="code hl_class" href="classsf_1_1String.php">sf::String</a> <span class="keywordtype">string</span> = <a class="code hl_function" href="classsf_1_1Clipboard.php#a3c385cc2b6d78a3d0cfa29928a7d6eb8">sf::Clipboard::getString</a>();</div>
<div class="line"> </div>
<div class="line"><span class="comment">// or use it in the event loop</span></div>
<div class="line"><a class="code hl_class" href="classsf_1_1Event.php">sf::Event</a> event;</div>
<div class="line"><span class="keywordflow">while</span>(window.pollEvent(event))</div>
<div class="line">{</div>
<div class="line">    <span class="keywordflow">if</span>(event.<a class="code hl_variable" href="classsf_1_1Event.php#adf2f8044f713fd9d6019077b0d1ffe0a">type</a> == <a class="code hl_enumvalue" href="classsf_1_1Event.php#af41fa9ed45c02449030699f671331d4aa316e4212e083f1dce79efd8d9e9c0a95">sf::Event::Closed</a>)</div>
<div class="line">        window.close();</div>
<div class="line">    <span class="keywordflow">if</span>(event.<a class="code hl_variable" href="classsf_1_1Event.php#adf2f8044f713fd9d6019077b0d1ffe0a">type</a> == <a class="code hl_enumvalue" href="classsf_1_1Event.php#af41fa9ed45c02449030699f671331d4aac3c7abfaa98c73bfe6be0b57df09c71b">sf::Event::KeyPressed</a>)</div>
<div class="line">    {</div>
<div class="line">        <span class="comment">// Using Ctrl + V to paste a string into SFML</span></div>
<div class="line">        <span class="keywordflow">if</span>(event.<a class="code hl_variable" href="classsf_1_1Event.php#a45b92fc6757ca7c193f06b302e424ab0">key</a>.<a class="code hl_variable" href="structsf_1_1Event_1_1KeyEvent.php#a9255861c2f88501d80ad6b44a310b62f">control</a> &amp;&amp; event.<a class="code hl_variable" href="classsf_1_1Event.php#a45b92fc6757ca7c193f06b302e424ab0">key</a>.<a class="code hl_variable" href="structsf_1_1Event_1_1KeyEvent.php#a2879fdab8a68cb1c6ecc45730a2d0e61">code</a> == <a class="code hl_enumvalue" href="classsf_1_1Keyboard.php#acb4cacd7cc5802dec45724cf3314a142aec9074abd2d41628d1ecdc14e1b2cd96">sf::Keyboard::V</a>)</div>
<div class="line">            <span class="keywordtype">string</span> = <a class="code hl_function" href="classsf_1_1Clipboard.php#a3c385cc2b6d78a3d0cfa29928a7d6eb8">sf::Clipboard::getString</a>();</div>
<div class="line"> </div>
<div class="line">        <span class="comment">// Using Ctrl + C to copy a string out of SFML</span></div>
<div class="line">        <span class="keywordflow">if</span>(event.<a class="code hl_variable" href="classsf_1_1Event.php#a45b92fc6757ca7c193f06b302e424ab0">key</a>.<a class="code hl_variable" href="structsf_1_1Event_1_1KeyEvent.php#a9255861c2f88501d80ad6b44a310b62f">control</a> &amp;&amp; event.<a class="code hl_variable" href="classsf_1_1Event.php#a45b92fc6757ca7c193f06b302e424ab0">key</a>.<a class="code hl_variable" href="structsf_1_1Event_1_1KeyEvent.php#a2879fdab8a68cb1c6ecc45730a2d0e61">code</a> == <a class="code hl_enumvalue" href="classsf_1_1Keyboard.php#acb4cacd7cc5802dec45724cf3314a142a0d586c4ec0cd6b537cb6f49180fedecc">sf::Keyboard::C</a>)</div>
<div class="line">            <a class="code hl_function" href="classsf_1_1Clipboard.php#a29c597c2165d3ca3a89c17f31ff7413d">sf::Clipboard::setString</a>(<span class="stringliteral">&quot;Hello World!&quot;</span>);</div>
<div class="line">    }</div>
<div class="line">}</div>
<div class="ttc" id="aclasssf_1_1Clipboard_php_a29c597c2165d3ca3a89c17f31ff7413d"><div class="ttname"><a href="classsf_1_1Clipboard.php#a29c597c2165d3ca3a89c17f31ff7413d">sf::Clipboard::setString</a></div><div class="ttdeci">static void setString(const String &amp;text)</div><div class="ttdoc">Set the content of the clipboard as string data.</div></div>
<div class="ttc" id="aclasssf_1_1Clipboard_php_a3c385cc2b6d78a3d0cfa29928a7d6eb8"><div class="ttname"><a href="classsf_1_1Clipboard.php#a3c385cc2b6d78a3d0cfa29928a7d6eb8">sf::Clipboard::getString</a></div><div class="ttdeci">static String getString()</div><div class="ttdoc">Get the content of the clipboard as string data.</div></div>
<div class="ttc" id="aclasssf_1_1Event_php"><div class="ttname"><a href="classsf_1_1Event.php">sf::Event</a></div><div class="ttdoc">Defines a system event and its parameters.</div><div class="ttdef"><b>Definition</b> <a href="Event_8hpp_source.php#l00044">Event.hpp:45</a></div></div>
<div class="ttc" id="aclasssf_1_1Event_php_a45b92fc6757ca7c193f06b302e424ab0"><div class="ttname"><a href="classsf_1_1Event.php#a45b92fc6757ca7c193f06b302e424ab0">sf::Event::key</a></div><div class="ttdeci">KeyEvent key</div><div class="ttdoc">Key event parameters (Event::KeyPressed, Event::KeyReleased)</div><div class="ttdef"><b>Definition</b> <a href="Event_8hpp_source.php#l00225">Event.hpp:225</a></div></div>
<div class="ttc" id="aclasssf_1_1Event_php_adf2f8044f713fd9d6019077b0d1ffe0a"><div class="ttname"><a href="classsf_1_1Event.php#adf2f8044f713fd9d6019077b0d1ffe0a">sf::Event::type</a></div><div class="ttdeci">EventType type</div><div class="ttdoc">Type of the event.</div><div class="ttdef"><b>Definition</b> <a href="Event_8hpp_source.php#l00220">Event.hpp:220</a></div></div>
<div class="ttc" id="aclasssf_1_1Event_php_af41fa9ed45c02449030699f671331d4aa316e4212e083f1dce79efd8d9e9c0a95"><div class="ttname"><a href="classsf_1_1Event.php#af41fa9ed45c02449030699f671331d4aa316e4212e083f1dce79efd8d9e9c0a95">sf::Event::Closed</a></div><div class="ttdeci">@ Closed</div><div class="ttdoc">The window requested to be closed (no data)</div><div class="ttdef"><b>Definition</b> <a href="Event_8hpp_source.php#l00190">Event.hpp:190</a></div></div>
<div class="ttc" id="aclasssf_1_1Event_php_af41fa9ed45c02449030699f671331d4aac3c7abfaa98c73bfe6be0b57df09c71b"><div class="ttname"><a href="classsf_1_1Event.php#af41fa9ed45c02449030699f671331d4aac3c7abfaa98c73bfe6be0b57df09c71b">sf::Event::KeyPressed</a></div><div class="ttdeci">@ KeyPressed</div><div class="ttdoc">A key was pressed (data in event.key)</div><div class="ttdef"><b>Definition</b> <a href="Event_8hpp_source.php#l00195">Event.hpp:195</a></div></div>
<div class="ttc" id="aclasssf_1_1Keyboard_php_acb4cacd7cc5802dec45724cf3314a142a0d586c4ec0cd6b537cb6f49180fedecc"><div class="ttname"><a href="classsf_1_1Keyboard.php#acb4cacd7cc5802dec45724cf3314a142a0d586c4ec0cd6b537cb6f49180fedecc">sf::Keyboard::C</a></div><div class="ttdeci">@ C</div><div class="ttdoc">The C key.</div><div class="ttdef"><b>Definition</b> <a href="Keyboard_8hpp_source.php#l00059">Keyboard.hpp:59</a></div></div>
<div class="ttc" id="aclasssf_1_1Keyboard_php_acb4cacd7cc5802dec45724cf3314a142aec9074abd2d41628d1ecdc14e1b2cd96"><div class="ttname"><a href="classsf_1_1Keyboard.php#acb4cacd7cc5802dec45724cf3314a142aec9074abd2d41628d1ecdc14e1b2cd96">sf::Keyboard::V</a></div><div class="ttdeci">@ V</div><div class="ttdoc">The V key.</div><div class="ttdef"><b>Definition</b> <a href="Keyboard_8hpp_source.php#l00078">Keyboard.hpp:78</a></div></div>
<div class="ttc" id="aclasssf_1_1String_php"><div class="ttname"><a href="classsf_1_1String.php">sf::String</a></div><div class="ttdoc">Utility string class that automatically handles conversions between types and encodings.</div><div class="ttdef"><b>Definition</b> <a href="String_8hpp_source.php#l00045">String.hpp:46</a></div></div>
<div class="ttc" id="astructsf_1_1Event_1_1KeyEvent_php_a2879fdab8a68cb1c6ecc45730a2d0e61"><div class="ttname"><a href="structsf_1_1Event_1_1KeyEvent.php#a2879fdab8a68cb1c6ecc45730a2d0e61">sf::Event::KeyEvent::code</a></div><div class="ttdeci">Keyboard::Key code</div><div class="ttdoc">Code of the key that has been pressed.</div><div class="ttdef"><b>Definition</b> <a href="Event_8hpp_source.php#l00064">Event.hpp:64</a></div></div>
<div class="ttc" id="astructsf_1_1Event_1_1KeyEvent_php_a9255861c2f88501d80ad6b44a310b62f"><div class="ttname"><a href="structsf_1_1Event_1_1KeyEvent.php#a9255861c2f88501d80ad6b44a310b62f">sf::Event::KeyEvent::control</a></div><div class="ttdeci">bool control</div><div class="ttdoc">Is the Control key pressed?</div><div class="ttdef"><b>Definition</b> <a href="Event_8hpp_source.php#l00067">Event.hpp:67</a></div></div>
</div><!-- fragment --><dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1String.php" title="Utility string class that automatically handles conversions between types and encodings.">sf::String</a>, <a class="el" href="classsf_1_1Event.php" title="Defines a system event and its parameters.">sf::Event</a> </dd></dl>

<p class="definition">Definition at line <a class="el" href="Clipboard_8hpp_source.php#l00041">41</a> of file <a class="el" href="Clipboard_8hpp_source.php">Clipboard.hpp</a>.</p>
</div><h2 class="groupheader">Member Function Documentation</h2>
<a id="a3c385cc2b6d78a3d0cfa29928a7d6eb8" name="a3c385cc2b6d78a3d0cfa29928a7d6eb8"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a3c385cc2b6d78a3d0cfa29928a7d6eb8">&#9670;&#160;</a></span>getString()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static <a class="el" href="classsf_1_1String.php">String</a> sf::Clipboard::getString </td>
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

<p>Get the content of the clipboard as string data. </p>
<p>This function returns the content of the clipboard as a string. If the clipboard does not contain string it returns an empty <a class="el" href="classsf_1_1String.php" title="Utility string class that automatically handles conversions between types and encodings.">sf::String</a> object.</p>
<dl class="section return"><dt>Returns</dt><dd><a class="el" href="classsf_1_1Clipboard.php" title="Give access to the system clipboard.">Clipboard</a> contents as <a class="el" href="classsf_1_1String.php" title="Utility string class that automatically handles conversions between types and encodings.">sf::String</a> object </dd></dl>

</div>
</div>
<a id="a29c597c2165d3ca3a89c17f31ff7413d" name="a29c597c2165d3ca3a89c17f31ff7413d"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a29c597c2165d3ca3a89c17f31ff7413d">&#9670;&#160;</a></span>setString()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static void sf::Clipboard::setString </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="classsf_1_1String.php">String</a> &amp;&#160;</td>
          <td class="paramname"><em>text</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Set the content of the clipboard as string data. </p>
<p>This function sets the content of the clipboard as a string.</p>
<dl class="section warning"><dt>Warning</dt><dd>Due to limitations on some operating systems, setting the clipboard contents is only guaranteed to work if there is currently an open window for which events are being handled.</dd></dl>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">text</td><td><a class="el" href="classsf_1_1String.php" title="Utility string class that automatically handles conversions between types and encodings.">sf::String</a> containing the data to be sent to the clipboard </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="Clipboard_8hpp_source.php">Clipboard.hpp</a></li>
</ul>
</div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
