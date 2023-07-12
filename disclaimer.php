<?php
$title="Disclaimer - MlympiX | Online Cricket Gaming";
$meta_keywords="The company will not be responsible for any manner of loss, damage, or injury suffered by users as defined in the terms of service, whatsoever, including death, that might occur as a direct / indirect result of the use of the platform.";
$meta_description="The company will not be responsible for any manner of loss, damage, or injury suffered by users as defined in the terms of service, whatsoever, including death, that might occur as a direct / indirect result of the use of the platform.";
    require_once('autoload.php');
?>

<?php
    if(isset($_POST['dwnldapp'])){
         $isAndroid = is_numeric(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), "android")); 
           if($isAndroid == 1){
               $filepath = 'Mlympix_V1.0.apk';
                  if(file_exists($filepath)) {
                      //howtoinstall();
                        header('Content-Description: File Transfer');
                        header('Content-Type: application/octet-stream');
                        header('Content-Disposition: attachment; filename="'.basename($filepath).'"');
                        header('Expires: 0');
                        header('Cache-Control: must-revalidate');
                        header('Pragma: public');
                        header('Content-Length: ' . filesize($filepath));
                        flush(); // Flush system output buffer
                        readfile($filepath);
                        
                        die();
                    } else {
                        http_response_code(404);
            	        die();
                    }
               ?>
               
               <?php
           }else{
               echo "<script>alert('IOS app coming soon !!!');</script>";
           }
           
    }



?>
<link rel="stylesheet" type="text/css" href="styles/home.css">    
<link rel="stylesheet" type="text/css" href="styles/home-mobile-view.css"> 
	<section class="s-our-programs" style="background-image: url(../assets/secondBg.webp);
  background-repeat: no-repeat;">
		<div class="container privacy"  style="text-align: justify; text-justify: inter-word;">
			<h1 class="title-decor">Disclaimers</h1>
            <p>Please be informed that the games on the platform are &#39;games of skill&#39; as per applicable laws and court judgments in india. User may participate in such games only if he/she is above 18 years of age and not a resident of any restricted states in india (i.e., assam, odisha, telangana, nagaland, andhra pradesh, tamil nadu and sikkim) in which playing, participating and/or operation of games for stakes is prohibited.</p>

<p>The games on the platform involve an element of financial risk and may be addictive. The user is expected to play responsibly and at own risk. Mlympix does not promote or advertise these games as an income opportunity or an alternative employment option. Mlympix shall not, in any way whatsoever, be held responsible and liable for breach of any rules and regulations, terms and conditions and applicable laws, by the user.</p>

<p>Neither mlympix nor its partners, parent/ holding company, subsidiaries, affiliates, directors, officers, professional advisors, employees, licensors, associates (&ldquo;mlympix and others&rdquo;) will not be responsible for any manner of loss, damage, or injury suffered by users whatsoever, including death, that might occur as a direct/ indirect result of the use of the platform, or the use or availment of the services contained therein, even if mlympix and others have been made aware of any such risks. This includes, but is not limited to, loss of revenue/data resulting from delays, non-deliveries, missed deliveries, or service interruptions as may occur because of any act/omission attributable to mlympix and others or any other third party. This disclaimer of liability also applies to any damages or injury caused by any failure of performance, error, omission, interruption, deletion, defect, delay in operation or transmission, computer virus, communication line failure, theft or destruction or unauthorized access to, alteration of, or use of records, whether for breach of contract, tortuous behaviour, negligence, or under any other cause of action.</p>

<p>The user hereby expressly agrees and accepts that mlympix and others shall not be deemed liable for any damage/ hurt/ inconvenience caused to the user through the course of the provision of services, or as a result of the user&rsquo;s&rsquo; actions or inactions. Mlympix makes no representations or warranties as to the conduct of its other users, or the viability / suitability of the platform. Mlympix takes no responsibility for any content that the user sends or receives from other users or third-party posts through the website or platform. Any material downloaded, viewed, or otherwise obtained through use of the service / platform is accessed at the user&rsquo;s sole discretion and risk, and the user hereby expressly agrees to the same.</p>

<p>The services on the platform are intended to be subject to availability, without any promises or guarantees on the same by mlympix, and while certain information available on the platform is the property of mlympix, and mlympix endeavours to keep the said information updated and accurate, mlympix shall not make no representations or warranties of any kind, express or implied, about the completeness, accuracy, reliability, suitability, or availability of&nbsp;the platform, or the information, customers, services, or related graphics contained on the platform, or its fittness for any purpose. Any reliance the user places on such information is therefore strictly at the user&rsquo;s own risk.</p>

<p>All the intellectual property and content on the platform, or visible as part of the services, is the sole and exclusive property of mlympix, and no use, misuse, reproduction, publication, or manipulation of the same shall be permitted, except as may be expressly permitted by mlympix from time to time. Any such act shall result in mlympix initiating appropriate legal action, and the user does hereby expressly acknowledge the same.</p>

<p>Mlympix bears no responsibility whatsoever for any consequences arising from the use of the said services or platform by users. The use of the services and the platform is the sole responsibility of the user. Any negligence on the part of the user in acting on the same shall not be construed as imposing any liability, direct or indirect, on mlympix/platform.</p>

<p>Mlympix hereby disclaims all responsibility and liability to the user for any outcome (incidental, direct, indirect, or otherwise) from the use of the services / platform. In no event will mlympix and others be liable for any loss or damage including without limitation, indirect or consequential loss or damage, or any loss or damage whatsoever arising from loss of data or profits arising out of, or in connection with, the use of the platform, including personal injury and/or death.</p>

<p>Through the platform, the user may able to link to other platforms or websites which are not under the control of mlympix. Mlympix has no control over the nature, content and availability of such third party websites and platforms. The inclusion of any links to such third party platforms on mlympix&rsquo;s platform does not in any manner imply a recommendation or endorsement of the views, content, or services provided / displayed therein. Every effort is made to keep the platform up and running smoothly. However, mlympix takes no responsibility for, and will never be deemed liable for, the platform being temporarily or permanently unavailable due to technical issues beyond mlympix&rsquo;s control.</p>

<p>To the maximum extent permitted by applicable law, the mlympix shall have no liability related to user content arising under intellectual property rights, libel, privacy, publicity, obscenity, or any other laws. Mlympix also hereby disclaims all liability with respect to the misuse, loss, modification or unavailability of any user content.</p>

<p>The user understands and agrees that any material or data downloaded or otherwise obtained through the platform is done entirely at its own discretion and risk, and it will be solely responsible for any damage to its computer systems or loss of data that results from the downloading of such material or data. Mlympix shall not be responsible for any typographical errors leading to an invalid coupon. Mlympix accepts no liability for any errors or omissions, with respect to any information provided to the user whether on behalf of itself or third parties.</p>

<p>The user agrees that its use of the platform and/or availment of / subscription to the services provided by mlympix shall be at its sole risk. To the fullest extent permitted by law, mlympix and others disclaim all warranties, express, implied, statutory or otherwise, and make no warranties, representations, or guarantees in connection with the platform, the services offered therein, any data, materials, submitted content, relating to the quality, suitability, truth, accuracy or completeness of any information or material contained or presented on this website, including without limitation the materials, data and submitted content of other users of this site or other third parties. Unless otherwise explicitly stated, to the maximum extent permitted by applicable law, the platform, the services offered therein, data, materials, user submitted content, and any information or material contained or presented on the platform is provided to user on and &quot;as is,&quot; &quot;as available&quot; and &quot;where-is&quot; basis. Mlympix does not provide any warranties against errors, mistakes, or inaccuracies of data, content, information, materials, of substance of the platform or submitted content. Any unauthorized access to or use of mlympix&rsquo;s secure servers and/or all personal &amp; financial information stored therein, any bugs, viruses, trojan horses, or the like which may be transmitted to or through the platform by any third party, any interruption or cessation of transmission to or from the platform, any defamatory, offensive, or illegal conduct of any third party, vendor, or service provider, or any loss or damage of any kind incurred as a result of the use of any data, content, information, materials, substance of the platform, or submitted content posted, emailed, transmitted, or otherwise made available via the platform. Mlympix will not be a party to or in any way be responsible for monitoring any transaction between the user and any other party, including other users, third party service professionals, products, or services. As with the use of any product or service, and the publishing or posting of any material through any medium or in any environment, the user should use its best judgment and exercise caution before utilizing any part of the platform / services.</p>

<p>It is expressly stated that mlympix shall in no manner whatsoever be liable to repay the user for any amount once paid to the bank account linked with the details (Account, UPI, Wallet, etc.) submitted by the user at the time of withdrawl or lost to other users on the platform.</p>

        </div>
    </section>

<?php
    require_once __DIR__. '/components/footer.php';
?>
