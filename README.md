<div align="center">

# Skandar Mokni — Portfolio

**Mechanical Engineer · Full Stack Software Engineer**

[![Live Site](https://img.shields.io/badge/Live%20Site-Online-brightgreen?style=flat-square&logo=vercel)](https://skandarmokni.vercel.app)
[![LinkedIn](https://img.shields.io/badge/LinkedIn-Connect-0A66C2?style=flat-square&logo=linkedin)](https://www.linkedin.com/in/skandar-mokni-3b02b3178/)
[![GitHub](https://img.shields.io/badge/GitHub-aleksandarssd-181717?style=flat-square&logo=github)](https://github.com/aleksandarssd)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg?style=flat-square)](LICENSE)

</div>

---

## 📋 Overview

A professional portfolio website for **Skandar Mokni**, a dual-skilled Mechanical and Software Engineer based in Belgrade, Serbia. The site showcases 6 mechanical engineering projects (CAD, FEA, structural analysis) and 9+ software projects (web platforms, e-commerce, CMS systems), with a working contact form and downloadable CV.

Built with PHP, Vanilla CSS, and JavaScript — no framework, no database, no build step required.

---

## ✨ Features

- ⚙️ **Dual-domain showcase** — Mechanical Engineering + Software Engineering project categories
- 🌒 **Dark / Light mode** toggle with `localStorage` persistence
- 🖼️ **3D model viewer** — interactive GLB models via Google's `model-viewer` component
- 🖼️ **Image lightbox** gallery on project detail pages
- 📱 **Fully responsive** — mobile-first layout with animated hamburger menu
- ✉️ **Contact form** with server-side validation (`api/contact.php`)
- 🔒 **Security hardened** `.htaccess` — directory browsing disabled, includes protected
- 🚀 **Vercel-ready** — `vercel.json` configured for PHP serverless runtime

---

## 🗂️ Project Structure

```
Portfolio/
├── index.php                  # Main homepage (hero, about, projects, skills, contact)
├── project-details.php        # Dynamic project detail page (driven by data/projects.php)
├── api/
│   └── contact.php            # Contact form handler (PHP mail)
├── assets/
│   ├── css/style.css          # All styles (variables, components, dark mode)
│   └── js/main.js             # Theme toggle, smooth scroll, animations, form handling
├── data/
│   ├── projects.php           # Project data source (titles, descriptions, gallery, specs)
│   ├── images/                # Project image galleries
│   ├── files/                 # Downloadable project documents (PDFs)
│   └── models/                # 3D GLB model files
├── includes/
│   ├── header.php             # HTML <head>, fonts, icons, navigation
│   └── footer.php             # Footer, scripts
├── vercel.json                # Vercel PHP runtime configuration
├── .htaccess                  # Apache security, rewrite rules, cache control
├── robots.txt                 # SEO crawler directives
├── LICENSE                    # MIT License
└── Skandar_mokni_cv_sr.pdf    # Downloadable CV
```

---

## 🖥️ Local Development (XAMPP)

**Requirements:** PHP 7.4+, XAMPP (or any local PHP server)

```bash
# 1. Clone the repository
git clone git@github.com:aleksandarssd/Portfolio.git

# 2. Move it into your XAMPP htdocs directory
#    (or serve from anywhere with: php -S localhost:8000)

# 3. Open in browser
http://localhost/Portfolio/
```

No database setup, no `npm install`, no build step needed.

---

## 🚀 Deployment

### Option A — Vercel (Recommended)

> **Note:** The contact form uses PHP `mail()` which is **not available on Vercel**. For a working contact form on Vercel, replace the form action with a free service like [Formspree](https://formspree.io) or [Web3Forms](https://web3forms.com).

1. Push this repo to GitHub (already done ✅)
2. Go to [vercel.com](https://vercel.com) → **New Project** → Import from GitHub
3. Select `aleksandarssd/Portfolio`
4. **No build settings needed** — Vercel detects `vercel.json` automatically
5. Click **Deploy**

### Option B — cPanel / Shared Hosting (PHP mail works here)

See [DEPLOY.md](DEPLOY.md) for full cPanel upload instructions.

---

## ⚠️ Environment Notes

| Feature | XAMPP / cPanel | Vercel |
|---|---|---|
| PHP rendering | ✅ Full support | ✅ via `vercel-php` runtime |
| Contact form (`mail()`) | ✅ Works | ❌ Not available |
| Static assets (images, CSS, JS) | ✅ | ✅ |
| 3D model viewer | ✅ | ✅ |
| `.htaccess` rules | ✅ Apache | ❌ Ignored (not needed) |

---

## 📬 Contact

- **Email:** [aleksandarrsd@gmail.com](mailto:aleksandarrsd@gmail.com)
- **LinkedIn:** [linkedin.com/in/skandar-mokni-3b02b3178](https://www.linkedin.com/in/skandar-mokni-3b02b3178/)
- **Location:** Belgrade, Serbia

---

## 📄 License

This project is licensed under the **MIT License** — see the [LICENSE](LICENSE) file for details.
