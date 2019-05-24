import sqlite3
from sqlite3 import Error

def create_connect(db_file):
    try:
        conn = sqlite3.connect(db_file)
        print(sqlite3.version)
    except Error as er:
         print(er)
    finally:
        conn.close()

if __name__ == '__main__':
     create_connect()