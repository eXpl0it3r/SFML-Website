<?php
    $version = '2.6.1'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'Sprite.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
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
<li class="navelem"><a class="el" href="dir_c9d62fd513ce19bab3d7ef8db833e3f1.php">SFML</a></li><li class="navelem"><a class="el" href="dir_66c4f0b3361ff6a900e01a4b3c9d5eb7.php">include</a></li><li class="navelem"><a class="el" href="dir_b640c2c295eeac6b731646a7ed21830e.php">SFML</a></li><li class="navelem"><a class="el" href="dir_25140c63874fec7ab1624ad7e074f505.php">Graphics</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle"><div class="title">Sprite.hpp</div></div>
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
<div class="line"><a id="l00025" name="l00025"></a><span class="lineno">   25</span><span class="preprocessor">#ifndef SFML_SPRITE_HPP</span></div>
<div class="line"><a id="l00026" name="l00026"></a><span class="lineno">   26</span><span class="preprocessor">#define SFML_SPRITE_HPP</span></div>
<div class="line"><a id="l00027" name="l00027"></a><span class="lineno">   27</span> </div>
<div class="line"><a id="l00029" name="l00029"></a><span class="lineno">   29</span><span class="comment">// Headers</span></div>
<div class="line"><a id="l00031" name="l00031"></a><span class="lineno">   31</span><span class="preprocessor">#include &lt;SFML/Graphics/Export.hpp&gt;</span></div>
<div class="line"><a id="l00032" name="l00032"></a><span class="lineno">   32</span><span class="preprocessor">#include &lt;SFML/Graphics/Drawable.hpp&gt;</span></div>
<div class="line"><a id="l00033" name="l00033"></a><span class="lineno">   33</span><span class="preprocessor">#include &lt;SFML/Graphics/Transformable.hpp&gt;</span></div>
<div class="line"><a id="l00034" name="l00034"></a><span class="lineno">   34</span><span class="preprocessor">#include &lt;SFML/Graphics/Vertex.hpp&gt;</span></div>
<div class="line"><a id="l00035" name="l00035"></a><span class="lineno">   35</span><span class="preprocessor">#include &lt;SFML/Graphics/Rect.hpp&gt;</span></div>
<div class="line"><a id="l00036" name="l00036"></a><span class="lineno">   36</span> </div>
<div class="line"><a id="l00037" name="l00037"></a><span class="lineno">   37</span> </div>
<div class="line"><a id="l00038" name="l00038"></a><span class="lineno">   38</span><span class="keyword">namespace </span>sf</div>
<div class="line"><a id="l00039" name="l00039"></a><span class="lineno">   39</span>{</div>
<div class="line"><a id="l00040" name="l00040"></a><span class="lineno">   40</span><span class="keyword">class </span>Texture;</div>
<div class="line"><a id="l00041" name="l00041"></a><span class="lineno">   41</span> </div>
<div class="foldopen" id="foldopen00047" data-start="{" data-end="};">
<div class="line"><a id="l00047" name="l00047"></a><span class="lineno"><a class="line" href="classsf_1_1Sprite.php">   47</a></span><span class="keyword">class </span>SFML_GRAPHICS_API <a class="code hl_class" href="classsf_1_1Sprite.php">Sprite</a> : <span class="keyword">public</span> <a class="code hl_class" href="classsf_1_1Drawable.php">Drawable</a>, <span class="keyword">public</span> <a class="code hl_class" href="classsf_1_1Transformable.php">Transformable</a></div>
<div class="line"><a id="l00048" name="l00048"></a><span class="lineno">   48</span>{</div>
<div class="line"><a id="l00049" name="l00049"></a><span class="lineno">   49</span><span class="keyword">public</span>:</div>
<div class="line"><a id="l00050" name="l00050"></a><span class="lineno">   50</span> </div>
<div class="line"><a id="l00057" name="l00057"></a><span class="lineno"><a class="line" href="classsf_1_1Sprite.php#a92559fbca895a96758abf5eabab96984">   57</a></span>    <a class="code hl_function" href="classsf_1_1Sprite.php#a92559fbca895a96758abf5eabab96984">Sprite</a>();</div>
<div class="line"><a id="l00058" name="l00058"></a><span class="lineno">   58</span> </div>
<div class="line"><a id="l00067" name="l00067"></a><span class="lineno"><a class="line" href="classsf_1_1Sprite.php#a2a9fca374d7abf084bb1c143a879ff4a">   67</a></span>    <span class="keyword">explicit</span> <a class="code hl_function" href="classsf_1_1Sprite.php#a2a9fca374d7abf084bb1c143a879ff4a">Sprite</a>(<span class="keyword">const</span> <a class="code hl_class" href="classsf_1_1Texture.php">Texture</a>&amp; texture);</div>
<div class="line"><a id="l00068" name="l00068"></a><span class="lineno">   68</span> </div>
<div class="line"><a id="l00078" name="l00078"></a><span class="lineno"><a class="line" href="classsf_1_1Sprite.php#a01cfe1402372d243dbaa2ffa96020206">   78</a></span>    <a class="code hl_function" href="classsf_1_1Sprite.php#a01cfe1402372d243dbaa2ffa96020206">Sprite</a>(<span class="keyword">const</span> <a class="code hl_class" href="classsf_1_1Texture.php">Texture</a>&amp; texture, <span class="keyword">const</span> <a class="code hl_class" href="classsf_1_1Rect.php">IntRect</a>&amp; rectangle);</div>
<div class="line"><a id="l00079" name="l00079"></a><span class="lineno">   79</span> </div>
<div class="line"><a id="l00099" name="l00099"></a><span class="lineno"><a class="line" href="classsf_1_1Sprite.php#a3729c88d88ac38c19317c18e87242560">   99</a></span>    <span class="keywordtype">void</span> <a class="code hl_function" href="classsf_1_1Sprite.php#a3729c88d88ac38c19317c18e87242560">setTexture</a>(<span class="keyword">const</span> <a class="code hl_class" href="classsf_1_1Texture.php">Texture</a>&amp; texture, <span class="keywordtype">bool</span> resetRect = <span class="keyword">false</span>);</div>
<div class="line"><a id="l00100" name="l00100"></a><span class="lineno">  100</span> </div>
<div class="line"><a id="l00113" name="l00113"></a><span class="lineno"><a class="line" href="classsf_1_1Sprite.php#a3fefec419a4e6a90c0fd54c793d82ec2">  113</a></span>    <span class="keywordtype">void</span> <a class="code hl_function" href="classsf_1_1Sprite.php#a3fefec419a4e6a90c0fd54c793d82ec2">setTextureRect</a>(<span class="keyword">const</span> <a class="code hl_class" href="classsf_1_1Rect.php">IntRect</a>&amp; rectangle);</div>
<div class="line"><a id="l00114" name="l00114"></a><span class="lineno">  114</span> </div>
<div class="line"><a id="l00128" name="l00128"></a><span class="lineno"><a class="line" href="classsf_1_1Sprite.php#a14def44da6437bfea20c4df5e71aba4c">  128</a></span>    <span class="keywordtype">void</span> <a class="code hl_function" href="classsf_1_1Sprite.php#a14def44da6437bfea20c4df5e71aba4c">setColor</a>(<span class="keyword">const</span> <a class="code hl_class" href="classsf_1_1Color.php">Color</a>&amp; color);</div>
<div class="line"><a id="l00129" name="l00129"></a><span class="lineno">  129</span> </div>
<div class="line"><a id="l00142" name="l00142"></a><span class="lineno"><a class="line" href="classsf_1_1Sprite.php#a6d0f107b5dd5976be50bc5b163ba21aa">  142</a></span>    <span class="keyword">const</span> <a class="code hl_class" href="classsf_1_1Texture.php">Texture</a>* <a class="code hl_function" href="classsf_1_1Sprite.php#a6d0f107b5dd5976be50bc5b163ba21aa">getTexture</a>() <span class="keyword">const</span>;</div>
<div class="line"><a id="l00143" name="l00143"></a><span class="lineno">  143</span> </div>
<div class="line"><a id="l00152" name="l00152"></a><span class="lineno"><a class="line" href="classsf_1_1Sprite.php#afb19e5b4f39d17cf4d95752b3a79bcb6">  152</a></span>    <span class="keyword">const</span> <a class="code hl_class" href="classsf_1_1Rect.php">IntRect</a>&amp; <a class="code hl_function" href="classsf_1_1Sprite.php#afb19e5b4f39d17cf4d95752b3a79bcb6">getTextureRect</a>() <span class="keyword">const</span>;</div>
<div class="line"><a id="l00153" name="l00153"></a><span class="lineno">  153</span> </div>
<div class="line"><a id="l00162" name="l00162"></a><span class="lineno"><a class="line" href="classsf_1_1Sprite.php#af4a3ee8177fdd6e472a360a0a837d7cf">  162</a></span>    <span class="keyword">const</span> <a class="code hl_class" href="classsf_1_1Color.php">Color</a>&amp; <a class="code hl_function" href="classsf_1_1Sprite.php#af4a3ee8177fdd6e472a360a0a837d7cf">getColor</a>() <span class="keyword">const</span>;</div>
<div class="line"><a id="l00163" name="l00163"></a><span class="lineno">  163</span> </div>
<div class="line"><a id="l00176" name="l00176"></a><span class="lineno"><a class="line" href="classsf_1_1Sprite.php#ab2f4c781464da6f8a52b1df6058a48b8">  176</a></span>    <a class="code hl_class" href="classsf_1_1Rect.php">FloatRect</a> <a class="code hl_function" href="classsf_1_1Sprite.php#ab2f4c781464da6f8a52b1df6058a48b8">getLocalBounds</a>() <span class="keyword">const</span>;</div>
<div class="line"><a id="l00177" name="l00177"></a><span class="lineno">  177</span> </div>
<div class="line"><a id="l00190" name="l00190"></a><span class="lineno"><a class="line" href="classsf_1_1Sprite.php#aa795483096b90745b2e799532963e271">  190</a></span>    <a class="code hl_class" href="classsf_1_1Rect.php">FloatRect</a> <a class="code hl_function" href="classsf_1_1Sprite.php#aa795483096b90745b2e799532963e271">getGlobalBounds</a>() <span class="keyword">const</span>;</div>
<div class="line"><a id="l00191" name="l00191"></a><span class="lineno">  191</span> </div>
<div class="line"><a id="l00192" name="l00192"></a><span class="lineno">  192</span><span class="keyword">private</span>:</div>
<div class="line"><a id="l00193" name="l00193"></a><span class="lineno">  193</span> </div>
<div class="line"><a id="l00201" name="l00201"></a><span class="lineno">  201</span>    <span class="keyword">virtual</span> <span class="keywordtype">void</span> draw(<a class="code hl_class" href="classsf_1_1RenderTarget.php">RenderTarget</a>&amp; target, <a class="code hl_class" href="classsf_1_1RenderStates.php">RenderStates</a> states) <span class="keyword">const</span>;</div>
<div class="line"><a id="l00202" name="l00202"></a><span class="lineno">  202</span> </div>
<div class="line"><a id="l00207" name="l00207"></a><span class="lineno">  207</span>    <span class="keywordtype">void</span> updatePositions();</div>
<div class="line"><a id="l00208" name="l00208"></a><span class="lineno">  208</span> </div>
<div class="line"><a id="l00213" name="l00213"></a><span class="lineno">  213</span>    <span class="keywordtype">void</span> updateTexCoords();</div>
<div class="line"><a id="l00214" name="l00214"></a><span class="lineno">  214</span> </div>
<div class="line"><a id="l00216" name="l00216"></a><span class="lineno">  216</span>    <span class="comment">// Member data</span></div>
<div class="line"><a id="l00218" name="l00218"></a><span class="lineno">  218</span>    <a class="code hl_class" href="classsf_1_1Vertex.php">Vertex</a>         m_vertices[4]; </div>
<div class="line"><a id="l00219" name="l00219"></a><span class="lineno">  219</span>    <span class="keyword">const</span> <a class="code hl_class" href="classsf_1_1Texture.php">Texture</a>* m_texture;     </div>
<div class="line"><a id="l00220" name="l00220"></a><span class="lineno">  220</span>    <a class="code hl_class" href="classsf_1_1Rect.php">IntRect</a>        m_textureRect; </div>
<div class="line"><a id="l00221" name="l00221"></a><span class="lineno">  221</span>};</div>
</div>
<div class="line"><a id="l00222" name="l00222"></a><span class="lineno">  222</span> </div>
<div class="line"><a id="l00223" name="l00223"></a><span class="lineno">  223</span>} <span class="comment">// namespace sf</span></div>
<div class="line"><a id="l00224" name="l00224"></a><span class="lineno">  224</span> </div>
<div class="line"><a id="l00225" name="l00225"></a><span class="lineno">  225</span> </div>
<div class="line"><a id="l00226" name="l00226"></a><span class="lineno">  226</span><span class="preprocessor">#endif </span><span class="comment">// SFML_SPRITE_HPP</span></div>
<div class="line"><a id="l00227" name="l00227"></a><span class="lineno">  227</span> </div>
<div class="line"><a id="l00228" name="l00228"></a><span class="lineno">  228</span> </div>
<div class="ttc" id="aclasssf_1_1Color_php"><div class="ttname"><a href="classsf_1_1Color.php">sf::Color</a></div><div class="ttdoc">Utility class for manipulating RGBA colors.</div><div class="ttdef"><b>Definition</b> <a href="Color_8hpp_source.php#l00040">Color.hpp:41</a></div></div>
<div class="ttc" id="aclasssf_1_1Drawable_php"><div class="ttname"><a href="classsf_1_1Drawable.php">sf::Drawable</a></div><div class="ttdoc">Abstract base class for objects that can be drawn to a render target.</div><div class="ttdef"><b>Definition</b> <a href="Drawable_8hpp_source.php#l00044">Drawable.hpp:45</a></div></div>
<div class="ttc" id="aclasssf_1_1Rect_php"><div class="ttname"><a href="classsf_1_1Rect.php">sf::Rect&lt; int &gt;</a></div></div>
<div class="ttc" id="aclasssf_1_1RenderStates_php"><div class="ttname"><a href="classsf_1_1RenderStates.php">sf::RenderStates</a></div><div class="ttdoc">Define the states used for drawing to a RenderTarget.</div><div class="ttdef"><b>Definition</b> <a href="RenderStates_8hpp_source.php#l00045">RenderStates.hpp:46</a></div></div>
<div class="ttc" id="aclasssf_1_1RenderTarget_php"><div class="ttname"><a href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></div><div class="ttdoc">Base class for all render targets (window, texture, ...)</div><div class="ttdef"><b>Definition</b> <a href="RenderTarget_8hpp_source.php#l00052">RenderTarget.hpp:53</a></div></div>
<div class="ttc" id="aclasssf_1_1Sprite_php"><div class="ttname"><a href="classsf_1_1Sprite.php">sf::Sprite</a></div><div class="ttdoc">Drawable representation of a texture, with its own transformations, color, etc.</div><div class="ttdef"><b>Definition</b> <a href="Sprite_8hpp_source.php#l00047">Sprite.hpp:48</a></div></div>
<div class="ttc" id="aclasssf_1_1Sprite_php_a01cfe1402372d243dbaa2ffa96020206"><div class="ttname"><a href="classsf_1_1Sprite.php#a01cfe1402372d243dbaa2ffa96020206">sf::Sprite::Sprite</a></div><div class="ttdeci">Sprite(const Texture &amp;texture, const IntRect &amp;rectangle)</div><div class="ttdoc">Construct the sprite from a sub-rectangle of a source texture.</div></div>
<div class="ttc" id="aclasssf_1_1Sprite_php_a14def44da6437bfea20c4df5e71aba4c"><div class="ttname"><a href="classsf_1_1Sprite.php#a14def44da6437bfea20c4df5e71aba4c">sf::Sprite::setColor</a></div><div class="ttdeci">void setColor(const Color &amp;color)</div><div class="ttdoc">Set the global color of the sprite.</div></div>
<div class="ttc" id="aclasssf_1_1Sprite_php_a2a9fca374d7abf084bb1c143a879ff4a"><div class="ttname"><a href="classsf_1_1Sprite.php#a2a9fca374d7abf084bb1c143a879ff4a">sf::Sprite::Sprite</a></div><div class="ttdeci">Sprite(const Texture &amp;texture)</div><div class="ttdoc">Construct the sprite from a source texture.</div></div>
<div class="ttc" id="aclasssf_1_1Sprite_php_a3729c88d88ac38c19317c18e87242560"><div class="ttname"><a href="classsf_1_1Sprite.php#a3729c88d88ac38c19317c18e87242560">sf::Sprite::setTexture</a></div><div class="ttdeci">void setTexture(const Texture &amp;texture, bool resetRect=false)</div><div class="ttdoc">Change the source texture of the sprite.</div></div>
<div class="ttc" id="aclasssf_1_1Sprite_php_a3fefec419a4e6a90c0fd54c793d82ec2"><div class="ttname"><a href="classsf_1_1Sprite.php#a3fefec419a4e6a90c0fd54c793d82ec2">sf::Sprite::setTextureRect</a></div><div class="ttdeci">void setTextureRect(const IntRect &amp;rectangle)</div><div class="ttdoc">Set the sub-rectangle of the texture that the sprite will display.</div></div>
<div class="ttc" id="aclasssf_1_1Sprite_php_a6d0f107b5dd5976be50bc5b163ba21aa"><div class="ttname"><a href="classsf_1_1Sprite.php#a6d0f107b5dd5976be50bc5b163ba21aa">sf::Sprite::getTexture</a></div><div class="ttdeci">const Texture * getTexture() const</div><div class="ttdoc">Get the source texture of the sprite.</div></div>
<div class="ttc" id="aclasssf_1_1Sprite_php_a92559fbca895a96758abf5eabab96984"><div class="ttname"><a href="classsf_1_1Sprite.php#a92559fbca895a96758abf5eabab96984">sf::Sprite::Sprite</a></div><div class="ttdeci">Sprite()</div><div class="ttdoc">Default constructor.</div></div>
<div class="ttc" id="aclasssf_1_1Sprite_php_aa795483096b90745b2e799532963e271"><div class="ttname"><a href="classsf_1_1Sprite.php#aa795483096b90745b2e799532963e271">sf::Sprite::getGlobalBounds</a></div><div class="ttdeci">FloatRect getGlobalBounds() const</div><div class="ttdoc">Get the global bounding rectangle of the entity.</div></div>
<div class="ttc" id="aclasssf_1_1Sprite_php_ab2f4c781464da6f8a52b1df6058a48b8"><div class="ttname"><a href="classsf_1_1Sprite.php#ab2f4c781464da6f8a52b1df6058a48b8">sf::Sprite::getLocalBounds</a></div><div class="ttdeci">FloatRect getLocalBounds() const</div><div class="ttdoc">Get the local bounding rectangle of the entity.</div></div>
<div class="ttc" id="aclasssf_1_1Sprite_php_af4a3ee8177fdd6e472a360a0a837d7cf"><div class="ttname"><a href="classsf_1_1Sprite.php#af4a3ee8177fdd6e472a360a0a837d7cf">sf::Sprite::getColor</a></div><div class="ttdeci">const Color &amp; getColor() const</div><div class="ttdoc">Get the global color of the sprite.</div></div>
<div class="ttc" id="aclasssf_1_1Sprite_php_afb19e5b4f39d17cf4d95752b3a79bcb6"><div class="ttname"><a href="classsf_1_1Sprite.php#afb19e5b4f39d17cf4d95752b3a79bcb6">sf::Sprite::getTextureRect</a></div><div class="ttdeci">const IntRect &amp; getTextureRect() const</div><div class="ttdoc">Get the sub-rectangle of the texture displayed by the sprite.</div></div>
<div class="ttc" id="aclasssf_1_1Texture_php"><div class="ttname"><a href="classsf_1_1Texture.php">sf::Texture</a></div><div class="ttdoc">Image living on the graphics card that can be used for drawing.</div><div class="ttdef"><b>Definition</b> <a href="Texture_8hpp_source.php#l00048">Texture.hpp:49</a></div></div>
<div class="ttc" id="aclasssf_1_1Transformable_php"><div class="ttname"><a href="classsf_1_1Transformable.php">sf::Transformable</a></div><div class="ttdoc">Decomposed transform defined by a position, a rotation and a scale.</div><div class="ttdef"><b>Definition</b> <a href="Transformable_8hpp_source.php#l00041">Transformable.hpp:42</a></div></div>
<div class="ttc" id="aclasssf_1_1Vertex_php"><div class="ttname"><a href="classsf_1_1Vertex.php">sf::Vertex</a></div><div class="ttdoc">Define a point with color and texture coordinates.</div><div class="ttdef"><b>Definition</b> <a href="Vertex_8hpp_source.php#l00042">Vertex.hpp:43</a></div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer.php");
?>
