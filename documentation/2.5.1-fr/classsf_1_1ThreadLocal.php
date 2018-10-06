<?php
    $version = '2.5.1'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'sf::ThreadLocal Class Reference'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header-fr.php');
?>
<!-- Generated by Doxygen 1.8.14 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="namespaces.php"><span>Namespaces</span></a></li>
      <li class="current"><a href="annotated.php"><span>Classes</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="annotated.php"><span>Class&#160;List</span></a></li>
      <li><a href="classes.php"><span>Class&#160;Index</span></a></li>
      <li><a href="hierarchy.php"><span>Class&#160;Hierarchy</span></a></li>
      <li><a href="functions.php"><span>Class&#160;Members</span></a></li>
    </ul>
  </div>
<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1ThreadLocal.php">ThreadLocal</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-methods">Public Member Functions</a> &#124;
<a href="classsf_1_1ThreadLocal-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">sf::ThreadLocal Class Reference<div class="ingroups"><a class="el" href="group__system.php">System module</a></div></div>  </div>
</div><!--header-->
<div class="contents">

<p>Defines variables with thread-local storage.  
 <a href="classsf_1_1ThreadLocal.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="ThreadLocal_8hpp_source.php">ThreadLocal.hpp</a>&gt;</code></p>
<div class="dynheader">
Inheritance diagram for sf::ThreadLocal:</div>
<div class="dyncontent">
 <div class="center">
  <img src="classsf_1_1ThreadLocal.png" usemap="#sf::ThreadLocal_map" alt=""/>
  <map id="sf::ThreadLocal_map" name="sf::ThreadLocal_map">
<area href="classsf_1_1NonCopyable.php" title="Utility class that makes any derived class non-copyable. " alt="sf::NonCopyable" shape="rect" coords="0,0,146,24"/>
<area href="classsf_1_1ThreadLocalPtr.php" title="Pointer to a thread-local variable. " alt="sf::ThreadLocalPtr&lt; T &gt;" shape="rect" coords="0,112,146,136"/>
</map>
 </div></div>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:a44ea3c4be4eef118080275cbf4cf04cd"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1ThreadLocal.php#a44ea3c4be4eef118080275cbf4cf04cd">ThreadLocal</a> (void *value=NULL)</td></tr>
<tr class="memdesc:a44ea3c4be4eef118080275cbf4cf04cd"><td class="mdescLeft">&#160;</td><td class="mdescRight">Default constructor.  <a href="#a44ea3c4be4eef118080275cbf4cf04cd">More...</a><br /></td></tr>
<tr class="separator:a44ea3c4be4eef118080275cbf4cf04cd"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:acc612bddfd0f0507b1c5da8b3b8c75c2"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1ThreadLocal.php#acc612bddfd0f0507b1c5da8b3b8c75c2">~ThreadLocal</a> ()</td></tr>
<tr class="memdesc:acc612bddfd0f0507b1c5da8b3b8c75c2"><td class="mdescLeft">&#160;</td><td class="mdescRight">Destructor.  <a href="#acc612bddfd0f0507b1c5da8b3b8c75c2">More...</a><br /></td></tr>
<tr class="separator:acc612bddfd0f0507b1c5da8b3b8c75c2"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ab7e334c83d77644a8e67ee31c3230007"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1ThreadLocal.php#ab7e334c83d77644a8e67ee31c3230007">setValue</a> (void *value)</td></tr>
<tr class="memdesc:ab7e334c83d77644a8e67ee31c3230007"><td class="mdescLeft">&#160;</td><td class="mdescRight">Set the thread-specific value of the variable.  <a href="#ab7e334c83d77644a8e67ee31c3230007">More...</a><br /></td></tr>
<tr class="separator:ab7e334c83d77644a8e67ee31c3230007"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ad68823496eb065b4b695c3468fa869bc"><td class="memItemLeft" align="right" valign="top">void *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1ThreadLocal.php#ad68823496eb065b4b695c3468fa869bc">getValue</a> () const</td></tr>
<tr class="memdesc:ad68823496eb065b4b695c3468fa869bc"><td class="mdescLeft">&#160;</td><td class="mdescRight">Retrieve the thread-specific value of the variable.  <a href="#ad68823496eb065b4b695c3468fa869bc">More...</a><br /></td></tr>
<tr class="separator:ad68823496eb065b4b695c3468fa869bc"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>Defines variables with thread-local storage. </p>
<p>This class manipulates void* parameters and thus is not appropriate for strongly-typed variables.</p>
<p>You should rather use the <a class="el" href="classsf_1_1ThreadLocalPtr.php" title="Pointer to a thread-local variable. ">sf::ThreadLocalPtr</a> template class. </p>

<p class="definition">Definition at line <a class="el" href="ThreadLocal_8hpp_source.php#l00047">47</a> of file <a class="el" href="ThreadLocal_8hpp_source.php">ThreadLocal.hpp</a>.</p>
</div><h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a id="a44ea3c4be4eef118080275cbf4cf04cd"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a44ea3c4be4eef118080275cbf4cf04cd">&#9670;&nbsp;</a></span>ThreadLocal()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::ThreadLocal::ThreadLocal </td>
          <td>(</td>
          <td class="paramtype">void *&#160;</td>
          <td class="paramname"><em>value</em> = <code>NULL</code></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Default constructor. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">value</td><td>Optional value to initialize the variable </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a id="acc612bddfd0f0507b1c5da8b3b8c75c2"></a>
<h2 class="memtitle"><span class="permalink"><a href="#acc612bddfd0f0507b1c5da8b3b8c75c2">&#9670;&nbsp;</a></span>~ThreadLocal()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::ThreadLocal::~ThreadLocal </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Destructor. </p>

</div>
</div>
<h2 class="groupheader">Member Function Documentation</h2>
<a id="ad68823496eb065b4b695c3468fa869bc"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ad68823496eb065b4b695c3468fa869bc">&#9670;&nbsp;</a></span>getValue()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void* sf::ThreadLocal::getValue </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Retrieve the thread-specific value of the variable. </p>
<dl class="section return"><dt>Returns</dt><dd>Value of the variable for the current thread </dd></dl>

</div>
</div>
<a id="ab7e334c83d77644a8e67ee31c3230007"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ab7e334c83d77644a8e67ee31c3230007">&#9670;&nbsp;</a></span>setValue()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void sf::ThreadLocal::setValue </td>
          <td>(</td>
          <td class="paramtype">void *&#160;</td>
          <td class="paramname"><em>value</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Set the thread-specific value of the variable. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">value</td><td>Value of the variable for the current thread </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="ThreadLocal_8hpp_source.php">ThreadLocal.hpp</a></li>
</ul>
</div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
