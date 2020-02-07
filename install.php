<?php
// This is file installs the map data for the AncMed variant
defined('IN_CODE') or die('This script can not be run by itself.');
require_once("variants/install.php");

InstallTerritory::$Territories=array();
$countries=$this->countries;
$territoryRawData=array(
	array('Deepwood Motte', 'Coast', 'Yes', 0, 265, 200, 132, 100),
	array('Winterfell', 'Land', 'Yes', 0, 375, 275, 188, 138),
	array('The North', 'Coast', 'Yes', 0, 350, 140, 175, 70),
	array('The Wall', 'Coast', 'Yes', 0, 475, 25, 238, 12),
	array('The Wall (West Coast)', 'Coast', 'No', 0, 400, 25, 200, 12),
	array('The Wall (East Coast)', 'Coast', 'No', 0, 550, 25, 275, 12),
	array('Last Hearth', 'Coast', 'No', 0, 560, 90, 280, 45),
	array('The Dreadfort', 'Coast', 'Yes', 0, 500, 200, 250, 100),
	array('White Knife', 'Coast', 'No', 0, 430, 310, 215, 155),
	array('Karhold', 'Coast', 'No', 0, 620, 215, 310, 108),
	array('Widows Watch', 'Coast', 'No', 0, 600,  400, 300, 200),
	array('Sea Dragon Point', 'Coast', 'No', 0, 140, 270, 70, 135),
	array('The Stony Shore', 'Coast', 'No', 0, 80, 350, 40, 175),
	array('The Rills', 'Coast', 'No', 0, 110, 480, 55, 240),
	array('Torrhens Square', 'Land', 'No', 0, 280, 375, 140, 188),
	array('Barrowton', 'Coast', 'Yes', 0, 200, 475, 100, 238),
	array('Cerwyn', 'Land', 'No', 0, 375, 420, 188, 210),
	array('White Harbor', 'Coast', 'Yes', 0, 500, 475, 250, 238),
	array('Moat Cailin', 'Coast', 'No', 0, 340, 500, 170, 250),
	array('Moat Cailin (West Coast)', 'Coast', 'No', 0, 285, 490, 142, 245),
	array('Moat Cailin (East Coast)', 'Coast', 'No', 0, 405, 500, 202, 250),
	array('Greywater Forest', 'Coast', 'No', 0, 250, 530, 125, 265),
	array('The Flint Cliffs', 'Coast', 'Yes', 0, 140, 580, 70, 290),
	array('Cape of Eagles', 'Coast', 'No', 1, 260, 645, 130, 322),
	array('Greywater Watch', 'Land', 'No', 0, 320, 605, 160, 302),
	array('Kingsroad North', 'Coast', 'No', 0, 355, 635, 178, 318),
	array('The Three Sisters', 'Coast', 'No', 0, 490, 575, 249, 286),
	array('The Fingers', 'Coast', 'Yes', 0, 545, 645, 272, 322),
	array('Northern Moon Mountains', 'Coast', 'No', 0, 415, 660, 208, 330),
	array('The Twins', 'Land', 'Yes', 0, 325, 685, 162, 342),
	array('Strongsong', 'Land', 'Yes', 0, 460, 690, 230, 345),
	array('Mountains of the Moon', 'Land', 'No', 0, 400, 745, 200, 372),
	array('Hearth Home', 'Coast', 'Yes', 0, 615, 700, 308, 350),
	array('The Eyrie', 'Land', 'Yes', 0, 550, 740, 275, 370),
	array('Gulftown', 'Coast', 'Yes', 0, 610, 800, 305, 400),
	array('Seagard', 'Coast', 'Yes', 1, 325, 750, 162, 375),
	array('Fairmarket', 'Land', 'Yes', 1, 365, 835, 182, 418),
	array('Harrenhal', 'Land', 'Yes', 1, 430, 875, 215, 438),
	array('Riverrun', 'Land', 'Yes', 1, 300, 880, 150, 440),
	array('Harlaw', 'Coast', 'Yes', 0, 150, 785, 75, 392),
	array('Great Wyk', 'Coast', 'Yes', 0, 65, 785, 32, 392),
	array('Pyke', 'Coast', 'Yes', 0, 100, 815, 50, 406),
	array('Sarsfield', 'Land', 'Yes', 2, 175, 955, 88, 478),
	array('Lannisport', 'Coast', 'Yes', 2, 120, 1000, 60, 500),
	array('Silverhill', 'Land', 'Yes', 2, 235, 1100, 118, 550),
	array('Kings Landing', 'Coast', 'Yes', 2, 480, 1050, 240, 525),
	array('Dragonstone', 'Coast', 'Yes', 0, 660, 965, 330, 482),
	array('Storms End', 'Coast', 'Yes', 0, 630, 1190, 315, 595),
	array('Tarth', 'Coast', 'Yes', 0, 710, 1160, 355, 580),
	array('Highgarden', 'Coast', 'Yes', 0, 180, 1280, 90, 640),
	array('Horn Hill', 'Land', 'Yes', 0, 230, 1320, 115, 660),
	array('Oldtown', 'Coast', 'Yes', 0, 120, 1430, 60, 715),
	array('Princes Pass', 'Land', 'Yes', 0, 330, 1430, 165, 715),
	array('Yronwood', 'Coast', 'Yes', 0, 420, 1380, 210, 690),
	array('Sunspear', 'Coast', 'Yes', 0, 580, 1480, 290, 740),
	array('Longbow Hall', 'Coast', 'No', 0, 690, 670, 345, 335),
	array('The Vale', 'Coast', 'No', 0, 670, 725, 335, 362),
	array('The Bloody Gate', 'Land', 'No', 0, 540, 790, 270, 395),
	array('Southern Moon Mountains', 'Land', 'No', 0, 470, 800, 235, 400),
	array('Kingsroad', 'Land', 'No', 0, 440, 840, 220, 420),
	array('Saltpans', 'Coast', 'Yes', 0, 505, 855, 252, 428),
	array('Wickenden', 'Coast', 'No', 0, 565, 855, 282, 428),
	array('Northern Riverrun', 'Coast', 'No', 1, 290, 815, 145, 408),
	array('Western Riverrun', 'Coast', 'No', 1, 225, 855, 112, 428),
	array('The Crag', 'Coast', 'Yes', 0, 160, 850, 80, 425),
	array('Ashemark', 'Coast', 'Yes', 0, 140, 920, 70, 460),
	array('Golden Tooth', 'Land', 'Yes', 0, 250, 920, 125, 460),
	array('Hornvale', 'Land', 'No', 2, 210, 975, 105, 488),
	array('Pinkmaiden', 'Land', 'No', 0, 325, 915, 162, 458),
	array('Eastern Riverrun', 'Land', 'No', 0, 380, 930, 190, 465),
	array('Faircastle', 'Coast', 'No', 0, 90, 950, 45, 475),
	array('Kayce', 'Coast', 'No', 2, 90, 980, 45, 490),
	array('Southern Riverrun', 'Land', 'No', 2, 280, 990, 140, 495),
	array('Stony Sept', 'Land', 'Yes', 0, 335, 1000, 168, 500),
	array('Blackwater Rush', 'Land', 'No', 2, 390, 990, 195, 495),
	array('Kingsroad South', 'Land', 'No', 0, 460, 980, 230, 490),
	array('Maidenpool', 'Coast', 'No', 0, 575, 925, 288, 462),
	array('Maidenpool (North Coast)', 'Coast', 'No', 0, 600,  905, 300, 452),
	array('Maidenpool (South Coast)', 'Coast', 'No', 0, 600,  950, 300, 475),
	array('Duskendale', 'Coast', 'Yes', 0, 540, 970, 270, 485),
	array('Crackclaw Point', 'Coast', 'No', 0, 650, 900, 325, 450),
	array('Western Gold Road', 'Land', 'No', 2, 310, 1055, 155, 528),
	array('Eastern Gold Road', 'Land', 'No', 2, 380, 1050, 190, 525),
	array('Cornfield', 'Land', 'Yes', 0, 160, 1055, 80, 528),
	array('The Reach', 'Land', 'No', 0, 320, 1110, 160, 555),
	array('Tumbleton', 'Land', 'Yes', 0, 410, 1090, 205, 545),
	array('Kingswood', 'Coast', 'No', 0, 530, 1115, 265, 558),
	array('Haystack Hall', 'Coast', 'Yes', 0, 650, 1120, 325, 560),
	array('Felwood', 'Land', 'No', 0, 580, 1175, 290, 588),
	array('Crakehall', 'Coast', 'No', 0, 90, 1120, 45, 560),
	array('Ocean Road', 'Coast', 'No', 0, 110, 1200, 55, 600),
	array('Red Lake', 'Land', 'No', 0, 150, 1170, 75, 585),
	array('Rainwood', 'Coast', 'Yes', 0, 640,  1290, 320, 645),
	array('Crows Nest', 'Coast', 'No', 0, 565,  1270, 282, 635),
	array('Crows Nest (North Coast)', 'Coast', 'No', 0, 600,  1230, 300, 615),
	array('Crows Nest (South Coast)', 'Coast', 'No', 0, 550,  1320, 275, 660),
	array('Southshield', 'Coast', 'Yes', 0, 90,  1245, 45, 623),
	array('Goldengrove', 'Land', 'Yes', 0, 210,  1200, 105, 600),
	array('Roseroad West', 'Land', 'No', 0, 270,  1210, 135, 605),
	array('Roseroad East', 'Land', 'No', 0, 400,  1150, 200, 575),
	array('Cider Hall', 'Land', 'No', 0, 290,  1250, 145, 625),
	array('Ashford', 'Land', 'Yes', 0, 360,  1220, 180, 610),
	array('Grassy Vale', 'Land', 'No', 0, 450,  1190, 225, 595),
	array('Dornish Marche', 'Land', 'No', 0, 350,  1300, 175, 650),
	array('Blackhaven', 'Coast', 'Yes', 0, 490,  1280, 245, 640),
	array('Estermont', 'Coast', 'No', 0, 705,  1320, 352, 660),
	array('Brightwater Keep', 'Coast', 'No', 0, 80,  1350, 40, 675),
	array('Southern Roseroad', 'Land', 'No', 0, 135,  1365, 68, 682),
	array('The Arbor', 'Coast', 'Yes', 0, 70,  1545, 35, 772),
	array('Three Towers', 'Coast', 'No', 0, 150,  1465, 75, 732),
	array('Starfall', 'Coast', 'Yes', 0, 250,  1420, 125, 710),
	array('Sandstone', 'Coast', 'No', 0, 320,  1510, 160, 755),
	array('Hellholt', 'Coast', 'Yes', 0, 430,  1520, 215, 760),
	array('Salt Shore', 'Coast', 'No', 0, 600,  1535, 300, 768),
	array('The Tor', 'Coast', 'No', 0, 530,  1435, 265, 718),
	array('Bay of Seals', 'Sea', 'No', 0, 700,  320, 350, 160),
	array('Bay of Crabs', 'Sea', 'No', 0, 720,  735, 360, 368),
	array('Northern Narrow Sea', 'Sea', 'No', 0, 770,  880, 385, 440),
	array('The East Bite', 'Sea', 'No', 0, 600,  540, 300, 270),
	array('The West Bite', 'Sea', 'No', 0, 430,  550, 215, 275),
	#array('Northern Narrow Sea', 'Sea', 'No', 0, 720,  740, 360, 370),
	array('The Narrow Sea', 'Sea', 'No', 0, 750,  1000, 375, 500),
	array('Blackwater Bay', 'Sea', 'No', 0, 615,  990, 308, 495),
	array('Shipbreaker Bay', 'Sea', 'No', 0, 670,  1215, 335, 608),
	array('South Narrow Sea', 'Sea', 'No', 0, 730,  1540, 365, 770),
	array('Sea of Dorne', 'Sea', 'No', 0, 620,  1400, 310, 700),
	array('Summer Sea', 'Sea', 'No', 0, 350,  1575, 175, 788),
	array('South Sunset Sea', 'Sea', 'No', 0, 10,  1560, 5, 780),
	#array('Northern Narrow Sea', 'Sea', 'No', 0, 770,  880, 385, 440),
	array('Redwyne Straits', 'Sea', 'No', 0, 75,  1290, 38, 645),
	array('The Sunset Sea', 'Sea', 'No', 0, 25,  1240, 12, 620),
	array('North Sunset Sea', 'Sea', 'No', 0, 50,  840, 25, 420),
	array('Golden Sea', 'Sea', 'No', 0, 55,  1040, 28, 520),
	array('Western Ironmans Bay', 'Sea', 'No', 0, 100,  870, 50, 435),
	array('Eastern Ironmans Bay', 'Sea', 'No', 0, 210,  780, 105, 390),
	array('Blazewater Bay', 'Sea', 'No', 0, 50,  650, 25, 325),
	array('Bay of Ice', 'Sea', 'No', 0, 20,  110, 10, 55)
);

foreach($territoryRawData as $territoryRawRow)
{
	list($name, $type, $supply, $countryID, $x, $y, $sx, $sy)=$territoryRawRow;
	new InstallTerritory($name, $type, $supply, $countryID, $x, $y, $sx, $sy);
}
unset($territoryRawData);

$bordersRawData=array(
	array('Bay of Ice','The Wall (West Coast)','Yes','No'),
	array('Bay of Ice','The North','Yes','No'),
	array('Bay of Ice','Deepwood Motte','Yes','No'),
	array('Bay of Ice','Sea Dragon Point','Yes','No'),
	array('Bay of Ice','The Stony Shore','Yes','No'),
	array('Bay of Ice','Blazewater Bay','Yes','No'),
	array('Bay of Ice','North Sunset Sea','Yes','No'),
	
	array('The North','The Wall (West Coast)','Yes','No'),
	array('The North','The Wall','No','Yes'),
	array('The North','Last Hearth','No','Yes'),
	array('The North','The Dreadfort','No','Yes'),
	array('The North','White Knife','No','Yes'),
	array('The North','Winterfell','No','Yes'),
	array('The North','Deepwood Motte','Yes','Yes'),
	
	array('Deepwood Motte','Winterfell','No','Yes'),
	array('Deepwood Motte','Torrhens Square','No','Yes'),
	array('Deepwood Motte','The Stony Shore','No','Yes'),
	array('Deepwood Motte','Sea Dragon Point','Yes','Yes'),
	
	array('Sea Dragon Point','The Stony Shore','Yes','Yes'),
	array('The Stony Shore','Torrhens Square','No','Yes'),
	array('The Stony Shore','The Rills','Yes','Yes'),
	array('The Stony Shore','Blazewater Bay','Yes','No'),
	
	array('The Wall','Last Hearth','No','Yes'),
	array('The Wall (East Coast)','Last Hearth','Yes','No'),
	array('The Wall (East Coast)','Bay of Seals','Yes','No'),
	
	array('Last Hearth','Karhold','Yes','Yes'),
	array('Last Hearth','The Dreadfort','No','Yes'),
	array('Karhold','The Dreadfort','Yes','Yes'),
	array('Karhold','Bay of Seals','Yes','No'),
	array('The Dreadfort','Widows Watch','Yes','Yes'),
	array('The Dreadfort','White Knife','No','Yes'),
	array('The Dreadfort','Bay of Seals','Yes','No'),
	array('White Knife','Widows Watch','No','Yes'),
	array('White Knife','Winterfell','No','Yes'),
	array('White Knife','White Harbor','No','Yes'),
	array('White Knife','Cerwyn','No','Yes'),
	array('Winterfell','Torrhens Square','No','Yes'),
	array('Winterfell','Cerwyn','No','Yes'),
	array('Cerwyn','White Harbor','No','Yes'),
	array('Cerwyn','Moat Cailin','No','Yes'),
	array('Cerwyn','Barrowton','No','Yes'),
	array('Cerwyn','Torrhens Square','No','Yes'),
	array('Torrhens Square','Barrowton','No','Yes'),
	array('Torrhens Square','The Rills','No','Yes'),
	
	array('Widows Watch','Bay of Seals','Yes','No'),
	array('Widows Watch','The East Bite','Yes','No'),
	array('White Harbor','The East Bite','Yes','No'),
	array('White Harbor','The West Bite','Yes','No'),
	array('White Harbor','Moat Cailin','No','Yes'),
	array('White Harbor','Moat Cailin (East Coast)','Yes','No'),
	
	array('The Rills','Barrowton','Yes','Yes'),
	array('The Rills','Blazewater Bay','Yes','No'),
	array('Barrowton','Blazewater Bay','Yes','No'),
	array('Barrowton','Moat Cailin','No','Yes'),
	array('Barrowton','Moat Cailin (West Coast)','Yes','No'),
	array('Bay of Seals','The East Bite','Yes','No'),
	array('Bay of Seals','Northern Narrow Sea','Yes','No'),
	
	array('Blazewater Bay','Greywater Forest','Yes','No'),
	array('Blazewater Bay','The Flint Cliffs','Yes','No'),
	array('Blazewater Bay','Eastern Ironmans Bay','Yes','No'),
	array('Blazewater Bay','Western Ironmans Bay','Yes','No'),
	array('Blazewater Bay','North Sunset Sea','Yes','No'),
	array('Blazewater Bay','Great Wyk','Yes','No'),
	array('Blazewater Bay','Moat Cailin (West Coast)','Yes','No'),
	
	array('Moat Cailin','Greywater Forest','No','Yes'),
	array('Moat Cailin (West Coast)','Greywater Forest','Yes','No'),
	array('Moat Cailin','Kingsroad North','No','Yes'),
	array('Moat Cailin (East Coast)','Kingsroad North','Yes','No'),
	array('Moat Cailin (East Coast)','The West Bite','Yes','No'),
	
	array('The Three Sisters','The West Bite','Yes','No'),
	array('The Three Sisters','The East Bite','Yes','No'),
	
	array('North Sunset Sea','Great Wyk','Yes','No'),
	array('North Sunset Sea','Pyke','Yes','No'),
	array('North Sunset Sea','Western Ironmans Bay','Yes','No'),
	array('North Sunset Sea','Faircastle','Yes','No'),
	array('North Sunset Sea','Golden Sea','Yes','No'),
	array('North Sunset Sea','The Sunset Sea','Yes','No'),
	array('Pyke','Western Ironmans Bay','Yes','No'),
	array('Western Ironmans Bay','Eastern Ironmans Bay','Yes','No'),
	array('Western Ironmans Bay','Harlaw','Yes','No'),
	array('Western Ironmans Bay','The Crag','Yes','No'),
	array('Western Ironmans Bay','Ashemark','Yes','No'),
	array('Western Ironmans Bay','Faircastle','Yes','No'),
	array('Western Ironmans Bay','Golden Sea','Yes','No'),
	array('Western Ironmans Bay','Harlaw','Yes','No'),
	array('Eastern Ironmans Bay','The Flint Cliffs','Yes','No'),
	array('Eastern Ironmans Bay','Cape of Eagles','Yes','No'),
	array('Eastern Ironmans Bay','Seagard','Yes','No'),
	array('Eastern Ironmans Bay','Northern Riverrun','Yes','No'),
	array('Eastern Ironmans Bay','Western Riverrun','Yes','No'),
	array('Eastern Ironmans Bay','The Crag','Yes','No'),
	array('Eastern Ironmans Bay','Harlaw','Yes','No'),
	
	array('The Flint Cliffs','Greywater Forest','Yes','Yes'),
	array('The Flint Cliffs','Cape of Eagles','Yes','Yes'),
	array('Greywater Forest','Cape of Eagles','No','Yes'),
	array('Greywater Forest','Greywater Watch','No','Yes'),
	array('Greywater Watch','Kingsroad North','No','Yes'),
	array('Greywater Watch','Cape of Eagles','No','Yes'),
	array('Kingsroad North','Kingsroad','No','Yes'),
	array('Kingsroad North','The Twins','No','Yes'),
	array('Kingsroad North','Mountains of the Moon','No','Yes'),
	array('Kingsroad North','Northern Moon Mountains','Yes','Yes'),
	array('Kingsroad North','The West Bite','Yes','No'),
	
	array('The West Bite','Northern Moon Mountains','Yes','No'),
	array('The West Bite','The Fingers','Yes','No'),
	array('The West Bite','The East Bite','Yes','No'),
	array('The East Bite','The Fingers','Yes','No'),
	array('The East Bite','Bay of Crabs','Yes','No'),
	array('The East Bite','Northern Narrow Sea','Yes','No'),
	
	array('The Fingers','Hearth Home','Yes','Yes'),
	array('The Fingers','Bay of Crabs','Yes','No'),
	array('The Fingers','Strongsong','No','Yes'),
	array('The Fingers','Northern Moon Mountains','Yes','Yes'),
	
	array('Northern Moon Mountains','Strongsong','No','Yes'),
	array('Northern Moon Mountains','Mountains of the Moon','No','Yes'),
	array('Cape of Eagles','The Twins','No','Yes'),
	array('Cape of Eagles','Seagard','Yes','Yes'),
	array('Kingsroad','Mountains of the Moon','No','Yes'),
	array('Kingsroad','Southern Moon Mountains','No','Yes'),
	array('Kingsroad','The Bloody Gate','No','Yes'),
	array('Kingsroad','Saltpans','No','Yes'),
	array('Kingsroad','Harrenhal','No','Yes'),
	array('Mountains of the Moon','Southern Moon Mountains','No','Yes'),
	array('Southern Moon Mountains','The Bloody Gate','No','Yes'),
	array('The Bloody Gate','The Eyrie','No','Yes'),
	array('The Bloody Gate','The Vale','No','Yes'),
	array('The Bloody Gate','Gulftown','No','Yes'),
	array('The Bloody Gate','Wickenden','No','Yes'),
	array('The Bloody Gate','Saltpans','No','Yes'),
	array('Strongsong','Hearth Home','No','Yes'),
	array('The Eyrie','Hearth Home','No','Yes'),
	array('The Eyrie','The Vale','No','Yes'),
	array('Hearth Home','Longbow Hall','Yes','Yes'),
	array('Hearth Home','The Vale','No','Yes'),
	array('The Vale','Longbow Hall','Yes','Yes'),
	array('The Vale','Gulftown','Yes','Yes'),
	array('The Vale','Bay of Crabs','Yes','No'),
	array('Longbow Hall','Bay of Crabs','Yes','No'),
	array('Hearth Home','Bay of Crabs','Yes','No'),
	array('Bay of Crabs','Gulftown','Yes','No'),
	array('Bay of Crabs','Wickenden','Yes','No'),
	array('Bay of Crabs','Saltpans','Yes','No'),
	array('Bay of Crabs','Maidenpool (North Coast)','Yes','No'),
	array('Bay of Crabs','Crackclaw Point','Yes','No'),
	array('Bay of Crabs','Northern Narrow Sea','Yes','No'),
	array('Northern Narrow Sea','Blackwater Bay','Yes','No'),
	array('Northern Narrow Sea','Dragonstone','Yes','No'),
	array('Northern Narrow Sea','The Narrow Sea','Yes','No'),
	array('Northern Narrow Sea','Crackclaw Point','Yes','No'),
	
	
	array('Seagard','Northern Riverrun','Yes','Yes'),
	array('Seagard','Fairmarket','No','Yes'),
	array('Northern Riverrun','Riverrun','No','Yes'),
	array('Northern Riverrun','Fairmarket','No','Yes'),
	array('Northern Riverrun','Golden Tooth','No','Yes'),
	array('Northern Riverrun','Western Riverrun','Yes','Yes'),
	array('Western Riverrun','The Crag','Yes','Yes'),
	array('Western Riverrun','Ashemark','No','Yes'),
	array('Western Riverrun','Golden Tooth','No','Yes'),
	array('The Crag','Ashemark','Yes','Yes'),
	
	array('Fairmarket','Harrenhal','No','Yes'),
	array('Fairmarket','Eastern Riverrun','No','Yes'),
	array('Fairmarket','Riverrun','No','Yes'),
	array('Fairmarket','Pinkmaiden','No','Yes'),
	array('Harrenhal','Saltpans','No','Yes'),
	array('Harrenhal','Maidenpool','No','Yes'),
	array('Harrenhal','Kingsroad South','No','Yes'),
	array('Harrenhal','Eastern Riverrun','No','Yes'),
	
	array('Faircastle','Golden Sea','Yes','No'),
	array('Ashemark','Kayce','Yes','Yes'),
	array('Ashemark','Sarsfield','No','Yes'),
	array('Ashemark','Golden Tooth','No','Yes'),
	array('Kayce','Sarsfield','No','Yes'),
	array('Kayce','Lannisport','Yes','Yes'),
	array('Golden Sea','Ashemark','Yes','No'),
	array('Golden Sea','Kayce','Yes','No'),
	array('Golden Sea','Lannisport','Yes','No'),
	array('Golden Sea','Crakehall','Yes','No'),
	array('Golden Sea','Ocean Road','Yes','No'),
	array('Golden Sea','Southshield','Yes','No'),
	array('Golden Sea','The Sunset Sea','Yes','No'),
	array('Golden Sea','Redwyne Straits','Yes','No'),
	
	array('Sarsfield','Golden Tooth','No','Yes'),
	array('Sarsfield','Hornvale','No','Yes'),
	array('Sarsfield','Western Gold Road','No','Yes'),
	array('Sarsfield','Lannisport','No','Yes'),
	array('Golden Tooth','Riverrun','No','Yes'),
	array('Golden Tooth','Pinkmaiden','No','Yes'),
	array('Golden Tooth','Southern Riverrun','No','Yes'),
	array('Golden Tooth','Hornvale','No','Yes'),
	array('Riverrun','Pinkmaiden','No','Yes'),
	array('Pinkmaiden','Southern Riverrun','No','Yes'),
	array('Pinkmaiden','Stony Sept','No','Yes'),
	array('Pinkmaiden','Eastern Riverrun','No','Yes'),
	array('Eastern Riverrun','Blackwater Rush','No','Yes'),
	array('Eastern Riverrun','Stony Sept','No','Yes'),
	array('Hornvale','Southern Riverrun','No','Yes'),
	array('Hornvale','Western Gold Road','No','Yes'),
	array('Stony Sept','Blackwater Rush','No','Yes'),
	array('Stony Sept','Western Gold Road','No','Yes'),
	array('Stony Sept','Eastern Gold Road','No','Yes'),
	array('Stony Sept','Southern Riverrun','No','Yes'),
	
	array('Blackwater Rush','Kingsroad South','No','Yes'),
	array('Blackwater Rush','Eastern Gold Road','No','Yes'),
	array('Western Gold Road','Eastern Gold Road','No','Yes'),
	array('Western Gold Road','Lannisport','No','Yes'),
	array('Western Gold Road','Cornfield','No','Yes'),
	array('Western Gold Road','Silverhill','No','Yes'),
	array('Western Gold Road','The Reach','No','Yes'),
	array('Western Gold Road','Southern Riverrun','No','Yes'),
	
	array('Lannisport','Cornfield','No','Yes'),
	array('Lannisport','Crakehall','Yes','Yes'),
	array('Saltpans','Maidenpool','No','Yes'),
	array('Saltpans','Maidenpool (North Coast)','Yes','No'),
	array('Gulftown','Wickenden','Yes','Yes'),
	array('Wickenden','Saltpans','Yes','Yes'),
	
	
	array('Maidenpool','Crackclaw Point','No','Yes'),
	array('Maidenpool (North Coast)','Crackclaw Point','Yes','No'),
	array('Maidenpool (South Coast)','Crackclaw Point','Yes','No'),
	array('Maidenpool (South Coast)','Duskendale','Yes','No'),
	array('Maidenpool','Duskendale','No','Yes'),
	array('Maidenpool','Kingsroad South','No','Yes'),
	array('Kingsroad South','Eastern Gold Road','No','Yes'),
	array('Kingsroad South','Kings Landing','No','Yes'),
	array('Eastern Gold Road','Kings Landing','No','Yes'),
	array('Eastern Gold Road','Kingswood','No','Yes'),
	array('Eastern Gold Road','Tumbleton','No','Yes'),
	array('Eastern Gold Road','The Reach','No','Yes'),
	array('Blackwater Bay','Kings Landing','Yes','No'),
	array('Blackwater Bay','Crackclaw Point','Yes','No'),
	array('Blackwater Bay','Maidenpool (South Coast)','Yes','No'),
	array('Blackwater Bay','Duskendale','Yes','No'),
	array('Blackwater Bay','Dragonstone','Yes','No'),
	array('Blackwater Bay','Kingswood','Yes','No'),
	array('Blackwater Bay','Haystack Hall','Yes','No'),
	array('Blackwater Bay','Shipbreaker Bay','Yes','No'),
	array('Dragonstone','The Narrow Sea','Yes','No'),
	array('Dragonstone','Shipbreaker Bay','Yes','No'),
	array('Duskendale','Kings Landing','Yes','Yes'),
	array('Kings Landing','Kingswood','Yes','Yes'),
	array('Kingswood','Haystack Hall','Yes','Yes'),
	array('Kingswood','Tumbleton','No','Yes'),
	array('Kingswood','Roseroad East','No','Yes'),
	array('Kingswood','Grassy Vale','No','Yes'),
	array('Kingswood','Felwood','No','Yes'),
	array('Crakehall','Cornfield','No','Yes'),
	array('Crakehall','Red Lake','No','Yes'),
	array('Crakehall','Ocean Road','Yes','Yes'),
	array('Cornfield','Silverhill','No','Yes'),
	array('Cornfield','Red Lake','No','Yes'),
	array('Silverhill','The Reach','No','Yes'),
	array('Silverhill','Red Lake','No','Yes'),
	array('Silverhill','Goldengrove','No','Yes'),
	array('The Reach','Tumbleton','No','Yes'),
	array('The Reach','Roseroad East','No','Yes'),
	array('The Reach','Roseroad West','No','Yes'),
	array('The Reach','Goldengrove','No','Yes'),
	
	array('Tumbleton','Roseroad East','No','Yes'),
	array('The Narrow Sea','Shipbreaker Bay','Yes','No'),
	array('The Narrow Sea','Tarth','Yes','No'),
	array('The Narrow Sea','Estermont','Yes','No'),
	array('The Narrow Sea','South Narrow Sea','Yes','No'),
	array('Shipbreaker Bay','Haystack Hall','Yes','No'),
	array('Shipbreaker Bay','Storms End','Yes','No'),
	array('Shipbreaker Bay','Crows Nest (North Coast)','Yes','No'),
	array('Shipbreaker Bay','Rainwood','Yes','No'),
	array('Shipbreaker Bay','Estermont','Yes','No'),
	array('Shipbreaker Bay','Sea of Dorne','Yes','No'),
	array('Shipbreaker Bay','Tarth','Yes','No'),
	array('The Sunset Sea','Golden Sea','Yes','No'),
	array('The Sunset Sea','Redwyne Straits','Yes','No'),
	array('The Sunset Sea','South Sunset Sea','Yes','No'),
	
	array('Red Lake','Ocean Road','No','Yes'),
	array('Red Lake','Goldengrove','No','Yes'),
	array('Ocean Road','Goldengrove','No','Yes'),
	array('Ocean Road','Highgarden','Yes','No'),
	array('Highgarden','Goldengrove','No','Yes'),
	array('Highgarden','Roseroad West','No','Yes'),
	array('Highgarden','Cider Hall','No','Yes'),
	array('Highgarden','Horn Hill','No','Yes'),
	array('Highgarden','Southern Roseroad','No','Yes'),
	array('Highgarden','Brightwater Keep','Yes','Yes'),
	array('Brightwater Keep','Oldtown','Yes','Yes'),
	array('Brightwater Keep','Southern Roseroad','No','Yes'),
	array('Oldtown','Southern Roseroad','No','Yes'),
	array('Oldtown','Horn Hill','No','Yes'),
	array('Oldtown','Three Towers','Yes','Yes'),
	
	array('Redwyne Straits','South Sunset Sea','Yes','No'),
	array('Redwyne Straits','Summer Sea','Yes','No'),
	array('Redwyne Straits','The Arbor','Yes','No'),
	array('Redwyne Straits','Ocean Road','Yes','No'),
	array('Redwyne Straits','Highgarden','Yes','No'),
	array('Redwyne Straits','Brightwater Keep','Yes','No'),
	array('Redwyne Straits','Oldtown','Yes','No'),
	array('Redwyne Straits','Three Towers','Yes','No'),
	array('Redwyne Straits','Starfall','Yes','No'),
	
	array('South Sunset Sea','The Arbor','Yes','No'),
	array('South Sunset Sea','Summer Sea','Yes','No'),
	
	array('Roseroad West','Cider Hall','No','Yes'),
	array('Roseroad West','Ashford','No','Yes'),
	array('Roseroad West','Roseroad East','No','Yes'),
	array('Cider Hall','Horn Hill','No','Yes'),
	array('Cider Hall','Dornish Marche','No','Yes'),
	array('Cider Hall','Ashford','No','Yes'),
	array('Southern Roseroad','Horn Hill','No','Yes'),
	array('Horn Hill','Dornish Marche','No','Yes'),
	array('Horn Hill','Three Towers','No','Yes'),
	array('Three Towers','Starfall','Yes','Yes'),
	
	array('Starfall','Sandstone','Yes','Yes'),
	array('Starfall','Princes Pass','No','Yes'),
	
	array('Sandstone','Hellholt','Yes','Yes'),
	array('Sandstone','Princes Pass','No','Yes'),
	
	array('Hellholt','Salt Shore','Yes','Yes'),
	array('Hellholt','Princes Pass','No','Yes'),
	array('Hellholt','Yronwood','No','Yes'),
	array('Hellholt','Sunspear','No','Yes'),
	
	array('Salt Shore','Sunspear','Yes','Yes'),
	array('Sunspear','The Tor','Yes','Yes'),
	array('The Tor','Yronwood','Yes','Yes'),
	
	
	array('Dornish Marche','Grassy Vale','No','Yes'),
	array('Dornish Marche','Blackhaven','No','Yes'),
	array('Dornish Marche','Yronwood','No','Yes'),
	array('Dornish Marche','Princes Pass','No','Yes'),
	array('Dornish Marche','Ashford','No','Yes'),
	
	
	array('Roseroad East','Grassy Vale','No','Yes'),
	array('Roseroad East','Ashford','No','Yes'),
	
	array('Grassy Vale','Blackhaven','No','Yes'),
	array('Grassy Vale','Felwood','No','Yes'),
	array('Grassy Vale','Crows Nest','No','Yes'),
	array('Grassy Vale','Ashford','No','Yes'),
	array('Haystack Hall','Felwood','No','Yes'),
	array('Haystack Hall','Storms End','Yes','Yes'),
	array('Felwood','Storms End','No','Yes'),
	array('Storms End','Crows Nest','No','Yes'),
	array('Storms End','Crows Nest (North Coast)','Yes','No'),
	array('Blackhaven','Crows Nest (South Coast)','Yes','No'),
	array('Blackhaven','Yronwood','Yes','Yes'),
	array('Yronwood','The Tor','Yes','Yes'),
	array('Rainwood','Crows Nest (South Coast)','Yes','No'),
	array('Rainwood','Crows Nest (North Coast)','Yes','No'),
	
	array('Rainwood','Crows Nest','No','Yes'),
	
	
	array('Summer Sea','Starfall','Yes','No'),
	array('Summer Sea','Sandstone','Yes','No'),
	array('Summer Sea','Hellholt','Yes','No'),
	array('Summer Sea','South Narrow Sea','Yes','No'),
	
	array('South Narrow Sea','Hellholt','Yes','No'),
	array('South Narrow Sea','Salt Shore','Yes','No'),
	array('South Narrow Sea','Sunspear','Yes','No'),
	array('South Narrow Sea','Sea of Dorne','Yes','No'),
	array('South Narrow Sea','Estermont','Yes','No'),
	
	array('Sea of Dorne','Shipbreaker Bay','Yes','No'),
	array('Sea of Dorne','Rainwood','Yes','No'),
	array('Sea of Dorne','Crows Nest (South Coast)','Yes','No'),
	array('Sea of Dorne','Blackhaven','Yes','No'),
	array('Sea of Dorne','Yronwood','Yes','No'),
	array('Sea of Dorne','The Tor','Yes','No'),
	array('Sea of Dorne','Sunspear','Yes','No'),
	array('Sea of Dorne','Estermont','Yes','No')
);

foreach($bordersRawData as $borderRawRow)
{
	list($from, $to, $fleets, $armies)=$borderRawRow;
	InstallTerritory::$Territories[$to]  ->addBorder(InstallTerritory::$Territories[$from],$fleets,$armies);
}
unset($bordersRawData);

InstallTerritory::runSQL($this->mapID);
InstallCache::terrJSON($this->territoriesJSONFile(),$this->mapID);
?>
