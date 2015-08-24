# Twig LinkHelpers for [Craft CMS](http://buildwithcraft.com/)

Add a series of Twig filters and functions for CraftCMS to add link helpers for URLs and emails.

## Installation
1. Move the `linkhelpers` directory into your `craft/plugins` directory.
2. Run `composer install` from the `linkhelpers` directory to install dependencies (see [Getting Started with Composer](https://getcomposer.org/doc/00-intro.md) if you don't have composer installed)
3. Go to Settings &gt; Plugins from your Craft control panel and enable the `linkHelpers` plugin

## Usage
This plugin adds several Twig filters and several Twig functions.

### Filters
#### Auto-link emails
Searches a string of text for email addresses and turns them into links.

```twig
{{ contentString | auto_link_emails }}
```
Or: 
```twig
{% filter auto_link_emails %}
    <p>Content here with an email address like email@email.com.</p>
{% endfilter}
```

Outputs:
```html
<p>Content here with an email address like <a href="mailto:email@email.com">email@email.com</a>.</p>
```

#### Auto-link URLs
Searches a string of text for URLs and turns into links.

```twig
{{ contentString | auto_link_urls }}
```
Or: 
```twig
{% filter auto_link_emails %}
    <p>Content here with a URL like http://www.site.com/</p>
{% endfilter}
```

Outputs:
```html
<p>Content here with a URL like <a href="http://www.site.com/">http://www.site.com/</a></p>
```

#### Auto-link both emails and URLs
Searches a string of text for URLs and turns into links.

```twig
{{ contentString | auto_link }}
```
Or: 
```twig
{% filter auto_link %}
    <p>Content here with a URL like http://www.site.com/ and an email address like email@email.com</p>
{% endfilter}
```

Outputs:
```html
<p>Content here with a URL like <a href="http://www.site.com/">http://www.site.com/</a> and an email address like <a href="mailto:email@email.com">email@email.com</a></p>
```

### Functions
#### Make a link to an email address
```twig
{{ linkEmail('email@email.com') }}
```

Outputs:

```html
<a href="mailto:email@email.com">email@email.com</a>
```

#### Make a link to a URL
```twig
{{ linkUrl('http://www.site.com/') }}
```

Outputs:

```html
<a href="http://www.site.com/">http://www.site.com/</a>
```