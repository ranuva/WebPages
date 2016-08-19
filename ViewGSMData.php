<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta name="generator" content="openElement (1.56)" />
<link id="openElement" rel="stylesheet" type="text/css" href="WEFiles/Css/v02/openElement.css?v=50491105200" />
<link id="OEBase" rel="stylesheet" type="text/css" href="ViewGSMData.css?v=50491105200" />
<!--[if lte IE 7]> 
<link rel="stylesheet" type="text/css" href="WEFiles/Css/ie7.css?v=50491105200" />
<![endif]-->
<script type="text/javascript">
var WEInfoPage = {"PHPVersion":"phpOK","OEVersion":"1-56-0","PagePath":"ViewGSMData","Culture":"DEFAULT","LanguageCode":"EN","RelativePath":"","RenderMode":"Export","PageAssociatePath":"ViewGSMData","EditorTexts":null};
</script>
<script type="text/javascript" src="WEFiles/Client/jQuery/1.10.2.js?v=50491105200"></script>
<script type="text/javascript" src="WEFiles/Client/jQuery/migrate.js?v=50491105200"></script>
<script type="text/javascript" src="WEFiles/Client/Common/oe.min.js?v=50491105200"></script>

</head>
<body class="" data-gl="{&quot;KeywordsHomeNotInherits&quot;:false}">
	<form id="XForm" method="post" action="#"></form>
	<div id="XBody" class="BaseDiv RBoth OEPageXbody OESK_XBody_Default" style="z-index:0">
		<div class="OESZ OESZ_DivContent OESZG_XBody">
			<div class="OESZ OESZ_XBodyContent OESZG_XBody OECT OECT_Content OECTAbs">
				<div id="WE2d6edd8e81" class="BaseDiv RBoth OEWEImage OESK_WEImage_1d785eb1" style="z-index:2">
					<div class="OESZ OESZ_DivLeft1 OESZG_WE2d6edd8e81"></div>
					<div class="OESZ OESZ_DivLeft2 OESZG_WE2d6edd8e81"></div>
					<div class="OESZ OESZ_DivLeft3 OESZG_WE2d6edd8e81"></div>
					<div class="OESZ OESZ_DivLeft4 OESZG_WE2d6edd8e81"></div>
					<div class="OESZ OESZ_DivContent OESZG_WE2d6edd8e81">
						<img src="WEFiles/Image/WEImage/Logo_1-WE8abc390e1c.jpg" class="OESZ OESZ_Img OESZG_WE2d6edd8e81" alt="" />
					</div>

					<div class="OESZ OESZ_DivRight1 OESZG_WE2d6edd8e81"></div>
					<div class="OESZ OESZ_DivRight2 OESZG_WE2d6edd8e81"></div>
					<div class="OESZ OESZ_DivRight3 OESZG_WE2d6edd8e81"></div>
					<div class="OESZ OESZ_DivRight4 OESZG_WE2d6edd8e81"></div>

				</div>

				<div id="WEc38c0dfed0" class="BaseDiv RBoth OEWEImage OESK_WEImage_Default" style="z-index:3">
					<div class="OESZ OESZ_DivContent OESZG_WEc38c0dfed0">
						<img src="WEFiles/Image/WEImage/Logo-4-WE1c794d027f.png" class="OESZ OESZ_Img OESZG_WEc38c0dfed0" alt="" />
					</div>
				</div>
				<div id="WE3a01cad5a0" class="BaseDiv RBoth OEWELinkButton OESK_WELinkButton_e8d4e919" style="z-index:1" onclick="return OE.Navigate.open(event,'index.htm',1)">
					<div class="OESZ OESZ_DivContent OESZG_WE3a01cad5a0">
						<a class="OESZ OESZ_Text OESZG_WE3a01cad5a0 ContentBox" href="index.htm">Home</a>
					</div>
				</div>
				<div id="WE8b4aa22943" class="BaseDiv RWidth OEWEText OESK_WEText_Default" style="z-index:4">
					<div class="OESZ OESZ_DivContent OESZG_WE8b4aa22943">
						<span class="ContentBox"><span style="color:rgb(0, 176, 240);font-size:24px;">Sample GSM &nbsp;Data</span><br /></span>
					</div>
<table width="100%" border="1">
        <tr>
           <td><strong><font color="#000000">GSMFrame</font></strong></td>
          <td><strong><font color="#000000">ChannelType</font></strong></td>
          <td><strong><font color="#000000">AntennaNumber</font></strong></td>
          <td><strong><font color="#000000">MessageType</font></strong></td>
          <td><strong><font color="#000000">IMSI</font></strong></td>
          <td><strong><font color="#000000">MCC</font></strong></td>
          <td><strong><font color="#000000">MNC</font></strong></td>

        </tr>
 <?PHP


    // In the variables section below, replace user and password with your own MySQL credentials as created on your server
   $servername = "localhost";
    $username = "root";
   $password = "root123";
   $DB_Name = "GSM_MS_BTS";

     // Create MySQL connection 
     $conn = mysqli_connect($servername, $username, $password,$DB_Name);

   // Check connection - if it fails, output will include the error message
       if (!$conn) {
                   die('<p>Connection failed: <p>' . mysqli_connect_error());
                  }
      //      echo '<p>Connected successfully</p>';

    //$sql = "SELECT * FROM `client_reg` Order by Id DESC ";
    $sql = "SELECT GSMFrame,ChannelType,AntennaNumber,MessageType,IMSI,MCC,MNC    FROM GSM_MS_BTS Order by Record_ID  DESC LIMIT 10";
            //echo '<p>SQL executed</p>';
   //echo $sql;exit;
   if ( ($result=$conn->query($sql)) == TRUE) {
       echo "Database created successfully";
     }
      else
       {
        echo "Error creating database: " . $conn->error;
      }

    while( $row = $result->fetch_assoc())
    {
    ?>
        <tr>
          <td><?php echo $row['GSMFrame']; ?></td>
	  <td><?php echo $row['ChannelType']; ?></td>
	  <td><?php echo $row['AntennaNumber']; ?></td>
	  <td><?php echo $row['MessageType']; ?></td>
	  <td><?php echo $row['IMSI']; ?></td>
	  <td><?php echo $row['MCC']; ?></td>
	  <td><?php echo $row['MNC']; ?></td>
  </tr>
  <?php
  }
  ?>

 </table>

				</div>
			</div>
			<div class="OESZ OESZ_XBodyFooter OESZG_XBody OECT OECT_Footer OECTAbs">
			</div>

		</div>
	</div><script type="text/javascript">
	$(["WEFiles/Image/Skin/d95638d6.png"]).preloadImg();

	</script>

</body>
</html>
