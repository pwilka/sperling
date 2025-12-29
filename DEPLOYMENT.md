# Deployment Guide - Sperling WordPress Theme

This guide explains how to deploy updates from this GitHub repository to your live WordPress site on SiteGround.

## 📋 Prerequisites

- Access to SiteGround File Manager or SFTP
- GitHub repository access
- WordPress admin access

---

## 🚀 Deployment Methods

### Method 1: Manual Upload via SiteGround File Manager (Recommended for Beginners)

1. **Download the latest theme files from GitHub:**
   - Go to your GitHub repository: `https://github.com/pwilka/sperling`
   - Click the green "Code" button → "Download ZIP"
   - Extract the ZIP file on your computer

2. **Upload to SiteGround:**
   - Log into SiteGround Site Tools
   - Navigate to **Files** → **File Manager**
   - Go to: `public_html/wp-content/themes/`
   - **Backup first:** Rename the existing `sperling` folder to `sperling-backup-YYYY-MM-DD`
   - Upload the new `sperling` folder (or extract it directly in File Manager)
   - Ensure all files uploaded correctly

3. **Verify:**
   - Go to WordPress Admin → **Appearance** → **Themes**
   - The theme should still be active
   - Visit your site to ensure everything works

---

### Method 2: SFTP Upload (Faster for Large Updates)

1. **Get SFTP credentials from SiteGround:**
   - Site Tools → **SSH/Shell Access** or **FTP Accounts**
   - Note: Host, Username, Password, Port (usually 21 or 22)

2. **Use an SFTP client:**
   - **FileZilla** (free): https://filezilla-project.org/
   - **WinSCP** (Windows): https://winscp.net/
   - **VS Code SFTP Extension** (if using VS Code)

3. **Connect and upload:**
   - Connect to your SiteGround server
   - Navigate to: `/public_html/wp-content/themes/`
   - **Backup:** Rename `sperling` to `sperling-backup-YYYY-MM-DD`
   - Upload the entire `sperling` folder from your local repository
   - Ensure file permissions are correct (folders: 755, files: 644)

---

### Method 3: Git Deployment (Advanced - Requires SSH Access)

If you have SSH access to SiteGround, you can set up automatic deployment:

1. **SSH into your server:**
   ```bash
   ssh username@your-site.com
   ```

2. **Navigate to themes directory:**
   ```bash
   cd public_html/wp-content/themes/
   ```

3. **Clone or pull from GitHub:**
   ```bash
   # If first time:
   git clone https://github.com/pwilka/sperling.git
   
   # If already cloned:
   cd sperling
   git pull origin main
   ```

4. **Set proper permissions:**
   ```bash
   find . -type d -exec chmod 755 {} \;
   find . -type f -exec chmod 644 {} \;
   ```

---

## ⚠️ Important: Before Every Deployment

### 1. **Backup Your Site**
   - Use SiteGround's backup tool OR
   - WordPress Admin → **UpdraftPlus** → **Backup Now**
   - Or manually backup the theme folder

### 2. **Test Locally First** (if possible)
   - Test changes in a local environment before deploying

### 3. **Check for Breaking Changes**
   - Review `CHANGELOG.md` or commit messages
   - Check if any new dependencies are required

---

## 📁 Files That Should NOT Be Deployed

The following files are excluded via `.gitignore` and should NOT be uploaded:

- `wp-config.php` (contains sensitive credentials)
- `*.sql`, `*.sqlite` (database files)
- `*.zip` (archive files)
- System files (`.DS_Store`, `Thumbs.db`, etc.)

---

## 🔄 Workflow for Making Live Updates

### Step-by-Step Process:

1. **Make changes locally:**
   ```bash
   # Edit files in your local repository
   # Test changes
   ```

2. **Commit to GitHub:**
   ```bash
   git add .
   git commit -m "Description of changes"
   git push origin main
   ```

3. **Deploy to SiteGround:**
   - Use one of the deployment methods above
   - **Always backup first!**

4. **Verify on live site:**
   - Check all pages load correctly
   - Test forms and functionality
   - Check mobile responsiveness

5. **Clear cache:**
   - WordPress Admin → **WP Fastest Cache** → **Delete Cache**
   - Or use SiteGround's cache clearing tool

---

## 🐛 Troubleshooting

### Theme breaks after deployment:
1. **Check file permissions** (folders: 755, files: 644)
2. **Clear all caches** (WordPress, SiteGround, browser)
3. **Check for PHP errors:** Site Tools → **Error Log**
4. **Restore backup** if needed

### Files not updating:
1. **Clear cache** (see above)
2. **Check file timestamps** to ensure upload completed
3. **Verify file paths** are correct
4. **Check for permission issues**

### "White screen of death":
1. **Enable WordPress debug mode** (temporarily):
   ```php
   // In wp-config.php (temporarily)
   define('WP_DEBUG', true);
   define('WP_DEBUG_LOG', true);
   ```
2. **Check error logs:** `wp-content/debug.log`
3. **Restore backup immediately**

---

## 📝 Deployment Checklist

Before deploying:
- [ ] All changes committed to GitHub
- [ ] Backup created (SiteGround or UpdraftPlus)
- [ ] Tested locally (if possible)
- [ ] Reviewed changes for breaking updates

During deployment:
- [ ] Backed up existing theme folder
- [ ] Uploaded all files successfully
- [ ] Verified file permissions

After deployment:
- [ ] Site loads correctly
- [ ] All pages functional
- [ ] Forms working
- [ ] Mobile responsive
- [ ] Cache cleared
- [ ] No PHP errors in logs

---

## 🔐 Security Notes

- **Never commit `wp-config.php`** - it contains database credentials
- **Never commit database files** (`.sql`, `.sqlite`)
- **Use SFTP/SSH** instead of FTP (more secure)
- **Keep WordPress and plugins updated** for security

---

## 📞 Support

If you encounter issues:
1. Check this guide first
2. Review SiteGround documentation
3. Check WordPress error logs
4. Restore from backup if critical

---

*Last updated: December 29, 2025*

