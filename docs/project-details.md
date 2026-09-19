# Project Details

This document contains additional technical notes for TorqTrace.

TorqTrace v1.0.0 is a WordPress frontend dashboard concept for an automotive diagnostic interface. It presents a technician-focused dashboard for vehicle health monitoring, diagnostic metrics, recent fault codes, inspection priorities, and maintenance signals.

## Architecture

```text
WordPress Theme
        ↓
front-page.php Dashboard Template
        ↓
Static Diagnostic UI Sections
        ↓
Responsive CSS Styling
```

## Active Version

The active project version is:

```text
v1.0.0 — WordPress Dashboard Concept
```

The previous React / TypeScript / Vite version has been archived in:

```text
archive/vite-version/
```

That version remains available for reference, but the current release focuses on the WordPress dashboard theme.

## Theme Structure

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

## Theme Responsibilities

The WordPress theme handles:

- Site header and navigation
- Custom dashboard-style front page
- Vehicle health overview
- Diagnostic metrics
- Dashboard preview cards
- Recent diagnostic event table
- Fault code status badges
- Inspection queue cards
- Maintenance signal cards
- Responsive desktop, tablet, and mobile layouts

## Main Template

The main dashboard interface is built in:

```text
wordpress/torqtrace-theme/front-page.php
```

This file contains the static dashboard concept and is designed to render as the homepage in WordPress.

## Styling

The full responsive styling is handled in:

```text
wordpress/torqtrace-theme/style.css
```

The stylesheet includes:

- WordPress theme metadata
- CSS variables
- Dark dashboard colour system
- Header and navigation styles
- Hero/dashboard preview layout
- Metric cards
- Diagnostic table
- Alert and maintenance cards
- Tablet layout rules
- Mobile layout rules
- Large desktop polish

## Diagnostic Data

TorqTrace v1.0.0 uses static dashboard content.

This allows the theme to demonstrate realistic diagnostic UI behaviour without requiring:

- A backend API
- WordPress custom fields
- A database schema
- A real vehicle connection
- CAN bus data
- OBD data
- External telemetry services

## Why I Built This

This project was built to demonstrate:

- WordPress theme structure
- Frontend dashboard UI design
- Automotive diagnostic product thinking
- Responsive layout development
- Technical interface design
- Screenshot-ready portfolio presentation
- Ability to remodel an earlier frontend concept into a cleaner WordPress implementation

The goal was to create a polished diagnostic interface that could later be extended into a more dynamic vehicle monitoring or technician workflow system.

## Known Limitations

- Static frontend concept
- No backend API
- No WordPress admin-managed dashboard content
- No real diagnostic data
- No persistent alert history
- No technician notes workflow
- No real-time updates
- No tests or CI workflow yet
- Not connected to real vehicle diagnostic systems

## Future Improvements

- WordPress custom fields for editable dashboard content
- Custom post types for vehicles, alerts, or maintenance records
- FastAPI backend
- PostgreSQL alert storage
- Real-time WebSocket updates
- CAN/OBD-style mock data parser
- Alert history timeline
- Technician notes
- Status update workflow
- Tests and GitHub Actions CI
- Deployment/demo packaging