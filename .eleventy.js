const Image = require("@11ty/eleventy-img");

async function pictureShortcode(src, alt, width, height, className = "", loading = "lazy", fetchPriority = "") {
  if (!src || src.startsWith("/img/")) src = src.replace(/^\//, "");
  const path = src.startsWith("img/") ? src : `img/${src}`;
  const ext = path.split(".").pop().toLowerCase();
  const isSvg = ext === "svg";
  if (isSvg) {
    return `<img src="/${path}" alt="${alt || ""}" width="${width || ""}" height="${height || ""}" loading="${loading}" class="${className}">`;
  }
  const maxW = 1920;
  const widths = width ? [Math.min(400, width), width, Math.min(width * 2, maxW)].filter((w, i, a) => a.indexOf(w) === i) : [400, 800];
  const formats = ["avif", "webp", "jpeg"];
  if (ext === "png") formats[2] = "png";
  const sharpOpts = { failOnError: false };
  if (fetchPriority === "high") {
    sharpOpts.webp = { quality: 75 };
    sharpOpts.avif = { quality: 60 };
    sharpOpts.jpeg = { quality: 75 };
  }
  let metadata;
  try {
    metadata = await Image(path, {
      widths,
      formats,
      outputDir: "_site/img/opt",
      urlPath: "/img/opt/",
      sharpOptions: sharpOpts,
    });
  } catch (e) {
    return `<img src="/${path}" alt="${alt || ""}" width="${width || 400}" height="${height || 300}" loading="${loading}" class="${className}">`;
  }
  const w = width || 400;
  const h = height || 300;
  const avif = metadata.avif && metadata.avif.length ? metadata.avif : null;
  const webp = metadata.webp && metadata.webp.length ? metadata.webp : null;
  const fallback = metadata.jpeg && metadata.jpeg.length ? metadata.jpeg : metadata.png || metadata.webp || metadata.avif;
  const fallbackSrc = fallback && fallback[0] ? fallback[0].url : `/${path}`;
  const srcset = (arr) => (arr || []).map((i) => `${i.url} ${i.width}w`).join(", ");
  const fp = fetchPriority === "high" || fetchPriority === "low" ? ` fetchpriority="${fetchPriority}"` : "";
  let html = "<picture>";
  if (avif && avif.length) html += `<source type="image/avif" srcset="${srcset(avif)}" sizes="(max-width: 600px) 100vw, ${w}px">`;
  if (webp && webp.length) html += `<source type="image/webp" srcset="${srcset(webp)}" sizes="(max-width: 600px) 100vw, ${w}px">`;
  html += `<img src="${fallbackSrc}" alt="${(alt || "").replace(/"/g, "&quot;")}" width="${w}" height="${h}" loading="${loading}" decoding="async" class="${className}"${fp}>`;
  html += "</picture>";
  return html;
}

function dateFormat(date) {
  if (!date) return "2025-02-07";
  const d = date instanceof Date ? date : new Date(date);
  return isNaN(d.getTime()) ? "2025-02-07" : d.toISOString().slice(0, 10);
}

module.exports = function (eleventyConfig) {
  eleventyConfig.addNunjucksAsyncShortcode("image", pictureShortcode);
  eleventyConfig.addNunjucksFilter("dateFormat", dateFormat);

  // Passthrough: assets at project root → _site
  eleventyConfig.addPassthroughCopy("img");
  eleventyConfig.addPassthroughCopy("fonts");
  eleventyConfig.addPassthroughCopy("style.css");
  eleventyConfig.addPassthroughCopy("phone.svg");
  eleventyConfig.addPassthroughCopy("google7b9bbc357455917d.html");
  eleventyConfig.addPassthroughCopy("robots.txt");
  eleventyConfig.addPassthroughCopy("_headers");

  eleventyConfig.addGlobalData("base", "https://pvcoutlet.gr");

  return {
    dir: { input: "src", output: "_site", includes: "_includes", data: "_data" },
    pathPrefix: "/",
    htmlTemplateEngine: "njk",
    markdownTemplateEngine: "njk",
  };
};
