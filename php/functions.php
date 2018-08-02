
<!-- functions.php Thomas Crow 7/5/2018 -->
<!-- Last updated 8/3/2018 -->

<?php
	// checks if a company is present
	function byCompany($company){
		if(null($company)){
			return "Reserved";
		}else{
			return "Reserved by $company";
		}
	}
	/* function checkLoggedin($loggedin, $typehtml){
		if($loggedin){
			if($typehtml == 1){
				return "<tr>
						<td>
							<input style=\"display:none;\" type=\"text\" value=\"logout\">
							<form action=\"logout.php\">
								<input value=\"Logout\" type=\"submit\">
							</form>
						</td>
					</tr>";
			}elseif($typehtml == 2){
				return "<h1>Welcome</h1>";
			}
		}else{
			if($typehtml == 1){
				return "<tr onclick=\"location.href='login.php';\" style=\"cursor:pointer;\">
						<td>
							<h3>Login</h3>
						</td>
					</tr>";
			}elseif($typehtml == 2){
				return "<table style=\"border-style:solid;border-width:2px;width:75%;margin:0 auto;\">
			<tr>
				<td>
					<h3><a href=\"login.php\">Login</a></h3>
				</td>
			</tr>
			<tr>
				<td>
					<h3><a href=\"createaccount.php\">Create account</a></h3>
				</td>
			</tr>
		</table>";
			}
		}
	}
	*/
?>
