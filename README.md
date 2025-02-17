# Lost&Found - Plateforme de gestion d'objets perdus et trouvés

## 📌 Contexte du projet
Lost&Found est une plateforme permettant aux utilisateurs de publier et consulter des annonces pour des objets perdus ou trouvés. Grâce à une interface intuitive et sécurisée, les utilisateurs peuvent facilement retrouver ou rendre des objets importants.

---

## 🚀 Fonctionnalités principales

### 📦 Publication d’Objets Perdus/Trouvés
- Création d'annonces pour des objets perdus ou trouvés.
- Chaque annonce comprend :
  - Une description détaillée de l'objet.
  - Une photo (facultatif).
  - La date et le lieu de la perte ou de la trouvaille.
  - Informations de contact (Email, Téléphone).
- Filtrage des annonces par catégorie d’objet (vêtements, électronique, clés, etc.).
- Recherche par mots-clés, catégorie ou lieu.

### 💬 Commentaires
- Possibilité de commenter les annonces pour interagir avec la communauté.

### 📊 Statistiques
- Affichage du nombre total de publications.
- Mise en avant des annonces les plus populaires.

---

## 🎁 Bonus

### 🔐 Authentification & Profils
- Chaque utilisateur possède un profil pour gérer ses annonces.
- Authentification via Breeze ou Jetstream.

### 📝 Bouton "Trouvé"
- Permet à un utilisateur de signaler qu’il a retrouvé un objet perdu.

### 🔍 Bouton "C'est à moi"
- Permet à un utilisateur de revendiquer un objet trouvé.

---

## 🛠️ Technologies utilisées
- **Backend** : Laravel
- **Frontend** : HTML, CSS, JavaScript
- **Template Engine** : Blade
- **Base de données** : PostgreSQL

---

## 📄 Installation & Configuration

### 🖥️ Prérequis
- PHP 8+
- Composer
- Laravel 10+
- PostgreSQL
- Node.js & npm

### 📥 Installation
1. **Cloner le projet**
   ```sh
   git clone https://github.com/votre-repo/lostandfound.git
   cd lostandfound
   ```
2. **Installer les dépendances**
   ```sh
   composer install
   npm install && npm run dev
   ```
3. **Configurer l’environnement**
   ```sh
   cp .env.example .env
   php artisan key:generate
   ```
   Modifier le fichier `.env` avec vos informations de base de données.
4. **Exécuter les migrations**
   ```sh
   php artisan migrate --seed
   ```
5. **Lancer le serveur**
   ```sh
   php artisan serve
   ```

---

## 📌 Contribution
Les contributions sont les bienvenues ! Merci de suivre les étapes suivantes :
1. Forker le projet.
2. Créer une branche : `git checkout -b feature-nouvelle-fonctionnalite`
3. Commiter vos modifications : `git commit -m 'Ajout d'une nouvelle fonctionnalité'`
4. Pousser la branche : `git push origin feature-nouvelle-fonctionnalite`
5. Créer une Pull Request.

---

## 📞 Support
Si vous avez des questions ou des suggestions, n’hésitez pas à ouvrir une issue ou à nous contacter.

📧 Email : abdelhafid02002@gmail.com

---

✨ Merci de contribuer à rendre la communauté plus solidaire en retrouvant les objets perdus !

