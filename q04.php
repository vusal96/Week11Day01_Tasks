<?php 
// Shirket ucun Ishcilerin siyahisi yaradilmalidir, yaradilan butun ishcilerin siyahisi table sheklinde muvafiq melumatlarla ekrana cixmali ve hal hazirki gunde dogum gunu olan ishcinin melumatlari qirmizi rengle yazilmalidir.
class Workers {
    public $name;
    public $surname;
    public $position;
    public $birthDate;
    public function __construct($name , $surname , $position, $year , $month , $day) {
        $this->name = $name;
        $this->surname = $surname;
        $this->position = $position;
        $this->birthDate = date("$year-$month-$day");
    }
    public function date(){
        //$date1 = date_create(date("H:i:s"));
        $date2 = date("Y-m-d");
        $date2 = explode("-", $date2); 
        $date1 = explode("-", $this->birthDate);
        if(($date2[1] == $date1[1]) && ($date2[2] == $date1[2])){
            echo "ad gunun mubarek";
        }
        
    }
}
$isci1 = new Workers("Cavid", "R-zade" , "neytral" , 1995 , 9 , 5);
$isci2 = new Workers("Vusal", "Abbasov" , "valet" , 1994 , 6 , 4);
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<table border="1">
    <tr>
        <td>Ad</td>
        <td>Soyad</td>
        <td>Status</td>
        <td>Dogum tarixi</td>
        <td>Tebrik</td>
    </tr>
    <tr>
        <td><?= $isci1->name; ?></td>
        <td><?= $isci1->surname; ?></td>
        <td><?= $isci1->position; ?></td>
        <td><?= $isci1->birthDate; ?></td>
        <td><?= $isci1->date(); ?></td>
    </tr>
    <tr>
        <td><?= $isci2->name; ?></td>
        <td><?= $isci2->surname; ?></td>
        <td><?= $isci2->position; ?></td>
        <td><?= $isci2->birthDate; ?></td>
        <td><?= $isci2->date(); ?></td>
    </tr>
</table>
</body>
</html>