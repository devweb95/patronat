@extends('layouts.app')

@section('title', 'PATRONAT | Adhésion')

@section('content')

<section class="page-title" style="background-image:url({{ asset('images/adhesion/bread.jpg') }}); height: 70vh;background-size: cover; background-position: center; background-repeat: no-repeat;">
    	<div class="container">
			<div class="content">
				<h1>Adhésion</h1>
				<ul class="page-breadcrumb">
					<li><a href="{{route('accueil')}}">Accueil</a></li>
					<li>Adhésion</li>
				</ul>
			</div>
        </div>
    </section>

    <main class="main-content">
        <div class="container">
            <section class="intro-section">
                <h2>Rejoignez le COGEF</h2>
                <p>Depuis l'adoption des nouveaux textes par l'Assemblée générale du 12 juillet 2018, les entreprises peuvent adhérer directement (individuellement) au COGEF.</p>
                <p>Historiquement, l'adhésion au Conseil National du Patronat Burkinabè était seulement ouverte aux associations ou regroupements d'associations à caractère patronal, sans considération de taille et de secteur d'activité.</p>
            </section>

            <div class="adhesion-types">
                <!-- Groupements d'associations -->
                <div class="adhesion-card">
                    <h3>Groupements d'associations</h3>
                    
                    <div class="conditions-section">
                        <h4>Conditions d'adhésion</h4>
                        <div class="conditions-list">
                            <ul>
                                <li>Être une association ou regroupement d'associations à caractère patronal</li>
                                <li>Sans considération de taille et de secteur d'activité</li>
                                <li>Respecter les statuts et règlements du COGEF</li>
                            </ul>
                        </div>
                    </div>

                    <div class="documents-section">
                        <h4>Pièces à joindre</h4>
                        <div class="documents-list">
                            <ul>
                                <li>La fiche d'adhésion dûment renseignée et signée</li>
                                <li>Le récépissé de déclaration de l'association</li>
                                <li>Les statuts et règlement intérieur de l'association</li>
                                <li>Liste nominative des dirigeants de l'association (membres du bureau)</li>
                                <li>La liste complète des membres de l'association (noms, contacts et numéro d'immatriculation CNSS des entreprises membres)</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Entreprises -->
                <div class="adhesion-card entreprise">
                    <h3>Entreprises</h3>
                    
                    <div class="conditions-section">
                        <h4>Conditions d'adhésion</h4>
                        <div class="conditions-list">
                            <ul>
                                <li>Ne pas appartenir à une organisation déjà membre du COGEF</li>
                                <li>Avoir un chiffre d'affaires moyen hors taxe des trois dernières années supérieur ou égal à 5 milliards de F CFA</li>
                                <li>Avoir au moins 50 employés</li>
                            </ul>
                        </div>
                    </div>

                    <div class="documents-section">
                        <h4>Pièces à joindre</h4>
                        <div class="documents-list">
                            <ul>
                                <li>La fiche d'adhésion dûment renseignée et signée</li>
                                <li>Les textes constitutifs de l'entreprise</li>
                                <li>Le registre de commerce</li>
                                <li>Le numéro IFU</li>
                                <li>Le numéro d'affiliation à la CNSS</li>
                                <li>La liste nominative des dirigeants de l'entreprise</li>
                                <li>Le certificat de chiffre d'affaires des trois derniers exercices, délivrés par les impôts</li>
                                <li>L'attestation de situation cotisante CNSS mentionnant le nombre d'employés déclarés</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <section class="download-section">
               
            </section> -->

            <section class="contact-section" style="background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url({{ asset('images/adhesion/adhefoot.jpg') }}); background-size: cover; background-position: center; background-repeat: no-repeat;">
                <h3>Fiche d'adhésion</h3>
                <p style="margin-bottom: 25px;">Téléchargez votre fiche d'adhésion à la COGEF</p>
                <a href="#" class="download-btn">Télécharger la fiche d'adhésion</a>
                <!-- <h3>Soumettre votre demande</h3> -->
                <p>Toutes les demandes doivent être adressées à <strong>Monsieur le Président de la Confédération Générale des Entreprises du Faso (COGEF)</strong>, avec les pièces jointes requises.</p>
            </section>
        </div>
    </main>

    @endsection