<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content=
    "text/html; charset=utf-8" />
    <title>
      Button Maker
    </title>
    <link rel="shortcut icon" href="/favicon.ico" type=
    "image/x-icon" />
    <script src=
    "//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"
    type="text/javascript">
</script>
    <script src="js/spectrum.js" type="text/javascript">
</script>
    <link rel='stylesheet' href="css/spectrum.css" type=
    "text/css" />
    <link rel='stylesheet' type='text/css' href="css/style.css" />
    <script src="js/less.js" type="text/javascript">
</script>
  </head>
  <body>
    <div id="header">
      <h1>
        Button Maker
      </h1>
      <h2>
        CSS Generator
      </h2>
    </div>
    <div id="container3">
      <div id="container2">
        <div id="container1">
          <div id="col1">
            <p class="views">
              Adjustments
            </p>
            <div id="formview">
              <div class='row'>
                <div class="leftcol1">
                  <form id='result' action="handle.php" method=
                  "post"></form>
                  <div id="button_text">
                    Text: <input type="text" name="changeText" id=
                    "changeText" value="Enter text" />
                  </div>
                </div>
                <div class='leftcol2'>
                  Bold<input type="checkbox" id="font-weight" name=
                  "font-weight" value="bold" onclick=
                  "changeBold()" /> Italic<input type="checkbox"
                  id="font-style" name="font-style" value="italic"
                  onclick="changeItalic()" /> Underline<input type=
                  "checkbox" id="text-decoration" name=
                  "text-decoration" value="underline" onclick=
                  "changeUnderline()" />
                </div>
              </div>
              <div class='row'>
                <div class='leftcol1'>
                  Font: <select name="font-family" id="font-family"
                  onclick="changeFont()">
                    <option value="Arial, Helvetica, sans-serif">
                      Arial
                    </option>
                    <option value=
                    "Arial Black, Gadget, sans-serif">
                      Arial Black
                    </option>
                    <option value=
                    "Comic Sans MS, cursive, sans-serif">
                      Comic Sans MS
                    </option>
                    <option value="Impact, Charcoal, sans-serif">
                      Impact
                    </option>
                    <option value=
                    "Lucida Sans Unicode, Lucida Grande, sans-serif">
                    Lucinda Sans Unicode
                    </option>
                    <option value="Tahoma, Geneva, sans-serif">
                      Tahoma
                    </option>
                    <option value=
                    "Trebuchet MS, Helvetica, sans-serif">
                      Trebuchet MS
                    </option>
                    <option value="Verdana, Geneva, sans-serif">
                      Verdana
                    </option>
                    <option value="Georgia, serif">
                      Georgia
                    </option>
                    <option value=
                    "Palatino Linotype, Book Antiqua, Palatino, serif">
                    Palatinto Linotype
                    </option>
                    <option value="Times New Roman, Times, serif">
                      Times New Roman
                    </option>
                    <option value=
                    "Courier New, Courier, monospace">
                      Courier New
                    </option>
                    <option value=
                    "Lucida Console, Monaco, monospace">
                      Lucinda Console
                    </option>
                  </select>
                </div>
                <div class='leftcol2'>
                  Font Size:<br />
                  <input type='range' class='range' id='font-size'
                  name='font-size' value='25' min='15' max='40'
                  onchange=
                  'fontSizeResult.value = this.value + "px"' />
                </div>
              </div>
              <div class='row'>
                <div class="leftcol1">
                  Text Shadow: <input type='checkbox' id=
                  'text-shadow' name='text-shadow' value=
                  'text-shadow' onclick='changeShadow()' />
                </div>
                <div class='leftcol2'>
                  <div id='hidden'>
                    Shadow Color: <input type='text' class='custom'
                    id='textShadow' value='black' name=
                    'text-shadow-color' />
                  </div>
                </div>
              </div>
              <div class='row' id='bgRow'>
                <div class='leftcol1'>
                  Background <span id='hideGradTop'>Gradient
                  Top</span>: <input type='text' class='custom' id=
                  'color1' value="#E9EDF6" name='color1' onchange=
                  'setGrad()' /><br />
                  No Gradient: <input type='checkbox' id=
                  'nogradient' name='gradient' value='gradient'
                  onclick='closeBGGradient()' />
                </div>
                <div class='leftcol2'>
                  <div id='bgRange'>
                    Gradient Bottom: <input type='text' class=
                    'custom' id='color2' name='color2' value=
                    "#E9EDF6" onchange='setGrad2()' />
                  </div>
                </div>
              </div>
              <div class='row'>
                <div class='leftcol1'>
                  Text Color: <input type='text' class='custom' id=
                  'textColor' name='color' value="black" />
                </div>
                <div class='leftcol2'>
                  Border Color: <input type='text' class='custom'
                  id='borderColor' value='black' name=
                  'border-color' />
                </div>
              </div>
              <div class='row'>
                <div class='leftcol1'>
                  Border Size:<br />
                  <input type="range" class='range' id="border"
                  name="border" value="1" min="0" max="5" step=".5"
                  onchange=
                  "borderResult.value = this.value + 'px'" />
                </div>
                <div class='leftcol2'>
                  Border Radius:<br />
                  <input type='range' class='range' id=
                  'border-radius' name='border-radius' value='0'
                  min='0' max='30' onchange=
                  "radiusResult.value = this.value + 'px'" />
                </div>
              </div>
              <div class='row'>
                <div class='leftcol1'>
                  Button Height:<br />
                  <input type='range' class='range' id='padding1'
                  name='padding1' value='0' min='0' max='40'
                  onchange='paddingHResult.value = this.value' />
                </div>
                <div class='leftcol2'>
                  Button Width:<br />
                  <input type='range' class='range' id='padding2'
                  name='padding2' value='0' min='0' max='40'
                  onchange='paddingWResult.value = this.value' />
                </div>
              </div>
              <div class='row'>
                <div id="submitButton">
                  <input id="submit_form" type="submit" value=
                  "Generate CSS" />
                </div>
              </div>
            </div>
          </div>
          <div id="col2">
            <p class="views">
              Preview
            </p>
            <div id="preview">
              <button name="custom_button" id='gradient' class=
              "custom_button">
              <div id="mybutton">
                Text
              </div></button>
            </div>
          </div>
          <div id="col3">
            <p class="views">
              CSS
            </p>
            <div id="cssview">
              <div id="rightcol"></div>
            </div>
          </div>
        </div>
      </div>
    </div><script src="js/ja_main.js" type="text/javascript">
</script>
    <div id="footer"></div>
  </body>
</html>