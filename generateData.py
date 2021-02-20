import mysql.connector
import csv
mydb = mysql.connector.connect(
    host="localhost",
    user="root",
    password="",
    database="rokkenjima"
)

mycursor = mydb.cursor()

with open('mockdata.csv') as csvfile:
    reader = csv.reader(csvfile)
    sql = "INSERT INTO user (name, phone, email) VALUES(%s, %s, %s)"
    
    for row in reader:
        val = (row[1], row[3], row[2])
        mycursor.execute(sql, val)
        mydb.commit()
