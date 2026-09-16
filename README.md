# Plateforme web de la Faculté de Médecine

> Application web développée dans le cadre d'un projet universitaire visant à mettre en place une plateforme numérique pour une faculté de médecine.

## Présentation

Ce projet consiste à concevoir et développer une plateforme web regroupant différentes informations et services liés à la vie d'une faculté de médecine.

L'application combine deux dimensions :

- une **dimension institutionnelle**, permettant de présenter l'organisation, les formations, la recherche et les actualités de la faculté ;
- une **dimension estudiantine**, permettant notamment aux étudiants de consulter leur cursus universitaire et leurs résultats académiques.

Le projet m'a permis de travailler sur la conception d'une application web capable de regrouper différents types d'informations et de proposer des parcours adaptés aux différents besoins des utilisateurs.

---

## Objectifs

L'objectif principal est de proposer un point d'accès numérique centralisant les informations et certains services de la faculté.

La plateforme permet notamment de :

- présenter l'organisation et la gouvernance de la faculté ;
- présenter les formations proposées ;
- présenter les activités de recherche ;
- publier des actualités et des événements ;
- permettre aux étudiants de consulter leur cursus ;
- permettre la consultation des résultats académiques ;
- afficher le détail des résultats obtenus pour une année académique donnée.

---

# Organisation fonctionnelle

L'application est organisée autour de plusieurs domaines fonctionnels.

```text
                    PLATEFORME WEB
                          │
        ┌─────────────────┼─────────────────┐
        │                 │                 │
        ▼                 ▼                 ▼
   Gouvernance        Formation         Recherche
        │                 │                 │
        │                 │                 ├── Laboratoires
        │                 │                 └── Thèses
        │                 │
        ├── Mot du Doyen  ├── Doctorat
        ├── Historique    └── DES
        └── Administration
                          │
                          ▼
                  Vie estudiantine
                          │
              ┌───────────┴───────────┐
              ▼                       ▼
           Résultats                Cursus
              │                       │
              ▼                       ▼
       Notes par UE/ECU       Parcours académique
              │
              ▼
        Décision du jury
