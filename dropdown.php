<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <select name="" id="">
        <option value="">Select Country</option>
        <?php
        $country=['India','Pakistan','kajakistan','ajarbaijan','Afganistan','Indonesia','china','Ucrean','Izraile','Kubait','oman'];
        // for($i=0;$i<=10;$i++){
        //     echo "<option value=''>$country[$i]</option>";
        // }
        foreach($country as $val){
        ?>
            <!-- <option value=''><?php //echo " $val" ?></option>; -->
            <option value=''> <?= $val ?> </option>;
        <?php
        }
        ?>
    </select>
</body>
</html>