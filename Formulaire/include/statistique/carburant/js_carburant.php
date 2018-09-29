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
 <?php $res=$db->query('select  year(dateC) as annee,sum(montant_cab) as somme from carburant group by  year(dateC) order by  year(dateC) asc;
    




') or die(print_r($db->errorInfo()));?>

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['annee', 'carburant'],
           <?php  $results=array();
 while ($row = $res->fetch()){ ?>
   
   ['<?php echo $row['annee'] ?>',<?php echo $row['somme'] ?>],
<?php }?>
         
           
        ]);
   
        var options = {
          title: 'Evolution Annuel du carburant',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart_cab1'));

        chart.draw(data, options);
      }
    </script>
    
    
     <script type="text/javascript">
      google.setOnLoadCallback(drawChart);
 <?php $res=$db->query('select month(dateC) as annee,sum(montant_cab) as somme from carburant where year(curdate())=year(dateC) group by month(dateC) order by month(dateC) asc
    




') or die(print_r($db->errorInfo()));?>

    function drawChart() {
        var dataa = google.visualization.arrayToDataTable([
          ['annee', 'carburant'],
           <?php  $results=array();
 while ($row = $res->fetch()){ ?>
   
   ['<?php echo $row['annee'] ?>',<?php echo $row['somme'] ?>],
<?php }?>
         
           
        ]);
   
        var optionss = {
          title: 'Evolution mensuel  du carburant',
          colors :['green'],
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('chartcab2'));

        chart.draw(dataa, optionss);
      }
    </script>
             