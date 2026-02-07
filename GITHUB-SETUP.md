# Push to GitHub (mikemorakis)

Everything is staged and ready. Do these steps in order.

## 1. Create the repo on GitHub

1. Open **https://github.com/new**
2. **Repository name:** `pvcoutlet.gr` (or another name you prefer)
3. **Public**
4. Do **not** check "Add a README" or ".gitignore" or "License"
5. Click **Create repository**

## 2. Commit (if not already done)

If you get an error like `unknown option 'trailer'`, your Git has a hook that conflicts. Use:

```powershell
cd C:\Users\micha\Desktop\websites\pvcoutlet.gr
git commit --no-verify -m "Initial 11ty site for pvcoutlet.gr"
```

Otherwise:

```powershell
git commit -m "Initial 11ty site for pvcoutlet.gr"
```

## 3. Add remote and push

Use the repo name you chose in step 1 (e.g. `pvcoutlet.gr`):

```powershell
git remote add origin https://github.com/mikemorakis/pvcoutlet.gr.git
git branch -M main
git push -u origin main
```

If you used a different repo name, replace `pvcoutlet.gr` in the URL with that name.

## 4. Connect Cloudflare Pages

1. **https://dash.cloudflare.com** → Workers & Pages → Create → Pages → **Connect to Git**
2. Choose **GitHub** → authorize → select **mikemorakis/pvcoutlet.gr**
3. **Build command:** `npm run build`  
   **Build output directory:** `_site`  
   **Root directory:** (leave empty)
4. Deploy. Then add your domain under **Custom domains**.

---

**Done.** After this, any time you run `git add .` → `git commit -m "..."` → `git push`, Cloudflare will rebuild and deploy automatically.
