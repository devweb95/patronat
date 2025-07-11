@extends('layouts.app')

@section('title', 'PATRONAT | Publications')

@section('content')

    
        <!-- Header -->
        <section class="page-title" style="background-image:url({{ asset('images/pub/bread.jpg') }});height: 70vh;background-size: cover; background-position: center; background-repeat: no-repeat;">
            <div class="container">
                <div class="content">
                    <h1>Publicités</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="#">Accueil</a></li>
                        <li>Publicités</li>
                    </ul>
                </div>
            </div>
        </section>
<div class="container">
    <div class="section-title centered">
				<div class="title">Nos Publicités</div>
				<h3>Accédez à tous vos documents  <br> et créent <span>importants en un clic.</span></h3>
		</div>
        <!-- Stats -->
        <!-- <div class="stats">
            <div class="stat-item">
                <span class="stat-number">24</span>
                <span class="stat-label">Documents</span>
            </div>
            <div class="stat-item">
                <span class="stat-number">6</span>
                <span class="stat-label">Catégories</span>
            </div>
            <div class="stat-item">
                <span class="stat-number">1.2k</span>
                <span class="stat-label">Téléchargements</span>
            </div>
        </div> -->

        <!-- Search Bar -->
        <div class="search-bar">
            <input type="text" class="search-input" placeholder="Rechercher un document..." id="searchInput">
        </div>

        <!-- Filters -->
        <div class="filters">
            <button class="filter-btn active" data-category="all">Tous</button>
            <button class="filter-btn" data-category="pdf">PDF</button>
            <button class="filter-btn" data-category="doc">Documents</button>
            <button class="filter-btn" data-category="xls">Tableurs</button>
            <button class="filter-btn" data-category="ppt">Présentations</button>
            <button class="filter-btn" data-category="img">Images</button>
            <button class="filter-btn" data-category="zip">Archives</button>
        </div>

        <!-- Documents Grid -->
        <div class="documents-grid" id="documentsGrid">
            <!-- Document 1 -->
            <div class="document-card" data-category="pdf">
                <div class="document-icon pdf-icon">
                    <i class="fas fa-file-pdf"></i>
                </div>
                <h3 class="document-title">Guide utilisateur complet</h3>
                <p class="document-description">Manuel d'utilisation détaillé avec toutes les fonctionnalités et procédures pas à pas.</p>
                <div class="document-meta">
                    <span>Mis à jour le 15/06/2024</span>
                    <span class="document-size">2.3 MB</span>
                </div>
                <button class="download-btn" onclick="downloadFile('guide-utilisateur.pdf')">
                    <i class="fas fa-download"></i>
                    Télécharger
                </button>
            </div>

            <!-- Document 2 -->
            <div class="document-card" data-category="doc">
                <div class="document-icon doc-icon">
                    <i class="fas fa-file-word"></i>
                </div>
                <h3 class="document-title">Contrat de service</h3>
                <p class="document-description">Modèle de contrat de service standard avec toutes les clauses légales nécessaires.</p>
                <div class="document-meta">
                    <span>Mis à jour le 12/06/2024</span>
                    <span class="document-size">156 KB</span>
                </div>
                <button class="download-btn" onclick="downloadFile('contrat-service.docx')">
                    <i class="fas fa-download"></i>
                    Télécharger
                </button>
            </div>

            <!-- Document 3 -->
            <div class="document-card" data-category="xls">
                <div class="document-icon xls-icon">
                    <i class="fas fa-file-excel"></i>
                </div>
                <h3 class="document-title">Tableau de bord financier</h3>
                <p class="document-description">Feuille de calcul avec indicateurs financiers et graphiques automatisés.</p>
                <div class="document-meta">
                    <span>Mis à jour le 10/06/2024</span>
                    <span class="document-size">891 KB</span>
                </div>
                <button class="download-btn" onclick="downloadFile('tableau-bord-financier.xlsx')">
                    <i class="fas fa-download"></i>
                    Télécharger
                </button>
            </div>

            <!-- Document 4 -->
            <div class="document-card" data-category="ppt">
                <div class="document-icon ppt-icon">
                    <i class="fas fa-file-powerpoint"></i>
                </div>
                <h3 class="document-title">Présentation commerciale</h3>
                <p class="document-description">Slides de présentation pour les clients avec nos services et tarifs.</p>
                <div class="document-meta">
                    <span>Mis à jour le 08/06/2024</span>
                    <span class="document-size">4.7 MB</span>
                </div>
                <button class="download-btn" onclick="downloadFile('presentation-commerciale.pptx')">
                    <i class="fas fa-download"></i>
                    Télécharger
                </button>
            </div>

            <!-- Document 5 -->
            <div class="document-card" data-category="pdf">
                <div class="document-icon pdf-icon">
                    <i class="fas fa-file-pdf"></i>
                </div>
                <h3 class="document-title">Rapport mensuel</h3>
                <p class="document-description">Analyse détaillée des performances du mois avec recommandations.</p>
                <div class="document-meta">
                    <span>Mis à jour le 01/06/2024</span>
                    <span class="document-size">1.8 MB</span>
                </div>
                <button class="download-btn" onclick="downloadFile('rapport-mensuel.pdf')">
                    <i class="fas fa-download"></i>
                    Télécharger
                </button>
            </div>

            <!-- Document 6 -->
            <div class="document-card" data-category="img">
                <div class="document-icon img-icon">
                    <i class="fas fa-file-image"></i>
                </div>
                <h3 class="document-title">Kit de branding</h3>
                <p class="document-description">Logos, couleurs et éléments graphiques de la marque en haute résolution.</p>
                <div class="document-meta">
                    <span>Mis à jour le 28/05/2024</span>
                    <span class="document-size">12.4 MB</span>
                </div>
                <button class="download-btn" onclick="downloadFile('kit-branding.zip')">
                    <i class="fas fa-download"></i>
                    Télécharger
                </button>
            </div>

            <!-- Document 7 -->
            <div class="document-card" data-category="zip">
                <div class="document-icon zip-icon">
                    <i class="fas fa-file-archive"></i>
                </div>
                <h3 class="document-title">Archive complète</h3>
                <p class="document-description">Tous les documents du projet compressés dans une archive unique.</p>
                <div class="document-meta">
                    <span>Mis à jour le 25/05/2024</span>
                    <span class="document-size">45.2 MB</span>
                </div>
                <button class="download-btn" onclick="downloadFile('archive-complete.zip')">
                    <i class="fas fa-download"></i>
                    Télécharger
                </button>
            </div>

            <!-- Document 8 -->
            <div class="document-card" data-category="doc">
                <div class="document-icon doc-icon">
                    <i class="fas fa-file-word"></i>
                </div>
                <h3 class="document-title">Politique de confidentialité</h3>
                <p class="document-description">Document légal détaillant notre politique de protection des données.</p>
                <div class="document-meta">
                    <span>Mis à jour le 20/05/2024</span>
                    <span class="document-size">245 KB</span>
                </div>
                <button class="download-btn" onclick="downloadFile('politique-confidentialite.docx')">
                    <i class="fas fa-download"></i>
                    Télécharger
                </button>
            </div>
        </div>
    </div>


@endsection