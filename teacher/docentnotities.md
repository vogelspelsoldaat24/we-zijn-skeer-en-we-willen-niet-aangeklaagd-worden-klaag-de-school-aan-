# Docentnotities — Monster Battle Academy (MBO 4)

## Uitgangspunten
- Drie sprints, elk met twee kernlesmomenten. Het extra moment op 13 januari is buffer, eindreview en eindpresentaties.
- Sprint 1 is 100% procedureel PHP.
- Sprint 2 is refactoring naar een eenvoudige `Monster`-class, niet opnieuw beginnen.
- Sprint 3 gaat over inheritance, overriding en eenvoudige type-effectiviteit, plus afwerken en testen.
- Niet verplicht: interfaces, abstract classes, complexe encapsulation, PDO/database, frameworks.
- Eerste Scrum-ervaring: begin met uitgelegde rollen en korte rituelen; geen story points of velocity nodig.

## Chronologische lesplanning

| Datum | Onderdeel | Scrum-activiteit | Lesaccent |
|---|---|---|---|
| **Wo 18 november 2026** | Sprint 1, les 1 | **Sprint Planning** | Scrum-intro, GitHub-board, issues, procedurele aanval |
| **Wo 25 november 2026** | Sprint 1, les 2 | **Review + tussenpresentatie aan klas** | Speelbare procedurele battle demonstreren |
| **Wo 2 december 2026** | Sprint 2, les 1 | **Retrospective + Sprint Planning** | Terugblik + refactoren van bestaande code naar Monster-objecten |
| **Wo 9 december 2026** | Sprint 2, les 2 | **Review + tussenpresentatie aan klas** | Speelbare OOP-versie laten zien |
| **Wo 16 december 2026** | Sprint 3, les 1 | **Sprint Planning** | Inheritance / overriding / type-effectiviteit |
| **Wo 6 januari 2027** | Sprint 3, les 2 | **Uitgebreide retro + afrondingsplan** | Bugs, afmaak-issues, wie doet wat richting 13 januari |
| **Wo 13 januari 2027** | Buffer/slotles | **Review + eindpresentaties** | Laatste fixes + live demo / repository-oplevering |

## Aanbevolen draaiboek per les

### 18 november: Sprint Planning
1. Leg in 10 minuten Scrum-rollen en -activiteiten uit.
2. Maak/controleer het GitHub Projects-bord.
3. Maak Issues voor aanval, schade, tegenaanval, winnaar, reset; wijs de eerste taken toe.
4. Bepaal Sprint Goal. Laat teams meteen starten.

### 25 november: review met tussenpresentatie
1. Teams demonstreren een live battle (geen slides nodig).
2. Vraag wat werkt, wat nog niet werkt, en welke Issue daarbij hoort.
3. Feedback direct als Issues op het GitHub-bord zetten.

### 2 december: retro + planning
1. Wat ging goed? Wat ging slecht? Kies één procesverbetering.
2. Introductie class vs object.
3. Maak plan om bestaande procedurele PHP te refactoren: Monster-class, constructor, methods, integratie.
4. Maak dit zichtbaar op het GitHub-bord.

### 9 december: review met tussenpresentatie
1. Demo van dezelfde battle, nu met Monster-objecten.
2. Toon class en een object, en laat één method zien.
3. Leg kort vast of gamefunctionaliteit gelijk is gebleven.

### 16 december: planning
1. Leg `extends`, overriding en het eenvoudige type-effect uit.
2. Maak Issues voor FireMonster, WaterMonster, GrassMonster, matchup, keuze/wissel, testen.
3. Kies alleen wat haalbaar is.

### 6 januari: uitgebreide retro + afrondingsplan
1. Terugblik op teamwork, PR's, board en leereffect van OOP.
2. Laat het team de game doorspelen en bugs vastleggen.
3. Maak een afmaaklijst met prioriteit, naam, status en deadline 13 januari.
4. Plan de einddemo: wie demonstreert welke stap en welk OOP-concept?
5. Doe een testpresentatie.

### 13 januari: buffer & eindpresentaties
1. Start met resterende fixes en een laatste controle.
2. Live demo per groep, inclusief types en einde van een battle.
3. Laat ieder teamlid een bijdrage uitleggen (code + GitHub Issue/PR).
4. Controleer README en Project-bord; beoordeel resultaat en proces.

## Definition of Done
- De functionaliteit werkt in de browser.
- Er is een reviewde Pull Request en de code staat op main.
- De gekoppelde GitHub Issue is klaar en het bord klopt.
- De student kan uitleggen wat hij/zij programmeerde.

## Beoordelingstip
Beoordeel zowel het groepsproduct (werkende game, codekwaliteit, GitHub-board) als individuele leeropbrengst (uitleg van eigen code en OOP-bijdragen).
