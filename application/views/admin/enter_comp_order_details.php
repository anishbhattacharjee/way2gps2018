<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>GPS</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!--basic styles-->

		<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="<?php echo base_url();?>assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!--page specific plugin styles-->

		<!--fonts-->

		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

		<!--ace styles-->

		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-responsive.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-ie.min.css" />
		<![endif]-->

		<!--inline styles related to this page-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false">
</script>
<script>
function initialize()
{
var mapProp = {
  center:new google.maps.LatLng(51.508742,-0.120850),
  zoom:5,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };
var map=new google.maps.Map(document.getElementById("googleMap")
  ,mapProp);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
	</head>
	
	
		<!--basic scripts-->

		<!--[if !IE]>-->

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

		<!--<![endif]-->

		<!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

		<!--[if !IE]>-->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!--<![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

		<!--page specific plugin scripts-->

		<!--[if lte IE 8]>
		  <script src="<?php echo base_url();?>assets/js/excanvas.min.js"></script>
		<![endif]-->

		<!--ace scripts-->

		<script src="<?php echo base_url();?>assets/js/ace-elements.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/ace.min.js"></script>
		

		<!--inline scripts related to this page-->

	<script src="<?php echo base_url();?>assets/js/fuelux/fuelux.wizard.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.validate.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/additional-methods.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/select2.min.js"></script>


<?php include 'include/adminheader.php';?>

<div class="main-container container-fluid" id="divshows">
			<a class="menu-toggler" id="menu-toggler" href="#">
				<span class="menu-text"></span>
			</a>


		<?php include 'include/sidebar2.php';?>
	

	<script type="text/javascript">



function numbersonly(e){

/*var intsOnly = /^\d+$/,
    stri = $('#subscp').val();
if(intsOnly.test(stri)) {
  // alert('its valid');   
}
else{
	 alert('its not valid');   
	 $('#subscp').val('');
	  $('#subscp').focus();
}

*/
var unicode=e.charCode? e.charCode : e.keyCode



if (unicode!=8){ //if the key isn't the backspace key (which we should allow)



if (unicode<48||unicode>57)







return false //if not a number



//disable key press



}



}



</script>



	<div class="main-content">

	<div class="breadcrumbs" id="breadcrumbs">

	<ul class="breadcrumb">

	<li>

	<i class="icon-home home-icon"></i>

	<a href="#">Home</a>



	<span class="divider">

	<i class="icon-angle-right arrow-icon"></i>

	</span>

	</li>



	<li class="active">Gps</li>

	</ul><!--.breadcrumb-->



	<div class="nav-search" id="nav-search">

	

	</div><!--#nav-search-->

	</div>



	<div class="page-content">

	<div class="page-header position-relative">

	<h1>

	Enter Order Details

	<small>

	<i class="icon-double-angle-right"></i>

	

	</small>

	</h1>

	</div><!--/.page-header-->



	<div class="row-fluid">

	<div class="span12">

	<?php

	if(isset($msg1))

	{?>

	<div class='alert alert-block alert-success'>

	<button type="button" class="close" data-dismiss="alert">

	<i class="icon-remove"></i>

	</button>



	<i class="icon-ok green"></i>

	<?php

	echo $msg1." For $fname ".$ctypes;?>

	</div>

	<?php

	}

	else

	{

	echo '';

	}

	

	?>

	<!--PAGE CONTENT BEGINS-->

<div id="costdiv">



</div>

	<div class="row-fluid">

	<div class="span12">

	<div class="widget-box">

	<div class="widget-header widget-header-blue widget-header-flat">

	<h4 class="lighter">Please Fill The Following Details</h4>



	<div class="widget-toolbar">

	<label>

	<small class="green">

	<b></b>

	</small>



	

	<span class="lbl"></span>

	</label>

	</div>

	</div>

	



	<div class="widget-body">

	<div class="widget-main">

	

	<div class="row-fluid">


	<div id="fuelux-wizard" class="row-fluid hide" data-target="#step-container">

	<ul class="wizard-steps">

	<!--	<li data-target="#step1" class="active">

	<span class="step">1</span>

	<span class="title">Personal Info</span>

	</li>



	<li data-target="#step2">

	<span class="step">2</span>

	<span class="title">Document Info</span>

	</li>

-->

	<li data-target="#step1" class="active">

	<span class="step">1</span>

	<span class="title">Order Info</span>

	</li>



	<li data-target="#step2">

	<span class="step">2</span>

	<span class="title">Cash Payment</span>

	</li>
	<li data-target="#step3">

	<span class="step">3</span>

	<span class="title">Cheque Payment</span>

	</li>
	<li data-target="#step4">

	<span class="step">4</span>

	<span class="title">Online Transfer</span>

	</li>
		<li data-target="#step5">

	<span class="step">5</span>

	<span class="title">Online Payment</span>

	</li>

	</ul>

	</div>



	<hr />

	

	<div class="step-content row-fluid position-relative" id="step-container">

	<form class="form-horizontal" action="<?php echo base_url();?>customer_registration/addd" method="POST" >
	
	<?php
	$cq=mysql_query("select * from customers where customer_id='$cid'");
	while($rcq=mysql_fetch_array($cq))
	{
	$type=$rcq['type'];
	} ?>
	
	
		<?php
												$pmq=	mysql_query("SELECT * FROM `promo_codes` where status='valid' order by  rand() limit 1");
												$rpmq=mysql_fetch_array($pmq);
												
													?>
	
<input type="hidden" name="cid" id="cid" value="<?php echo $cid;?>"/>

<style>

fieldsett label

{

	float: left;

width: 160px;

padding-top: 5px;

text-align: right;

padding: 0px 14px 0px 0px;

}

fieldsett span

{

cursor: pointer;



}

.remove

{

	margin-left: 400px;	

}

</style>

	<div class="step-pane active" id="step1">

	<div class="row-fluid">
				<?php
							
								 if($state=='Karnataka'||$state=='karnataka')
								{
									?>
								<?php }
								else
								{
									?>
										<div class="control-group">

									<label class="control-label" for="form-input-readonly"></label>



									<div class="controls">

									<div class="span12">

									<div style="">

										<input type="radio" id="simyes" name="sim" value="Yes" onclick="changevat();">

										<label class="lbl" for="id-disable-check">2% CST</label>

										&nbsp; &nbsp;

										<input type="radio" id="simno" name="sim" value="No" onclick="changevat();">

										<label class="lbl" for="id-disable-check" >14.5% CST</label>

									</div>

									</div>

									</div>

								</div>	
									<?php
								} ?>	
		
	
<div style="width:1200px;overflow-x:scroll;"> 

   <div style="width:1800px;">
	<table>

	
<tbody>

<tr><th style="margin-left: 5px;float: left;">Category Type</th><th style="margin-left: 78px;float: left;">Device Type</th><th style="margin-left: 66px;float: left;">Subscription Months</th><th style="margin-left: 26px;float: left;">Permonth Cost</th><th style="margin-left: 22px;float: left;">Sub Cost</th><th style="margin-left: 62px;float: left;">Dev Cost</th><th style="margin-left: 58px;float: left;">Installation Cost</th><th style="margin-left: 19px;float: left;">Qty</th><th style="margin-left: 41px;float: left;">Total</th><th style="margin-left: 86px;float: left;">S Tax</th><th style="margin-left: 35px;float: left;"><?php
							
								 if($state=='Karnataka'||$state=='karnataka')
								{
									?>VAT
								<?php }
								else
								{
									?>
									CST
									<?php
								} ?>
									</th><th style="margin-left: 43px;float: left;">Grand Total</th><th style="margin-left: 47px;float: left;">Choose Network</th><th style="margin-left: 44px;float: left;">Charge</th>
								<th style="margin-left: 20px;float: left;" id="pca"></th>
								
								</tr>

	</tbody>


</table>	

	<fieldsett>

      <div id="IPOX">

            <p style="border-bottom: 1px solid #000;line-height: 4em;">	

	

	<select name="category_id" id="category_id" onchange="getdevicetype(this,this.value);getinstcost(this,this.value);" class="cat" style="width:150px;text-transform: capitalize;">

	<option>Select Category</option>

	<?php

	$sq=mysql_query("select * from gps_categories");

	while($sqs=mysql_fetch_array($sq))

	{

	?>

	<option value="<?php echo $sqs['category_id'];?>" ><?php echo $sqs['category_type'];?></option>	

	<?php

	}

	?>

	

	</select>

	<select name="device_type" id="device_type" onchange="getmodel(this,this.value);getdevicecost(this,this.value);getmargin(this,this.value);getdevpromo(this,this.value);" class="dev" style="width:150px;">

	

	

	</select>

	
	<input type="text" name="subscp" id="subscp"  class="subscp" style="width:130px;"  onkeypress="return numbersonly(event);" onchange="valmonth(this);" value="0"/>	
	
	<input type="text" name="a" id="a"  class="costmonth" style="width:100px;" onkeyup="getcc(this);" value="0"/>	
	<input type="text" name="aa" id="aa"  class="subcost" style="width:100px;" value="0" readonly=""/>	
	<input type="text" name="a" id="a"  class="devcost" style="width:100px;" value="0"/>	
	<input type="text" name="a" id="a"  class="instcharge" style="width:100px;" value="0"/>	

	<input type="text" name="noofdevice" id="noofdevice" onkeypress="return numbersonly(event);gettotal(this);getsummary();" style="width:50px;" class="noofdevice" onkeyup="gettotal(this);getsummary();" value="0"/>
	<?php
	$ts=mysql_query("select * from settings");
	
	while($rts=mysql_fetch_array($ts))

	{

	$vat=$rts['vat_percentage'];

	$tax=$rts['service_tax_percentage'];

	}?>
	
	
	
	<input type="text" name="ba" id="ba"  class="totcost" value="0" style="width: 101px;" readonly=""/>	
	<input type="text" name="ostax" id="ostax"  class="servicetax" value="<?php echo $tax;?>" style="width:50px" readonly=""/>
	
	<input type="text" name="ovat" id="ovat"  class="vat" value="<?php echo $vat;?>" style="width:50px" readonly=""/>

	<input type="text" name="ba" id="ba"  class="grandtotal" value="0" style="width: 101px;" readonly=""/>

	<input type="hidden" name="ab" id="ab"  class="sercharge" value="0"/>	
	<input type="hidden" name="ab" id="ab"  class="vatcharge" value="0"/>	
	<input type="hidden" name="ab" id="ab"  class="devname"/>	
	<input type="hidden" name="ab" id="ab"  class="marginval"/>	
<select name="s" id="s" onchange="getsimcharge(this,this.value);getsummary();" class="network" style="width:150px;text-transform: capitalize;">

									<option value="Choose Sim">Choose Sim</option>

									<?php

									$sq=mysql_query("select * from network");

									while($sqs=mysql_fetch_array($sq))

									{

										?>

									<option value="<?php echo $sqs['id'];?>" id="<?php echo $sqs['charge'];?>"><?php echo $sqs['network_name'];?></option>	

										<?php

									}

									?>

									

									</select>
	<input type="text" name="sc" id="sc"  class="simcharge" value="0" style="width: 50px;" onkeyup="gettotalcharge(this);getsummary();"/>
	
	<input type="text" name="devdiscount" id="devdiscount" style="width:90px;visibility:hidden;" onchange="checkdevicepromo(this,this.value);getsummary();" />
	 <span id="erdiv" style="color:red;"></span>
	  </p>

        </div>

        <p><span class="add">Add another row</span>



        </p>

    </fieldsett>	
	</div>	
	</div>	

		<div class="control-group">
				<label class="control-label">Packing & Forwarding </label>
				<div class="controls"> 
				<input type="text" name="packing" id="packing" value="0" onkeyup="getsummary();"/>
				</div>
				</div>
				<div class="control-group">
				<label class="control-label">Freight  </label>
				<div class="controls"> 
				<input type="text" name="freight" id="freight" value="0"  onkeyup="getsummary();"/>
				</div>
				</div>
				<div class="control-group">
				<label class="control-label">SMS Package   </label>
				<div class="controls"> 
				<input type="text" name="smspackage" id="smspackage" value="0"  onkeyup="getsummary();"/>
				</div>
				</div>
				<div class="control-group">
				<label class="control-label">Video Streaming </label>
				<div class="controls"> 
				<input type="text" name="video" id="video" value="0"  onkeyup="getsummary();"/>
				</div>
				</div>
	

	 <div class="control-group">



	<label class="control-label">Total Subscription Costing</label>



	<div class="controls"> 

<!--<input type="text" name="finalcost" id="finalcost" value="0" onclick="getgrandtotal();" readonly=""/>-->
<input type="text" name="totsubcost" id="totsubcost" value="0" readonly="" onclick="getsummary();"/>



</div>

</div>
 <div class="control-group">



	<label class="control-label">Total Installation Costing</label>



	<div class="controls"> 


<input type="text" name="totintcost" id="totintcost" value="0" readonly="" onclick="getsummary();"/>



</div>

</div>
 <div class="control-group">



	<label class="control-label">Total Device Costing</label>



	<div class="controls"> 


<input type="text" name="totdevcost" id="totdevcost" value="0" readonly="" onclick="getsummary();"/>



</div>

</div>
 <div class="control-group">



	<label class="control-label">Service Cost(<?php echo $tax;?>%)</label>



	<div class="controls"> 


<input type="text" name="sercost" id="sercost" value="0" readonly="" onclick="getsummary();"/>



</div>

</div>
 <div class="control-group">



	<label class="control-label" id="Label2">
	<?php
							
								 if($state=='Karnataka'||$state=='karnataka')
								{ ?>
	
	
	VAT(<?php echo $vat."%";?>)
	
	<?php }
	else
	
	{
		?>
		CST(<?php echo $vat."%";?>)
		<?php
	}
	 ?>
	
	</label>



	<div class="controls"> 


<input type="text" name="vatcost" id="vatcost" value="0" readonly="" onclick="getsummary();"/>



</div>

</div>
 <div class="control-group">



	<label class="control-label">Final Cost</label>



	<div class="controls"> 


<input type="text" name="finalcost" id="finalcost" value="0" readonly="" onclick="getsummary();"/>
<input type="hidden" name="finalcostt" id="finalcostt" value="0" readonly="" onclick="getsummary();"/>



</div>

</div>



<div class="control-group">

									<label class="control-label" for="form-field-1">Enter Promo Code</label>

									<div class="controls">	

						  <input type="hidden" name="codeid" id="codeid" value="<?php echo $rpmq['code_id'];?>"/>
						  <input type="text" name="code" id="code" onchange="reducecost();"/>

									</div>

									</div>
<div class="control-group">
<label class="control-label" for="form-input-readonly">Need Engineer</label>
<div class="controls">
<div class="span12">
<div style="">
<input type="radio" id="simyeseng" name="sim" value="Yes">
<label class="lbl" for="id-disable-check"> Yes</label>
&nbsp; &nbsp;
<input type="radio" id="simnoeng" name="sim" value="No">
<label class="lbl" for="id-disable-check" >No</label>
</div>
</div>
</div>
</div>
	

	<div class="control-group">

	<label class="control-label" for="form-input-readonly"></label>



	<div class="controls">

	<div class="span12">



	<input type="radio" id="adv" name="type" value="advance" onclick="getbtndiv();">

	<label class="lbl" for="id-disable-check"> Advance</label>
	<input type="radio" id="ful" name="type" value="fullpayment" onclick="getbtndiv();">

	<label class="lbl" for="id-disable-check" >Full Payment</label>
	
	<input type="radio" id="foc" name="type" value="foc" onclick="getbtndivv();">

										<label class="lbl" for="id-disable-check" >FOC</label>
									
<input type="radio" id="pmntdel" name="type" value="pmntdel" onclick="getbtndivvv();">

										<label class="lbl" for="id-disable-check" >Payment against Delivery/Installation</label>


	</div>

	</div>

	</div>
	
	
			<div class="control-group">

									<label class="control-label" for="form-input-readonly"></label>



									<div class="controls">
										<input type="button" value="submit" id="submdiv" class="btn btn-success" style="display:none;" onclick="storefocdata();"/>
										
										</div>
										</div>
	
	<div class="control-group">

									<label class="control-label" for="form-input-readonly"></label>



									<div class="controls">
										<input type="button" value="submit" id="paysubmdiv" class="btn btn-success" style="display:none;" onclick="storefocdata();"/>
										
										</div>
										</div>
	 
	<div class="control-group">

	<label class="control-label" for="form-field-1">Amount To Be Paid</label>

	<div class="controls">	

<!--return isNumberKey(event)-->
	 <input type="text" name="amount" id="amount" onkeypress="return numbersonly(event);"   onkeyup="putamount(this.value);" />
	   <input type="text" name="advamount" id="advamount" onkeypress="return numbersonly(event);"   onkeyup="putamount(this.value);" onchange="enableblock(this.value);" style="visibility:hidden;margin-left: -223px;"/>

	</div>

	</div>


	

	    <div class="control-group">

	<label class="control-label" for="form-field-1">Created By</label>

	<div class="controls">

	<?php

	 $un=$this->session->userdata('username'); 

	

	$q=mysql_query("select * from admin_data where email_id='$un'");



	while($re=mysql_fetch_array($q))



	{



	$first=$re['name'];
	$aid=$re['id'];
	$types=$re['user_type'];

	

	} ?>

	<input type="hidden" name="created_by" id="created_by" value="<?php echo $aid;?>" readonly="true"/>
	<input type="text" name="createe" id="createe" value="<?php echo $types;?>" readonly="true"/>

	</div>

	</div>

	<div class="control-group">

	<label class="control-label" for="form-field-1">Created Date Time</label>

	<div class="controls">

	<input type="text" name="created_dt" id="created_dt" value="<?php echo date('d-m-Y h:i:s',strtotime('+330 minutes'));?>" readonly="true"/>

	</div>

	</div>
	
	
	</div>	

	</div>



	<div class="step-pane" id="step2">

	<div class="row-fluid">
	<div class="control-group">

	<label class="control-label" for="form-input-readonly">Do You Want to Pay through Cash</label>



	<div class="controls">

	<div class="span12">

	<input type="radio" id="cashyestype" name="cashtype" value="Yes" onclick="cashpaymentstatus();">

	<label class="lbl" for="id-disable-check"> Yes</label>

	&nbsp; &nbsp;

	<input type="radio" id="cashnotype" name="cashtype" value="No" onclick="cashpaymentstatus();clearcash();">

	<label class="lbl" for="id-disable-check" >No</label>

	</div>

	</div>

	</div>
	<div style="display:none" id="cashpaymentdiv">
	
	<div class="control-group" id="advcspd" style="display:none;">

	<label class="control-label" for="form-field-1">Advance Amount To Be Paid</label>

	<div class="controls">	

	  <input type="text" name="amountcspd" id="amountcspd" readonly="" value="0"/>

	</div>

	</div>
	
	<div class="control-group">

	<label class="control-label" for="form-field-1">Paying Cash Amount</label>

	<div class="controls">	

	  <input type="text" name="cashamount" id="cashamount" onkeyup="getcashamount();" value="0"/>

	</div>

	</div>
	<div class="control-group" id="advcsped" style="display:none;">

	<label class="control-label" for="form-field-1">Advance Amount Pending</label>

	<div class="controls">	

	  <input type="text" name="amountcsped" id="amountcsped" readonly="" value="0"/>

	</div>

	</div>
	<div class="control-group" id="advcspaid" style="display:none;">

	<label class="control-label" for="form-field-1">Advance Amount Paid</label>

	<div class="controls">	

	  <input type="text" name="amountcsped" id="amountcspaid" readonly="" value="0"/>

	</div>

	</div>
	<div class="control-group">

	<label class="control-label" for="form-field-1">Pending Amount</label>

	<div class="controls">	

	  <input type="text" name="cashpending" id="cashpending" readonly=""/>

	</div>

	</div>
	
	<div class="control-group">

	<label class="control-label" for="form-field-1">Total Amount to be paid</label>

	<div class="controls">	

	  <input type="text" name="totlpayablecash" id="totlpayablecash" readonly=""/>

	</div>

	</div>
	<div class="control-group">

	<label class="control-label" for="form-field-1">Paid Amount</label>

	<div class="controls">	

	  <input type="text" name="cashpaid" id="cashpaid" readonly=""/>

	</div>

	</div>
	
	</div>
	
	</div>

	</div>
	
	
	<div class="step-pane" id="step3">

	<div class="row-fluid">
	<div class="control-group">

	<label class="control-label" for="form-input-readonly">Do You Want to Pay through Cheque</label>



	<div class="controls">

	<div class="span12">

	<input type="radio" id="chequeyestype" name="chequetype" value="Yes" onclick="chequepaymentstatus();">

	<label class="lbl" for="id-disable-check"> Yes</label>

	&nbsp; &nbsp;

	<input type="radio" id="chequenotype" name="chequetype" value="No" onclick="chequepaymentstatus();clearcheque();">

	<label class="lbl" for="id-disable-check" >No</label>

	</div>

	</div>

	</div>
	<div style="display:none" id="chequepaymentdiv">
	
	<div class="control-group" id="advchpd" style="display:none;">

	<label class="control-label" for="form-field-1">Advance Amount To Be Paid</label>

	<div class="controls">	

	  <input type="text" name="amountcspd" id="amountchpd" readonly="" value="0"/>

	</div>

	</div>
	
	<div class="control-group">

	<label class="control-label" for="form-field-1">Payable Cheque Amount</label>

	<div class="controls">	

	  <input type="text" name="chequeamount" id="chequeamount" value="0" onkeyup="getchequeamount();"/ >

	</div>

	</div>
	<div class="control-group" id="advchped" style="display:none;">

	<label class="control-label" for="form-field-1">Advance Amount Pending</label>

	<div class="controls">	

	  <input type="text" name="amountcsped" id="amountchped" readonly="" value="0"/>

	</div>

	</div>
	<div class="control-group" id="advchpaid" style="display:none;">

	<label class="control-label" for="form-field-1">Advance Amount Paid</label>

	<div class="controls">	

	  <input type="text" name="amountcsped" id="amountchpaid" readonly="" value="0"/>

	</div>

	</div>
	<div class="control-group">

	<label class="control-label" for="form-field-1">Pending Amount</label>

	<div class="controls">	

	  <input type="text" name="chequepending" id="chequepending" readonly=""/>

	</div>

	</div>
	
	<div class="control-group">

	<label class="control-label" for="form-field-1">Total Amount to be paid</label>

	<div class="controls">	

	  <input type="text" name="totlpayablecheque" id="totlpayablecheque" readonly=""/>

	</div>

	</div>
	
	<div class="control-group">

	<label class="control-label" for="form-field-1">Paid Amount</label>

	<div class="controls">	

	  <input type="text" name="chequepaid" id="chequepaid" readonly="" />

	</div>

	</div>
	
	
	<div class="control-group">
	<label class="control-label" for="form-field-1">Cheque No</label>

	<div class="controls">	

	  <input type="text" name="chequeno" id="chequeno" />

	</div>

	</div>

	<div class="control-group">

	<label class="control-label" for="form-field-1">Bank Name</label>

	<div class="controls">	

	  <input type="text" name="bankname" id="bankname" />

	</div>

	</div>
	
	<div class="control-group">

	<label class="control-label" for="form-field-1">Branch Name</label>

	<div class="controls">	

	  <input type="text" name="branchname" id="branchname" />

	</div>

	</div>
	
	<div class="control-group">

	<label class="control-label" for="form-field-1">Branch Location</label>

	<div class="controls">	

	  <input type="text" name="branchlocation" id="branchlocation" />

	</div>

	</div>
	<div class="control-group">

	<label class="control-label" for="form-field-1"></label>

	<div class="controls">	

	  <input type="checkbox" name="chkenter" id="chkenter" onclick="showbtndivs();" style="opacity:1" value="aa"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:red">I have Entered All the Details of Cheque</span>

	</div>

	</div>
	
	</div>
	</div>

	</div>
	
	
		<div class="step-pane" id="step4">

									<div class="row-fluid">
										<div class="control-group">

			<label class="control-label" for="form-input-readonly">Have you Received through Online Transfer</label>


<div class="controls">

			<div class="span12">

				<input type="radio" id="ontransferyestype" name="onlinetransfertype" value="Yes" onclick="onlinetransferpaymentstatus();">

				<label class="lbl" for="id-disable-check"> Yes</label>

				&nbsp; &nbsp;

				<input type="radio" id="ontransfernotype" name="onlinetransfertype" value="No" onclick="onlinetransferpaymentstatus();clearonlinetransfer();">

				<label class="lbl" for="id-disable-check" >No</label>

			</div>

			</div>

		</div>
		<div style="display:none" id="onlinetransferdiv">
		
		<div class="control-group">

			<label class="control-label" for="form-field-1">Amount Paid</label>

			<div class="controls">	

  <input type="text" name="onlinetransferamount" id="onlinetransferamount" onkeyup="getonlinetransferamount();" value="0"/>

			</div>

			</div>
				<div class="control-group">

			<label class="control-label" for="form-field-1">Bank Name</label>

			<div class="controls">	

  <input type="text" name="bankonline" id="bankonline" />

			</div>

			</div>
				<div class="control-group">

			<label class="control-label" for="form-field-1">Transfered Date</label>

			<div class="controls">	

  <input type="text" name="transferdate" id="transferdate" />

			</div>

			</div>
			
			<div class="control-group">

			<label class="control-label" for="form-field-1">Pending Amount</label>

			<div class="controls">	

  <input type="text" name="ontransferpending" id="ontransferpending" readonly="" value=""/>

			</div>

			</div>
		
			<div class="control-group">

			<label class="control-label" for="form-field-1">Total Amount to be paid</label>

			<div class="controls">	

  <input type="text" name="totlpayableontransfer" id="totlpayableontransfer" readonly="" value=""/>

			</div>

			</div>
			<div class="control-group">

			<label class="control-label" for="form-field-1">Paid Amount</label>

			<div class="controls">	

  <input type="text" name="ontransferpaid" id="ontransferpaid" readonly=""/>

			</div>

			</div>
			
		</div>
		
	
	
									</div>

								</div>		
	
	<div class="step-pane" id="step5">

	<div class="row-fluid">
	<div class="control-group">

	<label class="control-label" for="form-input-readonly">Do You Want to Pay through Online</label>



	<div class="controls">

	<div class="span12">

	<input type="radio" id="onlineyestype" name="onlinetype" value="Yes" onclick="openonline();">

	<label class="lbl" for="id-disable-check"> Pay Now</label>

	&nbsp; &nbsp;

	<input type="radio" id="onlinenotype" name="onlinetype" value="No" onclick="closeonline();">

	<label class="lbl" for="id-disable-check" >Pay Later</label>

	</div>

	</div>

	</div>
	
	<div id="onlinediv" style="display:none;">
	<div class="control-group" >

	<label class="control-label" for="form-field-1"></label>

	<div class="controls">	

	  <input type="button" value="Pay" onclick="storedata();" class="btn btn-primary"/>

	</div>

	</div>
	</div>	
	
	
	<div class="control-group">

	<label class="control-label" for="form-field-1">Total Pending</label>

	<div class="controls">	

	  <input type="text" name="totalpending" id="totalpending" readonly=""/>

	</div>

	</div>
	<div class="control-group">

	<label class="control-label" for="form-field-1">Total Paid</label>

	<div class="controls">	
	 <input type="text" name="paidamount" id="paidamount" readonly=""/>
	 </div>
	 </div>
	 <div class="control-group">

	<label class="control-label" for="form-field-1">Advance Paid</label>

	<div class="controls">	
	 <input type="text" name="advancepaidamount" id="advancepaidamount" readonly=""/>
	 </div>
	 </div>
	</div>

	</div>
	
	

</form>	

	</div>



	<hr />

	<div class="row-fluid wizard-actions" id="btndivs" style="display:none;">

	<button class="btn btn-prev">

	<i class="icon-arrow-left"></i>

	Prev

	</button>



	<button class="btn btn-success btn-next" data-last="Finish " type="submit" id="opn">

	Next

	<i class="icon-arrow-right icon-on-right"></i>

	</button>

	

	</div>

	





	<!--/widget-main-->

	</div><!--/widget-main-->

	</div><!--/widget-main-->

	</div><!--/widget-body-->

	</div>

	</div>

	</div>



	<!--PAGE CONTENT ENDS-->

	</div><!--/.span-->

	</div><!--/.row-fluid-->

	</div><!--/.page-content-->



	

	</div><!--/.main-container-->



	<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-small btn-inverse">

	<i class="icon-double-angle-up icon-only bigger-110"></i>

	</a>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $(".add").click(function(){
 getsummary();
  });
  
 /* $('#amount').keyup(function(e){
 // alert('dddd');
  var val = $(this).val();
  var regexTest = /^\d{0,8}(\.\d{1,2})?$/;
  var ok = regexTest.test(val);
  if(ok) {
      $(this).css('background-color', 'green');
  } else {
      $(this).css('background-color', 'red');
  }
}); */

});
 function isNumberKey(evt)
       {
          var charCode = (evt.which) ? evt.which : event.keyCode;
          if (charCode != 46 && charCode > 31 
            && (charCode < 48 || charCode > 57))
	{
             return false;
	 }

          return true;
       }
  

</script>



<script>

$dd=jQuery.noConflict();

$dd(window).load(function () {

    $dd(function () {

        var defaults = {

            'usercomm': ''

        };



        // separating set and remove

        // note that you could add "defaults" as an arg if you had different

        // defaults for different fieldsets

        var setDefaults = function (inputElements) {

            $dd(inputElements).each(function () {

                var d = defaults[this.name];

                if (d) {

                    // set with jQuery

                    // we don't need the data - just check on the class

                    $dd(this).val(d)

                        .addClass('default_value');

                }

            });

        };



        var removeDefaults = function (inputElements) {

            $dd(inputElements).each(function () {

                if ($dd(this).hasClass('default_value')) {

                    $dd(this).val('')

                        .removeClass('default_value');

                }

            });

        };



        setDefaults(jQuery('form[name=builder] input'));



        $dd("span.add").click(function () {

            // get the correct fieldset based on the current element

            var $fieldset = $dd(this).closest('fieldsett');

            var $inputset = $dd('p', $fieldset)

                .first()

                .clone()

                .insertBefore($dd('p', $fieldset).last());

            // add a remove button

            $inputset.append('<span class="remove">Remove</span>');

            setDefaults($dd('input', $inputset));

            // return false; (only needed if this is a link)

        });



        // use delegate here to avoid adding new 

        // handlers for new elements

        $dd('fieldsett').delegate("span.remove", {

            'click': function () {
getsummary();
                $dd(this).parent().remove();

            }

        });



        // Toggles 

        $dd('form[name=builder]').delegate('input', {

            'focus': function () {

                removeDefaults($(this));

            },

                'blur': function () {

                // switch to using .val() for consistency

                if (!$(this).val()) setDefaults(this);

            }

        });

    });



});







</script>

	<script type="text/javascript">

	$(function() {

	

	$('[data-rel=tooltip]').tooltip();

	

	$(".select2").css('width','150px').select2({allowClear:true})

	.on('change', function(){

	$(this).closest('form').validate().element($(this));

	}); 

	

	

	var $validation = false;

	$('#fuelux-wizard').ace_wizard().on('change' , function(e, info){

	if(info.step == 1 && $validation) {

	if(!$('#validation-form').valid()) return false;

	}

	}).on('finished', function(e) {

	

	

	cat=Array();

	dev=Array();



	noofdevice=Array();

	costmonth=Array();
	subscp=Array();
	devcost=Array();
	instcharge=Array();
	totcost=Array();
	grandtotal=Array();
	sercharge=Array();
	vatcharge=Array();
	devname=Array();
	marginval=Array();
	network=Array();
simcharge=Array();
vat=Array();
	servicetax=Array();
	 $('fieldsett p').each(function () {

        if ($(this).find('.add').length > 0) return;

	cat.push($(this).find('.cat').val());

	dev.push($(this).find('.dev').val());
	subscp.push($(this).find('.subscp').val());
	costmonth.push($(this).find('.subcost').val());
	devcost.push($(this).find('.devcost').val());
	instcharge.push($(this).find('.instcharge').val());
	noofdevice.push($(this).find('.noofdevice').val());
	totcost.push($(this).find('.totcost').val());
	grandtotal.push($(this).find('.grandtotal').val());
	sercharge.push($(this).find('.sercharge').val());
	vatcharge.push($(this).find('.vatcharge').val());
	devname.push($(this).find('.devname').val());
	marginval.push($(this).find('.marginval').val());
	network.push($(this).find('.network').val());
			simcharge.push($(this).find('.simcharge').val());
			vat.push($(this).find('.vat').val());
			servicetax.push($(this).find('.servicetax').val());
	});
	//alert(subscp);
	finalcost=document.getElementById('finalcost').value;
	finalcostt=document.getElementById('finalcostt').value;
	if(document.getElementById('adv').checked)
{
	adv=document.getElementById('adv').value;
}
else
{
	adv='notselected';
}

if(document.getElementById('ful').checked)
{
	ful=document.getElementById('ful').value;
}
else
{
	ful='notselected';
}


	amount=document.getElementById('amount').value;

	codeid=document.getElementById('codeid').value;
	code=document.getElementById('code').value;


	packing=document.getElementById('packing').value;
	freight=document.getElementById('freight').value;
	smspackage=document.getElementById('smspackage').value;
	video=document.getElementById('video').value;
	if(document.getElementById('simyeseng').checked!=true && document.getElementById('simnoeng').checked!=true)
	{
		alert("Need Engineer is Mandatory");
		document.getElementById('simyeseng').focus();
		return false;
	}

	if(document.getElementById('simyeseng').checked)

	{

		

		needsim=document.getElementById('simyeseng').value;

	}

	if(document.getElementById('simnoeng').checked)

	{

		

		needsim=document.getElementById('simnoeng').value;

	}
	//cashyestype=document.getElementById('cashyestype').checked ? document.getElementById('cashyestype').value : '';
//	cashnotype=document.getElementById('cashnotype').checked ? document.getElementById('cashnotype').value : '';
	if(document.getElementById('cashyestype').checked)
	{
	cashtype='Yes';
	cashamount=document.getElementById('cashamount').value;
	cashpending=document.getElementById('cashpending').value;
	totlpayablecash=document.getElementById('totlpayablecash').value;
	cashpaid=document.getElementById('cashpaid').value;
	}
	if(document.getElementById('cashnotype').checked)
	{
	cashtype='No';
	
	}
	if((!document.getElementById('cashyestype').checked)&&(!document.getElementById('cashyestype').checked))
	{
	cashtype='No';
	}
//	chequeyestype=document.getElementById('chequeyestype').checked ? document.getElementById('chequeyestype').value : '';
//	chequenotype=document.getElementById('chequenotype').checked ? document.getElementById('chequenotype').value : '';
	if(document.getElementById('chequeyestype').checked)
	{
	chequetype='Yes';
	chequeamount=document.getElementById('chequeamount').value;
	chequepending=document.getElementById('chequepending').value;
	totlpayablecheque=document.getElementById('totlpayablecheque').value;
	chequepaid=document.getElementById('chequepaid').value;
	chequeno=document.getElementById('chequeno').value;
	bankname=document.getElementById('bankname').value;
	branchname=document.getElementById('branchname').value;
	branchlocation=document.getElementById('branchlocation').value;
	}
	if(document.getElementById('chequenotype').checked)
	{
	chequetype='No';
	
	}
if((!document.getElementById('chequeyestype').checked)&&(!document.getElementById('chequenotype').checked))
	{
	chequetype='No';
	}
	
		if(document.getElementById('ontransferyestype').checked)
	{
	ontransfertype='Yes';
			onlinetransferamount=document.getElementById('onlinetransferamount').value;
			bankonline=document.getElementById('bankonline').value;
			transferdate=document.getElementById('transferdate').value;
			ontransferpending=document.getElementById('ontransferpending').value;
			totlpayableontransfer=document.getElementById('totlpayableontransfer').value;
			ontransferpaid=document.getElementById('ontransferpaid').value;
			
	}
	if(document.getElementById('ontransfernotype').checked)
	{
	ontransfertype='No';
			
	}
	if((!document.getElementById('ontransferyestype').checked)&&(!document.getElementById('ontransfernotype').checked))
	{
		ontransfertype='No';
	}
	
if(document.getElementById('onlineyestype').checked)
	{
	onlinetype=document.getElementById('onlineyestype').value;
	
	}
	if(document.getElementById('onlinenotype').checked)
	{
	onlinetype=document.getElementById('onlinenotype').value;
	
	}
if((!document.getElementById('onlineyestype').checked)&&(!document.getElementById('onlinenotype').checked))
	{
	onlinetype='No';
	}
	totalpending=document.getElementById('totalpending').value;
	paidamount=document.getElementById('paidamount').value;
	
	//onlineyestype=document.getElementById('onlineyestype').checked ? document.getElementById('onlineyestype').value : '';
//	onlinenotype=document.getElementById('onlinenotype').checked ? document.getElementById('onlinenotype').value : '';
	//if(cashyestype)

//	chequetype=document.getElementById('chequetype').checked ? document.getElementById('chequetype').value : '';

//	onlinetype=document.getElementById('onlinetype').checked ? document.getElementById('onlinetype').value : '';

	created_by=document.getElementById('created_by').value;

	created_dt=document.getElementById('created_dt').value;

	cid=document.getElementById('cid').value;
	
	
	if(ful=='fullpayment')
	{
	if(paidamount!=amount)
	{
//	alert("You have Choosed Full Payment, So Please Pay the full amount");
//	return false;
$('#opn').fadeOut(1000);
	}
	else
		{
			
		$('#opn').fadeOut(1000);
		}
	
	} 
	advancepaidamount=document.getElementById('advancepaidamount').value;
	advamount=document.getElementById('advamount').value;
	if(adv=='advance')
	{
	if(advancepaidamount!=advamount)
	{
//	alert("Please Pay the Advance amount completely");
	//return false;
	$('#opn').fadeOut(1000);
	}
	else
		{
			
		$('#opn').fadeOut(1000);
		}
	} 

var xmlhttp;    

if (window.XMLHttpRequest)

{// code for IE7+, Firefox, Chrome, Opera, Safari

xmlhttp=new XMLHttpRequest();

}

else



{// code for IE6, IE5



xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");



}



xmlhttp.onreadystatechange=function()



{



if (xmlhttp.readyState==4 && xmlhttp.status==200)



{

abc=xmlhttp.responseText;
alert(abc)
window.top.location.href="<?php echo base_url();?>customer_registration/basic_data/?msg1="+abc;


}

}


xmlhttp.open("GET","<?php echo base_url();?>ajaxfiles/customer_order_data.php?category_id="+cat+"&device_type="+dev+"&subscp="+subscp+"&costmonth="+costmonth+"&devcost="+devcost+"&instcharge="+instcharge+"&noofdevice="+noofdevice+"&totcost="+totcost+"&grandtotal="+grandtotal+"&finalcost="+finalcost+"&sercharge="+sercharge+"&vatcharge="+vatcharge+"&adv="+adv+"&ful="+ful+"&amount="+amount+"&noofdevice="+noofdevice+"&created_by="+created_by+"&created_dt="+created_dt+"&cid="+cid+"&devname="+devname+"&cashtype="+cashtype+"&cashamount="+cashamount+"&cashpending="+cashpending+"&totlpayablecash="+totlpayablecash+"&cashpaid="+cashpaid+"&chequetype="+chequetype+"&chequeamount="+chequeamount+"&chequepending="+chequepending+"&totlpayablecheque="+totlpayablecheque+"&chequepaid="+chequepaid+"&chequeno="+chequeno+"&bankname="+bankname+"&onlinetype="+onlinetype+"&totalpending="+totalpending+"&paidamount="+paidamount+"&advamount="+advamount+"&advancepaidamount="+advancepaidamount+"&marginval="+marginval+"&branchname="+branchname+"&branchlocation="+branchlocation+"&network="+network+"&simcharge="+simcharge+"&finalcostt="+finalcostt+"&codeid="+codeid+"&code="+code+"&vat="+vat+"&packing="+packing+"&freight="+freight+"&smspackage="+smspackage+"&video="+video+"&ontransfertype="+ontransfertype+"&onlinetransferamount="+onlinetransferamount+"&bankonline="+bankonline+"&transferdate="+transferdate+"&ontransferpending="+ontransferpending+"&totlpayableontransfer="+totlpayableontransfer+"&ontransferpaid="+ontransferpaid+"&needsim="+needsim+"&servicetax="+servicetax,true);



xmlhttp.send();

otbox.dialog("Thank you! Your information was successfully saved!", [{

	"label" : "OK",

	"class" : "btn-small btn-primary",

	}]

	);

	}).on('stepclick', function(e){
alert('hi')
	//return false;//prevent clicking on steps

	});

	

	

	$('#validation-form').hide();

	$('#skip-validation').removeAttr('checked').on('click', function(){

	$validation = this.checked;

	if(this.checked) {

	$('#sample-form').hide();

	$('#validation-form').show();

	}

	else {

	$('#validation-form').hide();

	$('#sample-form').show();

	}

	});

	

	

	

	//documentation : http://docs.jquery.com/Plugins/Validation/validate

	

	

	$.mask.definitions['~']='[+-]';

	$('#phone').mask('(999) 999-9999');

	

	jQuery.validator.addMethod("phone", function (value, element) {

	return this.optional(element) || /^\(\d{3}\) \d{3}\-\d{4}( x\d{1,6})?$/.test(value);

	}, "Enter a valid phone number.");

	

	$('#validation-form').validate({

	errorElement: 'span',

	errorClass: 'help-inline',

	focusInvalid: false,

	rules: {

	email: {

	required: true,

	email:true

	},

	password: {

	required: true,

	minlength: 5

	},

	password2: {

	required: true,

	minlength: 5,

	equalTo: "#password"

	},

	name: {

	required: true

	},

	phone: {

	required: true,

	phone: 'required'

	},

	

	comment: {

	required: true

	},

	state: {

	required: true

	},

	platform: {

	required: true

	},

	subscription: {

	required: true

	},

	gender: 'required',

	agree: 'required'

	},

	

	messages: {

	email: {

	required: "Please provide a valid email.",

	email: "Please provide a valid email."

	},

	password: {

	required: "Please specify a password.",

	minlength: "Please specify a secure password."

	},

	subscription: "Please choose at least one option",

	gender: "Please choose gender",

	agree: "Please accept our policy"

	},

	

	invalidHandler: function (event, validator) { //display error alert on form submit   

	$('.alert-error', $('.login-form')).show();

	},

	

	highlight: function (e) {

	$(e).closest('.control-group').removeClass('info').addClass('error');

	},

	

	success: function (e) {

	$(e).closest('.control-group').removeClass('error').addClass('info');

	$(e).remove();

	},

	

	errorPlacement: function (error, element) {

	if(element.is(':checkbox') || element.is(':radio')) {

	var controls = element.closest('.controls');

	if(controls.find(':checkbox,:radio').length > 1) controls.append(error);

	else error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));

	}

	else if(element.is('.select2')) {

	error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));

	}

	else if(element.is('.chzn-select')) {

	error.insertAfter(element.siblings('[class*="chzn-container"]:eq(0)'));

	}

	else error.insertAfter(element);

	},

	

	submitHandler: function (form) {

	},

	invalidHandler: function (form) {

	}

	});

	

	

	

	

	$('#modal-wizard .modal-header').ace_wizard();

	$('#modal-wizard .wizard-actions .btn[data-dismiss=modal]').removeAttr('disabled');

	})

	</script>


<script>
function storedata()
{
	
	


	cat=Array();

	dev=Array();



	noofdevice=Array();

	costmonth=Array();
	subscp=Array();
	devcost=Array();
	instcharge=Array();
	totcost=Array();
	grandtotal=Array();
	sercharge=Array();
	vatcharge=Array();
	devname=Array();
	marginval=Array();
		network=Array();
simcharge=Array();
vat=Array();
servicetax=Array();
	
	 $('fieldsett p').each(function () {

        if ($(this).find('.add').length > 0) return;

	cat.push($(this).find('.cat').val());

	dev.push($(this).find('.dev').val());
	subscp.push($(this).find('.subscp').val());
	costmonth.push($(this).find('.subcost').val());
	devcost.push($(this).find('.devcost').val());
	instcharge.push($(this).find('.instcharge').val());
	noofdevice.push($(this).find('.noofdevice').val());
	totcost.push($(this).find('.totcost').val());
	grandtotal.push($(this).find('.grandtotal').val());
	sercharge.push($(this).find('.sercharge').val());
	vatcharge.push($(this).find('.vatcharge').val());
	devname.push($(this).find('.devname').val());
	marginval.push($(this).find('.marginval').val());
			network.push($(this).find('.network').val());
			simcharge.push($(this).find('.simcharge').val());
			vat.push($(this).find('.vat').val());
			servicetax.push($(this).find('.servicetax').val());
	});
	//alert(subscp);
	finalcost=document.getElementById('finalcost').value;
	finalcostt=document.getElementById('finalcostt').value;
	if(document.getElementById('adv').checked)
{
	adv=document.getElementById('adv').value;
}
else
{
	adv='notselected';
}

if(document.getElementById('ful').checked)
{
	ful=document.getElementById('ful').value;
}
else
{
	ful='notselected';
}


	amount=document.getElementById('amount').value;
	codeid=document.getElementById('codeid').value;
	code=document.getElementById('code').value;

	packing=document.getElementById('packing').value;
	freight=document.getElementById('freight').value;
	smspackage=document.getElementById('smspackage').value;
	video=document.getElementById('video').value;
		if(document.getElementById('simyeseng').checked!=true && document.getElementById('simnoeng').checked!=true)
	{
		alert("Need Engineer is Mandatory");
		document.getElementById('simyeseng').focus();
		return false;
	}

	if(document.getElementById('simyeseng').checked)

	{

		

		needsim=document.getElementById('simyeseng').value;

	}

	if(document.getElementById('simnoeng').checked)

	{

		

		needsim=document.getElementById('simnoeng').value;

	}

	//cashyestype=document.getElementById('cashyestype').checked ? document.getElementById('cashyestype').value : '';
//	cashnotype=document.getElementById('cashnotype').checked ? document.getElementById('cashnotype').value : '';
	if(document.getElementById('cashyestype').checked)
	{
	cashtype='Yes';
	cashamount=document.getElementById('cashamount').value;
	cashpending=document.getElementById('cashpending').value;
	totlpayablecash=document.getElementById('totlpayablecash').value;
	cashpaid=document.getElementById('cashpaid').value;
	}
	if(document.getElementById('cashnotype').checked)
	{
	cashtype='No';
	
	}
	if((!document.getElementById('cashyestype').checked)&&(!document.getElementById('cashyestype').checked))
	{
	cashtype='No';
	}
//	chequeyestype=document.getElementById('chequeyestype').checked ? document.getElementById('chequeyestype').value : '';
//	chequenotype=document.getElementById('chequenotype').checked ? document.getElementById('chequenotype').value : '';
	if(document.getElementById('chequeyestype').checked)
	{
	chequetype='Yes';
	chequeamount=document.getElementById('chequeamount').value;
	chequepending=document.getElementById('chequepending').value;
	totlpayablecheque=document.getElementById('totlpayablecheque').value;
	chequepaid=document.getElementById('chequepaid').value;
	chequeno=document.getElementById('chequeno').value;
	bankname=document.getElementById('bankname').value;
	branchname=document.getElementById('branchname').value;
	branchlocation=document.getElementById('branchlocation').value;
	}
	if(document.getElementById('chequenotype').checked)
	{
	chequetype='No';
	
	}
if((!document.getElementById('chequeyestype').checked)&&(!document.getElementById('chequenotype').checked))
	{
	chequetype='No';
	}
	
	
		if(document.getElementById('ontransferyestype').checked)
	{
	ontransfertype='Yes';
			onlinetransferamount=document.getElementById('onlinetransferamount').value;
			bankonline=document.getElementById('bankonline').value;
			transferdate=document.getElementById('transferdate').value;
			ontransferpending=document.getElementById('ontransferpending').value;
			totlpayableontransfer=document.getElementById('totlpayableontransfer').value;
			ontransferpaid=document.getElementById('ontransferpaid').value;
			
	}
	if(document.getElementById('ontransfernotype').checked)
	{
	ontransfertype='No';
			
	}
	if((!document.getElementById('ontransferyestype').checked)&&(!document.getElementById('ontransfernotype').checked))
	{
		ontransfertype='No';
	}
	
if(document.getElementById('onlineyestype').checked)
	{
	onlinetype=document.getElementById('onlineyestype').value;
	
	}
	if(document.getElementById('onlinenotype').checked)
	{
	onlinetype=document.getElementById('onlinenotype').value;
	
	}
if((!document.getElementById('onlineyestype').checked)&&(!document.getElementById('onlinenotype').checked))
	{
	onlinetype='No';
	}
	totalpending=document.getElementById('totalpending').value;
	paidamount=document.getElementById('paidamount').value;
	
	//onlineyestype=document.getElementById('onlineyestype').checked ? document.getElementById('onlineyestype').value : '';
//	onlinenotype=document.getElementById('onlinenotype').checked ? document.getElementById('onlinenotype').value : '';
	//if(cashyestype)

//	chequetype=document.getElementById('chequetype').checked ? document.getElementById('chequetype').value : '';

//	onlinetype=document.getElementById('onlinetype').checked ? document.getElementById('onlinetype').value : '';

	created_by=document.getElementById('created_by').value;

	created_dt=document.getElementById('created_dt').value;

	cid=document.getElementById('cid').value;
	
	
	if(ful=='fullpayment')
	{
	if(paidamount!=amount)
	{
//	alert("You have Choosed Full Payment, So Please Pay the full amount");
//	return false;
$('#opn').fadeOut(3000);
	}
	else
		{
			
		$('#opn').fadeOut(3000);
		}
	} 
	advancepaidamount=document.getElementById('advancepaidamount').value;
	advamount=document.getElementById('advamount').value;
	if(adv=='advance')
	{
	if(advancepaidamount!=advamount)
	{
	//alert("Please Pay the Advance amount completely");
	//return false;
	$('#opn').fadeOut(3000);
	}
	else
		{
			
		$('#opn').fadeOut(3000);
		}
	} 

var xmlhttp;    

if (window.XMLHttpRequest)

{// code for IE7+, Firefox, Chrome, Opera, Safari

xmlhttp=new XMLHttpRequest();

}

else



{// code for IE6, IE5



xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");



}



xmlhttp.onreadystatechange=function()



{



if (xmlhttp.readyState==4 && xmlhttp.status==200)



{

abc=xmlhttp.responseText;
alert(abc)
window.top.location.href="<?php echo base_url();?>customer_registration/basic_data/?msg1="+abc;


}

}


xmlhttp.open("GET","<?php echo base_url();?>ajaxfiles/customer_order_data.php?category_id="+cat+"&device_type="+dev+"&subscp="+subscp+"&costmonth="+costmonth+"&devcost="+devcost+"&instcharge="+instcharge+"&noofdevice="+noofdevice+"&totcost="+totcost+"&grandtotal="+grandtotal+"&finalcost="+finalcost+"&sercharge="+sercharge+"&vatcharge="+vatcharge+"&adv="+adv+"&ful="+ful+"&amount="+amount+"&noofdevice="+noofdevice+"&created_by="+created_by+"&created_dt="+created_dt+"&cid="+cid+"&devname="+devname+"&cashtype="+cashtype+"&cashamount="+cashamount+"&cashpending="+cashpending+"&totlpayablecash="+totlpayablecash+"&cashpaid="+cashpaid+"&chequetype="+chequetype+"&chequeamount="+chequeamount+"&chequepending="+chequepending+"&totlpayablecheque="+totlpayablecheque+"&chequepaid="+chequepaid+"&chequeno="+chequeno+"&bankname="+bankname+"&onlinetype="+onlinetype+"&totalpending="+totalpending+"&paidamount="+paidamount+"&advamount="+advamount+"&advancepaidamount="+advancepaidamount+"&marginval="+marginval+"&branchname="+branchname+"&branchlocation="+branchlocation+"&network="+network+"&simcharge="+simcharge+"&finalcostt="+finalcostt+"&codeid="+codeid+"&code="+code+"&vat="+vat+"&packing="+packing+"&freight="+freight+"&smspackage="+smspackage+"&video="+video+"&ontransfertype="+ontransfertype+"&onlinetransferamount="+onlinetransferamount+"&bankonline="+bankonline+"&transferdate="+transferdate+"&ontransferpending="+ontransferpending+"&totlpayableontransfer="+totlpayableontransfer+"&ontransferpaid="+ontransferpaid+"&needsim="+needsim+"&servicetax="+servicetax,true);



xmlhttp.send();
}


</script>
	
<script>
function storefocdata()
{
	
	


	cat=Array();

	dev=Array();



	noofdevice=Array();

	costmonth=Array();
	subscp=Array();
	devcost=Array();
	instcharge=Array();
	totcost=Array();
	grandtotal=Array();
	sercharge=Array();
	vatcharge=Array();
	devname=Array();
	marginval=Array();
		network=Array();
simcharge=Array();
vat=Array();
servicetax=Array();
	
	 $('fieldsett p').each(function () {

        if ($(this).find('.add').length > 0) return;

	cat.push($(this).find('.cat').val());

	dev.push($(this).find('.dev').val());
	subscp.push($(this).find('.subscp').val());
	costmonth.push($(this).find('.subcost').val());
	devcost.push($(this).find('.devcost').val());
	instcharge.push($(this).find('.instcharge').val());
	noofdevice.push($(this).find('.noofdevice').val());
	totcost.push($(this).find('.totcost').val());
	grandtotal.push($(this).find('.grandtotal').val());
	sercharge.push($(this).find('.sercharge').val());
	vatcharge.push($(this).find('.vatcharge').val());
	devname.push($(this).find('.devname').val());
	marginval.push($(this).find('.marginval').val());
			network.push($(this).find('.network').val());
			simcharge.push($(this).find('.simcharge').val());
			vat.push($(this).find('.vat').val());
			servicetax.push($(this).find('.servicetax').val());
	});
	//alert(subscp);
	finalcost=document.getElementById('finalcost').value;
	finalcostt=document.getElementById('finalcostt').value;
	if(document.getElementById('adv').checked)
{
	adv=document.getElementById('adv').value;
}
else
{
	adv='notselected';
}

if(document.getElementById('ful').checked)
{
	ful=document.getElementById('ful').value;
}
else
{
	ful='notselected';
}
if(document.getElementById('foc').checked)
{
	foc=document.getElementById('foc').value;
}
else
{
	foc='notselected';
}
if(document.getElementById('pmntdel').checked)
{
	pmntdel=document.getElementById('pmntdel').value;
}
else
{
	pmntdel='notselected';
}

	amount=document.getElementById('amount').value;
	codeid=document.getElementById('codeid').value;
	code=document.getElementById('code').value;


	packing=document.getElementById('packing').value;
	freight=document.getElementById('freight').value;
	smspackage=document.getElementById('smspackage').value;
	video=document.getElementById('video').value;
if(document.getElementById('simyeseng').checked!=true && document.getElementById('simnoeng').checked!=true)
	{
		alert("Need Engineer is Mandatory");
		document.getElementById('simyeseng').focus();
		return false;
	}

	if(document.getElementById('simyeseng').checked)

	{

		

		needsim=document.getElementById('simyeseng').value;

	}

	if(document.getElementById('simnoeng').checked)

	{

		

		needsim=document.getElementById('simnoeng').value;

	}	

	//cashyestype=document.getElementById('cashyestype').checked ? document.getElementById('cashyestype').value : '';
//	cashnotype=document.getElementById('cashnotype').checked ? document.getElementById('cashnotype').value : '';
	if(document.getElementById('cashyestype').checked)
	{
	cashtype='Yes';
	cashamount=document.getElementById('cashamount').value;
	cashpending=document.getElementById('cashpending').value;
	totlpayablecash=document.getElementById('totlpayablecash').value;
	cashpaid=document.getElementById('cashpaid').value;
	}
	if(document.getElementById('cashnotype').checked)
	{
	cashtype='No';
	
	}
	if((!document.getElementById('cashyestype').checked)&&(!document.getElementById('cashyestype').checked))
	{
	cashtype='No';
	}
//	chequeyestype=document.getElementById('chequeyestype').checked ? document.getElementById('chequeyestype').value : '';
//	chequenotype=document.getElementById('chequenotype').checked ? document.getElementById('chequenotype').value : '';
	if(document.getElementById('chequeyestype').checked)
	{
	chequetype='Yes';
	chequeamount=document.getElementById('chequeamount').value;
	chequepending=document.getElementById('chequepending').value;
	totlpayablecheque=document.getElementById('totlpayablecheque').value;
	chequepaid=document.getElementById('chequepaid').value;
	chequeno=document.getElementById('chequeno').value;
	bankname=document.getElementById('bankname').value;
	branchname=document.getElementById('branchname').value;
	branchlocation=document.getElementById('branchlocation').value;
	}
	if(document.getElementById('chequenotype').checked)
	{
	chequetype='No';
	
	}
if((!document.getElementById('chequeyestype').checked)&&(!document.getElementById('chequenotype').checked))
	{
	chequetype='No';
	}
	
		if(document.getElementById('ontransferyestype').checked)
	{
	ontransfertype='Yes';
			onlinetransferamount=document.getElementById('onlinetransferamount').value;
			bankonline=document.getElementById('bankonline').value;
			transferdate=document.getElementById('transferdate').value;
			ontransferpending=document.getElementById('ontransferpending').value;
			totlpayableontransfer=document.getElementById('totlpayableontransfer').value;
			ontransferpaid=document.getElementById('ontransferpaid').value;
			
	}
	if(document.getElementById('ontransfernotype').checked)
	{
	ontransfertype='No';
			
	}
	if((!document.getElementById('ontransferyestype').checked)&&(!document.getElementById('ontransfernotype').checked))
	{
		ontransfertype='No';
	}
	
	
if(document.getElementById('onlineyestype').checked)
	{
	onlinetype=document.getElementById('onlineyestype').value;
	
	}
	if(document.getElementById('onlinenotype').checked)
	{
	onlinetype=document.getElementById('onlinenotype').value;
	
	}
if((!document.getElementById('onlineyestype').checked)&&(!document.getElementById('onlinenotype').checked))
	{
	onlinetype='No';
	}
	totalpending=document.getElementById('totalpending').value;
	paidamount=document.getElementById('paidamount').value;
	
	//onlineyestype=document.getElementById('onlineyestype').checked ? document.getElementById('onlineyestype').value : '';
//	onlinenotype=document.getElementById('onlinenotype').checked ? document.getElementById('onlinenotype').value : '';
	//if(cashyestype)

//	chequetype=document.getElementById('chequetype').checked ? document.getElementById('chequetype').value : '';

//	onlinetype=document.getElementById('onlinetype').checked ? document.getElementById('onlinetype').value : '';

	created_by=document.getElementById('created_by').value;

	created_dt=document.getElementById('created_dt').value;

	cid=document.getElementById('cid').value;
	
	

	advancepaidamount=document.getElementById('advancepaidamount').value;
	advamount=document.getElementById('advamount').value;
	
	$('#submdiv').fadeOut(1000);
		$('#paysubmdiv').fadeOut(1000);
var xmlhttp;    

if (window.XMLHttpRequest)

{// code for IE7+, Firefox, Chrome, Opera, Safari

xmlhttp=new XMLHttpRequest();

}

else



{// code for IE6, IE5



xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");



}



xmlhttp.onreadystatechange=function()



{



if (xmlhttp.readyState==4 && xmlhttp.status==200)



{

abc=xmlhttp.responseText;
alert(abc)
window.top.location.href="<?php echo base_url();?>customer_registration/basic_data/?msg1="+abc;


}

}


xmlhttp.open("GET","<?php echo base_url();?>ajaxfiles/customer_order_data.php?category_id="+cat+"&device_type="+dev+"&subscp="+subscp+"&costmonth="+costmonth+"&devcost="+devcost+"&instcharge="+instcharge+"&noofdevice="+noofdevice+"&totcost="+totcost+"&grandtotal="+grandtotal+"&finalcost="+finalcost+"&sercharge="+sercharge+"&vatcharge="+vatcharge+"&adv="+adv+"&ful="+ful+"&amount="+amount+"&noofdevice="+noofdevice+"&created_by="+created_by+"&created_dt="+created_dt+"&cid="+cid+"&devname="+devname+"&cashtype="+cashtype+"&cashamount="+cashamount+"&cashpending="+cashpending+"&totlpayablecash="+totlpayablecash+"&cashpaid="+cashpaid+"&chequetype="+chequetype+"&chequeamount="+chequeamount+"&chequepending="+chequepending+"&totlpayablecheque="+totlpayablecheque+"&chequepaid="+chequepaid+"&chequeno="+chequeno+"&bankname="+bankname+"&onlinetype="+onlinetype+"&totalpending="+totalpending+"&paidamount="+paidamount+"&advamount="+advamount+"&advancepaidamount="+advancepaidamount+"&marginval="+marginval+"&branchname="+branchname+"&branchlocation="+branchlocation+"&network="+network+"&simcharge="+simcharge+"&finalcostt="+finalcostt+"&codeid="+codeid+"&code="+code+"&vat="+vat+"&foc="+foc+"&pmntdel="+pmntdel+"&packing="+packing+"&freight="+freight+"&smspackage="+smspackage+"&video="+video+"&ontransfertype="+ontransfertype+"&onlinetransferamount="+onlinetransferamount+"&bankonline="+bankonline+"&transferdate="+transferdate+"&ontransferpending="+ontransferpending+"&totlpayableontransfer="+totlpayableontransfer+"&ontransferpaid="+ontransferpaid+"&needsim="+needsim+"&servicetax="+servicetax,true);



xmlhttp.send();
}
</script>
	
<script>
function getbtndiv()
{
document.getElementById('submdiv').style.display="none";
	document.getElementById('paysubmdiv').style.display="none";
	cat=Array();
	costmonth=Array();

	

	  $('fieldsett p').each(function () {

        if ($(this).find('.add').length > 0) return;

	

	costmonth.push($(this).find('.costmonth').val());
	cat.push($(this).find('.cat').val());

	
	

    });
if(cat.indexOf("Select Category")>=0)
	{
	alert("Category Required");
	//	cat.indexOf("Select Category").focus();
	return false;
	}
	if(costmonth.indexOf("")==' ')
	{
	alert("Permonth Cost Required");
	return false;
	}
	if((document.getElementById("adv").checked!=true)&&(document.getElementById("ful").checked!=true))
	{
	alert("please select Payment Method");
	return false;
	}
	amnt=document.getElementById("amount");
	adv=document.getElementById("adv");
	ful=document.getElementById("ful").value;
	
	finalcost=document.getElementById('finalcost').value;
	//if((amnt!='')&&(document.getElementById("adv").checked==true)||(document.getElementById("ful").checked==true))
	if((document.getElementById("ful").checked==true)||(document.getElementById("pmntdel").checked==true))
	{
	document.getElementById('amount').style.visibility ='visible';
	document.getElementById('advamount').style.visibility ='hidden';
	document.getElementById("amount").value=Math.round(finalcost);
	document.getElementById('cashpending').value=Math.round(finalcost);
	document.getElementById('totlpayablecash').value=Math.round(finalcost);
	document.getElementById('chequepending').value=Math.round(finalcost);
	document.getElementById('totlpayablecheque').value=Math.round(finalcost);
	document.getElementById('totalpending').value=Math.round(finalcost); 
	document.getElementById('ontransferpending').value=Math.round(finalcost);
	document.getElementById('totlpayableontransfer').value=Math.round(finalcost);
	document.getElementById("amount").readOnly = "readonly";
	document.getElementById("btndivs").style.display='block';
	document.getElementById("advcspd").style.display='none';
	document.getElementById("advcsped").style.display='none';
	document.getElementById("advcspaid").style.display='none';
	document.getElementById("advchpaid").style.display='none';
	document.getElementById("advchpd").style.display='none';
	document.getElementById("advchped").style.display='none';
	//	return false;
	}
	if((document.getElementById("adv").checked==true))
	{
	//document.getElementById("amount").value='';
	document.getElementById('amount').style.visibility ='hidden';
	document.getElementById('advamount').style.visibility ='visible';
	document.getElementById('advamount').focus();
	//amnt.removeAttribute('readonly');
	document.getElementById("btndivs").style.display='none';
	twenty=Math.round((finalcost/100)*25);
	
//	alert("Mininum advance should be 25% "+ (twenty)+ " of the  final cost");	
	//document.getElementById('advamount').style.visibility ='visible';
	//document.getElementById('advamount').value='';

	
	}
	
}


function getbtndivv()
{
	
		document.getElementById('amount').value="0";
		document.getElementById('btndivs').style.display="none";
		document.getElementById('submdiv').style.display="block";
			document.getElementById('paysubmdiv').style.display="none";
	
}
function getbtndivvv()
{
	finalcost=document.getElementById('finalcost').value;
	document.getElementById('amount').value=Math.round(finalcost); 
		document.getElementById('btndivs').style.display="none";
		document.getElementById('submdiv').style.display="none";
		document.getElementById('paysubmdiv').style.display="block";
	
}


</script>



<script>

function getcc(strr)
{
	intcst=Math.round($(strr).prevAll('input:first').val());

abc=intcst*strr.value;

Math.round($(strr).nextAll('input:first').val(abc));
}

	function gettotal(str)

{

qty=parseInt(str.value);



subcst=Math.round($(str).prevAll('input').prevAll('input').prevAll('input:first').val());
devcst=Math.round($(str).prevAll('input').prevAll('input:first').val());
intcst=Math.round($(str).prevAll('input:first').val());

//stax=parseInt($(str).nextAll('input').nextAll('input:first').val());
//vtax=parseInt($(str).nextAll('input').nextAll('input').nextAll('input:first').val());

stax=parseFloat($(str).nextAll('input').nextAll('input:first').val());
vtax=parseFloat($(str).nextAll('input').nextAll('input').nextAll('input:first').val());

servicetax=((subcst*qty)+(intcst*qty))*(stax/100);


vat=(devcst*qty)*(vtax/100);


total=(devcst+subcst+intcst)*(qty);

gandtotal=Math.round(total+servicetax+vat);
//document.getElementById('amount').value=grandtotal;

Math.round($(str).nextAll('input:first').val(total));
parseInt($(str).nextAll('input').nextAll('input').nextAll('input').nextAll('input:first').val(gandtotal));
parseInt($(str).nextAll('input').nextAll('input').nextAll('input').nextAll('input').nextAll('input:first').val(servicetax));
parseInt($(str).nextAll('input').nextAll('input').nextAll('input').nextAll('input').nextAll('input').nextAll('input:first').val(vat));

}



function getsimcharge(str,strr)
{

	 var element = $(str).find('option:selected'); 
	
if(element.attr("value")=='Choose Sim')
	{

        var simcharge =0; 

	
	mnth=parseInt($(str).prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input:first').val());
	
	simamnt=simcharge*mnth;

		str.nextElementSibling.value=0;
	}
	else
	{
	
	 var simcharge = element.attr("id"); 
	mnth=parseInt($(str).prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input:first').val());
	
	simamnt=simcharge*mnth;
		str.nextElementSibling.value=simamnt;
	}
		
	
		
		subcst=Math.round($(str).prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input:first').val());
	
devcst=Math.round($(str).prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input:first').val());
intcst=Math.round($(str).prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input:first').val());
qty=parseInt($(str).prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input:first').val());
stax=parseFloat($(str).prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input:first').val());
vtax=parseFloat($(str).prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input:first').val());


servicetax=((subcst*qty)+(intcst*qty)+(simamnt*qty))*(stax/100);


vat=(devcst*qty)*(vtax/100);

total=(devcst+subcst+intcst+simamnt)*(qty);

gandtotal=total+servicetax+vat;




Math.round($(str).prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input:first').val(total));
Math.round($(str).prevAll('input').prevAll('input').prevAll('input').prevAll('input:first').val(servicetax));
Math.round($(str).prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input:first').val(vat));
Math.round($(str).prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input:first').val(gandtotal));

	document.getElementById('sercost').value=parseFloat(servicetax).toFixed(2);
}

function gettotalcharge(str)
{
	// var element = $(str).find('option:selected'); 
     //  var simcharge = element.attr("id"); 
        var simcharge = str.value; 
	
	
	mnth=parseInt($(str).prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input:first').val());
	simamnt=simcharge*mnth;
			subcst=Math.round($(str).prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input:first').val());
	
devcst=Math.round($(str).prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input:first').val());
intcst=Math.round($(str).prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input:first').val());
qty=parseInt($(str).prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input:first').val());
stax=parseFloat($(str).prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input:first').val());
vtax=parseFloat($(str).prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input:first').val());


servicetax=((subcst*qty)+(intcst*qty)+(simamnt*qty))*(stax/100);


vat=(devcst*qty)*(vtax/100);

total=(devcst+subcst+intcst+simamnt)*(qty);

gandtotal=total+servicetax+vat;




Math.round($(str).prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input:first').val(total));
Math.round($(str).prevAll('input').prevAll('input').prevAll('input').prevAll('input:first').val(servicetax));
Math.round($(str).prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input:first').val(vat));
Math.round($(str).prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input:first').val(gandtotal));

	document.getElementById('sercost').value=parseFloat(servicetax).toFixed(2);
}


</script>
	<script>


function getsummary()

{



var selectVal='';


subcost=Array();
devcost=Array();
instcharge=Array();
noofdevice=Array();
grandtotal=Array();
simcharge=Array();



	$('fieldsett p').each(function () {



        if ($(this).find('.add').length > 0) return;

	subcost.push($(this).find('.subcost').val());
	devcost.push($(this).find('.devcost').val());
	instcharge.push($(this).find('.instcharge').val());
	noofdevice.push($(this).find('.noofdevice').val());
	grandtotal.push($(this).find('.grandtotal').val());
	simcharge.push($(this).find('.simcharge').val());
	
	     } 	);



	 subcostt=Array();
	 devcostt=Array();
	 instchargee=Array();
	 noofdevices=Array();
	 grandtotals=Array();
	 simchargee=Array();


 subcostt=subcost;
	 devcostt=devcost;
	 instchargee=instcharge;
	 noofdevices=noofdevice;
	 grandtotals=grandtotal;
	 simchargee=simcharge;
stax=document.getElementById('ostax').value;
vtax=document.getElementById('ovat').value;


	var subValue = 0; 
	var devValue = 0; 
	var instValue = 0; 
	var servicetax = 0; 
	var gandtotall = 0; 
	var simchargees = 0; 
	var vat = 0; 
	var vatt = 0; 
	var servicetaxx = 0; 
    for(i=0; i < devcostt.length; i++) 
    { 
    subValue += Number(subcostt[i])*Number(noofdevices[i]);
    devValue += Number(devcostt[i])*Number(noofdevices[i]);
    instValue += Number(instchargee[i])*Number(noofdevices[i]);
	servicetaxx+=((Number(subcostt[i])*Number(noofdevices[i]))+(Number(instchargee[i])*Number(noofdevices[i]))+(Number(simchargee[i])*Number(noofdevices[i])))*parseFloat(stax/100);
	vatt+=Number(devcostt[i])*Number(noofdevices[i])*parseFloat(vtax/100);
	gandtotall +=(Number(grandtotals[i]));
    } 

	packing=Math.round(document.getElementById('packing').value);
	freight=Math.round(document.getElementById('freight').value);
	smspackage=Math.round(document.getElementById('smspackage').value);
	video=Math.round(document.getElementById('video').value);
	vtax=parseFloat(document.getElementById('ovat').value);
	stax=parseFloat(document.getElementById('ostax').value);
	packingcost=Math.round((packing)*(vtax/100));
	servicetax=(smspackage+video)*(stax/100);
	extracharge=Math.round(packing+packingcost+freight+smspackage+video+servicetax);
	finalval=Math.round(gandtotall+extracharge);
servicetotal=parseFloat(servicetaxx+servicetax);

vat=parseFloat(vatt+packingcost);
	document.getElementById('totsubcost').value=Math.round(subValue);
	document.getElementById('totdevcost').value=Math.round(devValue);
	document.getElementById('totintcost').value=Math.round(instValue);
	document.getElementById('sercost').value=parseFloat(servicetotal).toFixed(2);
	document.getElementById('vatcost').value=parseFloat(vat).toFixed(2);
	document.getElementById('finalcost').value=Math.round(finalval);
	document.getElementById('finalcostt').value=Math.round(finalval);
	document.getElementById('amount').value=Math.round(finalval);
	
	

}



function putamount(answerValue)
{
	cat=Array();
	costmonth=Array();

	

	  $('fieldsett p').each(function () {

        if ($(this).find('.add').length > 0) return;

	

	costmonth.push($(this).find('.costmonth').val());
	cat.push($(this).find('.cat').val());

	
	

    });
if(cat.indexOf("Select Category")>=0)
	{
	alert("Category Required");
	//	cat.indexOf("Select Category").focus();
	return false;
	}
	if(costmonth.indexOf("")==' ')
	{
	alert("Permonth Cost Required");
	return false;
	}
	if((document.getElementById("adv").checked!=true)&&(document.getElementById("ful").checked!=true))
	{
	alert("please select Payment Method");
	return false;
	}

	finalcost=document.getElementById('finalcost').value;
	document.getElementById('cashpending').value=Math.round(finalcost);
	document.getElementById('totlpayablecash').value=Math.round(finalcost);
	document.getElementById('chequepending').value=Math.round(finalcost);
	document.getElementById('totlpayablecheque').value=Math.round(finalcost);
	document.getElementById('totalpending').value=Math.round(finalcost); 
		document.getElementById('ontransferpending').value=Math.round(finalcost);
	document.getElementById('totlpayableontransfer').value=Math.round(finalcost);
}
function enableblock(answerValue)
{

	finalcost=document.getElementById('finalcost').value;
	
	
	if((document.getElementById("ful").checked==true))
	{
	
	document.getElementById("btndivs").style.display='block';
	document.getElementById("advcspd").style.display='none';
	document.getElementById("advcsped").style.display='none';
	document.getElementById("advcspaid").style.display='none';
	document.getElementById("advchpaid").style.display='none';
	document.getElementById("advchpd").style.display='none';
	document.getElementById("advchped").style.display='none';
	//	document.getElementById("amount").value=finalcost;
	
	
	}
	if((document.getElementById("adv").checked==true))
	{
	twenty=parseInt((finalcost/100)*25);
	//alert(twenty);
	if(parseInt(answerValue)>parseInt(finalcost))
	{
	alert("Please Enter The amount to be paid as same as final cost or less than final cost");	
	//document.getElementById('advamount').style.visibility ='visible';
	document.getElementById('advamount').value='';
	document.getElementById('advamount').focus();

	document.getElementById("btndivs").style.display='none';
	}
	else if(parseInt(answerValue)<twenty)
	{
//	alert("Mininum advance should be 25% i.e Rs. "(+twenty+) " of the  final cost");	
	//document.getElementById('advamount').style.visibility ='visible';
	//document.getElementById('advamount').value='';
	document.getElementById('advamount').focus();

	document.getElementById("btndivs").style.display='block';
	}
	else
	{
	document.getElementById("btndivs").style.display='block';
	document.getElementById("advcspd").style.display='block';
	document.getElementById("advcsped").style.display='block';
	document.getElementById("advcspaid").style.display='block';
	document.getElementById("advchpaid").style.display='block';
	document.getElementById("advchpd").style.display='block';
	document.getElementById("advchped").style.display='block';
	document.getElementById('amountcspd').value=answerValue;
	document.getElementById('amountcsped').value=answerValue;
	document.getElementById('amountchpd').value=answerValue;
	document.getElementById('amountchped').value=answerValue;
	
	}
	}
}
function valmonth(str)
{
if(str.value>48)
{
	alert("please Enter the valid month");
	str.value='';
	str.focus();
	
}
}


	</script>

	



<script>
function cashpaymentstatus()
{
	a=document.getElementById('cashyestype').checked;
	b=document.getElementById('cashnotype').checked;
	if(a)
	{
	
	document.getElementById('cashpaymentdiv').style.display="block";
	}
	if(b)
	{
	document.getElementById('cashpaymentdiv').style.display="none";
	}
}

function chequepaymentstatus()
{
	a=document.getElementById('chequeyestype').checked;
	b=document.getElementById('chequenotype').checked;
	if(a)
	{
	
	//document.getElementById('chequepaymentdiv').style.display="block";
	alert("Please Enter all the details of Cheque");
	document.getElementById('chequepaymentdiv').style.display="block";
	document.getElementById('btndivs').style.display="none";
	}
	if(b)
	{
	document.getElementById('chequepaymentdiv').style.display="none";
	document.getElementById('btndivs').style.display="block";
	}
}

function onlinetransferpaymentstatus()
{
		a=document.getElementById('ontransferyestype').checked;
		b=document.getElementById('ontransfernotype').checked;
		if(a)
		{
			
	document.getElementById('onlinetransferdiv').style.display="block";
		}
		if(b)
		{
			document.getElementById('onlinetransferdiv').style.display="none";
		}
}
function openonline()
{
	a=document.getElementById('onlineyestype').checked;
	
	if(a)
	{
	
	document.getElementById('onlinediv').style.display="block";
	}
}
function closeonline()
{
	a=document.getElementById('onlinenotype').checked;
	
	if(a)
	{
	
	document.getElementById('onlinediv').style.display="none";
	}
}

function getcashamount()
{
	amount=parseInt(document.getElementById('amount').value);
	
	cashamount=parseInt(document.getElementById('cashamount').value);
	
	if(isNaN(cashamount))
	{
	document.getElementById('cashamount').value='0';
	cashamount=parseInt(document.getElementById('cashamount').value);
	chequeamount=parseInt(document.getElementById('chequeamount').value);
	onlinetransferamount=parseInt(document.getElementById('onlinetransferamount').value);
	paid=chequeamount+cashamount+onlinetransferamount;
	val=(amount)-(chequeamount+cashamount+onlinetransferamount);
	document.getElementById('cashpending').value=Math.round(val);
	document.getElementById('chequepending').value=Math.round(val);
	document.getElementById('totalpending').value=Math.round(val);
	document.getElementById('cashpaid').value=Math.round(paid);
	document.getElementById('chequepaid').value=Math.round(paid);
	document.getElementById('paidamount').value=Math.round(paid);
	document.getElementById('ontransferpending').value=parseInt(val);
			document.getElementById('ontransferpaid').value=parseInt(paid);
	}
	
	chequeamount=parseInt(document.getElementById('chequeamount').value);
	onlinetransferamount=parseInt(document.getElementById('onlinetransferamount').value);
	paid=chequeamount+cashamount+onlinetransferamount;
	val=(amount)-(chequeamount+cashamount+onlinetransferamount);
	document.getElementById('cashpending').value=Math.round(val);
	document.getElementById('chequepending').value=Math.round(val);
	document.getElementById('totalpending').value=Math.round(val);
	document.getElementById('cashpaid').value=Math.round(paid);
	document.getElementById('chequepaid').value=Math.round(paid);
	document.getElementById('paidamount').value=Math.round(paid);
	document.getElementById('ontransferpending').value=parseInt(val);
			document.getElementById('ontransferpaid').value=parseInt(paid);
	if((document.getElementById("adv").checked==true))
	{
	
	amountcsped=parseInt(document.getElementById('amountcsped').value);
	advamount=parseInt(document.getElementById('advamount').value);
	amountcspaid=parseInt(document.getElementById('amountcspaid').value);
	amountcspd=parseInt(document.getElementById('amountcspd').value);
	
	if((cashamount+chequeamount+onlinetransferamount)>amountcspd)
	{
	alert("Exceeding Advance Amount.Please Enter the Proper Amount");
	document.getElementById('cashamount').focus();
	document.getElementById('cashamount').value='0';
	cashamount=parseInt(document.getElementById('cashamount').value);
	chequeamount=parseInt(document.getElementById('chequeamount').value);
	onlinetransferamount=parseInt(document.getElementById('onlinetransferamount').value);
	//	alert(cashamount);
	//	alert(chequeamount);
	paid=parseInt(chequeamount+cashamount+onlinetransferamount);
	adpen=parseInt((advamount)-(chequeamount+cashamount+onlinetransferamount));
	//	alert(adpen);
	document.getElementById('amountcsped').value=adpen;
	document.getElementById('amountcspaid').value=paid;
	document.getElementById('amountchped').value=adpen;
	document.getElementById('amountchpaid').value=paid;
	document.getElementById('advancepaidamount').value=paid;
	val=parseInt((amount)-(chequeamount+cashamount+onlinetransferamount));
	document.getElementById('cashpending').value=Math.round(val);
	document.getElementById('chequepending').value=Math.round(val);
	document.getElementById('totalpending').value=Math.round(val);
	document.getElementById('cashpaid').value=Math.round(paid);
	document.getElementById('chequepaid').value=Math.round(paid);
	document.getElementById('paidamount').value=Math.round(paid);
	document.getElementById('ontransferpending').value=parseInt(val);
			document.getElementById('ontransferpaid').value=parseInt(paid);
	
	}
	else
	{
	//pen=parseInt(cashamount-amountcspaid);
	adpen=parseInt((advamount)-(chequeamount+cashamount+onlinetransferamount));
	
	document.getElementById('amountcsped').value=adpen;
	document.getElementById('amountcspaid').value=paid;
	document.getElementById('amountchped').value=adpen;
	document.getElementById('amountchpaid').value=paid;
	document.getElementById('advancepaidamount').value=paid;
	}
	}
	if((document.getElementById("ful").checked==true))
	{
	
	if((cashamount+chequeamount+onlinetransferamount)>amount)
	{
	alert("Exceeding Final Cost.Please Enter the Proper Amount");
	document.getElementById('cashamount').focus();
	document.getElementById('cashamount').value='0';
	cashamount=parseInt(document.getElementById('cashamount').value);
	chequeamount=parseInt(document.getElementById('chequeamount').value);
	onlinetransferamount=parseInt(document.getElementById('onlinetransferamount').value);
	paid=parseInt(chequeamount+cashamount+onlinetransferamount);
	val=parseInt((amount)-(chequeamount+cashamount+onlinetransferamount));
	document.getElementById('cashpending').value=Math.round(val);
	document.getElementById('chequepending').value=Math.round(val);
	document.getElementById('totalpending').value=Math.round(val);
	document.getElementById('cashpaid').value=Math.round(paid);
	document.getElementById('chequepaid').value=Math.round(paid);
	document.getElementById('ontransferpending').value=parseInt(val);
			document.getElementById('ontransferpaid').value=parseInt(paid);
	}
	}
	
}
function getchequeamount()
{
	amount=parseInt(document.getElementById('amount').value);
	cashamount=parseInt(document.getElementById('cashamount').value);
	chequeamount=parseInt(document.getElementById('chequeamount').value);
	onlinetransferamount=parseInt(document.getElementById('onlinetransferamount').value);
	if(isNaN(chequeamount))
	{
	document.getElementById('chequeamount').value='0';
	cashamount=parseInt(document.getElementById('cashamount').value);
	chequeamount=parseInt(document.getElementById('chequeamount').value);
	paid=chequeamount+cashamount+onlinetransferamount;
	val=(amount)-(chequeamount+cashamount+onlinetransferamount);
	document.getElementById('chequepending').value=Math.round(val);
	document.getElementById('cashpending').value=Math.round(val);
	document.getElementById('totalpending').value=Math.round(val);
	document.getElementById('chequepaid').value=Math.round(paid);
	document.getElementById('cashpaid').value=Math.round(paid);
	document.getElementById('paidamount').value=Math.round(paid);
	document.getElementById('ontransferpending').value=parseInt(val);
			document.getElementById('ontransferpaid').value=parseInt(paid);
	}
	paid=chequeamount+cashamount+onlinetransferamount;
	val=(amount)-(chequeamount+cashamount+onlinetransferamount);
	document.getElementById('chequepending').value=Math.round(val);
	document.getElementById('cashpending').value=Math.round(val);
	document.getElementById('totalpending').value=Math.round(val);
	document.getElementById('chequepaid').value=Math.round(paid);
	document.getElementById('cashpaid').value=Math.round(paid);
	document.getElementById('paidamount').value=Math.round(paid);
	document.getElementById('ontransferpending').value=parseInt(val);
			document.getElementById('ontransferpaid').value=parseInt(paid);
	if((document.getElementById("adv").checked==true))
	{
	
	amountcsped=parseInt(document.getElementById('amountcsped').value);
	advamount=parseInt(document.getElementById('advamount').value);
	amountcspaid=parseInt(document.getElementById('amountcspaid').value);
	amountchpd=parseInt(document.getElementById('amountchpd').value);
	
	if((cashamount+chequeamount+onlinetransferamount)>amountchpd)
	{
	alert("Exceeding Advance Amount.Please Enter the Proper Amount");
	document.getElementById('chequeamount').focus();
	document.getElementById('chequeamount').value='0';
	cashamount=parseInt(document.getElementById('cashamount').value);
	chequeamount=parseInt(document.getElementById('chequeamount').value);
	//	alert(cashamount);
	//	alert(chequeamount);
	paid=parseInt(chequeamount+cashamount+onlinetransferamount);
	adpen=parseInt((advamount)-(chequeamount+cashamount+onlinetransferamount));
	//	alert(adpen);
	document.getElementById('amountcsped').value=adpen;
	document.getElementById('amountcspaid').value=paid;
	document.getElementById('amountchped').value=adpen;
	document.getElementById('amountchpaid').value=paid;
	val=parseInt((amount)-(chequeamount+cashamount+onlinetransferamount));
	document.getElementById('chequepending').value=Math.round(val);
	document.getElementById('cashpending').value=Math.round(val);
	document.getElementById('totalpending').value=Math.round(val);
	document.getElementById('chequepaid').value=Math.round(paid);
	document.getElementById('cashpaid').value=Math.round(paid);
	document.getElementById('paidamount').value=Math.round(paid);
	document.getElementById('advancepaidamount').value=paid;
	document.getElementById('ontransferpending').value=parseInt(val);
			document.getElementById('ontransferpaid').value=parseInt(paid);
	
	}
	else
	{
	adpen=parseInt((advamount)-(chequeamount+cashamount+onlinetransferamount));
	document.getElementById('amountcsped').value=adpen;
	document.getElementById('amountcspaid').value=paid;
	document.getElementById('amountchped').value=adpen;
	document.getElementById('amountchpaid').value=paid;
	document.getElementById('advancepaidamount').value=paid;
	}
	}
	if((document.getElementById("ful").checked==true))
	{
	
	if((cashamount+chequeamount+onlinetransferamount)>amount)
	{
	alert("Exceeding Final Cost.Please Enter the Proper Amount");
	document.getElementById('chequeamount').focus();
	document.getElementById('chequeamount').value='0';
	cashamount=parseInt(document.getElementById('cashamount').value);
	chequeamount=parseInt(document.getElementById('chequeamount').value);
	paid=parseInt(chequeamount+cashamount+onlinetransferamount);
	val=parseInt((amount)-(chequeamount+cashamount+onlinetransferamount));
	document.getElementById('cashpending').value=Math.round(val);
	document.getElementById('chequepending').value=Math.round(val);
	document.getElementById('totalpending').value=Math.round(val);
	document.getElementById('cashpaid').value=Math.round(paid);
	document.getElementById('chequepaid').value=Math.round(paid);
		document.getElementById('ontransferpending').value=parseInt(val);
			document.getElementById('ontransferpaid').value=parseInt(paid);
	}
	}
	
}

function getonlinetransferamount()
{

	amount=parseInt(document.getElementById('amount').value);
	onlinetransferamount=parseInt(document.getElementById('onlinetransferamount').value);
	
	if(isNaN(onlinetransferamount))
	{
		document.getElementById('onlinetransferamount').value='0';
		onlinetransferamount=parseInt(document.getElementById('onlinetransferamount').value);
		cashamount=parseInt(document.getElementById('cashamount').value);
		chequeamount=parseInt(document.getElementById('chequeamount').value);
	paid=chequeamount+cashamount+onlinetransferamount;
	val=(amount)-(chequeamount+cashamount);
	document.getElementById('ontransferpending').value=parseInt(val);
	document.getElementById('cashpending').value=parseInt(val);
	document.getElementById('chequepending').value=parseInt(val);
	document.getElementById('totalpending').value=parseInt(val);
	document.getElementById('cashpaid').value=parseInt(paid);
	document.getElementById('ontransferpaid').value=parseInt(paid);
	document.getElementById('chequepaid').value=parseInt(paid);
	document.getElementById('paidamount').value=parseInt(paid);
		}
	chequeamount=parseInt(document.getElementById('chequeamount').value);
	cashamount=parseInt(document.getElementById('cashamount').value);
	paid=chequeamount+cashamount+onlinetransferamount;
	val=(amount)-(chequeamount+cashamount+onlinetransferamount);
	document.getElementById('ontransferpending').value=parseInt(val);
	document.getElementById('cashpending').value=parseInt(val);
	document.getElementById('chequepending').value=parseInt(val);
	document.getElementById('totalpending').value=parseInt(val);
	document.getElementById('cashpaid').value=parseInt(paid);
	document.getElementById('ontransferpaid').value=parseInt(paid);
	document.getElementById('chequepaid').value=parseInt(paid);
	document.getElementById('paidamount').value=parseInt(paid);
		if((cashamount+chequeamount+onlinetransferamount)>amount)
		{
		alert("Exceeding Final Cost.Please Enter the Proper Amount");
			document.getElementById('onlinetransferamount').focus();
			document.getElementById('onlinetransferamount').value='0';
			onlinetransferamount=parseInt(document.getElementById('onlinetransferamount').value);
			cashamount=parseInt(document.getElementById('cashamount').value);
			chequeamount=parseInt(document.getElementById('chequeamount').value);
				paid=parseInt(chequeamount+cashamount+onlinetransferamount);
				val=parseInt((amount)-(chequeamount+cashamount+onlinetransferamount));
	document.getElementById('ontransferpending').value=parseInt(val);
	document.getElementById('cashpending').value=parseInt(val);
	document.getElementById('chequepending').value=parseInt(val);
	document.getElementById('totalpending').value=parseInt(val);
	document.getElementById('cashpaid').value=parseInt(paid);
	document.getElementById('ontransferpaid').value=parseInt(paid);
	document.getElementById('chequepaid').value=parseInt(paid);
		document.getElementById('paidamount').value=parseInt(paid);
		}
	
}
function clearcheque()
{
	document.getElementById('chequeamount').value=0;
	getchequeamount();
}
function clearcash()
{
	document.getElementById('cashamount').value=0;
	getcashamount();
}
function clearonlinetransfer()
{
	document.getElementById('onlinetransferamount').value=0;
	getchequeamount();
}

</script>

<script>	



function getdevicetype(f,str)

{

catid=document.getElementById('category_id').value;

var xmlhttp;    

if (window.XMLHttpRequest)

{// code for IE7+, Firefox, Chrome, Opera, Safari

xmlhttp=new XMLHttpRequest();

}

else



{// code for IE6, IE5



xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");



}



xmlhttp.onreadystatechange=function()



{



if (xmlhttp.readyState==4 && xmlhttp.status==200)



{



f.nextElementSibling.innerHTML=xmlhttp.responseText;



}

}

xmlhttp.open("GET","<?php echo base_url();?>ajaxfiles/getdevicetype.php?c="+str,true);



xmlhttp.send();



}



function getmodel(f,str)

{


       var element = $(f).find('option:selected'); 
        var catid = element.attr("id"); 
        var devname= element.attr("name"); 
	//	alert(devname);
	
var xmlhttp;    

if (window.XMLHttpRequest)

{// code for IE7+, Firefox, Chrome, Opera, Safari

xmlhttp=new XMLHttpRequest();

}

else



{// code for IE6, IE5



xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");



}



xmlhttp.onreadystatechange=function()



{



if (xmlhttp.readyState==4 && xmlhttp.status==200)



{

f.nextElementSibling.innerHTML=xmlhttp.responseText;

f.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.value=devname;

}

}

xmlhttp.open("GET","<?php echo base_url();?>ajaxfiles/getmodel1.php?c="+str+"&catid="+catid,true);



xmlhttp.send();

}



function getdevicecost(f,str)

{


       var element = $(f).find('option:selected'); 
        var catid = element.attr("id"); 
       // var margin = element.attr("name"); 
	
	//alert(margin);
var xmlhttp;    

if (window.XMLHttpRequest)

{// code for IE7+, Firefox, Chrome, Opera, Safari

xmlhttp=new XMLHttpRequest();

}

else



{// code for IE6, IE5



xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");



}



xmlhttp.onreadystatechange=function()



{



if (xmlhttp.readyState==4 && xmlhttp.status==200)



{

f.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.value=xmlhttp.responseText;



}

}

xmlhttp.open("GET","<?php echo base_url();?>ajaxfiles/getdevicecost.php?c="+str+"&catid="+catid,true);



xmlhttp.send();

}

function getmargin(f,str)
{


       var element = $(f).find('option:selected'); 
        var catid = element.attr("id"); 
       // var margin = element.attr("name"); 
	
	//alert(margin);
var xmlhttp;    

if (window.XMLHttpRequest)

{// code for IE7+, Firefox, Chrome, Opera, Safari

xmlhttp=new XMLHttpRequest();

}

else



{// code for IE6, IE5



xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");



}



xmlhttp.onreadystatechange=function()



{



if (xmlhttp.readyState==4 && xmlhttp.status==200)



{
//alert(xmlhttp.responseText)
f.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.value=xmlhttp.responseText;



}

}

xmlhttp.open("GET","<?php echo base_url();?>ajaxfiles/getmargin.php?c="+str+"&catid="+catid,true);



xmlhttp.send();

}
function getinstcost(f,str)

{


     
	
var xmlhttp;    

if (window.XMLHttpRequest)

{// code for IE7+, Firefox, Chrome, Opera, Safari

xmlhttp=new XMLHttpRequest();

}

else



{// code for IE6, IE5



xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");



}



xmlhttp.onreadystatechange=function()



{



if (xmlhttp.readyState==4 && xmlhttp.status==200)



{

f.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.value=xmlhttp.responseText;



}

}

xmlhttp.open("GET","<?php echo base_url();?>ajaxfiles/getinstcost.php?catid="+str,true);



xmlhttp.send();

}


function choosesubscription(f,str)

	{

   var element = $(f).find('option:selected'); 
        var catid = element.attr("id"); 

var xmlhttp;    

if (window.XMLHttpRequest)

{// code for IE7+, Firefox, Chrome, Opera, Safari

xmlhttp=new XMLHttpRequest();

}

else



{// code for IE6, IE5



xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");



}



xmlhttp.onreadystatechange=function()



{



if (xmlhttp.readyState==4 && xmlhttp.status==200)



{


f.nextElementSibling.value=xmlhttp.responseText;




}

}

xmlhttp.open("GET","<?php echo base_url();?>ajaxfiles/choosesubscription.php?c="+catid+"&d="+str,true);



xmlhttp.send();



}



</script>


<script>

function getexistdata()

{



euid=document.getElementById('euid').value;

var xmlhttp;    

if (window.XMLHttpRequest)

{// code for IE7+, Firefox, Chrome, Opera, Safari

xmlhttp=new XMLHttpRequest();

}

else



{// code for IE6, IE5



xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");



}



xmlhttp.onreadystatechange=function()



{



if (xmlhttp.readyState==4 && xmlhttp.status==200)



{



if(xmlhttp.responseText=='exist')

{

abc="welcome";

uid=euid;

window.top.location.href="<?php echo base_url();?>customer_registration/add/?msg="+abc+"&uid="+uid;

}

else

{

abc=xmlhttp.responseText;

window.top.location.href="<?php echo base_url();?>customer_registration/index/?msg="+abc;

}

}}

xmlhttp.open("GET","<?php echo base_url();?>ajaxfiles/getexistdata.php?c="+euid,true);



xmlhttp.send();





}

</script>

	

<script>

function getburows(str)

{





var xmlhttp;    

if (str=="")

{

document.getElementById("txtHint").innerHTML="";

return;

}

if (window.XMLHttpRequest)

{// code for IE7+, Firefox, Chrome, Opera, Safari

xmlhttp=new XMLHttpRequest();

}

else

{// code for IE6, IE5

xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");

}

xmlhttp.onreadystatechange=function()

{

if (xmlhttp.readyState==4 && xmlhttp.status==200)

{



document.getElementById("burows").innerHTML=xmlhttp.responseText;

}



}



xmlhttp.open("GET","<?php echo base_url();?>ajaxfiles/getburows.php?c="+str,true);

xmlhttp.send();

}

function showbtndivs()
{
	a=document.getElementById('chkenter').checked;

if(a==true)
{
chequeno=document.getElementById('chequeno').value;
	bankname=document.getElementById('bankname').value;
	branchname=document.getElementById('branchname').value;
	branchlocation=document.getElementById('branchlocation').value;
	if((chequeno!='')&&(bankname!='')&&(branchname!='')&&(branchlocation!=''))
	{
	document.getElementById('btndivs').style.display="block";
	}
	else
	{
	alert("Please Fill All the Cheque Details");
	document.getElementById('chkenter').checked=false;
	document.getElementById('btndivs').style.display="none";
	}

	
}
else
{
	document.getElementById('btndivs').style.display="none";
}
	
}
</script>

<script>


function reducecost()
{
	finalcost=parseInt(document.getElementById('finalcost').value);
	finalcostt=parseInt(document.getElementById('finalcostt').value);
	codeid=parseInt(document.getElementById('codeid').value);
	code=document.getElementById('code').value;


var xmlhttp;    

if (window.XMLHttpRequest)

{// code for IE7+, Firefox, Chrome, Opera, Safari

xmlhttp=new XMLHttpRequest();

}

else



{// code for IE6, IE5



xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");



}



xmlhttp.onreadystatechange=function()



{



if (xmlhttp.readyState==4 && xmlhttp.status==200)



{



abc=xmlhttp.responseText;

if(abc.trim()!='Not a Valid Promo Code')
{

	answerValue=finalcost-(finalcost*(parseFloat(abc)/100));

document.getElementById('amount').value=Math.round(answerValue);
document.getElementById('finalcost').value=Math.round(answerValue);
	document.getElementById('cashpending').value=Math.round(answerValue);
	document.getElementById('totlpayablecash').value=Math.round(answerValue);
	document.getElementById('chequepending').value=Math.round(answerValue);
	document.getElementById('totlpayablecheque').value=Math.round(answerValue);
	document.getElementById('totalpending').value=Math.round(answerValue);
		document.getElementById('ontransferpending').value=Math.round(answerValue);
	document.getElementById('totlpayableontransfer').value=Math.round(answerValue);
}
else
{
	alert('Not a Valid Promo Code');
	document.getElementById('code').value='';
	document.getElementById('code').focus();
	document.getElementById('finalcost').value=Math.round(finalcostt);
	document.getElementById('amount').value=Math.round(finalcostt);
	document.getElementById('cashpending').value=Math.round(finalcostt);
	document.getElementById('totlpayablecash').value=Math.round(finalcostt);
	document.getElementById('chequepending').value=Math.round(finalcostt);
	document.getElementById('totlpayablecheque').value=Math.round(finalcostt);
	document.getElementById('totalpending').value=Math.round(finalcostt);
		document.getElementById('ontransferpending').value=Math.round(finalcostt);
	document.getElementById('totlpayableontransfer').value=Math.round(finalcostt);
}

}

}

xmlhttp.open("GET","<?php echo base_url();?>ajaxfiles/checkpromo.php?code="+code+"&codeid="+codeid,true);



xmlhttp.send();



}


</script>

<script>
function changevat()
{
	if(document.getElementById('simyes').checked)
	{
		//document.getElementById('bavt').value='2';
		$('.vat').val('2');
		document.getElementById("Label2").innerHTML = 'CST(2%)';
	}
	else
	{
			$('.vat').val('14.5');
			document.getElementById("Label2").innerHTML = 'CST(14.5%)';
	}
	
	
}

</script>

<script>
function getdevpromo(f,str)
{


       var element = $(f).find('option:selected'); 
        var catid = element.attr("id"); 
        var devname= element.attr("name"); 
		//alert(str);
		if(str==25)
		{
	

f.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.style.visibility="visible";
document.getElementById('pca').innerHTML="Promo Code";


}
else{

	document.getElementById('pca').innerHTML=" ";
	f.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.style.visibility="hidden";
		document.getElementById('erdiv').innerHTML=" ";
			f.nextElementSibling.disabled=false;
	
}
}
</script>

<script>
function checkdevicepromo(str,abc)
{

	devdiscount=document.getElementById("devdiscount").value;
	
	
	devcst=parseInt($(str).prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input:first').val());
	
	var xmlhttp;    



if (window.XMLHttpRequest)

{// code for IE7+, Firefox, Chrome, Opera, Safari

xmlhttp=new XMLHttpRequest();

}

else

{// code for IE6, IE5

xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");

}

xmlhttp.onreadystatechange=function()

{

if (xmlhttp.readyState==4 && xmlhttp.status==200)

{

if(xmlhttp.responseText.trim()=='failure')
{
	alert("Please Enter Valid Promo Code");
	$(str).focus();
	//document.getElementById("errordiv").value=xmlhttp.responseText;
document.getElementById("erdiv").innerHTML="Not a Valid Promo Code";
	
}
else
{

	//$(str).prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input:first').val(xmlhttp.responseText.trim());
	$(str).prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input:first').val(0);


	$(str).prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input:first').attr('disabled', 'disabled');
	$(str).prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input:first').attr('disabled', 'disabled');
	
	$(str).prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input:first').val(0);
	
	inst=parseInt($(str).prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input:first').val());

intcst=parseInt(inst-63);
$(str).prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input:first').val(intcst);

simamnt=parseInt($(str).prevAll('input:first').val());


stax=parseFloat($(str).prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input:first').val());
vtax=parseFloat($(str).prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input:first').val());

devcst=parseInt($(str).prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input:first').val());

qty=parseInt($(str).prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input:first').val());

subcst=0;
servicetax=((subcst*qty)+(intcst*qty)+(simamnt*qty))*(stax/100);


vat=(devcst*qty)*(vtax/100);

total=(devcst+subcst+intcst+simamnt)*(qty);

gandtotal=total+servicetax+vat;

Math.round($(str).prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input:first').val(total));
Math.round($(str).prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input:first').val(servicetax));
Math.round($(str).prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input:first').val(vat));
Math.round($(str).prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input').prevAll('input:first').val(gandtotal));
getsummary();


}



}



}



xmlhttp.open("GET","<?php echo base_url();?>ajaxfiles/checkdevicepromo.php?code="+devdiscount+"&devcst="+devcst,true);

xmlhttp.send();
}

</script>
</div>

</body></html>
