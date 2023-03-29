<?php
    $version = '2.6.0'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'BlendMode.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header.php');
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
  <div class="headertitle"><div class="title">BlendMode.hpp</div></div>
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
<div class="line"><a id="l00024" name="l00024"></a><span class="lineno">   24</span><span class="comment"></span> </div>
<div class="line"><a id="l00025" name="l00025"></a><span class="lineno">   25</span><span class="preprocessor">#ifndef SFML_BLENDMODE_HPP</span></div>
<div class="line"><a id="l00026" name="l00026"></a><span class="lineno">   26</span><span class="preprocessor">#define SFML_BLENDMODE_HPP</span></div>
<div class="line"><a id="l00027" name="l00027"></a><span class="lineno">   27</span> </div>
<div class="line"><a id="l00029" name="l00029"></a><span class="lineno">   29</span><span class="comment">// Headers</span></div>
<div class="line"><a id="l00031" name="l00031"></a><span class="lineno">   31</span><span class="comment"></span><span class="preprocessor">#include &lt;SFML/Graphics/Export.hpp&gt;</span></div>
<div class="line"><a id="l00032" name="l00032"></a><span class="lineno">   32</span> </div>
<div class="line"><a id="l00033" name="l00033"></a><span class="lineno">   33</span> </div>
<div class="line"><a id="l00034" name="l00034"></a><span class="lineno">   34</span><span class="keyword">namespace </span>sf</div>
<div class="line"><a id="l00035" name="l00035"></a><span class="lineno">   35</span>{</div>
<div class="line"><a id="l00036" name="l00036"></a><span class="lineno">   36</span> </div>
<div class="line"><a id="l00041" name="l00041"></a><span class="lineno"><a class="line" href="structsf_1_1BlendMode.php">   41</a></span><span class="keyword">struct </span>SFML_GRAPHICS_API <a class="code hl_class" href="structsf_1_1BlendMode.php">BlendMode</a></div>
<div class="line"><a id="l00042" name="l00042"></a><span class="lineno">   42</span>{</div>
<div class="line"><a id="l00049" name="l00049"></a><span class="lineno"><a class="line" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbb">   49</a></span>    <span class="keyword">enum</span> <a class="code hl_enumeration" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbb">Factor</a></div>
<div class="line"><a id="l00050" name="l00050"></a><span class="lineno">   50</span>    {</div>
<div class="line"><a id="l00051" name="l00051"></a><span class="lineno"><a class="line" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbbafda2d66c3c3da15cd3b42338fbf6d2ba">   51</a></span>        <a class="code hl_enumvalue" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbbafda2d66c3c3da15cd3b42338fbf6d2ba">Zero</a>,             </div>
<div class="line"><a id="l00052" name="l00052"></a><span class="lineno"><a class="line" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbbaa2d3ba8b8bb2233c9d357cbb94bf4181">   52</a></span>        <a class="code hl_enumvalue" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbbaa2d3ba8b8bb2233c9d357cbb94bf4181">One</a>,              </div>
<div class="line"><a id="l00053" name="l00053"></a><span class="lineno"><a class="line" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbbad679bb0ecaf15c188d7f2e1fab572188">   53</a></span>        <a class="code hl_enumvalue" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbbad679bb0ecaf15c188d7f2e1fab572188">SrcColor</a>,         </div>
<div class="line"><a id="l00054" name="l00054"></a><span class="lineno"><a class="line" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbba5971ffdbca63382058ccba76bfce219e">   54</a></span>        <a class="code hl_enumvalue" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbba5971ffdbca63382058ccba76bfce219e">OneMinusSrcColor</a>, </div>
<div class="line"><a id="l00055" name="l00055"></a><span class="lineno"><a class="line" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbba3d85281c3eab7153f2bd9faae3e7523a">   55</a></span>        <a class="code hl_enumvalue" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbba3d85281c3eab7153f2bd9faae3e7523a">DstColor</a>,         </div>
<div class="line"><a id="l00056" name="l00056"></a><span class="lineno"><a class="line" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbbac8198db20d14506a841d1091ced1cae2">   56</a></span>        <a class="code hl_enumvalue" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbbac8198db20d14506a841d1091ced1cae2">OneMinusDstColor</a>, </div>
<div class="line"><a id="l00057" name="l00057"></a><span class="lineno"><a class="line" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbbaac0ae68df2930b4d616c3e7abeec7d41">   57</a></span>        <a class="code hl_enumvalue" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbbaac0ae68df2930b4d616c3e7abeec7d41">SrcAlpha</a>,         </div>
<div class="line"><a id="l00058" name="l00058"></a><span class="lineno"><a class="line" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbbaab57e8616bf4c21d8ee923178acdf2c8">   58</a></span>        <a class="code hl_enumvalue" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbbaab57e8616bf4c21d8ee923178acdf2c8">OneMinusSrcAlpha</a>, </div>
<div class="line"><a id="l00059" name="l00059"></a><span class="lineno"><a class="line" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbba5e3dc9a6f117aaa5f7433e1f4662a5f7">   59</a></span>        <a class="code hl_enumvalue" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbba5e3dc9a6f117aaa5f7433e1f4662a5f7">DstAlpha</a>,         </div>
<div class="line"><a id="l00060" name="l00060"></a><span class="lineno">   60</span>        OneMinusDstAlpha  </div>
<div class="line"><a id="l00061" name="l00061"></a><span class="lineno"><a class="line" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbbab4e5c63f189f26075e5939ad1a2ce4e4">   61</a></span>    };</div>
<div class="line"><a id="l00062" name="l00062"></a><span class="lineno">   62</span> </div>
<div class="line"><a id="l00069" name="l00069"></a><span class="lineno"><a class="line" href="structsf_1_1BlendMode.php#a7bce470e2e384c4f9c8d9595faef7c32">   69</a></span>    <span class="keyword">enum</span> <a class="code hl_enumeration" href="structsf_1_1BlendMode.php#a7bce470e2e384c4f9c8d9595faef7c32">Equation</a></div>
<div class="line"><a id="l00070" name="l00070"></a><span class="lineno">   70</span>    {</div>
<div class="line"><a id="l00071" name="l00071"></a><span class="lineno"><a class="line" href="structsf_1_1BlendMode.php#a7bce470e2e384c4f9c8d9595faef7c32a50c081d8f36cf7b77632966e15d38966">   71</a></span>        <a class="code hl_enumvalue" href="structsf_1_1BlendMode.php#a7bce470e2e384c4f9c8d9595faef7c32a50c081d8f36cf7b77632966e15d38966">Add</a>,             </div>
<div class="line"><a id="l00072" name="l00072"></a><span class="lineno"><a class="line" href="structsf_1_1BlendMode.php#a7bce470e2e384c4f9c8d9595faef7c32a14c825be24f8412fc5ed5b49f19bc0d0">   72</a></span>        <a class="code hl_enumvalue" href="structsf_1_1BlendMode.php#a7bce470e2e384c4f9c8d9595faef7c32a14c825be24f8412fc5ed5b49f19bc0d0">Subtract</a>,        </div>
<div class="line"><a id="l00073" name="l00073"></a><span class="lineno"><a class="line" href="structsf_1_1BlendMode.php#a7bce470e2e384c4f9c8d9595faef7c32a2d04acf59e91811128e7d0ef076f65f0">   73</a></span>        <a class="code hl_enumvalue" href="structsf_1_1BlendMode.php#a7bce470e2e384c4f9c8d9595faef7c32a2d04acf59e91811128e7d0ef076f65f0">ReverseSubtract</a>, </div>
<div class="line"><a id="l00074" name="l00074"></a><span class="lineno"><a class="line" href="structsf_1_1BlendMode.php#a7bce470e2e384c4f9c8d9595faef7c32aaaac595afe61d785aa8fd4b401acffc5">   74</a></span>        <a class="code hl_enumvalue" href="structsf_1_1BlendMode.php#a7bce470e2e384c4f9c8d9595faef7c32aaaac595afe61d785aa8fd4b401acffc5">Min</a>,             </div>
<div class="line"><a id="l00075" name="l00075"></a><span class="lineno">   75</span>        Max              </div>
<div class="line"><a id="l00076" name="l00076"></a><span class="lineno"><a class="line" href="structsf_1_1BlendMode.php#a7bce470e2e384c4f9c8d9595faef7c32a40ddfddfaafccc8b58478eeef52e4281">   76</a></span>    };</div>
<div class="line"><a id="l00077" name="l00077"></a><span class="lineno">   77</span> </div>
<div class="line"><a id="l00084" name="l00084"></a><span class="lineno"><a class="line" href="structsf_1_1BlendMode.php#a7faef75eae1fb47bbe93f45f38e3d345">   84</a></span>    <a class="code hl_function" href="structsf_1_1BlendMode.php#a7faef75eae1fb47bbe93f45f38e3d345">BlendMode</a>();</div>
<div class="line"><a id="l00085" name="l00085"></a><span class="lineno">   85</span> </div>
<div class="line"><a id="l00097" name="l00097"></a><span class="lineno"><a class="line" href="structsf_1_1BlendMode.php#a23c7452cc8e9eb943c3aea6234ce4297">   97</a></span>    <a class="code hl_function" href="structsf_1_1BlendMode.php#a23c7452cc8e9eb943c3aea6234ce4297">BlendMode</a>(<a class="code hl_enumeration" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbb">Factor</a> sourceFactor, <a class="code hl_enumeration" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbb">Factor</a> destinationFactor, <a class="code hl_enumeration" href="structsf_1_1BlendMode.php#a7bce470e2e384c4f9c8d9595faef7c32">Equation</a> blendEquation = Add);</div>
<div class="line"><a id="l00098" name="l00098"></a><span class="lineno">   98</span> </div>
<div class="line"><a id="l00110" name="l00110"></a><span class="lineno"><a class="line" href="structsf_1_1BlendMode.php#a69a12c596114e77126616e7e0f7d798b">  110</a></span>    <a class="code hl_function" href="structsf_1_1BlendMode.php#a69a12c596114e77126616e7e0f7d798b">BlendMode</a>(<a class="code hl_enumeration" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbb">Factor</a> colorSourceFactor, <a class="code hl_enumeration" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbb">Factor</a> colorDestinationFactor,</div>
<div class="line"><a id="l00111" name="l00111"></a><span class="lineno">  111</span>              <a class="code hl_enumeration" href="structsf_1_1BlendMode.php#a7bce470e2e384c4f9c8d9595faef7c32">Equation</a> colorBlendEquation, <a class="code hl_enumeration" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbb">Factor</a> alphaSourceFactor,</div>
<div class="line"><a id="l00112" name="l00112"></a><span class="lineno">  112</span>              <a class="code hl_enumeration" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbb">Factor</a> alphaDestinationFactor, <a class="code hl_enumeration" href="structsf_1_1BlendMode.php#a7bce470e2e384c4f9c8d9595faef7c32">Equation</a> alphaBlendEquation);</div>
<div class="line"><a id="l00113" name="l00113"></a><span class="lineno">  113</span> </div>
<div class="line"><a id="l00115" name="l00115"></a><span class="lineno">  115</span>    <span class="comment">// Member Data</span></div>
<div class="line"><a id="l00117" name="l00117"></a><span class="lineno"><a class="line" href="structsf_1_1BlendMode.php#a32d1a55dbfada86a06d9b881dc8ccf7b">  117</a></span><span class="comment"></span>    <a class="code hl_enumeration" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbb">Factor</a>   <a class="code hl_variable" href="structsf_1_1BlendMode.php#a32d1a55dbfada86a06d9b881dc8ccf7b">colorSrcFactor</a>; </div>
<div class="line"><a id="l00118" name="l00118"></a><span class="lineno"><a class="line" href="structsf_1_1BlendMode.php#adee68ee59e7f1bf71d12db03d251104d">  118</a></span>    <a class="code hl_enumeration" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbb">Factor</a>   <a class="code hl_variable" href="structsf_1_1BlendMode.php#adee68ee59e7f1bf71d12db03d251104d">colorDstFactor</a>; </div>
<div class="line"><a id="l00119" name="l00119"></a><span class="lineno"><a class="line" href="structsf_1_1BlendMode.php#aed12f06eb7f50a1b95b892b0964857b1">  119</a></span>    <a class="code hl_enumeration" href="structsf_1_1BlendMode.php#a7bce470e2e384c4f9c8d9595faef7c32">Equation</a> <a class="code hl_variable" href="structsf_1_1BlendMode.php#aed12f06eb7f50a1b95b892b0964857b1">colorEquation</a>;  </div>
<div class="line"><a id="l00120" name="l00120"></a><span class="lineno"><a class="line" href="structsf_1_1BlendMode.php#aa94e44f8e1042a7357e8eff78c61a1be">  120</a></span>    <a class="code hl_enumeration" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbb">Factor</a>   <a class="code hl_variable" href="structsf_1_1BlendMode.php#aa94e44f8e1042a7357e8eff78c61a1be">alphaSrcFactor</a>; </div>
<div class="line"><a id="l00121" name="l00121"></a><span class="lineno"><a class="line" href="structsf_1_1BlendMode.php#aaf85b6b7943181cc81745569c4851e4e">  121</a></span>    <a class="code hl_enumeration" href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbb">Factor</a>   <a class="code hl_variable" href="structsf_1_1BlendMode.php#aaf85b6b7943181cc81745569c4851e4e">alphaDstFactor</a>; </div>
<div class="line"><a id="l00122" name="l00122"></a><span class="lineno"><a class="line" href="structsf_1_1BlendMode.php#a68f5a305e0912946f39ba6c9265710c4">  122</a></span>    <a class="code hl_enumeration" href="structsf_1_1BlendMode.php#a7bce470e2e384c4f9c8d9595faef7c32">Equation</a> <a class="code hl_variable" href="structsf_1_1BlendMode.php#a68f5a305e0912946f39ba6c9265710c4">alphaEquation</a>;  </div>
<div class="line"><a id="l00123" name="l00123"></a><span class="lineno">  123</span>};</div>
<div class="line"><a id="l00124" name="l00124"></a><span class="lineno">  124</span> </div>
<div class="line"><a id="l00135" name="l00135"></a><span class="lineno"><a class="line" href="structsf_1_1BlendMode.php#a20d1be06061109c3cef58e0cc38729ea">  135</a></span>SFML_GRAPHICS_API <span class="keywordtype">bool</span> operator ==(<span class="keyword">const</span> <a class="code hl_class" href="structsf_1_1BlendMode.php">BlendMode</a>&amp; left, <span class="keyword">const</span> <a class="code hl_class" href="structsf_1_1BlendMode.php">BlendMode</a>&amp; right);</div>
<div class="line"><a id="l00136" name="l00136"></a><span class="lineno">  136</span> </div>
<div class="line"><a id="l00147" name="l00147"></a><span class="lineno"><a class="line" href="structsf_1_1BlendMode.php#aee6169f8983f5e92298c4ad6829563ba">  147</a></span>SFML_GRAPHICS_API <span class="keywordtype">bool</span> operator !=(<span class="keyword">const</span> <a class="code hl_class" href="structsf_1_1BlendMode.php">BlendMode</a>&amp; left, <span class="keyword">const</span> <a class="code hl_class" href="structsf_1_1BlendMode.php">BlendMode</a>&amp; right);</div>
<div class="line"><a id="l00148" name="l00148"></a><span class="lineno">  148</span> </div>
<div class="line"><a id="l00150" name="l00150"></a><span class="lineno">  150</span><span class="comment">// Commonly used blending modes</span></div>
<div class="line"><a id="l00152" name="l00152"></a><span class="lineno">  152</span><span class="comment"></span>SFML_GRAPHICS_API <span class="keyword">extern</span> <span class="keyword">const</span> <a class="code hl_class" href="structsf_1_1BlendMode.php">BlendMode</a> BlendAlpha;    </div>
<div class="line"><a id="l00153" name="l00153"></a><span class="lineno">  153</span>SFML_GRAPHICS_API <span class="keyword">extern</span> <span class="keyword">const</span> <a class="code hl_class" href="structsf_1_1BlendMode.php">BlendMode</a> BlendAdd;      </div>
<div class="line"><a id="l00154" name="l00154"></a><span class="lineno">  154</span>SFML_GRAPHICS_API <span class="keyword">extern</span> <span class="keyword">const</span> <a class="code hl_class" href="structsf_1_1BlendMode.php">BlendMode</a> BlendMultiply; </div>
<div class="line"><a id="l00155" name="l00155"></a><span class="lineno">  155</span>SFML_GRAPHICS_API <span class="keyword">extern</span> <span class="keyword">const</span> <a class="code hl_class" href="structsf_1_1BlendMode.php">BlendMode</a> BlendMin;      </div>
<div class="line"><a id="l00156" name="l00156"></a><span class="lineno">  156</span>SFML_GRAPHICS_API <span class="keyword">extern</span> <span class="keyword">const</span> <a class="code hl_class" href="structsf_1_1BlendMode.php">BlendMode</a> BlendMax;      </div>
<div class="line"><a id="l00157" name="l00157"></a><span class="lineno">  157</span>SFML_GRAPHICS_API <span class="keyword">extern</span> <span class="keyword">const</span> <a class="code hl_class" href="structsf_1_1BlendMode.php">BlendMode</a> BlendNone;     </div>
<div class="line"><a id="l00158" name="l00158"></a><span class="lineno">  158</span> </div>
<div class="line"><a id="l00159" name="l00159"></a><span class="lineno">  159</span>} <span class="comment">// namespace sf</span></div>
<div class="line"><a id="l00160" name="l00160"></a><span class="lineno">  160</span> </div>
<div class="line"><a id="l00161" name="l00161"></a><span class="lineno">  161</span> </div>
<div class="line"><a id="l00162" name="l00162"></a><span class="lineno">  162</span><span class="preprocessor">#endif </span><span class="comment">// SFML_BLENDMODE_HPP</span></div>
<div class="line"><a id="l00163" name="l00163"></a><span class="lineno">  163</span> </div>
<div class="line"><a id="l00164" name="l00164"></a><span class="lineno">  164</span> </div>
<div class="ttc" id="astructsf_1_1BlendMode_php"><div class="ttname"><a href="structsf_1_1BlendMode.php">sf::BlendMode</a></div><div class="ttdoc">Blending modes for drawing.</div><div class="ttdef"><b>Definition:</b> <a href="BlendMode_8hpp_source.php#l00041">BlendMode.hpp:42</a></div></div>
<div class="ttc" id="astructsf_1_1BlendMode_php_a23c7452cc8e9eb943c3aea6234ce4297"><div class="ttname"><a href="structsf_1_1BlendMode.php#a23c7452cc8e9eb943c3aea6234ce4297">sf::BlendMode::BlendMode</a></div><div class="ttdeci">BlendMode(Factor sourceFactor, Factor destinationFactor, Equation blendEquation=Add)</div><div class="ttdoc">Construct the blend mode given the factors and equation.</div></div>
<div class="ttc" id="astructsf_1_1BlendMode_php_a32d1a55dbfada86a06d9b881dc8ccf7b"><div class="ttname"><a href="structsf_1_1BlendMode.php#a32d1a55dbfada86a06d9b881dc8ccf7b">sf::BlendMode::colorSrcFactor</a></div><div class="ttdeci">Factor colorSrcFactor</div><div class="ttdoc">Source blending factor for the color channels.</div><div class="ttdef"><b>Definition:</b> <a href="BlendMode_8hpp_source.php#l00117">BlendMode.hpp:117</a></div></div>
<div class="ttc" id="astructsf_1_1BlendMode_php_a68f5a305e0912946f39ba6c9265710c4"><div class="ttname"><a href="structsf_1_1BlendMode.php#a68f5a305e0912946f39ba6c9265710c4">sf::BlendMode::alphaEquation</a></div><div class="ttdeci">Equation alphaEquation</div><div class="ttdoc">Blending equation for the alpha channel.</div><div class="ttdef"><b>Definition:</b> <a href="BlendMode_8hpp_source.php#l00122">BlendMode.hpp:122</a></div></div>
<div class="ttc" id="astructsf_1_1BlendMode_php_a69a12c596114e77126616e7e0f7d798b"><div class="ttname"><a href="structsf_1_1BlendMode.php#a69a12c596114e77126616e7e0f7d798b">sf::BlendMode::BlendMode</a></div><div class="ttdeci">BlendMode(Factor colorSourceFactor, Factor colorDestinationFactor, Equation colorBlendEquation, Factor alphaSourceFactor, Factor alphaDestinationFactor, Equation alphaBlendEquation)</div><div class="ttdoc">Construct the blend mode given the factors and equation.</div></div>
<div class="ttc" id="astructsf_1_1BlendMode_php_a7bce470e2e384c4f9c8d9595faef7c32"><div class="ttname"><a href="structsf_1_1BlendMode.php#a7bce470e2e384c4f9c8d9595faef7c32">sf::BlendMode::Equation</a></div><div class="ttdeci">Equation</div><div class="ttdoc">Enumeration of the blending equations.</div><div class="ttdef"><b>Definition:</b> <a href="BlendMode_8hpp_source.php#l00069">BlendMode.hpp:70</a></div></div>
<div class="ttc" id="astructsf_1_1BlendMode_php_a7bce470e2e384c4f9c8d9595faef7c32a14c825be24f8412fc5ed5b49f19bc0d0"><div class="ttname"><a href="structsf_1_1BlendMode.php#a7bce470e2e384c4f9c8d9595faef7c32a14c825be24f8412fc5ed5b49f19bc0d0">sf::BlendMode::Subtract</a></div><div class="ttdeci">@ Subtract</div><div class="ttdoc">Pixel = Src * SrcFactor - Dst * DstFactor.</div><div class="ttdef"><b>Definition:</b> <a href="BlendMode_8hpp_source.php#l00072">BlendMode.hpp:72</a></div></div>
<div class="ttc" id="astructsf_1_1BlendMode_php_a7bce470e2e384c4f9c8d9595faef7c32a2d04acf59e91811128e7d0ef076f65f0"><div class="ttname"><a href="structsf_1_1BlendMode.php#a7bce470e2e384c4f9c8d9595faef7c32a2d04acf59e91811128e7d0ef076f65f0">sf::BlendMode::ReverseSubtract</a></div><div class="ttdeci">@ ReverseSubtract</div><div class="ttdoc">Pixel = Dst * DstFactor - Src * SrcFactor.</div><div class="ttdef"><b>Definition:</b> <a href="BlendMode_8hpp_source.php#l00073">BlendMode.hpp:73</a></div></div>
<div class="ttc" id="astructsf_1_1BlendMode_php_a7bce470e2e384c4f9c8d9595faef7c32a50c081d8f36cf7b77632966e15d38966"><div class="ttname"><a href="structsf_1_1BlendMode.php#a7bce470e2e384c4f9c8d9595faef7c32a50c081d8f36cf7b77632966e15d38966">sf::BlendMode::Add</a></div><div class="ttdeci">@ Add</div><div class="ttdoc">Pixel = Src * SrcFactor + Dst * DstFactor.</div><div class="ttdef"><b>Definition:</b> <a href="BlendMode_8hpp_source.php#l00071">BlendMode.hpp:71</a></div></div>
<div class="ttc" id="astructsf_1_1BlendMode_php_a7bce470e2e384c4f9c8d9595faef7c32aaaac595afe61d785aa8fd4b401acffc5"><div class="ttname"><a href="structsf_1_1BlendMode.php#a7bce470e2e384c4f9c8d9595faef7c32aaaac595afe61d785aa8fd4b401acffc5">sf::BlendMode::Min</a></div><div class="ttdeci">@ Min</div><div class="ttdoc">Pixel = min(Dst, Src)</div><div class="ttdef"><b>Definition:</b> <a href="BlendMode_8hpp_source.php#l00074">BlendMode.hpp:74</a></div></div>
<div class="ttc" id="astructsf_1_1BlendMode_php_a7faef75eae1fb47bbe93f45f38e3d345"><div class="ttname"><a href="structsf_1_1BlendMode.php#a7faef75eae1fb47bbe93f45f38e3d345">sf::BlendMode::BlendMode</a></div><div class="ttdeci">BlendMode()</div><div class="ttdoc">Default constructor.</div></div>
<div class="ttc" id="astructsf_1_1BlendMode_php_aa94e44f8e1042a7357e8eff78c61a1be"><div class="ttname"><a href="structsf_1_1BlendMode.php#aa94e44f8e1042a7357e8eff78c61a1be">sf::BlendMode::alphaSrcFactor</a></div><div class="ttdeci">Factor alphaSrcFactor</div><div class="ttdoc">Source blending factor for the alpha channel.</div><div class="ttdef"><b>Definition:</b> <a href="BlendMode_8hpp_source.php#l00120">BlendMode.hpp:120</a></div></div>
<div class="ttc" id="astructsf_1_1BlendMode_php_aaf85b6b7943181cc81745569c4851e4e"><div class="ttname"><a href="structsf_1_1BlendMode.php#aaf85b6b7943181cc81745569c4851e4e">sf::BlendMode::alphaDstFactor</a></div><div class="ttdeci">Factor alphaDstFactor</div><div class="ttdoc">Destination blending factor for the alpha channel.</div><div class="ttdef"><b>Definition:</b> <a href="BlendMode_8hpp_source.php#l00121">BlendMode.hpp:121</a></div></div>
<div class="ttc" id="astructsf_1_1BlendMode_php_adee68ee59e7f1bf71d12db03d251104d"><div class="ttname"><a href="structsf_1_1BlendMode.php#adee68ee59e7f1bf71d12db03d251104d">sf::BlendMode::colorDstFactor</a></div><div class="ttdeci">Factor colorDstFactor</div><div class="ttdoc">Destination blending factor for the color channels.</div><div class="ttdef"><b>Definition:</b> <a href="BlendMode_8hpp_source.php#l00118">BlendMode.hpp:118</a></div></div>
<div class="ttc" id="astructsf_1_1BlendMode_php_aed12f06eb7f50a1b95b892b0964857b1"><div class="ttname"><a href="structsf_1_1BlendMode.php#aed12f06eb7f50a1b95b892b0964857b1">sf::BlendMode::colorEquation</a></div><div class="ttdeci">Equation colorEquation</div><div class="ttdoc">Blending equation for the color channels.</div><div class="ttdef"><b>Definition:</b> <a href="BlendMode_8hpp_source.php#l00119">BlendMode.hpp:119</a></div></div>
<div class="ttc" id="astructsf_1_1BlendMode_php_afb9852caf356b53bb0de460c58a9ebbb"><div class="ttname"><a href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbb">sf::BlendMode::Factor</a></div><div class="ttdeci">Factor</div><div class="ttdoc">Enumeration of the blending factors.</div><div class="ttdef"><b>Definition:</b> <a href="BlendMode_8hpp_source.php#l00049">BlendMode.hpp:50</a></div></div>
<div class="ttc" id="astructsf_1_1BlendMode_php_afb9852caf356b53bb0de460c58a9ebbba3d85281c3eab7153f2bd9faae3e7523a"><div class="ttname"><a href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbba3d85281c3eab7153f2bd9faae3e7523a">sf::BlendMode::DstColor</a></div><div class="ttdeci">@ DstColor</div><div class="ttdoc">(dst.r, dst.g, dst.b, dst.a)</div><div class="ttdef"><b>Definition:</b> <a href="BlendMode_8hpp_source.php#l00055">BlendMode.hpp:55</a></div></div>
<div class="ttc" id="astructsf_1_1BlendMode_php_afb9852caf356b53bb0de460c58a9ebbba5971ffdbca63382058ccba76bfce219e"><div class="ttname"><a href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbba5971ffdbca63382058ccba76bfce219e">sf::BlendMode::OneMinusSrcColor</a></div><div class="ttdeci">@ OneMinusSrcColor</div><div class="ttdoc">(1, 1, 1, 1) - (src.r, src.g, src.b, src.a)</div><div class="ttdef"><b>Definition:</b> <a href="BlendMode_8hpp_source.php#l00054">BlendMode.hpp:54</a></div></div>
<div class="ttc" id="astructsf_1_1BlendMode_php_afb9852caf356b53bb0de460c58a9ebbba5e3dc9a6f117aaa5f7433e1f4662a5f7"><div class="ttname"><a href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbba5e3dc9a6f117aaa5f7433e1f4662a5f7">sf::BlendMode::DstAlpha</a></div><div class="ttdeci">@ DstAlpha</div><div class="ttdoc">(dst.a, dst.a, dst.a, dst.a)</div><div class="ttdef"><b>Definition:</b> <a href="BlendMode_8hpp_source.php#l00059">BlendMode.hpp:59</a></div></div>
<div class="ttc" id="astructsf_1_1BlendMode_php_afb9852caf356b53bb0de460c58a9ebbbaa2d3ba8b8bb2233c9d357cbb94bf4181"><div class="ttname"><a href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbbaa2d3ba8b8bb2233c9d357cbb94bf4181">sf::BlendMode::One</a></div><div class="ttdeci">@ One</div><div class="ttdoc">(1, 1, 1, 1)</div><div class="ttdef"><b>Definition:</b> <a href="BlendMode_8hpp_source.php#l00052">BlendMode.hpp:52</a></div></div>
<div class="ttc" id="astructsf_1_1BlendMode_php_afb9852caf356b53bb0de460c58a9ebbbaab57e8616bf4c21d8ee923178acdf2c8"><div class="ttname"><a href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbbaab57e8616bf4c21d8ee923178acdf2c8">sf::BlendMode::OneMinusSrcAlpha</a></div><div class="ttdeci">@ OneMinusSrcAlpha</div><div class="ttdoc">(1, 1, 1, 1) - (src.a, src.a, src.a, src.a)</div><div class="ttdef"><b>Definition:</b> <a href="BlendMode_8hpp_source.php#l00058">BlendMode.hpp:58</a></div></div>
<div class="ttc" id="astructsf_1_1BlendMode_php_afb9852caf356b53bb0de460c58a9ebbbaac0ae68df2930b4d616c3e7abeec7d41"><div class="ttname"><a href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbbaac0ae68df2930b4d616c3e7abeec7d41">sf::BlendMode::SrcAlpha</a></div><div class="ttdeci">@ SrcAlpha</div><div class="ttdoc">(src.a, src.a, src.a, src.a)</div><div class="ttdef"><b>Definition:</b> <a href="BlendMode_8hpp_source.php#l00057">BlendMode.hpp:57</a></div></div>
<div class="ttc" id="astructsf_1_1BlendMode_php_afb9852caf356b53bb0de460c58a9ebbbac8198db20d14506a841d1091ced1cae2"><div class="ttname"><a href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbbac8198db20d14506a841d1091ced1cae2">sf::BlendMode::OneMinusDstColor</a></div><div class="ttdeci">@ OneMinusDstColor</div><div class="ttdoc">(1, 1, 1, 1) - (dst.r, dst.g, dst.b, dst.a)</div><div class="ttdef"><b>Definition:</b> <a href="BlendMode_8hpp_source.php#l00056">BlendMode.hpp:56</a></div></div>
<div class="ttc" id="astructsf_1_1BlendMode_php_afb9852caf356b53bb0de460c58a9ebbbad679bb0ecaf15c188d7f2e1fab572188"><div class="ttname"><a href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbbad679bb0ecaf15c188d7f2e1fab572188">sf::BlendMode::SrcColor</a></div><div class="ttdeci">@ SrcColor</div><div class="ttdoc">(src.r, src.g, src.b, src.a)</div><div class="ttdef"><b>Definition:</b> <a href="BlendMode_8hpp_source.php#l00053">BlendMode.hpp:53</a></div></div>
<div class="ttc" id="astructsf_1_1BlendMode_php_afb9852caf356b53bb0de460c58a9ebbbafda2d66c3c3da15cd3b42338fbf6d2ba"><div class="ttname"><a href="structsf_1_1BlendMode.php#afb9852caf356b53bb0de460c58a9ebbbafda2d66c3c3da15cd3b42338fbf6d2ba">sf::BlendMode::Zero</a></div><div class="ttdeci">@ Zero</div><div class="ttdoc">(0, 0, 0, 0)</div><div class="ttdef"><b>Definition:</b> <a href="BlendMode_8hpp_source.php#l00051">BlendMode.hpp:51</a></div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer.php");
?>
