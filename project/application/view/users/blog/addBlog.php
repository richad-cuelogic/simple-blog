<form action="?controller=addUpdateBlog&action=add" method="POST" id="add_blog_frm" name="add_blog_frm">
	<table  width="90%" bgcolor="white" align="center" border="1" bordercolor="#DEF3F3">
		<tr>
			<td width="20%">Blog Title: </td>
			<td width="80%"><input type="text" id="blog_title" name="blog_title"/></td>
		</tr>
		<tr>
			<td width="20%">Blog Description: </td>
			<td width="80%"><textarea rows="20" columns="200" id="blog_description" name="blog_description"></textarea></td>
		</tr>
		<tr> 
			<td colspan="2" width="100%" align="center"><input type="submit" value="Submit" /></td>
		</tr>
	</table>
</form>