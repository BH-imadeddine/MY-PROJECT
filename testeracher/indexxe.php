<?php include '../Formulaire/include/connexion.php'; ?>
<html>
    
  <head>
    <script type="text/javascript"
          src="https://www.google.com/jsapi?autoload={
            'modules':[{
              'name':'visualization',
              'version':'1',
              'packages':['corechart']
            }]
          }"></script>

    <script type="text/javascript">
      google.setOnLoadCallback(drawChart);
 <?php $res=$db->query('select  month(datedebut_assur) as mois,sum(montant_ass) as somme from assurance where  year(datedebut_assur)=year(curdate())  group by month(datedebut_assur) order by month(datedebut_assur) asc;
    




') or die(print_r($db->errorInfo()));?>

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['mois', 'somme'],
           <?php  $results=array();
 while ($row = $res->fetch()){ ?>
   
   ['<?php echo $row['mois'] ?>',<?php echo $row['somme'] ?>],
<?php }?>
         
           
        ]);
   
        var options = {
          title: 'Company Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="curve_chart" style="width: 900px; height: 500px"></div>
    
     
  </body>
</html>