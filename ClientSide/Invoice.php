
<html>
	<head>
		<meta charset="utf-8">
		<title>Invoice</title>
		<link rel="stylesheet" href="style.css">
		<link rel="license" href="https://www.opensource.org/licenses/mit-license/">
		<script src="script.js"></script>
		<style type="text/css">
			/* reset */

*
{
	border: 0;
	box-sizing: content-box;
	color: inherit;
	font-family: inherit;
	font-size: inherit;
	font-style: inherit;
	font-weight: inherit;
	line-height: inherit;
	list-style: none;
	margin: 0;
	padding: 0;
	text-decoration: none;
	vertical-align: top;
}

/* content editable */


/* heading */

h1 { font: bold 100% sans-serif; letter-spacing: 0.5em; text-align: center; text-transform: uppercase; }

/* table */

table { font-size: 75%; table-layout: fixed; width: 100%; }
table { border-collapse: separate; border-spacing: 2px; }
th, td { border-width: 1px; padding: 0.5em; position: relative; text-align: left; }
th, td { border-radius: 0.25em; border-style: solid; }
th { background: #EEE; border-color: #BBB; }
td { border-color: #DDD; }

/* page */

html { font: 16px/1 'Open Sans', sans-serif; overflow: auto; padding: 0.5in; }
html { background: #d9f5e0; cursor: default; }

body { box-sizing: border-box; height: 08in; margin: 0 auto; overflow: hidden; padding: 0.5in; width: 8.5in; }
body { background: #FFF; border-radius: 1px; box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5); }

/* header */

header { margin: 0 0 3em; }
header:after { clear: both; content: ""; display: table; }

header h1 { background: #000; border-radius: 0.25em; color: #FFF; margin: 0 0 1em; padding: 0.5em 0; }
header address { float: left; font-size: 75%; font-style: normal; line-height: 1.25; margin: 0 1em 1em 0; }
header address p { margin: 0 0 0.25em; }
header span, header img { display: block; float: right; }
header span { margin: 0 0 1em 1em; max-height: 25%; max-width: 60%; position: relative; }
header img { max-height: 100%; max-width: 100%; }
header input { cursor: pointer; -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"; height: 100%; left: 0; opacity: 0; position: absolute; top: 0; width: 100%; }

/* article */

article, article address, table.meta, table.inventory { margin: 0 0 3em; }
article:after { clear: both; content: ""; display: table; }
article h1 { clip: rect(0 0 0 0); position: absolute; }

article address { float: left; font-size: 125%; font-weight: bold; }

/* table meta & balance */

table.meta, table.balance { float: right; width: 36%; }
table.meta:after, table.balance:after { clear: both; content: ""; display: table; }

/* table meta */

table.meta th { width: 40%; }
table.meta td { width: 60%; }

/* table items */

table.inventory { clear: both; width: 100%; }
table.inventory th { font-weight: bold;}

table.inventory td:nth-child(1) { width: 26%; }
table.inventory td:nth-child(2) { width: 38%; }
table.inventory td:nth-child(3) { text-align: right; width: 12%; }
table.inventory td:nth-child(4) { text-align: right; width: 12%; }
table.inventory td:nth-child(5) { text-align: right; width: 12%; }

/* table balance */

table.balance th, table.balance td { width: 50%; }
table.balance td { text-align: right; }

/* aside */

aside h1 { border: none; border-width: 0 0 1px; margin: 0 0 1em; }
aside h1 { border-color: #999; border-bottom-style: solid; }

/* javascript */


@media print {
	* { -webkit-print-color-adjust: exact; }
	html { background: none; padding: 0; }
	body { box-shadow: none; margin: 0; }
	span:empty { display: none; }
	.add, .cut { display: none; }
}

@page { margin: 0; }
		</style>
	</head>
	<?php
		include_once("Connection.php");

		$Invoice_Details="select tbljobhiredpayment.*,tblclient.*,tbljobs.* from tbljobhiredpayment
		INNER JOIN tblclient ON tbljobhiredpayment.ClientID=tblclient.ClientID
		INNER JOIN tbljobs ON tbljobhiredpayment.ClientID=tbljobs.ClientID 
		where tblclient.ClientID='".$_REQUEST['CID']."'";
		$Invoice_Details_Exe=mysqli_query($con,$Invoice_Details);
		$Invoice_Details_Fetch=mysqli_fetch_array($Invoice_Details_Exe);
	?>
	<body>
		<header>
			<h1 style="background-color: #07b107">Invoice</h1>
			<address>
				<p><?php echo $Invoice_Details_Fetch['C_FirstName']." ".$Invoice_Details_Fetch['C_LastName']?></p>
				<p><?php echo $Invoice_Details_Fetch['Email'];?></p>
				<p><?php echo $Invoice_Details_Fetch['ContactNo'];?></p>
			</address>
			<!-- <span><img alt="" src=""><input type="file" accept="image/*"></span> -->
		</header>
		<article>
			<h1>Recipient</h1>
			<address >
				<p>Some Company<br>c/o Some Guy</p>
			</address>
			<table class="meta">
				<tr>
					<th><span >Invoice #</span></th>
					<td><span >#<?php echo $Invoice_Details_Fetch['InvoiceID'];?></span></td>
				</tr>
				<tr>
					<th><span >Date</span></th>
					<td><span ><?php echo $Invoice_Details_Fetch['PaidOn'];?></span></td>
				</tr>
				<tr>
					<th><span >Amount Due</span></th>
					<td><span id="prefix" >₹</span><span><?php echo $Invoice_Details_Fetch['Amount'];?>.00</span></td>
				</tr>
			</table>
			<table class="inventory">
				<thead>
					<tr>
						<th><span >Job Name</span></th>
						
						<th style="width: 100px;"><span>Price</span></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><span ><?php echo $Invoice_Details_Fetch['jobTitle'];?></span></td>
						
						<td><span data-prefix>₹</span><span><?php echo $Invoice_Details_Fetch['Amount'];?>.00</span></td>
					</tr>
				</tbody>
			</table>
		
			<table class="balance">
				<tr>
					<th><span >Amount Paid</span></th>
					<td><span data-prefix>₹</span><span ><?php echo $Invoice_Details_Fetch['Amount'];?>.00</span></td>
				</tr>
				<!-- <tr>
					<?php
						$Amount=$Invoice_Details_Fetch['Amount'];
						$percetage=5;
						$Answer=($Amount*$percetage)/100;

					?>
					<th><span >Charges 5%</span></th>
					<td><span data-prefix>₹</span><span><?php echo $Answer;?>.00</span></td>
				</tr>
				
				<tr>
					<?php
						$Total=$Amount-$Answer;
					?>
					<th><span >Total</span></th>
					<td><span data-prefix>₹</span><span><?php echo $Total;?>.00</span></td>
				</tr> -->
			</table>
		</article>
		<aside>
			<h1><span >Additional Notes</span></h1>
			<div 
			>
				<p>A charge of 5% will be deducted at the time of payment to freelancer.</p>

			</div>
		</aside>
		<br>
		<br>
		<a href="index.php" ><h1 style="background-color: #07b107;color: #FFF">Back to Home</h1></a>
		
	</body>
</html>