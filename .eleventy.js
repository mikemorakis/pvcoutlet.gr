module.exports = function (eleventyConfig) {
  // Passthrough: assets at project root → _site
  eleventyConfig.addPassthroughCopy("img");
  eleventyConfig.addPassthroughCopy("fonts");
  eleventyConfig.addPassthroughCopy("style.css");
  eleventyConfig.addPassthroughCopy("phone.svg");
  eleventyConfig.addPassthroughCopy("google7b9bbc357455917d.html");
  eleventyConfig.addPassthroughCopy("robots.txt");

  // Canonical and sitemap exclude 404
  eleventyConfig.addGlobalData("base", "https://pvcoutlet.gr");

  return {
    dir: { input: "src", output: "_site", includes: "_includes", data: "_data" },
    pathPrefix: "/",
    htmlTemplateEngine: "njk",
    markdownTemplateEngine: "njk",
  };
};
