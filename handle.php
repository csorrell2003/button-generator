<?php

	$fontWeight = 'font-weight: '.$_POST['font-weight'].';';
	$fontStyle = 'font-style: '.$_POST["font-style"].';';
	$textDecoration = 'text-decoration: '.$_POST['text-decoration'].';';
	$fontFamily = 'font-family: '.$_POST['font-family'].';';
	$fontSize = 'font-size: '.$_POST['font-size'].'px;';
	
	$textShadow = 'text-shadow: 2px 1px 0px '.$_POST['text-shadow-color'].';';
	
	
	$bgColor='background-color: '.$_POST['color1'].';';
	
	$gColor1= $_POST['color1'];
	$gColor2= $_POST['color2'];
	
	
	$textColor= 'color: '.$_POST['color'].';';
	
	$borderColor= $_POST['border-color'];
		
	$borderSize= $_POST['border'].'px';
		
	
	$borderRadius= 'border-radius: '.$_POST['border-radius'].'px;';
	
	
	$height= $_POST['padding1'].'px';

	$width= $_POST['padding2'].'px';
		
	$padding= 'padding: '.$height.' '.$width.';';
	
	
	if ($_POST['font-weight'] == 'bold'){
		echo $fontWeight.'<br />';
	}
	
	if ($_POST['font-style'] == 'italic'){
		echo $fontStyle.'<br />';
	}
	
	if ($_POST['text-decoration'] == 'underline'){
		echo $textDecoration.'<br />';
	}
	
	if (isset($_POST['font-family'])){
		echo $fontFamily.'<br />';
	}else{
		echo "font-family: Arial, Helvetica, sans-serif;<br /";
	}
	
		echo $fontSize.'<br />';
	
	if ($_POST['text-shadow'] == 'text-shadow'){
		echo $textShadow.'<br />';
		}
	
	if (($_POST['gradient'] == 'gradient')){
		echo $bgColor.'<br />';
	}
	
	if (!($_POST['gradient'] == 'gradient')){
		
		echo $bgColor;
		echo '<br />';
		echo 'background: -webkit-gradient(linear, left top, left bottom, from(' . $gColor1 . '), to(' . $gColor2 . '));';
		echo '<br />';
    	echo 'background: -webkit-linear-gradient(' . $gColor1 . ', ' . $gColor2 . ');';
		echo '<br />';
    	echo 'background: -moz-linear-gradient(top, ' . $gColor1 . ', ' . $gColor2 . ');';
		echo '<br />';
    	echo 'background: -ms-linear-gradient(' . $gColor1 . ', ' . $gColor2 . ');';
		echo '<br />';
    	echo 'background: -o-linear-gradient(' . $gColor1 . ', ' . $gColor2 . ');';
		echo '<br />';
    	echo 'background: linear-gradient(' . $gColor1 . ', ' . $gColor2 . ');';
		echo '<br />';
		echo 'filter: progid:DXImageTransform.Microsoft.Alpha(startColorstr=' . '"' . $gColor1 . '", endColorstr="' . +$gColor2 . '");';
		echo '<br />';
		
	}
	
	echo $textColor.'<br />';
			
	echo 'border: '.$borderSize.' solid '.$borderColor.';<br />';
	
	
	echo $borderRadius.'<br />';
	
	
	echo $padding.'<br />';
		
	

	?>
   