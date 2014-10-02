<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>xkcd Password Generator</title>
    <link rel='stylesheet' href='styles.css' type='text/css'>
    <?php require 'logic.php'; ?>	
    <link rel='stylesheet' href="style.css" type='text/css'>
    <style type="text/css">
        .auto-style1 {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="main" align="center">
        <h1>xkcd Password Generator</h1>
        <p>&nbsp;</p>

        <div>
            <p id="p_2b20_0">
                <span id="span_2b20_0">What is it?</span>
            </p>
        </div>
        <br />
        <table>
            <tr>
                <td>

                    <p id="p_2b20_1">
                        <span id="span_2b20_1">Here is how <span class="auto-style1">most</span> people generate password:</span>
                    </p>
                    <p id="p_2b20_2">
                        &nbsp;
                    </p>
                    <p id="p_2b20_3">
                        <span id="span_2b20_2">1) take common, non-gibberish word, take </span>
                        <span id="span_2b20_3">greatness</span>
                        <span id="span_2b20_4">for example</span>
                    </p>
                    <p id="p_2b20_4">
                        &nbsp;
                    </p>
                    <p id="p_2b20_5">
                        <span id="span_2b20_5">2) make letter to digit substitution - </span>
                        <span id="span_2b20_6">Gr8tn3ss</span>
                    </p>
                    <p id="p_2b20_6">
                        &nbsp;
                    </p>
                    <p id="p_2b20_7">
                        <span id="span_2b20_7">3) maybe add a number at the end - </span>
                        <span id="span_2b20_8">Gr8tn3ss12

                        </span>
                    </p>


                </td>
                <td>
                    <table id="table_2b20_0">
                        <tr>
                            <td>
                                <img src="clip_image001.png" alt="">
                            </td>
                            <td>
                                <p class="class16" id="p_2b20_8">
                                    <span class="class17" id="span_2b20_9">3 days to guess!</span>
                                </p>
                                <p class="class18" id="p_2b20_9">
                                    <span class="class19" id="span_2b20_10">&nbsp;</span>
                                </p>
                                <p class="class20" id="p_2b20_10">
                                    ( 28 bits of entropy) ~ 3 days at 1000 guesses / sec
                                </p>

                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <p id="p_2b20_11">
                        <span id="span_2b20_11">Here is how xkcd Password Generator can help:</span>
                    </p>
                    <p id="p_2b20_12">
                        &nbsp;
                    </p>
                    <p id="p_2b20_13">
                        <span id="span_2b20_12">1) generate 3 common words - </span><span id="span_2b20_13">apple turtle tree </span>
                    </p>
                    <p id="p_2b20_14">
                        &nbsp;
                    </p>
                    <p id="p_2b20_15">
                        <span id="span_2b20_14">2) attach numbers if needed - </span><span id="span_2b20_15">apple turtle tree 1988</span>
                    </p>
                    <p id="p_2b20_16">
                        &nbsp;
                    </p>
                    <p id="p_2b20_17">
                        3) password is easily remembered
                    </p>
                </td>
                <td>
                    <table id="table_2b20_1">
                        <tr>
                            <td>
                                <img src="clip_image001.png" alt="">
                            </td>
                            <td>
                                <p class="class16" id="p_2b20_18">
                                    <span class="class17" id="span_2b20_16">550 years to guess!</span>
                                </p>
                                <p class="class18" id="p_2b20_19">
                                    <span class="class19" id="span_2b20_17">&nbsp;</span>
                                </p>
                                <p class="class20" id="p_2b20_20">
                                    ( 44 bits of entropy) ~ 550 years at 1000 guesses / sec
                                </p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr>
                <td>

                    <div align="left">
                       <form action="index.php" method="GET"> 
                       	<table>
                       		<tr>
                				<td>Include a number?:
                				</td>
                				<td><input type="checkbox" name="number" <?php echo $checkedNumber ?>>
                				</td>
                			</tr>
                       		<tr>
                				<td>Include special symbol (for example, @):
                				</td>
                				<td><input type="checkbox"  name="special" <?php echo $checkedSymbol ?>>
                				</td>
                			</tr>
                			<tr>
                				<td>Delimeter:
                				</td>
                				<td><input name="delimeter" value="-" style="width:10px" type="text">
                				</td>
                			</tr>
                			<tr>
                				<td>Number of words:
                				</td>
                				<td><input name="nmbr_of_words" value="<?php echo $nmbr_of_words ?>" style="width:10px" type="text">
                				</td>
                			</tr>
                		</table>
                		<br>
                		
                    	<a href="#" onclick="document.forms[0].submit();return false;" class="classname">Generate Better Password</a>
                	</form>
                        
                        
                    </div>

                </td>
                <td><br><br><br>
                	
                	
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <br>
                    <p style="margin: 0in; font-family: Calibri; font-size: 17.0pt">
                            <span style="font-weight: bold">Your New Password is:  <font color="green"><?php  echo $password ?></font></span>
                        </p>
                        &nbsp;
                </td>
            </tr>

        </table>
        
    </div>
    <br />


</body>
</html>
