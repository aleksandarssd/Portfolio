# Deployment Guide

This portfolio supports two deployment methods:
1. **[Vercel](#-vercel-deployment-recommended)** — Fast, free, zero-config (recommended for this project)
2. **[cPanel / Namecheap](#-cpanel-deployment)** — Traditional PHP shared hosting (contact form fully works here)

---

## 🚀 Vercel Deployment (Recommended)

### Prerequisites
- A Vercel account (free): [vercel.com](https://vercel.com)
- The repo pushed to GitHub: `git@github.com:aleksandarssd/Portfolio.git`

### Steps

1. **Log in to Vercel** and click **Add New → Project**
2. **Import from GitHub** and select `aleksandarssd/Portfolio`
3. **No build settings are needed** — leave everything as default
4. Vercel detects `vercel.json` and uses the `vercel-php` runtime automatically
5. Click **Deploy**

### Post-Deployment
- Your site will be live at `https://portfolio-xxx.vercel.app`
- To use a custom domain: go to **Project Settings → Domains → Add Domain**

### ⚠️ Contact Form on Vercel
PHP's `mail()` function **does not work on Vercel's serverless infrastructure**.

**Options for a working contact form on Vercel:**

**Option 1 — Formspree (easiest, free):**
```html
<!-- In index.php, replace the form action: -->
<form action="https://formspree.io/f/YOUR_FORM_ID" method="POST">
```
Sign up at [formspree.io](https://formspree.io), create a form, paste the ID.

**Option 2 — Web3Forms (free, no signup required):**
```html
<form action="https://api.web3forms.com/submit" method="POST">
    <input type="hidden" name="access_key" value="YOUR_ACCESS_KEY">
```
Get a key at [web3forms.com](https://web3forms.com).

---

## 🖥️ cPanel Deployment

### Prerequisites
- Namecheap (or any) shared hosting account with cPanel
- PHP 7.4 or higher on the server
- Domain name connected to hosting

### Step 1: Prepare a ZIP Archive

From the project root, create a ZIP containing:
```
index.php
project-details.php
api/
assets/
data/
includes/
robots.txt
Skandar_mokni_cv_sr.pdf
```
> **Exclude:** `.git/`, `.gitignore`, `vercel.json`, `README.md`, `DEPLOY.md`, `LICENSE`, `task.md`, `*.zip`

### Step 2: Upload to cPanel

1. Log in to **cPanel → File Manager**
2. Navigate to `public_html` (or your subdomain folder)
3. Click **Upload** and select your ZIP file
4. Right-click the ZIP → **Extract** to current directory
5. Delete the ZIP file after extraction

### Step 3: Verify File Permissions

| Type | Permission |
|---|---|
| Folders | `755` |
| Files | `644` |

In cPanel File Manager: select all → **Change Permissions**.

### Step 4: Configure Contact Form

Open `api/contact.php` in cPanel Code Editor and verify:
- `$to` is set to `aleksandarrsd@gmail.com` ✅ (already set)
- For better deliverability, create a `noreply@yourdomain.com` email in cPanel and update `$headers` "From" accordingly

### Step 5: Test

1. Visit your domain
2. Check all images load
3. Submit a test message via the contact form
4. Check your email inbox (and spam folder)

### Troubleshooting

| Error | Fix |
|---|---|
| **403 Forbidden** | Check permissions (Folders: 755, Files: 644) |
| **404 Not Found** | Verify files extracted to the correct directory |
| **Email not received** | Check spam folder; consider PHPMailer + SMTP |
| **Blank page** | Enable PHP error display temporarily: `ini_set('display_errors', 1);` |
