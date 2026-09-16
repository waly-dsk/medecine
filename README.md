# Plateforme web de la Faculté de Médecine

Projet universitaire réalisé avec Laravel pour concevoir une plateforme web dédiée à une faculté de médecine.

## Objectif

Centraliser sur une même plateforme les informations institutionnelles, les formations, la recherche, les actualités et certains services destinés aux étudiants.

## Fonctionnalités

### Gouvernance

* Mot du Doyen
* Historique
* Administration

### Formation

* Doctorat
* Diplôme d'Études Spécialisées (DES)
* DES 1
* DES 2
* DES 3

### Recherche

* Laboratoires
* Thèses

### Vie estudiantine

* Consultation des résultats
* Consultation du cursus
* Consultation du détail des résultats par année académique

Pour consulter ses résultats, l'étudiant renseigne son matricule, sa date de naissance et l'année académique. Le système vérifie les informations avant de rechercher les notes, la classe et la décision du jury.

Le cursus est reconstitué à partir des inscriptions, des classes et des décisions prises pour chaque année académique.

### Actualités

* Actualités
* Événements

## Organisation

```text
Plateforme web
│
├── Gouvernance
│   ├── Mot du Doyen
│   ├── Historique
│   └── Administration
│
├── Formation
│   ├── Doctorat
│   └── DES
│       ├── DES 1
│       ├── DES 2
│       └── DES 3
│
├── Recherche
│   ├── Laboratoires
│   └── Thèses
│
├── Vie estudiantine
│   ├── Résultats
│   ├── Cursus
│   └── Détails des résultats
│
└── Actualités
    ├── Actualités
    └── Événements
```

## Technologies

* PHP 8.1+
* Laravel 10
* Laravel Sanctum
* MySQL
* Blade
* Vite
* JavaScript

Le projet utilise l'architecture MVC de Laravel et le Query Builder pour interroger les données relationnelles.

## Installation

### Prérequis

* PHP 8.1 ou supérieur
* Composer
* Node.js
* MySQL

### Installation

```bash
git clone https://github.com/waly-dsk/medecine.git
cd medecine

composer install
npm install

cp .env.example .env
php artisan key:generate
```

Configurer ensuite la connexion à la base de données dans `.env`.

Lancer l'application :

```bash
php artisan serve
```

Compiler les assets :

```bash
npm run dev
```

Pour une compilation de production :

```bash
npm run build
```

## Contexte

Ce projet a été réalisé dans le cadre de ma formation en Licence Informatique de Gestion.


## Auteur

**Davo Kpinde Sèwlannou Wilfried**

GitHub : https://github.com/waly-dsk
