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
<div class="floattop"><div class="itemtitle"><h3>�������</h3><ul class="tab1"><li class="current"><a href="admin.php?action=moderate&operation=threads"><span>�������</span></a></li><li><a href="admin.php?action=moderate&operation=replies"><span>��˻ظ�</span></a></li><li><a href="admin.php?action=moderate&operation=blogs"><span>�����־</span></a></li><li><a href="admin.php?action=moderate&operation=pictures"><span>���ͼƬ</span></a></li><li><a href="admin.php?action=moderate&operation=doings"><span>��˼�¼</span></a></li><li><a href="admin.php?action=moderate&operation=shares"><span>��˷���</span></a></li><li><a href="admin.php?action=moderate&operation=comments"><span>�������/����</span></a></li><li><a href="admin.php?action=moderate&operation=articles"><span>�������</span></a></li><li><a href="admin.php?action=moderate&operation=articlecomments"><span>�����������</span></a></li></ul></div></div><div class="floattopempty"></div><form name="cpform" method="post" autocomplete="off" action="admin.php?action=moderate&operation=threads" id="cpform" ><input type="hidden" name="formhash" value="3a3474f0" /><input type="hidden" id="formscrolltop" name="scrolltop" value="" /><input type="hidden" name="anchor" value="" />
<table class="tb tb2 ">
<tr><th colspan="15" class="partition">����</th></tr>
<tr><td><select name="filter" style="margin: 0px;"><option value="normal" selected>δ���</option><option value="ignore">�Ѻ���</option></select>
		<select name="modfid" style="margin: 0px;"><option value="all" selected>��������</option><option value="-1" >��Ⱥ��</option>
<option value="2" >Ĭ�ϰ��</option>
</select>
		<select name="dateline" style="margin: 0px;"><option value="all" >ȫ��<option value="604800" selected='selected'>һ��<option value="2592000" >һ��<option value="7776000" >����</select>
		�û���: <input size="15" name="username" type="text" value="" />
		�������: <input size="15" name="title" type="text" value="" />
		<select name="tpp" style="margin: 0px;"><option value='20' >ÿҳ��ʾ20��</option><option value='50' >ÿҳ��ʾ50��</option><option value='100' >ÿҳ��ʾ100��</option></select>
		<input class="btn" type="submit" value="����" /></td></tr></table>
 
<table class="tb tb2 "><p class="margintop marginbot"><a href="javascript:;" onclick="expandall();">ȫ��չ��</a> &nbsp;<a href="javascript:;" onclick="foldall();">ȫ���۵�</a><p><tr><td colspan="15"><div class="fixsel"><input type="submit" class="btn" id="submit_modsubmit" name="modsubmit" title="" value="�ύ" /> &nbsp;<a href="#all" onclick="mod_setbg_all('validate')">ȫ��ͨ��</a> &nbsp;<a href="#all" onclick="mod_setbg_all('delete')">ȫ��ɾ��</a> &nbsp;<a href="#all" onclick="mod_setbg_all('ignore')">ȫ������</a> &nbsp;<a href="#all" onclick="mod_cancel_all();">ȫ��ȡ��</a> &nbsp;<label><input class="checkbox" type="checkbox" name="apply_all" id="chk_apply_all"  value="1" disabled="disabled" />������Ӧ�õ���������ҳ��</label></div></td></tr></table>
</form>
<iframe name="fasthandle" style="display: none;"></iframe>
</div>
</body>
</html>