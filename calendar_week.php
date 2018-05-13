<?php
try{
  $bdd = new PDO('mysql:host=localhost;dbname=pjl3', 'root','Delta2811.');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}


?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="calendar.css">
	<title>calendar</title>
	
</head>
<style type="text/css">
	
</style>
<body>
	
  <div class="wrapper">
  <main>
    <div class="toolbar">
      <div class="toggle">
        <div class="toggle__option toggle__option--selected">week</div>
        <div class="toggle__option">month</div>
      </div>
      <div class="current-month">June 2016</div>
      <div class="search-input">
        <input type="text" value="What are you looking for?">
        <i class="fa fa-search"></i>
      </div>
    </div>
    <div class="calendar">
      <div class="calendar__header">
        <div></div>
        <div>mon</div>
        <div>tue</div>
        <div>wed</div>
        <div>thu</div>
        <div>fri</div>
        <div>sat</div>
        <div>sun</div>
      </div>
      <?php
      for($i = 0; $i < 10;$i++)
      {
        $reponse = $bdd->query('SELECT * from planning WHERE DateCours>=\'2018-05-14\'');
        
        if($i < 2)
                $y = "0".(8+$i-2);
          else $y = (10+$i);
        ?>

      <div class="calendar__week">
        <div class="calendar__day day"><?php echo(8+$i);   ?>h</div>
        <div class="calendar__day day">
          <?php
          $reponse = $bdd->query('SELECT * from planning WHERE DateCours>=\'2018-05-14\'');
          while($donnees = $reponse->fetch())
          {
              

              if($donnees['Horaires']==$y.':00:00' && $donnees['DateCours'] == '2018-05-14')
                  {
                    echo $donnees['Cours'];
                  }
            
          }
          ?>
        </div>
        <div class="calendar__day day">
          <?php
           $reponse = $bdd->query('SELECT * from planning WHERE DateCours>=\'2018-05-14\'');
          while($donnees = $reponse->fetch())
          {
              
              if($donnees['Horaires']== $y.':00:00'&& $donnees['DateCours'] == '2018-05-15')
              {
                echo $donnees['Cours'];
                
              }
                  
            
          }
          ?>
        </div>
        <div class="calendar__day day">
          <?php
          $reponse = $bdd->query('SELECT * from planning WHERE DateCours>=\'2018-05-14\'');
          while($donnees = $reponse->fetch())
          {
              
              if($donnees['Horaires']==$y.':00:00' && $donnees['DateCours'] == '2018-05-16')
                  echo $donnees['Cours'];
            
          }
          ?>
        </div>
        <div class="calendar__day day">
          <?php
          $reponse = $bdd->query('SELECT * from planning WHERE DateCours>=\'2018-05-14\'');
          while($donnees = $reponse->fetch())
          {
              
              if($donnees['Horaires']==$y.':00:00' && $donnees['DateCours'] == '2018-05-17')
                  echo $donnees['Cours'];
            
          }
          ?>
        </div>
        <div class="calendar__day day">
          <?php
          $reponse = $bdd->query('SELECT * from planning WHERE DateCours>=\'2018-05-14\'');
          while($donnees = $reponse->fetch())
          {
              
              if($donnees['Horaires']==$y.':00:00' && $donnees['DateCours'] == '2018-05-18')
                  echo $donnees['Cours'];
            
          }
          ?>
        </div>
        <div class="calendar__day day">
          <?php
          $reponse = $bdd->query('SELECT * from planning WHERE DateCours>=\'2018-05-14\'');
          while($donnees = $reponse->fetch())
          {
              
              if($donnees['Horaires']==$y.':00:00' && $donnees['DateCours'] == '2018-05-19')
                  echo $donnees['Cours'];
            
          }
          ?>
        </div>

        <div class="calendar__day day">
          <?php
          $reponse = $bdd->query('SELECT * from planning WHERE DateCours>=\'2018-05-14\'');
          while($donnees = $reponse->fetch())
          {
              
              if($donnees['Horaires']==$y.':00:00' && $donnees['DateCours'] == '2018-05-20')
                  echo $donnees['Cours'];
            
          }
          ?>
        </div>

      </div>

        <?php
      }


      ?>
      
     
    </div>
  </main>
  <sidebar>
    <div class="logo">logo</div>
    <div class="avatar">
      <div class="avatar__img">
        <img src="https://picsum.photos/70" alt="avatar">
      </div>
      <div class="avatar__name">John Smith</div>
    </div>
    <nav class="menu">
      <a class="menu__item" href="#">
        <i class="menu__icon fa fa-home"></i>
        <span class="menu__text">overview</span>
      </a>
      <a class="menu__item" href="#">
        <i class="menu__icon fa fa-envelope"></i>
        <span class="menu__text">messages</span>
      </a>
      <a class="menu__item" href="#">
        <i class="menu__icon fa fa-list"></i>
        <span class="menu__text">workout</span>
      </a>
      <a class="menu__item menu__item--active" href="#">
        <i class="menu__icon fa fa-calendar"></i>
        <span class="menu__text">calendar</span>
      </a>
      <a class="menu__item" href="#">
        <i class="menu__icon fa fa-bar-chart"></i>
        <span class="menu__text">goals</span>
      </a>
      <a class="menu__item" href="#">
        <i class="menu__icon fa fa-trophy"></i>
        <span class="menu__text">achivements</span>
      </a>
      <a class="menu__item" href="#">
        <i class="menu__icon fa fa-sliders"></i>
        <span class="menu__text">measurements</span>
      </a>
    </nav>
    <div class="copyright">copyright &copy; 2018</div>
  </sidebar>
</div>
</body>
</html>


