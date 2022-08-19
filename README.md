# gmao
Application Symfony se prêtant essentiellement à un réseau intranet d'entreprise.
<br />
Cette petite Gestion de maintenance assistée par ordinateur (GMAO) permettrait aux personnes d'une entreprise (notamment chargées d'analyser des données de production et de maintenance) de visualiser le " parc des machines ".
<br />
Mais aussi les pannes recensées... avec possibilité de filtrage par le nom d'une machine, du type d'intervention, du type de panne et/ou entre deux dates (la date d'arrêt servant de référence).
<br />
Un administrateur (ou des administrateurs), peut créer, éditer ou supprimer les éléments de la table (ou entitée) Utilisateurs, Machines, Pannes, Intervention de maintenance, etc.
<br />
Les intervenants de maintenance, eux, peuvent " entrer " une nouvelle machine si besoin et, surtout, les interventions de maintenance qu'ils ont pratiquées.
<br />
Ce n’est évidemment qu’un cas figure, ou de présentation, possible parmi d’autres. À mon avis, on peut même adapter cette application à d’autres fonctions qu’une GMAO. Cela me faisait plaisir de le faire dans ce cadre-là, après il me semble qu’on peut facilement en faire tout autre chose à partir du moment où l’on recueille des données que l’on désire filtrer.
<br />
En-dessous du tableau des interventions, vous avez une partie  " statistique " concernant notamment le nombre d'interventions, leurs types ainsi que celui des pannes. Ces statistiques s'adaptent en fonction du filtrage, par machine et entre deux dates par exemple. Les pourcentages y sont extraits par rapport au nombre d'interventions pour permettre de dessiner l'histogramme correspondant voire la " courbe ABC " bien connue du personnel de maintenance. 
<br />
On peut aussi tracer l'histogramme et la courbe ABC (organiser les pourcentages de types de pannes dans l'ordre décroissant)  qui correspondent aux résultats filtrés ! On a même droit à l'addition des pourcentages ou pourcentage cumulé (= 100 cela vaut mieux)
<br />
 On peut regarder le fichier <i>capture-ecran-myloc.pdf</i> pour se faire une idée du rendu et des diverses fonctionnalités ainsi que le fichier <i>GMAO-symfony.pdf</i> pour les différentes tables de la base de données et la nature des liaisons qui les relient.
