# Mailster - Email Newsletter Plugin for WordPress

Contributors: everpress  
Tags: email newsletter, newsletter, newsletter signup, email signup, email marketing  
Requires at least: 4.6  
Tested up to: 6.1  
Stable tag: 3.2.4
License: GPLv2 or later  
Requires PHP: 7.2.5

## Description

### Mailster is an easy to use Email Newsletter Plugin for WordPress. Create, send and track your Newsletter Campaigns without hassle.

#### Send Your Latest Posts, Products, Events or any other post type.

Mailster lets you send all your posts, products, events or other custom post types. Every type can also be used for email automation.

#### Welcome Your New Subscribers.

Set up your welcome series and leave the rest to Mailster.

You sit back and focus on your business while Mailster makes sure your new subscribers feel welcome.

#### Free and Premium Templates.

Mailster offers you a choice of more than 400 free and premium designs.

Create stunning and engaging campaigns in minutes!

#### GDPR Compliance.

When it comes to GDPR compliance, Mailster is your newsletter marketing tool of choice: Mailster fully complies with GDPR requirements.

All your data is stored in your own database and is not transferred or shared with third parties.

#### Grow Without Limits.

With Mailster there’s no limit in subscribers. For a one-time fee you can have as many subscribers as you want.

Go ahead and grow as much as you like!

-   Unlimited Subscribers
-   Unlimited Forms
-   Unlimited Lists

#### Send With Any Email Provider.

Mailster works with any email provider, no matter if you want to use a professional provider or your own server.

#### RSS to Email.

Your subscribers will want to know if there’s new content on a third-party site they follow.

With our RSS-to-email feature, new posts are automatically imported into an email and sent to your subscribers. Just set up your automation campaign and you’re ready to go.

#### Time Zone Based Sending.

You have subscribers all over the world? With Mailster you send your email campaigns based on the time zone of your subscribers.

This way you ensure that your readers receive your emails at the exact times when they are most likely to open them.

#### Know Your Subscribers.

Analyze your subscribers´ data and target your marketing strategy according to their needs.
Mailster collects and uses your subscribers’ data while staying completely within GDPR requirements.

#### Merge Tags.

Merge tags are the key to marketing personalization: They are placeholder tags that get replaced with content tailored to your subscribers.

Our merge tags are customizable, extendable and easy to remember.

#### Create Better Segmentations.

Increase your open rates with targeted campaigns and segmentation. Mailster provides many metrics to choose from so only the right audience gets the right email.

#### Great Campaign Insights.

Track and analyse your campaigns and subscribers: Benefit from real time insights into your campaigns.

Find out about your subscribers’ click rates and open rates, their location, and other activities relevant for your online marketing strategy.

#### Test Your Email Quality Before Sending.

With Mailster you can give your email campaign a thorough pre-check before sending it out.
Mailster gives you feedback on what you should improve.

Fix these issues, send and relax – your campaign will be good.

#### Automation.

Send automatic welcome emails, birthday emails, drip campaigns, follow-ups, auto-responders and more.

Just sit back and let Mailster take care of your email marketing.

#### You Own Your Data.

All your subscribers’ data is stored in your own database.
No third party has access to that data.

#### Dozens of Integrations With Plugins.

We’ve partnered with many popular developers so you can continue using your favorite plugins along with Mailster.

#### Built in Capability Management.

Assign specific rights to the people in your team. This makes it easy to keep full control over who does what.

Let your team support you!

#### Custom Template Language

With Mailster’s simple and straightforward template markup language, coding your own template or adopting existing ones is easy.

#### Developer Friendly

Mailster provides plenty hooks and filters you can use to increase its functionality and options.

Just go ahead and adapt Mailster to your unique needs.

#### Features

-   Capture subscribers on your website or blog.
-   Send your latest posts/products/custom post types.
-   Welcome Emails.
-   Birthday Campaigns.
-   Follow up/Drip Campaigns.
-   400 free and premium templates.
-   RSS email campaigns.
-   Built in email campaign precheck.
-   Integration with your favorite plugins.
-   Import your existing data with ease.
-   Available in over 15 languages.
-   GDPR Compliance.
-   Send with any email provider.
-   Time zone based delivery.
-   Merge Tags.
-   Advanced Segmentation.
-   Newsletter Campaign Insights.
-   Auto Responders and email marketing automation.
-   Full Data Control.
-   Reports.
-   Public archive of your latest newsletters.
-   Capability management.
-   Developer friendly.

## Templates

### Free and Premium Templates

Mailster supports over 400 templates from various authors. Please visit our website to browse them all.

**[Templates →](https://mailster.co/templates/)**

## Add Ons

### Add Ons

Extend the functionality of Mailster or your site with these add ons.

**[Add ons →](https://mailster.co/addons/)**

## Support

### We’re Here to Help.

### Knowledge Base

Find help on our knowledge base. With over 300 articles, tips and troubleshoot guides you can quickly find answers to the most common problems.

**[Visit Knowledge Base →](https://kb.mailster.co/)**

### Members Area

We provide all of our official support via the member area. Please login or register if you have not done so yet for access so that you can post your question there.

**[Login →](https://mailster.co/login/)** | **[Register →](https://mailster.co/register/)**

### Hire an expert

Get professional development help from our expert support partner _Codeable_ for consultations, customisations and small to medium sized projects.

**[Get a Quote →](https://codeable.io/?ref=zATDD)**

## Changelog

### Changelog

### 3.2.4

-   Do not show form occurrences from auto draft posts
-   allow selection private post in the static editbar
-   implemented feed item date checks
-   improved handling of images in RSS feeds
-   added new status upgrade status code
-   remove any tinyMCE attributes from the content on campaign save
-   use vanilla methods to change target on frontpage

### 3.2.3

-   fixed: E_ERROR on Geo location class in PHP 8.1
-   added enhancement issue template
-   check if option from queue has template element
-   fixed: footer branding
-   fixed: Uncaught TypeError: in notifications.class.php
-   standardize outgoing URLs
-   tested up to 6.1

### 3.2.2

-   added: native Advanced Custom Fields support.
-   fixed: import of WordPress roles wasn't working in some cases.
-   fixed: force hard reload on cron page if opened in browser.
-   improved: handling of thickbox modal if other plugins interfere.
-   added: `X-Redirect-By` header on all Mailster related redirects.
-   added: set the global post inside the template editor.

### 3.2.1

-   fixed: issue where taxonomies in campaigns are not stored correctly.
-   improved: `{unsub}` and `{profile}` tags can now be used in confirmation messages.
-   added: message for block form plugin
-   support for [Local Google Fonts](https://wordpress.org/plugins/local-google-fonts/)
-   new filter: `mailster_do_placeholder` which filters the replaced content
-   fixed: Jetpack no longer includes sharing button in content or excerpt
-   fixed: some error notices on PHP 8.1

### 3.2.0

-   fixed: querying subscribers do no longer return subscribers with status deleted.
-   fixed: adding an already deleted subscriber working as expected.
-   fixed: wrong timestamp on signups if subscriber exists.
-   improved: support for multiple campaigns triggered by action hooks.
-   improved: removed skeleton loader on foreign columns in overview.
-   improved: action hook campaigns support now multiple hooks, separated with a comma.
-   improved: database updates now run in the background (optional).
-   improved: taxonomies dropdown now uses select2 library to better handle large taxonomy entries.
-   new defaults strings form confirmation message.
-   confirmation page on newsletter homepage now wrapped with `wpautop`.
-   new filters: `mailster_editor_tags` and `mailster_notification_content`.

### 3.1.6

-   added: option to change tracking of campaigns once the campaign has been finished.
-   improved: list counts are loaded now asynchronously to improve page load time.
-   improved: embedded images are now found outside the upload folder.
-   settings with "token" in the key are now hidden in the test email.

### 3.1.5

-   new: growth rates on campaign overview.
-   opens, clicks, unsubscribes and bounces are now sortable.
-   minimum required PHP version is now 7.2.5.
-   reduced size of vendor folder.

### 3.1.4.1

-   fixed: issue with WooCommerce 6.5.1 and third party library.

### 3.1.4

-   new: forms on frontend no longer requires jQuery.
-   fixed: using single quotes in tags causes problems.
-   fixed: PHP warning on PHP 8.1.
-   improved: better handling of translations on plugin activation.

### 3.1.3

-   fixed: default placeholder tags where not replaced on system mails.
-   fixed: security vulnerability where a logged in user can discover the profile URL from a different user. (discovered by D.Jong from patchstack.com).
-   improved: ajax operations are now checked against capabilities.
-   improved: updated "Preheader text hack" from Litmus.

### 3.1.2

-   fixed: CSS for WP 5.9.
-   fixed: small typo in variable.
-   fixed: compatibility for PHP 5.6+.

### 3.1.1

-   fixed: time specific auto responders sent only on Sundays causes sending the following to be way in the future.
-   fixed: type in test bounce message.
-   fixed: typo in subscriber query causes database error.
-   fixed: PHP warning of undefined variable in option bar.
-   added: unsubscribe link to in mail app unsubscribe message.
-   added: filter `mailster_campaign_meta_defaults` to filter default meta values.
-   added: defined `wp_mail` filters are now applied if used with Mailster.

### 3.1

-   new: Remove inactive Subscribers automatically.
-   new: Relative conditions for date fields.
-   new: filters in the subscriber overview.
-   updated: Manage Subscribers page.
-   fixed: add trailing space to preheaders to prevent unintentional line breaks in previews.

### 3.0.4

-   fixed: saving template from editor messed up template header.
-   fixed: bulk deletion with actions working again.
-   fixed: auto responder no longer triggered if post is published in the past.
-   fixed: shortcodes are now handled properly on the web version.
-   added: text strings for error messages defined by the security settings page.
-   improved: ajax handler.

### 3.0.3

-   fixed: timeframe settings spanning over midnight.
-   fixed: layout issue on form/lists overview on smaller screens.
-   fixed: missing dbstructure method on queue process.
-   added: option to block and allow people from certain countries to signup.
-   update: using `get_user_local()` instead of `get_locale()` when applicable.

### 3.0.2

-   fixed: bulk options causes a subscriber query error.
-   fixed: duplicating forms throw an error.
-   fixed: some notifications missed template defined settings.
-   change: optional warmup has been extended to 60 days.
-   improved: database errors during cron tried to get fixed automatically.
-   added: reminder to enable auto updates after a Mailster update.

### 3.0.1

-   added: editing templates on the templates page is back.
-   fixed: mergetags now work correctly in image URL field if fallback is present.
-   fixed: draft campaigns can now get duplicated.
-   fixed: install plugins on addon page is working.
-   fixed: problem if PHPMailer is loaded in another plugin.
-   fixed: installed templates were not access able when no required Mailster version was set.
-   improved upgrade process from 2.4.x.
-   smaller bug fixes.

### 3.0

-   new: Test the Email Quality with the built in Pre-check Feature.
-   new: Tag you subscriber with Tags fro better segmentation.
-   new: Improved security with a dedicate security settings page.
-   new: Automatic batch size settings to calculate your optimal sending rate.
-   new: Option to create new campaigns on action hook based auto responders.
-   new: Updated add ons page to browse and install even more integrations.
-   new: Updated templates page now lists over 400 free and premium templates.
-   new: UI update with new icons based on SVG.
-   new: Auto click prevention to prevent bots auto clicking and messing up your stats.
-   new: Sending warmup if you send from a new IP address or domain.
-   improved: db handling by splitting the actions table into five separate ones.
-   improved: added primary keys to these tables: queue, subscriber_meta, subscriber_fields.
-   improved: calculation of user rating has been offloaded as it's often server intense.
-   improved: changes to tracking for the Apple Privacy Protection plans.
-   improved: change on the random handler for random posts.
-   added: new dynamic tag for button labels `{post_button:-1}`.
-   added: indexes to campaigns to distinguish if multiple ones are sent (like birthday greetings).
-   removed: auto update option to prefer native solution.
-   removed: deprecated `mymail` hooks and filters.

**For further details please visit our change log page.**

**[Mailster Homepage →](https://mailster.co/changelog/)**
