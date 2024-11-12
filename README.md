> Note: We've just released a major upgrade to this starter kit with our new [Landtamic Pro](https://github.com/lucky-media/landtamic-pro).

# 🚀 Landtamic
Landtamic is the all-in-one solution for building fast and creative websites with Statamic. With over **100 sets** available, Landtamic enables you to generate countless distinct website layouts that differ from one another. Whether you're developing a refined landing page, a multifaceted blog, a personal website, or a SaaS, you can effortlessly customize your preferred design elements, add your logo, and craft engaging content. Building your website is as easy as sipping your morning coffee.

## What makes Landtamic the ideal choice?
We have put all our efforts to build an **entirely dynamic** Starter Kit, which means you won't need to modify any code. Instead, you can use the user-friendly **control panel** to construct your website and modify its content. Additionally, all sets and design elements have been thoroughly **tested** to ensure they adapt seamlessly to **various screen sizes**. By changing the primary colors, you can create even more combinations to make your website look stunning.

## Features of Landtamic
* More than **100 sets**
* Easy customizable with **Tailwind**
* **Component driven approach**, ready-made antlers components for Buttons, Headings, etc.
* Working page builder to build the entire website from **CP**.
* **Navigation Builder**, easily create navigations with Buttons / Social Media or any other variation.
* **Footer Builder**, easily create a small footer with copyright or add a footer menu complete with logos, dividers etc.
* Working **Contact Form** with all the fields styled ( text, textarea, asset, radio, checkbox etc )
* **SEO** optimized
* **Favicon**'s and Sitemap configuration
* **Taxonomies** for Posts Categories.
* Super **fast** loading time
* **Responsive** images partial.
* [Unicons](https://icon-sets.iconify.design/uil/) used as **Icons**
* Single or Multiple **Authors**
* **Breakpoint debugger** plugin for Tailwind
* Tailwind **Typography** and **Forms**
* **Alpine.js** used for interactions

## Installation
To install Landtamic, simply follow the [Starter Kit installation instructions](https://statamic.dev/starter-kits/installing-a-starter-kit). Note that you will need to be running **Statamic 5.x**.

### Installing into an existing site

    php please starter-kit:install lucky-media/landtamic
    
### Installing via the Statamic CLI Tool
If you have [Statamic’s CLI Tool installed](https://github.com/statamic/cli), you can create a new Statamic installation with the Landtamic Starter Kit in one line:

    statamic new my-site lucky-media/landtamic

## Configuration
We have given our best effort to make **Landtamic** is ready made with everything you need. Simply access the control panel and start making changes. We will make sure that Landtamic runs smoothly with future Statamic updates.

### Content
Once **Landtamic** is installed, you will find that we have preconfigured the landing page and posts to avoid an empty appearance. However, you can effortlessly modify or delete any of our pre-set configurations. The Starter Kit is equipped with two collections - Pages and Posts.

In addition to these collections, we have a plethora of ready-made components available for constructing your website. Each component comes with approximately **5 ~ 7 distinct design variants** to choose from. The following components have been thoughtfully designed:

* Hero Section (7 sets)
* Page Header (5 sets)
* Logo Cloud (7 sets)
* Testimonial (7 sets)
* Stats (7 sets)
* Steps (7 sets)
* Multiple Features (7 sets)
* Single Feature (7 sets)
* Multiple Projects (7 sets)
* Single Project (7 sets)
* Call To Action (7 sets)
* Pricing (5 sets)
* Team Section (5 sets)
* Contact Section (3 sets)
* Header (More than 7 variants possible)
* Footer (More than 10 variants possible)
* Single Post View
* 404 Page ( Can be configured from CP to different variants )
* Standard Text from Tailwind Typography

### Authors
The `Users` blueprint has been customized by default to incorporate additional fields for Authors, such as Position and Biography. When an author is selected for a post, their information will be displayed at the end of the post.

### Icons and Images
In sections where an icon is present, there is an image field that enables you to select an icon. We have included a set of pre-made icons for Landtamic in the `assets/icons` folder for your convenience.

During the demo phase, we incorporated images from [unDraw](https://undraw.co/) and [Freepik](https://www.freepik.com/). If you intend to use these images for production purposes, be sure to provide proper attribution in the Footer.

### Globals
The globals have been categorized into a 'Theme' group, allowing you to customize the content as per your requirements.

#### General
  * Logo Normal - Normal light version of the logo (preferably SVG).
  * Logo Dark - Dark version of the logo (preferably SVG).
  * Logo Mark - Used as a divider or overlay in footers, it is recommended here to upload a short version of the logo ( preferably SVG ).

#### Menu
  * Logo Position - Should the logo be displayed in the left side or center.
  * Menu Position - Select the position of the menu items, right side is default but you can also set it to left or center.
  * Show Links - In this section you can add different links that will be display along the Logo and Menu. The position of these items will depend on the alignment of the logo/menu
     * Button: Select from the default Button that comes with Landtamic, think of these buttons as Login / Signup or CTA Buttons.
     * Image Link: Add an image to act as a Button in the header, common examples links to Apple Store / Play Store, podcasts etc.
     * Social Media: Toggle this to enable social media links in the header.

#### Footer - is completely customized based on the options that you select.
  * Has Menu - If enabled, you will have the option to select a menu for the Footer. We have already included an example menu footer so you can have an idea on how it works.
  * Custom Columns - If you want to add a custom column to the Menu, here you have the ability to have 3 sets:
     * Image - Can be used to upload the brand logo.
     * Text - Can be used as a copyright text or any other disclaimers that you might have.
     * Social Media - Display a list of Social Media links.
  * Logo Overlay: If enabled will display a logo overlay on the footer menu. The logo used here is set on the Global -> Theme -> General -> Logo Mark. You can also adjust the position to left or right side of the footer menu.
  * Footer Copyright - If `has_menu` is disabled you still have the option to include a small footer, suitable for small websites / landing pages. Here you have the following options:
     * Footer Divider - Divider is useful when you have the footer menu enabled and you want to distinguish the small footer with the footer menu. Here you have 3 options: Contained ( inside the container ), Full Width and Logo Divider.
     * Footer Items: A replicator field to add / remove footer items based on your preference. Copyright - To add a copyright text. Image - If you want an image / preferably logo to be displayed in the footer. Menu - Suitable to display a small horizontal menu in the footer for small websites / landing pages. 

#### Favicon
We have generated all the necessary favicon versions for our Landtamic logo, but you are welcome to replace them with your own. Feel free to add your own. The favicon's were generated using [Real Favicon Generator](https://realfavicongenerator.net/). Please note that there is no need to include `site.webmanifest` as it is automatically generated with Statamic.

#### 404 Page - Configure the default settings for the `404` Page:
  * 404 Title - Set the Title
  * 404 Description - Description used under the title.
  * 404 Image - We have included a default image, which can be aligned to either left or right side.
  * 404 Button - Optionally include a button which will send the user to a different page.

#### Sitemap
  * Sitemap collections - Choose which collection should be included in your sitemap (default is set for Pages and Posts).
  * Change Frequency - How often do you want to instruct search engines to crawl?
  * Priority - It lets the search engines know which pages you deem most important for the crawlers.

### SEO
When you edit a page on the control panel, you can see that each page has the SEO section in the entry editor. For SEO we use our own SEO called LuckySEO which you can read about it below this section.

* Meta
  * Title - It can be used to determine the title used on search engine results pages.
  * Title prepend - Prepends to title the text set in General SEO settings.
  * Title append - Appends to title the text set in General SEO settings.
  * Meta Description - It can be used to determine the text used under the title on search engine results pages. If empty, search engines will automatically generate this text.
  * Canonical - By default it will be set to the page url.
* Social
  * Open Graph Title
  * Open Graph Description
  * Twitter Title
  * Twitter Description
  * OG Image - If not set, the general image will be used.

### LuckySEO
By default we use our own LuckySEO which comes together with the kit. You can control your SEO general settings here. Make sure to read the instructions on each input. This settings can be overridden on specific entries/pages as shown on the SEO section above.

* Meta
  * Title - While the title tag doesn’t start with "meta," it is in the header and contains information that's very important to SEO. You should always have a unique title tag on every page that describes the page.
  * Prepend on Title - This will be PREPENDED to all of the titles.
  * Append on Title - This will be APPENDED to all of the titles.
  * Meta Description - It is used for one major purpose: to describe the page to searchers as they read through the SERPs. Can be overridden on pages, if left blank, search engines will generate their own content for this field.
* Social
  * Image - Use your logo or any other branded image for the rest of your pages. 
  * Display Open Graph tags - Open Graph meta tags are snippets of code that control how URLs are displayed when shared on social media.
  * Site name
  * Title - Keep it short to prevent overflow. 40 characters for mobile and 60 for desktop is roughly the sweet spot. Use the raw title.
  * Description - General Description, can be overridden on specific pages. Complement the title to make the snippet as appealing and click-worthy as possible. Copy your meta description here if it makes sense. Keep it short and sweet. Facebook recommends 2–4 sentences, but that often truncates.
  * Display Twitter Tags - Title, Handle and Description

## Styling
The design of Landtamic is done entirely with TailwindCSS. We have added many different colors on the Tailwind Config file and you can change the primary colors to make a different color combination for your website.
* Configuration of TailwindCSS 
  * Edit the config **tailwind.config.js**
  * Font Family - default is sans: Manrope.
  * Colors - primary, secondary, info color names because it makes it easier to apply different colors..

## Fonts
We use [Font Source](https://fontsource.org/) for offline fonts to score better points on Google Lighthouse.
Working with them its easy, just go to their website and search for your desired font, use npm to install it and then include it to the `site.js` file.

More info on the [official documentation of Font Source](https://fontsource.org/docs/introduction).

## Compiling Assets
By default we make use of Vite with [Laravel](https://laravel.com/docs/9.x/vite) to compile all the assets.
Make sure to run the following commands after installing the starter-kit.

* `npm install` - to install all the required dependencies.
* `npm run dev` - to run in development mode.
* `npm run build` - to compile assets for production.

## 🔮 Future Features:
* Video Tutorial
* More color schemes examples
* FAQ Section
* Knowledge Base
* E-Commerce Starter Kit
    * A separate starter kit that installs additional views for e-commerce on top of Landtamic

## Commercial addon
Landtamic is a commercial starter kit - you **must purchase a license** via the [Statamic Marketplace](https://statamic.com/starter-kits/luckymedia/landtamic) to use it in your project.

## 🐞 Bugs and 💡 Feature Requests
Please refer to the issues tab to submit a Bug or a Feature Request.

## Credits
Landtamic was brought to you by the lovely team at [Lucky Media](https://www.luckymedia.dev/). We are a digital agency focused on professional, innovative, user-oriented web design & development. If you have any project in mind, feel free to contact us.

Last but not least thanks to the creators/contributors of the following packages which made Landtamic a reality:

* Statamic CMS
* Tailwind CSS
* Alpine.js
* SEOtamic
