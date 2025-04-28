## Technical
- cheat system for qa (disable in prod) to replay parts of the game (set position, weapon, level, active quests, ...)
- metrics (weapons (never) used, to easy / hard opponents, quests started/finished/failed, ...)
- migration of new versions of quests etc for existing savegames: Migrations during loading the savegame with a logic in direction of doctrine migrations
- cdn for assets, audiofiles, ...
- mongodb database for quests, dialogues, ... (load/update them on deploy from the json files), savegames, ...
- symfony translations for (future) multi language support
- support touch devices (landscape screen only) with a small hald transparent overlay on the bottom with a joystick left (like the arrow keys on the keyboard) and some buttons on the left, using swiping on the screen (alternative to the mouse)

## Story:
- try to keep the story interesting over the time
- it needs peaks, but the player should not get bored over the time after some time and just run around the island to finish the quests.
- perhaps combine beach robbers and bandits in on fraction or just have some beach robers all over the island and not only in driftwood houses on the beach (call them Beach Wolves ?)
- try to keep the ways the player has to go interesting by meeting different people (e.g. bandits/beach robbers, Jorre with his ox-drawn carriage, ...), getting small quests, ... to keep it interesting over the time and not just respawn some enemies.

## Combat & progression system

The player relevant attributes:
- xp
- hp
- strength (can be trained, bigger weapons need more strength)
- mana (for magic)

- xp
  - Weak enemies (like rats): 5-10 XP
  - Standard enemies (like wolves): 15-25 XP
  - Tough enemies (like bears): 50-100 XP
  - Boss creatures: 200-500 XP
  - Quest completion: 50-300 XP (based on difficulty)
- hp
  - player starting with: 100HP, increasing with every strength level by 10
  - enemies
    - Weak enemies: 30-50 HP
    - Standard enemies: 80-150 HP
    - Tough enemies: 200-500 HP
    - Bosses: 800-1500 HP
- damage
  - player starting with: 10-15 (based on the weapon) + strength/10
  - Weak enemies: 5-10 damage per hit
  - Standard enemies: 15-25 damage per hit
  - Tough enemies: 30-50 damage per hit
- mana
  - player starting with: 20 points, can be trained with +5 per magical aptitude level

## Enemies

- increase the difficulty of the spawnd animals (Example: Wolf (lvl 1-5) → Timber Wolf (lvl 6-12) → Dire Wolf (lvl 15-20) → Alpha Wolf (boss))
