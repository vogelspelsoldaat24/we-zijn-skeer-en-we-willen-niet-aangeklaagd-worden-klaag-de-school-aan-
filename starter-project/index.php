<?php
// STARTPROJECT — Sprint 1: procedureel, dus geen classes. Vanaf Sprint 2 refactoren naar OOP.
session_start();
require_once __DIR__ . '/src/game.php';

if (!isset($_SESSION['game'])) {
    startGame();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    handleAction($_POST);
}

$game = $_SESSION['game'];
$player = $game['player'];
$opponent = $game['opponent'];
?>
<!doctype html>
<html lang="nl">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Monster Battle Academy</title>
<link rel="stylesheet" href="public/style.css">
</head>
<body>
<main class="game-shell">
  <header class="game-header"><div><span class="eyebrow">Monster Battle Academy</span><h1>Battle Arena</h1><p>Bouw deze game zelf verder met PHP!</p></div><div class="round-label">TRAINER BATTLE</div></header>
  <div class="arena">
    <section class="fighter opponent" aria-label="Tegenstander">
      <div class="health-card"><strong><?= htmlspecialchars((string)$opponent['name'], ENT_QUOTES, 'UTF-8') ?></strong><div class="health-track"><div class="health-fill" style="width:<?= max(0,min(100,(int)($opponent['hp'] / max(1,$opponent['max_hp']) * 100))) ?>%"></div></div><small><?= (int)$opponent['hp'] ?> / <?= (int)$opponent['max_hp'] ?> HP</small></div>
      <div class="pokemon-sprites">
        <img class="monster-image" src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/<?= isset($opponent['pokemon_id']) ? $opponent['pokemon_id'] : 25 ?>.png" alt="<?= htmlspecialchars((string)$opponent['name'], ENT_QUOTES, 'UTF-8') ?>">
      </div>
    </section>
    <section class="fighter player" aria-label="Jouw monster">
      <div class="pokemon-sprites">
        <img class="monster-image" src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/back/<?= isset($player['pokemon_id']) ? $player['pokemon_id'] : 4 ?>.png" alt="<?= htmlspecialchars((string)$player['name'], ENT_QUOTES, 'UTF-8') ?>">
      </div>
      <div class="health-card"><strong><?= htmlspecialchars((string)$player['name'], ENT_QUOTES, 'UTF-8') ?></strong><div class="health-track"><div class="health-fill" style="width:<?= max(0,min(100,(int)($player['hp'] / max(1,$player['max_hp']) * 100))) ?>%"></div></div><small><?= (int)$player['hp'] ?> / <?= (int)$player['max_hp'] ?> HP</small></div>
    </section>
  </div>
  <section class="controls"><div class="battle-log" aria-live="polite"><strong>BATTLE LOG</strong><p><?= htmlspecialchars((string)$game['message'], ENT_QUOTES, 'UTF-8') ?></p></div>
  <form class="actions" method="post"><button type="submit" name="action" value="attack" class="primary">⚡ Aanvallen</button><button type="submit" name="action" value="switch">↔ Wisselen</button><button type="submit" name="action" value="reset">↻ Opnieuw</button></form></section>
  <p class="hint">De knoppen zijn zichtbaar, maar de spelregels werken nog niet. Die programmeer je zelf!</p>
</main>
</body>
</html>
