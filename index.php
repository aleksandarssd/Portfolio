<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section id="hero" class="hero-section">
    <div class="hero-bg-grid"></div>
    <div class="container hero-content">
        <div class="hero-text">
            <p class="hero-greeting">SYSTEM ONLINE //</p>
            <h1 class="hero-title">
                <span class="name-highlight">SKANDAR</span><br>
                <span class="surname-highlight">MOKNI</span>
            </h1>
            <div class="hero-badges">
                <span class="badge badge-mech"><i class="fas fa-microchip"></i> Digital Systems</span>
                <span class="badge badge-soft"><i class="fas fa-cogs"></i> Mechanical Design Engineer</span>
            </div>
            <p class="hero-subtitle">
                Optimizing physical systems through digital logic. 
                Bridging the gap between heavy machinery and digital infrastructure through computational design and engineering automation.
            </p>
            <div class="hero-cta">
                <a href="#projects" class="btn btn-primary">View Projects</a>
                <a href="Skandar-Mokni-CV_en.pdf" class="btn btn-outline" target="_blank">CV (EN)</a>
                <a href="Skandar_mokni_cv_sr.pdf" class="btn btn-outline" target="_blank">CV (SR)</a>
            </div>
        </div>
        <div class="hero-visual">
            <div class="nexus-container">
                <svg viewBox="0 0 400 400" xmlns="http://www.w3.org/2000/svg" class="nexus-svg">
                    <!-- Outer precision ring -->
                    <circle cx="200" cy="200" r="180" fill="none" stroke="rgba(245,158,11,0.35)" stroke-width="1.5" class="ring-outer"/>
                    
                    <!-- Tick marks around the ring (precision gauge) -->
                    <g class="tick-marks">
                        <line x1="200" y1="22" x2="200" y2="35" stroke="rgba(245,158,11,0.7)" stroke-width="2"/>
                        <line x1="290" y1="38" x2="285" y2="47" stroke="rgba(245,158,11,0.5)" stroke-width="1.5"/>
                        <line x1="355" y1="110" x2="346" y2="115" stroke="rgba(245,158,11,0.5)" stroke-width="1.5"/>
                        <line x1="378" y1="200" x2="365" y2="200" stroke="rgba(245,158,11,0.7)" stroke-width="2"/>
                        <line x1="355" y1="290" x2="346" y2="285" stroke="rgba(245,158,11,0.5)" stroke-width="1.5"/>
                        <line x1="290" y1="362" x2="285" y2="353" stroke="rgba(245,158,11,0.5)" stroke-width="1.5"/>
                        <line x1="200" y1="378" x2="200" y2="365" stroke="rgba(245,158,11,0.7)" stroke-width="2"/>
                        <line x1="110" y1="362" x2="115" y2="353" stroke="rgba(245,158,11,0.5)" stroke-width="1.5"/>
                        <line x1="45" y1="290" x2="54" y2="285" stroke="rgba(245,158,11,0.5)" stroke-width="1.5"/>
                        <line x1="22" y1="200" x2="35" y2="200" stroke="rgba(245,158,11,0.7)" stroke-width="2"/>
                        <line x1="45" y1="110" x2="54" y2="115" stroke="rgba(245,158,11,0.5)" stroke-width="1.5"/>
                        <line x1="110" y1="38" x2="115" y2="47" stroke="rgba(245,158,11,0.5)" stroke-width="1.5"/>
                    </g>

                    <!-- Rotating mechanical ring with gear teeth -->
                    <g class="mech-ring">
                        <circle cx="200" cy="200" r="140" fill="none" stroke="rgba(245,158,11,0.45)" stroke-width="2" stroke-dasharray="8 4"/>
                        <!-- Gear tooth shapes -->
                        <rect x="196" y="56" width="8" height="12" rx="1" fill="rgba(245,158,11,0.6)"/>
                        <rect x="196" y="332" width="8" height="12" rx="1" fill="rgba(245,158,11,0.6)"/>
                        <rect x="56" y="196" width="12" height="8" rx="1" fill="rgba(245,158,11,0.6)"/>
                        <rect x="332" y="196" width="12" height="8" rx="1" fill="rgba(245,158,11,0.6)"/>
                        <rect x="296" y="86" width="8" height="12" rx="1" fill="rgba(245,158,11,0.5)" transform="rotate(30 300 92)"/>
                        <rect x="96" y="302" width="8" height="12" rx="1" fill="rgba(245,158,11,0.5)" transform="rotate(30 100 308)"/>
                        <rect x="302" y="296" width="12" height="8" rx="1" fill="rgba(245,158,11,0.5)" transform="rotate(60 308 300)"/>
                        <rect x="86" y="96" width="12" height="8" rx="1" fill="rgba(245,158,11,0.5)" transform="rotate(60 92 100)"/>
                    </g>

                    <!-- Digital circuit traces (blue paths) -->
                    <g class="circuit-traces">
                        <path d="M200 80 L200 130 L240 170" fill="none" stroke="rgba(59,130,246,0.5)" stroke-width="1.5"/>
                        <path d="M320 200 L270 200 L230 240" fill="none" stroke="rgba(59,130,246,0.5)" stroke-width="1.5"/>
                        <path d="M200 320 L200 270 L160 230" fill="none" stroke="rgba(59,130,246,0.5)" stroke-width="1.5"/>
                        <path d="M80 200 L130 200 L170 160" fill="none" stroke="rgba(59,130,246,0.5)" stroke-width="1.5"/>
                    </g>

                    <!-- Inner hexagon (precision core) -->
                    <polygon points="200,145 248,172 248,228 200,255 152,228 152,172" 
                             fill="none" stroke="rgba(245,158,11,0.4)" stroke-width="2" class="hex-core"/>

                    <!-- Center crosshair -->
                    <line x1="188" y1="200" x2="212" y2="200" stroke="rgba(245,158,11,0.7)" stroke-width="1.5"/>
                    <line x1="200" y1="188" x2="200" y2="212" stroke="rgba(245,158,11,0.7)" stroke-width="1.5"/>
                    <circle cx="200" cy="200" r="5" fill="none" stroke="rgba(245,158,11,0.6)" stroke-width="1.5" class="center-dot"/>

                    <!-- Circuit junction nodes -->
                    <circle cx="200" cy="130" r="4" fill="rgba(59,130,246,0.3)" stroke="rgba(59,130,246,0.8)" stroke-width="1.5" class="junction-node"/>
                    <circle cx="270" cy="200" r="4" fill="rgba(59,130,246,0.3)" stroke="rgba(59,130,246,0.8)" stroke-width="1.5" class="junction-node"/>
                    <circle cx="200" cy="270" r="4" fill="rgba(59,130,246,0.3)" stroke="rgba(59,130,246,0.8)" stroke-width="1.5" class="junction-node"/>
                    <circle cx="130" cy="200" r="4" fill="rgba(59,130,246,0.3)" stroke="rgba(59,130,246,0.8)" stroke-width="1.5" class="junction-node"/>
                </svg>

                <!-- Floating labels -->
                <span class="nexus-label label-mech">MECH</span>
                <span class="nexus-label label-digi">DIGI</span>
            </div>
        </div>
    </div>
    <div class="scroll-indicator">
        <div class="mouse"></div>
        <span>Scroll to Initialize</span>
    </div>
</section>

<!-- About Section -->
<section id="about" class="section about-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">About Me</h2>
            <div class="section-line"></div>
            <p class="section-subtitle">The intersection of precision engineering and algorithmic logic.</p>
        </div>
        
        <div class="about-grid">
            <div class="about-bio">
                <h3>Professional Biography</h3>
                <p>
                    I am a <strong>Digital Systems & Mechanical Design Engineer</strong>, bridging the gap between heavy machinery design and digital infrastructure. My foundation is built on physical constraints, materials, and heavy machinery design from the University of Novi Sad.
                </p>
                <p>
                    By integrating <strong>Computational Design</strong> and <strong>Engineering Automation</strong>, I build systems that optimize physical processes through digital logic. Whether it's designing complex mechanical assemblies or developing full-scale web applications, I deliver precision-engineered solutions across the entire hardware-software spectrum.
                </p>
            </div>
            
            <div class="about-details">
                <div class="detail-block">
                    <h4><i class="fas fa-graduation-cap"></i> Education</h4>
                    <ul class="detail-list">
                        <li>
                            <span class="year">2019 - 2024</span>
                            <strong>B.S. Mechanical Engineering</strong>
                            <span class="institution">University of Novi Sad, Faculty of Technical Sciences</span>
                            <span class="institution" style="font-size: 0.85rem; margin-top: 4px;">Mechanization & Construction Machines</span>
                        </li>
                        <li>
                            <span class="year">2019 - Present</span>
                            <strong>Software Engineering</strong>
                            <span class="institution">Self-Taught & Freelance Experience</span>
                        </li>
                    </ul>
                </div>
                <div class="detail-block">
                    <h4><i class="fas fa-bolt"></i> Key Strengths</h4>
                    <div class="tags-container">
                        <span class="tag">Mechanical Design & DFM</span>
                        <span class="tag">3D CAD Modeling</span>
                        <span class="tag">Simulation & Analysis</span>
                        <span class="tag">Full Stack Dev (MERN/LAMP)</span>
                        <span class="tag">Database Architecture</span>
                        <span class="tag">E-Commerce & CMS</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="section projects-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Selected Projects</h2>
            <div class="section-line"></div>
            <p class="section-subtitle">A showcase of mechanical precision and digital logic.</p>
        </div>

        <!-- Category 1: Automated Machinery & Robotics -->
        <div class="project-category">
            <div class="category-header">
                <i class="fas fa-robot text-mech"></i>
                <h3>Automated Machinery & Robotics</h3>
            </div>
            <div class="projects-grid">
                <!-- Enova Docking Station -->
                <article class="project-card mech-card">
                    <div class="card-header">
                        <span>ID: AUTO-001</span>
                        <span class="project-status">COMPLETED</span>
                    </div>
                    <div class="project-image mech-img-1">
                        <div class="placeholder-img" style="background-image: url('data/files/Enova Docking Station/enova_blueprint.png'); background-size: cover;"></div>
                        <div class="overlay-info">
                            <span class="tool">System Design</span>
                            <span class="tool">Automation</span>
                        </div>
                    </div>
                    <div class="project-content">
                        <h4>Enova Docking Station</h4>
                        <p>Complete structural and automation design of the Enova Docking Station.</p>
                        <div class="tech-specs">
                            <ul>
                                <li><strong>Software:</strong> SolidWorks</li>
                                <li><strong>Materials/Std:</strong> Industrial Grade Steel</li>
                                <li><strong>Achievement:</strong> Zero-tolerance docking precision</li>
                            </ul>
                        </div>
                        <a href="project-details.php?id=auto-001" class="btn-link">View Details <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>
                
                <!-- Gear Reducer -->
                <article class="project-card mech-card">
                    <div class="card-header">
                        <span>ID: AUTO-003</span>
                        <span class="project-status">COMPLETED</span>
                    </div>
                    <div class="project-image mech-img-2">
                        <div class="placeholder-img" style="background-image: url('data/images/Gear Reductor/bleuprint2.jpg'); background-size: cover;"></div>
                        <div class="overlay-info">
                            <span class="tool">Autodesk Inventor</span>
                            <span class="tool">Gear Design</span>
                        </div>
                    </div>
                    <div class="project-content">
                        <h4>Two-Stage Gear Reducer</h4>
                        <p>Analytical and graphical design of a two-stage cylindrical gear reducer. Includes gear ratio optimization, motor selection, and 3D assembly.</p>
                        <div class="tech-specs">
                            <ul>
                                <li><strong>Software:</strong> Autodesk Inventor</li>
                                <li><strong>Materials/Std:</strong> Alloy Steel, ISO Standards</li>
                                <li><strong>Achievement:</strong> Optimized torque transmission</li>
                            </ul>
                        </div>
                        <a href="project-details.php?id=mech-002" class="btn-link">View Datasheet <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>
                
                <!-- Parametric Gear Pump -->
                <article class="project-card mech-card">
                    <div class="card-header">
                        <span>ID: AUTO-004</span>
                        <span class="project-status">COMPLETED</span>
                    </div>
                    <div class="project-image mech-img-1">
                         <div class="placeholder-img" style="background-image: url('data/images/Gear Pump/blueprint_pump.jpg'); background-size: cover;"></div>
                        <div class="overlay-info">
                            <span class="tool">CATIA V5</span>
                            <span class="tool">Parametric Design</span>
                        </div>
                    </div>
                    <div class="project-content">
                        <h4>Parametric Gear Pump</h4>
                        <p>Parametric 3D CAD model of an external gear pump. Features Excel-driven design tables for instant variant generation.</p>
                        <div class="tech-specs">
                            <ul>
                                <li><strong>Software:</strong> CATIA V5 + Excel</li>
                                <li><strong>Materials/Std:</strong> Cast Iron, DFM</li>
                                <li><strong>Achievement:</strong> Automated variant generation</li>
                            </ul>
                        </div>
                        <a href="project-details.php?id=mech-005" class="btn-link">View Datasheet <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>
            </div>
        </div>

        <!-- Category 2: Structural Engineering & DFM -->
        <div class="project-category">
            <div class="category-header">
                <i class="fas fa-drafting-compass text-mech"></i>
                <h3>Structural Engineering & DFM</h3>
            </div>
            <div class="projects-grid">
                <!-- Jib Crane -->
                <article class="project-card mech-card">
                    <div class="card-header">
                        <span>ID: STRUCT-001</span>
                        <span class="project-status">COMPLETED</span>
                    </div>
                    <div class="project-image mech-img-1">
                        <div class="placeholder-img" style="background-image: url('data/images/Crane Lift/blueprint.jpg'); background-size: cover;"></div>
                        <div class="overlay-info">
                            <span class="tool">Autodesk Inventor</span>
                            <span class="tool">EngiLab</span>
                        </div>
                    </div>
                    <div class="project-content">
                        <h4>Jib Crane Structural Design</h4>
                        <p>Complete structural design and calculation of a 0.25-ton jib crane. Includes analytical verification, 3D modeling, and safety factor analysis.</p>
                        <div class="tech-specs">
                            <ul>
                                <li><strong>Software:</strong> Autodesk Inventor + EngiLab</li>
                                <li><strong>Materials/Std:</strong> Structural Steel S235JR</li>
                                <li><strong>Achievement:</strong> Safety factor: 2.5 verified</li>
                            </ul>
                        </div>
                        <a href="project-details.php?id=mech-001" class="btn-link">View Datasheet <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>

                <!-- Metal Structure -->
                <article class="project-card mech-card">
                    <div class="card-header">
                        <span>ID: STRUCT-002</span>
                        <span class="project-status">COMPLETED</span>
                    </div>
                    <div class="project-image mech-img-1">
                        <div class="placeholder-img" style="background-image: url('data/images/Metal Construction/blueprint.jpg'); background-size: cover;"></div>
                        <div class="overlay-info">
                            <span class="tool">Structural Analysis</span>
                            <span class="tool">Weld Design</span>
                        </div>
                    </div>
                    <div class="project-content">
                        <h4>Metal Structure Design</h4>
                        <p>Structural analysis of a welded steel cantilever support. Verified cross-section resistance and welded joint integrity under load.</p>
                        <div class="tech-specs">
                            <ul>
                                <li><strong>Software:</strong> Analytical Solvers</li>
                                <li><strong>Materials/Std:</strong> Welded Steel, Eurocode 3</li>
                                <li><strong>Achievement:</strong> Optimized weld sizing</li>
                            </ul>
                        </div>
                        <a href="project-details.php?id=mech-004" class="btn-link">View Datasheet <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>
                
                <!-- Chesterfield Armchair -->
                <article class="project-card mech-card">
                    <div class="card-header">
                        <span>ID: STRUCT-003</span>
                        <span class="project-status">COMPLETED</span>
                    </div>
                    <div class="project-image mech-img-1">
                        <div class="placeholder-img" style="background-image: url('data/images/Fotelja Chesterterfield/blueprint.png'); background-size: cover;"></div>
                        <div class="overlay-info">
                            <span class="tool">3D CAD</span>
                            <span class="tool">Technical Drafting</span>
                        </div>
                    </div>
                    <div class="project-content">
                        <h4>Chesterfield Armchair Design</h4>
                        <p>Complete structural and mechanical design of a Chesterfield armchair, including precise manufacturing documentation and 3D modeling.</p>
                        <div class="tech-specs">
                            <ul>
                                <li><strong>Software:</strong> Autodesk Inventor</li>
                                <li><strong>Materials/Std:</strong> Timber Frame, Foam</li>
                                <li><strong>Achievement:</strong> Complete manufacturing drawings</li>
                            </ul>
                        </div>
                        <a href="project-details.php?id=mech-007" class="btn-link">View Datasheet <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>
            </div>
        </div>

        <!-- Category 3: Digital Infrastructure -->
        <div class="project-category">
            <div class="category-header">
                <i class="fas fa-network-wired text-soft"></i>
                <h3>Digital Infrastructure</h3>
            </div>
            <div class="projects-grid">
                <!-- FS Black Hornets -->
                <article class="project-card soft-card highlight-card">
                    <div class="browser-header">
                        <div class="dots"><span></span><span></span><span></span></div>
                        <div class="url-bar">https://www.fsblackhornets.com</div>
                    </div>
                    <div class="project-content">
                        <div class="tech-stack">
                            <span class="tech">PHP</span>
                            <span class="tech">MySQL</span>
                            <span class="tech">Custom CMS</span>
                            <span class="tech highlight-tech" style="background:var(--accent-mech);color:#fff;border-color:var(--accent-mech);">Hybrid Role</span>
                        </div>
                        <h4>FS Black Hornets Platform</h4>
                        <p><strong>Hybrid Contribution:</strong> Mechanical Design (Steering & Brakes) + Software Design (Custom CMS/Web Platform).</p>
                        <p>Official web platform for the Formula Student team. Features a custom-built CMS for news management, team rosters, and sponsor integration.</p>
                        <div class="card-actions">
                            <a href="https://www.fsblackhornets.com/" target="_blank" class="btn-sm btn btn-primary" style="padding: 6px 12px; font-size: 0.85rem;"><i class="fas fa-external-link-alt"></i> Live Site</a>
                            <a href="project-details.php?id=soft-001" class="btn-sm btn btn-outline" style="padding: 6px 12px; font-size: 0.85rem;"><i class="fas fa-info-circle"></i> Details</a>
                        </div>
                    </div>
                </article>

                <!-- Sousse Apartments -->
                <article class="project-card soft-card">
                    <div class="browser-header">
                        <div class="dots"><span></span><span></span><span></span></div>
                        <div class="url-bar">https://apartment-sousse.com/</div>
                    </div>
                    <div class="project-content">
                        <div class="tech-stack">
                            <span class="tech">Next.js 14</span>
                            <span class="tech">PostgreSQL</span>
                            <span class="tech">Tailwind</span>
                        </div>
                        <h4>Sousse Apartments Platform</h4>
                        <p>Modern real estate booking platform built with Next.js and Prisma. Features real-time availability, admin dashboard, and multi-language support.</p>
                        <div class="card-actions">
                            <a href="https://sousse-appartments.vercel.app/" target="_blank" class="btn-sm btn btn-primary" style="padding: 6px 12px; font-size: 0.85rem;"><i class="fas fa-external-link-alt"></i> Live Site</a>
                            <a href="project-details.php?id=soft-003" class="btn-sm btn btn-outline" style="padding: 6px 12px; font-size: 0.85rem;"><i class="fas fa-info-circle"></i> Details</a>
                        </div>
                    </div>
                </article>

                <!-- Royal Artisanat -->
                <article class="project-card soft-card">
                    <div class="browser-header">
                        <div class="dots"><span></span><span></span><span></span></div>
                        <div class="url-bar">https://royal-artisanat.store</div>
                    </div>
                    <div class="project-content">
                        <div class="tech-stack">
                            <span class="tech">PHP</span>
                            <span class="tech">MySQL</span>
                            <span class="tech">E-Commerce</span>
                        </div>
                        <h4>Royal Artisanat Platform</h4>
                        <p>Custom e-commerce solution for Tunisian handicrafts. Features a dynamic product catalog, shopping cart system, and admin dashboard.</p>
                        <div class="card-actions">
                            <a href="https://royal-artisanat.store/" target="_blank" class="btn-sm btn btn-primary" style="padding: 6px 12px; font-size: 0.85rem;"><i class="fas fa-external-link-alt"></i> Live Site</a>
                            <a href="project-details.php?id=soft-002" class="btn-sm btn btn-outline" style="padding: 6px 12px; font-size: 0.85rem;"><i class="fas fa-info-circle"></i> Details</a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>


<!-- Skills Section -->
<section id="skills" class="section skills-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Technical Arsenal</h2>
            <div class="section-line"></div>
        </div>

        <div class="skills-wrapper">
            <!-- Mechanical Skills -->
            <div class="skill-panel mech-panel">
                <h3 class="panel-title">Mechanical Systems</h3>
                <div class="skill-bars">
                    <div class="skill-unit">
                        <div class="skill-label">
                            <span>Advanced CAD (Inventor, CATIA V5, SolidWorks)</span>
                            <span>95%</span>
                        </div>
                        <div class="progress-bar"><div class="progress-fill mech-fill" style="width: 95%"></div></div>
                    </div>
                    <div class="skill-unit">
                        <div class="skill-label">
                            <span>Structural Analysis & FEA (Ansys, EngiLab)</span>
                            <span>90%</span>
                        </div>
                        <div class="progress-bar"><div class="progress-fill mech-fill" style="width: 90%"></div></div>
                    </div>
                    <div class="skill-unit">
                        <div class="skill-label">
                            <span>Product Design & DFM Standards</span>
                            <span>92%</span>
                        </div>
                        <div class="progress-bar"><div class="progress-fill mech-fill" style="width: 92%"></div></div>
                    </div>
                </div>
            </div>

            <!-- Software Skills -->
            <div class="skill-panel soft-panel">
                <h3 class="panel-title">Digital Systems</h3>
                <div class="skill-bars">
                    <div class="skill-unit">
                        <div class="skill-label">
                            <span>Full Stack JS (Next.js, React, Node.js)</span>
                            <span>92%</span>
                        </div>
                        <div class="progress-bar"><div class="progress-fill soft-fill" style="width: 92%"></div></div>
                    </div>
                    <div class="skill-unit">
                        <div class="skill-label">
                            <span>Backend Engineering (PHP 8, MVC, SQL)</span>
                            <span>88%</span>
                        </div>
                        <div class="progress-bar"><div class="progress-fill soft-fill" style="width: 88%"></div></div>
                    </div>
                    <div class="skill-unit">
                        <div class="skill-label">
                            <span>Cloud & DB Architecture (Vercel, MongoDB)</span>
                            <span>85%</span>
                        </div>
                        <div class="progress-bar"><div class="progress-fill soft-fill" style="width: 85%"></div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="section contact-section">
    <div class="container">
        <div class="contact-wrapper">
            <div class="contact-info">
                <h3>Let's Connect</h3>
                <p>I am currently open to opportunities in <strong>Mechanical Design</strong>, <strong>Simulation</strong>, and <strong>Software Engineering</strong>. Whether you have a complex engineering problem or a digital project in mind, let's discuss how I can contribute.</p>
                
                <div class="info-points">
                    <div class="point">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Belgrade, Serbia</span>
                    </div>
                    <div class="point">
                        <i class="fas fa-envelope"></i>
                        <span>aleksandarrsd@gmail.com</span>
                    </div>
                    <div class="point">
                        <i class="fas fa-phone"></i>
                        <span>+381 65 3237 658</span>
                    </div>
                </div>

                <div class="social-connect">
                    <a href="https://www.linkedin.com/in/skandar-mokni-3b02b3178/" target="_blank" rel="noopener noreferrer" class="social-btn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://github.com/aleksandarssd" target="_blank" rel="noopener noreferrer" class="social-btn"><i class="fab fa-github"></i></a>
                    <a href="Skandar-Mokni-CV_en.pdf" class="btn btn-outline btn-sm" target="_blank" style="margin-left: 10px; border: 1px solid var(--border-color); padding: 8px 15px; border-radius: 4px; text-decoration: none; color: var(--text-primary);">CV (EN) <i class="fas fa-download"></i></a>
                    <a href="Skandar_mokni_cv_sr.pdf" class="btn btn-outline btn-sm" target="_blank" style="margin-left: 5px; border: 1px solid var(--border-color); padding: 8px 15px; border-radius: 4px; text-decoration: none; color: var(--text-primary);">CV (SR) <i class="fas fa-download"></i></a>
                </div>
            </div>

            <form id="contact-form" class="contact-form" action="https://api.web3forms.com/submit" method="POST">
                <!-- Web3Forms: replace YOUR_ACCESS_KEY with the key from https://web3forms.com -->
                <input type="hidden" name="access_key" value="YOUR_ACCESS_KEY">
                <input type="hidden" name="subject" value="New Portfolio Contact Message">
                <input type="hidden" name="from_name" value="Skandar Mokni Portfolio">
                <input type="checkbox" name="botcheck" class="hidden" style="display: none;">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="5" required placeholder="Project details or inquiry..."></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Send Message</button>
                <div id="form-message" class="form-message"></div>
            </form>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
