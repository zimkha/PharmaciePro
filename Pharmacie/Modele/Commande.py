# -*-coding:utf-8 -*
class Commande:
    def __init__(self):
        self.date_commande
        self.fournisseur_id
    def _get_fournisseur(self):
        return self.fournisseur_id
    def _set_fournisseu(self, fournisseur_id):
        self.fournisseur = fournisseur_id
    def _get_date_commande(self):
        return  self.date_commande
    def _set_commande(self, newdate):
        self.date_commande = newdate

    def add_commande(self, commande):
        pass

class LigneCommande:
    def __init__(self):
        self.qte_commande
        self.prix_achatHT
        self.prix_acahatTTC





class Livraison:
    def __init__(self):
        self.dateli_vraison
        self.commande_id
        self.stock_id
