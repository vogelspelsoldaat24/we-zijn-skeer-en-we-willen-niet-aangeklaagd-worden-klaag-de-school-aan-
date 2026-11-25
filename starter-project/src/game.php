<?php
/**
 * Monster Battle Academy - student starter
 * Sprint 1: ALLEEN procedurele PHP (arrays + functies).
 * Sprint 2: jullie zetten deze bestaande game om naar OOP.
 * Sprint 3: voeg inheritance en verschillende monstertypes toe.
 */

function startGame(): void
{
    $_SESSION['game'] = [
        'player' => [
            'name' => 'Charmander',
            'pokemon_id' => 4,
            'hp' => 100,
            'max_hp' => 100,
            'attack' => 15
        ],
        'reserve' => [
            'name' => 'Bulbasaur',
            'pokemon_id' => 1,
            'hp' => 100,
            'max_hp' => 100,
            'attack' => 12
        ],
        'opponent' => [
            'name' => 'Wild monster',
            'pokemon_id' => 25,
            'hp' => 100,
            'max_hp' => 100,
            'attack' => 12
        ],
        'message' => 'Een wild monster verschijnt!'
    ];
}


function handleAction(array $formData): void
{
    $action = $formData['action'] ?? '';
    $game = $_SESSION['game'];

    if ($action === 'reset') {
        resetGame();
        return;
    }

    if ($action === 'switch') {
        switchMonster();
        return;
    }

    if ($action === 'attack') {

        // Controleer of de tegenstander nog aan de beurt is.
        if (!empty($game['opponent_turn_pending'])) {
            return;
        }

        if (isDefeated($game['opponent']) || isDefeated($game['player'])) {
            return;
        }

        // Jouw Pokémon valt aan.
        $damage = calculateDamage($game['player'], $game['opponent']);

        $game['opponent']['hp'] = max(
            0,
            $game['opponent']['hp'] - $damage
        );

        $game['message'] = $game['player']['name']
            . ' doet ' . $damage . ' damage!';

        // Tegenstander mag terug aanvallen.
        if (!isDefeated($game['opponent'])) {
            $game['opponent_turn_pending'] = true;
        }

        $_SESSION['game'] = $game;
        return;
    }

    if ($action === 'opponent_attack') {

        if (empty($game['opponent_turn_pending'])) {
            return;
        }

        $game['opponent_turn_pending'] = false;

        if (!isDefeated($game['opponent']) && !isDefeated($game['player'])) {

            // Wilde Pokémon valt terug aan.
            $damage = calculateDamage($game['opponent'], $game['player']);

            $game['player']['hp'] = max(
                0,
                $game['player']['hp'] - $damage
            );

            if (isDefeated($game['player'])) {
                $game['message'] = $game['opponent']['name']
                    . ' heeft jouw Pokémon verslagen!';
            } else {
                $game['message'] = $game['opponent']['name']
                    . ' doet ' . $damage . ' damage terug!';
            }
        }

        $_SESSION['game'] = $game;
        return;
    }
}


function calculateDamage(array $attacker, array $defender): int
{
    return rand(15, 75);
}

function isDefeated(array $monster): bool
{
    return $monster['hp'] <= 0;
}

function resetGame(): void
{
    startGame();
}

function setBattleMessage(string $message): void
{
    $_SESSION['game']['message'] = $message;
}

function switchMonster(): void
{
    $temp = $_SESSION['game']['player'];

    $_SESSION['game']['player'] = $_SESSION['game']['reserve'];

    $_SESSION['game']['reserve'] = $temp;

    setBattleMessage(
        'Je bent gewisseld naar ' .
        $_SESSION['game']['player']['name'] . '!'
    );
}