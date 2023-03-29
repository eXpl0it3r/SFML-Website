<?php
    $version = '2.6.0'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'sf::SoundFileWriter Class Reference'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header-fr.php');
?>
<!-- Generated by Doxygen 1.9.6 -->
<script type="text/javascript">
/* @license magnet:?xt=urn:btih:d3d9a9a6595521f9666a5e94cc830dab83b65699&amp;dn=expat.txt MIT */
var searchBox = new SearchBox("searchBox", "search/",'.php');
/* @license-end */
</script>
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
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
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1SoundFileWriter.php">SoundFileWriter</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-methods">Public Member Functions</a> &#124;
<a href="classsf_1_1SoundFileWriter-members.php">List of all members</a>  </div>
  <div class="headertitle"><div class="title">sf::SoundFileWriter Class Reference<span class="mlabels"><span class="mlabel">abstract</span></span><div class="ingroups"><a class="el" href="group__audio.php">Audio module</a></div></div></div>
</div><!--header-->
<div class="contents">

<p>Abstract base class for sound file encoding.  
 <a href="classsf_1_1SoundFileWriter.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="SoundFileWriter_8hpp_source.php">SFML/Audio/SoundFileWriter.hpp</a>&gt;</code></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a id="pub-methods" name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:a76944fc158688f35050bd5b592c90270"><td class="memItemLeft" align="right" valign="top">virtual&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundFileWriter.php#a76944fc158688f35050bd5b592c90270">~SoundFileWriter</a> ()</td></tr>
<tr class="memdesc:a76944fc158688f35050bd5b592c90270"><td class="mdescLeft">&#160;</td><td class="mdescRight">Virtual destructor.  <br /></td></tr>
<tr class="separator:a76944fc158688f35050bd5b592c90270"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a5c92bcaaa880ef4d3eaab18dae1d3d07"><td class="memItemLeft" align="right" valign="top">virtual bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundFileWriter.php#a5c92bcaaa880ef4d3eaab18dae1d3d07">open</a> (const std::string &amp;filename, unsigned int sampleRate, unsigned int channelCount)=0</td></tr>
<tr class="memdesc:a5c92bcaaa880ef4d3eaab18dae1d3d07"><td class="mdescLeft">&#160;</td><td class="mdescRight">Open a sound file for writing.  <br /></td></tr>
<tr class="separator:a5c92bcaaa880ef4d3eaab18dae1d3d07"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a4ce597e7682d22c5b2c98d77e931a1da"><td class="memItemLeft" align="right" valign="top">virtual void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundFileWriter.php#a4ce597e7682d22c5b2c98d77e931a1da">write</a> (const Int16 *samples, Uint64 count)=0</td></tr>
<tr class="memdesc:a4ce597e7682d22c5b2c98d77e931a1da"><td class="mdescLeft">&#160;</td><td class="mdescRight">Write audio samples to the open file.  <br /></td></tr>
<tr class="separator:a4ce597e7682d22c5b2c98d77e931a1da"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>Abstract base class for sound file encoding. </p>
<p>This class allows users to write audio file formats not natively supported by SFML, and thus extend the set of supported writable audio formats.</p>
<p>A valid sound file writer must override the open and write functions, as well as providing a static check function; the latter is used by SFML to find a suitable writer for a given filename.</p>
<p>To register a new writer, use the <a class="el" href="classsf_1_1SoundFileFactory.php#abb6e082ea3fedf22c8648113d1be5755" title="Register a new writer.">sf::SoundFileFactory::registerWriter</a> template function.</p>
<p>Usage example: </p><div class="fragment"><div class="line"><span class="keyword">class </span>MySoundFileWriter : <span class="keyword">public</span> <a class="code hl_class" href="classsf_1_1SoundFileWriter.php">sf::SoundFileWriter</a></div>
<div class="line">{</div>
<div class="line"><span class="keyword">public</span>:</div>
<div class="line"> </div>
<div class="line">    <span class="keyword">static</span> <span class="keywordtype">bool</span> check(<span class="keyword">const</span> std::string&amp; filename)</div>
<div class="line">    {</div>
<div class="line">        <span class="comment">// typically, check the extension</span></div>
<div class="line">        <span class="comment">// return true if the writer can handle the format</span></div>
<div class="line">    }</div>
<div class="line"> </div>
<div class="line">    <span class="keyword">virtual</span> <span class="keywordtype">bool</span> open(<span class="keyword">const</span> std::string&amp; filename, <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> sampleRate, <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> channelCount)</div>
<div class="line">    {</div>
<div class="line">        <span class="comment">// open the file &#39;filename&#39; for writing,</span></div>
<div class="line">        <span class="comment">// write the given sample rate and channel count to the file header</span></div>
<div class="line">        <span class="comment">// return true on success</span></div>
<div class="line">    }</div>
<div class="line"> </div>
<div class="line">    <span class="keyword">virtual</span> <span class="keywordtype">void</span> write(<span class="keyword">const</span> sf::Int16* samples, sf::Uint64 count)</div>
<div class="line">    {</div>
<div class="line">        <span class="comment">// write &#39;count&#39; samples stored at address &#39;samples&#39;,</span></div>
<div class="line">        <span class="comment">// convert them (for example to normalized float) if the format requires it</span></div>
<div class="line">    }</div>
<div class="line">};</div>
<div class="line"> </div>
<div class="line">sf::SoundFileFactory::registerWriter&lt;MySoundFileWriter&gt;();</div>
<div class="ttc" id="aclasssf_1_1SoundFileWriter_php"><div class="ttname"><a href="classsf_1_1SoundFileWriter.php">sf::SoundFileWriter</a></div><div class="ttdoc">Abstract base class for sound file encoding.</div><div class="ttdef"><b>Definition:</b> <a href="SoundFileWriter_8hpp_source.php#l00041">SoundFileWriter.hpp:42</a></div></div>
</div><!-- fragment --><dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1OutputSoundFile.php" title="Provide write access to sound files.">sf::OutputSoundFile</a>, <a class="el" href="classsf_1_1SoundFileFactory.php" title="Manages and instantiates sound file readers and writers.">sf::SoundFileFactory</a>, <a class="el" href="classsf_1_1SoundFileReader.php" title="Abstract base class for sound file decoding.">sf::SoundFileReader</a> </dd></dl>

<p class="definition">Definition at line <a class="el" href="SoundFileWriter_8hpp_source.php#l00041">41</a> of file <a class="el" href="SoundFileWriter_8hpp_source.php">SoundFileWriter.hpp</a>.</p>
</div><h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a id="a76944fc158688f35050bd5b592c90270" name="a76944fc158688f35050bd5b592c90270"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a76944fc158688f35050bd5b592c90270">&#9670;&#160;</a></span>~SoundFileWriter()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">virtual sf::SoundFileWriter::~SoundFileWriter </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span><span class="mlabel">virtual</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Virtual destructor. </p>

<p class="definition">Definition at line <a class="el" href="SoundFileWriter_8hpp_source.php#l00049">49</a> of file <a class="el" href="SoundFileWriter_8hpp_source.php">SoundFileWriter.hpp</a>.</p>

</div>
</div>
<h2 class="groupheader">Member Function Documentation</h2>
<a id="a5c92bcaaa880ef4d3eaab18dae1d3d07" name="a5c92bcaaa880ef4d3eaab18dae1d3d07"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a5c92bcaaa880ef4d3eaab18dae1d3d07">&#9670;&#160;</a></span>open()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">virtual bool sf::SoundFileWriter::open </td>
          <td>(</td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>filename</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned int&#160;</td>
          <td class="paramname"><em>sampleRate</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned int&#160;</td>
          <td class="paramname"><em>channelCount</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">pure virtual</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Open a sound file for writing. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">filename</td><td>Path of the file to open </td></tr>
    <tr><td class="paramname">sampleRate</td><td>Sample rate of the sound </td></tr>
    <tr><td class="paramname">channelCount</td><td>Number of channels of the sound</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>True if the file was successfully opened </dd></dl>

</div>
</div>
<a id="a4ce597e7682d22c5b2c98d77e931a1da" name="a4ce597e7682d22c5b2c98d77e931a1da"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a4ce597e7682d22c5b2c98d77e931a1da">&#9670;&#160;</a></span>write()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">virtual void sf::SoundFileWriter::write </td>
          <td>(</td>
          <td class="paramtype">const Int16 *&#160;</td>
          <td class="paramname"><em>samples</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">Uint64&#160;</td>
          <td class="paramname"><em>count</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">pure virtual</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Write audio samples to the open file. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">samples</td><td>Pointer to the sample array to write </td></tr>
    <tr><td class="paramname">count</td><td>Number of samples to write </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="SoundFileWriter_8hpp_source.php">SoundFileWriter.hpp</a></li>
</ul>
</div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
