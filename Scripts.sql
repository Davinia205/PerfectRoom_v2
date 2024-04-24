
ALTER TABLE perfectroom.checklist_salida modify servicio varchar(2);

ALTER TABLE perfectroom.usuarios add column id_empleado varchar(20);

INSERT INTO perfectroom.checklist_ocupada (id_habitacion, ropa_sucia, papeleras, camas, polvo, suelo, baño, toallas, minibar, amenities, olor, usuario)  values ( 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'dav');
alter table perfectroom.checklist_salida add column servicio varchar(2);
alter table perfectroom.usuarios drop column id_usuario ;
ALTER TABLE perfectroom.habitaciones modify planta INTEGER NOT NULL;

ALTER TABLE perfectroom.checklist_ocupada ADD foreign key (id_habitacion) REFERENCES habitaciones(id_habitacion);

ALTER TABLE Orders
ADD FOREIGN KEY (PersonID) REFERENCES Persons(PersonID);

delete from perfectroom.checklist_salida

ALTER TABLE perfectroom.hotel ADD foreign key (planta) REFERENCES habitaciones(planta);

ALTER TABLE perfectroom.habitaciones ADD foreign key (planta) REFERENCES hotel(planta);
