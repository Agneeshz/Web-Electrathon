
<?php
//error_reporting(0);
	
  //   if(isset($_POST["SUBMIT"]))
 //    {
 //        header('Location:form 2.htm');
	// }
//$conn= mysqli_connect('localhost','root','','covid');
//if(mysqli_connect_errno()){
	//echo "failed to connect";
	//exit();
//}
//else
//{
	$Name = $_POST["Name"];
	$FatherName = $_POST["FatherName"];
	$Email = $_POST["Email"];
	$PhNum = $_POST["PhNum"];
	$Address = $_POST["Address"];
	$City = $_POST["City"];
    $District = $_POST["District"];
    $State = $_POST["State"];
    $Country = $_POST["Country"];
	$Gender = $_POST["gender"];
	$Covid = $_POST['Covid'];
    $Dose = $_POST['dose'];
    $Vaccine = $_POST['Vaccine'];
    $Travel = $_POST['Travel'];
	
    // $Covid=$_POST['Covid'];
    // $Dose=$_POST['dose'];
    // $vaccination=$_POST['Vaccine'];
    // $travel=$_POST['Travel'];
	// Database connection
	
	//$sql="INSERT INTO  registration VALUES ('$Name','$FatherName','$Email','$PhNum','$Address','$City','$District','$State','$Country','$Gender','$Covid','$Dose','$Vaccine','$Travel')";
	//$data= mysqli_query($conn,$sql);
	//if($data && $sql)
	//	   echo '<p style="color:green;position:absolute;top:20px;left:41%;">Hey , Please find your covid details</p>'; 
	
	
	 
	//else
		 //  echo '<p style="color:red;position:absolute;top:20px;left:30%;">Failed to Data inserted into database May be you use some wrong credentials!!</p>';


//}


if($Covid=='y')
{
	$cov=0.95;
}
else if($Covid=='n')
{
	$cov=0.88;
}
if($Dose=='n')
{
	$dos=0.88;
}
else if($Dose=='s')
{
	$dos=0.95;
}
else if($Dose=='b')
{
	$dos=0.98;
}
if($Travel=='y')
{
	$trv=0.78;
}
else if($Travel=='n')
{
	$trv=0.98;
}
$final=$cov*$dos*$trv*100;
// echo $final;
	
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap"
      rel="stylesheet"
    />

    
        <style type='text/css'>
            body, html {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            body {
              margin: 0 auto;
                width: 1200px;
                color: black;
                display: table;
                font-family: Georgia, serif;
                font-size: 24px;
                text-align: center;
            }
            .container {
                border: 20px solid #6741d9;
                width: 750px;
                height: 563px;
                display: table-cell;
                vertical-align: middle;
                background-color: #e5dbff;

            }
            .logo {
              padding-top: 30px;
              font-size: 30px;
                color: #6741d9;
            }

            .marquee {
                color: #5c7cfa;
                font-size: 48px;
                margin: 20px;
            }
            .assignment {
                margin: 20px;
            }
            .person {
                border-bottom: 2px solid black;
                font-size: 32px;
                font-style: italic;
                margin: 20px auto;
                width: 400px;
            }
            .reason {
                margin: 20px;
            }
            table {
        width: 800px;
        margin-top: 100px;
        font-size: 18px;
        /* margin: 0 auto; */
        /* border: 1px solid #343a40; */
        border-collapse: collapse;
      }

      th,
      td {
        /* border: 1px solid #343a40; */
        padding: 16px 24px;
        text-align: left;
      }

      thead th {
        /* background-color: #087f5b; */
        color: #fff;
        width: 25%;
      }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="logo">
                RESULT
            </div>

            <div class="marquee">
                Covid Risk Assesment
            </div>

            <div class="assignment">
              <table>
                
          
                <tbody>
                  <tr>
                    <th> NAME</th>
                    <td><p><?php echo $Name; ?></p></td>
                    
                  </tr>
                  <tr>
                    <th>FATHER'S NAME</th>
                    <td><p><?php echo $FatherName; ?></p></td>
                    
                  </tr>
                  <tr>
                    <th>PHONE NUMBER</th>
                    <td><p><?php echo $PhNum; ?></p></td>
                    
                  </tr>
                  <tr>
                    <th>ADDRESS</th>
                    <td><p><?php echo $Address; ?></p></td>
                  </tr>
                  <tr>
                    <th>COUNTRY</th>
                    <td<p><?php echo $Country; ?></p></td>
                  </tr>
                  <tr>
                    <th>STATE</th>
                    <td><p><?php echo $State; ?></p></td>
                  </tr>
                  <tr>
                    <th>DISTRICT</th>
                    <td><p><?php echo $District; ?></p></td>
                  </tr>
                  <tr>
                    <th>CITY</th>
                    <td><p><?php echo $City; ?></p></td>
                  </tr>
          
                </tbody>
              </table>
            </div>
			<p class="result">YOUR COVID SAFETY RATING : <p><?php echo $final; ?></p>
          
        </div>
    </body>
</html>
  </body>
</html>
