1) Dans l'onglet réseau on voit le chargement des images à la suite sachant que :
	- au départ 6 images sont chargés en même temps
	- par tlà suite il y en a plus en parallèle, et le chargement des images est de plus en plus rapide.

2) Pour les requêtes d'image les étapes sont
 - envoie de la demande (sent)
 - waiting = attente de la réponse du serveur
 - downloading

3) Pour accélérer le chargement
- mettre les images en cache
- diminuer leurs tailles
- gzip (compression)
- host de chargement différent (pour plus de requêtes simultanés)
- chargement dynamique (du genre ajax) au scroll
