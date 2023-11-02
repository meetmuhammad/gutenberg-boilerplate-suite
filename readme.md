## Custom Blocks for Gutenberg: A Modern Developer's Starter Kit [Revised]

Embark on your journey into developing custom **Gutenberg Blocks** with our refined developer's starter kit. Unlike **@wordpress/create-block**, our kit leverages **@wordpress/scripts** for a more efficient and nuanced development experience, offering key distinctions in functionality and structure.

[![GPLv2 or Later License](https://img.shields.io/badge/License-GPL%20v3-yellow.svg)](https://opensource.org/licenses/)

## Comparing Our Kit with @wordpress/create-block

Wondering why to opt for this toolkit over @wordpress/create-block, given the similarities in their underlying dependencies? Here’s the rationale:

-   **Key Advantage:** The @wordpress/create-block toolkit is designed for crafting a single block per plugin. If your project entails creating several blocks within one plugin, our starter kit is your go-to resource. It’s engineered for facilitating **Multiple Blocks in a Single Plugin**.
-   **Organization Plus:** We've structured the files in our Gutenberg Boilerplate more methodically compared to @wordpress/create-block.

## Kickstarting Development

**First, clone the repository in your WordPress plugin directory. Then, activate the plugin.**

This kit initiates a new plugin featuring a basic custom Gutenberg block and a custom block category. The sample block is titled **Bootstrap Block**, nestled under the **BOILERPLATE** category.

To begin, navigate to the kit's folder (feel free to rename it as needed) and execute the command below to install npm:

```
$ npm install
```

This command will install all necessary node_modules, setting the stage for you to dive into custom block creation. For real-time editing and feedback, use:

```
$ npm start
```

When you're ready to roll out your project, compile your development with:

```
$ npm run build
```

## Adding New Blocks to Your Plugin

Follow these guidelines to include new blocks in your plugin:

1. **New Folder:** Under the **src/blocks** directory, create a new folder for your block. E.g., for a **box** block, create a folder named **box** at **src/blocks/box**.
2. **Block Files:** Store all required block files within this new folder.
3. **Index Inclusion:** In the main **src/index.js**, import your block's **index.js** file. The pattern should resemble: **import './blocks/box/index';**
4. **Block Registration:** In the main plugin PHP file (modifiable but defaults to **plugin.php** in our kit), locate the block registration function (default **kit_register_block()**). Add your new block's name to the **blocksList** array.

**NOTE**: *Using a unique prefix for your blocks is advisable. In our case, we used the prefix **kit** and **KIT***.

## Best Practices for Development

Start with **npm run build** for initial block registration, then proceed with **npm start** for ongoing edits and improvements.

### Resources & Credits

-   [Gutenberg Developer Handbook](https://developer.wordpress.org/block-editor/)
-   [Block Plugin Checker](https://wordpress.org/plugins/developers/block-plugin-validator/)
-   [WordPress Components](https://wordpress.github.io/gutenberg/)

### Creators

This plugin is crafted by Ammar Ilyas - [@meetmuhammad](https://github.com/meetmuhammad)

### 🚀 About the Developer
Ammar, with 10 years of expertise in React and WordPress, is the creative force behind this project. His depth of knowledge and experience in these technologies shapes the quality and innovation of his work.

## Feedback

If you have any feedback, please reach out to us at ammar@devnetix.io or wp.ammar@gmail.com