<?php
    $version = '2.2'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'Lock.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
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
<li class="navelem"><a class="el" href="dir_7107138a9ca528d5a30fb6c42d13b481.php">SFML</a></li><li class="navelem"><a class="el" href="dir_186e0dcb96ed2747fde77bc4d13d2016.php">include</a></li><li class="navelem"><a class="el" href="dir_8300c2a4f3c47520e59b1ed4cebc1d64.php">SFML</a></li><li class="navelem"><a class="el" href="dir_e77bc78cd1600c86c90e2a8e6a2ca7d9.php">System</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">Lock.hpp</div>  </div>
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
<div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_LOCK_HPP</span></div>
<div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor">#define SFML_LOCK_HPP</span></div>
<div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;</div>
<div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="comment">// Headers</span></div>
<div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="comment"></span><span class="preprocessor">#include &lt;SFML/System/Export.hpp&gt;</span></div>
<div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;<span class="preprocessor">#include &lt;SFML/System/NonCopyable.hpp&gt;</span></div>
<div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;</div>
<div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;</div>
<div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;<span class="keyword">namespace </span><a class="code" href="namespacesf.php">sf</a></div>
<div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;{</div>
<div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;<span class="keyword">class </span>Mutex;</div>
<div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;</div>
<div class="line"><a name="l00043"></a><span class="lineno"><a class="line" href="classsf_1_1Lock.php">   43</a></span>&#160;<span class="keyword">class </span>SFML_SYSTEM_API <a class="code" href="classsf_1_1Lock.php">Lock</a> : <a class="code" href="classsf_1_1NonCopyable.php">NonCopyable</a></div>
<div class="line"><a name="l00044"></a><span class="lineno">   44</span>&#160;{</div>
<div class="line"><a name="l00045"></a><span class="lineno">   45</span>&#160;<span class="keyword">public</span>:</div>
<div class="line"><a name="l00046"></a><span class="lineno">   46</span>&#160;</div>
<div class="line"><a name="l00055"></a><span class="lineno">   55</span>&#160;    <span class="keyword">explicit</span> <a class="code" href="classsf_1_1Lock.php">Lock</a>(<a class="code" href="classsf_1_1Mutex.php">Mutex</a>&amp; mutex);</div>
<div class="line"><a name="l00056"></a><span class="lineno">   56</span>&#160;</div>
<div class="line"><a name="l00063"></a><span class="lineno">   63</span>&#160;    ~<a class="code" href="classsf_1_1Lock.php">Lock</a>();</div>
<div class="line"><a name="l00064"></a><span class="lineno">   64</span>&#160;</div>
<div class="line"><a name="l00065"></a><span class="lineno">   65</span>&#160;<span class="keyword">private</span>:</div>
<div class="line"><a name="l00066"></a><span class="lineno">   66</span>&#160;</div>
<div class="line"><a name="l00068"></a><span class="lineno">   68</span>&#160;    <span class="comment">// Member data</span></div>
<div class="line"><a name="l00070"></a><span class="lineno">   70</span>&#160;<span class="comment"></span>    <a class="code" href="classsf_1_1Mutex.php">Mutex</a>&amp; m_mutex; </div>
<div class="line"><a name="l00071"></a><span class="lineno">   71</span>&#160;};</div>
<div class="line"><a name="l00072"></a><span class="lineno">   72</span>&#160;</div>
<div class="line"><a name="l00073"></a><span class="lineno">   73</span>&#160;} <span class="comment">// namespace sf</span></div>
<div class="line"><a name="l00074"></a><span class="lineno">   74</span>&#160;</div>
<div class="line"><a name="l00075"></a><span class="lineno">   75</span>&#160;</div>
<div class="line"><a name="l00076"></a><span class="lineno">   76</span>&#160;<span class="preprocessor">#endif // SFML_LOCK_HPP</span></div>
<div class="line"><a name="l00077"></a><span class="lineno">   77</span>&#160;</div>
<div class="line"><a name="l00078"></a><span class="lineno">   78</span>&#160;</div>
<div class="ttc" id="namespacesf_php"><div class="ttname"><a href="namespacesf.php">sf</a></div><div class="ttdef"><b>Definition:</b> <a href="Listener_8hpp_source.php#l00035">Listener.hpp:35</a></div></div>
<div class="ttc" id="classsf_1_1Mutex_php"><div class="ttname"><a href="classsf_1_1Mutex.php">sf::Mutex</a></div><div class="ttdoc">Blocks concurrent access to shared resources from multiple threads. </div><div class="ttdef"><b>Definition:</b> <a href="Mutex_8hpp_source.php#l00047">Mutex.hpp:47</a></div></div>
<div class="ttc" id="classsf_1_1Lock_php"><div class="ttname"><a href="classsf_1_1Lock.php">sf::Lock</a></div><div class="ttdoc">Automatic wrapper for locking and unlocking mutexes. </div><div class="ttdef"><b>Definition:</b> <a href="Lock_8hpp_source.php#l00043">Lock.hpp:43</a></div></div>
<div class="ttc" id="classsf_1_1NonCopyable_php"><div class="ttname"><a href="classsf_1_1NonCopyable.php">sf::NonCopyable</a></div><div class="ttdoc">Utility class that makes any derived class non-copyable. </div><div class="ttdef"><b>Definition:</b> <a href="NonCopyable_8hpp_source.php#l00041">NonCopyable.hpp:41</a></div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
