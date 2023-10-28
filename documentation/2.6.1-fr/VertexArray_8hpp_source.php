<?php
    $version = '2.6.1'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'VertexArray.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
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
  <div class="headertitle"><div class="title">VertexArray.hpp</div></div>
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
<div class="line"><a id="l00025" name="l00025"></a><span class="lineno">   25</span><span class="preprocessor">#ifndef SFML_VERTEXARRAY_HPP</span></div>
<div class="line"><a id="l00026" name="l00026"></a><span class="lineno">   26</span><span class="preprocessor">#define SFML_VERTEXARRAY_HPP</span></div>
<div class="line"><a id="l00027" name="l00027"></a><span class="lineno">   27</span> </div>
<div class="line"><a id="l00029" name="l00029"></a><span class="lineno">   29</span><span class="comment">// Headers</span></div>
<div class="line"><a id="l00031" name="l00031"></a><span class="lineno">   31</span><span class="preprocessor">#include &lt;SFML/Graphics/Export.hpp&gt;</span></div>
<div class="line"><a id="l00032" name="l00032"></a><span class="lineno">   32</span><span class="preprocessor">#include &lt;SFML/Graphics/Vertex.hpp&gt;</span></div>
<div class="line"><a id="l00033" name="l00033"></a><span class="lineno">   33</span><span class="preprocessor">#include &lt;SFML/Graphics/PrimitiveType.hpp&gt;</span></div>
<div class="line"><a id="l00034" name="l00034"></a><span class="lineno">   34</span><span class="preprocessor">#include &lt;SFML/Graphics/Rect.hpp&gt;</span></div>
<div class="line"><a id="l00035" name="l00035"></a><span class="lineno">   35</span><span class="preprocessor">#include &lt;SFML/Graphics/Drawable.hpp&gt;</span></div>
<div class="line"><a id="l00036" name="l00036"></a><span class="lineno">   36</span><span class="preprocessor">#include &lt;vector&gt;</span></div>
<div class="line"><a id="l00037" name="l00037"></a><span class="lineno">   37</span> </div>
<div class="line"><a id="l00038" name="l00038"></a><span class="lineno">   38</span> </div>
<div class="line"><a id="l00039" name="l00039"></a><span class="lineno">   39</span><span class="keyword">namespace </span>sf</div>
<div class="line"><a id="l00040" name="l00040"></a><span class="lineno">   40</span>{</div>
<div class="foldopen" id="foldopen00045" data-start="{" data-end="};">
<div class="line"><a id="l00045" name="l00045"></a><span class="lineno"><a class="line" href="classsf_1_1VertexArray.php">   45</a></span><span class="keyword">class </span>SFML_GRAPHICS_API <a class="code hl_class" href="classsf_1_1VertexArray.php">VertexArray</a> : <span class="keyword">public</span> <a class="code hl_class" href="classsf_1_1Drawable.php">Drawable</a></div>
<div class="line"><a id="l00046" name="l00046"></a><span class="lineno">   46</span>{</div>
<div class="line"><a id="l00047" name="l00047"></a><span class="lineno">   47</span><span class="keyword">public</span>:</div>
<div class="line"><a id="l00048" name="l00048"></a><span class="lineno">   48</span> </div>
<div class="line"><a id="l00055" name="l00055"></a><span class="lineno"><a class="line" href="classsf_1_1VertexArray.php#a15729e01df8fc0021f9774dfb56295c1">   55</a></span>    <a class="code hl_function" href="classsf_1_1VertexArray.php#a15729e01df8fc0021f9774dfb56295c1">VertexArray</a>();</div>
<div class="line"><a id="l00056" name="l00056"></a><span class="lineno">   56</span> </div>
<div class="line"><a id="l00064" name="l00064"></a><span class="lineno"><a class="line" href="classsf_1_1VertexArray.php#a4bb1c29a0e3354a035075899d84f02f9">   64</a></span>    <span class="keyword">explicit</span> <a class="code hl_function" href="classsf_1_1VertexArray.php#a4bb1c29a0e3354a035075899d84f02f9">VertexArray</a>(<a class="code hl_enumeration" href="group__graphics.php#ga5ee56ac1339984909610713096283b1b">PrimitiveType</a> type, std::size_t vertexCount = 0);</div>
<div class="line"><a id="l00065" name="l00065"></a><span class="lineno">   65</span> </div>
<div class="line"><a id="l00072" name="l00072"></a><span class="lineno"><a class="line" href="classsf_1_1VertexArray.php#abda90e8d841a273d93164f0c0032bd8d">   72</a></span>    std::size_t <a class="code hl_function" href="classsf_1_1VertexArray.php#abda90e8d841a273d93164f0c0032bd8d">getVertexCount</a>() <span class="keyword">const</span>;</div>
<div class="line"><a id="l00073" name="l00073"></a><span class="lineno">   73</span> </div>
<div class="line"><a id="l00088" name="l00088"></a><span class="lineno"><a class="line" href="classsf_1_1VertexArray.php#a913953848726c1c65f8617497e8fccd6">   88</a></span>    <a class="code hl_class" href="classsf_1_1Vertex.php">Vertex</a>&amp; operator [](std::size_t index);</div>
<div class="line"><a id="l00089" name="l00089"></a><span class="lineno">   89</span> </div>
<div class="line"><a id="l00104" name="l00104"></a><span class="lineno"><a class="line" href="classsf_1_1VertexArray.php#a8336081e73a14a5e4ad0aa9f926d82be">  104</a></span>    <span class="keyword">const</span> <a class="code hl_class" href="classsf_1_1Vertex.php">Vertex</a>&amp; operator [](std::size_t index) <span class="keyword">const</span>;</div>
<div class="line"><a id="l00105" name="l00105"></a><span class="lineno">  105</span> </div>
<div class="line"><a id="l00115" name="l00115"></a><span class="lineno"><a class="line" href="classsf_1_1VertexArray.php#a3654c424aca1f9e468f369bc777c839c">  115</a></span>    <span class="keywordtype">void</span> <a class="code hl_function" href="classsf_1_1VertexArray.php#a3654c424aca1f9e468f369bc777c839c">clear</a>();</div>
<div class="line"><a id="l00116" name="l00116"></a><span class="lineno">  116</span> </div>
<div class="line"><a id="l00129" name="l00129"></a><span class="lineno"><a class="line" href="classsf_1_1VertexArray.php#a0c0fe239e8f9a54e64d3bbc96bf548c0">  129</a></span>    <span class="keywordtype">void</span> <a class="code hl_function" href="classsf_1_1VertexArray.php#a0c0fe239e8f9a54e64d3bbc96bf548c0">resize</a>(std::size_t vertexCount);</div>
<div class="line"><a id="l00130" name="l00130"></a><span class="lineno">  130</span> </div>
<div class="line"><a id="l00137" name="l00137"></a><span class="lineno"><a class="line" href="classsf_1_1VertexArray.php#a80c8f6865e53bd21fc6cb10fffa10035">  137</a></span>    <span class="keywordtype">void</span> <a class="code hl_function" href="classsf_1_1VertexArray.php#a80c8f6865e53bd21fc6cb10fffa10035">append</a>(<span class="keyword">const</span> <a class="code hl_class" href="classsf_1_1Vertex.php">Vertex</a>&amp; vertex);</div>
<div class="line"><a id="l00138" name="l00138"></a><span class="lineno">  138</span> </div>
<div class="line"><a id="l00153" name="l00153"></a><span class="lineno"><a class="line" href="classsf_1_1VertexArray.php#aa38c10707c28a97f4627ae8b2f3ad969">  153</a></span>    <span class="keywordtype">void</span> <a class="code hl_function" href="classsf_1_1VertexArray.php#aa38c10707c28a97f4627ae8b2f3ad969">setPrimitiveType</a>(<a class="code hl_enumeration" href="group__graphics.php#ga5ee56ac1339984909610713096283b1b">PrimitiveType</a> type);</div>
<div class="line"><a id="l00154" name="l00154"></a><span class="lineno">  154</span> </div>
<div class="line"><a id="l00161" name="l00161"></a><span class="lineno"><a class="line" href="classsf_1_1VertexArray.php#aa1a60d84543aa6e220683349b645f130">  161</a></span>    <a class="code hl_enumeration" href="group__graphics.php#ga5ee56ac1339984909610713096283b1b">PrimitiveType</a> <a class="code hl_function" href="classsf_1_1VertexArray.php#aa1a60d84543aa6e220683349b645f130">getPrimitiveType</a>() <span class="keyword">const</span>;</div>
<div class="line"><a id="l00162" name="l00162"></a><span class="lineno">  162</span> </div>
<div class="line"><a id="l00172" name="l00172"></a><span class="lineno"><a class="line" href="classsf_1_1VertexArray.php#abd57744c732abfc7d4c98d8e1d4ccca1">  172</a></span>    <a class="code hl_class" href="classsf_1_1Rect.php">FloatRect</a> <a class="code hl_function" href="classsf_1_1VertexArray.php#abd57744c732abfc7d4c98d8e1d4ccca1">getBounds</a>() <span class="keyword">const</span>;</div>
<div class="line"><a id="l00173" name="l00173"></a><span class="lineno">  173</span> </div>
<div class="line"><a id="l00174" name="l00174"></a><span class="lineno">  174</span><span class="keyword">private</span>:</div>
<div class="line"><a id="l00175" name="l00175"></a><span class="lineno">  175</span> </div>
<div class="line"><a id="l00183" name="l00183"></a><span class="lineno">  183</span>    <span class="keyword">virtual</span> <span class="keywordtype">void</span> draw(<a class="code hl_class" href="classsf_1_1RenderTarget.php">RenderTarget</a>&amp; target, <a class="code hl_class" href="classsf_1_1RenderStates.php">RenderStates</a> states) <span class="keyword">const</span>;</div>
<div class="line"><a id="l00184" name="l00184"></a><span class="lineno">  184</span> </div>
<div class="line"><a id="l00185" name="l00185"></a><span class="lineno">  185</span><span class="keyword">private</span>:</div>
<div class="line"><a id="l00186" name="l00186"></a><span class="lineno">  186</span> </div>
<div class="line"><a id="l00188" name="l00188"></a><span class="lineno">  188</span>    <span class="comment">// Member data</span></div>
<div class="line"><a id="l00190" name="l00190"></a><span class="lineno">  190</span>    std::vector&lt;Vertex&gt; m_vertices;      </div>
<div class="line"><a id="l00191" name="l00191"></a><span class="lineno">  191</span>    <a class="code hl_enumeration" href="group__graphics.php#ga5ee56ac1339984909610713096283b1b">PrimitiveType</a>       m_primitiveType; </div>
<div class="line"><a id="l00192" name="l00192"></a><span class="lineno">  192</span>};</div>
</div>
<div class="line"><a id="l00193" name="l00193"></a><span class="lineno">  193</span> </div>
<div class="line"><a id="l00194" name="l00194"></a><span class="lineno">  194</span>} <span class="comment">// namespace sf</span></div>
<div class="line"><a id="l00195" name="l00195"></a><span class="lineno">  195</span> </div>
<div class="line"><a id="l00196" name="l00196"></a><span class="lineno">  196</span> </div>
<div class="line"><a id="l00197" name="l00197"></a><span class="lineno">  197</span><span class="preprocessor">#endif </span><span class="comment">// SFML_VERTEXARRAY_HPP</span></div>
<div class="line"><a id="l00198" name="l00198"></a><span class="lineno">  198</span> </div>
<div class="line"><a id="l00199" name="l00199"></a><span class="lineno">  199</span> </div>
<div class="ttc" id="aclasssf_1_1Drawable_php"><div class="ttname"><a href="classsf_1_1Drawable.php">sf::Drawable</a></div><div class="ttdoc">Abstract base class for objects that can be drawn to a render target.</div><div class="ttdef"><b>Definition</b> <a href="Drawable_8hpp_source.php#l00044">Drawable.hpp:45</a></div></div>
<div class="ttc" id="aclasssf_1_1Rect_php"><div class="ttname"><a href="classsf_1_1Rect.php">sf::Rect&lt; float &gt;</a></div></div>
<div class="ttc" id="aclasssf_1_1RenderStates_php"><div class="ttname"><a href="classsf_1_1RenderStates.php">sf::RenderStates</a></div><div class="ttdoc">Define the states used for drawing to a RenderTarget.</div><div class="ttdef"><b>Definition</b> <a href="RenderStates_8hpp_source.php#l00045">RenderStates.hpp:46</a></div></div>
<div class="ttc" id="aclasssf_1_1RenderTarget_php"><div class="ttname"><a href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></div><div class="ttdoc">Base class for all render targets (window, texture, ...)</div><div class="ttdef"><b>Definition</b> <a href="RenderTarget_8hpp_source.php#l00052">RenderTarget.hpp:53</a></div></div>
<div class="ttc" id="aclasssf_1_1VertexArray_php"><div class="ttname"><a href="classsf_1_1VertexArray.php">sf::VertexArray</a></div><div class="ttdoc">Define a set of one or more 2D primitives.</div><div class="ttdef"><b>Definition</b> <a href="VertexArray_8hpp_source.php#l00045">VertexArray.hpp:46</a></div></div>
<div class="ttc" id="aclasssf_1_1VertexArray_php_a0c0fe239e8f9a54e64d3bbc96bf548c0"><div class="ttname"><a href="classsf_1_1VertexArray.php#a0c0fe239e8f9a54e64d3bbc96bf548c0">sf::VertexArray::resize</a></div><div class="ttdeci">void resize(std::size_t vertexCount)</div><div class="ttdoc">Resize the vertex array.</div></div>
<div class="ttc" id="aclasssf_1_1VertexArray_php_a15729e01df8fc0021f9774dfb56295c1"><div class="ttname"><a href="classsf_1_1VertexArray.php#a15729e01df8fc0021f9774dfb56295c1">sf::VertexArray::VertexArray</a></div><div class="ttdeci">VertexArray()</div><div class="ttdoc">Default constructor.</div></div>
<div class="ttc" id="aclasssf_1_1VertexArray_php_a3654c424aca1f9e468f369bc777c839c"><div class="ttname"><a href="classsf_1_1VertexArray.php#a3654c424aca1f9e468f369bc777c839c">sf::VertexArray::clear</a></div><div class="ttdeci">void clear()</div><div class="ttdoc">Clear the vertex array.</div></div>
<div class="ttc" id="aclasssf_1_1VertexArray_php_a4bb1c29a0e3354a035075899d84f02f9"><div class="ttname"><a href="classsf_1_1VertexArray.php#a4bb1c29a0e3354a035075899d84f02f9">sf::VertexArray::VertexArray</a></div><div class="ttdeci">VertexArray(PrimitiveType type, std::size_t vertexCount=0)</div><div class="ttdoc">Construct the vertex array with a type and an initial number of vertices.</div></div>
<div class="ttc" id="aclasssf_1_1VertexArray_php_a80c8f6865e53bd21fc6cb10fffa10035"><div class="ttname"><a href="classsf_1_1VertexArray.php#a80c8f6865e53bd21fc6cb10fffa10035">sf::VertexArray::append</a></div><div class="ttdeci">void append(const Vertex &amp;vertex)</div><div class="ttdoc">Add a vertex to the array.</div></div>
<div class="ttc" id="aclasssf_1_1VertexArray_php_aa1a60d84543aa6e220683349b645f130"><div class="ttname"><a href="classsf_1_1VertexArray.php#aa1a60d84543aa6e220683349b645f130">sf::VertexArray::getPrimitiveType</a></div><div class="ttdeci">PrimitiveType getPrimitiveType() const</div><div class="ttdoc">Get the type of primitives drawn by the vertex array.</div></div>
<div class="ttc" id="aclasssf_1_1VertexArray_php_aa38c10707c28a97f4627ae8b2f3ad969"><div class="ttname"><a href="classsf_1_1VertexArray.php#aa38c10707c28a97f4627ae8b2f3ad969">sf::VertexArray::setPrimitiveType</a></div><div class="ttdeci">void setPrimitiveType(PrimitiveType type)</div><div class="ttdoc">Set the type of primitives to draw.</div></div>
<div class="ttc" id="aclasssf_1_1VertexArray_php_abd57744c732abfc7d4c98d8e1d4ccca1"><div class="ttname"><a href="classsf_1_1VertexArray.php#abd57744c732abfc7d4c98d8e1d4ccca1">sf::VertexArray::getBounds</a></div><div class="ttdeci">FloatRect getBounds() const</div><div class="ttdoc">Compute the bounding rectangle of the vertex array.</div></div>
<div class="ttc" id="aclasssf_1_1VertexArray_php_abda90e8d841a273d93164f0c0032bd8d"><div class="ttname"><a href="classsf_1_1VertexArray.php#abda90e8d841a273d93164f0c0032bd8d">sf::VertexArray::getVertexCount</a></div><div class="ttdeci">std::size_t getVertexCount() const</div><div class="ttdoc">Return the vertex count.</div></div>
<div class="ttc" id="aclasssf_1_1Vertex_php"><div class="ttname"><a href="classsf_1_1Vertex.php">sf::Vertex</a></div><div class="ttdoc">Define a point with color and texture coordinates.</div><div class="ttdef"><b>Definition</b> <a href="Vertex_8hpp_source.php#l00042">Vertex.hpp:43</a></div></div>
<div class="ttc" id="agroup__graphics_php_ga5ee56ac1339984909610713096283b1b"><div class="ttname"><a href="group__graphics.php#ga5ee56ac1339984909610713096283b1b">sf::PrimitiveType</a></div><div class="ttdeci">PrimitiveType</div><div class="ttdoc">Types of primitives that a sf::VertexArray can render.</div><div class="ttdef"><b>Definition</b> <a href="PrimitiveType_8hpp_source.php#l00039">PrimitiveType.hpp:40</a></div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
