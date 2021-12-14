create table database_tujuan.tabel_tujuan like database_asal.tabel_asal
insert into database_tujuan.tabel_tujuan select * from database_asal.tabel_asal
create table pdam.user like ukk4.user
insert into pdam.user select * from ukk4.user