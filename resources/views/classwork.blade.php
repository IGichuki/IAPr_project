<?php 
$email="ian.gichuki@gmail.com";
print $email;
print'<br>';
$e=explode("@", $email);
print_r($e);
print end($e);
print'<br>';
print reset($e);
print'<br>';
print'<br>';
$counties ='nairobi, nakuru, mombasa, eldoret';
$cn=[047, 027, 040, 032];
$cp = explode("-",str_replace(", ","-",$counties));


$county_number =array_combine($cn, $cp);
// asort($county_number);
$multi = [
    "Direcotr"=>array(
        "fullname"=>"ian Gichuki",
        "email"=>"ianGichuki@gmail.com",
        "address"=>"embakasi",
        "phone"=>array(
            "home"=>"03296342",
            "work"=>"3925842",
        )
    ),
    "manager"=>array(
        "fullname"=>"cynthia njoki",
        "email"=>"cynthia@gmail.com",
        "address"=>"karen",
        "phone"=>array(
            "home"=>"29428",
            "work"=>"29462",
        )
    ),
];
print_r($multi);

print_r ($county_number);


?>
<form>
    <select>
        <option>-select County-</option>
        <?php 
        foreach($county_number as $cy=>$ct){
       
       print '<option>'.$cy.'</option>';
    }
    ?>
        <option></option>
    </select>
</form>