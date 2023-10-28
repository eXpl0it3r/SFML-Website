<?php
    $version = '2.6.1'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'SoundFileReader.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header.php');
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
      <li><a href="annotated.php"><span>Classes</span></a></li>
      <li class="current"><a href="files.php"><span>Files</span></a></li>
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
      <li><a href="files.php"><span>File&#160;List</span></a></li>
      <li><a href="globals.php"><span>File&#160;Members</span></a></li>
    </ul>
  </div>
<script type="text/javascript">
/* @license magnet:?xt=urn:btih:d3d9a9a6595521f9666a5e94cc830dab83b65699&amp;dn=expat.txt MIT */
$(document).ready(function() { init_codefold(0); });
/* @license-end */
</script>
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
<li class="navelem"><a class="el" href="dir_c9d62fd513ce19bab3d7ef8db833e3f1.php">SFML</a></li><li class="navelem"><a class="el" href="dir_66c4f0b3361ff6a900e01a4b3c9d5eb7.php">include</a></li><li class="navelem"><a class="el" href="dir_b640c2c295eeac6b731646a7ed21830e.php">SFML</a></li><li class="navelem"><a class="el" href="dir_d40d7bd09aef4492c34dbfa99aea32ef.php">Audio</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle"><div class="title">SoundFileReader.hpp</div></div>
</div><!--header-->
<div class="contents">
<div class="fragment"><div class="line"><a id="l00001" name="l00001"></a><span class="lineno">    1</span> </div>
<div class="line"><a id="l00002" name="l00002"></a><span class="lineno">    2</span><span class="comment">//</span></div>
<div class="line"><a id="l00003" name="l00003"></a><span class="lineno">    3</span><span class="comment">// SFML - Simple and Fast Multimedia Library</span></div>
<div class="line"><a id="l00004" name="l00004"></a><span class="lineno">    4</span><span class="comment">// Copyright (C) 2007-2023 Laurent Gomila (laurent@sfml-dev.org)</span></div>
<div class="line"><a id="l00005" name="l00005"></a><span class="lineno">    5</span><span class="comment">//</span></div>
<div class="line"><a id="l00006" name="l00006"></a><span class="lineno">    6</span><span class="comment">// This software is provided &#39;as-is&#39;, without any express or implied warranty.</span></div>
<div class="line"><a id="l00007" name="l00007"></a><span class="lineno">    7</span><span class="comment">// In no event will the authors be held liable for any damages arising from the use of this software.</span></div>
<div class="line"><a id="l00008" name="l00008"></a><span class="lineno">    8</span><span class="comment">//</span></div>
<div class="line"><a id="l00009" name="l00009"></a><span class="lineno">    9</span><span class="comment">// Permission is granted to anyone to use this software for any purpose,</span></div>
<div class="line"><a id="l00010" name="l00010"></a><span class="lineno">   10</span><span class="comment">// including commercial applications, and to alter it and redistribute it freely,</span></div>
<div class="line"><a id="l00011" name="l00011"></a><span class="lineno">   11</span><span class="comment">// subject to the following restrictions:</span></div>
<div class="line"><a id="l00012" name="l00012"></a><span class="lineno">   12</span><span class="comment">//</span></div>
<div class="line"><a id="l00013" name="l00013"></a><span class="lineno">   13</span><span class="comment">// 1. The origin of this software must not be misrepresented;</span></div>
<div class="line"><a id="l00014" name="l00014"></a><span class="lineno">   14</span><span class="comment">//    you must not claim that you wrote the original software.</span></div>
<div class="line"><a id="l00015" name="l00015"></a><span class="lineno">   15</span><span class="comment">//    If you use this software in a product, an acknowledgment</span></div>
<div class="line"><a id="l00016" name="l00016"></a><span class="lineno">   16</span><span class="comment">//    in the product documentation would be appreciated but is not required.</span></div>
<div class="line"><a id="l00017" name="l00017"></a><span class="lineno">   17</span><span class="comment">//</span></div>
<div class="line"><a id="l00018" name="l00018"></a><span class="lineno">   18</span><span class="comment">// 2. Altered source versions must be plainly marked as such,</span></div>
<div class="line"><a id="l00019" name="l00019"></a><span class="lineno">   19</span><span class="comment">//    and must not be misrepresented as being the original software.</span></div>
<div class="line"><a id="l00020" name="l00020"></a><span class="lineno">   20</span><span class="comment">//</span></div>
<div class="line"><a id="l00021" name="l00021"></a><span class="lineno">   21</span><span class="comment">// 3. This notice may not be removed or altered from any source distribution.</span></div>
<div class="line"><a id="l00022" name="l00022"></a><span class="lineno">   22</span><span class="comment">//</span></div>
<div class="line"><a id="l00024" name="l00024"></a><span class="lineno">   24</span> </div>
<div class="line"><a id="l00025" name="l00025"></a><span class="lineno">   25</span><span class="preprocessor">#ifndef SFML_SOUNDFILEREADER_HPP</span></div>
<div class="line"><a id="l00026" name="l00026"></a><span class="lineno">   26</span><span class="preprocessor">#define SFML_SOUNDFILEREADER_HPP</span></div>
<div class="line"><a id="l00027" name="l00027"></a><span class="lineno">   27</span> </div>
<div class="line"><a id="l00029" name="l00029"></a><span class="lineno">   29</span><span class="comment">// Headers</span></div>
<div class="line"><a id="l00031" name="l00031"></a><span class="lineno">   31</span><span class="preprocessor">#include &lt;SFML/Audio/Export.hpp&gt;</span></div>
<div class="line"><a id="l00032" name="l00032"></a><span class="lineno">   32</span><span class="preprocessor">#include &lt;string&gt;</span></div>
<div class="line"><a id="l00033" name="l00033"></a><span class="lineno">   33</span> </div>
<div class="line"><a id="l00034" name="l00034"></a><span class="lineno">   34</span> </div>
<div class="line"><a id="l00035" name="l00035"></a><span class="lineno">   35</span><span class="keyword">namespace </span>sf</div>
<div class="line"><a id="l00036" name="l00036"></a><span class="lineno">   36</span>{</div>
<div class="line"><a id="l00037" name="l00037"></a><span class="lineno">   37</span><span class="keyword">class </span>InputStream;</div>
<div class="line"><a id="l00038" name="l00038"></a><span class="lineno">   38</span> </div>
<div class="foldopen" id="foldopen00043" data-start="{" data-end="};">
<div class="line"><a id="l00043" name="l00043"></a><span class="lineno"><a class="line" href="classsf_1_1SoundFileReader.php">   43</a></span><span class="keyword">class </span>SFML_AUDIO_API <a class="code hl_class" href="classsf_1_1SoundFileReader.php">SoundFileReader</a></div>
<div class="line"><a id="l00044" name="l00044"></a><span class="lineno">   44</span>{</div>
<div class="line"><a id="l00045" name="l00045"></a><span class="lineno">   45</span><span class="keyword">public</span>:</div>
<div class="line"><a id="l00046" name="l00046"></a><span class="lineno">   46</span> </div>
<div class="foldopen" id="foldopen00051" data-start="{" data-end="};">
<div class="line"><a id="l00051" name="l00051"></a><span class="lineno"><a class="line" href="structsf_1_1SoundFileReader_1_1Info.php">   51</a></span>    <span class="keyword">struct </span><a class="code hl_struct" href="structsf_1_1SoundFileReader_1_1Info.php">Info</a></div>
<div class="line"><a id="l00052" name="l00052"></a><span class="lineno">   52</span>    {</div>
<div class="line"><a id="l00053" name="l00053"></a><span class="lineno"><a class="line" href="structsf_1_1SoundFileReader_1_1Info.php#a74b40b4693d7000571484736d1367167">   53</a></span>        Uint64       <a class="code hl_variable" href="structsf_1_1SoundFileReader_1_1Info.php#a74b40b4693d7000571484736d1367167">sampleCount</a>;  </div>
<div class="line"><a id="l00054" name="l00054"></a><span class="lineno"><a class="line" href="structsf_1_1SoundFileReader_1_1Info.php#ac748bb30768d1a3caf329e95d31d6d2a">   54</a></span>        <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> <a class="code hl_variable" href="structsf_1_1SoundFileReader_1_1Info.php#ac748bb30768d1a3caf329e95d31d6d2a">channelCount</a>; </div>
<div class="line"><a id="l00055" name="l00055"></a><span class="lineno"><a class="line" href="structsf_1_1SoundFileReader_1_1Info.php#a06ef71c19e7de190b294ae02c361f752">   55</a></span>        <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> <a class="code hl_variable" href="structsf_1_1SoundFileReader_1_1Info.php#a06ef71c19e7de190b294ae02c361f752">sampleRate</a>;   </div>
<div class="line"><a id="l00056" name="l00056"></a><span class="lineno">   56</span>    };</div>
</div>
<div class="line"><a id="l00057" name="l00057"></a><span class="lineno">   57</span> </div>
<div class="line"><a id="l00062" name="l00062"></a><span class="lineno"><a class="line" href="classsf_1_1SoundFileReader.php#a34163297f302d15818c76b54f815acc8">   62</a></span>    <span class="keyword">virtual</span> <a class="code hl_function" href="classsf_1_1SoundFileReader.php#a34163297f302d15818c76b54f815acc8">~SoundFileReader</a>() {}</div>
<div class="line"><a id="l00063" name="l00063"></a><span class="lineno">   63</span> </div>
<div class="line"><a id="l00077" name="l00077"></a><span class="lineno"><a class="line" href="classsf_1_1SoundFileReader.php#aa1d2fee2ba8f359c833ab74590d55935">   77</a></span>    <span class="keyword">virtual</span> <span class="keywordtype">bool</span> <a class="code hl_function" href="classsf_1_1SoundFileReader.php#aa1d2fee2ba8f359c833ab74590d55935">open</a>(<a class="code hl_class" href="classsf_1_1InputStream.php">InputStream</a>&amp; stream, <a class="code hl_struct" href="structsf_1_1SoundFileReader_1_1Info.php">Info</a>&amp; info) = 0;</div>
<div class="line"><a id="l00078" name="l00078"></a><span class="lineno">   78</span> </div>
<div class="line"><a id="l00092" name="l00092"></a><span class="lineno"><a class="line" href="classsf_1_1SoundFileReader.php#a1e18ade5ffe882bdfa20a2ebe7e2b015">   92</a></span>    <span class="keyword">virtual</span> <span class="keywordtype">void</span> <a class="code hl_function" href="classsf_1_1SoundFileReader.php#a1e18ade5ffe882bdfa20a2ebe7e2b015">seek</a>(Uint64 sampleOffset) = 0;</div>
<div class="line"><a id="l00093" name="l00093"></a><span class="lineno">   93</span> </div>
<div class="line"><a id="l00103" name="l00103"></a><span class="lineno"><a class="line" href="classsf_1_1SoundFileReader.php#a3b7d86769ea07e24e7b0f0486bed7591">  103</a></span>    <span class="keyword">virtual</span> Uint64 <a class="code hl_function" href="classsf_1_1SoundFileReader.php#a3b7d86769ea07e24e7b0f0486bed7591">read</a>(Int16* samples, Uint64 maxCount) = 0;</div>
<div class="line"><a id="l00104" name="l00104"></a><span class="lineno">  104</span>};</div>
</div>
<div class="line"><a id="l00105" name="l00105"></a><span class="lineno">  105</span> </div>
<div class="line"><a id="l00106" name="l00106"></a><span class="lineno">  106</span>} <span class="comment">// namespace sf</span></div>
<div class="line"><a id="l00107" name="l00107"></a><span class="lineno">  107</span> </div>
<div class="line"><a id="l00108" name="l00108"></a><span class="lineno">  108</span> </div>
<div class="line"><a id="l00109" name="l00109"></a><span class="lineno">  109</span><span class="preprocessor">#endif </span><span class="comment">// SFML_SOUNDFILEREADER_HPP</span></div>
<div class="line"><a id="l00110" name="l00110"></a><span class="lineno">  110</span> </div>
<div class="line"><a id="l00111" name="l00111"></a><span class="lineno">  111</span> </div>
<div class="ttc" id="aclasssf_1_1InputStream_php"><div class="ttname"><a href="classsf_1_1InputStream.php">sf::InputStream</a></div><div class="ttdoc">Abstract class for custom file input streams.</div><div class="ttdef"><b>Definition</b> <a href="InputStream_8hpp_source.php#l00041">InputStream.hpp:42</a></div></div>
<div class="ttc" id="aclasssf_1_1SoundFileReader_php"><div class="ttname"><a href="classsf_1_1SoundFileReader.php">sf::SoundFileReader</a></div><div class="ttdoc">Abstract base class for sound file decoding.</div><div class="ttdef"><b>Definition</b> <a href="SoundFileReader_8hpp_source.php#l00043">SoundFileReader.hpp:44</a></div></div>
<div class="ttc" id="aclasssf_1_1SoundFileReader_php_a1e18ade5ffe882bdfa20a2ebe7e2b015"><div class="ttname"><a href="classsf_1_1SoundFileReader.php#a1e18ade5ffe882bdfa20a2ebe7e2b015">sf::SoundFileReader::seek</a></div><div class="ttdeci">virtual void seek(Uint64 sampleOffset)=0</div><div class="ttdoc">Change the current read position to the given sample offset.</div></div>
<div class="ttc" id="aclasssf_1_1SoundFileReader_php_a34163297f302d15818c76b54f815acc8"><div class="ttname"><a href="classsf_1_1SoundFileReader.php#a34163297f302d15818c76b54f815acc8">sf::SoundFileReader::~SoundFileReader</a></div><div class="ttdeci">virtual ~SoundFileReader()</div><div class="ttdoc">Virtual destructor.</div><div class="ttdef"><b>Definition</b> <a href="SoundFileReader_8hpp_source.php#l00062">SoundFileReader.hpp:62</a></div></div>
<div class="ttc" id="aclasssf_1_1SoundFileReader_php_a3b7d86769ea07e24e7b0f0486bed7591"><div class="ttname"><a href="classsf_1_1SoundFileReader.php#a3b7d86769ea07e24e7b0f0486bed7591">sf::SoundFileReader::read</a></div><div class="ttdeci">virtual Uint64 read(Int16 *samples, Uint64 maxCount)=0</div><div class="ttdoc">Read audio samples from the open file.</div></div>
<div class="ttc" id="aclasssf_1_1SoundFileReader_php_aa1d2fee2ba8f359c833ab74590d55935"><div class="ttname"><a href="classsf_1_1SoundFileReader.php#aa1d2fee2ba8f359c833ab74590d55935">sf::SoundFileReader::open</a></div><div class="ttdeci">virtual bool open(InputStream &amp;stream, Info &amp;info)=0</div><div class="ttdoc">Open a sound file for reading.</div></div>
<div class="ttc" id="astructsf_1_1SoundFileReader_1_1Info_php"><div class="ttname"><a href="structsf_1_1SoundFileReader_1_1Info.php">sf::SoundFileReader::Info</a></div><div class="ttdoc">Structure holding the audio properties of a sound file.</div><div class="ttdef"><b>Definition</b> <a href="SoundFileReader_8hpp_source.php#l00051">SoundFileReader.hpp:52</a></div></div>
<div class="ttc" id="astructsf_1_1SoundFileReader_1_1Info_php_a06ef71c19e7de190b294ae02c361f752"><div class="ttname"><a href="structsf_1_1SoundFileReader_1_1Info.php#a06ef71c19e7de190b294ae02c361f752">sf::SoundFileReader::Info::sampleRate</a></div><div class="ttdeci">unsigned int sampleRate</div><div class="ttdoc">Samples rate of the sound, in samples per second.</div><div class="ttdef"><b>Definition</b> <a href="SoundFileReader_8hpp_source.php#l00055">SoundFileReader.hpp:55</a></div></div>
<div class="ttc" id="astructsf_1_1SoundFileReader_1_1Info_php_a74b40b4693d7000571484736d1367167"><div class="ttname"><a href="structsf_1_1SoundFileReader_1_1Info.php#a74b40b4693d7000571484736d1367167">sf::SoundFileReader::Info::sampleCount</a></div><div class="ttdeci">Uint64 sampleCount</div><div class="ttdoc">Total number of samples in the file.</div><div class="ttdef"><b>Definition</b> <a href="SoundFileReader_8hpp_source.php#l00053">SoundFileReader.hpp:53</a></div></div>
<div class="ttc" id="astructsf_1_1SoundFileReader_1_1Info_php_ac748bb30768d1a3caf329e95d31d6d2a"><div class="ttname"><a href="structsf_1_1SoundFileReader_1_1Info.php#ac748bb30768d1a3caf329e95d31d6d2a">sf::SoundFileReader::Info::channelCount</a></div><div class="ttdeci">unsigned int channelCount</div><div class="ttdoc">Number of channels of the sound.</div><div class="ttdef"><b>Definition</b> <a href="SoundFileReader_8hpp_source.php#l00054">SoundFileReader.hpp:54</a></div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer.php");
?>
