<?php
    $version = '2.5.1'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'WindowHandle.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
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
<li class="navelem"><a class="el" href="dir_2916f9fbcacdf2e5f0583aa159c707b6.php">C++</a></li><li class="navelem"><a class="el" href="dir_bab8256609b0af2067c29191512341ac.php">SFML</a></li><li class="navelem"><a class="el" href="dir_a8c958b201b07fccfdb6651296ecafd7.php">include</a></li><li class="navelem"><a class="el" href="dir_9b72d1e63b6540393a46f669861ed95a.php">SFML</a></li><li class="navelem"><a class="el" href="dir_bd8254009cbcfdc9a683c3a2720dbe5a.php">Window</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">WindowHandle.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;<span class="comment">// SFML - Simple and Fast Multimedia Library</span></div><div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;<span class="comment">// Copyright (C) 2007-2018 Laurent Gomila (laurent@sfml-dev.org)</span></div><div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00006"></a><span class="lineno">    6</span>&#160;<span class="comment">// This software is provided &#39;as-is&#39;, without any express or implied warranty.</span></div><div class="line"><a name="l00007"></a><span class="lineno">    7</span>&#160;<span class="comment">// In no event will the authors be held liable for any damages arising from the use of this software.</span></div><div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="comment">// Permission is granted to anyone to use this software for any purpose,</span></div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;<span class="comment">// including commercial applications, and to alter it and redistribute it freely,</span></div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="comment">// subject to the following restrictions:</span></div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="comment">// 1. The origin of this software must not be misrepresented;</span></div><div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;<span class="comment">//    you must not claim that you wrote the original software.</span></div><div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;<span class="comment">//    If you use this software in a product, an acknowledgment</span></div><div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;<span class="comment">//    in the product documentation would be appreciated but is not required.</span></div><div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;<span class="comment">// 2. Altered source versions must be plainly marked as such,</span></div><div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;<span class="comment">//    and must not be misrepresented as being the original software.</span></div><div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;<span class="comment">// 3. This notice may not be removed or altered from any source distribution.</span></div><div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;<span class="comment"></span></div><div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_WINDOWHANDLE_HPP</span></div><div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor">#define SFML_WINDOWHANDLE_HPP</span></div><div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;</div><div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="comment">// Headers</span></div><div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="comment"></span><span class="preprocessor">#include &lt;SFML/Config.hpp&gt;</span></div><div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;</div><div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;<span class="comment">// Windows&#39; HWND is a typedef on struct HWND__*</span></div><div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;<span class="preprocessor">#if defined(SFML_SYSTEM_WINDOWS)</span></div><div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;    <span class="keyword">struct </span>HWND__;</div><div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;<span class="preprocessor">#endif</span></div><div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;</div><div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;<span class="keyword">namespace </span><a class="code" href="namespacesf.php">sf</a></div><div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;{</div><div class="line"><a name="l00040"></a><span class="lineno">   40</span>&#160;<span class="preprocessor">#if defined(SFML_SYSTEM_WINDOWS)</span></div><div class="line"><a name="l00041"></a><span class="lineno">   41</span>&#160;</div><div class="line"><a name="l00042"></a><span class="lineno">   42</span>&#160;    <span class="comment">// Window handle is HWND (HWND__*) on Windows</span></div><div class="line"><a name="l00043"></a><span class="lineno">   43</span>&#160;    <span class="keyword">typedef</span> HWND__* <a class="code" href="group__window.php#gaed947028b0698a812cad2f97bfe9caa3">WindowHandle</a>;</div><div class="line"><a name="l00044"></a><span class="lineno">   44</span>&#160;</div><div class="line"><a name="l00045"></a><span class="lineno">   45</span>&#160;<span class="preprocessor">#elif defined(SFML_SYSTEM_LINUX) || defined(SFML_SYSTEM_FREEBSD) || defined(SFML_SYSTEM_OPENBSD)</span></div><div class="line"><a name="l00046"></a><span class="lineno">   46</span>&#160;</div><div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;    <span class="comment">// Window handle is Window (unsigned long) on Unix - X11</span></div><div class="line"><a name="l00048"></a><span class="lineno">   48</span>&#160;    <span class="keyword">typedef</span> <span class="keywordtype">unsigned</span> <span class="keywordtype">long</span> <a class="code" href="group__window.php#gaed947028b0698a812cad2f97bfe9caa3">WindowHandle</a>;</div><div class="line"><a name="l00049"></a><span class="lineno">   49</span>&#160;</div><div class="line"><a name="l00050"></a><span class="lineno">   50</span>&#160;<span class="preprocessor">#elif defined(SFML_SYSTEM_MACOS)</span></div><div class="line"><a name="l00051"></a><span class="lineno">   51</span>&#160;</div><div class="line"><a name="l00052"></a><span class="lineno">   52</span>&#160;    <span class="comment">// Window handle is NSWindow or NSView (void*) on Mac OS X - Cocoa</span></div><div class="line"><a name="l00053"></a><span class="lineno">   53</span>&#160;    <span class="keyword">typedef</span> <span class="keywordtype">void</span>* <a class="code" href="group__window.php#gaed947028b0698a812cad2f97bfe9caa3">WindowHandle</a>;</div><div class="line"><a name="l00054"></a><span class="lineno">   54</span>&#160;</div><div class="line"><a name="l00055"></a><span class="lineno">   55</span>&#160;<span class="preprocessor">#elif defined(SFML_SYSTEM_IOS)</span></div><div class="line"><a name="l00056"></a><span class="lineno">   56</span>&#160;</div><div class="line"><a name="l00057"></a><span class="lineno">   57</span>&#160;    <span class="comment">// Window handle is UIWindow (void*) on iOS - UIKit</span></div><div class="line"><a name="l00058"></a><span class="lineno">   58</span>&#160;    <span class="keyword">typedef</span> <span class="keywordtype">void</span>* <a class="code" href="group__window.php#gaed947028b0698a812cad2f97bfe9caa3">WindowHandle</a>;</div><div class="line"><a name="l00059"></a><span class="lineno">   59</span>&#160;</div><div class="line"><a name="l00060"></a><span class="lineno">   60</span>&#160;<span class="preprocessor">#elif defined(SFML_SYSTEM_ANDROID)</span></div><div class="line"><a name="l00061"></a><span class="lineno">   61</span>&#160;</div><div class="line"><a name="l00062"></a><span class="lineno">   62</span>&#160;    <span class="comment">// Window handle is ANativeWindow* (void*) on Android</span></div><div class="line"><a name="l00063"></a><span class="lineno">   63</span>&#160;    <span class="keyword">typedef</span> <span class="keywordtype">void</span>* <a class="code" href="group__window.php#gaed947028b0698a812cad2f97bfe9caa3">WindowHandle</a>;</div><div class="line"><a name="l00064"></a><span class="lineno">   64</span>&#160;</div><div class="line"><a name="l00065"></a><span class="lineno">   65</span>&#160;<span class="preprocessor">#elif defined(SFML_DOXYGEN)</span></div><div class="line"><a name="l00066"></a><span class="lineno">   66</span>&#160;</div><div class="line"><a name="l00067"></a><span class="lineno">   67</span>&#160;    <span class="comment">// Define typedef symbol so that Doxygen can attach some documentation to it</span></div><div class="line"><a name="l00068"></a><span class="lineno"><a class="line" href="group__window.php#gaed947028b0698a812cad2f97bfe9caa3">   68</a></span>&#160;    <span class="keyword">typedef</span> <span class="stringliteral">&quot;platform-specific&quot;</span> <a class="code" href="group__window.php#gaed947028b0698a812cad2f97bfe9caa3">WindowHandle</a>;</div><div class="line"><a name="l00069"></a><span class="lineno">   69</span>&#160;</div><div class="line"><a name="l00070"></a><span class="lineno">   70</span>&#160;<span class="preprocessor">#endif</span></div><div class="line"><a name="l00071"></a><span class="lineno">   71</span>&#160;</div><div class="line"><a name="l00072"></a><span class="lineno">   72</span>&#160;} <span class="comment">// namespace sf</span></div><div class="line"><a name="l00073"></a><span class="lineno">   73</span>&#160;</div><div class="line"><a name="l00074"></a><span class="lineno">   74</span>&#160;</div><div class="line"><a name="l00075"></a><span class="lineno">   75</span>&#160;<span class="preprocessor">#endif // SFML_WINDOWHANDLE_HPP</span></div><div class="line"><a name="l00076"></a><span class="lineno">   76</span>&#160;</div><div class="ttc" id="group__window_php_gaed947028b0698a812cad2f97bfe9caa3"><div class="ttname"><a href="group__window.php#gaed947028b0698a812cad2f97bfe9caa3">sf::WindowHandle</a></div><div class="ttdeci">platform specific WindowHandle</div><div class="ttdoc">Define a low-level window handle type, specific to each platform. </div><div class="ttdef"><b>Definition:</b> <a href="WindowHandle_8hpp_source.php#l00068">WindowHandle.hpp:68</a></div></div>
<div class="ttc" id="namespacesf_php"><div class="ttname"><a href="namespacesf.php">sf</a></div><div class="ttdef"><b>Definition:</b> <a href="AlResource_8hpp_source.php#l00034">AlResource.hpp:34</a></div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer.php");
?>
