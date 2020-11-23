<?php
  include_once('./Menu.php');
  include_once('./PizzaBaseCremeFraiche.php');
  include_once('./PizzaBaseTomate.php');
  include_once('./Restaurant.php');
  include_once('./Client.php');

  // instantiation de mes objets
  $reine = new PizzaBaseTomate('Reine', array('fromage', 'jambon', 'champignon'), 10);
  $megaChampi = new PizzaBaseTomate('MegaChampi', array('fromage', 'jambon', 'champignon', 'champignon', 'champignon'), 10);
  $tartiflette = new PizzaBaseCremeFraiche('Tartiflette', array('Reblochon', 'Lard fumé'), 12);

  $menu = new Menu(array($reine, $tartiflette, $megaChampi));

  $restaurant = new Restaurant('Super restaurant !!!!', $menu);
  $client = new Client('Dupont', 'Jean');

  $client->allerAuRestaurant($restaurant);