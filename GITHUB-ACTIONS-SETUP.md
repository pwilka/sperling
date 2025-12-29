# 🚀 GitHub Actions Setup - Step by Step

**Automatically deploy from GitHub to SiteGround**

---

## ✅ Step 1: Get Your FTP Password

From your SiteGround FTP Accounts page:

1. Click the **three dots (⋮)** next to your FTP account
2. Select **"Change Password"** or **"View Details"**
3. **Note your FTP password** (you'll need it in Step 2)

**OR** if you just created the account, the password should have been shown. If you don't have it:
- Click the three dots → "Change Password" to set a new one
- Write it down!

---

## ✅ Step 2: Add GitHub Secrets

1. **Go to your GitHub repository:**
   - Visit: `https://github.com/pwilka/sperling`

2. **Click "Settings"** (top menu)

3. **Click "Secrets and variables"** → **"Actions"** (left sidebar)

4. **Click "New repository secret"** (green button)

5. **Add these 4 secrets one by one:**

   **Secret 1:**
   - Name: `FTP_HOST`
   - Value: `ftp.sperlinginsurance.com`
   - Click "Add secret"

   **Secret 2:**
   - Name: `FTP_USERNAME`
   - Value: `pwilka@sperlinginsurance.com`
   - Click "Add secret"

   **Secret 3:**
   - Name: `FTP_PASSWORD`
   - Value: `[your FTP password from Step 1]`
   - Click "Add secret"

   **Secret 4:**
   - Name: `FTP_PORT`
   - Value: `21`
   - Click "Add secret"

---

## ✅ Step 3: Verify Workflow File

The workflow file is already created at:
- `.github/workflows/deploy-to-siteground.yml`

It's already in your repository! ✅

---

## ✅ Step 4: Test It!

1. **Make a small change** to any file (or just commit the current state)

2. **Commit and push:**
   ```bash
   git add .
   git commit -m "Test GitHub Actions deployment"
   git push origin main
   ```

3. **Check GitHub Actions:**
   - Go to: `https://github.com/pwilka/sperling/actions`
   - You should see a workflow running
   - Click on it to see progress
   - It should deploy to SiteGround automatically!

---

## ✅ Step 5: Verify Deployment

1. **Wait for workflow to complete** (usually 1-2 minutes)
2. **Check your SiteGround File Manager:**
   - Go to: `public_html/wp-content/themes/sperling/`
   - Files should be updated!
3. **Visit your site** to verify changes are live

---

## 🎯 What Happens Now?

**Every time you push to GitHub:**
- ✅ GitHub Actions automatically runs
- ✅ Files deploy to SiteGround via FTP
- ✅ Your site updates automatically!

**No more manual uploads needed!** 🎉

---

## 🆘 Troubleshooting

**Workflow fails:**
- Check that all 4 secrets are added correctly
- Verify FTP credentials are correct
- Check the Actions tab for error messages

**Files not deploying:**
- Verify the server-dir path in the workflow file
- Check FTP permissions
- Look at workflow logs for specific errors

**Need to update credentials:**
- Go to Settings → Secrets → Actions
- Click on the secret → "Update"

---

## 📋 Quick Checklist

- [ ] Got FTP password from SiteGround
- [ ] Added `FTP_HOST` secret to GitHub
- [ ] Added `FTP_USERNAME` secret to GitHub
- [ ] Added `FTP_PASSWORD` secret to GitHub
- [ ] Added `FTP_PORT` secret to GitHub
- [ ] Pushed a test commit
- [ ] Verified workflow runs successfully
- [ ] Checked files on SiteGround

---

**Once you add the secrets, you're all set! Just push to GitHub and it auto-deploys! 🚀**

