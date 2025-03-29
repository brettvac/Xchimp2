# Xchimp2 — Mailchimp User Plugin for Joomla!
 ![Xchimp2 logo](Xchimp2.png)
Xchimp2 makes it simple to connect your Joomla! user registration system to Mailchimp. Once installed and configured, it will automatically subscribe new users to your chosen Mailchimp list. 

## Why Use Xchimp2?
Joomla! 3 had several great free plugins, but many of them stopped working after the API upgrades starting with Joomla! 4. XChimp is one of those free Mailchimp integrations which I updated to work with the new Joomla! plugin API.
Whether you're running a membership site, or an eCommerce store, Xchimp2 helps you automatically sync your users with your Mailchimp mailing lists—no manual exports required!

## Features
- **Effortless Mailchimp Integration** – Seamlessly sync Joomla! users on your site with your Mailchimp lists.
- **Automatic Subscription** – New Joomla! users are added to Mailchimp as soon as they are saved, with option to add tags.
- **Update existing contacts** – Update tags on existing contacts and confirm their subscription via email.
- **Easy Setup** – Just enter your API key, choose from all available Mailchimp lists and assign users accordingly.

## Installation Instructions
1. Install the plugin via Joomla! Extensions Manager.
2. Enable the plugin under `Extensions > Plugins > User - Xchimp2`.
3. Enter your Mailchimp API key in the plugin settings.
4. Select which Mailchimp list new users should be subscribed to.
5. Customize options like **double opt-in** and **list selection**.
6. Save your settings, and you're good to go!

## Versions
### 1.0
Initial commit
### 1.1
Add installation script & fix update server

## Contributions
The original XChimp plugin was developed by **ThemeXpert** as [XChimp](https://www.themexpert.com/joomla-extensions/xchimp). 
Xchimp2 is my attempt to keep Mailchimp integration alive for modern Joomla! sites. 

The plugin uses the [![Drewm Mailchimp API](https://travis-ci.org/drewm/mailchimp-api.svg?branch=master)](https://travis-ci.org/drewm/mailchimp-api)