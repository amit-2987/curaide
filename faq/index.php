<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/autoload.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curaide FAQ | AI for Healthcare Revenue Cycle</title>
    <meta name="description" content="Explore Curaide FAQs on healthcare RCM AI, revenue cycle workflows, DiagnosAIDE, operational PODs, integration, governance, security, and deployment.">
    <link rel="shortcut icon" href="/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;600;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/header-assets.php') ?>
    <link href="/css/separate-curaide.css?v=<?php echo date("Y-m-d H:i:s"); ?>" rel="stylesheet">

</head>

<body>
    
  <section class="curaide-hero-section-privacy">
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/includes/header.php"; ?>

    <div class="container">

      <div class="row banner-privacy py-5">

        <div class="col-md-12 col-lg-12 col-xl-12">
            <div class="treatment-layer-badge d-inline-flex align-items-center gap-2 px-3 py-1 mb-3">
                <span class="treatment-layer-badge__dash"></span>
                <span class="treatment-layer-badge__text">CURAIDE FAQ HUB</span>
            </div>

          <h1>Everything You Need to Know <span>About Curaide</span></h1>

          <p>Whether you are evaluating AI for healthcare RCM, exploring Curaide's framework, or assessing deployment within your existing technology environment, this FAQ page answers the most common questions about Curaide, its framework, healthcare RCM, deployment, integration, security, and governance.</p>

        </div>

      </div>

    </div>
  </section>

    <section class="faq-body py-5">
        <div class="container">
            <div class="row g-5">
                <!-- Sidebar -->
                <aside class="col-lg-3">
                    <div class="sticky-top" style="top:20px;">
                        <h3 class="browse-title mb-4">Browse by Topic</h3>
                        <ul class="topic-list list-unstyled">
                            <li class="topic-item"><a href="#s1"><span class="topic-number">01</span><span class="topic-text">Is Curaide Right for Your RCM?</span></a></li>
                            <li class="topic-item"><a href="#s2"><span class="topic-number">02</span><span class="topic-text">How Does Curaide Govern RCM Decisions?</span></a></li>
                            <li class="topic-item"><a href="#s3"><span class="topic-number">03</span><span class="topic-text">Find RCM Gaps with DiagnosAIDE</span></a></li>
                            <li class="topic-item"><a href="#s4"><span class="topic-number">04</span><span class="topic-text">Execute RCM Workflows with Curaide PODs</span></a></li>
                            <li class="topic-item"><a href="#s5"><span class="topic-number">05</span><span class="topic-text">Measure AI Readiness and ROI with Compass</span></a></li>
                            <li class="topic-item"><a href="#s6"><span class="topic-number">06</span><span class="topic-text">How to Improve RCM Performance</span></a></li>
                            <li class="topic-item"><a href="#s7"><span class="topic-number">07</span><span class="topic-text">Will Curaide Work with Your Existing Systems?</span></a></li>
                            <li class="topic-item"><a href="#s8"><span class="topic-number">08</span><span class="topic-text">How Does Curaide Govern AI and PHI?</span></a></li>
                            <li class="topic-item"><a href="#s9"><span class="topic-number">09</span><span class="topic-text">How Do You Get Started with Curaide?</span></a></li>
                        </ul>
                    </div>
                </aside>

                <!-- FAQ Content -->
                <div class="col-lg-9">
                    <!-- Section 1 -->
                    <div class="faq-card" id="s1">
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <img src="images/2050-254.png" alt="" style="width:20px;height:7px; background: linear-gradient(181.61deg, #088AFF -6.75%, #096CD8 98.63%);border-radius: 20px;">
                            <h2 class="section-title mb-0">Is Curaide Right for Your RCM?</h2>
                        </div>
                        <div class="faq-item">
                            <h4 class="q">What is Curaide?</h4>
                            <p class="a">Curaide is a healthcare revenue cycle management (RCM) decision control plane built by Flatworld Solutions. It operates above an organization's existing EHR, billing, and revenue cycle technologies to govern operational decisions, not replace existing systems. Curaide determines what should happen next, which actions should be prioritized, and whether work should be executed by AI or reviewed by people based on organizational policies, operational context, and historical outcomes.</p>
                        </div>
                        <div class="faq-item">
                            <h4 class="q">Is Curaide an RCM software platform, a consulting service, or something else?</h4>
                            <p class="a">Curaide is a software-based operational control plane designed for healthcare revenue cycle operations. It is delivered through three connected components—DiagnosAIDE (Diagnosis), Curaide PODs (Treatment), and Compass (Measurement). Built and supported by Flatworld Solutions, Curaide combines healthcare operational expertise with AI-driven decision intelligence to strengthen revenue cycle execution.</p>
                        </div>
                        <div class="faq-item">
                            <h4 class="q">What is a decision control plane in healthcare RCM?</h4>
                            <p class="a">A decision control plane is a governance layer that coordinates operational decisions across existing healthcare systems. Rather than performing operational tasks itself, it determines the next appropriate action, whether that action should be executed by an AI agent or reviewed by a human, and how decisions align with organizational policies, business priorities, and historical outcomes.</p>
                        </div>
                        <div class="faq-item">
                            <h4 class="q">How is Curaide different from traditional RCM automation?</h4>
                            <p class="a">Traditional RCM automation focuses on automating predefined tasks or individual workflows. Curaide takes a broader operational approach by combining diagnosis, operational treatment, and continuous measurement within a single governance framework. It determines which workflows require attention, prioritizes operational effort, coordinates execution, and continuously measures performance across existing healthcare systems.</p>
                        </div>
                        <div class="faq-item">
                            <h4 class="q">Who can benefit from Curaide?</h4>
                            <p class="a">Curaide is designed for healthcare organizations managing complex revenue cycle operations, including hospitals, health systems, physician groups, specialty practices, revenue cycle organizations, and multi-site healthcare enterprises. It supports executive, operational, and financial leaders responsible for improving revenue cycle performance while maintaining governance and compliance.</p>
                        </div>
                        <div class="faq-item">
                            <h4 class="q">What operational challenges does Curaide address?</h4>
                            <p class="a">Curaide helps organizations identify workflow bottlenecks, prioritize operational effort, reduce preventable revenue leakage, strengthen governance across AI and human teams, improve visibility into revenue cycle performance, and coordinate execution across existing healthcare technologies without requiring the entire system replacement.</p>
                        </div>
                        <div class="faq-item">
                            <h4 class="q">Does Curaide replace our EHR, billing platform, or existing RCM tools?</h4>
                            <p class="a">No. Curaide operates above existing healthcare technologies as an operational control plane. Your EHR, billing systems, RCM platforms, and point solutions continue performing their intended functions while Curaide coordinates decisions, priorities, workflow execution, and governance across those systems.</p>
                        </div>
                        <div class="faq-item">
                            <h4 class="q">What makes Curaide different from deploying multiple RCM AI solutions?</h4>
                            <p class="a">Point AI solutions typically optimize individual tasks independently. Curaide governs decisions across the broader revenue cycle, ensuring operational priorities remain coordinated across multiple systems, AI capabilities, and human teams. This enables organizations to improve consistency, visibility, and governance rather than creating isolated automation initiatives.</p>
                        </div>
                        <div class="faq-item">
                            <h4 class="q">Can Curaide be adopted incrementally?</h4>
                            <p class="a">Yes. Organizations can begin with DiagnosAIDE, deploy individual Curaide PODs (ClaimAIDE, CoverAIDE, ClinicAIDE, ConversAIDE, NurturAIDE) aligned to specific workflow priorities, or implement the complete Curaide framework. This allows healthcare organizations to expand adoption progressively while maintaining continuity across existing operations.</p>
                        </div>
                        <div class="faq-item">
                            <h4 class="q">What outcomes does Curaide help healthcare organizations achieve?</h4>
                            <p class="a">Curaide helps healthcare organizations strengthen operational decision-making by improving workflow prioritization, coordinating execution across existing systems, increasing visibility into revenue cycle performance, reducing low-value operational effort, and maintaining governance across AI-assisted and human-led workflows.</p>
                        </div>
                    </div>

                    <!-- Section 2 -->
                    <div class="faq-card" id="s2">
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <img src="images/2050-256.png" alt="" style="width:20px;height:7px; background: linear-gradient(181.61deg, #088AFF -6.75%, #096CD8 98.63%);border-radius: 20px;">
                            <h2 class="section-title mb-0">How Does Curaide Govern RCM Decisions?</h2>
                        </div>
                        <div class="faq-item">
                            <h4 class="q">How does the Curaide Framework work?</h4>
                            <p class="a">The Curaide Framework follows three connected operational stages. DiagnosAIDE identifies workflow inefficiencies, operational bottlenecks, and revenue leakage opportunities. Curaide PODs coordinate targeted workflow execution based on those findings. Compass measures operational outcomes, tracks progress, and supports continuous optimization across healthcare revenue cycle operations.</p>
                        </div>
                        <div class="faq-item">
                            <h4 class="q">What are Curaide PODs?</h4>
                            <p class="a">Curaide PODs are five modular treatment components that execute the operational priorities identified during diagnosis:</p>

                            <div class="pod-panel mt-3">
                                <div class="pod-row">
                                    <div class="pod-logo"><img src="/assets/claim.png" alt="ClaimAIDE"></div>
                                    <div class="pod-text">AR prioritization and denial recovery</div>
                                </div>
                                <div class="pod-row">
                                    <div class="pod-logo"><img src="/assets/cover.png" alt="CoverAIDE"></div>
                                    <div class="pod-text">Eligibility verification and prior authorization</div>
                                </div>
                                <div class="pod-row">
                                    <div class="pod-logo"><img src="/assets/clinic.png" alt="ClinicAIDE"></div>
                                    <div class="pod-text">Clinical documentation and coding integrity</div>
                                </div>
                                <div class="pod-row">
                                    <div class="pod-logo"><img src="/assets/converse.png" alt="ConversAIDE"></div>
                                    <div class="pod-text">Patient engagement and conversational AI</div>
                                </div>
                            </div>

                            <p class="a mt-3">Organizations can deploy individual PODs based on operational priorities or implement multiple PODs as part of the broader Curaide framework.</p>
                        </div>
                        <div class="faq-item">
                            <h4 class="q">How do DiagnosAIDE, Curaide PODs, and Compass work together?</h4>
                            <p class="a">DiagnosAIDE identifies operational opportunities and workflow gaps. Curaide PODs coordinate execution across targeted healthcare workflows. Compass measures operational outcomes, deployment progress, and improvement opportunities. Together, they create a continuous operational intelligence cycle across healthcare revenue cycle operations.</p>
                        </div>
                        <div class="faq-item">
                            <h4 class="q">Can organizations deploy only one Curaide component?</h4>
                            <p class="a">Yes. Healthcare organizations can begin with DiagnosAIDE, deploy one or more Curaide PODs, or implement the complete Curaide framework. This allows organizations to align deployment with their operational priorities while expanding adoption over time.</p>
                        </div>
                        <div class="faq-item">
                            <h4 class="q">Does every organization require all five Curaide PODs?</h4>
                            <p class="a">No. Curaide POD deployment depends on each organization's workflow priorities, operational challenges, and business objectives. Compass helps identify where targeted operational treatment is likely to deliver the greatest impact.</p>
                        </div>
                        <div class="faq-item">
                            <h4 class="q">What is the difference between DiagnosAIDE and Curaide PODs?</h4>
                            <p class="a">DiagnosAIDE focuses on identifying workflow gaps, operational bottlenecks, and improvement opportunities. Curaide PODs execute targeted workflow interventions based on those findings. Diagnosis determines where action is needed, while Curaide PODs coordinate how that action is carried out.</p>
                        </div>
                        <div class="faq-item">
                            <h4 class="q">What role does Compass play within the Curaide Framework?</h4>
                            <p class="a">Compass establishes the organization's operational baseline, defines deployment priorities, and measures progress throughout implementation. It helps healthcare organizations understand readiness, prioritize Curaide POD deployment, and continuously evaluate operational improvement over time.</p>
                        </div>
                        <div class="faq-item">
                            <h4 class="q">How does Curaide determine which workflows should be prioritized?</h4>
                            <p class="a">Curaide combines operational policies, business priorities, workflow intelligence, and historical outcomes to determine where effort should be focused. This helps healthcare organizations direct AI and human resources toward the activities with the greatest operational and financial impact.</p>
                        </div>
                        <div class="faq-item">
                            <h4 class="q">What does economic arbitration mean in Curaide?</h4>
                            <p class="a">Economic arbitration is the decision logic Curaide uses to evaluate competing revenue cycle activities based on expected recovery value, operational effort, and business impact. This helps prioritize AI and human effort toward the actions most likely to deliver meaningful operational and financial outcomes.</p>
                        </div>
                    </div>

                    <!-- Section 3 -->
                    <div class="faq-card" id="s3">
                        <div class="d-flex align-items-center gap-2 mb-3">
                        <img src="images/2050-256.png" alt="" style="width:20px;height:7px; background: linear-gradient(181.61deg, #088AFF -6.75%, #096CD8 98.63%);border-radius: 20px;">
                        <h2 class="section-title mb-0">Find RCM Gaps with DiagnosAIDE</h2>
                        </div>
                        <div class="faq-item">
                            <h4 class="q">What is DiagnosAIDE?</h4>
                            <p class="a">DiagnosAIDE is Curaide's diagnosis layer. It analyzes healthcare revenue cycle operations to identify workflow inefficiencies, operational bottlenecks, decision delays, and revenue leakage opportunities before treatment begins.</p>
                        </div>
                        <div class="faq-item">
                            <h4 class="q">How does DiagnosAIDE identify operational priorities?</h4>
                            <p class="a">DiagnosAIDE evaluates operational data across revenue cycle workflows to identify bottlenecks, recurring process deviations, workflow inefficiencies, and financial impact. These insights help prioritize operational improvements before execution begins. By pinpointing where in the revenue cycle a problem originates, DiagnosAIDE lets organizations deploy the right POD against the specific failure point rather than applying broad automation.</p>
                        </div>
                        <div class="faq-item">
                            <h4 class="q">How can a healthcare CFO gain real-time visibility into revenue cycle performance without pulling manual reports?</h4>
                            <p class="a">DiagnosAIDE surfaces operational data, patterns, and financial signals in real time, giving executive and financial leadership continuous visibility into revenue cycle performance without requiring manual report generation.</p>
                        </div>
                        <div class="faq-item">
                            <h4 class="q">Does DiagnosAIDE replace business intelligence or reporting tools?</h4>
                            <p class="a">No. DiagnosAIDE complements existing reporting environments by providing operational diagnosis and decision intelligence. Rather than replacing dashboards, it helps explain why operational issues occur and where improvement efforts should be focused.</p>
                        </div>
                        <div class="faq-item">
                            <h4 class="q">Can DiagnosAIDE identify revenue leakage before claims are affected?</h4>
                            <p class="a">DiagnosAIDE identifies workflow patterns, operational bottlenecks, and policy deviations that may contribute to preventable revenue leakage, enabling organizations to address issues earlier in the revenue cycle.</p>
                        </div>
                    </div>

                    <!-- Section 4 -->
                    <div class="faq-card" id="s4">
                        <div class="d-flex align-items-center gap-2 mb-3">
                        <img src="images/2050-256.png" alt="" style="width:20px;height:7px; background: linear-gradient(181.61deg, #088AFF -6.75%, #096CD8 98.63%);border-radius: 20px;">
                        <h2 class="section-title mb-0">Execute RCM Workflows with Curaide PODs</h2>
                        </div>
                        <div class="faq-item">
                            <h4 class="q">What are Curaide PODs?</h4>
                            <p class="a">Curaide PODs are modular execution components that coordinate targeted workflow activities across healthcare revenue cycle operations. Each POD addresses a specific operational area while remaining connected through the Curaide framework.</p>
                        </div>
                        <div class="faq-item">
                            <h4 class="q">How are Curaide PODs selected?</h4>
                            <p class="a">Curaide PODs are recommended based on workflow priorities, operational gaps, and organizational objectives identified during diagnosis. Organizations can deploy individual PODs or multiple PODs as operational needs evolve.</p>
                        </div>
                        <div class="faq-item">
                            <h4 class="q">Can organizations deploy multiple Curaide PODs together?</h4>
                            <p class="a">Yes. Curaide PODs are designed to work independently or together, allowing organizations to coordinate execution across multiple revenue cycle workflows while maintaining centralized governance.</p>
                        </div>
                        <div class="faq-item">
                            <h4 class="q">What is the best AI approach for reducing claim denials?</h4>
                            <p class="a">Reducing denials requires both prevention and recovery. Curaide's CoverAIDE supports upstream eligibility verification and prior authorization, while ClaimAIDE prioritizes denial recovery activities based on operational and financial impact.</p>
                        </div>
                        <div class="faq-item">
                            <h4 class="q">Which Curaide POD helps with patient engagement?</h4>
                            <p class="a">ConversAIDE supports patient engagement through AI-assisted communication across scheduling, outreach, and operational interactions, while remaining PODs aligned with organizational workflows and governance policies.</p>
                        </div>
                        <div class="faq-item">
                            <h4 class="q">Can Curaide PODs work alongside existing healthcare technologies?</h4>
                            <p class="a">Yes. Curaide PODs execute within existing healthcare environments, coordinating workflows alongside EHRs, billing systems, and revenue cycle technologies rather than replacing them.</p>
                        </div>
                    </div>

                    <!-- Section 5 -->
                    <div class="faq-card" id="s5">
                        <div class="d-flex align-items-center gap-2 mb-3">
                        <img src="images/2050-256.png" alt="" style="width:20px;height:7px; background: linear-gradient(181.61deg, #088AFF -6.75%, #096CD8 98.63%);border-radius: 20px;">
                        <h2 class="section-title mb-0">Measure AI Readiness and ROI with Compass</h2>
                        </div>
                        <div class="faq-item">
                            <h4 class="q">What is Compass?</h4>
                            <p class="a">Compass is Curaide's measurement layer. It establishes operational baselines, tracks deployment readiness, evaluates implementation progress, and measures long-term operational outcomes for healthcare organizations.</p>
                        </div>
                        <div class="faq-item">
                            <h4 class="q">What is the Agentic Readiness Index?</h4>
                            <p class="a">The Agentic Readiness Index evaluates organizational readiness across data, workflows, systems, governance, and security to help healthcare organizations prepare for AI-governed operations.</p>
                        </div>
                        <div class="faq-item">
                            <h4 class="q">What is the Blueprint Roadmap?</h4>
                            <p class="a">The Blueprint Roadmap provides an implementation-ready deployment plan aligned with an organization's operational priorities, technology environment, and business objectives.</p>
                        </div>
                        <div class="faq-item">
                            <h4 class="q">What is the POD Activation Plan?</h4>
                            <p class="a">The POD Activation Plan identifies which Curaide PODs should be deployed first based on workflow priorities, operational gaps, and expected business impact.</p>
                        </div>
                        <div class="faq-item">
                            <h4 class="q">How does Compass measure ROI?</h4>
                            <p class="a">Compass establishes baseline operational performance before deployment and continuously measures operational improvements to help organizations understand progress and long-term value.</p>
                        </div>
                        <div class="faq-item">
                            <h4 class="q">How quickly can organizations begin seeing value from Curaide?</h4>
                            <p class="a">Compass assessments can typically be completed in approximately two days. DiagnosAIDE can go live in approximately 30 days, while individual Curaide POD deployments generally take 30–60 days, depending on implementation scope.</p>
                        </div>
                    </div>

                    <!-- Section 6 -->
                    <div class="faq-card" id="s6">
                        <div class="d-flex align-items-center gap-2 mb-3">
                        <img src="images/2050-256.png" alt="" style="width:20px;height:7px; background: linear-gradient(181.61deg, #088AFF -6.75%, #096CD8 98.63%);border-radius: 20px;">
                        <h2 class="section-title mb-0">How to Improve RCM Performance</h2>
                        </div>
                        <div class="faq-item">
                            <h4 class="q">Which healthcare workflows can Curaide support?</h4>
                            <p class="a">Curaide supports workflow coordination across eligibility verification, prior authorization, clinical documentation, coding integrity, denial management, accounts receivable, patient engagement, scheduling, and care-gap outreach.</p>
                        </div>
                        <div class="faq-item">
                            <h4 class="q">Can Curaide improve denial management?</h4>
                            <p class="a">Curaide helps healthcare organizations prioritize denial prevention and recovery by combining operational diagnosis, workflow prioritization, and targeted execution across the revenue cycle.</p>
                        </div>
                        <div class="faq-item">
                            <h4 class="q">How does Curaide improve operational visibility?</h4>
                            <p class="a">Curaide brings diagnosis, execution, and measurement together within a unified operational framework, giving healthcare organizations greater visibility into workflow performance, operational priorities, and business outcomes.</p>
                        </div>
                        <div class="faq-item">
                            <h4 class="q">Can Curaide support multi-site healthcare organizations?</h4>
                            <p class="a">Yes. Curaide is designed to coordinate operational decisions across distributed healthcare environments while maintaining centralized governance and operational consistency.</p>
                        </div>
                        <div class="faq-item">
                            <h4 class="q">Is Curaide suitable for private-equity-backed healthcare organizations?</h4>
                            <p class="a">Yes. Curaide supports multi-site healthcare organizations, including private-equity-backed provider groups, by helping establish operational visibility, coordinate workflow execution, and accelerate integration across newly acquired practices.</p>
                        </div>
                    </div>

                    <!-- Section 7 -->
                    <div class="faq-card" id="s7">
                        <div class="d-flex align-items-center gap-2 mb-3">
                        <img src="images/2050-256.png" alt="" style="width:20px;height:7px; background: linear-gradient(181.61deg, #088AFF -6.75%, #096CD8 98.63%);border-radius: 20px;">
                        <h2 class="section-title mb-0">Will Curaide Work with Your Existing Systems?</h2>
                        </div>
                        <div class="faq-item">
                            <h4 class="q">Can Curaide integrate with existing EHR and billing systems?</h4>
                            <p class="a">Yes. Curaide operates above existing EHRs, billing systems, revenue cycle platforms, and AI point solutions, coordinating operational decisions without requiring replacement of existing technologies.</p>
                        </div>
                        <div class="faq-item">
                            <h4 class="q">Does Curaide require organizations to replace existing AI tools?</h4>
                            <p class="a">No. Curaide complements existing AI investments by governing operational decisions and coordinating execution across the current technology ecosystem.</p>
                        </div>
                        <div class="faq-item">
                            <h4 class="q">How does Curaide reduce dependence on multiple point solutions?</h4>
                            <p class="a">Rather than replacing existing technologies, Curaide centralizes decision governance across healthcare systems, helping organizations coordinate existing tools through a unified operational framework.</p>
                        </div>
                        <div class="faq-item">
                            <h4 class="q">How can healthcare organizations reduce the number of RCM point solutions they manage?</h4>
                            <p class="a">Curaide governs operational decisions across existing technologies, allowing organizations to consolidate decision-making and reporting without replacing their current healthcare systems.</p>
                        </div>
                    </div>

                    <!-- Section 8 -->
                    <div class="faq-card" id="s8">
                        <div class="d-flex align-items-center gap-2 mb-3">
                        <img src="images/2050-256.png" alt="" style="width:20px;height:7px; background: linear-gradient(181.61deg, #088AFF -6.75%, #096CD8 98.63%);border-radius: 20px;">
                        <h2 class="section-title mb-0">How Does Curaide Govern AI and PHI?</h2>
                        </div>
                        <div class="faq-item">
                            <h4 class="q">How does Curaide approach HIPAA compliance and PHI protection?</h4>
                            <p class="a">Curaide is being built with HIPAA compliance requirements embedded from the ground up, including administrative, technical, and physical safeguards for protected health information (PHI). Data is encrypted in transit and at rest.</p>
                        </div>
                        <div class="faq-item">
                            <h4 class="q">What compliance credentials support Curaide's operational delivery?</h4>
                            <p class="a">Curaide's operational delivery partner, Flatworld Solutions Private Limited (India), maintains ISO/IEC 27001:2022 and ISO 9001:2015 certifications and a SOC 2 Type 2 attestation.<br><br>Note: These credentials belong to Flatworld Solutions Private Limited, not Curaide.ai, which is currently under development. Where the delivery partner handles PHI, a Business Associate Agreement (BAA) governs that handling and requires compliance with applicable HIPAA requirements. Certifications are subject to periodic renewal and audit.</p>
                        </div>
                        <div class="faq-item">
                            <h4 class="q">Does Curaide use PHI to train AI models?</h4>
                            <p class="a">No. PHI is not used to train externally accessible AI models unless explicitly authorized. Curaide is designed to protect PHI through its security and governance controls.</p>
                        </div>
                        <div class="faq-item">
                            <h4 class="q">How are AI-driven decisions kept auditable?</h4>
                            <p class="a">Curaide records AI-assisted operational decisions in its Evidence Ledger within an evidence-led governance framework, supporting auditability, compliance reviews, and organizational oversight while maintaining human authority over critical decisions.</p>
                        </div>
                        <div class="faq-item">
                            <h4 class="q">Does Curaide replace healthcare revenue cycle teams?</h4>
                            <p class="a">No. Curaide supports policy-driven operational execution while keeping human experts responsible for exceptions, approvals, governance, and critical business decisions.</p>
                        </div>
                    </div>

                    <!-- Section 9 -->
                    <div class="faq-card" id="s9">
                        <div class="d-flex align-items-center gap-2 mb-3">
                        <img src="images/2050-256.png" alt="" style="width:20px;height:7px; background: linear-gradient(181.61deg, #088AFF -6.75%, #096CD8 98.63%);border-radius: 20px;">
                        <h2 class="section-title mb-0">How Do You Get Started with Curaide?</h2>
                        </div>
                        <div class="faq-item">
                            <h4 class="q">What is the first step in evaluating Curaide?</h4>
                            <p class="a">Most organizations begin with a structured Curaide walkthrough followed by a Compass assessment to evaluate operational readiness, workflow priorities, and deployment opportunities.</p>
                        </div>
                        <div class="faq-item">
                            <h4 class="q">How is Curaide implemented?</h4>
                            <p class="a">Organizations can begin with DiagnosAIDE, individual Curaide PODs, or the complete Curaide framework, allowing implementation to align with operational priorities and organizational objectives.</p>
                        </div>
                        <div class="faq-item">
                            <h4 class="q">How long does a typical Curaide deployment take?</h4>
                            <p class="a">Deployment timelines depend on organizational scope and implementation priorities. Compass can typically be completed in approximately two days, DiagnosAIDE can go live in approximately 30 days, and individual Curaide POD deployments generally take 30–60 days.</p>
                        </div>
                        <div class="faq-item">
                            <h4 class="q">What should healthcare leaders consider when evaluating AI revenue cycle management solutions?</h4>
                            <p class="a">Healthcare organizations should evaluate how a solution integrates with existing technologies, supports explainable decision-making, maintains governance and auditability, protects patient information, measures operational outcomes, and aligns deployment with organizational priorities.</p>
                        </div>
                    </div>

                    <!-- CTA card -->
                    <div class="cta-card mt-4">
                        <h2 class="cta-title">Ready to See Where Curaide Fits Your RCM?</h2>
                        <p class="cta-sub">See how Curaide can work within your existing revenue cycle environment and identify where to diagnose, prioritize, and execute first.</p>
                        <button type="button" class="curaide-btn curaide-btn--primary" data-bs-toggle="modal" data-bs-target="#demoModal">
                            <span class="curaide-btn__icon-left"><i class="fa-solid fa-phone-volume"></i></span>
                            Talk to a Curaide Expert
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        :root {
            /* --font-primary: 'Inter', sans-serif; */
            --color-primary: #ffffff;
            --color-secondary: #000000;
            --color-1: #ffffff;
            --color-2: #000000;
            --color-3: #087eef;
            --color-4: #002043;
            --color-5: #0b192c;
            --color-6: #001429;
            --color-7: #4b5563;
            --color-8: #232c3a;
            --color-9: #d7ecff;
            --color-10: #d9d9d9;
            --color-11: #e6e6e7;
            --color-12: #ebf5ff;
        }

        :root {
            /* --font-primary: 'Inter', sans-serif; */
            --font-display: 'Raleway', sans-serif;
            --color-white: #ffffff;
            --color-black: #000000;
            --color-blue: #087eef;
            --color-blue-2: #088aff;
            --color-blue-3: #096cd8;
            --color-navy: #002043;
            --color-navy-2: #0b192c;
            --color-navy-3: #001429;
            --color-gray: #4b5563;
            --color-dark: #232c3a;
            --color-light-blue: #d7ecff;
            --color-lighter-blue: #ebf5ff;
            --grad-blue: linear-gradient(135deg, #088aff 0%, #096cd8 100%);
            --grad-blue-cta: linear-gradient(135deg, #0970dd 0%, #64b3fb 100%);
        }

        body {
            /* font-family: var(--font-primary); */
            color: var(--color-gray);
            background: #fff;
        }

        /* HERO */
        .curaide-hero {
            background: url('images/2003-3.png') center top / cover no-repeat, linear-gradient(180deg, #eaf3ff 0%, #ffffff 100%);
            padding-bottom: 80px;
        }

        .nav-link-custom {
            color: var(--color-navy);
            text-decoration: none;
            font-weight: 500;
            font-size: 14px;
        }

        .nav-link-custom:hover {
            color: var(--color-blue);
        }

        .btn-gradient-blue {
            background: var(--grad-blue);
            color: #fff;
            font-weight: 600;
            font-size: 14px;
            padding: 14px 26px;
            border-radius: 8px;
            border: none;
        }

        .btn-gradient-blue:hover {
            color: #fff;
            opacity: .92;
        }

        .btn-demo {
            background: #fff;
            color: var(--color-navy);
            font-weight: 600;
            font-size: 14px;
            padding: 14px 22px;
            padding-right: 52px;
            border-radius: 8px;
            border: 1px solid #e6e6e7;
            position: relative;
        }

        .btn-demo .demo-dot {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            width: 24px;
            height: 24px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .btn-demo .demo-dot img {
            width: 24px;
            height: 24px;
            border-radius: 50%;
        }

        .hero-content {
            padding-top: 100px;
        }

        .hero-badge {
            background: #fff;
            border-radius: 97px;
            padding: 10px 24px;
            color: var(--color-navy);
            font-size: 14px;
            font-weight: 500;
            box-shadow: 0 4px 20px rgba(9, 108, 216, .08);
        }

        .hero-title {
            font-family: var(--font-display);
            font-weight: 600;
            font-size: 72px;
            line-height: 1.1;
            color: var(--color-navy-2);
        }

        .text-accent-blue {
            color: var(--color-blue-2);
        }

        .hero-sub {
            max-width: 900px;
            font-size: 18px;
            color: var(--color-navy-3);
            font-weight: 500;
            line-height: 1.6;
        }

        /* FAQ BODY */
        .faq-body {
            /* background: linear-gradient(180deg, #eaf3ff 0%, #f6faff 40%, #ffffff 100%); */
        }

        .browse-title {
            font-size: 22px;
            font-weight: 600;
            color: var(--color-dark);
        }

        .topic-list {}

        .topic-item {
            margin-bottom: 8px;
        }

        .topic-item a {
            display: flex;
            align-items: flex-start;
            text-decoration: none;
            color: var(--color-gray);
            font-weight: 500;
            font-size: 15px;
            line-height: 1.4;
            padding: 12px 16px;
        }

        .topic-number {
            flex: 0 0 auto;
            color: var(--color-blue-2);
            margin-right: 12px;
            white-space: nowrap;
        }

        .topic-text {
            flex: 1 1 auto;
            min-width: 0;
        }

        .topic-item.active a,
        .topic-item a.active {
            background: var(--color-lighter-blue);
            color: var(--color-blue-2);
            border-left: 3px solid var(--color-blue-2);
            border-radius: 0 8px 8px 0;
            padding: 12px 16px 12px 13px;
        }

        .faq-card {
            background: #fff;
            border-radius: 21px;
            padding: 40px 42px;
            margin-bottom: 32px;
            box-shadow: 0 8px 40px rgba(11, 25, 44, .06);
        }

        .section-title {
            font-size: 25px;
            font-weight: 700;
            color: var(--color-dark);
        }

        .faq-item {
            padding: 22px 0;
            border-bottom: 1px solid #eef2f7;
        }

        .faq-item:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }

        .faq-item:first-of-type {
            padding-top: 14px;
        }

        .q {
            font-size: 18px;
            font-weight: 600;
            color: var(--color-dark);
            margin-bottom: 12px;
            font-family: "Inter", sans-serif;
        }

        .a {
            font-size: 16px;
            color: var(--color-gray);
            line-height: 1.6;
            margin-bottom: 0;
            font-family: "Inter", sans-serif;
        }

        .pod-panel {
            background: var(--color-lighter-blue);
            border-radius: 15px;
            padding: 8px;
        }

        .pod-row {
            background: #fff;
            border-radius: 9px;
            padding: 14px 20px;
            margin-bottom: 6px;
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .pod-row:last-child {
            margin-bottom: 0;
        }

        .pod-logo {
            flex: 0 0 220px;
        }

        .pod-logo img {
            max-width: 200px;
            height: auto;
        }

        .pod-text {
            font-size: 15px;
            color: var(--color-gray);
            border-left: 1px solid #d7e3f0;
            padding-left: 20px;
        }

        /* CTA CARD */
        .cta-card {
            background: var(--color-light-blue);
            border-radius: 34px;
            padding: 56px 60px;
        }

        .cta-title {
            font-size: 30px;
            font-weight: 600;
            color: var(--color-dark);
            margin-bottom: 14px;
        }

        .cta-sub {
            font-size: 17px;
            font-weight: 500;
            color: var(--color-gray);
            margin-bottom: 28px;
            max-width: 720px;
        }

        /* FOOTER */
        .site-footer {
            background: var(--color-navy);
            color: #fff;
            margin-top: 60px;
            position: relative;
            padding-top: 40px;
        }

        .site-footer::before {
            content: "";
            display: block;
            height: 80px;
            background: var(--color-blue-2);
            clip-path: polygon(0 100%, 50% 0, 100% 100%);
            position: absolute;
            top: -1px;
            left: 0;
            right: 0;
        }

        .footer-logo {
            max-width: 240px;
            height: auto;
            margin-top: 20px;
        }

        .footer-hr {
            border-color: rgba(255, 255, 255, .25);
            margin: 0;
        }

        .footer-nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 22px;
            font-size: 14px;
            font-weight: 500;
        }

        .footer-nav a:hover {
            color: var(--color-blue-2);
        }

        .footer-copy {
            color: #fff;
            font-size: 15px;
        }

        .scroll-top {
            position: absolute;
            right: 24px;
            bottom: 40px;
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: var(--color-blue-3);
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        @media (max-width: 991px) {
            .hero-title {
                font-size: 44px;
            }

            .faq-card {
                padding: 28px 22px;
            }

            .cta-card {
                padding: 36px 26px;
            }

            .pod-logo {
                flex: 0 0 140px;
            }

            .pod-logo img {
                max-width: 120px;
            }

            .footer-nav a {
                display: inline-block;
                margin: 6px 12px;
            }
        }
    </style>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const sections = document.querySelectorAll(".faq-card");
            const navLinks = document.querySelectorAll(".topic-item a");

            function setActiveLink(href) {
                navLinks.forEach(link => link.classList.remove("active"));

                navLinks.forEach(link => {
                    if (link.getAttribute("href") === href) {
                        link.classList.add("active");
                    }
                });
            }

            function updateActiveOnScroll() {
                let current = "";

                sections.forEach(section => {
                    const sectionTop = section.offsetTop - 150;

                    if (window.scrollY >= sectionTop) {
                        current = section.getAttribute("id");
                    }
                });

                setActiveLink(current ? "#" + current : "#s1");
            }

            window.addEventListener("scroll", updateActiveOnScroll);

            navLinks.forEach(link => {
                link.addEventListener("click", function() {
                    setActiveLink(this.getAttribute("href"));
                });
            });

            updateActiveOnScroll();
        });
    </script>

    <?php
    $host = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'];
    $uri = explode('?', $_SERVER['REQUEST_URI'], 2)[0];
    $uri = preg_replace('/index\\.php$/i', '', $uri);
    $pageUrl = rtrim($host . $uri, '/');

    $source = file_get_contents(__FILE__);
    $html = preg_replace('/<\\?php.*?\\?>/s', '', $source);

    libxml_use_internal_errors(true);
    $doc = new DOMDocument();
    $doc->loadHTML($html);
    libxml_clear_errors();

    $xpath = new DOMXPath($doc);
    $items = $xpath->query('//div[contains(@class, "faq-item")]');
    $mainEntity = [];

    foreach ($items as $item) {
        $qNodes = $xpath->query('.//h4[contains(@class, "q")]', $item);
        $aNodes = $xpath->query('.//p[contains(@class, "a")]', $item);

        if ($qNodes->length === 0 || $aNodes->length === 0) {
            continue;
        }

        $question = trim($qNodes->item(0)->textContent);
        $answer = trim($aNodes->item(0)->textContent);

        if (!$question || !$answer) {
            continue;
        }

        $mainEntity[] = [
            '@type' => 'Question',
            'name' => $question,
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => $answer
            ]
        ];
    }

    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        '@id' => $pageUrl . '#faq',
        'url' => $pageUrl,
        'name' => 'Curaide Frequently Asked Questions',
        'mainEntity' => $mainEntity
    ];
    ?>
    <script type="application/ld+json">
    <?php echo json_encode($schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT); ?>
    </script>
</body>

</html>