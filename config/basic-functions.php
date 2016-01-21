<?php

function inputForm ($name,$type,$required=FALSE,$placeholder="",$error="",$value="") {
    $data = "<div class='form-group has-feedback' >";
    $data .= "<input class='form-control' name='$name' id='$name' type='$type' placeholder='$placeholder' data-error='$error'  value='$value' ";
    $data .= ($required == TRUE)? "required":"";
    $data .= ">
            <div class='glyphicon form-control-feedback' id='fname1'></div>
            <div class='help-block with-errors'></div>
        </div>";
    return $data;
}

function inputPassworConfrirmation ($name,$required=FALSE,$placeholder="",$error="",$confirmId="") {
    $data = "<div class='form-group has-feedback' >";
    $data .= "<input class='form-control' name='$name' type='password' placeholder='$placeholder' data-error='$error' data-match='#$confirmId' ";
    $data .= ($required == TRUE)? "required":"";
    $data .= ">
            <div class='glyphicon form-control-feedback' id='fname1'></div>
            <div class='help-block with-errors'></div>
        </div>";
    return $data;
}
function inputEmail ($name,$required=FALSE,$placeholder="",$error="",$value="") {
    
    $data = "<div class='form-group has-feedback' >";
    $data .= "<div class='input-group'>";
    $data .= "<span class='input-group-addon'>@</span>";
    $data .= "<input class='form-control' name='$name' type='email' placeholder='$placeholder' data-error='$error' value='$value' ";
    $data .= ($required == TRUE)? "required":"";
    $data .= ">
            <div class='glyphicon form-control-feedback' id='fname1'></div>
             </div>
             <div class='help-block with-errors'></div>
       </div>";
    return $data;
    
}
function redirectTo ($url) {
    header('Location: '.$url);
	exit();
}
/** Redirectioneaza userul neautentifiat
 * @param integer $check
 * @param string $destination
 * @param strig $protocol
 * daca nu exista user_id atunci redirectioneaza catre $destination
 */
function redirect_invalid_user ($check="user_id", $destination="index.php", $protocol = "http://") {
		if (!isset($_SESSION[$check])) {
			$url = $protocol.WEB_ROOT.$destination;
			header("Location: $url");
			exit();
		}
}

function niceTitle ($title) {
    if (strstr($title, "-")) {
        $title = str_replace("-", " ", $title);
    }
    $explode = explode(" ", $title);
    $explodeElement = count($explode);
    $niceTitle ="";
    foreach ($explode as $id => $uglyTitle) {
        $niceTitle .= ($id == $explodeElement-1)? ucfirst($uglyTitle) : ucfirst($uglyTitle)." ";
    }
    return $niceTitle;
    
}
function mailOferta ($to, $nume, $loc1,$loc2,$nrPersoane,$email,$telefon) {
    
    $subject = $nume." a solicitat o oferta pentru inchiriere transport";

    $headers = "From: office@dst-grup.ro\r\n";
    $headers .= "Reply-To: office@dst-grup.ro\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    
    $message = '<html><body>';
    $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
    $message .= "<tr style='background: #eee;'><td><strong>Denumire:</strong> </td><td>$nume</td></tr>";
    $message .= "<tr><td><strong>Telefon:</strong> </td><td>$telefon</td></tr>";
    $message .= "<tr><td><strong>Email:</strong> </td><td>$email</td></tr>";
    $message .= "<tr><td><strong>Localitate 1:</strong> </td><td>$loc1</td></tr>";
    $message .= "<tr><td><strong>Localitate 2:</strong> </td><td>$loc2</td></tr>";
    $message .= "<tr><td><strong>Nr persoane:</strong> </td><td>$nrPersoane</td></tr>";
    $message .= "</table>";
    $message .= "</body></html>";
     
    mail($to, $subject, $message, $headers);
}

function mailContact ($to, $nume, $telefon, $email, $text) {
    
    $subject = $nume." a trimis un formular de contact";

    $headers = "From: office@dst-grup.ro\r\n";
    $headers .= "Reply-To: office@dst-grup.ro\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    
    $message = '<html><body>';
    $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
    $message .= "<tr style='background: #eee;'><td><strong>Denumire:</strong> </td><td>$nume</td></tr>";
    $message .= "<tr><td><strong>Telefon:</strong> </td><td>$telefon</td></tr>";
    $message .= "<tr><td><strong>Email:</strong> </td><td>$email</td></tr>";
    $message .= "<tr><td><strong>Mesaj:</strong> </td><td>$text</td></tr>";
    $message .= "</table>";
    $message .= "</body></html>";
     
    mail($to, $subject, $message, $headers);
}