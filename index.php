<!DOCTYPE html>
<html lang="cs" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>oof</title>
  </head>
  <body>
    <?php

//-------------------------------------------------------
   //první PC
      $computer[0]['CPU']='Intel Core I5';
      $computer[0]['HDD']='SeaGate 5TB';
      $computer[0]['RAM']='HyperX 16GB';
      $computer[0]['MB']='MSI Z370';
      $computer[0]['Case']='iTek ORIGIN';
      $computer[0]['GPU']='Nvidia GEforce 1080Ti';
      $computer[0]['DISPLAY']='Acer Nitro VG240';
      $computer[0]['KB']='C-TECH Arcus';
      $computer[0]['MOUSE']='CONNECT IT DOODLE Mouse';
   //druhý PC
      $computer[1]['CPU']='Intel Core i9';
      $computer[1]['HDD']='Dell 73GB';
      $computer[1]['RAM']='G.Skill 16GB';
      $computer[1]['MB']='ASUS EX-B250';
      $computer[1]['Case']='Evolveo T3';
      $computer[1]['GPU']='Nvidia GeForce RTX 2070';
      $computer[1]['DISPLAY']='Samsung S24F350';
      $computer[1]['KB']='Yenkee YKB';
      $computer[1]['MOUSE']='Mad Catz R.A.T. PRO S+';
   //třetí PC
      $computer[2]['CPU']='Intel Core i7';
      $computer[2]['HDD']='Kingston 2TB';
      $computer[2]['RAM']='G.Skill 16GB';
      $computer[2]['MB']='ASUS EX-B250';
      $computer[2]['Case']='Evolveo T3';
      $computer[2]['GPU']='Nvidia GeForce 1080TI';
      $computer[2]['DISPLAY']='Samsung S24F350';
      $computer[2]['KB']='Steel Series Gaming Top';
      $computer[2]['MOUSE']='Mad Catz R.A.T. PRO S+';
//-------------------------------------------------------
//první zaměstnanec
      $employees[0]['fn']='Matěj';
      $employees[0]['ln']='Knefil';
      $employees[0]['dob']='31.1.2002';
      $employees[0]['mail']='matej.kneifl@seznam.cz ';
      $employees[0]['phone']='720 821 117';
      $employees[0]['position']='IT mechanic';
      $employees[0]['city']='Kolín';
      $employees[0]['gen']='Male';
      $employees[0]['PC']=$computer[1];
//druhý zaměstnanec
      $employees[1]['fn']='Jiří';
      $employees[1]['ln']='Vlček';
      $employees[1]['dob']='16.11.2000';
      $employees[1]['mail']='jiri.vlcek@gmail.com';
      $employees[1]['phone']='771 885 623';
      $employees[1]['position']='Manager';
      $employees[1]['city']='Prague';
      $employees[1]['gen']='Male';
      $employees[1]['PC']=$computer[0];
//třetí zaměstnanec
      $employees[2]['fn']='Zuzka';
      $employees[2]['ln']='Nováková';
      $employees[2]['dob']='8.11.2001';
      $employees[2]['mail']='zuzka.novakova@seznam.cz';
      $employees[2]['phone']='703 201 480';
      $employees[2]['position']='Secretary';
      $employees[2]['city']='Pardubice';
      $employees[2]['gen']='Female';
      $employees[2]['PC']=$computer[2];
  //-----------------------------------------------
      for ($i=0; $i < 3; $i++) {
        echo $employees[$i]['fn'];
        echo "<br />";
        echo $employees[$i]['ln'];
        echo "<br />";
        echo $employees[$i]['dob'];
        echo "<br />";
        echo $employees[$i]['mail'];
        echo "<br />";
        echo $employees[$i]['phone'];
        echo "<br />";
        echo $employees[$i]['position'];
        echo "<br />";
        echo $employees[$i]['city'];
        echo "<br />";
        echo $employees[$i]['gen'];
        echo "<br />";
        echo $employees[$i]['PC'];
        echo "<br />";
      }
     ?>
  </body>
</html>
