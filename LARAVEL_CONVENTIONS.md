# 🚀 Laravel Development Mindset

> **Tip:** Since this is my first Laravel SaaS, I use this opportunity to learn and embrace Laravel's built-in conventions.

Whenever I start building a new feature, pause and map it out by asking myself these five core questions:

- **📦 Model:** _What data am I storing?_
- **🗄️ Migration:** _How should it be stored in the database?_
- **⚙️ Controller:** _What actions are users taking?_
- **🛣️ Route:** _How do users access those actions?_
- **🎨 View:** _What should users see?_

---

## 📌 Quick Reference: Laravel Naming Conventions

To help me stay aligned with the framework's "convention over configuration" philosophy, keep these standard naming rules in mind:

### 1. Database & Eloquent

- **Database Tables:** Plural, `snake_case` (e.g., `blog_posts`, `subscriptions`).
- **Models:** Singular, `PascalCase` (e.g., `BlogPost`, `Subscription`).
- **Foreign Keys:** Singular model name + `_id` (e.g., `user_id`, `blog_post_id`).

### 2. Controllers & Routes

- **Controllers:** `PascalCase` with a "Controller" suffix. Prefer plural for resources (e.g., `PostController` or `PostsController`).
- **Routes:** Lowercase, `kebab-case` URL paths (e.g., `/user-profiles`).
- **Route Names:** `snake_case` or dot notation using standard resource verbs (e.g., `posts.index`, `posts.store`).

### 3. Views

- **Blade Files:** Lowercase, `kebab-case` inside the `resources/views` directory (e.g., `show.blade.php`, `edit-profile.blade.php`).
