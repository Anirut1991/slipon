<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!DOCTYPE html>
<html><head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- <meta http-equiv="refresh" content="2; url=http://intranet.railway.co.th"> -->
<script type="text/javascript">
    disableSelection(document.getElementById("text"));
    // Disable  Text Selection
    function disableSelection(element) {
        element.onselectstart = function () {
            return false;
        };
        element.unselectable = "on";
        element.style.MozUserSelect = "none";
        element.style.cursor = "default";
    }

    function onLoad() {
        disableSelection(document.getElementById("text"));
        this.open.fullscreen;
    }

</script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script language="JavaScript" type="text/javascript">
<!--

    var message = "";
    ///////////////////////////////////
    function clickIE() { if (document.all) { (message); return false; } }
    function clickNS(e) {
        if(document.layers || (document.getElementById && !document.all)) {
            if (e.which == 2 || e.which == 3) { (message); return false; }
        }
    }
    if (document.layers){
        document.captureEvents(Event.MOUSEDOWN); document.onmousedown = clickNS; 
    }
    else { 
        document.onmouseup = clickNS; document.oncontextmenu = clickIE; 
    }

    document.oncontextmenu = new Function("return false")


    // -->
</script> 
<!-- Bootstrap core CSS -->
<link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom fonts for this template -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
<link href="/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sarabun&display=swap" rel="stylesheet">


<!-- Bootstrap core JavaScript -->
<link rel="shortcut icon" href="img/favicon.ico">
<link rel="stylesheet" href="/vendor/bootstrap/4.1.1/css/bootstrap.min.css">    
<link rel="stylesheet" type="text/css" href="/vendor/font-awesome/css/font-awesome.css">
<script src="/vendor/jquery/3.3.1/jquery.min.js"></script>
<script src="/vendor/cloudflare/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="/vendor/bootstrap/4.1.1/js/bootstrap.min.js"></script>

<style type="text/css">
<!--
/* body,td,th {	font-family: AngsanaUPC;	font-size: 18px;	color: #000000;} */
body {	margin-left: 0px;	margin-top: 0px;	margin-right: 0px;	margin-bottom: 0px;}
.style1 {font-size: 18px; font-weight:bold;}
.style2 {font-size: 16px; }
.style3 {font-size: 20px; font-weight:bold;}
.style4 {font-size: 18px; font-weight:bold;}
.style5 {	font-size: 18px;	font-weight:bold;	line-height: 45px;
}
myForm{
	/*font-family: Sarabun;	color:white;*/
	font-family: 'Sarabun', sans-serif;

}
-->
</style>

<!--<style type="text/css" media="screen"> 
		#screen {} 
		#print { display: none; } 
</style> 
<style type="text/css" media="print"> 
		#screen { 	display: none; } 
		#print {}                        
</style> 

<style type="text/css" media="print">
#header,#footer {
display:none;
}
</style>-->
<script>

    function chk_keys() {
        if (event.keyCode == 17) {
            alert('Copyright Information System Department.');
        }
    }
</script></head>



 


<!--onmousedown="if (this.disabled) return false; else { this.checked = true; alert('Copyright Information System Department. ')}"-->


<!--<body onLoad="window.print();" onmousedown="if (this.disabled) return false; else { this.checked = true; alert('Copyright of Department of Information System. ')}"> -->
<body
    onbeforecopy="return false"
    ondragstart="return false" 
    onselectstart="return false" 
    oncontextmenu="return false" 
    onselect="document.selection.empty()" 
    oncopy="document.selection.empty()">
<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <title>กรอกรหัส OTP เพื่อเข้าใช้เข้าตรวจสอบสลิปเงินเดือน</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body> -->

<div class="container-fluid" style="background-image:url(images/bg.jpg)">
    <div class="container p-3">
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col">
                        <div align="center">
                            <br>
                            <h3 style="color:#fff;font-family:Sarabun;font-size:2.0em;" onClick="window.location='https://www.railway.co.th';"><img src="images/icon-white.png" alt="การรถไฟแห่งประเทศไทย" width="30">&nbsp;การรถไฟแห่งประเทศไทย</h3>
                            <h5 style="color:#fff;font-family:Sarabun;">ใบแจ้งยอดเงินเดือนค่าจ้างและรายได้อื่น ๆ</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- <nav class="navbar navbar-expand-sm bg-primary navbar-light sticky-top">
  <a class="navbar-brand" href="/">INTRANET</a>
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="/"><i class="fa fa-home"></i> หน้าหลัก</a></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/V2.0/onlineslip.aspx"><i class="fa fa-money"></i> สลิปออนไลน์</a>
    </li>
  </ul>
</nav> -->
    <div class="row">
        <div class="col alert-primary">
            <div class="container">
               <!-- <a href="/"><i class="fa fa-home"></i> หน้าหลัก</a> | 
                <a href="/V3.0/onlineslip.php"><i class="fa fa-money"></i> -->
                <a href="https://intranet.railway.co.th/V3.0/intranet.php"><i class="fa fa-home"></i> หน้าหลัก</a> | 
                <a href="https://intranet.railway.co.th/V3.0/onlineslip.php"><i class="fa fa-money"></i></i> สลิปออนไลน์</a>  
            </div>
        </div>
    </div></div>
<br>
<div align="center" style="vertical-align: middle; overflow:auto;">
<table align="center" width="1250">
    	<tr bgcolor="#ddeaff">
            <td align="right" style="border: thin solid #333333;">
                <div class="row">
                    <div class="col-7">

                    </div>
                    <div class="col right m-2">                        
                        <form name="form2" method="post" action="view_slip.php">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <button class="btn btn-outline-primary" title="แสดง Bar Code" type="button" data-toggle="modal" data-target="#mdBarCode">&nbsp;&nbsp;<i class="fa fa-barcode"></i>&nbsp;&nbsp;</button>
                                    <button class="btn btn-outline-primary" title="แสดง QR Code" type="button" data-toggle="modal" data-target="#mdQRCode">&nbsp;&nbsp;<i class="fa fa-qrcode"></i>&nbsp;&nbsp;</button>
                                    <button onclick="prnt();" class="btn btn-outline-primary" id="btPrint" data-toggle="tooltip" title="พิมพ์ใบแจ้งยอดเงินเดือนค่าจ้างและรายได้อื่น ๆ" type="button">&nbsp;&nbsp;<i class="fa fa-print"></i>&nbsp;&nbsp;</button> 
                                </div>
                                <select style="font-family:Sarabun;font-size:1.0em" class="form form-control" data-toggle="tooltip" title="เลือกเดือน" name="tbMonth" id="tbMonth" onChange="document.form2.action='view_slip.php';document.form2.target='_self';document.form2.submit();">
                                                                        <option value="6703" selected>มีนาคม 2567</option>

                                                                        <option value="6702">กุมภาพันธ์ 2567</option>

                                                                        <option value="6701">มกราคม 2567</option>

                                                                        <option value="6612">ธันวาคม 2566</option>

                                                                        <option value="6611">พฤศจิกายน 2566</option>

                                                                        <option value="6610">ตุลาคม 2566</option>

                                                                        <option value="6609">กันยายน 2566</option>

                                                                        <option value="6608">สิงหาคม 2566</option>

                                                                        <option value="6607">กรกฎาคม 2566</option>

                                                                        <option value="6606">มิถุนายน 2566</option>

                                                                        <option value="6605">พฤษภาคม 2566</option>

                                                                        <option value="6604">เมษายน 2566</option>

                                                                        <option value="6603">มีนาคม 2566</option>

                                                                        <option value="6602">กุมภาพันธ์ 2566</option>

                                                                        <option value="6601">มกราคม 2566</option>

                                                                        <option value="6512">ธันวาคม 2565</option>

                                                                        <option value="6511">พฤศจิกายน 2565</option>

                                                                        <option value="6510">ตุลาคม 2565</option>

                                                                        <option value="6509">กันยายน 2565</option>

                                                                        <option value="6508">สิงหาคม 2565</option>

                                                                        <option value="6507">กรกฎาคม 2565</option>

                                                                        <option value="6506">มิถุนายน 2565</option>

                                                                        <option value="6505">พฤษภาคม 2565</option>

                                                                        <option value="6504">เมษายน 2565</option>

                                                                        <option value="6503">มีนาคม 2565</option>

                                                                        <option value="6502">กุมภาพันธ์ 2565</option>

                                                                        <option value="6501">มกราคม 2565</option>

                                                                        <option value="6412">ธันวาคม 2564</option>

                                                                        <option value="6411">พฤศจิกายน 2564</option>

                                                                        <option value="6410">ตุลาคม 2564</option>

                                                                        <option value="6409">กันยายน 2564</option>

                                                                        <option value="6408">สิงหาคม 2564</option>

                                                                        <option value="6407">กรกฎาคม 2564</option>

                                                                        <option value="6406">มิถุนายน 2564</option>

                                                                        <option value="6405">พฤษภาคม 2564</option>

                                                                        <option value="6404">เมษายน 2564</option>

                                                                        <option value="6404">เมษายน 2564</option>

                                                                        <option value="6403">มีนาคม 2564</option>

                                                                        <option value="6402">กุมภาพันธ์ 2564</option>

                                                                        <option value="6401">มกราคม 2564</option>

                                                                        <option value="6312">ธันวาคม 2563</option>

                                                                        <option value="6311">พฤศจิกายน 2563</option>

                                                                        <option value="6310">ตุลาคม 2563</option>

                                                                        <option value="6309">กันยายน 2563</option>

                                                                        <option value="6308">สิงหาคม 2563</option>

                                                                        <option value="6307">กรกฎาคม 2563</option>

                                                                        <option value="6306">มิถุนายน 2563</option>

                                                                        <option value="6305">พฤษภาคม 2563</option>

                                                                        <option value="6304">เมษายน 2563</option>

                                                                        <option value="6303">มีนาคม 2563</option>

                                                                        <option value="6302">กุมภาพันธ์ 2563</option>

                                                                        <option value="6301">มกราคม 2563</option>

                                                                        <option value="6212">ธันวาคม 2562</option>

                                                                        <option value="6211">พฤศจิกายน 2562</option>

                                                                        <option value="6210">ตุลาคม 2562</option>

                                                                        <option value="6209">กันยายน 2562</option>

                                                                        <option value="6208">สิงหาคม 2562</option>

                                                                        <option value="6207">กรกฎาคม 2562</option>

                                                                        <option value="6206">มิถุนายน 2562</option>

                                                                        <option value="6205">พฤษภาคม 2562</option>

                                                                        <option value="6204">เมษายน 2562</option>

                                                                        <option value="6203">มีนาคม 2562</option>

                                                                        <option value="6202">กุมภาพันธ์ 2562</option>

                                                                        <option value="6201">มกราคม 2562</option>

                                                                        <option value="6112">ธันวาคม 2561</option>

                                                                        <option value="6111">พฤศจิกายน 2561</option>

                                                                        <option value="6110">ตุลาคม 2561</option>

                                                                        <option value="6109">กันยายน 2561</option>

                                                                        <option value="6108">สิงหาคม 2561</option>

                                                                        <option value="6107">กรกฎาคม 2561</option>

                                                                        <option value="6106">มิถุนายน 2561</option>

                                                                        <option value="6105">พฤษภาคม 2561</option>

                                                                        <option value="6104">เมษายน 2561</option>

                                                                        <option value="6103">มีนาคม 2561</option>

                                                                        <option value="6102">กุมภาพันธ์ 2561</option>

                                                                        <option value="6101">มกราคม 2561</option>

                                                                        <option value="6012">ธันวาคม 2560</option>

                                                                        <option value="6011">พฤศจิกายน 2560</option>

                                                                        <option value="6010">ตุลาคม 2560</option>

                                                                        <option value="6009">กันยายน 2560</option>

                                                                        <option value="6008">สิงหาคม 2560</option>

                                                                        <option value="6007">กรกฎาคม 2560</option>

                                                                        <option value="6006">มิถุนายน 2560</option>

                                                                        <option value="6005">พฤษภาคม 2560</option>

                                                                        <option value="6004">เมษายน 2560</option>

                                                                        <option value="6003">มีนาคม 2560</option>

                                                                        <option value="6002">กุมภาพันธ์ 2560</option>

                                                                        <option value="6001">มกราคม 2560</option>

                                                                        <option value="5912">ธันวาคม 2559</option>

                                                                        <option value="5911">พฤศจิกายน 2559</option>

                                                                        <option value="5910">ตุลาคม 2559</option>

                                                                        <option value="5909">กันยายน 2559</option>

                                                                        <option value="5908">สิงหาคม 2559</option>

                                                                        <option value="5907">กรกฎาคม 2559</option>

                                                                        <option value="5906">มิถุนายน 2559</option>

                                                                        <option value="5905">พฤษภาคม 2559</option>

                                                                        <option value="5904">เมษายน 2559</option>

                                                                        <option value="5903">มีนาคม 2559</option>

                                                                        <option value="5902">กุมภาพันธ์ 2559</option>

                                                                        <option value="5901">มกราคม 2559</option>

                                                                        <option value="5812">ธันวาคม 2558</option>

                                                                        <option value="5811">พฤศจิกายน 2558</option>

                                                                        <option value="5810">ตุลาคม 2558</option>

                                                                        <option value="5809">กันยายน 2558</option>

                                                                        <option value="5808">สิงหาคม 2558</option>

                                                                        <option value="5807">กรกฎาคม 2558</option>

                                                                        <option value="5806">มิถุนายน 2558</option>

                                                                        <option value="5805">พฤษภาคม 2558</option>

                                                                        <option value="5804">เมษายน 2558</option>

                                                                        <option value="5803">มีนาคม 2558</option>

                                                                        <option value="5802">กุมภาพันธ์ 2558</option>

                                                                        <option value="5801">มกราคม 2558</option>

                                                                        <option value="5712">ธันวาคม 2557</option>

                                                                        <option value="5711">พฤศจิกายน 2557</option>

                                                                        <option value="5710">ตุลาคม 2557</option>

                                                                        <option value="5709">กันยายน 2557</option>

                                                                        <option value="5708">สิงหาคม 2557</option>

                                                                        <option value="5707">กรกฎาคม 2557</option>

                                                                        <option value="5706">มิถุนายน 2557</option>

                                                                        <option value="5705">พฤษภาคม 2557</option>

                                                                        <option value="5704">เมษายน 2557</option>

                                                                        <option value="5703">มีนาคม 2557</option>

                                                                        <option value="5702">กุมภาพันธ์ 2557</option>

                                                                        <option value="5701">มกราคม 2557</option>

                                                                        <option value="5612">ธันวาคม 2556</option>

                                                                        <option value="5611">พฤศจิกายน 2556</option>

                                                                        <option value="5610">ตุลาคม 2556</option>

                                                                        <option value="5609">กันยายน 2556</option>

                                                                        <option value="5609">กันยายน 2556</option>

                                                                        <option value="5608">สิงหาคม 2556</option>

                                                                        <option value="5607">กรกฎาคม 2556</option>

                                                                        <option value="5606">มิถุนายน 2556</option>

                                                                        <option value="5605">พฤษภาคม 2556</option>

                                                                        <option value="5604">เมษายน 2556</option>

                                                                        <option value="5603">มีนาคม 2556</option>

                                                                        <option value="5602">กุมภาพันธ์ 2556</option>

                                                                        <option value="5601">มกราคม 2556</option>

                                                                        <option value="5512">ธันวาคม 2555</option>

                                                                        <option value="5511">พฤศจิกายน 2555</option>

                                                                        <option value="5510">ตุลาคม 2555</option>

                                                                        <option value="5509">กันยายน 2555</option>

                                                                        <option value="5508">สิงหาคม 2555</option>

                                                                        <option value="5507">กรกฎาคม 2555</option>

                                                                        <option value="5506">มิถุนายน 2555</option>

                                                                        <option value="5505">พฤษภาคม 2555</option>

                                                                        <option value="5504">เมษายน 2555</option>

                                                                        <option value="5503">มีนาคม 2555</option>

                                                                        <option value="5502">กุมภาพันธ์ 2555</option>

                                                                        <option value="5501">มกราคม 2555</option>

                                                                        <option value="5412">ธันวาคม 2554</option>

                                                                        <option value="5411">พฤศจิกายน 2554</option>

                                                                        <option value="5410">ตุลาคม 2554</option>

                                                                        <option value="5409">กันยายน 2554</option>

                                                                        <option value="5408">สิงหาคม 2554</option>

                                                                        <option value="5407">กรกฎาคม 2554</option>

                                                                        <option value="5406">มิถุนายน 2554</option>

                                                                        <option value="5405">พฤษภาคม 2554</option>

                                                                        <option value="5404">เมษายน 2554</option>

                                                                        <option value="5403">มีนาคม 2554</option>

                                                                        <option value="5402">กุมภาพันธ์ 2554</option>

                                                                        <option value="5401">มกราคม 2554</option>

                                                                        <option value="5312">ธันวาคม 2553</option>

                                                                        <option value="5311">พฤศจิกายน 2553</option>

                                                                        <option value="5310">ตุลาคม 2553</option>

                                                                        <option value="5309">กันยายน 2553</option>

                                                                        <option value="5308">สิงหาคม 2553</option>

                                                                        <option value="5307">กรกฎาคม 2553</option>

                                                                        <option value="5306">มิถุนายน 2553</option>

                                                                        <option value="5305">พฤษภาคม 2553</option>

                                                                        <option value="5304">เมษายน 2553</option>

                                                                        <option value="5303">มีนาคม 2553</option>

                                                                        <option value="5302">กุมภาพันธ์ 2553</option>

                                                                        <option value="5301">มกราคม 2553</option>

                                                                    </select>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </td>
        </tr>
    </table>
<script>
function prnt(){
    var p = document.form2;
    p.action="slip.php";
    p.target="print";
    p.tbMonth=$("#tbMonth").val();
    // alert($("#dlYear").val());
    p.submit();
}
</script>
    
    <table border="0" cellpadding="0" cellspacing="0" style="font-family: Sarabun; letter-spacing: normal; orphans: auto; text-indent: 0px; text-transform: none; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; border-left-width: 1px; border-left-style: solid; border-left-color: rgb(168, 206, 97); border-right-width: 1px; border-right-style: solid; border-right-color: rgb(168, 206, 97); background-color: rgb(247, 247, 249);" width="1250">
        <tbody><tr>
            <td background="images/BGSlip2022_1250.png" height="516" style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68);" valign="top">
                <div align="center">
                    <table border="0" cellpadding="0" cellspacing="0" height="508" width="1225" style="vertical-align: bottom">
                        <tbody><tr>
                            <td width="102" height="39" valign="middle" class="auto-style12" style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;"></td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" width="122" class="auto-style12">
                                <div align="center">
                                    <span id="lblDat1"></span>
                                    <span id="lblDEPART">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 06</span>
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" width="122" class="auto-style12">
                                <div align="right">
                                    <span id="lblDat2"></span>
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" width="127" class="auto-style12">
                                <div align="center">
                                    <span id="lblLEVEL_1"></span>
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" width="126" class="auto-style12">
                                <div align="center">
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" width="126" class="auto-style12">
                                <div align="center" class="style1" style="font-family: Sarabun; font-size: 12px; color: rgb(68, 68, 68); font-weight: bold;">
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" width="125" class="auto-style12">
                                <div align="center">
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); font-weight: 800; vertical-align: bottom;" valign="bottom" width="126" class="auto-style12">
                                <div align="center">
                                    <span id="lblBANK">ธนาคาร</span>
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" width="124" class="auto-style12">
                                <div align="center">
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" width="125" class="auto-style12">
                                <div align="center">
                                </div>
                            </td>
                        </tr>
                        <tr style="height: 20px;">
                            <td height="30" class="auto-style23" style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;"></td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style23">
                                <div align="left">
                                    <span id="lblDat3"></span>
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style23">
                                <div align="left">
                                    <span id="lblLEVEL_3">330</span>
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style23">
                                <div align="left">
                                    <span id="lblDat4"> &nbsp;&nbsp;  </span>
                                    <span id="lblLEVEL_4"></span>
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style23">
                                <div align="center">
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style23">
                                <div align="center">
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style23">
                                <div align="center">
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style23">
                                <div align="right">
                                    &nbsp;&nbsp; 
                            <span id="lblMARITAL">5</span>
                                    &nbsp;&nbsp;&nbsp;
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style23">
                                <div align="right">
                                    &nbsp;&nbsp;&nbsp;
                            <span id="lblNOLEARN">1</span>
                                    &nbsp;&nbsp;&nbsp;
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style23">
                                <div align="left">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <span id="lblLEARN">0</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td height="48" class="auto-style24" style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;"></td>
                            <td colspan="3" style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style24">
                                <div align="center">
                                    <span id="lblNAME" style="font-family:Sarabun;font-size:1.1em"><b>นาย อนิรุตติ์  ตุ้ยเล็ก</b></span>
                                </div>
                            </td>
                            <td colspan="2" style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style24">
                                <div align="left">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                           &nbsp; &nbsp;<span id="lblPOSITION">335</span>
                                    &nbsp;/ 
                            <span id="lblPERS_CLASS" style="font-family:Sarabun;font-size:1.1em">06</span>
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style24">
                                <div align="center"><span id="lblEMPNO" style="font-family:Sarabun;font-size:1.1em"><b>2043680</b></span>
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style24">
                                <div align="right">
                                    <span id="lblSALARY" style="font-family:Sarabun;font-size:1.1em"><b>20,030.00</b></span>
                                    &nbsp;
                                </div>
                            </td>
                            <td colspan="2" style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style24">
                                <div align="center">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="lblWORK_DATE" style="font-family:Sarabun;font-size:1.1em"><b>มีนาคม 2567</b></span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" class="auto-style21"></td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style21">
                                <div align="right">
                                    &nbsp;
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style21">
                                <div align="right">
                                    &nbsp;
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style21">
                                <div align="center">
                                    <span id="lblSPECIAL">งพช</span>
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style21">
                                <div align="center">
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style21">
                                <div align="center">
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style21">
                                <div align="center">
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style21">
                                <div align="center">
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style21">
                                <div align="center">
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style21">
                                <div align="right">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td height="47" class="auto-style19" style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;"></td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style19">
                                <div align="center">
                                    <span id="lblSALARY0">20,030.00</span>
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style19">
                                <div align="center">
                                    <span id="lblREPLACE"></span>
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style19">
                                <div align="center">
                                    <span id="lblDRIVER"></span>
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style19">
                                <div align="center">
                                    <span id="lblSKB">400.00</span>
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style19">
                                <div align="center">
                                    <span id="lblWAR">0.61</span>
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style19">
                                <div align="center">
                                    <span id="lblOT1">6,008.94</span>
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style19">
                                <div align="center">
                                    <span id="lblOT3"></span>
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style19">
                                <div align="center">
                                    <span id="lblALLOWANCE"></span>
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style19">
                                <div align="right">
                                    <span id="lblTOTAL_INC1">26,439.55</span>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td height="61" class="auto-style25" style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;"></td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style25">
                                <div align="center">
                                    <span id="lblBNK_05"></span>
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style25">
                                <div align="center">
                                    <span id="lblBNK_03"></span>
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style25">
                                <div align="center">
                                    <span id="lblBNK_04"></span>
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style25">
                                <div align="center">
                                    <span id="lblBNK_01"></span>
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style25">
                                <div align="center">
                                    <span id="lblSOUTH"></span>
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style25">
                                <div align="center">
                                    <span id="lblOT2"></span>
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style25">
                                <div align="center">
                                    <span id="lblSPC">9,680.20</span>
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style25">
                                <div align="center">
                                    <span id="lblOTHER1">3.84</span>
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style25">
                                <div align="right">
                                    <span id="lblTOTAL_INC2">9,684.04</span>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                </div>
                            </td>
                        </tr>
                        <tr style="height: 60px;">
                            <td height="63" class="auto-style27" style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;"></td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style27">
                                <div align="center">
                                    <span id="lblPROV">1,001.50</span>
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style27">
                                <div align="center">
                                    <span id="lblPAY_LOAN_AMT"></span>
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style27">
                                <div align="center">
                                    <span id="lblLOAN_H_CONS"></span>
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style27">
                                <div align="center">
                                    <span id="lblLOAN_LH_BUY"></span>
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style27">
                                <div align="center">
                                    <span id="lblLOAN_H_REPAIR"></span>
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style27">
                                <div align="center">
                                    <span id="lblLOAN_SHARE">10,691.00</span>
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style27">
                                <div align="center">
                                    <span id="lblLOAN_LAND"></span>
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style27">
                                <div align="center">
                                    <span id="lblLOAN_REDEEM"></span>
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style27">
                                <div align="right">
                                    <span id="lblTOTAL_OUT1">11,692.50</span>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td height="30" class="auto-style26" style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;"></td>
                            <td style="font-family: Sarabun; font-size: 14px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style26">
                                <div align="right">
                                    <span id="lblELEC_DEDUCT1"></span>
                                    &nbsp;
                              </div>
                          </td>
                            <td style="font-family: Sarabun; font-size: 14px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style26">
                                <div align="right">
                                    <span id="lblELEC_DEDUCT2"></span>
                                    &nbsp;
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 14px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style26">
                                <div align="right">
                                    &nbsp;&nbsp;<span id="lblWATER_DEDUCT1"></span>
                                    &nbsp;
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 14px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style26">
                                <div align="right">
                                    <span id="lblWATER_DEDUCT2"></span>
                                    &nbsp;&nbsp;&nbsp;
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style26">
                                <div align="center">
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style26">
                                <div align="center">
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style26">
                                <div align="center">
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style26">
                                <div align="center">
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style26">
                                <div align="right">
                                </div>
                            </td>
                        </tr>
                        <tr>
                          <td height="29" class="auto-style28" style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;"></td>
                            <td align="center" valign="top" class="auto-style28" style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;">
                                    <span id="lblELEC_MN1"></span>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style28">
                                <div align="center">
                                    <span id="lblELEC_MN2"></span>
                              </div>
                          </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style28">
                                <div align="center">
                                    <span id="lblWATER_MN1"></span>
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style28">
                                <div align="center">
                                    <span id="lblWATER_MN2"></span>
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style28">
                                <div align="center">
                                    <span id="lblDEDUCT_GUA"></span>
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style28">
                                <div align="center">
                                    <span id="lblHOSPITAL"></span>
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style28">
                                <div align="center">
                                    <span id="lblINSUFFICIENT"></span>
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style28">
                                <div align="center">
                                    <span id="lblREIMBURSE"></span>
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style28">
                                <div align="right">
                                    <span id="lblTOTAL_OUT2"></span>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td height="61" class="auto-style29" style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;"></td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style29">
                                <div align="center">
                                    <span id="lblFOUNDAT"></span>
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style29">
                                <div align="center">
                                    <span id="lblDEVIDE_COURT"></span>
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style29">
                                <div align="center">
                                    <span id="lblDEVIDE_FAMILY"></span>
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style29">
                                <div align="center">
                                    <span id="lblTAX"></span>
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style29">
                                <div align="center">
                                    <span id="lblCUT_SALARY"></span>
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style29">
                                <div align="center">
                                    <span id="lblROUND_MONET">0.09</span>
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style29">
                                <div align="center">
                                    <span id="lblLOAN_BNK"></span>
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style29">
                                <div align="center">
                                    <span id="lblDEDUCT_OTHER"></span>
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style29">
                                <div align="right">
                                    <span id="lblTOTAL_OUT3">0.09</span>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td height="40" class="auto-style30" style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;"></td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style30"></td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style30"></td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style30"></td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style30"></td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style30"></td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style30"></td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style30"></td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style30"></td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom" class="auto-style30">
                                <div align="right">
                                    <span id="lblNET_AMT" style="font-family:Sarabun;font-size:1.0em"><b>24,431.00</b></span>
									&nbsp;&nbsp;&nbsp;&nbsp;
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td height="25" style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;">&nbsp;</td>
                            <td colspan="4" style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom">
                                <div align="left">
                                    &nbsp;หมายเลขอ้างอิงข้อมูล : 
                            <span id="lblReference" style="font-family:Sarabun;font-size:0.8em">644A-80652232080-1D5FF-137D747</span>
                                </div>
                            </td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom">&nbsp;</td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom">&nbsp;</td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom">&nbsp;</td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom">&nbsp;</td>
                            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68); vertical-align: bottom;" valign="bottom">&nbsp;</td>
                        </tr>
                    </tbody></table>
              </div>
            </td>
        </tr>
        <tr>
            <td style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68);" width="35">&nbsp;</td>
        </tr>
    </tbody></table>
    <table border="0" cellpadding="0" cellspacing="0" style="font-family: Sarabun; letter-spacing: normal; orphans: auto; text-indent: 0px; text-transform: none; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; border-left-width: 1px; border-left-style: solid; border-left-color: rgb(168, 206, 97); border-right-width: 1px; border-right-style: solid; border-right-color: rgb(168, 206, 97); border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(168, 206, 97); background-color: rgb(247, 247, 249);" width="1250">
        <tbody><tr>
            <td height="35" style="font-family: Sarabun; font-size: 16px; color: rgb(68, 68, 68);">
                <div align="center">
                    <font color="#333333" style="font-family:Sarabun;font-size:1.0em"><b>ฝ่ายการเงินและการบัญชี (ผตบ.) การรถไฟแห่งประเทศไทย TEL.02-220-4319</b></font>
                </div>
            </td>
        </tr>
    </tbody>
	</table>


    <!-- The Modal -->
    <div class="modal fade" id="mdBarCode">
        <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
        
            <!-- Modal Header -->
           <!-- <div class="modal-header alert-primary">
            <h4 class="modal-title">สแกนบาร์โค้ด</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>-->
            
            <!-- Modal body -->
            <!--<div class="modal-body" style="padding-left: 0px;padding-right: 0px;">
            <img src="../barcode/html/image.php?filetype=PNG&dpi=72&scale=1&rotation=0&font_family=Arial.ttf&font_size=8&text=644A-80652232080-1D5FF-137D747&thickness=30&checksum=1&code=BCGcode39" alt="Barcode Image" />            </div> -->
            
            <!-- Modal footer -->
          <!--  <div class="modal-footer">
                <a style="font-size: 12px;" href="check.php">สามารถตรวจสอบได้ที่ https://intranet.railway.co.th/slip/check.php</a>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            
        </div>
        </div>
    </div> -->
        <!-- The Modal -->
        <div class="modal fade" id="mdQRCode">
        <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
        
            <!-- Modal Header -->
           <!-- <div class="modal-header alert-primary">
            <h4 class="modal-title">สแกนรับสลิปเงินเดือน</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div> -->
            
            <!-- Modal body -->
        <!--    <div class="modal-body">
            <img src="../QRCode/QRCode.php?level=H&size=6&data=https://intranet.railway.co.th/slip/check.php?ref=644A-80652232080-1D5FF-137D747" width="150" alt="view">
            </div> -->
            
            <!-- Modal footer -->
        <!--    <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div> -->
            
        </div>
        </div>
    </div>


</div>
<br>
<div class="card-footer">
	<div align="center" style="font-family:Sarabun;font-size:0.8em">
		สงวนลิขสิทธิ์ &copy; การรถไฟแห่งประเทศไทย 2019<br>
		เลขที่ 1 ถนน รองเมือง แขวงรองเมือง เขตปทุมวัน กรุงเทพฯ 10330<br>
		<a href="https://intranet.railway.co.th/">https://intranet.railway.co.th</a>
    </div>
</div></body>
</html>
     
<!-- ดาวโหลดรายงานในรูปแบบ PDF <a href="MyPDF/MyPDF.pdf">คลิกที่นี้</a> -->
<!--  google-analytics ปลั๊กอิน -->
<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-82438075-1', 'auto');
	  ga('send', 'pageview');

</script>

