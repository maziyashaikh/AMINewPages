<?php 

$fullscriptname = $_SERVER['SCRIPT_FILENAME'];

$pieces = explode("/", $_SERVER['PHP_SELF']);

if (strpos($fullscriptname, "htdocs") !== FALSE) {
    $minus = "3";}
    else{$minus = "2";}

$loop = count($pieces) - $minus;

$link="";
for ($i=0; $i<$loop; $i++){
    $link .= "../";
}

$scriptname = $_SERVER['SCRIPT_FILENAME'];

if(stristr($scriptname, "indexaxis.php"))
{
    $pagename = "Axis My India: Top Consumer Data Intelligence Company India";
    $metakeywords = "data intelligence company, market research company, market research company in india, market research intelligence";
    $metadescription = "Axis My India is a leading consumer data intelligence company in India. We provide expert market research and consumer insights to drive your business success.";
}
elseif(stristr($scriptname, "about-us-axis.php"))
{
    $pagename = "Top Political Survey Companies - Expert Opinion Research";
    $metakeywords = "political survey companies, public opinion survey, political opinion research";
    $metadescription = "Discover leading political survey companies for accurate public opinion and political research insights. Trusted experts in political opinion surveys.";
}
elseif(stristr($scriptname, "harvard-press-release-axis.php"))
{
    $pagename = "Axis My India Curriculum: Harvard Business School Case Study";
    $metakeywords = "harvard business school, harvard case study, harvard business school curriculum";
    $metadescription = "HBS analyzes the success of Axis My India, a pioneer in election survey methodology. Harvard Business School studies Axis My India's methods and processes. Visit Now!!";
}
elseif(stristr($scriptname, "books-axis.php"))
{
    $pagename = "Top Books on Political Opinion Research & Voter Insights";
    $metakeywords = "books on political, political opinion research survey, voters book";
    $metadescription = "Understanding voters is key to winning elections & shaping policy. Dive into our list of the best political opinion research and insights books. Check Now!!";
}
elseif(stristr($scriptname, "perform-rec.php"))
{
    $pagename = "Political Opinion Research Survey | Axis My India";
    $metakeywords = "axis my india survey, political opinion research survey, political predictions 2024";
    $metadescription = "Uncover Indian public opinion through Axis My India's latest Political Opinion Research Survey. Explore key political issues and understand voter sentiment.";
}
elseif(stristr($scriptname, "privacy-axis.php"))
{
    $pagename = "Trust Axis My India For Protecting Your Privacy";
    $metakeywords = "axis my india";
    $metadescription = "Axis My India prioritizes your privacy. Understand how we handle your data. Explore our comprehensive privacy policy for more information. Check Now!!";
}
elseif(stristr($scriptname, "never_beforeaxis.php"))
{
    $pagename = "Top Political & Consumer Research Companies | Axis My India";
    $metakeywords = "political research, consumer research, consumer research companies";
    $metadescription = "Find leading political and consumer research companies for accurate insights and data-driven decisions. Get the best in market analysis and consumer behavior studies.";
}
elseif(stristr($scriptname, "ami-pep-axis.php"))
{
    $pagename = "AMI-PEP: People Empowerment Platform for Election Survey";
    $metakeywords = "people empowerment platform, election survey";
    $metadescription = "AMI-PEP, a people empowerement platform provide citizens access to authentic information & solutions for everyday needs. Learn how AMI-PEP empowers public engagement.";
}
elseif(stristr($scriptname, "clients-axis.php"))
{
    $pagename = "Axis My India: Market Research Company for Brand Success";
    $metakeywords = "axis my india";
    $metadescription = "Market research expertise for brand success. Get insights into the world's largest democracy. Understand preferences & navigate India's unique market.";
}
elseif(stristr($scriptname, "consumer-content-preference-study-axis.php"))
{
    $pagename = "Decoding Consumer Content Preferences in India with Axis My India";
    $metakeywords = "consumer content preference, ott content india, consumer content preference tracker";
    $metadescription = "Get the latest insights on what Indian consumers are watching, reading, and listening to. Axis My India's study explores content preferences across media platforms.";
}