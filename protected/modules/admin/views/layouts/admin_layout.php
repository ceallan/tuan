<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="language" content="en" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/static/images/admincp/admincp.css" />
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
<p class="btnlink"><a href="index.php" target="_blank">站点首页</a></p>
</div>
<div class="navbg"></div>
<div class="nav">
<ul id="topmenu">
<li><em><a href="admin.php?action=index" id="header_index" hidefocus="true" onmouseover="previewheader('index')" onmouseout="previewheader()" onclick="toggleMenu('index', 'index');doane(event);">首页</a></em></li><li><em><a href="admin.php?action=setting&operation=basic" id="header_global" hidefocus="true" onmouseover="previewheader('global')" onmouseout="previewheader()" onclick="toggleMenu('global', 'setting&operation=basic');doane(event);">全局</a></em></li><li><em><a href="admin.php?action=nav&operation=headernav" id="header_style" hidefocus="true" onmouseover="previewheader('style')" onmouseout="previewheader()" onclick="toggleMenu('style', 'nav&operation=headernav');doane(event);">界面</a></em></li><li><em><a href="admin.php?action=moderate" id="header_topic" hidefocus="true" onmouseover="previewheader('topic')" onmouseout="previewheader()" onclick="toggleMenu('topic', 'moderate');doane(event);">内容</a></em></li><li><em><a href="admin.php?action=members&operation=search" id="header_user" hidefocus="true" onmouseover="previewheader('user')" onmouseout="previewheader()" onclick="toggleMenu('user', 'members&operation=search');doane(event);">用户</a></em></li><li><em><a href="admin.php?action=portalcategory" id="header_portal" hidefocus="true" onmouseover="previewheader('portal')" onmouseout="previewheader()" onclick="toggleMenu('portal', 'portalcategory');doane(event);">门户</a></em></li><li><em><a href="admin.php?action=forums" id="header_forum" hidefocus="true" onmouseover="previewheader('forum')" onmouseout="previewheader()" onclick="toggleMenu('forum', 'forums');doane(event);">论坛</a></em></li><li><em><a href="admin.php?action=group&operation=setting" id="header_group" hidefocus="true" onmouseover="previewheader('group')" onmouseout="previewheader()" onclick="toggleMenu('group', 'group&operation=setting');doane(event);">群组</a></em></li><li><em><a href="admin.php?action=adv" id="header_extended" hidefocus="true" onmouseover="previewheader('extended')" onmouseout="previewheader()" onclick="toggleMenu('extended', 'adv');doane(event);">扩展</a></em></li><li><em><a href="admin.php?action=plugins" id="header_plugin" hidefocus="true" onmouseover="previewheader('plugin')" onmouseout="previewheader()" onclick="toggleMenu('plugin', 'plugins');doane(event);">插件</a></em></li><li><em><a href="admin.php?action=tools&operation=updatecache" id="header_tools" hidefocus="true" onmouseover="previewheader('tools')" onmouseout="previewheader()" onclick="toggleMenu('tools', 'tools&operation=updatecache');doane(event);">工具</a></em></li><li><em><a href="admin.php?action=founder&operation=perm" id="header_founder" hidefocus="true" onmouseover="previewheader('founder')" onmouseout="previewheader()" onclick="toggleMenu('founder', 'founder&operation=perm');doane(event);">站长</a></em></li><li><em><a id="header_uc" hidefocus="true" href="http://www.dz.com/uc_server/admin.php?m=frame" onmouseover="previewheader('uc')" onmouseout="previewheader()" onclick="uc_login=1;toggleMenu('uc', '');doane(event);">UCenter</a></em></li>

</ul>
<div class="currentloca">
<p id="admincpnav"></p>
</div>
<div class="navbd"></div>
<div class="sitemapbtn">
	<div style="float: left; margin:-7px 10px 0 0"><form name="search" method="post" autocomplete="off" action="admin.php?action=search" target="main"><input type="text" name="keywords" value="" class="txt" /> <input type="hidden" name="searchsubmit" value="yes" class="btn" /><input type="submit" name="searchsubmit" value="搜索" class="btn" style="margin-top: 5px;vertical-align:middle" /></form></div>
	<span id="add2custom" style="display: none"></span>
	<a href="###" id="cpmap" onclick="showMap();return false;"><img src="static/image/admincp/btn_map.gif" title="管理中心导航(ESC键)" width="46" height="18" /></a>
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
	<iframe src="" id="main" name="main" width="100%" height="100%" frameborder="0" scrolling="yes" style="overflow: visible;display:"></iframe>
</td>
</tr>
</table>
<div id="scrolllink" style="display: none">
	<span onclick="menuScroll(1)"><img src="static/image/admincp/scrollu.gif" /></span>
	<span onclick="menuScroll(2)"><img src="static/image/admincp/scrolld.gif" /></span>
</div>
<div class="copyright">
	<p>Powered by Tuan V1.0</p>
</div>

<div id="cpmap_menu" class="custom" style="display: none">
	<div class="cmain" id="cmain"></div>
	<div class="cfixbd"></div>
</div>

<script type="text/JavaScript">
	var headers = new Array('index','global','style','topic','user','portal','forum','group','extended','plugin','tools','founder','uc'), admincpfilename = 'admin.php', menukey = '';
	function switchheader(key) {
		if(!key || !$('header_' + key)) {
			return;
		}
		for(var k in top.headers) {
			if($('menu_' + headers[k])) {
				$('menu_' + headers[k]).style.display = headers[k] == key ? '' : 'none';
			}
		}
		var lis = $('topmenu').getElementsByTagName('li');
		for(var i = 0; i < lis.length; i++) {
			if(lis[i].className == 'navon') lis[i].className = '';
		}
		$('header_' + key).parentNode.parentNode.className = 'navon';
	}
	var headerST = null;
	function previewheader(key) {
		if(key) {
			headerST = setTimeout(function() {
				for(var k in top.headers) {
					if($('menu_' + headers[k])) {
						$('menu_' + headers[k]).style.display = headers[k] == key ? '' : 'none';
					}
				}
				var hrefs = $('menu_' + key).getElementsByTagName('a');
				for(var j = 0; j < hrefs.length; j++) {
					hrefs[j].className = '';
				}
			}, 1000);
		} else {
			clearTimeout(headerST);
		}
	}
	function toggleMenu(key, url) {
		menukey = key;
		switchheader(key);
		if(url) {
			parent.main.location = admincpfilename + '?action=' + url;
			var hrefs = $('menu_' + key).getElementsByTagName('a');
			for(var j = 0; j < hrefs.length; j++) {
				hrefs[j].className = j == (key == 'plugin' ? 1 : 0) ? 'tabon' : '';
			}
		}
		if(key == 'uc') {
			parent.main.location = $('header_uc').href + '&a=main&iframe=1';
		}
		setMenuScroll();
	}
	function setMenuScroll() {
		$('frametable').style.width = document.body.offsetWidth < 1000 ? '1000px' : '100%';
		var obj = $('menu_' + menukey);
		if(!obj) {
			return;
		}
		var scrollh = document.body.offsetHeight - 160;
		obj.style.overflow = 'visible';
		obj.style.height = '';
		$('scrolllink').style.display = 'none';
		if(obj.offsetHeight + 150 > document.body.offsetHeight && scrollh > 0) {
			obj.style.overflow = 'hidden';
			obj.style.height = scrollh + 'px';
			$('scrolllink').style.display = '';
		}
	}
	function resizeHeadermenu() {
		var lis = $('topmenu').getElementsByTagName('li');
		var maxsize = $('frameuinfo').offsetLeft - 160, widths = 0, moi = -1, mof = '';
		if($('menu_mof')) {
			$('topmenu').removeChild($('menu_mof'));
		}
		if($('menu_mof_menu')) {
			$('append_parent').removeChild($('menu_mof_menu'));
		}
		for(var i = 0; i < lis.length; i++) {
			widths += lis[i].offsetWidth;
			if(widths > maxsize) {
				lis[i].style.visibility = 'hidden';
				var sobj = lis[i].childNodes[0].childNodes[0];
				if(sobj) {
					mof += '<a href="'+ sobj.getAttribute('href') + '" onclick="$(\'' + sobj.id + '\').onclick()">&rsaquo; ' + sobj.innerHTML + '</a><br style="clear:both" />';
				}
			} else {
				lis[i].style.visibility = 'visible';
			}
		}
		if(mof) {
			for(var i = 0; i < lis.length; i++) {
				if(lis[i].style.visibility == 'hidden') {
					moi = i;
					break;
				}
			}
			mofli = document.createElement('li');
			mofli.innerHTML = '<em><a href="javascript:;">&raquo;</a></em>';
			mofli.onmouseover = function () { showMenu({'ctrlid':'menu_mof','pos':'43'}); }
			mofli.id = 'menu_mof';
			$('topmenu').insertBefore(mofli, lis[moi]);
			mofmli = document.createElement('li');
			mofmli.className = 'popupmenu_popup';
			mofmli.style.width = '150px';
			mofmli.innerHTML = mof;
			mofmli.id = 'menu_mof_menu';
			mofmli.style.display = 'none';
			$('append_parent').appendChild(mofmli);
		}
	}
	function menuScroll(op, e) {
		var obj = $('menu_' + menukey);
		var scrollh = document.body.offsetHeight - 160;
		if(op == 1) {
			obj.scrollTop = obj.scrollTop - scrollh;
		} else if(op == 2) {
			obj.scrollTop = obj.scrollTop + scrollh;
		} else if(op == 3) {
			if(!e) e = window.event;
			if(e.wheelDelta <= 0 || e.detail > 0) {
				obj.scrollTop = obj.scrollTop + 20;
			} else {
				obj.scrollTop = obj.scrollTop - 20;
			}
		}
	}
	function menuNewwin(obj) {
		window.open(obj.parentNode.href);
		doane();
	}
	function initCpMenus(menuContainerid) {
		var key = '', lasttabon1 = null, lasttabon2 = null, hrefs = $(menuContainerid).getElementsByTagName('a');
		for(var i = 0; i < hrefs.length; i++) {
			if(menuContainerid == 'leftmenu' && 'action=misc&operation=custommenu&do=add&title=%B1%E0%BC%AD%B3%A3%D3%C3%B2%D9%D7%F7&url=action%253Dmisc%2526operation%253Dcustommenu'.indexOf(hrefs[i].href.substr(hrefs[i].href.indexOf(admincpfilename + '?') + admincpfilename.length + 1)) != -1) {
				if(lasttabon1) {
					lasttabon1.className = '';
				}
				key = hrefs[i].parentNode.parentNode.id.substr(5);
				hrefs[i].className = 'tabon';
				lasttabon1 = hrefs[i];
			}
			if(!hrefs[i].getAttribute('ajaxtarget')) hrefs[i].onclick = function() {
				if(menuContainerid != 'custommenu') {
					var lis = $(menuContainerid).getElementsByTagName('li');
					for(var k = 0; k < lis.length; k++) {
						if(lis[k].firstChild && lis[k].firstChild.className != 'menulink') lis[k].firstChild.className = '';
					}
					if(this.className == '') this.className = menuContainerid == 'leftmenu' ? 'tabon' : '';
				}
				if(menuContainerid != 'leftmenu') {
					var hk, currentkey;
					var leftmenus = $('leftmenu').getElementsByTagName('a');
					for(var j = 0; j < leftmenus.length; j++) {
						hk = leftmenus[j].parentNode.parentNode.id.substr(5);
						if(this.href.indexOf(leftmenus[j].href) != -1) {
							if(lasttabon2) {
								lasttabon2.className = '';
							}
							leftmenus[j].className = 'tabon';
							lasttabon2 = leftmenus[j];
							if(hk != 'index') currentkey = hk;
						} else {
							leftmenus[j].className = '';
						}
					}
					if(currentkey) toggleMenu(currentkey);
					hideMenu();
				}
			}
		}
		return key;
	}
	var header_key = initCpMenus('leftmenu');
	toggleMenu(header_key ? header_key : 'index');
	function initCpMap() {
		var ul, hrefs, s = '', count = 0;
		for(var k in headers) {
			if(headers[k] != 'index' && headers[k] != 'uc') {
				s += '<td valign="top"><ul class="cmblock"><li><h4>' + $('header_' + headers[k]).innerHTML + '</h4></li>';
				ul = $('menu_' + headers[k]);
				if(!ul) {
					continue;
				}
				hrefs = ul.getElementsByTagName('a');
				for(var i = 0; i < hrefs.length; i++) {
					s += '<li><a href="' + hrefs[i].href + '" target="' + hrefs[i].target + '" k="' + headers[k] + '">' + hrefs[i].innerHTML + '</a></li>';
				}
				s += '<li></li></ul></td>';
				count++;
			}
		}
		var width = (count > 11 ? 11 : count) * 80;
		s = '<div class="cnote" style="width:' + width + 'px"><span class="right"><a href="###" class="flbc" onclick="hideMenu();return false;"></a></span><h3>管理中心导航</h3></div>' +
			'<div class="cmlist" style="width:' + width + 'px"><table id="mapmenu" cellspacing="0" cellpadding="0" ><tr>' + s +
			'</tr></table></div>';
		$('cmain').innerHTML = s;
		$('cmain').style.width = (width > 1000 ? 1000 : width) + 'px';
	}
	initCpMap();
	initCpMenus('mapmenu');
	var cmcache = false;
	function showMap() {
		showMenu({'ctrlid':'cpmap','evt':'click', 'duration':3, 'pos':'00'});
	}
	function resetEscAndF5(e) {
		e = e ? e : window.event;
		actualCode = e.keyCode ? e.keyCode : e.charCode;
		if(actualCode == 27) {
			if($('cpmap_menu').style.display == 'none') {
				showMap();
			} else {
				hideMenu();
			}
		}
		if(actualCode == 116 && parent.main) {
			parent.main.location.reload();
			if(document.all) {
				e.keyCode = 0;
				e.returnValue = false;
			} else {
				e.cancelBubble = true;
				e.preventDefault();
			}
		}
	}
	function uc_left_menu(uc_menu_data) {
		var leftmenu = $('menu_uc');
		leftmenu.innerHTML = '';
		var html_str = '';
		for(var i=0;i<uc_menu_data.length;i+=2) {
			html_str += '<li><a href="'+uc_menu_data[(i+1)]+'" hidefocus="true" onclick="uc_left_switch(this)" target="main"><em onclick="menuNewwin(this)" title="新窗口打开"></em>'+uc_menu_data[i]+'</a></li>';
		}
		leftmenu.innerHTML = html_str;
	}
	var uc_left_last = null;
	function uc_left_switch(obj) {
		if(uc_left_last) {
			uc_left_last.className = '';
		}
		obj.className = 'tabon';
		uc_left_last = obj;
	}
	function uc_modify_sid(sid) {
		$('header_uc').href = 'http://www.dz.com/uc_server/admin.php?m=frame';
	}

	_attachEvent(document.documentElement, 'keydown', resetEscAndF5);
	_attachEvent(window, 'resize', setMenuScroll, document);
	_attachEvent(window, 'resize', resizeHeadermenu, document);
	if(BROWSER.ie){
		$('leftmenu').onmousewheel = function(e) { menuScroll(3, e) };
	} else {
		$('leftmenu').addEventListener("DOMMouseScroll", function(e) { menuScroll(3, e) }, false);
	}
	resizeHeadermenu();
</script>

</body>
</html>