<?php
    $version = '2.6.0'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'Member List'; // the $ title variable is automatically replaced by doxygen with the page title
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
      <li class="current"><a href="annotated.php"><span>Classes</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
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
      <li><a href="annotated.php"><span>Class&#160;List</span></a></li>
      <li><a href="classes.php"><span>Class&#160;Index</span></a></li>
      <li><a href="hierarchy.php"><span>Class&#160;Hierarchy</span></a></li>
      <li><a href="functions.php"><span>Class&#160;Members</span></a></li>
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
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1RenderWindow.php">RenderWindow</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle"><div class="title">sf::RenderWindow Member List</div></div>
</div><!--header-->
<div class="contents">

<p>This is the complete list of members for <a class="el" href="classsf_1_1RenderWindow.php">sf::RenderWindow</a>, including all inherited members.</p>
<table class="directory">
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1RenderWindow.php#a5a784b8a09bf4a8bc97ef9e0a8957c35">capture</a>() const</td><td class="entry"><a class="el" href="classsf_1_1RenderWindow.php">sf::RenderWindow</a></td><td class="entry"></td></tr>
  <tr class="odd"><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php#a6bb6f0ba348f2b1e2f46114aeaf60f26">clear</a>(const Color &amp;color=Color(0, 0, 0, 255))</td><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1Window.php#a7355b916852af56cfe3cc00feed9f419">close</a>()</td><td class="entry"><a class="el" href="classsf_1_1Window.php">sf::Window</a></td><td class="entry"><span class="mlabel">virtual</span></td></tr>
  <tr class="odd"><td class="entry"><a class="el" href="classsf_1_1Window.php#ac6a58d9c26a18f0e70888d0f53e154c1">create</a>(VideoMode mode, const String &amp;title, Uint32 style=Style::Default)</td><td class="entry"><a class="el" href="classsf_1_1Window.php">sf::Window</a></td><td class="entry"><span class="mlabel">virtual</span></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1Window.php#a6518b989614750e90d9784f4d05ce02c">create</a>(VideoMode mode, const String &amp;title, Uint32 style, const ContextSettings &amp;settings)</td><td class="entry"><a class="el" href="classsf_1_1Window.php">sf::Window</a></td><td class="entry"><span class="mlabel">virtual</span></td></tr>
  <tr class="odd"><td class="entry"><a class="el" href="classsf_1_1Window.php#a5ee0c5262df6cc4e1a8031ae6848437f">create</a>(WindowHandle handle)</td><td class="entry"><a class="el" href="classsf_1_1Window.php">sf::Window</a></td><td class="entry"><span class="mlabel">virtual</span></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1Window.php#a064dd5dd7bb337fb9f5635f580081a1e">create</a>(WindowHandle handle, const ContextSettings &amp;settings)</td><td class="entry"><a class="el" href="classsf_1_1Window.php">sf::Window</a></td><td class="entry"><span class="mlabel">virtual</span></td></tr>
  <tr class="odd"><td class="entry"><a class="el" href="classsf_1_1WindowBase.php#a4bcb435cdb954f991f493976263a2fc1">createVulkanSurface</a>(const VkInstance &amp;instance, VkSurfaceKHR &amp;surface, const VkAllocationCallbacks *allocator=0)</td><td class="entry"><a class="el" href="classsf_1_1WindowBase.php">sf::WindowBase</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1Window.php#adabf839cb103ac96cfc82f781638772a">display</a>()</td><td class="entry"><a class="el" href="classsf_1_1Window.php">sf::Window</a></td><td class="entry"></td></tr>
  <tr class="odd"><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php#a12417a3bcc245c41d957b29583556f39">draw</a>(const Drawable &amp;drawable, const RenderStates &amp;states=RenderStates::Default)</td><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php#a976bc94057799eb9f8a18ac5fdfd9b73">draw</a>(const Vertex *vertices, std::size_t vertexCount, PrimitiveType type, const RenderStates &amp;states=RenderStates::Default)</td><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></td><td class="entry"></td></tr>
  <tr class="odd"><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php#a3dc4d06f081d36ca1e8f1a1298d49abc">draw</a>(const VertexBuffer &amp;vertexBuffer, const RenderStates &amp;states=RenderStates::Default)</td><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php#a07cb25d4557a30146b24b25b242310ea">draw</a>(const VertexBuffer &amp;vertexBuffer, std::size_t firstVertex, std::size_t vertexCount, const RenderStates &amp;states=RenderStates::Default)</td><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></td><td class="entry"></td></tr>
  <tr class="odd"><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php#a7741129e3ef7ab4f0a40024fca13480c">getDefaultView</a>() const</td><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1WindowBase.php#a5ddaa5943f547645079f081422e45c81">getPosition</a>() const</td><td class="entry"><a class="el" href="classsf_1_1WindowBase.php">sf::WindowBase</a></td><td class="entry"></td></tr>
  <tr class="odd"><td class="entry"><a class="el" href="classsf_1_1Window.php#a0605afbaceb02b098f9d731b7ab4203d">getSettings</a>() const</td><td class="entry"><a class="el" href="classsf_1_1Window.php">sf::Window</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1RenderWindow.php#ae3eacf93661c8068fca7a78d57dc7e14">getSize</a>() const</td><td class="entry"><a class="el" href="classsf_1_1RenderWindow.php">sf::RenderWindow</a></td><td class="entry"><span class="mlabel">virtual</span></td></tr>
  <tr class="odd"><td class="entry"><a class="el" href="classsf_1_1WindowBase.php#af9e56181556545bf6e6d7ed969edae21">getSystemHandle</a>() const</td><td class="entry"><a class="el" href="classsf_1_1WindowBase.php">sf::WindowBase</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php#adbf8dc5a1f4abbe15a3fbb915844c7ea">getView</a>() const</td><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></td><td class="entry"></td></tr>
  <tr class="odd"><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php#a865d462915dc2a1fae2ebfb3300382ac">getViewport</a>(const View &amp;view) const</td><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1WindowBase.php#ad87bd19e979c426cb819ccde8c95232e">hasFocus</a>() const</td><td class="entry"><a class="el" href="classsf_1_1WindowBase.php">sf::WindowBase</a></td><td class="entry"></td></tr>
  <tr class="odd"><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php#af530274b34159d644e509b4b4dc43eb7">initialize</a>()</td><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></td><td class="entry"><span class="mlabel">protected</span></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1WindowBase.php#aa43559822564ef958dc664a90c57cba0">isOpen</a>() const</td><td class="entry"><a class="el" href="classsf_1_1WindowBase.php">sf::WindowBase</a></td><td class="entry"></td></tr>
  <tr class="odd"><td class="entry"><a class="el" href="classsf_1_1RenderWindow.php#ad943b4797fe6e1d609f12ce413b6a093">isSrgb</a>() const</td><td class="entry"><a class="el" href="classsf_1_1RenderWindow.php">sf::RenderWindow</a></td><td class="entry"><span class="mlabel">virtual</span></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php#ad92a9f0283aa5f3f67e473c1105b68cf">mapCoordsToPixel</a>(const Vector2f &amp;point) const</td><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></td><td class="entry"></td></tr>
  <tr class="odd"><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php#a848eee44b72ac3f16fa9182df26e83bc">mapCoordsToPixel</a>(const Vector2f &amp;point, const View &amp;view) const</td><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php#a0103ebebafa43a97e6e6414f8560d5e3">mapPixelToCoords</a>(const Vector2i &amp;point) const</td><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></td><td class="entry"></td></tr>
  <tr class="odd"><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php#a2d3e9d7c4a1f5ea7e52b06f53e3011f9">mapPixelToCoords</a>(const Vector2i &amp;point, const View &amp;view) const</td><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1RenderWindow.php#a5bef0040b0fa87bed9fbd459c980d53a">onCreate</a>()</td><td class="entry"><a class="el" href="classsf_1_1RenderWindow.php">sf::RenderWindow</a></td><td class="entry"><span class="mlabel">protected</span><span class="mlabel">virtual</span></td></tr>
  <tr class="odd"><td class="entry"><a class="el" href="classsf_1_1RenderWindow.php#a5c85fe482313562d33ffd24a194b6fef">onResize</a>()</td><td class="entry"><a class="el" href="classsf_1_1RenderWindow.php">sf::RenderWindow</a></td><td class="entry"><span class="mlabel">protected</span><span class="mlabel">virtual</span></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1WindowBase.php#a6a143de089c8716bd42c38c781268f7f">pollEvent</a>(Event &amp;event)</td><td class="entry"><a class="el" href="classsf_1_1WindowBase.php">sf::WindowBase</a></td><td class="entry"></td></tr>
  <tr class="odd"><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php#ad5a98401113df931ddcd54c080f7aa8e">popGLStates</a>()</td><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php#a8d1998464ccc54e789aaf990242b47f7">pushGLStates</a>()</td><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></td><td class="entry"></td></tr>
  <tr class="odd"><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php#a2997c96cbd93cb8ce0aba2ddae35b86f">RenderTarget</a>()</td><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></td><td class="entry"><span class="mlabel">protected</span></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1RenderWindow.php#a839bbf336bdcafb084dafc3076fc9021">RenderWindow</a>()</td><td class="entry"><a class="el" href="classsf_1_1RenderWindow.php">sf::RenderWindow</a></td><td class="entry"></td></tr>
  <tr class="odd"><td class="entry"><a class="el" href="classsf_1_1RenderWindow.php#aebef983e01f677bf5a66cefc4d547647">RenderWindow</a>(VideoMode mode, const String &amp;title, Uint32 style=Style::Default, const ContextSettings &amp;settings=ContextSettings())</td><td class="entry"><a class="el" href="classsf_1_1RenderWindow.php">sf::RenderWindow</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1RenderWindow.php#a25c0af7d515e710b6eebc9c6be952aa5">RenderWindow</a>(WindowHandle handle, const ContextSettings &amp;settings=ContextSettings())</td><td class="entry"><a class="el" href="classsf_1_1RenderWindow.php">sf::RenderWindow</a></td><td class="entry"><span class="mlabel">explicit</span></td></tr>
  <tr class="odd"><td class="entry"><a class="el" href="classsf_1_1WindowBase.php#a448770d2372d8df0a1ad6b1c7cce3c89">requestFocus</a>()</td><td class="entry"><a class="el" href="classsf_1_1WindowBase.php">sf::WindowBase</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php#aac7504990d27dada4bfe3c7866920765">resetGLStates</a>()</td><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></td><td class="entry"></td></tr>
  <tr class="odd"><td class="entry"><a class="el" href="classsf_1_1RenderWindow.php#aee6c53eced675e885931eb3e91f11155">setActive</a>(bool active=true)</td><td class="entry"><a class="el" href="classsf_1_1RenderWindow.php">sf::RenderWindow</a></td><td class="entry"><span class="mlabel">virtual</span></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1Window.php#aaab549da64cedf74fa6f1ae7a3cc79e0">sf::Window::setActive</a>(bool active=true) const</td><td class="entry"><a class="el" href="classsf_1_1Window.php">sf::Window</a></td><td class="entry"></td></tr>
  <tr class="odd"><td class="entry"><a class="el" href="classsf_1_1Window.php#af4322d315baf93405bf0d5087ad5e784">setFramerateLimit</a>(unsigned int limit)</td><td class="entry"><a class="el" href="classsf_1_1Window.php">sf::Window</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1WindowBase.php#add42ae12c13012e6aab74d9e34591719">setIcon</a>(unsigned int width, unsigned int height, const Uint8 *pixels)</td><td class="entry"><a class="el" href="classsf_1_1WindowBase.php">sf::WindowBase</a></td><td class="entry"></td></tr>
  <tr class="odd"><td class="entry"><a class="el" href="classsf_1_1WindowBase.php#ad37f939b492c7ea046d4f7b45ac46df1">setJoystickThreshold</a>(float threshold)</td><td class="entry"><a class="el" href="classsf_1_1WindowBase.php">sf::WindowBase</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1WindowBase.php#afd1199a64d459ba531deb65f093050a6">setKeyRepeatEnabled</a>(bool enabled)</td><td class="entry"><a class="el" href="classsf_1_1WindowBase.php">sf::WindowBase</a></td><td class="entry"></td></tr>
  <tr class="odd"><td class="entry"><a class="el" href="classsf_1_1WindowBase.php#a07487a3c7e04472b19e96d3a602213ec">setMouseCursor</a>(const Cursor &amp;cursor)</td><td class="entry"><a class="el" href="classsf_1_1WindowBase.php">sf::WindowBase</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1WindowBase.php#a0023344922a1e854175c8ca22b072020">setMouseCursorGrabbed</a>(bool grabbed)</td><td class="entry"><a class="el" href="classsf_1_1WindowBase.php">sf::WindowBase</a></td><td class="entry"></td></tr>
  <tr class="odd"><td class="entry"><a class="el" href="classsf_1_1WindowBase.php#afa4a3372b2870294d1579d8621fe3c1a">setMouseCursorVisible</a>(bool visible)</td><td class="entry"><a class="el" href="classsf_1_1WindowBase.php">sf::WindowBase</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1WindowBase.php#ab5b8d500fa5acd3ac2908c9221fe2019">setPosition</a>(const Vector2i &amp;position)</td><td class="entry"><a class="el" href="classsf_1_1WindowBase.php">sf::WindowBase</a></td><td class="entry"></td></tr>
  <tr class="odd"><td class="entry"><a class="el" href="classsf_1_1WindowBase.php#a7edca32bca3000d2e241dba720034bd6">setSize</a>(const Vector2u &amp;size)</td><td class="entry"><a class="el" href="classsf_1_1WindowBase.php">sf::WindowBase</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1WindowBase.php#accd36ae6244ae1e6d643f6c109e983f8">setTitle</a>(const String &amp;title)</td><td class="entry"><a class="el" href="classsf_1_1WindowBase.php">sf::WindowBase</a></td><td class="entry"></td></tr>
  <tr class="odd"><td class="entry"><a class="el" href="classsf_1_1Window.php#a59041c4556e0351048f8aff366034f61">setVerticalSyncEnabled</a>(bool enabled)</td><td class="entry"><a class="el" href="classsf_1_1Window.php">sf::Window</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php#a063db6dd0a14913504af30e50cb6d946">setView</a>(const View &amp;view)</td><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></td><td class="entry"></td></tr>
  <tr class="odd"><td class="entry"><a class="el" href="classsf_1_1WindowBase.php#a576488ad202cb2cd4359af94eaba4dd8">setVisible</a>(bool visible)</td><td class="entry"><a class="el" href="classsf_1_1WindowBase.php">sf::WindowBase</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1WindowBase.php#aa1c100a69b5bc0c84e23a4652d51ac41">waitEvent</a>(Event &amp;event)</td><td class="entry"><a class="el" href="classsf_1_1WindowBase.php">sf::WindowBase</a></td><td class="entry"></td></tr>
  <tr class="odd"><td class="entry"><a class="el" href="classsf_1_1Window.php#a5359122166b4dc492c3d25caf08ccfc4">Window</a>()</td><td class="entry"><a class="el" href="classsf_1_1Window.php">sf::Window</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1Window.php#a1bee771baecbae6d357871929dc042a2">Window</a>(VideoMode mode, const String &amp;title, Uint32 style=Style::Default, const ContextSettings &amp;settings=ContextSettings())</td><td class="entry"><a class="el" href="classsf_1_1Window.php">sf::Window</a></td><td class="entry"></td></tr>
  <tr class="odd"><td class="entry"><a class="el" href="classsf_1_1Window.php#a6d60912633bff9d33cf3ade4e0201de4">Window</a>(WindowHandle handle, const ContextSettings &amp;settings=ContextSettings())</td><td class="entry"><a class="el" href="classsf_1_1Window.php">sf::Window</a></td><td class="entry"><span class="mlabel">explicit</span></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1WindowBase.php#a0cfe9d015cc95b89ef862c8d8050a964">WindowBase</a>()</td><td class="entry"><a class="el" href="classsf_1_1WindowBase.php">sf::WindowBase</a></td><td class="entry"></td></tr>
  <tr class="odd"><td class="entry"><a class="el" href="classsf_1_1WindowBase.php#ab150dbdb19eead86bcecb42cf3609e63">WindowBase</a>(VideoMode mode, const String &amp;title, Uint32 style=Style::Default)</td><td class="entry"><a class="el" href="classsf_1_1WindowBase.php">sf::WindowBase</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1WindowBase.php#ab4e3667dddddfeda57d124de24f93ac1">WindowBase</a>(WindowHandle handle)</td><td class="entry"><a class="el" href="classsf_1_1WindowBase.php">sf::WindowBase</a></td><td class="entry"><span class="mlabel">explicit</span></td></tr>
  <tr class="odd"><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php#a9abd1654a99fba46f6887b9c625b9b06">~RenderTarget</a>()</td><td class="entry"><a class="el" href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></td><td class="entry"><span class="mlabel">virtual</span></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1RenderWindow.php#a3407e36bfc1752d723140438a825365c">~RenderWindow</a>()</td><td class="entry"><a class="el" href="classsf_1_1RenderWindow.php">sf::RenderWindow</a></td><td class="entry"><span class="mlabel">virtual</span></td></tr>
  <tr class="odd"><td class="entry"><a class="el" href="classsf_1_1Window.php#ac30eb6ea5f5594204944d09d4bd69a97">~Window</a>()</td><td class="entry"><a class="el" href="classsf_1_1Window.php">sf::Window</a></td><td class="entry"><span class="mlabel">virtual</span></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1WindowBase.php#a7aac2a828b6bbd39b7195bb0545a2c47">~WindowBase</a>()</td><td class="entry"><a class="el" href="classsf_1_1WindowBase.php">sf::WindowBase</a></td><td class="entry"><span class="mlabel">virtual</span></td></tr>
</table></div><!-- contents -->
<?php
    require("../footer.php");
?>
