# Adjacent
## Brief
[ADJACENT](https://itp.nyu.edu/adjacent/) is an online journal of emerging media published by the Interactive Telecommunications Program, or ITP.

This repo is for the Web Dev Team, Editors,and authors to collaborate together on site and visuals development.

## Table of Content
[Web Editor Style Guideline v1.0.0](#Web-Editor-Style-Guideline-v1.0.0)

[Interactive Illustration Guideline v0.1.0](#Interactive-Illustration-Guideline-v0.1.0)

[Web Accessibility Checklist v0.1.0](#Web-Accessibility-Checklist-v0.1.0)

[Credits](#Credits)

## Web Editor Style Guideline v1.0.0
1. Use Wordpress Gutenberg Editor to upload articles and style typography.

2. Adjacent Field at the end of Gutenberg Editor need to be filled.

3. Category:
    - Articles: posts in this category will be shown in both **Table of content** and **Home page**.
    - Hidden: posts in this category will hide from both **Table of content** and **Home page**, and can only access through URL and search.

4. Semantic Blocks (HTML):
    - **Article Title**: Heading block(H1)
    - **Authors**: Heading block(H2)
    - **Subject**: Heading block(H3)
    - **subcategory of subject**: Heading block(H4)
    - **H5, H6** of heading block are currently reserved, please try to avoid using them
    - **Citation**: Citation block
    - **Pull quote**: Pull quote block
    - **paragraphs**: Paragraph block. Bold, Italic style, and in-line links are allowed

5. Special Typography:
    - **Illustration author**: Heading block(H2) + Advanced/Additional CSS Class: *is-illustration-author*
    - **Article Header/Cover**: Cover block. Please set *Opacity* option to 0, if image is too dark
    - **Blurb**: Paragraph block + Advanced/Additional CSS Class: *blurb*
    - **Image Embed**: Image block
    - **Video Embed**: Vimeo block or Youtube block + Advanced/Additional CSS Class: *video-margin*
    - **interactive canvas(iframe)**: HTML block + following snippet
        ```HTML
        <div class="c-iframe__container">
            <figure>
                <iframe class="c-iframe__frame" src="path" frameborder="0" allowfullscreen><iframe>
            </figure>
        </div>
        ```
        **Note**: Editors need to have Super Admin privileges to embed iframe properly.

6. Advanced/Additional CSS Class in Gutenberg
Open settings(the small gear icon on top right corner), Block -> Advanced -> Additional CSS class, add the helper classes. Helper class list:
    - **primary-font**: the same font with headings
    - **uppercase**: force to be uppercase
    - **is-primary-button**: sharp edge outline button
    - **no-margin**: set margin to 0
    - **video-margin**: set margin-right and margin-left to 0
    - **no-padding**: set padding to 0
    - **is-illustration-author**: style illustration author text to thinner font style
    - **blurb**: style blurb text to thinner, bigger, and lighter font style

7. A11y(Web Accessibility):
    - When uploading images, please fill all the fields properly, including title, alt-text and descriptions.
    - No empty links.
    - No plugins, all plugins must be tested first by the web dev team

8. Additional
    - In Post -> Setting -> Document -> Discussion, Un-check "Allow Comments"

## Interactive Illustration Guideline v0.1.0
1. All the interactive illustrations will embed as iframe.
2. CSS Style: works on full screen with no margin and padding.
3. Mobile First: works on mobile, and could detect touch events.
4. Authors will be credited in article author section, and figure descriptions. Please avoid adding credits in sketch.

### Submit
All the interactive illustrations will be hosted by Adjacent for maintaining reason. To submit:

**Option 1**: fork this repo -> put code inside **docs/** folder -> pull request

**Option 2**: Email a Github repo link to wl1502@nyu.edu

Please Include a **README file(.txt or .md)** with following information:
- Credits
- Instructions for interactions
- Browser Access: webcam, microphone, keyboard events, etc.

## Web-Accessibility-Checklist-v0.1.0
In progress..

## Credits
#### Issue 1
#### Issue 2
#### Issue 3
#### Issue 4
#### Issue 5:
Adjacent has sole permission from the designer Michal Sahar to use font *Suez one* & *80KB* in Issue 5.

**Web Editor Empower**
Added [ACF(advancedcustomfields)](https://www.advancedcustomfields.com/)