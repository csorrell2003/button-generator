// JavaScript Document
$( document ).ready(function() {
//send ajax call to update code view
$('#result').submit(function() { // catch the form's submit event
    $.ajax({ // create an AJAX call...
        data: $(this).serialize(), // get the form data
        type: $(this).attr('method'), // GET or POST
        url: $(this).attr('action'), // the file to call
        success: function(response) { // on success..
            $('#rightcol').html(response); // update the DIV
        }
    });
    return false; // cancel original event to prevent form submitting
});

//set colorpicker display
$(".custom").spectrum({
    color: "black",
	preferredFormat: "hex",
    showInput: true
});


	
//put button into var
var customButton = $('.custom_button');

//inserts button text
var inputBox = document.getElementById('changeText');

inputBox.onkeyup = function(){
    document.getElementById('mybutton').innerHTML = inputBox.value;
}

//change css values
//font family
function changeFont(){ 
customButton.css('font-family', $('#font-family').val()); 
}
//font-weight
function changeBold(){ 
	if (document.getElementById('font-weight').checked) {
customButton.css('font-weight', $('#font-weight').val()); 
}
else {
	customButton.css('font-weight','normal');
}
}
//font-style
function changeItalic(){
	 if (document.getElementById('font-style').checked) {
customButton.css('font-style', $('#font-style').val()); 
}
else{
	customButton.css('font-style','normal'); 
}
}
//text-decoration
function changeUnderline(){
	 if (document.getElementById('text-decoration').checked) {
customButton.css('text-decoration', $('#text-decoration').val()); 
}
else{
	customButton.css('text-decoration','none'); 
}
}
//border width
 $('#border').change(function(){
       customButton.css('border-width',this.value+'px');
	   customButton.css('border-style','solid');
 });
 
//border radius
 $('#border-radius').change(function(){
       customButton.css('-webkit-border-radius' ,this.value+'px');
	   customButton.css('-moz-border-radius' ,this.value+'px');
	   customButton.css('border-radius' ,this.value+'px');
 });
 
 //font-size
 $('#font-size').change(function(){
       customButton.css('font-size',this.value+'px');
 });
 
 //padding

 $('#padding1').change(function(){
       customButton.css('padding-top',this.value+'px');
 });

$('#padding1').change(function(){
       customButton.css('padding-bottom',this.value+'px');
 });
 
 
 $('#padding2').change(function(){
       customButton.css('padding-left',this.value+'px');
 });

$('#padding2').change(function(){
       customButton.css('padding-right',this.value+'px');
 });
 
 //text shadow

var shadowPX='2px '+'1px '+'0px '
	
 function changeShadow(){
	 if (document.getElementById('text-shadow').checked) {
		 $("#hidden").css('display', 'block');
		 
$("#textShadow").spectrum({
	move:function(color){
		customButton.css('text-shadow',(shadowPX)+color.toHexString());
	}
	
});
	 }
	 else
	 { $("#hidden").css('display', 'none');

		customButton.css('text-shadow','');
	}
 }



//background color gradient
//handle gradient checkbox
function closeBGGradient(){
	 if (document.getElementById('nogradient').checked) {
		 $("#bgRange").css('display', 'none');
		 $("span#hideGradTop").css('display', 'none');
		 		 
	 }
	 else
	 { $("#bgRange").css('display', 'block');
	 $("span#hideGradTop").css('display', 'inline');
	 }
	 
 }
 
 //set gradient and background color
 
 function setGrad()
    {
		if (document.getElementById('nogradient').checked) {
		color1 = document.getElementById("color1").value;
    color2 = document.getElementById("color1").value;
		}else if(!(document.getElementById('nogradient').checked)) {
			color1 = document.getElementById("color1").value;
    color2 = document.getElementById("color2").value;
		}
	
    document.getElementById("gradient").style.background="-webkit-gradient(linear, left top, left bottom, from("+color1+"), to("+color2+"))";
    document.getElementById("gradient").style.background="-webkit-linear-gradient("+color1+", "+color2+")";
    document.getElementById("gradient").style.background="-moz-linear-gradient(top, "+color1+", "+color2+")";
    document.getElementById("gradient").style.background="-ms-linear-gradient("+color1+", "+color2+")";
    document.getElementById("gradient").style.background="-o-linear-gradient("+color1+", "+color2+")";
    document.getElementById("gradient").style.background="linear-gradient("+color1+", "+color2+")";
document.getElementById("gradient").style.filter="progid:DXImageTransform.Microsoft.Alpha(startColorstr='"+color1+"', endColorstr='"+color2+"')";

    }
	function setGrad2()
    {
	
	color1 = document.getElementById("color1").value;
    color2 = document.getElementById("color2").value;
	
    document.getElementById("gradient").style.background="-webkit-gradient(linear, left top, left bottom, from("+color1+"), to("+color2+"))";
    document.getElementById("gradient").style.background="-webkit-linear-gradient("+color1+", "+color2+")";
    document.getElementById("gradient").style.background="-moz-linear-gradient(top, "+color1+", "+color2+")";
    document.getElementById("gradient").style.background="-ms-linear-gradient("+color1+", "+color2+")";
    document.getElementById("gradient").style.background="-o-linear-gradient("+color1+", "+color2+")";
    document.getElementById("gradient").style.background="linear-gradient("+color1+", "+color2+")";
document.getElementById("gradient").style.filter="progid:DXImageTransform.Microsoft.Alpha(startColorstr='"+color1+"', endColorstr='"+color2+"')";

    }


//text color
$("#textColor").spectrum({
	move:function(color){
		customButton.css('color',color.toHexString());
	}
});

//border color
$("#borderColor").spectrum({
	move:function(color){
		customButton.css('border-color',color.toHexString());
	}
});
});