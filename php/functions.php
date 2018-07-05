
<!-- functions.php Thomas Crow 7/5/2018 -->
<!-- Last updated 7/5/2018 -->

<?php
	// checks if a company is present
	function byCompany($company){
		if(null($company)){
			return "Reserved";
		}else{
			return "Reserved by $company";
		}
	}
?>