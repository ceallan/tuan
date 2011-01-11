<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="language" content="en" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/static/images/admincp/admincp.css" />
<script src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/static/js/admincp.js" type="text/javascript"></script>
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>


<body style="margin: 0px" scroll="no">
<div id="append_parent"></div>
<table id="frametable" cellpadding="0" cellspacing="0" width="100%" height="100%">
<tr>
<td colspan="2" height="90">
<div class="mainhd">
<div class="logo">Administrator's Control Panel</div>

<div class="uinfo" id="frameuinfo">
<p>你好, 创始人 <em>admin</em> [ <a href="admin.php?action=logout" target="_top">退出</a> ]</p>
<p class="btnlink"><a href="/" target="_blank">站点首页</a></p>
</div>
<div class="navbg"></div>
<div class="nav">
<ul id="topmenu">
<li><em><a href="admin.php?action=index" id="header_index" hidefocus="true" onmouseover="previewheader('index')" onmouseout="previewheader()" onclick="toggleMenu('index', 'index');doane(event);">首页</a></em></li>
<li><em><a href="admin.php?action=setting&operation=basic" id="header_global" hidefocus="true" onmouseover="previewheader('global')" onmouseout="previewheader()" onclick="toggleMenu('global', 'setting&operation=basic');doane(event);">全局</a></em></li>
<li><em><a href="admin.php?action=nav&operation=headernav" id="header_style" hidefocus="true" onmouseover="previewheader('style')" onmouseout="previewheader()" onclick="toggleMenu('style', 'nav&operation=headernav');doane(event);">界面</a></em></li>
<li><em><a href="admin.php?action=moderate" id="header_topic" hidefocus="true" onmouseover="previewheader('topic')" onmouseout="previewheader()" onclick="toggleMenu('topic', 'moderate');doane(event);">内容</a></em></li><li><em><a href="admin.php?action=members&operation=search" id="header_user" hidefocus="true" onmouseover="previewheader('user')" onmouseout="previewheader()" onclick="toggleMenu('user', 'members&operation=search');doane(event);">用户</a></em></li>
<li><em><a href="admin.php?action=portalcategory" id="header_portal" hidefocus="true" onmouseover="previewheader('portal')" onmouseout="previewheader()" onclick="toggleMenu('portal', 'portalcategory');doane(event);">门户</a></em></li>
<li><em><a href="admin.php?action=forums" id="header_forum" hidefocus="true" onmouseover="previewheader('forum')" onmouseout="previewheader()" onclick="toggleMenu('forum', 'forums');doane(event);">论坛</a></em></li>
<li><em><a href="admin.php?action=group&operation=setting" id="header_group" hidefocus="true" onmouseover="previewheader('group')" onmouseout="previewheader()" onclick="toggleMenu('group', 'group&operation=setting');doane(event);">群组</a></em></li>
<li><em><a href="admin.php?action=adv" id="header_extended" hidefocus="true" onmouseover="previewheader('extended')" onmouseout="previewheader()" onclick="toggleMenu('extended', 'adv');doane(event);">扩展</a></em></li>
<li><em><a href="admin.php?action=plugins" id="header_plugin" hidefocus="true" onmouseover="previewheader('plugin')" onmouseout="previewheader()" onclick="toggleMenu('plugin', 'plugins');doane(event);">插件</a></em></li>
<li><em><a href="admin.php?action=tools&operation=updatecache" id="header_tools" hidefocus="true" onmouseover="previewheader('tools')" onmouseout="previewheader()" onclick="toggleMenu('tools', 'tools&operation=updatecache');doane(event);">工具</a></em></li>
<li><em><a href="admin.php?action=founder&operation=perm" id="header_founder" hidefocus="true" onmouseover="previewheader('founder')" onmouseout="previewheader()" onclick="toggleMenu('founder', 'founder&operation=perm');doane(event);">站长</a></em></li>

</ul>
<div class="currentloca">
<p id="admincpnav"></p>
</div>
<div class="navbd"></div>
<div class="sitemapbtn">
	<div style="float: left; margin:-7px 10px 0 0"><form name="search" method="post" autocomplete="off" action="admin.php?action=search" target="main"><input type="text" name="keywords" value="" class="txt" /> <input type="hidden" name="searchsubmit" value="yes" class="btn" /><input type="submit" name="searchsubmit" value="搜索" class="btn" style="margin-top: 5px;vertical-align:middle" /></form></div>
	<span id="add2custom" style="display: none"></span>
</div>
</div>
</div>
</td>

</tr>
<tr>
<td valign="top" width="160" class="menutd">
<div id="leftmenu" class="menu">
<ul id="menu_index" style="display: none"><li><a href="admin.php?action=index" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>管理中心首页</a></li><li><a href="admin.php?action=misc&operation=custommenu" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>常用操作管理</a></li><li><a href="admin.php?action=misc&operation=custommenu" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>编辑常用操作</a></li></ul><ul id="menu_global" style="display: none"><li><a href="admin.php?action=setting&operation=basic" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>站点信息</a></li><li><a href="admin.php?action=setting&operation=access" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>注册与访问</a></li><li><a href="admin.php?action=setting&operation=seo" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>优化设置</a></li><li><a href="admin.php?action=setting&operation=functions" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>站点功能</a></li><li><a href="admin.php?action=domain" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>域名设置</a></li><li><a href="admin.php?action=setting&operation=home" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>空间设置</a></li><li><a href="admin.php?action=setting&operation=permissions" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>用户权限</a></li><li><a href="admin.php?action=setting&operation=credits" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>积分设置</a></li><li><a href="admin.php?action=setting&operation=sec" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>防灌水设置</a></li><li><a href="admin.php?action=setting&operation=datetime" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>时间设置</a></li><li><a href="admin.php?action=setting&operation=attach" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>上传设置</a></li><li><a href="admin.php?action=setting&operation=imgwater" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>水印设置</a></li><li><a href="admin.php?action=misc&operation=attachtype" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>附件类型尺寸</a></li><li><a href="admin.php?action=setting&operation=search" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>搜索设置</a></li><li><a href="admin.php?action=district" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>地区设置</a></li><li><a href="admin.php?action=setting&operation=ranklist" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>排行榜设置</a></li></ul><ul id="menu_style" style="display: none"><li><a href="admin.php?action=nav&operation=headernav" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>导航设置</a></li><li><a href="admin.php?action=setting&operation=styles" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>界面设置</a></li><li><a href="admin.php?action=styles" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>风格管理</a></li><li><a href="admin.php?action=templates" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>模板管理</a></li><li><a href="admin.php?action=smilies" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>表情管理</a></li><li><a href="admin.php?action=click" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>表态动作</a></li><li><a href="admin.php?action=misc&operation=stamp" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>主题鉴定</a></li><li><a href="admin.php?action=setting&operation=editor" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>编辑器设置</a></li><li><a href="admin.php?action=misc&operation=onlinelist" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>在线列表图标</a></li></ul><ul id="menu_topic" style="display: none"><li><a href="admin.php?action=moderate" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>内容审核</a></li><li><a href="admin.php?action=threads" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>论坛主题管理</a></li><li><a href="admin.php?action=prune" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>论坛批量删帖</a></li><li><a href="admin.php?action=attach" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>论坛附件管理</a></li><li><a href="admin.php?action=threads&operation=group" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>群组主题管理</a></li><li><a href="admin.php?action=prune&operation=group" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>群组批量删帖</a></li><li><a href="admin.php?action=attach&operation=group" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>群组附件管理</a></li><li><a href="admin.php?action=recyclebin" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>主题回收站</a></li><li><a href="admin.php?action=misc&operation=censor" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>词语过滤</a></li><li><a href="admin.php?action=report" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>用户举报</a></li><li><a href="admin.php?action=threads&operation=forumstick" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>多版块置顶</a></li><li><a href="admin.php?action=threads&operation=postposition" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>帖子优化</a></li><li><a href="admin.php?action=doing" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>记录管理</a></li><li><a href="admin.php?action=blog" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>日志管理</a></li><li><a href="admin.php?action=feed" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>动态管理</a></li><li><a href="admin.php?action=album" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>相册管理</a></li><li><a href="admin.php?action=pic" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>图片管理</a></li><li><a href="admin.php?action=comment" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>评论/留言管理</a></li><li><a href="admin.php?action=share" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>分享管理</a></li></ul><ul id="menu_user" style="display: none"><li><a href="admin.php?action=members&operation=search" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>用户管理</a></li><li><a href="admin.php?action=members&operation=add" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>添加用户</a></li><li><a href="admin.php?action=members&operation=profile" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>用户栏目</a></li><li><a href="admin.php?action=members&operation=stat" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>资料统计</a></li><li><a href="admin.php?action=members&operation=newsletter" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>发送通知</a></li><li><a href="admin.php?action=members&operation=ban" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>禁止用户</a></li><li><a href="admin.php?action=members&operation=ipban" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>禁止 IP</a></li><li><a href="admin.php?action=members&operation=reward" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>积分奖惩</a></li><li><a href="admin.php?action=moderate&operation=members" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>审核新用户</a></li><li><a href="admin.php?action=admingroup" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>管理组</a></li><li><a href="admin.php?action=usergroups" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>用户组</a></li><li><a href="admin.php?action=specialuser&operation=hotuser" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>明星会员</a></li><li><a href="admin.php?action=specialuser&operation=defaultuser" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>推荐好友</a></li><li><a href="admin.php?action=verify&operation=verify" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>资料审核</a></li><li><a href="admin.php?action=verify" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>认证设置</a></li></ul><ul id="menu_portal" style="display: none"><li><a href="admin.php?action=portalcategory" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>频道栏目</a></li><li><a href="admin.php?action=blogcategory" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>日志分类</a></li><li><a href="admin.php?action=albumcategory" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>相册分类</a></li><li><a href="admin.php?action=article" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>文章管理</a></li><li><a href="admin.php?action=blockstyle" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>模块模板</a></li><li><a href="admin.php?action=block" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>模块管理</a></li><li><a href="admin.php?action=topic" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>专题管理</a></li><li><a href="admin.php?action=diytemplate" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>DIY页面管理</a></li></ul><ul id="menu_forum" style="display: none"><li><a href="admin.php?action=forums" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>版块管理</a></li><li><a href="admin.php?action=forums&operation=merge" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>版块合并</a></li><li><a href="admin.php?action=threadtypes" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>分类信息</a></li></ul><ul id="menu_group" style="display: none"><li><a href="admin.php?action=group&operation=setting" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>群组设置</a></li><li><a href="admin.php?action=group&operation=type" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>群组分类</a></li><li><a href="admin.php?action=group&operation=manage" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>群组管理</a></li><li><a href="admin.php?action=group&operation=userperm" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>群主权限</a></li><li><a href="admin.php?action=group&operation=level" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>群组等级</a></li></ul><ul id="menu_extended" style="display: none"><li><a href="admin.php?action=adv" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>站点广告</a></li><li><a href="admin.php?action=tasks" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>站点任务</a></li><li><a href="admin.php?action=magics" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>道具中心</a></li><li><a href="admin.php?action=medals" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>勋章中心</a></li><li><a href="admin.php?action=faq" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>站点帮助</a></li><li><a href="admin.php?action=setting&operation=ec" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>电子商务</a></li><li><a href="admin.php?action=misc&operation=link" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>友情链接</a></li><li><a href="admin.php?action=misc&operation=focus" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>站长推荐</a></li></ul><ul id="menu_plugin" style="display: none"><li><a href="admin.php?action=addons" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>扩展中心</a></li><li><a href="admin.php?action=plugins" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>插件</a></li></ul><ul id="menu_tools" style="display: none"><li><a href="admin.php?action=tools&operation=updatecache" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>更新缓存</a></li><li><a href="admin.php?action=announce" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>站点公告</a></li><li><a href="admin.php?action=counter" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>更新统计</a></li><li><a href="admin.php?action=logs" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>运行记录</a></li><li><a href="admin.php?action=misc&operation=cron" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>计划任务</a></li><li><a href="admin.php?action=tools&operation=fileperms" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>文件权限检查</a></li><li><a href="admin.php?action=checktools&operation=filecheck" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>文件校验</a></li></ul><ul id="menu_founder" style="display: none"><li><a href="admin.php?action=founder&operation=perm" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>后台管理团队</a></li><li><a href="admin.php?action=setting&operation=mail" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>邮件设置</a></li><li><a href="admin.php?action=setting&operation=uc" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>UCenter 设置</a></li><li><a href="admin.php?action=setting&operation=manyou" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>Manyou 设置</a></li><li><a href="admin.php?action=db&operation=export" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>数据库</a></li><li><a href="admin.php?action=postsplit&operation=manage" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>帖子分表</a></li><li><a href="admin.php?action=threadsplit&operation=manage" hidefocus="true" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>主题分表</a></li></ul><ul id="menu_uc" style="display: none"></ul>

</div>
</td>
<td valign="top" width="100%" class="mask">
	<iframe src="http://dev.770576.com/admin/index" id="main" name="main" width="100%" height="100%" frameborder="0" scrolling="yes" style="overflow: visible;"></iframe>
</td>
</tr>
</table>
<div id="scrolllink" style="display: none">
	<span onclick="menuScroll(1)"><img src="static/images/admincp/scrollu.gif" /></span>
	<span onclick="menuScroll(2)"><img src="static/images/admincp/scrolld.gif" /></span>
</div>
<div class="copyright">
	<p>Powered by Tuan V1.0</p>
</div>

<div id="cpmap_menu" class="custom" style="display: none">
	<div class="cmain" id="cmain"></div>
	<div class="cfixbd"></div>
</div>

<script type="text/JavaScript">
    var BROWSER = {};
    var USERAGENT = navigator.userAgent.toLowerCase();
    browserVersion({'ie':'msie','firefox':'','chrome':'','opera':'','safari':'','mozilla':'','webkit':'','maxthon':'','qq':'qqbrowser'});
    if(BROWSER.safari) {
        BROWSER.firefox = true;
    }
    BROWSER.opera = BROWSER.opera ? opera.version() : 0;
    var userAgent = navigator.userAgent.toLowerCase();
    var is_opera = userAgent.indexOf('opera') != -1 && opera.version();
    var is_moz = (navigator.product == 'Gecko') && userAgent.substr(userAgent.indexOf('firefox') + 8, 3);
    var is_ie = (userAgent.indexOf('msie') != -1 && !is_opera) && userAgent.substr(userAgent.indexOf('msie') + 5, 3);

    function TG(id) {
        return document.getElementById(id);
    }

    Array.prototype.push = function(value) {
        this[this.length] = value;
        return this.length;
    }
    function _attachEvent(obj, evt, func, eventobj) {
        eventobj = !eventobj ? obj : eventobj;
        if(obj.addEventListener) {
            obj.addEventListener(evt, func, false);
        } else if(eventobj.attachEvent) {
            obj.attachEvent('on' + evt, func);
        }
    }

    function _detachEvent(obj, evt, func, eventobj) {
        eventobj = !eventobj ? obj : eventobj;
        if(obj.removeEventListener) {
            obj.removeEventListener(evt, func, false);
        } else if(eventobj.detachEvent) {
            obj.detachEvent('on' + evt, func);
        }
    }
    function browserVersion(types) {
        var other = 1;
        for(i in types) {
            var v = types[i] ? types[i] : i;
            if(USERAGENT.indexOf(v) != -1) {
                var re = new RegExp(v + '(\\/|\\s)([\\d\\.]+)', 'ig');
                var matches = re.exec(USERAGENT);
                var ver = matches != null ? matches[2] : 0;
                other = ver !== 0 && v != 'mozilla' ? 0 : other;
            }else {
                var ver = 0;
            }
            eval('BROWSER.' + i + '= ver');
        }
        BROWSER.other = other;
    }

	var headers = new Array('index','global','style','topic','user','portal','forum','group','extended','plugin','tools','founder','uc'), menukey = 'index';
	function switchheader(key) {
		if(!key || !TG('header_' + key)) {
			return;
		}
		for(var k in top.headers) {
			if(TG('menu_' + headers[k])) {
				TG('menu_' + headers[k]).style.display = headers[k] == key ? '' : 'none';
			}
		}
		var lis = TG('topmenu').getElementsByTagName('li');
		for(var i = 0; i < lis.length; i++) {
			if(lis[i].className == 'navon') lis[i].className = '';
		}
		TG('header_' + key).parentNode.parentNode.className = 'navon';
	}
	var headerST = null;
	function previewheader(key) {
		if(key) {
			headerST = setTimeout(function() {
				for(var k in top.headers) {
					if(TG('menu_' + headers[k])) {
						TG('menu_' + headers[k]).style.display = headers[k] == key ? '' : 'none';
					}
				}
				var hrefs = TG('menu_' + key).getElementsByTagName('a');
				for(var j = 0; j < hrefs.length; j++) {
					hrefs[j].className = '';
				}
			}, 500);
		} else {
			clearTimeout(headerST);
		}
	}
	function toggleMenu(key) {
		menukey = key;
		switchheader(key);
	}
	function menuNewwin(obj) {
		window.open(obj.parentNode.href);
	}

	toggleMenu('index');
</script>

</body>
</html>