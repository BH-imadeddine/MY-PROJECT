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
 <?php $res=$db->query('select  year(dateP) as annee,sum(montant_pan) as somme from panne group by  year(dateP) order by  year(dateP) asc;
    




') or die(print_r($db->errorInfo()));?>

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['annee', 'Panne'],
           <?php  $results=array();
 while ($row = $res->fetch()){ ?>
   
   ['<?php echo $row['annee'] ?>',<?php echo $row['somme'] ?>],
<?php }?>
         
           
        ]);
   
        var options = {
          title: 'Evolution Annuel du Panne',
             colors :['red'],
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart_cab3'));

        chart.draw(data, options);
      }
    </script>
    
    
     <script type="text/javascript">
      google.setOnLoadCallback(drawChart);
 <?php $res=$db->query('select month(dateP) as annee,sum(montant_pan) as somme from panne where year(curdate())=year(dateP) group by month(dateP) order by month(dateP) asc
    




') or die(print_r($db->errorInfo()));?>

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['annee', 'Panne'],
           <?php  $results=array();
 while ($row = $res->fetch()){ ?>
   
   ['<?php echo $row['annee'] ?>',<?php echo $row['somme'] ?>],
<?php }?>
         
           
        ]);
   
        var options = {
          title: 'Evolution mensuel  Panne',
        colors :['black'],
          curveType: 'function',
          legend: { position: 'bottom' ,backgroundColor :'red' ,textStyle: {color: 'blue', fontSize: 16} }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart_cab4'));

        chart.draw(data, options);
      }
    </script>
             
