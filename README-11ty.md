# PVCOUTLET.GR – 11ty + Cloudflare Pages

Static site built with [Eleventy (11ty)](https://www.11ty.dev/). Deploy the `_site` folder to **Cloudflare Pages** for global CDN, HTTPS, and fast loads.

## Local build

```bash
npm install
npm run build
```

Output: `_site/`

Local preview:

```bash
npm run serve
```

## Deploy with GitHub (push = auto deploy)

### 1. Create the repo and push

From the project folder (where `package.json` and `src/` live):

```bash
git init
git add .
git commit -m "Initial 11ty site for pvcoutlet.gr"
```

Create a **new repository** on [GitHub](https://github.com/new) (e.g. `pvcoutlet.gr` or `pvcoutlet-website`). Do **not** add a README or .gitignore there (you already have them). Then:

```bash
git remote add origin https://github.com/mikemorakis/pvcoutlet.gr.git
git branch -M main
git push -u origin main
```

(If you used a different repo name on GitHub, change `pvcoutlet.gr` in the URL above.)

### 2. Connect Cloudflare Pages to GitHub

1. Go to [Cloudflare Dashboard](https://dash.cloudflare.com) → **Workers & Pages** → **Create** → **Pages** → **Connect to Git**.
2. Choose **GitHub** and authorize Cloudflare. Select the repo you just pushed.
3. **Build configuration:**
   - **Framework preset:** None
   - **Build command:** `npm run build`
   - **Build output directory:** `_site`
   - **Root directory:** (leave empty)
4. **Environment variables** (optional): under **Settings** → **Environment variables**, set **NODE_VERSION** = `20` (or `18`) for the build.
5. Click **Save and Deploy**. Cloudflare will run `npm install` and `npm run build`, then deploy the contents of `_site`.

### 3. Custom domain

After the first deploy: **Custom domains** → Add `pvcoutlet.gr` (and `www.pvcoutlet.gr` if you use it). Cloudflare will show the DNS records to add at your domain registrar.

---

### Making changes in the future

1. Edit files (e.g. in `src/`, or `img/`, `style.css`).
2. Build locally to check: `npm run build` then `npm run serve`.
3. Push to GitHub:
   ```bash
   git add .
   git commit -m "Update content / fix link / etc."
   git push
   ```
4. Cloudflare Pages will rebuild and deploy automatically. The site updates in 1–2 minutes.

## SEO (already configured)

- **One H1 per page** – keyword-focused (κουφώματα pvc, παράθυρα pvc, μπαλκονόπορτες pvc, κ.ά.)
- **Unique title & meta description** per page (front matter in `src/**/*.njk`)
- **Canonical URL** on every page
- **Open Graph** for social sharing
- **JSON-LD** on homepage: LocalBusiness + FAQPage (schema.org)
- **Sitemap:** `https://pvcoutlet.gr/sitemap.xml` (generated at build)
- **robots.txt** points to sitemap (file at project root, copied to `_site`)

## Project structure

- `src/` – 11ty input (templates, pages, includes, data)
- `src/_includes/` – layout (base.njk), nav, footer, hero, home-content
- `src/_data/` – site.json, nav.json, faq.json
- `img/`, `fonts/`, `style.css`, `phone.svg` – at project root, passthrough to `_site`
- `_site/` – build output (do not edit; deploy this to Cloudflare)

## URLs (clean, same as before)

| Page        | URL                    |
|------------|-------------------------|
| Home       | `/`                     |
| Παράθυρα   | `/pvc-parathira/`       |
| Μπαλκονόπορτες | `/pvc-balkonoportes/` |
| Ρολά       | `/pvc-rola/`            |
| Πατζούρια  | `/pvc-patzouria/`       |
| Σίτες      | `/sites/`               |
| Επικοινωνία | `/epikoinonia/`        |
| 404        | `/404.html`             |
| Sitemap    | `/sitemap.xml`          |
| Οδηγός επιλογής κουφωμάτων | `/odigos-koufomata-pvc/` |

## SEO / Schema

The site outputs **WebPage**, **BreadcrumbList**, **LocalBusiness**, **Organization**, **Product/Offer** (on category pages), **FAQPage** (home), **HowTo** (guide page), and **Speakable**. To show **review stars** (AggregateRating) when you have real reviews, add to `src/_data/site.json`:

```json
"aggregateRating": {
  "ratingValue": "4.8",
  "reviewCount": "127",
  "bestRating": "5",
  "worstRating": "1"
}
```

**dateModified** in WebPage comes from the template file’s last-modified date (or front matter `dateModified` if set).

## Switching from PHP to 11ty

When you are ready to go live with this version:

1. Deploy `_site` to Cloudflare Pages and connect pvcoutlet.gr.
2. (Optional) Keep the old PHP site on your current host until you confirm the new site and redirects.
3. In Cloudflare, set 404 to “Custom 404 page” and use `/404.html` if needed.

No PHP or server runtime on Cloudflare – only static HTML, CSS, and assets.
