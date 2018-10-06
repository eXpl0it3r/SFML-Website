<?php
    $version = '2.5.1'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'sf::OutputSoundFile Class Reference'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header-fr.php');
?>
<!-- Generated by Doxygen 1.8.14 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="namespaces.php"><span>Namespaces</span></a></li>
      <li class="current"><a href="annotated.php"><span>Classes</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
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
<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1OutputSoundFile.php">OutputSoundFile</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-methods">Public Member Functions</a> &#124;
<a href="classsf_1_1OutputSoundFile-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">sf::OutputSoundFile Class Reference<div class="ingroups"><a class="el" href="group__audio.php">Audio module</a></div></div>  </div>
</div><!--header-->
<div class="contents">

<p>Provide write access to sound files.  
 <a href="classsf_1_1OutputSoundFile.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="OutputSoundFile_8hpp_source.php">OutputSoundFile.hpp</a>&gt;</code></p>
<div class="dynheader">
Inheritance diagram for sf::OutputSoundFile:</div>
<div class="dyncontent">
 <div class="center">
  <img src="classsf_1_1OutputSoundFile.png" usemap="#sf::OutputSoundFile_map" alt=""/>
  <map id="sf::OutputSoundFile_map" name="sf::OutputSoundFile_map">
<area href="classsf_1_1NonCopyable.php" title="Utility class that makes any derived class non-copyable. " alt="sf::NonCopyable" shape="rect" coords="0,0,122,24"/>
</map>
 </div></div>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:a7ae9f2dbd0991fa9394726a3d58bb19e"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1OutputSoundFile.php#a7ae9f2dbd0991fa9394726a3d58bb19e">OutputSoundFile</a> ()</td></tr>
<tr class="memdesc:a7ae9f2dbd0991fa9394726a3d58bb19e"><td class="mdescLeft">&#160;</td><td class="mdescRight">Default constructor.  <a href="#a7ae9f2dbd0991fa9394726a3d58bb19e">More...</a><br /></td></tr>
<tr class="separator:a7ae9f2dbd0991fa9394726a3d58bb19e"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a1492adbfef1f391d720afb56f068182e"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1OutputSoundFile.php#a1492adbfef1f391d720afb56f068182e">~OutputSoundFile</a> ()</td></tr>
<tr class="memdesc:a1492adbfef1f391d720afb56f068182e"><td class="mdescLeft">&#160;</td><td class="mdescRight">Destructor.  <a href="#a1492adbfef1f391d720afb56f068182e">More...</a><br /></td></tr>
<tr class="separator:a1492adbfef1f391d720afb56f068182e"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ae5e55f01c53c1422c44eaed2eed67fce"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1OutputSoundFile.php#ae5e55f01c53c1422c44eaed2eed67fce">openFromFile</a> (const std::string &amp;filename, unsigned int sampleRate, unsigned int channelCount)</td></tr>
<tr class="memdesc:ae5e55f01c53c1422c44eaed2eed67fce"><td class="mdescLeft">&#160;</td><td class="mdescRight">Open the sound file from the disk for writing.  <a href="#ae5e55f01c53c1422c44eaed2eed67fce">More...</a><br /></td></tr>
<tr class="separator:ae5e55f01c53c1422c44eaed2eed67fce"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:adfcf525fced71121f336fa89faac3d67"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1OutputSoundFile.php#adfcf525fced71121f336fa89faac3d67">write</a> (const Int16 *samples, Uint64 count)</td></tr>
<tr class="memdesc:adfcf525fced71121f336fa89faac3d67"><td class="mdescLeft">&#160;</td><td class="mdescRight">Write audio samples to the file.  <a href="#adfcf525fced71121f336fa89faac3d67">More...</a><br /></td></tr>
<tr class="separator:adfcf525fced71121f336fa89faac3d67"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>Provide write access to sound files. </p>
<p>This class encodes audio samples to a sound file.</p>
<p>It is used internally by higher-level classes such as <a class="el" href="classsf_1_1SoundBuffer.php" title="Storage for audio samples defining a sound. ">sf::SoundBuffer</a>, but can also be useful if you want to create audio files from custom data sources, like generated audio samples.</p>
<p>Usage example: </p><div class="fragment"><div class="line"><span class="comment">// Create a sound file, ogg/vorbis format, 44100 Hz, stereo</span></div><div class="line"><a class="code" href="classsf_1_1OutputSoundFile.php">sf::OutputSoundFile</a> file;</div><div class="line"><span class="keywordflow">if</span> (!file.<a class="code" href="classsf_1_1OutputSoundFile.php#ae5e55f01c53c1422c44eaed2eed67fce">openFromFile</a>(<span class="stringliteral">&quot;music.ogg&quot;</span>, 44100, 2))</div><div class="line">    <span class="comment">/* error */</span>;</div><div class="line"></div><div class="line"><span class="keywordflow">while</span> (...)</div><div class="line">{</div><div class="line">    <span class="comment">// Read or generate audio samples from your custom source</span></div><div class="line">    std::vector&lt;sf::Int16&gt; samples = ...;</div><div class="line"></div><div class="line">    <span class="comment">// Write them to the file</span></div><div class="line">    file.<a class="code" href="classsf_1_1OutputSoundFile.php#adfcf525fced71121f336fa89faac3d67">write</a>(samples.data(), samples.size());</div><div class="line">}</div></div><!-- fragment --><dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1SoundFileWriter.php" title="Abstract base class for sound file encoding. ">sf::SoundFileWriter</a>, <a class="el" href="classsf_1_1InputSoundFile.php" title="Provide read access to sound files. ">sf::InputSoundFile</a> </dd></dl>

<p class="definition">Definition at line <a class="el" href="OutputSoundFile_8hpp_source.php#l00044">44</a> of file <a class="el" href="OutputSoundFile_8hpp_source.php">OutputSoundFile.hpp</a>.</p>
</div><h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a id="a7ae9f2dbd0991fa9394726a3d58bb19e"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a7ae9f2dbd0991fa9394726a3d58bb19e">&#9670;&nbsp;</a></span>OutputSoundFile()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::OutputSoundFile::OutputSoundFile </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Default constructor. </p>

</div>
</div>
<a id="a1492adbfef1f391d720afb56f068182e"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a1492adbfef1f391d720afb56f068182e">&#9670;&nbsp;</a></span>~OutputSoundFile()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::OutputSoundFile::~OutputSoundFile </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Destructor. </p>
<p>Closes the file if it was still open. </p>

</div>
</div>
<h2 class="groupheader">Member Function Documentation</h2>
<a id="ae5e55f01c53c1422c44eaed2eed67fce"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ae5e55f01c53c1422c44eaed2eed67fce">&#9670;&nbsp;</a></span>openFromFile()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">bool sf::OutputSoundFile::openFromFile </td>
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
</div><div class="memdoc">

<p>Open the sound file from the disk for writing. </p>
<p>The supported audio formats are: WAV, OGG/Vorbis, FLAC.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">filename</td><td>Path of the sound file to write </td></tr>
    <tr><td class="paramname">sampleRate</td><td>Sample rate of the sound </td></tr>
    <tr><td class="paramname">channelCount</td><td>Number of channels in the sound</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>True if the file was successfully opened </dd></dl>

</div>
</div>
<a id="adfcf525fced71121f336fa89faac3d67"></a>
<h2 class="memtitle"><span class="permalink"><a href="#adfcf525fced71121f336fa89faac3d67">&#9670;&nbsp;</a></span>write()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void sf::OutputSoundFile::write </td>
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
</div><div class="memdoc">

<p>Write audio samples to the file. </p>
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
<li><a class="el" href="OutputSoundFile_8hpp_source.php">OutputSoundFile.hpp</a></li>
</ul>
</div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
