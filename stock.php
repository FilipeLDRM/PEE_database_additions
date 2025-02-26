<?php
/*
Template Name: stockinfodisplay
*/


/*
echo"<p1 class='text-left' style='font-size:2vw;'>";
echo "Stock";
echo"</p1>";
echo "<br>";
*/
global $wpdb;
$main_query = $wpdb->get_results( "SELECT med_id, wp_users_id ,nome, dosagem, qtd FROM gstock_primary");
//var_dump($main_query);
/*
foreach($main_query as $main_query)
{
    echo 'Medicamento ' . $main_query -> med_id . ' ';
    echo 'Nome: ' . $main_query -> nome . ' ';
    echo 'Dosagem: ' . $main_query -> dosagem . ' ';
    echo 'Quantidade: ' . $main_query -> qtd . ' ';

}
  
  echo"
  <html>
    <head>
        <style>
            h1 {
                color:Black;
            }
  div.scroll 
  {
    margin:10px, 10px;
    padding:4px;
    background-color: white;
    width: 500px;
    height: 110px;
    overflow-x: hidden;
    overflow-y: auto;
    text-align:justify;
  }
             ";
             */
            echo"
            <html>
              <head>
                  <style>
                      h1 {
                          color:Black;
                      }
            div.scroll 
            {
              margin:5px, 5px;
              padding:4px;
              background-color: white;
              width: 500px;
              height: 100%;
              overflow-x: auto;
              overflow-y: auto;
              text-align:justify;
            }
                       
           </style>
            </head>
            <body>
                <center>
                <h1 style='font-size:2vw;'> Stock</h1>";
                echo"<div class='scroll'>  ";
foreach($main_query as $main_query)
{
  //echo"<ol>";
  /*
  echo "<div>Medicamento" . $main_query -> med_id . "</div>";
  echo "<div>Nome: " . $main_query -> nome . "</div>";
  echo "<div>Dosagem: " . $main_query -> dosagem . "</div>";
  echo "<div>Quantidade: " . $main_query -> qtd . "</div>";
  //echo"</ol>";
  */
  echo "<br>";
      echo 'Medicamento ' . $main_query -> med_id . ' ';
      echo "<br>";
      echo 'Nome: ' . $main_query -> nome . ' ';
      echo "<br>";
      echo 'Dosagem: ' . $main_query -> dosagem . ' ';
      echo "<br>";
      echo 'Quantidade: ' . $main_query -> qtd . ' ';
      echo "<br>";
    
}
echo"
</div>
</center>
</body>
</html>  ";
?>