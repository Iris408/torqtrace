# Setup Guide

This document explains how to run TorqTrace locally.

TorqTrace v1.0.0 is a WordPress theme concept, not an active Vite app. The current project should be previewed through a local WordPress environment such as LocalWP.

## Requirements

Recommended local tools:

- LocalWP
- WordPress
- VS Code
- Git
- A modern browser

## Project Location

The active WordPress theme is located at:

```text
wordpress/torqtrace-theme/
```

Theme files:

```text
wordpress/
  torqtrace-theme/
    footer.php
    front-page.php
    functions.php
    header.php
    index.php
    style.css
    theme.json
```

## LocalWP Setup

Create a new local WordPress site in LocalWP.

Suggested site name:

```text
torqtrace
```

Once LocalWP creates the site, the WordPress files will usually be located somewhere similar to:

```text
~/Local Sites/torqtrace/app/public/
```

The WordPress themes directory is:

```text
~/Local Sites/torqtrace/app/public/wp-content/themes/
```

## Add the Theme to WordPress

Copy the theme folder:

```text
wordpress/torqtrace-theme
```

into:

```text
wp-content/themes/
```

The final LocalWP path should look similar to:

```text
~/Local Sites/torqtrace/app/public/wp-content/themes/torqtrace-theme
```

## Optional Symlink Setup

Instead of copying the theme folder, you can symlink it so changes in the repository update immediately in LocalWP.

Example:

```bash
ln -s ~/Developer/torqtrace/wordpress/torqtrace-theme \
  ~/Local\ Sites/torqtrace/app/public/wp-content/themes/torqtrace-theme
```

Adjust the paths if your local folders are different.

## Activate the Theme

In the WordPress admin dashboard:

```text
Appearance → Themes → TorqTrace → Activate
```

Then visit the homepage.

## Homepage Setup

The theme uses:

```text
front-page.php
```

as the main dashboard layout.

If needed, create a page called:

```text
Home
```

Then go to:

```text
Settings → Reading
```

Set:

```text
Your homepage displays → A static page
Homepage → Home
```

Save changes.

## Previewing the Site

Use the LocalWP site URL, for example:

```text
http://torqtrace.local
```

For clean screenshots, preview the site in a private/incognito browser window so the WordPress admin bar is hidden.

## Responsive Checks

Recommended viewport checks:

```text
390px mobile
768px tablet
1024px laptop
1440px desktop
```

Check that:

- The hero section is readable
- The dashboard preview fits the viewport
- Metric cards stack correctly
- The fault code table scrolls horizontally on mobile
- Inspection and maintenance cards stay contained
- The footer does not overflow
- Desktop screenshots look balanced

## Archived Vite Version

The earlier React / TypeScript / Vite implementation has been moved to:

```text
archive/vite-version/
```

That version is no longer the active project.

If you need to inspect the old version, use the archived files for reference only.

## Current Active Version

```text
v1.0.0 — WordPress Dashboard Concept
```