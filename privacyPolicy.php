<?php
$title="Privacy Policy - MlympiX | Online Games To Win Real Money";
$meta_keywords="The Company ensures steady commitment to your usage of the Platform and privacy with regard to the protection of your information. This contains information about the Website and mobile application MlympiX.com";
$meta_description="The Company ensures steady commitment to your usage of the Platform and privacy with regard to the protection of your information. This contains information about the Website and mobile application MlympiX.com";
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

	<section class="s-our-programs">
		<div class="container"  style="text-align: justify; text-justify: inter-word;">
			<h1 class="title-decor">Privacy <span style="color:#E9C412">Policy</span></h1>
			<p><strong><u>WELCOME </u></strong><strong><u>TO </u></strong><strong><u>&nbsp;</u></strong><strong><u>MlympiX</u></strong></p>
<p><strong>&nbsp;</strong></p>
<p><strong>PARKINNOV FUNTECH PVT. LTD,</strong> A Private Limited Company incorporated under the provisions of the <strong>Companies Act,2013 </strong>operating with the Brand name <strong>&ldquo;</strong><strong>MlympiX&rdquo;</strong> and having its registered office at<strong> &ldquo;</strong><strong>&nbsp;</strong><strong>B-62, University Marg, Bapu Nagar, Jaipur, Raj. &ndash; 302015</strong><strong>&rdquo; </strong>and operating out of<strong> &ldquo;</strong><strong>Innov8,&nbsp;20TH MAIN ROAD, 7TH BLOCK, KORAMANAGALA, Bengaluru (Bangalore) Urban, Karnataka, 560034&rdquo;</strong><strong>, </strong>hereinafter referred to as the <strong>&ldquo;Company&rdquo;</strong> (where such expression shall, unless repugnant to the context thereof, be deemed to include its respective legal heirs, representatives, administrators, permitted successors and assigns).</p>
<p>The Company ensures steady commitment to your usage of the Platform and privacy with regard to the protection of your invaluable information. This document contains information about the Website and mobile application <a href="http://mlympix.com/" style="color:#ffec0c">mlympix.com</a> hereinafter referred to as the &ldquo;<strong>Platform</strong>&rdquo;).</p>
<p>In order to provide You with Our uninterrupted use of services, We may collect and, in some circumstances, disclose information about you with your permission. To ensure better protection of Your privacy, We provide this notice explaining Our information collection and disclosure policies, and the choices You make about the way Your information is collected and used.&nbsp;</p>
<p>&nbsp;</p>
<p><strong>This Privacy Policy shall be in compliance with the General Data Protection Regulation (GDPR) in effect from May 25, 2018, and any and all provisions that may read to the contrary shall be deemed to be void and unenforceable as of that date. If you do not agree with the terms and conditions of our Privacy Policy, including in relation to the manner of collection or use of your information, please do not use or access the Site. If you have any questions or concerns regarding this Privacy Policy, you should contact our Customer Support Desk at <a href="tel:9829128888" style="color:#ffec0c">+91-98291-28888</a></strong></p>
<p>ANY CAPITALIZED WORDS USED HENCEFORTH SHALL HAVE THE MEANING ACCORDED TO THEM UNDER THIS AGREEMENT. FURTHER, ALL HEADING USED HEREIN ARE ONLY FOR THE PURPOSE OF ARRANGING THE VARIOUS PROVISIONS OF THE AGREEMENT IN ANY MANNER. NEITHER THE USER NOR THE CREATORS OF THIS PRIVACY POLICY MAY USE THE HEADING TO INTERPRET THE PROVISIONS CONTAINED WITHIN IT IN ANY MANNER.</p>
<ol><br>
<li><strong>DEFINITIONS</strong>
<ol>
<li><em>&ldquo;We&rdquo;</em>, <em>&ldquo;Our&rdquo;</em>, and <em>&ldquo;Us&rdquo;</em> shall mean and refer to the Domain and/or the Company, as the context so requires<strong>.</strong></li>
<li><em>&ldquo;You&rdquo;</em>, <em>&ldquo;Your&rdquo;</em>, <em>&ldquo;Yourself&rdquo;</em>,<em> &ldquo;</em><em>User</em><em>&rdquo;</em>, shall mean and refer to natural and legal individuals who use the Platform and who is competent to enter into binding contracts, as per Indian laws.</li>
<li><em>&nbsp;&ldquo;</em><em>Services</em><em>&rdquo;</em>, shall refer to the platform &nbsp;&nbsp;with the objective of promoting sports in India for multiple quick play skill-based sports games where users can choose from a variety of sports games, enter tournaments by paying a entry fee&nbsp; and earn money as rewards. The detailed explanation shall be provided in Clause 4 of these Terms of Use..</li>
<li><em>&ldquo;Third Parties&rdquo;</em> refer to any Application, Company or individual apart from the User, Vendor and the creator of this Application.</li>
<li><em>&ldquo;Platform&rdquo;</em> refers to the Website and Mobile Application which provides the user with the facility to play games and participate in various tournament&rsquo;s that are available on the platform.</li>
<li><em>&ldquo;Personal Information&rdquo;</em> shall mean and refer to any personally identifiable information that We may collect from You such as Name, Email Id, Mobile number, Password, Photo etc. For removal of any doubts, please refer to Clause 2.</li>
</ol>
</li><br>
<li><strong>INFORMATION WE COLLECT</strong></li>
</ol>
<p>We are committed to respecting Your online privacy. We further recognize Your need for appropriate protection and management of any Personal Information You share with us. We may collect the following information:</p>
<ol>
<li>Personal data such as, but not limited to, Name, Email Id, Mobile number, Photograph,Password, Age, Address, etc;</li>
<li>Tracking Information such as, but not limited to the IP address of your device and Device ID when connected to the Internet. This information may include the URL that you just came from (whether this URL is on the Platform or not), which URL you next go to (whether this URL is on the Platform or not), your computer or device browser information, and other information associated with your interaction with the Platform;</li>
<li>Details of Platform usage for analytics.</li>
</ol>
<p>This privacy policy also applies to data we collect from users who are not registered as members of this Platform, including, but not limited to, browsing behaviour, pages viewed etc. We also collect and store personal information provided by You from time to time on the Platform. We only collect and use such information from you that we consider necessary for achieving a seamless, efficient and safe experience, customized to your needs including:</p>
<ol>
<li>To enable the provision of services opted for by you;</li>
<li>To enable the viewing of content in your interest;</li>
<li>To communicate the necessary account and service related information from time  to time;</li>
<li>To allow you to receive quality customer care services and data Collection;</li>
<li>To comply with applicable laws, rules and regulations;</li>
</ol>
<p>Where any service requested by You involves a third party, such information as is reasonably necessary by the Company to carry out Your service request may be shared with such third party. We also do use your contact information to send you offers based on your interests and prior activity and also to view the content preferred by you. The Company may also use contact information internally to direct its efforts for service improvement but shall immediately delete all such information upon withdrawal of your consent for the same through the &lsquo;<strong>unsubscribe</strong>&rsquo; button or through an email to be sent to<strong> ________.</strong></p>
<p>To the extent possible, we provide You with the option of not divulging any specific information that you wish for us not to collect, store or use. You may also choose not to use a particular service or feature on the Platform and opt-out of any non-essential communications from the platform.</p>
<p>Further, transacting over the internet has inherent risks which can only be avoided by you following security practices yourself, such as not revealing account/login related information to any other person and informing our customer care team about any suspicious activity or where your account has/may have been compromised.</p>
<p>&nbsp;</p>
<ol start="3">
<li><strong>OUR USE OF YOUR INFORMATION</strong></li>
</ol>
<p>The information provided by you shall be used to provide and improve the service for you and all users.</p>
<ol>
<li>For maintaining an internal record.</li>
<li>For enhancing the Services provided.</li>
</ol>
<p>For more details about the nature of such communications, please refer to our Terms of Service. Further, your personal data and Sensitive Personal data may be collected and stored by Us for internal record.</p>
<p>We use Your tracking information such as IP addresses, and or Device ID to help identify you and to gather broad demographic information and make further services available to you.</p>
<p>We will not sell, license or trade Your personal information. We will not share your personal information with others unless they are acting under our instructions or we are required to do so by law.</p>
<p>Information collected via Our server logs includes users' IP addresses and the pages visited; this will be used to manage the web system and troubleshoot problems. We also use third-party analytics, tracking, optimization and targeting tools to understand how users engage with our Platform so that we can improve it and cater personalized content/ads according to their preferences.</p>
<ol start="4"><br>
<li><strong>HOW INFORMATION IS COLLECTED</strong></li>
</ol>

<p>Before or at the time of collecting personal information, we will identify the purposes for which information is being collected. If the same is not identified to you, you have the right to request the Company to elucidate the purpose of collection of said personal information, pending the fulfillment of which you shall not be mandated to disclose any information whatsoever.</p>
<p>We will collect and use your personal information solely with the objective of fulfilling those purposes specified by us, within the scope of the consent of the individual concerned or as required by law. We will only retain personal information as long as necessary for the fulfilment of those purposes. We will collect personal information by lawful and fair means and with the knowledge and consent of the individual concerned.</p>
<p>Personal data should be relevant to the purposes for which it is to be used, and, to the extent necessary for those purposes, should be accurate, complete, and up-to-date.</p>
<ol start="5"><br>
<li><strong>EXTERNAL LINKS ON THE PLATFORM</strong></li>
</ol>

<p>The Platform may include advertisements, hyperlinks to other websites, applications, content or resources. We have no control over any websites or resources, which are provided by companies or persons other than Us. You acknowledge and agree that we are not responsible for the availability of any such external sites or resources, and do not endorse any advertising, services/services or other materials on or available from such platform or resources. You acknowledge and agree that We are not liable for any loss or damage which may be incurred by you as a result of the availability of those external sites or resources, or as a result of any reliance placed by you on the completeness, accuracy or existence of any advertising, services or other materials on, or available from, such websites or resources. These external websites and resource providers may have their own privacy policies governing the collection, storage, retention and disclosure of Your Personal Information that You may be subject to. We recommend that you enter the external Website and review their privacy policy.</p>
<ol start="6"><br>
<li><strong>GOOGLE</strong> <strong>ANALYTICS</strong></li>
</ol>

<p>We use Google Analytics to help us to understand how you make use of our content and work out how we can make things better. These cookies follow your progress through us, collecting anonymous data on where you have come from, which pages you visit, and how long you spend on the site. This data is then stored by Google to create reports. These cookies do not store your personal data.</p>
<p>The information generated by the cookie about your use of the Website, including your IP address, may be transmitted to and stored by Google on servers in the United States. Google may use this information for the purpose of evaluating your use of the website, compiling reports on website activity for us and providing other services relating to website activity and internet usage. Google may also transfer this information to third parties where required to do so by law, or where such third parties process the information on Google's behalf. Google will not associate your IP address with any other data held by Google. By using this website, you consent to the processing of data about you by Google in the manner and for the purposes set out above.</p>
<p>The Google website contains further information about Analytics and a copy of Google's privacy policy pages.</p>
<p>&nbsp;</p>
<ol start="7">
<li><strong>GOOGLE ADSENSE</strong></li>
</ol>
<p>Google AdSense is a tool that allows website publishers to deliver advertisements to site visitors in exchange for revenue calculated on a per-click or per-impression basis. To do this, Google&nbsp;<strong>uses cookies and tracking technology</strong>&nbsp;to deliver ads personalized to a website user/visitor. In this regard the following terms are specified to the Users:</p>
<ol>
<li>Third-party vendors, including Google, use cookies to serve ads based on your prior visits to our website or other websites.</li>
<li>Google's use of advertising cookies enables us and our partners to serve advertisements to you based on their visit to our Platform and/or other websites on the Internet.</li>
<li>You may opt-out of personalized advertising by visiting&nbsp;<a href="https://www.google.com/settings/ads">Ads Settings</a>.</li>
<li>All advertisements of third parties on our Platform are for informative purposes only and neither the Platform nor the Company guarantees or bears liability for the authenticity of the advertisements.</li>
<li>At no point will the Company permit its Competitors to advertise on the Platform</li>
<li>You may visit the links in the advertisements at your own risk or choose to not accept the cookies permitting third parties to display their advertisements.</li>
</ol>
<p>&nbsp;</p>
<ol start="8">
<li><strong>YOUR RIGHTS</strong></li>
</ol>
<p>Unless subject to an exemption, you have the following rights with respect to your personal data:</p>
<ol>
<li>The right to request a copy of your personal data which we hold about you;</li>
<li>The right to request for any correction to any personal data if it is found to be inaccurate or out of date;</li>
<li>The right to withdraw Your consent to the processing at any time;</li>
<li>The right to object to the processing of personal data;</li>
<li>The right to lodge a complaint with a supervisory authority.</li>
<li>The right to obtain information as to whether personal data are transferred to a third country or to an international organization.</li>
</ol>
<p>Where you hold an account with any of our services, you are entitled to a copy of all personal data which we hold in relation to you. You are also entitled to request that we restrict how we use your data in your account when you log in.</p>
<ol start="9"><br>
<li><strong>CONFIDENTIALITY</strong></li>
</ol>
<p>You further acknowledge that the Platform may contain information which is designated confidential by us and that you shall not disclose such information without our prior written consent. Your information is regarded as confidential and therefore will not be divulged to any third party, unless if legally required to do so to the appropriate authorities. We will not sell, share, or rent your personal information to any third party or use your e-mail address for unsolicited mail. Any emails sent by us will only be in connection with the provision of agreed services, and you retain sole discretion to seek for discontinuation of such communications at any point of time.</p>
<ol start="10"><br>
<li><strong>OTHER INFORMATION COLLECTORS </strong></li>
</ol>
<p>Except as otherwise expressly included in this Privacy Policy, this document only addresses the use and disclosure of information we collect from you. To the extent that you disclose your information to other parties, whether they are on our Platform or on other sites throughout the Internet, different rules may apply to their use or disclosure of the information you disclose to them. To the extent that we use third party advertisers, they adhere to their own privacy policies. Since we do not control the privacy policies of the third parties, you are subject to ask questions before you disclose your personal information to others.</p>
<ol start="11"><br>
<li><strong>OUR DISCLOSURE OF YOUR INFORMATION </strong></li>
</ol>
<p>We may host surveys for survey creators for our platform who are the owners and users of your survey responses. We do not own or sell your responses. Anything you expressly disclose in your responses will be disclosed to survey creators. Please contact the survey creator directly to better understand how they might share your survey responses.</p>
<p>Information collected will not be considered as sensitive if it is freely available and accessible in the public domain or is furnished under the Right to Information Act, 2005, any rules made thereunder or any other law for the time being in force.</p>
<p>Due to the existing regulatory environment, we cannot ensure that all of your private communications and other personally identifiable information will never be disclosed in ways not otherwise described in this Privacy Policy. By way of example (without limiting and foregoing), we may be forced to disclose information to the government, law enforcement agencies or third parties. Therefore, although we use industry-standard practices to protect your privacy, we do not promise, and you should not expect, that your personally identifiable information or private communications would always remain private. We do however assure you that any and all disclosure of your personally identifiable information shall be personally intimated to you through an email sent to your provided email address.</p>
<p>As a matter of policy, we do not sell or rent any personally identifiable information about you to any third party. However, the following describes some of the ways that your personally identifiable information may be disclosed:</p>
<ol>
<li>External Service Providers: There may be a number of services offered by external service providers that help you use our Platform. If you choose to use these optional services, and in the course of doing so, disclose information to the external service providers, and/or grant them permission to collect information about you, then their use of your information is governed by their privacy policy.</li>
<li>Law and Order: We cooperate with law enforcement inquiries, as well as other third parties to enforce laws, such as intellectual property rights, fraud and other rights. We can (and you authorize us to) disclose any information about you to law enforcement and other government officials as we, in our sole discretion, believe necessary or appropriate, in connection with an investigation of fraud, intellectual property infringements, or other activity that is illegal or may expose us or you to legal liability.
<ol start="12"><br>
<li><strong>ACCESSING, REVIEWING AND CHANGING YOUR PROFILE</strong></li>
</ol>
</li>
</ol>
<p>Following registration, you can review and change the information you submitted at the stage of registration, except Email ID and mobile number. An option for facilitating such change shall be present on the Platform and such change shall be facilitated by the User. If you change any information, we may or may not keep track of your old information. We will not retain in our files information you have requested to remove for certain circumstances, such as to resolve disputes, troubleshoot problems and enforce our terms and conditions. Such prior information shall be completely removed from our databases, including stored &lsquo;back up&rsquo; systems. If you believe that any information, we are holding on you is incorrect or incomplete, or to remove your profile so that others cannot view it, the User needs to remediate, and promptly correct any such incorrect information.</p>
<ol start="13"><br>
<li><strong>CONTROL OF YOUR PASSWORD</strong></li>
</ol>
<p>You are entirely responsible for maintaining the confidentiality of your password. It is important that you protect it against unauthorized access of your account and information by choosing your password carefully and keeping your password and computer secure by signing out after using our services.</p>
<p>You agree not to use the account, username, email address or password of another Member at any time or to disclose your password to any third party. You are responsible for all actions taken with your login information and password, including fees. If you lose control of your password, you may lose substantial control over your personally identifiable information and may be subject to legally binding actions taken on your behalf. Therefore, if your password has been compromised for any reason, you should immediately change your password. You agree to notify us immediately if you suspect any consistent unauthorized use of your account or access to your password even after changing it.</p>
<ol start="14"><br>
<li><strong> SECURITY</strong></li>
</ol>
<p>We treat data as an asset that must be protected against loss and unauthorized access. We employ many different security techniques to protect such data from unauthorized access by members inside and outside the Company. We follow generally accepted industry standards to protect the Personal Information submitted to us and information that we have accessed.</p>
<p>However, as effective as encryption technology is, no security system is impenetrable. Our Company cannot guarantee the security of our database, nor can we guarantee that information you provide won&rsquo;t be intercepted while being transmitted to the Company over the Internet.</p>
<ol start="15"><br>
<li><strong>SEVERABILITY </strong></li>
</ol>
<p>Each paragraph of this Privacy Policy shall be and remain separate from and independent of and severable from all and any other paragraphs herein except where otherwise expressly indicated or indicated by the context of the agreement. The decision or declaration that one or more of the paragraphs are null and void shall have no effect on the remaining paragraphs of this privacy policy.</p>
<ol start="16"><br>
<li><strong> AMENDMENT </strong></li>
</ol>
<p>Our Privacy Policy may change from time to time. The most current version of the policy will govern our use of your information and will always be at the Platform. Any amendments to this Policy shall be deemed as accepted by the User on their continued use of the Platform.</p>
<ol start="17"><br>
<li><strong>AUTOMATED DECISION MAKING </strong></li>
</ol>
<p>As a responsible Company, we do not use automatic decision-making or profiling.</p>
<p>&nbsp;</p>
<ol start="18">
<li><strong> CONSENT WITHDRAWAL, DATA DOWNLOAD &amp; DATA REMOVAL REQUESTS</strong></li>
</ol>
<p>To withdraw your consent, or to request the download or delete your data with us for any or all our services &amp; services at any time, please email to <strong>_________.</strong></p>
<ol start="19"><br>
<li><strong> CONTACT US </strong></li>
</ol>
<p>If you have any questions or concerns regarding this privacy policy, you should contact us by sending an e-mail to please email to <a href="mailto:support@mlympix.com" style="color:#ffec0c">support@mlympix.com</a></p>
<p>Information provided on the website may not be 100% accurate and may be provided for promotional purposes of the business</p>
		</div>
	</section>


<?php
    require_once __DIR__. '/components/footer.php';
?>