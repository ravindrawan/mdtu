  $trname=$rows["atp_trname"];
  $fileno=$rows["atp_fileno"];
  $subno=$rows["atp_subjctno"];
  $purpose=$rows["atp_purpose"];
  $content=$rows["atp_content"];
  $targetgroup=$rows["atp_targetgroup"];
  $noofdays=$rows["atp_noofdays"];
  $noofparti=$rows["atp_noofparticipants"];
  $location=$rows["atp_location"];
  $day1=$rows["atp_day1"];
  $day2=$rows["atp_day2"];
  $day3=$rows["atp_day3"];
  $day4=$rows["atp_day4"];
  $day5=$rows["atp_day5"];
  $day6=$rows["atp_day6"];
  $day7=$rows["atp_day7"];
  $day8=$rows["atp_day8"];
  $day9=$rows["atp_day9"];
  $day10=$rows["atp_day10"];

  $fundsource=$rows["atp_fundsource"];
  $respersons=$rows["atp_resourcep1"];
  if($rows["atp_resourcep2"]!=""){$respersons=$respersons.", ".$rows["atp_resourcep2"]; }
  if($rows["atp_resourcep3"]!=""){$respersons=$respersons.", ".$rows["atp_resourcep3"]; }
  if($rows["atp_resourcep4"]!=""){$respersons=$respersons.", ".$rows["atp_resourcep4"]; }
  if($rows["atp_resourcep5"]!=""){$respersons=$respersons.", ".$rows["atp_resourcep5"]; }
  if($rows["atp_resourcep6"]!=""){$respersons=$respersons.", ".$rows["atp_resourcep6"]; }
  if($rows["atp_resourcep7"]!=""){$respersons=$respersons.", ".$rows["atp_resourcep7"]; }
  if($rows["atp_resourcep8"]!=""){$respersons=$respersons.", ".$rows["atp_resourcep8"]; }
  if($rows["atp_resourcep9"]!=""){$respersons=$respersons.", ".$rows["atp_resourcep9"]; }
  if($rows["atp_resourcep10"]!=""){$respersons=$respersons.", ".$rows["atp_resourcep10"]; }
  
  $cashoffname=$rows["atp_cashofficername"];
  $cashoffdesig=$rows["atp_cashofficerdesig"];
  $cashoffdetails=$rows["atp_cashofficerotherdetails"];
  
  $supstaff1=$rows["atp_supportstaff1"];
  $supstaff2=$rows["atp_supportstaff2"];
  $supstaff3=$rows["atp_supportstaff3"];
  $supstaff4=$rows["atp_supportstaff4"];
  $supstaff5=$rows["atp_supportstaff5"];
  $supstaff6=$rows["atp_supportstaff6"];

  $trtype=$rows["atp_trtype"];
  $actualparticipant="";
  $atpestimate=$esti;
  $actualexpenditure="";
  $comnt="";

