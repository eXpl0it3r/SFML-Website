<?php
    $version = '2.5.1'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'RectangleShape.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header.php');
?>
<!-- Generated by Doxygen 1.8.14 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="namespaces.php"><span>Namespaces</span></a></li>
      <li><a href="annotated.php"><span>Classes</span></a></li>
      <li class="current"><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="files.php"><span>File&#160;List</span></a></li>
      <li><a href="globals.php"><span>File&#160;Members</span></a></li>
    </ul>
  </div>
<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><a class="el" href="dir_2916f9fbcacdf2e5f0583aa159c707b6.php">C++</a></li><li class="navelem"><a class="el" href="dir_bab8256609b0af2067c29191512341ac.php">SFML</a></li><li class="navelem"><a class="el" href="dir_a8c958b201b07fccfdb6651296ecafd7.php">include</a></li><li class="navelem"><a class="el" href="dir_9b72d1e63b6540393a46f669861ed95a.php">SFML</a></li><li class="navelem"><a class="el" href="dir_edf00dbb172ee50a61965dd4efe95941.php">Graphics</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">RectangleShape.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;<span class="comment">// SFML - Simple and Fast Multimedia Library</span></div><div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;<span class="comment">// Copyright (C) 2007-2018 Laurent Gomila (laurent@sfml-dev.org)</span></div><div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00006"></a><span class="lineno">    6</span>&#160;<span class="comment">// This software is provided &#39;as-is&#39;, without any express or implied warranty.</span></div><div class="line"><a name="l00007"></a><span class="lineno">    7</span>&#160;<span class="comment">// In no event will the authors be held liable for any damages arising from the use of this software.</span></div><div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="comment">// Permission is granted to anyone to use this software for any purpose,</span></div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;<span class="comment">// including commercial applications, and to alter it and redistribute it freely,</span></div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="comment">// subject to the following restrictions:</span></div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="comment">// 1. The origin of this software must not be misrepresented;</span></div><div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;<span class="comment">//    you must not claim that you wrote the original software.</span></div><div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;<span class="comment">//    If you use this software in a product, an acknowledgment</span></div><div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;<span class="comment">//    in the product documentation would be appreciated but is not required.</span></div><div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;<span class="comment">// 2. Altered source versions must be plainly marked as such,</span></div><div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;<span class="comment">//    and must not be misrepresented as being the original software.</span></div><div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;<span class="comment">// 3. This notice may not be removed or altered from any source distribution.</span></div><div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;<span class="comment"></span></div><div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_RECTANGLESHAPE_HPP</span></div><div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor">#define SFML_RECTANGLESHAPE_HPP</span></div><div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;</div><div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="comment">// Headers</span></div><div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="comment"></span><span class="preprocessor">#include &lt;SFML/Graphics/Export.hpp&gt;</span></div><div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;<span class="preprocessor">#include &lt;SFML/Graphics/Shape.hpp&gt;</span></div><div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;</div><div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;</div><div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;<span class="keyword">namespace </span><a class="code" href="namespacesf.php">sf</a></div><div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;{</div><div class="line"><a name="l00041"></a><span class="lineno"><a class="line" href="classsf_1_1RectangleShape.php">   41</a></span>&#160;<span class="keyword">class </span>SFML_GRAPHICS_API <a class="code" href="classsf_1_1RectangleShape.php">RectangleShape</a> : <span class="keyword">public</span> <a class="code" href="classsf_1_1Shape.php">Shape</a></div><div class="line"><a name="l00042"></a><span class="lineno">   42</span>&#160;{</div><div class="line"><a name="l00043"></a><span class="lineno">   43</span>&#160;<span class="keyword">public</span>:</div><div class="line"><a name="l00044"></a><span class="lineno">   44</span>&#160;</div><div class="line"><a name="l00051"></a><span class="lineno">   51</span>&#160;    <span class="keyword">explicit</span> <a class="code" href="classsf_1_1RectangleShape.php">RectangleShape</a>(<span class="keyword">const</span> <a class="code" href="classsf_1_1Vector2.php">Vector2f</a>&amp; size = <a class="code" href="classsf_1_1Vector2.php">Vector2f</a>(0, 0));</div><div class="line"><a name="l00052"></a><span class="lineno">   52</span>&#160;</div><div class="line"><a name="l00061"></a><span class="lineno">   61</span>&#160;    <span class="keywordtype">void</span> setSize(<span class="keyword">const</span> <a class="code" href="classsf_1_1Vector2.php">Vector2f</a>&amp; size);</div><div class="line"><a name="l00062"></a><span class="lineno">   62</span>&#160;</div><div class="line"><a name="l00071"></a><span class="lineno">   71</span>&#160;    <span class="keyword">const</span> <a class="code" href="classsf_1_1Vector2.php">Vector2f</a>&amp; getSize() <span class="keyword">const</span>;</div><div class="line"><a name="l00072"></a><span class="lineno">   72</span>&#160;</div><div class="line"><a name="l00080"></a><span class="lineno">   80</span>&#160;    <span class="keyword">virtual</span> std::size_t getPointCount() <span class="keyword">const</span>;</div><div class="line"><a name="l00081"></a><span class="lineno">   81</span>&#160;</div><div class="line"><a name="l00095"></a><span class="lineno">   95</span>&#160;    <span class="keyword">virtual</span> <a class="code" href="classsf_1_1Vector2.php">Vector2f</a> getPoint(std::size_t index) <span class="keyword">const</span>;</div><div class="line"><a name="l00096"></a><span class="lineno">   96</span>&#160;</div><div class="line"><a name="l00097"></a><span class="lineno">   97</span>&#160;<span class="keyword">private</span>:</div><div class="line"><a name="l00098"></a><span class="lineno">   98</span>&#160;</div><div class="line"><a name="l00100"></a><span class="lineno">  100</span>&#160;    <span class="comment">// Member data</span></div><div class="line"><a name="l00102"></a><span class="lineno">  102</span>&#160;<span class="comment"></span>    <a class="code" href="classsf_1_1Vector2.php">Vector2f</a> m_size; </div><div class="line"><a name="l00103"></a><span class="lineno">  103</span>&#160;};</div><div class="line"><a name="l00104"></a><span class="lineno">  104</span>&#160;</div><div class="line"><a name="l00105"></a><span class="lineno">  105</span>&#160;} <span class="comment">// namespace sf</span></div><div class="line"><a name="l00106"></a><span class="lineno">  106</span>&#160;</div><div class="line"><a name="l00107"></a><span class="lineno">  107</span>&#160;</div><div class="line"><a name="l00108"></a><span class="lineno">  108</span>&#160;<span class="preprocessor">#endif // SFML_RECTANGLESHAPE_HPP</span></div><div class="line"><a name="l00109"></a><span class="lineno">  109</span>&#160;</div><div class="line"><a name="l00110"></a><span class="lineno">  110</span>&#160;</div><div class="ttc" id="classsf_1_1Shape_php"><div class="ttname"><a href="classsf_1_1Shape.php">sf::Shape</a></div><div class="ttdoc">Base class for textured shapes with outline. </div><div class="ttdef"><b>Definition:</b> <a href="Shape_8hpp_source.php#l00044">Shape.hpp:44</a></div></div>
<div class="ttc" id="namespacesf_php"><div class="ttname"><a href="namespacesf.php">sf</a></div><div class="ttdef"><b>Definition:</b> <a href="AlResource_8hpp_source.php#l00034">AlResource.hpp:34</a></div></div>
<div class="ttc" id="classsf_1_1Vector2_php"><div class="ttname"><a href="classsf_1_1Vector2.php">sf::Vector2&lt; float &gt;</a></div></div>
<div class="ttc" id="classsf_1_1RectangleShape_php"><div class="ttname"><a href="classsf_1_1RectangleShape.php">sf::RectangleShape</a></div><div class="ttdoc">Specialized shape representing a rectangle. </div><div class="ttdef"><b>Definition:</b> <a href="RectangleShape_8hpp_source.php#l00041">RectangleShape.hpp:41</a></div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer.php");
?>
