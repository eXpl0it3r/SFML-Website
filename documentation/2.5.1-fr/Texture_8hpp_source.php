<?php
    $version = '2.5.1'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'Texture.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header-fr.php');
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
<div class="title">Texture.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;<span class="comment">// SFML - Simple and Fast Multimedia Library</span></div><div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;<span class="comment">// Copyright (C) 2007-2018 Laurent Gomila (laurent@sfml-dev.org)</span></div><div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00006"></a><span class="lineno">    6</span>&#160;<span class="comment">// This software is provided &#39;as-is&#39;, without any express or implied warranty.</span></div><div class="line"><a name="l00007"></a><span class="lineno">    7</span>&#160;<span class="comment">// In no event will the authors be held liable for any damages arising from the use of this software.</span></div><div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="comment">// Permission is granted to anyone to use this software for any purpose,</span></div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;<span class="comment">// including commercial applications, and to alter it and redistribute it freely,</span></div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="comment">// subject to the following restrictions:</span></div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="comment">// 1. The origin of this software must not be misrepresented;</span></div><div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;<span class="comment">//    you must not claim that you wrote the original software.</span></div><div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;<span class="comment">//    If you use this software in a product, an acknowledgment</span></div><div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;<span class="comment">//    in the product documentation would be appreciated but is not required.</span></div><div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;<span class="comment">// 2. Altered source versions must be plainly marked as such,</span></div><div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;<span class="comment">//    and must not be misrepresented as being the original software.</span></div><div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;<span class="comment">// 3. This notice may not be removed or altered from any source distribution.</span></div><div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;<span class="comment"></span></div><div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_TEXTURE_HPP</span></div><div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor">#define SFML_TEXTURE_HPP</span></div><div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;</div><div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="comment">// Headers</span></div><div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="comment"></span><span class="preprocessor">#include &lt;SFML/Graphics/Export.hpp&gt;</span></div><div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;<span class="preprocessor">#include &lt;SFML/Graphics/Image.hpp&gt;</span></div><div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;<span class="preprocessor">#include &lt;SFML/Window/GlResource.hpp&gt;</span></div><div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;</div><div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;</div><div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;<span class="keyword">namespace </span><a class="code" href="namespacesf.php">sf</a></div><div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;{</div><div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;<span class="keyword">class </span>InputStream;</div><div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;<span class="keyword">class </span>RenderTarget;</div><div class="line"><a name="l00040"></a><span class="lineno">   40</span>&#160;<span class="keyword">class </span>RenderTexture;</div><div class="line"><a name="l00041"></a><span class="lineno">   41</span>&#160;<span class="keyword">class </span>Text;</div><div class="line"><a name="l00042"></a><span class="lineno">   42</span>&#160;<span class="keyword">class </span>Window;</div><div class="line"><a name="l00043"></a><span class="lineno">   43</span>&#160;</div><div class="line"><a name="l00048"></a><span class="lineno"><a class="line" href="classsf_1_1Texture.php">   48</a></span>&#160;<span class="keyword">class </span>SFML_GRAPHICS_API <a class="code" href="classsf_1_1Texture.php">Texture</a> : <a class="code" href="classsf_1_1GlResource.php">GlResource</a></div><div class="line"><a name="l00049"></a><span class="lineno">   49</span>&#160;{</div><div class="line"><a name="l00050"></a><span class="lineno">   50</span>&#160;<span class="keyword">public</span>:</div><div class="line"><a name="l00051"></a><span class="lineno">   51</span>&#160;</div><div class="line"><a name="l00056"></a><span class="lineno"><a class="line" href="classsf_1_1Texture.php#aa6fd3bbe3c334b3c4428edfb2765a82e">   56</a></span>&#160;    <span class="keyword">enum</span> <a class="code" href="classsf_1_1Texture.php#aa6fd3bbe3c334b3c4428edfb2765a82e">CoordinateType</a></div><div class="line"><a name="l00057"></a><span class="lineno">   57</span>&#160;    {</div><div class="line"><a name="l00058"></a><span class="lineno"><a class="line" href="classsf_1_1Texture.php#aa6fd3bbe3c334b3c4428edfb2765a82ea69d6228950882e4d68be4ba4dbe7df73">   58</a></span>&#160;        <a class="code" href="classsf_1_1Texture.php#aa6fd3bbe3c334b3c4428edfb2765a82ea69d6228950882e4d68be4ba4dbe7df73">Normalized</a>, </div><div class="line"><a name="l00059"></a><span class="lineno"><a class="line" href="classsf_1_1Texture.php#aa6fd3bbe3c334b3c4428edfb2765a82ea6372f9c3a10203a7a69d8d5da59d82ff">   59</a></span>&#160;        Pixels      </div><div class="line"><a name="l00060"></a><span class="lineno">   60</span>&#160;    };</div><div class="line"><a name="l00061"></a><span class="lineno">   61</span>&#160;</div><div class="line"><a name="l00062"></a><span class="lineno">   62</span>&#160;<span class="keyword">public</span>:</div><div class="line"><a name="l00063"></a><span class="lineno">   63</span>&#160;</div><div class="line"><a name="l00070"></a><span class="lineno">   70</span>&#160;    <a class="code" href="classsf_1_1Texture.php">Texture</a>();</div><div class="line"><a name="l00071"></a><span class="lineno">   71</span>&#160;</div><div class="line"><a name="l00078"></a><span class="lineno">   78</span>&#160;    <a class="code" href="classsf_1_1Texture.php">Texture</a>(<span class="keyword">const</span> <a class="code" href="classsf_1_1Texture.php">Texture</a>&amp; copy);</div><div class="line"><a name="l00079"></a><span class="lineno">   79</span>&#160;</div><div class="line"><a name="l00084"></a><span class="lineno">   84</span>&#160;    ~<a class="code" href="classsf_1_1Texture.php">Texture</a>();</div><div class="line"><a name="l00085"></a><span class="lineno">   85</span>&#160;</div><div class="line"><a name="l00097"></a><span class="lineno">   97</span>&#160;    <span class="keywordtype">bool</span> create(<span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> width, <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> height);</div><div class="line"><a name="l00098"></a><span class="lineno">   98</span>&#160;</div><div class="line"><a name="l00128"></a><span class="lineno">  128</span>&#160;    <span class="keywordtype">bool</span> loadFromFile(<span class="keyword">const</span> std::string&amp; filename, <span class="keyword">const</span> <a class="code" href="classsf_1_1Rect.php">IntRect</a>&amp; area = <a class="code" href="classsf_1_1Rect.php">IntRect</a>());</div><div class="line"><a name="l00129"></a><span class="lineno">  129</span>&#160;</div><div class="line"><a name="l00160"></a><span class="lineno">  160</span>&#160;    <span class="keywordtype">bool</span> loadFromMemory(<span class="keyword">const</span> <span class="keywordtype">void</span>* data, std::size_t size, <span class="keyword">const</span> <a class="code" href="classsf_1_1Rect.php">IntRect</a>&amp; area = <a class="code" href="classsf_1_1Rect.php">IntRect</a>());</div><div class="line"><a name="l00161"></a><span class="lineno">  161</span>&#160;</div><div class="line"><a name="l00191"></a><span class="lineno">  191</span>&#160;    <span class="keywordtype">bool</span> loadFromStream(<a class="code" href="classsf_1_1InputStream.php">InputStream</a>&amp; stream, <span class="keyword">const</span> <a class="code" href="classsf_1_1Rect.php">IntRect</a>&amp; area = <a class="code" href="classsf_1_1Rect.php">IntRect</a>());</div><div class="line"><a name="l00192"></a><span class="lineno">  192</span>&#160;</div><div class="line"><a name="l00215"></a><span class="lineno">  215</span>&#160;    <span class="keywordtype">bool</span> loadFromImage(<span class="keyword">const</span> <a class="code" href="classsf_1_1Image.php">Image</a>&amp; image, <span class="keyword">const</span> <a class="code" href="classsf_1_1Rect.php">IntRect</a>&amp; area = <a class="code" href="classsf_1_1Rect.php">IntRect</a>());</div><div class="line"><a name="l00216"></a><span class="lineno">  216</span>&#160;</div><div class="line"><a name="l00223"></a><span class="lineno">  223</span>&#160;    <a class="code" href="classsf_1_1Vector2.php">Vector2u</a> getSize() <span class="keyword">const</span>;</div><div class="line"><a name="l00224"></a><span class="lineno">  224</span>&#160;</div><div class="line"><a name="l00238"></a><span class="lineno">  238</span>&#160;    <a class="code" href="classsf_1_1Image.php">Image</a> copyToImage() <span class="keyword">const</span>;</div><div class="line"><a name="l00239"></a><span class="lineno">  239</span>&#160;</div><div class="line"><a name="l00256"></a><span class="lineno">  256</span>&#160;    <span class="keywordtype">void</span> update(<span class="keyword">const</span> Uint8* pixels);</div><div class="line"><a name="l00257"></a><span class="lineno">  257</span>&#160;</div><div class="line"><a name="l00278"></a><span class="lineno">  278</span>&#160;    <span class="keywordtype">void</span> update(<span class="keyword">const</span> Uint8* pixels, <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> width, <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> height, <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> x, <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> y);</div><div class="line"><a name="l00279"></a><span class="lineno">  279</span>&#160;</div><div class="line"><a name="l00298"></a><span class="lineno">  298</span>&#160;    <span class="keywordtype">void</span> update(<span class="keyword">const</span> <a class="code" href="classsf_1_1Texture.php">Texture</a>&amp; texture);</div><div class="line"><a name="l00299"></a><span class="lineno">  299</span>&#160;</div><div class="line"><a name="l00315"></a><span class="lineno">  315</span>&#160;    <span class="keywordtype">void</span> update(<span class="keyword">const</span> <a class="code" href="classsf_1_1Texture.php">Texture</a>&amp; texture, <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> x, <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> y);</div><div class="line"><a name="l00316"></a><span class="lineno">  316</span>&#160;</div><div class="line"><a name="l00335"></a><span class="lineno">  335</span>&#160;    <span class="keywordtype">void</span> update(<span class="keyword">const</span> <a class="code" href="classsf_1_1Image.php">Image</a>&amp; image);</div><div class="line"><a name="l00336"></a><span class="lineno">  336</span>&#160;</div><div class="line"><a name="l00352"></a><span class="lineno">  352</span>&#160;    <span class="keywordtype">void</span> update(<span class="keyword">const</span> <a class="code" href="classsf_1_1Image.php">Image</a>&amp; image, <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> x, <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> y);</div><div class="line"><a name="l00353"></a><span class="lineno">  353</span>&#160;</div><div class="line"><a name="l00372"></a><span class="lineno">  372</span>&#160;    <span class="keywordtype">void</span> update(<span class="keyword">const</span> <a class="code" href="classsf_1_1Window.php">Window</a>&amp; window);</div><div class="line"><a name="l00373"></a><span class="lineno">  373</span>&#160;</div><div class="line"><a name="l00389"></a><span class="lineno">  389</span>&#160;    <span class="keywordtype">void</span> update(<span class="keyword">const</span> <a class="code" href="classsf_1_1Window.php">Window</a>&amp; window, <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> x, <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> y);</div><div class="line"><a name="l00390"></a><span class="lineno">  390</span>&#160;</div><div class="line"><a name="l00405"></a><span class="lineno">  405</span>&#160;    <span class="keywordtype">void</span> setSmooth(<span class="keywordtype">bool</span> smooth);</div><div class="line"><a name="l00406"></a><span class="lineno">  406</span>&#160;</div><div class="line"><a name="l00415"></a><span class="lineno">  415</span>&#160;    <span class="keywordtype">bool</span> isSmooth() <span class="keyword">const</span>;</div><div class="line"><a name="l00416"></a><span class="lineno">  416</span>&#160;</div><div class="line"><a name="l00440"></a><span class="lineno">  440</span>&#160;    <span class="keywordtype">void</span> setSrgb(<span class="keywordtype">bool</span> sRgb);</div><div class="line"><a name="l00441"></a><span class="lineno">  441</span>&#160;</div><div class="line"><a name="l00450"></a><span class="lineno">  450</span>&#160;    <span class="keywordtype">bool</span> isSrgb() <span class="keyword">const</span>;</div><div class="line"><a name="l00451"></a><span class="lineno">  451</span>&#160;</div><div class="line"><a name="l00474"></a><span class="lineno">  474</span>&#160;    <span class="keywordtype">void</span> setRepeated(<span class="keywordtype">bool</span> repeated);</div><div class="line"><a name="l00475"></a><span class="lineno">  475</span>&#160;</div><div class="line"><a name="l00484"></a><span class="lineno">  484</span>&#160;    <span class="keywordtype">bool</span> isRepeated() <span class="keyword">const</span>;</div><div class="line"><a name="l00485"></a><span class="lineno">  485</span>&#160;</div><div class="line"><a name="l00509"></a><span class="lineno">  509</span>&#160;    <span class="keywordtype">bool</span> generateMipmap();</div><div class="line"><a name="l00510"></a><span class="lineno">  510</span>&#160;</div><div class="line"><a name="l00519"></a><span class="lineno">  519</span>&#160;    <a class="code" href="classsf_1_1Texture.php">Texture</a>&amp; operator =(<span class="keyword">const</span> <a class="code" href="classsf_1_1Texture.php">Texture</a>&amp; right);</div><div class="line"><a name="l00520"></a><span class="lineno">  520</span>&#160;</div><div class="line"><a name="l00527"></a><span class="lineno">  527</span>&#160;    <span class="keywordtype">void</span> swap(<a class="code" href="classsf_1_1Texture.php">Texture</a>&amp; right);</div><div class="line"><a name="l00528"></a><span class="lineno">  528</span>&#160;</div><div class="line"><a name="l00539"></a><span class="lineno">  539</span>&#160;    <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> getNativeHandle() <span class="keyword">const</span>;</div><div class="line"><a name="l00540"></a><span class="lineno">  540</span>&#160;</div><div class="line"><a name="l00572"></a><span class="lineno">  572</span>&#160;    <span class="keyword">static</span> <span class="keywordtype">void</span> bind(<span class="keyword">const</span> <a class="code" href="classsf_1_1Texture.php">Texture</a>* texture, CoordinateType coordinateType = Normalized);</div><div class="line"><a name="l00573"></a><span class="lineno">  573</span>&#160;</div><div class="line"><a name="l00584"></a><span class="lineno">  584</span>&#160;    <span class="keyword">static</span> <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> getMaximumSize();</div><div class="line"><a name="l00585"></a><span class="lineno">  585</span>&#160;</div><div class="line"><a name="l00586"></a><span class="lineno">  586</span>&#160;<span class="keyword">private</span>:</div><div class="line"><a name="l00587"></a><span class="lineno">  587</span>&#160;</div><div class="line"><a name="l00588"></a><span class="lineno">  588</span>&#160;    <span class="keyword">friend</span> <span class="keyword">class </span><a class="code" href="classsf_1_1Text.php">Text</a>;</div><div class="line"><a name="l00589"></a><span class="lineno">  589</span>&#160;    <span class="keyword">friend</span> <span class="keyword">class </span><a class="code" href="classsf_1_1RenderTexture.php">RenderTexture</a>;</div><div class="line"><a name="l00590"></a><span class="lineno">  590</span>&#160;    <span class="keyword">friend</span> <span class="keyword">class </span><a class="code" href="classsf_1_1RenderTarget.php">RenderTarget</a>;</div><div class="line"><a name="l00591"></a><span class="lineno">  591</span>&#160;</div><div class="line"><a name="l00605"></a><span class="lineno">  605</span>&#160;    <span class="keyword">static</span> <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> getValidSize(<span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> size);</div><div class="line"><a name="l00606"></a><span class="lineno">  606</span>&#160;</div><div class="line"><a name="l00614"></a><span class="lineno">  614</span>&#160;    <span class="keywordtype">void</span> invalidateMipmap();</div><div class="line"><a name="l00615"></a><span class="lineno">  615</span>&#160;</div><div class="line"><a name="l00617"></a><span class="lineno">  617</span>&#160;    <span class="comment">// Member data</span></div><div class="line"><a name="l00619"></a><span class="lineno">  619</span>&#160;<span class="comment"></span>    <a class="code" href="classsf_1_1Vector2.php">Vector2u</a>     m_size;          </div><div class="line"><a name="l00620"></a><span class="lineno">  620</span>&#160;    <a class="code" href="classsf_1_1Vector2.php">Vector2u</a>     m_actualSize;    </div><div class="line"><a name="l00621"></a><span class="lineno">  621</span>&#160;    <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> m_texture;       </div><div class="line"><a name="l00622"></a><span class="lineno">  622</span>&#160;    <span class="keywordtype">bool</span>         m_isSmooth;      </div><div class="line"><a name="l00623"></a><span class="lineno">  623</span>&#160;    <span class="keywordtype">bool</span>         m_sRgb;          </div><div class="line"><a name="l00624"></a><span class="lineno">  624</span>&#160;    <span class="keywordtype">bool</span>         m_isRepeated;    </div><div class="line"><a name="l00625"></a><span class="lineno">  625</span>&#160;    <span class="keyword">mutable</span> <span class="keywordtype">bool</span> m_pixelsFlipped; </div><div class="line"><a name="l00626"></a><span class="lineno">  626</span>&#160;    <span class="keywordtype">bool</span>         m_fboAttachment; </div><div class="line"><a name="l00627"></a><span class="lineno">  627</span>&#160;    <span class="keywordtype">bool</span>         m_hasMipmap;     </div><div class="line"><a name="l00628"></a><span class="lineno">  628</span>&#160;    Uint64       m_cacheId;       </div><div class="line"><a name="l00629"></a><span class="lineno">  629</span>&#160;};</div><div class="line"><a name="l00630"></a><span class="lineno">  630</span>&#160;</div><div class="line"><a name="l00631"></a><span class="lineno">  631</span>&#160;} <span class="comment">// namespace sf</span></div><div class="line"><a name="l00632"></a><span class="lineno">  632</span>&#160;</div><div class="line"><a name="l00633"></a><span class="lineno">  633</span>&#160;</div><div class="line"><a name="l00634"></a><span class="lineno">  634</span>&#160;<span class="preprocessor">#endif // SFML_TEXTURE_HPP</span></div><div class="line"><a name="l00635"></a><span class="lineno">  635</span>&#160;</div><div class="ttc" id="classsf_1_1InputStream_php"><div class="ttname"><a href="classsf_1_1InputStream.php">sf::InputStream</a></div><div class="ttdoc">Abstract class for custom file input streams. </div><div class="ttdef"><b>Definition:</b> <a href="InputStream_8hpp_source.php#l00041">InputStream.hpp:41</a></div></div>
<div class="ttc" id="namespacesf_php"><div class="ttname"><a href="namespacesf.php">sf</a></div><div class="ttdef"><b>Definition:</b> <a href="AlResource_8hpp_source.php#l00034">AlResource.hpp:34</a></div></div>
<div class="ttc" id="classsf_1_1Text_php"><div class="ttname"><a href="classsf_1_1Text.php">sf::Text</a></div><div class="ttdoc">Graphical text that can be drawn to a render target. </div><div class="ttdef"><b>Definition:</b> <a href="Text_8hpp_source.php#l00048">Text.hpp:48</a></div></div>
<div class="ttc" id="classsf_1_1GlResource_php"><div class="ttname"><a href="classsf_1_1GlResource.php">sf::GlResource</a></div><div class="ttdoc">Base class for classes that require an OpenGL context. </div><div class="ttdef"><b>Definition:</b> <a href="GlResource_8hpp_source.php#l00046">GlResource.hpp:46</a></div></div>
<div class="ttc" id="classsf_1_1RenderTexture_php"><div class="ttname"><a href="classsf_1_1RenderTexture.php">sf::RenderTexture</a></div><div class="ttdoc">Target for off-screen 2D rendering into a texture. </div><div class="ttdef"><b>Definition:</b> <a href="RenderTexture_8hpp_source.php#l00048">RenderTexture.hpp:48</a></div></div>
<div class="ttc" id="classsf_1_1Rect_php"><div class="ttname"><a href="classsf_1_1Rect.php">sf::Rect&lt; int &gt;</a></div></div>
<div class="ttc" id="classsf_1_1Texture_php"><div class="ttname"><a href="classsf_1_1Texture.php">sf::Texture</a></div><div class="ttdoc">Image living on the graphics card that can be used for drawing. </div><div class="ttdef"><b>Definition:</b> <a href="Texture_8hpp_source.php#l00048">Texture.hpp:48</a></div></div>
<div class="ttc" id="classsf_1_1Window_php"><div class="ttname"><a href="classsf_1_1Window.php">sf::Window</a></div><div class="ttdoc">Window that serves as a target for OpenGL rendering. </div><div class="ttdef"><b>Definition:</b> <a href="Window_2Window_8hpp_source.php#l00058">Window/Window.hpp:58</a></div></div>
<div class="ttc" id="classsf_1_1Texture_php_aa6fd3bbe3c334b3c4428edfb2765a82e"><div class="ttname"><a href="classsf_1_1Texture.php#aa6fd3bbe3c334b3c4428edfb2765a82e">sf::Texture::CoordinateType</a></div><div class="ttdeci">CoordinateType</div><div class="ttdoc">Types of texture coordinates that can be used for rendering. </div><div class="ttdef"><b>Definition:</b> <a href="Texture_8hpp_source.php#l00056">Texture.hpp:56</a></div></div>
<div class="ttc" id="classsf_1_1RenderTarget_php"><div class="ttname"><a href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></div><div class="ttdoc">Base class for all render targets (window, texture, ...) </div><div class="ttdef"><b>Definition:</b> <a href="RenderTarget_8hpp_source.php#l00052">RenderTarget.hpp:52</a></div></div>
<div class="ttc" id="classsf_1_1Vector2_php"><div class="ttname"><a href="classsf_1_1Vector2.php">sf::Vector2&lt; unsigned int &gt;</a></div></div>
<div class="ttc" id="classsf_1_1Image_php"><div class="ttname"><a href="classsf_1_1Image.php">sf::Image</a></div><div class="ttdoc">Class for loading, manipulating and saving images. </div><div class="ttdef"><b>Definition:</b> <a href="Image_8hpp_source.php#l00046">Image.hpp:46</a></div></div>
<div class="ttc" id="classsf_1_1Texture_php_aa6fd3bbe3c334b3c4428edfb2765a82ea69d6228950882e4d68be4ba4dbe7df73"><div class="ttname"><a href="classsf_1_1Texture.php#aa6fd3bbe3c334b3c4428edfb2765a82ea69d6228950882e4d68be4ba4dbe7df73">sf::Texture::Normalized</a></div><div class="ttdoc">Texture coordinates in range [0 .. 1]. </div><div class="ttdef"><b>Definition:</b> <a href="Texture_8hpp_source.php#l00058">Texture.hpp:58</a></div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
