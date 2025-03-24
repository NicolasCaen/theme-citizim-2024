# Structure du Thème Citizim 2024

Ce document explique de façon synthétique la structure et l'organisation du thème WordPress Citizim 2024.

## Architecture Générale

Le thème est conçu selon une architecture modulaire basée sur les blocs Gutenberg et les modèles de Full Site Editing (FSE). Voici les principaux dossiers et leur rôle :

### Dossiers Principaux

- **`templates/`** : Contient les modèles de page HTML pour différents types de contenu (page, archive, single, etc.)
- **`parts/`** : Contient les parties réutilisables des templates (header, footer, etc.)
- **`patterns/`** : Contient les modèles de blocs personnalisés pour Gutenberg
- **`functions/`** : Contient les fonctions PHP organisées par fonctionnalité
- **`assets/`** : Contient les ressources statiques (JS, CSS, images, polices)
- **`styles/`** : Contient les fichiers de style pour le thème
- **`cpt/`** : Contient les définitions des types de contenu personnalisés

## Fonctionnalités Clés

### Système de Templates

Le thème utilise le système de templates FSE (Full Site Editing) de WordPress :
- Les fichiers dans `templates/` définissent la structure des différentes pages
- Les fichiers dans `parts/` sont des composants réutilisables intégrés dans les templates

### Patterns (Modèles de Blocs)

Le dossier `patterns/` contient des modèles de blocs prédéfinis pour :
- Sections de page (bannières, cartes, grilles, etc.)
- Composants d'interface (en-têtes, pieds de page, etc.)
- Mises en page spécifiques (timeline, équipe, programmes, etc.)

Ces patterns peuvent être insérés facilement dans l'éditeur Gutenberg.

### Styles et Assets

- **`assets/scss/`** : Fichiers SCSS pour les styles
- **`assets/js/`** : Scripts JavaScript, notamment les animations GSAP
- **`assets/fonts/`** : Polices personnalisées
- **`assets/images/`** : Images utilisées dans le thème

### Fonctions PHP

Le fichier `functions.php` charge les différentes fonctionnalités du thème :
- Enregistrement des patterns
- Chargement des styles et scripts
- Intégration GSAP pour les animations
- Autres fonctionnalités personnalisées

Les fonctions sont organisées dans le dossier `functions/` par catégorie.

## Personnalisation et Extension

### Blocs ACF

Le dossier `acf-blocks/` est prévu pour les blocs personnalisés créés avec Advanced Custom Fields.

### Styles Personnalisés

Le thème utilise :
- `style.css` pour les styles principaux
- `editor.css` pour personnaliser l'interface de l'éditeur Gutenberg
- `theme.json` pour configurer les paramètres globaux du thème

## Configuration du Thème avec theme.json

Le fichier `theme.json` est au cœur de la personnalisation du thème et définit les paramètres globaux suivants :

### Paramètres Principaux (settings)

1. **Couleurs** : Définition de la palette de couleurs du thème
   - Base (fond clair) : `#FAF8F2`, `#F7F7F8`, `#FFFFFF`
   - Contraste (texte foncé) : `#313135`, `#312319`, `#27272A`
   - Accent (couleurs d'accentuation) : `#C6AA76`, `#B89257`

2. **Typographie** : Configuration des polices et tailles de texte
   - Polices personnalisées (TT Hoves Pro Trial)
   - Échelle de tailles de texte (xxs à 6xl)
   - Paramètres de fluidité pour l'adaptation aux différents écrans

3. **Espacement** : Définition des espacements standards
   - Marges et paddings prédéfinis
   - Système de grille responsive

4. **Mise en page** : Configuration des largeurs de contenu
   - Taille standard : `960px`
   - Taille large : `1200px`

5. **Ombres** : Styles d'ombres prédéfinis
   - Crisp : `6px 6px 0px 0px var(--wp--preset--color--accent)`
   - Outlined : `0px 4px 40px 0px rgba(0, 0, 0, 0.20)`

## Plugins Must-Use (mu-plugins)

Les plugins Must-Use (mu-plugins) sont des plugins WordPress qui sont automatiquement activés et ne peuvent pas être désactivés par les utilisateurs. Ils sont chargés avant les plugins standards et sont idéaux pour les fonctionnalités essentielles du site.

### citizim_shortcode

Le dossier `citizim_shortcode` dans `mu-plugins` contient un ensemble de shortcodes personnalisés développés spécifiquement pour le site Citizim. Ces shortcodes permettent d'afficher des informations dynamiques liées aux programmes immobiliers et aux terrains.

#### Structure du Plugin

- **`index.php`** : Fichier principal qui enregistre les styles, scripts et inclut les autres fichiers du plugin
- **`assets/`** : Contient les ressources JS et CSS utilisées par les shortcodes
- **`functions/`** : Fonctions utilitaires organisées par domaine (global, program, terrain)
- **`views/`** : Templates HTML pour l'affichage des différents types de cartes
- **`styles.css`** : Styles CSS spécifiques aux shortcodes

#### Shortcodes Disponibles

1. **`[prix_minimum_lots]`** (shortcode-program-min-price.php)
   - Affiche le prix minimum des lots disponibles pour un programme
   - Paramètres :
     - `term` : Slug du terme de taxonomie (optionnel, utilise le slug du post courant si non spécifié)
     - `format` : Formater le prix avec des espaces (true/false)
     - `prefix` : Texte avant le prix (défaut: "À partir de ")
     - `suffix` : Texte après le prix (défaut: " €")
   - Exemple : `[prix_minimum_lots term="residence-les-jardins" format="true" prefix="À partir de " suffix=" €"]`

2. **`[program_properties]`** (shortcode-program-table.php)
   - Affiche un tableau des propriétés/lots disponibles pour un programme spécifique
   - Paramètres :
     - `term` : Slug du terme de taxonomie (utilise le slug du post courant si non spécifié)
   - Exemple : `[program_properties term="residence-les-jardins"]`

3. **`[query_cards]`** (shortcode-query-cards.php)
   - Affiche des cartes pour différents types de contenu (terrains, programmes, etc.)
   - Paramètres principaux :
     - `post_type` : Type de post à afficher (défaut: "up_program_land")
     - `posts_per_page` : Nombre d'éléments à afficher (défaut: 17)
     - `orderby` : Critère de tri (défaut: "date")
     - `order` : Ordre de tri (défaut: "DESC")
     - `taxonomy` et `term` : Filtrer par taxonomie
     - `view` : Template à utiliser pour l'affichage (défaut: "terrain")
     - `theme` : Thème visuel à appliquer
   - Exemple : `[query_cards post_type="up_program_program" posts_per_page="6" view="program"]`

#### Vues (Templates)

Le dossier `views/` contient différents templates pour l'affichage des cartes :
- **`terrain.php`** : Affichage des terrains avec ville, nom, prix et statut
- **`program.php`** : Affichage des programmes immobiliers
- **`one-program.php`** : Affichage d'un programme spécifique
- **`post.php`** : Affichage générique pour les posts standards

#### Intégration avec le Thème

Ces shortcodes peuvent être utilisés dans :
- Les modèles de page du thème
- Les blocs Gutenberg "Shortcode" ou "HTML personnalisé"
- Les widgets de la sidebar
- Directement dans le contenu des pages ou articles

L'utilisation de ces shortcodes permet d'afficher des informations dynamiques sans avoir à modifier le code du thème, ce qui facilite la maintenance et les mises à jour.

### Styles Globaux (styles)

Le fichier définit également les styles par défaut pour :
- Les éléments HTML (headings, paragraphes, liens)
- Les blocs Gutenberg (boutons, colonnes, groupes)
- Les éléments d'interface (formulaires, navigation)

## Dossier Styles

Le dossier `styles/` contient des fichiers JSON qui étendent la configuration du thème pour des éléments spécifiques :

### 1. Styles de Blocs (`styles/blocks/`)

Contient des variantes de style pour les blocs Gutenberg standard :

- **`core-button-with-arrow.json`** : Style de bouton avec flèche
  ```json
  {
    "slug": "with-arrow",
    "blockTypes": ["core/button"],
    "styles": {
      "color": {
        "text": "var(--wp--preset--color--accent)"
      },
      "border": {
        "color": "transparent!important"
      }
    }
  }
  ```

- **`core-column-dashed.json`** : Style de colonne avec bordure en pointillés
- **`core-group-grid-2-1.json`** : Configuration de grille spécifique pour les groupes
- **`core-post-terms.json`** : Style pour l'affichage des termes de taxonomie

### 2. Styles de Sections (`styles/sections/`)

Définit des styles prédéfinis pour les sections de page :

- **`style1.json` à `style5.json`** : Variantes de mise en page pour les sections
  - Couleurs de fond et de texte
  - Espacements et marges
  - Comportements au survol
  - Styles d'éléments imbriqués

- **`card.json`** : Style spécifique pour les cartes d'information

### 3. Configuration Typographique (`styles/typography/`)

Contient les définitions des polices utilisées dans le thème :

- **`tt-hoves.json`** et **`tt-hoves-pro.json`** : Configuration des polices TT Hoves
  ```json
  {
    "settings": {
      "typography": {
        "fontFamilies": [
          {
            "fontFamily": "tt-hoves-pro-trial, sans-serif",
            "name": "Tt-hoves-pro-trial",
            "slug": "first"
          }
        ]
      }
    }
  }
  ```

- **`all.json`** : Compilation de toutes les configurations typographiques

## Relations entre Parts, Patterns et Templates

Le thème utilise une architecture modulaire où les différents composants interagissent entre eux de manière hiérarchique. Voici comment ces éléments sont liés :

### Hiérarchie et Inclusion

1. **Templates → Parts → Patterns**
   - Les `templates/` définissent la structure globale de la page
   - Les `parts/` sont inclus dans les templates pour des sections réutilisables
   - Les `patterns/` peuvent être utilisés dans les parts ou directement dans les templates

### Pourquoi des liens vers les Patterns dans les Parts

L'utilisation de liens vers les patterns dans les parts (plutôt que d'inclure directement le code HTML/CSS) présente plusieurs avantages majeurs :

1. **Réutilisabilité maximale** : Un pattern peut être référencé dans plusieurs parts différentes sans duplication de code

2. **Maintenance simplifiée** : Modifier un pattern met automatiquement à jour toutes les parts qui l'utilisent

3. **Séparation des responsabilités** :
   - Les parts définissent l'emplacement et la structure
   - Les patterns définissent l'apparence et le contenu

4. **Flexibilité de l'éditeur** : Les patterns liés peuvent être modifiés directement dans l'éditeur Gutenberg

5. **Performance** : Le système de cache de WordPress optimise le chargement des patterns réutilisés

6. **Cohérence visuelle** : Garantit une apparence uniforme des éléments répétés sur tout le site

#### Exemple technique

Un fichier part comme `parts/card-search.html` contient simplement une référence au pattern :

```html
<!-- wp:pattern {"slug":"citizim-2024/card-search"} /-->
```

Alors que le pattern correspondant (`patterns/card-search.php`) contient la définition complète du composant :

```php
<?php
/**
 * Title: Card Search
 * Slug: citizim-2024/card-search
 * Categories: group, container, card
 * Description: Card Search
 */
?>
<!-- wp:group {"className":"is-style-default","style":{...}} -->
<div class="wp-block-group is-style-default" style="...">
  <!-- wp:post-title {"isLink":true,"fontSize":"h-four"} /-->
  <!-- wp:post-excerpt /-->
</div>
<!-- /wp:group -->
```

Cette approche permet de centraliser la définition du composant tout en maintenant la flexibilité de son utilisation.

### Exemples Concrets

#### Exemple 1 : Structure d'une page standard

```
templates/page.html
  ↓ inclut
  parts/header.html
    ↓ inclut
    parts/header-top.html
    parts/header-menu.html
  ↓ inclut
  patterns/content-page.php
  ↓ inclut
  parts/footer.html
```

#### Exemple 2 : Les fichiers "template-*" dans patterns

Les fichiers préfixés par `template-` dans le dossier `patterns/` (comme `template-single-program.php`) sont des modèles complets pour des types de contenu spécifiques. Ils sont utilisés pour :

- Définir la structure de pages spécifiques (programmes, terrains, etc.)
- Être référencés dans les templates correspondants
- Fournir une mise en page cohérente pour des types de contenu particuliers

Par exemple, `template-single-program.php` définit la structure complète d'une page de programme individuel, incluant :
- L'en-tête avec le titre et les métadonnées
- La disposition des colonnes
- Les sections de contenu spécifiques aux programmes

#### Exemple 3 : Les composants "card-*"

Les fichiers `card-*.php` dans le dossier `patterns/` sont des composants réutilisables pour afficher des informations spécifiques :

- `card-equipe.php` : Affiche un membre de l'équipe avec photo, nom et poste
- `card-focus.php` : Met en avant une information importante
- `card-search.php` : Format d'affichage des résultats de recherche

Ces composants peuvent être utilisés dans différentes sections du site, ce qui assure une cohérence visuelle.

### Flux de Données

1. **WordPress → Templates → Parts → Patterns**
   - WordPress charge le template approprié selon le contexte (page, archive, single, etc.)
   - Le template inclut les parts nécessaires
   - Les parts ou le template peuvent inclure des patterns
   - Les patterns peuvent être personnalisés via l'éditeur Gutenberg

## Développement

Pour étendre ou modifier le thème :
1. Respectez l'architecture existante
2. Utilisez les patterns pour créer de nouveaux composants
3. Ajoutez les fonctions dans le dossier approprié
4. Suivez les conventions de nommage existantes

---

*Documentation créée le 17 mars 2025*
