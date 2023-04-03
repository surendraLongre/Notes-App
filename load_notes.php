<?php
	session_start();
	include('server.php');

	//get the user id
	$user_id=$_SESSION['user_id'];
	$sql="DELETE from notes WHERE notes=''";
	$result=mysqli_query($link, $sql);
	//run a query to delete empty note
	if(!$result) {echo "<div class='text-red bg-saffron'>an error occured</div>"; exit;}

	//show notes or alert messege
	//
	$sql="SELECT * from notes WHERE user_id='$user_id' ORDER BY TIME DESC";
	$result=mysqli_query($link, $sql);
	
	if($result) {
		if(mysqli_num_rows($result)>0){
			while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
				$id=$row['id'];
				$note=$row['notes'];
				$time=$row['time'];
				$time=date("F d,y h:i:s A");
				echo "<div class='flex width100 gap5'>
                                        <button class='delete hide border10 bg-red text-white pointer font120'>Delete</button>
                                        <div class='border-black bg-white padding5 border10 width100 pointer note' id='$id'>
                                                <h3 class='margin0 nowrap ellipsis'>$note</h3>
                                                <h5 class='margin0'>$time</h5>
                                        </div>
				</div>";

			
			}


		} else{
			echo "<div style='background:#FCF7E2' class='padding15 border10'>You have not created any note</div>";

		}
	} else{
		echo "<div>An error occured</div>"; exit;
	}

		
?>
