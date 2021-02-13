module.exports = function(eleventyConfig){
  
  eleventyConfig.addPassthroughCopy("assets");
  
  return{
    // https://www.11ty.dev/docs/filters/url/ - use this for github pages or similiar
    // pathPrefix: "/subdirectory-on-domain/",
    passthroughFileCopy: true,
    markdownTemplateEngine: "njk",
    // https://piccalil.li/course/learn-eleventy-from-scratch/lesson/3/
    htmlTemplateEngine: 'njk',
    templateFormats: ["html","njk","md"],
    dir: {
      input:"src",
      output:"dist",
      include:"includes"
    }
  }
}