# Project Details

This document contains additional technical notes for Vehicle Diagnostic UI Demo.

## Architecture

```text
React + TypeScript Frontend
        ↓
Mock Vehicle Diagnostic Data
        ↓
Dashboard UI Components
```

## Frontend Responsibilities

The frontend handles:

- Vehicle health overview display
- Diagnostic alert list rendering
- Alert severity filtering
- Selected alert detail panel
- Suggested technician action display
- Vehicle module health cards
- Module progress bars
- Recent diagnostic events timeline
- Active alert count excluding resolved alerts
- Responsive dashboard layout

## Diagnostic Data

The project uses mock vehicle diagnostic data.

This allows the dashboard to demonstrate realistic diagnostic UI behaviour without requiring:

- A backend API
- A real vehicle connection
- CAN bus data
- OBD data
- External telemetry services

## Why I Built This

This project was built to demonstrate:

- Frontend engineering
- Dashboard UI design
- Vehicle diagnostic thinking
- Alert triage interface design
- Automotive-adjacent technical product thinking
- React and TypeScript implementation skills

The goal was to create a clean diagnostic interface that could later be extended into a full-stack vehicle monitoring or alert triage system.

## Known Limitations

- Frontend-only MVP
- Uses mock diagnostic data
- No backend API yet
- No persistent alert history
- No technician notes yet
- No real-time updates yet
- No tests or CI workflow yet
- Not connected to real vehicle diagnostic systems

## Future Improvements

- FastAPI backend
- PostgreSQL alert storage
- Real-time WebSocket updates
- C++ diagnostic alert parser
- CAN/OBD-style mock data parser
- Alert history timeline
- Technician notes
- Status update workflow
- Tests and GitHub Actions CI
- Deployment to Vercel