DATOS Y ESTRUCTURA
mysqldump -u root -p  gdd >  gdd.sql
ESTRUCTURA
mysqldump -u root -p --no-data gdd > gdd-data.sql
DATOS
mysqldump -u root -p --no-create-info gdd > gdd.sql
IMPORTAR
mysql -u root -p gdd < gdd.sql
