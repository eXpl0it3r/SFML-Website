<?php
    $version = '2.6.1'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'RectangleShape.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
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
<li class="navelem"><a class="el" href="dir_c9d62fd513ce19bab3d7ef8db833e3f1.php">SFML</a></li><li class="navelem"><a class="el" href="dir_66c4f0b3361ff6a900e01a4b3c9d5eb7.php">include</a></li><li class="navelem"><a class="el" href="dir_b640c2c295eeac6b731646a7ed21830e.php">SFML</a></li><li class="navelem"><a class="el" href="dir_25140c63874fec7ab1624ad7e074f505.php">Graphics</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle"><div class="title">RectangleShape.hpp</div></div>
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
<div class="line"><a id="l00025" name="l00025"></a><span class="lineno">   25</span><span class="preprocessor">#ifndef SFML_RECTANGLESHAPE_HPP</span></div>
<div class="line"><a id="l00026" name="l00026"></a><span class="lineno">   26</span><span class="preprocessor">#define SFML_RECTANGLESHAPE_HPP</span></div>
<div class="line"><a id="l00027" name="l00027"></a><span class="lineno">   27</span> </div>
<div class="line"><a id="l00029" name="l00029"></a><span class="lineno">   29</span><span class="comment">// Headers</span></div>
<div class="line"><a id="l00031" name="l00031"></a><span class="lineno">   31</span><span class="preprocessor">#include &lt;SFML/Graphics/Export.hpp&gt;</span></div>
<div class="line"><a id="l00032" name="l00032"></a><span class="lineno">   32</span><span class="preprocessor">#include &lt;SFML/Graphics/Shape.hpp&gt;</span></div>
<div class="line"><a id="l00033" name="l00033"></a><span class="lineno">   33</span> </div>
<div class="line"><a id="l00034" name="l00034"></a><span class="lineno">   34</span> </div>
<div class="line"><a id="l00035" name="l00035"></a><span class="lineno">   35</span><span class="keyword">namespace </span>sf</div>
<div class="line"><a id="l00036" name="l00036"></a><span class="lineno">   36</span>{</div>
<div class="foldopen" id="foldopen00041" data-start="{" data-end="};">
<div class="line"><a id="l00041" name="l00041"></a><span class="lineno"><a class="line" href="classsf_1_1RectangleShape.php">   41</a></span><span class="keyword">class </span>SFML_GRAPHICS_API <a class="code hl_class" href="classsf_1_1RectangleShape.php">RectangleShape</a> : <span class="keyword">public</span> <a class="code hl_class" href="classsf_1_1Shape.php">Shape</a></div>
<div class="line"><a id="l00042" name="l00042"></a><span class="lineno">   42</span>{</div>
<div class="line"><a id="l00043" name="l00043"></a><span class="lineno">   43</span><span class="keyword">public</span>:</div>
<div class="line"><a id="l00044" name="l00044"></a><span class="lineno">   44</span> </div>
<div class="line"><a id="l00051" name="l00051"></a><span class="lineno"><a class="line" href="classsf_1_1RectangleShape.php#a83a2be157ebee85c95ed491c3e78dd7c">   51</a></span>    <span class="keyword">explicit</span> <a class="code hl_function" href="classsf_1_1RectangleShape.php#a83a2be157ebee85c95ed491c3e78dd7c">RectangleShape</a>(<span class="keyword">const</span> <a class="code hl_class" href="classsf_1_1Vector2.php">Vector2f</a>&amp; size = <a class="code hl_class" href="classsf_1_1Vector2.php">Vector2f</a>(0, 0));</div>
<div class="line"><a id="l00052" name="l00052"></a><span class="lineno">   52</span> </div>
<div class="line"><a id="l00061" name="l00061"></a><span class="lineno"><a class="line" href="classsf_1_1RectangleShape.php#a5c65d374d4a259dfdc24efdd24a5dbec">   61</a></span>    <span class="keywordtype">void</span> <a class="code hl_function" href="classsf_1_1RectangleShape.php#a5c65d374d4a259dfdc24efdd24a5dbec">setSize</a>(<span class="keyword">const</span> <a class="code hl_class" href="classsf_1_1Vector2.php">Vector2f</a>&amp; size);</div>
<div class="line"><a id="l00062" name="l00062"></a><span class="lineno">   62</span> </div>
<div class="line"><a id="l00071" name="l00071"></a><span class="lineno"><a class="line" href="classsf_1_1RectangleShape.php#af6819a7b842b83863f21e7a9c63097e7">   71</a></span>    <span class="keyword">const</span> <a class="code hl_class" href="classsf_1_1Vector2.php">Vector2f</a>&amp; <a class="code hl_function" href="classsf_1_1RectangleShape.php#af6819a7b842b83863f21e7a9c63097e7">getSize</a>() <span class="keyword">const</span>;</div>
<div class="line"><a id="l00072" name="l00072"></a><span class="lineno">   72</span> </div>
<div class="line"><a id="l00080" name="l00080"></a><span class="lineno"><a class="line" href="classsf_1_1RectangleShape.php#adfb2f429e5720c9ccdb26d5996c3ae33">   80</a></span>    <span class="keyword">virtual</span> std::size_t <a class="code hl_function" href="classsf_1_1RectangleShape.php#adfb2f429e5720c9ccdb26d5996c3ae33">getPointCount</a>() <span class="keyword">const</span>;</div>
<div class="line"><a id="l00081" name="l00081"></a><span class="lineno">   81</span> </div>
<div class="line"><a id="l00095" name="l00095"></a><span class="lineno"><a class="line" href="classsf_1_1RectangleShape.php#a3909f1a1946930ff5ae17c26206c0f81">   95</a></span>    <span class="keyword">virtual</span> <a class="code hl_class" href="classsf_1_1Vector2.php">Vector2f</a> <a class="code hl_function" href="classsf_1_1RectangleShape.php#a3909f1a1946930ff5ae17c26206c0f81">getPoint</a>(std::size_t index) <span class="keyword">const</span>;</div>
<div class="line"><a id="l00096" name="l00096"></a><span class="lineno">   96</span> </div>
<div class="line"><a id="l00097" name="l00097"></a><span class="lineno">   97</span><span class="keyword">private</span>:</div>
<div class="line"><a id="l00098" name="l00098"></a><span class="lineno">   98</span> </div>
<div class="line"><a id="l00100" name="l00100"></a><span class="lineno">  100</span>    <span class="comment">// Member data</span></div>
<div class="line"><a id="l00102" name="l00102"></a><span class="lineno">  102</span>    <a class="code hl_class" href="classsf_1_1Vector2.php">Vector2f</a> m_size; </div>
<div class="line"><a id="l00103" name="l00103"></a><span class="lineno">  103</span>};</div>
</div>
<div class="line"><a id="l00104" name="l00104"></a><span class="lineno">  104</span> </div>
<div class="line"><a id="l00105" name="l00105"></a><span class="lineno">  105</span>} <span class="comment">// namespace sf</span></div>
<div class="line"><a id="l00106" name="l00106"></a><span class="lineno">  106</span> </div>
<div class="line"><a id="l00107" name="l00107"></a><span class="lineno">  107</span> </div>
<div class="line"><a id="l00108" name="l00108"></a><span class="lineno">  108</span><span class="preprocessor">#endif </span><span class="comment">// SFML_RECTANGLESHAPE_HPP</span></div>
<div class="line"><a id="l00109" name="l00109"></a><span class="lineno">  109</span> </div>
<div class="line"><a id="l00110" name="l00110"></a><span class="lineno">  110</span> </div>
<div class="ttc" id="aclasssf_1_1RectangleShape_php"><div class="ttname"><a href="classsf_1_1RectangleShape.php">sf::RectangleShape</a></div><div class="ttdoc">Specialized shape representing a rectangle.</div><div class="ttdef"><b>Definition</b> <a href="RectangleShape_8hpp_source.php#l00041">RectangleShape.hpp:42</a></div></div>
<div class="ttc" id="aclasssf_1_1RectangleShape_php_a3909f1a1946930ff5ae17c26206c0f81"><div class="ttname"><a href="classsf_1_1RectangleShape.php#a3909f1a1946930ff5ae17c26206c0f81">sf::RectangleShape::getPoint</a></div><div class="ttdeci">virtual Vector2f getPoint(std::size_t index) const</div><div class="ttdoc">Get a point of the rectangle.</div></div>
<div class="ttc" id="aclasssf_1_1RectangleShape_php_a5c65d374d4a259dfdc24efdd24a5dbec"><div class="ttname"><a href="classsf_1_1RectangleShape.php#a5c65d374d4a259dfdc24efdd24a5dbec">sf::RectangleShape::setSize</a></div><div class="ttdeci">void setSize(const Vector2f &amp;size)</div><div class="ttdoc">Set the size of the rectangle.</div></div>
<div class="ttc" id="aclasssf_1_1RectangleShape_php_a83a2be157ebee85c95ed491c3e78dd7c"><div class="ttname"><a href="classsf_1_1RectangleShape.php#a83a2be157ebee85c95ed491c3e78dd7c">sf::RectangleShape::RectangleShape</a></div><div class="ttdeci">RectangleShape(const Vector2f &amp;size=Vector2f(0, 0))</div><div class="ttdoc">Default constructor.</div></div>
<div class="ttc" id="aclasssf_1_1RectangleShape_php_adfb2f429e5720c9ccdb26d5996c3ae33"><div class="ttname"><a href="classsf_1_1RectangleShape.php#adfb2f429e5720c9ccdb26d5996c3ae33">sf::RectangleShape::getPointCount</a></div><div class="ttdeci">virtual std::size_t getPointCount() const</div><div class="ttdoc">Get the number of points defining the shape.</div></div>
<div class="ttc" id="aclasssf_1_1RectangleShape_php_af6819a7b842b83863f21e7a9c63097e7"><div class="ttname"><a href="classsf_1_1RectangleShape.php#af6819a7b842b83863f21e7a9c63097e7">sf::RectangleShape::getSize</a></div><div class="ttdeci">const Vector2f &amp; getSize() const</div><div class="ttdoc">Get the size of the rectangle.</div></div>
<div class="ttc" id="aclasssf_1_1Shape_php"><div class="ttname"><a href="classsf_1_1Shape.php">sf::Shape</a></div><div class="ttdoc">Base class for textured shapes with outline.</div><div class="ttdef"><b>Definition</b> <a href="Shape_8hpp_source.php#l00044">Shape.hpp:45</a></div></div>
<div class="ttc" id="aclasssf_1_1Vector2_php"><div class="ttname"><a href="classsf_1_1Vector2.php">sf::Vector2&lt; float &gt;</a></div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
