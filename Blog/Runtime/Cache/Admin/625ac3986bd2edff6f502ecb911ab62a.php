<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>属性修改页</title>
	<link rel="stylesheet" href="__PUBLIC__/Css/public.css" />
</head>
<body>
	<form action="<?php echo U(GROUP_NAME.'/Attr/updateHandle');?>" method="post">
		<table class="table">
			<tr>
				<th colspan="2">修改博文属性</th>
			</tr>
			<tr>
				<td align="right" >属性名称</td>
				<td>
					<input type="text" name="name"  value="<?php echo ($attr["name"]); ?>" />
				</td>
			</tr>
			<tr>
				<td align="right">标题颜色</td>
				<td>
					<input type="text" name="color" value="<?php echo ($attr["color"]); ?>" />
				</td>
			</tr>
			<tr>
					<td colspan="2" align="center">
						<input type="hidden" name='id'value="<?php echo ($attr['id']); ?>" />
						<input type="submit" value="保存" />
					</td>
			</tr>
		</table>	
	</form>

</body>
</html>