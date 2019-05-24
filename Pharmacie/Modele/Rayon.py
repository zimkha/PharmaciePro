# -*-coding:utf-8 -*
import sqlite3
from sqlite3 import  Error
class Rayon:
    def __init__(self, code , numero):
        self.code = code
        self.numero = numero

    def _get_code(self):
        return  self._code

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

    def create_connect(self):
        try:
            conn = sqlite3.connect('')
            print(sqlite3.version)
        except Error as er:
            print(er)
        finally:
            conn.close()

    """
    Une fonction qui permet de recupere tout les rayons qui existe dans la pharmacie
    Les Functions CRUDs et les function de recherche 
    """
