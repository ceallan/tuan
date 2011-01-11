<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk">
<meta http-equiv="x-ua-compatible" content="ie=7" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/static/images/admincp/admincp.css" />
<script src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/static/js/common.js" type="text/javascript"></script>
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<body>
<script type="text/javascript"> 
if(!parent.document.getElementById('leftmenu')) {
	redirect(window.location.protocol+'//'+window.location.host  + '/admin/?frames=yes&locate=' + document.URL.substr(document.URL.indexOf("admin/") + 6));
}
</script>
<div id="append_parent"></div>
<div class="container" id="cpcontainer"><style type="text/css"> 
	.mod_validate td{ background: #CCFFCC !important; }
	.mod_delete td{	background: #FFEBE7 !important; }
	.mod_ignore td{	background: #EEEEEE !important; }
	.mod_cancel td{ background: #FFFFFF !important; }
</style>
<div class="floattop"><div class="itemtitle"><h3>审核帖子</h3><ul class="tab1"><li class="current"><a href="admin.php?action=moderate&operation=threads"><span>审核主题</span></a></li><li><a href="admin.php?action=moderate&operation=replies"><span>审核回复</span></a></li><li><a href="admin.php?action=moderate&operation=blogs"><span>审核日志</span></a></li><li><a href="admin.php?action=moderate&operation=pictures"><span>审核图片</span></a></li><li><a href="admin.php?action=moderate&operation=doings"><span>审核记录</span></a></li><li><a href="admin.php?action=moderate&operation=shares"><span>审核分享</span></a></li><li><a href="admin.php?action=moderate&operation=comments"><span>审核评论/留言</span></a></li><li><a href="admin.php?action=moderate&operation=articles"><span>审核文章</span></a></li><li><a href="admin.php?action=moderate&operation=articlecomments"><span>审核文章评论</span></a></li></ul></div></div><div class="floattopempty"></div><form name="cpform" method="post" autocomplete="off" action="admin.php?action=moderate&operation=threads" id="cpform" ><input type="hidden" name="formhash" value="3a3474f0" /><input type="hidden" id="formscrolltop" name="scrolltop" value="" /><input type="hidden" name="anchor" value="" />
<table class="tb tb2 ">
<tr><th colspan="15" class="partition">搜索</th></tr>
<tr><td><select name="filter" style="margin: 0px;"><option value="normal" selected>未审核</option><option value="ignore">已忽略</option></select>
		<select name="modfid" style="margin: 0px;"><option value="all" selected>所有帖子</option><option value="-1" >仅群组</option>
<option value="2" >默认版块</option>
</select>
		<select name="dateline" style="margin: 0px;"><option value="all" >全部<option value="604800" selected='selected'>一周<option value="2592000" >一月<option value="7776000" >三月</select>
		用户名: <input size="15" name="username" type="text" value="" />
		标题包含: <input size="15" name="title" type="text" value="" />
		<select name="tpp" style="margin: 0px;"><option value='20' >每页显示20个</option><option value='50' >每页显示50个</option><option value='100' >每页显示100个</option></select>
		<input class="btn" type="submit" value="搜索" /></td></tr></table>
 
<table class="tb tb2 "><p class="margintop marginbot"><a href="javascript:;" onclick="expandall();">全部展开</a> &nbsp;<a href="javascript:;" onclick="foldall();">全部折叠</a><p><tr><td colspan="15"><div class="fixsel"><input type="submit" class="btn" id="submit_modsubmit" name="modsubmit" title="" value="提交" /> &nbsp;<a href="#all" onclick="mod_setbg_all('validate')">全部通过</a> &nbsp;<a href="#all" onclick="mod_setbg_all('delete')">全部删除</a> &nbsp;<a href="#all" onclick="mod_setbg_all('ignore')">全部忽略</a> &nbsp;<a href="#all" onclick="mod_cancel_all();">全部取消</a> &nbsp;<label><input class="checkbox" type="checkbox" name="apply_all" id="chk_apply_all"  value="1" disabled="disabled" />将操作应用到其他所有页面</label></div></td></tr></table>
</form>
<iframe name="fasthandle" style="display: none;"></iframe>
</div>
</body>
</html>