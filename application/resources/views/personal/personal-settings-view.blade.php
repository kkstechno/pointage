@extends('layouts.personal')

    @section('meta')
        <title>My Settings | Workday Time Clock</title>
        <meta name="description" content="Workday my settings">
    @endsection

    @section('styles')
        <script>var admin = false;</script>
    @endsection

    @section('content')
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 class="page-title">{{ __("Informations") }}</h2>
            </div>    
        </div>

        <div class="row">
            <div class="col-md-12">

            <div class="box box-success">
                <div class="box-body">
                    <div class="ui secondary blue pointing tabular menu">
                        <a class="item active" data-tab="about">{{ __("De quoi s'agit-il ?") }}</a>
                    </div>
                    <div class="ui tab active" data-tab="about">
                        <div class="col-md-12">
                            <div class="tab-content">
                                <p class="license col-md-6" style="margin-bottom:0">
                                    <h3 style="margin-top:0" class="ui header"> Une application de pointage pour les employés</h3>
                                    <p>Suivez et gérez facilement les heures de travail des employés, améliorez votre processus de paie et collaborez avec vos employés chronométreurs comme jamais auparavant.</p>
                                    <h4 class="ui header">Caractéristiques</h4>
                                    <ul>
                                        <li>Gestion des employés (SIRH)</li>
                                        <li>Gestion du temps et des présences</li>
                                        <li>Suivi du temps des employés</li>
                                        <li>Gestion des quarts de travail</li>
                                        <li>Gestion des congés</li>
                                        <li>Rapports et analyses</li>
                                        <li>Libre-service pour les gestionnaires et les employés</li>
                                    </ul><br><hr>
                                    <div class="footer-text">
                                        <div class="sub header"><h4>KKS-PRESENCE</h4></div>
                                        <div class="sub header">&copy; 2023 - <a href="https://www.kks-technologies.com" target="_blank">KKS TECHNOLOGIE</a> | Tous les droits reservés.</div>
                                    </div>
                                </p>

                </div>
            </div>
            </div>
        </div>
    </div>

    @endsection
    
    @section('scripts')
    <script type="text/javascript">
        $('.menu .item').tab();
    </script>
    @endsection 