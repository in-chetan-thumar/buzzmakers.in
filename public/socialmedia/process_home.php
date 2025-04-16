<?php
if (isset($_POST['contact_us_form2'])) {
error_reporting(E_ALL);


    $to = "bd@buzzmakers.in";
    
    $subject = "Enquiry Form";
	
	
    $htmlContent = '<!-- header start -->
            <div>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">-
                    <tbody>
                        <tr>
                            <td>
                                <table  border="0" align="center" cellpadding="0" cellspacing="0" style="border: 1px solid #CCC; width:100%; margin:0 auto;">
                                    <tbody>
                                                             <!-- header end -->
                                        <tr>
                                            <td bgcolor="#f3f3f3" style="padding:0 20px;"><table  style="width:100%;"  border="0" align="center" cellpadding="0" cellspacing="0">
                                                    <tbody>

                                                        <tr>
                                                            <td>&nbsp;</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="font-family:Open Sans,Arial,Helvetica,sans-serif;font-size:14px;padding: 0;">
                                                                Dear Team, <br/>
                                                                
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>&nbsp;</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <table  border="0" cellspacing="0" cellpadding="0" style="width:100%;border:solid 1px #dbdbdb;background:#fff">
                                                                    <tbody>
                                                                        <tr style="background:#0054a6">
                                                                            <td style="padding:10px;font-family:Open Sans,Arial,sans-serif;font-size:13px; width: 50%;border-right: 1px dotted #868686; text-align: center; color: #FFF; font-weight: 600;"> Particular </td>
                                                                            <td align="right" style="padding:10px; font-family:Open Sans,Arial,sans-serif;font-size:13px; width: 50%;text-align: center; color: #FFF;"><strong>Details </strong> </td>
                                                                        </tr>
                                                            
                                                                        <tr>
                                                                            <td width="50%" style="font-family:Open Sans,Arial,sans-serif;font-size:13px; border-right: 1px dotted #868686; text-align: center; padding:10px; border-bottom: 1px dotted #868686; color: #555555;">Name</td>
                                                                            <td width="50%" align="right" style="font-family:Open Sans,Arial,sans-serif;font-size:13px; text-align: center;padding:10px; border-bottom: 1px dotted #868686;color: #555555;"> ' . $_POST['name2'] . ' </td>
                                                                        </tr>
																	
																		
																		 <tr>
                                                                            <td style="font-family:Open Sans,Arial,sans-serif;font-size:13px; width: 50%;border-right: 1px dotted #868686; text-align: center;padding:10px; border-bottom: 1px dotted #868686;color: #555555;">Email Address</td>
                                                                            <td align="right" style="font-family:Open Sans,Arial,sans-serif;font-size:13px; width: 50%;text-align: center;padding:10px;border-bottom: 1px dotted #868686;color: #555555;"> ' . $_POST['email2'] . ' </td>
                                                                        </tr>
																		 <tr>
                                                                            <td style="font-family:Open Sans,Arial,sans-serif;font-size:13px; width: 50%;border-right: 1px dotted #868686; text-align: center;padding:10px; border-bottom: 1px dotted #868686;color: #555555;">Contact No</td>
                                                                            <td align="right" style="font-family:Open Sans,Arial,sans-serif;font-size:13px; width: 50%;text-align: center;padding:10px;border-bottom: 1px dotted #868686;color: #555555;"> ' . $_POST['mobile2'] . ' </td>
                                                                        </tr>
																		 <tr>
                                                                            <td style="font-family:Open Sans,Arial,sans-serif;font-size:13px; width: 50%;border-right: 1px dotted #868686; text-align: center;padding:10px; border-bottom: 1px dotted #868686;color: #555555;">Company Website</td>
                                                                            <td align="right" style="font-family:Open Sans,Arial,sans-serif;font-size:13px; width: 50%;text-align: center;padding:10px;border-bottom: 1px dotted #868686;color: #555555;"> ' . $_POST['website'] . ' </td>
                                                                        </tr>
                                                                        
                                                                         <tr>
                                                                            <td style="font-family:Open Sans,Arial,sans-serif;font-size:13px; width: 50%;border-right: 1px dotted #868686; text-align: center;padding:10px; border-bottom: 1px dotted #868686;color: #555555;">Message</td>
                                                                            <td align="right" style="font-family:Open Sans,Arial,sans-serif;font-size:13px; width: 50%;text-align: center;padding:10px;border-bottom: 1px dotted #868686;color: #555555;"> ' . $_POST['Message'] . ' </td>
                                                                        </tr>
                                                                        
																																			
	                                                                     </tbody>
                                                                </table></td>
                                                        </tr>
                                                        <tr>
                                                            <td>&nbsp;</td>
                                                        </tr>
                                                       
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="1" bgcolor="#e4e4e4"></td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="font-family:Open Sans,Arial,Helvetica,sans-serif;font-size:13px;padding-left: 20px;">
                                                Is there anything you want to share with us?</td>
                                        </tr> 
                                      
                                        <tr>
                                            <td style="padding: 10px 26px;">                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="font-family:Open Sans,Arial,Helvetica,sans-serif;font-size:11px; font-style: italic; border-top:1px solid #EEE; padding: 10px 0; text-align: center;">
                                                This is an auto generated email. Please do not reply to this email. Replies sent to this email address cannot be answered.
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>';

    // Set content-type header for sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	//$headers .= 'cc: social@yadnya.com' . "\r\n";
	$headers .= 'bcc: mahendarprajapati1995@gmail.com' . "\r\n";

    // Additional headers
   $headers .= 'From: Buzzmakers <bd@buzzmakers.in>' . "\r\n";

    // Send email
    if (mail($to, $subject, $htmlContent, $headers)) {
       echo "1";
    } else {
        echo "0";
    }
}
?>