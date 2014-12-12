<?php
    $version = '2.2'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'sf::Socket Class Reference'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header-fr.php');
?>
<!-- Generated by Doxygen 1.8.8 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
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
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1Socket.php">Socket</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-types">Public Types</a> &#124;
<a href="#pub-methods">Public Member Functions</a> &#124;
<a href="#pro-types">Protected Types</a> &#124;
<a href="#pro-methods">Protected Member Functions</a> &#124;
<a href="#friends">Friends</a> &#124;
<a href="classsf_1_1Socket-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">sf::Socket Class Reference<div class="ingroups"><a class="el" href="group__network.php">Network module</a></div></div>  </div>
</div><!--header-->
<div class="contents">

<p>Base class for all the socket types.  
 <a href="classsf_1_1Socket.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="Socket_8hpp_source.php">Socket.hpp</a>&gt;</code></p>
<div class="dynheader">
Inheritance diagram for sf::Socket:</div>
<div class="dyncontent">
 <div class="center">
  <img src="classsf_1_1Socket.png" usemap="#sf::Socket_map" alt=""/>
  <map id="sf::Socket_map" name="sf::Socket_map">
<area href="classsf_1_1NonCopyable.php" title="Utility class that makes any derived class non-copyable. " alt="sf::NonCopyable" shape="rect" coords="115,0,220,24"/>
<area href="classsf_1_1TcpListener.php" title="Socket that listens to new TCP connections. " alt="sf::TcpListener" shape="rect" coords="0,112,105,136"/>
<area href="classsf_1_1TcpSocket.php" title="Specialized socket using the TCP protocol. " alt="sf::TcpSocket" shape="rect" coords="115,112,220,136"/>
<area href="classsf_1_1UdpSocket.php" title="Specialized socket using the UDP protocol. " alt="sf::UdpSocket" shape="rect" coords="230,112,335,136"/>
</map>
 </div></div>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-types"></a>
Public Types</h2></td></tr>
<tr class="memitem:a51bf0fd51057b98a10fbb866246176dc"><td class="memItemLeft" align="right" valign="top">enum &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Socket.php#a51bf0fd51057b98a10fbb866246176dc">Status</a> { <a class="el" href="classsf_1_1Socket.php#a51bf0fd51057b98a10fbb866246176dca1de3a85bc56d3ae85b3d0f3cfd04ae90">Done</a>, 
<a class="el" href="classsf_1_1Socket.php#a51bf0fd51057b98a10fbb866246176dca8554848daae98f996e131bdeed076c09">NotReady</a>, 
<a class="el" href="classsf_1_1Socket.php#a51bf0fd51057b98a10fbb866246176dcab215141f756acdc23c67fad149710eb1">Disconnected</a>, 
<a class="el" href="classsf_1_1Socket.php#a51bf0fd51057b98a10fbb866246176dca1dc9854433a28c22e192721179a2df5d">Error</a>
 }</td></tr>
<tr class="memdesc:a51bf0fd51057b98a10fbb866246176dc"><td class="mdescLeft">&#160;</td><td class="mdescRight">Status codes that may be returned by socket functions.  <a href="classsf_1_1Socket.php#a51bf0fd51057b98a10fbb866246176dc">More...</a><br /></td></tr>
<tr class="separator:a51bf0fd51057b98a10fbb866246176dc"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a5deb2c955fd347259c3a20d27b2481aa"><td class="memItemLeft" align="right" valign="top">enum &#160;</td><td class="memItemRight" valign="bottom">{ <a class="el" href="classsf_1_1Socket.php#a5deb2c955fd347259c3a20d27b2481aaa5a3c30fd128895403afc11076f461b19">AnyPort</a> = 0
 }</td></tr>
<tr class="memdesc:a5deb2c955fd347259c3a20d27b2481aa"><td class="mdescLeft">&#160;</td><td class="mdescRight">Some special values used by sockets.  <a href="classsf_1_1Socket.php#a5deb2c955fd347259c3a20d27b2481aa">More...</a><br /></td></tr>
<tr class="separator:a5deb2c955fd347259c3a20d27b2481aa"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:a79a4b5918f0b34a2f8db449089694788"><td class="memItemLeft" align="right" valign="top">virtual&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Socket.php#a79a4b5918f0b34a2f8db449089694788">~Socket</a> ()</td></tr>
<tr class="memdesc:a79a4b5918f0b34a2f8db449089694788"><td class="mdescLeft">&#160;</td><td class="mdescRight">Destructor.  <a href="#a79a4b5918f0b34a2f8db449089694788">More...</a><br /></td></tr>
<tr class="separator:a79a4b5918f0b34a2f8db449089694788"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a165fc1423e281ea2714c70303d3a9782"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Socket.php#a165fc1423e281ea2714c70303d3a9782">setBlocking</a> (bool blocking)</td></tr>
<tr class="memdesc:a165fc1423e281ea2714c70303d3a9782"><td class="mdescLeft">&#160;</td><td class="mdescRight">Set the blocking state of the socket.  <a href="#a165fc1423e281ea2714c70303d3a9782">More...</a><br /></td></tr>
<tr class="separator:a165fc1423e281ea2714c70303d3a9782"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a0ec0d831b015e32eb5935fd2a9f8c67c"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Socket.php#a0ec0d831b015e32eb5935fd2a9f8c67c">isBlocking</a> () const </td></tr>
<tr class="memdesc:a0ec0d831b015e32eb5935fd2a9f8c67c"><td class="mdescLeft">&#160;</td><td class="mdescRight">Tell whether the socket is in blocking or non-blocking mode.  <a href="#a0ec0d831b015e32eb5935fd2a9f8c67c">More...</a><br /></td></tr>
<tr class="separator:a0ec0d831b015e32eb5935fd2a9f8c67c"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pro-types"></a>
Protected Types</h2></td></tr>
<tr class="memitem:a5d3ff44e56e68f02816bb0fabc34adf8"><td class="memItemLeft" align="right" valign="top">enum &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Socket.php#a5d3ff44e56e68f02816bb0fabc34adf8">Type</a> { <a class="el" href="classsf_1_1Socket.php#a5d3ff44e56e68f02816bb0fabc34adf8acc02e97e90234b957eaad4dff7f22214">Tcp</a>, 
<a class="el" href="classsf_1_1Socket.php#a5d3ff44e56e68f02816bb0fabc34adf8a6ebf3094830db4820191a327f3cc6ce2">Udp</a>
 }</td></tr>
<tr class="memdesc:a5d3ff44e56e68f02816bb0fabc34adf8"><td class="mdescLeft">&#160;</td><td class="mdescRight">Types of protocols that the socket can use.  <a href="classsf_1_1Socket.php#a5d3ff44e56e68f02816bb0fabc34adf8">More...</a><br /></td></tr>
<tr class="separator:a5d3ff44e56e68f02816bb0fabc34adf8"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pro-methods"></a>
Protected Member Functions</h2></td></tr>
<tr class="memitem:a80ffb47ec0bafc83af019055d3e6a303"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Socket.php#a80ffb47ec0bafc83af019055d3e6a303">Socket</a> (<a class="el" href="classsf_1_1Socket.php#a5d3ff44e56e68f02816bb0fabc34adf8">Type</a> type)</td></tr>
<tr class="memdesc:a80ffb47ec0bafc83af019055d3e6a303"><td class="mdescLeft">&#160;</td><td class="mdescRight">Default constructor.  <a href="#a80ffb47ec0bafc83af019055d3e6a303">More...</a><br /></td></tr>
<tr class="separator:a80ffb47ec0bafc83af019055d3e6a303"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ac0c63b13e61da8294bf54e888e97f9a3"><td class="memItemLeft" align="right" valign="top">SocketHandle&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Socket.php#ac0c63b13e61da8294bf54e888e97f9a3">getHandle</a> () const </td></tr>
<tr class="memdesc:ac0c63b13e61da8294bf54e888e97f9a3"><td class="mdescLeft">&#160;</td><td class="mdescRight">Return the internal handle of the socket.  <a href="#ac0c63b13e61da8294bf54e888e97f9a3">More...</a><br /></td></tr>
<tr class="separator:ac0c63b13e61da8294bf54e888e97f9a3"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aafbe140f4b1921e0d19e88cf7a61dcbc"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Socket.php#aafbe140f4b1921e0d19e88cf7a61dcbc">create</a> ()</td></tr>
<tr class="memdesc:aafbe140f4b1921e0d19e88cf7a61dcbc"><td class="mdescLeft">&#160;</td><td class="mdescRight">Create the internal representation of the socket.  <a href="#aafbe140f4b1921e0d19e88cf7a61dcbc">More...</a><br /></td></tr>
<tr class="separator:aafbe140f4b1921e0d19e88cf7a61dcbc"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:af1dd898f7aa3ead7ff7b2d1c20e97781"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Socket.php#af1dd898f7aa3ead7ff7b2d1c20e97781">create</a> (SocketHandle handle)</td></tr>
<tr class="memdesc:af1dd898f7aa3ead7ff7b2d1c20e97781"><td class="mdescLeft">&#160;</td><td class="mdescRight">Create the internal representation of the socket from a socket handle.  <a href="#af1dd898f7aa3ead7ff7b2d1c20e97781">More...</a><br /></td></tr>
<tr class="separator:af1dd898f7aa3ead7ff7b2d1c20e97781"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a71f2f5c2aa99e01cafe824fee4c573be"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Socket.php#a71f2f5c2aa99e01cafe824fee4c573be">close</a> ()</td></tr>
<tr class="memdesc:a71f2f5c2aa99e01cafe824fee4c573be"><td class="mdescLeft">&#160;</td><td class="mdescRight">Close the socket gracefully.  <a href="#a71f2f5c2aa99e01cafe824fee4c573be">More...</a><br /></td></tr>
<tr class="separator:a71f2f5c2aa99e01cafe824fee4c573be"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="friends"></a>
Friends</h2></td></tr>
<tr class="memitem:a23fafd48278ea4f8f9c25f1f0f43693c"><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a23fafd48278ea4f8f9c25f1f0f43693c"></a>
class&#160;</td><td class="memItemRight" valign="bottom"><b>SocketSelector</b></td></tr>
<tr class="separator:a23fafd48278ea4f8f9c25f1f0f43693c"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>Base class for all the socket types. </p>
<p>This class mainly defines internal stuff to be used by derived classes.</p>
<p>The only public features that it defines, and which is therefore common to all the socket classes, is the blocking state. All sockets can be set as blocking or non-blocking.</p>
<p>In blocking mode, socket functions will hang until the operation completes, which means that the entire program (well, in fact the current thread if you use multiple ones) will be stuck waiting for your socket operation to complete.</p>
<p>In non-blocking mode, all the socket functions will return immediately. If the socket is not ready to complete the requested operation, the function simply returns the proper status code (<a class="el" href="classsf_1_1Socket.php#a51bf0fd51057b98a10fbb866246176dca8554848daae98f996e131bdeed076c09" title="The socket is not ready to send / receive data yet. ">Socket::NotReady</a>).</p>
<p>The default mode, which is blocking, is the one that is generally used, in combination with threads or selectors. The non-blocking mode is rather used in real-time applications that run an endless loop that can poll the socket often enough, and cannot afford blocking this loop.</p>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1TcpListener.php" title="Socket that listens to new TCP connections. ">sf::TcpListener</a>, <a class="el" href="classsf_1_1TcpSocket.php" title="Specialized socket using the TCP protocol. ">sf::TcpSocket</a>, <a class="el" href="classsf_1_1UdpSocket.php" title="Specialized socket using the UDP protocol. ">sf::UdpSocket</a> </dd></dl>

<p>Definition at line <a class="el" href="Socket_8hpp_source.php#l00045">45</a> of file <a class="el" href="Socket_8hpp_source.php">Socket.hpp</a>.</p>
</div><h2 class="groupheader">Member Enumeration Documentation</h2>
<a class="anchor" id="a5deb2c955fd347259c3a20d27b2481aa"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">anonymous enum</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Some special values used by sockets. </p>
<table class="fieldtable">
<tr><th colspan="2">Enumerator</th></tr><tr><td class="fieldname"><a class="anchor" id="a5deb2c955fd347259c3a20d27b2481aaa5a3c30fd128895403afc11076f461b19"></a>AnyPort&#160;</td><td class="fielddoc">
<p>Special value that tells the system to pick any available port. </p>
</td></tr>
</table>

<p>Definition at line <a class="el" href="Socket_8hpp_source.php#l00065">65</a> of file <a class="el" href="Socket_8hpp_source.php">Socket.hpp</a>.</p>

</div>
</div>
<a class="anchor" id="a51bf0fd51057b98a10fbb866246176dc"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">enum <a class="el" href="classsf_1_1Socket.php#a51bf0fd51057b98a10fbb866246176dc">sf::Socket::Status</a></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Status codes that may be returned by socket functions. </p>
<table class="fieldtable">
<tr><th colspan="2">Enumerator</th></tr><tr><td class="fieldname"><a class="anchor" id="a51bf0fd51057b98a10fbb866246176dca1de3a85bc56d3ae85b3d0f3cfd04ae90"></a>Done&#160;</td><td class="fielddoc">
<p>The socket has sent / received the data. </p>
</td></tr>
<tr><td class="fieldname"><a class="anchor" id="a51bf0fd51057b98a10fbb866246176dca8554848daae98f996e131bdeed076c09"></a>NotReady&#160;</td><td class="fielddoc">
<p>The socket is not ready to send / receive data yet. </p>
</td></tr>
<tr><td class="fieldname"><a class="anchor" id="a51bf0fd51057b98a10fbb866246176dcab215141f756acdc23c67fad149710eb1"></a>Disconnected&#160;</td><td class="fielddoc">
<p>The TCP socket has been disconnected. </p>
</td></tr>
<tr><td class="fieldname"><a class="anchor" id="a51bf0fd51057b98a10fbb866246176dca1dc9854433a28c22e192721179a2df5d"></a>Error&#160;</td><td class="fielddoc">
<p>An unexpected error happened. </p>
</td></tr>
</table>

<p>Definition at line <a class="el" href="Socket_8hpp_source.php#l00053">53</a> of file <a class="el" href="Socket_8hpp_source.php">Socket.hpp</a>.</p>

</div>
</div>
<a class="anchor" id="a5d3ff44e56e68f02816bb0fabc34adf8"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">enum <a class="el" href="classsf_1_1Socket.php#a5d3ff44e56e68f02816bb0fabc34adf8">sf::Socket::Type</a></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">protected</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Types of protocols that the socket can use. </p>
<table class="fieldtable">
<tr><th colspan="2">Enumerator</th></tr><tr><td class="fieldname"><a class="anchor" id="a5d3ff44e56e68f02816bb0fabc34adf8acc02e97e90234b957eaad4dff7f22214"></a>Tcp&#160;</td><td class="fielddoc">
<p>TCP protocol. </p>
</td></tr>
<tr><td class="fieldname"><a class="anchor" id="a5d3ff44e56e68f02816bb0fabc34adf8a6ebf3094830db4820191a327f3cc6ce2"></a>Udp&#160;</td><td class="fielddoc">
<p>UDP protocol. </p>
</td></tr>
</table>

<p>Definition at line <a class="el" href="Socket_8hpp_source.php#l00113">113</a> of file <a class="el" href="Socket_8hpp_source.php">Socket.hpp</a>.</p>

</div>
</div>
<h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a class="anchor" id="a79a4b5918f0b34a2f8db449089694788"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">virtual sf::Socket::~Socket </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">virtual</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Destructor. </p>

</div>
</div>
<a class="anchor" id="a80ffb47ec0bafc83af019055d3e6a303"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">sf::Socket::Socket </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="classsf_1_1Socket.php#a5d3ff44e56e68f02816bb0fabc34adf8">Type</a>&#160;</td>
          <td class="paramname"><em>type</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">protected</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Default constructor. </p>
<p>This constructor can only be accessed by derived classes.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">type</td><td>Type of the socket (TCP or UDP) </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<h2 class="groupheader">Member Function Documentation</h2>
<a class="anchor" id="a71f2f5c2aa99e01cafe824fee4c573be"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">void sf::Socket::close </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">protected</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Close the socket gracefully. </p>
<p>This function can only be accessed by derived classes. </p>

</div>
</div>
<a class="anchor" id="aafbe140f4b1921e0d19e88cf7a61dcbc"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">void sf::Socket::create </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">protected</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Create the internal representation of the socket. </p>
<p>This function can only be accessed by derived classes. </p>

</div>
</div>
<a class="anchor" id="af1dd898f7aa3ead7ff7b2d1c20e97781"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">void sf::Socket::create </td>
          <td>(</td>
          <td class="paramtype">SocketHandle&#160;</td>
          <td class="paramname"><em>handle</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">protected</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Create the internal representation of the socket from a socket handle. </p>
<p>This function can only be accessed by derived classes.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">handle</td><td>OS-specific handle of the socket to wrap </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a class="anchor" id="ac0c63b13e61da8294bf54e888e97f9a3"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">SocketHandle sf::Socket::getHandle </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">protected</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Return the internal handle of the socket. </p>
<p>The returned handle may be invalid if the socket was not created yet (or already destroyed). This function can only be accessed by derived classes.</p>
<dl class="section return"><dt>Returns</dt><dd>The internal (OS-specific) handle of the socket </dd></dl>

</div>
</div>
<a class="anchor" id="a0ec0d831b015e32eb5935fd2a9f8c67c"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">bool sf::Socket::isBlocking </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Tell whether the socket is in blocking or non-blocking mode. </p>
<dl class="section return"><dt>Returns</dt><dd>True if the socket is blocking, false otherwise</dd></dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1Socket.php#a165fc1423e281ea2714c70303d3a9782" title="Set the blocking state of the socket. ">setBlocking</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a165fc1423e281ea2714c70303d3a9782"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void sf::Socket::setBlocking </td>
          <td>(</td>
          <td class="paramtype">bool&#160;</td>
          <td class="paramname"><em>blocking</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Set the blocking state of the socket. </p>
<p>In blocking mode, calls will not return until they have completed their task. For example, a call to Receive in blocking mode won't return until some data was actually received. In non-blocking mode, calls will always return immediately, using the return code to signal whether there was data available or not. By default, all sockets are blocking.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">blocking</td><td>True to set the socket as blocking, false for non-blocking</td></tr>
  </table>
  </dd>
</dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1Socket.php#a0ec0d831b015e32eb5935fd2a9f8c67c" title="Tell whether the socket is in blocking or non-blocking mode. ">isBlocking</a> </dd></dl>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="Socket_8hpp_source.php">Socket.hpp</a></li>
</ul>
</div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
