module.exports = function(eleventyConfig){
  
  eleventyConfig.addPassthroughCopy("assets");
  
  return{
    passthroughFileCopy: true,
    dir: {
      input:"src",
      output:"dist",
      include:"includes"
    }
  }
}