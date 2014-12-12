<?php
    $version = '2.2'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'Config.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header.php');
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
<li class="navelem"><a class="el" href="dir_7107138a9ca528d5a30fb6c42d13b481.php">SFML</a></li><li class="navelem"><a class="el" href="dir_186e0dcb96ed2747fde77bc4d13d2016.php">include</a></li><li class="navelem"><a class="el" href="dir_8300c2a4f3c47520e59b1ed4cebc1d64.php">SFML</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">Config.hpp</div>  </div>
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
<div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_CONFIG_HPP</span></div>
<div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor">#define SFML_CONFIG_HPP</span></div>
<div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;</div>
<div class="line"><a name="l00028"></a><span class="lineno">   28</span>&#160;</div>
<div class="line"><a name="l00030"></a><span class="lineno">   30</span>&#160;<span class="comment">// Define the SFML version</span></div>
<div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;<span class="comment"></span><span class="preprocessor">#define SFML_VERSION_MAJOR 2</span></div>
<div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;<span class="preprocessor">#define SFML_VERSION_MINOR 2</span></div>
<div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;<span class="preprocessor">#define SFML_VERSION_PATCH 0</span></div>
<div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;</div>
<div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;</div>
<div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;<span class="comment">// Identify the operating system</span></div>
<div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;<span class="comment">// see http://nadeausoftware.com/articles/2012/01/c_c_tip_how_use_compiler_predefined_macros_detect_operating_system</span></div>
<div class="line"><a name="l00041"></a><span class="lineno">   41</span>&#160;<span class="comment"></span><span class="preprocessor">#if defined(_WIN32)</span></div>
<div class="line"><a name="l00042"></a><span class="lineno">   42</span>&#160;</div>
<div class="line"><a name="l00043"></a><span class="lineno">   43</span>&#160;    <span class="comment">// Windows</span></div>
<div class="line"><a name="l00044"></a><span class="lineno">   44</span>&#160;<span class="preprocessor">    #define SFML_SYSTEM_WINDOWS</span></div>
<div class="line"><a name="l00045"></a><span class="lineno">   45</span>&#160;<span class="preprocessor">    #ifndef NOMINMAX</span></div>
<div class="line"><a name="l00046"></a><span class="lineno">   46</span>&#160;<span class="preprocessor">        #define NOMINMAX</span></div>
<div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;<span class="preprocessor">    #endif</span></div>
<div class="line"><a name="l00048"></a><span class="lineno">   48</span>&#160;</div>
<div class="line"><a name="l00049"></a><span class="lineno">   49</span>&#160;<span class="preprocessor">#elif defined(__APPLE__) &amp;&amp; defined(__MACH__)</span></div>
<div class="line"><a name="l00050"></a><span class="lineno">   50</span>&#160;</div>
<div class="line"><a name="l00051"></a><span class="lineno">   51</span>&#160;    <span class="comment">// Apple platform, see which one it is</span></div>
<div class="line"><a name="l00052"></a><span class="lineno">   52</span>&#160;<span class="preprocessor">    #include &quot;TargetConditionals.h&quot;</span></div>
<div class="line"><a name="l00053"></a><span class="lineno">   53</span>&#160;</div>
<div class="line"><a name="l00054"></a><span class="lineno">   54</span>&#160;<span class="preprocessor">    #if TARGET_OS_IPHONE || TARGET_IPHONE_SIMULATOR</span></div>
<div class="line"><a name="l00055"></a><span class="lineno">   55</span>&#160;</div>
<div class="line"><a name="l00056"></a><span class="lineno">   56</span>&#160;        <span class="comment">// iOS</span></div>
<div class="line"><a name="l00057"></a><span class="lineno">   57</span>&#160;<span class="preprocessor">        #define SFML_SYSTEM_IOS</span></div>
<div class="line"><a name="l00058"></a><span class="lineno">   58</span>&#160;</div>
<div class="line"><a name="l00059"></a><span class="lineno">   59</span>&#160;<span class="preprocessor">    #elif TARGET_OS_MAC</span></div>
<div class="line"><a name="l00060"></a><span class="lineno">   60</span>&#160;</div>
<div class="line"><a name="l00061"></a><span class="lineno">   61</span>&#160;        <span class="comment">// MacOS</span></div>
<div class="line"><a name="l00062"></a><span class="lineno">   62</span>&#160;<span class="preprocessor">        #define SFML_SYSTEM_MACOS</span></div>
<div class="line"><a name="l00063"></a><span class="lineno">   63</span>&#160;</div>
<div class="line"><a name="l00064"></a><span class="lineno">   64</span>&#160;<span class="preprocessor">    #else</span></div>
<div class="line"><a name="l00065"></a><span class="lineno">   65</span>&#160;</div>
<div class="line"><a name="l00066"></a><span class="lineno">   66</span>&#160;        <span class="comment">// Unsupported Apple system</span></div>
<div class="line"><a name="l00067"></a><span class="lineno">   67</span>&#160;<span class="preprocessor">        #error This Apple operating system is not supported by SFML library</span></div>
<div class="line"><a name="l00068"></a><span class="lineno">   68</span>&#160;</div>
<div class="line"><a name="l00069"></a><span class="lineno">   69</span>&#160;<span class="preprocessor">    #endif</span></div>
<div class="line"><a name="l00070"></a><span class="lineno">   70</span>&#160;</div>
<div class="line"><a name="l00071"></a><span class="lineno">   71</span>&#160;<span class="preprocessor">#elif defined(__unix__)</span></div>
<div class="line"><a name="l00072"></a><span class="lineno">   72</span>&#160;</div>
<div class="line"><a name="l00073"></a><span class="lineno">   73</span>&#160;    <span class="comment">// UNIX system, see which one it is</span></div>
<div class="line"><a name="l00074"></a><span class="lineno">   74</span>&#160;<span class="preprocessor">    #if defined(__ANDROID__)</span></div>
<div class="line"><a name="l00075"></a><span class="lineno">   75</span>&#160;</div>
<div class="line"><a name="l00076"></a><span class="lineno">   76</span>&#160;        <span class="comment">// Android</span></div>
<div class="line"><a name="l00077"></a><span class="lineno">   77</span>&#160;<span class="preprocessor">        #define SFML_SYSTEM_ANDROID</span></div>
<div class="line"><a name="l00078"></a><span class="lineno">   78</span>&#160;</div>
<div class="line"><a name="l00079"></a><span class="lineno">   79</span>&#160;<span class="preprocessor">    #elif defined(__linux__)</span></div>
<div class="line"><a name="l00080"></a><span class="lineno">   80</span>&#160;</div>
<div class="line"><a name="l00081"></a><span class="lineno">   81</span>&#160;         <span class="comment">// Linux</span></div>
<div class="line"><a name="l00082"></a><span class="lineno">   82</span>&#160;<span class="preprocessor">        #define SFML_SYSTEM_LINUX</span></div>
<div class="line"><a name="l00083"></a><span class="lineno">   83</span>&#160;</div>
<div class="line"><a name="l00084"></a><span class="lineno">   84</span>&#160;<span class="preprocessor">    #elif defined(__FreeBSD__) || defined(__FreeBSD_kernel__)</span></div>
<div class="line"><a name="l00085"></a><span class="lineno">   85</span>&#160;</div>
<div class="line"><a name="l00086"></a><span class="lineno">   86</span>&#160;        <span class="comment">// FreeBSD</span></div>
<div class="line"><a name="l00087"></a><span class="lineno">   87</span>&#160;<span class="preprocessor">        #define SFML_SYSTEM_FREEBSD</span></div>
<div class="line"><a name="l00088"></a><span class="lineno">   88</span>&#160;</div>
<div class="line"><a name="l00089"></a><span class="lineno">   89</span>&#160;<span class="preprocessor">    #else</span></div>
<div class="line"><a name="l00090"></a><span class="lineno">   90</span>&#160;</div>
<div class="line"><a name="l00091"></a><span class="lineno">   91</span>&#160;        <span class="comment">// Unsupported UNIX system</span></div>
<div class="line"><a name="l00092"></a><span class="lineno">   92</span>&#160;<span class="preprocessor">        #error This UNIX operating system is not supported by SFML library</span></div>
<div class="line"><a name="l00093"></a><span class="lineno">   93</span>&#160;</div>
<div class="line"><a name="l00094"></a><span class="lineno">   94</span>&#160;<span class="preprocessor">    #endif</span></div>
<div class="line"><a name="l00095"></a><span class="lineno">   95</span>&#160;</div>
<div class="line"><a name="l00096"></a><span class="lineno">   96</span>&#160;<span class="preprocessor">#else</span></div>
<div class="line"><a name="l00097"></a><span class="lineno">   97</span>&#160;</div>
<div class="line"><a name="l00098"></a><span class="lineno">   98</span>&#160;    <span class="comment">// Unsupported system</span></div>
<div class="line"><a name="l00099"></a><span class="lineno">   99</span>&#160;<span class="preprocessor">    #error This operating system is not supported by SFML library</span></div>
<div class="line"><a name="l00100"></a><span class="lineno">  100</span>&#160;</div>
<div class="line"><a name="l00101"></a><span class="lineno">  101</span>&#160;<span class="preprocessor">#endif</span></div>
<div class="line"><a name="l00102"></a><span class="lineno">  102</span>&#160;</div>
<div class="line"><a name="l00103"></a><span class="lineno">  103</span>&#160;</div>
<div class="line"><a name="l00105"></a><span class="lineno">  105</span>&#160;<span class="comment">// Define a portable debug macro</span></div>
<div class="line"><a name="l00107"></a><span class="lineno">  107</span>&#160;<span class="comment"></span><span class="preprocessor">#if !defined(NDEBUG)</span></div>
<div class="line"><a name="l00108"></a><span class="lineno">  108</span>&#160;</div>
<div class="line"><a name="l00109"></a><span class="lineno">  109</span>&#160;<span class="preprocessor">    #define SFML_DEBUG</span></div>
<div class="line"><a name="l00110"></a><span class="lineno">  110</span>&#160;</div>
<div class="line"><a name="l00111"></a><span class="lineno">  111</span>&#160;<span class="preprocessor">#endif</span></div>
<div class="line"><a name="l00112"></a><span class="lineno">  112</span>&#160;</div>
<div class="line"><a name="l00113"></a><span class="lineno">  113</span>&#160;</div>
<div class="line"><a name="l00115"></a><span class="lineno">  115</span>&#160;<span class="comment">// Define helpers to create portable import / export macros for each module</span></div>
<div class="line"><a name="l00117"></a><span class="lineno">  117</span>&#160;<span class="comment"></span><span class="preprocessor">#if !defined(SFML_STATIC)</span></div>
<div class="line"><a name="l00118"></a><span class="lineno">  118</span>&#160;</div>
<div class="line"><a name="l00119"></a><span class="lineno">  119</span>&#160;<span class="preprocessor">    #if defined(SFML_SYSTEM_WINDOWS)</span></div>
<div class="line"><a name="l00120"></a><span class="lineno">  120</span>&#160;</div>
<div class="line"><a name="l00121"></a><span class="lineno">  121</span>&#160;        <span class="comment">// Windows compilers need specific (and different) keywords for export and import</span></div>
<div class="line"><a name="l00122"></a><span class="lineno">  122</span>&#160;<span class="preprocessor">        #define SFML_API_EXPORT __declspec(dllexport)</span></div>
<div class="line"><a name="l00123"></a><span class="lineno">  123</span>&#160;<span class="preprocessor">        #define SFML_API_IMPORT __declspec(dllimport)</span></div>
<div class="line"><a name="l00124"></a><span class="lineno">  124</span>&#160;</div>
<div class="line"><a name="l00125"></a><span class="lineno">  125</span>&#160;        <span class="comment">// For Visual C++ compilers, we also need to turn off this annoying C4251 warning</span></div>
<div class="line"><a name="l00126"></a><span class="lineno">  126</span>&#160;<span class="preprocessor">        #ifdef _MSC_VER</span></div>
<div class="line"><a name="l00127"></a><span class="lineno">  127</span>&#160;</div>
<div class="line"><a name="l00128"></a><span class="lineno">  128</span>&#160;<span class="preprocessor">            #pragma warning(disable: 4251)</span></div>
<div class="line"><a name="l00129"></a><span class="lineno">  129</span>&#160;</div>
<div class="line"><a name="l00130"></a><span class="lineno">  130</span>&#160;<span class="preprocessor">        #endif</span></div>
<div class="line"><a name="l00131"></a><span class="lineno">  131</span>&#160;</div>
<div class="line"><a name="l00132"></a><span class="lineno">  132</span>&#160;<span class="preprocessor">    #else // Linux, FreeBSD, Mac OS X</span></div>
<div class="line"><a name="l00133"></a><span class="lineno">  133</span>&#160;</div>
<div class="line"><a name="l00134"></a><span class="lineno">  134</span>&#160;<span class="preprocessor">        #if __GNUC__ &gt;= 4</span></div>
<div class="line"><a name="l00135"></a><span class="lineno">  135</span>&#160;</div>
<div class="line"><a name="l00136"></a><span class="lineno">  136</span>&#160;            <span class="comment">// GCC 4 has special keywords for showing/hidding symbols,</span></div>
<div class="line"><a name="l00137"></a><span class="lineno">  137</span>&#160;            <span class="comment">// the same keyword is used for both importing and exporting</span></div>
<div class="line"><a name="l00138"></a><span class="lineno">  138</span>&#160;<span class="preprocessor">            #define SFML_API_EXPORT __attribute__ ((__visibility__ (&quot;default&quot;)))</span></div>
<div class="line"><a name="l00139"></a><span class="lineno">  139</span>&#160;<span class="preprocessor">            #define SFML_API_IMPORT __attribute__ ((__visibility__ (&quot;default&quot;)))</span></div>
<div class="line"><a name="l00140"></a><span class="lineno">  140</span>&#160;</div>
<div class="line"><a name="l00141"></a><span class="lineno">  141</span>&#160;<span class="preprocessor">        #else</span></div>
<div class="line"><a name="l00142"></a><span class="lineno">  142</span>&#160;</div>
<div class="line"><a name="l00143"></a><span class="lineno">  143</span>&#160;            <span class="comment">// GCC &lt; 4 has no mechanism to explicitely hide symbols, everything&#39;s exported</span></div>
<div class="line"><a name="l00144"></a><span class="lineno">  144</span>&#160;<span class="preprocessor">            #define SFML_API_EXPORT</span></div>
<div class="line"><a name="l00145"></a><span class="lineno">  145</span>&#160;<span class="preprocessor">            #define SFML_API_IMPORT</span></div>
<div class="line"><a name="l00146"></a><span class="lineno">  146</span>&#160;</div>
<div class="line"><a name="l00147"></a><span class="lineno">  147</span>&#160;<span class="preprocessor">        #endif</span></div>
<div class="line"><a name="l00148"></a><span class="lineno">  148</span>&#160;</div>
<div class="line"><a name="l00149"></a><span class="lineno">  149</span>&#160;<span class="preprocessor">    #endif</span></div>
<div class="line"><a name="l00150"></a><span class="lineno">  150</span>&#160;</div>
<div class="line"><a name="l00151"></a><span class="lineno">  151</span>&#160;<span class="preprocessor">#else</span></div>
<div class="line"><a name="l00152"></a><span class="lineno">  152</span>&#160;</div>
<div class="line"><a name="l00153"></a><span class="lineno">  153</span>&#160;    <span class="comment">// Static build doesn&#39;t need import/export macros</span></div>
<div class="line"><a name="l00154"></a><span class="lineno">  154</span>&#160;<span class="preprocessor">    #define SFML_API_EXPORT</span></div>
<div class="line"><a name="l00155"></a><span class="lineno">  155</span>&#160;<span class="preprocessor">    #define SFML_API_IMPORT</span></div>
<div class="line"><a name="l00156"></a><span class="lineno">  156</span>&#160;</div>
<div class="line"><a name="l00157"></a><span class="lineno">  157</span>&#160;<span class="preprocessor">#endif</span></div>
<div class="line"><a name="l00158"></a><span class="lineno">  158</span>&#160;</div>
<div class="line"><a name="l00159"></a><span class="lineno">  159</span>&#160;</div>
<div class="line"><a name="l00161"></a><span class="lineno">  161</span>&#160;<span class="comment">// Define portable fixed-size types</span></div>
<div class="line"><a name="l00163"></a><span class="lineno">  163</span>&#160;<span class="comment"></span><span class="keyword">namespace </span><a class="code" href="namespacesf.php">sf</a></div>
<div class="line"><a name="l00164"></a><span class="lineno">  164</span>&#160;{</div>
<div class="line"><a name="l00165"></a><span class="lineno">  165</span>&#160;    <span class="comment">// All &quot;common&quot; platforms use the same size for char, short and int</span></div>
<div class="line"><a name="l00166"></a><span class="lineno">  166</span>&#160;    <span class="comment">// (basically there are 3 types for 3 sizes, so no other match is possible),</span></div>
<div class="line"><a name="l00167"></a><span class="lineno">  167</span>&#160;    <span class="comment">// we can use them without doing any kind of check</span></div>
<div class="line"><a name="l00168"></a><span class="lineno">  168</span>&#160;</div>
<div class="line"><a name="l00169"></a><span class="lineno">  169</span>&#160;    <span class="comment">// 8 bits integer types</span></div>
<div class="line"><a name="l00170"></a><span class="lineno">  170</span>&#160;    <span class="keyword">typedef</span> <span class="keywordtype">signed</span>   <span class="keywordtype">char</span> Int8;</div>
<div class="line"><a name="l00171"></a><span class="lineno">  171</span>&#160;    <span class="keyword">typedef</span> <span class="keywordtype">unsigned</span> <span class="keywordtype">char</span> Uint8;</div>
<div class="line"><a name="l00172"></a><span class="lineno">  172</span>&#160;</div>
<div class="line"><a name="l00173"></a><span class="lineno">  173</span>&#160;    <span class="comment">// 16 bits integer types</span></div>
<div class="line"><a name="l00174"></a><span class="lineno">  174</span>&#160;    <span class="keyword">typedef</span> <span class="keywordtype">signed</span>   <span class="keywordtype">short</span> Int16;</div>
<div class="line"><a name="l00175"></a><span class="lineno">  175</span>&#160;    <span class="keyword">typedef</span> <span class="keywordtype">unsigned</span> <span class="keywordtype">short</span> Uint16;</div>
<div class="line"><a name="l00176"></a><span class="lineno">  176</span>&#160;</div>
<div class="line"><a name="l00177"></a><span class="lineno">  177</span>&#160;    <span class="comment">// 32 bits integer types</span></div>
<div class="line"><a name="l00178"></a><span class="lineno">  178</span>&#160;    <span class="keyword">typedef</span> <span class="keywordtype">signed</span>   <span class="keywordtype">int</span> Int32;</div>
<div class="line"><a name="l00179"></a><span class="lineno">  179</span>&#160;    <span class="keyword">typedef</span> <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> Uint32;</div>
<div class="line"><a name="l00180"></a><span class="lineno">  180</span>&#160;</div>
<div class="line"><a name="l00181"></a><span class="lineno">  181</span>&#160;    <span class="comment">// 64 bits integer types</span></div>
<div class="line"><a name="l00182"></a><span class="lineno">  182</span>&#160;<span class="preprocessor">    #if defined(_MSC_VER)</span></div>
<div class="line"><a name="l00183"></a><span class="lineno">  183</span>&#160;        <span class="keyword">typedef</span> <span class="keywordtype">signed</span>   __int64 Int64;</div>
<div class="line"><a name="l00184"></a><span class="lineno">  184</span>&#160;        <span class="keyword">typedef</span> <span class="keywordtype">unsigned</span> __int64 Uint64;</div>
<div class="line"><a name="l00185"></a><span class="lineno">  185</span>&#160;<span class="preprocessor">    #else</span></div>
<div class="line"><a name="l00186"></a><span class="lineno">  186</span>&#160;        <span class="keyword">typedef</span> <span class="keywordtype">signed</span>   <span class="keywordtype">long</span> <span class="keywordtype">long</span> Int64;</div>
<div class="line"><a name="l00187"></a><span class="lineno">  187</span>&#160;        <span class="keyword">typedef</span> <span class="keywordtype">unsigned</span> <span class="keywordtype">long</span> <span class="keywordtype">long</span> Uint64;</div>
<div class="line"><a name="l00188"></a><span class="lineno">  188</span>&#160;<span class="preprocessor">    #endif</span></div>
<div class="line"><a name="l00189"></a><span class="lineno">  189</span>&#160;</div>
<div class="line"><a name="l00190"></a><span class="lineno">  190</span>&#160;} <span class="comment">// namespace sf</span></div>
<div class="line"><a name="l00191"></a><span class="lineno">  191</span>&#160;</div>
<div class="line"><a name="l00192"></a><span class="lineno">  192</span>&#160;</div>
<div class="line"><a name="l00193"></a><span class="lineno">  193</span>&#160;<span class="preprocessor">#endif // SFML_CONFIG_HPP</span></div>
<div class="ttc" id="namespacesf_php"><div class="ttname"><a href="namespacesf.php">sf</a></div><div class="ttdef"><b>Definition:</b> <a href="Listener_8hpp_source.php#l00035">Listener.hpp:35</a></div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer.php");
?>
