# Quick Start: Using WP-CLI with LocalWP

**Easiest Method - Use LocalWP's Built-in Terminal**

## ✅ Step 1: Open LocalWP Terminal

1. Open **LocalWP** application
2. Find your **"sperling"** site in the list
3. **Right-click** on the site
4. Click **"Open Site Shell"** (or "Open Terminal")
5. A terminal window opens - **WP-CLI is already available!**

## ✅ Step 2: Test WP-CLI

In the terminal that just opened, type:
```bash
wp --info
```

You should see WP-CLI version information. If so, you're ready!

## ✅ Step 3: Run the Page Creation Script

I've created a script that will create all pages automatically. You have two options:

### Option A: Upload Script to WordPress (Easiest)

1. Upload `create-all-pages.php` to your WordPress root directory
   - In LocalWP: Right-click site → "Open Site Shell"
   - Or manually copy to: `C:\Users\pwilk\AppData\Roaming\Local\sites\sperling\app\public\`
2. Visit in browser: `https://sperlinginsurance.local/create-all-pages.php`
3. All pages created automatically!
4. **Delete the file after running** (security)

### Option B: Run via WP-CLI

In the LocalWP terminal, navigate to your WordPress directory:
```bash
cd app/public
wp eval-file create-all-pages.php
```

## 🎯 That's It!

All 24+ pages will be created automatically with:
- ✅ Correct templates assigned
- ✅ Proper URLs/slugs set
- ✅ All ready to use

---

## Alternative: Standalone WP-CLI (If Needed)

If you want WP-CLI available outside LocalWP:

1. **Downloaded files:**
   - `wp-cli.phar` - WP-CLI executable
   - `wp.bat` - Windows wrapper script

2. **To use:**
   - Place both files in a folder in your PATH
   - Or run: `php wp-cli.phar --info` (if PHP is available)

**But honestly, LocalWP's terminal is easier!** 😊

---

*Need help? The LocalWP terminal method is the simplest and most reliable.*

