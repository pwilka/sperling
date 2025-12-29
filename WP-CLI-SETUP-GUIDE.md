# WP-CLI Setup Guide for Sperling Insurance

**Purpose:** Set up WordPress CLI to automate page creation and configuration

---

## Option 1: Using LocalWP (Easiest - Recommended)

If you're using **LocalWP** (Local by Flywheel), WP-CLI is already built-in!

### Steps:

1. **Open LocalWP**
2. **Select your "sperling" site**
3. **Click "Open Site Shell"** (or right-click site → "Open Site Shell")
   - This opens a terminal/command prompt with WP-CLI ready to use
4. **Test it:**
   ```bash
   wp --info
   ```
   - Should show WP-CLI version info

### You're Ready!
Once the shell opens, you can run WP-CLI commands directly. I'll create a script you can run.

---

## Option 2: Install WP-CLI on Windows

If you're NOT using LocalWP, install WP-CLI manually:

### Method A: Using Composer (Recommended)
```powershell
# Install Composer first (if not installed)
# Download from: https://getcomposer.org/download/

# Then install WP-CLI
composer global require wp-cli/wp-cli
```

### Method B: Direct Download
1. **Download WP-CLI:**
   - Go to: https://wp-cli.org/#installing
   - Download `wp-cli.phar`

2. **Create a batch file:**
   - Create `wp.bat` in your WordPress root directory:
   ```batch
   @echo off
   php wp-cli.phar %*
   ```

3. **Test:**
   ```powershell
   php wp-cli.phar --info
   ```

---

## Option 3: Use LocalWP's Built-in Terminal (Easiest!)

**LocalWP has WP-CLI built-in - just use their terminal!**

1. Open LocalWP
2. Right-click your "sperling" site
3. Select **"Open Site Shell"**
4. WP-CLI is ready to use!

---

## Verify WP-CLI Works

Once you have access, test with:

```bash
wp --info
```

Should show:
```
OS:     Windows NT 10.0
Shell:  C:\WINDOWS\System32\WindowsPowerShell\v1.0\powershell.exe
PHP:    8.x.x
WP-CLI: 2.x.x
```

---

## Next Steps

Once WP-CLI is working, I'll create a script that:
- Creates all 28+ pages automatically
- Assigns the correct templates
- Sets proper URLs/slugs
- Configures navigation menus
- Sets up SEO basics

**Just let me know when you have WP-CLI access, and I'll create the automation script!**

---

## Alternative: Manual Method

If WP-CLI isn't available, I can create:
- A detailed step-by-step manual guide
- Copy-paste content for each page
- Screenshot instructions

Let me know which you prefer!

