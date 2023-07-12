<?php
$title="Terms and Conditions - MlympiX | Online Casual Gaming | MlympiX";
$meta_keywords="The use of this Platform by the Users is solely governed by these Terms as well as the Privacy Policy, and any modifications or amendments made thereto by the Company, from time to time, at its sole discretion.";
$meta_description="The use of this Platform by the Users is solely governed by these Terms as well as the Privacy Policy, and any modifications or amendments made thereto by the Company, from time to time, at its sole discretion.";
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
			<h1 class="title-decor">Terms and <span style="color:#E9C412">Conditions</span></h1>
			<p><strong>&nbsp;</strong></p>

<p><strong>&nbsp;</strong></p>
<ol>
<li><strong>GENERAL</strong></li>
</ol>
<p><strong>PARKINNOV FUNTECH PVT. LTD,</strong> A Private Limited Company incorporated under the provisions of the <strong>Companies Act,2013 </strong>operating with the Brand name <strong>&ldquo;</strong><strong>MlympiX&rdquo;</strong> and having its registered office at<strong> &ldquo;</strong><strong>&nbsp;</strong><strong>B-62, University Marg, Bapu Nagar, Jaipur, Raj. &ndash; 302015</strong><strong>&rdquo; </strong>and operating out of<strong> &ldquo;</strong><strong>Innov8as,&nbsp;20TH MAIN ROAD, 7TH BLOCK, KORAMANAGALA, Bengaluru (Bangalore) Urban, Karnataka, 560034&rdquo;</strong><strong>, </strong>hereinafter referred to as the <strong>&ldquo;Company&rdquo;</strong> (where such expression shall, unless repugnant to the context thereof, be deemed to include its respective legal heirs, representatives, administrators, permitted successors and assigns). The Company ensures steady commitment to your usage of the Platform and privacy with regard to the protection of your invaluable information. This document contains information about the Website and mobile application <a href="http://mlympix.com/">mlympix.com</a> hereinafter referred to as the &ldquo;<strong>Platform</strong>&rdquo;).</p>

<p>&nbsp;</p>
<ol start="2">
<li><strong>DEFINITION</strong></li>
</ol>

<p>For the purpose of these Terms of Use (&ldquo;<strong>Terms</strong>&rdquo;), wherever the context so requires,</p>
<ol>
<li>&ldquo;We&rdquo;, &ldquo;Our&rdquo;, and &ldquo;Us&rdquo; shall mean and refer to the Platform and/or the Company, as the context so requires<strong>.</strong></li>
<li>&ldquo;User<strong>&rdquo;</strong> shall mean and refer to natural and legal individuals who use the Website and Mobile Application and who is of sound mind and competent to make sound and informed decisions.</li>
</ol>
<ul>
<li>&ldquo;Services&rdquo; shall refer to the platform with the objective of promoting sports in India for multiple quick play skill-based sports games where users can choose from a variety of sports games, enter tournaments by paying a entry fee&nbsp; and earn money as rewards.</li>
</ul>
<ol>
<li>&ldquo;Third Parties&rdquo; refer to any Application, Company or individual apart from the User and the creator of this Website and Mobile Application and Mobile Application.</li>
<li>The term &ldquo;Platform&rdquo; refers to the Website and Mobile Application which provides the user with the facility to play games and participate in various tournament&rsquo;s that are available on the platform.</li>
</ol>
<ol start="3"><br>
<li><strong>GENERAL TERMS</strong></li>
<li><strong>The headings of each section in these Terms are only for the purpose of organizing the various provisions under these Terms in an orderly manner and shall not be used by either Party to interpret the provisions contained herein in any manner. Further, it is specifically agreed to by the Parties that the headings shall have no legal or contractual value.</strong></li>
<li>The use of this Platform by the Users is solely governed by these Terms as well as the Privacy Policy, and any modifications or amendments made thereto by the Company, from time to time, at its sole discretion. If you continue to access and use this Platform, you are agreeing to comply with and be bound by the following Terms and Conditions of Use and Our Privacy Policy. The User expressly agrees and acknowledges that these Terms and Policy are co-terminus in nature and that expiry/termination of either one will lead to the termination of the other.</li>
</ol>
<ul>
<li>The User unequivocally agrees that these Terms and the aforementioned Policy constitute a legally binding agreement between the User and the Company, and that the User shall be subject to the rules, guidelines, policies, terms, and conditions applicable to any service that is provided by the Platform, and that the same shall be deemed to be incorporated into these Terms, and shall be treated as part and parcel of the same. The User acknowledges and agrees that no signature or express act is required to make these Terms and the Policy binding on the User and that the User&rsquo;s act of visiting any part of the Platform constitutes the User&rsquo;s full and final acceptance of these Terms and the aforementioned Policy.</li>
</ul>
<ol>
<li>The Company reserves the sole and exclusive right to amend or modify these Terms without any prior permission or intimation to the User, and the User expressly agrees that any such amendments or modifications shall come into effect immediately. If the User does not adhere to the changes, they must stop using the Services at once. Their continuous use of the Services will signify your acceptance of the changed terms.</li>
</ol>
<p>&nbsp;</p>
<ol start="4">
<li><strong>SERVICE OVERVIEW</strong></li>
</ol>
<p>The Company runs a platform called<strong> &ldquo;MlympiX&nbsp;&ldquo;</strong>that promotes virtual gaming in India with the vision and motto of <strong>&ldquo;Taking India to the World&rdquo;</strong></p>
<p>The platform is the only league-based sports gaming digital platform with pure skill-based sports games, such as archery, badminton, shooting, basketball, football etc,. It functions as an online sports gaming league, where users can choose from a variety of sports games, enter tournaments by paying an entry fee and earn monetary rewards. The app also features &ldquo;<strong>Traditional Indian Games</strong>&rdquo; which would be free to play initially to educate and promote these forgotten games, these games were designed with the idea that India has a very rich history of such games and people should play, embrace and even educate the younger generation about them. The Company is taking it upon themselves to popularize these games not only in India, but abroad as well. The platform also has a &nbsp;section of&nbsp;<strong>Sports Trivia&nbsp;</strong>which is a free of cost gameplay option, the &nbsp;quizzing style and points system are very unique, which would attract users to play.</p>
<ul><br>
<li><strong>HOW THE WALLET WORKS:</strong></li>
</ul>
<p>In order to play any game the user will have to deposit money into MlympiX Wallet that is present in the App using multiple payment options that are available on the App. Once the money is deposited, the user will pay the entry fee using MlympiX Wallet for the game the user wants to play to compete with another user. The winner of the match will get a cash reward which will be deposited in the user&rsquo;s MlympiX wallet. At any stage in time a user can withdraw both his winnings and deposited amount as required either into a Bank Account or using UPI that would be available on the App. The User will have to pay service charges for any withdrawal from the wallet below Rs.100, above which the withdrawal will be free.</p>
<p>&nbsp;</p>
<p><strong>REGISTRATION</strong></p>
<p>The Users must register themselves on the platform by providing the following details on the platform</p>
<ul>
<li>Name of the User</li>
<li>Address</li>
<li>Email ID</li>
<li>Gender</li>
</ul>
<ol>
<li>Phone Number</li>
</ol>
<ul>
<li>Pictures</li>
<li>Delivery Address</li>
<li>Link to Mobile Wallets</li>
</ul>
<p>Linking of Gmail and Facebook accounts are not mandatory. However, Users may register by linking their mobile number to play games on the platform. All registrations on the platform are free of cost and no User shall be charged for any such registration the platform.</p>
<p>&nbsp;</p>
<ol start="5">
<li><strong>ELIGIBILITY</strong>
<ol>
<li>The User has to be of sound mind and must be capable of making informed decisions after referring to the guides on the Website and Mobile Application.</li>
</ol>
</li>
<li>In the event of a minor accessing the Website and Mobile Application, it would be the responsibility of his immediate guardian to monitor the minor&rsquo;s use, the platform or the Company will not be liable for any consequences.</li>
</ol>
<p>&nbsp;</p>
<ol start="6">
<li><strong>CONTENT</strong></li>
<li>All the Content displayed including but not limited to the illustrations, photographs and write-ups on the Platform is created by the Company and is subject to copyright and shall not be reused by any party (or a third party) without the prior written consent of the Company and the copyright owner.</li>
<li>The Users/Readers can submit their own guides/ write-ups. The same shall be reviewed by the Company before it is displayed on the Website and Mobile Application. The creator of the guide shall be credited as an author but all rights over the content, including but not limited to the copyright shall be vested with the Company.</li>
</ol>
<p>&nbsp;</p>
<ol start="7">
<li><strong>INDEMNITY</strong>
<ol>
<li>The Users undertake to indemnify the Platform and keep it indemnified against all proceedings, claims, expenses, and liabilities whatsoever which may be taken or made against or incurred by the Platform or by reasons of the premises for any comments, feedback or any other form of content created by them, which has been published by the Company on the Platform.</li>
</ol>
</li><br>
<li><strong>REFUND &amp; CANCELLATION</strong>
<ol>
<li>The Platform will create the best user experience however if there is a technical issue that arises, The platform will refund the Fee after a proper investigation and the claims of the User have been proved.</li>
<li>The Platform will make refund to the wallet.</li>
</ol>
</li>
</ol>
<ul>
<li>User agrees and understands that the platform will not provide any refund if the User has lost any game.</li>
</ul>
<ol start="9"><br>
<li><strong>TERM &amp; TERMINATION</strong>
<ol>
<li>These Terms shall continue to form a valid and binding contract between the Parties and shall continue to be in full force and effect until the User continues to access and use the Services and Platform</li>
<li>A User may terminate their use of the Services and the Platform at any time.</li>
<li>The Company may terminate these Terms without notice and/or suspend or terminate a User&rsquo;s access to the Platform at any time and for any reason, if any discrepancy or legal issue arises.</li>
<li>Such suspension or termination shall not limit our right to take any other action against you that the Company considers appropriate.&nbsp;</li>
<li>It is also hereby declared that the Company may discontinue the Services and Platforms without any prior notice.</li>
<li>The Company and its members reserve the right, in its sole discretion, to unilaterally terminate the User&rsquo;s access to the Services, or any portion thereof, at any time, without notice or cause.
<ol>
<li>The User shall continue to be bound by these Terms, and it is expressly agreed to by the Parties that the User shall not have the right to terminate these Terms till the expiry of the same.</li>
</ol>
</li>
</ol>
</li>
</ol>
<p>&nbsp;</p>
<ol start="10">
<li><strong>COMMUNICATION</strong></li>
</ol>
<ol>
<li>By using this Services and Platforms, and providing his/her identity and contact information to the Company through the Platform, the User hereby agrees and consents to receive calls, e-mails or SMS from the Company or any of its representatives at any time.</li>
<li>Users can report to the Company any grievances or suggestions that they have through e-mail, if they find any discrepancy with regard to the information generated on the Platform, the Company will take necessary action after an investigation.&nbsp; The response with resolution (if any issues found) shall be dependent on the time that is taken for investigation.</li>
</ol>
<p>&nbsp;</p>
<p>&nbsp;</p>
<ol start="11">
<li><strong>USER</strong><strong> OBLIGATIONS AND FORMAL UNDERTAKINGS AS TO CONDUCT</strong></li>
</ol style="text-align: justify; text-justify: inter-word;">
<p>The User agrees and acknowledges that they are a restricted user of this Platform and that they:</p>
<ol>
<li>Authorize the Platform to use, store or otherwise process certain personal information and all published Content, reviews and ratings, comments and feedback for personalization of Services, marketing, and promotional purposes and for optimization of User-related options and Services.</li>
<li>Agree not to access (or attempt to access) the Platform and/or the materials or Services by any means other than through the interface provided by the Platform.</li>
<li>Expressly agree and acknowledge that the Content displayed on the Platform is for purpose of reference only, under no circumstance shall the User construe the same as expert/ professional advice. The User may, however, report any offensive or objectionable content, which the Company may then remove from the Platform, at its sole discretion.</li>
<li>Expressly agrees to make good any losses suffered by the Company or platform which result as a consequence of any act committed by the User including but not limited to acts of fraud, misrepresentation of information provided on the Company as expert advice or posting slanderous or libelous content in the form of comments or feedback.</li>
<li>Agrees that they are using the services of the Platform and accessing the platform at their own risk with their prudent judgment and the Company or Platform shall not be responsible for any resultant losses suffered.</li>
<li>Agrees that the platform will be used by him solely for non-commercial use with the intent of gaining information about the featured services in the form of guides. No commercial endorsements will be made on the platform. This includes providing links to other platforms which may or may or may not be competitors of the Company. In the event of detection of commercial activity by a user, the Platform will have the right to bar him from posting further comments or content on the Platform.</li>
<li>Users must note that all Games available on the Platform are games are skill based and the user will have to use Knowledge, attention and training to play these games. &lsquo;Games of Skill&rsquo;, under Indian law, are excluded from the ambit of gambling legislations including, the Public Gambling Act of 1867 and other state enactments except in the Restricted States.&nbsp;</li>
<li>with the exception of in Maharashtra, there are no laws which clearly state it is illegal for an Indian resident to gamble online.&nbsp;Nagaland and Sikkim allows online gambling subject to license from the appropriate State Authorities.</li>
<li><strong><em>In State of Bombay v. R. M. D. Chamarbaugwalal</em></strong>, [1] the Supreme Court of India held that competitions (games) where success depends on a substantial degree of skill will not fall into category of 'gambling' (i.e. gaming as defined under state enactments); and despite there being an element of chance, if a game is predominantly a game of skill, it would nevertheless be a game of "mere skill".</li>
<li><strong><em>In Gaussian Network Pvt. Ltd. Vs. Monica Lakhanpal</em></strong> [2], </strong>The issue of Online Gaming/gambling laws in India was discussed in detailed in the above case when the issue was put up before the Court under Order 36 Rule(1) of CPC by the parties. The Court held the following:</li>
</ol>
<ul>
<li>Game of skills, if played with stakes does not amount to gambling;</li>
<li>Playing games of skill for money is only legal in the real form, online games cannot be compared to real games;</li>
<li>Attracting business or enticing players by alluring them with prize money is illegal;</li>
<li>Gaming sites partaking a slice on the winning hand are illegal as they amount to a virtual gambling house.</li>
</ul>
<ol>
<li>Hence, the individuals residing in the Restricted States should not participate in any Games offered on the Platform. Any participation by such individuals shall be at their sole risk and discretion and the platform shall not be liable to refund or reimburse any injury or damages suffered by such individuals.</li>
<li>The platform reserves the right to monitor all activities from the User&rsquo;s Account on the Platform. If any User plays any game in violation of any central and/or state law(s) in India, The platform&nbsp; reserves the right to cooperate with law enforcement agencies of the relevant state and report such participation or/and suspicious activity along with all relevant details of the concerned User.</li>
</ol>
<p>&nbsp;</p>
<p>Further:</p>
<ol>
<li>The User hereby expressly authorizes the Company /Platform to disclose any and all information relating to the User in the possession of the Company /Platform to law enforcement or other government officials, as the Company may in its sole discretion, believe necessary or appropriate in connection with the investigation and/or resolution of possible crimes, especially those involve personal injury and theft/infringement of intellectual property. The User further understands that the Company /Platform might with to disclose any information (including the identity of persons providing information or materials on the Platform) as necessary to satisfy any judicial Order, law, regulation or valid governmental request.</li>
<li>The User agrees to use the services provided by the Company, its affiliates, consultants and contracted companies, for lawful purposes only.</li>
<li>The User agrees not to post any material on the Website and Mobile Application that is defamatory, offensive, obscene, indecent, abusive, or needlessly distressful, or advertising any goods or services. More specifically, the User agrees not to host, display, upload, update, publish, modify, transmit, or in any manner share any information that:</li>
<li>belongs to another person and to which the User has no right to; is grossly harmful, harassing, blasphemous, defamatory, obscene, pornographic, paedophile, libellous, invasive of another's privacy, hateful, or racially, ethnically objectionable, disparaging, or otherwise unlawful in any manner whatever; but not limited to "indecent representation of women" within the meaning of the Indecent Representation of Women (Prohibition) Act, 1986;</li>
<li>violates any law for the time being in force;</li>
</ol>
<ul>
<li>deceives or misleads the other users</li>
</ul>
<p>&nbsp;</p>
<p>&nbsp;</p>
<ol start="12">
<li><strong>INTELLECTUAL PROPERTY RIGHTS</strong></li>
</ol>
<ol>
<li>Unless expressly agreed to in writing, nothing contained herein shall give the User a right to use any of the Platform&rsquo;s Content which includes but is not limited to trade names, trademarks, service marks, logos, domain names, information, questions, answers, solutions, reports, illustrations, photographs, write-ups save and other distinctive brand features according to the provisions of these Terms.</li>
</ol>
<p>&nbsp;</p>
<ol start="13">
<li><strong>FORCE MAJEURE</strong></li>
</ol>
<ol>
<li>Neither the Company nor the Platform shall be liable for damages for any delay or failure to perform its obligations hereunder if such delay or failure is due to cause beyond its control or without its fault or negligence, due to Force Majeure events including but not limited to acts of war, acts of God, earthquake, riot, fire, festive activities sabotage, labour shortage or dispute, internet interruption, technical failure, breakage of sea cable, hacking, piracy, cheating, illegal or unauthorized.</li>
</ol>
<p>&nbsp;</p>
<ul>
<li><strong>DISPUTE RESOLUTION AND JURISDICTION</strong></li>
</ul>
<ol>
<li>It is expressly agreed to by the Parties hereto that the formation, interpretation, and performance of these Terms and any disputes arising therefrom will be resolved through a two-step Alternate Dispute Resolution (&ldquo;<strong>ADR</strong>&rdquo;) mechanism. It is further agreed to by the Parties that the contents of this Section shall survive even after the termination or expiry of the Terms and/or Policy.</li>
</ol>
<ul>
<li><strong>Mediation</strong>: In case of any dispute between the parties, the Parties will attempt to resolve the same amicably amongst themselves, to the mutual satisfaction of all parties. In the event that the Parties are unable to reach such an amicable solution within thirty (30) days of one Party communicating the existence of a dispute to any other Party, the dispute will be resolved by arbitration, as detailed herein below;</li>
<li><strong>Arbitration</strong>: In the event that the Parties are unable to amicably resolve a dispute by mediation, said dispute will be referred to arbitration by a sole arbitrator to be appointed by the Company, and the award passed by such sole arbitrator will be valid and binding on all parties. The Parties shall bear their own costs for the proceedings, although the sole arbitrator may, in his/her sole discretion, direct either Party to bear the entire cost of the proceedings. The arbitration shall be conducted in English, and the seat of Arbitration shall be the city of <strong>_____</strong>.</li>
</ul>
<p>The Parties expressly agree that the Terms, Policy and any other agreements entered into between the Parties are governed by the laws, rules, and regulations of India.</p>
<p>&nbsp;</p>
<ol start="15">
<li><strong>GRIEVANCES</strong></li>
</ol>
<ol>Any and all communication relating to any dispute or grievance experienced by the User may be communicated to the Company by the User by emailing to <a href="mailto:support@mlympix.com" style="color:#ffec0c">support@mlympix.com</a>.</ol>
<p>&nbsp;</p>
<ul>
<li><strong>MISCELLANEOUS PROVISIONS</strong>
<ol><br>
<li><strong>Entire Agreement</strong>: These Terms, read with the Policy, form the complete and final contract between the User and the Company with respect to the subject matter hereof and supersedes all other communications, representations, and agreements (whether oral, written or otherwise) relating thereto.</li>
<br><li><strong>Waiver</strong>: The failure of either Party at any time to require performance of any provision of these Terms shall in no manner affect such Party's right at a later time to enforce the same. No waiver by either party of any breach of these Terms, whether by conduct or otherwise, in any one or more instances, shall be deemed to be or construed as a further or continuing waiver of any such breach, or a waiver of any other breach of these Terms.</li>
<br><li><strong>Severability</strong>: If any provision/clause of these Terms is held to be invalid, illegal or unenforceable by any court or authority of competent jurisdiction, the validity, legality, and enforceability of the remaining provisions/clauses of these Terms shall in no way be affected or impaired thereby, and each such provision/clause of these Terms shall be valid and enforceable to the fullest extent permitted by law. In such case, these Terms shall be reformed to the minimum extent necessary to correct any invalidity, illegality or unenforceability, while preserving to the maximum extent the original rights, intentions and commercial expectations of the Parties hereto, as expressed herein.</li>
<br><li><strong>Contact Us</strong>: If you have any questions about this Agreement, the practices of the Platform, or your experience with the Service, you can contact us at <a href="mailto:support@mlympix.com" style="color:#ffec0c">support@mlympix.com</a>.</li>
</ol>
</li>
</ul>
		</div>
	</section>

<?php
    require_once __DIR__. '/components/footer.php';
?>