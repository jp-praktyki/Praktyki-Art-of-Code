import sqlite3

db = sqlite3.connect("newsletter.db")
cursor = db.cursor()

cursor.execute('''
    CREATE TABLE scores(
        username,
        email)
''')

db.commit()
db.close()