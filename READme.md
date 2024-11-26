Voici les mêmes exercices avec des noms de fichiers précisés pour chaque exercice. Ces noms aideront à organiser les solutions dans des fichiers distincts.

---

#### **1. Afficher les éléments d’un tableau simple**  
**Fichier :** `exercice1_tableau_simple.php`  
Crée un tableau contenant les noms des fruits suivants : `["Pomme", "Banane", "Cerise", "Orange"]`.  
Affiche chaque élément du tableau sur une ligne différente en utilisant une boucle `foreach`.

---

#### **2. Compter les éléments d’un tableau**  
**Fichier :** `exercice2_compter_elements.php`  
Crée un tableau contenant les nombres suivants : `[4, 7, 12, 25, 9]`.  
Affiche le nombre total d’éléments dans le tableau en utilisant la fonction `count()`.

---

#### **3. Somme des éléments d’un tableau**  
**Fichier :** `exercice3_somme_elements.php`  
Crée un tableau contenant les nombres suivants : `[10, 20, 30, 40, 50]`.  
Calcule la somme de tous les éléments du tableau en utilisant une boucle, puis affiche le résultat.

---

#### **4. Trouver la valeur maximale dans un tableau**  
**Fichier :** `exercice4_valeur_maximale.php`  
Crée un tableau contenant les températures suivantes : `[23, 34, 18, 29, 31, 22]`.  
Parcours le tableau pour trouver et afficher la température la plus élevée.

---

#### **5. Manipuler un tableau associatif**  
**Fichier :** `exercice5_tableau_associatif.php`  
Crée un tableau associatif représentant une personne avec les informations suivantes :  
```php
$personne = [
    "nom" => "Dupont",
    "prenom" => "Jean",
    "age" => 30,
    "ville" => "Paris"
];
```
1. Affiche chaque clé et valeur sous la forme : `Clé : Valeur`.  
2. Modifie la valeur de la clé `"ville"` pour qu’elle devienne `"Lyon"`. Affiche à nouveau le tableau après modification.

---

#### **6. Rechercher une valeur dans un tableau**  
**Fichier :** `exercice6_rechercher_valeur.php`  
Crée un tableau contenant les langages de programmation suivants :  
`["PHP", "JavaScript", "Python", "C++", "Java"]`.  
Vérifie si `"Python"` est présent dans le tableau en utilisant une fonction adaptée. Affiche un message indiquant le résultat.

---

#### **7. Trier un tableau**  
**Fichier :** `exercice7_trier_tableau.php`  
Crée un tableau contenant les nombres suivants : `[15, 3, 9, 20, 7]`.  
Trie le tableau en ordre croissant à l’aide de la fonction `sort()`. Affiche ensuite tous les éléments du tableau trié.

---

#### **8. Tableau multidimensionnel : Liste d’étudiants**  
**Fichier :** `exercice8_tableau_multidimensionnel.php`  
Crée un tableau multidimensionnel pour représenter plusieurs étudiants et leurs informations :  
```php
$etudiants = [
    ["nom" => "Alice", "age" => 21, "note" => 15],
    ["nom" => "Bob", "age" => 22, "note" => 12],
    ["nom" => "Charlie", "age" => 23, "note" => 17]
];
```
1. Affiche les informations de chaque étudiant sous la forme : `Nom : Alice, Âge : 21, Note : 15`.  
2. Parcours le tableau pour trouver l’étudiant ayant obtenu la meilleure note et affiche son nom.

---

#### **9. Fusionner deux tableaux**  
**Fichier :** `exercice9_fusion_tableaux.php`  
Crée deux tableaux :  
```php
$legumes = ["Carotte", "Tomate", "Laitue"];
$fruits = ["Pomme", "Banane", "Cerise"];
```
Fusionne ces deux tableaux en un seul à l’aide de la fonction `array_merge()`. Affiche le tableau fusionné.

---

#### **10. Statistiques sur les notes**  
**Fichier :** `exercice10_statistiques_notes.php`  
Crée un tableau contenant les notes suivantes : `[14, 12, 16, 18, 10, 7, 15]`.  
1. Calcule la moyenne des notes et affiche-la.  
2. Compte et affiche le nombre de notes supérieures ou égales à 10 (admis).  
3. Trie les notes par ordre décroissant et affiche-les.

---