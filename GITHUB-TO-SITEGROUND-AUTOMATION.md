# 🚀 Automated Deployment: GitHub → SiteGround

**Set up automatic deployment so files from GitHub go directly to SiteGround**

---

## Option 1: SiteGround Git Integration (If Available)

Some SiteGround plans include Git integration. Check if you have it:

1. **Site Tools** → **Dev** → **Git**
2. If available, you can:
   - Connect your GitHub repository
   - Set up automatic deployment
   - Push to GitHub = auto-deploy to SiteGround

**If you see Git in Site Tools, this is the easiest method!**

---

## Option 2: GitHub Actions (Recommended)

**Automatically deploy to SiteGround when you push to GitHub**

### Step 1: Get SiteGround SFTP Credentials

1. **Site Tools** → **FTP Accounts**
2. Create or use existing FTP account
3. Note down:
   - **Host:** (usually your domain or ftp.yourdomain.com)
   - **Username:** (your FTP username)
   - **Password:** (your FTP password)
   - **Port:** (usually 21 or 22)

### Step 2: Add GitHub Secrets

1. Go to your GitHub repository: `https://github.com/pwilka/sperling`
2. Click **Settings** → **Secrets and variables** → **Actions**
3. Click **New repository secret**
4. Add these secrets:
   - `FTP_HOST` - Your SiteGround FTP host
   - `FTP_USERNAME` - Your FTP username
   - `FTP_PASSWORD` - Your FTP password
   - `FTP_PORT` - Usually 21 or 22

### Step 3: Create GitHub Actions Workflow

I'll create a workflow file that automatically deploys when you push to GitHub.

---

## Option 3: Manual Git Clone (One-Time Setup)

**Clone your GitHub repo directly on SiteGround server**

### Via SSH/Shell Access:

1. **Site Tools** → **SSH/Shell Access**
2. Enable SSH access (if not already enabled)
3. Connect via SSH terminal
4. Navigate to your WordPress themes folder:
   ```bash
   cd public_html/wp-content/themes/
   ```
5. Clone your repository:
   ```bash
   git clone https://github.com/pwilka/sperling.git
   ```
6. **Update theme files:**
   ```bash
   cd sperling
   git pull origin main
   ```

**Then whenever you update GitHub, just SSH in and run `git pull`**

---

## Option 4: SFTP Sync Script (Semi-Automated)

I can create a script that syncs files from GitHub to SiteGround via SFTP.

---

## 🎯 Which Method Do You Prefer?

1. **GitHub Actions** - Fully automated (push to GitHub = auto-deploy)
2. **Git Clone** - Manual but simple (SSH in and pull)
3. **SFTP Script** - Semi-automated sync
4. **SiteGround Git** - If your plan includes it

**Let me know which you prefer, and I'll set it up for you!**

---

## ⚡ Quick Answer

**I can't directly access your SiteGround account** (security), but I can:
- ✅ Create GitHub Actions workflow for auto-deployment
- ✅ Create SFTP sync scripts
- ✅ Set up Git clone instructions
- ✅ Automate the deployment process

**Which method would you like me to set up?**

