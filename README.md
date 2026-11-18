# Monster Battle Academy — 3 sprints + bufferles

Dit pakket is aangepast voor MBO 4 en een eerste kennismaking met Scrum.

## Bestanden
- `docs/kickoff.html`
- `docs/sprint-1.html` — 18 en 25 november 2026: procedurele PHP-basisgame
- `docs/sprint-2.html` — 2 en 9 december 2026: dezelfde game omzetten naar OOP. Krijgen jullie later.
- `docs/sprint-3.html` — 16 december 2026 en 6 januari 2027: inheritance + afwerking. Krijgen jullie later.
- 13 januari 2027: bufferles, eindreview en eindpresentaties (beschreven in Sprint 3)
- `starter-project/` — minimaal procedureel PHP-startproject met een visuele battle-interface
- `teacher/docentnotities.md` — chronologische lesplanning voor docent

## Scrum-activiteiten, exact volgens de lesplanning
1. 18 november — Sprint Planning
2. 25 november — Review + tussenpresentatie voor de klas
3. 2 december — Retrospective + Sprint Planning
4. 9 december — Review + tussenpresentatie voor de klas
5. 16 december — Sprint Planning
6. 6 januari — Uitgebreide retrospective + afrondingsplan voor eindoplevering
7. 13 januari — Review + eindpresentaties

## GitHub-inrichting
- Eén teamrepository, met de PHP-code en de vier HTML-opdrachtpagina's in `docs/`.
- Eén GitHub Projects-bord met `Product Backlog`, `Ready`, `In Progress`, `Testing`, `Review`, `Done`.
- Gebruik Issues, Pull Requests en sprintlabels `sprint-1`, `sprint-2`, `sprint-3`.

## Game starten
```bash
cd starter-project
php -S localhost:8000
Of starten met XAMPP of Laragon
```
Open daarna http://localhost:8000.

Het starterproject is expres **nog niet speelbaar**: de game-logica moet worden gebouwd door studenten.
In Sprint 1 is OOP verboden; vanaf Sprint 2 is de omzetting naar objecten de hoofdopdracht.

## Assets
De HTML-opdrachten verwijzen naar publieke Pokémon-sprites (PokeAPI). De startergame gebruikt lokale, eigen placeholder-SVG's. Controleer auteursrecht en schoolbeleid bij externe Pokémon-assets; maak bij publicatie eventueel eigen monsters.
