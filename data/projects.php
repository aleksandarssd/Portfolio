<?php
$projects = [
    'auto-001' => [
        'title' => 'R&D: Autonomous Charging Infrastructure for P-Guard Robotics',
        'category' => 'Research & Development',
        'status' => 'Completed',
        'image' => 'data/files/Enova Docking Station/enova_blueprint.png',
        'role' => 'R&D Mechanical Engineer',
        'subheadline' => 'Investigating and engineering high-reliability contact-based docking systems for 24/7 surveillance assets.',
        'description' => 'This is not a standard manufacturing project; it is a Research & Development (R&D) initiative focused on solving the autonomous charging problem for the P-Guard robot. The project required a highly scientific approach, feasibility studies, and iterative prototyping to ensure reliable operation in outdoor environments.',
        'is_rd' => true,
        'methodologies' => [
            '<strong>Comparative Technology Analysis:</strong> Conducted an exhaustive study comparing Inductive (Wireless) vs. Conductive (Contact) charging. Justified the selection of Contact-based charging based on energy efficiency (low loss), thermal management in outdoor environments, and cost-to-reliability ratios.',
            '<strong>Functional Decomposition:</strong> Utilized SADT and Pieuvre Diagrams to map the complex interactions between the environment (outdoor weather), the robot (docking precision), and the power grid.',
            '<strong>Problem Statement:</strong> The core challenge was achieving a sub-centimeter mechanical connection for a 100kg+ autonomous vehicle in varying outdoor terrains.'
        ],
        'innovations' => [
            '<strong>Iterative Prototyping:</strong> Developed multiple docking head geometries to account for angular and lateral robot misalignment.',
            '<strong>Kinematic Simulation:</strong> Verified docking paths to eliminate potential collision points or mechanical interference during the approach phase.',
            '<strong>Material Science:</strong> Selected high-durability, weather-resistant materials for the external shell while optimizing the internal chassis using 30x30 aluminum profiles for modularity and rapid assembly.'
        ],
        'lessons_learned' => 'Future iterations will explore active thermal cooling for ultra-fast charging cycles, and AI-assisted alignment correction prior to physical contact.',
        'specs' => [
            'Project ID' => 'R&D-MECH-001',
            'Charging Interface' => 'High-current spring-loaded contact pins',
            'Environmental Tolerance' => 'Designed to IP54 standards for dust and moisture protection',
            'Alignment Tolerance' => 'Compensates for ±20mm lateral and ±5° angular robot deviation',
            'Primary Tools' => 'SolidWorks (CAD/FEA), Microsoft Excel (Analytical Modeling), Industrial Automation (LOGO! PLC)'
        ],
        'tools' => ['SolidWorks', 'Microsoft Excel', 'LOGO! PLC', 'Kinematic Simulation'],
        'gallery' => [],
        'documents' => [
            [
                'title' => 'ENOVA Docking Station Project Report',
                'file' => 'data/files/Enova Docking Station/sation_de_recharge.pdf',
                'type' => 'report'
            ]
        ]
    ],
    'mech-001' => [
        'title' => 'Industrial Jib Crane Design (0.25 Ton)',
        'category' => 'Mechanical Engineering',
        'status' => 'Completed',
        'image' => 'data/images/Crane Lift/blueprint.jpg',
        'description' => 'A complete mechanical design and structural calculation of a 0.25-ton (250 kg) jib crane intended for industrial lifting applications. The project included full analytical verification of the beam, column, welds, shafts, and bearing units under maximum load. All structural components were dimensioned according to strength, stiffness, and safety criteria.<br><br>The entire assembly was modeled in Autodesk Inventor (3D CAD) based on the final approved calculations.',
        'specs' => [
            'Load Capacity' => '0.25 tons (250 kg)',
            'Jib Length (Span)' => '4 meters',
            'Column Height' => '3 meters',
            'Column Offset' => '1 meter',
            'Beam Profile' => 'IPN 200',
            'Column Section' => 'Ø168.3 × 12.5 mm seamless pipe',
            'Materials' => 'S235 (beam & column), S355 (welded plates)',
            'Max Calculated Moment' => '1231 kN·cm',
            'Max Shear Force' => '3.65 kN',
            'Deflection Under Load' => '1.61 cm (Limit L/200 = 2 cm)',
            'Safety Factor' => '> 1.5 across all elements',
            'Rotation Mechanism' => 'Shaft + SKF bearings',
            'Operation Type' => 'Manual (No hydraulics/PLC)'
        ],
        'tasks' => [
            'Analytical calculation of shear, bending, and combined stresses',
            'Verification of welded joints using allowable weld stress methods',
            'Shaft sizing & bearing selection for rotational movement',
            'Stiffness and deflection verification (meets L/200 requirement)',
            'Complete 3D modeling and assembly preparation in Autodesk Inventor'
        ],
        'tools' => ['Autodesk Inventor', 'EngiLab', 'Manual Calculations', 'Microsoft Excel', 'Engineering Standards'],
        'gallery' => [
            'data/images/Crane Lift/sklop1.PNG',
            'data/images/Crane Lift/Podizac1.PNG',
            'data/images/Crane Lift/presek 1.jpg',
            'data/images/Crane Lift/stub.jpg'
        ],
        'documents' => [
            [
                'title' => 'Main Calculation Report',
                'file' => 'data/files/Crane lift/Calculation/Skandar_Mokni_Proracun_Dizalica.pdf',
                'type' => 'report'
            ],
            [
                'title' => 'FEM Analysis Report (EngiLab)',
                'file' => 'data/files/Crane lift/Calculation/Model2.fr2d333 - Report.pdf',
                'type' => 'report'
            ],
            [
                'title' => 'Manufacturing Drawing: Sleeve',
                'file' => 'data/files/Crane lift/Documentation/RC caura.pdf',
                'type' => 'drawing'
            ],
            [
                'title' => 'Manufacturing Drawing: Pipe',
                'file' => 'data/files/Crane lift/Documentation/RC Cev.pdf',
                'type' => 'drawing'
            ],
            [
                'title' => 'Manufacturing Drawing: Upper Shaft',
                'file' => 'data/files/Crane lift/Documentation/RC Osoviniva.pdf',
                'type' => 'drawing'
            ],
            [
                'title' => 'Manufacturing Drawing: Lower Shaft',
                'file' => 'data/files/Crane lift/Documentation/RC Osoviniva Donja.pdf',
                'type' => 'drawing'
            ],
            [
                'title' => 'Manufacturing Drawing: Base Plate',
                'file' => 'data/files/Crane lift/Documentation/RC ploca.pdf',
                'type' => 'drawing'
            ],
            [
                'title' => 'Assembly Drawing: Crane',
                'file' => 'data/files/Crane lift/Documentation/SC Dizalica.pdf',
                'type' => 'drawing'
            ],
            [
                'title' => 'Assembly Drawing: Column',
                'file' => 'data/files/Crane lift/Documentation/SC Stub.pdf',
                'type' => 'drawing'
            ],
            [
                'title' => 'Project Summary Report',
                'file' => 'data/files/Crane lift/Documentation/Report.pdf',
                'type' => 'report'
            ]
        ],
        'model_3d' => 'data/models/crane.glb'
    ],
    'mech-002' => [
        'title' => 'Two-Stage Gear Reducer Design',
        'category' => 'Mechanical Engineering',
        'status' => 'Completed',
        'image' => 'data/images/Gear Reductor/bleuprint2.jpg',
        'description' => 'A complete analytical and graphical design of a two-stage cylindrical gear reducer with a single-piece housing. The project involved calculating multiple gear ratio variants, selecting the optimal transmission configuration, choosing a suitable electric motor based on output torque requirements, and generating manufacturing documentation.<br><br>The final design—consisting of shafts, gears, bearings, and reducer housing—was fully modeled as a 3D assembly in Autodesk Inventor, following technical standards for gear design and machine elements.',
        'specs' => [
            'Gear Type' => 'Two-stage helical gear reducer',
            'Housing Type' => 'Single-piece (two-chamber) cast housing',
            'Gear Material' => 'C60 steel',
            'Input Speed' => '≈ 1450–1550 rpm',
            'Motor Power Range' => '0.19 kW to 3 kW',
            'Total Gear Ratio' => '4.49 – 32.01',
            'Axial Distances' => 'a12 = 35 mm, a34 = 45 mm',
            'Helix Angles' => 'β12 = 30°, β34 = 15°',
            'Module Values' => 'mn12 = 0.9, mn34 = 1',
            'Output Shaft Height' => 'h = 75 mm'
        ],
        'tasks' => [
            '<strong>Gear Geometry Calculation:</strong> Preliminary and detailed calculation of helical gear geometry and strength.',
            '<strong>Ratio Optimization:</strong> Multi-variant analysis to select the optimal transmission ratio based on torque and motor compatibility.',
            '<strong>Component Selection:</strong> Electric motor selection (SEW/Sever catalogs) and bearing life calculation.',
            '<strong>System Layout:</strong> Detailed arrangement of shafts, gears, bearings, and housing geometry.',
            '<strong>Manufacturing Documentation:</strong> Creation of workshop drawings for input shaft, output gear, and full assembly.',
            '<strong>3D Modeling:</strong> Complete 3D assembly in Autodesk Inventor based on analytical results.'
        ],
        'tools' => ['Autodesk Inventor', 'Manual Gear Calculations (ISO)', 'Microsoft Excel', 'SEW & Sever Catalogs', 'Machine Elements Standards'],
        'gallery' => [
            'data/images/Gear Reductor/Sklop.jpg',
            'data/images/Gear Reductor/mehanizam.jpg',
            'data/images/Gear Reductor/presek.jpg'
        ],
        'documents' => [
            [
                'title' => 'Main Calculation Report',
                'file' => 'data/files/Gear reductor/Calculation/Report_Skandar_Mokni_Reductor.pdf',
                'type' => 'report'
            ],
            [
                'title' => 'Assembly Drawing (Sklopni crtež)',
                'file' => 'data/files/Gear reductor/Documentation/Sklopni crtez Skandar Mokni.pdf',
                'type' => 'drawing'
            ],
            [
                'title' => 'Bill of Materials (Sastavnica)',
                'file' => 'data/files/Gear reductor/Documentation/Sastavnici.pdf',
                'type' => 'drawing'
            ]
        ],
        'model_3d' => 'data/models/reductor.glb'
    ],
    'mech-003' => [
        'title' => 'V6 Internal Combustion Engine (Conceptual CAD Design & Full Assembly)',
        'category' => 'Mechanical Engineering',
        'status' => 'Completed',
        'image' => 'data/images/IC Engine/engine_blueprint.jpg',
        'description' => 'This project consists of the complete CAD design of a V6 internal combustion engine created from scratch in Autodesk Inventor. The work combines mechanical theory, engineering references, textbook parameters, and extensive CAD practice to better understand how real engines are structured and assembled.<br><br>The engine model follows realistic proportions and relationships, although it is not based on a specific manufacturer model nor intended for physical simulation. Its purpose is to represent a technically coherent V6 layout and serve as a practice platform for advanced CAD modeling and assembly logic.',
        'specs' => [
            'Software' => 'Autodesk Inventor',
            'Designer' => 'S. Mokni',
            'Configuration' => 'V6 (60° V-angle)',
            'Displacement' => '≈ 3.0 Liters (Conceptual)',
            'Bore x Stroke' => '86 mm x 86–90 mm',
            'Crankshaft' => '120° spacing, even firing order',
            'Valvetrain' => 'DOHC per bank (Conceptual)',
            'Components' => '60+ individual parts',
            'Intake Runner ID' => '~35–40 mm',
            'Exhaust Runner ID' => '~38–42 mm'
        ],
        'tasks' => [
            '<strong>Part Modeling:</strong> Designed 60+ individual components including pistons, rods, crankshaft, block, head, and manifolds using parametric dimensions.',
            '<strong>Assembly Design:</strong> Created a fully constrained V6 assembly with verified piston–rod–crank motion and bank symmetry.',
            '<strong>Engineering Logic:</strong> Applied realistic proportions for bearing caps, wall thickness, and runner geometry based on technical references.',
            '<strong>Interference Check:</strong> Verified clearances and timing alignment between banks.',
            '<strong>Advanced CAD:</strong> Used Inventor parameters to control families of parts and manage large assemblies.'
        ],
        'tools' => ['Autodesk Inventor', 'Mechanical Theory', 'CAD Assembly', 'Parametric Modeling'],
        'gallery' => [
            'data/images/IC Engine/v6.JPG',
            'data/images/IC Engine/engine_blueprint.jpg'
        ],
        'model_3d' => 'data/models/Turbo_V6_Engine.glb'
    ],
    'mech-004' => [
        'title' => 'Metal Structure Design & Welded Joint Analysis',
        'category' => 'Structural Engineering',
        'status' => 'Completed',
        'image' => 'data/images/Metal Construction/blueprint.jpg',
        'description' => 'A complete structural analysis and design project for a welded steel cantilever support, performed within the course Metal Structures in Mechanical Engineering. The project consisted of determining the load-bearing capacity of the cross-section, selecting and dimensioning structural elements, calculating stress distributions, and verifying the static strength of both the beam and column.<br><br>The project also included a full analytical verification of four welded joints, following simplified and advanced weld design methods. The design was modeled according to standard engineering practices for steel structures made of S355 structural steel and checked against prescribed safety factors.',
        'specs' => [
            'Material' => 'S355 structural steel',
            'Applied Load' => 'F = 7.3 kN',
            'Cantilever Length' => 'L = 200 mm',
            'Column Profile' => 'SHS 160 × 160 × 5.6 mm',
            'Yield Strength (fy)' => '355 MPa',
            'Ultimate Strength (fu)' => '490 MPa',
            'Design Stress Limits' => 'σRd = 355 MPa, τRd ≈ 205 MPa',
            'Weld Design Strength' => 'fvw,d ≈ 251 MPa',
            'Max Bending Moment' => '1497 kN·cm (Column)',
            'Safety Factor' => 'Verified per Eurocode (γM0=1.0, γM2=1.25)'
        ],
        'tasks' => [
            '<strong>Cross-Section Resistance:</strong> Determined allowable normal/shear stresses and analyzed geometry.',
            '<strong>Cantilever Beam Analysis:</strong> Calculated max bending (28 MPa) and shear stresses (2.85 MPa).',
            '<strong>Column Analysis:</strong> Verified combined axial load + bending (σmax ≈ 92.5 MPa).',
            '<strong>Welded Joint Verification:</strong> Checked normal, shear, and combined stresses for all 4 joints.',
            '<strong>Weld Sizing:</strong> Designed throat dimensions and effective lengths satisfying σw,Ed < fvw,d.',
            '<strong>Documentation:</strong> Created full structural dimensioning and manufacturing drawings.'
        ],
        'tools' => ['Manual Structural Analysis', 'S355 Standards', 'Weld Strength Calculations', 'Stress Diagrams'],
        'gallery' => [
            'data/images/Metal Construction/structure.png',
            'data/images/Metal Construction/1.PNG'
        ],
        'model_3d' => 'data/models/G_Ram.glb',
        'documents' => [
            [
                'title' => 'Main Structural Calculation',
                'file' => 'data/files/Metal Construction/Calculation/Skandar_Mokni_MM57_19.pdf',
                'type' => 'report'
            ],
            [
                'title' => 'FEM Analysis Report',
                'file' => 'data/files/Metal Construction/Calculation/Model1.fr2d - Report.pdf',
                'type' => 'report'
            ],
            [
                'title' => 'Assembly Drawing: Complete Structure',
                'file' => 'data/files/Metal Construction/Documentation/Sklopni crtez.pdf',
                'type' => 'drawing'
            ],
            [
                'title' => 'Assembly Drawing: Console',
                'file' => 'data/files/Metal Construction/Documentation/Sklopni crtez I Konzola.pdf',
                'type' => 'drawing'
            ],
            [
                'title' => 'Assembly Drawing: Column',
                'file' => 'data/files/Metal Construction/Documentation/Sklopni crtez Stuba.pdf',
                'type' => 'drawing'
            ],
             [
                'title' => 'Base Plate Drawing',
                'file' => 'data/files/Metal Construction/Documentation/Oslona Ploca.pdf',
                'type' => 'drawing'
            ]
        ],
        'model_3d' => 'data/models/G_Ram.glb'
    ],
    'mech-005' => [
        'title' => 'Parametric External Gear Pump (CATIA V5)',
        'category' => 'Mechanical Engineering',
        'status' => 'Completed',
        'image' => 'data/images/Gear Pump/blueprint_pump.jpg',
        'description' => 'A parametric 3D CAD model of an external gear pump, developed in CATIA V5 to practice parametric modeling, design tables, modular CAD structure, assembly constraints, and catalog-style product variant generation.<br><br>The model includes realistic pump components such as gears, shafts, bolts, bearings, covers, and the internal cavity. Although visually faithful to real gear pumps, this is a CAD-learning project and not a hydraulically validated design.',
        'specs' => [
            'Pump Type' => 'External Gear Pump',
            'No. of Gears' => '2 (drive + driven)',
            'Gear Shape' => 'Straight teeth, involute-like',
            'Approx. Gear Diameter' => '~55–60 mm',
            'Approx. Gear Width' => '~20–25 mm',
            'Tooth Count' => '~11–13 teeth',
            'Gear Module' => '~4–5 mm',
            'Center Distance' => '~40–45 mm',
            'Shaft Type' => 'Splined drive + smooth driven',
            'Bearings' => '2 × radial bearings',
            'Housing Style' => 'Two-piece bolt-through casing',
            'Fasteners' => '6–8 hex bolts',
            'Materials' => 'Steel gears, aluminum casing'
        ],
        'tasks' => [
            '<strong>Parametric Modeling:</strong> Created parameter-driven CAD model with design tables for variant generation.',
            '<strong>Gear Train Design:</strong> Modeled external gear meshing with involute-style teeth and correct offset.',
            '<strong>Housing Assembly:</strong> Designed two-piece casing with bolt-through assembly and bearing pockets.',
            '<strong>Shaft System:</strong> Modeled splined drive shaft and driven shaft with bearing supports.',
            '<strong>Assembly Constraints:</strong> Established proper gear mesh, bearing fixes, and bolt alignments.',
            '<strong>Exploded Views:</strong> Created assembly exploded views and technical drawings.'
        ],
        'tools' => ['CATIA V5', 'Design Tables (Excel)', 'Part Design', 'Assembly Design'],
        'gallery' => [
            'data/images/Gear Pump/Sklop.jpg',
            'data/images/Gear Pump/bez poklopca.jpg',
            'data/images/Gear Pump/bez poklopca 2.jpg'
        ],
        'model_3d' => 'data/models/gearpump.glb'
    ],
    'mech-006' => [
        'title' => 'Brake Disc Design, Stress Analysis & Technical Documentation',
        'category' => 'Automotive Engineering',
        'status' => 'Completed',
        'image' => 'data/images/Disc Brake/blueprint_disk.jpg',
        'description' => 'A complete mechanical engineering project focused on the design, modeling, and finite-element stress analysis of an automotive ventilated brake disc. This project combines CAD modeling (CATIA V5), mechanical load calculations, and FEM simulation workflow, demonstrating real-world skills used in mechanical design, automotive engineering, and CAE analysis.<br><br>The study includes 3D modeling of a ventilated brake disc, calculation of braking forces & torque, structural analysis using FEM, identification of critical stress regions, technical drawing creation, and comprehensive engineering documentation following industry standards.',
        'specs' => [
            'Disc Type' => 'Ventilated brake disc with cooling ribs',
            'Material' => 'Gray Cast Iron',
            'Elastic Modulus' => '125 GPa',
            'Poisson\'s Ratio' => '0.28',
            'Density' => '7200 kg/m³',
            'Yield Strength' => '~310 MPa',
            'Normal Force (per pad)' => '8400 N',
            'Tangential Force (per pad)' => '3360 N',
            'Max Braking Torque' => '2100 Nm per wheel',
            'Max Von Mises Stress' => '~80-85 MPa',
            'Max Displacement' => '~0.04 mm',
            'Bolt Pattern' => '4-6 bolts',
            'Mesh Size' => '3mm global, 1mm refinement'
        ],
        'tasks' => [
            '<strong>CAD Modeling:</strong> Created parametric 3D ventilated brake disc with cooling ribs, mounting holes, and hub geometry in CATIA V5.',
            '<strong>Load Analysis:</strong> Calculated braking forces, normal loads (8400 N), tangential loads (3360 N), and torque distribution based on automotive parameters.',
            '<strong>FEM Setup:</strong> Applied boundary conditions, constrained bolt holes using virtual fixtures, and simulated pad pressure on both disc faces.',
            '<strong>Meshing Strategy:</strong> Used 3mm parabolic tetrahedral elements with 1mm local refinement around ribs and bolt holes for accurate stress concentration capture.',
            '<strong>Structural Analysis:</strong> Performed linear static FEM simulation to evaluate Von Mises stress distribution, principal stresses, and displacement field.',
            '<strong>Results Interpretation:</strong> Identified critical zones at rib edges and bolt hole boundaries, confirmed all stresses below yield strength (310 MPa).',
            '<strong>Technical Documentation:</strong> Generated 2D blueprints with ISO standard title blocks, section views (A-A, B-B), dimensions, and tolerancing.',
            '<strong>Engineering Report:</strong> Prepared comprehensive documentation including methodology, boundary conditions, FEA interpretation, and design validation.'
        ],
        'tools' => ['CATIA V5', 'FEM Simulation', 'Technical Drawing', 'Structural Analysis'],
        'gallery' => [
            'data/images/Disc Brake/Diskdraaf.jpg',
            'data/images/Disc Brake/1.PNG',
            'data/images/Disc Brake/2.PNG',
            'data/images/Disc Brake/forcess.jpg',
            'data/images/Disc Brake/forcess2.jpg',
            'data/images/Disc Brake/mesh2.jpg'
        ],
        'documents' => [
            [
                'title' => 'Disc Brake FEM Analysis - Full Thesis',
                'file' => 'data/files/Dsic Brake/Calculation/Skandar_Mokni_Disc_Brake_Diplomski_rad.pdf',
                'type' => 'report'
            ]
        ],
        'model_3d' => 'data/models/disk_brake.glb'
    ],
    'mech-007' => [
        'title' => 'Chesterfield Armchair Design',
        'category' => 'Furniture Design',
        'status' => 'Completed',
        'image' => 'data/images/Fotelja Chesterterfield/blueprint.png',
        'description' => 'A complete structural and mechanical design project of a Chesterfield armchair, demonstrating professional furniture design skills and precise manufacturing documentation generation.',
        'specs' => [
            'Project Type' => 'Furniture Design',
            'Model' => 'Chesterfield Armchair',
            'Documentation' => 'Technical drawings, 3D modeling and structural rendering'
        ],
        'tasks' => [
            '<strong>3D Modeling:</strong> Designed the complete furniture structural framework and dimensions.',
            '<strong>Technical Drawings:</strong> Generated detailed manufacturing documentation including base, seats, backrest, and side geometries.',
            '<strong>Upholstery Drafting:</strong> Created targeted drafting for the upholstery phases.',
            '<strong>Rendering:</strong> Produced visual presentation documents of the final structure.'
        ],
        'tools' => ['3D CAD', 'AutoCAD', 'Technical Drafting', 'Furniture Design Standards'],
        'gallery' => [],
        'documents' => [
            [
                'title' => 'Main Structure Details',
                'file' => 'data/files/Fotelja Chesterterfield/gabrit_chetsterfield_struktura_final.pdf',
                'type' => 'drawing'
            ],
            [
                'title' => 'Structure Overview',
                'file' => 'data/files/Fotelja Chesterterfield/gabrit_chetsterfield_struktura_final1.pdf',
                'type' => 'drawing'
            ],
            [
                'title' => 'Armchair Rendering',
                'file' => 'data/files/Fotelja Chesterterfield/gabrit_chetsterfield_Render_final (3).pdf',
                'type' => 'report'
            ],
            [
                'title' => 'Upholstery Dimensioning',
                'file' => 'data/files/Fotelja Chesterterfield/tapetarski_fotelj.pdf',
                'type' => 'drawing'
            ],
            [
                'title' => 'Armchair Base Drawing',
                'file' => 'data/files/Fotelja Chesterterfield/Fotelja_chesterfield_90_117+Drawing.pdf',
                'type' => 'drawing'
            ],
            [
                'title' => 'Small Sofa Drawing',
                'file' => 'data/files/Fotelja Chesterterfield/bocna_mala_sofa_87_Drawing.pdf',
                'type' => 'drawing'
            ],
            [
                'title' => 'Seat Drafting',
                'file' => 'data/files/Fotelja Chesterterfield/sedista_mala_draw.pdf',
                'type' => 'drawing'
            ],
            [
                'title' => 'Backrest Drawing',
                'file' => 'data/files/Fotelja Chesterterfield/zadnja_deo_fotelja_117+Drawing.pdf',
                'type' => 'drawing'
            ],
            [
                'title' => 'AutoCAD Structure',
                'file' => 'data/files/Fotelja Chesterterfield/fotelicaa.dwg',
                'type' => 'drawing'
            ]
        ],
        'model_3d' => 'data/models/Fotelja_chesterfield.glb'
    ],
    // Software Projects
    'soft-001' => [
        'title' => 'FS Black Hornets Official Platform',
        'category' => 'Software Engineering',
        'status' => 'Live',
        'image' => 'assets/img/fsblackhornets.jpg',
        'link' => 'https://www.fsblackhornets.com/',
        'description' => 'Engineered a robust, custom-built Content Management System (CMS) to serve as the digital headquarters for the Formula Student team. The platform was designed to handle high traffic loads during competition seasons and provide a seamless experience for team members, sponsors, and fans.<br><br>The architecture follows a strict MVC (Model-View-Controller) pattern, ensuring code maintainability and scalability. Key features include a dynamic news engine, a granular Role-Based Access Control (RBAC) system for team management, and an automated sponsor showcase module.',
        'specs' => [
            'Architecture' => 'Custom MVC Framework',
            'Backend' => 'PHP 8.1 (Object-Oriented)',
            'Database' => 'MySQL 8.0 (Relational Design)',
            'Frontend' => 'HTML5, CSS3, ES6 JavaScript',
            'Security' => 'PDO Prepared Statements, CSRF Protection',
            'Role' => 'Lead Full Stack Engineer'
        ],
        'tasks' => [
            '<strong>System Architecture:</strong> Designed the core MVC structure and database schema from scratch.',
            '<strong>Security Implementation:</strong> Implemented secure authentication and input sanitization protocols.',
            '<strong>Performance Optimization:</strong> Optimized database queries and asset loading for sub-second render times.',
            '<strong>CMS Development:</strong> Built a comprehensive admin dashboard for non-technical content managers.'
        ],
        'tools' => ['PHP', 'MySQL', 'Apache', 'Git', 'Composer'],
        'gallery' => []
    ],
    'soft-002' => [
        'title' => 'Royal Artisanat E-Commerce Solution',
        'category' => 'Software Engineering',
        'status' => 'Live',
        'image' => 'data/images/royart/slideshow-handbag-1.png',
        'link' => 'https://royal-artisanat.store/',
        'description' => 'Developed a comprehensive e-commerce ecosystem dedicated to promoting high-end Tunisian handicrafts. The platform bridges the gap between local artisans and the international market through a seamless digital shopping experience.<br><br>The system features a complex product catalog with multi-variant support, a secure checkout process integrated with international payment gateways, and a real-time inventory management system. Special attention was paid to the UX/UI design to reflect the premium nature of the products.',
        'specs' => [
            'Platform Type' => 'Multi-Vendor E-Commerce',
            'Backend Stack' => 'PHP 8.x, MySQL',
            'Payment Gateways' => 'Stripe API, PayPal SDK',
            'Security' => 'SSL/TLS, PCI-DSS Compliance Basics',
            'Frontend' => 'Responsive Bootstrap 5, jQuery',
            'Role' => 'Lead Developer & System Architect'
        ],
        'tasks' => [
            '<strong>Payment Integration:</strong> Securely integrated Stripe and PayPal for international transactions.',
            '<strong>Database Design:</strong> Modeled complex relationships for products, categories, orders, and users.',
            '<strong>Admin Dashboard:</strong> Created a powerful backend for order tracking, sales analytics, and inventory control.',
            '<strong>Frontend Engineering:</strong> Implemented a responsive, mobile-first design with dynamic filtering.'
        ],
        'tools' => ['PHP', 'MySQL', 'Stripe API', 'Bootstrap', 'AJAX'],
        'gallery' => []
    ],
    'soft-003' => [
        'title' => 'Sousse Apartments Booking System',
        'category' => 'Software Engineering',
        'status' => 'Live',
        'image' => 'data/images/SousseApt/dashboard.png',
        'link' => 'https://sousse-appartments.vercel.app/',
        'description' => 'Architected a high-performance real estate booking platform utilizing the latest Next.js 14 App Router. This project demonstrates modern frontend engineering practices, including Server-Side Rendering (SSR) for SEO and Static Site Generation (SSG) for performance.<br><br>The application features a robust backend powered by PostgreSQL and Prisma ORM, enabling complex availability queries and real-time booking management. It supports multi-language content (i18n) and includes a secure admin panel for property management.',
        'specs' => [
            'Framework' => 'Next.js 14 (App Router)',
            'Language' => 'TypeScript / JavaScript',
            'Database' => 'PostgreSQL (via Supabase)',
            'ORM' => 'Prisma',
            'Styling' => 'Tailwind CSS',
            'Role' => 'Full Stack Engineer'
        ],
        'tasks' => [
            '<strong>Full Stack Development:</strong> Built the entire application from database schema to frontend UI.',
            '<strong>API Development:</strong> Created RESTful API endpoints for booking logic and user authentication.',
            '<strong>Performance Tuning:</strong> Achieved 95+ Lighthouse scores through image optimization and code splitting.',
            '<strong>Internationalization:</strong> Implemented a scalable i18n routing system for multi-language support.'
        ],
        'tools' => ['Next.js', 'React', 'PostgreSQL', 'Prisma', 'Tailwind CSS'],
        'gallery' => []
    ],
    'soft-004' => [
        'title' => 'CM Taxi Booking & Logistics',
        'category' => 'Software Engineering',
        'status' => 'Live',
        'image' => 'data/images/cm-taxi/header-bg.jpg',
        'link' => 'https://taxi-sousse.com/',
        'description' => 'Designed and deployed a high-conversion landing page and booking interface for a premier transport service. The primary engineering goal was to maximize lead generation and minimize user friction.<br><br>The solution integrates directly with the WhatsApp Business API for instant communication, bypassing complex signup flows. Technical SEO optimization was a priority, resulting in top ranking for local keywords. The codebase is optimized for extreme speed and reliability on mobile networks.',
        'specs' => [
            'Type' => 'Lead Generation Platform',
            'Tech Stack' => 'Vanilla PHP, HTML5, CSS3',
            'Integration' => 'WhatsApp Business API',
            'Performance' => 'Core Web Vitals Optimized',
            'Analytics' => 'Google Analytics 4 & Tag Manager',
            'Role' => 'Frontend Engineer & SEO Specialist'
        ],
        'tasks' => [
            '<strong>Conversion Rate Optimization (CRO):</strong> Designed UI flows specifically to drive booking actions.',
            '<strong>API Integration:</strong> Implemented deep linking with pre-filled messages for WhatsApp.',
            '<strong>SEO Engineering:</strong> Structured semantic HTML and meta data for maximum search engine visibility.',
            '<strong>Speed Optimization:</strong> Minified assets and implemented lazy loading for sub-second load times.'
        ],
        'tools' => ['PHP', 'SEO Tools', 'Google Analytics', 'WhatsApp API'],
        'gallery' => []
    ],
    'soft-005' => [
        'title' => 'Taxi Sousse Pro Web App',
        'category' => 'Software Engineering',
        'status' => 'Live',
        'image' => 'data/images/cm-taxi/header-bg.jpg',
        'link' => 'https://taxi-sousse.vercel.app/',
        'description' => 'A modernized iteration of the transport booking platform, rebuilt as a Progressive Web App (PWA) using Next.js. This version focuses on delivering an app-like experience directly in the browser.<br><br>Leveraging the Vercel Edge Network, the application delivers content with minimal latency. It features smooth client-side transitions powered by Framer Motion and a component-driven architecture for maintainability. The system is designed to scale with increased traffic and feature requirements.',
        'specs' => [
            'Architecture' => 'Serverless / Edge',
            'Framework' => 'Next.js (React)',
            'Styling' => 'Tailwind CSS + Framer Motion',
            'Deployment' => 'Vercel CI/CD',
            'Type' => 'Progressive Web App (PWA)',
            'Role' => 'Lead Frontend Engineer'
        ],
        'tasks' => [
            '<strong>Component Architecture:</strong> Built a reusable UI component library for consistent design.',
            '<strong>Animation Logic:</strong> Implemented complex layout transitions using Framer Motion.',
            '<strong>Edge Deployment:</strong> Configured serverless functions for backend logic to run at the edge.',
            '<strong>PWA Configuration:</strong> Enabled offline capabilities and "Add to Home Screen" functionality.'
        ],
        'tools' => ['Next.js', 'React', 'Vercel', 'Framer Motion'],
        'gallery' => []
    ],
    'soft-006' => [
        'title' => 'Madam In - Digital Brand Experience',
        'category' => 'Software Engineering',
        'status' => 'Live',
        'image' => 'assets/img/madamin.jpg',
        'link' => 'https://madamin.rs/',
        'description' => 'Created a bespoke digital presence for a high-end beauty salon, focusing on brand aesthetics and user engagement. Unlike standard template solutions, this project involved custom WordPress theme development to meet specific design requirements.<br><br>The backend was customized using Advanced Custom Fields (ACF) to provide the client with a tailored editing experience. The site integrates an appointment booking system and showcases a dynamic portfolio of services.',
        'specs' => [
            'CMS' => 'WordPress (Custom Theme)',
            'Language' => 'PHP, JavaScript (jQuery)',
            'Customization' => 'Advanced Custom Fields (ACF) Pro',
            'Optimization' => 'WP Rocket + CDN',
            'Role' => 'WordPress Developer'
        ],
        'tasks' => [
            '<strong>Theme Development:</strong> Developed a custom WordPress theme from PSD/Figma designs.',
            '<strong>Backend Customization:</strong> Configured custom post types and fields for service management.',
            '<strong>Performance Tuning:</strong> Optimized database calls and asset delivery for WordPress.',
            '<strong>Security Hardening:</strong> Implemented security best practices to protect against common WP vulnerabilities.'
        ],
        'tools' => ['WordPress', 'PHP', 'ACF', 'CSS3'],
        'gallery' => []
    ],
    'soft-007' => [
        'title' => 'Culture.com.tn - National Heritage Portal',
        'category' => 'Software Engineering',
        'status' => 'Live',
        'image' => 'assets/img/culture.jpg',
        'link' => 'https://www.culture.com.tn/',
        'description' => 'Engineered a large-scale content portal dedicated to preserving and promoting Tunisian cultural heritage. The system serves as a central hub for articles, historical archives, and cultural event listings.<br><br>The architecture is built to handle large volumes of content and media. It features a custom-built CMS allowing multiple editors to collaborate, a newsletter distribution system, and an optimized search engine for navigating the extensive archive.',
        'specs' => [
            'Architecture' => 'Monolithic PHP Application',
            'Database' => 'MySQL (Optimized Indexing)',
            'Content Strategy' => 'Dynamic CMS',
            'SEO' => 'Schema.org Structured Data',
            'Role' => 'Full Stack Developer'
        ],
        'tasks' => [
            '<strong>Database Optimization:</strong> Designed efficient schemas for heavy text and media content.',
            '<strong>Search Implementation:</strong> Built a custom search algorithm for relevant content discovery.',
            '<strong>CMS Workflow:</strong> Created editorial workflows for content drafting, review, and publishing.',
            '<strong>Media Handling:</strong> Implemented automated image resizing and optimization pipelines.'
        ],
        'tools' => ['PHP', 'MySQL', 'JavaScript', 'SEO'],
        'gallery' => []
    ],
    'soft-008' => [
        'title' => 'Al Hamde Dayem Corporate Portal',
        'category' => 'Software Engineering',
        'status' => 'Live',
        'image' => 'assets/img/alhamde.jpg',
        'link' => 'https://www.alhamdedayem.com/',
        'description' => 'Developed a professional corporate identity platform for a leading industrial equipment supplier. The project presented unique engineering challenges regarding Right-to-Left (RTL) layout support for Arabic content.<br><br>The solution utilizes a customized Bootstrap framework to handle bi-directional text and layout mirroring seamlessly. It includes a B2B product catalog and a direct inquiry system, facilitating business operations and client communication.',
        'specs' => [
            'Frontend' => 'Bootstrap 5 (RTL Mode)',
            'Backend' => 'PHP',
            'i18n' => 'Bi-directional Layout Support',
            'Type' => 'B2B Corporate Site',
            'Role' => 'Frontend Specialist'
        ],
        'tasks' => [
            '<strong>RTL Engineering:</strong> Adapted CSS frameworks to support Arabic layout direction correctly.',
            '<strong>Catalog System:</strong> Built a structured product display system for industrial equipment.',
            '<strong>Responsive Design:</strong> Ensured perfect rendering across all device sizes and orientations.',
            '<strong>Collaboration:</strong> Worked closely with the design team to ensure brand consistency.'
        ],
        'tools' => ['PHP', 'Bootstrap', 'RTL CSS', 'JavaScript'],
        'gallery' => []
    ],
    'soft-009' => [
        'title' => 'Zliten Medical Center - HMS',
        'category' => 'Web Application',
        'status' => 'Development',
        'image' => 'data/images/esam/zlhospital.png',
        'link' => 'https://github.com/esamali2200/newesam',
        'description' => 'Lead Full Stack Developer for a comprehensive Hospital Management System (HMS) designed for Zliten Medical Center. This enterprise-grade application streamlines complex medical workflows, including patient admission, surgical scheduling, and electronic medical records (EMR).<br><br>The system is built on the MERN stack (MongoDB, Express, React, Node.js), offering a reactive user interface and a scalable, non-blocking backend. It features strict data validation, role-based security, and real-time updates for medical staff.',
        'specs' => [
            'Stack' => 'MERN (MongoDB, Express, React, Node.js)',
            'API Architecture' => 'RESTful API',
            'Authentication' => 'JWT (JSON Web Tokens)',
            'State Management' => 'Redux / Context API',
            'Role' => 'Lead Full Stack Engineer'
        ],
        'tasks' => [
            '<strong>API Design:</strong> Architected secure REST endpoints for sensitive medical data handling.',
            '<strong>Frontend Logic:</strong> Built complex forms and dashboards for patient management.',
            '<strong>Data Security:</strong> Implemented encryption and secure authentication flows.',
            '<strong>System Integration:</strong> Connected various hospital modules into a unified dashboard.'
        ],
        'tools' => ['Node.js', 'Express', 'MongoDB', 'React', 'Git'],
        'gallery' => []
    ]
];
?>
