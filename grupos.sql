#use ppi;	
/*create table grupo(
	idGrupo int not null,
    clave varchar(30),
    horario varchar(30),
    cantidad int,
    primary key (idGrupo),
    iddocente int,
    constraint foreign key (iddocente) 
    references docente(iddocente)    
);


create table listaGrupos(
	idListaGrupo int not null,
    idgrupo int,
    idalumno int,
    primary key (idListaGrupo),
    constraint foreign key (idGrupo)
    references grupo(idGrupo),
	constraint foreign key (idalumno)
    references alumno(idalumno)
);*/

select idListaGrupo, num_control, nom_carrera from listaGrupos as lg
join alumno as a on lg.idalumno=a.idalumno
join carrera as ac on a.idcarrera=ac.idcarrera;


#drop table listaGrupos;

#SELECT alumno.idalumno, usuarios.nom_usuario from alumno
#join usuarios on alumno.idusuario=usuarios.idusuarios;
#select * from listaGrupos;