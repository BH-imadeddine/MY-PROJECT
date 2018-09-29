  <script type="text/javascript"
          src="https://www.google.com/jsapi?autoload={
            'modules':[{
              'name':'visualization',
              'version':'1',
              'packages':['corechart']
            }]
          }">
  </script>

    <script type="text/javascript">
      google.setOnLoadCallback(drawChart);
 <?php $res=$db->query('select  year(datedebut_assur) as annee,sum(montant_ass) as somme from assurance group by  year(datedebut_assur) order by  year(datedebut_assur) asc;
    




') or die(print_r($db->errorInfo()));?>

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['annee', 'Assurance'],
           <?php  $results=array();
 while ($row = $res->fetch()){ ?>
   
   ['<?php echo $row['annee'] ?>',<?php echo $row['somme'] ?>],
<?php }?>
         
           
        ]);
   
        var options = {
          title: 'Evolution Annuel assurance',
            colors :['green'],
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart_cab5'));

        chart.draw(data, options);
      }
    </script>
    
    
     