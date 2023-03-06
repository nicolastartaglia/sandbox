<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Jawira\PlantUmlClient\Client;
use Jawira\PlantUmlClient\Format;

class PlantUMLController extends AbstractController
{
    #[Route('/plantUML', name: 'app_plant_u_m_l')]
    public function index(): Response
    {
        $puml = <<<PLANTUML
        @startuml
        entity "data" as data {
        **product**: bigint**<<FK>>**
        --
        id_statut_presence: jsonb NULL
        annee_du_dernier_vu_en: timestamp NULL
        produit_ini: bigint NULL
        id_circuit_distribution: jsonb NULL
        poids_net_egoutte_g: double precision NULL
        packaging: jsonb NULL
        id_preslabel: boolean NULL
        indice_environnemental: jsonb NULL
        critere_qualenvir: bigint NULL
        conseil_preparation: jsonb NULL
        presence_rep_nut: boolean NULL
        id_repere_nutritionnel: jsonb NULL
        id_position: jsonb NULL
        portion_indiquee_g: double precision NULL
        portion_indiquee_ml: double precision NULL
        flag_portion_vn: boolean NULL
        portion_vn_g: double precision NULL
        portion_vn_ml: double precision NULL
        poids_d_une_unite_g: double precision NULL
        volume_d_une_unite_ml: double precision NULL
        id_presence_etiquetage_simplifie: boolean NULL
        id_etiquetage_simplifie_type: jsonb NULL
        id_etiquetage_simplifie_score: jsonb NULL
        materiau_au_contact: jsonb NULL
        id_typeduplication: jsonb NULL
        }
        
        
        entity "products" as products {
        **local_id**: bigint 
        --
        id_secteur_jd1: jsonb NULL
        id_famille_jd1: jsonb NULL
        id_segment_jd1: jsonb NULL
        occ_hdeb_jd1: timestamp NULL
        id_marque_jd1: jsonb NULL
        id_industriel_jd1: jsonb NULL
        libel_jd1: jsonb NULL
        libel_precision_jd1: jsonb NULL
        denomination_vente_jd1: jsonb NULL
        code_barre_jd1: jsonb NULL
        poids_net_g_jd1: double precision NULL
        volume_net_ml_jd1: double precision NULL
        nb_unite_jd1: bigint NULL
        assortiment_jd1: boolean NULL
        id_preslabel_jd1: boolean NULL
        id_mode_conservation_jd1: jsonb NULL
        id_pays_origine_jd1: jsonb NULL
        flag_portion_indiquee_jd1: boolean NULL
        poids_d_une_unite_g_jd1: double precision NULL
        volume_d_une_unite_ml_jd1: double precision NULL
        conditionnement_jd1: jsonb NULL
        }
        
        data |o..o{ products
        
        @enduml
        PLANTUML;

        $client = new Client('http://localhost:8080');
        $url = $client->generateUrl($puml, Format::PNG);
        return $this->render('plant_uml/index.html.twig', [
            'urlUML' => $url,
        ]);
    }
}
