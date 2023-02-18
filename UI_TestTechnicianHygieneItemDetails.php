<?php
//Zalikha
include 'SW_Route.php';
include 'shared/OP_CheckSession.php';
include 'shared/OP_CheckRecord.php';

$userId = $_SESSION['authenticated_user_id'];

//For Document & History View
// $relatedDocuments = ebs_GetRelatedDocs($jobId); // Put in OP_CheckRecord.php
$relatedJobs = ebs_GetOrganizationHistory($jobId);

//variable for display purpose
$bar1UserName = ebs_GetStaffName($userId);	//EBS_SharedFunctions
$bar2Label = "Item Detail";

//Set Parameter
$showBar1_Tech_List = 'Yes';
$showBar2_General = 'Yes';
$showBar3_Tech_Detail = 'Yes';

//File output
// file_put_contents('JobDetails1.txt', print_r($relatedDocuments, true));	
// file_put_contents('JobDetails2.txt', print_r($relatedJobs, true));	

?>
<!DOCTYPE html>
<html>
<title>ITEM DETAIL</title>
<meta charset="UTF-8">
<link href="favicon.ico" rel="icon" type="image/x-icon"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.collapsible {
  background-color: #FFD966;
  color: white;
  cursor: pointer;
  padding: 3px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 5px;
}
.fa fa-minus {
  color: white;
  cursor: pointer;
  padding-left: 10px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 5px;
}
table, th, td {
  border-collapse: collapse;
}

table.center {
  margin-left: auto; 
  margin-right: auto;
}
</style>
<script type="text/javascript" src="<?php echo $GLOBALS['crmUrl']; ?>/jquery-3.5.1.min.js"></script>
<body class="w3-white">
<link rel="stylesheet" href="css/w3styles.css">
<link rel="stylesheet" href="css/UI_EbsStyleSheet.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
include 'UI_BarTop.php';
?>
  <div class="w3-row-padding w3-margin-top" id="myHeader"> </div>
  <div class="w3-row-padding" style="margin-top: 8px"><br>
  </div>
  <br><br>
  
  <!-- For ticket that related to job -->
  <?php echo $extraBreak; ?>

  <!-- Project Section -->
	<div id="Details" class="w3-container status w3-animate-opacity">
		<div style="padding-top: 30px">
		  <table style="width: 100%;">
		  </table>
		</div>
		
	     <hr>
                <div class="w3-row-padding w3-margin-top">
				<button type="button" class="collapsible" style="margin-bottom: 2px; background-color:#FFD966; padding: 3px;">
							<i class="fa fa-minus" aria-hidden="true" style='font-size:20px;color:#00b200; vertical-align: middle;  padding-left: 10px;'></i>							
				</button>
				
				  <div class="w3-card w3-container content" style="min-height:150px; background-color:#FFD966;">
				  <br>
						<div class="w3" style="min-height:150px;">
	                     <div class="column-hygine-info" style="background-color :#00ff00; height:auto; width:100%;">
	                       <p style="font-weight: bold; float:left;">Area A-G-1 - Lobby</p>
	                       <table style="width:100%;margin-top:-5px;">
		                     <td style="font-weight: bold; float:left;">Sanitary Bin - Auto</td>
		                     <td style="float:right;">Asset 12345</td>
	                       </table>
	                       <table style="margin-top:5px;">
		                     <tr>
			                    <td style="float:left;">Condition :</td>
			                    <td style="float:left;">Good</td>
		                     </tr>
		                     <tr>
			                    <td style="float:left;">Action :</td>
			                    <td style="float:left;">Refill</td>
		                     </tr>
							 <tr>
			                    <td style="float:left;">Status :</td>
			                    <td style="float:left;">--</td>
		                     </tr>
	                       </table>
	                    </div>
                       </div>
					<hr>				
					<div class="w4" style="min-height:150px;">
	                     <div class="column-hygine-info" style="background-color :#FFA500; height:auto; width:100%;">
	                       <p style="font-weight: bold; float:left;">Area A-G-1 - Lobby</p>
	                       <table style="width:100%;margin-top:-5px;">
		                     <td style="font-weight: bold; float:left;">Sanitary Bin - Auto</td>
		                     <td style="float:right;">Asset 12345</td>
	                       </table>
	                       <table style="margin-top:5px;">
		                      <tr>
			                    <td style="float:left;">Condition :</td>
			                    <td style="float:left;">Good</td>
		                      </tr>
		                      <tr>
			                    <td style="float:left;">Action :</td>
			                    <td style="float:left;">Refill</td>
		                      </tr>
							  <tr>
			                    <td style="float:left;">Status :</td>
			                    <td style="float:left;">--</td>
		                      </tr>
	                        </table>
	                    </div>
                    </div>
					<hr>
                    <div class="w5" style="min-height:150px;">
	                      <div class="column-hygine-info" style="background-color :#B3CCCC; height:auto; width:100%;">
	                          <p style="font-weight: bold; float:left;">Area A-G-1 - Lobby</p>
	                          <table style="width:100%;margin-top:-5px;">
		                         <td style="font-weight: bold; float:left;">Sanitary Bin - Auto</td>
		                         <td style="float:right;">Asset 12345</td>
	                          </table>
	                          <table style="margin-top:5px;">
		                         <tr>
			                    <td style="float:left;">Condition :</td>
			                    <td style="float:left;">Good</td>
		                         </tr>
		                         <tr>
			                        <td style="float:left;">Action :</td>
			                         <td style="float:left;">Refill</td>
		                         </tr>
								 <tr>
			                    <td style="float:left;">Status :</td>
			                    <td style="float:left;">--</td>
		                        </tr>
	                          </table>
	                       </div>
                     </div>	 					 
					<hr>
					<br>
					<div class="w5" style="min-height:50px;">
	                      <div class="column-hygine-info" style="background-color :#696868; height:auto; width:250px; margin: 0 auto; Text-align: center">
	                         <p style="font-weight: bold;">Please scan Asset QR to setup</p>               
	                      </div>
                     </div>
					 <center class="photo"  name="photo[]">
							<a class="w3-button hcustom9 w3-dark-gray w3-margin-center;" href="UI_SetupHygieneAreaQR.php?jobid=<?php echo $jobId; ?>" data-role="button" data-ajax="false">Add QR</a>
					</center>
					<br>
				  </div>		  
		   </div>
			<br>
				 <div class="w3-section">
						  <center>
							<a href="UI_TakePhoto.php?<?php echo $recordType; ?>=<?php echo $recordId; ?>" target="_blank"><button style="width: 150px" type='button' class="w3-button hcustom9 w3-dark-grey">Take Photo</button>
							</a>
						  </center>
				  </div>
                  <?php
						//$photo = ebs_GetRelatedDocs($recordId);
						$photo = 1;
						if($photo ==1)
						{
						  $count=1;
							?>
							<div class="w3-section">
								<table class="center" style="width:15%; border-collapse:collapse;">
										<?php
										//dummy photo for test purpose only
                                        $imageTest = $GLOBALS['webFormUrl']."/image/JOB26_20220830_1513.jpg";
										$filename = 'JOB26_20220830';
										//foreach($photo as $docId => $docInfo):
										?>
											<td>
											<?php echo $count.")"; ?>
											</td>
											<td>
												<a href="UI_DisplayPhoto.php" target=blank><?php echo substr($filename, 0, 12); ?></a><br>
											</td>
											<td>
												<a href="UI_DisplayPhoto.php" target="_blank"><img src="<?php echo $imageTest; ?>" style="width: 40px; height: 40px;"/></a>
											</td>
										<?php
										//$count++;
										//endforeach;
										?>
								</table>
							</div>
							<?php
						}
                            ?>					
			<center><a class="w3-button hcustom9 w3-dark-gray" href="UI_TechnicianJobLists.php<?php echo $jobId; ?>" data-role="button" data-ajax="false">OK</a></center>
			<br>
	</div>
	
 <script type="text/javascript">
	function fileChange(e) 
	{
		for (var i = 0; i < e.target.files.length; i++)
		{ 
		  let self= this;
		  self.field= e.target.id;
		  let file = e.target.files[i];
		  console.log(self.field, file);	//self.field = instructionId
		  
		  if (file.type == "image/jpeg" || file.type == "image/png") 
		  {
			var reader = new FileReader();  
			reader.onload = function(readerEvent) 
			{
			  var image = new Image();
			  image.onload = function(imageEvent) 
			  {
				var max_size = 800;
				var w = image.width;
				var h = image.height;

				if (w > h) 
				{  
					if (w > max_size) 
					{ 
						h*=max_size/w; 
						w=max_size; 
					}
				}
				else     
				{  
					if (h > max_size) 
					{ 
						w*=max_size/h; 
						h=max_size; 
					} 
				}

				  var canvas = document.createElement('canvas');
				  canvas.width = w;
				  canvas.height = h;
				  canvas.getContext('2d').drawImage(image, 0, 0, w, h);
				  if (file.type == "image/jpeg") 
				  {
					var dataURL = canvas.toDataURL("image/jpeg", 1.0);
				  } 
				  else 
				  {
					var dataURL = canvas.toDataURL("image/png");    
				  }

				  //document.getElementsByClassName('inp_img')[i].value += dataURL + '|';
				  document.getElementsByName('inp_img[' + self.field + ']')[0].value += dataURL + '|';
				  
				  console.log("TEST "+ self.field +" VALUE:"+document.getElementsByName('inp_img[' + self.field + ']')[0].value);
				  
			  }
				
				// console.log("TEST VALUE");

				image.src = readerEvent.target.result;
			}
			
			reader.readAsDataURL(file);
			//console.log(reader.readAsDataURL(file));
		  } 
		  else 
		  {
			document.getElementsByName('inp_files[' + self.field + ']')[0].value += dataURL + '|';
			//document.getElementsByClassName('inp_files')[i].value = ''; 
			alert('Please only select images in JPG- or PNG-format.');   
			return false;
		  }
		}
	}
	var imagefiles = document.getElementsByClassName('inp_files');	//count instruction
	var imageimg = document.getElementsByClassName('inp_img');
	
	

	console.log(imagefiles);
	console.log(imageimg);
	
	for (var i=0; i<imagefiles.length; i++)
	{
		console.log("TEST VALUE");
		// console.log(imagefiles[i].value);
		imagefiles[i].addEventListener('change', fileChange, false);
	}
	
</script>

<script type="text/javascript">
	function fileChange(e) 
	{
		for (var i = 0; i < e.target.files.length; i++)
		{ 
		  let self= this;
		  self.field= e.target.id;
		  let file = e.target.files[i];
		  console.log(self.field, file);	//self.field = instructionId
		  
		  if (file.type == "image/jpeg" || file.type == "image/png") 
		  {
			var reader = new FileReader();  
			reader.onload = function(readerEvent) 
			{
			  var image = new Image();
			  image.onload = function(imageEvent) 
			  {
				var max_size = 800;
				var w = image.width;
				var h = image.height;

				if (w > h) 
				{  
					if (w > max_size) 
					{ 
						h*=max_size/w; 
						w=max_size; 
					}
				}
				else     
				{  
					if (h > max_size) 
					{ 
						w*=max_size/h; 
						h=max_size; 
					} 
				}

				  var canvas = document.createElement('canvas');
				  canvas.width = w;
				  canvas.height = h;
				  canvas.getContext('2d').drawImage(image, 0, 0, w, h);
				  if (file.type == "image/jpeg") 
				  {
					var dataURL = canvas.toDataURL("image/jpeg", 1.0);
				  } 
				  else 
				  {
					var dataURL = canvas.toDataURL("image/png");    
				  }

				  //document.getElementsByClassName('inp_img')[i].value += dataURL + '|';
				  document.getElementsByName('inp_img[' + self.field + ']')[0].value += dataURL + '|';
				  
				  console.log("TEST "+ self.field +" VALUE:"+document.getElementsByName('inp_img[' + self.field + ']')[0].value);
				  
			  }
				
				// console.log("TEST VALUE");

				image.src = readerEvent.target.result;
			}
			
			reader.readAsDataURL(file);
			//console.log(reader.readAsDataURL(file));
		  } 
		  else 
		  {
			document.getElementsByName('inp_files[' + self.field + ']')[0].value += dataURL + '|';
			//document.getElementsByClassName('inp_files')[i].value = ''; 
			alert('Please only select images in JPG- or PNG-format.');   
			return false;
		  }
		}
	}
	var imagefiles = document.getElementsByClassName('inp_files');	//count instruction
	var imageimg = document.getElementsByClassName('inp_img');
	
	

	console.log(imagefiles);
	console.log(imageimg);
	
	for (var i=0; i<imagefiles.length; i++)
	{
		console.log("TEST VALUE");
		// console.log(imagefiles[i].value);
		imagefiles[i].addEventListener('change', fileChange, false);
	}

	//For show Bar3
	function openStatus(evt, statusName) 
	{
		var i;
		var x = document.getElementsByClassName("status");
		for (i = 0; i < x.length; i++) 
		{
			x[i].style.display = "none";
		}
		var activebtn = document.getElementsByClassName("testbtn");
		for (i = 0; i < x.length; i++) 
		{
			activebtn[i].className = activebtn[i].className.replace(" w3-light-gray", "");
		}
		document.getElementById(statusName).style.display = "block";
		evt.currentTarget.className += " w3-light-gray";
	}

	var mybtn = document.getElementsByClassName("testbtn")[0];
	mybtn.click();

	
	//For baiting form
	var coll = document.getElementsByClassName("collapsible");
	var i;

	for (i = 0; i < coll.length; i++) 
	{
		coll[i].addEventListener("click", function() 
		{
		  this.classList.toggle("active");
		  var content = this.nextElementSibling;
		  if (content.style.display === "block") 
		  {
			content.style.display = "none";
		  }
		  else 
		  {
			content.style.display = "block";
		  }
		});
	}
</script>
</body>
</html>
