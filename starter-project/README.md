# Monster Battle — PHP startproject

De startgame toont een battle-interface met lokale monsterillustraties, HP-balken en knoppen, maar **het vechtsysteem werkt nog niet**. Dat programmeren jullie zelf.

## Starten
```bash
php -S localhost:8000
```
Open http://localhost:8000 vanuit de map `starter-project`.

## Leerroute
- **Sprint 1 (18 + 25 november 2026):** houd alles procedureel. Bouw aanval, tegenaanval, beurtverloop, winnaar en reset met arrays en functies. Geen classes of objects.
- **Sprint 2 (2 + 9 december 2026):** refactor de bestaande code naar een eenvoudige `Monster`-class met constructor, properties en methods. De game moet speelbaar blijven.
- **Sprint 3 (16 december 2026 + 6 januari 2027):** breid de game uit met `FireMonster`, `WaterMonster`, `GrassMonster`, inheritance en overriding. Rond af voor de eindpresentaties op 13 januari.

## Bestanden
- `index.php`: presentatie en HTML-knoppen.
- `src/game.php`: procedurele functies met TODO's.
- `public/style.css`: styling van de battle-interface.
- `public/assets/`: originele placeholder-SVG's; noteer externe assets met bron/licentie.

Laat functies zoveel mogelijk zelf uitwerken. Maak niet te snel extra classes, gebruik geen database of framework.
