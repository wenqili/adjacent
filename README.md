# Adjacent
### Brief
[ADJACENT](https://itp.nyu.edu/adjacent/) is an online journal of emerging media published by the Interactive Telecommunications Program, or ITP.

This repo is for the Web Dev Team and illustration authurs to collaborate together on site and interactive visuals development.

### Web Editor Style Guideline - Ver 0.1.0
1. Use Gutenberg Editor to upload and style typography.
2. Adjacent Field at the end of the Web Editor need to be filled. 
3. Choose Catagory: Articles
4. Semantic HTML:
    - H1 for Article Title
    - H2 for Author Name
    - H3, subject
    - H4, subcategory of subject
    - H5, H6 are currently reserved, please try to avoid using them
    - "Citation block" is reserved. Use "Pull quote" block instead.
    - Bold type, Italic type and in-line link are only allowed in paragraphs.
5. Custom style in Gutenbuerg:
    - Open settings(the small gear icon on top right corner), Block / Advanced / Addtional CSS class, add the helper classes
    - Helper classes:   
    ```scss
    /// the same font with headings   
    .primary-font
    
    /// force to be uppercase 
    .uppercase  
    
    /// sharp edge outline button 
    .is-primary-button   
    ```
6. A11y(Web Accessibile):
    - All the blanks properly when uploading images
    - No plugins, all plugins must be tested first by the web dev team
