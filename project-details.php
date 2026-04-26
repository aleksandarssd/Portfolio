<?php

include 'data/projects.php';

$project_id = isset($_GET['id']) ? $_GET['id'] : null;
$project = isset($projects[$project_id]) ? $projects[$project_id] : null;

if (!$project) {
    header("Location: index.php");
    exit;
}
?>


    <a href="index.php#projects" class="back-btn"><i class="fas fa-arrow-left"></i></a>

    <?php include 'includes/header.php'; ?>

    <section class="project-hero">
        <div class="project-hero-bg" style="background-image: url('<?php echo $project['image']; ?>');"></div>
        <div class="project-hero-overlay"></div>
        <div class="project-hero-content">
            <div class="project-meta">
                <span><?php echo $project['category']; ?></span>
                <span>//</span>
                <span><?php echo $project['status']; ?></span>
            </div>
            <h1 class="project-title"><?php echo $project['title']; ?></h1>
        </div>
    </section>

    <div class="container">
        <div class="datasheet-container">
            <div class="datasheet-header">
                <h2>Technical Datasheet</h2>
                <span class="datasheet-id"><?php echo strtoupper($project_id); ?></span>
            </div>

            <div class="spec-grid">
                <div class="main-info">
                    <?php if (isset($project['is_rd']) && $project['is_rd']): ?>
                        <div class="rd-header" style="margin-bottom: 20px; padding: 15px; background: rgba(59, 130, 246, 0.05); border-left: 3px solid var(--accent-soft);">
                            <h4 style="margin-bottom: 5px; color: var(--accent-soft);">Role: <?php echo $project['role']; ?></h4>
                            <p style="font-style: italic; color: var(--text-secondary); margin: 0;"><?php echo $project['subheadline']; ?></p>
                        </div>
                    <?php endif; ?>

                    <h3>Project Overview</h3>
                    <div class="project-description">
                        <?php echo $project['description']; ?>
                    </div>

                    <?php if (isset($project['methodologies'])): ?>
                    <h3 style="margin-top: 30px; color: var(--accent-mech);">R&D Methodology & Process</h3>
                    <ul class="task-list rd-list">
                        <?php foreach ($project['methodologies'] as $method): ?>
                            <li><?php echo $method; ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>

                    <?php if (isset($project['innovations'])): ?>
                    <h3 style="margin-top: 30px; color: var(--accent-mech);">Mechanical Innovation & Validation</h3>
                    <ul class="task-list rd-list">
                        <?php foreach ($project['innovations'] as $innovation): ?>
                            <li><?php echo $innovation; ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>

                    <?php if (isset($project['lessons_learned'])): ?>
                    <div class="lessons-learned" style="margin-top: 30px; padding: 20px; background: var(--bg-tertiary); border: 1px solid var(--border-color); border-radius: 4px;">
                        <h3 style="margin-bottom: 10px; color: var(--text-primary);"><i class="fas fa-lightbulb" style="color: var(--accent-mech);"></i> Lessons Learned & Next Steps</h3>
                        <p style="color: var(--text-secondary); margin: 0; line-height: 1.6;"><?php echo $project['lessons_learned']; ?></p>
                    </div>
                    <?php endif; ?>
                    
                    <?php if (isset($project['link'])): ?>
                    <div style="margin-bottom: 30px;">
                        <a href="<?php echo $project['link']; ?>" target="_blank" class="btn btn-primary" style="display: inline-flex; align-items: center; gap: 10px; background: var(--accent-mech); color: white; padding: 12px 25px; text-decoration: none; border-radius: 4px; font-weight: 600; text-transform: uppercase; letter-spacing: 1px;">
                            <i class="fas fa-external-link-alt"></i> Visit Live Site
                        </a>
                    </div>
                    <?php endif; ?>
                    
                    <?php if (isset($project['tasks'])): ?>
                    <h3>Key Engineering Tasks</h3>
                    <ul class="task-list">
                        <?php foreach ($project['tasks'] as $task): ?>
                            <li><?php echo $task; ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>
                    
                    <h3>Tools & Technologies</h3>
                    <div class="tool-list">
                        <?php foreach ($project['tools'] as $tool): ?>
                            <div class="tool-item">
                                <i class="fas fa-check-circle"></i>
                                <span><?php echo $tool; ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <?php if (isset($project['model_3d']) && !empty($project['model_3d'])): ?>
                    <h3 class="section-title">3D Assembly Model</h3>
                    <div class="model-viewer-container">
                        <model-viewer 
                            src="<?php echo $project['model_3d']; ?>" 
                            alt="3D Model of <?php echo $project['title']; ?>"
                            auto-rotate 
                            camera-controls 
                            shadow-intensity="1"
                            camera-orbit="45deg 55deg 2.5m" 
                            field-of-view="30deg"
                            exposure="1"
                            loading="lazy">
                            
                            <div class="model-controls">
                                <button class="model-btn" onclick="document.querySelector('model-viewer').activateAR()">
                                    <i class="fas fa-cube"></i> View in AR
                                </button>
                                <button class="model-btn" onclick="document.querySelector('model-viewer').zoom(1)">
                                    <i class="fas fa-search-plus"></i> Reset View
                                </button>
                            </div>
                        </model-viewer>
                    </div>
                    <?php endif; ?>

                    <?php if (!empty($project['gallery'])): ?>
                    <h3 class="section-title">Project Gallery</h3>
                    <div class="gallery-grid">
                        <?php foreach ($project['gallery'] as $image): ?>
                            <div class="gallery-item">
                                <img src="<?php echo $image; ?>" alt="Project Image" loading="lazy">
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>

                    <?php if (!empty($project['documents'])): ?>
                    <h3 class="section-title">Technical Documentation</h3>
                    <div class="documents-grid">
                        <?php foreach ($project['documents'] as $doc): ?>
                            <a href="<?php echo $doc['file']; ?>" target="_blank" class="document-card">
                                <div class="doc-icon">
                                    <?php if ($doc['type'] === 'report'): ?>
                                        <i class="fas fa-file-alt"></i>
                                    <?php else: ?>
                                        <i class="fas fa-drafting-compass"></i>
                                    <?php endif; ?>
                                </div>
                                <div class="doc-info">
                                    <span class="doc-title"><?php echo $doc['title']; ?></span>
                                    <span class="doc-type"><?php echo ucfirst($doc['type']); ?></span>
                                </div>
                                <div class="doc-download">
                                    <i class="fas fa-download"></i>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                </div>

                <div class="specs-sidebar">
                    <h3><?php echo (isset($project['is_rd']) && $project['is_rd']) ? 'Technical Validation Data' : 'Specifications'; ?></h3>
                    <table class="specs-table">
                        <?php foreach ($project['specs'] as $key => $value): ?>
                        <tr>
                            <th><?php echo $key; ?></th>
                            <td><?php echo $value; ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>

    <!-- Lightbox Markup -->
    <div id="lightbox" class="lightbox">
        <span class="lightbox-close">&times;</span>
        <img class="lightbox-content" id="lightbox-img">
    </div>

    <script>
        // Simple Lightbox Script
        document.addEventListener('DOMContentLoaded', () => {
            const galleryItems = document.querySelectorAll('.gallery-item img');
            const lightbox = document.getElementById('lightbox');
            const lightboxImg = document.getElementById('lightbox-img');
            const closeBtn = document.querySelector('.lightbox-close');

            galleryItems.forEach(item => {
                item.addEventListener('click', () => {
                    lightboxImg.src = item.src;
                    lightbox.classList.add('active');
                    document.body.style.overflow = 'hidden'; // Prevent scrolling
                });
            });

            const closeLightbox = () => {
                lightbox.classList.remove('active');
                document.body.style.overflow = ''; // Restore scrolling
            };

            closeBtn.addEventListener('click', closeLightbox);

            lightbox.addEventListener('click', (e) => {
                if (e.target === lightbox) {
                    closeLightbox();
                }
            });

            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape' && lightbox.classList.contains('active')) {
                    closeLightbox();
                }
            });
        });
    </script>

</body>
</html>
