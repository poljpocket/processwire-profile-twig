# Fruitcake ProcessWire Template w/ Twig

This template is used as a foundation for projects using ProcessWire with a Twig frontend.

## Installation

Grab a copy of the latest ProcessWire. Copy or upload the `/site-twig/` directory and everything in it to the root of your ProcessWire files. This is the same directory that ProcessWire's `index.php` and `/site-default/` directories live. So you'll have a `/site-twig/` alongside ProcessWire's `/site-default/` and any other profiles it comes with.

Load the URL to your ProcessWire installation in your browser to initiate the installer. Select the "Fruitcake Twig Boilerplate" from the dropdown when prompted to do so. The installer will take care of the rest.

After the installer is finished, the profile is installed in the `site` folder. The last step is to install dependencies (like Twig itself) by running `composer install` on the server. The Node.js dependencies are only used for development to build styles and scripts.

For local development, download the contents of the `site` folder. Then run `composer install` and `npm install`. A suitable `.gitignore` for Git is also already present. For auto-upload, make sure to exclude the `node_modules` and `vendor` folders.
