<?php
// a string of county data
$county_data = "1. Mombasa. – Abdulswamad Nassir – ODM,
2. Kwale. – Fatuma Achani – UDA,
3. Kilifi. – Gideon Mung’aro – ODM,
4. Tana River. – Dhadho Godhana – ODM,
5. Lamu. – Issa Abdallah Timamy – ANC,
6. Taita-Taveta. – Andrew Mwadime – Independent,
7. Garissa. – Nathif Jama – ODM,
8. Wajir. – Ahmed Abdullahi – ODM,
9. Mandera. – Mohamed Adan Khalif - UDM,
10. Marsabit – Mohamud Ali – ODM,
11. Isiolo – Abdi Hassan Guyo – Jubilee,
12. Meru – Kawira Mwangaza – Independent,
13. Tharaka Nithi – Muthomi Njuki – UDA,
14. Embu – Cecily Mbarire – UDA,
15. Kitui – Julius Malombe – Wiper,
16. Machakos – Wavinya Ndeti – Wiper,
17. Makueni – Mutula Kilonzo – Wiper.,
18. Nyandarua – Moses Kiarie – UDA,
19. Nyeri – Mutahi Kahiga – UDA,
20. Kirinyaga. – Ann Waiguru – UDA,
21. Murang’a – Irungu Kang’ata – UDA,
22. Kiambu. – Kimani Wamatangi – Jubilee,
23. Turkana. – Jeremiah Lomurkai – ODM,
24. West Pokot. – Simon Kachapin. – UDA,
25. Samburu. – Jonathan Leleliit – UDA,
26. Trans-Nzoia. – George Natembeya – DAP-K,
27. Uasin gishu. – Jonathan Bii – UDA,
28. Elgeyo Marakwet. – Wisley Rotich – UDA,
29. Nandi. – Stephen Sang – UDA,
30. Baringo – Benjamin Cheboi. – UDA,
31. Laikipia – Joshua Irungu – UDA,
32. Nakuru. – Susan Kihika – UDA,
33. Narok – Patrick Ole Ntutu – UDA,
34. Kajiado. – Joseph Ole Lenku – ODM,
35. Kericho. – Dr. Erick Mutai – UDA,
36. Bomet. – Hillary Barchok – UDA,
37. Kakamega. – Fernandes Barasa – ODM,
38. Vihiga. – Wilber Ottichilo – ODM,
39. Bungoma. – Ken Lusaka – Ford Kenya,
40. Busia. – Paul Otuoma – ODM,
41. Siaya. – James Orengo. – ODM,
42. Kisumu. – Anyang’ Nyong’o. – ODM,
43. Homabay. – Gladys Wanga – ODM,
44. Migori. – Ochillo Ayacko – ODM,
45. Kisii. – Simba Arati – ODM,
46. Nyamira. – Amos Nyaribo - UPA,
47. Nairobi. – Johnson Sakaja – UDA";


// You should NOT modify anything above this line

// Your code starts here

print $county_data;

/*
//splitting this data (splitting strings in php)

$small_string = "Ian Hubert";
$small_array = explode(' ', $small_string);

//print out small array // for prititng complex variables you use var_dump

print "<br/>";
print "<p>this is using var_dump</p>";
var_dump($small_array);

print "<br/>";
print_r($small_array);
*/
$county_array = explode(",", $county_data);

//print "<h1>the array</h1>";
//var_dump($county_array);
//print "<h1>array contents</h1>";
//echo $county_array[0]. '<br/>';
//echo $county_array[20]. '<br/>';
//echo $county_array[40]. '<br/>';
//echo $county_array[20]. '<br/>';

//print "<h1>second part</h1>";
//print_r (explode ("–", $county_array[0]) ) ; echo "<br/>";
//print_r (explode ("–", $county_array[20]) ) ; echo "<br/>";
//print_r (explode ("–", $county_array[40]) ) ; echo "<br/>";
//print_r (explode ("–", $county_array[46]) ) ; echo "<br/>";
echo '<table border=1 cellspacing=5 cellpadding=5>';
echo '<thead>';
echo '<tr>';
echo '<th>#</th> <th>County</th>';
echo '<th>Governor</th> <th>Party</th>';
echo '</tr>';
echo '</thead>';
$party_count = array();
foreach ($county_array as $key => $row):
  //echo "<tr>";
  //echo "<br/>ROW : ".$row;
  $cells = explode('–', $row);
  foreach ($cells as $key => $cell):
    if($key == 0){
      //1.Mombasa
      //2.Kwale
      $temp = explode('.', $cell);
      echo'<td>'.$temp[0].'</td>';
      echo'<td>'.$temp[1].'</td>';
    }elseif ($key==1) {
      if (strpos($cell, '-')){
        // governorname - Party
        $temp = explode('-', $cell);
        echo'<td>'.$temp[0].'</td>';
        echo'<td>'.$temp[1].'</td>';
        $party_count[] = $temp[1];
      }else {
        echo "<td>$cell</td>";
      }
    }
    else
    {   //adding every political party to the array e.g. UDA, ODM
        $party_count[] = $cell;
        echo "<td>$cell</td>";
    }
  endforeach;
  echo "</tr>";
endforeach;
echo "</table></div>";
json_encode($party_count);
//print_r(array_count_values($party_count));
$nice_array = array_count_values($party_count);
//var_dump(array_keys($nice_array));
?>
<!DOCTYPE html>
<html>
  <head>
  <style type="text/css">
      .chartBox{
        width: 400px;

      }
  </style>
  <title></title>
  </head>
  <body>
  <div class="chartBox">
      <canvas id="myChart"></canvas>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js" integrity="sha256-+8RZJua0aEWg+QVVKg4LEzEEm/8RFez5Tb4JBNiV5xA=" crossorigin="anonymous"></script>
  <script>
  const ctx = document.getElementById('myChart').getContext('2d');
  const myChart = new Chart(ctx, {
      type: 'doughnut',
      data: {
          labels: <?php echo json_encode(array_keys($nice_array)); ?> ,
          datasets: [{
              label: 'Party names',
              data: <?php echo json_encode(array_values($nice_array)); ?>,
              backgroundColor: [
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(255, 206, 86, 0.2)',
                  'rgba(75, 192, 192, 0.2)',
                  'rgba(153, 102, 255, 0.2)',
                  'rgba(255, 159, 64, 0.2)'
              ],
              borderColor: [
                  'rgba(255, 99, 132, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 206, 86, 1)',
                  'rgba(75, 192, 192, 1)',
                  'rgba(153, 102, 255, 1)',
                  'rgba(255, 159, 64, 1)'
              ],
              borderWidth: 1
          }]
      },
      options: {
          scales: {
              y: {
                  beginAtZero: true
              }
          }
      }
  });
  </script>
  </body>
</html>
