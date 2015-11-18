create procedure listar_archivos()
select a.REF_ARC,c.NOM_CAR,c.DES_CAR,d.NPR_DTE ,d.LUG_DTE,d.PLN_DTE,d.MAN_DTE,d.LOT_DTE,ar.PRO_AREA,ar.OBS_AREA
from archivo a join carpeta c on (a.ID_CAR=c.ID_CAR) join datos_tecnicos d on (a.ID_DTE=d.ID_DTE) join area ar on(ar.ID_AREA=a.ID_AREA);
