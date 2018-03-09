<?php
/**
*This is the Mailer Content class
*/
	class Mailer {
		// Email HTML  MAILER PARA CLIENTE
		public function contentHtml($fname,$lname,$id,$salt){
			$message  = '<!DOCTYPE html>';
			$message .= '<html lang="en">';
			$message .= '<head>';
			$message .= '	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';
			$message .= '	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">';
			$message .= '</head>';
			$message .= '<html>';
			$message .= '<body style="font-family:Verdana, Geneva, sans-serif;color:black;">';
			$message .= '	<table align="center" style="border:1px solid #fff;max-width:700px;">';
			$message .= '		<tr>';
			$message .= '			<td colspan="5" style="width:100%;text-align:center;vertical-align:middle">';
			$message .= '				<img src="http://comiczone.hol.es/src/assets/img/logo.png" style="max-width:147px;">';
			$message .= '			</td>';
			$message .= '		</tr>';
			$message .= '		<tr>';
			$message .= '			<td colspan="5" style="width:100%;text-align:center;vertical-align:middle">';
			$message .= '				<img src="http://comiczone.hol.es/src/assets/img/banner.jpg">';
			$message .= '			</td>';
			$message .= '		</tr>';
			$message .= '		<tr>';
			$message .= '			<td><br><br></td>';
			$message .= '		</tr>';
			$message .= '		<tr>';
			$message .= '			<td colspan="5" style="padding-left:30px;padding-right:30px;"><p style="font-size:1.5rem;">HOLA '.strtoupper($fname).' '.strtoupper($lname).'!</p></td>';
			$message .= '		</tr>';
			$message .= '		<tr>';
			$message .= '			<td colspan="5" style="padding-left:30px;padding-right:30px;">';
			$message .= '				<p style="font-size:1rem;">	';
			$message .= '					Please, confirm your email by clicking on the button. ';
			$message .= '					You will be redirected to the mail verification page.';
			$message .= '				</p>';
			$message .= '				<br>';
			$message .= '			</td>';
			$message .= '		</tr>';
			$message .= '		<tr>';
			$message .= '			<td colspan="5" align="center" style="text-align:center;padding-left:30px;padding-right:30px;">';
			$message .= '				<a href="http://comiczone.hol.es/confirmation.php?x='.$id.'&y='.$salt.'"';
			$message .= '				style="text-align: center;white-space: nowrap;vertical-align: middle;font-size: 1rem;';
			$message .= '				line-height: 1.5;border: 1px solid #840037;padding: 0.375rem 0.75rem;cursor:pointer;color:#840037;';
			$message .= '				text-decoration:none;';
			$message .= '				border-radius: 0.25rem;transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;">';
			$message .= '					Continue Here!';
			$message .= '				</a>';
			$message .= '			</td>';
			$message .= '		</tr>';
			$message .= '		<tr>';
			$message .= '			<td colspan="5" style="padding-left:30px;padding-right:30px;">';
			$message .= '				<p style="font-size:1rem;">';
			$message .= '					<br><br>	';
			$message .= '					Thanks for enjoy to the Beet Communitiy!';
			$message .= '					<br><br>';
			$message .= '				</p>';
			$message .= '				<br>';
			$message .= '			</td>';
			$message .= '		</tr>';
			$message .= '		<tr>';
			$message .= '			<td>';
			$message .= '				<hr>';
			$message .= '			</td>';
			$message .= '		</tr>';
			$message .= '	</table>';
			$message .= '</body>';
			$message .= '</html>';
			
			return $message;
		}

		// Email Plain Text
		public function contentPlain($fname,$lname,$id,$salt){
			
			$message  = "Hola ".$fname." ".$lname."";
			$message .= "\n";
			$message .= "Por favor, confirma tu correo electrónico haciendo clic en el link de abajo. ";
			$message .= "Serás dirigido a la página de verificación de correo.";
			$message .= "\n";
			$message .= "http://comiczone.hol.es/confirmation.php?x=".$id."&y=".$salt;
			$message .= "\n";
			$message .= "Gracias por unirte a la comunidad de paramezul!";
			
			
			return $message;
		}


		//	FIN MAILER PARA CLIENTE

		// MAILER PARA ADMINISTRADOR

		public function admincontentHtml($fname,$lname,$id,$salt){
			$message  = '<!DOCTYPE html>';
			$message .= '<html lang="en">';
			$message .= '<head>';
			$message .= '	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';
			$message .= '	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">';
			$message .= '</head>';
			$message .= '<html>';
			$message .= '<body style="font-family:Verdana, Geneva, sans-serif;color:black;">';
			$message .= '	<table align="center" style="border:1px solid #fff;max-width:700px;">';
			$message .= '		<tr>';
			$message .= '			<td colspan="5" style="width:100%;text-align:center;vertical-align:middle">';
			$message .= '				<img src="http://comiczone.hol.es/src/assets/img/logo.png" style="max-width:147px;">';
			$message .= '			</td>';
			$message .= '		</tr>';
			$message .= '		<tr>';
			$message .= '			<td colspan="5" style="width:100%;text-align:center;vertical-align:middle">';
			$message .= '				<img src="http://comiczone.hol.es/src/assets/img/banner.jpg">';
			$message .= '			</td>';
			$message .= '		</tr>';
			$message .= '		<tr>';
			$message .= '			<td><br><br></td>';
			$message .= '		</tr>';
			$message .= '		<tr>';
			$message .= '			<td colspan="5" style="padding-left:30px;padding-right:30px;"><p style="font-size:1.5rem;">HOLA '.strtoupper($fname).' '.strtoupper($lname).'!</p></td>';
			$message .= '		</tr>';
			$message .= '		<tr>';
			$message .= '			<td colspan="5" style="padding-left:30px;padding-right:30px;">';
			$message .= '				<p style="font-size:1rem;">	';
			$message .= '					Please, confirm your email by clicking on the button. ';
			$message .= '					You will be redirected to the mail verification page.';
			$message .= '				</p>';
			$message .= '				<br>';
			$message .= '			</td>';
			$message .= '		</tr>';
			$message .= '		<tr>';
			$message .= '			<td colspan="5" align="center" style="text-align:center;padding-left:30px;padding-right:30px;">';
			$message .= '				<a href="http://comiczone.hol.es/active.php?x='.$id.'&y='.$salt.'"';
			$message .= '				style="text-align: center;white-space: nowrap;vertical-align: middle;font-size: 1rem;';
			$message .= '				line-height: 1.5;border: 1px solid #840037;padding: 0.375rem 0.75rem;cursor:pointer;color:#840037;';
			$message .= '				text-decoration:none;';
			$message .= '				border-radius: 0.25rem;transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;">';
			$message .= '					Continue Here!';
			$message .= '				</a>';
			$message .= '			</td>';
			$message .= '		</tr>';
			$message .= '		<tr>';
			$message .= '			<td colspan="5" style="padding-left:30px;padding-right:30px;">';
			$message .= '				<p style="font-size:1rem;">';
			$message .= '					<br><br>	';
			$message .= '					Thanks for enjoy to the Beet Communitiy!';
			$message .= '					<br><br>';
			$message .= '				</p>';
			$message .= '				<br>';
			$message .= '			</td>';
			$message .= '		</tr>';
			$message .= '		<tr>';
			$message .= '			<td>';
			$message .= '				<hr>';
			$message .= '			</td>';
			$message .= '		</tr>';
			$message .= '	</table>';
			$message .= '</body>';
			$message .= '</html>';
			
			return $message;
		}

		// Email Plain Text
		public function admincontentPlain($fname,$lname,$id,$salt){
			
			$message  = "Hola ".$fname." ".$lname."";
			$message .= "\n";
			$message .= "Por favor, confirma tu correo electrónico haciendo clic en el link de abajo. ";
			$message .= "Serás dirigido a la página de verificación de correo.";
			$message .= "\n";
			$message .= "http://comiczone.hol.es/active.php?x=".$id."&y=".$salt;
			$message .= "\n";
			$message .= "Gracias por unirte a la comunidad de paramezul!";
			
			
			return $message;
		}












		// FIN MAILER PARA ADMINISTRADOR
	}