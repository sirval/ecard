<?php
	function generateRow(){
		$contents = '';
		include_once('dbconnect.php');
		$sql = "SELECT * FROM customer";
		//use for MySQLi Procedural
		 $query = mysqli_query($con, $sql);
		 while($row = mysqli_fetch_assoc($query)){
		 	$contents .= 
		 	"<tr>
		 		<td>".$row['customer_id']."</td>
				<td>".$row['name'].' '.$row['f_name'].' '.$row['m_name']."</td>
				<td>".$row['issued_date'].'/'.$row['level'].'/'.$row['u_id'].'/'.$row['dept']."</td>
				<td>".$row['sex']."</td>
				<td>".$row['category']."</td>
									
			</tr>";
		 	}
		
		return $contents;
	}

	require_once('tcpdf/tcpdf.php');  
    $pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
    $pdf->SetCreator(PDF_CREATOR);  
    $pdf->SetTitle("LIST OF GENERATED ID CARDS");  
    $pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
    $pdf->SetDefaultMonospacedFont('helvetica');  
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
    $pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
    $pdf->setPrintHeader(false);  
    $pdf->setPrintFooter(false);  
    $pdf->SetAutoPageBreak(TRUE, 10);  
    $pdf->SetFont('helvetica', '', 11);  
    $pdf->AddPage();  
    $content = '';  
    $content .= '
      	<h2 align="center">LIST OF GENERATED ID CARDS</h2>
      	<h4>All ID CARDS GENERATED</h4>
      	<table border="1" cellspacing="0" cellpadding="3">  
           <tr>  
           		<th width="5%"><b>S/N</b></th>
                <th width="40%"><b>Bearers Name</b></th>
				<th width="30%"><b>Reg No</b></th>
				<th width="8%"><b>Sex</b></th>
				<th width="15%"><b>Category</b></th> 
           </tr>  
      ';  
    $content .= generateRow();  
    $content .= '</table>';  
    $pdf->writeHTML($content);  
    $pdf->Output('users.pdf', 'I');
	

?>