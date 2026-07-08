# Comprehension

## 1. Codes et logique compris

### Architecture du projet
- index.php est le point d'entrée de l'application.
- Il redirige les requêtes vers les différentes pages situées dans pages/.

### Connexion à la base de données
- La fonction dbconnect() cree une connexion MySQL avec mysqli_connect().
- La variable static $connect permet de reutiliser la même connexion sans la recréer à chaque appel.

### Fonctions 
- **get_all_lines()**
  - Exécute une requête SQL.
  - Retourne toutes les lignes sous forme d'un tableau associatif.

- **get_one_line()**
  - Exécute une requête SQL.
  - Retourne uniquement la première ligne du resultat.

- **execute_query()**
  - Execute les requetes qui ne retournent pas de données (INSERT, UPDATE, DELETE).

### Gestion des departements
- **get_all_departments()**
  - Affiche tous les départements.
  - Affiche également le manager actuel.
  - Calcule le nombre d'employés présents dans chaque département.

- **get_current_department()**
  - Récupère le département actuel d'un employe.

- **get_departments_except()**
  - Retourne tous les départements sauf celui passé en paramètre.

- **change_department()**
  - Ferme l'ancien département de l'employe.
  - Ajoute ensuite son nouveau département.

- **add_department()**
  - Ajoute un nouveau département.

- **update_department()**
  - Modifie le nom d'un département existant.

- **get_one_department()**
  - Retourne les informations d'un seul département.

### Gestion des managers
- **get_current_manager()**
  - Retourne le manager actuel d'un département.

- **make_manager()**
  - Termine le mandat de l'ancien manager.
  - Affecte le nouveau manager.

- **remove_manager()**
  - Termine le mandat du manager sans le remplacer.

### Gestion des employés
- **add_employee()**
  - Ajoute un nouvel employé.

- **update_employee()**
  - Modifie les informations d'un employé.

- **get_one_employee()**
  - Affiche les informations complètes d'un employé avec son département, son poste et son salaire actuel.

- **get_employees_by_department()**
  - Liste les employés d'un département avec pagination.

- **count_employees_by_department()**
  - Compte le nombre d'employés d'un département.

### Statistiques
- **get_jobs_stats()**
  - Affiche les statistiques par poste.
  - Nombre d'hommes.
  - Nombre de femmes.
  - Nombre total.
  - Salaire moyen.

### Historique
- **get_salary_history()**
  - Retourne l'historique des salaires.

- **get_title_history()**
  - Retourne l'historique des postes.

- **get_longest_title()**
  - Recherche le poste occupé le plus longtemps.

### Recherche
- **search_employees()**
  - Recherche des employés selon plusieurs critères :
    - département ;
    - nom ;
    - âge minimum ;
    - âge maximum.

---

# 2. Codes ou logique que je n'ai pas encore bien compris

- Le fonctionnement détaill des **LEFT JOIN**, **INNER JOIN** et leurs différences.
- La construction dynamique de la clause **WHERE** dans search_employees().
- L'utilisation de ON DUPLICATE KEY UPDATE lors d'un INSERT.
- Pourquoi la date **9999-01-01** est utilisée comme date de fin pour représenter un enregistrement encore actif.
- Le fonctionnement précis **OFFSET**.
- La manière dont plusieurs requêtes SQL permettent de conserver l'historique des départements, des managers et des salaires.
- Les risques d'injection SQL liés à l'utilisation de `sprintf()` et pourquoi les requêtes préparées sont plus securisées.

---

# 3. Fonctions intégrées que je ne connais pas encore très bien

## Fonctions PHP

- `implode()`
- `die()`
- `static`


## Fonctions SQL


- `CURDATE()`
- `IF()`
- `DISTINCT`
- `OFFSET`
- `ON DUPLICATE KEY UPDATE`

## Opérateurs et notions

- `INNER JOIN`
- Pagination

