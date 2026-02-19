# 📋 Changes Log — Education Malaysia (Feb 18, 2026)

## Overview

Is document mein un saari files ka record hai jo is session mein change ki gayi hain,
kya problem thi, aur kya fix kiya gaya.

---

## 1. `.github/workflows/upload.yml`

**Type:** CI/CD Pipeline  
**Status:** ✅ Completely Rewritten

### Kya Badla:
- Purana workflow `git pull` based tha jo server pe kaam nahi karta tha
- Naya workflow **ZIP-based deployment** use karta hai — poori project zip hoti hai aur SCP se server pe jaati hai
- **VITE environment variables** build time pe inject hote hain (zaroori hai kyunki Vite inhe bundle mein hardcode karta hai)
- **Storage directories** CI pe bhi create hoti hain taaki `artisan package:discover` crash na kare
- Temporary `.env` CI pe create hota hai taaki `APP_URL=null` error na aaye
- `timeout: 120s` aur `command_timeout: 30m` add kiya SCP ke liye

### Secrets Required (GitHub → Settings → Secrets → Actions):
| Secret | Description |
|--------|-------------|
| `HOST` | Hostinger server IP |
| `USERNAME` | SSH username |
| `SSH_KEY` | Private SSH key (with BEGIN/END headers) |
| `PORT` | `65002` (Hostinger default) |
| `VITE_API_BASE_URL` | `https://educationmalaysia.ritiksaini.in` |
| `VITE_API_KEY` | `vN7kO8pM6vGz1Nz0Vw4k5AjcB5n9hTzY6QsErK8gNbE=` |
| `VITE_SITE_URL` | `https://educationmalaysia.ritiksaini.in` |
| `VITE_ADMIN_URL` | `https://admin.educationmalaysia.in` |
| `VITE_IMAGE_BASE_URL` | `https://admin.educationmalaysia.in/storage` |

### Deployment Flow (New):
```
1. Checkout code
2. Setup PHP 8.2
3. Setup Node.js 20
4. npm install --force
5. Create temp .env (APP_URL=http://localhost + storage dirs)
6. composer install --no-dev --optimize-autoloader
7. php artisan key:generate
8. Inject VITE vars → npx vite build
9. zip -r deploy.zip . (exclude: .git, node_modules, .env)
10. SCP upload deploy.zip → Hostinger
11. SSH: unzip + artisan commands
```

---

## 2. `.gitignore`

**Type:** Git Configuration  
**Status:** ✅ Fixed

### Kya Badla:
- **`/public` line remove ki** — ye line poore `public` folder ko Git se ignore kar rahi thi
- Isliye `public/index.php`, `public/.htaccess`, `public/build/` kabhi deploy nahi hoti thi
- Ab sirf specific cheezein ignore hoti hain: `/public/build`, `/public/hot`, `/public/storage`

### Before:
```
/public/build
/public/hot
/public/storage
/public          ← YE PROBLEM THI ❌
```

### After:
```
/public/build
/public/hot
/public/storage
                 ← /public line remove ✅
```

---

## 3. `.env.example`

**Type:** Environment Template  
**Status:** ✅ Updated

### Kya Badla:
- Naye VITE environment variables add kiye jo production deployment ke liye zaroori hain:

```env
VITE_API_BASE_URL=https://educationmalaysia.ritiksaini.in
VITE_API_KEY=
VITE_SITE_URL=https://educationmalaysia.ritiksaini.in
VITE_ADMIN_URL=https://admin.educationmalaysia.in
VITE_IMAGE_BASE_URL=https://admin.educationmalaysia.in/storage
VITE_LOGO=/logo.png
```

> ⚠️ Note: `.env.example` sirf documentation ke liye hai. Actual values GitHub Secrets mein set karo.

---

## 4. `composer.json`

**Type:** PHP Dependency Config  
**Status:** ✅ Fixed

### Kya Badla:
- `app/helper.php` ko `autoload-dev` se `autoload` mein move kiya

### Before:
```json
"autoload-dev": {
    "files": ["app/helper.php"]  ← sirf dev mein load hota tha ❌
}
```

### After:
```json
"autoload": {
    "files": ["app/helper.php"]  ← production mein bhi load hoga ✅
}
```

### Kyun:
- `composer install --no-dev` se `autoload-dev` skip hota hai
- `helper.php` mein `replaceTag()` function aur `DOMAIN` constant define hain
- Production mein ye load nahi hota tha → `Call to undefined function replaceTag()` error

---

## 5. `app/Services/SeoMetaService.php`

**Type:** PHP Service Class  
**Status:** ✅ Fixed

### Kya Badla:
- **12 jagah** `DOMAIN` constant ko `config('app.url')` se replace kiya

### Before:
```php
'site' => DOMAIN,  // ← Undefined constant ❌
```

### After:
```php
'site' => config('app.url'),  // ← Laravel proper way ✅
```

### Kyun:
- `DOMAIN` constant `helper.php` mein define tha jo production mein load nahi ho raha tha
- `config('app.url')` `.env` ke `APP_URL` se value leta hai — reliable aur flexible

---

## 6. `app/Http/Controllers/Front/ReactAppController.php`

**Type:** PHP Controller  
**Status:** ✅ Fixed (Folder Renamed)

### Kya Badla:
- Folder `front/` (lowercase) → `Front/` (uppercase) rename kiya

### Before:
```
app/Http/Controllers/front/ReactAppController.php  ← lowercase ❌
```

### After:
```
app/Http/Controllers/Front/ReactAppController.php  ← PascalCase ✅
```

### Kyun:
- PHP namespace tha `App\Http\Controllers\Front` (uppercase)
- Linux file system **case-sensitive** hai — `front` ≠ `Front`
- Windows pe kaam karta tha (case-insensitive), Linux CI pe fail ho raha tha
- PSR-4 autoloading standard violation fix hua

---

## 7. `resources/js/src/App.jsx`

**Type:** React Main Router File  
**Status:** ✅ Fixed

### Kya Badla:
- `ServicesDiscover` component ka import path fix kiya

### Before:
```js
const ServicesDiscover = lazy(() => import("./pages/servicesdiscover")); // ❌
```

### After:
```js
const ServicesDiscover = lazy(() => import("./pages/ServicesDiscover")); // ✅
```

### Kyun:
- Actual file name: `ServicesDiscover.jsx` (PascalCase)
- Linux case-sensitive hai → `servicesdiscover` ≠ `ServicesDiscover`
- Windows pe locally kaam karta tha, GitHub Actions (Linux) pe Vite build fail ho raha tha

---

## 8. Public Folder Files (Naye Track Hue)

**Type:** Laravel Public Files  
**Status:** ✅ Added to Git

### Files:
| File | Description |
|------|-------------|
| `public/index.php` | Laravel entry point |
| `public/.htaccess` | Apache URL rewriting rules |
| `public/favicon.ico` | Website favicon |
| `public/robots.txt` | SEO robots file |

### Kyun:
- `.gitignore` mein `/public` hone ki wajah se ye files kabhi Git mein track nahi hui thi
- Server pe deploy nahi ho rahi thi → website open nahi hoti thi
- Ab `.gitignore` fix hone ke baad ye files track aur deploy hoti hain

---

## 🔑 Important Notes

### Server pe manually karna hai (ek baar):
1. `.env` file server pe upload karo (Hostinger File Manager se)
2. `APP_URL=https://educationmalaysia.ritiksaini.in` set karo `.env` mein
3. Database credentials sahi set karo

### GitHub Secrets add karo (deploy ke liye zaroori):
- Repo → Settings → Secrets and variables → Actions → New repository secret
- Upar table mein diye gaye saare secrets add karo

### Hostinger SSH Port:
- Default port: **`65002`** (22 nahi!)
- `PORT` secret mein `65002` set karo

---

## 📅 Session Date
**Date:** February 18, 2026  
**Project:** Education Malaysia — Laravel + React  
**Domain:** `educationmalaysia.ritiksaini.in`
