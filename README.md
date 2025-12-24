# Jeu du Juste Prix en PHP

Un jeu interactif du "Juste Prix" développé en PHP, parfait pour les débutants qui souhaitent appliquer leurs connaissances PHP acquises.

## 🎯 Objectif pédagogique

Ce projet a été conçu pour permettre à un débutant en PHP de :
- Mettre en pratique tous les concepts fondamentaux du PHP
- Créer une application web interactive et fonctionnelle
- Comprendre la structure d'un projet PHP complet

## 🚀 Fonctionnalités

### Fonctionnalités de base
- **Génération d'un prix mystère** : Un nombre aléatoire est généré au début de chaque partie
- **Formulaire de proposition** : Interface simple pour proposer un prix
- **Indications "plus/moins"** : Le joueur reçoit des indications pour se rapprocher du prix mystère
- **Compteur de tentatives** : Suivi du nombre d'essais
- **Message de victoire** : Notification lorsque le joueur trouve le bon prix

### Fonctionnalités avancées
- **Niveaux de difficulté** : 
  - Facile (0-100)
  - Moyen (0-500)
  - Difficile (0-1000)
- **Sauvegarde des scores** : Les meilleurs scores sont conservés dans des cookies
- **Historique des tentatives** : Affichage de toutes les propositions avec des indications visuelles
- **Classement des scores** : Top 10 des meilleurs scores pour chaque niveau de difficulté

## 📁 Structure du projet

```
TP_PHP/
├── index.php         # Page principale du jeu
├── functions.php     # Toutes les fonctions PHP du jeu
├── style.css         # Styles CSS pour l'interface
└── README.md         # Documentation du projet
```

## 💻 Concepts PHP utilisés

### Variables et types de données
- Variables pour stocker le prix mystère, les tentatives, etc.
- Tableaux pour l'historique et les scores
- Booléens pour vérifier l'état du jeu

### Structures de contrôle
- Conditions `if/else` pour comparer les propositions
- Boucles `foreach` pour afficher l'historique et les scores
- Structures `switch` pour gérer les niveaux de difficulté

### Fonctions
- Fonctions personnalisées pour organiser le code
- Paramètres et valeurs de retour
- Portée des variables

### Tableaux
- Tableaux associatifs pour stocker les données du jeu
- Tableaux multidimensionnels pour l'historique
- Manipulation des tableaux avec `array_slice`, `usort`, etc.

### Formulaires HTML et PHP
- Traitement des données POST
- Validation des entrées utilisateur
- Maintien de l'état du formulaire

### Sessions PHP
- `session_start()` pour démarrer une session
- `$_SESSION` pour stocker les données du jeu
- Persistance des données entre les requêtes

### Cookies
- `setcookie()` pour sauvegarder les scores
- `$_COOKIE` pour récupérer les scores sauvegardés
- Gestion de la durée de vie des cookies

### Fonctions intégrées PHP
- `rand()` pour générer des nombres aléatoires
- `date()` pour formater les dates
- `json_encode()` et `json_decode()` pour stocker les scores
- `count()` pour compter les éléments d'un tableau

## 🎮 Comment jouer

1. **Choisir un niveau de difficulté** : Utilisez le menu déroulant pour sélectionner facile, moyen ou difficile
2. **Proposer un prix** : Entrez un nombre dans le champ de saisie et cliquez sur "Proposer"
3. **Analyser les indications** : 
   - "C'est plus !" si votre proposition est inférieure au prix mystère
   - "C'est moins !" si votre proposition est supérieure au prix mystère
4. **Continuer jusqu'à trouver** : Proposez des prix jusqu'à trouver le juste prix
5. **Consulter vos scores** : Vos meilleurs scores sont sauvegardés automatiquement

## 🔧 Installation et configuration

### Prérequis
- Un serveur web local (XAMPP, WAMP, MAMP, ou serveur PHP intégré)
- PHP 7.0 ou supérieur

### Installation
1. Placez tous les fichiers dans un répertoire accessible par votre serveur web
2. Démarrez votre serveur web local
3. Accédez à `http://localhost/TP_PHP/` dans votre navigateur

### Utilisation avec le serveur PHP intégré
```bash
# Naviguez vers le répertoire du projet
cd /chemin/vers/TP_PHP

# Démarrez le serveur PHP intégré
php -S localhost:8000

# Accédez à http://localhost:8000 dans votre navigateur
```

## 📚 Explication du code

### index.php
- Point d'entrée de l'application
- Structure HTML de l'interface
- Inclusion des fonctions et gestion des sessions
- Affichage conditionnel selon l'état du jeu

### functions.php
- Contient toute la logique métier du jeu
- Fonctions pour initialiser, gérer et terminer une partie
- Gestion des scores et des cookies
- Fonctions utilitaires pour l'affichage

### style.css
- Styles CSS pour une interface attrayante
- Design responsive pour mobile et desktop
- Animations et transitions pour une meilleure expérience utilisateur

## 🎯 Pistes d'amélioration

Pour les débutants qui souhaitent aller plus loin :

1. **Timer** : Ajouter un chronomètre pour chaque partie
2. **Indices supplémentaires** : Donner des indices sur la parité (pair/impair)
3. **Mode multijoueur** : Permettre à plusieurs joueurs de jouer sur le même navigateur
4. **Base de données** : Remplacer les cookies par une base de données MySQL
5. **Thèmes** : Ajouter plusieurs thèmes de couleurs
6. **Animations** : Intégrer des animations JavaScript pour une meilleure expérience

## 📝 Notes pour les débutants

Ce projet est conçu pour être éducatif. Chaque fonction est commentée pour expliquer :
- Ce qu'elle fait
- Comment elle fonctionne
- Pourquoi elle est nécessaire

N'hésitez pas à modifier le code, à expérimenter et à ajouter vos propres fonctionnalités. C'est en pratiquant qu'on apprend le mieux !

## 🐛 Débogage

Si vous rencontrez des problèmes :

1. **Vérifiez les erreurs PHP** : Activez l'affichage des erreurs en début de script :
   ```php
   error_reporting(E_ALL);
   ini_set('display_errors', 1);
   ```

2. **Vérifiez les permissions** : Assurez-vous que le serveur web a les droits d'écriture pour les cookies

3. **Videz le cache** : Rafraîchissez la page avec Ctrl+F5 (ou Cmd+R sur Mac) pour vider le cache

4. **Consultez la console** : Utilisez la console de développement de votre navigateur pour détecter d'éventuelles erreurs JavaScript

---

**Bon jeu et bon apprentissage du PHP !** 🎉

php -S localhost:8000
 http://localhost:8000