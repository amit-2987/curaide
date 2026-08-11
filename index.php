<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/autoload.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="/favicon.ico">
    <title>Curaide | Healthcare Revenue Cycle Control Plane</title>
    <meta name="description" content="Curaide combines PRAXIS, operational PODs, and Compass within a healthcare RCM control plane to diagnose workflow gaps, coordinate execution, and measure operational outcomes.">
    <link rel="canonical" href="https://www.curaide.ai/" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Curaide" />
    <meta property="og:title" content="Curaide | Healthcare Revenue Cycle Control Plane" />
    <meta property="og:description" content="Curaide combines PRAXIS, operational PODs, and Compass within a healthcare RCM control plane to diagnose workflow gaps, coordinate execution, and measure operational outcomes." />
    <meta property="og:url" content="https://www.curaide.ai/" />
    <meta property="og:image" content="https://www.curaide.ai/assets/curaide-logo-header.png" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Curaide | Healthcare Revenue Cycle Control Plane" />
    <meta name="twitter:description" content="Curaide combines PRAXIS, operational PODs, and Compass within a healthcare RCM control plane to diagnose workflow gaps, coordinate execution, and measure operational outcomes." />
    <meta name="twitter:image" content="https://www.curaide.ai/assets/curaide-logo-header.png" />
    <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/header-assets.php') ?>
</head>
<body>
    <section class="curaide-hero-section">
        <!-- Top Navigation Bar -->
        <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/includes/header.php"; ?>
        <!-- Main Hero Content -->
        <div class="container position-relative z-2 pt-3 pt-md-4 pb-5">
            <div class="row align-items-center g-4">
                <!-- Left Hero Text & Metrics Column -->
                <div class="col-lg-6 col-xl-6">
                    <!-- Pill Badge -->
                    <div class="curaide-hero-pill-badge d-inline-flex align-items-center gap-2 px-3 py-1 mb-3">
                        <span class="curaide-hero-pill-badge__dash"></span>
                        <span class="curaide-hero-pill-badge__text">FLATWORLD AI FOR HEALTHCARE</span>
                    </div>
                    <!-- Headlines -->
                    <h1 class="curaide-hero-heading mb-3">
                        <span class="curaide-hero-heading__sub d-block">Reinventing Healthcare</span>
                        <span class="curaide-hero-heading__main d-block">Reimagining<br />Patient Care.</span>
                    </h1>
                    <!-- Subtitle Description -->
                    <p class="curaide-hero-desc mb-4">
                        The Decision Control Plane for Healthcare Operations. Govern when to act, what to prioritize, and who should execute, across humans, AI, and existing systems.
                    </p>
                    <!-- Action CTA Group -->
                    <div class="d-flex align-items-center gap-3">
                        <!-- Primary Download Button -->
                        <button type="button" class="curaide-btn curaide-btn--primary" data-bs-toggle="modal" data-bs-target="#demoModal">
                            <span class="curaide-btn__icon-left"><i class="fa-solid fa-phone-volume"></i></span>
                            Talk to an Expert
                        </button>
                        <!-- Outline Demo Button -->
                        <button type="button" class="curaide-btn curaide-btn--outline" data-bs-toggle="modal" data-bs-target="#demoModal">
                            Ask for a Demo
                            <span class="curaide-btn__arrow-badge">
                                <i class="bi bi-arrow-right"></i>
                            </span>
                        </button>
                    </div>
                    <!-- Key Metrics Bottom Bar -->
                    <div class="curaide-hero-metrics p-4 mt-5 d-flex justify-content-between align-items-center">
                        <div class="curaide-hero-metric-item pe-2 pe-md-3">
                            <h2 class="curaide-hero-metric-item__value mb-0">10%+</h2>
                            <span class="curaide-hero-metric-item__label">EBITDA lift across enterprise operations</span>
                        </div>
                        <div class="curaide-hero-metric-item px-2 px-md-3 border-start border-secondary-subtle">
                            <h2 class="curaide-hero-metric-item__value mb-0">$6.6M</h2>
                            <span class="curaide-hero-metric-item__label">Leakage identified at a single PE-backed practice</span>
                        </div>
                        <div class="curaide-hero-metric-item px-2 px-md-3 border-start border-secondary-subtle">
                            <h2 class="curaide-hero-metric-item__value mb-0">78%</h2>
                            <span class="curaide-hero-metric-item__label">Manual steps eliminated in RCM workflows</span>
                        </div>
                        <div class="curaide-hero-metric-item ps-2 ps-md-3 border-start border-secondary-subtle">
                            <h2 class="curaide-hero-metric-item__value mb-0">1,000+</h2>
                            <span class="curaide-hero-metric-item__label">Calls automated per day in production</span>
                        </div>
                    </div>
                </div>
                <!-- Right Visual Interactive Feature Map Column -->
                <div class="col-lg-6 col-xl-6 position-relative mt-5 mt-lg-0">
                    <div class="curaide-interactive-map d-flex align-items-center">
                        <!-- Left Central Node & Concentric Rings -->
                        <div class="curaide-hub-node position-relative flex-shrink-0 d-none d-md-block">
                            <img src="/assets/banner-connection.png" alt="Connection" class="banner-connection img-fluid">
                        </div>
                        <!-- 4 Stacked Cards -->
                        <div class="curaide-hero-cards-wrapper d-flex flex-column gap-3 w-100">
                            <!-- Card 1 -->
                            <div class="curaide-hero-card p-3 p-xl-4 d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center gap-4">
                                    <div class="curaide-hero-card__icon flex-shrink-0">
                                        <img src="/assets/icon-diagnosaide.png" alt="DiagnosAIDE" class="img-fluid">
                                    </div>
                                    <div>
                                        <h3 class="curaide-hero-card__title mb-1">DiagnosAIDE</h3>
                                        <p class="curaide-hero-card__desc mb-0">Financial diagnosis at the click of a button</p>
                                    </div>
                                </div>
                                <div class="curaide-hero-card__action flex-shrink-0 ms-2">
                                    <i class="bi bi-arrow-right"></i>
                                </div>
                            </div>
                            <!-- Card 2 (Active/Highlighted State) -->
                            <div class="curaide-hero-card curaide-hero-card--active p-3 p-xl-4 d-flex align-items-center justify-content-between" data-default-active="true">
                                <div class="d-flex align-items-center gap-4">
                                    <div class="curaide-hero-card__icon flex-shrink-0">
                                        <img src="/assets/icon-curaidepods.png" alt="Curaide PODs" class="img-fluid">
                                    </div>
                                    <div>
                                        <h3 class="curaide-hero-card__title mb-1">Curaide PODs</h3>
                                        <p class="curaide-hero-card__desc mb-0">Five targeted treatment PODs for RCM</p>
                                    </div>
                                </div>
                                <div class="curaide-hero-card__action flex-shrink-0 ms-2">
                                    <i class="bi bi-arrow-right"></i>
                                </div>
                            </div>
                            <!-- Card 3 -->
                            <div class="curaide-hero-card p-3 p-xl-4 d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center gap-4">
                                    <div class="curaide-hero-card__icon flex-shrink-0">
                                        <img src="/assets/icon-compass.png" alt="Compass" class="img-fluid">
                                    </div>
                                    <div>
                                        <h3 class="curaide-hero-card__title mb-1">Compass</h3>
                                        <p class="curaide-hero-card__desc mb-0">Readiness assessment and ROI measurement</p>
                                    </div>
                                </div>
                                <div class="curaide-hero-card__action flex-shrink-0 ms-2">
                                    <i class="bi bi-arrow-right"></i>
                                </div>
                            </div>
                            <!-- Card 4 -->
                            <div class="curaide-hero-card p-3 p-xl-4 d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center gap-4">
                                    <div class="curaide-hero-card__icon flex-shrink-0">
                                        <img src="/assets/icon-hipaa-compliance.png" alt="HIPAA Compliant" class="img-fluid">
                                    </div>
                                    <div>
                                        <h3 class="curaide-hero-card__title mb-1">HIPAA Compliant</h3>
                                        <p class="curaide-hero-card__desc mb-0">SOC 2 Type II · End-to-end encrypted</p>
                                    </div>
                                </div>
                                <div class="curaide-hero-card__action flex-shrink-0 ms-2">
                                    <i class="bi bi-arrow-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="core-problem-section py-5">
        <div class="container my-lg-4">
            <!-- Section Header -->
            <div class="text-center mb-5">
                <div class="core-problem-badge d-inline-flex align-items-center gap-2 px-3 py-1 mb-3">
                    <span class="core-problem-badge__dash"></span>
                    <span class="core-problem-badge__text">THE CORE PROBLEM</span>
                </div>
                <h2 class="core-problem-title display-6 text-white mb-3">
                    Healthcare doesn't lack automation.<br class="d-none d-md-block" />
                    It <span class="core-problem-title__highlight">lacks coordinated decisions.</span>
                </h2>
                <p class="core-problem-desc text-white-70 mx-auto mb-0">
                    The core problem across revenue, patient, and clinical operations: tools are abundant, but global operational judgment is not.
                </p>
            </div>
            <!-- Main Card Container -->
            <div class="core-problem-container curaide-fragmentation-card rounded-5 p-4 p-md-4 shadow-lg">
                <div class="row g-4 align-items-stretch">
                    <!-- Left Column: Step-by-Step Vertical List -->
                    <div class="col-lg-6">
                        <div class="core-problem-list-wrapper rounded-4 p-3 p-md-5 h-100 d-flex flex-column justify-content-between">
                            <!-- Timeline Items Stack -->
                            <div class="core-problem-timeline position-relative">
                                <!-- Connecting Vertical Line -->
                                <div class="core-problem-timeline__line position-absolute"></div>
                                <!-- Step 1 -->
                                <div class="core-problem-step d-flex gap-4 mb-4 position-relative z-1">
                                    <div class="core-problem-step__icon rounded-3 flex-shrink-0">
                                        <img loading="lazy" src="/assets/tick.png" alt="Tick" class="img-fluid">
                                    </div>
                                    <div class="flex-grow-1 core-problem-bottom">
                                        <h3 class="core-problem-step__title mb-1">Unified Workflow Coordination</h3>
                                        <p class="core-problem-step__text text-muted mb-0">
                                            Stop fragmented execution. Coordinate actions across humans, AI, EHR/RCM, and existing systems.
                                        </p>
                                    </div>
                                </div>
                                <!-- Step 2 -->
                                <div class="core-problem-step d-flex gap-4 mb-4 position-relative z-1">
                                    <div class="core-problem-step__icon rounded-3 flex-shrink-0">
                                        <img loading="lazy" src="/assets/tick.png" alt="Tick" class="img-fluid">
                                    </div>
                                    <div class="flex-grow-1 core-problem-bottom">
                                        <h3 class="core-problem-step__title mb-1">Clinical &amp; Patient Efficiency</h3>
                                        <p class="core-problem-step__text text-muted mb-0">
                                            Reduce low-value clinical admin burden and enable intentional, predictable voice outreach for patient engagement.
                                        </p>
                                    </div>
                                </div>
                                <!-- Step 3 -->
                                <div class="core-problem-step d-flex gap-4 position-relative z-1">
                                    <div class="core-problem-step__icon rounded-3 flex-shrink-0">
                                        <img loading="lazy" src="/assets/tick.png" alt="Tick" class="img-fluid">
                                    </div>
                                    <div class="flex-grow-1 core-problem-bottom">
                                        <h3 class="core-problem-step__title mb-1">Financial Precision</h3>
                                        <p class="core-problem-step__text text-muted mb-0">
                                            Implement upstream policy gating to reduce preventable failures and use economic arbitration to stop wasted effort.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Commercial Imperative Bottom Callout -->
                            <div class="core-problem-callout bg-white rounded-4 p-3 shadow-sm d-flex align-items-center gap-3 mt-4">
                                <div class="core-problem-callout__icon flex-shrink-0">
                                    <img loading="lazy" src="/assets/icon-comercial-imperative.png" alt="Tick" class="img-fluid">
                                </div>
                                <p class="core-problem-callout__text mb-0">
                                    <strong>Commercial Imperative:</strong> Eliminate low-value touches, speed cash velocity, and structurally protect EBITDA margins across the enterprise.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Right Column: Cost of Fragmentation Radar Display -->
                    <div class="col-lg-6 d-flex flex-column">
                        <div class="core-problem-radar-card rounded-4 p-2 h-100 d-flex flex-column justify-content-between position-relative overflow-hidden">
                            <!-- Top Dark Banner Header -->
                            <div class="core-problem-radar__header bg-navy text-white text-center py-3 px-4 rounded-4 mx-auto w-100 mb-4">
                                <h3 class="fw-bold fs-5 mb-0">The Cost of Fragmentation</h3>
                            </div>
                            <!-- Central Orbiting Radar Graphics -->
                            <img loading="lazy" src="/assets/The-Cost-of-Fragmentation-2.png" alt="The Cost of Fragmentation" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="control-plane-section py-5" id="ecosystem">
        <div class="container my-lg-4">
            <!-- Section Header -->
            <!-- <div class="text-center mb-5">
                <div class="control-plane-badge d-inline-flex align-items-center gap-2 px-3 py-1 mb-3">
                    <span class="control-plane-badge__dash"></span>
                    <span class="control-plane-badge__text">THE SOLUTION</span>
                </div>
                <h2 class="control-plane-title display-6 text-dark mb-3">
                    Meet Curaide: the intelligence<br class="d-none d-md-block" />
                    control <span class="control-plane-title__highlight">plane for healthcare.</span>
                </h2>
                <p class="control-plane-desc mx-auto mb-0">
                    Curaide is the umbrella brand and decision control plane from Flatworld Solutions that governs when to act, what to prioritize, and who should execute across humans, AI, and existing systems.
                </p>
            </div> -->
            <div class="text-center mb-5">
                <div class="control-plane-badge d-inline-flex align-items-center gap-2 px-3 py-1 mb-3">
                    <span class="control-plane-badge__dash"></span>
                    <span class="control-plane-badge__text">THE SOLUTION</span>
                </div>
                <h2 class="control-plane-title display-6 mb-3">
                    Meet <span class="curaide-brand">Cura<span class="curaide-i-wrapper"><img loading="lazy" src="/assets/logo-unit.webp" alt="Curaide Brand Icon" class="curaide-i-icon" />ı</span>de</span>: the intelligence<br class="d-none d-md-block" />
                    control <span class="control-plane-title__highlight">plane for healthcare.</span>
                </h2>
                <p class="control-plane-desc mx-auto mb-0">
                    Curaide is the umbrella brand and decision control plane from Flatworld Solutions that governs when to act, what to prioritize, and who should execute across humans, AI, and existing systems.
                </p>
            </div>
            <!-- Main Content Layout -->
            <div class="row g-4 align-items-stretch">
                <!-- Left Column: Vertical Feature List -->
                <div class="col-lg-5 d-flex flex-column justify-content-between gap-3">
                    <!-- Feature 1 -->
                    <div class="control-plane-feature p-3 p-md-4 rounded-4 bg-white shadow-sm d-flex align-items-center gap-3">
                        <div class="control-plane-feature__icon rounded-3 flex-shrink-0">
                            <img loading="lazy" src="/assets/icon-geverns-above-existing-stack.png" alt="Governs above existing stack">
                        </div>
                        <div>
                            <h3 class="control-plane-feature__title mb-1">Governs above existing stack</h3>
                            <p class="control-plane-feature__text mb-0 text-muted">Sits above EHR, RCM, and AI point tools. No rip-and-replace.</p>
                        </div>
                    </div>
                    <!-- Feature 2 -->
                    <div class="control-plane-feature p-3 p-md-4 rounded-4 bg-white shadow-sm d-flex align-items-center gap-3">
                        <div class="control-plane-feature__icon rounded-3 flex-shrink-0">
                            <img loading="lazy" src="/assets/icon-economic-arbitration.png" alt="Economic arbitration">
                        </div>
                        <div>
                            <h3 class="control-plane-feature__title mb-1">Economic arbitration</h3>
                            <p class="control-plane-feature__text mb-0 text-muted">Focuses operational resources where recovery ROI is highest.</p>
                        </div>
                    </div>
                    <!-- Feature 3 -->
                    <div class="control-plane-feature p-3 p-md-4 rounded-4 bg-white shadow-sm d-flex align-items-center gap-3">
                        <div class="control-plane-feature__icon rounded-3 flex-shrink-0">
                            <img loading="lazy" src="/assets/icon-policy-and-evidence-led-decisions.png" alt="Policy- and evidence-led decisions">
                        </div>
                        <div>
                            <h3 class="control-plane-feature__title mb-1">Policy and evidence-led decisions</h3>
                            <p class="control-plane-feature__text mb-0 text-muted">Transparent reasoning while human authority remains in control.</p>
                        </div>
                    </div>
                    <!-- Feature 4 -->
                    <div class="control-plane-feature p-3 p-md-4 rounded-4 bg-white shadow-sm d-flex align-items-center gap-3">
                        <div class="control-plane-feature__icon rounded-3 flex-shrink-0">
                            <img loading="lazy" src="/assets/icon-vendor-agnostic-orchestration.png" alt="Vendor-agnostic orchestration">
                        </div>
                        <div>
                            <h3 class="control-plane-feature__title mb-1">Vendor-agnostic orchestration</h3>
                            <p class="control-plane-feature__text mb-0 text-muted">Makes your fragmented ecosystem behave like a unified system.</p>
                        </div>
                    </div>
                </div>
                <!-- Right Column: Diagram Interactive Display -->
                <div class="col-lg-7">
                    <div class="control-plane-card p-4 p-md-3 rounded-5 bg-white shadow-sm h-100 d-flex flex-column justify-content-between">
                        <!-- Top Navy/Blue Control Plane Header Box -->
                        <div class="control-plane-card__banner rounded-4 p-4 text-white position-relative overflow-hidden">
                            <div class="d-flex align-items-center justify-content-between pb-3 mb-3">
                                <div class="d-flex align-items-center gap-2">
                                    <!-- Heart Icon Branding -->
                                    <img loading="lazy" src="/assets/curaide-logo.png" alt="CURAIDE" class="img-fluid">
                                </div>
                                <span class="control-plane-card__label text-uppercase fw-bold ">INTELLIGENCE CONTROL PLANE</span>
                            </div>
                            <!-- 3 Sub-Modules inside Banner -->
                            <div class="row g-2 text-center pt-1">
                                <div class="col-4">
                                    <div class="control-plane-card__submodule p-3 rounded-3">
                                        <img loading="lazy" src="/assets/icon-economic-arbitration1.png" alt="Economic Arbitration">
                                        <span class="control-plane-card__submodule-text pt-2">Economic Arbitration</span>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="control-plane-card__submodule p-3 rounded-3">
                                        <img loading="lazy" src="/assets/icon-policy-intelligence.png" alt="Policy Intelligence">
                                        <span class="control-plane-card__submodule-text pt-2">Policy Intelligence</span>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="control-plane-card__submodule p-3 rounded-3">
                                        <img loading="lazy" src="/assets/icon-evidence-ledger.png" alt="Evidence Ledger">
                                        <span class="control-plane-card__submodule-text pt-2">Evidence Ledger</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Connectors & Node Dots Layer -->
                        <div class="control-plane-diagram py-4 position-relative">
                            <!-- Desktop SVG Connector Lines -->
                            <div class="control-plane-diagram__lines position-absolute w-100 h-100 top-0 start-0 pointer-events-none d-none d-md-block">
                                <svg viewBox="0 0 500 60" class="w-100 h-100" preserveAspectRatio="none">
                                    <line x1="62" y1="0" x2="62" y2="60" stroke="#cbd5e1" stroke-width="1.5" stroke-dasharray="3 3" />
                                    <line x1="187" y1="0" x2="187" y2="60" stroke="#cbd5e1" stroke-width="1.5" stroke-dasharray="3 3" />
                                    <line x1="312" y1="0" x2="312" y2="60" stroke="#cbd5e1" stroke-width="1.5" stroke-dasharray="3 3" />
                                    <line x1="437" y1="0" x2="437" y2="60" stroke="#cbd5e1" stroke-width="1.5" stroke-dasharray="3 3" />
                                </svg>
                            </div>
                            <!-- 4 Integration Nodes Grid -->
                            <div class="row g-2 text-center position-relative z-1">
                                <!-- Node 1: EHR -->
                                <div class="col-3">
                                    <div class="control-plane-node__dot mx-auto mb-3"></div>
                                    <div class="control-plane-node p-4 rounded-3 bg-light border border-light-subtle">
                                        <img loading="lazy" src="/assets/icon-ehr.png" alt="EHR" class="img-fluid">
                                        <span class="control-plane-node__text pt-2">EHR</span>
                                    </div>
                                </div>
                                <!-- Node 2: RCM -->
                                <div class="col-3">
                                    <div class="control-plane-node__dot mx-auto mb-3"></div>
                                    <div class="control-plane-node p-4 rounded-3 bg-light border border-light-subtle">
                                        <img loading="lazy" src="/assets/icon-rcm.png" alt="RCM" class="img-fluid">
                                        <span class="control-plane-node__text pt-2">RCM</span>
                                    </div>
                                </div>
                                <!-- Node 3: Point AI -->
                                <div class="col-3">
                                    <div class="control-plane-node__dot mx-auto mb-3"></div>
                                    <div class="control-plane-node p-4 rounded-3 bg-light border border-light-subtle">
                                        <img loading="lazy" src="/assets/icon-point-ai.png" alt="Point AI" class="img-fluid">
                                        <span class="control-plane-node__text pt-2">Point AI</span>
                                    </div>
                                </div>
                                <!-- Node 4: Human Teams -->
                                <div class="col-3">
                                    <div class="control-plane-node__dot mx-auto mb-3"></div>
                                    <div class="control-plane-node p-4 rounded-3 bg-light border border-light-subtle">
                                        <img loading="lazy" src="/assets/icon-human-teams.png" alt="Human Teams" class="img-fluid">
                                        <span class="control-plane-node__text pt-2">Human Teams</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Bottom Gray Pill Container -->
                        <div class="control-plane-card__footer bg-light text-center py-2 px-3 rounded-4 border border-light-subtle">
                            <span class="fw-bold text-dark medium">Existing Technology Stack</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="eco-framework-section py-5">
        <div class="container my-lg-4">
            <!-- Section Header -->
            <div class="text-center mb-4">
                <div class="eco-framework-badge d-inline-flex align-items-center gap-2 px-3 py-1 mb-3">
                    <span class="eco-framework-badge__dash"></span>
                    <span class="eco-framework-badge__text">THREE CONNECTED PRESCRIPTIONS</span>
                </div>
                <h2 class="eco-framework-title display-6 text-dark mb-3">
                    The <span class="curaide-brand">Cura<span class="curaide-i-wrapper"><img loading="lazy" src="/assets/logo-unit.webp" alt="Curaide Brand Icon" class="curaide-i-icon" />ı</span>de</span> <span class="eco-framework-title__highlight">Ecosystem</span>
                </h2>
                <p class="eco-framework-desc text-muted mx-auto">
                    A structurally superior closed-loop framework mapping financial diagnosis to operational treatment and verified measurement.
                </p>
            </div>
            <!-- Central Hub & Connector Architecture -->
            <div class="eco-framework-flow position-relative pt-2 pb-4">
                <!-- Central Heart Logo Hub -->
                <div class="eco-framework-hub text-center position-relative z-2 mb-4">
                    <img loading="lazy" src="/assets/curaide-ecosystem-connection.png" alt="Curaide Logo" class="img-fluid">
                </div>
                <!-- SVG Dotted Branching Lines (Desktop Only) -->
                <!-- <div class="eco-framework-connectors position-absolute w-100 h-100 top-0 start-0 d-none d-md-block pointer-events-none">
                    <svg viewBox="0 0 900 150" class="w-100 h-100" preserveAspectRatio="none">
                        <path d="M 450,75 L 150,140" fill="none" stroke="#cbd5e1" stroke-width="1.5" stroke-dasharray="4 4" />
                        <path d="M 450,75 L 450,140" fill="none" stroke="#cbd5e1" stroke-width="1.5" stroke-dasharray="4 4" />
                        <path d="M 450,75 L 750,140" fill="none" stroke="#cbd5e1" stroke-width="1.5" stroke-dasharray="4 4" />
                    </svg>
                </div> -->
                <!-- 3 Column Prescription Cards -->
                <div class="row g-4 align-items-stretch position-relative z-2">
                    <!-- Card 1: Prescription 1 / Diagnosis -->
                    <div class="col-md-4">
                        <div class="eco-framework-card rounded-5 p-4 bg-light-blue h-100 d-flex flex-column justify-content-between position-relative">
                            <!-- Top Floating Pill Badge -->
                            <div class="eco-framework-card__pill eco-framework-card__pill--blue position-absolute">
                                PRESCRIPTION 1 / DIAGNOSIS
                            </div>
                            <div>
                                <!-- Header Info -->
                                <div class="d-flex align-items-center gap-3 pt-3 mb-4">
                                    <div class="eco-framework-card__icon eco-framework-card__icon--dark rounded-4 flex-shrink-0">
                                        <i class="bi bi-search-heart"></i>
                                    </div>
                                    <div>
                                        <h3 class="eco-framework-card__name mb-0">DiagnosAIDE</h3>
                                        <span class="eco-framework-card__sub text-muted small">(Diagnosis)</span>
                                    </div>
                                </div>
                                <!-- White Inner Card Text -->
                                <div class="eco-framework-card__inner p-3 bg-white rounded-4 shadow-sm">
                                    <p class="mb-0 text-muted small lh-base">
                                        Financial diagnosis at the click of a button. The instant insight layer that pinpoints revenue leakage, why it occurs and what to do next.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card 2: Prescription 2 / Treatment -->
                    <div class="col-md-4">
                        <div class="eco-framework-card rounded-5 p-4 bg-light-blue h-100 d-flex flex-column justify-content-between position-relative">
                            <!-- Top Floating Pill Badge -->
                            <div class="eco-framework-card__pill eco-framework-card__pill--blue position-absolute">
                                PRESCRIPTION 2 / TREATMENT
                            </div>
                            <div>
                                <!-- Header Info -->
                                <div class="d-flex align-items-center gap-3 pt-3 mb-4">
                                    <div class="eco-framework-card__icon eco-framework-card__icon--dark rounded-4 flex-shrink-0">
                                        <img loading="lazy" src="/assets/icon-curaide-podss.png" alt="Curaide PODs" class="img-fluid">
                                    </div>
                                    <div>
                                        <h3 class="eco-framework-card__name mb-0">Curaide PODs</h3>
                                        <span class="eco-framework-card__sub text-muted small">(Treatment)</span>
                                    </div>
                                </div>
                                <!-- White Inner Card Text + Pills -->
                                <div class="eco-framework-card__inner p-3 bg-white rounded-4 shadow-sm">
                                    <p class="mb-3 text-muted small lh-base">
                                        Operational treatment PODs designed to address diagnosed revenue cycle challenges. Five targeted operational treatments.
                                    </p>
                                    <!-- Product Tag Pills -->
                                    <div class="d-flex flex-wrap gap-2 pt-1">
                                        <span class="eco-framework-tag">ClaimAIDE</span>
                                        <span class="eco-framework-tag">CoverAIDE</span>
                                        <span class="eco-framework-tag">ClinicAIDE</span>
                                        <span class="eco-framework-tag">ConversAIDE</span>
                                        <span class="eco-framework-tag">NurturAIDE</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card 3: Prescription 3 / Measurement -->
                    <div class="col-md-4">
                        <div class="eco-framework-card rounded-5 p-4 bg-light-blue h-100 d-flex flex-column justify-content-between position-relative">
                            <!-- Top Floating Pill Badge -->
                            <div class="eco-framework-card__pill eco-framework-card__pill--blue position-absolute">
                                PRESCRIPTION 3 / MEASUREMENT
                            </div>
                            <div>
                                <!-- Header Info -->
                                <div class="d-flex align-items-center gap-3 pt-3 mb-4">
                                    <div class="eco-framework-card__icon eco-framework-card__icon--dark rounded-4 flex-shrink-0">
                                        <img loading="lazy" src="/assets/icon-compass-vitals.png" alt="Compass" class="img-fluid">
                                    </div>
                                    <div>
                                        <h3 class="eco-framework-card__name mb-0">Compass</h3>
                                        <span class="eco-framework-card__sub text-muted small">(Vitals)</span>
                                    </div>
                                </div>
                                <!-- White Inner Card Text -->
                                <div class="eco-framework-card__inner p-3 bg-white rounded-4 shadow-sm">
                                    <p class="mb-0 text-muted small lh-base">
                                        Readiness assessment, deployment scope, priority order, and measurable improvement. Quantifies ROI before commitment.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bottom Flow Bar -->
            <div class="eco-framework-workflow bg-navy text-white p-3 p-md-3 rounded-4 shadow mt-4 text-center">
                <div class="d-flex flex-wrap align-items-center justify-content-center gap-2 gap-md-3 medium fw-bold">
                    <span class="text-primary-bright">Diagnose <span class="text-white">with DiagnosAIDE</span></span>
                    <i class="bi bi-arrow-right text-primary-bright opacity-75"></i>
                    <span class="text-primary-bright">Treat <span class="text-white">with PODs</span></span>
                    <i class="bi bi-arrow-right text-primary-bright opacity-75"></i>
                    <span class="text-primary-bright">Measure <span class="text-white">with Compass</span></span>
                    <i class="bi bi-arrow-right text-primary-bright opacity-75"></i>
                    <span class="text-white">Curaide Orchestrates &amp; Learns</span>
                </div>
            </div>
        </div>
    </section>
    <section class="diagnosis-layer-section py-5">
        <div class="container my-lg-4 py-5">
            <!-- Header Block -->
            <div class="text-center mb-5">
                <div class="diagnosis-layer-badge d-inline-flex align-items-center gap-2 px-3 py-1 mb-3">
                    <span class="diagnosis-layer-badge__dash"></span>
                    <span class="diagnosis-layer-badge__text">PRESCRIPTION 1 · DIAGNOSIS LAYER</span>
                </div>
                <h2 class="diagnosis-layer-title display-6 text-white mb-0">
                    <span class="curaide-brand">Cura<span class="curaide-i-wrapper"><img loading="lazy" src="/assets/logo-unit.webp" alt="Curaide Brand Icon" class="curaide-i-icon" />ı</span>de</span> <span class="diagnosis-layer-title__highlight">DiagnosAIDE</span>
                </h2>
            </div>
            <!-- Main Content Area -->
            <div class="row g-4 align-items-stretch">
                <!-- Left Featured Card (Vibrant Blue Showcase) -->
                <div class="col-lg-6">
                    <div class="diagnosis-layer-hero rounded-5 p-4 p-md-5 text-white h-100 d-flex flex-column justify-content-between position-relative overflow-hidden shadow-lg">
                        <!-- Text Header -->
                        <div class="diagnosis-layer-hero__header mb-2">
                            <h3 class="fw-bold fs-4 mb-3">Financial diagnosis at the click of a button.</h3>
                            <p class="diagnosis-layer-hero__text medium mb-0">
                                DiagnosAIDE turns existing data into instant, actionable financial intelligence. It acts as the insight layer that pinpoints why leakage occurs and what next.
                            </p>
                        </div>
                        <!-- Dashboard / Diagram Graphic Showcase -->
                        <div class="diagnosis-layer-hero__diagram  position-relative">
                            <div class="row align-items-center g-2">
                                <img loading="lazy" src="/assets/financial-diagnosis.webp" alt="Financial Diagnosis" class="img-fluid">
                            </div>
                        </div>
                        <!-- Quote Footer -->
                        <div class="diagnosis-layer-hero__quote rounded-3 p-3 mt-3">
                            <p class="mb-0 fst-italic small text-white-90">
                                "The answer was in the data. Nobody surfaced it until DiagnosAIDE."
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Right 2x2 Feature Grid -->
                <div class="col-lg-6">
                    <div class="row g-3 h-100">
                        <!-- Feature Card 1 -->
                        <div class="col-md-6">
                            <div class="diagnosis-layer-card p-4 rounded-5 bg-white border h-100 d-flex flex-column justify-content-between">
                                <div>
                                    <div class="diagnosis-layer-card__icon rounded-3 mb-5">
                                        <img loading="lazy" src="/assets/icon-root-cause.png" alt="Root-cause identification" class="img-fluid">
                                    </div>
                                    <h4 class="diagnosis-layer-card__title fw-bold text-dark fs-5 mb-2">Root-cause identification</h4>
                                    <p class="diagnosis-layer-card__desc mb-0 medium">
                                        Pinpoints exact causes of revenue leakage and preventable denials in minutes, not hours.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Feature Card 2 -->
                        <div class="col-md-6">
                            <div class="diagnosis-layer-card p-4 rounded-5 bg-white border h-100 d-flex flex-column justify-content-between">
                                <div>
                                    <div class="diagnosis-layer-card__icon rounded-3 mb-5">
                                        <img loading="lazy" src="/assets/icon-institutional-portfolio-memory.png" alt="Institutional portfolio memory" class="img-fluid">
                                    </div>
                                    <h4 class="diagnosis-layer-card__title fw-bold text-dark fs-5 mb-2">Institutional portfolio memory</h4>
                                    <p class="diagnosis-layer-card__desc mb-0 medium">
                                        Automatically shares resolved claims patterns and payer intelligence across the practice portfolio.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Feature Card 3 -->
                        <div class="col-md-6">
                            <div class="diagnosis-layer-card p-4 rounded-5 bg-white border h-100 d-flex flex-column justify-content-between">
                                <div>
                                    <div class="diagnosis-layer-card__icon rounded-3 mb-5">
                                        <img loading="lazy" src="/assets/icon-executive-time.png" alt="Executive time savings" class="img-fluid">
                                    </div>
                                    <h4 class="diagnosis-layer-card__title fw-bold text-dark fs-5 mb-2">Executive time savings</h4>
                                    <p class="diagnosis-layer-card__desc mb-0 medium">
                                        Transforms 8-hour manual data pulls into 90-second morning briefs for CFOs and VPs of RCM.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Feature Card 4 -->
                        <div class="col-md-6">
                            <div class="diagnosis-layer-card p-4 rounded-5 bg-white border h-100 d-flex flex-column justify-content-between">
                                <div>
                                    <div class="diagnosis-layer-card__icon rounded-3 mb-5">
                                        <img loading="lazy" src="/assets/icon-72-hour-acquisition.png" alt="72-hour acquisition onboarding" class="img-fluid">
                                    </div>
                                    <h4 class="diagnosis-layer-card__title fw-bold text-dark fs-5 mb-2">72-hour acquisition onboarding</h4>
                                    <p class="diagnosis-layer-card__desc mb-0 medium">
                                        Provides Day 1 financial visibility and benchmark intelligence for newly acquired practices.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="treatment-layer-section py-5" id="pods">
        <div class="container my-lg-4 pb-5">
            <!-- Section Header -->
            <div class="text-center mb-5">
                <div class="treatment-layer-badge d-inline-flex align-items-center gap-2 px-3 py-1 mb-3">
                    <span class="treatment-layer-badge__dash"></span>
                    <span class="treatment-layer-badge__text">PRESCRIPTION 2 · TREATMENT LAYER</span>
                </div>
                <h2 class="treatment-layer-title display-6 text-dark mb-3">
                    <span class="curaide-brand">Cura<span class="curaide-i-wrapper"><img loading="lazy" src="/assets/logo-unit.webp" alt="Curaide Brand Icon" class="curaide-i-icon" />ı</span>de</span> <span class="treatment-layer-title__highlight">PODs</span>
                </h2>
                <p class="treatment-layer-desc text-muted mx-auto">
                    The operational treatment layer that changes outcomes once the diagnosis is known. Five targeted operational treatments executed through the Curaide ecosystem.
                </p>
            </div>
            <!-- Cards Container (5-Card Arch Grid) -->
            <div class="treatment-layer-cards row row-cols-1 row-cols-md-3 row-cols-lg-5 g-3 align-items-end mb-5 pb-5">
                <!-- Card 1: ClaimAIDE -->
                <div class="col treatment-card-wrapper treatment-card-wrapper--step-1">
                    <div class="treatment-card rounded-4 shadow-sm overflow-hidden h-100">
                        <div class="treatment-card__header p-3 bg-white d-flex align-items-center gap-2 border-bottom">
                            <div class="treatment-card__icon rounded-3 flex-shrink-0">
                                <img loading="lazy" src="/assets/icon-claim-aide.png" alt="ClaimAIDE" class="img-fluid">
                            </div>
                            <div>
                                <h3 class="treatment-card__title mb-0">Claim<span class="text-primary">AIDE</span></h3>
                                <span class="treatment-card__sub">REVENUE</span>
                            </div>
                        </div>
                        <div class="treatment-card__body p-3">
                            <p class="treatment-card__text mb-0">
                                AR stratification, denial prevention, and automated recovery actions to systematically accelerate cash velocity.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Card 2: CoverAIDE -->
                <div class="col treatment-card-wrapper treatment-card-wrapper--step-2">
                    <div class="treatment-card rounded-4 shadow-sm overflow-hidden h-100">
                        <div class="treatment-card__header p-3 bg-white d-flex align-items-center gap-2 border-bottom">
                            <div class="treatment-card__icon rounded-3 flex-shrink-0">
                                <img loading="lazy" src="/assets/icon-cover-aide.png" alt="CoverAIDE" class="img-fluid">
                            </div>
                            <div>
                                <h3 class="treatment-card__title mb-0">Cover<span class="text-primary">AIDE</span></h3>
                                <span class="treatment-card__sub">COVERAGE</span>
                            </div>
                        </div>
                        <div class="treatment-card__body p-3">
                            <p class="treatment-card__text mb-0">
                                Eligibility verification and prior-authorization gating to stop preventable denials entirely upstream.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Card 3: ClinicAIDE (Peak Center Card) -->
                <div class="col treatment-card-wrapper treatment-card-wrapper--peak">
                    <div class="treatment-card rounded-4 shadow-sm overflow-hidden h-100">
                        <div class="treatment-card__header p-3 bg-white d-flex align-items-center gap-2 border-bottom">
                            <div class="treatment-card__icon rounded-3 flex-shrink-0">
                                <img loading="lazy" src="/assets/icon-clinic-aide.png" alt="ClinicAIDE" class="img-fluid">
                            </div>
                            <div>
                                <h3 class="treatment-card__title mb-0">Clinic<span class="text-primary">AIDE</span></h3>
                                <span class="treatment-card__sub">CLINICAL</span>
                            </div>
                        </div>
                        <div class="treatment-card__body p-3">
                            <p class="treatment-card__text mb-0">
                                Clinical documentation integrity and advanced coding quality intelligence to accurately protect revenue.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Card 4: ConversAIDE -->
                <div class="col treatment-card-wrapper treatment-card-wrapper--step-2">
                    <div class="treatment-card rounded-4 shadow-sm overflow-hidden h-100">
                        <div class="treatment-card__header p-3 bg-white d-flex align-items-center gap-2 border-bottom">
                            <div class="treatment-card__icon rounded-3 flex-shrink-0">
                                <img loading="lazy" src="/assets/icon-convers-aide.png" alt="ConversAIDE" class="img-fluid">
                            </div>
                            <div>
                                <h3 class="treatment-card__title mb-0">Convers<span class="text-primary">AIDE</span></h3>
                                <span class="treatment-card__sub">VOICE AI</span>
                            </div>
                        </div>
                        <div class="treatment-card__body p-3">
                            <p class="treatment-card__text mb-0">
                                Conversational AI execution for seamless patient engagement, scheduling, intake, and balance follow-up.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Card 5: NurturAIDE -->
                <div class="col treatment-card-wrapper treatment-card-wrapper--step-1">
                    <div class="treatment-card rounded-4 shadow-sm overflow-hidden h-100">
                        <div class="treatment-card__header p-3 bg-white d-flex align-items-center gap-2 border-bottom">
                            <div class="treatment-card__icon rounded-3 flex-shrink-0">
                                <img loading="lazy" src="/assets/nurtur-aide.png" alt="NurturAIDE" class="img-fluid">
                            </div>
                            <div>
                                <h3 class="treatment-card__title mb-0">Nurtur<span class="text-primary">AIDE</span></h3>
                                <span class="treatment-card__sub">OUTREACH</span>
                            </div>
                        </div>
                        <div class="treatment-card__body p-3">
                            <p class="treatment-card__text mb-0">
                                Patient wellness and outreach enablement to proactively close care gaps and reduce patient leakage.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bottom Modular Implementation Banner -->
            <div class="treatment-banner-wrapper position-relative text-center mt-5 pt-3">
                <!-- Floating Heart Icon -->
                <div class="treatment-banner__emblem">
                    <img loading="lazy" src="/assets/curaide-pods-round-shape.png" alt="CuraIDE Pods" class="img-fluid">
                </div>
                <div class="treatment-banner p-3 p-md-4 rounded-4 text-white mx-auto">
                    <p class="mb-0 small">
                        <strong class="text-white">Modular Implementation:</strong>
                        <span class="text-white-100">Start with one targeted POD to address immediate gaps, and seamlessly expand the treatment footprint as your ROI compounds.</span>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="compass-layer-section py-5 bg-white">
        <div class="container my-lg-4">
            <div class="row align-items-center gy-5">
                <!-- Left Column: Interactive Accordion ONLY -->
                <div class="col-lg-5 pe-lg-4">
                    <!-- Section Badge & Header -->
                    <div class="mb-4">
                        <div class="compass-layer-badge d-inline-flex align-items-center gap-2 px-3 py-1 mb-3">
                            <span class="compass-layer-badge__dash"></span>
                            <span class="compass-layer-badge__text">PRESCRIPTION 3 · MEASUREMENT LAYER</span>
                        </div>
                        <h2 class="compass-layer-title display-6 text-dark">
                            <span class="curaide-brand">Cura<span class="curaide-i-wrapper"><img loading="lazy" src="/assets/logo-unit.webp" alt="Curaide Brand Icon" class="curaide-i-icon" />ı</span>de</span> <span class="compass-layer-title__highlight">Compass</span>
                        </h2>
                    </div>
                    <div class="accordion compass-acc" id="compassAccordion">
                        <!-- Item 1 (Collapsed) -->
                        <div class="accordion-item compass-acc__item">
                            <h3 class="accordion-header m-0">
                                <button class="accordion-button compass-acc__btn collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#accOne">
                                    <div class="compass-acc__icon compass-acc__icon--blue">
                                        <img loading="lazy" src="/assets/icon-agentic-readiness-index.png" alt="Agentic Readiness Index" class="img-fluid">
                                    </div>
                                    <span class="compass-acc__title">Agentic Readiness Index (ARI)</span>
                                    <span class="compass-acc__badge">
                                        <i class="bi bi-chevron-down"></i>
                                    </span>
                                </button>
                            </h3>
                            <div id="accOne" class="accordion-collapse collapse" data-bs-parent="#compassAccordion">
                                <div class="accordion-body compass-acc__body">
                                    Evaluates current infrastructure, data accessibility, and automation readiness across your existing revenue cycle workflows.
                                </div>
                            </div>
                        </div>
                        <!-- Item 2 (Active / Expanded) -->
                        <div class="accordion-item compass-acc__item">
                            <h3 class="accordion-header m-0">
                                <button class="accordion-button compass-acc__btn"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#accTwo">
                                    <div class="compass-acc__icon compass-acc__icon--dark">
                                        <img loading="lazy" src="/assets/icon-the-blueprint-roadmap.png" alt="The Blueprint Roadmap" class="img-fluid">
                                    </div>
                                    <span class="compass-acc__title">The Blueprint Roadmap</span>
                                    <span class="compass-acc__badge">
                                        <i class="bi bi-chevron-down"></i>
                                    </span>
                                </button>
                            </h3>
                            <div id="accTwo" class="accordion-collapse collapse show" data-bs-parent="#compassAccordion">
                                <div class="accordion-body compass-acc__body">
                                    Delivers an expert-validated, implementation-ready plan to transition to AI-governed operations.
                                </div>
                            </div>
                        </div>
                        <!-- Item 3 (Collapsed) -->
                        <div class="accordion-item compass-acc__item">
                            <h3 class="accordion-header m-0">
                                <button class="accordion-button compass-acc__btn collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#accThree">
                                    <div class="compass-acc__icon compass-acc__icon--blue">
                                        <img loading="lazy" src="/assets/icon-pod-activation-map.png" alt="POD Activation Map" class="img-fluid">
                                    </div>
                                    <span class="compass-acc__title">POD Activation Map</span>
                                    <span class="compass-acc__badge">
                                        <i class="bi bi-chevron-down"></i>
                                    </span>
                                </button>
                            </h3>
                            <div id="accThree" class="accordion-collapse collapse" data-bs-parent="#compassAccordion">
                                <div class="accordion-body compass-acc__body">
                                    Maps out exact deployment sequences for AI PODs to target high-leakage operational bottlenecks first.
                                </div>
                            </div>
                        </div>
                        <!-- Item 4 (Collapsed) -->
                        <div class="accordion-item compass-acc__item">
                            <h3 class="accordion-header m-0">
                                <button class="accordion-button compass-acc__btn collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#accFour">
                                    <div class="compass-acc__icon compass-acc__icon--blue">
                                        <img loading="lazy" src="/assets/icon-continuous -roi-measurement.png" alt="Continuous ROI Measurement" class="img-fluid">
                                    </div>
                                    <span class="compass-acc__title">Continuous ROI Measurement</span>
                                    <span class="compass-acc__badge">
                                        <i class="bi bi-chevron-down"></i>
                                    </span>
                                </button>
                            </h3>
                            <div id="accFour" class="accordion-collapse collapse" data-bs-parent="#compassAccordion">
                                <div class="accordion-body compass-acc__body">
                                    Tracks real-time financial gains, reduced DSO, and administrative cost savings continuously post-launch.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Right Column: Static Blue Blueprint Card (NOT an Accordion) -->
                <div class="col-lg-6">
                    <div class="compass-layer-panel rounded-5 p-4 p-md-5 text-white position-relative overflow-hidden shadow-lg">
                        <!-- Top Panel Text -->
                        <div class="compass-layer-panel__header mb-4">
                            <h3 class="fw-bold fs-4 mb-2">Readiness, scope, and measurable progress.</h3>
                            <p class="compass-layer-panel__subtitle mb-0 medium">
                                Compass is the assessment and blueprint tool that establishes your starting baseline, defines your deployment scope, and verifies ongoing operational improvement.
                            </p>
                        </div>
                        <!-- Center Diagram Showcase -->
                        <img loading="lazy" src="/assets/compass.webp" alt="Readiness, scope, and measurable progress" class="img-fluid">
                        <!-- Bottom Quote Box -->
                        <div class="compass-layer-quote rounded-3 p-3 mt-4">
                            <p class="mb-0 fst-italic small lh-base">
                                "Compass tells you where you are. The PODs take you there. The Blueprint tells you exactly how."
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="impact-metrics-section py-5" id="proof">
        <div class="container my-lg-4">
            <!-- Section Header (Dark Mode Background) -->
            <div class="text-center mb-5">
                <div class="impact-metrics-badge d-inline-flex align-items-center gap-2 px-3 py-1 mb-3">
                    <span class="impact-metrics-badge__dash"></span>
                    <span class="impact-metrics-badge__text">EVIDENCE & RESULTS</span>
                </div>
                <h2 class="impact-metrics-title display-6 text-white">
                    Proof in production, <span class="impact-metrics-title__highlight">not projection.</span>
                </h2>
            </div>
            <!-- Outer Main White Container -->
            <div class="impact-metrics-wrapper bg-white rounded-5 p-4 p-md-5 shadow-lg">
                <div class="row g-4">
                    <!-- Left Column: Dark Blue Featured Outcome Panel -->
                    <div class="col-lg-4">
                        <div class="impact-metrics-sidebar p-4 rounded-4 h-100 d-flex flex-column justify-content-between">
                            <div>
                                <!-- Top Badge -->
                                <div class="impact-metrics-sidebar__tag d-inline-block px-3 py-1 rounded-pill mb-3">
                                    VALIDATED OUTCOME
                                </div>
                                <!-- Subtitle -->
                                <p class="impact-metrics-sidebar__subtext text-white medium mb-4">
                                    Production deployment at a PE-backed home health company
                                </p>
                                <!-- Vertical Metric Sub-cards -->
                                <div class="d-flex flex-column gap-3">
                                    <div class="impact-metrics-sidebar__card p-3 rounded-3">
                                        <h3 class="impact-metrics-sidebar__num text-white fw-bold mb-1">
                                            4% <i class="bi bi-arrow-right tiny-icon text-primary"></i> 2.75%
                                        </h3>
                                        <p class="impact-metrics-sidebar__label mb-0 mt-2">Denial rate reduced in production</p>
                                    </div>
                                    <div class="impact-metrics-sidebar__card p-3 rounded-3">
                                        <h3 class="impact-metrics-sidebar__num text-white fw-bold mb-1">95–96%</h3>
                                        <p class="impact-metrics-sidebar__label mb-0 mt-2">Denial overturn ratios achieved</p>
                                    </div>
                                    <div class="impact-metrics-sidebar__card p-3 rounded-3">
                                        <h3 class="impact-metrics-sidebar__num text-white fw-bold mb-1">3–5 days</h3>
                                        <p class="impact-metrics-sidebar__label mb-0 mt-2">Days in AR (DSO) compressed</p>
                                    </div>
                                    <div class="impact-metrics-sidebar__card p-3 rounded-3">
                                        <h3 class="impact-metrics-sidebar__num text-white fw-bold mb-1">75–77%</h3>
                                        <p class="impact-metrics-sidebar__label mb-0 mt-2">Agentic automation across 7 RCM workflows</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Right Column: Key Grid Metrics + Per-POD Cards -->
                    <div class="col-lg-8">
                        <!-- 2x2 Grid: Large Highlight Metrics -->
                        <div class="row g-3 mb-4">
                            <!-- Top-Left Metric Card -->
                            <div class="col-sm-6">
                                <div class="impact-metrics-card p-4 rounded-5 border bg-white h-100 d-flex gap-3 align-items-start">
                                    <div class="impact-metrics-card__icon rounded-3 flex-shrink-0">
                                        <img loading="lazy" src="/assets/icon-10.png" alt="10%+" class="img-fluid">
                                    </div>
                                    <div>
                                        <h3 class="impact-metrics-card__value fw-bold mb-1">10%+</h3>
                                        <p class="impact-metrics-card__desc text-muted mb-0">
                                            EBITDA lift, through Revenue Recovery, Cash Acceleration, and Operating Leverage.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Top-Right Metric Card -->
                            <div class="col-sm-6">
                                <div class="impact-metrics-card p-4 rounded-5 border bg-white h-100 d-flex gap-3 align-items-start">
                                    <div class="impact-metrics-card__icon rounded-3 flex-shrink-0">
                                        <img loading="lazy" src="/assets/icon-6-6.png" alt="6.6M" class="img-fluid">
                                    </div>
                                    <div>
                                        <h3 class="impact-metrics-card__value fw-bold mb-1">$6.6M</h3>
                                        <p class="impact-metrics-card__desc text-muted mb-0">
                                            Annual economic leakage identified at a single PE-backed practice.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Bottom-Left Metric Card -->
                            <div class="col-sm-6">
                                <div class="impact-metrics-card p-4 rounded-5 border bg-white h-100 d-flex gap-3 align-items-start">
                                    <div class="impact-metrics-card__icon rounded-3 flex-shrink-0">
                                        <img loading="lazy" src="/assets/icon-78.png" alt="78%" class="img-fluid">
                                    </div>
                                    <div>
                                        <h3 class="impact-metrics-card__value fw-bold mb-1">78%</h3>
                                        <p class="impact-metrics-card__desc text-muted mb-0">
                                            Manual steps eliminated across 7 RCM workflows.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Bottom-Right Metric Card -->
                            <div class="col-sm-6">
                                <div class="impact-metrics-card p-4 rounded-5 border bg-white h-100 d-flex gap-3 align-items-start">
                                    <div class="impact-metrics-card__icon rounded-3 flex-shrink-0">
                                        <img loading="lazy" src="/assets/icon-1000.png" alt="icon-1000" class="img-fluid">
                                    </div>
                                    <div>
                                        <h3 class="impact-metrics-card__value fw-bold mb-1">1,000+</h3>
                                        <p class="impact-metrics-card__desc text-muted mb-0">
                                            Calls per day automated by ConversAIDE in production.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Bottom Sub-Section Header -->
                        <div class="impact-metrics-subtitle d-flex align-items-center gap-2 mb-3 mt-5">
                            <span class="impact-metrics-subtitle__dash bg-primary"></span>
                            <h4 class="fw-bold mb-0 text-dark fs-5">Per-POD impact, measured in deployment</h4>
                        </div>
                        <!-- 5 Column Grid for POD Impact Cards -->
                        <div class="row row-cols-2 row-cols-sm-3 row-cols-md-5 g-2">
                            <!-- POD 1 -->
                            <div class="col">
                                <div class="impact-pod-card p-3 rounded-4 text-center h-100">
                                    <div class="impact-pod-card__icon mb-2">
                                        <img loading="lazy" src="/assets/icon-claim-aides.png" alt="icon-claim-aides" class="img-fluid">
                                    </div>
                                    <h4 class="impact-pod-card__val fw-bold mb-0">30%+</h4>
                                    <div class="impact-pod-card__name fw-bold">Claim<span class="text-primary">AIDE</span></div>
                                    <p class="impact-pod-card__label mb-0 mt-1">Lower denial rates</p>
                                </div>
                            </div>
                            <!-- POD 2 -->
                            <div class="col">
                                <div class="impact-pod-card p-3 rounded-4 text-center h-100">
                                    <div class="impact-pod-card__icon mb-2">
                                        <img loading="lazy" src="/assets/icon-80-cover-aide.png" alt="icon-cover-aides" class="img-fluid">
                                    </div>
                                    <h4 class="impact-pod-card__val fw-bold mb-0">80%</h4>
                                    <div class="impact-pod-card__name fw-bold">Cover<span class="text-primary">AIDE</span></div>
                                    <p class="impact-pod-card__label mb-0">Faster verification cycle</p>
                                </div>
                            </div>
                            <!-- POD 3 -->
                            <div class="col">
                                <div class="impact-pod-card p-3 rounded-4 text-center h-100">
                                    <div class="impact-pod-card__icon mb-2">
                                        <img loading="lazy" src="/assets/icon-75-clinic-aide.png" alt="icon-clinic-aide" class="img-fluid">
                                    </div>
                                    <h4 class="impact-pod-card__val fw-bold mb-0">75%</h4>
                                    <div class="impact-pod-card__name fw-bold">Clinic<span class="text-primary">AIDE</span></div>
                                    <p class="impact-pod-card__label mb-0">Faster charge entry</p>
                                </div>
                            </div>
                            <!-- POD 4 -->
                            <div class="col">
                                <div class="impact-pod-card p-3 rounded-4 text-center h-100">
                                    <div class="impact-pod-card__icon mb-2">
                                        <img loading="lazy" src="/assets/icon-83-convers-aide.png" alt="icon-convers-aide" class="img-fluid">
                                    </div>
                                    <h4 class="impact-pod-card__val fw-bold mb-0">83%</h4>
                                    <div class="impact-pod-card__name fw-bold">Convers<span class="text-primary">AIDE</span></div>
                                    <p class="impact-pod-card__label mb-0">Less scheduling touch time</p>
                                </div>
                            </div>
                            <!-- POD 5 -->
                            <div class="col">
                                <div class="impact-pod-card p-3 rounded-4 text-center h-100">
                                    <div class="impact-pod-card__icon mb-2">
                                        <img loading="lazy" src="/assets/icon-nurtuaide.png" alt="icon-nurture-aide" class="img-fluid">
                                    </div>
                                    <h4 class="impact-pod-card__val fw-bold mb-0">---</h4>
                                    <div class="impact-pod-card__name fw-bold">Nurtur<span class="text-primary">AIDE</span></div>
                                    <p class="impact-pod-card__label mb-0">Higher care gap closure</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ecosystem-section py-5 bg-white">
        <div class="container my-lg-4">
            <!-- Section Header -->
            <div class="text-center mb-5">
                <div class="ecosystem-badge d-inline-flex align-items-center gap-2 px-3 py-1 mb-3">
                    <span class="ecosystem-badge__dash"></span>
                    <span class="ecosystem-badge__text">WHY THE ECOSYSTEM WINS</span>
                </div>
                <h2 class="ecosystem-title display-6">
                    A closed loop that <span class="ecosystem-title__highlight">compounds value</span>
                </h2>
            </div>
            <div class="row align-items-center gy-4">
                <!-- Left Side: Diagram Card -->
                <div class="col-lg-6">
                    <div class="ecosystem-diagram-card p-4 p-md-5 rounded-5 position-relative overflow-hidden">
                        <!-- Top Sub-Header Bar -->
                        <div class="ecosystem-diagram-bar text-center py-2 px-4 rounded-4 mx-auto">
                            <span class="ecosystem-diagram-bar__title fw-semibold">Decision, Orchestrate & Learn</span>
                        </div>
                        <!-- Sub Nodes (Diagnose, Treat, Measure) -->
                        <div class="ecosystem-nodes row g-2 justify-content-center align-items-end mt-2 position-relative z-1">
                            <img loading="lazy" src="/assets/decision-orchestrate-learn.png" alt="Decision, Orchestrate & Learn">
                        </div>
                    </div>
                </div>
                <!-- Right Side: Feature List Stack -->
                <div class="col-lg-6 ps-lg-4">
                    <div class="ecosystem-features-list d-flex flex-column gap-3">
                        <!-- Feature Item 1 -->
                        <div class="ecosystem-feature-card p-3 p-md-4 rounded-4 bg-white border d-flex gap-4 align-items-start">
                            <div class="ecosystem-feature-card__icon-wrap rounded-3 flex-shrink-0">
                                <img loading="lazy" src="/assets/icon-avoid-the-insights-only-trap.png" alt="Avoid the insights-only trap">
                            </div>
                            <div>
                                <h3 class="ecosystem-feature-card__title text-dark fs-6 mb-1">
                                    Avoid the "insights-only" trap
                                </h3>
                                <p class="ecosystem-feature-card__desc text-muted mb-0 small">
                                    Connects financial diagnosis directly to operational treatment, ensuring insights actually trigger workflows that move outcomes.
                                </p>
                            </div>
                        </div>
                        <!-- Feature Item 2 -->
                        <div class="ecosystem-feature-card p-3 p-md-4 rounded-4 bg-white border d-flex gap-4 align-items-start">
                            <div class="ecosystem-feature-card__icon-wrap rounded-3 flex-shrink-0">
                                <img loading="lazy" src="/assets/icon-economic-arbitration.png" alt="Economic arbitration">
                            </div>
                            <div>
                                <h3 class="ecosystem-feature-card__title text-dark fs-6 mb-1">
                                    Economic arbitration
                                </h3>
                                <p class="ecosystem-feature-card__desc text-muted mb-0 small">
                                    Focuses automated and human resources only where recovery ROI is mathematically justified, reducing cost-to-collect.
                                </p>
                            </div>
                        </div>
                        <!-- Feature Item 3 -->
                        <div class="ecosystem-feature-card p-3 p-md-4 rounded-4 bg-white border d-flex gap-4 align-items-start">
                            <div class="ecosystem-feature-card__icon-wrap rounded-3 flex-shrink-0">
                                <img loading="lazy" src="/assets/icon-evidence-led-governance.png" alt="Evidence-led governance">
                            </div>
                            <div>
                                <h3 class="ecosystem-feature-card__title text-dark fs-6 mb-1">
                                    Evidence-led governance
                                </h3>
                                <p class="ecosystem-feature-card__desc text-muted mb-0 small">
                                    Replaces black-box automation with an auditable evidence ledger - AI decisions are always transparent and policy-compliant.
                                </p>
                            </div>
                        </div>
                        <!-- Feature Item 4 -->
                        <div class="ecosystem-feature-card p-3 p-md-4 rounded-4 bg-white border d-flex gap-4 align-items-start">
                            <div class="ecosystem-feature-card__icon-wrap rounded-3 flex-shrink-0">
                                <img loading="lazy" src="/assets/icon-institutional-portfolio.png" alt="Institutional portfolio memory">
                            </div>
                            <div>
                                <h3 class="ecosystem-feature-card__title text-dark fs-6 mb-1">
                                    Institutional portfolio memory
                                </h3>
                                <p class="ecosystem-feature-card__desc text-muted mb-0 small">
                                    Every resolved case across the network strengthens core intelligence - the entire ecosystem becomes smarter with each closed loop.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="dsc-outer pb-5" id="security">
        <div class="container">
            <!-- Pill Badge -->
            <div class="text-center">
                <span class="dsc-pill-badge">
                    <span class="dsc-pill-dash"></span>
                    Data Security &amp; Compliance
                </span>
            </div>
            <!-- Heading -->
            <h2 class="dsc-heading text-center">
                Data Security &amp; Compliance
                <strong>highest standards.</strong>
            </h2>
            <!-- Subtext -->
            <p class="dsc-subtext text-center">
                Curaide is engineered from the ground up with enterprise-grade security and full HIPAA compliance, so your data and your patients' data are always protected.
            </p>
            <!-- 3-column layout -->
            <div class="dsc-layout">
                <!-- LEFT cards -->
                <div class="dsc-col-cards">
                    <!-- Card 1: HIPAA Compliant by Design -->
                    <div class="dsc-feature-card">
                        <div class="dsc-card-header">
                            <div class="dsc-card-icon-box">
                                <img loading="lazy" src="/assets/icon-hipaa-compliant-by-design.png" alt="HIPAA Compliant by Design" class="img-fluid">
                            </div>
                            <div class="dsc-card-title">HIPAA Compliant by Design</div>
                        </div>
                        <p class="dsc-card-desc">All Curaide systems, workflows, and data pipelines are architected to meet HIPAA Privacy and Security Rules. Business Associate Agreements (BAA) available for all covered entity partners.</p>
                    </div>
                    <!-- Card 2: End-to-End Encryption -->
                    <div class="dsc-feature-card">
                        <div class="dsc-card-header">
                            <div class="dsc-card-icon-box">
                                <img loading="lazy" src="/assets/icon-end-to-end-encryption.png" alt="End-to-End Encryption" class="img-fluid">
                            </div>
                            <div class="dsc-card-title">End-to-End Encryption</div>
                        </div>
                        <p class="dsc-card-desc">All data is encrypted in transit using TLS 1.3 and at rest using AES-256. PHI is never stored in plain text or exposed to third-party AI model training pipelines.</p>
                    </div>
                    <!-- Card 3: SOC 2 Type II Certified -->
                    <div class="dsc-feature-card">
                        <div class="dsc-card-header">
                            <div class="dsc-card-icon-box">
                                <img loading="lazy" src="/assets/icon-soc2-type-certified.png" alt="SOC 2 Type II Certified" class="img-fluid">
                            </div>
                            <div class="dsc-card-title">SOC 2 Type II Certified</div>
                        </div>
                        <p class="dsc-card-desc">Independently audited for security, availability, and confidentiality controls. Our SOC 2 Type II certification validates that your operational data is handled to the highest enterprise standard.</p>
                    </div>
                </div>
                <!-- CENTER diagram -->
                <div class="dsc-center-col d-none d-md-block">
                    <div class="dsc-diagram-wrap">
                        <img loading="lazy" src="/assets/data-security-connection.png" alt="Data Security Connection" class="img-fluid">
                    </div>
                </div>
                <!-- RIGHT cards -->
                <div class="dsc-col-cards">
                    <!-- Card 4: Role-Based Access Controls -->
                    <div class="dsc-feature-card">
                        <div class="dsc-card-header">
                            <div class="dsc-card-icon-box">
                                <img loading="lazy" src="/assets/icon-role-based-access-controls.png" alt="Role-Based Access Controls" class="img-fluid">
                            </div>
                            <div class="dsc-card-title">Role-Based Access Controls</div>
                        </div>
                        <p class="dsc-card-desc">Granular, role-based permissions ensure each team member only sees the data relevant to their function. Multi-factor authentication and single sign-on (SSO) supported across all environments.</p>
                    </div>
                    <!-- Card 5: Audit-Ready Evidence Ledger -->
                    <div class="dsc-feature-card">
                        <div class="dsc-card-header">
                            <div class="dsc-card-icon-box">
                                <img loading="lazy" src="/assets/icon-audit-ready-evidence-ledger.png" alt="Audit-Ready Evidence Ledger" class="img-fluid">
                            </div>
                            <div class="dsc-card-title">Audit-Ready Evidence Ledger</div>
                        </div>
                        <p class="dsc-card-desc">Every decision made by Curaide is recorded in a tamper-evident evidence ledger. Full auditability for compliance reviews, payer audits, and internal governance requirements.</p>
                    </div>
                    <!-- Card 6: PHI De-identification & Segmentation -->
                    <div class="dsc-feature-card">
                        <div class="dsc-card-header">
                            <div class="dsc-card-icon-box">
                                <img loading="lazy" src="/assets/icon-phi-de-identification.png" alt="PHI De-identification & Segmentation" class="img-fluid">
                            </div>
                            <div class="dsc-card-title">PHI De-identification &amp; Segmentation</div>
                        </div>
                        <p class="dsc-card-desc">Protected Health Information is de-identified for analytics workflows. Strict data segmentation ensures no PHI crosses into general AI training data, preserving patient privacy at every layer.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="hcs-outer pt-0 mt-0">
        <div class="container-fluid px-0">
            <!-- White gradient main card -->
            <div class="hcs-main-card">
                <!-- Shield Icon -->
                <div class="hcs-shield-icon">
                    <img loading="lazy" src="/assets/hipaa-privacy-security.png" alt="HIPAA Privacy & Security" class="img-fluid">
                </div>
                <!-- Heading -->
                <h2 class="hcs-main-heading">
                    Full HIPAA Privacy &amp; Security Rule Compliance
                </h2>
                <!-- Description -->
                <p class="hcs-main-desc">
                    Curaide maintains comprehensive administrative, physical, and technical safeguards as required under the HIPAA Security Rule. All workforce members handling PHI undergo mandatory HIPAA training. Breach notification procedures comply with the HIPAA Breach Notification Rule, and Business Associate Agreements are executed with all covered entity partners prior to any data access.
                </p>
            </div>
            <!-- Feature Pills Grid -->
            <div class="hcs-pills-grid px-3 px-md-4">
                <!-- Row 1 -->
                <div class="hcs-pills-row">
                    <div class="hcs-pill-item">
                        <span class="hcs-pill-check">
                            <svg viewBox="0 0 14 14" fill="none" stroke="white" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="2,7 6,11 12,3" />
                            </svg>
                        </span>
                        <span class="hcs-pill-label">HIPAA Privacy Rule</span>
                    </div>
                    <div class="hcs-pill-item">
                        <span class="hcs-pill-check">
                            <svg viewBox="0 0 14 14" fill="none" stroke="white" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="2,7 6,11 12,3" />
                            </svg>
                        </span>
                        <span class="hcs-pill-label">HIPAA Security Rule</span>
                    </div>
                    <div class="hcs-pill-item">
                        <span class="hcs-pill-check">
                            <svg viewBox="0 0 14 14" fill="none" stroke="white" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="2,7 6,11 12,3" />
                            </svg>
                        </span>
                        <span class="hcs-pill-label">Breach Notification Rule</span>
                    </div>
                    <div class="hcs-pill-item">
                        <span class="hcs-pill-check">
                            <svg viewBox="0 0 14 14" fill="none" stroke="white" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="2,7 6,11 12,3" />
                            </svg>
                        </span>
                        <span class="hcs-pill-label">SOC 2 Type II</span>
                    </div>
                    <div class="hcs-pill-item">
                        <span class="hcs-pill-check">
                            <svg viewBox="0 0 14 14" fill="none" stroke="white" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="2,7 6,11 12,3" />
                            </svg>
                        </span>
                        <span class="hcs-pill-label">AES-256 Encryption at Rest</span>
                    </div>
                    <div class="hcs-pill-item">
                        <span class="hcs-pill-check">
                            <svg viewBox="0 0 14 14" fill="none" stroke="white" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="2,7 6,11 12,3" />
                            </svg>
                        </span>
                        <span class="hcs-pill-label">TLS 1.3 in Transit</span>
                    </div>
                </div>
                <!-- Row 2 -->
                <div class="hcs-pills-row">
                    <div class="hcs-pill-item">
                        <span class="hcs-pill-check">
                            <svg viewBox="0 0 14 14" fill="none" stroke="white" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="2,7 6,11 12,3" />
                            </svg>
                        </span>
                        <span class="hcs-pill-label">Multi-Factor Authentication</span>
                    </div>
                    <div class="hcs-pill-item">
                        <span class="hcs-pill-check">
                            <svg viewBox="0 0 14 14" fill="none" stroke="white" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="2,7 6,11 12,3" />
                            </svg>
                        </span>
                        <span class="hcs-pill-label">BAA Available</span>
                    </div>
                    <div class="hcs-pill-item">
                        <span class="hcs-pill-check">
                            <svg viewBox="0 0 14 14" fill="none" stroke="white" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="2,7 6,11 12,3" />
                            </svg>
                        </span>
                        <span class="hcs-pill-label">PHI De-identification</span>
                    </div>
                    <div class="hcs-pill-item">
                        <span class="hcs-pill-check">
                            <svg viewBox="0 0 14 14" fill="none" stroke="white" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="2,7 6,11 12,3" />
                            </svg>
                        </span>
                        <span class="hcs-pill-label">Role-Based Access Controls</span>
                    </div>
                    <div class="hcs-pill-item">
                        <span class="hcs-pill-check">
                            <svg viewBox="0 0 14 14" fill="none" stroke="white" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="2,7 6,11 12,3" />
                            </svg>
                        </span>
                        <span class="hcs-pill-label">Audit-Ready Logging</span>
                    </div>
                    <div class="hcs-pill-item">
                        <span class="hcs-pill-check">
                            <svg viewBox="0 0 14 14" fill="none" stroke="white" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="2,7 6,11 12,3" />
                            </svg>
                        </span>
                        <span class="hcs-pill-label">Zero PHI in AI Training</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ══ Operational Improvement Section ══ -->
    <section class="ops-outer pb-5">
        <div class="container">
            <!-- Pill Badge -->
            <div class="text-center">
                <span class="ops-pill-badge">
                    <span class="ops-pill-dash"></span>
                    Commercial Value &amp; Next Steps
                </span>
            </div>
            <!-- Heading -->
            <h2 class="ops-heading text-center">
                Pathways to structural<br>
                <span class="ops-heading-highlight">operational improvement</span>
            </h2>
            <!-- Main Two-Column Panel -->
            <div class="ops-main-panel">
                <!-- LEFT: Feature List -->
                <div class="ops-left-panel">
                    <!-- Feature 1 -->
                    <div class="ops-feature-card">
                        <div class="ops-feature-top">
                            <div class="ops-feature-icon-box">
                                <img loading="lazy" src="/assets/icon-faster-time-to-cash.png" alt="Faster Time-to-Cash" class="img-fluid">
                            </div>
                            <div class="ops-feature-right">
                                <div class="ops-feature-title">Faster Time-to-Cash</div>
                                <span class="ops-feature-tag">DSO Compressed 3–5 Days</span>
                                <!-- <hr class="ops-feature-divider" /> -->
                                <p class="ops-feature-desc">Trigger actions at the economically optimal moment.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Feature 2 -->
                    <div class="ops-feature-card">
                        <div class="ops-feature-top">
                            <div class="ops-feature-icon-box">
                                <img loading="lazy" src="/assets/icon-proactive-denial-prevention.png" alt="Proactive Denial Prevention" class="img-fluid">
                            </div>
                            <div class="ops-feature-right">
                                <div class="ops-feature-title">Proactive Denial Prevention</div>
                                <span class="ops-feature-tag">Denial Rates Down 30%+</span>
                                <p class="ops-feature-desc">Trigger actions at the economically optimal moment.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Feature 3 -->
                    <div class="ops-feature-card">
                        <div class="ops-feature-top">
                            <div class="ops-feature-icon-box">
                                <img loading="lazy" src="/assets/icon-reduced-cost-to-collect.png" alt="Reduced Cost-to-Collect" class="img-fluid">
                            </div>
                            <div class="ops-feature-right">
                                <div class="ops-feature-title">Reduced Cost-to-Collect</div>
                                <span class="ops-feature-tag">78% Fewer Manual Steps</span>
                                <p class="ops-feature-desc">Economic arbitration eliminates wasted admin effort.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Feature 4 -->
                    <div class="ops-feature-card">
                        <div class="ops-feature-top">
                            <div class="ops-feature-icon-box">
                                <img loading="lazy" src="/assets/icon-protected-ebitda.png" alt="Protected EBITDA" class="img-fluid">
                            </div>
                            <div class="ops-feature-right">
                                <div class="ops-feature-title">Protected EBITDA</div>
                                <span class="ops-feature-tag">10%+ EBITDA Lift</span>
                                <p class="ops-feature-desc">Predictable operations backed by explainable, audit-ready AI.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- RIGHT: Deployment Path -->
                <div class="ops-right-panel">
                    <div class="ops-deploy-heading">Recommended Deployment Path</div>
                    <div class="ops-diagram-wrap">
                        <img loading="lazy" src="/assets/recommended-deployment-path.png" alt="Recommended Deployment Path" class="img-fluid">
                    </div>
                </div>
            </div>
            <!-- Flexible Buying Model Banner -->
            <div class="fbm-banner mb-5">
                <!-- Icon -->
                <div class="fbm-icon-wrap">
                    <img loading="lazy" src="/assets/icon-flexible-buying-model.png" alt="Flexible Buying Model" class="img-fluid">
                </div>
                <!-- Left text -->
                <div class="fbm-text-left">
                    <div class="fbm-title">Flexible Buying Model</div>
                    <div class="fbm-subtitle">Or connect them to unlock compounding closed-loop value.</div>
                </div>
                <!-- Vertical divider -->
                <div class="fbm-divider-v"></div>
                <!-- Right text -->
                <div class="fbm-text-right">
                    Purchase DiagnosAIDE, Compass, or PODs individually to solve targeted problems.
                </div>
            </div>
        </div>
    </section>
    <section class="cvs-outer pb-0">
        <div class="container">
            <!-- Pill Badge -->
            <div class="text-center">
                <span class="cvs-pill-badge">
                    <span class="cvs-pill-dash"></span>
                    Commercial Value &amp; Next Steps
                </span>
            </div>
            <!-- Heading -->
            <h2 class="cvs-heading text-center">
                Let's continue <span class="cvs-heading-highlight">the conversation.</span>
            </h2>
            <!-- Subtext -->
            <p class="cvs-subtext text-center">
                Move from fragmented execution to governed decision-making. Assess your readiness, deploy priority PODs, and protect your EBITDA.
            </p>
            <!-- Logo block overlapping panel top -->
            <div class="cvs-logo-block text-center" style="margin-top: 32px;">
                <!-- Wide arc rings behind logo -->
                <img loading="lazy" src="/assets/curaide.webp" alt="Curaide" class="img-fluid">
            </div>
            <!-- Main Panel -->
            <div class="cvs-panel shadow" style="margin-top: 28px;">
                <div class="cvs-steps-row">
                    <!-- Card 1: Schedule Compass Assessment -->
                    <div class="cvs-step-card">
                        <div class="cvs-step-top">
                            <div class="cvs-step-icon-box">
                                <!-- Compass icon -->
                                <img loading="lazy" src="/assets/icon-schedule-compass.png" alt="Schedule Compass Assessment" class="img-fluid">
                            </div>
                            <div class="cvs-step-title">Schedule Compass Assessment</div>
                        </div>
                        <div class="cvs-step-body">
                            <p class="cvs-step-desc">Establish your baseline and build the Blueprint roadmap.</p>
                            <span class="cvs-step-tag">L1 Delivery in ~2 Days</span>
                        </div>
                    </div>
                    <!-- Card 2: Review POD Activation Plan -->
                    <div class="cvs-step-card">
                        <div class="cvs-step-top">
                            <div class="cvs-step-icon-box">
                                <!-- People / pod icon -->
                                <img loading="lazy" src="/assets/icon-review-pod-activation.png" alt="Review POD Activation Plan" class="img-fluid">
                            </div>
                            <div class="cvs-step-title">Review POD Activation </br>Plan</div>
                        </div>
                        <div class="cvs-step-body">
                            <p class="cvs-step-desc">See exactly which Curaide PODs address your specific workflow gaps.</p>
                            <span class="cvs-step-tag">Deployment in 30–60 Days</span>
                        </div>
                    </div>
                    <!-- Card 3: See the DiagnosAIDE Demo -->
                    <div class="cvs-step-card">
                        <div class="cvs-step-top">
                            <div class="cvs-step-icon-box">
                                <!-- Monitor + chart icon -->
                                <img loading="lazy" src="/assets/icon-see-the-diagnos-aide-demo.png" alt="See the DiagnosAIDE Demo" class="img-fluid">
                            </div>
                            <div class="cvs-step-title">See the DiagnosAIDE </br>Demo</div>
                        </div>
                        <div class="cvs-step-body">
                            <p class="cvs-step-desc">Experience 10-minute automated financial attribution.</p>
                            <span class="cvs-step-tag">Inference Engine in 30 Days · 72-Hour Onboarding</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CTA Buttons -->
            <div class="d-flex align-items-center justify-content-center gap-3">
                <!-- Primary Download Button -->
                <!-- <a href="#" class="curaide-btn curaide-btn--primary">
                    <span class="curaide-btn__icon-left"><i class="fa-solid fa-phone-volume"></i></span>
                    Talk to an Expert
                </a>
                <a href="#" class="curaide-btn curaide-btn--outline">
                    Ask for a Demo
                    <span class="curaide-btn__arrow-badge">
                        <i class="bi bi-arrow-right"></i>
                    </span>
                </a> -->
                <!-- Primary Download Button -->
                <button type="button" class="curaide-btn curaide-btn--primary" data-bs-toggle="modal" data-bs-target="#demoModal">
                    <span class="curaide-btn__icon-left"><i class="fa-solid fa-phone-volume"></i></span>
                    Talk to an Expert
                </button>
                <!-- Outline Demo Button -->
                <button type="button" class="curaide-btn curaide-btn--outline" data-bs-toggle="modal" data-bs-target="#demoModal">
                    Ask for a Demo
                    <span class="curaide-btn__arrow-badge">
                        <i class="bi bi-arrow-right"></i>
                    </span>
                </button>
            </div>
        </div>
    </section>
    <!-- Spacer to simulate page content above footer -->
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
    <script>
        (function () {
            var wrapper = document.querySelector('.curaide-hero-cards-wrapper');
            if (!wrapper) return;
            var cards = wrapper.querySelectorAll('.curaide-hero-card');
            var defaultCard = wrapper.querySelector('[data-default-active="true"]');
            cards.forEach(function (card) {
                card.addEventListener('mouseenter', function () {
                    cards.forEach(function (c) {
                        c.classList.remove('curaide-hero-card--active');
                    });
                    card.classList.add('curaide-hero-card--active');
                });
            });
            wrapper.addEventListener('mouseleave', function () {
                cards.forEach(function (c) {
                    c.classList.remove('curaide-hero-card--active');
                });
                if (defaultCard) {
                    defaultCard.classList.add('curaide-hero-card--active');
                }
            });
        })();
    </script>
    <script type="application/ld+json">
    {
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Organization",
      "@id": "https://Curaide.ai/#organization",
      "name": "Flatworld Solutions Inc.",
      "url": "https://www.flatworldsolutions.com/",
      "brand": {
        "@type": "Brand",
        "name": "Curaide"
      }
    },
    {
      "@type": "WebSite",
      "@id": "https://Curaide.ai/#website",
      "url": "https://Curaide.ai/",
      "name": "Curaide",
      "description": "Curaide is a healthcare revenue cycle management decision control plane that governs operational decisions across existing healthcare systems, AI agents, and human teams.",
      "publisher": {
        "@id": "https://Curaide.ai/#organization"
      },
      "inLanguage": "en-US"
    },
    {
      "@type": "WebPage",
      "@id": "https://Curaide.ai/#webpage",
      "url": "https://Curaide.ai/",
      "name": "Curaide - Decision Control Plane for Healthcare Operations",
      "description": "Curaide combines DiagnosAIDE, modular Curaide PODs, and Compass to diagnose revenue cycle gaps, coordinate operational treatment, and measure improvement across existing healthcare systems.",
      "isPartOf": {
        "@id": "https://Curaide.ai/#website"
      },
      "about": {
        "@id": "https://Curaide.ai/#software"
      },
      "publisher": {
        "@id": "https://Curaide.ai/#organization"
      },
      "inLanguage": "en-US"
    },
    {
      "@type": "SoftwareApplication",
      "@id": "https://Curaide.ai/#software",
      "name": "Curaide",
      "alternateName": "Curaide Healthcare RCM Decision Control Plane",
      "url": "https://Curaide.ai/",
      "mainEntityOfPage": {
        "@id": "https://Curaide.ai/#webpage"
      },
      "applicationCategory": "BusinessApplication",
      "applicationSubCategory": "Healthcare Revenue Cycle Management",
      "operatingSystem": "Web-based",
      "description": "Curaide is a software-based decision control plane for healthcare revenue cycle operations. It operates above existing EHR, billing, RCM, AI, and workflow systems to determine what should happen next, what should be prioritized, and whether an action should be executed by an AI agent or reviewed by a human.",
      "provider": {
        "@id": "https://Curaide.ai/#organization"
      },
      "brand": {
        "@type": "Brand",
        "name": "Curaide"
      },
      "audience": {
        "@type": "BusinessAudience",
        "audienceType": "Healthcare organizations, hospitals, health systems, physician groups, specialty practices, revenue cycle leaders, healthcare CFOs, and private-equity-backed provider groups"
      },
      "featureList": [
        "DiagnosAIDE for revenue cycle diagnosis and root-cause intelligence",
        "ClaimAIDE for AR prioritization, denial prevention, and recovery workflows",
        "CoverAIDE for eligibility verification and prior-authorization gating",
        "ClinicAIDE for clinical documentation and coding integrity",
        "ConversAIDE for patient, payer, scheduling, intake, and follow-up conversations",
        "NurturAIDE for patient outreach, care-gap closure, and engagement",
        "Compass for readiness assessment, deployment planning, POD prioritization, and ROI measurement",
        "Economic arbitration for prioritizing actions by expected operational and financial value",
        "Policy- and evidence-led decision governance",
        "Human oversight for exceptions, approvals, and critical actions",
        "Integration with existing EHR, billing, RCM, and point-AI systems"
      ],
      "isRelatedTo": [
        {
          "@type": "SoftwareApplication",
          "name": "DiagnosAIDE",
          "applicationCategory": "Healthcare Revenue Cycle Intelligence",
          "description": "The Curaide diagnosis layer for identifying workflow gaps, revenue leakage, root causes, decision delays, and operational priorities."
        },
        {
          "@type": "SoftwareApplication",
          "name": "Curaide PODs",
          "applicationCategory": "Healthcare Revenue Cycle Automation",
          "description": "Five modular operational treatment components: ClaimAIDE, CoverAIDE, ClinicAIDE, ConversAIDE, and NurturAIDE."
        },
        {
          "@type": "SoftwareApplication",
          "name": "Compass",
          "applicationCategory": "Healthcare AI Readiness and ROI Measurement",
          "description": "The Curaide measurement layer for establishing baselines, defining deployment scope, prioritizing POD activation, and measuring ongoing improvement."
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://Curaide.ai/#faq",
      "url": "https://Curaide.ai/#faq",
      "name": "Curaide Frequently Asked Questions",
      "isPartOf": {
        "@id": "https://Curaide.ai/#webpage"
      },
      "about": {
        "@id": "https://Curaide.ai/#software"
      },
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Does Curaide replace our EHR, billing platform, or existing RCM systems?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. Curaide operates above the existing healthcare technology stack as a decision control plane. It governs workflow decisions, prioritizes operational effort, and coordinates execution while EHR, billing, and RCM systems continue performing their intended functions."
          }
        },
        {
          "@type": "Question",
          "name": "How is Curaide different from traditional RCM automation?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Traditional RCM automation focuses on predefined tasks or isolated workflows. Curaide connects diagnosis, operational treatment, and measurement to determine which workflows require attention, which actions should be executed, and how decisions and outcomes should be governed across existing systems."
          }
        },
        {
          "@type": "Question",
          "name": "Can we start with a single Curaide POD?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Organizations can begin with one Curaide POD aligned to a specific operational priority, or deploy DiagnosAIDE, Compass, or the complete Curaide framework. Adoption can expand progressively without replacing existing revenue cycle systems."
          }
        },
        {
          "@type": "Question",
          "name": "How does Curaide keep AI-driven decisions governed and auditable?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Curaide applies policy- and evidence-led decision governance, records AI-assisted decisions and outcomes, and keeps human reviewers responsible for exceptions, approvals, and critical actions. This supports operational traceability, accountability, and audit readiness."
          }
        },
        {
          "@type": "Question",
          "name": "How long does a typical Curaide implementation take?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Timelines depend on scope and integration requirements. Curaide materials indicate that a Compass assessment can be delivered in approximately two days, DiagnosAIDE can begin delivering intelligence within about 30 days, and individual Curaide POD deployments typically take 30 to 60 days."
          }
        },
        {
          "@type": "Question",
          "name": "What is the best way to evaluate Curaide for our organization?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A structured Curaide walkthrough followed by a Compass assessment is the recommended starting point. This establishes the operational baseline, identifies workflow and decision gaps, evaluates readiness, prioritizes POD activation, and defines a deployment roadmap aligned with the existing healthcare technology environment."
          }
        }
      ]
    }
  ]
}
</script>
</body>
</html>
