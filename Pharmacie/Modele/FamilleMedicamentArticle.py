# -*-coding:utf-8 -*
import sqlite3
from sqlite3 import  Error
class Rayon:
    def __init__(self):
        self.code = ''
        self.numero= ''

    def _get_code(self):
        return  self.code

    def _get_numero(self):
        return self.numero

    def _set_code(self, code_new):
        self.code = code_new

    def _set_numero(self, numero_new):
        self.numero = numero_new

    code_rayon = property(_get_code, _set_code)
    numero_rayon = property(_get_numero, _set_numero)

    def __str__(self):
        return "{} {}".format(self.code, self.numero)

    def addInfo(self):
        conn = sqlite3.connect('pharmacie.db')
        crs = conn.cursor()
        crs.execute("INSERT INTO formes (libelle) VALUES('7UYT55')")
        crs.commit()
        crs.close()

    def create_connect(self):
        try:
            conn = sqlite3.connect('')

        except Error as er:
            print(er)
        finally:
            conn.close()

        return conn


class FamilleMedicament:
    def __init__(self, libelle):
        self.libelle = libelle

    def _get_libelle(self):
        return self.libelle
    def _set_libelle(self, new_libelle):
        self.libelle = new_libelle



"""
  la classe Forme qui definie la forme d'un medicament ou article 
"""
class Forme:
    def __init__(self, nameForm):
        self.nameForm = nameForm

    def __getName(self):
        return self.nameForm

    def __setForm(self, newName):
        self.nameForm = newName

    _name = property(__getName, __setForm)

    def __str__(self):
        return self.nameForm


class Article:
    liste = []
    def __index__(self):
        self.libelle
        self.ref
        self.dosage
        self.maxeS
        self.mineS


    def _getLibelle(self):
        return  self.libelle
    def _setLibel(self, libe):
        self.libelle = libe

    def _get_ref(self):
        return  self.ref
    def _set_ref(self, nref):
        self.ref = nref

    def _getdosage(self):
        return self.dosage
    def _setdosage(self, ndosage):
        self.dosage = ndosage

    def _getmineSeuil(self):
        return  self.mineS
    def _setMineseuil(self, mseuil):
        self.mineS = mseuil

    def _get_maxe_seuil(self):
        return self.maxeS
    def _set_maxe_seuil(self, neMax):
        self.maxeS = neMax

    libelle_article = property(_getLibelle, _setLibel)
    ref_article = property(_get_ref, _set_ref)
    dosage_article = property(_getdosage, _setdosage)
    seuil_min = property(_getmineSeuil, _setMineseuil)
    seuil_max = property(_get_maxe_seuil, _set_maxe_seuil)

    def _getAll(self):
        conn = sqlite3.connect('')
        query_cursor  = conn.cursor()
        query_cursor.execute("SELECT * FROM articles")

    def add_article(self, article):
        pass
    def show_article(self, id):
        pass

    def get_article_by_stock(self, idStock):
        pass


if __name__ == "__main__":
    rayon = Rayon()
    code = "dhheyety"
    numero = '1B'
    rayon.addInfo()

