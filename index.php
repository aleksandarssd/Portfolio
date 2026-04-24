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
                <span class="badge badge-mech"><i class="fas fa-cogs"></i> Mechanical Engineer</span>
                <span class="badge badge-soft"><i class="fas fa-code"></i> Software Engineer</span>
            </div>
            <p class="hero-subtitle">
                Bridging the gap between heavy machinery and digital infrastructure. 
                Designing robust physical systems and scalable cloud solutions.
            </p>
            <div class="hero-cta">
                <a href="#projects" class="btn btn-primary">View Projects</a>
                <a href="Skandar-Mokni-CV_en.pdf" class="btn btn-outline" target="_blank">CV (EN)</a>
                <a href="Skandar_mokni_cv_sr.pdf" class="btn btn-outline" target="_blank">CV (SR)</a>
            </div>
        </div>
        <div class="hero-visual">
            <div class="blueprint-container">
                <div class="blueprint-grid"></div>
                <div class="blueprint-shape shape-1"></div>
                <div class="blueprint-shape shape-2"></div>
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
                    I am a graduate <strong>Mechanical Engineer</strong> from the University of Novi Sad, specializing in Mechanization and Construction Machines. My academic foundation is built on physical constraints, materials, and heavy machinery design.
                </p>
                <p>
                    Parallel to my engineering studies, I forged a path as a <strong>Software Engineer</strong>. Completely self-taught through rigorous study and hands-on application, I spent my university years freelancing—building full-scale web applications and cloud-based management systems for real-world companies. This dual journey allows me to bridge the gap between hardware and software with unique insight.
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

        <!-- Mechanical Projects -->
        <div class="project-category">
            <div class="category-header">
                <i class="fas fa-cogs text-mech"></i>
                <h3>Mechanical Engineering</h3>
            </div>
            <div class="projects-grid">
                <!-- Project 1: Crane Lift -->
                <article class="project-card mech-card">
                    <div class="card-header">
                        <span>ID: MECH-001</span>
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
                        <a href="project-details.php?id=mech-001" class="btn-link">View Datasheet <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>

                <!-- Project 2: Gear Reducer -->
                <article class="project-card mech-card">
                    <div class="card-header">
                        <span>ID: MECH-002</span>
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
                        <a href="project-details.php?id=mech-002" class="btn-link">View Datasheet <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>

                <!-- Project 3: IC Engine -->
                <article class="project-card mech-card">
                    <div class="card-header">
                        <span>ID: MECH-003</span>
                        <span class="project-status">COMPLETED</span>
                    </div>
                    <div class="project-image mech-img-2">
                         <div class="placeholder-img" style="background-image: url('data/images/IC Engine/engine_blueprint.jpg'); background-size: cover;"></div>
                        <div class="overlay-info">
                            <span class="tool">Autodesk Inventor</span>
                            <span class="tool">3D Modeling</span>
                        </div>
                    </div>
                    <div class="project-content">
                        <h4>V6 Engine 3D Model</h4>
                        <p>Detailed 3D CAD model of a V6 internal combustion engine. Features accurate assembly of cranktrain, pistons, and valve mechanism.</p>
                        <a href="project-details.php?id=mech-003" class="btn-link">View Datasheet <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>

                <!-- Project 4: Metal Structure -->
                <article class="project-card mech-card">
                    <div class="card-header">
                        <span>ID: MECH-004</span>
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
                        <a href="project-details.php?id=mech-004" class="btn-link">View Datasheet <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>

                <!-- Project 5: Gear Pump -->
                <article class="project-card mech-card">
                    <div class="card-header">
                        <span>ID: MECH-005</span>
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
                        <a href="project-details.php?id=mech-005" class="btn-link">View Datasheet <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>

                <!-- Project 6: Disc Brake -->
                <article class="project-card mech-card">
                    <div class="card-header">
                        <span>ID: MECH-006</span>
                        <span class="project-status">COMPLETED</span>
                    </div>
                    <div class="project-image mech-img-2">
                         <div class="placeholder-img" style="background-image: url('data/images/Disc Brake/blueprint_disk.jpg'); background-size: cover;"></div>
                        <div class="overlay-info">
                            <span class="tool">CATIA V5</span>
                            <span class="tool">FEM Simulation</span>
                        </div>
                    </div>
                    <div class="project-content">
                        <h4>Brake Disc Design & Analysis</h4>
                        <p>Design, modeling, and finite-element stress analysis of an automotive ventilated brake disc. Includes CAD modeling and mechanical load calculations.</p>
                        <a href="project-details.php?id=mech-006" class="btn-link">View Datasheet <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>

                <!-- Project 7: Chesterfield Armchair -->
                <article class="project-card mech-card">
                    <div class="card-header">
                        <span>ID: MECH-007</span>
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
                        <a href="project-details.php?id=mech-007" class="btn-link">View Datasheet <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>
            </div>
        </div>

        <!-- Software Projects -->
        <div class="project-category">
            <div class="category-header">
                <i class="fas fa-code text-soft"></i>
                <h3>Software Engineering</h3>
            </div>
            <div class="projects-grid">
                <!-- Project 1: FS Black Hornets -->
                <article class="project-card soft-card">
                    <div class="browser-header">
                        <div class="dots"><span></span><span></span><span></span></div>
                        <div class="url-bar">https://www.fsblackhornets.com</div>
                    </div>
                    <div class="project-content">
                        <div class="tech-stack">
                            <span class="tech">PHP</span>
                            <span class="tech">MySQL</span>
                            <span class="tech">Custom CMS</span>
                        </div>
                        <h4>FS Black Hornets Website</h4>
                        <p>Official web platform for the Formula Student team. Features a custom-built CMS for news management, team rosters, and sponsor integration.</p>
                        <div class="card-actions">
                            <a href="https://www.fsblackhornets.com/" target="_blank" class="btn-sm"><i class="fas fa-external-link-alt"></i> Live Site</a>
                            <a href="project-details.php?id=soft-001" class="btn-sm"><i class="fas fa-info-circle"></i> Details</a>
                        </div>
                    </div>
                </article>

                <!-- Project 2: Royal Artisanat -->
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
                            <a href="https://royal-artisanat.store/" target="_blank" class="btn-sm"><i class="fas fa-external-link-alt"></i> Live Site</a>
                            <a href="project-details.php?id=soft-002" class="btn-sm"><i class="fas fa-info-circle"></i> Details</a>
                        </div>
                    </div>
                </article>

                <!-- Project 3: Sousse Apartments -->
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
                            <a href="https://sousse-appartments.vercel.app/" target="_blank" class="btn-sm"><i class="fas fa-external-link-alt"></i> Live Site</a>
                            <a href="project-details.php?id=soft-003" class="btn-sm"><i class="fas fa-info-circle"></i> Details</a>
                        </div>
                    </div>
                </article>

                <!-- Project 4: CM Taxi Sousse -->
                <article class="project-card soft-card">
                    <div class="browser-header">
                        <div class="dots"><span></span><span></span><span></span></div>
                        <div class="url-bar">https://taxi-sousse.com</div>
                    </div>
                    <div class="project-content">
                        <div class="tech-stack">
                            <span class="tech">PHP</span>
                            <span class="tech">WhatsApp API</span>
                            <span class="tech">SEO</span>
                        </div>
                        <h4>CM Taxi Booking Platform</h4>
                        <p>High-conversion landing page for a premier taxi service. Features direct WhatsApp booking integration and local SEO optimization.</p>
                        <div class="card-actions">
                            <a href="https://taxi-sousse.com/" target="_blank" class="btn-sm"><i class="fas fa-external-link-alt"></i> Live Site</a>
                            <a href="project-details.php?id=soft-004" class="btn-sm"><i class="fas fa-info-circle"></i> Details</a>
                        </div>
                    </div>
                </article>

                <!-- Project 5: Taxi Sousse Professional -->
                <article class="project-card soft-card">
                    <div class="browser-header">
                        <div class="dots"><span></span><span></span><span></span></div>
                        <div class="url-bar">https://taxi-sousse.vercel.app</div>
                    </div>
                    <div class="project-content">
                        <div class="tech-stack">
                            <span class="tech">Next.js</span>
                            <span class="tech">Tailwind</span>
                            <span class="tech">Vercel</span>
                        </div>
                        <h4>Taxi Sousse Professional</h4>
                        <p>Modern, high-performance taxi service platform built with Next.js. Features instant WhatsApp booking and superior mobile experience.</p>
                        <div class="card-actions">
                            <a href="https://taxi-sousse.vercel.app/" target="_blank" class="btn-sm"><i class="fas fa-external-link-alt"></i> Live Site</a>
                            <a href="project-details.php?id=soft-005" class="btn-sm"><i class="fas fa-info-circle"></i> Details</a>
                        </div>
                    </div>
                </article>

                <!-- Project 6: Madam In Salon -->
                <article class="project-card soft-card">
                    <div class="browser-header">
                        <div class="dots"><span></span><span></span><span></span></div>
                        <div class="url-bar">https://madamin.rs</div>
                    </div>
                    <div class="project-content">
                        <div class="tech-stack">
                            <span class="tech">WordPress</span>
                            <span class="tech">PHP</span>
                            <span class="tech">Booking</span>
                        </div>
                        <h4>Madam In Beauty Salon</h4>
                        <p>Elegant digital presence for a premier beauty salon in Novi Sad. Features service catalog, team showcase, and online appointment booking.</p>
                        <div class="card-actions">
                            <a href="https://madamin.rs/" target="_blank" class="btn-sm"><i class="fas fa-external-link-alt"></i> Live Site</a>
                            <a href="project-details.php?id=soft-006" class="btn-sm"><i class="fas fa-info-circle"></i> Details</a>
                        </div>
                    </div>
                </article>

                <!-- Project 7: Culture.com.tn -->
                <article class="project-card soft-card">
                    <div class="browser-header">
                        <div class="dots"><span></span><span></span><span></span></div>
                        <div class="url-bar">https://culture.com.tn</div>
                    </div>
                    <div class="project-content">
                        <div class="tech-stack">
                            <span class="tech">PHP</span>
                            <span class="tech">MySQL</span>
                            <span class="tech">CMS</span>
                        </div>
                        <h4>Culture.com.tn Portal</h4>
                        <p>A digital hub for Tunisian culture and history. Features a custom CMS for articles, event management, and newsletter integration.</p>
                        <div class="card-actions">
                            <a href="https://www.culture.com.tn/" target="_blank" class="btn-sm"><i class="fas fa-external-link-alt"></i> Live Site</a>
                            <a href="project-details.php?id=soft-007" class="btn-sm"><i class="fas fa-info-circle"></i> Details</a>
                        </div>
                    </div>
                </article>

                <!-- Project 8: Al Hamde Dayem -->
                <article class="project-card soft-card">
                    <div class="browser-header">
                        <div class="dots"><span></span><span></span><span></span></div>
                        <div class="url-bar">https://alhamdedayem.com</div>
                    </div>
                    <div class="project-content">
                        <div class="tech-stack">
                            <span class="tech">PHP</span>
                            <span class="tech">Bootstrap</span>
                            <span class="tech">RTL</span>
                        </div>
                        <h4>Al Hamde Dayem Industrial</h4>
                        <p>Corporate platform for an industrial equipment supplier. Features an RTL design, product catalog, and B2B inquiry system.</p>
                        <div class="card-actions">
                            <a href="https://www.alhamdedayem.com/" target="_blank" class="btn-sm"><i class="fas fa-external-link-alt"></i> Live Site</a>
                            <a href="project-details.php?id=soft-008" class="btn-sm"><i class="fas fa-info-circle"></i> Details</a>
                        </div>
                    </div>
                </article>

                <!-- Project 9: Zliten Medical Center -->
                <article class="project-card soft-card">
                    <div class="browser-header">
                        <div class="dots"><span></span><span></span><span></span></div>
                        <div class="url-bar">localhost:3000</div>
                    </div>
                    <div class="project-content">
                        <div class="tech-stack">
                            <span class="tech">Node.js</span>
                            <span class="tech">MongoDB</span>
                            <span class="tech">Express</span>
                        </div>
                        <h4>Zliten Medical Center</h4>
                        <p>A comprehensive patient management system for surgical departments, featuring operation tracking and medical staff assignments.</p>
                        <div class="card-actions">
                            <a href="https://github.com/esamali2200/newesam" target="_blank" class="btn-sm"><i class="fab fa-github"></i> GitHub</a>
                            <a href="project-details.php?id=soft-009" class="btn-sm"><i class="fas fa-info-circle"></i> Details</a>
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
