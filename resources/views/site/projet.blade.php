@extends('layouts.app')

@section('title', 'PATRONAT | Projets')

@section('content')
   
    <section class="page-title" style="background-image:url({{ asset('images/projet/bread.jpg') }});height: 70vh;background-size: cover; background-position: center; background-repeat: no-repeat;">
    	<div class="container">
			<div class="content">
				<h1>Projets</h1>
				<ul class="page-breadcrumb">
					<li><a href="#">Accueil</a></li>
					<li>Projets</li>
				</ul>
			</div>
        </div>
    </section>

    <div class="container">
        <!-- Header -->
        <div class="section-title centered">
				<div class="title">Nos Projets</div>
				<h3>Découvrez nos trois projets phares qui transforment les communautés   <br> et créent <span>un impact durable à travers l'innovation et la collaboration.</span></h3>
		</div>

        <!-- Projects Grid -->
        <div class="projects-grid">
            <!-- PAFPA Project -->
            <div class="project-card" onclick="openModal('pafpa')">
                <div class="project-header">
                    <div class="project-icon">
                        <i class="fas fa-seedling"></i>
                    </div>
                    <h2 class="project-title">PAFPA</h2>
                    <p class="project-acronym">Projet d'Amélioration de la Filière Patate</p>
                </div>
                <div class="project-content">
                    <p class="project-description">
                        Un projet innovant visant à améliorer la production et la commercialisation de la patate douce, 
                        créant des opportunités économiques durables pour les agriculteurs locaux.
                    </p>
                    <div class="project-stats">
                        <div class="stat-item">
                            <span class="stat-number">500+</span>
                            <span class="stat-label">Agriculteurs</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">15</span>
                            <span class="stat-label">Communes</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">3</span>
                            <span class="stat-label">Années</span>
                        </div>
                    </div>
                    <div class="project-features">
                        <div class="feature-item">
                            <i class="fas fa-check"></i>
                            <span>Formation technique des producteurs</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check"></i>
                            <span>Amélioration des chaînes de valeur</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check"></i>
                            <span>Accès aux marchés internationaux</span>
                        </div>
                    </div>
                    <button class="learn-more-btn">
                        <i class="fas fa-info-circle"></i>
                        En savoir plus
                    </button>
                </div>
            </div>

            <!-- PACAJEF Project -->
            <div class="project-card" onclick="openModal('pacajef')">
                <div class="project-header">
                    <div class="project-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h2 class="project-title">PACAJEF</h2>
                    <p class="project-acronym">Projet d'Appui aux Coopératives Agricoles des Jeunes et Femmes</p>
                </div>
                <div class="project-content">
                    <p class="project-description">
                        Initiative dédiée au renforcement des capacités des jeunes et des femmes dans l'agriculture 
                        coopérative, favorisant l'entrepreneuriat et l'autonomisation économique.
                    </p>
                    <div class="project-stats">
                        <div class="stat-item">
                            <span class="stat-number">300+</span>
                            <span class="stat-label">Bénéficiaires</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">12</span>
                            <span class="stat-label">Coopératives</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">2</span>
                            <span class="stat-label">Années</span>
                        </div>
                    </div>
                    <div class="project-features">
                        <div class="feature-item">
                            <i class="fas fa-check"></i>
                            <span>Formations en gestion coopérative</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check"></i>
                            <span>Micro-crédit et financement</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check"></i>
                            <span>Accompagnement technique</span>
                        </div>
                    </div>
                    <button class="learn-more-btn">
                        <i class="fas fa-info-circle"></i>
                        En savoir plus
                    </button>
                </div>
            </div>

            <!-- RIPAQUE Project -->
            <div class="project-card" onclick="openModal('ripaque')">
                <div class="project-header">
                    <div class="project-icon">
                        <i class="fas fa-fish"></i>
                    </div>
                    <h2 class="project-title">RIPAQUE</h2>
                    <p class="project-acronym">Réseau d'Innovation pour la Pêche et l'Aquaculture</p>
                </div>
                <div class="project-content">
                    <p class="project-description">
                        Réseau innovant promouvant le développement durable de la pêche et de l'aquaculture 
                        à travers la recherche, la formation et l'innovation technologique.
                    </p>
                    <div class="project-stats">
                        <div class="stat-item">
                            <span class="stat-number">200+</span>
                            <span class="stat-label">Pêcheurs</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">8</span>
                            <span class="stat-label">Régions</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">4</span>
                            <span class="stat-label">Années</span>
                        </div>
                    </div>
                    <div class="project-features">
                        <div class="feature-item">
                            <i class="fas fa-check"></i>
                            <span>Techniques de pêche durables</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check"></i>
                            <span>Développement aquacole</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check"></i>
                            <span>Innovation technologique</span>
                        </div>
                    </div>
                    <button class="learn-more-btn">
                        <i class="fas fa-info-circle"></i>
                        En savoir plus
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modals -->
    <!-- PAFPA Modal -->
    <div id="pafpaModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close" onclick="closeModal('pafpa')">&times;</span>
                <h2 class="modal-title">PAFPA</h2>
                <p class="modal-subtitle">Projet d'Amélioration de la Filière Patate</p>
            </div>
            <div class="modal-body">
                <div class="modal-section">
                    <h3><i class="fas fa-bullseye"></i> Objectifs du Projet</h3>
                    <p>Le projet PAFPA vise à transformer la filière patate douce en créant un écosystème agricole durable et rentable. Nous nous concentrons sur l'amélioration des techniques de production, la création de chaînes de valeur efficaces et l'accès aux marchés locaux et internationaux.</p>
                    <ul>
                        <li><i class="fas fa-arrow-right"></i> Augmenter la productivité de 40% en 3 ans</li>
                        <li><i class="fas fa-arrow-right"></i> Former 500 producteurs aux techniques modernes</li>
                        <li><i class="fas fa-arrow-right"></i> Créer 15 unités de transformation</li>
                        <li><i class="fas fa-arrow-right"></i> Établir des partenariats commerciaux durables</li>
                    </ul>
                </div>
                
                <div class="modal-section">
                    <h3><i class="fas fa-users"></i> Bénéficiaires</h3>
                    <p>Plus de 500 agriculteurs répartis dans 15 communes bénéficient directement de ce projet. Les formations couvrent les techniques de production, la gestion post-récolte, et la commercialisation.</p>
                </div>
                
                <div class="modal-section">
                    <h3><i class="fas fa-calendar-alt"></i> Chronologie</h3>
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-date">2022 - Phase 1</div>
                            <div class="timeline-content">Lancement du projet et identification des bénéficiaires</div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-date">2023 - Phase 2</div>
                            <div class="timeline-content">Formations techniques et distribution d'équipements</div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-date">2024 - Phase 3</div>
                            <div class="timeline-content">Développement des chaînes de valeur</div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-date">2025 - Phase 4</div>
                            <div class="timeline-content">Expansion et consolidation des acquis</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- PACAJEF Modal -->
    <div id="pacajefModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close" onclick="closeModal('pacajef')">&times;</span>
                <h2 class="modal-title">PACAJEF</h2>
                <p class="modal-subtitle">Projet d'Appui aux Coopératives Agricoles des Jeunes et Femmes</p>
            </div>
            <div class="modal-body">
                <div class="modal-section">
                    <h3><i class="fas fa-bullseye"></i> Mission</h3>
                    <p>PACAJEF autonomise les jeunes et les femmes à travers l'agriculture coopérative. Nous créons des opportunités économiques durables en renforçant les capacités organisationnelles et techniques des coopératives.</p>
                    <ul>
                        <li><i class="fas fa-arrow-right"></i> Renforcer 12 coopératives existantes</li>
                        <li><i class="fas fa-arrow-right"></i> Former 300 jeunes et femmes</li>
                        <li><i class="fas fa-arrow-right"></i> Faciliter l'accès au micro-crédit</li>
                        <li><i class="fas fa-arrow-right"></i> Développer l'entrepreneuriat rural</li>
                    </ul>
                </div>
                
                <div class="modal-section">
                    <h3><i class="fas fa-graduation-cap"></i> Formations Proposées</h3>
                    <p>Nous offrons un programme complet de formations adaptées aux besoins spécifiques des coopératives :</p>
                    <ul>
                        <li><i class="fas fa-arrow-right"></i> Gestion coopérative et leadership</li>
                        <li><i class="fas fa-arrow-right"></i> Techniques agricoles modernes</li>
                        <li><i class="fas fa-arrow-right"></i> Gestion financière et comptabilité</li>
                        <li><i class="fas fa-arrow-right"></i> Marketing et commercialisation</li>
                    </ul>
                </div>
                
                <div class="modal-section">
                    <h3><i class="fas fa-chart-line"></i> Impacts Attendus</h3>
                    <p>Le projet vise à créer un impact social et économique significatif dans les communautés rurales, particulièrement pour les groupes vulnérables.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- RIPAQUE Modal -->
    <div id="ripaqueModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close" onclick="closeModal('ripaque')">&times;</span>
                <h2 class="modal-title">RIPAQUE</h2>
                <p class="modal-subtitle">Réseau d'Innovation pour la Pêche et l'Aquaculture</p>
            </div>
            <div class="modal-body">
                <div class="modal-section">
                    <h3><i class="fas fa-bullseye"></i> Vision</h3>
                    <p>RIPAQUE développe un réseau d'innovation pour transformer le secteur de la pêche et de l'aquaculture. Nous combinons recherche scientifique, innovation technologique et formation pratique pour créer un secteur durable et rentable.</p>
                    <ul>
                        <li><i class="fas fa-arrow-right"></i> Promouvoir la pêche durable</li>
                        <li><i class="fas fa-arrow-right"></i> Développer l'aquaculture moderne</li>
                        <li><i class="fas fa-arrow-right"></i> Innover dans les techniques de conservation</li>
                        <li><i class="fas fa-arrow-right"></i> Créer des emplois verts</li>
                    </ul>
                </div>
                
                <div class="modal-section">
                    <h3><i class="fas fa-cogs"></i> Innovations Technologiques</h3>
                    <p>Nous développons et déployons des solutions technologiques adaptées aux défis du secteur :</p>
                    <ul>
                        <li><i class="fas fa-arrow-right"></i> Systèmes d'élevage aquacole intelligents</li>
                        <li><i class="fas fa-arrow-right"></i> Techniques de conservation avancées</li>
                        <li><i class="fas fa-arrow-right"></i> Monitoring environnemental</li>
                        <li><i class="fas fa-arrow-right"></i> Plateformes de commercialisation digitales</li>
                    </ul>
                </div>
                
                <div class="modal-section">
                    <h3><i class="fas fa-network-wired"></i> Réseau de Partenaires</h3>
                    <p>RIPAQUE s'appuie sur un réseau solide de partenaires techniques, financiers et institutionnels pour maximiser son impact à travers 8 régions.</p>
                </div>
            </div>
        </div>
    </div>

    
@endsection