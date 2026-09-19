<?php
/**
 * Front page template.
 */

get_header();
?>

<main class="tt-main">
  <div class="tt-container">
    <section class="tt-hero" id="overview">
      <div class="tt-hero__content">
        <p class="tt-eyebrow">Automotive Diagnostic Intelligence</p>

        <h1 class="tt-title">
          Vehicle health,
          <span>clearly traced.</span>
        </h1>

        <p class="tt-lead">
          TorqTrace is a WordPress dashboard concept for tracking vehicle health,
          diagnostic alerts, fault codes and maintenance signals in one clear
          technician-friendly interface.
        </p>

        <div class="tt-hero__actions">
          <a href="#diagnostics" class="tt-button">View Diagnostics</a>
          <a href="#faults" class="tt-button tt-button--ghost">Review Faults</a>
        </div>
      </div>

      <div class="tt-dashboard-preview" aria-label="Dashboard preview">
        <div class="tt-preview-top">
          <div>
            <strong>Fleet Health Overview</strong>
            <span>Live diagnostic concept dashboard</span>
          </div>

          <div class="tt-health-ring">
            <span>82%</span>
          </div>
        </div>

        <div class="tt-preview-grid">
          <article class="tt-vehicle-card">
            <div class="tt-vehicle-card__image" aria-hidden="true">
              <div class="tt-car"></div>
            </div>

            <p class="tt-card-label">Selected Vehicle</p>
            <h2 class="tt-card-title">2020 Hatchback · VX-204</h2>
          </article>

          <article class="tt-chart-card">
            <p class="tt-card-label">Diagnostic Signal</p>
            <h2 class="tt-card-title">System stability trend</h2>

            <div class="tt-chart" aria-hidden="true">
              <span style="height: 42%"></span>
              <span style="height: 56%"></span>
              <span style="height: 48%"></span>
              <span style="height: 72%"></span>
              <span style="height: 61%"></span>
              <span style="height: 84%"></span>
            </div>
          </article>
        </div>
      </div>
    </section>

    <section class="tt-metrics" aria-label="Diagnostic metrics">
      <article class="tt-metric">
        <span>Vehicles tracked</span>
        <strong>24</strong>
        <small>Across active test fleet</small>
      </article>

      <article class="tt-metric">
        <span>Open alerts</span>
        <strong>8</strong>
        <small>3 require inspection</small>
      </article>

      <article class="tt-metric">
        <span>Critical faults</span>
        <strong>2</strong>
        <small>Engine and braking systems</small>
      </article>

      <article class="tt-metric">
        <span>Avg health</span>
        <strong>82%</strong>
        <small>Improved 6% this week</small>
      </article>
    </section>

    <section class="tt-grid" id="diagnostics">
      <div class="tt-panel" id="faults">
        <div class="tt-panel__header">
          <div>
            <h2>Recent diagnostic events</h2>
            <p>Prioritised vehicle signals, active fault codes and technician notes.</p>
          </div>

          <span class="tt-pill">Live concept</span>
        </div>

        <div class="tt-table-wrap">
          <table class="tt-table">
            <thead>
              <tr>
                <th>Vehicle</th>
                <th>System</th>
                <th>Code</th>
                <th>Status</th>
                <th>Last Seen</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>VX-204</td>
                <td>Engine control</td>
                <td>P0301</td>
                <td><span class="tt-status tt-status--critical">Critical</span></td>
                <td>12 min ago</td>
              </tr>

              <tr>
                <td>EV-118</td>
                <td>Battery management</td>
                <td>B1412</td>
                <td><span class="tt-status tt-status--warning">Review</span></td>
                <td>28 min ago</td>
              </tr>

              <tr>
                <td>VX-091</td>
                <td>Brake assist</td>
                <td>C0040</td>
                <td><span class="tt-status tt-status--critical">Critical</span></td>
                <td>43 min ago</td>
              </tr>

              <tr>
                <td>HY-332</td>
                <td>Tyre pressure</td>
                <td>TP-LOW</td>
                <td><span class="tt-status tt-status--warning">Monitor</span></td>
                <td>1 hr ago</td>
              </tr>

              <tr>
                <td>EV-219</td>
                <td>Charging</td>
                <td>OK</td>
                <td><span class="tt-status tt-status--healthy">Healthy</span></td>
                <td>2 hrs ago</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <aside class="tt-side-stack" id="maintenance">
        <section class="tt-panel">
          <div class="tt-panel__header">
            <div>
              <h2>Inspection queue</h2>
              <p>Suggested next checks for the technician workflow.</p>
            </div>
          </div>

          <ul class="tt-alert-list">
            <li class="tt-alert">
              <strong>Engine misfire investigation</strong>
              <p>VX-204 has repeated P0301 events. Inspect ignition coil, spark plug and compression data.</p>
            </li>

            <li class="tt-alert">
              <strong>Brake sensor verification</strong>
              <p>VX-091 reported C0040. Check wheel speed sensor and wiring continuity.</p>
            </li>

            <li class="tt-alert">
              <strong>Battery thermal review</strong>
              <p>EV-118 reported battery-management variance during rapid charging session.</p>
            </li>
          </ul>
        </section>

        <section class="tt-panel">
          <div class="tt-panel__header">
            <div>
              <h2>Maintenance signals</h2>
              <p>Upcoming work based on diagnostic history and service intervals.</p>
            </div>
          </div>

          <ul class="tt-alert-list">
            <li class="tt-alert">
              <strong>Service due soon</strong>
              <p>6 vehicles approaching scheduled maintenance within 500 miles.</p>
            </li>

            <li class="tt-alert">
              <strong>Tyre pressure variance</strong>
              <p>3 vehicles have recurring pressure changes across morning checks.</p>
            </li>
          </ul>
        </section>
      </aside>
    </section>
  </div>
</main>

<?php
get_footer();