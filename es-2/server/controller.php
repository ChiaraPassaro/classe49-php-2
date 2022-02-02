<?php
include_once __DIR__ . '/db.php';
//tutte le card 
//l'ultima card
if (isset($_GET['quantity']) !== false) {
  $quantity = $_GET['quantity'];
  if ($quantity === 'all') {
    header('Content-Type: application/json');
    echo json_encode([
      'results' => $cards,
      'length' => count($cards)
    ]);
  } elseif ($quantity === 'last') {
    header('Content-Type: application/json');
    echo json_encode([
      'results' => [$cards[count($cards) - 1]],
      'length' => count($cards[count($cards) - 1])
    ]);
  }
}
