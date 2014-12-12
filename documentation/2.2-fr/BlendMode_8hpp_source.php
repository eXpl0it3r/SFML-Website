<?php
    $version = '2.2'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'BlendMode.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header-fr.php');
?>
<!-- Generated by Doxygen 1.8.8 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Classes</span></a></li>
      <li class="current"><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="files.php"><span>File&#160;List</span></a></li>
    </ul>
  </div>
<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><a class="el" href="dir_7107138a9ca528d5a30fb6c42d13b481.php">SFML</a></li><li class="navelem"><a class="el" href="dir_186e0dcb96ed2747fde77bc4d13d2016.php">include</a></li><li class="navelem"><a class="el" href="dir_8300c2a4f3c47520e59b1ed4cebc1d64.php">SFML</a></li><li class="navelem"><a class="el" href="dir_c35206ee16f5142ebcf86ff0b09d4086.php">Graphics</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">BlendMode.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;<span class="comment">// SFML - Simple and Fast Multimedia Library</span></div>
<div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;<span class="comment">// Copyright (C) 2007-2014 Laurent Gomila (laurent.gom@gmail.com)</span></div>
<div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00006"></a><span class="lineno">    6</span>&#160;<span class="comment">// This software is provided &#39;as-is&#39;, without any express or implied warranty.</span></div>
<div class="line"><a name="l00007"></a><span class="lineno">    7</span>&#160;<span class="comment">// In no event will the authors be held liable for any damages arising from the use of this software.</span></div>
<div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="comment">// Permission is granted to anyone to use this software for any purpose,</span></div>
<div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;<span class="comment">// including commercial applications, and to alter it and redistribute it freely,</span></div>
<div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="comment">// subject to the following restrictions:</span></div>
<div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="comment">// 1. The origin of this software must not be misrepresented;</span></div>
<div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;<span class="comment">//    you must not claim that you wrote the original software.</span></div>
<div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;<span class="comment">//    If you use this software in a product, an acknowledgment</span></div>
<div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;<span class="comment">//    in the product documentation would be appreciated but is not required.</span></div>
<div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;<span class="comment">// 2. Altered source versions must be plainly marked as such,</span></div>
<div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;<span class="comment">//    and must not be misrepresented as being the original software.</span></div>
<div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;<span class="comment">// 3. This notice may not be removed or altered from any source distribution.</span></div>
<div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;<span class="comment"></span></div>
<div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_BLENDMODE_HPP</span></div>
<div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor">#define SFML_BLENDMODE_HPP</span></div>
<div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;</div>
<div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="comment">// Headers</span></div>
<div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="comment"></span><span class="preprocessor">#include &lt;SFML/Graphics/Export.hpp&gt;</span></div>
<div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;</div>
<div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;</div>
<div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;<span class="keyword">namespace </span><a class="code" href="namespacesf.php">sf</a></div>
<div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;{</div>
<div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;</div>
<div class="line"><a name="l00041"></a><span class="lineno"><a class="line" href="structsf_1_1BlendMode.php">   41</a></span>&#160;<span class="keyword">struct </span>SFML_GRAPHICS_API <a class="code" href="structsf_1_1BlendMode.php">BlendMode</a></div>
<div class="line"><a name="l00042"></a><span class="lineno">   42</span>&#160;{</div>
<div class="line"><a name="l00049"></a><span class="lineno"><a class="line" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbb">   49</a></span>&#160;    <span class="keyword">enum</span> <a class="code" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbb">Factor</a></div>
<div class="line"><a name="l00050"></a><span class="lineno">   50</span>&#160;    {</div>
<div class="line"><a name="l00051"></a><span class="lineno"><a class="line" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbbafda2d66c3c3da15cd3b42338fbf6d2ba">   51</a></span>&#160;        <a class="code" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbbafda2d66c3c3da15cd3b42338fbf6d2ba">Zero</a>,             </div>
<div class="line"><a name="l00052"></a><span class="lineno"><a class="line" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbbaa2d3ba8b8bb2233c9d357cbb94bf4181">   52</a></span>&#160;        <a class="code" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbbaa2d3ba8b8bb2233c9d357cbb94bf4181">One</a>,              </div>
<div class="line"><a name="l00053"></a><span class="lineno"><a class="line" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbbad679bb0ecaf15c188d7f2e1fab572188">   53</a></span>&#160;        <a class="code" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbbad679bb0ecaf15c188d7f2e1fab572188">SrcColor</a>,         </div>
<div class="line"><a name="l00054"></a><span class="lineno"><a class="line" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbba5971ffdbca63382058ccba76bfce219e">   54</a></span>&#160;        <a class="code" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbba5971ffdbca63382058ccba76bfce219e">OneMinusSrcColor</a>, </div>
<div class="line"><a name="l00055"></a><span class="lineno"><a class="line" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbba3d85281c3eab7153f2bd9faae3e7523a">   55</a></span>&#160;        <a class="code" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbba3d85281c3eab7153f2bd9faae3e7523a">DstColor</a>,         </div>
<div class="line"><a name="l00056"></a><span class="lineno"><a class="line" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbbac8198db20d14506a841d1091ced1cae2">   56</a></span>&#160;        <a class="code" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbbac8198db20d14506a841d1091ced1cae2">OneMinusDstColor</a>, </div>
<div class="line"><a name="l00057"></a><span class="lineno"><a class="line" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbbaac0ae68df2930b4d616c3e7abeec7d41">   57</a></span>&#160;        <a class="code" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbbaac0ae68df2930b4d616c3e7abeec7d41">SrcAlpha</a>,         </div>
<div class="line"><a name="l00058"></a><span class="lineno"><a class="line" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbbaab57e8616bf4c21d8ee923178acdf2c8">   58</a></span>&#160;        <a class="code" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbbaab57e8616bf4c21d8ee923178acdf2c8">OneMinusSrcAlpha</a>, </div>
<div class="line"><a name="l00059"></a><span class="lineno"><a class="line" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbba5e3dc9a6f117aaa5f7433e1f4662a5f7">   59</a></span>&#160;        <a class="code" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbba5e3dc9a6f117aaa5f7433e1f4662a5f7">DstAlpha</a>,         </div>
<div class="line"><a name="l00060"></a><span class="lineno"><a class="line" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbbab4e5c63f189f26075e5939ad1a2ce4e4">   60</a></span>&#160;        OneMinusDstAlpha  </div>
<div class="line"><a name="l00061"></a><span class="lineno">   61</span>&#160;    };</div>
<div class="line"><a name="l00062"></a><span class="lineno">   62</span>&#160;</div>
<div class="line"><a name="l00069"></a><span class="lineno"><a class="line" href="structsf_1_1BlendMode.php#a7bce470e2e384c4f9c8d9595faef7c32">   69</a></span>&#160;    <span class="keyword">enum</span> <a class="code" href="structsf_1_1BlendMode.php#a7bce470e2e384c4f9c8d9595faef7c32">Equation</a></div>
<div class="line"><a name="l00070"></a><span class="lineno">   70</span>&#160;    {</div>
<div class="line"><a name="l00071"></a><span class="lineno"><a class="line" href="structsf_1_1BlendMode.php#a7bce470e2e384c4f9c8d9595faef7c32a50c081d8f36cf7b77632966e15d38966">   71</a></span>&#160;        <a class="code" href="structsf_1_1BlendMode.php#a7bce470e2e384c4f9c8d9595faef7c32a50c081d8f36cf7b77632966e15d38966">Add</a>,     </div>
<div class="line"><a name="l00072"></a><span class="lineno"><a class="line" href="structsf_1_1BlendMode.php#a7bce470e2e384c4f9c8d9595faef7c32a14c825be24f8412fc5ed5b49f19bc0d0">   72</a></span>&#160;        Subtract </div>
<div class="line"><a name="l00073"></a><span class="lineno">   73</span>&#160;    };</div>
<div class="line"><a name="l00074"></a><span class="lineno">   74</span>&#160;</div>
<div class="line"><a name="l00081"></a><span class="lineno">   81</span>&#160;    <a class="code" href="structsf_1_1BlendMode.php">BlendMode</a>();</div>
<div class="line"><a name="l00082"></a><span class="lineno">   82</span>&#160;</div>
<div class="line"><a name="l00094"></a><span class="lineno">   94</span>&#160;    <a class="code" href="structsf_1_1BlendMode.php">BlendMode</a>(Factor sourceFactor, Factor destinationFactor, Equation blendEquation = Add);</div>
<div class="line"><a name="l00095"></a><span class="lineno">   95</span>&#160;</div>
<div class="line"><a name="l00107"></a><span class="lineno">  107</span>&#160;    <a class="code" href="structsf_1_1BlendMode.php">BlendMode</a>(Factor colorSourceFactor, Factor colorDestinationFactor,</div>
<div class="line"><a name="l00108"></a><span class="lineno">  108</span>&#160;              Equation colorBlendEquation, Factor alphaSourceFactor,</div>
<div class="line"><a name="l00109"></a><span class="lineno">  109</span>&#160;              Factor alphaDestinationFactor, Equation alphaBlendEquation);</div>
<div class="line"><a name="l00110"></a><span class="lineno">  110</span>&#160;</div>
<div class="line"><a name="l00112"></a><span class="lineno">  112</span>&#160;    <span class="comment">// Member Data</span></div>
<div class="line"><a name="l00114"></a><span class="lineno"><a class="line" href="structsf_1_1BlendMode.php#a32d1a55dbfada86a06d9b881dc8ccf7b">  114</a></span>&#160;<span class="comment"></span>    <a class="code" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbb">Factor</a>   <a class="code" href="structsf_1_1BlendMode.php#a32d1a55dbfada86a06d9b881dc8ccf7b">colorSrcFactor</a>; </div>
<div class="line"><a name="l00115"></a><span class="lineno"><a class="line" href="structsf_1_1BlendMode.php#adee68ee59e7f1bf71d12db03d251104d">  115</a></span>&#160;    <a class="code" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbb">Factor</a>   <a class="code" href="structsf_1_1BlendMode.php#adee68ee59e7f1bf71d12db03d251104d">colorDstFactor</a>; </div>
<div class="line"><a name="l00116"></a><span class="lineno"><a class="line" href="structsf_1_1BlendMode.php#aed12f06eb7f50a1b95b892b0964857b1">  116</a></span>&#160;    <a class="code" href="structsf_1_1BlendMode.php#a7bce470e2e384c4f9c8d9595faef7c32">Equation</a> <a class="code" href="structsf_1_1BlendMode.php#aed12f06eb7f50a1b95b892b0964857b1">colorEquation</a>;  </div>
<div class="line"><a name="l00117"></a><span class="lineno"><a class="line" href="structsf_1_1BlendMode.php#aa94e44f8e1042a7357e8eff78c61a1be">  117</a></span>&#160;    <a class="code" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbb">Factor</a>   <a class="code" href="structsf_1_1BlendMode.php#aa94e44f8e1042a7357e8eff78c61a1be">alphaSrcFactor</a>; </div>
<div class="line"><a name="l00118"></a><span class="lineno"><a class="line" href="structsf_1_1BlendMode.php#aaf85b6b7943181cc81745569c4851e4e">  118</a></span>&#160;    <a class="code" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbb">Factor</a>   <a class="code" href="structsf_1_1BlendMode.php#aaf85b6b7943181cc81745569c4851e4e">alphaDstFactor</a>; </div>
<div class="line"><a name="l00119"></a><span class="lineno"><a class="line" href="structsf_1_1BlendMode.php#a68f5a305e0912946f39ba6c9265710c4">  119</a></span>&#160;    <a class="code" href="structsf_1_1BlendMode.php#a7bce470e2e384c4f9c8d9595faef7c32">Equation</a> <a class="code" href="structsf_1_1BlendMode.php#a68f5a305e0912946f39ba6c9265710c4">alphaEquation</a>;  </div>
<div class="line"><a name="l00120"></a><span class="lineno">  120</span>&#160;};</div>
<div class="line"><a name="l00121"></a><span class="lineno">  121</span>&#160;</div>
<div class="line"><a name="l00132"></a><span class="lineno">  132</span>&#160;SFML_GRAPHICS_API <span class="keywordtype">bool</span> operator ==(<span class="keyword">const</span> <a class="code" href="structsf_1_1BlendMode.php">BlendMode</a>&amp; left, <span class="keyword">const</span> <a class="code" href="structsf_1_1BlendMode.php">BlendMode</a>&amp; right);</div>
<div class="line"><a name="l00133"></a><span class="lineno">  133</span>&#160;</div>
<div class="line"><a name="l00144"></a><span class="lineno">  144</span>&#160;SFML_GRAPHICS_API <span class="keywordtype">bool</span> operator !=(<span class="keyword">const</span> <a class="code" href="structsf_1_1BlendMode.php">BlendMode</a>&amp; left, <span class="keyword">const</span> <a class="code" href="structsf_1_1BlendMode.php">BlendMode</a>&amp; right);</div>
<div class="line"><a name="l00145"></a><span class="lineno">  145</span>&#160;</div>
<div class="line"><a name="l00147"></a><span class="lineno">  147</span>&#160;<span class="comment">// Commonly used blending modes</span></div>
<div class="line"><a name="l00149"></a><span class="lineno">  149</span>&#160;<span class="comment"></span>SFML_GRAPHICS_API <span class="keyword">extern</span> <span class="keyword">const</span> <a class="code" href="structsf_1_1BlendMode.php">BlendMode</a> BlendAlpha;    </div>
<div class="line"><a name="l00150"></a><span class="lineno">  150</span>&#160;SFML_GRAPHICS_API <span class="keyword">extern</span> <span class="keyword">const</span> <a class="code" href="structsf_1_1BlendMode.php">BlendMode</a> BlendAdd;      </div>
<div class="line"><a name="l00151"></a><span class="lineno">  151</span>&#160;SFML_GRAPHICS_API <span class="keyword">extern</span> <span class="keyword">const</span> <a class="code" href="structsf_1_1BlendMode.php">BlendMode</a> BlendMultiply; </div>
<div class="line"><a name="l00152"></a><span class="lineno">  152</span>&#160;SFML_GRAPHICS_API <span class="keyword">extern</span> <span class="keyword">const</span> <a class="code" href="structsf_1_1BlendMode.php">BlendMode</a> BlendNone;     </div>
<div class="line"><a name="l00153"></a><span class="lineno">  153</span>&#160;</div>
<div class="line"><a name="l00154"></a><span class="lineno">  154</span>&#160;} <span class="comment">// namespace sf</span></div>
<div class="line"><a name="l00155"></a><span class="lineno">  155</span>&#160;</div>
<div class="line"><a name="l00156"></a><span class="lineno">  156</span>&#160;</div>
<div class="line"><a name="l00157"></a><span class="lineno">  157</span>&#160;<span class="preprocessor">#endif // SFML_BLENDMODE_HPP</span></div>
<div class="line"><a name="l00158"></a><span class="lineno">  158</span>&#160;</div>
<div class="line"><a name="l00159"></a><span class="lineno">  159</span>&#160;</div>
<div class="ttc" id="structsf_1_1BlendMode_php_afb9852caf356b53bb0de460c58a9ebbba5e3dc9a6f117aaa5f7433e1f4662a5f7"><div class="ttname"><a href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbba5e3dc9a6f117aaa5f7433e1f4662a5f7">sf::BlendMode::DstAlpha</a></div><div class="ttdoc">(dst.a, dst.a, dst.a, dst.a) </div><div class="ttdef"><b>Definition:</b> <a href="BlendMode_8hpp_source.php#l00059">BlendMode.hpp:59</a></div></div>
<div class="ttc" id="structsf_1_1BlendMode_php_afb9852caf356b53bb0de460c58a9ebbbaac0ae68df2930b4d616c3e7abeec7d41"><div class="ttname"><a href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbbaac0ae68df2930b4d616c3e7abeec7d41">sf::BlendMode::SrcAlpha</a></div><div class="ttdoc">(src.a, src.a, src.a, src.a) </div><div class="ttdef"><b>Definition:</b> <a href="BlendMode_8hpp_source.php#l00057">BlendMode.hpp:57</a></div></div>
<div class="ttc" id="structsf_1_1BlendMode_php_afb9852caf356b53bb0de460c58a9ebbb"><div class="ttname"><a href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbb">sf::BlendMode::Factor</a></div><div class="ttdeci">Factor</div><div class="ttdoc">Enumeration of the blending factors. </div><div class="ttdef"><b>Definition:</b> <a href="BlendMode_8hpp_source.php#l00049">BlendMode.hpp:49</a></div></div>
<div class="ttc" id="structsf_1_1BlendMode_php_a32d1a55dbfada86a06d9b881dc8ccf7b"><div class="ttname"><a href="structsf_1_1BlendMode.php#a32d1a55dbfada86a06d9b881dc8ccf7b">sf::BlendMode::colorSrcFactor</a></div><div class="ttdeci">Factor colorSrcFactor</div><div class="ttdoc">Source blending factor for the color channels. </div><div class="ttdef"><b>Definition:</b> <a href="BlendMode_8hpp_source.php#l00114">BlendMode.hpp:114</a></div></div>
<div class="ttc" id="structsf_1_1BlendMode_php_afb9852caf356b53bb0de460c58a9ebbbad679bb0ecaf15c188d7f2e1fab572188"><div class="ttname"><a href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbbad679bb0ecaf15c188d7f2e1fab572188">sf::BlendMode::SrcColor</a></div><div class="ttdoc">(src.r, src.g, src.b, src.a) </div><div class="ttdef"><b>Definition:</b> <a href="BlendMode_8hpp_source.php#l00053">BlendMode.hpp:53</a></div></div>
<div class="ttc" id="structsf_1_1BlendMode_php_afb9852caf356b53bb0de460c58a9ebbbaab57e8616bf4c21d8ee923178acdf2c8"><div class="ttname"><a href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbbaab57e8616bf4c21d8ee923178acdf2c8">sf::BlendMode::OneMinusSrcAlpha</a></div><div class="ttdoc">(1, 1, 1, 1) - (src.a, src.a, src.a, src.a) </div><div class="ttdef"><b>Definition:</b> <a href="BlendMode_8hpp_source.php#l00058">BlendMode.hpp:58</a></div></div>
<div class="ttc" id="structsf_1_1BlendMode_php_afb9852caf356b53bb0de460c58a9ebbbaa2d3ba8b8bb2233c9d357cbb94bf4181"><div class="ttname"><a href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbbaa2d3ba8b8bb2233c9d357cbb94bf4181">sf::BlendMode::One</a></div><div class="ttdoc">(1, 1, 1, 1) </div><div class="ttdef"><b>Definition:</b> <a href="BlendMode_8hpp_source.php#l00052">BlendMode.hpp:52</a></div></div>
<div class="ttc" id="namespacesf_php"><div class="ttname"><a href="namespacesf.php">sf</a></div><div class="ttdef"><b>Definition:</b> <a href="Listener_8hpp_source.php#l00035">Listener.hpp:35</a></div></div>
<div class="ttc" id="structsf_1_1BlendMode_php_a7bce470e2e384c4f9c8d9595faef7c32a50c081d8f36cf7b77632966e15d38966"><div class="ttname"><a href="structsf_1_1BlendMode.php#a7bce470e2e384c4f9c8d9595faef7c32a50c081d8f36cf7b77632966e15d38966">sf::BlendMode::Add</a></div><div class="ttdoc">Pixel = Src * SrcFactor + Dst * DstFactor. </div><div class="ttdef"><b>Definition:</b> <a href="BlendMode_8hpp_source.php#l00071">BlendMode.hpp:71</a></div></div>
<div class="ttc" id="structsf_1_1BlendMode_php_aed12f06eb7f50a1b95b892b0964857b1"><div class="ttname"><a href="structsf_1_1BlendMode.php#aed12f06eb7f50a1b95b892b0964857b1">sf::BlendMode::colorEquation</a></div><div class="ttdeci">Equation colorEquation</div><div class="ttdoc">Blending equation for the color channels. </div><div class="ttdef"><b>Definition:</b> <a href="BlendMode_8hpp_source.php#l00116">BlendMode.hpp:116</a></div></div>
<div class="ttc" id="structsf_1_1BlendMode_php_afb9852caf356b53bb0de460c58a9ebbbafda2d66c3c3da15cd3b42338fbf6d2ba"><div class="ttname"><a href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbbafda2d66c3c3da15cd3b42338fbf6d2ba">sf::BlendMode::Zero</a></div><div class="ttdoc">(0, 0, 0, 0) </div><div class="ttdef"><b>Definition:</b> <a href="BlendMode_8hpp_source.php#l00051">BlendMode.hpp:51</a></div></div>
<div class="ttc" id="structsf_1_1BlendMode_php_aaf85b6b7943181cc81745569c4851e4e"><div class="ttname"><a href="structsf_1_1BlendMode.php#aaf85b6b7943181cc81745569c4851e4e">sf::BlendMode::alphaDstFactor</a></div><div class="ttdeci">Factor alphaDstFactor</div><div class="ttdoc">Destination blending factor for the alpha channel. </div><div class="ttdef"><b>Definition:</b> <a href="BlendMode_8hpp_source.php#l00118">BlendMode.hpp:118</a></div></div>
<div class="ttc" id="structsf_1_1BlendMode_php_afb9852caf356b53bb0de460c58a9ebbba5971ffdbca63382058ccba76bfce219e"><div class="ttname"><a href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbba5971ffdbca63382058ccba76bfce219e">sf::BlendMode::OneMinusSrcColor</a></div><div class="ttdoc">(1, 1, 1, 1) - (src.r, src.g, src.b, src.a) </div><div class="ttdef"><b>Definition:</b> <a href="BlendMode_8hpp_source.php#l00054">BlendMode.hpp:54</a></div></div>
<div class="ttc" id="structsf_1_1BlendMode_php"><div class="ttname"><a href="structsf_1_1BlendMode.php">sf::BlendMode</a></div><div class="ttdoc">Blending modes for drawing. </div><div class="ttdef"><b>Definition:</b> <a href="BlendMode_8hpp_source.php#l00041">BlendMode.hpp:41</a></div></div>
<div class="ttc" id="structsf_1_1BlendMode_php_afb9852caf356b53bb0de460c58a9ebbba3d85281c3eab7153f2bd9faae3e7523a"><div class="ttname"><a href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbba3d85281c3eab7153f2bd9faae3e7523a">sf::BlendMode::DstColor</a></div><div class="ttdoc">(dst.r, dst.g, dst.b, dst.a) </div><div class="ttdef"><b>Definition:</b> <a href="BlendMode_8hpp_source.php#l00055">BlendMode.hpp:55</a></div></div>
<div class="ttc" id="structsf_1_1BlendMode_php_afb9852caf356b53bb0de460c58a9ebbbac8198db20d14506a841d1091ced1cae2"><div class="ttname"><a href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbbac8198db20d14506a841d1091ced1cae2">sf::BlendMode::OneMinusDstColor</a></div><div class="ttdoc">(1, 1, 1, 1) - (dst.r, dst.g, dst.b, dst.a) </div><div class="ttdef"><b>Definition:</b> <a href="BlendMode_8hpp_source.php#l00056">BlendMode.hpp:56</a></div></div>
<div class="ttc" id="structsf_1_1BlendMode_php_a68f5a305e0912946f39ba6c9265710c4"><div class="ttname"><a href="structsf_1_1BlendMode.php#a68f5a305e0912946f39ba6c9265710c4">sf::BlendMode::alphaEquation</a></div><div class="ttdeci">Equation alphaEquation</div><div class="ttdoc">Blending equation for the alpha channel. </div><div class="ttdef"><b>Definition:</b> <a href="BlendMode_8hpp_source.php#l00119">BlendMode.hpp:119</a></div></div>
<div class="ttc" id="structsf_1_1BlendMode_php_a7bce470e2e384c4f9c8d9595faef7c32"><div class="ttname"><a href="structsf_1_1BlendMode.php#a7bce470e2e384c4f9c8d9595faef7c32">sf::BlendMode::Equation</a></div><div class="ttdeci">Equation</div><div class="ttdoc">Enumeration of the blending equations. </div><div class="ttdef"><b>Definition:</b> <a href="BlendMode_8hpp_source.php#l00069">BlendMode.hpp:69</a></div></div>
<div class="ttc" id="structsf_1_1BlendMode_php_adee68ee59e7f1bf71d12db03d251104d"><div class="ttname"><a href="structsf_1_1BlendMode.php#adee68ee59e7f1bf71d12db03d251104d">sf::BlendMode::colorDstFactor</a></div><div class="ttdeci">Factor colorDstFactor</div><div class="ttdoc">Destination blending factor for the color channels. </div><div class="ttdef"><b>Definition:</b> <a href="BlendMode_8hpp_source.php#l00115">BlendMode.hpp:115</a></div></div>
<div class="ttc" id="structsf_1_1BlendMode_php_aa94e44f8e1042a7357e8eff78c61a1be"><div class="ttname"><a href="structsf_1_1BlendMode.php#aa94e44f8e1042a7357e8eff78c61a1be">sf::BlendMode::alphaSrcFactor</a></div><div class="ttdeci">Factor alphaSrcFactor</div><div class="ttdoc">Source blending factor for the alpha channel. </div><div class="ttdef"><b>Definition:</b> <a href="BlendMode_8hpp_source.php#l00117">BlendMode.hpp:117</a></div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
