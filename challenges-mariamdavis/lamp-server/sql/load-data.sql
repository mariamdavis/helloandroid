-- file path must be a full path to your CSV file. Loads data into the table
load data local infile '~/lamp-server/data/movies-2014.csv'
into table movies
fields terminated by ','
optionally enclosed by '"'
ignore 1 lines
(title, released, distributer, genre, rating, gross, tickets, imdb_id);



 