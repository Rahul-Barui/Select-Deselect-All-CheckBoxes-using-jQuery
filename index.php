<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Select / Deselect All CheckBoxes in HTML Table</title>

		<script src="js/jquery1.11.3.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$("#checkAll").change(function () {
					$("input:checkbox").prop('checked', $(this).prop("checked"));
				})
			})
		</script>	
	</head>

	<body>
		<br /><br /><br />
		<p align="center">
		<font color="#0033FF" size="3"><b>Check Uncheck All / Select Deselect All CheckBoxes in HTML Table</b></font><br /><br />
		
		<table id="tblCustomers" border="2" align="center" height="100%">
			<tr>
				<th> <center><input type="checkbox" id="checkAll" /> Select All &nbsp; </center> </th>
				<th> <center> &nbsp; Customer Id &nbsp;</center> </th>
				<th> <center>&nbsp; Name &nbsp;</center> </th>
				<th> <center>&nbsp; Country &nbsp;</center> </th>
			</tr>
			
			<tr>
				<td> <center><input type="checkbox" id="singlecheck" /> </center></td>
				<td> <center>R012340B </center></td>
				<td> <center>Rahul </center></td>
				<td> <center>India </center></td>
			</tr>
			
			<tr>
				<td> <center><input type="checkbox" id="singlecheck" /> </center></td>
				<td> <center>N047850L</center></td>
				<td> <center>Mr. Babu </center></td>
				<td> <center>India </center></td>
			</tr>
			
			<tr>
				<td> <center><input type="checkbox" id="singlecheck" /> </center></td>
				<td> <center>R012340B</center></td>
				<td> <center>Mr. Puchu </center></td>
				<td> <center>USA </center></td>
			</tr>
			
			<tr>
				<td> <center><input type="checkbox" id="singlecheck" /> </center></td>
				<td> <center>B012340R</center></td>
				<td> <center>Humble</center></td>
				<td> <center>Russia </center></td>
			</tr>
    	</table>
		</p>
	</body>
</html>
