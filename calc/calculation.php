<?php

error_reporting(0);
if(isset($_POST['submit'])){



    $buildup_area = $_POST['Buildup-Area'];
    $fsa_area = $_POST['FSA-Area'];
    $plot_area = $_POST['Plot-Area'];

    $ground_floor = $_POST['Ground-Floor'];
    $first_floor = $_POST['First-Floor'];
    $second_floor = $_POST['Second-Floor'];
    $compound_well = $_POST['Compound-Wall'];

    $layout = $_POST['layout'];
    $land = $_POST['land'];
    $demolition = $_POST['demolition'];

    $no_roads = $_POST['No-Roads'];
    $guideline = $_POST['Guideline'];
    $dwelling = $_POST['Dwelling'];

    $frontage_1 = $_POST['frontage-1'];
    $frontage_2 = $_POST['frontage-2'];
    $frontage_3 = $_POST['frontage-3'];
    $frontage_4 = $_POST['frontage-4'];

    $road_1 = $_POST['Road-1'];
    $road_2 = $_POST['Road-2'];
    $road_3 = $_POST['Road-3'];
    $road_4 = $_POST['Road-4'];

// ---------------  Buildup Area ---------- 
   if($land == "detached"){
     $bal = 0;
    if($buildup_area >= 40){
        $bal = $bal + $buildup_area-40;
        $fl = 40*9;

        if($bal <= 100){
            $sl = $bal*15.50;
           
        }elseif($bal >= 100){
            $sl = 60*15.50;
            $bal = $bal-60;

            if($bal <= 400){
                $tl = $bal*41;
            }
            elseif($bal >= 400){
                $bal = $bal - 400;
                $tl = $bal*105;
            }
        }
    }
   }
   elseif($land == "continue"){

    if($buildup_area >= 40){
        $bal = $bal + $buildup_area-40;
        $fl = 40*10.5;

        if($bal <= 100){
            $sl = $bal*18.50;
           
        }elseif($bal >= 100){
            $sl = 60*18.50;
            $bal = $bal-60;

            if($bal <= 400){
                $tl = $bal*46;
            }
            elseif($bal >= 400){
                $bal = $bal - 400;
                $tl = $bal*115;
            }
        }
    }
   }


$building_license_fee = $fl + $sl + $tl;
$building_license_fee = (int)$building_license_fee;

// -------------- Demolition ------------------------ 

$gf = $ground_floor*110;
$ff = $first_floor*90;
$sf = $second_floor*70;
$cw = $compound_well*70;

$demolition_fee = $gf+$ff+$sf+$cw;

// -------------------- Road width -------------------- 

$roads = array($road_1, $road_2, $road_3, $road_4);

$sewarage = 0;
foreach($roads as $value){
    $kiv = $value / 2 * 4740;
    $sewarage = $kiv + $sewarage;
    $sewarage = (int)$sewarage;
}
$water = 0;
foreach($roads as $value){
    $kiv = $value / 2 * .75 * 4740;
    $water = $kiv + $water;
    $water = (int)$water;
}
$tneb = 0;
foreach($roads as $value){
    $kiv = $value / 2 * .75 * 4740;
    $tneb = $kiv + $tneb;
    $tneb = (int)$tneb;
}

// ----------------- Scrutiny charges -------------------- 
$scrutiny = $buildup_area * 2;

// ------------------ Security Deposite ------------------ 
if($dwelling >= 4){
    $security = $buildup_area * 187.5;
}

// -------------- Tentative Improvement ----------


// ------------ Road 1 frontage-1 --------------- 

if($road_1 > 1 and $road_1 <= 4.87){
    $tent_1 = $frontage_1 / 2 * 5460;
}
elseif($road_1 >= 4.88 and $road_1 <= 6){
    $tent_1 = $frontage_1 / 2 * 5640;
}
elseif($road_1 >= 6.01 and $road_1 <=7.31){
    $tent_1 = $frontage_1 / 2 * 7620;   
}
elseif($road_1 >= 7.32 and $road_1 <= 9){
    $tent_1 = $frontage_1 / 2 * 9660; 
}
elseif($road_1 >= 9.01 and $road_1 <= 12.2){
    $tent_1 = $frontage_1 / 2 * 14900; 
}
elseif($road_1 >= 12.21 and $road_1 <= 15.25){
    $tent_1 = $frontage_1 / 2 * 19670; 
}
elseif($road_1 >= 15.26 and $road_1 <= 18.30){
    $tent_1 = $frontage_1 / 2 * 20250; 
}
elseif($road_1 >= 18.31){
    $tent_1 = $frontage_1 / 2 * 29700; 
}


// ------------ Road 2 frontage-2 --------------- 

if($road_2 > 1 and $road_2 <= 4.87){
    $tent_2 = $frontage_2 / 2 * 5460;
}
elseif($road_2 >= 4.88 and $road_2 <= 6){
    $tent_2 = $frontage_2 / 2 * 5640;
}
elseif($road_2 >= 6.01 and $road_2 <=7.31){
    $tent_2 = $frontage_2 / 2 * 7620;   
}
elseif($road_2 >= 7.32 and $road_2 <= 9){
    $tent_2 = $frontage_2 / 2 * 9660; 
}
elseif($road_2 >= 9.01 and $road_2 <= 12.2){
    $tent_2 = $frontage_2 / 2 * 14900; 
}
elseif($road_2 >= 12.21 and $road_2 <= 15.25){
    $tent_2 = $frontage_2 / 2 * 19670; 
}
elseif($road_2 >= 15.26 and $road_2 <= 18.30){
    $tent_2 = $frontage_2 / 2 * 20250; 
}
elseif($road_2 >= 18.31){
    $tent_2 = $frontage_2 / 2 * 29700; 
}

// ------------ Road 3 frontage-3 --------------- 

if($road_3 > 1 and $road_3 <= 4.87){
    $tent_3 = $frontage_3 / 2 * 5460;
}
elseif($road_3 >= 4.88 and $road_3 <= 6){
    $tent_3 = $frontage_3 / 2 * 5640;
}
elseif($road_3 >= 6.01 and $road_3 <=7.31){
    $tent_3 = $frontage_3 / 2 * 7620;   
}
elseif($road_3 >= 7.32 and $road_3 <= 9){
    $tent_3 = $frontage_3 / 2 * 9660; 
}
elseif($road_3 >= 9.01 and $road_3 <= 12.2){
    $tent_3 = $frontage_3 / 2 * 14900; 
}
elseif($road_3 >= 12.21 and $road_3 <= 15.25){
    $tent_3 = $frontage_3 / 2 * 19670; 
}
elseif($road_3 >= 15.26 and $road_3 <= 18.30){
    $tent_3 = $frontage_3 / 2 * 20250; 
}
elseif($road_3 >= 18.31){
    $tent_3 = $frontage_3 / 2 * 29700; 
}

// ------------ Road 3 frontage-3 --------------- 

if($road_4 > 1 and $road_4 <= 4.87){
    $tent_4 = $frontage_4 / 2 * 5460;
}
elseif($road_4 >= 4.88 and $road_4 <= 6){
    $tent_4 = $frontage_4 / 2 * 5640;
}
elseif($road_4 >= 6.01 and $road_4 <=7.31){
    $tent_4 = $frontage_4 / 2 * 7620;   
}
elseif($road_4 >= 7.32 and $road_4 <= 9){
    $tent_4 = $frontage_4 / 2 * 9660; 
}
elseif($road_4 >= 9.01 and $road_4 <= 12.2){
    $tent_4 = $frontage_4 / 2 * 14900; 
}
elseif($road_4 >= 12.21 and $road_4 <= 15.25){
    $tent_4 = $frontage_4 / 2 * 19670; 
}
elseif($road_4 >= 15.26 and $road_4 <= 18.30){
    $tent_4 = $frontage_4 / 2 * 20250; 
}
elseif($road_4 >= 18.31){
    $tent_4 = $frontage_4 / 2 * 29700; 
}

$road = $tent_1 + $tent_2 + $tent_3 + $tent_4;

// -------------------- Street Light --------------------- 

$max = max($roads);
$lrg = array_search($max, $roads);

$frontages = array($frontage_1, $frontage_2, $frontage_3, $frontage_4);

$street_frontage = $frontages[$lrg];

if($max <= 6){
    $s_light = $street_frontage / 2 * 1800;
}
elseif($max > 6 and $max <= 7.50){
    $s_light = $street_frontage / 2 * 2200;
}
elseif($max > 7.50){
    $s_light = $street_frontage / 2 * 3300;
}


// ------------------- SWD ----------------------------

if($max >= 12.2){
    $swd = $street_frontage / 2 * 23450;
}

// -------------------- C.M.D.A charges ------------------- 

if($land == "detached"){
    $cmda = ($buildup_area * 10) + ($plot_area * 4);
}
elseif($land == "continue"){
    $cmda = ($buildup_area * 12.5) + ($plot_area * 5);
}

// -------------------- I & A charges --------------------- 

if($dwelling >= 4){
    $ia = $fsa_area * 375;
}

// ----------------------- OSR charges -------------------- 

if($layout == "unapproved"){
    $osr = $plot_area * 0.1 * $guideline;
}

// ----------------- Regularasession charges -------------

if($layout == "unapproved"){
    $rc = $plot_area * 100 ;
}

// --------------- MWGWF charges -------------------- 
$mwgwf = $buildup_area * 129;

// ---------------- VLT tax ------------------------- 
if($demolition == 0){
    $vlt = $plot_area * 70;
}

// -------------- MIDC charges ------------------------ 
$midc = $buildup_area * 180;

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<body>


<div class="container table-responsive py-5"> 
<table class="table table-bordered table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">S.No</th>
      <th scope="col" class="text-center">Fees to be Collected</th>
      <th scope="col" class="text-center">Amount</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Building License Fees</td>
      <td><?= $building_license_fee ?></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Demolition Fees</td>
      <td><?= $demolition_fee ?></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Plan Charges</td>
      <td>1050</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Road Cut Charges (Sewarage)</td>
      <td><?= $sewarage ?></td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Road Cut Charges (Water)</td>
      <td><?= $water ?></td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>Road Cut Charges (TNEB)</td>
      <td><?= $tneb ?></td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>Scrutiny Fee</td>
      <td><?= $scrutiny ?></td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td>Security Deposite</td>
      <td><?= $security ?></td>
    </tr>
    <tr>
      <th scope="row">9</th>
      <td>Security Deposite Of Display Board</td>
      <td>1000</td>
    </tr>
    <tr>
      <th scope="row">10</th>
      <td>Tentative Improvement Charges (Road)</td>
      <td><?= $road ?></td>
    </tr>
    <tr>
      <th scope="row">11</th>
      <td>Tentative Improvement Charges (Street Light)</td>
      <td><?= $s_light ?></td>
    </tr>
    <tr>
      <th scope="row">12</th>
      <td>Tentative Improvement Charges (SWD)</td>
      <td><?= $swd ?></td>
    </tr>
    <tr>
      <th scope="row">13</th>
      <td>CMDA Development Charges</td>
      <td><?= $cmda ?></td>
    </tr>
    <tr>
      <th scope="row">14</th>
      <td>Infrastructure and Amenities Charges</td>
      <td><?= $ia ?></td>
    </tr>
    <tr>
      <th scope="row">15</th>
      <td>O.S.R Charges</td>
      <td><?= $osr ?></td>
    </tr>
    <tr>
      <th scope="row">16</th>
      <td>Regularisation Charges (Land)</td>
      <td><?= $rc ?></td>
    </tr>
    <tr>
      <th scope="row">17</th>
      <td>Manual Workers General Welfare Fund</td>
      <td><?= $mwgwf ?></td>
    </tr>
    <tr>
      <th scope="row">18</th>
      <td>Vacant Land Tax</td>
      <td><?= $vlt ?></td>
    </tr>
    <tr>
      <th scope="row">19</th>
      <td>MIDC for CMWSSB Charges</td>
      <td><?= $midc ?></td>
    </tr>
    
  </tbody>
</table>
</div>

    
</body>
</html>